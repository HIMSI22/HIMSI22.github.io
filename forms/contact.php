<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himpunan_mahasiswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Query SQL untuk memasukkan data ke database
$sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Menggunakan fungsi query() dari objek koneksi
$result = $conn->query($sql);
if (!$result) {
    echo "Error: " . $conn->error;
} else {
    echo "Pesan berhasil dikirim.";
}

$conn->close();
?>
