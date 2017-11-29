<?php
include("coon.php");
$nickName = $_GET['nickName'];
$sex = $_GET['sex'];
$country = $_GET['country'];
$city = $_GET['city'];
$img = $_GET['img'];
$tel = $_GET['tel'];
$sql = "insert into `user`(nickName,sex,country,city,img,tel) values ('{$nickName}','{$sex}','{$country}','{$city}','{$img}','{$tel}')";
mysqli_query($link, $sql);
?>
