<?php 

$koneksi = mysqli_connect("sql12.freemysqlhosting.net","sql12386136","FfFePD7U8D","sql12386136");

if (mysqli_connect_error()){
	echo "koneksi database gagal" .mysqli_connect_error();
}

?>
