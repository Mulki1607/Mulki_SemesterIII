<?php
$servername = "localhost";  // Nama server
$username = "root";         // Default username XAMPP
$password = "";             // Kosongkan jika belum pernah set password
$database = "tugas_workshop"; // Pastikan nama database sesuai

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
