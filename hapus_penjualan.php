<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM tabel_penjualan WHERE id='$id'");

echo "<script>

alert('Data berhasil dihapus');

window.location='penjualan.php';

</script>";

?>