<?php
//引入模块公共方法文件
require("api/base_support.php");
require("foundation/aanti_refresh.php");
require("foundation/ftag.php");

//引入语言包
$g_langpackage=new grouplp;

//变量声明区
$user_id=get_sess_userid();
$user_name=get_sess_username();
$allocate=get_argp('allocate');
$year=intval(get_argp('year_forcast'));



//数据表定义区
$t_group_forcast=$tablePreStr."group_forcast";

//定义写操作
dbtarget('w',$dbServs);
$dbo=new dbex();
$sql="delete from $t_group_forcast where year=$year and quarter=0";
if($dbo->exeUpdate($sql)){
	echo '1';
}

//插入group数据表
foreach( $allocate as $group_id=>$amount){
	$sql="insert into $t_group_forcast(group_id,year,amount,quarter,item_id,time,user_id,status,approver,comments) values($group_id,$year,$amount,0,50,'".constant('NOWTIME')."',$user_id,1,$user_id,'')";
	$dbo->exeUpdate($sql);
}

	action_return(1,"success","modules.php?app=group_budget_manager&group_id=$group_id&mod=5");


?>