<?php 
include 'koneksi.php';
 ?>
<?php 
$nim =$_GET['nim'];
$db=mysqli_query($koneksi,"DELETE FROM tbltgs WHERE nim='$nim'");
{
    ?> 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="index.php";
</script>

<?php } ?>
