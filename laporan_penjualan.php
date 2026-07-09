<?php
include "koneksi.php";

$data = mysqli_query($conn, "SELECT SUM(total) AS total_penjualan FROM tabel_penjualan");
$d = mysqli_fetch_assoc($data);

$total = $d['total_penjualan'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laporan Penjualan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    margin-top:60px;
    border:none;
    border-radius:15px;
    box-shadow:0 3px 12px rgba(0,0,0,.15);
}

.card-header{
    background:#198754;
    color:white;
    border-radius:15px 15px 0 0 !important;
}

.total{
    font-size:35px;
    font-weight:bold;
    color:#198754;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header text-center">

<h3>📊 Laporan Penjualan</h3>

</div>

<div class="card-body text-center">

<h5>Total Penjualan</h5>

<p class="total">
Rp <?= number_format($total,0,',','.'); ?>
</p>

<a href="penjualan.php" class="btn btn-success">
← Kembali
</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>