-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 04:33 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `pk_buku` int(11) NOT NULL,
  `judul_buku` varchar(64) DEFAULT NULL,
  `jumlah_halaman` varchar(43) DEFAULT NULL,
  `penerbit` varchar(64) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `kategori` varchar(64) DEFAULT NULL,
  `gambar` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`pk_buku`, `judul_buku`, `jumlah_halaman`, `penerbit`, `tahun_terbit`, `kategori`, `gambar`) VALUES
(42, 'ELEKTRONIK', '209 HALAMAN', 'ADMIN', 2016, 'KIDS NYAMAN NOW   ', 'IMG_20170906_0740554.jpg'),
(47, 'ELEKTRONIK', '234 HALAMAN', 'YANG MEMBUAT', 1998, 'PELAJARAN', 'IMG_20170906_0740483.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `pk_pengunjung` int(11) NOT NULL,
  `pk_buku` int(11) NOT NULL,
  `tanggal_kunjung` date DEFAULT NULL,
  `buku_pinjam` varchar(64) DEFAULT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`pk_pengunjung`, `pk_buku`, `tanggal_kunjung`, `buku_pinjam`, `gambar`) VALUES
(30, 0, '2017-12-05', 'ipa', 'IMG_20170906_0740556.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `pk_user` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `gambar` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`pk_user`, `username`, `password`, `gambar`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'IMG_20170906_0740557.jpg'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`pk_buku`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`pk_pengunjung`,`pk_buku`),
  ADD KEY `join_1` (`pk_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`pk_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `pk_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `pk_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `pk_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
