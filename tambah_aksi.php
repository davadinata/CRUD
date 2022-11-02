<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kota_asal = $_POST['kota_asal'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nama_ortu = $_POST['nama_ortu'];
$alamat_ortu = $_POST['alamat_ortu'];
$kode_pos = $_POST['kode_pos'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];

// menginput data ke database
$input = "INSERT INTO tbltgs VALUES('$nim', '$nama','$kota_asal','$tanggal_lahir','$nama_ortu','$alamat_ortu','$kode_pos','$no_telp','$status')";
$query_input = mysqli_query($koneksi,$input);


if($query_input){
	echo "
		<script>
			alert('Data berhasil disimpan');
			location.href='index.php';
		</script>
	";
}
?>


