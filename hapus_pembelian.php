<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM tabel_pembelian WHERE id='$id'");

if($query){

    echo "<script>

    alert('Data berhasil dihapus');

    window.location='pembelian.php';

    </script>";

}else{

    echo "<script>

    alert('Data gagal dihapus');

    window.location='pembelian.php';

    </script>";

}

?>