<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama= $_POST['nama'];
$kota_asal = $_POST['kota_asal'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nama_ortu = $_POST['nama_ortu'];
$alamat_ortu = $_POST['alamat_ortu'];
$kode_pos = $_POST['kode_pos'];
$no_telp = $_POST['no_telp'];
$status= $_POST['status'];

// update data ke database
mysqli_query($koneksi,"update tbltgs set nim='$nim', nama='$nama', kota_asal='$kota_asal', tanggal_lahir='$tanggal_lahir', nama_ortu='$nama_ortu', alamat_ortu='$alamat_ortu',kode_pos='$kode_pos', no_telp='$no_telp',status='$status' where nim='$nim'");
?>
// mengalihkan halaman kembali ke index.php
<script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='index.php';
 </script>