-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2012 at 01:13 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_checkup`
--

CREATE TABLE IF NOT EXISTS `foto_checkup` (
  `poto_id` int(11) NOT NULL AUTO_INCREMENT,
  `pasien_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`poto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `foto_checkup`
--

INSERT INTO `foto_checkup` (`poto_id`, `pasien_id`, `tanggal`, `foto`, `keterangan`) VALUES
(1, 1, '2012-12-14', '9eb29-017.jpg', '<p>\r\n	pemasangan pertama</p>\r\n'),
(2, 1, '2012-12-20', 'bcb0e-jasapembuatanbehelgigidijakarta.jpg', '<p>\r\n	pemasangan kedua</p>\r\n'),
(3, 1, '2012-12-24', '35475-Behel-gigi.jpg', '<p>\r\n	pemasangan ketiga</p>\r\n'),
(4, 2, '2012-12-19', '247df-behel-gigi-4.jpg', '<p>\r\n	pemasangan pertama</p>\r\n'),
(5, 2, '2012-12-26', '26482-jasapembuatanbehelgigidijakarta.jpg', '<p>\r\n	pemsangan kedua</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `pasien_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`pasien_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `nama`, `alamat`, `no_hp`, `keterangan`) VALUES
(1, 'Lina', '<p>\r\n	JL.Duren Tiga</p>\r\n', '084555654354', '<p>\r\n	pemasangan Metal Bracket&nbsp;</p>\r\n'),
(2, 'Daiva', '<p>\r\n	Jl.Mampang XVI</p>\r\n', '08137435676', '<p>\r\n	pemasangan pertama</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pembukuan`
--

CREATE TABLE IF NOT EXISTS `pembukuan` (
  `pembukuan_id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `pemasukan` varchar(100) NOT NULL,
  `pengeluaran` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  PRIMARY KEY (`pembukuan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pembukuan`
--

INSERT INTO `pembukuan` (`pembukuan_id`, `tanggal`, `pemasukan`, `pengeluaran`, `keterangan`) VALUES
(1, '2012-12-10', '105000000', '20000000', 'makan, transport'),
(2, '2012-12-02', '20000000', '15000000', 'makan, transport'),
(3, '2012-12-21', '1000', '500', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_checkup`
--

CREATE TABLE IF NOT EXISTS `schedule_checkup` (
  `schedule_checkup_id` int(11) NOT NULL AUTO_INCREMENT,
  `pasien_id` int(11) NOT NULL,
  `tanggal_checkup` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`schedule_checkup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schedule_checkup`
--

INSERT INTO `schedule_checkup` (`schedule_checkup_id`, `pasien_id`, `tanggal_checkup`, `keterangan`) VALUES
(1, 1, '2012-12-20', '<p>\r\n	Cek Ke-dua</p>\r\n'),
(2, 1, '2012-12-26', '<p>\r\n	Cek Ke-Tiga</p>\r\n'),
(3, 1, '2012-12-31', '<p>\r\n	Cek Ke-Empat</p>\r\n'),
(4, 2, '2012-12-26', '<p>\r\n	Cek Ke-dua</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `pasien_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `type_bracket` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `pasien_id`, `tanggal`, `type_bracket`, `harga`, `keterangan`) VALUES
(1, 1, '2012-12-21', 'sd', '1000', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`) VALUES
(21, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
