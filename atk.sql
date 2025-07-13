-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 04:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `user_name`, `password`, `no_telp`, `level`) VALUES
(13, 'leonita', 'leonita', '827ccb0eea8a706c4c34a16891f84e7b', 89657432221876, 'admin'),
(14, 'Melia', 'melia', '827ccb0eea8a706c4c34a16891f84e7b', 8888888, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_datakeluar` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `id_data` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_tlp` bigint(20) NOT NULL,
  `jumlah` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_datakeluar`, `satuan`, `id_data`, `tgl`, `no_tlp`, `jumlah`) VALUES
(131, 'BOX', 10, '2022-07-16', 0, '20'),
(132, 'PCS', 11, '2022-07-15', 0, '10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_databarang`
--

CREATE TABLE `tb_databarang` (
  `id_data` int(11) NOT NULL,
  `Nama_barang` varchar(50) NOT NULL,
  `satuan` enum('PCS','KOTAK','BOX') NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_databarang`
--

INSERT INTO `tb_databarang` (`id_data`, `Nama_barang`, `satuan`, `jumlah`, `tanggal`, `gambar`) VALUES
(8, 'PENA', 'PCS', 0, '0000-00-00', ''),
(9, 'steples', 'PCS', 0, '0000-00-00', ''),
(10, 'spidol', 'PCS', 0, '0000-00-00', 'spidol.jpg'),
(11, 'CAP PUSKESMAS', 'PCS', 0, '0000-00-00', 'spidol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakeluar`
--

CREATE TABLE `tb_datakeluar` (
  `id_datakeluar` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datakeluar`
--

INSERT INTO `tb_datakeluar` (`id_datakeluar`, `NIK`, `id_data`, `tgl`, `jumlah`) VALUES
(97, 0, 8, '2022-07-08', '12'),
(98, 2147483647, 8, '2022-07-14', '10'),
(99, 3444388, 8, '2022-07-13', '1'),
(100, 546772883, 8, '2022-07-22', '2'),
(101, 546772883, 9, '2022-07-23', '6'),
(102, 546772883, 9, '2022-07-27', '1'),
(103, 2147483647, 9, '2022-07-23', '8'),
(104, 2147483647, 9, '2022-07-23', '8'),
(105, 234567, 10, '2022-07-20', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datamasuk`
--

CREATE TABLE `tb_datamasuk` (
  `id_data` int(11) NOT NULL,
  `Nama_barang` varchar(50) NOT NULL,
  `satuan` enum('PCS','KOTAK','BOX') NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nama` varchar(30) NOT NULL,
  `NIK` int(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `status` enum('y','t') NOT NULL,
  `NIP` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_datakeluar`);

--
-- Indexes for table `tb_databarang`
--
ALTER TABLE `tb_databarang`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_datakeluar`
--
ALTER TABLE `tb_datakeluar`
  ADD PRIMARY KEY (`id_datakeluar`);

--
-- Indexes for table `tb_datamasuk`
--
ALTER TABLE `tb_datamasuk`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_datakeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tb_databarang`
--
ALTER TABLE `tb_databarang`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_datakeluar`
--
ALTER TABLE `tb_datakeluar`
  MODIFY `id_datakeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `tb_datamasuk`
--
ALTER TABLE `tb_datamasuk`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `NIK` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
