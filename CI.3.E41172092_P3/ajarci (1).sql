-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2019 pada 17.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajarci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(128) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `stokbarang` int(11) NOT NULL,
  `hargabarang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kdbarang`, `namabarang`, `deskripsi`, `stokbarang`, `hargabarang`) VALUES
('SP1', 'Sepatu Apik', 'Tenan iki apik lho', 10, 50000),
('SP10', 'kamsdklaskldl', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 55, 1000),
('SP100', 'sakdjaksdjaskdjk', 'sadlkadjksandjkasdjksadjksadjasjk', 424, 50000),
('SP2', 'Sepatu Apik', 'Tenan iki apik', 50, 50000),
('SP3', 'sadjaskjjk', 'sadbajbdjhfdbjh', 55, 500000),
('SP4', 'Sepatu Adidas', 'Sepatu ini adalah sepatu yang keren', 20, 500000),
('SP5', 'Sepatu 4', 'Sepatu 5 adalah sepatu sekolah', 10, 50000),
('SP5555', '55', '55555555555555555555555555555555555555555555555555', 55, 555),
('SP6', 'sepatu', 'asndkjshajfkbfjkabkbfjkdsbk', 10, 1000),
('TS4', 'Baju', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 55, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `image`, `role_id`, `is_active`, `date_create`) VALUES
(8, 'admin', '$2y$10$g2XhPFK70W8ljlsE1kl7eeSX4raxPqx5IrxKr26Gl13gJXiQG8xXC', 'default.jpg', 2, 1, 1556728034),
(9, 'user', '$2y$10$TGxeOUhgUIloOxDiedq53uado.VrlHyWKPeRaCxygefd8kM71TBVW', 'default.jpg', 2, 1, 1556784041);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
