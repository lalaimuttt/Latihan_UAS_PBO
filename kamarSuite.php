<?php
// ============================================
// FILE: classes/KamarSuite.php
// FUNGSI: Class untuk kamar tipe Suite
// ============================================

require_once 'Kamar.php';

class KamarSuite extends Kamar {
    private $minibarPaket;
    private $layananKonci;

    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $minibarPaket, $layananKonci) {
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        $this->minibarPaket = $minibarPaket;
        $this->layananKonci = $layananKonci;
    }

    public function getMinibarPaket() {
        return $this->minibarPaket;
    }

    public function getLayananKonci() {
        return $this->layananKonci;
    }

    // ============================================
    // OVERRIDE METHOD hitungTotalHarga()
    // Logika: (jumlah_hari * harga_dasar) * 2.0
    // Surcharge premium 100% dari total harga dasar
    // ============================================
    public function hitungTotalHarga() {
        // Total = (jumlah_hari * harga_dasar) * 2.0
        return ($this->lama_menginap * $this->hargaDasarKamar) * 2.0;
    }

    // ============================================
    // OVERRIDE METHOD tampilkanInfoFasilitas()
    // ============================================
    public function tampilkanInfoFasilitas() {
        return "🍾 Minibar: {$this->minibarPaket} | 🛎️ Layanan: {$this->layananKonci}";
    }

    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>