<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>Hasil Pencarian</h2><br />

<?php
	$nama=$_POST['namabar'];
	$select="select * from iklan where namabar like '%$nama%'";

include"koneksi.php";
$hasil=mysqli_query($mysqli, $select);
?>
<table width="800" border="0">	
		
		<tr>
                <td width="200">Nama Barang</td>
                <td width="327">Harga</td>
				<td width="327">Penjual</td>
        </tr>
		
		<?php while($buff=mysqli_fetch_array($hasil)){ ?>
			<tr>
                <td width="200"><?php echo $buff['namabar'];?></td>
                <td width="327"><?php echo $buff['harga'];?></td>
				<td width="327"><?php echo $buff['penjual'];?></td>
				<td><a href="?module=detail&pos&id=<?php echo $buff['id'];?>">Detail</a></td>
            </tr>
		<?php }; ?>
        </table>
<?php
mysqli_close($mysqli);
?><br />
</body>
</html>