<?php
include ('coon.php');
$inputNickName = $_GET['inputNickName'];
$inputSex = $_GET['inputSex'];
$inputCountry = $_GET['inputCountry'];
$inputCity = $_GET['inputCity'];
$inputTel = $_GET['inputTel'];
$imageurl = $_GET['imageurl'];
$sql = "update `user` 
set nickName = '{$inputNickName}',sex = '{$inputSex}',country = '{$inputCountry}',
city = '{$inputCity}',tel = '{$inputTel}' 
where img = '{$imageurl}'";
echo $sql;
mysqli_query($link,$sql);
?>