<!DOCTYPE html>
<html>
<head>
 <title>Tugas 5 - Pemrograman Berbasis Platform</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
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
  <span class="span">Form Input Data Mahasiswa</span>

   <form method="POST" action="tambah_aksi.php" >
    <input type="text" onkeypress="return onlyNumberKey(event)" name="nim" placeholder="NIM" maxlength="9"><br>
    <input type="text" name="nama" placeholder="Masukan Nama Mahasiswa"><br>
    <input type="text" name="kota_asal" placeholder="Kota Asal"><br>
    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir"><br>
    <input type="text" name="nama_ortu" placeholder="Masukan Nama Orang Tua"><br>
    <input type="text" name="alamat_ortu" placeholder="Masukan Alamat Orang Tua"><br>
    <input type="text" onkeypress="return onlyNumberKey(event)" name="kode_pos" placeholder="Kode Pos"><br>
    <input type="text" onkeypress="return onlyNumberKey(event)" name="no_telp" placeholder="Nomor Telpon" maxlength="12"><br>
    <select name="status" id="status">
      <option value="TAMA"> TAMA </option>
      <option value="WREDA"> WREDA </option>
    </select><br>
    <input type="submit" value="Simpan Data">
   </form>
 </div>
</div>
<script>
  function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
  }
</script>
</body>
</html>
