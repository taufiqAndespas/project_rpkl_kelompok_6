-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 03:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ukm_badminton`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `nomor` int(11) NOT NULL,
  `nama_kejuaraan` varchar(40) DEFAULT NULL,
  `peringkat` int(11) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `peraih` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`nomor`, `nama_kejuaraan`, `peringkat`, `tahun`, `peraih`) VALUES
(1, 'kejuaraan_1', 2, '2008', 'andy'),
(2, 'kejuaraan_2', 1, '2009', 'daffa dan cika'),
(3, 'kejuaraan_3', 4, '2008', 'eko'),
(4, 'kejuaraan_3', 2, '2009', 'revan'),
(5, 'kejuaraan_5', 3, '2009', 'indra'),
(6, 'kejuaraan_6', 1, '2010', 'wahyu'),
(7, 'kejuaraan_7', 3, '2010', 'satriya'),
(8, 'kejuaraan_8', 3, '2010', 'edward');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `nomor` int(11) NOT NULL,
  `nama_kegiatan` varchar(30) DEFAULT NULL,
  `berita_kegiatan` varchar(5000) DEFAULT NULL,
  `nama_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`nomor`, `nama_kegiatan`, `berita_kegiatan`, `nama_photo`) VALUES
(26, 'spring', 'Spring merupakan kegiatan test tanding antar pebulu tangkis dalam rangka menguji kemampuan dalam bermain bulu tangkis.', 'kegiatan_1.jpg'),
(27, 'latihan rutin sabtu', 'Dalam rangka menjaga fisik pebulu tangkis tetap prima diadakan latihan rutin', 'kegiatan_2.jpg'),
(28, 'latihan pagi minggu', 'latihan yang kontinu akan memberi efek kelincahan dan kecekatan pemain', 'kegiatan_3.jpg'),
(29, 'bukber', 'kekompakan pemain dalam berbagai kegiatan di luar bulu tangkis', 'kegiatan_12.jpg'),
(30, 'latihan persiapan tanding', 'persiapan gladi bersih menjelang kejuaraan bulu tangkis tingkat mahasiswa', 'kegiatan_4.png'),
(31, 'spring rutin', 'spring yang rutin dilaksanakan untuk menguji kualitas permainan pemain', 'kegiatan_6.jpg'),
(32, 'tanding anggota ukm', 'pertandingan antar sesama anggota ukm untuk meningkatkan permainan', 'kegiatan_5.jpg'),
(33, 'spring antar ukm', 'untuk melatih kemampuan tanding dan kualitas anggota ukm', 'kegiatan_7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `training_schedule`
--

CREATE TABLE `training_schedule` (
  `nomor` int(11) NOT NULL,
  `nama_latihan` varchar(50) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `jam` varchar(10) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_schedule`
--

INSERT INTO `training_schedule` (`nomor`, `nama_latihan`, `tanggal`, `jam`, `tempat`) VALUES
(1, 'latihan_1', '22 januari 2019', '08:00 am', 'sport center'),
(2, 'latihan_2', '23 januari 2019', '10:00 am', 'GOR dista Aceh'),
(3, 'latihan_3', '25 januari 2019', '08:00 am', 'lapangan mini'),
(4, 'latihan_4', '26 januari 2019', '10:00 am', 'Gelanggang'),
(5, 'latihan_5', '27 januari 2018', '03:00 pm', 'GOR Dista Aceh'),
(6, 'latihan_6', '28 januari 2019', '08:00 am', 'lapangan mini');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'rahasia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `training_schedule`
--
ALTER TABLE `training_schedule`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `training_schedule`
--
ALTER TABLE `training_schedule`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
