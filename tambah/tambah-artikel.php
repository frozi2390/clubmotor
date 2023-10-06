<?php
include '../koneksi.php';


// Upload img
$gambar = uploadImg();
if( !$gambar ) {
    return false;
}

$judul = $_POST['judul'];
$isi = $_POST['isi'];
// var_dump($_FILES); die;

$submit = mysqli_query(
    $koneksi,
    "INSERT INTO artikel VALUES(NULL,'$gambar','$judul','$isi')"
);


function uploadImg() {
    $nameFile = $_FILES['gambar']['name'];
    $sizeFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    // If picture not upload
    if ( $error === 4 ) {
        echo "<script>
        alert('Choose a img Image First!');
        </script>";
        return false;
    }

    // Check image upload
    $extensionImgValid = ['jpg', 'jpeg', 'png'];
    $extensionImg = explode('.', $nameFile);
    $extensionImg = strtolower(end($extensionImg));
    if ( !in_array($extensionImg, $extensionImgValid ) ) {
        echo "<script>
        alert('File You Have Choosen is Not Image Type!');
        </script>";
        return false;
    }

    // Check size img
    if ( $sizeFile > 10000000) {
        echo "<script>
        alert('Image Size Too Large!');
        </script>";
        return false;
    }


    // Generate File IMG
    $nameFileNew = uniqid();
    $nameFileNew .= '.';
    $nameFileNew .= $extensionImg;
    // Image to TMP
    move_uploaded_file($tmpName, '../assets/img/' . $nameFileNew);

    return $nameFileNew;

}
header('location:../artikel-panel.php?pesan=berhasil');

?>