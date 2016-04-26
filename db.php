<?php
mysql_connect("localhost:3306","root","lsc1995")or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
mysql_set_charset("utf8");
mysql_select_db("vote") or die("指定数据库打开失败");
mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");
//插入数据库用的函数
function insert($table,$array){
  $keys=join(",",array_keys($array));
  $vals="'".join("','",array_values($array))."'";
  $sql="insert {$table}($keys) values({$vals})";
  $res=mysql_query($sql);
  return $res;
}
function getRows($did){
  $sql="select * from message where did=".$did;
  $res=mysql_query($sql);
  $rows=mysql_fetch_array($res);
  return $rows;
}
 ?>
