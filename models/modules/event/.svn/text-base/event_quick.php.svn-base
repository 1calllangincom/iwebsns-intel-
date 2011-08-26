<?php

$user_id=get_sess_userid();

$t_users=$tablePreStr."users";
dbtarget('r', $dbServs);
$dbo=new dbex();
if($user_id!=''){
	$sql="select wwid from $t_users where user_id=$user_id";
	$row=$dbo->getRow($sql);
}
if(isset($row['wwid'])){
	$wwid=$row['wwid'];
}else{
	$wwid='';
}
?>