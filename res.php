<?php
include_once"db.php";
$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$sql='insert into user values(\''.$arr['name'].'\',\''.$arr['password'].'\')';
	echo $sql;
/*	$res=mysql_query($sql);
	if($res){
		//成功
		return true;
		}else{
		//插入失败的操作
		return false;
	}
*/
 ?>
