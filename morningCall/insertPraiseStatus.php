<?php
include ('coon.php');
$replynickName = $_GET['replynickName'];
$replytodaytime = $_GET['replytodaytime'];
$replycontent = $_GET['replycontent'];
$nickName = $_GET['nickName'];
$sql = "insert into `praiseStatus` VALUES ('{$replynickName}','{$replycontent}','{$replytodaytime}','{$nickName}')";
mysqli_query($link,$sql);
?>