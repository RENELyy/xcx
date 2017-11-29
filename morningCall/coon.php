<?php
$dbname = 'test';
$host = 'localhost';
$user = 'yangtao';
$pwd = '0912104renelxl';
$link = mysqli_connect($host, $user, $pwd, $dbname);
if(!$link) {
	die('Connect Server Failed:' . mysqli_connect_error());
}
?>
