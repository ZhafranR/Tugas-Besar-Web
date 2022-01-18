-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 04:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-ruangzenius`
--

-- --------------------------------------------------------

--
-- Table structure for table `berlangganan`
--

CREATE TABLE `berlangganan` (
  `idBerlangganan` int(11) NOT NULL,
  `jenisLangganan_idJenisLangganan` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `tglMulai` date NOT NULL,
  `tglSelesai` date NOT NULL,
  `pembayaran_kodePembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenislangganan`
--

CREATE TABLE `jenislangganan` (
  `idJenisLangganan` int(11) NOT NULL,
  `jenis` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `namaKelas` varchar(45) NOT NULL,
  `fotoKelas` varchar(45) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodePembayaran` varchar(50) NOT NULL,
  `metodePembayaran` varchar(45) NOT NULL,
  `tglPembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD PRIMARY KEY (`idBerlangganan`),
  ADD KEY `idx_jenisLangganan` (`jenisLangganan_idJenisLangganan`),
  ADD KEY `idx_user2` (`user_iduser`),
  ADD KEY `idx_pembayaran` (`pembayaran_kodePembayaran`);

--
-- Indexes for table `jenislangganan`
--
ALTER TABLE `jenislangganan`
  ADD PRIMARY KEY (`idJenisLangganan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD KEY `idx_user` (`user_iduser`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodePembayaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD CONSTRAINT `berlangganan_ibfk_1` FOREIGN KEY (`jenisLangganan_idJenisLangganan`) REFERENCES `jenislangganan` (`idJenisLangganan`),
  ADD CONSTRAINT `berlangganan_ibfk_2` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `berlangganan_ibfk_3` FOREIGN KEY (`pembayaran_kodePembayaran`) REFERENCES `pembayaran` (`kodePembayaran`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
