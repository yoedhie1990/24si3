<?php

require_once "config.php";

$sql = "SELECT * FROM siswa";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

echo "<a href='form_tambah.php'>Tambah Data</a><br><br>";
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " " . $row['nama'] . " " . $row['kelas'] . " <a href='form_edit.php?id=" . $row['id'] . "'>Edit</a> " . "<a href='proses_hapus.php?id=" . $row['id'] . "'>Hapus</a> " . "<br>";
}

$conn->close();