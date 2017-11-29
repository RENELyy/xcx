<?php
include ('coon.php');
$img = $_GET['img'];
$sql = "delete from `Release` where imageurl = '{$img}'";
echo $sql;
mysqli_query($link,$sql);
?>