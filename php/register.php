<?php
header( "Content-Type: text/html;charset=utf-8" );
require( 'contactmysql.php' );
date_default_timezone_set( 'prc' );
$date = date( "Y-m-d H:i:s", time() );
$name=$_POST['name'];
$number=$_POST['number'];
$pwd=$_POST['pwd'];
$sql = ( "insert into userinfo (name,pwd,number,date) values ('$name','$pwd','$number','$date')" );
if(isset($name,$pwd,$number)){
if(mysqli_query( $conn, $sql )){
	$arry['success']='1';
	$arry['msg']='注册成功';
}else {
	$arry['success']='0';
	$arry['msg']='失败'.mysqli_error( $conn );
}}
echo json_encode($arry);
?>