-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 11:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrians`
--

CREATE TABLE `antrians` (
  `noAntrian` int(16) NOT NULL,
  `idPel` int(11) DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `idPel` int(11) NOT NULL,
  `namaPel` varchar(30) NOT NULL,
  `notelpPel` varchar(20) NOT NULL,
  `alamatPel` varchar(100) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`idPel`, `namaPel`, `notelpPel`, `alamatPel`, `createdAt`) VALUES
(1, 'pelanggan 1', '123123', 'dsafasf', '2021-02-07'),
(2, 'pelanggan 2', '12312', 'fdsfasf\r\n', '2021-02-10'),
(3, 'SUGIONO kakek legend', '232131', 'dsfafs', '2021-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `teknisis`
--

CREATE TABLE `teknisis` (
  `idTeknisi` int(11) NOT NULL,
  `namaTeknisi` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknisis`
--

INSERT INTO `teknisis` (`idTeknisi`, `namaTeknisi`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `idTransaksi` int(11) NOT NULL,
  `idPel` int(11) NOT NULL,
  `namaPrinter` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `statusTransaksi` varchar(20) NOT NULL,
  `idTeknisi` int(11) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`idTransaksi`, `idPel`, `namaPrinter`, `type`, `kondisi`, `keterangan`, `harga`, `statusTransaksi`, `idTeknisi`, `createdAt`) VALUES
(1, 1, 'printer', 'type', 'kondisi', 'keterangan', 123, 'status ok', 1, '2021-02-01'),
(3, 1, 'dfasf', 'ghg', 'ug', 'ugu', 67, 'dsaff', 1, '2021-02-07'),
(4, 2, 'dfsafa', 'sdfasdf', 'hi', 'iu', 23123, 'bib', 1, '2021-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`idPel`);

--
-- Indexes for table `teknisis`
--
ALTER TABLE `teknisis`
  ADD PRIMARY KEY (`idTeknisi`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `idPel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teknisis`
--
ALTER TABLE `teknisis`
  MODIFY `idTeknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
