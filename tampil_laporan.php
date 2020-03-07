<html>
<head>
<th>Kategori</th>
<th>Nama Barang</th>
<th>QTY</th>
<th>Harga</th>
<th>Total</th>
</head>
<body>
<table>
<?php
include ('koneksi.php');
$a = mysqli_query ($koneksi,"select k.k_nama,b.nama,t.qty,t.harga,t.qty*t.harga as total 
from transaksi as t join 
barang as b join kategori as k where 
t.id_barang=b.id_barang order by t.id_transaksi asc");
?>
<?php
while ($p =mysqli_fetch_array($a)){
?>
<tr>
	<td> <?php echo $p['k_nama'];?> </td>
	<td> <?php echo $p['nama'];?> </td>
	<td> <?php echo $p['qty'];?> </td>
	<td> <?php echo $p['harga'];?> </td>
	<td> <?php echo $p['total'];?> </td>
</tr>	
<?php } ?>
</table>
</body>
</html>