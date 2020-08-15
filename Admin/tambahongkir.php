<h2> Tambah Biaya Pengiriman </h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
			<label> Kabupaten, Kota dan Provinsi</label>
			<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
			<label> Biaya Pengiriman (Rp)</label>
			<input type="text" class="form-control" name="biaya_pengiriman">
	</div>
	<div class="form-group">
		<label>metode Pengiriman</label>
		<input type="text" name="metode_pengiriman" class="form-control" >
	<br>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO biaya_pengiriman (kabupaten_kota_provinsi,ongkos_kirim,metode_pengiriman)
		VALUES('$_POST[nama]','$_POST[biaya_pengiriman]','$_POST[metode_pengiriman]')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=ongkir'>";	
}
?>