<?php
include "koneksi.php";

$query = "INSERT INTO kategori (kategori) VALUES ('$_POST[kategori]')";
$kat = "Select * from kategori where kategori='$_POST[kategori]'";
$querykat = mysqli_query($mysqli, $kat);
$cekkat = mysqli_num_rows($querykat);

if(isset($_POST['kategori'])){
	if($cekkat>0){
		echo"<script>alert('Kategori sudah ada');window.location.href='../index.php?module=tambahkate#pos';</script>";
	}
	
	else{
		mysqli_query($mysqli, $query);

		echo"<script>alert('Kategori berhasil ditambah');window.location.href='../index.php';</script>";
	}
}

else{
	echo"<script>alert('Harap masukkan nama kategori');window.location.href='../index.php?module=tambahkate#pos';</script>";
}


mysqli_close($mysqli);
?>