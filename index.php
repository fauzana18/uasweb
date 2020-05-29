<?php session_start(); ?>
<html>
<head>
<title>Selamat Datang di BLABLABLANJA</title>

	<link href="Style/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<img src="Images/yahhh.gif" alt="gambar" class="bg" />
<div id="container" class="content">
	<div id="header">
	
		<h1>BLABLABLANJA</h1>
		<?php 
			if(isset($_SESSION['username'])){
		?>
			Hi 
			<?php
				include"Contents/koneksi.php";
				$username = $_SESSION['username'];
				$select="Select * from register where username='$username'";
				$buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
			?>
			<?php echo $buff['namadep'];?>
			<h2><form action="Contents/logout.php">
				<input type="submit" value="Logout" />
			</form></h2>
				
		<?php
			} else {
		?>
			<h2><form action="?module=login#pos" method="post">
				<input type="submit" value="Login" />
			</form></h2>
			<h2><form action="?module=register#pos" method="post">
				<input type="submit" value="Register" />
			</form></h2>
		<?php 
			}
		?>
	</div>
	
	<div style="width:1000px;">
		<ul id="navmenu">
			<b><form action="?module=cari#pos" method="post">
					<input type="text" name="namabar" placeholder="Cari barang" />
					<input type="submit" value="Cari" />
			</form></b>
			<a href="index.php">Beranda</a>
			<?php if(isset($_SESSION['username'])) echo'<a href="?module=profil#pos">Profil</a>';?>
			<?php if(isset($_SESSION['username'])){ if($buff['status']!="Chief"){ echo'<a href="?module=iklan#pos">Iklan</a>';}}?>
			<?php if(isset($_SESSION['username'])){if($buff['status']=="Admin") echo'<a href="?module=kelola#pos">Kelola</a>';}?>
			<?php if(isset($_SESSION['username'])){if($buff['status']=="Chief") echo'<a href="?module=grafik#pos">Grafik</a>';}?>
		</ul>
	</div>
	
	<div id="sidebar">
		<h3>&nbsp KATEGORI</h3>
		<ul id="navmenu">
		<?php 
			include "Contents/koneksi.php";
			$selkat="Select * from kategori";
			$reskat=mysqli_query($mysqli, $selkat);
			while($kat=mysqli_fetch_array($reskat)){ ?>
			<a href="?module=kategori&pos&id=<?php echo $kat['id'];?>"><?php echo $kat['kategori']; ?></a>
		<?php
		};
		?>
		<?php if(isset($_SESSION['username'])){if($buff['status']=="Admin") echo'<a href="?module=tambahkate#pos">+Kategori</a>';}?>
		</ul>
	</div>
	
	<div id="page">
				<?php if(isset($_GET['module']))
			include "Contents/$_GET[module].php";
		else
			include "Contents/home.php";?>
	</div>
	
	<div id="clear"></div>
		
	<div id="footer">
		<img src="Images/baju.gif" height="100"/>
		<p><a href="?module=about#pos">Tentang</a>
		<a href="?module=bantuan#pos">Bantuan</a></p>
	</div>
</div>
</body>
</html>