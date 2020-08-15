<?php

$ambil= $koneksi->query("SELECT * FROM biaya_pengiriman WHERE id_pengiriman='$_GET[id]'");

$koneksi->query("DELETE FROM biaya_pengiriman WHERE id_pengiriman='$_GET[id]'");

echo "<script>alert('ongkir terhapus');</script>";
echo "<script>location='index.php?halaman=ongkir';</script>";

?>