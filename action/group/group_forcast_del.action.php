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

//数据审核
if($group_id=='0'){
	action_return(1,'俱乐部为空，提交失败',"modules.php?app=group_budget&group_id=$group_id");
}

//数据表定义区
$t_group_forcast=$tablePreStr."group_forcast";

//定义写操作
dbtarget('w',$dbServs);
$dbo=new dbex();

//插入group数据表
$sql="delete from $t_group_forcast where forcast_id=$forcast_id";
if($dbo->exeUpdate($sql)){
//回应信息
	action_return(1,'success!',"modules.php?app=group_budget&group_id=$group_id");
}

?>