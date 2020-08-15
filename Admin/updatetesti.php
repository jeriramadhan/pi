<?php 
	$koneksi = new mysqli("localhost","root","","rizkicomputer");
	$id=$_POST['id'];
	$ambil=$koneksi->query("SELECT * FROM pelanggan JOIN testimoni ON pelanggan.id_pelanggan=testimoni.id_pelanggan");
	$testi = $ambil->fetch_assoc();
	if ($testi['status'] == 1) {
		$koneksi->query("UPDATE testimoni SET status = '0' WHERE id_testimoni = '$id'");
	}else{
		$koneksi->query("UPDATE testimoni SET status = '1' WHERE id_testimoni = '$id'");
	}
	echo "<script>alert('data testimoni terupdate');</script>";
	echo "<script>location='index.php?halaman=confirmtesti'</script>"
?>