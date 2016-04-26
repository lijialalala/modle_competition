<?php
include_once"db.php";
$sql="select * from user where username=".$_SESSION['username'];
$res=mysql_query($sql);
$rows=mysql_fetch_assoc($res);
$arr=$_POST;
$arr['time']=Time();
echo var_dump($arr);
$sql='insert into message values(null\''.$arr['para'].'\','.time().','.$arr['which'].',\''.$rows['username'].'\')';
echo $sql;
//mysql_query($sql);
//echo ture;

 ?>
