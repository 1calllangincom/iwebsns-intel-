<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/group/group_budget_manager.html
 * 如果您的模型要进行修改，请修改 models/modules/group/group_budget_manager.php
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
if(filemtime("templates/default/modules/group/group_budget_manager.html") > filemtime(__file__) || (file_exists("models/modules/group/group_budget_manager.php") && filemtime("models/modules/group/group_budget_manager.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/group/group_budget_manager.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
	//引入语言包
	$g_langpackage=new grouplp;
	
	//引入公共模块
	require("foundation/module_group.php");
	require("api/base_support.php");
	
	$dbo=new dbex();
	$time=constant('NOWTIME');
	$time=explode('-', $time);
	$year=intval($time[0]);
	$role='';
	$user_id=get_sess_userid();
	$group_id=intval(get_argg('group_id'));
	$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
		if($mod!=1 && $mod!=2  && $mod!=3 && $mod!=4 && $mod!=5 && $mod!=6){
			$year=$mod;
		}
	}else{
		$mod=1;
	}
	dbtarget('r', $dbServs);
	$dbo=new dbex();
	function groupidtoname($group_id){
		$dbo=new dbex();
		$sql="select group_name from isns_groups where group_id=$group_id";
		$row=$dbo->getRow($sql);
		return $row['group_name'];
	}
	function useridtoname($user_id){
$dbo=new dbex();
		$sql="select user_name from isns_users where user_id=$user_id";
		$row=$dbo->getRow($sql);
		return $row['user_name'];
	}
	function useridtowwid($user_id){
$dbo=new dbex();
		$sql="select wwid from isns_users where user_id=$user_id";
		$row=$dbo->getRow($sql);
		return $row['wwid'];
	}
	function itemidtoname($item_id){
$dbo=new dbex();
		$sql="select item from isns_group_budget_type where id=$item_id";
		$row=$dbo->getRow($sql);
		return $row['item'];
	}
	function statustoname($status){
		$name='';
		if($status==2){
			return $name='Wait'; 
		}
	if($status==1){
			return $name='Approve'; 
		}
	if($status==3){

		return $name='Reject'; 
		}
	if($status==0){
			return $name='Deleted'; 
		}
	}
	//表定义
	$t_group_budget=$tablePreStr."group_budget";
	$t_group_budget_type=$tablePreStr."group_budget_type";
	$t_group_forcast=$tablePreStr."group_forcast";
	$t_groups=$tablePreStr."groups";
	
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.comments as forcast_comments from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id order by A.budget_id desc limit 30";
	$budget_rs=$dbo->getRs($sql);
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.comments as forcast_comments from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id and A.status=$mod order by A.time desc ";
	$budget_un_rs=$dbo->getRs($sql);
	$sql="select * from $t_group_budget_type";
	$item_rs=$dbo->getRs($sql);
	$sql="select forcast_id,year,quarter from $t_group_forcast order by forcast_id limit 30";
	$forcast_rs=$dbo->getRs($sql);
	
	$sql="select *,sum(amount) from $t_group_forcast where year=$year and status=1 group by group_id,quarter";
	$forcast_rssum=$dbo->getRs($sql);
	$forcast_sum=array();
	for($i=0;$i<40;++$i){
		$forcast_sum[$i]=array(0,0,0,0,0,0,0,0,0,0,0,0);
	}
	foreach($forcast_rssum as $r){
		switch($r['quarter']){
			case 1:
				$forcast_sum[$r['group_id']][0]+=$r['sum(amount)'];
				break;
			case 2:
				$forcast_sum[$r['group_id']][1]+=$r['sum(amount)'];
				break;
			case 3:
				$forcast_sum[$r['group_id']][2]+=$r['sum(amount)'];
				break;
			case 4:
				$forcast_sum[$r['group_id']][3]+=$r['sum(amount)'];
				break;
		}
	}
	$sql="select *,sum(B.amount) as f from $t_group_forcast A,$t_group_budget B where A.year=$year and A.forcast_id=B.forcast_id and B.status=1 group by B.group_id,quarter";
	$budget_rssum=$dbo->getRs($sql);
	foreach($budget_rssum as $t){
		switch($t['quarter']){
				case 1:
					$forcast_sum[$t['group_id']][4]+=$t['f'];
					break;
				case 2:
					$forcast_sum[$t['group_id']][5]+=$t['f'];
					break;
				case 3:
					$forcast_sum[$t['group_id']][6]+=$t['f'];
					break;
				case 4:
					$forcast_sum[$t['group_id']][7]+=$t['f'];
					break;
		}
	}
	$sql="select group_id,amount from $t_group_forcast where year=$year and quarter=0";
	$forcast_year=$dbo->getRs($sql);
	foreach($forcast_year as $df){
		$forcast_sum[$df['group_id']][10]=$df['amount'];
	}
	for($i=0;$i<40;++$i){
		for($j=0;$j<4;$j++){
			$forcast_sum[$i][8]+=$forcast_sum[$i][$j];
		}
		for($j=4;$j<8;$j++){
			$forcast_sum[$i][9]+=$forcast_sum[$i][$j];
		}
	}
	$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sum=$dbo->getRs($sql);
	foreach ($budget_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sum as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
	$sql="select * from $t_group_forcast where quarter!=0  order by forcast_id desc limit 30";
	$forcast_list=$dbo->getRs($sql);
	$sql="select * from $t_group_forcast where quarter!=0 and status=2 order by forcast_id desc ";
	$forcast_un_list=$dbo->getRs($sql);
	$sql="select group_id,sum(amount) from $t_group_forcast where quarter!=0 and status=2 and year=$year group by group_id";
	$unforcast=$dbo->getRs($sql);
	foreach($unforcast as $df){
		$forcast_sum[$df['group_id']][11]=$df['sum(amount)'];
	}
	$sql="select * from $t_groups order by group_id Asc";
	$group_list=$dbo->getRs($sql);
	$year_list=range(2010,$year+1,1);
	$sql="SELECT A.forcast_id,B.group_name,B.group_id,SUM(A.amount) as sum_amount,A.item_id FROM isns_group_forcast A,isns_groups B WHERE  A.group_id=B.group_id GROUP BY A.group_id,item_id ";
	$table_rs=$dbo->getRs($sql);
	$table_all=array(array());
	foreach ($table_rs as $table_row){
		$table_all[$table_row['group_id']][$table_row['item_id']]=$table_row['sum_amount'];
		if(isset($table_all['0'][$table_row['item_id']])){
			$table_all['0'][$table_row['item_id']]+=$table_row['sum_amount'];
		}else{
			$table_all['0'][$table_row['item_id']]=$table_row['sum_amount'];
		}
	}
	$sql="select max(id) as m from isns_group_budget_type ";
	$max_item_id=$dbo->getRow($sql);
	$max_item_id=$max_item_id['m'];
	$number_arr=range(1,$max_item_id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>俱乐部报销管理系统</title>
<base href='<?php echo $siteDomain;?>' />
<!--<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/iframe.css">-->
<script type="text/javascript">
        function s() {
            var options=document.getElementById("budget_year");
            for (var i = 0; i < options.length; i++) {
                if (options[i].selected) {
                   window.location.href=options[i].value;
                }
            }
        }
    </script>
</head>
<body id="iframecontent"><?php if(is_admin($user_id)=='Y'){?>
    <div class="create_button"><a href="main.php?app=group"><?php echo $g_langpackage->g_return;?></a></div>
    <h2 class="app_group"><?php echo $g_langpackage->g_manage;?></h2>
    <div class="tabs">
        <ul class="menu">
                        <li  ><a href="modules.php?app=group_budget&group_id=<?php echo $group_id;?>" title="<?php echo $g_langpackage->g_budget_k;?>"><?php echo $g_langpackage->g_budget_k;?></a></li>
                        <li class="active"><a href="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>" title="<?php echo $g_langpackage->g_budget;?>"><?php echo $g_langpackage->g_budget_manager;?></a></li>
        </ul>
    </div>
	
<table class='form_table '>		
			<tr>
			<td><table><tr><td><?php echo $g_langpackage->g_budget_view;?>：</td>
			<td>
				<select id="budget_year" onchange="s()">
					<option selected="selected"></option>
					<option value="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=2009">2009</option>
					<option value="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=2010">2010</option>
					<option value="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=2011" >2011</option>
					<option value="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=2012">2012</option>	
				</select>
			</td>
			<td><?php echo $g_langpackage->g_budget_reimbursement;?>：</td>
			<td><input type="button" value=" <?php echo $g_langpackage->g_budget_list;?> " name="budget_list" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=1';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_budget_unaprove;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=2';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_forcast_unaprove;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=4';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_forcast_year_forcast;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=5';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_budget_deleted;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=3';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_table;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>&mod=6';"></input>
			    
			   
			    </td>
			    </tr></table></td></tr>
			     <?php if($mod==6){?>
			     <tr>项目开销表：</tr>
			     <table width="100%" border="1" cellpadding="5" cellspacing="0">
			     <tr><td>Club</td><?php foreach($item_rs as $item_row){?><td><?php echo itemidtoname($item_row['id']);?></td><?php }?></tr>
			     <?php foreach($table_all as $k1=>$table_row){?><tr><td><?php if(groupidtoname($k1)==''){?><font size="5">Total</font><?php }?><?php echo groupidtoname($k1);?></td><?php foreach($number_arr as $r1){?><td><?php echo isset($table_row[$r1])?($table_row[$r1]):0;?></td><?php }?></tr><?php }?>
			     </table>
			    	<?php }?>
			    <?php if($mod==5){?>
			    <tr><td>
			    <form action="do.php?act=group_forcast_year" method="post">
			    <table  border="1" cellpadding="5" cellspacing="0">
					<tr><td>Club Name</td><td>Allocate</td><td colspan="2">Q1</td><td colspan="2">Q2</td><td colspan="2">Q3</td><td colspan="2">Q4</td><td colspan="4"></td></tr>
					<tr><td></td><td></td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Total Foreacst</td><td>Total Actual</td><td>Forecast Rest</td><td>Unapproved Forecast</td></tr>
					<?php foreach($forcast_sum as $key=>$value1){?>
					<?php if(groupidtoname($key)!=''){?>
					<tr>
					
					<td><?php echo groupidtoname($key);?></td><td><input name="allocate[<?php echo $key;?>]" value="<?php echo $value1[10];?>"></input></td><td><?php echo $value1[0];?></td><td><?php echo $value1[4];?></td><td><?php echo $value1[1];?></td><td><?php echo $value1[5];?></td><td><?php echo $value1[2];?></td><td><?php echo $value1[6];?></td><td><?php echo $value1[3];?></td><td><?php echo $value1[7];?></td><td><?php echo $value1[8];?></td><td><?php echo $value1[9];?></td><td><?php echo $value1[10]-$value1[8];?></td><td><?php echo $value1[11];?></td>
					
					</tr>
					<?php }?>
					<?php }?>
					<tr><td colspan="2">年份：<input name="year_forcast" readonly="readonly" value="<?php echo $year;?>"></input></td><td><input type="submit" value="submit"></input></td><td></td></tr>
					</table></form>
			    </td></tr>
			    
			    
			    
			    
			    	<?php }?>
			    <?php if($mod!=5&&$mod!=6){?>
			
				<tr><td><form action="modules.php?app=group_budget_search" method="post">
				<table border="1" cellpadding="5" cellspacing="0">
				<table border="1" cellpadding="5" cellspacing="0">
				<tr>
				<td colspan="9"><font size="5">搜索：</font></td></tr><tr>
				
				<td>类别：<select name="kind"><option value="1">spending</option><option value="2">forecast</option></select></td>
				<td>ID:<input  style="width:50px" name="ID"></input></td>
				<td>俱乐部：<select name="group"><option value="0">all</option><?php foreach($group_list as $group_row){?><option value="<?php echo $group_row['group_id'];?>"><?php echo groupidtoname($group_row['group_id']);?></option><?php }?></select></td>
				<td>项目：<select name="item"><option value="0">all</option><?php foreach($item_rs as $item_row){?> <option value="<?php echo $item_row['id'];?>"><?php echo $item_row['item'];?><?php }?></select></td>
				<td>提交人：<input style="width:90px" name="requester"></input></td>
				<td>年份：<select name="year"><option value="0">all</option><?php foreach($year_list as $year_row){?> <option value="<?php echo $year_row;?>"><?php echo $year_row;?></option>    <?php }?></select></td>
				<td>季度：<select name="quarter"><option value="0">all</option><option value="1">Q1</option><option value="2">Q2</option><option value="3">Q3</option><option value="4">Q4</option></select></td>
				<td>状态：<select name="status"><option value="0">all</option><option value="1">approved</option><option value="2">wait</option><option value="3">return</option></select></td>
				<td><input type="submit" value="Go"></input></td>
				</tr>
				
				</table></form>
				</td></tr>
				<tr>
				<td><?php echo $year;?>年总表：</td>	
			</tr>
				<tr>
				<td>
					<table  border="1" cellpadding="5" cellspacing="0" bgcolor="#F5F5DC">
					<tr><td>Club Name</td><td>Allocate</td><td colspan="2">Q1</td><td colspan="2">Q2</td><td colspan="2">Q3</td><td colspan="2">Q4</td><td colspan="4"></td></tr>
					<tr><td></td><td></td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Total Foreacst</td><td>Total Actual</td><td>Forecast Rest</td><td>Unapproved Forecast</td></tr>
					<?php foreach($forcast_sum as $key=>$value1){?>
					<?php if(groupidtoname($key)!=''){?>
					<tr>
					
					<td><?php echo groupidtoname($key);?></td><td><?php echo $value1[10];?></td><td><?php echo $value1[0];?></td><td><?php echo $value1[4];?></td><td><?php echo $value1[1];?></td><td><?php echo $value1[5];?></td><td><?php echo $value1[2];?></td><td><?php echo $value1[6];?></td><td><?php echo $value1[3];?></td><td><?php echo $value1[7];?></td><td><?php echo $value1[8];?></td><td><?php echo $value1[9];?></td><td><?php echo $value1[10]-$value1[8];?></td><td><?php echo $value1[11];?></td>
					
					</tr>
					<?php }?>
					<?php }?>
					</table>
				</td></tr>
				<?php }?>
				<?php if($mod==1){?>
				<tr><td>最近季度预算列表：</td></tr>
			<tr><td>
			<table border="1" cellpadding="5" cellspacing="0" bgcolor="#CCCC99">
			<tr>
			<td>
			Forecast ID</td>
			<td>Club Name</td>
			<td>Requester</td>
			<td>Year</td>
			<td>Quarter</td>
			<td>Item</td>
			<td>Amount</td>
			<td>Description</td>
			<td>Submitted Time</td>
			<td>Status</td>
			<td>Operate/Approver</td>
			</tr>
			<?php foreach($forcast_list as $row){?>
			<tr>
			<td><?php echo $row['forcast_id'];?></td>
			<td><?php echo groupidtoname($row['group_id']);?></td>
			<td><?php echo useridtoname($row['user_id']);?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['quarter'];?></td>
			<td><?php echo itemidtoname($row['item_id']);?></td>
			<td><?php echo $row['amount'];?></td>
			<td><?php echo $row['comments'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo statustoname($row['status']);?></td>
			<td><?php if($row['status']==2){?><form action="do.php?act=group_forcast_approve" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Approve"></input></form>
					<form action="do.php?act=group_forcast_disapprove" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Refuse"></input><textarea name="approver_comments">Reasons for refusal:</textarea></form>
					<?php }?>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?></td>
			</tr>
			<?php }?>
			</table></td></tr>
				<tr><td>最近所有俱乐部报销列表：</td></tr>
			<tr> 
			<td colspan="4" >
				<table width="100%" border="1" cellpadding="5" cellspacing="0" bgcolor="#EEE8AA">
				<tr><td>Forecast ID</td>
				<td>Spending ID</td>
				<td>Date</td>
					<td>Club</td>
					<td>Forecast Amount</td>
					
					<td>Requester</td>
					<td>WWID</td>
					<td>Office/Shift</td>
					<td>Item</td>
					<td>Description</td>
					<td>Comments</td>
					<td>Unit Price</td>
					<td>Quality</td>
					<td>Amount</td>
					
					<td>Amount Rest</td>
					<td>Operate/Approver</td>
					
					<td>Statue</td>
					</tr>
					
					<?php foreach($budget_rs as $row){?>
					<tr>
					<td><?php echo $row['forcast_id'];?></td>
					<td><?php echo $row['budget_id'];?></td>
					<td><?php echo $row['yearB'];?>-Q<?php echo $row['quarterB'];?></td>
						<td><?php echo groupidtoname($row['group_id']);?></td>
						<td><?php echo $row['forecast'];?></td>
						
					<td><?php echo useridtoname($row['user_id']);?></td>
					<td><?php echo useridtowwid($row['user_id']);?></td>
					<td><?php echo $row['kind'];?></td>
					<td><?php echo itemidtoname($row['item_id']);?></td>
					<td><?php echo $row['forcast_comments'];?></td>
					<td><?php echo $row['description'];?></td>
					
					<td><?php echo $row['unit_price'];?></td>
					<td><?php echo $row['quality'];?></td>
					<td><?php echo $row['amount'];?></td>
					
					<td><?php if($row['status']!=3){?><?php echo $row['forecast']-$budget_forcast[$row['forcast_id']];?><?php }?></td>
					<td><?php if($row['status']==2){?><form action="do.php?act=group_budget_approve" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="budget_id" value="<?php echo $row['budget_id'];?>"></input><input type="submit" value="Approve"></input></form>
					<form action="do.php?act=group_budget_disapprove" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="budget_id" value="<?php echo $row['budget_id'];?>"></input><input type="submit" value="Refuse"></input><textarea name="approver_comments">Reasons for refusal:</textarea></form>
					<?php }?>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?>
					</td>
					
					<td><?php echo statustoname($row['status']);?></td></tr>
					  <?php }?>
				</table>
			</td>
			</tr>
			
			<?php }?>
			<?php if($mod==2){?>
			<tr><td>所有未审批报销列表：</td></tr>
			<tr>
			<td>
			<table border="1" cellpadding="5" cellspacing="0">
				<tr><td>Forecast ID</td>
				<td>Forecast</td>
					<td>Club</td>
					<td>Forecast Amount</td>
					<td>Requester</td>
					<td>WWID</td>
					<td>Office/Shift</td>
					<td>Item</td>
					<td>Description</td>
					<td>Comments</td>
					<td>Unit Price</td>
					<td>Quality</td>
					<td>Amount</td>
					<td>Statue</td>
					<td>Operate</td>
					<td>Amount Rest</td></tr>
					
					<?php foreach($budget_un_rs as $row){?>
					<tr>
					<td><?php echo $row['forcast_id'];?></td>
					<td><?php echo $row['yearB'];?>-Q<?php echo $row['quarterB'];?></td>
						<td><?php echo groupidtoname($row['group_id']);?></td>
					
						<td><?php echo $row['forecast'];?></td>
					<td><?php echo useridtoname($row['user_id']);?></td>
					<td><?php echo useridtowwid($row['user_id']);?></td>
					<td><?php echo $row['kind'];?></td>
					<td><?php echo itemidtoname($row['item_id']);?></td>
					<td><?php echo $row['forcast_comments'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['unit_price'];?></td>
					<td><?php echo $row['quality'];?></td>
					<td><?php echo $row['amount'];?></td>
					<td><?php echo statustoname($row['status']);?></td>
					<td><?php if($row['status']==2){?><form action="do.php?act=group_budget_approve" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="budget_id" value="<?php echo $row['budget_id'];?>"></input><input type="submit" value="Approve"></input></form>
					<form action="do.php?act=group_budget_disapprove" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="budget_id" value="<?php echo $row['budget_id'];?>"></input><input type="submit" value="Refuse"></input><textarea name="approver_comments">Reasons for refusal:</textarea></form>
					<?php }?>
					</td>
					<td><?php echo $row['forecast']-$budget_forcast[$row['forcast_id']];?></td>
					</tr>
					  <?php }?>
				</table>
				</td></tr>
			<?php }?>
			<?php if($mod==3){?>
			<tr><td>所有已退回报销列表：</td></tr>
			<tr>
			<td>
			<table width="100%" border="1" cellpadding="5" cellspacing="0">
				<tr><td>Forecast ID</td>
				<td>Forecast</td>
					<td>Club</td>
					<td>Forecast Amount</td>
					<td>Requester</td>
					<td>WWID</td>
					<td>Office/Shift</td>
					<td>Item</td>
					<td>Description</td>
					<td>Comments</td>
					<td>Unit Price</td>
					<td>Quality</td>
					<td>Amount</td>
					<td>Statue</td>
					<td>Approver</td>
					</tr>
					
					<?php foreach($budget_un_rs as $row){?>
					<tr>
					<td><?php echo $row['forcast_id'];?></td>
					<td><?php echo $row['yearB'];?>-Q<?php echo $row['quarterB'];?></td>
						<td><?php echo groupidtoname($row['group_id']);?></td>
					
						<td><?php echo $row['forecast'];?></td>
					<td><?php echo useridtoname($row['user_id']);?></td>
					<td><?php echo useridtowwid($row['user_id']);?></td>
					<td><?php echo $row['kind'];?></td>
					<td><?php echo itemidtoname($row['item_id']);?></td>
					<td><?php echo $row['forcast_comments'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['unit_price'];?></td>
					<td><?php echo $row['quality'];?></td>
					<td><?php echo $row['amount'];?></td>
					<td><?php echo statustoname($row['status']);?></td>
					<td><?php echo useridtoname(intval($row['approver']));?>
					</td>
					</tr>
					  <?php }?>
				</table>
				</td></tr>
			<?php }?>
			<?php if($mod==4){?>
			<tr><td>未审批季度预算列表：</td></tr>
			<tr><td>
			<table border="1" cellpadding="5" cellspacing="0">
			<tr>
			<td>
			Forecast ID</td>
			<td>Club Name</td>
			<td>Requester</td>
			<td>Year</td>
			<td>Quarter</td>
			<td>Item</td>
			<td>Amount</td>
			<td>Comment</td>
			<td>Submitted Time</td>
			<td>Status</td>
			<td>Operate/Approver</td>
			</tr>
			<?php foreach($forcast_un_list as $row){?>
			<tr>
			<td><?php echo $row['forcast_id'];?></td>
			<td><?php echo groupidtoname($row['group_id']);?></td>
			<td><?php echo useridtoname($row['user_id']);?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['quarter'];?></td>
			<td><?php echo itemidtoname($row['item_id']);?></td>
			<td><?php echo $row['amount'];?></td>
			<td><?php echo $row['comments'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo statustoname($row['status']);?></td>
			<td><?php if($row['status']==2){?><form action="do.php?act=group_forcast_approve" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Approve"></input></form>
					<form action="do.php?act=group_forcast_disapprove" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Refuse"></input><textarea name="approver_comments">Reasons for refusal:</textarea></form>
					<?php }?>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?></td>
			</tr>
			<?php }?>
			</table></td></tr>
			<?php }?>
</table>
<?php }?>
</body>
</html><?php } ?>