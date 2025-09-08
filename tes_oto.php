
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar nilai</title>
</head>
<body>
    <h2>Nilai Akhir!!</h2>
    <table border="1">
<?php 
$nama = "Mulki";
$tugas = 60;
$quiz = 70;
$uts = 77;
$uas = 80;
$grade;

    function hitungNilai($tugas, $quiz, $uts, $uas){
        $nilai_akhir=($tugas * 0.1 + $quiz *0.2 + $uts * 0.3 + $uas * 0.4);
    }
    $nilai_akhir =hitungNilai($tugas, $quiz, $uts, $uas);{
    
    if ($nilai_akhir >= 85){
        $grade = "A";
    } elseif ($nilai_akhir >=70){
        $grade = "B";
    } elseif ($nilai_akhir >=55){
        $grade = "C";
    } elseif ($nilai_akhir >=40){
        $grade = "D";
    } else {
        $grade = "E";
    }
    }
        echo "<tr>
                <td>$nama</td>
                <td>$tugas</td>
                <td>$quiz</td>
                <td>$uts</td>
                <td>$uas</td>
                <td>$nilai_akhir</td>
                <td>$grade</td>
            </tr>"

?>
    </table>
</body>
</html>