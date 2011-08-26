<?php
include(dirname(__file__)."/../includes.php");

//活动基础api函数
function event_sort_by_self(){
	global $tablePreStr;
	$t_event_type=$tablePreStr."event_type";
	$result_rs=array();
	$dbo=new dbex;
	dbplugin('r');
	$sql="select * from $t_event_type order by display_order asc";
//	$key="group_sort/list/order_num/0/all";
//	$key_mt='group_sort/list/order_num/0/all_mt';
//	$result_rs=model_cache($key,$key_mt,$dbo,$sql);
	if(empty($result_rs)){
		$result_rs=$dbo->getRs($sql);
	}
	return $result_rs;
}

function event_sort_by_group(){
	global $tablePreStr;
	$t_event_group=$tablePreStr."groups";
	$result_rs=array();
	$dbo=new dbex;
	dbplugin('r');
	$sql="select $t_event_group.group_name,$t_event_group.group_id from $t_event_group";
//	$key="group_sort/list/order_num/0/all";
//	$key_mt='group_sort/list/order_num/0/all_mt';
//	$result_rs=model_cache($key,$key_mt,$dbo,$sql);
	if(empty($result_rs)){
		$result_rs=$dbo->getRs($sql);
	}
	return $result_rs;
}
?>