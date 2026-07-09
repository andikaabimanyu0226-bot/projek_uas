<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM tabel_pembelian WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $tanggal      = $_POST['tanggal'];
    $nama_barang  = $_POST['nama_barang'];
    $jumlah       = $_POST['jumlah'];
    $harga        = str_replace(".", "", $_POST['harga']);

    $total = $jumlah * $harga;

    $query = mysqli_query($conn,"UPDATE tabel_pembelian SET
        tanggal='$tanggal',
        nama_barang='$nama_barang',
        jumlah='$jumlah',
        harga='$harga',
        total='$total'
        WHERE id='$id'
    ");

    if($query){
        echo "<script>
                alert('Data pembelian berhasil diubah');
                window.location='pembelian.php';
              </script>";
    }else{
        echo "<script>
                alert('Gagal mengubah data');
              </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Edit Pembelian</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    margin-top:40px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,.2);
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="card-header bg-warning">

<h3>Edit Data Pembelian</h3>

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

<a href="pembelian.php" class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>

</html>