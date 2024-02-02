<?php
$hostName = "localhost";
$userName = "ชื่อที่ตั้งไว้ในphp";
$passWord = "หรัสก็คือกัน";
$dbName = "clothdb";
$conn = mysqli_connect($hostName, $userName, $passWord, $dbName);
if (mysqli_connect_error()) {
	echo "Connect falied : " . mysqli_connect_error();
} else {
	//echo "Connect Successfully." ;
}
?>
