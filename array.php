<?php
$nilai = [80, 90, 75, 85, 95];
echo $nilai[2];
echo "<br>";
$mhs = [
    "nama" => "Yudhistira",
    "umur" => 21,
    "jurusan" => "Teknik Informatika"
];


echo $mhs["nama"];
cetakbr();

$StudentsGrades = [
    "Alice" => [85, 90, 78],
    "Bob" => [88, 76, 92],
    "Charlie" => [90, 85, 87]
];

foreach ($StudentsGrades as $student => $grades) {
   echo "Sum of Grades for " . $student . ": " . array_sum($grades);
    echo "<br>";
}

function cetakbr() {
    echo "<br>";
}

function helloNama($nama) {
    echo "Hello, " . $nama  . "!";
}

helloNama('Budi');

function cekGenap($angka) {
    if ($angka % 2 == 0) {
        return true;
    } else {
        return false;
    }
}   
var_dump(cekGenap(5)); // true