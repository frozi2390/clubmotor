<?php 
include '../koneksi.php';

$id_artikel = $_GET['id_artikel'];

$hapus = mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel = '$id_artikel'");

if ($hapus){
    echo '<script>alert("Data Berhasil Dihapus"); </script>';
    echo '<script>window.location = "../artikel-panel.php" ;</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus"); </script>';
    echo '<script>window.location = "../artikel-panel.php" ;</script>';
}



?>