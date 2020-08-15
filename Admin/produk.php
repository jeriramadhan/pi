<h2><center><b>Data Produk</b>  </center> </h2> 
<br>
<?php 
$per_hal=10;

mysql_connect('localhost', 'root', '');
mysql_select_db('rizkicomputer');

$table="produk";

$sql = ("SELECT * FROM $table");
$query=mysql_query($sql);
$count=mysql_num_rows($query);

$halaman=ceil($count / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal; 
?>

<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $count; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
<br>
<br>
<br>
<br>
	<a href="index.php?halaman=tambahproduk" class="btn btn-success"><i class="fa fa-plus"></i><span align="right">Tambah Data</span></a>
<br>
<br>
		<ul class="pagination">
			<?php
			for($x=1;$x<=$halaman;$x++){
			?>
				<li><a href="index.php?halaman=produk&page=<?php echo $x ?>"><?php echo $x ?></a></li>
			<?php
			}
			?>
		</ul>
<br>
<br>
<table class="table table-bordered " >
	<thead>
	<tr>
			<th><center>No</center></th>
			<th><center>Nama</center></th>
			<th><center>Foto</center></th>
			<th><center>Harga (Rp)</center></th>
			<th><center>Berat (kg)</center></th>
			<th><center>Stock</center></th>
			<th><center>Kategori</center></th>
			<th><center>Aksi</center></th>	
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM produk limit $start, $per_hal"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?> </td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td><?php echo $pecah['stock']; ?></td>
			<td><?php echo $pecah['nama_kategori']; ?> </td>
			
			<td>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>' }" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
				<br><br>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];
				?> "class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>ubah</a>
			</td>
		</tr> 
		<?php $nomor++; ?>
		<?php } ?>

	</tbody>
</table>


			

		
