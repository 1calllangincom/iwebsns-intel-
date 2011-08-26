<?php

//变量区
	$hello_id=short_check(get_args("hello_id"));


//数据表定义
	$t_blog=$tablePreStr."helloworld";

//定义写操作
	dbtarget('w',$dbServs);
	$dbo=new dbex();

$sql="delete from $t_blog where id=$hello_id";
if($dbo->exeUpdate($sql)){
	action_return(1,"删除测试成功!","");
}
	

action_return(0,'删除测试失败!',"");
?>