<?php
include '../koneksi.php';

$isi = $_POST['isi'];

$submit = mysqli_query(
    $koneksi,
    "INSERT INTO profil VALUES(NULL,'$isi')"
);
header('location:../profil-panel.php?pesan=berhasil');



?>