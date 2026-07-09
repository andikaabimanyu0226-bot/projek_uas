<?php
session_start();

// Cek login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

// Cek apakah id terkirim
$id = $_POST['id'] ?? '';

if ($id == '') {
    header("Location:user.php");
    exit;
}


$id         = $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$status     = $_POST['status'];

// Query Update
$query = mysqli_query($conn,"
UPDATE users
SET
nama='$nama',
username='$username',
password='$password',
status='$status'
WHERE id='$id'
");

// Cek hasil query
if ($query) {
    header("Location:user.php");
    exit;
} else {
    die("Update gagal! " . mysqli_error($conn));
}