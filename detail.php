<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<?php
$id_produk = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail= $ambil->fetch_assoc();



//echo "<pre>";
//print_r($detail);
//echo "</pre>";
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

<body>
	<html>
<head>
    <title>Rizki Komputer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head><!--/head-->

<?php
include 'menu.php';
?><br>
<!-- <h1><font color='#2f07c0'><center>INFO PRODUK</center></font></h1> -->

<section class="kontent">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="foto_produk">
			</div>
			<div class="col-md-6">
				<h2> <?php echo $detail["nama_produk"] ?></h2>
				<h4> Rp. <?php echo number_format($detail["harga_produk"]); ?>
				<h5>Stock : <?php echo $detail['stock'] ?></h5>
				</h4>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="number" min="1" class="form-control" name="jumlah" max="<?php echo $detail['stock']?>" required placeholder="masukkan jumlah"  >
						<div class="input-group-btn">
							<button class="btn btn-success" name="beli">Masukkan Keranjang</button>

						</div>
						</div>
					</div>
				</form>
	<?php 

	if (isset($_POST['beli']))
	{
		$jumlah = $_POST["jumlah"];
		if (isset($_SESSION['keranjang'][$id_produk]))
		{
			$_SESSION['keranjang'][$id_produk]+=$jumlah;
		}
		else
		{
			$_SESSION['keranjang'][$id_produk]=$jumlah;
		}

		echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
		echo "<script>location='keranjang.php';</script>";
	}
	?>
	<p> <?php echo $detail["deskripsi_produk"]?> </p>

	
	
			</div>
		</div>
	</div>
</section><br><br>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html