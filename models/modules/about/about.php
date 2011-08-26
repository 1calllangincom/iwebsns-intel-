<?php
$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
	}else{
		$mod=1;
	}

?>