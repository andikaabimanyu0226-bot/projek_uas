<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM tabel_penjualan WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $tanggal = $_POST['tanggal'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];

    // Menghapus titik jika pengguna mengetik 90.000
    $harga = str_replace(".", "", $_POST['harga']);

    $total = $jumlah * $harga;

    mysqli_query($conn,"UPDATE tabel_penjualan SET
        tanggal='$tanggal',
        nama_barang='$nama_barang',
        jumlah='$jumlah',
        harga='$harga',
        total='$total'
        WHERE id='$id'
    ");

    echo "<script>
        alert('Data berhasil diubah');
        window.location='penjualan.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Penjualan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Data Penjualan</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Tanggal</label>

<input
type="date"
name="tanggal"
class="form-control"
value="<?= $d['tanggal']; ?>"
required>

</div>

<div class="mb-3">

<label>Nama Barang</label>

<input
type="text"
name="nama_barang"
class="form-control"
value="<?= $d['nama_barang']; ?>"
required>

</div>

<div class="mb-3">

<label>Jumlah</label>

<input
type="number"
name="jumlah"
class="form-control"
value="<?= $d['jumlah']; ?>"
required>

</div>

<div class="mb-3">

<label>Harga</label>

<input
type="text"
name="harga"
class="form-control"
value="<?= number_format($d['harga'],0,',','.'); ?>"
required>

</div>

<button
type="submit"
name="update"
class="btn btn-success">

Update

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