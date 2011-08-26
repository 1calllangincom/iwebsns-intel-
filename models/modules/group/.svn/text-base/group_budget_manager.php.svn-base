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
	$user_id=get_sess_userid();
	$group_id=intval(get_argg('group_id'));
	$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
		if($mod!=1 && $mod!=2  && $mod!=3 && $mod!=4 && $mod!=5 && $mod!=6){
			$year=$mod;
		}
	}else{
		$mod=1;
	}
	dbtarget('r', $dbServs);
	$dbo=new dbex();
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
			return $name='Approve'; 
		}
	if($status==3){

		return $name='Reject'; 
		}
	if($status==0){
			return $name='Deleted'; 
		}
	}
	//表定义
	$t_group_budget=$tablePreStr."group_budget";
	$t_group_budget_type=$tablePreStr."group_budget_type";
	$t_group_forcast=$tablePreStr."group_forcast";
	$t_groups=$tablePreStr."groups";
	
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.comments as forcast_comments from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id order by A.budget_id desc limit 30";
	$budget_rs=$dbo->getRs($sql);
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.comments as forcast_comments from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id and A.status=$mod order by A.time desc ";
	$budget_un_rs=$dbo->getRs($sql);
	$sql="select * from $t_group_budget_type";
	$item_rs=$dbo->getRs($sql);
	$sql="select forcast_id,year,quarter from $t_group_forcast order by forcast_id limit 30";
	$forcast_rs=$dbo->getRs($sql);
	
	$sql="select *,sum(amount) from $t_group_forcast where year=$year and status=1 group by group_id,quarter";
	$forcast_rssum=$dbo->getRs($sql);
	$forcast_sum=array();
	for($i=0;$i<40;++$i){
		$forcast_sum[$i]=array(0,0,0,0,0,0,0,0,0,0,0,0);
	}
	foreach($forcast_rssum as $r){
		switch($r['quarter']){
			case 1:
				$forcast_sum[$r['group_id']][0]+=$r['sum(amount)'];
				break;
			case 2:
				$forcast_sum[$r['group_id']][1]+=$r['sum(amount)'];
				break;
			case 3:
				$forcast_sum[$r['group_id']][2]+=$r['sum(amount)'];
				break;
			case 4:
				$forcast_sum[$r['group_id']][3]+=$r['sum(amount)'];
				break;
		}
	}
	$sql="select *,sum(B.amount) as f from $t_group_forcast A,$t_group_budget B where A.year=$year and A.forcast_id=B.forcast_id and B.status=1 group by B.group_id,quarter";
	$budget_rssum=$dbo->getRs($sql);
	foreach($budget_rssum as $t){
		switch($t['quarter']){
				case 1:
					$forcast_sum[$t['group_id']][4]+=$t['f'];
					break;
				case 2:
					$forcast_sum[$t['group_id']][5]+=$t['f'];
					break;
				case 3:
					$forcast_sum[$t['group_id']][6]+=$t['f'];
					break;
				case 4:
					$forcast_sum[$t['group_id']][7]+=$t['f'];
					break;
		}
	}
	$sql="select group_id,amount from $t_group_forcast where year=$year and quarter=0";
	$forcast_year=$dbo->getRs($sql);
	foreach($forcast_year as $df){
		$forcast_sum[$df['group_id']][10]=$df['amount'];
	}
	for($i=0;$i<40;++$i){
		for($j=0;$j<4;$j++){
			$forcast_sum[$i][8]+=$forcast_sum[$i][$j];
		}
		for($j=4;$j<8;$j++){
			$forcast_sum[$i][9]+=$forcast_sum[$i][$j];
		}
	}
	$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sum=$dbo->getRs($sql);
	foreach ($budget_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sum as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
	$sql="select * from $t_group_forcast where quarter!=0  order by forcast_id desc limit 30";
	$forcast_list=$dbo->getRs($sql);
	$sql="select * from $t_group_forcast where quarter!=0 and status=2 order by forcast_id desc ";
	$forcast_un_list=$dbo->getRs($sql);
	$sql="select group_id,sum(amount) from $t_group_forcast where quarter!=0 and status=2 and year=$year group by group_id";
	$unforcast=$dbo->getRs($sql);
	foreach($unforcast as $df){
		$forcast_sum[$df['group_id']][11]=$df['sum(amount)'];
	}
	$sql="select * from $t_groups order by group_id Asc";
	$group_list=$dbo->getRs($sql);
	$year_list=range(2010,$year+1,1);
	$sql="SELECT A.forcast_id,B.group_name,B.group_id,SUM(A.amount) as sum_amount,A.item_id FROM isns_group_forcast A,isns_groups B WHERE  A.group_id=B.group_id GROUP BY A.group_id,item_id ";
	$table_rs=$dbo->getRs($sql);
	$table_all=array(array());
	foreach ($table_rs as $table_row){
		$table_all[$table_row['group_id']][$table_row['item_id']]=$table_row['sum_amount'];
		if(isset($table_all['0'][$table_row['item_id']])){
			$table_all['0'][$table_row['item_id']]+=$table_row['sum_amount'];
		}else{
			$table_all['0'][$table_row['item_id']]=$table_row['sum_amount'];
		}
	}
	$sql="select max(id) as m from isns_group_budget_type ";
	$max_item_id=$dbo->getRow($sql);
	$max_item_id=$max_item_id['m'];
	$number_arr=range(1,$max_item_id);
?>
