<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];

$submit = mysqli_query(
    $koneksi,
    "INSERT INTO about VALUES(NULL,'$judul','$isi')"
);
header('location:../about-panel.php?pesan=berhasil');



?>