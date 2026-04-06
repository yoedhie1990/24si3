<?php

require_once "config.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$sql = "UPDATE siswa SET nama = ?, kelas = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nama, $kelas, $id);
$stmt->execute();

header("Location: index.php");
