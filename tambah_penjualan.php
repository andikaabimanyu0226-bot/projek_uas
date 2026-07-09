<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $tanggal      = $_POST['tanggal'];
    $nama_barang  = $_POST['nama_barang'];
    $jumlah       = $_POST['jumlah'];
    $harga        = $_POST['harga'];

    $total = $jumlah * $harga;

    mysqli_query($conn,"INSERT INTO tabel_penjualan
    (tanggal,nama_barang,jumlah,harga,total)
    VALUES
    ('$tanggal','$nama_barang','$jumlah','$harga','$total')");

    echo "<script>
            alert('Data berhasil ditambahkan');
            window.location='penjualan.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Tambah Penjualan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Tambah Data Penjualan</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Tanggal</label>

<input type="date"
name="tanggal"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Nama Barang</label>

<input type="text"
name="nama_barang"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Jumlah</label>

<input type="number"
name="jumlah"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Harga</label>

<input type="number"
name="harga"
class="form-control"
required>

</div>

<button type="submit"
name="simpan"
class="btn btn-success">

Simpan

</button>

<a href="penjualan.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>

</html>