<?php

require_once "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");