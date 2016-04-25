<?php
include_once"db.php";
$arr=$_POST;
//假设能接收值

$name=$arr[loginname];

//md5加密
$password=md5($arr[loginpassword]);
$sql="select * from user where username='{$name}' and userpsw='{$password}'";
echo $sql;
$row=mysql_fetch_row(mysql_query($sql));
if($row){
  //登陆成功保存在$seesion中
	$_SESSION['username']=$name;
echo "有值";
  //登陆成功后的操作
	return true;
}else{
		//登陆失败的操作
		return false;
}

?>
