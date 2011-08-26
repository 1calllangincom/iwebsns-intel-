<?php
//引入公共模块
require("foundation/module_users.php");
require("foundation/aintegral.php");
require("api/base_support.php");
require("foundation/csmtp.class.php");
require("foundation/asmtp_info.php");

//引入语言包
$re_langpackage=new reglp;
$g_langpackage=new grouplp;

//数据表定义区
$t_users=$tablePreStr."users";
$t_online=$tablePreStr."online";
$t_pals_def_sort=$tablePreStr."pals_def_sort";
$t_pals_sort=$tablePreStr."pals_sort";
$t_mypals=$tablePreStr."pals_mine";
$t_invite_code=$tablePreStr."invite_code";
$t_user_activation=$tablePreStr."user_activation";
$t_user_info=$tablePreStr."user_info";
$t_group_members=$tablePreStr."group_members";
$t_groups=$tablePreStr."groups";

$dbo=new dbex;


//ajax校验email和验证码
if(get_argg('ajax')==1){
	$user_email=short_check(get_argg("user_email"));

	$user_wwid=short_check(get_argg("user_wwid"));
	
	if($user_wwid){
		$sql="select wwid from $t_users where wwid='$user_wwid'";
		$user_info=$dbo->getRow($sql);
		if($user_info){
			echo $re_langpackage->re_rep_wwid;exit;
		}
	}
	
	if($user_email){
		$sql="select user_id from $t_users where user_email='$user_email'";
		$user_info=$dbo->getRow($sql);
		if($user_info){
			echo $re_langpackage->re_rep_mail;exit;
		}
	}

	
	exit;
}

function checkmail($user_email){   //验证电子邮件地址
	if(preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",$user_email))
		return true;
	else
		return false;
}

if(strlen(get_argp("user_wwid"))!=8){
   action_return(0,$re_langpackage->re_right_wwid,"-1");
}

if(strlen(get_argp("user_name"))<4){
   action_return(0,$re_langpackage->re_right_name,"-1");
}

if(!checkmail(get_argp("user_email"))) {
    action_return(0,$re_langpackage->re_right_email,"-1");
}

if(strlen(get_argp("user_repassword"))<6){
	  action_return(0,$re_langpackage->re_pass_limit,"-1");
}

$user_wwid=short_check(get_argp("user_wwid"));
$user_name=short_check(get_argp("user_name"));
$user_pws=md5(get_argp("user_password"));
$user_sex=intval(get_argp("user_sex"));
$user_email=short_check(get_argp("user_email"));
$user_department=get_argp("info[5]");
$user_factory=get_argp("info[6]");
$info = get_argp('info');
$is_pass=1;
$group_id=get_argp('group_id');
$userico=($user_sex==0)?"skin/$skinUrl/images/d_ico_0_small.gif":"skin/$skinUrl/images/d_ico_1_small.gif";

$invite_fromuid=0;
if(get_session('InviteFromUid')){
	  $invite_fromuid=get_session('InviteFromUid');
}


	

dbtarget('r',$dbServs);
//读取数据
$sql="select user_id from $t_users where user_email='$user_email'";
$user_info=$dbo->getRow($sql);
$sort_rs = api_proxy("pals_sort_def");

$sql="select wwid from $t_users where wwid='$user_wwid'";
$user_infoo=$dbo->getRow($sql);

if($user_info){
	action_return(0,$re_langpackage->re_rep_mail,"-1");
}else if($user_infoo){
	action_return(0,$re_langpackage->re_rep_wwid,"-1");
}else{
//检测邀请码
	if($inviteCode){
		$is_check=array();
		$invite_code=short_check(get_argp('invite_code'));
		if($invite_code==''){
			action_return(0,'请填写邀请码',"-1");exit;
		}
		$sql="select id from $t_invite_code where code_txt='$invite_code'";
		$is_check=$dbo->getRow($sql);
		if(empty($is_check)){
			action_return(0,'邀请码不正确或已经失效',"-1");exit;
		}
		$sql="delete from $t_invite_code where code_txt='$invite_code'";
		$dbo->exeUpdate($sql);
	}

	//写入数据


	$user_ico=($user_sex==0)?"skin/$skinUrl/images/d_ico_0_small.gif":"skin/$skinUrl/images/d_ico_1_small.gif";
	dbtarget('w',$dbServs);
	$sql="insert into $t_users (user_name,user_pws,user_sex,user_email,user_add_time,user_ico,invite_from_uid,is_pass,lastlogin_datetime,birth_year , birth_month , birth_day ,login_ip ,wwid ,user_group)"
					." values('$user_name','$user_pws',$user_sex,'$user_email','".constant('NOWTIME')."','$user_ico',$invite_fromuid,$is_pass,'".constant('NOWTIME')."','','','','$_SERVER[REMOTE_ADDR]','$user_wwid',3)";

	if(!$dbo->exeUpdate($sql)){
		action_return(0,$re_langpackage->re_reg_false,"-1");
	}

	$user_id=mysql_insert_id();
	

//加入俱乐部
for($i=0;$i<count($group_id);$i++){
	if($group_id[$i]){
	    $user_join_group=",".$group_id[$i].",";
		//写定义
		dbtarget('w',$dbServs);
		//更新用户表
		$sql="update $t_users set join_group='$user_join_group' where user_id=$user_id";
		$dbo->exeUpdate($sql);
		//插入群组关系表
		$sql="insert into $t_group_members (group_id,user_id,user_name,user_sex,state,role,add_time,user_ico) values ($group_id[$i],$user_id,'$user_name','$user_sex',1,2,'".constant('NOWTIME')."','$userico')";
		if($dbo->exeUpdate($sql)){
			//增加群组人数
			$sql="update $t_groups set member_count=member_count+1 where group_id=$group_id[$i]";
			$dbo->exeUpdate($sql) or die('false');
		}
		$sql="select group_name from $t_groups where group_id=$group_id[$i]";
		$row=$dbo->getRow($sql);
		$group_name=$row['group_name'];
		//纪录新鲜事
		$title=$g_langpackage->g_joined_group.'<a href="home.php?h='.$user_id.'&app=group_space&group_id='.$group_id[$i].'" target="_blank">'.$group_name.'</a>';
		$content='<a href="home.php?h='.$user_id.'&app=group_space&group_id='.$group_id[$i].'" target="_blank">'.$group_name.'</a>';
		$is_suc=api_proxy("message_set",0,$title,$content,0,1);
	}
}

//更新自定义信息表
	if(!empty($info)){
		foreach($info as $key => $value){
			if($value!==''){
				$key=explode('|',$key);
				$sql="insert into $t_user_info (user_id,info_id,info_value) values ($user_id,'".$key[0]."','$value')";
				$dbo -> exeUpdate($sql);
			}
		}
	}
		
	
	$now_time=time();

	$sql="insert into $t_online (user_id,user_name,user_sex,user_ico,active_time,hidden,wwid) values ($user_id,'$user_name',$user_sex,'$user_ico','$now_time',0,'$user_wwid')";
	$dbo->exeUpdate($sql);

	foreach($sort_rs as $rs){
		$sort_id=$rs['id'];
		$sort_name=$rs['name'];
		$sql="insert into $t_pals_sort ( name , user_id ) values ( '$sort_name' , $user_id )";
		$dbo->exeUpdate($sql);
	}

	if($invite_fromuid){
		increase_integral($dbo,$int_invited,$invite_fromuid);
		//取得介绍人的资料信息
		$user_row = api_proxy("user_self_by_uid","user_id,user_name,user_sex,user_ico,palsreq_limit",$invite_fromuid);
		if($user_row){
			$touser_id=$user_row['user_id'];
			$touser_name=$user_row['user_name'];
			$touser_sex=$user_row['user_sex'];
			$touser_ico=$user_row['user_ico'];
			$touser_pals_limit=$user_row['palsreq_limit'];
		}
		if($touser_pals_limit==0){
			$sql="insert into $t_mypals (user_id,pals_id,pals_name,pals_sex,add_time,pals_ico,accepted) values ($user_id,$invite_fromuid,'$touser_name','$touser_sex','".constant('NOWTIME')."','$touser_ico',1)";
			$dbo->exeUpdate($sql);
			set_sess_mypals($invite_fromuid);
		}
	}



	//不需要激活时直接添加session
	if($mailActivation == 0){
		set_sess_userid($user_id);
		set_sess_usersex($user_sex);
		set_sess_username($user_name);
		set_sess_userico($user_ico);
		set_sess_online('0');
		set_sess_jgroup($user_join_group);
?>
		<script type='text/javascript'>
		var login_time=new Date();
		login_time.setTime(login_time.getTime() +3600*250 );
		document.cookie="IsReged=Y;expires="+ login_time.toGMTString();
		location.href='./main.php';
	  </script>
<?php
	//需要激活时的操作
	}else{
		//邮箱配置信息检测
		if(!$smtpAddress || !$smtpPort || !$smtpEmail || !$smtpUser || !$smtpPassword){
			action_return(1,'邮箱信息配置不正确,请联系管理员','index.php');
		}

		//生成MD5加密后的激活码
		$activation_code = md5($user_email.time());

		//在激活码表中压入新数据
		$sql="insert into $t_user_activation (time,activation_code) values ('".constant('NOWTIME')."','$activation_code')";
		$dbo->exeUpdate($sql);

		//获取激活码的id
		$new_activation_id = mysql_insert_id();

		//查询此注册用户的user_id
		$sql="select user_id from $t_users where user_email='$user_email'";
		$new_user=$dbo->getRow($sql);
		$new_user_id = $new_user['user_id'];

		//将此注册用户的激活码表id关联到用户表
		$sql="update $t_users set activation_id='$new_activation_id' where user_id=$new_user_id ";
		$dbo->exeUpdate($sql);

		//激活邮件的title和body信息
		$mailtitle = $siteName."新用户激活";
		$mailbody = "尊敬的".$user_name."：<br />您好：".'<br />'."您在".$siteName."上注册了会员，请点击下面的链接激活您的账户<br /><a href='".$siteDomain."modules.php?app=user_activation&user_email=".$user_email."&activation_code=".$activation_code."'>href='".$siteDomain."modules.php?app=user_activation&user_email=".$user_email."&activation_code=".$activation_code."</a>";
		$email_array=explode('@',$user_email);
		$email_site=strtolower($email_array[1]);

		//为hotmail和gmail邮箱单独设置字符集
		$utf8_site=array("hotmail.com","gmail.com");
		if(!in_array($email_site,$utf8_site)){
			$mailbody = iconv('UTF-8','GBK',$mailbody);
			$mailtitle = iconv('UTF-8','GBK',$mailtitle);
		}

		//发送邮件
		$smtp = new smtp($smtpAddress,$smtpPort,true,$smtpUser,$smtpPassword);
		$result=$smtp->sendmail($user_email,$smtpEmail,$mailtitle,$mailbody,'HTML');

?>
	<script type='text/javascript'>
		location.href='modules.php?app=user_activate_succ&user_email=<?php echo $user_email ?>';
	</script>
<?php
	}
}
?>