-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 03:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_buat_besok-uas_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kamar`
--

CREATE TABLE `tabel_kamar` (
  `id_kamar` int NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `lama_menginap` int NOT NULL,
  `harga_dasar_kamar` decimal(10,2) NOT NULL,
  `jenis_kamar` enum('Standar','Deluxe','Suite') NOT NULL,
  `tipe_tv` varchar(50) DEFAULT NULL,
  `lokasi_lantai` int DEFAULT NULL,
  `akses_kolam_renang` tinyint(1) DEFAULT NULL,
  `fasilitas_sauna` tinyint(1) DEFAULT NULL,
  `minibar_paket` varchar(100) DEFAULT NULL,
  `layanan_konci` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_kamar`
--

INSERT INTO `tabel_kamar` (`id_kamar`, `nama_tamu`, `tanggal_checkin`, `lama_menginap`, `harga_dasar_kamar`, `jenis_kamar`, `tipe_tv`, `lokasi_lantai`, `akses_kolam_renang`, `fasilitas_sauna`, `minibar_paket`, `layanan_konci`) VALUES
(1, 'Budi Santoso', '2026-06-25', 2, '350000.00', 'Standar', 'LED 32 inch', 2, NULL, NULL, NULL, NULL),
(2, 'Siti Rahayu', '2026-06-26', 3, '350000.00', 'Standar', 'LED 40 inch', 3, NULL, NULL, NULL, NULL),
(3, 'Ahmad Fauzi', '2026-06-27', 1, '350000.00', 'Standar', 'LED 32 inch', 1, NULL, NULL, NULL, NULL),
(4, 'Dewi Lestari', '2026-06-28', 4, '350000.00', 'Standar', 'LED 40 inch', 2, NULL, NULL, NULL, NULL),
(5, 'Rizky Ramadhan', '2026-06-29', 2, '350000.00', 'Standar', 'LED 32 inch', 3, NULL, NULL, NULL, NULL),
(6, 'Maya Fitriani', '2026-06-30', 3, '350000.00', 'Standar', 'LED 40 inch', 1, NULL, NULL, NULL, NULL),
(7, 'Hendra Wijaya', '2026-07-01', 2, '350000.00', 'Standar', 'LED 32 inch', 2, NULL, NULL, NULL, NULL),
(8, 'Indra Permana', '2026-06-25', 2, '650000.00', 'Deluxe', 'Smart TV 50 inch', 5, 1, 1, NULL, NULL),
(9, 'Ratna Sari', '2026-06-26', 3, '650000.00', 'Deluxe', 'Smart TV 55 inch', 6, 1, 1, NULL, NULL),
(10, 'Doni Prabowo', '2026-06-27', 1, '650000.00', 'Deluxe', 'Smart TV 50 inch', 4, 1, 1, NULL, NULL),
(11, 'Lina Marlina', '2026-06-28', 4, '650000.00', 'Deluxe', 'Smart TV 55 inch', 5, 1, 1, NULL, NULL),
(12, 'Eko Prasetyo', '2026-06-29', 2, '650000.00', 'Deluxe', 'Smart TV 50 inch', 6, 1, 1, NULL, NULL),
(13, 'Nina Kartika', '2026-06-30', 3, '650000.00', 'Deluxe', 'Smart TV 55 inch', 4, 1, 1, NULL, NULL),
(14, 'Agung Setiawan', '2026-07-01', 2, '650000.00', 'Deluxe', 'Smart TV 50 inch', 5, 1, 1, NULL, NULL),
(15, 'Dr. Andi Hakim', '2026-06-25', 3, '1500000.00', 'Suite', 'OLED 65 inch', 10, 1, 1, 'Premium Minibar + Snack', 'Butler 24 Jam'),
(16, 'Prof. Rina Dewi', '2026-06-26', 2, '1500000.00', 'Suite', 'OLED 75 inch', 12, 1, 1, 'Premium Minibar + Wine', 'Butler 24 Jam + Concierge'),
(17, 'H. Suparman', '2026-06-27', 4, '1500000.00', 'Suite', 'OLED 65 inch', 10, 1, 1, 'Premium Minibar + Snack', 'Butler 24 Jam'),
(18, 'Dra. Maria Simamora', '2026-06-28', 3, '1500000.00', 'Suite', 'OLED 75 inch', 11, 1, 1, 'Premium Minibar + Wine', 'Butler 24 Jam + Concierge'),
(19, 'Ir. Joko Widodo', '2026-06-29', 2, '1500000.00', 'Suite', 'OLED 65 inch', 10, 1, 1, 'Premium Minibar + Snack', 'Butler 24 Jam'),
(20, 'Drh. Susi Pudjiastuti', '2026-06-30', 3, '1500000.00', 'Suite', 'OLED 75 inch', 12, 1, 1, 'Premium Minibar + Wine', 'Butler 24 Jam + Concierge'),
(21, 'Hj. Fatimah Azzahra', '2026-07-01', 2, '1500000.00', 'Suite', 'OLED 65 inch', 11, 1, 1, 'Premium Minibar + Snack', 'Butler 24 Jam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
