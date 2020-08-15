<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","rizkicomputer");


if(!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus LOGIN');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE xhtml>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rizki Komputer </title>
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  >Admin</a> 
            </div>

            <div style="color: white;padding: 15px 20px 15px 20px;float: right;font-size: 16px;"> 
       <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> 
      </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/bg.png" class="user-image img-responsive"/>
                    </li>
                   <li> <a href="index.php"><i class="fa fa-home fa-3x"></i> HOME</a></li>
                    <li> <a href="index.php?halaman=produk"><i class="fa fa-archive fa-3x"></i> 
                    DATA PRODUK</a></li>
                    <li> <a href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart fa-3x"></i> DATA PEMBELIAN</a></li>
                    <li> <a href="index.php?halaman=pelanggan"><i class="fa fa-user fa-3x"></i> DATA PELANGGAN</a></li>
                    <li> <a href="index.php?halaman=ongkir"><i class="fa fa-truck fa-3x"></i>
                    BIAYA PENGIRIMAN</a></li>
                    <!-- <li> <a href="index.php?halaman=confirmtesti"><i class="fa fa-Tags fa-3x"></i>
                    Testimoni</a></li> -->
                    <li> <a href="laporanpenjualan.php"><i class="fa fa-book fa-3x"></i>
                    LAPORAN PENJUALAN</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
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

                    elseif ($_GET['halaman']=="hapustesti")
                {
                    include 'hapustesti.php';
                }
                elseif ($_GET['halaman']=="logout")
                {
                    include 'logout.php';
                }
                }
               ?>
               <h2><center> Laporan Penjualan  </center></h2> 
<form action="" method="get">


                              <div class="row">

                               <div class="col-xs-12">
                                <div class="row">
								<div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="form-line">
                                   <select name="tanggal" class="form-control" 
                                   onchange="this.form.submit()">
                                    <option>pilih tanggal</option>
                                    <?php 
                                    $ambil=$koneksi->query("SELECT  distinct tanggal_faktur_pembelian from faktur_pembelian order by tanggal_faktur_pembelian desc");
                                    while($pecah = $ambil ->fetch_assoc()){
                                    
                                    ?>
                                    <option><?php echo $pecah['tanggal_faktur_pembelian'] ?></option>
                                    <?php } ?>
                                   </select>
                                    
                                  </div>
                                 </div>
                                </div>
                               </div>
                           </div>
                            </form>
                            <br>
                            <?php 
                            if(isset($_GET['tanggal'])){
                                $tanggal_faktur_pembelian=mysql_real_escape_string($_GET['tanggal']);
                                $tg="cetak.php?tanggal_faktur_pembelian='$tanggal_faktur_pembelian'";?>
                                <a style="margin-bottom:10px" href="<?php echo $tg ?>" target="_blank" class="btn btn-success"right><i class="fa fa-print"></i> Cetak Laporan</a>
                            <?php
                            }
                            ?>
                            <?php 
                            if(isset($_GET['tanggal'])){
                                echo "<h4> Data Pemesanan Tanggal <a style='color:blue'> ".$_GET['tanggal']."</a></h4>";
                            }
                            ?>
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>No faktur_pembelian</th>
                                        <th>Tanggal</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Sub Total</th>
                                    </tr>
                                <?php 
                                if(isset($_GET['tanggal'])){
                                $tanggal_faktur_pembelian=mysql_real_escape_string($_GET['tanggal']);
                                $ambil=$koneksi->query("SELECT faktur_pembelian.id_faktur_pembelian,tanggal_faktur_pembelian,nama,harga,jumlah,subharga,status_faktur_pembelian FROM faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where tanggal_faktur_pembelian like  '$tanggal_faktur_pembelian'and status_faktur_pembelian='barang telah diterima' order by id_faktur_pembelian  asc");
                                }
                                $nomor=1;
                                while($pecah=$ambil->fetch_assoc()){
                                ?>
                               <tr>
                                    <td><?php echo $nomor;?></td>
                                    <td><?php echo $pecah['id_faktur_pembelian']?></td>
                                    <td><?php echo $pecah['tanggal_faktur_pembelian']?></td>
                                    <td><?php echo $pecah['nama'];?></td>
                                    <td>Rp. <?php echo number_format($pecah['harga'])?></td>
                                    <td><?php echo $pecah['jumlah']?></td>
                                    <td>Rp.<?php echo number_format($pecah['subharga'])?></td>
                                </tr>
                                <?php $nomor++ ?>                    
                                <?php } ?>
                                
                                <tr>
                                    <td colspan="6">Total Pemasukan</td>
                                    <?php 
                                    if(isset($_GET['tanggal'])){
                                        $tanggal_faktur_pembelian=mysql_real_escape_string($_GET['tanggal']);
                                        $x=$koneksi->query("SELECT sum(subharga) as total from faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where tanggal_faktur_pembelian='$tanggal_faktur_pembelian' AND status_faktur_pembelian='barang telah diterima' ");   
                                        $xx=$x->fetch_assoc();          
                                        echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
                                    }

                                    ?>
                                </tr>
                            </table>
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

    <script src="../admin/plugins/ckeditor/ckeditor.js"></script>
       
</body>
</html>