<!DOCTYPE html>
 <html>
<head>
<title>Tugas 5 - Pemrograman Berbasis Platform</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
 <ul class="kiri">
  <li><a href="">Tugas 5</a></li>
 </ul>
</nav>
<div class="sidebar">
<ul>
<li><a href="index.php">Data Mahasiswa</a></li>
</ul>
</div>
<div class="main">
	<div class="isimain">
			<span class="span">Form Edit Data Mahasiswa</span>
	
	<?php
	include 'koneksi.php';


	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"SELECT * FROM tbltgs WHERE nim = '$nim'");
	while($kweri = mysqli_fetch_array($data)){
		?>

		<form method="post" action="update.php">
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="int" name="nim" value="<?= $kweri['nim']; ?>"></td>
				</tr>
				<tr>	
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" name="nama" value="<?= $kweri['nama']; ?>"></td>
				</tr>
				<tr>			
					<td>Kota Asal</td>
					<td>
						<input type="text" name="kota_asal" value="<?php echo $kweri['kota_asal']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="tanggal_lahir" value="<?php echo $kweri['tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Orang Tua</td>
					<td><input type="text" name="nama_ortu" value="<?php echo $kweri['nama_ortu']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat Orang Tua</td>
					<td><input type="text" name="alamat_ortu" value="<?php echo $kweri['alamat_ortu']; ?>"></td>
				</tr>
				<tr>
					<td>Kode POS</td>
					<td><input type="text" name="kode_pos" value="<?php echo $kweri['kode_pos']; ?>"></td>
				</tr>
				<tr>
					<td>Nomor Telpon</td>
					<td><input type="text" name="no_telp" value="<?php echo $kweri['no_telp']; ?>"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<?php
						if($kweri['status'] == "TAMA"){
							echo '
								<select name="status" id="status">
									<option value="TAMA" selected> TAMA </option>
									<option value="WREDA"> WREDA </option>
								</select>
							';
						}else{
							echo '
								<select name="status" id="status">
									<option value="TAMA"> TAMA </option>
									<option value="WREDA" selected> WREDA </option>
								</select>
							';
						}
						?>
					</td>
				</tr>
					<td></td>
					<td><input type="submit" value="EDIT"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</div>
</div>
</body>
</html>