<?php
$chapter = $_POST['chapter'];
$info = $_POST['info'];
$type = $_POST['type'];
$db = "127.0.0.1";
$username = "root";
$password = "";
$conn = mysqli_connect($db, $username, $password, "");
if(!$conn){
	die("连接数据库失败". mysqli_connect_error($conn));
}

$comm = "INSERT INTO teachcontent(chapter, info, type) VALUES($chapter, $info, $type)";
$resutl = $mysqli_query($conn, $comm);
if(!$result){
	die("无法插入数据：".$comm);
}
?>