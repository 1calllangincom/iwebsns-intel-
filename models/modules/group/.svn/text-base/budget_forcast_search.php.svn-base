<?php
function groupidtoname($group_id){
		$dbo=new dbex();
		$sql="select group_name from isns_groups where group_id=$group_id";
		$row=$dbo->getRow($sql);
		return $row['group_name'];
	}
	function useridtoname($user_id){
$dbo=new dbex();
		$sql="select user_name from isns_users where user_id=$user_id";
		$row=$dbo->getRow($sql);
		return $row['user_name'];
	}
	function useridtowwid($user_id){
$dbo=new dbex();
		$sql="select wwid from isns_users where user_id=$user_id";
		$row=$dbo->getRow($sql);
		return $row['wwid'];
	}
	function itemidtoname($item_id){
$dbo=new dbex();
		$sql="select item from isns_group_budget_type where id=$item_id";
		$row=$dbo->getRow($sql);
		return $row['item'];
	}
	function statustoname($status){
		$name='';
		if($status==2){
			return $name='Wait'; 
		}
	if($status==1){
			return $name='Aprove'; 
		}
	if($status==3){
			return $name='Reject'; 
		}
	if($status==0){
			return $name='Deleted'; 
		}
	}
$kind=intval(get_argp('kind'));
$group_id=intval(get_argp('group'));
$item_id=intval(get_argp('item'));
$requester=short_check(get_argp('requester'));
$year=intval(get_argp('year'));
$quarter=intval(get_argp('quarter'));
$status=intval(get_argp('status'));
$id=intval(get_argp('ID'));

$t_group_budget=$tablePreStr."group_budget";
$t_group_forcast=$tablePreStr."group_forcast";
$t_users=$tablePreStr."users";
dbtarget('r', $dbServs);
$dbo=new dbex();
if($kind==1){
	
	$condition="";
	if($id!=''){
		$condition.=" and A.budget_id=$id ";
	}
	else {
		if($group_id!=0){
			$condition.=" and A.group_id=$group_id ";
		}
		if($item_id!=0){
			$condition.=" and A.item_id=$item_id ";
		}
		if($requester!=''){
			$sql="select user_id from $t_users where user_name like '$requester'";
			echo $sql;
			$user_rows=$dbo->getRow($sql);
			$user_id=$user_rows['user_id'];
			$condition.=" and A.user_id=$user_id ";
		}
		if($year!=0){
			$condition.=" and A.year=$year ";
		}
		if($quarter!=0){
			$condition.=" and B.quarter=$quarter ";
		}
		if($status!=0){
			$condition.=" and A.status=$status ";
		}
	}
	if($condition==""){
		$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id order by A.budget_id";
	}else{
		$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id   $condition order by A.budget_id";
	}
	
	$rs=$dbo->getRs($sql);	
}
else{
	$condition="";
	if($id!=''){
		$condition.=" and forcast_id=$id ";
	}
	else {
		if($group_id!=0){
			$condition.=" and group_id=$group_id ";
		}
		if($item_id!=0){
			$condition.="  and item_id=$item_id ";
		}
		if($requester!=''){
			$sql="select user_id from $t_users where user_name like '$requester'";
			$user_rows=$dbo->getRow($sql);
			$user_id=$user_rows['user_id'];
			$condition.="  and user_id=$user_id ";
		}
		if($year!=0){
			$condition.=" and  year=$year ";
		}
		if($quarter!=0){
			$condition.=" and  quarter=$quarter ";
		}
		if($status!=0){
			$condition.=" and  status=$status";
		}
	}
	if($condition==""){
		$sql="select * from $t_group_forcast order by forcast_id";
	}else{
		$sql="select * from $t_group_forcast where True $condition order by forcast_id desc";
	}
	$rs=$dbo->getRs($sql);	
}
$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sum=$dbo->getRs($sql);
	foreach ($rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sum as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
?>