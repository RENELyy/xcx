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
$sql = "insert into `content`(nickName,content,imageUrl,todaydate,todaytime) VALUES ('{$nickName}','{$content}','{$imageUrl}','{$todaydate}','{$todaytime}')";
mysqli_query($link,$sql);
?>