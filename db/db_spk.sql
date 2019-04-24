-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 05:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_karyawan`
--

CREATE TABLE `calon_karyawan` (
  `id_calon_kr` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `foto` varchar(64) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `skill` text,
  `pengalaman` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_karyawan`
--

INSERT INTO `calon_karyawan` (`id_calon_kr`, `nama`, `foto`, `ttl`, `skill`, `pengalaman`) VALUES
(1, 'Andi', 'maxresdefault_live.jpg', '0000-00-00', '', ''),
(2, 'adi', '', '0000-00-00', '', ''),
(3, 'Alva', '', '0000-00-00', '', ''),
(4, 'Budi', NULL, NULL, NULL, NULL),
(5, 'Beni', NULL, NULL, NULL, NULL),
(6, 'Deva', NULL, NULL, NULL, NULL),
(7, 'Erina', NULL, NULL, NULL, NULL),
(8, 'Fery', NULL, NULL, NULL, NULL),
(9, 'Ginanjar', NULL, NULL, NULL, NULL),
(10, 'Hartanto', NULL, NULL, NULL, NULL),
(12, 'test2', 'maxresdefault_live.jpg', '2019-04-22', 'test', 'test\r\n'),
(13, 'Anang', 'maxresdefault_live.jpg', '2019-04-24', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_spk`
--

CREATE TABLE `hasil_spk` (
  `id_spk` int(11) NOT NULL,
  `id_calon_kr` int(11) DEFAULT NULL,
  `hasil_spk` float(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_spk`
--

INSERT INTO `hasil_spk` (`id_spk`, `id_calon_kr`, `hasil_spk`) VALUES
(1, 1, 0.77154768),
(2, 2, 0.35246778),
(3, 3, 0.46870226),
(4, 4, 0.41526225),
(5, 5, 0.43582767),
(6, 6, 0.56535161),
(7, 7, 0.40868473),
(8, 8, 0.46335465),
(9, 9, 0.35920995),
(10, 10, 0.39797848),
(11, 13, 0.86267042);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_tpa`
--

CREATE TABLE `hasil_tpa` (
  `id_test` int(11) NOT NULL,
  `id_calon_kr` int(11) DEFAULT NULL,
  `k_verbal` int(11) DEFAULT NULL,
  `k_logika` int(11) DEFAULT NULL,
  `k_numerik` int(11) DEFAULT NULL,
  `k_visual` int(11) DEFAULT NULL,
  `k_pemahaman_wacana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_tpa`
--

INSERT INTO `hasil_tpa` (`id_test`, `id_calon_kr`, `k_verbal`, `k_logika`, `k_numerik`, `k_visual`, `k_pemahaman_wacana`) VALUES
(1, 1, 88, 100, 76, 67, 62),
(2, 2, 23, 50, 41, 67, 48),
(3, 3, 58, 55, 38, 56, 85),
(4, 4, 30, 31, 41, 39, 15),
(5, 5, 52, 38, 35, 26, 73),
(6, 6, 60, 45, 88, 50, 98),
(7, 7, 11, 73, 10, 11, 94),
(8, 8, 74, 45, 11, 56, 34),
(9, 9, 31, 37, 51, 90, 56),
(10, 10, 59, 16, 44, 95, 38);

-- --------------------------------------------------------

--
-- Table structure for table `hrd`
--

CREATE TABLE `hrd` (
  `nip` varchar(16) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `nama_lengkap` varchar(64) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `foto` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd`
--

INSERT INTO `hrd` (`nip`, `email`, `username`, `password`, `nama_lengkap`, `ttl`, `foto`) VALUES
('1', 'admin@admin.com', 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '1999-05-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(32) DEFAULT NULL,
  `bobot` float(5,2) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `bobot`, `type`) VALUES
(1, 'k_verbal', 0.30, 'Benefit'),
(2, 'k_logika', 0.25, 'Benefit'),
(3, 'k_numerik', 0.20, 'Benefit'),
(4, 'k_visual', 0.15, 'Cost'),
(6, 'k_pemahaman_wacana', 0.10, 'Cost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  ADD PRIMARY KEY (`id_calon_kr`);

--
-- Indexes for table `hasil_spk`
--
ALTER TABLE `hasil_spk`
  ADD PRIMARY KEY (`id_spk`),
  ADD KEY `id_calon_kr` (`id_calon_kr`);

--
-- Indexes for table `hasil_tpa`
--
ALTER TABLE `hasil_tpa`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_calon_kr` (`id_calon_kr`);

--
-- Indexes for table `hrd`
--
ALTER TABLE `hrd`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  MODIFY `id_calon_kr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hasil_spk`
--
ALTER TABLE `hasil_spk`
  MODIFY `id_spk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hasil_tpa`
--
ALTER TABLE `hasil_tpa`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_spk`
--
ALTER TABLE `hasil_spk`
  ADD CONSTRAINT `hasil_spk_ibfk_1` FOREIGN KEY (`id_calon_kr`) REFERENCES `calon_karyawan` (`id_calon_kr`);

--
-- Constraints for table `hasil_tpa`
--
ALTER TABLE `hasil_tpa`
  ADD CONSTRAINT `hasil_tpa_ibfk_1` FOREIGN KEY (`id_calon_kr`) REFERENCES `calon_karyawan` (`id_calon_kr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
