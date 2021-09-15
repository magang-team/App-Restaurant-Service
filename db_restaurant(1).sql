-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 04:57 AM
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
  `id_meja` varchar(10) NOT NULL,
  `status_meja` varchar(50) NOT NULL,
  `nomer_meja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_meja`
--

INSERT INTO `data_meja` (`id_meja`, `status_meja`, `nomer_meja`) VALUES
('MJ001', 'Active', '1'),
('MJ002', 'Non-active', '2'),
('MJ003', 'Active', '3'),
('MJ004', 'Non-active', '4'),
('MJ005', 'Non-active', '5'),
('MJ006', 'Active', '6'),
('MJ007', 'Active', '7'),
('MJ008', 'Non-active', '8'),
('MJ009', 'Active', '9'),
('MJ010', 'Active', '10');

-- --------------------------------------------------------

--
-- Table structure for table `data_menu`
--

CREATE TABLE `data_menu` (
  `id_menu` varchar(20) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `foto_menu` text NOT NULL,
  `status_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_menu`
--

INSERT INTO `data_menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga_menu`, `foto_menu`, `status_menu`) VALUES
('MN001', 'Ayam Goreng', 'Ayam goreng adalah hidangan yang dibuat dari daging ayam dicampur tepung bumbu yang digoreng dalam minyak goreng panas.', 20000, '155434461764', 'Tersedia'),
('MN002', 'Nasi Goreng', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega.', 15000, '1554350588507', 'Tersedia'),
('MN003', 'Gulai Ayam', 'Gulai adalah masakan berbahan baku daging ayam, aneka ikan, kambing, sapi, jeroan, atau sayuran seperti nangka muda dan daun singkong, yang diolah dalam kuah bumbu rempah yang bercita rasa gurih.', 20000, '1554430239584', 'Kosong'),
('MN004', 'Nasi Kuning', 'Nasi kuning, sajian khas Indonesia berupa nasi berwarna kuning yang gurih. Mirip dengan nasi uduk atau nasi gurih, nasi kuning dimasak dari olahan beras, santan dan racikan rempah-rempah. Bedanya, nasi kuning secara khusus menggunakan kunyit sebagai pewarna alami.', 15000, '1554350514500', 'Tersedia'),
('MN005', 'Sup Ayam', 'Sup atau sop (bentuk tidak baku) adalah masakan berkuah dari kaldu yang dibuat dengan cara mendidihkan bahan bisa berupa daging atau ayam untuk membuat kuah kaldu, dan biasanya diberi bumbu serta bahan lainnya untuk menambah rasa.', 20000, '1554344447964', 'Kosong'),
('MN006', 'Jus Alpukat', 'Jus buah alpukat disebut mengandung lemak tak jenuh sehingga aman untuk dikonsumsi secara rutin. Tak hanya lemak baik, minuman yang satu ini juga kaya nutrisi, seperti vitamin A,B,C,E, dan K serta karbohidrat, protein, folat, hingga magnesium.', 15000, '1554344709288', 'Tersedia'),
('MN007', 'Jus Tomat', 'Jus tomat adalah minuman yang terbuat dari sari buah tomat.', 15000, '1554430280859', 'Tersedia'),
('MN008', 'Kopi', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk.', 15000, '1554430367352', 'Kosong'),
('MN009', 'Teh', 'Teh adalah sejenis minuman yang di hasilkan dari pengolahan daun tanaman teh (Camellia sinensis). Daun yang di gunakan biasanya adalah daun pucuk di tambah 2-3 helai daun muda di bawahnya.', 15000, '155443029435', 'Tersedia'),
('MN010', 'Jeruk', 'Salah satu minuman yang sering diandalkan saat cuaca panas adalah es jeruk. Rasanya yang asam segar dengan tambahan bulir-bulir jeruk, dipercaya bisa menjadi pelepas dahaga. Belum lagi kandungan nutrisinya. Seperti vitamin C hingga kalium juga dipercaya baik untuk kesehatan.', 15000, '1554430272641', 'Tersedia');

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
