<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<?php
$id_pelanggan = $_GET["id"];
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
$pecah=$ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RIZKI KOMPUTER</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>	
<?php
include 'menu.php';
?>
<br>

<section>

	<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
			<h2 class="title text-center">Ubah Profilmu</h2>
	</div>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label> Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan']; ?> ">
		</div>
		<div class="form-group">
			<label> Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?> ">
		</div>
		<div class="form-group">
			<label> Alamat</label>
			<input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat_pelanggan']; ?> ">
		</div>
		<div class="form-group">
			<label> Nomor Telepon</label>
			<input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?> ">
		</div>
		
		
		 </div> 
		<button class="btn btn-primary" name="ubah">Ubah</button>
	</div>
	
	</form>


<?php
            if (isset($_POST['ubah']))
               {
               	$email = $_POST['email'];
               	$nama = $_POST['nama'];
				$telepon = $_POST['telepon'];
				$alamat = $_POST['alamat'];
				$id_ongkir = $_POST['id_pengiriman'];

				$ambil=$koneksi->query("SELECT * FROM biaya_pengiriman WHERE id_pengiriman='$id_ongkir'");
				$arrayongkir = $ambil -> fetch_assoc();
				$nama_kota = $arrayongkir['kabupaten_kota_provinsi'];
				$tarif = $arrayongkir['ongkos_kirim'];

               	 if (empty($id_ongkir))
               {
               	$koneksi->query("UPDATE pelanggan SET email_pelanggan='$email',nama_pelanggan='$nama',telepon_pelanggan='$telepon',alamat_pelanggan='$alamat' WHERE id_pelanggan='$_GET[id]'");
               }
               else
               {
				$koneksi->query("UPDATE pelanggan SET id_pengiriman='$id_ongkir',email_pelanggan='$email',nama_pelanggan='$nama',telepon_pelanggan='$telepon',alamat_pelanggan='$alamat',kabupaten_kota_provinsi='$nama_kota',ongkos_kirim='$tarif' WHERE id_pelanggan='$_GET[id]'");
               }
                echo"<script>location='profil.php?id=$id_pelanggan';</script>";   
            }
            ?>


	</div>
	</section><br><br>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


