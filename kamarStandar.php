<?php
// ============================================
// FILE: classes/KamarStandar.php
// FUNGSI: Class untuk kamar tipe Standar
// ============================================

require_once 'Kamar.php';

class KamarStandar extends Kamar {
    // ========================================
    // PROPERTI TAMBAHAN (Spesifik untuk Kamar Standar)
    // ========================================
    private $tipeTV;
    private $lokasiLantai;

    // ========================================
    // CONSTRUCTOR
    // ========================================
    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $tipeTV, $lokasiLantai) {
        // Panggil constructor parent (Kamar)
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        
        // Set properti tambahan
        $this->tipeTV = $tipeTV;
        $this->lokasiLantai = $lokasiLantai;
    }

    // ========================================
    // GETTER UNTUK PROPERTI TAMBAHAN
    // ========================================
    public function getTipeTV() {
        return $this->tipeTV;
    }

    public function getLokasiLantai() {
        return $this->lokasiLantai;
    }

    // ========================================
    // IMPLEMENTASI METHOD ABSTRAK DARI PARENT
    // ========================================
    
    /**
     * Menghitung total harga untuk Kamar Standar
     * Total = lama_menginap * hargaDasarKamar (tanpa tambahan)
     */
    public function hitungTotalHarga() {
        return $this->lama_menginap * $this->hargaDasarKamar;
    }

    /**
     * Menampilkan informasi fasilitas Kamar Standar
     */
    public function tampilkanInfoFasilitas() {
        return "📺 TV: {$this->tipeTV} | 🏢 Lantai: {$this->lokasiLantai}";
    }

    // ========================================
    // METHOD TAMBAHAN (Opsional)
    // ========================================
    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>