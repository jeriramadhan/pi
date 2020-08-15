// $nomor=1;
// $tanggal_faktur_pembelian=$_GET['tanggal_faktur_pembelian'];
// $ambil=$koneksi->query("SELECT faktur_pembelian.id_faktur_pembelian,tanggal_faktur_pembelian,nama,harga,jumlah,subharga FROM faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where status_faktur_pembelian='barang sedang dikirim' AND tanggal_faktur_pembelian=" . $tanggal_faktur_pembelian);
// while($pecah=$ambil->fetch_assoc()){
// 	$pdf->Cell(1, 0.8, $nomor, 1, 0, 'C');
// 	$pdf->Cell(3, 0.8, $pecah['id_faktur_pembelian'],1, 0, 'C');
// 	$pdf->Cell(3, 0.8, $pecah['tanggal_faktur_pembelian'],1, 0, 'C');
// 	$pdf->Cell(9, 0.8, $pecah['nama'], 1, 0,'C');
// 	$pdf->Cell(3, 0.8, "Rp. ".number_format($pecah['harga'])." ,-", 1, 0,'C');
// 	$pdf->Cell(3, 0.8, $pecah['jumlah'],1, 0, 'C');
// 	$pdf->Cell(4, 0.8, "Rp. ".number_format($pecah['subharga'])." ,-", 1, 1,'C');	
	
// 	$nomor++;
// }

// $q=$koneksi->query("SELECT sum(subharga) as total from faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where status_faktur_pembelian='barang sedang dikirim' AND tanggal_faktur_pembelian=".$tanggal_faktur_pembelian);
// // select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
// while($total=$q->fetch_assoc()){
// 	$pdf->Cell(22, 0.8, "Total Pendapatan", 1, 0,'C');		
// 	$pdf->Cell(4, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
// }