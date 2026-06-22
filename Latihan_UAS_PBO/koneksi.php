<?php
// ============================================
// FILE: koneksi/database.php
// FUNGSI: Koneksi ke database MySQL
// ============================================

$host = 'localhost';        // Host database (biasanya localhost)
$user = 'root';             // Username MySQL (default: root)
$password = '';             // Password MySQL (kosongkan jika pakai XAMPP default)
$dbname = 'DB_LATIHAN_PBO_TRPL1B_NamaLengkap'; // ← GANTI dengan nama database kamu!

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal! Error: " . mysqli_connect_error());
}

// Set charset ke UTF-8 (biar support huruf Indonesia)
mysqli_set_charset($koneksi, "utf8");

// (Opsional) Uncomment untuk debugging
// echo "Koneksi database berhasil! <br>";
?>