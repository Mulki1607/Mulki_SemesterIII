<html>
    <head><link rel="stylesheet" href="style.css"></head>
<h2>Tambah Mahasiswa</h2>
<form action="" method="POST">
    <label>NIM:</label><br>
    <input type="text" name="nim" required><br><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>
    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" required><br><br>
    <label>Prodi:</label><br>
    <input type="text" name="prodi" required><br><br>
    <label>Kelas:</label><br>
    <input type="text" name="kelas" required><br><br>
    <button type="submit">Tambah Mahasiswa</button><br><br>
    <a href="tambah_nilai.php">Tambah Nilai</a>
    <a href="index.html">Menu Utama</a>
</form>
</html>
<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan =$_POST['jurusan'];
    $prodi =$_POST['prodi'];
    $kelas =$_POST['kelas'];

    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, prodi, kelas) VALUES ('$nim', '$nama', '$jurusan','$prodi','$kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Mahasiswa berhasil ditambahkan!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
