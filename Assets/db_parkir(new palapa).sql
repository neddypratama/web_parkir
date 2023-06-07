-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 14.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahan_parkir`
--

CREATE TABLE `lahan_parkir` (
  `id` char(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode` varchar(4) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah_kosong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lahan_parkir`
--

INSERT INTO `lahan_parkir` (`id`, `nama`, `kode`, `kapasitas`, `jumlah_kosong`) VALUES
('P01', 'TEKNOLOGI INFORMASI', 'TI', 100, 6),
('P02', 'ADMINISTRASI NIAGA', 'AN', 100, 83),
('P03', 'TEKNIK ELEKTRO', 'TE', 100, 50),
('P04', 'TEKNIK MESIN', 'TM', 100, 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `status`) VALUES
(1, 'Tukang Parkir 1', 'tp1@gmail.com', '35a448b5c9018c4b93cd8dbe8502d060', 1),
(2, 'Admin 1', 'adm1@gmail.com', 'd0572253c0e7cdb85b13988712cb152e', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lahan_parkir`
--
ALTER TABLE `lahan_parkir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
