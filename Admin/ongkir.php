<h2><center> Biaya Pengiriman </center></h2> 
<?php 
$per_hal=20;

mysql_connect('localhost', 'root', '');
mysql_select_db('rizkicomputer');

$table="biaya_pengiriman";

$sql = ("SELECT * FROM $table");
$query=mysql_query($sql);
$count=mysql_num_rows($query);

$halaman=ceil($count / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal; 
?>
<a href="index.php?halaman=tambahongkir" class="btn btn-primary">Tambah biaya pengiriman </a>
<br>
<br>

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
<ul class="pagination" >
			<?php
			for($x=1;$x<=$halaman;$x++){
			?>
				<li><a href="index.php?halaman=ongkir&page=<?php echo $x ?>"><?php echo $x ?></a></li>
			<?php
			}
			?>
		</ul>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kota, Kabupaten dan Provinsi </th>
			<th> Biaya Pengiriman</th>
			<th><i class="fa fa-truck"></i>metode pengiriman</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM biaya_pengiriman limit $start, $per_hal"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_pengiriman']; ?> </td>
			<td><?php echo $pecah['kabupaten_kota_provinsi']; ?></td>
			<td><?php echo $pecah['ongkos_kirim']; ?></td>
			<td><?php echo $pecah['metode_pengiriman']; ?></td>
			<td>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data biaya pengiriman ini ??')){ location.href='index.php?halaman=hapusongkir&id=<?php echo $pecah['id_pengiriman']; ?>' }" class="btn btn-danger">Hapus</a>
				<a href="index.php?halaman=ubahongkir&id=<?php echo $pecah['id_pengiriman'];
				?> "class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>

	</tbody>
</table>
