<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");
?>
<h3>LAPORAN BLABLABLANJA</h3>
 TABEL IKLAN   
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Kategori</th>
    <th>Penjual</th>
  </tr>
  <?php
  include "koneksi.php";
  
  $select="Select * from iklan";
  $sql =mysqli_query($mysqli, $select);
 
  $no = 1;
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['namabar']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>".$data['kategori']."</td>";
    echo "<td>".$data['penjual']."</td>";
    echo "</tr>";
    
    $no++;
  }
  ?>
</table>
TABEL KATEGORI
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Jumlah</th>
  </tr>
  <?php
  
  $select1="Select * from kategori";
  $sql1 =mysqli_query($mysqli, $select1);
 
  while($buff = mysqli_fetch_array($sql1)){
    echo "<tr>";
    echo "<td>".$buff['id']."</td>";
    echo "<td>".$buff['kategori']."</td>";
    echo "<td>".$buff['jumlah']."</td>";
    echo "</tr>";
  }
  ?>
</table>