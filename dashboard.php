<?php
  session_start();
  // berasal dari login
  if(!isset($_SESSION['login'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project UAS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
  
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Log out navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin logout')">
            <i class="fas fa-sign-out-alt"></i>
            Logout
          </a>
      </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <!-- Dashboard -->
    <li class="nav-item">
      <a href="dashboard.php" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>

    <!-- Data Master -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Data Master
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="user.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data User</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- TRANSAKSI -->
    <li class="nav-header">TRANSAKSI</li>

    <li class="nav-item">
      <a href="penjualan.php" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>Penjualan</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="pembelian.php" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>Pembelian</p>
      </a>
    </li>

    <!-- LAPORAN -->
    <li class="nav-header">LAPORAN</li>

    <li class="nav-item">
      <a href="laporan_penjualan.php" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Laporan Penjualan</p>
      </a>
    </li>

  </ul>
</nav>
<!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">

<div class="container-fluid">

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-body text-center">
                    <h2>
                        <i class="fas fa-store"></i>
                        Sistem Informasi Penjualan
                    </h2>
                    <p class="mb-0">
                        Selamat Datang di Dashboard
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Dashboard -->
    <div class="row justify-content-center">

        <!-- Pembelian -->
        <div class="col-lg-4 col-md-6">

            <div class="small-box bg-success">

                <div class="inner">
                    <h3><i class="fas fa-shopping-cart"></i></h3>
                    <p>Data Pembelian</p>
                </div>

                <div class="icon">
                    <i class="fas fa-cart-plus"></i>
                </div>

                <a href="pembelian.php" class="small-box-footer">
                    Buka Menu <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>

        <!-- Penjualan -->
        <div class="col-lg-4 col-md-6">

            <div class="small-box bg-warning">

                <div class="inner">
                    <h3><i class="fas fa-cash-register"></i></h3>
                    <p>Data Penjualan</p>
                </div>

                <div class="icon">
                    <i class="fas fa-coins"></i>
                </div>

                <a href="penjualan.php" class="small-box-footer">
                    Buka Menu <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>

        <!-- Laporan -->
        <div class="col-lg-4 col-md-6">

            <div class="small-box bg-danger">

                <div class="inner">
                    <h3><i class="fas fa-file-alt"></i></h3>
                    <p>Laporan Penjualan</p>
                </div>

                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <a href="laporan_penjualan.php" class="small-box-footer">
                    Buka Laporan <i class="fas fa-arrow-circle-right"></i>
                </a>

            </div>

        </div>

    </div>

</div>

</section>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
