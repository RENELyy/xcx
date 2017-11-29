<?php
include ('coon.php');
$sql = "select * from `reply`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('replynickName' => $row['nickName'],'replyname' => $row['name'],'replycontent' => $row['content'],'replytodaytime' => $row['todaytime'],'replyview' => $row['view'],'replyimg' => $row['replyimg']);
    }
}
print_r(json_encode($output));
?>