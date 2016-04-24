<?php
include_once"db.php":
$arr=$_POST;
echo var_dump($arr);
	$arr['password']=md5($_POST['userpassword']);
	if(insert("user", $arr)){
		//插入成功的操作
	}else{
		//插入失败的操作
	}

 ?>
