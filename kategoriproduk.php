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
	

    
    						<div id="menu-penjualan-produk">
      						  <div class="menu-penjualan">
									
									<a href="produk.php?id=<?php echo 'Laptop' ; ?>"> <b class="menu">Laptop</b></a>
									<a href="produk.php?id=<?php echo 'Aksesoris'; ?>"> <b class="menu">Aksesoris</b></a>
									<a href="produk.php?id=<?php echo 'Hardware'; ?>"> <b class="menu"></span>Hardware</b></a>
									
						
								</div>
							</div>

		<div class="container">
			<div class="row">
			
					<div class="left-sidebar">
						<?php 
						if(isset($_SESSION['pelanggan'])) :?>
						
						<div class="brands_products"><!--brands_products-->
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php $id_pelanggan=$_SESSION["pelanggan"]["id_pelanggan"]; ?>
								<?php $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'") ?>
								<?php $pecah=$ambil->fetch_assoc(); ?>	
								</ul>
							</div>
						</div><!--/brands_products-->
						<?php else : ?>
					<?php endif ?>

			</div>
		</div>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>