<!DOCTYPE html>
<html lang="en">
<head>
  <title>APLIKASI PERPUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: auto}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
  #footer {
   color: white;
   position:absolute;
   bottom:0;
   width:100%;
   height:50px;   /* tinggi dari footer */
   background-color: #555;
   padding: 15px;
}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION['nama'])|| $_SESSION['level'] != "admin"){
  echo "<script>alert('Silahkan login terlebih dahulu')</script>";
  echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{

  include_once 'head.php';
?>

<div class="container-fluid">

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h5>Wellcome : <font color="red"><?php echo $_SESSION['nama']; ?></font></h5>      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="?page=buku"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
        <li><a href="?page=anggota"><i class="glyphicon glyphicon-list-alt"></i> Anggota</a></li>
        <li><a href="?page=transaksi"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
        <li><a href="?page=laporan"><i class="glyphicon glyphicon-file"></i> Laporan</a></li>
        <li><a href="?page=user"><i class="glyphicon glyphicon-user"></i> User</a></li>
      </ul><br>
    </div>

    <?php 
    error_reporting(0);
    switch ($_GET['page']) {
      // menu buku
      case 'buku':
        include "buku_data.php";
        break;
      case 'detil-buku':
        include "buku_detil.php";
        break;
      case 'buku_input':
        include "buku_input.php";
        break;
      case 'buku_edit':
        include "buku_edit.php";
        break;
      case 'buku_search':
        include "buku_search.php";
        break;
      case 'detil-buku':
        include "buku_detil.php";
        break;

      // menu anggota
      case 'anggota':
        include "anggota_data.php";
        break;
      case 'anggota_input':
        include "anggota_input.php";
        break;
      case 'anggota_edit':
        include "anggota_edit.php";
        break;
      case 'anggota_search':
        include "anggota_search.php";
        break;
      case 'detil-anggota':
        include 'anggota_detil.php';
        break;

      // menu user
      case 'user':
        include "user_data.php";
        break;
      case 'user_input':
        include "user_input.php";
        break;
      case 'user_edit':
        include "user_edit.php";
        break;
      case 'user_search':
        include "user_search.php";
        break;
      case 'detil-user':
        include "user_detil.php";
        break;

      // Transaksi
      case 'transaksi':
        include "../transaksi_data.php";
        break;
      case 'transaksi_input':
        include "../transaksi_input.php";
        break;
      case 'transaksi_search':
        include "../transaksi_search.php";
        break;

      case 'laporan':
        include "../laporan.php";
        break;
      case 'delete':
        include "delete.php";
        break;

      case 'logout':
        include "../logout.php";
        break;
      
      default:
        include "home.php";
        break;
    }
    ?>
    
  </div>
</div>
</div>
<br>
<!-- <div id="container">
   <div id="body">
   <div id="footer">
<p>&copy; ANDREAS NOVITO ANDI SANO</p>
</div>
</div>
</div> -->
<?php } ?>
</body>
</html>

