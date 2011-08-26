<?php
//引入公共模块
	require("foundation/module_event.php");
	require("foundation/module_mypals.php");
	require("foundation/fpages_bar.php");
	require("api/base_support.php");
//引入语言包
	$ef_langpackage=new event_frontlp;
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
//数据读取
	dbtarget('r',$dbServs);
	$dbo=new dbex();
	
	$sql="select * from $t_event where event_id=$event_id";
	$rs=$dbo->getRow($sql);
	$attend=$rs["member_num"];	
	$group_id=$rs["group_id"];
		
	$sql="select count(user_sex) from $t_event_users where event_id=$event_id and user_sex=1";
	$rs=$dbo->getRow($sql);
	$gender_man=$rs["count(user_sex)"];
	
	$sql="select member_count from $t_group where group_id=$group_id";
	$rs=$dbo->getRow($sql);
	$group_count=$rs["member_count"];
//数据处理
	if($group_count!='0'){
		$attend_per=floatval($attend/$group_count)*100;
	}
	else $attend_per=0;
?>