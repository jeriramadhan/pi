<h2><center>DATA faktur_pembelian </center></h2><br>

<br>
<?php 
$per_hal=10;

mysql_connect('localhost', 'root', '');
mysql_select_db('rizkicomputer');

$table="faktur_pembelian";

$sql = ("SELECT * FROM $table");
$query=mysql_query($sql);
$count=mysql_num_rows($query);

$halaman=ceil($count / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal; 
?>
<table class='table table-bordered'>
	<thead>
	<tr>
		<th>No</th>
		<th>Nama </th>
		<th>Tanggal</th>
		<th>Status Pengiriman</th>	
		<th>Status Pembayaran</th>
		<th>Total</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<ul class="pagination">
			<?php
			for($x=1;$x<=$halaman;$x++){
			?>
				<li><a href="index.php?halaman=pembelian&page=<?php echo $x ?>"><?php echo $x ?></a></li>
			<?php
			}
			?>
		</ul>
		<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT*FROM pembayaran 
										LEFT JOIN faktur_pembelian ON faktur_pembelian.id_faktur_pembelian=pembayaran.id_faktur_pembelian
										LEFT JOIN pelanggan ON faktur_pembelian.id_pelanggan=pelanggan.id_pelanggan
										LEFT JOIN biaya_pengiriman ON biaya_pengiriman.id_pengiriman=pembayaran.id_pengiriman limit $start, $per_hal"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) {; ?>
			
	    <tr>
	    	<td> <?php echo $nomor; ?> </td>
	    	<td> <?php echo $pecah['nama_pelanggan']; ?> </td>
	    	<td> <?php echo $pecah['tanggal_faktur_pembelian']; ?> </td>
	    	<td> <?php echo $pecah['status_faktur_pembelian']; ?> <br>
				<?php if (!empty($pecah['resi_pengiriman'])): ?>
					Resi : <?php echo $pecah['resi_pengiriman']; ?>
				<?php endif ?>
			</td>
			<td> <?php echo $pecah['status_pembayaran']; ?> </td>
	    	<td> <?php echo $pecah['total_faktur_pembelian']; ?> </td>
	    	<td>
	    		<center><a href="index.php?halaman=detail&id=<?php echo $pecah['id_faktur_pembelian']; ?>" 
	    		class="btn btn-info">Detail faktur_pembelian</a></center><br>
	    		<?php if($pecah['status_faktur_pembelian']=="sudah kirim pembayaran"); ?>
	    		<center><a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_faktur_pembelian']; ?>" 
	    		class="btn btn-success">Detail Pembayaran dan <br>Konfirmasi Pengiriman<br/></a></center>
			
	    	</td>
	    </tr>
	    <?php $nomor++; ?>
	    <?php } ?>
	 </tbody>
</table>

