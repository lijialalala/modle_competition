<?php
mysql_connect("localhost:3306","root","lsc1995")or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
mysql_set_charset("utf8");
mysql_select_db("vote") or die("指定数据库打开失败");
mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");
$name=$_POST['singer_name'];
$num=$_POST['singer_votes'];
$sql='UPDATE vote SET num='.$num.' WHERE name=\''.trim($name).'\'';
echo $sql;
mysql_query($sql);
?>
