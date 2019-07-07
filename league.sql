-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 06:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `league`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_game`
--

CREATE TABLE `data_game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `deskripsi_game` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pemain`
--

CREATE TABLE `data_pemain` (
  `id_pemain` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `kode_pemain` varchar(100) NOT NULL,
  `nama_pemain` varchar(100) NOT NULL,
  `no_handphone` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_team`
--

CREATE TABLE `data_team` (
  `id_team` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `nama_team` varchar(100) NOT NULL,
  `logo_team` varchar(255) NOT NULL,
  `deskripsi_team` text NOT NULL,
  `tanggal_daftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_turnamen`
--

CREATE TABLE `data_turnamen` (
  `id_turnamen` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `tanggal_turnamen` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_prize_pool` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_game`
--
ALTER TABLE `data_game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `data_pemain`
--
ALTER TABLE `data_pemain`
  ADD PRIMARY KEY (`id_pemain`),
  ADD KEY `id_team` (`id_team`);

--
-- Indexes for table `data_team`
--
ALTER TABLE `data_team`
  ADD PRIMARY KEY (`id_team`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `data_turnamen`
--
ALTER TABLE `data_turnamen`
  ADD PRIMARY KEY (`id_turnamen`),
  ADD KEY `id_game` (`id_game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_game`
--
ALTER TABLE `data_game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pemain`
--
ALTER TABLE `data_pemain`
  MODIFY `id_pemain` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_team`
--
ALTER TABLE `data_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_turnamen`
--
ALTER TABLE `data_turnamen`
  MODIFY `id_turnamen` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pemain`
--
ALTER TABLE `data_pemain`
  ADD CONSTRAINT `data_pemain_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `data_team` (`id_team`);

--
-- Constraints for table `data_team`
--
ALTER TABLE `data_team`
  ADD CONSTRAINT `data_team_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `data_game` (`id_game`);

--
-- Constraints for table `data_turnamen`
--
ALTER TABLE `data_turnamen`
  ADD CONSTRAINT `data_turnamen_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `data_game` (`id_game`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
