<?php
include_once"db.php":
$arr=$_POST;
echo var_dump($arr);
	if(insert("message", $arr)){
		//插入成功的操作
	}else{
		//插入失败的操作
	}
	return $mes;


 ?>
