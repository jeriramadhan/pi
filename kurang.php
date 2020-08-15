<?php
session_start();
include 'koneksi.php';

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KERANJANG</title>
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
<?php include 'menu.php';
?>

		<section class="konten">
			<div class="container">
				<h1><center><font color='#f60191'>Keranjang</font></center></h1>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>nama produk</th>
							<th>Harga</th>
							<th>berat</th>
							<th>Jumlah</th>
							<th>Sub harga</th>
							<th>Sub berat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1; ?>
						<?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah):?>
						<?php
						$ambil = $koneksi->query("SELECT * FROM Produk WHERE id_produk='$id_produk'");
						$pecah = $ambil->fetch_assoc();
						$subharga = $pecah["harga_produk"]*$jumlah;
						$subberat= $pecah["berat"]*$jumlah;
						?>	
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><img src="foto_produk/<?php echo $pecah["foto_produk"];?>"weight="100" height="50"></td>
							<td><?php echo $pecah["nama_produk"]; ?></td>
							<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
							<td><?php echo number_format($pecah["berat"]); ?>kg</td>
							<td>
								<a href="kurang.php?id=<?php echo $id_produk; ?>"> <span class="fa fa-minus"></span></a>
								<?php echo $jumlah; ?>
								<a href="tambah.php?id=<?php echo $id_produk; ?>"> <span class="fa fa-plus"></span></a></td>
							<td>Rp. <?php echo number_format($subharga); ?> </td>
							<td><?php echo number_format($subberat); ?> kg</td>

							<td>
								
								
								<a onclick="if(confirm('Apakah anda yakin ingin menghapus produk ini dari keranjang anda ??')){ location.href='hapuskeranjang.php?id=<?php echo $id_produk; ?>' }" class="fa fa-trash"></a>
							</td>
						</tr>
					<?php $nomor++; ?>
					<?php endforeach ?>
					</tbody>
				</table>

				<a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
				<a href="checkout.php" class="btn btn-success">Check Out</a>
			</div>
		<?php
			$id_produk=$_GET['id'];
			if (isset($_SESSION['keranjang'][$id_produk]))
			{
				$_SESSION['keranjang'][$id_produk]-=1;
			}
			else
			{
				$_SESSION['keranjang'][$id_produk]=1;
			}
			echo "<meta http-equiv='refresh' content='1;url=keranjang.php'>"
		?>
		</section><br><br><br><br>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>