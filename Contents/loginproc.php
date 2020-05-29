<?php
session_start();
include "koneksi.php";

$login="Select * from register where (username = '".$_POST['username']."') and (password = '".$_POST['password']."')";
$hasil=mysqli_query($mysqli, $login);
$rowcount=mysqli_num_rows($hasil);
$stat="Select status from register where username = '$_POST[username]'";
$buff=mysqli_fetch_array(mysqli_query($mysqli, $stat));

if($rowcount==1){
	if($buff['status']=="Unvalidated User"){
		echo"<script>alert('Akun anda belum terverifikasi!');window.location.href='../index.php?module=login#pos';</script>";
	}

	else{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo"<script>alert('Anda berhasil masuk');window.location.href='../index.php';</script>";
	}
	
}

else{
	echo"<script>alert('Anda gagal masuk');window.location.href='../index.php?module=login#pos';</script>";
}
?>