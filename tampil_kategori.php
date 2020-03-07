<html>
<body>
<table>
<th>ID Kategori</th>
<th>Nama</th>

<?php
include ('koneksi.php');
$a = mysqli_query ($koneksi,"select * from kategori");
?>
<?php
while ($p =mysqli_fetch_array($a)){
?>
<tr>
	<td><?php echo $p['id_kategori'];?></td>
	<td><?php echo $p['k_nama'];?></td>
</tr>
</table>	
<?php } ?>

</body>
</html>