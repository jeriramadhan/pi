<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rizki Komputer-Login</title>
    <link href="css/style.css" rel="stylesheet">
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
<header id="header">
       <?php
			include 'menu.php';
								?>
	</header><!-- #header -->
<br><br><br>

<head>
  <title><center> LOGIN PELANGGAN</center></title>
  
</head>
<br>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
              <center><h3 class="panel-title">LOGIN PELANGGAN</h3></center>
            </div>
            <div class="panel-body">
              <form method="post">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                 <input type="Password" class="form-control" name="password" required>
                </div>
                 <button class="btn btn-primary" name="login">Login</button>
        </div>
    </div>
  </div>
</div>

  <center>
  <?php if(isset($_POST["login"]))
  {
    $email= $_POST["email"];
    $password= $_POST["password"];
    $ambil=$koneksi->query("SELECT * FROM pelanggan 
      WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
    $akunyangcocok = $ambil->num_rows;
    if($akunyangcocok==1)
    {
      $akun= $ambil->fetch_assoc();
      // var_dump($akun); die();
      $_SESSION["pelanggan"] = $akun;
      echo "<script>alert('Anda Sukses Login ');</script>";
      echo "<script>location='checkout.php';</script>";
    }
    else
    {
      echo "<script>alert('anda gagal login, periksa akun anda');</script>";
      echo "<script>location='login.php';</script>";
    }
  }
  ?>
 </center>
</form>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
