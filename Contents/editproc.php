<?php
session_start();
include"koneksi.php";
$selstat="Select status from register where username = '$_SESSION[username]'";
$st=mysqli_fetch_array(mysqli_query($mysqli, $selstat));
if($st['status']=="Admin"){
	$stat=$_POST['status'];
}

else{
	$stat=$st['status'];
}
$id=$_POST['id'];
$edit="update register set namadep='$_POST[namadep]', namabel='$_POST[namabel]', username='$_POST[username]', password='$_POST[password]',
usia='$_POST[usia]', jk='$_POST[jk]', ttl='$_POST[ttl]', email='$_POST[email]', notel='$_POST[notel]', status='$stat' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);
if($hasil){
	echo"<script>alert('data berhasil diedit');window.location.href='../index.php?module=profil#pos';</script>";
}?>