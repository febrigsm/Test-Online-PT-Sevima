-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2021 pada 18.12
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `instaapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_status` text NOT NULL,
  `tanggal_status` datetime NOT NULL,
  `dihapus` varchar(1) DEFAULT 't'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `id_user`, `isi_status`, `tanggal_status`, `dihapus`) VALUES
(4, 6, 'Bismillah', '2021-03-30 23:00:38', 't');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_depan` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `nama_belakang` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `kelamin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `aktif` char(1) DEFAULT 'Y',
  `profil_singkat` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `kelamin`, `tgl_lahir`, `agama`, `foto_profil`, `status`, `alamat`, `hobi`, `level`, `aktif`, `profil_singkat`) VALUES
(6, 'Febri', 'Indra', 'febriindra@sevima.com', '123456789', 'Pria', '1994-02-13', NULL, 'default.jpg', NULL, NULL, NULL, 'MEMBER', 'Y', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id_status`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
