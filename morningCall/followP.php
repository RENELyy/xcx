<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 10:44
 */
include ("coon.php");
$nickName = $_GET['nickName'];
$nickNameId = $_GET['nickNameId'];
$imageUrlId = $_GET['imageUrlId'];
$sql = "insert into `{$nickName}` VALUES ('{$nickNameId}','{$imageUrlId}')";
mysqli_query($link,$sql);
?>
