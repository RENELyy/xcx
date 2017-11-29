<?php
include ("coon.php");
$nickName = $_GET['nickName'];
$replyname = $_GET['replyname'];
$replytime = $_GET['replytime'];
$replycontent = $_GET['replycontent'];
$view = $_GET['view'];
$replyimg = $_GET['replyimg'];
$sql = "insert into `reply` VALUES ('{$nickName}','{$replyname}','{$replycontent}','{$replytime}','{$view}','{$replyimg}')";
mysqli_query($link,$sql);
?>