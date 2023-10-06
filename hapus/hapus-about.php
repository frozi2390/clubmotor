<?php 
include '../koneksi.php';

$id_about = $_GET['id_about'];

$hapus = mysqli_query($koneksi,"DELETE FROM about WHERE id_about = '$id_about'");

if ($hapus){
    echo '<script>alert("Data Berhasil Dihapus"); </script>';
    echo '<script>window.location = "../about-panel.php" ;</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus"); </script>';
    echo '<script>window.location = "../about-panel.php" ;</script>';
}



?>