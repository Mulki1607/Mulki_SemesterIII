<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Tambah Nilai</h2>
        <form action="" method="POST">
            <label>NIM:</label><br>
            <input type="text" name="nim" required><br><br>
            <label>Nilai Tugas:</label><br>
            <input type="number" name="tugas" required><br><br>
            <label>Nilai Quiz:</label><br>
            <input type="number" name="quiz" required><br><br>
            <label>Nilai UTS:</label><br>
            <input type="number" name="uts" required><br><br>
            <label>Nilai UAS:</label><br>
            <input type="number" name="uas" required><br><br>
        <button type="submit">Tambah</button>
        <a href="index.html">Menu Utama</a>
        </form>
    </body>
</html>

<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nim = $_POST['nim'];
    $tugas = $_POST['tugas'];
    $quiz = $_POST['quiz'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $sql = "insert into nilai (nim, n_tugas, n_quiz, n_uts, n_uas) values ('$nim','$tugas','$quiz','$uts','$uas')";

    $cek_mhs = $conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
    if($cek_mhs->num_rows == 0){
        echo "⚠️ NIM tidak valid! Silakan tambah mahasiswa dulu.";
        exit;
    }

    // 2. Cek apakah nilai untuk NIM ini sudah ada
    $cek_nilai = $conn->query("SELECT * FROM nilai WHERE nim='$nim'");
    if($cek_nilai->num_rows > 0){
        echo "⚠️ Nilai untuk mahasiswa ini sudah ada!";
        exit;
    }

    // 3. Jika lolos validasi, INSERT nilai
    $sql = "INSERT INTO nilai (nim, n_tugas, n_quiz, n_uts, n_uas)
            VALUES ('$nim', '$tugas', '$quiz', '$uts', '$uas')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Nilai berhasil ditambahkan!";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    if ($conn->query($sql) === TRUE) {
        echo "Data nilai berhasil ditambahkan!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

