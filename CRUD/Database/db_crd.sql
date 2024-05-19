-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2024 pada 05.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_crud`
--

CREATE TABLE `tb_crud` (
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_crud`
--

INSERT INTO `tb_crud` (`Nama`, `Alamat`, `Pekerjaan`) VALUES
('Siddiq Fajar B', 'Jambak', 'Wiraswasta'),
('Yogi', 'Simpang Empat', 'Mahasiswa'),
('Jevin', 'Jambak', 'Mahasiswa'),
('Axcel Djordan', 'Padang Lawas', 'Wiraswasta'),
('Agung', 'Kinali', 'PNS'),
('Boy R', 'Mahakarya', 'Wiraswasta'),
('Nur Cahaya', 'Simpang Tiga', 'Mahasiswa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
