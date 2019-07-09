-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2019 pada 23.38
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
-- Database: `sirantang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` varchar(255) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `id_jenis`, `gambar`, `deskripsi`, `harga`) VALUES
('BR00034', 'Lemari Bajussaa', 2, '', 'sdaadsasdsdasa&quot;', 50000),
('BR007', 'Kayu Jati Belandas', 2, '', 'Ini kursi yang sangat kuat', 50000),
('BR009', 'Kayu Jati Belanda', 2, '', 'Ini kursi yang sangat kuatttt', 50000),
('BR010', 'Kayu Jati Belanda', 2, '', 'Ini kursi yang sangat kuat', 50000),
('BR012', 'Kayu Jati Belanda', 2, '', 'Ini kursi yang sangat kuat', 50000),
('BR014', 'Kayu Jati Belanda', 2, '', 'Ini kursi yang sangat kuat', 50000),
('BR015', 'Kayu Jati Belanda', 2, '', 'Ini kursi yang sangat kuat', 50000),
('BR666', 'Baru baru', 1, '', 'sadajkshdkjakjskjahdjkak                                                                            ', 50000),
('BRG180520190067', 'Lemari Baju', 1, '', 'sad                                                                            ', 4000),
('BRG180520190068', 'Lemari Bajussaa', 1, '', 'sadasdsadsa', 1000),
('BRG180520190069', 'asd', 2, '', 'jkjhkjh', 400),
('BRG180520190070', 'Lemari Baju', 2, '', 'nkk', 50000),
('BRG180520190071', 'Lemari Baju', 1, '', 'xad', 5000),
('BRG180520190072', 'asdasdasda', 1, '', 'sad', 4444),
('BRG180520190073', 'gyg', 2, '', 'mnmnmn', 5000);

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
(1, 'Meja'),
(2, 'Kursi'),
(3, 'Tirai');

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
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
