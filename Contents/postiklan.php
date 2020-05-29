<?php
include "koneksi.php";
session_start();

$file = $_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];
$path = "../Images/".$file;
move_uploaded_file($tmp_file, $path);
$query = "INSERT INTO iklan
(namabar, harga, deskripsi, kategori, sedia, penjual, gambar) VALUES
('$_POST[namabar]', '$_POST[harga]', '$_POST[deskripsi]', '$_POST[kategori]', 'Available', '$_SESSION[username]', '".$file."')";

if(isset($_POST['namabar'])&&($_POST['harga'])){
		mysqli_query($mysqli, $query);

		echo"<script>alert('Selamat, iklan telah terdaftar');window.location.href='../index.php';</script>";
}

else{
	echo"<script>alert('Data tidak boleh kosong!');window.location.href='../index.php?module=iklan#pos';</script>";
}


mysqli_close($mysqli);
?>