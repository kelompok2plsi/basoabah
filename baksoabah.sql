-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 10.03
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baksoabah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` int(6) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `menu`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'BAKSO URAT', '1 buah urat besar + 4 Bakso Kecil + Toping (Mie Kuning, Bihun, Sawi)', 15000, 'bakso3.png'),
(2, 'Mie Ayam', 'Mie + Ayam Kecap + topping (\'Sawi\')', 15000, 'mieayam.jpg'),
(3, 'Mie Ayam Bakso', 'Mie + Ayam Kecap + Baso Urat + topping(sawi dan kerupuk)', 21000, 'mieayam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `alamat`, `password`, `role_id`) VALUES
(3, 'irfan nurhakim', 'irfannh66@gmail.com', 'jl H joko 12 Lenteng Agung', '$2y$10$BeqW4DAJNNkHEEN1fZ3ss.LN0buuZpEW..wuKkiEI/MFvRQAgreh2', '1'),
(5, 'Radif Ariz', 'rafid@example.com', 'jl bogor', '$2y$10$jmBH7T9kBPS3LzGQKNd7l.AJYl7i/fZ.TC8gmSD54eYDmI1913aG2', '2'),
(9, 'Arya Bima D', 'arya@example.com', 'jl Bogor', '$2y$10$9/N5WNEUnRCdpY5kQmMAQezuYWPosErp36.0EoFloG7EB7qmcnY0K', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
