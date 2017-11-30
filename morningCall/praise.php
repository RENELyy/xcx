<?php
include ("coon.php");
$pid = $_GET['pid'];
$replynickName = $_GET['replynickName'];
$replytodaytime = $_GET['replytodaytime'];
$replycontent = $_GET['replycontent'];
$sql = "update `content`
set Pid = '{$pid}' 
where nickName = '{$replynickName}' and content = '{$replycontent}' and todaytime = '{$replytodaytime}'";
mysqli_query($link,$sql);
?>