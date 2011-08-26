<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/event/event_excel.html
 * 如果您的模型要进行修改，请修改 models/modules/event/event_excel.php
 *
 * 修改完成之后需要您进入后台重新编译，才会重新生成。
 * 如果您开启了debug模式运行，那么您可以省去上面这一步，但是debug模式每次都会判断程序是否更新，debug模式只适合开发调试。
 * 如果您正式运行此程序时，请切换到service模式运行！
 *
 * 如有您有问题请到官方论坛（http://tech.jooyea.com/bbs/）提问，谢谢您的支持。
 */
?><?php
/*
 * 此段代码由debug模式下生成运行，请勿改动！
 * 如果debug模式下出错不能再次自动编译时，请进入后台手动编译！
 */
/* debug模式运行生成代码 开始 */
if(!function_exists("tpl_engine")) {
	require("foundation/ftpl_compile.php");
}
if(filemtime("templates/default/modules/event/event_excel.html") > filemtime(__file__) || (file_exists("models/modules/event/event_excel.php") && filemtime("models/modules/event/event_excel.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/event/event_excel.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
//引入公共模块
	require("foundation/module_event.php");
	require("foundation/module_mypals.php");
	require("foundation/fpages_bar.php");
	require("api/base_support.php");
//引入语言包
	$ef_langpackage=new event_frontlp;
//变量区
	$role='';
	$user_id=get_sess_userid();
	$event_id=intval(get_argg('event_id'));
//权限判断
	
	$status=api_proxy("event_member_by_uid","status",$event_id,$user_id);
	$status=intval($status['status']);
	if($status < 3){
		echo "<script type='text/javascript'>alert(\"$ef_langpackage->ef_no_permission\");window.history.go(-1);</script>";
		exit();
	}
//表定义
	$t_event=$tablePreStr."event";
	$t_event_users=$tablePreStr."event_members";
	$t_group=$tablePreStr."groups";
//数据读取
	dbtarget('r',$dbServs);
	$dbo=new dbex();
	
	$sql="select * from $t_event where event_id=$event_id";
	$rs=$dbo->getRow($sql);
	$attend=$rs["member_num"];	
	$group_id=$rs["group_id"];
		
	$sql="select count(user_sex) from $t_event_users where event_id=$event_id and user_sex=1";
	$rs=$dbo->getRow($sql);
	$gender_man=$rs["count(user_sex)"];
	
	$sql="select member_count from $t_group where group_id=$group_id";
	$rs=$dbo->getRow($sql);
	$group_count=$rs["member_count"];
//数据处理
	if($group_count!='0'){
		$attend_per=floatval($attend/$group_count)*100;
	}
	else $attend_per=0;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<base href='<?php echo $siteDomain;?>' />
<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/iframe.css">
</head>
<body id="iframecontent">
<div class="create_button"><a href="modules.php?app=event_info"><?php echo $ef_langpackage->ef_launch_activity;?></a></div>
<h2 class="app_event"><?php echo $ef_langpackage->ef_activity;?></h2>
<div class="tabs">
  <ul class="menu">
    <li><a href="modules.php?app=event_info&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_update_activity;?></a></li>
    <li ><a href="modules.php?app=event_member_manager&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_member_management;?></a></li>
	<li><a href="modules.php?app=event_upload_photo&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_upload_photo;?></a></li>
<li  ><a href="modules.php?app=event_messages&event_id=<?php echo $event_id;?>" hidefocus="true"><?php echo $ef_langpackage->ef_event_messages;?></a></li>
    		<li class="active" ><a href="modules.php?app=event_excel&event_id=<?php echo $event_id;?>" ><?php echo $ef_langpackage->ef_event_table;?></a></li>
    		
  </ul>
</div>

<div class="rs_head"><?php echo $ef_langpackage->ef_excel;?></div>
<table class="msg_inbox" cellspacing="1" cellpadding="1">
	<thead>
		<tr>
			<td width="15%"><?php echo $ef_langpackage->ef_category;?></td>
			<td width="13%"></td>
			<td><?php echo $ef_langpackage->ef_data;?></td>
			<td><?php echo $ef_langpackage->ef_score;?></td>
			<td><?php echo $ef_langpackage->ef_weight;?></td>
			<td><?php echo $ef_langpackage->ef_final_score;?></td>
			<td><?php echo $ef_langpackage->ef_comment;?></td>
		</tr>
  </thead>

    <tr>
    	<td><?php echo $ef_langpackage->ef_safety;?></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_safety;?></td>
    </tr>

    <tr>
    	<td><?php echo $ef_langpackage->ef_coc;?></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_safety;?></td>
    </tr>
    
    <tr>
    	<td><?php echo $ef_langpackage->ef_attend;?></td>
    	<td></td>
    	<td><?php echo $attend_per;?>%</td>
    	<td></td>
    	<td>0.3</td>
    	<td></td>
    	<td></td>
    </tr>
    
    <tr>
    	<td><?php echo $ef_langpackage->ef_trend;?></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td>0.2</td>
    	<td></td>
    	<td></td>
    </tr>
    
    <tr>
    	<td><?php echo $ef_langpackage->ef_cost;?></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td>0.2</td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_cost;?></td>
    </tr>
    
    <tr>
    	<td><?php echo $ef_langpackage->ef_diversity;?></td>
    	<td><?php echo $ef_langpackage->ef_gender;?></td>
    	<td><?php echo $gender_man;?>：<?php echo $attend-$gender_man;?></td>
    	<td></td>
    	<td>0.1</td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_gender;?></td>
    </tr>
    
    <tr>
   		<td></td>
    	<td><?php echo $ef_langpackage->ef_department;?></td>
    	<td></td>
    	<td></td>
    	<td>0.1</td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_department;?></td>
    </tr>
    
    <tr>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_factory;?></td>
    	<td></td>
    	<td></td>
    	<td>0.1</td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_factory;?></td>
    </tr>
    <tr>
    	<td><?php echo $ef_langpackage->ef_sc;?></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td><?php echo $ef_langpackage->ef_c_sc;?></td>
    </tr>
</table>
</body>
</html><?php } ?>