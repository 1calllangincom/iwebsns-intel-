<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/group/budget_forcast_search.html
 * 如果您的模型要进行修改，请修改 models/modules/group/budget_forcast_search.php
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
if(filemtime("templates/default/modules/group/budget_forcast_search.html") > filemtime(__file__) || (file_exists("models/modules/group/budget_forcast_search.php") && filemtime("models/modules/group/budget_forcast_search.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/group/budget_forcast_search.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
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
			return $name='Aprove'; 
		}
	if($status==3){
			return $name='Reject'; 
		}
	if($status==0){
			return $name='Deleted'; 
		}
	}
$kind=intval(get_argp('kind'));
$group_id=intval(get_argp('group'));
$item_id=intval(get_argp('item'));
$requester=short_check(get_argp('requester'));
$year=intval(get_argp('year'));
$quarter=intval(get_argp('quarter'));
$status=intval(get_argp('status'));
$id=intval(get_argp('ID'));

$t_group_budget=$tablePreStr."group_budget";
$t_group_forcast=$tablePreStr."group_forcast";
$t_users=$tablePreStr."users";
dbtarget('r', $dbServs);
$dbo=new dbex();
if($kind==1){
	
	$condition="";
	if($id!=''){
		$condition.=" and A.budget_id=$id ";
	}
	else {
		if($group_id!=0){
			$condition.=" and A.group_id=$group_id ";
		}
		if($item_id!=0){
			$condition.=" and A.item_id=$item_id ";
		}
		if($requester!=''){
			$sql="select user_id from $t_users where user_name like '$requester'";
			echo $sql;
			$user_rows=$dbo->getRow($sql);
			$user_id=$user_rows['user_id'];
			$condition.=" and A.user_id=$user_id ";
		}
		if($year!=0){
			$condition.=" and A.year=$year ";
		}
		if($quarter!=0){
			$condition.=" and B.quarter=$quarter ";
		}
		if($status!=0){
			$condition.=" and A.status=$status ";
		}
	}
	if($condition==""){
		$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id order by A.budget_id";
	}else{
		$sql="select A.*,B.forcast_id,B.year as yearB,B.quarter as quarterB,B.amount as forecast from $t_group_budget A,$t_group_forcast B where  A.forcast_id=B.forcast_id   $condition order by A.budget_id";
	}
	
	$rs=$dbo->getRs($sql);	
}
else{
	$condition="";
	if($id!=''){
		$condition.=" and forcast_id=$id ";
	}
	else {
		if($group_id!=0){
			$condition.=" and group_id=$group_id ";
		}
		if($item_id!=0){
			$condition.="  and item_id=$item_id ";
		}
		if($requester!=''){
			$sql="select user_id from $t_users where user_name like '$requester'";
			$user_rows=$dbo->getRow($sql);
			$user_id=$user_rows['user_id'];
			$condition.="  and user_id=$user_id ";
		}
		if($year!=0){
			$condition.=" and  year=$year ";
		}
		if($quarter!=0){
			$condition.=" and  quarter=$quarter ";
		}
		if($status!=0){
			$condition.=" and  status=$status";
		}
	}
	if($condition==""){
		$sql="select * from $t_group_forcast order by forcast_id";
	}else{
		$sql="select * from $t_group_forcast where True $condition order by forcast_id desc";
	}
	$rs=$dbo->getRs($sql);	
}
$sql="select A.forcast_id,sum(A.amount) as d from $t_group_budget A where   A.status=1 group by A.forcast_id order by A.time desc";
	$budget_sum=$dbo->getRs($sql);
	foreach ($rs as $row){
		$budget_forcast[$row['forcast_id']]=0;
	}
	foreach($budget_sum as $value3){
		$budget_forcast[$value3['forcast_id']]=$value3['d'];
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Search Result</title>
</head>
<body>
<a href="modules.php?app=group_budget&group_id=<?php echo $group_id;?>">Back</a>
<table><tr><td>搜索结果：</td></tr><?php if($kind==1){?>

			<tr> 
			<td colspan="4" >
				<table width="100%" border="1" cellpadding="5" cellspacing="0">
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
					
					<td>Unit Price</td>
					<td>Quality</td>
					<td>Amount</td>
					<td>Comments</td>
					<td>Amount Rest</td>
					<td>Operate/Approver</td>
					
					<td>Statue</td>
					</tr>
					
					<?php foreach($rs as $row){?>
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
					<td><?php echo $row['description'];?></td>
					
					<td><?php echo $row['unit_price'];?></td>
					<td><?php echo $row['quality'];?></td>
					<td><?php echo $row['amount'];?></td>
					<td><?php echo $row['comments'];?></td>
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
			<?php if($kind==2){?>
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
			<?php foreach($rs as $row){?>
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
			</table></td></tr><?php }?></table>
</body>
</html><?php } ?>