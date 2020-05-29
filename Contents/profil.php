<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from register where username='$username'";
    $buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
    
?>
        <h2>Profil</h2><br />
        <table width="800" border="0">
            <tr>
                <td width="200">Nama Depan</td>
                <td width="327"><?php echo $buff['namadep'];?></td>
            </tr>
            <tr>
                <td width="200">Nama Belakang</td>
                <td><?php echo $buff['namabel'];?></td>
            </tr>
            <tr>
                <td width="200">Username</td>
                <td><?php echo $buff['username'];?></td>
            </tr>
            <tr>
                <td width="200">Password</td>
                <td><?php echo $buff['password'];?></td>
            </tr>
            <tr>
                <td width="200">Usia</td>
                <td><?php echo $buff['usia'];?></td>
            </tr>
            <tr>
                <td width="200">Jenis Kelamin</td>
                <td><?php echo $buff['jk'];?></td>
            </tr>
            <tr>
                <td width="200">Tempat Tanggal Lahir</td>
                <td><?php echo $buff['ttl'];?></td>
            </tr>
            <tr>
                <td width="200">Email</td>
                <td><?php echo $buff['email'];?></td>
            </tr>
            <tr>
                <td width="200">No Telp</td>
                <td><?php echo $buff['notel'];?></td>
            </tr>
            <tr>
                <td><a href='?module=edit&id=<?php echo $buff['id'];?>'>Ubah Profil</a></td>
				<td><a href='?module=pesan&id=<?php echo $buff['id'];?>'>Lihat Pesan</a></td>
				<?php if(isset($_SESSION['username'])){if($buff['status']=="Chief"){ ?>
				<td><a href='Contents/lapor1.php'>Lihat Laporan (PDF)</a></td>
				<td><a href='Contents/lapor2.php'>Lihat Laporan (XLS)</a></td>
				<?php }} ?>
            </tr>
        </table>
<?php

    mysqli_close($mysqli);
?>
