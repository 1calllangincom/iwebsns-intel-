<?php
//引入语言包

//引入模块公共方法文件


//变量取得
$hello_msg=short_check(get_args("hello_msg"));

//防止重复提交
$t_blog=$tablePreStr."helloworld";
	

//读写分离定义函数
dbtarget('w',$dbServs);
$dbo=new dbex();
$sql="insert into $t_blog (msg) values('$hello_msg')";

if($dbo->exeUpdate($sql)){
	action_return(1,'添加测试成功！',"");
}
	action_return(1,'添加测试成功！',"");
?>
