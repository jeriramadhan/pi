<h2> Ubah Produk</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

//echo "<pre>";
//print_r($pecah);
//echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?> ">
	</div>
	
	<div class="form-group">
		<label>Pilih Kategori </label> <br>
		<select name="kategori">
			<option><?php echo $pecah["nama_kategori"]; ?></option>
			<option value="Laptop">Laptop</option>
			<option value="Flashdisk">Flashdisk</option>
			<option value="Hardisk">Hardisk</option>
			<option value="Mouse">Mouse</option>
			<option value="Keyboard">Keyboard</option>
		</select>
	</div>
	<div class="form-group">
		<label> Harga Rp</label>
		<input type="number" name="harga" class="form-control"  value="<?php echo $pecah['harga_produk']; ?>">
	</div>
	<div class="form-group">
		<label> Berat</label>
		<input type="number" name="berat" class="form-control"  value="<?php echo $pecah['berat']; ?>">
	</div>

	<div class="form-group">
		<label>Stock</label>
		<input type="number" name="stock" class="form-control"  value="<?php echo $pecah['stock']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width="200">
	</div>
	<div class="form-group">
		<label> Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>		
	<div class="form.group">
		<label> Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?> </textarea>
	</div>

	<button class="btn btn-primary" name="ubah">Ubah</button>
<?php
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto=$_FILES['foto']['tmp_name'];
	//jk foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto,"../foto_produk/$namafoto");

		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
				harga_produk='$_POST[harga]',stock='$_POST[stock]',
				foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]',
				nama_kategori='$_POST[kategori]',berat='$_POST[berat]' WHERE id_produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
			harga_produk='$_POST[harga]',stock='$_POST[stock]', deskripsi_produk='$_POST[deskripsi]',nama_kategori='$_POST[kategori]',berat='$_POST[berat]' WHERE id_produk='$_GET[id]'");
	}
	echo "<script>alert('data produk telah diubah'); </script>";
	echo"<script>location='index.php?halaman=produk';</script>";	
}
?>