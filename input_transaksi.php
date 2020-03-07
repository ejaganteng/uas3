<html>
<body>

	<Form Method="POST" action="input_transaksi2.php"><!---Form untuk kirim data ke DB-->
	<table border="1">
		<tr>
			<td>ID Transaksi</td>
			<td><input name="ID_Transaksi" type="text"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input name="Nama_Transaksi" type="text"></td>
		</tr>
		<tr>
			<td>TGL Transaksi</td>
			<td><input name="TGL_Transaksi" type="date"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="Harga" type="text"></td>
		</tr>
		<tr>
			<td>QTY</td>
			<td><input name="QTY" type="text"></td>
		</tr>
		<tr>
			<td>ID Barang</td>
			<td><input name="ID_Barang" type="text"></td>
		</tr>
		<tr>
			<td><input name="Simpan" type="submit"></td>
		</tr>
	</table>
	</form>

</body>
</html>