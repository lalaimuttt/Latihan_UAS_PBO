<?php
// ============================================
// FILE: classes/KamarDeluxe.php
// FUNGSI: Class untuk kamar tipe Deluxe
// ============================================

require_once 'Kamar.php';

class KamarDeluxe extends Kamar {
    // ========================================
    // PROPERTI TAMBAHAN (Spesifik untuk Kamar Deluxe)
    // ========================================
    private $aksesKolamRenang;
    private $fasilitasSauna;

    // ========================================
    // CONSTRUCTOR
    // ========================================
    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $aksesKolamRenang, $fasilitasSauna) {
        // Panggil constructor parent (Kamar)
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        
        // Set properti tambahan
        $this->aksesKolamRenang = $aksesKolamRenang;
        $this->fasilitasSauna = $fasilitasSauna;
    }

    // ========================================
    // GETTER UNTUK PROPERTI TAMBAHAN
    // ========================================
    public function getAksesKolamRenang() {
        return $this->aksesKolamRenang;
    }

    public function getFasilitasSauna() {
        return $this->fasilitasSauna;
    }

    // ========================================
    // IMPLEMENTASI METHOD ABSTRAK DARI PARENT
    // ========================================
    
    /**
     * Menghitung total harga untuk Kamar Deluxe
     * Total = (lama_menginap * hargaDasarKamar) + 50000
     * Ada biaya tambahan akses kolam renang & sauna Rp50.000
     */
    public function hitungTotalHarga() {
        return ($this->lama_menginap * $this->hargaDasarKamar) + 50000;
    }

    /**
     * Menampilkan informasi fasilitas Kamar Deluxe
     */
    public function tampilkanInfoFasilitas() {
        $kolam = $this->aksesKolamRenang ? '✅ Ya' : '❌ Tidak';
        $sauna = $this->fasilitasSauna ? '✅ Ya' : '❌ Tidak';
        return "🏊 Akses Kolam: $kolam | 🧖 Sauna: $sauna";
    }

    // ========================================
    // METHOD TAMBAHAN (Opsional)
    // ========================================
    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>
