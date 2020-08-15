<?php session_start();
//koneksi ke database
include 'koneksi.php';
if(!isset($_SESSION["pelanggan"]))
{
  echo"<script>alert('anda harus login');</script>";
  echo"<script>location='login.php';</script>";
}
if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
  echo"<script>location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CHECKOUT</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<?php
include 'menu.php';
?>

<!--checkout-->
            <div class="container">
              <div class="row">
                <div class="col-sm-12">  
                <br>             
                  <h1><center><font color='#00008B'>Check Out</center></font></h1>
                    <br>
                </div>
              </div>
            </div>
                <section class="konten">
              <div class="container">
            
              <table class="table table-bordered">
                <thread>
                  <tr>
                    <th>No</th>
                    <th>produk</th>
                    <th>nama produk</th>
                    <th>harga</th>
                    
                    <th>Jumlah</th>
                      <th>Sub berat</th>
                    <th>Sub harga</th>
                  
                  </tr>
                </thread>
                <tbody>
                <?php $nomor=1; ?>
                <?php $totalbelanja = 0;?>
                <?php $totalberat = 0;?>
                <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
                <?php 
                $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                $pecah=$ambil->fetch_assoc();
                $subharga=$pecah["harga_produk"]*$jumlah;
                $subberat= $pecah["berat"]*$jumlah;
                ?>
                  <tr>
                    <td><?php echo $nomor;?></td>
                    <td><img src="foto_produk/<?php echo $pecah["foto_produk"];?>"weight="100" height="50"></td>
                    <td><?php echo $pecah["nama_produk"]; ?></td>
                    <td>Rp. <?php echo number_format($pecah["harga_produk"]);?></td>
                    <td><?php echo $jumlah;?></td>
                    <td><?php echo number_format($subberat);?> kg</td>
                    <td>Rp. <?php echo number_format($subharga);?></td>
                   
                  </tr>
                  <?php $nomor++; ?>
                  <?php $totalbelanja+=$subharga?>
                  <?php $totalberat+=$subberat?>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="5">Total Berat</th>
                  <th><?php echo number_format($totalberat)?> kg </th>
                </tr>
                  <tr>
                    <th colspan="6">Total Harga </th>
                   
                    <th>Rp. <?php echo number_format($totalbelanja)?></th>
                  </tr>
                   
                </tfoot>
              </table>

              <form method="post" >
                
                <div class="row">
                  <?php $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"]; 
                  $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
                  $detail = $ambil->fetch_assoc();?>
                      <div class="col-md-4">
                      <label >Nama</label>
                        <div class="form-group">
                      <input readonly ype="text" value="<?php echo $detail['nama_pelanggan']?>" class="form-control" >
                    </div>
                  </div> 
                  <div class="col-md-4">
                  <label> Telepon</label>
                        <div class="form-group">
                      <input readonly type="text" value="<?php echo $detail['telepon_pelanggan']?>" class="form-control" >
                    </div>
                  </div>
                  <div class="col-md-7">
                  <label>Alamat</label>
                        <div class="form-group">
                      <input readonly  type="text" value="<?php echo $detail['alamat_pelanggan']?>" class="form-control" >
                    </div>
                  </div>
                   <?php 
                  $ambil = $koneksi->query("SELECT * FROM biaya_pengiriman");?>
                  <div class="col-md-7">
                  <label>Kabupaten/Kota,Provinsi</label>
                        <div class="form-group">
                      <!-- <input type="text" value="<?php //echo $detail['alamat_pelanggan']?>" class="form-control" > -->
                      <select class="form-control" name="id_pengiriman" id="id_pengiriman">
                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                        <option value="<?php echo $pecah['id_pengiriman'] ?>"> <?php echo $pecah['kabupaten_kota_provinsi'] ?> &emsp; (Rp.<?php echo $pecah['ongkos_kirim'] ?>/kg)  </option> 
                        
                    </div>
                        <?php } ?>
                        
                        </div>
                      </select>

                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-7">
                          <div class="alert alert-info">
                            <p>
                            Jasa pengiriman hanya memakai JNE</p>
                          </div>
  <div class="col-md-12">
    <div class="alert alert-warning">
      <?php $id_pelanggan=$_SESSION["pelanggan"]["id_pelanggan"]; ?>
      <?php $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
      $detail = $ambil->fetch_assoc(); ?>
    <p>Hai,<?php echo $_SESSION["pelanggan"]
              ["nama_pelanggan"];?> pastikan data diatas benar jika ada perubahan maka dapat di <a href="ubahprofil.php?id=<?php echo $detail['id_pelanggan'];?>">ubahprofil</a>
    </p>
    </div>
    </div>
  
    </div>
                <button type="submit" class="btn btn-primary" name="checkout">Buat Pesanan</button>
                
              </form><br><br><br>
              <?php
              if (isset($_POST["checkout"]))
              {
                $id_pengiriman = $_POST['id_pengiriman'];
                $queryOngkir = $koneksi->query("SELECT * FROM biaya_pengiriman WHERE id_pengiriman='$id_pengiriman'");
                $row = $queryOngkir->fetch_assoc();
                $tarif = $row['ongkos_kirim'];
                $id_pengiriman = $row['id_pengiriman'];
                $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
                $tanggal_faktur_pembelian = date("Y-m-d");
                // $tarif=$_SESSION["pelanggan"]["tarif"]; ada ini ternyata 
                $biayakirim= $totalberat * $tarif;
                $total_faktur_pembelian = $totalbelanja + $biayakirim;
                 
                // echo "<script>alert('$total_faktur_pembelian');</script>"; die();
           $koneksi->query ("INSERT INTO faktur_pembelian(id_pelanggan,tanggal_faktur_pembelian,total_faktur_pembelian,biaya_kirim)
                  VALUES ('$id_pelanggan','$tanggal_faktur_pembelian','$total_faktur_pembelian','$biayakirim')");

                // $last_id = $koneksi->insert_id();
                $id_faktur_pembelian_barusan = $koneksi->insert_id;

                $koneksi->query ("INSERT INTO pembayaran(id_faktur_pembelian,id_pengiriman,sub_jumlah, biaya_kirim, total_pembayaran,status_pembayaran)
                  VALUES ('$id_faktur_pembelian_barusan','$id_pengiriman','$totalbelanja','$biayakirim','$total_faktur_pembelian','menunggu')");

                foreach ($_SESSION["keranjang"] as $id_produk=>$jumlah) 
                {
                  $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                  $perproduk=$ambil->fetch_assoc();

                  $nama = $perproduk['nama_produk'];
                  $harga = $perproduk['harga_produk'];
                  $subharga = $perproduk['harga_produk']*$jumlah;
                  $berat= $perproduk["berat"]*$jumlah;
                  $koneksi->query("INSERT INTO pembelian (id_faktur_pembelian,id_produk,nama,harga,subharga,jumlah,subberat)
                    VALUES ('$id_faktur_pembelian_barusan','$id_produk','$nama','$harga','$subharga','$jumlah','$berat')");

                  $koneksi->query("UPDATE produk SET stock=stock-$jumlah WHERE id_produk='$id_produk'");
                }
             

            include('phpmailer/class.phpmailer.php');
            include('phpmailer/class.smtp.php');
            $mail = new PHPMailer();
             
            $mail->Host     = "ssl://smtp.gmail.com"; 
            $mail->Mailer   = "smtp";
            $mail->SMTPAuth = true; 
             
            $mail->Username = "rizkiramadhan58@gmail.com"; 
            $mail->Password = "kosmetik123";
            $webmaster_email = "rizkiramadhan58@gmail.com"; 
            $email = $_SESSION["pelanggan"]["email_pelanggan"];
            $name = $_SESSION["pelanggan"]["nama_pelanggan"]; 
            $mail->From = $webmaster_email;
            $mail->FromName = "Rizki Komputer";
            $mail->AddAddress($email,$name);
            $mail->AddReplyTo($webmaster_email,"Rizki Komputer");
            $mail->WordWrap = 50; 
            //$mail->AddAttachment("module.txt"); // attachment
            //$mail->AddAttachment("new.jpg"); // attachment
            $mail->IsHTML(true); 
            $mail->Subject = "Rizki Komputer";
            $mail->Body = "$id_pembellian : harap segera lakukan pembayaran"; 
            $mail->AltBody = "This is the body when user views in plain text format"; 
            if(!$mail->Send())
            {
            echo "Mailer Error: " . $mail->ErrorInfo;
            }
                unset($_SESSION["keranjang"]);
                
                echo "<script>alert('faktur_pembelian sukses')</script>";
                echo "<script>location='nota.php?id=$id_faktur_pembelian_barusan';</script>";
              }
              ?>
             
                
              </div>
            </section>


<!--<pre><?php print_r($_SESSION['pelanggan']) ?></pre>--> 
<!--<pre><?php print_r($_SESSION['keranjang']) ?></pre>-->
</html>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>