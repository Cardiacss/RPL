-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 03:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_instansi`
--

CREATE TABLE `admin_instansi` (
  `kd_admin_instansi` char(10) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gen_va`
--

CREATE TABLE `gen_va` (
  `va` char(12) NOT NULL,
  `id_bayar` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_student` varchar(100) NOT NULL,
  `NIM` char(8) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `email_student` varchar(100) NOT NULL,
  `email_pribadi` varchar(100) NOT NULL,
  `NIK` char(30) NOT NULL,
  `thn_masuk` year(4) NOT NULL,
  `no_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` char(7) NOT NULL,
  `thn_ajaran` year(4) NOT NULL,
  `tagihan` varchar(20) NOT NULL,
  `beasiswa` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` char(8) NOT NULL,
  `no_va` char(12) NOT NULL,
  `sks` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_instansi`
--
ALTER TABLE `admin_instansi`
  ADD PRIMARY KEY (`kd_admin_instansi`);

--
-- Indexes for table `gen_va`
--
ALTER TABLE `gen_va`
  ADD KEY `generate_va` (`id_bayar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email_student`),
  ADD KEY `login_mhs` (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `bayar_mhs` (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gen_va`
--
ALTER TABLE `gen_va`
  ADD CONSTRAINT `generate_va` FOREIGN KEY (`id_bayar`) REFERENCES `pembayaran` (`id_bayar`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_mhs` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `bayar_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
