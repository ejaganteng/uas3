<html>
<head>
<th>ID Barang</th>
<th>Nama</th>
<th>Kategori ID</th>
<th>Satuan ID</th>
</head>
<body>
<table>
<?php
include ('koneksi.php');
$a = mysqli_query ($koneksi,"select id_barang,nama,k.k_nama,s.s_nama from barang as b 
join kategori as k 
join satuan as s 
where b.kategori_id=k.id_kategori and b.satuan_id=s.id_satuan order by id_barang asc");
?>
<?php
while ($p =mysqli_fetch_array($a)){
?>
	<tr>
	<td><?php echo $p['id_barang'];?></td>
	<td><?php echo $p['nama'];?></td>
	<td><?php echo $p['k_nama'];?></td>
	<td><?php echo $p['s_nama'];?></td>
	</tr>

<?php } 
?>
</table>	
</body>
</html>