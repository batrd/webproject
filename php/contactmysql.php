<?php
header("Content-Type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname="product";
$conn = new mysqli($servername, $username, $password,$dbname);
$query="set names utf8";
mysqli_query($conn,$query);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

?>