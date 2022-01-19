-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 05:45 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-zenius`
--

-- --------------------------------------------------------

--
-- Table structure for table `berlangganan`
--

CREATE TABLE `berlangganan` (
  `idBerlangganan` int NOT NULL,
  `jenisLangganan_idJenisLangganan` int NOT NULL,
  `user_iduser` int NOT NULL,
  `tglMulai` date NOT NULL,
  `tglSelesai` date NOT NULL,
  `kode_pembayaran` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenislangganan`
--

CREATE TABLE `jenislangganan` (
  `idJenisLangganan` int NOT NULL,
  `jenis` varchar(45) NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenislangganan`
--

INSERT INTO `jenislangganan` (`idJenisLangganan`, `jenis`, `harga`) VALUES
(1, 'Basic', 500000),
(2, 'Standard', 800000),
(3, 'Premium', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL,
  `namaKelas` varchar(45) NOT NULL,
  `fotoKelas` varchar(45) DEFAULT NULL,
  `user_iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `kode` int NOT NULL,
  `metode` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `nama` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(8) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `password`) VALUES
(1, 'nopal', 'nopal@email.com', '12345678'),
(2, 'apran', 'apran@email.com', '12345678');

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
  ADD KEY `berlangganan_ibfk_4` (`kode_pembayaran`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berlangganan`
--
ALTER TABLE `berlangganan`
  MODIFY `idBerlangganan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `kode` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berlangganan`
--
ALTER TABLE `berlangganan`
  ADD CONSTRAINT `berlangganan_ibfk_1` FOREIGN KEY (`jenisLangganan_idJenisLangganan`) REFERENCES `jenislangganan` (`idJenisLangganan`),
  ADD CONSTRAINT `berlangganan_ibfk_2` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `berlangganan_ibfk_4` FOREIGN KEY (`kode_pembayaran`) REFERENCES `payment` (`kode`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
