<?php
session_start();

// Cek login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

// Cek apakah id terkirim
if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Error: ID tidak ditemukan.");
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