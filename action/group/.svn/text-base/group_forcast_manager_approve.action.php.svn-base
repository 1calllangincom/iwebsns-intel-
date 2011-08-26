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
$forcast_id=intval(get_argp('forcast_id'));


//数据表定义区
$t_group_forcast=$tablePreStr."group_forcast";

//定义写操作
dbtarget('w',$dbServs);
$dbo=new dbex();

//插入group数据表
$sql="update $t_group_forcast set status=1,approver=$user_id where forcast_id=$forcast_id";
if($dbo->exeUpdate($sql)){
//回应信息
	action_return(1,'success!',"modules.php?app=group_budget_manager&group_id=$group_id");
}

?>