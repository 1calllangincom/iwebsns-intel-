<?php
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
