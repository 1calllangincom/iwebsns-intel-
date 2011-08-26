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
$group_id=intval(get_argp('group_id'));

$time=constant('NOWTIME');
$time=explode('-', $time);
$year=intval($time[0]);
$month=intval($time[1]);
$day=$time[2];
$day=explode(' ', $day);
$day=intval($day[0]);
$amount=intval(get_argp("amount"));
$kind=short_check(get_argp("kind"));
$item_id=intval(get_argp("item"));
$description=short_check(get_argp("description"));
$comment=short_check(get_argp("comments"));
$unit_price=intval(get_argp("unit_price"));
$quality=intval(get_argp("quality"));
$forcast_id=intval(get_argp('forcast_id'));

//数据审核
if($group_id=='0'){
	action_return(1,'俱乐部为空，提交失败',"modules.php?app=group_budget&group_id=$group_id");
}

//数据表定义区
$t_group_budget=$tablePreStr."group_budget";

//定义写操作
dbtarget('w',$dbServs);
$dbo=new dbex();

//插入group数据表
$sql="insert into $t_group_budget(group_id,year,month,day,amount,user_id,kind,item_id,description,comments,unit_price,quality,status,time,forcast_id) values($group_id,$year,$month,$day,$amount,$user_id,'$kind',$item_id,'$description','$comment',$unit_price,$quality,2,'".constant('NOWTIME')."',$forcast_id)";
if($dbo->exeUpdate($sql)){
//回应信息
	action_return(1,'success!',"modules.php?app=group_budget&group_id=$group_id");
}

?>