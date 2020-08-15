<?php
session_start();
//koneksi ke database
include 'koneksi.php';
$id_pelanggan = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PROFIL</title>
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
<?php
include 'menu.php';
?>

	
<br><section>


						<div class="col-sm-9 padding-right">
							<div class="features_items">
						<h2 class="title text-center">my profil</h2>
						<table class="table table-bordered">
                            <tr>
                                    <th>EMAIL</th>
                                    <td><?php echo $detail['email_pelanggan']; ?></td>
                                </tr>
                                <tr>
                                    <th>NAMA</th>
                                    <td><?php echo $detail['nama_pelanggan']; ?></td>
                                </tr>
                                <tr>
                                    <th>ALAMAT</th>
                                    <td><?php echo $detail['alamat_pelanggan'];?></td>
                                </tr>
                                <tr>
                                    <th>TELEPON</th>
                                    <td><?php echo $detail['telepon_pelanggan']; ?></td>
                                </tr>
                                <tr>
                                    <!-- <th>KOTA TUJUAN</th> -->
                                    <!-- <td><?php 
                                    // echo $detail['nama_kota']; 
                                    ?></td> -->
                                </tr>
                          </table>
						
                       
<a href="ubahprofil.php?id=<?php echo $detail['id_pelanggan'];?>" class="btn btn-primary">ubah profil</a>
                        
  <div class="col-md-8">
  <div class="alert alert-warning">                      
 <p>Hai,<?php echo $_SESSION["pelanggan"]
              ["nama_pelanggan"];?> pastikan data diatas benar, Silakan kembali menuju halaman<a href="checkout.php?id=<?php echo $detail['id_pelanggan'];?>">Check Out</a>
    </p>
    </div>
    </div>
                
						</div>


						</div>

</section><br>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


						

