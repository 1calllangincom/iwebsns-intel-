<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/msgboard/msgboard_more.html
 * 如果您的模型要进行修改，请修改 models/modules/msgboard/msgboard_more.php
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
if(filemtime("templates/default/modules/msgboard/msgboard_more.html") > filemtime(__file__) || (file_exists("models/modules/msgboard/msgboard_more.php") && filemtime("models/modules/msgboard/msgboard_more.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/msgboard/msgboard_more.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
	//引入语言包
	$mb_langpackage=new msgboardlp;

	//变量取得
	$url_uid= intval(get_argg('user_id'));
	$ses_uid=get_sess_userid();

	//引入模块公共权限过程文件
	$is_self_mode='partLimit';
	$is_login_mode='';
	require("foundation/auser_validate.php");
	require("foundation/fpages_bar.php");
	require("foundation/module_users.php");
	require("foundation/fcontent_format.php");
	require("api/base_support.php");
	$mes_rs=array();
	$page_num=intval(get_argg('page'));
	$mes_rs=api_proxy("msgboard_self_by_uid","*",$userid);
	$isNull=$mes_rs ? 0:1;

	if($is_self=='Y'){
		api_proxy("msgboard_set",$ses_uid);
		$msg_title=$mb_langpackage->mb_msgb;
	}else{
		$holder_name=get_hodler_name($url_uid);
		$msg_title=str_replace("{holder}",$holder_name,$mb_langpackage->mb_who_msg);
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<base href='<?php echo $siteDomain;?>' />
<link rel="stylesheet" href="skin/<?php echo $skinUrl;?>/css/iframe.css" />
<script type="text/javascript" language="javascript" src="skin/default/js/jooyea.js"></script>
<script type='text/javascript'>
  function unitinfocheck(){
	  var mood_text=trim(document.getElementById("msgboard").value);
		if(mood_text==''){
			parent.Dialog.alert("<?php echo $mb_langpackage->mb_no;?>");
			return false;
		}else{
			return true;
		}
  }
</script>
</head>
<body id="iframecontent">
<form method="post" onsubmit="return unitinfocheck();" action="do.php?act=msgboard_send&user_id=<?php echo $userid;?>"  name="myform" >
	<input type="hidden" name="to_user_id" id="user_id" value="" />
	<h2 class="app_message"><?php echo $msg_title;?></h2>
	<div class="msg left" style="margin-top:25px;">
		<p><span><?php echo $mb_langpackage->mb_you_can_also;?><input disabled="disabled" value="150" id="msgnum"><?php echo $mb_langpackage->mb_word;?></span><?php echo $mb_langpackage->mb_con;?></p>
		<p><textarea name="msgboard" id="msgboard" maxlength="150" onpropertychange="javascript:$('msgnum').value=''+(150-this.value.length)+'';" onkeyup="return isMaxLen(this)"></textarea></p>
		<script>
		var $=function(o){return document.getElementById(o)};if(window.addEventListener){$('msgboard').addEventListener('input',function(){$('msgnum').value=''+(150-this.value.length)+'';}, false);}
        </script>
		<p><a class="em_bg left" href="javascript:void(0);" onclick="showFace(this,'face_list_menu','msgboard');"  hidefocus="true"><?php echo $mb_langpackage->mb_face;?></a><input class="button right" name="" type="submit" value="<?php echo $mb_langpackage->mb_con;?>" /></p>
	</div>
    <div class="clear"></div>
	<?php foreach($mes_rs as $val){?>
		<dl class="msg_list">
			<div class="avatar"><a target="_blank" href='home.php?h=<?php echo $val['from_user_id'];?>'><img src="<?php echo $val['from_user_ico'];?>" /></a></div>
			<dt><span><a target="_blank" href='home.php?h=<?php echo $val['from_user_id'];?>'><?php echo filt_word($val['from_user_name']);?></a></span><span>[<?php echo $val['add_time'];?>]</span></dt>
			<dd class="msg_list_content"><?php echo filt_word(get_face($val['message']));?></dd>
			<?php if($is_self=='Y'){?>
			<dd>
				<span><a href="javascript:void(0);" onclick=parent.leave_message("<?php echo $val['from_user_name'];?>","<?php echo $val['from_user_id'];?>");><?php echo $mb_langpackage->mb_res;?></a></span>
				<span>|</span>
				<span><a href="do.php?act=msgboard_del&user_id=<?php echo $userid;?>&mess_id=<?php echo $val['mess_id'];?>" onclick='return confirm("<?php echo $mb_langpackage->mb_delete_remaining;?>？");'><?php echo $mb_langpackage->mb_del;?></a></span>
			</dd>
			<?php }?>
		</dl>
	<?php }?>
	<?php page_show($isNull,$page_num,$page_total);?>
</form>
<div id="face_list_menu" class="emBg" style="display:none;z-index:100;"></div>
</body>
</html><?php } ?>