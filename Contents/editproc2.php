<?php
session_start();
include"koneksi.php";

$file = $_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];
$path = "../Images/".$file;
move_uploaded_file($tmp_file, $path);

$id=$_POST['id'];
$edit="update iklan set namabar='$_POST[namabar]', harga='$_POST[harga]', deskripsi='$_POST[deskripsi]', kategori='$_POST[kategori]',
sedia='$_POST[sedia]', gambar='".$file."' where id='$id'";
$hasil=mysqli_query($mysqli, $edit);
if($hasil){
	echo"<script>alert('Iklan berhasil diedit');window.location.href='../index.php';</script>";
}?>