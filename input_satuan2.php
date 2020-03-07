<?php
//connection database
include("koneksi.php");

//menangkap data yang dikirim dari form
$idsatuan = $_POST['ID_Satuan'];
$nama = $_POST['Nama'];

//menginput data ke database
mysqli_query ($koneksi,"INSERT INTO satuan values('$idsatuan','$nama')");
header("location:tampil_satuan.php");
?>