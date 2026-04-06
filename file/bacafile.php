<?php
$databaru = "\n4;Ulfa Annisa;09121112";
file_put_contents("mhs.txt",$databaru,FILE_APPEND);


$students = file('mhs.txt');
// var_dump($students);
echo "<table border=1><tr><th>No</th><th>Nama</th><th>NIM</th></tr>";
$i=1;
foreach ($students as $student) {
    //echo $student."<br>";
    $data = explode(";",$student);
    //var_dump($data);
    echo "<tr><td>$i</td><td>$data[1]</td><td>$data[2]</td></tr>"; 
    $i++;
}
echo "</table>";