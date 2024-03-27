<?php
// Konfigurasi database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "himpunan_mahasiswa";

// Membuat koneksi ke database
$conn = new mysqli($hostname, $username, $password, $database);


// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input dari user
function cleanInput($input) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($input));
}
?>
