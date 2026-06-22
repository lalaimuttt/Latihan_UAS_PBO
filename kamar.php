<?php
// ============================================
// FILE: classes/Kamar.php
// FUNGSI: Abstract class untuk semua jenis kamar
// ============================================

// Pastikan file koneksi sudah di-load
require_once __DIR__ . '/../koneksi/database.php';

abstract class Kamar {
    // ========================================
    // PROPERTI (Protected = bisa diakses oleh class turunan)
    // ========================================
    protected $id_kamar;
    protected $nama_tamu;
    protected $tanggal_checkin;
    protected $lama_menginap;
    protected $hargaDasarKamar;

    // ========================================
    // CONSTRUCTOR
    // ========================================
    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar) {
        $this->id_kamar = $id_kamar;
        $this->nama_tamu = $nama_tamu;
        $this->tanggal_checkin = $tanggal_checkin;
        $this->lama_menginap = $lama_menginap;
        $this->hargaDasarKamar = $hargaDasarKamar;
    }

    // ========================================
    // GETTER METHODS (Akses ke properti protected)
    // ========================================
    public function getIdKamar() {
        return $this->id_kamar;
    }

    public function getNamaTamu() {
        return $this->nama_tamu;
    }

    public function getTanggalCheckin() {
        return $this->tanggal_checkin;
    }

    public function getLamaMenginap() {
        return $this->lama_menginap;
    }

    public function getHargaDasar() {
        return $this->hargaDasarKamar;
    }

    // ========================================
    // SETTER METHODS (Opsional, untuk update data)
    // ========================================
    public function setNamaTamu($nama_tamu) {
        $this->nama_tamu = $nama_tamu;
    }

    public function setTanggalCheckin($tanggal_checkin) {
        $this->tanggal_checkin = $tanggal_checkin;
    }

    public function setLamaMenginap($lama_menginap) {
        $this->lama_menginap = $lama_menginap;
    }

    public function setHargaDasar($hargaDasarKamar) {
        $this->hargaDasarKamar = $hargaDasarKamar;
    }

    // ========================================
    // METHOD ABSTRAK (WAJIB diimplementasikan oleh kelas anak)
    // ========================================
    
    /**
     * Method abstrak untuk menghitung total harga
     * Setiap kelas anak akan punya perhitungan berbeda
     */
    abstract public function hitungTotalHarga();

    /**
     * Method abstrak untuk menampilkan informasi fasilitas
     * Setiap kelas anak akan menampilkan fasilitas yang berbeda
     */
    abstract public function tampilkanInfoFasilitas();

    // ========================================
    // METHOD NON-ABSTRACT (Bisa dipakai langsung)
    // ========================================
    
    /**
     * Method untuk menampilkan info dasar kamar (bisa dipakai semua class)
     */
    public function tampilkanInfoDasar() {
        return "ID Kamar: {$this->id_kamar} | 
                Nama Tamu: {$this->nama_tamu} | 
                Check-in: {$this->tanggal_checkin} | 
                Lama: {$this->lama_menginap} hari | 
                Harga Dasar: Rp " . number_format($this->hargaDasarKamar, 0, ',', '.');
    }
}
?>