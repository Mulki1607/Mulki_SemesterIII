<?php
include 'connect.php';
function hitung_nilai($tugas, $quiz, $uts, $uas) {
    $nilai = $tugas * 0.15 + $quiz * 0.10 + $uts * 0.35 + $uas * 0.40;
    return round($nilai, 2); // dibulatkan 2 desimal
}
function hitung_grade($nilai) {
    // Array grade: key = minimal nilai, value = huruf
    $grade = [
        81 => 'A',
        71 => 'B',
        61 => 'C',
        51 => 'D',
        0  => 'E'
    ];

    foreach ($grade as $min => $huruf) {
        if ($nilai >= $min) {
            return $huruf;
        }
    }
    return 'E'; // default
}
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Cari Nilai Mahasiswa</h2>

<form action="" method="POST">
    <label>Pilih NIM:</label><br>
    <select name="nim_select">
        <option value="">Pilih NIM</option>
        <?php
        $result = $conn->query("SELECT nim, nama FROM mahasiswa");
        while($row = $result->fetch_assoc()) {
            echo "<option value='{$row['nim']}'>{$row['nim']} - {$row['nama']}</option>";
        }
        ?>
    </select><br><br>

    <label>Atau ketik NIM:</label><br>
    <input type="text" name="nim_input" placeholder="Masukkan NIM"><br><br>

    <button type="submit">Cari Nilai</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pilih NIM dari dropdown dulu, kalau kosong pakai input text
    $nim = !empty($_POST['nim_select']) ? $_POST['nim_select'] : $_POST['nim_input'];

    if(empty($nim)){
        echo "⚠️ Mohon pilih atau ketik NIM!";
        exit;
    }

    // Ambil data mahasiswa
    $sql_mhs = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result_mhs = $conn->query($sql_mhs);

    if ($result_mhs->num_rows > 0) {
        $mhs = $result_mhs->fetch_assoc();
        echo "<h3>Data Mahasiswa</h3>";
        echo "NIM: " . $mhs['nim'] . "<br>";
        echo "Nama: " . $mhs['nama'] . "<br>";
        echo "Jurusan: " . $mhs['jurusan'] . "<br>";
        echo "Prodi: " . $mhs['prodi'] . "<br>";
        echo "Kelas: " . $mhs['kelas'] . "<br><br>";
    } else {
        echo "⚠️ Mahasiswa dengan NIM ini tidak ditemukan.<br>";
        exit;
    }

    // Ambil nilai mahasiswa
    $sql_nilai = "SELECT * FROM nilai WHERE nim='$nim'";
    $result_nilai = $conn->query($sql_nilai);

    if ($result_nilai->num_rows > 0) {
        echo "<h3>Nilai</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
                <th>Tugas</th>
                <th>Quiz</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Angka</th>
                <th>Grade</th>
              </tr>";

        while ($row = $result_nilai->fetch_assoc()) {
            $nilai_angka = hitung_nilai($row['n_tugas'], $row['n_quiz'], $row['n_uts'], $row['n_uas']);
            $grade = hitung_grade($nilai_angka);

            echo "<tr>";
            echo "<td>".$row['n_tugas']."</td>";
            echo "<td>".$row['n_quiz']."</td>";
            echo "<td>".$row['n_uts']."</td>";
            echo "<td>".$row['n_uas']."</td>";
            echo "<td>".$nilai_angka."</td>";
            echo "<td>".$grade."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "⚠️ Nilai untuk NIM ini belum tersedia.";
    }
}
?>

<br>
<a href="index.html"><button type="button">Menu Utama</button></a>
<a href="tambah_mahasiswa.php"><button type="button">Tambah Nilai</button></a>

</body>
</html>
