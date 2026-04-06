<?php
session_start();
$username = $_POST['username'];

//untuk membuat sesi baru dengan nama username
$_SESSION['username'] = $username;

//Redirect untuk mengarahkan ke halaman home.php
header("Location: home.php");


