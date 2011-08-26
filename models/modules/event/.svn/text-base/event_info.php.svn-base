<?php
	//引入公共模块
	require("foundation/module_event.php");
	require("api/base_support.php");
	
	//引入语言包
	$ef_langpackage=new event_frontlp;
	
	//必须登录才能浏览该页面
	require("foundation/auser_mustlogin.php");

	//限制时间段访问站点
	limit_time($limit_action_time);
	
	$user_id=get_sess_userid();
	$event_id=intval(get_argg('event_id'));
	$event_info = array('event_id'=>'','group_id'=>'','user_id'=>'','user_name'=>'','title'=>'','type_id'=>'','province'=>'','city'=>'','location'=>'','deadline'=>'','start_time'=>'','end_time'=>'','public'=>'2','detail'=>'','template'=>'','limit_num'=>'0','verify'=>'','allow_pic'=>'1','allow_post'=>'1','allow_invite'=>'1','allow_fellow'=>'');
	
	$action='do.php?act=event_add';
	
	
	if($event_id){
		
		$field = implode(',', array_keys($event_info));
		$event_info = api_proxy("event_self_by_eid",$field,$event_id);
		$event_info['start_time'] = date('Y-m-d H:i', $event_info['start_time']);
		$event_info['end_time'] = date('Y-m-d H:i', $event_info['end_time']);
		$event_info['deadline'] = date('Y-m-d H:i', $event_info['deadline']);
		$action='do.php?act=event_edit&event_id='.$event_id;
	}
	else{
	//权限判断
		
		$status=api_proxy("user_self_by_uid","*",$user_id);
		$status=intval($status['user_group']);
		if($status > 2){
			echo "<script type='text/javascript'>alert('".$ef_langpackage->ef_no_permission."');</script>";exit();
		}
		
	}

	//缓存功能区
	$event_sort_rs = api_proxy("event_sort_by_self");
	$event_group_rs = api_proxy("event_sort_by_group");
	$event_type = event_sort_list($event_sort_rs, $event_info['type_id']);
	$event_group_name = event_group_list($event_group_rs, $event_info['group_id']);
		$is_admin=is_admin($user_id);
?>