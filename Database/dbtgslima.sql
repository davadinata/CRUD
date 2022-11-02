-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Nov 2022 pada 01.35
-- Versi server: 5.7.36
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtgslima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltgs`
--

DROP TABLE IF EXISTS `tbltgs`;
CREATE TABLE IF NOT EXISTS `tbltgs` (
  `nim` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kota_asal` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `alamat_ortu` varchar(30) NOT NULL,
  `kode_pos` int(12) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `status` enum('TAMA','WREDA') NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbltgs`
--

INSERT INTO `tbltgs` (`nim`, `nama`, `kota_asal`, `tanggal_lahir`, `nama_ortu`, `alamat_ortu`, `kode_pos`, `no_telp`, `status`) VALUES
(672019123, 'Siapa aja', 'Mana', '2001-12-12', 'Rasiman', 'Palangka', 12123, 8739123, 'TAMA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
