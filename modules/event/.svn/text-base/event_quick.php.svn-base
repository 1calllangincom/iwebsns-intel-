<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/event/event_quick.html
 * 如果您的模型要进行修改，请修改 models/modules/event/event_quick.php
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
if(filemtime("templates/default/modules/event/event_quick.html") > filemtime(__file__) || (file_exists("models/modules/event/event_quick.php") && filemtime("models/modules/event/event_quick.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/event/event_quick.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php

$user_id=get_sess_userid();

$t_users=$tablePreStr."users";
dbtarget('r', $dbServs);
$dbo=new dbex();
if($user_id!=''){
	$sql="select wwid from $t_users where user_id=$user_id";
	$row=$dbo->getRow($sql);
}
if(isset($row['wwid'])){
	$wwid=$row['wwid'];
}else{
	$wwid='';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>快速报名</title>
<base href='<?php echo $siteDomain;?>' />
<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/layout.css">
<script language="javascript" src="servtools/ajax_client/ajax.js"></script>
<script language="javascript" src="skin/default/js/jooyea.js"></script>
<script type="text/javascript" language="javascript" src="servtools/dialog/zDialog.js"></script>
<script type="text/javascript" language="javascript" src="servtools/dialog/zDrag.js"></script>
</head>
<body id="index">
<script type="text/javascript" language="javascript" src="skin/default/js/jy.js"></script>


<div class="head">

    <h1><a href="index.php"><img alt="jooyea" src="skin/<?php echo $skinUrl;?>/images/snslogo.gif"></a></h1>

</div>

<div class="clear"></div>

<div class="top_bg">

	<div class="nav">

	  <span class="left">

	    <a href="index.php">首页</a>

	    <a href="modules.php?app=square">俱乐部广场</a>

	    <a href="index.php?tg=search_pals_list&online=1">看谁在线</a>

	    <a href="help/help.html">帮助</a>

		</span>

	 

	</div>

</div>
<div class="container">

	<div class="wrapper">
        <div class="main">
            <div class="reg_container">
                <ul class="regedit">
                <h2>快速报名</h2>
                  <form action="javascript:void(0);" id="reg_form" name="reg_form" method="post" onSubmit="return checkForm();">
                  <li><label>活动编号</label></li>
                  <li>
                        <input class="ipt ipt_nomal" name="group_id" id="group_id" />
                        <div id="group_id_message" class="hint highlight"></div>
                    </li>
                      <li class="gray">编号在发给你的邮件中的活动通知中</li>
                    <li><label>WWID：</label></li>
                    <li>
                        <input class="ipt ipt_nomal" name="user_wwid" id="user_wwid" value="<?php echo $wwid;?>" />
                        <div id="user_wwid_message" class="hint highlight"></div>
                    </li>
                      <li class="gray">请输入8位WWID</li>
                      <li><input class="button" type="submit" value="提交"></input></li>
                    </form>
                </ul>
                <div class="clear"></div>

            </div>

  		</div>  

  </div>  

</div>  
<script type="text/javascript">

	function set_cookie_lp(lp_str){

		document.cookie = "lp_name=" + escape(lp_str);

		window.location.reload();

	}

</script>
<script language="JavaScript">
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
		user_wwid_message.innerHTML = '* 必须填写wwid';
		user_wwid_status = false;
	}else if(user_wwid_size!=8 || !user_wwid_reg.test(user_wwid.value)) {
		user_wwid.className = 'ipt ipt_error';
		user_wwid.onmouseout='ipt ipt_error';
		user_wwid_message.style.color = 'red';
		user_wwid_message.innerHTML = '* 填写的WWID格式不正确';
		user_wwid_status = false;
	}else {
		user_wwid.className = 'ipt ipt_nomal';
		user_wwid_message.style.color = 'green';
		user_wwid_message.innerHTML = 'WWID可用';
		user_wwid_status = true;
	}
};
//检测group_id
var group_id = document.getElementsByName('group_id')[0];
var group_id_message = $('group_id_message');
var group_id_status = false;
var group_id_reg = /^[0-9]*$/;
group_id.onmouseover=function(){group_id.className = 'ipt ipt_focus'};
group_id.onmouseout = function(){group_id.className = 'ipt ipt_nomal'};
group_id.onblur = function(){
	var group_id_size=check_code_size(group_id.value);
	if(group_id.value=='') {
		group_id.className = 'ipt ipt_focus'
		group_id_message.style.color = 'red';
		group_id_message.innerHTML = '* 必须填写活动编号';
		group_id_status = false;
	}else if(!group_id_reg.test(group_id.value)) {
		group_id.className = 'ipt ipt_error';
		group_id.onmouseout='ipt ipt_error';
		group_id_message.style.color = 'red';
		group_id_message.innerHTML = '* 填写的活动编号为数字';
		group_id_status = false;
	}else {
		group_id.className = 'ipt ipt_nomal';
		group_id_message.style.color = 'green';
		group_id_message.innerHTML = '活动编号可用';
		group_id_status = true;
	}
};
function checkForm(){
	user_wwid.onblur();
	group_id.onblur();

	if(user_wwid_status && group_id_status) {
		
		$("reg_form").action="do.php?act=event_quick";

		return true;

	} else {
		return false;
	}
}
</script>

<div class="foot">

	<a href="about/about.html">关于我们</a>

	<a href="about/privacy.html">隐私安全</a>

	<a href="http://bbs.cd.intel.com/bbs/index.php">Intel Chengdu BBS</a>

	<a href="mailto:haomai.wang@intel.com">联系邮件</a></div>

<div style="display: none;" class="emBg" id="face_list_menu"></div>

<div id="append_parent"></div>

</body>

<?php } ?>