<?php

require_once "config.php";
//variabel dari database
$usernameDB = 'admin';
$passDB = '12345';

$username = $_POST['username'];
$password = $_POST['password'];

//pengecekan login
if ($username == $usernameDB && $password == $passDB) {
    //jika login benar
    $_SESSION['username'] = $username;
    //kembali ke halaman protected
    header("Location: protected.php");
} else {
    //jika login salah
    //pesan sementara jika login salah
    $_SESSION['error'] = "Username atau password salah";
    //kembali ke halaman login
    header("Location: login.php");
}

