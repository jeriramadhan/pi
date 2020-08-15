<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo"<script>alert('silahkan login');</script>";
	echo"<script>location='login.php';</script>";
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
    <title>RIWAYAT</title>
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
	
	<?php include 'menu.php'; ?>
<!-- <pre><?php print_r($_SESSION) ?> </pre>
<?php 
				$per_hal=10;

				mysql_connect('localhost', 'root', '');
				mysql_select_db('rizkicomputer');

				$table="testimoni";

				$sql = ("SELECT * FROM $table");
				$query=mysql_query($sql);
				$count=mysql_num_rows($query);

				$halaman=ceil($count / $per_hal);
				$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
				$start = ($page - 1) * $per_hal;
				?> -->
<section class="riwayat">
	<div class="container">
	<br><br>
		<h1><center><font color='blue'>Riwayat Belanja <?php echo $_SESSION["pelanggan"]["nama_pelanggan"]?></font></center></h1><br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal faktur_pembelian</th>
					<th>Status Pengiriman</th>
					<th>Total Belanja</th>
					<th>Biaya pengiriman</th>
					<th>Total Pembayaran</th>
					<th>Status Pembayaran</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor=1;
				$id_pelanggan=$_SESSION["pelanggan"]["id_pelanggan"];
				$ambil=$koneksi->query("SELECT*FROM pembayaran LEFT JOIN faktur_pembelian ON faktur_pembelian.id_faktur_pembelian=pembayaran.id_faktur_pembelian
										LEFT JOIN biaya_pengiriman ON biaya_pengiriman.id_pengiriman=pembayaran.id_pengiriman WHERE faktur_pembelian.id_pelanggan='$id_pelanggan' limit $start, $per_hal");
				while($pecah=$ambil->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["tanggal_faktur_pembelian"]; ?> 
					</td>
					<td><?php echo $pecah["status_faktur_pembelian"]; ?>
					<br>
						<?php if (!empty($pecah['resi_pengiriman'])): ?>
							Resi : <?php echo $pecah['resi_pengiriman']; ?>
						<?php endif ?>
					</td>
					<td>Rp. <?php echo number_format($pecah["sub_jumlah"])?></td>
					<td>Rp. <?php echo number_format($pecah["biaya_kirim"])?></td>
					<td>Rp. <?php echo number_format($pecah["total_faktur_pembelian"])?></td>
					<td><?php echo $pecah['status_pembayaran'] ?></td>
					<td>
						<center><a href="nota.php?id=<?php echo $pecah["id_faktur_pembelian"] ?>" class="btn btn-info">Detail Pemesanan</a></center>
						
						<?php if($pecah['status_pembayaran'] !="Lunas") {?>
						<center><a href="pembayaran.php?id=<?php echo $pecah["id_pembayaran"]; ?>" class="btn btn-success">Pembayaran</a></center>
						<?php } else {?>
						<center><a href="cetakpembelian.php?id=<?php echo $pecah["id_faktur_pembelian"] ?>" class="btn btn-success">Cetak Kuitansi</a></center>
						<?php }?>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php }?>
			</tbody>
			<ul class="pagination">
			<?php
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="testimoni.php?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
				}
				?>
		</ul>
		</table>
	</div>
</section>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
