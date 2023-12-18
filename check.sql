-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_barang` (
  `id` int primary key AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `beli` int(11) DEFAULT NULL,
  `jual` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--
INSERT INTO `tb_barang` (`id`, `nama`, `kategori`, `beli`, `jual`, `stok`) VALUES ('1', 'infinix note 30 pro', 'Elektronik', '2799999', '2399999', '15'), ('2', 'Xiaomi note 12 pro', 'Elektronik', '3499999', '2799999', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
cd..
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES ('1', 'muhamad', 'irsal', 'irsal', '1');


--
-- Table structure for table `muhamad`
--



--
-- Dumping data for table `tb_muhamad`
--




--
-- Table structure for table `tb_siswa`
--

--
-- Dumping data for table `tb_siswa`
--





--
-- Table structure for table `tb_siswa`
--
--
-- Indexes for dumped tables
--


--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);
  

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_muhamad`
--


--
-- Indexes for table `tb_siswa`
--

