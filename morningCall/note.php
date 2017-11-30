<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 10:52
 */
include ("coon.php");
$nickName = $_GET['nickName'];
$content = $_GET['content'];
$imageUrl = $_GET['imageUrl'];
$todaydate = $_GET['todaydate'];
$todaytime = $_GET['todaytime'];
$Pid = $_GET['Pid'];
$sql = "insert into `content`(nickName,content,imageUrl,todaydate,todaytime,Pid) VALUES ('{$nickName}','{$content}','{$imageUrl}','{$todaydate}','{$todaytime}','{$Pid}')";
mysqli_query($link,$sql);
?>