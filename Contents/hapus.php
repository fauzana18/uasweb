<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from register where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('data berhasil dihapus');window.location.href='../index.php?module=kelola#pos';</script>";
}?>