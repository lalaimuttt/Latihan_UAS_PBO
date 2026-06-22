<?php
// ============================================
// FILE: test_abstract.php
// FUNGSI: Testing apakah abstract class Kamar berfungsi
// ============================================

require_once 'classes/Kamar.php';

// Coba buat objek dari class Kamar (INI AKAN ERROR! Karena abstract class tidak bisa di-instansiasi)
// $kamar = new Kamar(1, 'Budi', '2026-06-25', 2, 350000); // ❌ ERROR!

// Tapi kita bisa mengakses abstract class melalui class turunan (nanti di Tahap 4)
// Untuk sekarang, kita cek apakah class Kamar sudah terdefinisi dengan baik

if (class_exists('Kamar')) {
    echo "✅ Abstract class Kamar berhasil dibuat! <br>";
    echo "Class Kamar adalah abstract class: " . (new ReflectionClass('Kamar'))->isAbstract() ? 'Ya' : 'Tidak';
    echo "<br><br>";
    
    echo "📋 Method yang wajib diimplementasikan oleh kelas anak: <br>";
    echo "- hitungTotalHarga() <br>";
    echo "- tampilkanInfoFasilitas() <br>";
} else {
    echo "❌ Gagal! Class Kamar tidak ditemukan.";
}

// Cek koneksi database
echo "<br><br>🔌 Status Koneksi Database: ";
global $koneksi;
if (isset($koneksi) && $koneksi) {
    echo "✅ Terhubung ke database!";
} else {
    echo "❌ Gagal koneksi!";
}
?>