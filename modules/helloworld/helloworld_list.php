<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/helloworld/helloworld_list.html
 * 如果您的模型要进行修改，请修改 models/modules/helloworld/helloworld_list.php
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
if(filemtime("templates/default/modules/helloworld/helloworld_list.html") > filemtime(__file__) || (file_exists("models/modules/helloworld/helloworld_list.php") && filemtime("models/modules/helloworld/helloworld_list.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/helloworld/helloworld_list.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
	//引入公共模块
	require("foundation/auser_validate.php");
	require("foundation/fpages_bar.php");

	//表定义
	$t_helloworld=$tablePreStr."helloworld";
 
	//变量区
	$ses_uid=get_sess_userid();
	$is_self_mod='partLimit';
	
	//读定义
	dbtarget('r',$dbServs);
	$dbo=new dbex;
	
	$sql="select * from $t_helloworld";
	
	$hello_list=$dbo->getRs($sql);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>
<body id="iframecontent">
	<h1 style="text_align=center">Hello World</h1>
	<div class="main_right_title">
	<table width="100%">
	<tr><td>编号</td>
	<td>信息</td>
	<td>操作</td></tr>
	<?php foreach($hello_list as $rs){?>
	<tr><td><?php echo $rs['id'];?></td>
	<td><?php echo $rs['msg'];?></td>
	<td><a href="do.php?act=hello_del&hello_id=<?php echo $rs['id'];?>">删除</a></td></tr>
	<?php }?>
	</table></div>
	<form action="do.php?act=hello_add" methon="" enctype="multipart/form-data">
	<input  name="act" />
	信息：<input name="hello_msg" />
	
	<br>
	</br>
	<input type="submit" value="提交" /></form>
</body>
</html><?php } ?>