<?php


$conn = mysqli_connect("localhost", "root", "dhifamedia2021", "24SI3");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}