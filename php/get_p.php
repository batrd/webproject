<?php
header( "Content-Type: text/html;charset=utf-8" );
require 'contactmysql.php';
$pname = $_POST[ 'pname' ];
$sql = "select * from " . $pname;
if ( isset( $pname ) ) {
	$result = mysqli_query( $conn, $sql );
	if ( mysqli_num_rows( $result ) > 0 ) {
		// 输出数据
		if ( $pname == "phone" ) {
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				echo "<div class='col-md-3 col-6' >
            <div class='box'>
              <p class='mb-1'><span class='badge badge-success'>" . $row[ 'img_badge' ] . "</span></p>
              <a href='#''><img src='" . $row[ 'img_src' ] . "' class='img-fluid' width='50%' alt='" . $row[ 'img_alt' ] . "'></a>
              <p class='mb-1'>" . $row[ 'img_name' ] . "</p>
              <p class='text-secondary mb-1'><small>" . $row[ 'introduce' ] . "</small></p>
              <span class='text-price'>" . $row[ 'price' ] . " </span><del>" . $row[ 'delprice' ] . "</del> </div>
          </div>";
			}
		} else {
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				echo "<div class='col-md-3 col-6' >
            <div class='box'>
              <p class='mb-1'><span class='badge badge-success'>" . $row[ 'img_badge' ] . "</span></p>
              <a href='#''><img src='" . $row[ 'img_src' ] . "' class='img-fluid' width='50%' alt='" . $row[ 'img_alt' ] . "'></a>
              <p class='mb-1'>" . $row[ 'img_name' ] . "</p>
              <p class='text-secondary mb-1'><small>" . $row[ 'introduce' ] . "</small></p>
              <span class='text-price'>" . $row[ 'price' ] . " </span><del>" . $row[ 'delprice' ] . "</del> 
			  <div class='col-12 mm'>
                <p class='text-center m-0'>
                  <button class='btn btn-info'>立即加入 <i class='fa fa-shopping-cart'></i></button>
                </p>
              </div>
			  </div>
          </div>";
			}
		}
	} else {
		echo "0 结果";
	}
}
mysqli_close( $conn );
?>