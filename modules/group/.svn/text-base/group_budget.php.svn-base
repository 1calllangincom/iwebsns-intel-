<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/group/group_budget.html
 * 如果您的模型要进行修改，请修改 models/modules/group/group_budget.php
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
if(filemtime("templates/default/modules/group/group_budget.html") > filemtime(__file__) || (file_exists("models/modules/group/group_budget.php") && filemtime("models/modules/group/group_budget.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/group/group_budget.html",1);
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
	$forcast_id=intval(get_argp('forcast_id'));
	$user_id=get_sess_userid();
	$group_id=intval(get_argg('group_id'));
	$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
		if($mod!=1 && $mod!=2&& $mod!=3&& $mod!=4){
			$year=$mod;
		}
	}else{
		$mod=1;
	}
	dbtarget('r', $dbServs);
	$dbo=new dbex();
	function forcastidtoamount($forcast_id){
		$dbo=new dbex();
		$sql="select amount from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['amount'];
	}
	function forcastidtodescription($forcast_id){
		$dbo=new dbex();
		$sql="select comments from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['comments'];
	}
	function forcastidtoitem($forcast_id){
		$dbo=new dbex();
		$sql="select item_id from isns_group_forcast where forcast_id=$forcast_id";
		$row=$dbo->getRow($sql);
		return $row['item_id'];
	}
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
			return $name='wait'; 
		}
	if($status==1){
			return $name='approve'; 
		}
	if($status==3){
			return $name='reject'; 
		}
	if($status==0){
			return $name='deleted'; 
		}
	}
	
	//表定义
	$t_group_budget=$tablePreStr."group_budget";
	$t_group_budget_type=$tablePreStr."group_budget_type";
	$t_group_forcast=$tablePreStr."group_forcast";
	$t_groups=$tablePreStr."groups";
	
	
	$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast,B.user_id as forcast_user_id,B.item_id as forcast_item_id,B.comments as forcast_comments,B.status as forcast_status from $t_group_budget A,$t_group_forcast B where A.group_id=$group_id and A.forcast_id=B.forcast_id order by A.budget_id desc limit 30";
	$budget_rs=$dbo->getRs($sql);
	$sql="select * from $t_group_budget_type";
	$item_rs=$dbo->getRs($sql);
	$sql="select forcast_id,year,quarter,item_id,amount,status,approver,group_id,user_id,comments from $t_group_forcast where group_id=$group_id and status=1 and quarter!=0 order by forcast_id desc";
	$forcast_rs=$dbo->getRs($sql);
	
	$sql="select * from $t_group_forcast where year=$year and group_id=$group_id and status=1";
	$forcast_rssum=$dbo->getRs($sql);
	$forcast_sum=array(0,0,0,0);
	foreach($forcast_rssum as $r){
		switch($r['quarter']){
			case 1:
				$forcast_sum[0]+=$r['amount'];
				break;
			case 2:
				$forcast_sum[1]+=$r['amount'];
				break;
			case 3:
				$forcast_sum[2]+=$r['amount'];
				break;
			case 4:
				$forcast_sum[3]+=$r['amount'];
				break;
		}
	}
	$sql="select *,B.amount as f from $t_group_forcast A,$t_group_budget B where A.year=$year and A.forcast_id=B.forcast_id and A.group_id=$group_id and B.status=1";
	$budget_rssum=$dbo->getRs($sql);
	$budget_sum=array(0,0,0,0);
	foreach($budget_rssum as $t){
	switch($t['quarter']){
			case 1:
				$budget_sum[0]+=$t['f'];
				break;
			case 2:
				$budget_sum[1]+=$t['f'];
				break;
			case 3:
				$budget_sum[2]+=$t['f'];
				break;
			case 4:
				$budget_sum[3]+=$t['f'];
				break;
		}
	}
	$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sums=$dbo->getRs($sql);
	foreach ($forcast_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach ($budget_rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sums as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
	$sql="select * from $t_group_forcast where group_id=$group_id and quarter!=0 order by forcast_id desc limit 30";
	$forcast_list=$dbo->getRs($sql);
	$sql="select * from $t_groups order by group_id Asc";
	$group_list=$dbo->getRs($sql);
	$year_list=range(2010,$year+1,1);
	$sql="select group_id,amount from $t_group_forcast where year=$year and quarter=0 and group_id=$group_id";
	$allocate=$dbo->getRow($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>俱乐部报销系统</title>
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
 <?php if(is_admin_club_up($user_id)=='Y'){?> 
<body id="iframecontent">
    <div class="create_button"><a href="main.php?app=group"><?php echo $g_langpackage->g_return;?></a></div>
    <h2 class="app_group"><?php echo $g_langpackage->g_manage;?></h2>
    <div class="tabs">
        <ul class="menu">
                         <li  class="active"><a href="modules.php?app=group_budget&group_id=<?php echo $group_id;?>" title="<?php echo $g_langpackage->g_budget_k;?>"><?php echo $g_langpackage->g_budget_k;?></a></li>
                      <?php if(is_admin($user_id)=='Y'){?>  <li><a href="modules.php?app=group_budget_manager&group_id=<?php echo $group_id;?>" title="<?php echo $g_langpackage->g_budget;?>"><?php echo $g_langpackage->g_budget_manager;?></a></li><?php }?>
        </ul>
    </div>
	
<table class='form_table '>		
			<tr>
			<td><table><tr><td><?php echo $g_langpackage->g_budget_view;?>：</td>
			<td>
				<select id="budget_year" onchange="s()">
					<option selected="selected"></option>
					<option value="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=2009">2009</option>
					<option value="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=2010">2010</option>
					<option value="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=2011" >2011</option>
					<option value="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=2012">2012</option>	
				</select>
			</td>
			<td><?php echo $g_langpackage->g_budget_reimbursement;?>：</td>
			<td><input type="button" value=" <?php echo $g_langpackage->g_budget_list;?> " name="budget_list" onclick="window.location.href='modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=1';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_budget_i_forcast;?> " name="reimbursement" onclick="window.location.href='modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=2';"></input>
			    <input type="button" value=" <?php echo $g_langpackage->g_budget_rest;?> " name="rest" onclick="window.location.href='modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=3';"></input>
			    </td>
			    </tr></table></td></tr>
			    <tr><td><form action="modules.php?app=group_budget_search" method="post">
				<table border="1" cellpadding="5" cellspacing="0">
				<tr>
				<td colspan="9"><font size="5">搜索：</font></td></tr><tr>
				
			<td>类别：<select name="kind"><option value="1">budget</option><option value="2">forecast</option></select></td>
				<td>ID:<input  style="width:50px" name="ID"></input></td>
				<td>俱乐部：<?php echo groupidtoname($group_id);?></td>
				<td>项目：<select name="item"><option value="0">all</option><?php foreach($item_rs as $item_row){?> <option value="<?php echo $item_row['id'];?>"><?php echo $item_row['item'];?><?php }?></select></td>
				<td>提交人：<input style="width:90px" name="requester"></input></td>
				<td>年份：<select name="year"><option value="0">all</option><?php foreach($year_list as $year_row){?> <option value="<?php echo $year_row;?>"><?php echo $year_row;?></option>    <?php }?></select></td>
				<td>季度：<select name="quarter"><option value="0">all</option><option value="1">Q1</option><option value="2">Q2</option><option value="3">Q3</option><option value="4">Q4</option></select></td>
				<td>状态：<select name="status"><option value="0">all</option><option value="1">approved</option><option value="2">wait</option><option value="3">return</option></select></td>
				<td><input type="hidden" value="<?php echo $group_id;?>" name="group" ></input><input type="submit" value="Go"></input></td>
				</tr>
				
				</table></form>
				</td></tr>
			<tr>
				<td><?php echo $year;?>年总表：</td>	
			</tr>
				
				<tr>
				<td>
					<table border="1" cellpadding="5" cellspacing="0" bgcolor="#F5F5DC">
					<tr><td>Club Name</td><td>Allocate</td><td colspan="2">Q1</td><td colspan="2">Q2</td><td colspan="2">Q3</td><td colspan="2">Q4</td><td colspan="2"></td></tr>
					<tr><td></td><td></td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Forecast</td><td>Actual</td><td>Total Forecast</td><td>Total Actual</td></tr>
					<tr>
					<td><?php echo groupidtoname($group_id);?></td><td><?php echo $allocate['amount'];?></td><td><?php echo $forcast_sum[0];?></td><td><?php echo $budget_sum[0];?></td><td><?php echo $forcast_sum[1];?></td><td><?php echo $budget_sum[1];?></td><td><?php echo $forcast_sum[2];?></td><td><?php echo $budget_sum[2];?></td><td><?php echo $forcast_sum[3];?></td><td><?php echo $budget_sum[3];?></td><td><?php echo ($forcast_sum[0]+$forcast_sum[1]+$forcast_sum[2]+$forcast_sum[3]);?></td><td><?php echo ($budget_sum[3]+$budget_sum[2]+$budget_sum[1]+$budget_sum[0]);?></td>
					</tr>
					</table>
				</td></tr>
				<?php if($mod==1){?>
				
			<tr><td>本俱乐部季度预算列表：</td></tr>
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
			<td>Amount Rest</td>
			<td>Description</td>
			<td>Submitted Time</td>
			<td>Status</td>
			<td>Approver</td>
			<td>Operate</td>
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
			<td><?php if($row['status']!=3){?><?php echo $row['amount']-$budget_forcast[$row['forcast_id']];?><?php }?></td>
			<td width="150px"><?php echo $row['comments'];?></td>
			<td><?php echo $row['time'];?></td>
			<td><?php echo statustoname($row['status']);?></td>
			<td><?php if($row['status']==2){?><form action="do.php?act=group_forcast_del" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="delete"></input></form><?php }?>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?></td>
			<td><?php if($row['status']==1&&($row['amount']-$budget_forcast[$row['forcast_id']])>0){?><form action="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=4" method="post" ><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Apply"></input></form><?php }?></td>
			</tr>
			<?php }?>
			</table></td></tr>
			<tr><td>本俱乐部报销列表：</td></tr>
			<tr>
			
			<td colspan="4" >
				<table  border="1" cellpadding="5" cellspacing="0" bgcolor="#EEE8AA">
				<tr>
				<td>Foreacst ID</td>
				<td>Spending ID</td>
				<td>Date</td>
					<td>Club</td>
					<td>forecast Amount</td>
					<td>Requester</td>
					<td>WWID</td>
					<td>Office/Shift</td>
					<td>Item</td>
					<td>Description</td>
					<td>Comments</td>
					<td>Unit Price</td>
					<td>Quantity</td>
					<td>Amount</td>
					<td>Statue</td>
					<td>Approver/Operate</td></tr>
					
					<?php foreach($budget_rs as $row){?>
					<tr>
					<td><?php echo $row['forcast_id'];?></td>
					<td><?php echo $row['budget_id'];?></td>
					<td width="5%"><?php echo $row['yearB'];?>-Q<?php echo $row['quarterB'];?></td>
						<td><?php echo groupidtoname($row['group_id']);?></td>
					
						<td><?php echo $row['forecast'];?></td>
					<td><?php echo useridtoname($row['user_id']);?></td>
					<td><?php echo useridtowwid($row['user_id']);?></td>
					<td><?php echo $row['kind'];?></td>
					<td width="9%"><?php echo itemidtoname($row['item_id']);?></td>
					<td><?php echo $row['forcast_comments'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['unit_price'];?></td>
					<td><?php echo $row['quality'];?></td>
					<td><?php echo $row['amount'];?></td>
					<td><?php echo statustoname($row['status']);?></td>
					<td width="5"><?php if($row['status']==2){?><form action="do.php?act=group_budget_del" method="post"><input type="hidden" name="group_id" value="<?php echo $row['group_id'];?>"></input><input type="hidden" name="budget_id" value="<?php echo $row['budget_id'];?>"></input><input type="submit" value="delete"></input></form><?php }?>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?></td>
					</tr>
					  <?php }?>
				</table>
			</td>
			</tr>
			<?php }?>
			<?php if($mod==2){?>
			<tr>
			<td><form action="do.php?act=group_forcast_add" method="post"><table>
			<tr><td>Requester：</td><td><?php echo useridtoname($user_id);?></td></tr>
				<tr><td>Club：</td><td><?php echo groupidtoname($group_id);?></td>
				</tr>
				<tr><td>Year(ex:2012)：</td><td><select name="year"><option value="" selected="selected"><?php echo $g_langpackage->g_cho;?></option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option></select></td></tr>
				<tr><td>Quarter(ex:Q3)：</td><td><select name="quarter"><option value="" selected="selected"><?php echo $g_langpackage->g_cho;?></option><option value="1">Q1</option><option value="2">Q2</option><option value="3">Q3</option><option value="4">Q4</option></select></td></tr>
				<tr><td>Item：</td><td><select name="item"><option value="" selected="selected"><?php echo $g_langpackage->g_cho;?></option><?php foreach($item_rs as $item_row){?><option value="<?php echo $item_row['id'];?>"><?php echo $item_row['item'];?></option> <?php }?></select></td></tr>
				<tr><td>Amount：</td><td><input name="amount"></input></td></tr>
				<tr><td>Comment:</td><td><textarea rows="10" cols="30"  name="comments"></textarea></td></tr>
				<tr><td><input type="hidden" name="group_id" value="<?php echo $group_id;?>"></input></td><td><input type="submit" value=" Submit "></input></td></tr>
				
			</table></form></td></tr>
			<?php }?>
			<?php if($mod==3){?>
			<tr><td>
			未完预算：</td></tr>
			<tr><td><table width="100%" border="1" cellpadding="5" cellspacing="0">
				<tr><td>Forecast ID</td>
				<td>Forecast</td>
					<td>Club</td>
					<td>Forecast Amount</td>
					<td>Forecast Amount Rest</td>
					<td>Requester</td>
					<td>WWID</td>
					<td>Item</td>
					
					<td>Description</td>
					<td>Operate/Approver</td>
					
					<td>Statue</td>
					<td></td>
					</tr>
					
					<?php foreach($forcast_rs as $row){?><?php if((($row['amount']-$budget_forcast[$row['forcast_id']])!=0)&&($row['status']!=3)){?>
					<tr>
					<td><?php echo $row['forcast_id'];?></td>
					<td><?php echo $row['year'];?>-Q<?php echo $row['quarter'];?></td>
						<td><?php echo groupidtoname($row['group_id']);?></td>
						<td><?php echo $row['amount'];?></td>
						<td><?php if($row['status']!=3){?><?php echo $row['amount']-$budget_forcast[$row['forcast_id']];?><?php }?></td>
					<td><?php echo useridtoname($row['user_id']);?></td>
					<td><?php echo useridtowwid($row['user_id']);?></td>
					<td><?php echo itemidtoname($row['item_id']);?></td>
					
					
					<td><?php echo $row['comments'];?></td><td>
					<?php if($row['status']!=2){?><?php echo useridtoname(intval($row['approver']));?><?php }?></td>

					<td><?php echo statustoname($row['status']);?></td>
					<td><form action="modules.php?app=group_budget&group_id=<?php echo $group_id;?>&mod=4" method="post" ><input type="hidden" name="forcast_id" value="<?php echo $row['forcast_id'];?>"></input><input type="submit" value="Apply"></input></form></td></tr>
					 <?php }?> <?php }?>
				</table></td></tr>
			<?php }?>
			<?php if($mod==4){?>
			<form method="post" action="do.php?act=group_budget_add">
			<table  border="0" cellpadding="5" cellspacing="0">
			<tr><th width="30%">报销申请</th><td></td></tr>
				<tr>
				<td>Foreacst ID</td><td><?php echo $forcast_id;?></td></tr>
				
				<tr>	<td>Club</td><td><?php echo groupidtoname($group_id);?></td></tr>
				<tr>	<td>forecast Amount</td><td><?php echo forcastidtoamount($forcast_id);?></td></tr>
				<tr>	<td>Requester</td><td><?php echo useridtoname($user_id);?></td></tr>
					<tr><td>WWID</td><td><?php echo useridtowwid($user_id);?></td></tr>
					<tr><td>Item</td><td><?php echo itemidtoname(forcastidtoitem($forcast_id));?></td></tr>
					<tr><td>Forecast Description</td><td><?php echo forcastidtodescription($forcast_id);?></td></tr>
				<tr>	<td>Office/Shift</td><td><select name="kind"><option value="" selected="selected"><?php echo $g_langpackage->g_cho;?></option><option value="office">Office</option><option value="shift">Shift</option><option value="office/shift">Office/Shift</option></select></td></tr>
					
				<tr>	<td>Comments</td><td><textarea rows="10" cols="30" name="description"></textarea></td></tr>
					<tr><td>Unit Price</td><td><input name="unit_price"></input></td></tr>
					<tr><td>Quantity</td><td><input name="quality"></input></td></tr><tr>
					<td>Amount</td><td><input name="amount"></input></td></tr>
					
					<tr><td></td>
					<td><input type="hidden" value="forcastidtoitem($forcast_id)"></input><input type="hidden" name="group_id" value="<?php echo $group_id;?>"></input><input type="hidden" name="forcast_id" value="<?php echo $forcast_id;?>"></input><input type="submit" value=" submit "></input></td>
					</tr>
					
					</table></form>
			<?php }?>
</table>
</body>
<?php }?>
</html><?php } ?>