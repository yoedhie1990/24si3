<?php
require_once "config.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO siswa (nama, kelas) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nama, $kelas);
$stmt->execute();

header("Location: index.php");