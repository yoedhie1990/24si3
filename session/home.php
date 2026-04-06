<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "<h1>Selamat Datang " . $_SESSION['username'] . "</h1>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<h1>Anda belum login</h1>";
    echo "<a href='form.php'>Login</a>";
}

?>