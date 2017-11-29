<?php
include ('coon.php');
$nickName = $_GET['nickName'];
$image = $_GET['image'];
$sql = "delete from `{$nickName}` where imageUrlId = '{$image}'";
echo $sql;
mysqli_query($link,$sql);
?>