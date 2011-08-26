<?php
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
	

?>