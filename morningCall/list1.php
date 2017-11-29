<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 13:46
 */
include("coon.php");
$nickName = $_GET['nickName'];
$sql = "select * from `{$nickName}`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('nickNameId' => $row['nickNameId'],'imageUrlId' => $row['imageUrlId']);
    }
}
print_r(json_encode($output));
?>