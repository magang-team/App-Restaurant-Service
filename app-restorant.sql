-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2021 pada 10.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-restorant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_meja`
--

CREATE TABLE `data_meja` (
  `id_meja` int(11) NOT NULL,
  `status_meja` varchar(50) NOT NULL,
  `nomer_meja` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_menu`
--

CREATE TABLE `data_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_menu` varchar(50) DEFAULT NULL,
  `foto_menu` text NOT NULL,
  `status_menu` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_menu`
--

INSERT INTO `data_menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga_menu`, `foto_menu`, `status_menu`, `created_at`, `update_at`) VALUES
(1, 'Nasi Goreng', 'Nasi terenak di dunia', '10.000', 'https://www.masakapahariini.com/wp-content/uploads/2019/01/nasi-goreng-jawa-500x300.jpg', 'Tersedia', '2021-09-13', '0000-00-00'),
(2, 'Bakso', 'Bakso yang tebuat dari ayam', '7.000', 'https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/12/15/2323505669.jpg', 'tersedia', '2021-09-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_user`
--

CREATE TABLE `jabatan_user` (
  `id_role` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `status_order` varchar(50) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `nomor_meja` varchar(20) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `pesanan` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_restaurant`
--

CREATE TABLE `user_restaurant` (
  `id_user` int(11) NOT NULL,
  `role_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_meja`
--
ALTER TABLE `data_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `data_menu`
--
ALTER TABLE `data_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `jabatan_user`
--
ALTER TABLE `jabatan_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `user_restaurant`
--
ALTER TABLE `user_restaurant`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
