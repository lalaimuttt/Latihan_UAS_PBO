<?php
// ============================================
// FILE: classes/KamarSuite.php
// FUNGSI: Class untuk kamar tipe Suite
// ============================================

require_once 'Kamar.php';

class KamarSuite extends Kamar {
    // ========================================
    // PROPERTI TAMBAHAN (Spesifik untuk Kamar Suite)
    // ========================================
    private $minibarPaket;
    private $layananKonci;

    // ========================================
    // CONSTRUCTOR
    // ========================================
    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $minibarPaket, $layananKonci) {
        // Panggil constructor parent (Kamar)
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        
        // Set properti tambahan
        $this->minibarPaket = $minibarPaket;
        $this->layananKonci = $layananKonci;
    }

    // ========================================
    // GETTER UNTUK PROPERTI TAMBAHAN
    // ========================================
    public function getMinibarPaket() {
        return $this->minibarPaket;
    }

    public function getLayananKonci() {
        return $this->layananKonci;
    }

    // ========================================
    // IMPLEMENTASI METHOD ABSTRAK DARI PARENT
    // ========================================
    
    /**
     * Menghitung total harga untuk Kamar Suite
     * Total = (lama_menginap * hargaDasarKamar) * 2.0
     * Ada surcharge 100% (2x lipat) karena premium
     */
    public function hitungTotalHarga() {
        return ($this->lama_menginap * $this->hargaDasarKamar) * 2.0;
    }

    /**
     * Menampilkan informasi fasilitas Kamar Suite
     */
    public function tampilkanInfoFasilitas() {
        return "🍾 Minibar: {$this->minibarPaket} | 🛎️ Layanan: {$this->layananKonci}";
    }

    // ========================================
    // METHOD TAMBAHAN (Opsional)
    // ========================================
    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>