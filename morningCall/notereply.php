<?php
include ('coon.php');
$sql = "select * from `reply`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('nickName' => $row['nickName'],'name' => $row['name'],'content' => $row['content'],'todaytime' => $row['todaytime'],'view' => $row['view']);
    }
}
print_r(json_encode($output));
?>