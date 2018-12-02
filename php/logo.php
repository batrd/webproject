<?php
header( "Content-Type: text/html;charset=utf-8" );
require( 'contactmysql.php' );
session_start();
$name = $_POST[ 'name' ];
$md5pwd = $_POST[ 'pwd' ];
$sql = "select * from userinfo where name='". $name."'" ;
$result = mysqli_query( $conn, $sql );
	if ( $result) {
		$row = mysqli_fetch_assoc( $result );
		$pa = $row[ "pwd" ];
		if ( $md5pwd == $pa ) {
			$_SESSION['user'] = $row['name'];
			$arry['success']="1";
			$arry['user']=$_SESSION['user'];
			$arry['msg']="登录成功";
		} else {
			$arry['success']="0";
			$arry['msg']="账号或密码错误";
		}
	} else {
		$arry['success']="0";
		$arry['msg']="账号不存在";
	}
 echo json_encode($arry);
?>