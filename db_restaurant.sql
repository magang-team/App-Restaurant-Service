-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 08:51 AM
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
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_meja`
--

CREATE TABLE `data_meja` (
  `id_meja` int(11) NOT NULL,
  `status_meja` varchar(50) NOT NULL,
  `nomer_meja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_menu`
--

CREATE TABLE `data_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `foto_menu` text NOT NULL,
  `status_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_user`
--

CREATE TABLE `jabatan_user` (
  `id_role` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `status_order` varchar(50) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `nomor_meja` varchar(20) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `pesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_restaurant`
--

CREATE TABLE `user_restaurant` (
  `id_user` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_meja`
--
ALTER TABLE `data_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `data_menu`
--
ALTER TABLE `data_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `jabatan_user`
--
ALTER TABLE `jabatan_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `user_restaurant`
--
ALTER TABLE `user_restaurant`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
