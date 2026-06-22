<?php
// ============================================
// FILE: classes/KamarDeluxe.php
// FUNGSI: Class untuk kamar tipe Deluxe
// ============================================

require_once 'Kamar.php';

class KamarDeluxe extends Kamar {
    private $aksesKolamRenang;
    private $fasilitasSauna;

    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $aksesKolamRenang, $fasilitasSauna) {
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        $this->aksesKolamRenang = $aksesKolamRenang;
        $this->fasilitasSauna = $fasilitasSauna;
    }

    public function getAksesKolamRenang() {
        return $this->aksesKolamRenang;
    }

    public function getFasilitasSauna() {
        return $this->fasilitasSauna;
    }

    // ============================================
    // OVERRIDE METHOD hitungTotalHarga()
    // Logika: (jumlah_hari * harga_dasar) + 50000
    // Biaya tambahan teknologi premium Rp50.000
    // ============================================
    public function hitungTotalHarga() {
        // Total = (jumlah_hari * harga_dasar) + 50000
        return ($this->lama_menginap * $this->hargaDasarKamar) + 50000;
    }

    // ============================================
    // OVERRIDE METHOD tampilkanInfoFasilitas()
    // ============================================
    public function tampilkanInfoFasilitas() {
        $kolam = $this->aksesKolamRenang ? '✅ Ya' : '❌ Tidak';
        $sauna = $this->fasilitasSauna ? '✅ Ya' : '❌ Tidak';
        return "🏊 Akses Kolam: $kolam | 🧖 Sauna: $sauna";
    }

    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>