<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 - Pemrograman Berbasis Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
 <ul class="kiri">
  <li><a href="">Tugas 5</a></li>
 </ul>
</nav>
<div class="sidebar">
<ul>
<li><a href="index.php">Tugas 5</a></li>
</ul>
</div>
<style>
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style>
<div class="main">
	<div class="isimain">
		<table>
			<a href="tambah.php"><input type="submit" value="Tambah Data Mahasiswa"></a>
			<tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
				<th>Kota Asal</th>
                <th>Nama Orang Tua</th>
                <th>Alamat Orang Tua</th>
				<th>Kode Pos</th>
				<th>Nomor Telepon</th>
				<th>Status</th>
				<th>Aksi</th>
				
			</tr>
            <?php 
		include 'koneksi.php';
		$data= mysqli_query($koneksi,'SELECT * FROM tbltgs');
		while($kweri= mysqli_fetch_array($data)){
			?>
			<tr><td><?php echo $kweri['nim']; ?></td>
				<td><?php echo $kweri['nama']; ?></td>
				<td><?php echo $kweri['kota_asal']; ?></td>
				<td><?php echo $kweri['tanggal_lahir']; ?></td>
				<td><?php echo $kweri['nama_ortu']; ?></td>
				<td><?php echo $kweri['alamat_ortu']; ?></td>
				<td><?php echo $kweri['kode_pos']; ?></td>
				<td><?php echo $kweri['no_telp']; ?></td>
				<td><?php echo $kweri['status']; ?></td>
				<td>
					<a href="edit.php?nim=<?php echo $kweri['nim']; ?>">EDIT</a>
					<a href="hapus.php?nim=<?php echo $kweri['nim']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
				}
			 ?>

		</table>	
	</div>
</div>
</body>
</html>