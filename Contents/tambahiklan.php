<html>

<body>
<?php
include "Contents/koneksi.php";
$selkat="Select * from kategori";
$reskat=mysqli_query($mysqli, $selkat);
?>
		<form action="Contents/postiklan.php" enctype="multipart/form-data" method="post">
		<table width="700" border="0" align="center">
			<tr>
				<td width="200">Nama Barang</td>
				<td width="317"><input type="text" name="namabar" /></td>
			</tr>
			<tr>
				<td width="200">Harga</td>
				<td width="317"><input type="text" name="harga" /></td>
			</tr>
			<tr>
				<td width="200">Deskripsi</td>
				<td width="317"><textarea rows="7" cols="70" name="deskripsi"></textarea><br/></td>
			</tr>
			<tr>
				<td width="200">Kategori</td>
				<td width="317"><select name="kategori">
				<?php
				while($kat=mysqli_fetch_array($reskat)){
				?>  
				<option name="kategori"><?php echo $kat['kategori'];?></option>  
				<?php
				};
				?>
				</select></td>
			</tr>
			<tr>
				<td width="300">Upload Gambar</td>
				<td><input type="file" name="img" /></td>
			</tr>
			<tr>
				<td height="68" align="right"><input type="reset" value="Reset" /></td>
				<td><input type="submit" value="Submit" /></td>
			</tr>
		</table>
		</form>
</body>
</html>