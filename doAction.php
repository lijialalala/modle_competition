<?php
include_once"db.php";
$name=$_POST['singer_name'];
$num=$_POST['singer_votes'];
$sql='UPDATE vote SET num='.$num.' WHERE name=\''.trim($name).'\'';
echo $sql;
mysql_query($sql);
?>
