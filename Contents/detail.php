<?php
    include"koneksi.php";
    $id = $_GET['id'];
    $select="Select * from iklan where id='$id'";
    $buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
	if(isset($_SESSION['username'])){
		$stat="Select status from register where username = '$_SESSION[username]'";
		$bstat=mysqli_fetch_array(mysqli_query($mysqli, $stat));
	}  
?>
        <h2>Detail Barang</h2><br />
		<div align="center">
			<?php echo "<img src='Images/".$buff['gambar']."' width='300' height='300'>"; ?>
		</div>
        <table width="487" border="0">
            <tr>
                <td width="150">Nama Barang</td>
                <td width="327"><?php echo $buff['namabar'];?></td>
            </tr>
            <tr>
                <td width="150">Harga</td>
                <td><?php echo $buff['harga'];?></td>
            </tr>
            <tr>
                <td width="150">Deskripsi</td>
                <td><?php echo $buff['deskripsi'];?></td>
            </tr>
            <tr>
                <td width="150">Kategori</td>
                <td><?php echo $buff['kategori'];?></td>
            </tr>
            <tr>
                <td width="150">Ketersediaan</td>
                <td><?php echo $buff['sedia'];?></td>
            </tr>
            <tr>
                <td width="150">Penjual</td>
                <td><?php echo $buff['penjual'];?></td>
            </tr>
			<?php if(isset($_SESSION['username'])){
				if($_SESSION['username']==$buff['penjual']){ ?>
			<tr>
				<td><a href='?module=editiklan&id=<?php echo $buff['id'];?>'>Edit Iklan</a></td>
				<td><a href='?module=hapusiklan&id=<?php echo $buff['id'];?>'>Hapus Iklan</a></td>
			<?php }} ?>
				<?php if(isset($_SESSION['username'])){if($bstat['status']=="Admin"){ ?>
				<td><a href='?module=peringatkan&id=<?php echo $buff['id'];?>'>Peringatkan</a></td>
				<?php }} ?>
			</tr>	
        </table>
<?php

    mysqli_close($mysqli);
?>
