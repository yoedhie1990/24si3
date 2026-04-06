<?php
    $nama = 'Yudhistira';
    $angka = 10;
    echo "Hello, World! ".$nama ."<br>";

    echo "<table border='1'>
            <tr>
                <th>No</th>
            </tr>";
    for ($i=1; $i < $angka ; $i++) { 
        echo "<tr><td>".$i ."</td></tr>";    
    }

    echo "</table>";

?>



