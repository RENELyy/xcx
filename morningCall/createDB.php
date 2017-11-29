<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 10:32
 */
include ("coon.php");
$nickName = $_GET['nickName'];
$sql = "create table `{$nickName}` (
  `nickNameId` varchar(50) NOT NULL,
  `imageUrlId` varchar(255) NOT NULL primary key
)";
mysqli_query($link,$sql);
?>