<?php

echo "Tugas!<br>";
$tugas = 10;
$quis = 10;
$mid = 78;
$uts = 10;

function nilai($tugas, $quis, $mid, $uts){
    $nilai_akhir = $tugas * 0.1 + $quis * 0.3 + $mid * 0.2 + $uts * 0.4;
    return $nilai_akhir;
}
$nilai_akhir =nilai($tugas, $quis, $mid, $uts );
echo "Nillai Akhir: $nilai_akhir<br>";

 if ($nilai_akhir >80){
    echo "A";
}
    elseif ($nilai_akhir >70){
        echo "B";
    }
        elseif ($nilai_akhir >60){
            echo "C";
        }
            else {
                echo "E";
            }
            
            
 ?>