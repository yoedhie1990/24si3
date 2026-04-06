<?php
require_once "config.php";

$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="proses_edit.php" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" value="<?php echo $row['kelas']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Edit Data">
    </form>

</body>

</html>