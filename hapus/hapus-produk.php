<?php 
include '../koneksi.php';

$id_produk = $_GET['id_produk'];

$hapus = mysqli_query($koneksi,"DELETE FROM produk WHERE id_produk = '$id_produk'");

if ($hapus){
    echo '<script>alert("Data Berhasil Dihapus"); </script>';
    echo '<script>window.location = "../produk-panel.php" ;</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus"); </script>';
    echo '<script>window.location = "../produk-panel.php" ;</script>';
}



?>