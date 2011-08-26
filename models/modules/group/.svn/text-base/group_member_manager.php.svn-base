<?php
	//引入语言包
	$g_langpackage=new grouplp;

	//引入公共模块
	require("foundation/module_group.php");
	require("foundation/module_users.php");
	require("foundation/fpages_bar.php");
	require("api/base_support.php");

	//变量区
	$role='';
	$group_creat=get_sess_cgroup();
	$user_id=get_sess_userid();
	$group_id=intval(get_argg('group_id'));

	//当前页面参数
	$page_num=trim(get_argg('page'));

	//权限判断
	$role=api_proxy("group_member_by_role",$group_id,$user_id);
	$role=$role[0];
	if(!isset($role)||$role>=2){
		echo "<script type='text/javascript'>alert(\"$g_langpackage->g_no_privilege\");window.history.go(-1);</script>";exit();
	}

	$member_rs=array();

	$req_member_rs=array();
	
	//
	$t_users=$tablePreStr."users";
	$t_group_members=$tablePreStr."group_members";
	$t_user_info=$tablePreStr."user_info";
	//取得未审核的会员
	$req_member_rs=api_proxy("group_member_by_gid","*",$group_id,0);

	//取得已经审核的会员
	//$member_rs=api_proxy("group_member_by_gid","*",$group_id,1);
	
	$dbo=new dbex();
	dbtarget('r', $dbServs);
	$sql="select * from $t_group_members A,$t_users B where A.user_id=B.user_id and A.state=1 and A.group_id=$group_id ";
	$member_rs=$dbo->getRs($sql);
	$info_c_rs=array();
	foreach ($member_rs as $row){
		$userid=$row['user_id'];
		//用户自定义资料预定义
		$info_c_rs[$userid]=array();
		$info_c_rs[$userid]=userInformationCombine($dbo,$userid);
	}
	//显示控制
	$req_data="";
	$isNull=1;
	if(empty($req_member_rs)){
		$isNull=0;
		$req_data="content_none";
	}
	?>
