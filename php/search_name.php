<?php
header( "Content-Type: text/html;charset=utf-8" );
require( 'contactmysql.php' );
$name = $_POST[ 'name' ];
$sql = "select * from userinfo where name = '" . $name . "'";
if ( isset( $name ) ) {
	$result = mysqli_query( $conn, $sql );
	$pass = mysqli_fetch_array( $result );
	$pa = $pass[ 'name' ];
	if ( $pa ) {
		echo "用户名已存在";
	} else {
		echo "用户名可用";
	}
} else {
	echo "用户名为空";
	mysqli_close( $conn );
}
?>