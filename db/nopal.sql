-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2020 pada 07.33
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nopal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukti`
--

CREATE TABLE IF NOT EXISTS `tbl_bukti` (
`id_bukti` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `atasnama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bukti`
--

INSERT INTO `tbl_bukti` (`id_bukti`, `image`, `atasnama`) VALUES
(2, 'tiny_cc_he2nsz.png', '2020-11-28 / nopal2 / sby / 66');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
`id_pengguna` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `no_hp`, `alamat`) VALUES
(6, 'frozen', 'frozen1', 'frozen1', '123', 'disney'),
(7, 'sofia', 'sofia2', 'sofia2', '5676', 'the first'),
(15, 'nopal', 'nopal2', 'nopal', '9898', 'lmlm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
`id_pesan` int(5) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `atasnama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jml_org` varchar(11) NOT NULL,
  `tgl_pakai` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `tgl_pesan`, `atasnama`, `alamat`, `no_hp`, `jml_org`, `tgl_pakai`) VALUES
(5, '2020-11-27', 'Pemkab TUBAN', 'TUBAN', '08128765432', '13', '2020-11-29'),
(7, '2020-11-27', 'amar', 'sidoarjo', '23', '23', '2020-12-02'),
(8, '2020-11-28', 'frozen1', 'DISNEY CLUB', '082616271921', '1524', '2020-12-06'),
(10, '2020-10-29', 'gugug', 'dia senang', 'berlair lair', 'sambil', '2020-12-04'),
(11, '2020-10-30', 'frozen1', 'asas', '12345', '18', '2020-11-08'),
(12, '2020-11-28', 'nopal2', 'sby', '7878', '66', '2020-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
 ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
