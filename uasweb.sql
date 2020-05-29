-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2018 pada 21.15
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int(100) NOT NULL,
  `namabar` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `sedia` varchar(100) NOT NULL,
  `penjual` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id`, `namabar`, `harga`, `deskripsi`, `kategori`, `sedia`, `penjual`, `gambar`) VALUES
(6, 'a', '100000', 'aaaaaa', 'Elektronik', 'Available', 'fauzan', ''),
(7, 'aaaa', '11111', 'qsdxasdcqwfc', 'Elektronik', 'Terjual', 'fauzan', ''),
(25, 'dqwd', 'ffqw', 'fwqfqaws', 'Pakaian', 'Available', 'q', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `jumlah`) VALUES
(1, 'Pakaian', 1),
(2, 'Elektronik', 2),
(3, 'Lain-lain', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keanggotaan`
--

CREATE TABLE `keanggotaan` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keanggotaan`
--

INSERT INTO `keanggotaan` (`id`, `status`) VALUES
(1, 'Admin'),
(2, 'Unvalidated User'),
(3, 'Validated User'),
(4, 'Chief');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(100) NOT NULL,
  `untuk` varchar(100) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `untuk`, `dari`, `pesan`) VALUES
(1, 'fauzan', 'fauzan', 'aaaa'),
(2, 'fauzan', 'q', 'qqqq'),
(3, '', 'fauzan', 'Mohon ubah iklan anda!'),
(4, 'q', 'fauzan', 'Mohon ubah iklan anda!'),
(5, 'q', 'fauzan', 'Mohon ubah iklan anda!'),
(6, 'q', 'fauzan', 'Mohon ubah iklan anda!q'),
(7, 'q', 'fauzan', 'Mohon ubah iklan anda!pb'),
(8, 'q', 'fauzan', 'Mohon ubah iklan dengan nama barang pb!'),
(9, 'q', 'fauzan', 'Mohon ubah iklan dengan nama barang a!'),
(10, 'q', 'fauzan', 'Mohon ubah iklan dengan nama barang dqwd!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `namadep` varchar(100) NOT NULL,
  `namabel` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `namadep`, `namabel`, `username`, `password`, `usia`, `jk`, `ttl`, `email`, `notel`, `status`) VALUES
(1, 'Ahmad Fauzan', 'Maulana', 'fauzan', 'fauzan', '21', 'Laki-laki', 'Jakarta, 18 Juli 1997', 'fauzana18@gmail.com', '085695953288', 'Admin'),
(2, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'Validated User'),
(9, 'Aceng', '', 'aceng', 'aceng', '', '', '', 'aceng@aceng.com', '', 'Chief');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keanggotaan`
--
ALTER TABLE `keanggotaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keanggotaan`
--
ALTER TABLE `keanggotaan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
