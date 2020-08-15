<h2><center>Testimoni</center> </h2> 
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Komentar</th>
			<th>Opsi</th>
		</tr>
	</thead>
<!-- //tadi masih kosong blmm dimasukin testimoninya -->
<tbody>
	<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM testimoni LEFT JOIN pelanggan ON pelanggan.id_pelanggan=testimoni.id_pelanggan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo $pecah['komentar']; ?></td>
			<?php if($pecah['status'] == 0){ ?>
			<td><form method="POST" action="updatetesti.php">
					<input type="hidden" name="id" value="<?php echo $pecah['id_testimoni'] ?>">
					<button class="btn btn-success" value="proses">Tampilkan</button>
				</form>
			</td>
			<?php } else{ ?>
			<td><form method="POST" action="updatetesti.php">
					<input type="hidden" name="id" value="<?php echo $pecah['id_testimoni'] ?>">
					<button class="btn btn-warning" value="proses">Sembunyikan</button>
				</form>
			</td>
			<?php } ?>
		</tr>
	<?php $nomor++; ?>
	<?php } ?>
</tbody>
</table>