<?php
	//引入语言包
	$g_langpackage=new grouplp;
	
	//引入公共模块
	require("foundation/module_group.php");
	require("api/base_support.php");
	
	$dbo=new dbex();
	$time=constant('NOWTIME');
	$time=explode('-', $time);
	$year=intval($time[0]);
	$role='';
	$forcast_id=intval(get_argp('forcast_id'));
	$user_id=get_sess_userid();
	$group_id=intval(get_argg('group_id'));
	$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
		if($mod!=1 && $mod!=2&& $mod!=3&& $mod!=4){
			$year=$mod;
		}
	}else{
		$mod=1;
	}
	dbtarget('r', $dbServs);
	$dbo=new dbex();
	function forcastidtoamount($forcast_id){
		$dbo=new dbex();
		$sql="select amount from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['amount'];
	}
	function forcastidtodescription($forcast_id){
		$dbo=new dbex();
		$sql="select comments from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['comments'];
	}
	function forcastidtoitem($forcast_id){
		$dbo=new dbex();
		$sql="select item_id from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['item_id'];
	}
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
			return $name='wait'; 
		}
	if($status==1){
			return $name='approve'; 
		}
	if($status==3){
			return $name='reject'; 
		}
	if($status==0){
			return $name='deleted'; 
		}
	}
	
	//表定义
	$t_group_budget=$tablePreStr."group_budget";
	$t_group_budget_type=$tablePreStr."group_budget_type";
	$t_group_forcast=$tablePreStr."group_forcast";
	$t_groups=$tablePreStr."groups";
	
	
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.user_id as forcast_user_id,B.item_id as forcast_item_id,B.comments as forcast_comments,B.status as forcast_status from $t_group_budget A,$t_group_forcast B where A.group_id=$group_id and A.forcast_id=B.forcast_id order by A.budget_id desc limit 30";
	$budget_rs=$dbo->getRs($sql);
	$sql="select * from $t_group_budget_type";
	$item_rs=$dbo->getRs($sql);
	$sql="select forcast_id,year,quarter,item_id,amount,status,approver,group_id,user_id,comments from $t_group_forcast where group_id=$group_id and status=1 and quarter!=0 order by forcast_id desc";
	$forcast_rs=$dbo->getRs($sql);
	
	$sql="select * from $t_group_forcast where year=$year and group_id=$group_id and status=1";
	$forcast_rssum=$dbo->getRs($sql);
	$forcast_sum=array(0,0,0,0);
	foreach($forcast_rssum as $r){
		switch($r['quarter']){
			case 1:
				$forcast_sum[0]+=$r['amount'];
				break;
			case 2:
				$forcast_sum[1]+=$r['amount'];
				break;
			case 3:
				$forcast_sum[2]+=$r['amount'];
				break;
			case 4:
				$forcast_sum[3]+=$r['amount'];
				break;
		}
	}
	$sql="select *,B.amount as f from $t_group_forcast A,$t_group_budget B where A.year=$year and A.forcast_id=B.forcast_id and A.group_id=$group_id and B.status=1";
	$budget_rssum=$dbo->getRs($sql);
	$budget_sum=array(0,0,0,0);
	foreach($budget_rssum as $t){
	switch($t['quarter']){
			case 1:
				$budget_sum[0]+=$t['f'];
				break;
			case 2:
				$budget_sum[1]+=$t['f'];
				break;
			case 3:
				$budget_sum[2]+=$t['f'];
				break;
			case 4:
				$budget_sum[3]+=$t['f'];
				break;
		}
	}
	$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sums=$dbo->getRs($sql);
	foreach ($forcast_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach ($budget_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sums as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
	$sql="select * from $t_group_forcast where group_id=$group_id and quarter!=0 order by forcast_id desc limit 30";
	$forcast_list=$dbo->getRs($sql);
	$sql="select * from $t_groups order by group_id Asc";
	$group_list=$dbo->getRs($sql);
	$year_list=range(2010,$year+1,1);
	$sql="select group_id,amount from $t_group_forcast where year=$year and quarter=0 and group_id=$group_id";
	$allocate=$dbo->getRow($sql);
?>
