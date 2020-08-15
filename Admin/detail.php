<h2> Detail faktur_pembelian </h2>
<?php
$ambil = $koneksi->query("SELECT * FROM faktur_pembelian JOIN pelanggan
	ON faktur_pembelian.id_pelanggan=pelanggan.id_pelanggan
	where faktur_pembelian.id_faktur_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<!--<pre><?php print_r($detail); ?> </pre>-->

<b>NAMA 	  : <?php echo $detail['nama_pelanggan']; ?></b> <br>
<p>
<b>NO.TELFON :	<?php echo $detail['telepon_pelanggan']; ?></b> <br>
<b>EMAIL     :	<?php echo $detail['email_pelanggan']; ?></b>
</p> 
<p>
<b>TANGGAL	  : <?php echo $detail['tanggal_faktur_pembelian']; ?></b> <br>
<b>TOTAL 	  : <?php echo $detail['total_faktur_pembelian']; ?></b>
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama produk</th>
			<th>harga</th>
			<th>jumlah</th>
			<th> Berat</th>
			<th>subtotal</th>
			

		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN produk ON 
			pembelian.id_produk=produk.id_produk
		where pembelian.id_faktur_pembelian='$_GET[id]'"); ?>
		<?php while ($pecah=$ambil-> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?> </td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>
				<?php echo $pecah['subberat']*$pecah['jumlah']; ?> kg
			</td>
			<td>
				<?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
			</td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
