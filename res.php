<?php
include_once"db.php";
$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$sql='insert into user values(\''.$arr['name'].'\',\''.$arr['password'].'\')';
	//echo $sql;
	mysql_query($sql);

 ?>
