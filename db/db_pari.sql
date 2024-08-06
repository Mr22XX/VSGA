-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pari`
--

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `paket` int(3) NOT NULL,
  `sarapan` varchar(1) NOT NULL,
  `kendaraan` varchar(1) NOT NULL,
  `penginapan` varchar(1) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` varchar(25) NOT NULL,
  `logpesan` timestamp NOT NULL DEFAULT current_timestamp(),
  `logupdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id`, `nama`, `alamat`, `tujuan`, `gender`, `paket`, `sarapan`, `kendaraan`, `penginapan`, `tanggal`, `email`, `kontak`, `logpesan`, `logupdate`) VALUES
(6, 'Lintang Sari ', 'Jalan gedang s', 'Bali', 'wanita', 2, '1', '1', '', '2024-08-17', 'aku@gmail.coms', '08235634343245', '2024-08-06 12:29:28', '2024-08-06 13:41:42'),
(8, 'Abid husen', 'Jalan Sadang', 'Surabaya', 'pria', 1, '', '1', '', '2024-08-17', 'aku@gmail.com', '082356464646', '2024-08-06 13:33:49', NULL),
(9, 'nada', 'Jalan mangga', 'Yogjakarta', 'wanita', 3, '1', '1', '1', '2024-08-15', 'aku@gmail.coms', '0823573434', '2024-08-06 13:38:23', NULL),
(10, 'Gumara adi kusuma', 'jalan nanggung bangunan', 'Surabaya', 'pria', 1, '', '1', '', '2024-08-21', 'winata@gmail.com', '0823756423', '2024-08-06 13:40:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
