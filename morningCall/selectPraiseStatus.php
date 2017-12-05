<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/12/5
 * Time: 21:36
 */
include ('coon.php');
$sql = "select * from `praiseStatus`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('nickName' => $row['nickName'],
            'content' => $row['content'],
            'todaytime' => $row['todaytime'],
            'praiseNickName' => $row['praiseNickName']
        );
    }
}
print_r(json_encode($output));
?>