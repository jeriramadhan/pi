<h2> Tambah produk </h2>

<form method="post" enctype="">
	<div class="form-group">
			<label> nama</label>
			<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Pilih Kategori </label> <br>
		<select name="kategori">
			<option value="">Pilih Kategori</option>
			<option value="Laptop">Laptop</option>
			<option value="Aksesoris">Aksesoris</option>
			<option value="Hardware">Hardware</option>
		</select>
	</div>
	<div class "form-group">
		<label>Harga (Rp) </label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class "form-group">
		<label>berat</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class "form-group">
		<label>stock</label>
		<input type="number" class="form-control" name="stock">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"> </textarea> 
	</div>
	<div class="form-group">
		<label>Foto </label>
		<input type="file" class="form-control" name="foto" name="foto">
	</div>
	<br>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']["tmp_name"];
	move_uploaded_file($lokasi,"../foto_produk/".$nama);
	$koneksi->query("INSERT INTO produk (nama_produk,harga_produk,berat,stock,
		foto_produk,deskripsi_produk,nama_kategori)
		VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$_POST[stock]','$nama','$_POST[deskripsi]','$_POST[kategori]')");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";	
}
?>