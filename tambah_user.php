<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']); // password dienkripsi
    $nama     = $_POST['nama'];

    $query = mysqli_query($conn,"INSERT INTO users(username,password,nama)
                    VALUES('$username','$password','$nama')");

    if($query){
        echo "<script>
                alert('User berhasil ditambahkan');
                window.location='user.php';
              </script>";
    }else{
        echo "<script>
                alert('Gagal menambahkan user');
              </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tambah User</title>

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

<div class="card-header bg-primary text-white">
<h3>Tambah User</h3>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="simpan" class="btn btn-success">
Simpan
</button>

<a href="user.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>