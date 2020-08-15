<?php 
session_start();
include 'koneksi.php'; ?>

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
<style>
#logo h1 a {
  color: #00195e;
  line-height: 1;
  display: inline-block;
}
#logo h1 a span {
  color: #999999;
}


</style>
<body>
     
  <section class="konten">
  	<div class="container">
        <div id="logo" class="pull-left">
                <!-- <h1><img src="img/une.png" alt=""> -->
                    <!-- RIZKY<span>COMPUTER.</span> -->
                </h1></div>
                <div class="pull-right">
                <!-- <h4><i class="fa fa-whatsapp "></i> CUSTOMER CARE : +62 8534142067
               </h4> -->
            
               <!-- <button onClick="window.print();"><i class="fa fa-print"></i> cetak kuitansi</button>  -->
          </a>
               </div>
<br><br><br><br><br>
<h1 ><center><font face="verdana" color='blue'> KUITANSI </font></center></h1>
<br>
<?php
$ambil = $koneksi->query("SELECT * FROM pembayaran 
	LEFT JOIN faktur_pembelian ON faktur_pembelian.id_faktur_pembelian=pembayaran.id_faktur_pembelian
	LEFT JOIN pelanggan ON faktur_pembelian.id_pelanggan=pelanggan.id_pelanggan
	LEFT JOIN biaya_pengiriman ON biaya_pengiriman.id_pengiriman=pembayaran.id_pengiriman

	where faktur_pembelian.id_faktur_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();

$kirim = $detail['biaya_kirim'];

?>
<!--<h1> Data orang yang beli $detail</h1>-->
 <!--<pre><?php //print_r($detail); ?> </pre>-->

 <!--<h1> Data orang yang login di session</h1>-->
<!--<pre><?php //print_r($_SESSION)?></pre>-->
<div class="pull-right">
<h3>Metode Pembayaran</h3>
<h4><?php echo $detail['metode_pembayaran']; ?></h4>
</div>



     <p> Kepada <strong><?php echo $detail['nama']; ?></strong>, </p>
    
     <p>Kuitansi ini adalah bukti transaksi di Rizki Computer Berikut kami sertakan detail faktur pembelian anda:</p>
     Nomor faktur pembelian : <?php echo $detail['id_faktur_pembelian'] ?>
     <br>
    
     Tanggal faktur pembelian : <?php echo $detail['tanggal_faktur_pembelian']; ?><br>
   
   
    
	
<!-- <div class="col-md-4"> 
	<h3> Pelanggan</h3>
	<strong><?php echo $detail['nama_pelanggan']; ?> <br>
	<p>
	<?php echo $detail['telepon_pelanggan'] ?> <br>
	<?php echo $detail['email_pelanggan'] ?>
	</p>
</div> -->
	  <div class="pull-right">
     <h3>Status Pembayaran</h3>
     <h4><?php echo $detail['status_pembayaran'] ?></h4>
</div>
	<h4>Rincian Pengiriman</h4>
	
	Alamat: <?php echo $detail['alamat_pelanggan']?> <br><?php echo $detail['kabupaten_kota_provinsi'] ?> <br><?php echo $detail['telepon_pelanggan'] ?> <br> <br><br><br>
 
	

<table class="table table-bordered">
     <thead  >
          <tr>
               <th colspan="5" >Detail faktur pembelian</th>
          </tr>
     </thead>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga per unit</th>
			
			<th>Jumlah</th>
			<!-- <th>Berat</th> -->
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $totalberat = 0;?>
		<?php $ambil=$koneksi->query("SELECT * FROM 
			pembelian where id_faktur_pembelian='$_GET[id]'"); ?>
		<?php while ($pecah=$ambil-> fetch_assoc()){ 
		 $berat = $pecah['subberat'];
			$jumlah = $pecah['jumlah'];
			$subberat = $berat*$jumlah;

		 ?>
		<tr>
			<td><?php echo $nomor; ?> </td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
				
			<td><?php echo $pecah['jumlah']; ?></td>
		<!-- <td><?php echo number_format($subberat); ?>kg </td> -->
			<td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
		</tr>
		<?php $nomor++ ?>
		<?php $totalberat+=$subberat?>
		<?php } ?>
	</tbody>
              <tfoot>
            <tr>
              <th colspan="4">Biaya Pengiriman</th>
			  <!-- <th><?php echo number_format($totalberat)?> kg  X Rp. <?php echo number_format($detail['ongkos_kirim']) ?></th> -->
               <th> Rp. <?php echo number_format($kirim) ?></th>
            </tr>
			

           

            <tr>
              <th colspan="4">Total Belanja</th>
              <th>Total : Rp. <?php echo number_format($detail['jumlah']) ?> </th>
            </tr>
            
          </tfoot>
</table>
<br><br>

	</th>
</tr>
</section>
</html>

    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>