<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 11:10
 */
include ("coon.php");
$content = $_GET['content'];
$time = $_GET['time'];
mysqli_query($link,"delete from `content` WHENEVER {$content} = 'content' and {$time} = 'todaytime'");
?>