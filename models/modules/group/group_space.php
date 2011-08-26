<?php
	//引入公共模块
	require("foundation/fpages_bar.php");
	require("foundation/module_group.php");
	require("foundation/fcontent_format.php");
	require("api/base_support.php");

	//引入语言包
	$g_langpackage=new grouplp;
	$mn_langpackage=new menulp;

	//变量区
	$role='';
	$url_uid= intval(get_argg('user_id'));
	$ses_uid=get_sess_userid();
	$creat_group=get_sess_cgroup();
	$group_id=intval(get_argg('group_id'));

	//引入模块公共权限过程文件
	$is_self_mode='partLimit';
	$is_login_mode='';
	require("foundation/auser_validate.php");

	$button_url="modules.php?app=group&user_id=$userid";
	$button_title=$g_langpackage->g_return;

	$button_mine="content_none";
	$button_his="";

	if($is_self=='Y'){
		$button_mine="";
		$button_his="content_none";
		$button_url="modules.php?app=group_select";
		$button_title=$g_langpackage->g_search;
	}

	//当前页面参数
	$page_num=trim(get_argg('page'));

	$subject_rs=array();
	$group_events=array();
	$group_members=array();
	$group_row=array();
	$role='';
	$join_js='';
	
	//取得权限
	if($ses_uid){
		$role=api_proxy("group_member_by_role",$group_id,$ses_uid);
		$role=$role[0];
	}
	//取得群组信息
	$group_row=api_proxy("group_self_by_gid","*",$group_id);
	
	//取得活动列表
	$group_events=Api_Proxy("group_event_by_gid","*",$group_id,1);
	
	//取得组员
	$group_members=api_proxy("group_member_by_gid","*",$group_id,1);
	$join_js="join_group_var(group_id)";
	if(!isset($ses_uid)){
		$join_js='parent.goLogin()';
	}

	//数据显示控制
	$show_data="";
	$show_error="content_none";
	$is_show=1;
	$error_str="";
	$is_admin=get_sess_admin();
	if($is_admin==''){
		if($group_row['is_pass']==0){
			$is_show=0;
			$show_error="";
			$show_data="content_none";
			$error_str=$g_langpackage->g_lock_group;
			}
		}

	if(empty($group_row)){
		$show_data="content_none";
		$show_error="";
		$is_show=0;
		$error_str=$g_langpackage->g_data_none;
	}

	//操作控制
		$action_ctrl="content_none";
		if($ses_uid!=''){
			if(strpos(",,".$group_row['group_manager_id'].",",",$ses_uid,")||$ses_uid==$group_row['add_userid']){
				$action_ctrl="";
			}
		}
	
	$subject_rs=api_proxy("group_sub_by_gid","*",$group_id);
	
	$isNull=0;
	if(empty($subject_rs)){
		$isNull=1;
	}	
	$t_event_photo=$tablePreStr."event_photo";
	
	$dbo=new dbex();
	dbtarget('r', $dbServs);
	$sql="select * from isns_group_members where group_id=$group_id and role=1";
	$group_managers=$dbo->getRs($sql);
	$dbo->setPages(20,$page_num);//设置分页
	$sql="select * from $t_event_photo where event_id in (select event_id from isns_event where group_id=$group_id)";
	$photo_rs = $dbo->getRs($sql);
	$page_total=$dbo->totalPage;//分页总数
		//数据显示控制
	$list_none="content_none";
	$isNull=0;
	if(empty($photo_rs)){
		$isNull=1;
		$list_none="";
	}
?>