-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2026 at 06:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `id_balita` int(11) UNSIGNED NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_balita` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`id_balita`, `nik`, `nama_balita`, `jenis_kelamin`, `tanggal_lahir`, `nama_ibu`, `nama_ayah`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, '32432545254365', 'jasmine', 'P', '2035-05-24', 'citra', 'jaka', 'jl. pik 2', '08957087348', '2026-06-27 12:11:45', '2026-07-01 13:48:09'),
(2, '3245439809395', 'freya', 'P', '2026-02-12', 'davina ', 'gibran', 'jl. Grogol ', '0898324798', '2026-06-27 14:44:36', '2026-07-01 12:24:05'),
(3, '3243523545009', 'raden', 'L', '2026-02-09', 'syifa', 'vito', 'jl. sindang sari', '0895632475', '2026-07-01 12:02:32', '2026-07-01 12:02:32'),
(4, '32354355001', 'arsenio', 'L', '2025-04-25', 'sari', 'chandra', 'jl . sribasuki', '0893874824', '2026-07-01 12:31:49', '2026-07-01 12:31:49'),
(5, '3225458894321', 'chika', 'P', '2026-07-15', 'vita', 'tino', 'jl. bunga mayang', '08974839424', '2026-07-01 12:32:54', '2026-07-01 12:32:54'),
(6, '32443525008', 'cipung', 'L', '2025-11-04', 'nagita', 'rafi', 'jl. Anggrek baru', '08938492314', '2026-07-01 12:34:14', '2026-07-01 12:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) UNSIGNED NOT NULL,
  `nama_imunisasi` varchar(100) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `nama_imunisasi`, `keterangan`, `created_at`, `updated_at`) VALUES
(5, 'Hepatitis B (HB-0)', 'vaksinasi Hepatitis B dosis pertama yang diberikan kepada bayi baru lahir (usia 0-7 hari) untuk mencegah penularan virus yang dapat menyebabkan kerusakan hati kronis', '2026-06-27 13:57:58', '2026-06-27 13:57:58'),
(7, 'Polio', ' Mencegah penyakit polio yang dapat menyebabkan kelumpuhan permanen. Diberikan melalui tetes mulut atau suntikan saat lahir, serta dilanjutkan pada usia 2, 3, dan 4 bulan.', '2026-06-27 14:46:32', '2026-06-27 14:46:32'),
(8, 'BCG (Bacillus Calmette-Guérin)', 'Mencegah penyakit tuberkulosis (TBC) yang menyerang paru-paru dan organ tubuh lain. Umumnya diberikan dalam satu dosis pada usia 1 bulan.', '2026-06-27 14:48:05', '2026-07-01 12:22:53'),
(11, 'DTP (Difteri, Tetanus, Pertusis)', 'Vaksin kombinasi untuk mencegah tiga penyakit sekaligus: Difteri (infeksi selaput tenggorokan), Tetanus (kejang otot akibat infeksi bakteri), dan Pertusis atau batuk rejan', '2026-07-01 12:34:57', '2026-07-01 12:34:57'),
(12, 'Hib (Haemophilus influenzae tipe B)', 'Mencegah infeksi bakteri Hib yang dapat memicu penyakit berbahaya seperti meningitis (radang selaput otak) dan pneumonia (paru-paru basah). Sering digabung dalam satu suntikan dengan DTP dan Hepatitis B (vaksin Pentavalen)', '2026-07-01 12:35:20', '2026-07-01 12:35:20'),
(13, 'MR / MMR (Measles, Mumps, Rubella)', 'Vaksin untuk mencegah penyakit Campak, Gondongan (Mumps), dan Rubella (Campak Jerman). Sangat penting untuk mencegah komplikasi fatal seperti radang otak dan cacat bawaan lahir.', '2026-07-01 12:35:41', '2026-07-01 12:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(11) UNSIGNED NOT NULL,
  `id_balita` int(11) UNSIGNED NOT NULL,
  `id_petugas` int(11) UNSIGNED NOT NULL,
  `id_imunisasi` int(11) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL,
  `umur_bulan` int(3) NOT NULL,
  `berat_badan` decimal(5,2) NOT NULL,
  `tinggi_badan` decimal(5,2) NOT NULL,
  `lingkar_kepala` decimal(5,2) DEFAULT NULL,
  `status_gizi` enum('Baik','Kurang','Buruk','Lebih') DEFAULT 'Baik',
  `catatan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `id_balita`, `id_petugas`, `id_imunisasi`, `tanggal`, `umur_bulan`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `status_gizi`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, '2025-02-24', 8, 1.14, 1.09, 1.10, 'Baik', 'adalah', '2026-06-27 14:02:47', '2026-06-27 14:02:47'),
(3, 2, 2, 7, '2026-04-12', 32, 1.18, 2.61, 1.14, 'Buruk', 'sakit ni kayaknya', '2026-06-27 14:51:31', '2026-07-01 12:19:35'),
(5, 3, 3, 8, '2026-11-12', 10, 1.87, 15.00, 1.04, 'Lebih', 'sehat', '2026-07-01 12:19:27', '2026-07-01 12:19:27'),
(7, 5, 3, 11, '2026-02-12', 7, 2.00, 30.00, 4.00, 'Kurang', 'sehat sehat aja', '2026-07-01 12:37:05', '2026-07-01 13:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) UNSIGNED NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `jabatan`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Tasya Yuriska', 'perawat', '08676536234', 'jl. candimas', '2026-06-27 12:30:19', '2026-07-05 01:19:24'),
(2, 'Rona Fortuna', 'Perawat', '08984724423', 'jl. Cempedak', '2026-06-27 14:45:26', '2026-07-01 12:05:31'),
(3, 'Yulinda Angelia', 'perawat', '087815935843', 'jl. Penatih Tuho', '2026-07-01 12:04:11', '2026-07-05 01:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role` enum('admin','petugas') NOT NULL DEFAULT 'petugas',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin123', 'Administrator', 'admin', '2026-06-27 10:02:43', '2026-06-27 10:02:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `nama_balita` (`nama_balita`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `fk_pen_balita` (`id_balita`),
  ADD KEY `fk_pen_petugas` (`id_petugas`),
  ADD KEY `fk_pen_imunisasi` (`id_imunisasi`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `fk_pen_balita` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pen_imunisasi` FOREIGN KEY (`id_imunisasi`) REFERENCES `imunisasi` (`id_imunisasi`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pen_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
