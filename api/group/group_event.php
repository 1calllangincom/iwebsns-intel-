<?php
include(dirname(__file__)."/../includes.php");

//群组基础api函数
function group_event_base($fields="*",$condition="",$get_type="",$num="",$by_col="start_time",$order="asc",$cache="",$cache_key=""){
	global $tablePreStr;
	global $page_num;
	global $page_total;
	$t_group_event=$tablePreStr."event";
	$result_rs=array();
	$dbo=new dbex;
  dbplugin('r');
	$by_col = $by_col ? " $by_col " : " start_time ";
	$order = $order ? $order:"asc";
	$get_type = $get_type=='getRow' ? "getRow":"getRs";
  $sql=" select $fields from $t_group_event where $condition order by $by_col $order ";
	if(empty($result_rs)){
  	$dbo->setPages(20,$page_num);
		$result_rs=$dbo->{$get_type}($sql);
		$page_total=$dbo->totalPage;
	}
	return $result_rs;
}

function group_event_by_gid($fields="*",$gid="",$state=""){
	global $tablePreStr;
	$fields=filt_fields($fields);
	$gid=intval($gid);
	$condition=" group_id=$gid ";
	if($state !== '')
	{
		$state=intval($state);
		$condition .= " and is_pass=$state ";
	}
	return group_event_base($fields,$condition);
}
?>