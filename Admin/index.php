<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","rizkicomputer");
$lama =3;//
$query ="DELETE FROM faktur_pembelian WHERE status_faktur_pembelian='pending' AND DATEDIFF(CURDATE(), tanggal_faktur_pembelian)>$lama";
$hasil= mysqli_query($koneksi,$query);
if(!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus LOGIN');</script>";
  echo "<script>location = 'login.php';</script>";
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE xhtml>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rizkicomputer Admin </title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                </button>

                <a class="navbar-brand">
                    <span class="fa fa-user "> <b>Admin</b> </span>
                </a>


            </div>
            <div  class="logout">
                <a href="index.php?halaman=logout" class="btn btn-success">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/bg.png" class="user-image img-responsive" />
                    </li>


                    <li> <a href="index.php"><i class="fa fa-home fa-3x"></i> HOME</a></li>
                    <li> <a href="index.php?halaman=produk"><i class="fa fa-archive fa-3x"></i>
                            DATA PRODUK</a></li>
                    <li> <a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart  fa-3x"></i> DATA PEMBELIAN</a></li>
                    <li> <a href="index.php?halaman=pelanggan"><i class="fa fa-user fa-3x"></i> DATA PELANGGAN</a></li>
                    <li> <a href="index.php?halaman=ongkir"><i class="fa fa-truck fa-3x"></i>
                            BIAYA PENGIRIMAN</a></li>
                    <!-- <li> <a href="index.php?halaman=confirmtesti"><i class="fa fa-Tags fa-3x"></i> 
                            Testimoni</a></li>-->
                    <li> <a href="laporanpenjualan.php"><i class="fa fa-book fa-3x"></i>
                         LAPORAN PENJUALAN</a></li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
              if (isset($_GET['halaman']))
              {
                if ($_GET['halaman']=="produk")
                {
                    include 'produk.php';
                }
                elseif ($_GET['halaman']=="pembelian")
                {
                    include 'pembelian.php';
                }
                elseif ($_GET['halaman']=="pelanggan")
                {
                    include 'pelanggan.php';
                }
                elseif ($_GET['halaman']=="hapuspelanggan") 
                {
                        include 'hapuspelanggan.php';
                }
                elseif ($_GET['halaman']=="detail") 
                {
                    include 'detail.php';
                }
                elseif ($_GET['halaman']=="tambahproduk")
                {
                    include 'tambahproduk.php';
                }
                elseif ($_GET['halaman']=="hapusproduk")
                {
                    include 'hapusproduk.php';
                }
                elseif ($_GET['halaman']=="ubahproduk")
                {
                    include 'ubahproduk.php';
                }
                elseif ($_GET['halaman']=="ongkir")
                {
                    include 'ongkir.php';
                }
                elseif ($_GET['halaman']=="tambahongkir")
                {
                    include 'tambahongkir.php';
                }
                  elseif ($_GET['halaman']=="ubahongkir")
                {
                    include 'ubahongkir.php';
                }
                elseif ($_GET['halaman']=="hapusongkir")
                {
                    include 'hapusongkir.php';
                }
                
                elseif ($_GET['halaman']=="pembayaran")
                {
                    include 'pembayaran.php';
                }
                elseif ($_GET['halaman']=="confirmtesti")
                {
                    include 'confirmtesti.php';
                }
                  elseif ($_GET['halaman']=="updatetesti")
                {
                    include 'updatetesti.php';
                }
                    elseif ($_GET['halaman']=="updatetesti")
                {
                    include 'updatetesti.php';
                }
                elseif ($_GET['halaman']=="logout")
                {
                    include 'logout.php';
                }
                }
              else
               {
                 include 'home.php';
               }
               ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="./plugins/editor.js"></script>
    <script src="./plugins/ckeditor/ckeditor.js"></script>

</body>

</html>