<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
</head>

<body id="body">

    <!--==========================
    Top Bar
    ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:ardhip63@gmail.com">Cahyoyusuf3@gmail.com</a>
                <i class="fa fa-phone "></i> +62 85883142067
            </div>
            <div class="social-links float-right">
                <a href="https://twitter.com" target="_blank" class="twitter"><i
                        class="fa fa-firefox"></i></a>
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i
                        class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="instagram"><i
                        class="fa fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <!--==========================
    Header
    ============================-->
    <header id="header">
       <?php
			include 'menu.php';
								?>
	</header><!-- #header -->



<br>
	<div id="menu-penjualan-produk">
        <div class="menu-penjualan">
	   <!-- <?php include 'kategoriproduk.php' ?> -->
	 
	   <!--==========================
    Intro Section
    ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2>WELCOME TO RIZKI COMPUTER</h2>
            <h4>SIAP MELAYANI ....</h4>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/gambar1.jpg');"></div>
            <div class="item" style="background-image: url('img/gambar2.jpg');"></div>
            <div class="item" style="background-image: url('img/gambar3.jpg');"></div>
        </div>

    </section><!-- #intro -->
    
	<!---------------------produk----------------------------->
	<section class="konten">
					<div class="container">
                        <div class="section-header">
                        <h2 style="text-transform: none; font-size: 20pt; text-align:center;"> Produk Terbaru</h2>
            		</div>
					<div class="features_items"><!--features_items-->
						
						<?php $ambil=$koneksi->query("SELECT * FROM produk ORDER BY id_produk DESC LIMIT 6"); ?>
						<?php while($perproduk=$ambil->fetch_assoc()){ ?>
							
						<div class="col-sm-4 padding-right">
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
				
				<br>
			
				<div class="col-sm-12 padding-right">
                
                    
                    <div class="section-header">
                    <h2 style="text-transform: none; font-size: 20pt; text-align:center;"> faktur pembelian terlaris</h2>
                 
                    </div>
					<div class="features_items"><!--features_items-->
						
						<?php $ambil=$koneksi->query("SELECT produk.id_produk,foto_produk,nama_produk,harga_produk,jumlah FROM produk JOIN pembelian WHERE produk.id_produk = pembelian.id_produk AND jumlah >= 7 "); ?>
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

		</div>
	</div>
</section>
	

    <main id="main">
    
        <!--==========================
      info brand Section
      ============================-->
        <section id="bestbrand" class="info-brand"> 
        <div class="container">
            <div class="section-header">
                <h2 style="text-transform: none; font-size: 18pt; text-align: center">BEST BRAND</h2>
            </div>
                <div class="brand">
                    <img src="img/brand1.png"  alt="..." >
                    <img src="img/brand2.png"  alt="...">
                    <img src="img/brand3.png" alt="...">
                    <img src="img/brand4.png" alt="...">
                    <img src="img/brand5.png" alt="...">
                    <img src="img/brand6.png" alt="...">
                    <img src="img/brand7.png" alt="...">
                    <img src="img/brand8.png" alt="...">
                </div>
            
            </div>
        </section><!-- # -->
 


        <!--==========================
    Footer
    ============================-->
        <footer id="footer">
            <div class="container">
                <div class="copyright" >
                    &copy; Yusuf Cahyo Nusantoro <strong>2019</strong>.
                </div>
                <div class="credits">
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <script src="lib/sticky/sticky.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>

		  <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/price-range.js"></script>
   		 <script src="js/jquery.prettyPhoto.js"></script>
   		 <script src="js/main.js"></script>
</body>
</html>