-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 12 Jun 2017 pada 06.28
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `Kode` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kategori` varchar(15) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Pokok` varchar(15) NOT NULL,
  `Jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Kode`, `Nama`, `Kategori`, `Jumlah`, `Pokok`, `Jual`) VALUES
(1, 'Televisi', 'Polytron', 2, '2', 1100000),
(2, 'Handphone', 'Samsung', 4, '4', 1500000),
(3, 'Camera', 'Canon', 1, '1', 5600000),
(4, 'Kipas Angin', 'Cosmos', 6, '6', 220000),
(5, 'CD', 'Polytron', 5, '5', 200000),
(6, 'Leptop', 'ASUS', 2, '2', 4000000),
(7, 'Printer', 'Canon', 3, '3', 1875000),
(8, 'Handphone', 'Oppo', 5, '5', 3500000),
(9, 'Komputer', 'Samsung', 2, '2', 3500000),
(10, 'Printer', 'Epson', 1, '1', 2350000),
(11, 'Televisi', 'SHARP', 1, '1', 1550000),
(12, 'Leptop', 'Acer', 2, '2', 3500000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
