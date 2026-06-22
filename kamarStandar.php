<?php
// ============================================
// FILE: classes/KamarStandar.php
// FUNGSI: Class untuk kamar tipe Standar
// ============================================

require_once 'Kamar.php';

class KamarStandar extends Kamar {
    private $tipeTV;
    private $lokasiLantai;

    public function __construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar, $tipeTV, $lokasiLantai) {
        parent::__construct($id_kamar, $nama_tamu, $tanggal_checkin, $lama_menginap, $hargaDasarKamar);
        $this->tipeTV = $tipeTV;
        $this->lokasiLantai = $lokasiLantai;
    }

    public function getTipeTV() {
        return $this->tipeTV;
    }

    public function getLokasiLantai() {
        return $this->lokasiLantai;
    }

    // ============================================
    // OVERRIDE METHOD hitungTotalHarga()
    // Logika: Tarif standar murni tanpa biaya tambahan
    // ============================================
    public function hitungTotalHarga() {
        // Total = jumlah_hari * harga_dasar
        return $this->lama_menginap * $this->hargaDasarKamar;
    }

    // ============================================
    // OVERRIDE METHOD tampilkanInfoFasilitas()
    // ============================================
    public function tampilkanInfoFasilitas() {
        return "📺 TV: {$this->tipeTV} | 🏢 Lantai: {$this->lokasiLantai}";
    }

    // Method tambahan untuk menampilkan detail lengkap
    public function getInfoLengkap() {
        return $this->tampilkanInfoDasar() . " | " . $this->tampilkanInfoFasilitas();
    }
}
?>