<h2><center>Detail Pembayaran</center></h2>
<?php 
$id_faktur_pembelian = $_GET['id'];
$ambil=$koneksi->query("SELECT*FROM pembayaran where id_faktur_pembelian='$id_faktur_pembelian'");
$detail = $ambil->fetch_assoc();
?>

 <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <table class="table">
                                        <tr>
                                            <th>Nama</th>
                                            <td> : <?php echo $detail['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Pembayaran</th>
                                            <td> : <?php echo $detail['metode_pembayaran']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <td> : <?php echo $detail['jumlah']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal</th>
                                            <td> : <?php echo $detail['tanggal']; ?></td>
                                        </tr>
                                         <tr>
                                            <th>status pembayaran</th>
                                            <td> : <?php echo $detail['status_pembayaran']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <img src="../buktipembayaran/<?php echo $detail['bukti_pembayaran'];?>" height='500px' width='400px'>
                                </div>
                            </div>
                            <div class="header">
                            <form method="post">
                                <div class="form-group">
                                <h2> Konfirmasi Pengiriman </h2>
                                    <div class="form-line">
                                        <label>Nomor Resi</label>
                                        <input type="text" name="resi" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Status Pengiriman</label>
                                        <select class="form-control" name="status_faktur_pembelian">
                                            <option>pilih status</option>
                                            <option value="pembayaran berhasil dikonfirmasi">pembayaran berhasil dikonfirmasi</option>
                                              <option value="barang telah diterima">Barang Telah Diterima</option>
                                            <option value="barang sedang dikirim">barang sedang dikirim</option>
                                            <option value="Pending">Pending</option>
                                            <option value="batal dikirim">batal dikirim</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary" name="process">process</button>
                            </form>
                        </div>

                        <?php 
                        if (isset($_POST["process"])) 
                        {
                            $resi = $_POST["resi"];
                            $status_faktur_pembelian = $_POST["status_faktur_pembelian"];
                            $koneksi->query("UPDATE faktur_pembelian SET resi_pengiriman='$resi', status_faktur_pembelian='$status_faktur_pembelian' WHERE id_faktur_pembelian='$id_faktur_pembelian'");

                            echo "<script>location='index.php?halaman=pembelian';</script>";
                        }
                         ?>

                    </div>
                </div>
            </div>
