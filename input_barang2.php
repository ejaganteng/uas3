<?php
//connection database
include "koneksi.php";

//menangkap data yang dikirim dari form
$idbarang = $_POST ['ID_Barang'];
$nama = $_POST ['Nama'];
$kategoriid = $_POST ['Kategori_ID'];
$satuanid = $_POST ['Satuan_ID'];

//menginput data ke database
mysqli_query ($koneksi, "insert into barang values ('$idbarang','$nama','$kategoriid','$satuanid')");
header("location:tampil_barang.php");
?>