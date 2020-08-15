<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rizki Komputer</title>
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

<?php include'menu.php';?>
<br>
<?php include'kategoriproduk.php';?>
<section>

					<div class="container">
					<div class="col-8">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Gallery Produk</h2>
						<?php $id = $_GET['id']; ?>
						<?php $ambil=$koneksi->query("SELECT * FROM produk WHERE nama_kategori = '$id' "); ?>
						<?php while($perproduk=$ambil->fetch_assoc()){ ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>"><img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt""></a>

											<h2>Rp. <?php echo number_format($perproduk['harga_produk']); ?> </h2>
											<p><?php echo $perproduk['nama_produk']; ?> </p>
											<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
											
										</div>
								</div>
							</div>
						</div>
						<?php } ?>
						</div>
						
				</div>
				
	</div>
</section>
<br>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
