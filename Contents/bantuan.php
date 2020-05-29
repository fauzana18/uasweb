<html>

<body>

<?php
		include "koneksi.php";
		$select="select * from register";
		$hasil=mysqli_query($mysqli, $select);
?>
        <h2>Ajukan Bantuan</h2><br/> 
        <form action="Contents/kirim.php" method="post"> 
        <textarea rows="7" cols="70" name="pesan"></textarea><br/> 
		Ke:<select name="untuk">
		<?php
			while($buff=mysqli_fetch_array($hasil)){
				if($buff['status']=='Admin'){
		?>  
			<option name="untuk"><?php echo $buff['username'];?></option>
		<?php
			}};
			mysqli_close($mysqli);
		?>
        <input style="margin-top:5px" type="submit" name="submit" value="Submit"> 
        </form> 
</body>
</html>