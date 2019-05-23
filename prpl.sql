-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 11:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_nama` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_nama`, `admin_password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `JURUSAN_ID` int(11) NOT NULL,
  `MAHASISWA_ID` int(11) DEFAULT NULL,
  `JURUSAN_NAMA` varchar(100) DEFAULT NULL,
  `JURUSAN_GELAR` varchar(10) DEFAULT NULL,
  `Mahasiswa_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lulus`
--

CREATE TABLE `lulus` (
  `LULUS_ID` int(11) NOT NULL,
  `MAHASISWA_ID` int(11) DEFAULT NULL,
  `JURUSAN_ID` int(11) NOT NULL,
  `LULUS_STATUS` enum('Lulus','Belum Lulus') DEFAULT NULL,
  `LULUS_NOIJAZAH` varchar(100) DEFAULT NULL,
  `LULUS_TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `MAHASISWA_ID` int(11) NOT NULL,
  `MAHASISWA_NAMA` varchar(100) DEFAULT NULL,
  `MAHASISWA_NIM` int(11) DEFAULT NULL,
  `MAHASISWA_JK` enum('Laki Laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`JURUSAN_ID`),
  ADD KEY `FK_KETERIKATAN` (`MAHASISWA_ID`);

--
-- Indexes for table `lulus`
--
ALTER TABLE `lulus`
  ADD PRIMARY KEY (`LULUS_ID`),
  ADD KEY `FK_DETAILLULUS` (`JURUSAN_ID`),
  ADD KEY `FK_KELULUSAN` (`MAHASISWA_ID`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`MAHASISWA_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `FK_KETERIKATAN` FOREIGN KEY (`MAHASISWA_ID`) REFERENCES `mahasiswa` (`MAHASISWA_ID`);

--
-- Constraints for table `lulus`
--
ALTER TABLE `lulus`
  ADD CONSTRAINT `FK_DETAILLULUS` FOREIGN KEY (`JURUSAN_ID`) REFERENCES `jurusan` (`JURUSAN_ID`),
  ADD CONSTRAINT `FK_KELULUSAN` FOREIGN KEY (`MAHASISWA_ID`) REFERENCES `mahasiswa` (`MAHASISWA_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
