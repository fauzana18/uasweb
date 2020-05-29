<?php
session_start();
include "koneksi.php";
$sender = $_SESSION['username'];

$query = "INSERT INTO pesan (pesan, dari, untuk) VALUES ('$_POST[pesan]', '$sender', '$_POST[untuk]')";

mysqli_query($mysqli, $query);

echo"<script>alert('Pesan telah terkirim');window.location.href='../index.php';</script>";

mysqli_close($mysqli);
?>