<?php 
include '../koneksi.php';

$id_galeri = $_GET['id_galeri'];

$hapus = mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri = '$id_galeri'");

if ($hapus){
    echo '<script>alert("Data Berhasil Dihapus"); </script>';
    echo '<script>window.location = "../galeri-panel.php" ;</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus"); </script>';
    echo '<script>window.location = "../galeri-panel.php" ;</script>';
}



?>