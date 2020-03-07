<html>
<body>
<table>
<th>ID Transaksi</th>
<th>Nama Transaksi</th>
<th>TGL Transaksi</th>
<th>Harga</th>
<th>QTY</th>
<th>ID Barang</th>

<?php
include ('koneksi.php');
$a = mysqli_query ($koneksi,"select t.id_transaksi,t.nama_transaksi,t.tgl_transaksi,t.harga,t.qty,b.nama 
from transaksi as t join 
barang as b
where t.id_barang=b.id_barang order by id_transaksi asc");
?>
<?php
while ($p =mysqli_fetch_array($a)){
?>
<tr>
	<td><?php echo $p['id_transaksi'];?></td>
	<td><?php echo $p['nama_transaksi'];?></td>
	<td><?php echo $p['tgl_transaksi'];?></td>
	<td><?php echo $p['harga'];?></td>
	<td><?php echo $p['qty'];?></td>
	<td><?php echo $p['nama'];?></td>
</tr>
</table>	
<?php } ?>

</body>
</html>