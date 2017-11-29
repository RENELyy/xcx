<?php
/**
 * Created by PhpStorm.
 * User: 41119
 * Date: 2017/11/27
 * Time: 11:35
 */
include ('coon.php');
$sql = "select * from `Release`";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array('RnickName' => $row['RnickName'],
            'Rdate' => $row['Rdate'],
            'Rsex' => $row['Rsex'],
            'Rcontent' => $row['Rcontent'],
            'Rtel' => $row['Rtel'],
            'RweChatNo' => $row['RweChatNo'],
            'Rimg' => $row['Rimg'],
            'imageurl' => $row['imageurl'],
            'todaydate' => $row['todaydate'],
            'todaytime' => $row['todaytime']
            );
    }
}
print_r(json_encode($output));
?>
