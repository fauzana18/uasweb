<?php
include"koneksi.php";
$id=$_GET['id'];
$hapus="delete from iklan where id='$id'";
$hasil=mysqli_query($mysqli, $hapus);
if($hasil){
	echo"<script>alert('Iklan berhasil dihapus');window.location.href='index.php?module=iklan#pos';</script>";
}?>