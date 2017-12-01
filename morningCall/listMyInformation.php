<?php
include("coon.php");
//$nickName = $_GET['nickName'];
$sql = "select * from `user`";
//$query = mysql_query($sql);
//while($rs = mysql_fetch_array($query)){
//	$output[] = array('nickName'=>$rs['nickName'],'img'=>$rs['img'],'tel' => $rs['tel']);
//}
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$output[] = array('nickName'=>$row['nickName'],'img'=>$row['img'], 'sex'=>$row['sex'], 'country' => $row['country'], 'city'=>$row['city'],'tel' =>$row['tel']);
	}
}
print_r(json_encode($output));
?>
