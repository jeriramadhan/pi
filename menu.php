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
	<link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->
<body>
		<header id="header">
        	<div class="container">

            <div id="logo" class="pull-left">
                <h1><img src="img/une.png" alt=""><a href="index.php" class="scrollto">
                    RIZKY<span>COMPUTER.</span>
                </a></h1>
			</div>				
			
			<nav id="nav-menu-container">
				
			<br>
                <ul class="nav-menu">
								<li><a href="kategori.php?id=<?php echo 'semuamerek' ?>">Produk</a></li> 
								<li class="dropdown"><a href="#">Bantuan</a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="info.php">Cara Belanja</a></li>
									<li><a href="hub.php">Hubungi Kami</a></li>
								</ul>
								<li ><a href="keranjang.php"><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href="riwayat.php">Riwayat Belanja</a></li>
								<!-- <li><a href="testimoni.php">Testimoni</a></li> -->
								
			
				<?php if(isset($_SESSION["pelanggan"])): ?>
				<?php $id_pelanggan=$_SESSION["pelanggan"]["id_pelanggan"]; ?>
				<?php $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'") ?>
				<?php $pecah=$ambil->fetch_assoc(); ?>
				<li class="dropdown"><a href="#">welcome,<?php echo $_SESSION["pelanggan"]
					["nama_pelanggan"];?></i></a> <ul role="menu" class="sub-menu">
                <li><a href="profil.php?id=<?php echo $pecah['id_pelanggan'];?>">profil</a></li>
				<li><a href="logout.php">logout</a></li> 
                 
				<?php else: ?>
								<li><a href="daftar.php"><i class="fa fa-user"></i> Daftar</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							<?php endif ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
	</header><!--/header-->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>