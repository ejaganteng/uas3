<?php
//connection database
include ("koneksi.php");

//menangkap data yang dikirim dari form
$idkategori = $_POST ['ID_Kategori'];
$nama = $_POST ['Nama'];

//menginput data ke database
mysqli_query ($koneksi, "insert into kategori values ('$idkategori','$nama')");
header("location:tampil_kategori.php");
?>