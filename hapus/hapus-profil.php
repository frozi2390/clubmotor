<?php 
include '../koneksi.php';

$id_profil = $_GET['id_profil'];

$hapus = mysqli_query($koneksi,"DELETE FROM profil WHERE id_profil = '$id_profil'");

if ($hapus){
    echo '<script>alert("Data Berhasil Dihapus"); </script>';
    echo '<script>window.location = "../profil-panel.php" ;</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus"); </script>';
    echo '<script>window.location = "../profil-panel.php" ;</script>';
}



?>