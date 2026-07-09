<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $tanggal      = $_POST['tanggal'];
    $nama_barang  = $_POST['nama_barang'];
    $jumlah       = $_POST['jumlah'];

    // Menghapus titik jika pengguna mengetik 90.000
    $harga = str_replace(".", "", $_POST['harga']);

    $total = $jumlah * $harga;

    $query = mysqli_query($conn,"INSERT INTO tabel_pembelian
    (tanggal,nama_barang,jumlah,harga,total)
    VALUES
    ('$tanggal','$nama_barang','$jumlah','$harga','$total')");

    if($query){
        echo "<script>
                alert('Data pembelian berhasil ditambahkan');
                window.location='pembelian.php';
              </script>";
    }else{
        echo "<script>
                alert('Data gagal disimpan');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tambah Pembelian</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    margin-top:40px;
    border:none;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,.2);
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="card-header bg-primary text-white">

<h3>🛒 Tambah Data Pembelian</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label class="form-label">Tanggal</label>

<input
type="date"
name="tanggal"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Nama Barang</label>

<input
type="text"
name="nama_barang"
class="form-control"
placeholder="Masukkan nama barang"
required>

</div>

<div class="mb-3">

<label class="form-label">Jumlah</label>

<input
type="number"
name="jumlah"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">Harga</label>

<input
type="text"
name="harga"
class="form-control"
placeholder="Contoh: 90000"
required>

<small class="text-muted">
Masukkan angka tanpa "Rp". Contoh: 90000
</small>

</div>

<button
type="submit"
name="simpan"
class="btn btn-success">

💾 Simpan

</button>

<a href="pembelian.php" class="btn btn-secondary">

⬅ Kembali

</a>

</form>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>