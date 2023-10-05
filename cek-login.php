<?php 
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username ='$username' AND password = '$password'");
$data = mysqli_fetch_array($login);


if(!empty($data)){
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['email'] = $data['email'];


    echo "<script>alert('Akun Terdaftar');</script>";
    echo "<script>window.location = 'index-panel.php';</script>";

}else{
    echo "<script>alert('Akun Tidak Terdaftar');</script>";
    echo "<script>window.location = 'form-login.php';</script>";
}



?>