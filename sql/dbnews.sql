-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 10:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `namalengkap`, `email`, `nohp`, `password`, `role`) VALUES
('admin', 'Admin Pubztyo.co.id', 'adminpubztyo@gmail.com', '081234567890', 'admin', 'admin'),
('nvlprstyo18', 'Noval Prasetyo', 'novaltyo8@gmail.com', '085774042749', 'tyo1811', 'user'),
('tyo1811', 'Noval Prasetyo', 'novaltyo08@gmail.com', '085719714876', '1811', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `kategori_id` varchar(11) DEFAULT NULL,
  `tanggal_terbit` datetime NOT NULL DEFAULT current_timestamp(),
  `penulis_id` varchar(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `kategori_id`, `tanggal_terbit`, `penulis_id`, `gambar`, `sumber`) VALUES
(2, 'Pemerintah Mengumumkan Kebijakan Baru Tentang Pendidikan', 'Pada hari Selasa, 7 Desember 2024, pemerintah Indonesia mengumumkan kebijakan baru yang akan berlaku pada tahun ajaran 2025. Kebijakan ini bertujuan untuk meningkatkan kualitas pendidikan di seluruh Indonesia, dengan fokus pada penggunaan teknologi dan peningkatan kesejahteraan guru.\r\n\r\nMenteri Pendidikan dan Kebudayaan, Nadiem Makarim, menjelaskan bahwa kebijakan ini mencakup sejumlah perubahan besar, seperti peningkatan anggaran untuk pendidikan, pelatihan intensif bagi para guru, serta pemberian bantuan teknologi kepada sekolah-sekolah di daerah terpencil.\r\n\r\n\"Ini adalah langkah besar untuk menciptakan pendidikan yang lebih merata dan berkualitas di seluruh Indonesia,\" kata Nadiem Makarim dalam konferensi pers yang diselenggarakan di Jakarta.\r\n\r\nKebijakan ini diharapkan dapat membantu Indonesia dalam mencapai tujuan pembangunan berkelanjutan (SDGs) dalam bidang pendidikan.', 'pendidikan', '2024-12-08 22:36:07', 'Noval Prase', 'abdul-muti_ratio-16x9.jpg', 'https://tirto.id/rencana-kebijakan-menteri-pendidikan-terbaru-un-kembali-g46B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
