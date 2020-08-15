<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo"<script>alert('silahkan login');</script>";
	echo"<script>location='login.php';</script>";
	exit();
}

$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembayaran 
LEFT JOIN faktur_pembelian ON faktur_pembelian.id_faktur_pembelian=pembayaran.id_faktur_pembelian
where pembayaran.id_pembayaran='$idpem'");
$detpem = $ambil->fetch_assoc();

$id_pelanggan_beli = $detpem["id_pelanggan"];
$id_pelanggan_login = $_SESSION["pelanggan"]["id_pelanggan"];
if ($id_pelanggan_login !== $id_pelanggan_beli)
{
	echo "<script>alert('dilarang melihat');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}
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
 <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
<head>
<head>
		<title>pembayaran</title>
		<link rel="stylesheet" href="admin/assets/css/boostrap.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="container">
		<br><br>
		<center><h1>Konfirmasi Pembayaran</h1></center>
		<div class="alert alert-warning">
		<p> 
			<strong>kirim bukti pembayaran anda disini dan pastikan pembayaran anda sesuai dengan total tagihan</strong>
		</p>
		</div>
		<div class="alert alert-info">total tagihan<strong>Rp.<?php echo number_format($detpem["total_pembayaran"]);?></strong>
	</div>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label> Nama </label>
			<input type="hidden" value="<?php echo $detpem['id_faktur_pembelian'] ?>" id="id_pembayaran" name="id_pembayaran">
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<div class="form-line">
                                        <label>Metode Pembayaran</label>
                                        <select class="form-control" name="metode_pembayaran">
                                            <option></option>
                                            <option value="Cash">Cash</option>
                                              <option value="Bank BCA">Bank BCA</option>
                                            <option value="Bank Mandiri">Bank Mandiri</option>
                                            <option value="Bank BRI">Bank BRI</option>
                                            <option value="Bank DKI">Bank DKI</option>
                                        </select>
                                    </div>
		</div>
		<div class="form-group">
			<label> Jumlah </label>
			<input type="text" class="form-control" name="jumlah"  readonly="true" value="Rp.<?php echo number_format($detpem["total_pembayaran"]);?>">
		</div>
		<div class="form-group">
			<label> Foto Bukti Pembayaran </label>
			<input type="file" class="form-control" name="bukti">
			<p class="text-danger"> foto bukti harus JPG maksimal 2 MB</p>
		</div>
		<button class="btn btn-primary" name="kirim">Kirim</button>
	</form>
</div>

<?php
if(isset($_POST["kirim"]))
{
	$namabukti = $_FILES["bukti"]["name"];
	$lokasibukti = $_FILES["bukti"]["tmp_name"];
	$namafix = date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "buktipembayaran/$namafix");

	$nama = $_POST["nama"];
	$pembayaran= $_POST["metode_pembayaran"];
	$jumlah = $_POST["jumlah"];
	$id_pembayaran = $_POST['id_pembayaran'];
	$tanggal = date("Y-m-d");

	// $koneksi->query("INSERT INTO pembayaran(id_faktur_pembelian,nama,metode_pembayaran,jumlah,tanggal,bukti_pembayaran)values('$idpem','$nama','$bank','$jumlah','$tanggal','$namafix')");

	$koneksi->query("UPDATE pembayaran SET status_pembayaran='Lunas', nama='$nama', metode_pembayaran='$pembayaran',bukti_pembayaran='$namafix', tanggal='$tanggal'  where id_pembayaran='$idpem'");
	// die();
	$koneksi->query("UPDATE faktur_pembelian SET status_faktur_pembelian='sudah kirim pembayaran' where id_faktur_pembelian='$idpem'");
	echo "<script>alert('terimakasih sudah mengirimkan bukti pembayaran');</script>";
	echo "<script>location='riwayat.php';</script>";

}
?>
</body>
</head>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>