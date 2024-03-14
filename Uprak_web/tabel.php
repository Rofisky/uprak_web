<?php
include 'koneksi.php';

// Query untuk membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    tahun_masuk INT(4) NOT NULL
)";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Tabel mahasiswa berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
