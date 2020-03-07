<?php
//connection database
include ("koneksi.php");

//menangkap data yang dikirim dari form
$idtransaksi = $_POST ['ID_Transaksi'];
$namatransaksi = $_POST ['Nama_Transaksi'];
$tgltransaksi = $_POST ['TGL_Transaksi'];
$harga = $_POST ['Harga'];
$qty = $_POST ['QTY'];
$idbarang = $_POST ['ID_Barang'];

//menginput data ke database
mysqli_query ($koneksi, "insert into transaksi values ('$idtransaksi','$namatransaksi','$tgltransaksi','$harga','$qty','$idbarang')");
header("location:tampil_transaksi.php");
?>