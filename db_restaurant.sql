-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 10:23 AM
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
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `id_kategori` varchar(11) NOT NULL,
  `nama_kt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`id_kategori`, `nama_kt`) VALUES
('KT001', 'Makanan'),
('KT002', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `data_meja`
--

CREATE TABLE `data_meja` (
  `id_meja` varchar(10) NOT NULL,
  `status_meja` varchar(50) NOT NULL,
  `nomer_meja` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_meja`
--

INSERT INTO `data_meja` (`id_meja`, `status_meja`, `nomer_meja`, `created_at`, `updated_at`) VALUES
('MJ001', 'Active', '1', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ002', 'Non-active', '2', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ003', 'Active', '3', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ004', 'Non-active', '4', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ005', 'Non-active', '5', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ006', 'Active', '6', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ007', 'Active', '7', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ008', 'Non-active', '8', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ009', 'Active', '9', '2021-09-27 03:32:00', '2021-09-27 11:32:00'),
('MJ010', 'Active', '10', '2021-09-27 03:32:00', '2021-09-27 11:32:00');

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
  `status_menu` varchar(100) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_menu`
--

INSERT INTO `data_menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga_menu`, `foto_menu`, `status_menu`, `id_kategori`, `created_at`, `updated_at`) VALUES
('MN001', 'Ayam Goreng', 'Ayam goreng adalah hidangan yang dibuat dari daging ayam dicampur tepung bumbu yang digoreng dalam minyak goreng panas.', 20000, '155434461764.png', 'Tersedia', 'KT001', '2021-09-27 03:31:08', '2021-10-14 21:40:30'),
('MN002', 'Nasi Goreng', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega.', 15000, '1554350588507.jpg', 'Tersedia', 'KT001', '2021-09-27 03:31:08', '2021-10-14 21:41:01'),
('MN003', 'Gulai Ayam', 'Gulai adalah masakan berbahan baku daging ayam, aneka ikan, kambing, sapi, jeroan, atau sayuran seperti nangka muda dan daun singkong, yang diolah dalam kuah bumbu rempah yang bercita rasa gurih.', 20000, '1554430239584.jpg', 'Kosong', 'KT001', '2021-09-27 03:31:08', '2021-10-14 21:41:13'),
('MN004', 'Nasi Kuning', 'Nasi kuning, sajian khas Indonesia berupa nasi berwarna kuning yang gurih. Mirip dengan nasi uduk atau nasi gurih, nasi kuning dimasak dari olahan beras, santan dan racikan rempah-rempah. Bedanya, nasi kuning secara khusus menggunakan kunyit sebagai pewarna alami.', 15000, '1554350514500.jpg', 'Tersedia', 'KT001', '2021-09-27 03:31:08', '2021-10-14 21:41:24'),
('MN005', 'Sup Ayam', 'Sup atau sop (bentuk tidak baku) adalah masakan berkuah dari kaldu yang dibuat dengan cara mendidihkan bahan bisa berupa daging atau ayam untuk membuat kuah kaldu, dan biasanya diberi bumbu serta bahan lainnya untuk menambah rasa.', 20000, '1554344447964.jpg', 'Kosong', 'KT001', '2021-09-27 03:31:08', '2021-10-14 21:41:39'),
('MN006', 'Jus Alpukat', 'Jus buah alpukat disebut mengandung lemak tak jenuh sehingga aman untuk dikonsumsi secara rutin. Tak hanya lemak baik, minuman yang satu ini juga kaya nutrisi, seperti vitamin A,B,C,E, dan K serta karbohidrat, protein, folat, hingga magnesium.', 15000, '1554344709288.jpg', 'Tersedia', 'KT002', '2021-09-27 03:31:08', '2021-10-14 21:42:16'),
('MN007', 'Jus Tomat', 'Jus tomat adalah minuman yang terbuat dari sari buah tomat.', 15000, '1554430280859.jpg', 'Tersedia', 'KT002', '2021-09-27 03:31:08', '2021-10-14 21:42:26'),
('MN008', 'Kopi', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk.', 15000, '1554430367352.jpg', 'Kosong', 'KT002', '2021-09-27 03:31:08', '2021-10-14 21:42:38'),
('MN009', 'Teh', 'Teh adalah sejenis minuman yang di hasilkan dari pengolahan daun tanaman teh (Camellia sinensis). Daun yang di gunakan biasanya adalah daun pucuk di tambah 2-3 helai daun muda di bawahnya.', 15000, '155443029435.jpg', 'Tersedia', 'KT002', '2021-09-27 03:31:08', '2021-10-14 21:42:47'),
('MN010', 'Jeruk', 'Salah satu minuman yang sering diandalkan saat cuaca panas adalah es jeruk. Rasanya yang asam segar dengan tambahan bulir-bulir jeruk, dipercaya bisa menjadi pelepas dahaga. Belum lagi kandungan nutrisinya. Seperti vitamin C hingga kalium juga dipercaya baik untuk kesehatan.', 15000, '1554430272641.jpg', 'Tersedia', 'KT002', '2021-09-27 03:31:08', '2021-10-14 21:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_user`
--

CREATE TABLE `jabatan_user` (
  `id_role` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_user`
--

INSERT INTO `jabatan_user` (`id_role`, `role_code`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'kasir', '2021-10-18 08:18:49', '2021-10-18 16:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `status_order` varchar(50) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `nomor_meja` varchar(20) DEFAULT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `pesanan` varchar(100) DEFAULT NULL,
  `jumlah_uang` int(11) DEFAULT NULL,
  `cara_bayar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `status_order`, `total_harga`, `nomor_meja`, `nama_pemesan`, `no_tlp`, `pesanan`, `jumlah_uang`, `cara_bayar`, `created_at`, `updated_at`) VALUES
(244, 'Sudah Bayar', 240000, '9', 'TEST ', '087899509560', 'null', 300000, 'cash', '2021-10-11 07:00:22', '2021-10-11 15:09:41'),
(246, 'Sudah Bayar', 65000, '2', 'test Test', '087899508986', 'null', 100000, 'cash', '2021-10-15 14:21:37', '2021-10-18 12:03:52'),
(247, 'Belum Bayar', 65000, '1', 'Test Wda', '087899508986', 'null', NULL, NULL, '2021-10-18 05:19:12', '2021-10-18 13:19:12'),
(248, 'Belum Bayar', 40000, '3', 'Test Bro', '087899508370', 'null', NULL, NULL, '2021-10-18 05:38:03', '2021-10-18 13:38:03'),
(249, 'Belum Bayar', 65000, '5', 'test next', '087899509560', 'null', NULL, NULL, '2021-10-20 14:20:26', '2021-10-20 22:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `quantity_menu` int(11) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `nama_menu`, `quantity_menu`, `harga_menu`, `id_order`) VALUES
(1, 'Ayam Goreng', 1, 20000, 214),
(2, 'Gulai Ayam', 3, 20000, 214),
(3, 'Ayam Goreng', 1, 20000, 215),
(4, 'Gulai Ayam', 3, 20000, 215),
(5, 'Ayam Goreng', 1, 20000, 216),
(6, 'Gulai Ayam', 3, 20000, 216),
(7, 'Gulai Ayam', 4, 20000, 217),
(8, 'Nasi Goreng', 2, 15000, 217),
(9, 'Ayam Goreng', 1, 20000, 218),
(10, 'Gulai Ayam', 1, 20000, 218),
(11, 'Ayam Goreng', 1, 20000, 219),
(12, 'Nasi Goreng', 1, 15000, 219),
(13, 'Ayam Goreng', 1, 20000, 224),
(14, 'Gulai Ayam', 1, 20000, 224),
(15, 'Ayam Goreng', 1, 20000, 226),
(16, 'Gulai Ayam', 1, 20000, 226),
(17, 'Sup Ayam', 1, 20000, 226),
(18, 'Jus Alpukat', 1, 15000, 226),
(19, 'Jus Tomat', 1, 15000, 226),
(20, 'Ayam Goreng', 1, 20000, 228),
(21, 'Kopi', 1, 15000, 228),
(22, 'Nasi Goreng', 1, 15000, 229),
(23, 'Gulai Ayam', 1, 20000, 229),
(24, 'Nasi Goreng', 1, 15000, 230),
(25, 'Gulai Ayam', 1, 20000, 230),
(26, 'Nasi Goreng', 1, 15000, 231),
(27, 'Gulai Ayam', 1, 20000, 231),
(28, 'Nasi Goreng', 5, 15000, 232),
(29, 'Gulai Ayam', 5, 20000, 232),
(30, 'Kopi', 5, 15000, 232),
(31, 'Teh', 5, 15000, 232),
(32, 'Teh', 6, 15000, 236),
(33, 'Kopi', 1, 15000, 236),
(34, 'Jus Tomat', 2, 15000, 236),
(35, 'Ayam Goreng', 3, 20000, 238),
(36, 'Jus Alpukat', 3, 15000, 238),
(37, 'Nasi Kuning', 3, 15000, 238),
(38, 'Teh', 4, 15000, 238),
(39, 'Kopi', 1, 15000, 239),
(40, 'Teh', 1, 15000, 239),
(41, 'Gulai Ayam', 2, 20000, 239),
(42, 'Nasi Goreng', 1, 15000, 240),
(43, 'Sup Ayam', 1, 20000, 240),
(44, 'Kopi', 1, 15000, 240),
(45, 'Ayam Goreng', 1, 20000, 241),
(46, 'Nasi Goreng', 1, 15000, 241),
(47, 'Nasi Kuning', 1, 15000, 241),
(48, 'Sup Ayam', 1, 20000, 241),
(49, 'Teh', 1, 15000, 242),
(50, 'Jeruk', 1, 15000, 242),
(51, 'Ayam Goreng', 2, 20000, 243),
(52, 'Ayam Goreng', 6, 20000, 244),
(53, 'Gulai Ayam', 6, 20000, 244),
(54, 'Ayam Goreng', 1, 20000, 246),
(55, 'Nasi Goreng', 1, 15000, 246),
(56, 'Teh', 1, 15000, 246),
(57, 'Jeruk', 1, 15000, 246),
(58, 'Kopi', 1, 15000, 247),
(59, 'Jus Tomat', 1, 15000, 247),
(60, 'Ayam Goreng', 1, 20000, 247),
(61, 'Nasi Goreng', 1, 15000, 247),
(62, 'Ayam Goreng', 1, 20000, 248),
(63, 'Gulai Ayam', 1, 20000, 248),
(64, 'Nasi Goreng', 1, 15000, 249),
(65, 'Jus Alpukat', 1, 15000, 249),
(66, 'Gulai Ayam', 1, 20000, 249),
(67, 'Kopi', 1, 15000, 249);

-- --------------------------------------------------------

--
-- Table structure for table `user_restaurant`
--

CREATE TABLE `user_restaurant` (
  `id_user` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_restaurant`
--

INSERT INTO `user_restaurant` (`id_user`, `role_code`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'kasir', 'kasir123', '2021-10-19 05:18:44', '2021-10-19 13:18:44');

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
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_restaurant`
--
ALTER TABLE `user_restaurant`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_restaurant`
--
ALTER TABLE `user_restaurant`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
