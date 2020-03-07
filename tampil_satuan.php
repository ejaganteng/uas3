<html>
<body>
<table>
<th>ID Satuan</th>
<th>Nama</th>

<?php
include ('koneksi.php');
$a = mysqli_query ($koneksi,"select * from satuan");
?>
<?php
while ($p =mysqli_fetch_array($a)){
?>
<tr>
	<td><?php echo $p['id_satuan'];?></td>
	<td><?php echo $p['s_nama'];?></td>
</tr>
</table>	
<?php } ?>

</body>
</html>