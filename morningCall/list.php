<?php
include ("coon.php");
$number = $_GET['number'];
$no = $number + 10;
$sql = "select * from `content` order by `id` desc";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('nickName' => $row['nickName'],'content' => $row['content'],'imageUrl' => $row['imageUrl'],'todaydate' => $row['todaydate'],'todaytime' =>$row['todaytime'],'Pid' => $orw['Pid']);
    }
}
print_r(json_encode($output));
?>