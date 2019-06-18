-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2019 pada 08.00
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirantang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` varchar(255) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jenis`, `gambar`, `deskripsi`, `harga`) VALUES
('BRG210520190002', 'Tirai Bambu', 'Meja', 'default.jpg', 'Tirai', 5000),
('BRG250520190003', 'Tirai Bambu', 'Tirai', 'default.jpg', 'Tirai Bambu', 5000),
('BRG250520190004', 'Tirai Bambu Bergaris', 'Tirai', 'Bamboo-curtains.jpg', 'Tirai Bambu Bergaris', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `pesan`) VALUES
(1, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(2, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(3, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(4, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(5, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(6, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(7, 'Aji Pratama', 'ajip2606@gmail.com', 'asas', 'asasas'),
(8, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(9, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(10, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(11, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(12, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(13, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(14, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(15, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(16, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(17, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(18, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(19, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(20, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(21, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(22, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(23, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(24, 'Aji Pratama', 'mega@gmail.com', 'asa', 'asas'),
(25, 'Aji Pratama', 'irfangiovani987@gmail.com', 'ff', 'asa'),
(26, 'n', 'ajip2606@gmail.com', 'ff', 'nn'),
(27, 'zz', 'arrumzakiyah@gmail.com', 'a', 'aa'),
(28, 'Aji Pratama', 'e41171807@student.polije.ac.id', 'asas', 'ss'),
(29, 'aasa', 'ajip2606@gmail.com', 'sas', 'sasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
(2, 'Kursi'),
(3, 'Tirai'),
(5, 'Meja'),
(7, 'Gazebo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lv_user`
--

CREATE TABLE `lv_user` (
  `id` int(11) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lv_user`
--

INSERT INTO `lv_user` (`id`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar_profil` varchar(128) NOT NULL,
  `id_level` int(11) NOT NULL,
  `aktiv` int(11) NOT NULL,
  `tgl_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `gambar_profil`, `id_level`, `aktiv`, `tgl_dibuat`) VALUES
(1, 'ferdian nada', 'ferdian', 'ferdian@gmail.com', 'ferdian', 'default.jpg', 1, 1, 0),
(2, 'Zainur Rofan', 'zainur', 'zainur@gmail.com', '$2y$10$uU4NUOcBGQrEo12kA1Wrk.yQkyef6rsxw0hF2uM/5Ifj5lt6kwuBG', '', 1, 1, 1557821046),
(3, 'rizmawan', 'rizma', 'rizma@gmail.com', '$2y$10$LACb/LDSOgtRmwnKH7iqPukM.QvscIj01TlHwFDKxHwC3232Dm8am', '', 2, 1, 1557821291);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis`),
  ADD KEY `id_2` (`id`);

--
-- Indeks untuk tabel `lv_user`
--
ALTER TABLE `lv_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `lv_user`
--
ALTER TABLE `lv_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
