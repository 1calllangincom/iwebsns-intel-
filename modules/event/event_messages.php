<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/event/event_messages.html
 * 如果您的模型要进行修改，请修改 models/modules/event/event_messages.php
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
if(filemtime("templates/default/modules/event/event_messages.html") > filemtime(__file__) || (file_exists("models/modules/event/event_messages.php") && filemtime("models/modules/event/event_messages.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/event/event_messages.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
//引入公共模块
	require("foundation/module_event.php");
	require("foundation/module_mypals.php");
	require("foundation/fpages_bar.php");
	require("api/base_support.php");
	require("foundation/module_users.php");
//引入语言包
	$ef_langpackage=new event_frontlp;
	$m_langpackage=new msglp;
//变量区
	$role='';
	$user_id=get_sess_userid();
	$event_id=intval(get_argg('event_id'));
//权限判断
	
	$status=api_proxy("event_member_by_uid","status",$event_id,$user_id);
	$status=intval($status['status']);
	if($status < 3){
		echo "<script type='text/javascript'>alert(\"$ef_langpackage->ef_no_permission\");window.history.go(-1);</script>";
		exit();
	}
//表定义
	$t_event=$tablePreStr."event";
	$t_event_users=$tablePreStr."event_members";
	$t_group=$tablePreStr."groups";
	$t_users = $tablePreStr."users";
	$t_mypals = $tablePreStr."pals_mine";
	$dbo=new dbex;
//读写分离定义方法
	dbtarget('r',$dbServs);
	

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<base href='<?php echo $siteDomain;?>' />
<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/iframe.css">

</head>
<body id="iframecontent">
<div class="create_button"><a href="modules.php?app=event_info"><?php echo $ef_langpackage->ef_launch_activity;?></a></div>
<h2 class="app_event"><?php echo $ef_langpackage->ef_activity;?></h2>
<div class="tabs">
  <ul class="menu">
    <li><a href="modules.php?app=event_info&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_update_activity;?></a></li>
    <li ><a href="modules.php?app=event_member_manager&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_member_management;?></a></li>
	<li><a href="modules.php?app=event_upload_photo&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_upload_photo;?></a></li>
<li class="active"><a href="modules.php?app=event_messages&event_id=<?php echo $event_id;?>" ><?php echo $ef_langpackage->ef_event_messages;?></a></li>
    		<li ><a href="modules.php?app=event_excel&event_id=<?php echo $event_id;?>" hidefocus="true" ><?php echo $ef_langpackage->ef_event_table;?></a></li>
    		
  </ul>
</div>

<div class="rs_head"><?php echo $ef_langpackage->ef_messages_join;?></div>
<form name="form1"  method="post" action="do.php?act=event_messages_crt">
	 <table class='form_table'>
			<tr>
				<th><?php echo $m_langpackage->m_tit;?>：</th>
				<td><input type="text" class="med-text" name="msTitle" id="msTitle" autocomplete='off' value='<?php echo $ef_langpackage->ef_event_messages;?>：' maxlength="30" /></td>
			</tr><tr><td colspan="2" height="5"></td></tr>
			<tr>
				<th valign="top"><?php echo $m_langpackage->m_cont;?>：</th>
				 <td><textarea maxlength="160" class="med-textarea" name="msContent" id="msContent" onKeyUp="return isMaxLen(this)"></textarea></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
           		 <td class="<?php echo $b_can;?>">
           		 <input name="event_id" type="hidden" value="<?php echo $event_id;?>"></input>
           		    <input class="regular-btn" type="submit" value="<?php echo $ef_langpackage->ef_messages_send;?>" />&nbsp;&nbsp;&nbsp;&nbsp;
				 </td>
				 
		    </tr>
		</table>
       </form>
</body>
</html><?php } ?>