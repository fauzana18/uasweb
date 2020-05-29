<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from pesan where untuk='$username'"; 
    $hasil=mysqli_query($mysqli, $select);	
?>
        <h2>Lihat Pesan</h2><br />
        <table width="487" border="0">
            <tr>
                <td width="327">Pengirim</td>
				<td width="150">Pesan</td>
            </tr>
			<tr><td></td><td></td></tr>
		</table>
<?php
while($buff=mysqli_fetch_array($hasil)){
?>
        <table>    
			<tr>
                <td width="327"><?php echo $buff['dari'];?></td>
                <td><?php echo $buff['pesan'];?></td>
            </tr>
		</table>	
<?php
};
    mysqli_close($mysqli);
?>
