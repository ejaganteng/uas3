<?php

$koneksi = mysqli_connect ("localhost","root","","uas3");

//cek koneksi
if (mysqli_connect_error()){
	echo "koneksi database gagal !" . mysqli_connect_error();
}

?>