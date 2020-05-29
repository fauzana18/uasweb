<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
include"koneksi.php";
$select="Select * from iklan where id='$id'";
$hasil=mysqli_query($mysqli, $select);
$selkat="Select * from kategori";
$reskat=mysqli_query($mysqli, $selkat);
while($buff=mysqli_fetch_array($hasil)){
?>
<h2>Edit Iklan</h2><br />
<form action="Contents/editproc2.php" enctype="multipart/form-data" method="post">
<table width="800" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
	<tr>
		<td width="300">Nama Barang</td>
		<td width="327"><input type="text" name="namabar" value="<?php echo $buff['namabar'];?>" /></td>
	</tr>
	<tr>
		<td width="300">Harga</td>
		<td width="327"><input type="text" name="harga" value="<?php echo $buff['harga'];?>" /></td>
	</tr>
	<tr>
		<td width="300">Deskripsi</td>
		<td width="327"><textarea rows="7" cols="70" name="deskripsi"><?php echo $buff['deskripsi'];?></textarea><br/></td>
	</tr>
	<tr>
		<td width="300">Kategori</td>
		<td width="327"><select name="kategori">
		<?php
		while($kat=mysqli_fetch_array($reskat)){
		?>  
		<option name="kategori"><?php echo $kat['kategori'];?></option>  
		<?php
		};
		?>
		</select></td>
		</td>
	</tr>
	<tr>
		<td width="300">Ketersediaan</td>
		<td><input type="radio" name="sedia" value="Available" checked>Available
		<input type="radio" name="sedia" value="Terjual">Terjual</td>
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
<?php
};
mysqli_close($mysqli);
?>
</body>
</html>