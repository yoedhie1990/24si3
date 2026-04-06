<?php


$conn = mysqli_connect("localhost", "root", "", "24SI3");

if (!$conn) {
    die("Koneksi gagal ya " . mysqli_connect_error());
}