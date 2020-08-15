<h2> Ubah Biaya Pengiriman</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM biaya_pengiriman WHERE id_pengiriman='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Kota, Kabupaten dan Provinsi</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['kabupaten_kota_provinsi']; ?> ">
	<div class="form-group">
		<label>Biaya Pengiriman</label>
		<input type="text" name="biaya_pengiriman" class="form-control" value="<?php echo $pecah['ongkos_kirim']; ?> ">
	<br>
	<div class="form-group">
		<label>metode Pengiriman</label>
		<input type="text" name="metode_pengiriman" class="form-control" value="<?php echo $pecah['metode_pengiriman']; ?> ">
	<br>
	<button class="btn btn-primary" name="ubah">UBAH</button>

<?php
if (isset($_POST['ubah']))
{

			$koneksi->query("UPDATE biaya_pengiriman SET kabupaten_kota_provinsi='$_POST[nama]',ongkos_kirim='$_POST[biaya_pengiriman]',metode_pengiriman='$_POST[metode_pengiriman]'
				WHERE id_pengiriman='$_GET[id]'");

	echo "<script>alert('data ongkir telah diubah'); </script>";
	echo"<script>location='index.php?halaman=ongkir';</script>";	
}
?>