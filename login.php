<?php
include_once"db.php";
$arr=$_POST;
echo var_dump($arr);
//假设能接收值
$name=$arr[username];
//md5加密
$password=md5($arr[password]);
$sql="select * from device_user where username='{$username}' and password='{$password}'";
$row=fetchOne($sql);
if($row){
  //登陆成功保存在$seesion中
	$_SESSION['username']=$row['name'];
  //登陆成功后的操作

}else{
		//登陆失败的操作
}

?>
