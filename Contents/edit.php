<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
include"koneksi.php";
$select="Select * from register where id='$id'";
$hasil=mysqli_query($mysqli, $select);
$selst="Select * from keanggotaan";
$resst=mysqli_query($mysqli, $selst);
$stat="Select status from register where username = '$_SESSION[username]'";
$bstat=mysqli_fetch_array(mysqli_query($mysqli, $stat));
while($buff=mysqli_fetch_array($hasil)){
?>
<h2>Edit Data</h2><br />
<form action="Contents/editproc.php" method="post">
<table width="487" border="0">
<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
	<tr>
		<td width="150">Nama Depan</td>
		<td width="327"><input type="text" name="namadep" value="<?php echo $buff['namadep'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Nama Belakang</td>
		<td width="327"><input type="text" name="namabel" value="<?php echo $buff['namabel'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Username</td>
		<td width="327"><input type="text" name="username" value="<?php echo $buff['username'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Password</td>
		<td width="327"><input type="password" name="password" value="<?php echo $buff['password'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Usia</td>
		<td width="327"><input type="text" name="usia" value="<?php echo $buff['usia'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Jenis Kelamin</td>
		<td width="327"><input type="text" name="jk" value="<?php echo $buff['jk'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Tempat Tanggal Lahir</td>
		<td width="327"><input type="text" name="ttl" value="<?php echo $buff['ttl'];?>" /></td>
	</tr>
	<tr>
		<td width="150">Email</td>
		<td width="327"><input type="text" name="email" value="<?php echo $buff['email'];?>" /></td>
	</tr>
	<tr>
		<td width="150">No Telp</td>
		<td width="327"><input type="text" name="notel" value="<?php echo $buff['notel'];?>" /></td>
	</tr>
	<?php if($bstat['status']=="Admin"){ ?>
	<tr>
		<td width="150">Status</td>
		<td width="327"><select name="status">
		<?php
		while($st=mysqli_fetch_array($resst)){
		?>  
		<option name="status"><?php echo $st['status'];?></option>  
		<?php
		};
		?>
		</select></td>
	</tr>
	<?php }; ?>
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