<?php
//引入模块公共方法文件
require("api/base_support.php");
$t_event_members="isns_event_members";

$user_id=get_sess_userid();


dbtarget('r',$dbServs);
$dbo=new dbex();

$sql="select check_in from $t_event_members where user_id=$user_id";
$check_in=$dbo->getRow($sql);

if($check_in['check_in']==1){
	$sql="update $t_event_members set check_in=0 where user_id=$user_id";
}else{
	$sql="update $t_event_members set check_in=1 where user_id=$user_id";
}
$dbo->exeUpdate($sql);

 $goToUrl=urldecode($_REQUEST['ref']);//从url参数获取跳转前页面
         header("Location:".$goToUrl);//利用header跳转到那个页面去
         exit;
?>