<?php
session_start(); 
include 'koneksi.php';
?>
<!DOCTYPE html>


<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Daftar</title>
	<link rel="stylesheet" href="admin/assets/css/boostrap.css">
	<link rel="stylesheet" type="text/css" href="css/slidergezz.css" />
    <link rel="stylesheet" href="css/glyphicon.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>	
</body>
	<?php include 'menu.php'; ?><br>
<?php include 'kategoriproduk.php'; ?>
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center><h3 class="panel-title">DAFTAR PELANGGAN</h3></center>
					</div>

		<div class="panel-body">
		<form method="post" class="form-horizontal">

		<div class="form-group">
		<label class="control-label col-md-3">Email</label>
		<div class="col-md-7">
		<input type="email" class="form-control" name="email" required="harap isi email">
		</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-md-3">Password</label>
		<div class="col-md-7">
		<input type="password" class="form-control" name="password" maxlength="8" placeholder="max 8 karakter" required>
		</div>
		</div>	

		<div class="form-group">
		<label class="control-label col-md-3">Nama</label>
		<div class="col-md-7">
		<input type="text" class="form-control" name="nama" required>
		</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-3">Telp/HP</label>
		<div class="col-md-7">
			<input type="number" class="form-control" name="telepon" maxlength="13" required>
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3">Alamat</label>
		<div class="col-md-7">
			<textarea class="form-control" name="alamat" placeholder="Alamat pengiriman harus di isi lengkap, termasuk kota/kabupaten dan kode posnya." required ></textarea>
		</div>
		</div>

         <div class="form-group">
         	<label class="control-label col-md-3">Kota Tujuan</label>
         	<div class="col-md-7">
              <select class="form-control" name="id_ongkir" required="">
                   <option value="">Pilih Kota Tujuan </option>
                      <?php 
                      $ambil = $koneksi->query("SELECT * FROM ongkir");
                      while ($perongkir = $ambil -> fetch_assoc()){
                      ?>
                      <option value="<?php echo $perongkir["id_ongkir"]?>">
                        <?php echo $perongkir['nama_kota']?>
                      </option>
                      <?php } ?>
                    </select>
           </div>
       </div>

		

		

		<div class="form-group">
			<div class="col-md-7 col-md-offset-3">
				<button class="btn btn-primary" name="daftar">Daftar</button>
		</div>
		</div>

		<div class="alert alert-danger">
		<p>
		Pastikan anda sudah mengisi semua data dengan benar!
		</p>
		</div>
	</div>
	</form>

			<?php
						// jka ada tombol daftar(ditekan tombol daftar)
						if (isset($_POST["daftar"]))
						{
							// mengambil isian nama,email,password,alamat,no telp
							$email = $_POST["email"];
							$password = $_POST["password"];
							$nama = $_POST["nama"];

							$telepon = $_POST["telepon"];
							$alamat = $_POST["alamat"];
							
                			$id_ongkir = $_POST["id_ongkir"];
							
							$ambil=$koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
			                $arrayongkir = $ambil -> fetch_assoc();
			                $nama_kota = $arrayongkir['nama_kota'];
			                $tarif = $arrayongkir['tarif'];

							//cek apakah email sudah digunakan
							$ambil = $koneksi->query("SELECT * FROM Pelanggan
								WHERE email_pelanggan='$email'");
							$yangcocok = $ambil->num_rows;
							if ($yangcocok==1)
							{
								echo "<script>alert('Pendaftaran Gagal, Email sudah digunakan'); </script>";
								echo "<script>location='index.php?halaman=daftar'; </script>";
							}
							else
							{
								//query insert ke tabel pelanggan
								$koneksi->query("INSERT INTO pelanggan(id_ongkir,email_pelanggan,
									password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan,
									nama_kota,tarif)VALUES('$id_ongkir','$email','$password','$nama',
									'$telepon','$alamat','$nama_kota','$tarif')");

								echo "<script>alert('Pendaftaran Sukses, Silahkan Login'); </script>";
								echo "<script>location='login.php?halaman=login'; </script>";
							}

						}
						?>
	<br>
	<div class="row">
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php  ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>
</body>
</html>