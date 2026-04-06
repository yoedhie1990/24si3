<?php

$nama = $_POST['nama'];

echo "Hello " . $nama;

//tulis ke file
file_put_contents("data.txt",$nama ."\n", FILE_APPEND);

echo "<br><a href='form.php'>Kembali</a>";