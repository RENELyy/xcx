<?php
include ('coon.php');
$RnickName = $_GET['RnickName'];
$Rdate = $_GET['Rdate'];
$Rsex = $_GET['Rsex'];
$Rcontent = $_GET['Rcontent'];
$Rtel = $_GET['Rtel'];
$RweChatNo = $_GET['RweChatNo'];
$imageurl = $_GET['imageurl'];
$todaydate = $_GET['todaydate'];
$todaytime = $_GET['todaytime'];
$sql = "insert into `Release`(RnickName,Rdate,Rsex,Rcontent,Rtel,RweChatNo,imageurl,todaydate,todaytime) values ('{$RnickName}','{$Rdate}','{$Rsex}','{$Rcontent}','{$Rtel}','{$RweChatNo}','{$imageurl}','{$todaydate}','{$todaytime}')";
echo $sql;
mysqli_query($link,$sql);
?>