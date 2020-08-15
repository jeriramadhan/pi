<?php

$koneksi=new mysqli("localhost","root","","rizkicomputer");

// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../img/bg.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Rizki Komputer',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 085715471601',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.g-cosmetics.com email : rizkikomputery@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,0.7,'Laporan Data Penjualan Produk',0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("Y-m-d"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(6,0.7,"Penjualan pada : ".$_GET['tanggal_faktur_pembelian'],0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'id faktur_pembelian', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'tanggal pesan', 1, 0, 'C');
$pdf->Cell(9, 0.8, 'Nama ', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'harga', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Total', 1, 1, 'C');

$nomor=1;
$tanggal_faktur_pembelian=$_GET['tanggal_faktur_pembelian'];
$ambil=$koneksi->query("SELECT faktur_pembelian.id_faktur_pembelian,tanggal_faktur_pembelian,nama,harga,jumlah,subharga FROM faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where status_faktur_pembelian='barang telah diterima' AND tanggal_faktur_pembelian=" . $tanggal_faktur_pembelian);
while($pecah=$ambil->fetch_assoc()){
	$pdf->Cell(1, 0.8, $nomor, 1, 0, 'C');
	$pdf->Cell(3, 0.8, $pecah['id_faktur_pembelian'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $pecah['tanggal_faktur_pembelian'],1, 0, 'C');
	$pdf->Cell(9, 0.8, $pecah['nama'], 1, 0,'C');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($pecah['harga'])." ,-", 1, 0,'C');
	$pdf->Cell(3, 0.8, $pecah['jumlah'],1, 0, 'C');
	$pdf->Cell(4, 0.8, "Rp. ".number_format($pecah['subharga'])." ,-", 1, 1,'C');	
	
	$nomor++;
}

$q=$koneksi->query("SELECT sum(subharga) as total from faktur_pembelian JOIN pembelian ON faktur_pembelian.id_faktur_pembelian=pembelian.id_faktur_pembelian where status_faktur_pembelian='barang telah diterima' AND tanggal_faktur_pembelian=".$tanggal_faktur_pembelian);
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
while($total=$q->fetch_assoc()){
	$pdf->Cell(22, 0.8, "Total Pendapatan", 1, 0,'C');		
	$pdf->Cell(4, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
}
 
$pdf->Output();
