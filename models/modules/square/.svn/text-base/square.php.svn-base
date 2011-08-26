<?php
 //引入公共模块
require("foundation/fpages_bar.php");
	require("foundation/module_users.php");
	require("foundation/module_blog.php");
	require("foundation/fcontent_format.php");
	require("foundation/module_mypals.php");
	require("servtools/menu_pop/trans_pri.php");
	require("api/base_support.php");
	
  //语言包引入
  $b_langpackage=new bloglp;
	
  //变量区
	$user_id=1;
	$url=get_sess_userid();
 
  //数据表定义
  $t_blog=$tablePreStr."blog";
  dbtarget('r',$dbServs);
  $dbo=new dbex();
  $sql="select * from $t_blog where user_id=$user_id order by log_id desc";
  $blog_rs=$dbo->getRs($sql);
  
	?>