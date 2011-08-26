<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/users/user_reg.html
 * 如果您的模型要进行修改，请修改 models/modules/users/user_reg.php
 *
 * 修改完成之后需要您进入后台重新编译，才会重新生成。
 * 如果您开启了debug模式运行，那么您可以省去上面这一步，但是debug模式每次都会判断程序是否更新，debug模式只适合开发调试。
 * 如果您正式运行此程序时，请切换到service模式运行！
 *
 * 如有您有问题请到官方论坛（http://tech.jooyea.com/bbs/）提问，谢谢您的支持。
 */
?><?php
/*
 * 此段代码由debug模式下生成运行，请勿改动！
 * 如果debug模式下出错不能再次自动编译时，请进入后台手动编译！
 */
/* debug模式运行生成代码 开始 */
if(!function_exists("tpl_engine")) {
	require("foundation/ftpl_compile.php");
}
if(filemtime("templates/default/modules/users/user_reg.html") > filemtime(__file__) || (file_exists("models/modules/users/user_reg.php") && filemtime("models/modules/users/user_reg.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/users/user_reg.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
 //引入公共模块
 require("foundation/module_users.php");

	require("foundation/module_event.php");
	require("api/base_support.php");
//语言包引入
$pu_langpackage=new publiclp;
$u_langpackage=new userslp;
$l_langpackage=new loginlp;
$ef_langpackage=new event_frontlp;

//引入语言包
$reg_langpackage=new reglp;
$u_langpackage=new userslp;
$regInfo_root="langpackage/".$langPackagePara."/regInfo.php";
$regInfo=file_get_contents($regInfo_root);
$regInfo=$regInfo=='' ?  "<center><b>".$reg_langpackage->re_none_ser."</b></center>":$regInfo;
$invite_code='';
//是否可以注册
$is_show=1;
if($allowReg==false){
	$is_show=0;
	$error_str=$u_langpackage->u_not_open_register;
}else{
	if($inviteCode==1){
		$invite_code=get_argg('invite_code');
		if(strlen($invite_code)==$inviteCodeLength){
			$t_invite_code=$tablePreStr."invite_code";
			$dbo=new dbex;
			dbtarget('r',$dbServs);
			$now_time=time();
			$left_time=$inviteCodeLife*60*60;
			$sql="delete from $t_invite_code where $now_time-add_time > $left_time";
			$dbo->exeUpdate($sql);
			
			$sql="select id from $t_invite_code where code_txt='$invite_code'";
			$is_check=$dbo->getRow($sql);
			if(empty($is_check)){
				$error_str=$u_langpackage->u_invite_incorrect_or_failed;
				$is_show=0;
			}else{
				$is_show=1;
			}
		}else{
			$is_show=0;
			$error_str=$u_langpackage->u_need_invite_register;
		}
	}
}
	dbtarget('r',$dbServs);
	$dbo=new dbex;
	
//获取用户自定义属性列表
	$information_rs=array();
	$information_rs=userInformationGetList($dbo,'*');
	
	//用户自定义资料预定义
	$user_id='0';
	$info_c_rs=array();
	$info_c_rs=userInformationCombine($dbo,$user_id);
	
	$event_info = array('event_id'=>'','group_id'=>'','user_id'=>'','user_name'=>'','title'=>'','type_id'=>'','province'=>'','city'=>'','location'=>'','deadline'=>'','start_time'=>'','end_time'=>'','public'=>'2','detail'=>'','template'=>'','limit_num'=>'0','verify'=>'','allow_pic'=>'1','allow_post'=>'1','allow_invite'=>'1','allow_fellow'=>'');
	
	$event_group_rs = api_proxy("event_sort_by_group");
	$event_group_name = event_group_checkbox($event_group_rs, $event_info['group_id']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $siteName;?></title>
<base href='<?php echo $siteDomain;?>' />
<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/layout.css">
<script language="javascript" src="servtools/ajax_client/ajax.js"></script>
<script language="javascript" src="skin/default/js/jooyea.js"></script>
<script type="text/javascript" language="javascript" src="servtools/dialog/zDialog.js"></script>
<script type="text/javascript" language="javascript" src="servtools/dialog/zDrag.js"></script>
</head>
<body id="index">
<?php require('uiparts/guestheader.php');?>
<?php if($is_show==1){?>
<script language="javascript">
function ser_item(){
	var diag = new Dialog();
	diag.Top="50%";
	diag.Left="50%";
	diag.Title = "会员协议";
	diag.InnerHtml= '<div style="text-align:left"><?php echo $regInfo;?></div>';
	diag.OKEvent = function(){diag.close();};
	diag.show();
}

function goLogin(){
	Dialog.confirm("<?php echo $pu_langpackage->pu_login;?>",function(){top.location="<?php echo $indexFile;?>";});
}



function ajax_check(obj,type_id){
	if(type_id=='email'){
		div_value='user_email_message';
		suc_str='<?php echo $u_langpackage->u_reg_email_available;?>';
	}
	var check=new Ajax();
	check.getInfo("do.php","get","app","act=reg&ajax=1&"+$(obj).id+"="+$(obj).value,function(c){if(c){refuse_submit(type_id,c);}else{pass_submit(type_id,suc_str);}});
}

function refuse_submit(type_id,c){
	if(type_id=='email'){
		user_email.className = 'ipt ipt_focus'
		user_email_message.style.color = 'red';
		user_email_message.innerHTML = c;
		user_email_status = true;
	}else{
		veriCode.className = 'ipt ipt_focus'
		veriCode_message.style.color = 'red';
		veriCode_message.innerHTML = c;
		user_veriCode_status = true;
	}
}

function pass_submit(type_id,c){
	if(type_id=='email'){
		user_email.className = 'ipt ipt_nomal';
		user_email_message.style.color = 'green';
		user_email_message.innerHTML = c;
		user_email_status = true;
	}else{
		veriCode.className = 'ipt ipt_nomal';
		veriCode_message.style.color = 'green';
		veriCode_message.innerHTML = c;
		user_veriCode_status = true;
	}
}
</script>
<div class="container">
	<div class="wrapper">
        <div class="main">
            <div class="reg_container">
                <ul class="regedit">
                <h2><?php echo $u_langpackage->u_reg_fast_registration;?></h2>
                  <form action="javascript:void(0);" id="reg_form" name="reg_form" method="post" onSubmit="return checkForm();">
                    <input type='hidden' name='invite_code' value='<?php echo $invite_code;?>' />
                    
                    <li><label><?php echo $u_langpackage->u_reg_wwid;?>：</label></li>
                    <li>
                        <input class="ipt ipt_nomal" name="user_wwid" id="user_wwid" />
                        <div id="user_wwid_message" class="hint highlight"></div>
                    </li>
                      <li class="gray"><?php echo $u_langpackage->u_reg_wwid_info;?>。</li>
                    
                    <li><label><?php echo $u_langpackage->u_reg_mailbox;?>：</label></li>
                    <li>
                        <input class="ipt ipt_nomal" name="user_email" id="user_email" />
                        <div id="user_email_message" class="hint highlight"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_common_mail;?>。</li>
                    <li><label><?php echo $u_langpackage->u_uname;?>：</label></li>
                    <li>
                      <input class="ipt ipt_nomal" name="user_name" autocomplete="off" />
                      <div id="user_name_message" class="hint"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_username_not_modified;?>。</li>
                    <li><label><?php echo $u_langpackage->u_reg_password;?>：</label></li>
                    <li>
                      <input class="ipt ipt_nomal" type="password" name="user_password" id="user_password" autocomplete="off" />
                      <div id="user_password_message" class="hint"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_6and20_symbols;?>。 </li>
                    <li><label><?php echo $u_langpackage->u_reg_repassword;?>：</label></li>
                    <li>
                      <input class="ipt ipt_nomal" type="password" name="user_repassword" id="user_repassword" />
                      <div id="user_repassword_message" class="hint highlight"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_repeat_password;?></li> </li>
                    <li><label><?php echo $u_langpackage->u_reg_sex;?>：</label>
                      <input type='radio' value='1' style="vertical-align:middle" name='user_sex' /><?php echo $u_langpackage->u_man;?>
                      <input type='radio' value='0' style="vertical-align:middle" name='user_sex' /><?php echo $u_langpackage->u_wen;?>
                      <div id="user_repassword_message" class="hint highlight"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_sex_not_modified;?>。 </li>
                   
                            <!--
                            
                    <li><label><?php echo $u_langpackage->u_reg_factory;?>：</label></li>
                    <li>
                        <input class="ipt ipt_nomal" name="user_factory" id="user_factory" />
                        <div id="user_factory_message" class="hint highlight"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_factory_not_modified;?>。</li>
                    
                    <li><label><?php echo $u_langpackage->u_reg_department;?>：</label></li>
                    <li>
                        <input class="ipt ipt_nomal" name="user_department" id="user_department" />
                        <div id="user_department_message" class="hint highlight"></div>
                    </li>
                    <li class="gray"><?php echo $u_langpackage->u_reg_department_not_modified;?>。</li>
                            
                    -->
                    
                    <li><label><?php echo  $u_langpackage->u_reg_club;?>：</label></li>
                    <li>
                     <?php echo $event_group_name;?>
                     <div id="user_club_message" class="hint highlight"></div>
                     </li>
                     <li class="gray"><?php echo $u_langpackage->u_reg_club_gray;?></li>
                    <?php foreach($information_rs as $val){?>
            	<li>
            		<label><?php echo  $val['info_name'] ;?>：</label></li>
                <li><?php echo getInformationValue($dbo,$val['input_type'],$val['info_values'],$val['info_id'],$user_id);?></li>
              
         	<?php }?>
         	<li class="gray"><input type='radio' value='1' style="vertical-align:middle" name='telephone' />公开                      <input type='radio' value='0' style="vertical-align:middle" name='telephone' />仅管理员可见</li>
<!--                     <li><label><?php echo $u_langpackage->u_reg_code;?>：</label></li>-->
<!--                    <li>-->
<!--                      <input class="ipt ipt_nomal" type="text" style="width:80px; margin-top:-36px;" name="veriCode" id="veriCode" maxlength="5" onkeyup="javascript:if(this.value.length==5){ajax_check('veriCode','vocode')}" /><img style=" margin-left:12px;" border="0" src="servtools/veriCodes.php" id="verCodePic" /><a href="javascript:getVerCode();"><?php echo $u_langpackage->u_not_see;?>？</a>-->
<!--                      <div id="user_veriCode_message" class="hint highlight"></div>-->
<!--                      <li class="gray"><?php echo $u_langpackage->u_reg_photo_characters;?></li>-->
<!--                            </li>-->
 <li><label><?php echo  $u_langpackage->u_reg_paper;?>：</label></li>
 <li>
					<textarea  style="height:300px" readonly="readonly" row="100" cols="55">Employee/Team Liability Waiver Form
英特尔成都员工俱乐部/理想的工作场所活动
员工/团队责任免除书

I have read this document through and I fully understand these items below:
我已经阅读了以下文件并且我清楚明白这些条款的意思：
1.I decide to join in the Social Club/GPTW Turbo activity as an individual member at my own discretion.
我决定以个人名义自愿参加员工俱乐部/理想的工作场所的活动。
2.I understand that the purpose of a Social Club/GPTW Turbo activity is its self-organized by the members. No activity could be construed as organized by Intel or for the Intel commercial purpose.
我明白员工俱乐部/理想的工作场所的活动是其成员自发组织的。任何活动都不是英特尔组织发起或者与英特尔商业相关为目的的。
3.Intel Chengdu Social Club and/or GPTW Turbo organizing groups hold no responsibility to any circumstance happened during the activities held, including but not limited to any personal injury, medical emergency and/or financial loss.
英特尔员工俱乐部/理想的工作场所活动的组织团队不会对活动中发生的任何情况负责，包括但不仅限于人身伤害，紧急医疗事故以及/或财产损失。
4.The members should be aware of and pay attention to the potential risk in the activities. Any member should be responsible for his/her own safety in the activities held in Social Club and/or as part of a GPTW Turbo.
参加员工俱乐部/理想的工作场所活动的成员应该注意在活动中存在的各种潜在风险。任何人都应该在其活动中为自己的安全负责。
5.Leader(s) of the Social Club/GPTW Turbo activity will provide some basic advices to the members, but these advices could not be considered as a complete professional guide or skills.
员工俱乐部/理想的工作场所活动的相关负责人将会为参加活动的员工提供一些基本的建议但这些不得被认为是专业的指导或技能。
6.No activity of the Social Club/GPTW Turbo could be construed as taking place during the working time.
任何员工俱乐部/理想的工作场所的活动都不得在工作时间进行。
					</textarea></li>
					<li><label><?php echo  $u_langpackage->u_reg_paper_under;?>：</label></li>
					<li><textarea style="height:50px" row="100" cols="55"><?php echo  $u_langpackage->u_reg_me;?></textarea></li>
                   
                   
                      <li><label><?php echo $u_langpackage->u_reg_must;?>：<input class="ipt ipt_nomal" type="checkbox" name="must" id="must" /></label></li>
                    <li>
                        
                        <div id="user_must_message" class="hint highlight"></div>
                    </li>
                      <li class="gray"><?php echo $u_langpackage->u_reg_must_info;?>。</li>
                    
                    
                    <li><input class="button" type="submit" value="<?php echo $u_langpackage->u_reg_registration;?>" /><span><?php echo $u_langpackage->u_reg_accepted;?><a href="javascript:ser_item();"><?php echo $u_langpackage->u_reg_user_agreement;?></a><?php echo $u_langpackage->u_reg_and;?><?php echo $u_langpackage->u_reg_registration;?></span></li>
                    </form>
                </ul>
                <div class="clear"></div>
            </div>
  		</div>  
  </div>  
</div>  
<script language="JavaScript">
//检测同意书
var user_must = document.getElementsByName('must')[0];
var user_must_message = $('user_must_message');
var user_must_status = false;
user_must.onmouseover=function(){user_must.className = 'ipt ipt_focus'};
user_must.onmouseout = function(){user_must.className = 'ipt ipt_nomal'};
user_must.onblur = function(){
	var user_must_size=check_code_size(user_must.value);
	if(!user_must.checked) {
		user_must.className = 'ipt ipt_focus'
		user_must_message.style.color = 'red';
		user_must_message.innerHTML = '* <?php echo $u_langpackage->u_reg_fill_must;?>';
		user_must_status = false;
	}else {
		user_must.className = 'ipt ipt_nomal';
		user_must_message.style.color = 'green';
		user_must_message.innerHTML = '<?php echo $u_langpackage->u_reg_must_available;?>';
		user_must_status = true;
	}
};
// 检测会员WWID
var user_wwid = document.getElementsByName('user_wwid')[0];
var user_wwid_message = $('user_wwid_message');
var user_wwid_status = false;
var user_wwid_reg = /^[0-9]*$/;
user_wwid.onmouseover=function(){user_wwid.className = 'ipt ipt_focus'};
user_wwid.onmouseout = function(){user_wwid.className = 'ipt ipt_nomal'};
user_wwid.onblur = function(){
	var user_wwid_size=check_code_size(user_wwid.value);
	if(user_wwid.value=='') {
		user_wwid.className = 'ipt ipt_focus'
		user_wwid_message.style.color = 'red';
		user_wwid_message.innerHTML = '* <?php echo $u_langpackage->u_reg_fill_wwid;?>';
		user_wwid_status = false;
	}else if(user_wwid_size!=8 || !user_wwid_reg.test(user_wwid.value)) {
		user_wwid.className = 'ipt ipt_error';
		user_wwid.onmouseout='ipt ipt_error';
		user_wwid_message.style.color = 'red';
		user_wwid_message.innerHTML = '* <?php echo $u_langpackage->u_reg_wwid_format_error;?>';
		user_wwid_status = false;
	}else {
		user_wwid.className = 'ipt ipt_nomal';
		user_wwid_message.style.color = 'green';
		user_wwid_message.innerHTML = '<?php echo $u_langpackage->u_reg_wwid_available;?>';
		user_wwid_status = true;
	}
};
// 检测会员用户名
var user_name = document.getElementsByName('user_name')[0];
var user_name_message = $('user_name_message');
var user_name_status = false;
var user_name_reg = /^[A-Za-z0-9_\u4E00-\u9FA5]*$/;	//用正则表达式/[\u4E00-\u9FA5]/表示中文
user_name.onmouseover = function(){user_name.className = 'ipt ipt_focus'};
user_name.onmouseout = function(){user_name.className = 'ipt ipt_nomal'};
user_name.onblur = function(){
	var user_name_size=check_code_size(user_name.value);
	if(user_name.value=='') {
		user_name.className = 'ipt ipt_focus'
		user_name_message.style.color = 'red';
		user_name_message.innerHTML = '* <?php echo $u_langpackage->u_reg_fill_username;?>';
		user_name_status = false;
	}else if(user_name_size < 4 || user_name_size > 14) {
		user_name.className = 'ipt ipt_error';
		user_name.onmouseout='ipt ipt_error';
		user_name_message.style.color = 'red';
		user_name_message.innerHTML = '* <?php echo $u_langpackage->u_reg_username_format_error;?>';
		user_name_status = false;
	} else if(!user_name_reg.test(user_name.value)){
		user_name.className = 'ipt ipt_error';
		user_name.onmouseout='ipt ipt_error';
		user_name_message.style.color = 'red';
		user_name_message.innerHTML = '*<?php echo $u_langpackage->u_special_characters_disable;?>';
		user_name_status = false;
	}else {
		user_name.className = 'ipt ipt_nomal';
		user_name_message.style.color = 'green';
		user_name_message.innerHTML = '<?php echo $u_langpackage->u_reg_username_available;?>';
		user_name_status = true;
	}
};

// 检测邮箱
var user_email = document.getElementsByName('user_email')[0];
var user_email_message = $('user_email_message');
var user_email_status = false;
var user_email_reg = /^[0-9a-zA-Z_\-\.]+@intel+\.com$/;
user_email.onmouseover = function(){user_email.className = 'ipt ipt_focus'};
user_email.onmouseout = function(){user_email.className = 'ipt ipt_nomal'};
user_email.onblur = function(){
	if(user_email.value=='') {
		user_email.className = 'ipt ipt_focus'
		user_email_message.style.color = 'red';
		user_email_message.innerHTML = '* <?php echo $u_langpackage->u_reg_fill_email;?>';
		user_email_status = false;
	} else if(!user_email.value.match(user_email_reg)) {
		user_email.className = 'ipt ipt_error';
		user_email.onmouseout = 'ipt ipt_error'
		user_email_message.style.color = 'red';
		user_email_message.innerHTML = '* <?php echo $u_langpackage->u_reg_email_format_error;?>';
		user_email_status = false;
	} else {
		ajax_check(user_email,'email');
	}
};


// 检测密码
var user_password = document.getElementsByName('user_password')[0];
var user_password_message = $('user_password_message');
var user_password_status = false;
user_password.onmouseover = function(){user_password.className = 'ipt ipt_focus'};
user_password.onmouseout = function(){user_password.className = 'ipt ipt_nomal'};
user_password.onblur = function(){
	if(user_password.value=='') {
		user_password.className = 'ipt ipt_focus'
		user_password_message.style.color = 'red';
		user_password_message.innerHTML = '* <?php echo $u_langpackage->u_reg_fill_password;?>';
		user_password_status = false;
	} else if(user_password.value.length<6 || user_password.value.length>16) {
		user_password.className = 'ipt ipt_error'
		user_password.onmouseout='ipt ipt_error';
		user_password_message.style.color = 'red';
		user_password_message.innerHTML = '* <?php echo $u_langpackage->u_reg_password_format_error;?>';
		user_password_status = false;
	} else {
		user_password.className = 'ipt ipt_nomal';
		user_password_message.style.color = 'green';
		user_password_message.innerHTML = '<?php echo $u_langpackage->u_reg_password_format_correct;?>';
		user_password_status = true;
	}
};


// 检测确认密码
var user_repassword = document.getElementsByName('user_repassword')[0];
var user_repassword_message = $('user_repassword_message');
var user_repassword_status = false;
user_repassword.onmouseover = function(){user_repassword.className = 'ipt ipt_focus'};
user_repassword.onmouseout = function(){user_repassword.className = 'ipt ipt_nomal'};
user_repassword.onblur = function(){
	if(user_repassword.value=='') {
		user_repassword.className = 'ipt ipt_focus'
		user_repassword_message.style.color = 'red';
		user_repassword_message.innerHTML = '* <?php echo $u_langpackage->u_reg_confirm_password;?>';
		user_repassword_status = false;
	} else if(user_repassword.value!=user_password.value) {
		user_repassword.className = 'ipt ipt_error'
		user_repassword.onmouseout='ipt ipt_error';
		user_repassword_message.style.color = 'red';
		user_repassword_message.innerHTML = '* <?php echo $u_langpackage->u_reg_password_inconsistent;?>';
		user_repassword_status = false;
	} else if(user_repassword.value.length<6 || user_repassword.value.length>16) {
		user_repassword.className = 'ipt ipt_error'
		user_repassword.onmouseout='ipt ipt_error';
		user_repassword_message.style.color = 'red';
		user_repassword_message.innerHTML = '* <?php echo $u_langpackage->u_reg_password_format_error;?>';
		user_repassword_status = false;
	} else {
		user_repassword.className = 'ipt ipt_nomal'
		user_repassword_message.style.color = 'green';
		user_repassword_message.innerHTML = '<?php echo $u_langpackage->u_reg_cpassword_format_correct;?>';
		user_repassword_status = true;
	}
};


function checkForm(){
	user_wwid.onblur();
	user_name.onblur();
	user_email.onblur();
	user_password.onblur();
	user_repassword.onblur();
	user_must.onblur();
	if(user_must_status && user_wwid_status && user_name_status && user_email_status && user_password_status && user_repassword_status) {
		$("reg_form").action="do.php?act=reg";
		return true;
	} else {
		return false;
	}
}
</script>
<?php }?>

<?php if($is_show==0){?>
<div class="error_box reg_error">
  <h2><?php echo $error_str;?></h2>
  <p><?php echo $ah_langpackage->ah_system_will;?><span id="skip">5</span><?php echo $ah_langpackage->ah_seconds_return;?></p>
  <p><a href="<?php echo $siteDomain;?><?php echo $indexFile;?>" title="<?php echo $ah_langpackage->ah_click_return_home;?>"><?php echo $ah_langpackage->ah_click_return_home;?>&gt;&gt;</a></p>
</div>
<script type='text/javascript'>
function countDown(secs,surl){
if($("skip")){
	$("skip").innerHTML=secs;
	--secs>0?setTimeout("countDown("+secs+",'"+surl+"')",1000):location.href=surl;
	}
}
countDown(5,'<?php echo $siteDomain;?><?php echo $indexFile;?>');
</script>
<?php }?>
<?php require('uiparts/footor.php');?>

</body>
</html><?php } ?>