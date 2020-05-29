<?php
include "koneksi.php";

$query = "INSERT INTO register
(namadep, namabel, username, password, usia, jk, ttl, email, notel, status) VALUES
('$_POST[namadep]', '$_POST[namabel]', '$_POST[username]', '$_POST[password]', '$_POST[usia]',
'$_POST[jk]', '$_POST[ttl]', '$_POST[email]', '$_POST[notel]', 'Unvalidated User')";

$un = "Select * from register where username='$_POST[username]'";
$queryun = mysqli_query($mysqli, $un);
$cekun = mysqli_num_rows($queryun);

if(isset($_POST['namadep'])&&($_POST['username'])&&($_POST['password'])&&($_POST['email'])){
	if($cekun>0){
		echo"<script>alert('Username sudah digunakan');window.location.href='../index.php?module=register#pos';</script>";
	}
	
	else{
		mysqli_query($mysqli, $query);

		echo"<script>alert('Selamat, anda telah terdaftar');window.location.href='../index.php';</script>";
	}
}

else{
	echo"<script>alert('Data tidak boleh kosong!');window.location.href='../index.php?module=register#pos';</script>";
}


mysqli_close($mysqli);
?>