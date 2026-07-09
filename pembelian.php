<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Pembelian</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    margin-top:40px;
    border:none;
    border-radius:15px;
    box-shadow:0px 3px 10px rgba(0,0,0,0.15);
}

.table th{
    background:#0d6efd;
    color:white;
    text-align:center;
}

.table td{
    text-align:center;
    vertical-align:middle;
}

h2{
    font-weight:bold;
}

.btn{
    border-radius:8px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

<h4 class="mb-0">
🛒 Data Pembelian
</h4>

<a href="tambah_pembelian.php" class="btn btn-light">
+ Tambah Pembelian
</a>

</div>

<div class="card-body">

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>No</th>
<th>Tanggal</th>
<th>Nama Barang</th>
<th>Jumlah</th>
<th>Harga</th>
<th>Total</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php

$data = mysqli_query($conn,"SELECT * FROM tabel_pembelian");

$no = 1;

while($d = mysqli_fetch_assoc($data))
{

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['tanggal']; ?></td>

<td><?= $d['nama_barang']; ?></td>

<td><?= $d['jumlah']; ?></td>

<td>
Rp <?= number_format($d['harga'],0,',','.'); ?>
</td>

<td>
<strong>
Rp <?= number_format($d['total'],0,',','.'); ?>
</strong>
</td>

<td>

<a href="edit_pembelian.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">
✏ Edit
</a>

<a href="hapus_pembelian.php?id=<?= $d['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">

🗑 Hapus

</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>