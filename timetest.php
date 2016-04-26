<?php
require_once"db.php";
$rows=getRows(1);
echo var_dump($rows);
foreach ($rows as $row) {
  echo $row["message"];
  echo $row['time'];
  # code...
}
 ?>
