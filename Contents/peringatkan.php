<?php
include "koneksi.php";
$sender = $_SESSION['username'];
$id=$_GET['id'];
$untuk = "Select * from iklan where id = '$id'";
$ke = mysqli_query($mysqli, $untuk);
$kirim = mysqli_fetch_array($ke);

$query = "INSERT INTO pesan (pesan, dari, untuk) VALUES ('Mohon ubah iklan dengan nama barang $kirim[namabar]!', '$sender', '$kirim[penjual]')";

mysqli_query($mysqli, $query);

echo"<script>alert('Peringatan telah dikirim');window.location.href='index.php';</script>";

mysqli_close($mysqli);
?>