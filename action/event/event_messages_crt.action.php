<?php

	//引入模块公共方法文件
	require("foundation/aanti_refresh.php");
	require("api/base_support.php");

	//引入语言包
	$m_langpackage=new msglp;

  //变量获得
  $msgStr="";
  $msg_touser=intval(get_argp("msToId"));
  $msg_title=short_check(get_argp("msTitle"));
  $msg_txt=long_check(get_argp("msContent"));
  $event_id=intval(get_argp('event_id'));
  $touser_id="";//收件人id
  $touser="";//收件人name
  $tousex="";
  $user_id=get_sess_userid();//发件人id
  $user_name=get_sess_username();//发件人姓名
  $user_ico = get_sess_userico();

  if(strlen($msg_txt) >=500){
		action_return(0,$m_langpackage->m_add_exc,-1);exit;
  }
  //数据表定义
  $t_users = $tablePreStr."users";
  $t_msg_outbox = $tablePreStr."msg_outbox";
  $t_msg_inbox = $tablePreStr."msg_inbox";
  $t_event_members= $tablePreStr."event_members";

  $dbo = new dbex;
  
  dbtarget('r', $dbServs);
  $sql="select user_id,user_name,user_ico from $t_event_members where event_id=$event_id";
  $rs=$dbo->getRs($sql);
	//读写分离定义函数
	dbtarget('w',$dbServs);
	$user_row=array();
	foreach ($rs as $users_row){
		$touser_id=$users_row["user_id"];
		$touser=$users_row["user_name"];
		$touser_ico=$users_row["user_ico"];
		
	  $sql="insert into $t_msg_outbox (mess_title,mess_content,to_user_id,to_user,to_user_ico,user_id,add_time,state)"
	                        ."value('$msg_title','$msg_txt',$touser_id,'$touser','$touser_ico',$user_id,'".constant('NOWTIME')."','1')";
		if(!$dbo ->exeUpdate($sql)){
			action_return(0,$m_langpackage->m_data_err,"-1");exit;
		}
		$sql="insert into $t_msg_inbox (mess_title,mess_content,from_user_id,from_user,from_user_ico,user_id,add_time,mesinit_id)"
	                   ."value('$msg_title','$msg_txt',$user_id,'$user_name','$user_ico',$touser_id,'".constant('NOWTIME')."',LAST_INSERT_ID())";
	
		if($dbo ->exeUpdate($sql)){
				api_proxy("message_set",$touser_id,$m_langpackage->m_remind,"modules.php?app=msg_minbox",0,5,"remind");
				if(get_argp('nw')=="2"){
					action_return(1,'',"modules.php?app=hstart&user_id=".$touser_id);
				}else{
					action_return(1,'',"");
				}
		}else{
		   $sql="update $t_msg_outbox set state='0' where mess_id=LAST_INSERT_ID()";
		   $dbo ->exeUpdate($sql);
		   action_return(0,$m_langpackage->m_send_err,"-1");
		 }
	}

?>

