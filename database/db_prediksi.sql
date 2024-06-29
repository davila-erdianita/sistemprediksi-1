-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2023 pada 12.53
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prediksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detail` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_penjualan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_detail`, `id_penjualan`, `id_barang`, `jml_penjualan`) VALUES
(1, 1, 1, '26'),
(2, 2, 2, '35'),
(3, 3, 3, '40'),
(4, 4, 4, '29'),
(5, 5, 5, '35'),
(6, 6, 1, '30'),
(7, 7, 2, '37'),
(8, 8, 3, '28'),
(9, 9, 4, '34'),
(10, 10, 5, '32'),
(11, 11, 1, '27'),
(12, 12, 2, '34'),
(13, 13, 3, '30'),
(14, 14, 4, '37'),
(15, 15, 5, '38'),
(16, 16, 1, '30'),
(17, 17, 2, '35'),
(18, 18, 3, '49'),
(19, 19, 4, '35'),
(20, 20, 5, '30'),
(21, 21, 1, '41'),
(22, 22, 2, '42'),
(23, 23, 3, '25'),
(24, 24, 4, '45'),
(25, 25, 5, '36'),
(26, 26, 1, '29'),
(27, 27, 2, '32'),
(28, 28, 3, '38'),
(29, 29, 4, '39'),
(30, 30, 5, '32'),
(31, 31, 1, '32'),
(32, 32, 2, '41'),
(33, 33, 3, '32'),
(34, 34, 4, '37'),
(35, 35, 5, '42'),
(36, 36, 1, '43'),
(37, 37, 2, '39'),
(38, 38, 3, '41'),
(39, 39, 4, '42'),
(40, 40, 5, '46'),
(41, 41, 1, '36'),
(42, 42, 2, '37'),
(43, 43, 3, '40'),
(44, 44, 4, '46'),
(45, 45, 5, '35'),
(46, 46, 1, '38'),
(47, 47, 2, '44'),
(48, 48, 3, '38'),
(49, 49, 4, '32'),
(50, 50, 5, '31'),
(51, 51, 1, '35'),
(52, 52, 2, '45'),
(53, 53, 3, '41'),
(54, 54, 4, '35'),
(55, 55, 5, '43'),
(56, 56, 1, '37'),
(57, 57, 2, '49'),
(58, 58, 3, '53'),
(59, 59, 4, '44'),
(60, 60, 5, '39'),
(63, 63, 8, '3'),
(64, 64, 8, '4'),
(65, 65, 8, '8'),
(66, 66, 8, '2'),
(67, 67, 8, '3'),
(68, 68, 8, '2'),
(69, 69, 8, '4'),
(70, 70, 8, '6'),
(71, 71, 8, '3'),
(72, 72, 8, '5'),
(73, 73, 8, '7'),
(74, 74, 8, '9'),
(75, 75, 9, '7'),
(76, 76, 9, '2'),
(77, 77, 9, '1'),
(78, 78, 9, '6'),
(79, 79, 9, '8'),
(80, 80, 9, '4'),
(81, 81, 9, '7'),
(82, 82, 9, '6'),
(83, 83, 9, '4'),
(84, 84, 9, '3'),
(85, 85, 9, '2'),
(86, 86, 9, '3'),
(87, 87, 11, '3'),
(88, 88, 11, '5'),
(89, 89, 11, '6'),
(90, 90, 11, '4'),
(91, 91, 11, '6'),
(92, 92, 11, '3'),
(93, 93, 11, '5'),
(94, 94, 11, '4'),
(95, 95, 11, '6'),
(96, 96, 11, '3'),
(97, 97, 11, '5'),
(98, 98, 11, '7'),
(99, 99, 12, '4'),
(100, 100, 12, '3'),
(101, 101, 12, '2'),
(102, 102, 12, '3'),
(103, 103, 12, '7'),
(104, 104, 12, '5'),
(105, 105, 12, '3'),
(106, 106, 12, '4'),
(107, 107, 12, '4'),
(108, 108, 12, '7'),
(109, 109, 12, '4'),
(110, 110, 12, '6'),
(111, 111, 13, '2'),
(112, 112, 13, '3'),
(113, 113, 13, '2'),
(114, 114, 13, '2'),
(115, 115, 13, '5'),
(116, 116, 13, '4'),
(117, 117, 13, '3'),
(118, 118, 13, '2'),
(119, 119, 13, '5'),
(120, 120, 13, '3'),
(121, 121, 13, '4'),
(122, 122, 13, '5'),
(123, 123, 10, '9'),
(124, 124, 10, '1'),
(125, 125, 10, '4'),
(126, 126, 10, '14'),
(127, 127, 10, '10'),
(128, 128, 10, '8'),
(129, 129, 10, '11'),
(130, 130, 10, '5'),
(131, 131, 10, '3'),
(132, 132, 10, '5'),
(133, 133, 10, '5'),
(134, 134, 10, '7'),
(135, 135, 14, '39'),
(136, 136, 14, '33'),
(137, 137, 14, '28'),
(138, 138, 14, '15'),
(139, 139, 14, '27'),
(140, 140, 14, '30'),
(141, 141, 14, '39'),
(142, 142, 14, '28'),
(143, 143, 14, '32'),
(144, 144, 14, '26'),
(145, 145, 14, '29'),
(146, 146, 14, '23'),
(147, 147, 15, '12'),
(148, 148, 15, '20'),
(149, 149, 15, '10'),
(150, 150, 15, '14'),
(151, 151, 15, '14'),
(152, 152, 15, '17'),
(153, 153, 15, '29'),
(154, 154, 15, '38'),
(155, 155, 15, '22'),
(156, 156, 15, '21'),
(157, 157, 15, '18'),
(158, 158, 15, '30'),
(159, 159, 16, '28'),
(160, 160, 16, '20'),
(161, 161, 16, '15'),
(162, 162, 16, '24'),
(163, 163, 16, '22'),
(164, 164, 16, '19'),
(165, 165, 16, '20'),
(166, 166, 16, '13'),
(167, 167, 16, '18'),
(168, 168, 16, '21'),
(169, 169, 16, '25'),
(170, 170, 16, '27'),
(171, 171, 17, '4'),
(172, 172, 17, '7'),
(173, 173, 17, '5'),
(174, 174, 17, '2'),
(175, 175, 17, '3'),
(176, 176, 17, '6'),
(177, 177, 17, '7'),
(178, 178, 17, '5'),
(179, 179, 17, '4'),
(180, 180, 17, '6'),
(181, 181, 17, '4'),
(182, 182, 17, '8');

--
-- Trigger `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `before_delete_detail_penjualan` BEFORE DELETE ON `detail_penjualan` FOR EACH ROW BEGIN
	DECLARE stok_lama INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = old.id_barang);
	UPDATE tbl_barang SET jml_persediaan =(stok_lama + old.jml_penjualan) where id_barang = old.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_insert_detail_penjulan` BEFORE INSERT ON `detail_penjualan` FOR EACH ROW BEGIN 
	DECLARE stok_lama INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = new.id_barang);
	
	IF (stok_lama >= new.jml_penjualan) THEN
		UPDATE tbl_barang SET jml_persediaan =(stok_lama - new.jml_penjualan) where id_barang = new.id_barang;
	END IF;
	
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_detail_penjualan` BEFORE UPDATE ON `detail_penjualan` FOR EACH ROW BEGIN 
	DECLARE stok_lama INT;
	DECLARE stok_baru INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = new.id_barang);
	set stok_baru = stok_lama + old.jml_penjualan;
	
	IF (stok_baru >= new.jml_penjualan) THEN
		UPDATE tbl_barang SET jml_persediaan =(stok_baru - new.jml_penjualan) where id_barang = new.id_barang;
	END IF;
	
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_prediksi`
--

CREATE TABLE `hasil_prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(45) DEFAULT NULL,
  `bulan_prediksi` varchar(45) DEFAULT NULL,
  `tahun_prediksi` varchar(45) DEFAULT NULL,
  `bobot_1` int(11) DEFAULT NULL,
  `bobot_2` int(11) DEFAULT NULL,
  `bobot_3` int(11) DEFAULT NULL,
  `bobot_4` int(11) DEFAULT NULL,
  `data_aktual` float NOT NULL,
  `hasil_wma` float DEFAULT NULL,
  `hasil_eoq` float DEFAULT NULL,
  `total_error` float DEFAULT NULL,
  `tgl_prediksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `id_jenis_barang` int(11) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `biaya_penyimpanan` int(11) DEFAULT NULL,
  `biaya_pemesanan` int(11) DEFAULT NULL,
  `harga_pembelian` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `jml_persediaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_jenis_barang`, `nama_barang`, `biaya_penyimpanan`, `biaya_pemesanan`, `harga_pembelian`, `harga_jual`, `jml_persediaan`) VALUES
(1, 1, 'Rinso Molto 750ml', 950, 2000, 19000, 23000, 7),
(2, 2, 'Gulaku 1 kg', 650, 2000, 13000, 16500, 5),
(3, 3, 'Aqua 15 L', 800, 2000, 16000, 20000, 5),
(4, 3, 'Le minerale 15 L', 900, 2000, 18000, 22000, 4),
(5, 4, 'LPG 3 Kg', 850, 2000, 17000, 21000, 3),
(8, 5, 'cuka dixi 100 ml', 200, 1000, 4000, 6500, 2),
(9, 6, 'ABC syrup squash delight leci 460 ml', 525, 1000, 10500, 13500, 4),
(10, 6, 'ABC syrup squash delight jeruk 460 ml', 525, 1000, 10500, 13500, 3),
(11, 7, 'Sapu Lidi Panjang Kipas', 400, 1000, 8000, 10500, 2),
(12, 7, 'Sapu Lidi Pendek Kipas', 200, 1000, 4000, 6500, 1),
(13, 7, 'Sapu Kipas', 1000, 1000, 20000, 25000, 3),
(14, 8, 'wipol karbol cemara 200 ml', 210, 1000, 4200, 6500, 1),
(15, 9, 'Autan Lotion anti nyamuk', 500, 1000, 10000, 12500, 3),
(16, 8, 'proclin pemutih 200 ml', 210, 1000, 4200, 6800, 2),
(17, 9, 'bedak salicyl', 260, 1000, 5200, 7500, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_barang`
--

CREATE TABLE `tbl_jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL,
  `nama_jenis_barang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jenis_barang`
--

INSERT INTO `tbl_jenis_barang` (`id_jenis_barang`, `nama_jenis_barang`) VALUES
(1, 'sabun cuci'),
(2, 'makanan'),
(3, 'minuman'),
(4, 'gas'),
(5, 'bumbu dapur'),
(6, 'sirup'),
(7, 'alat rumah tangga'),
(8, 'pembersih'),
(9, 'perawatan kulit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian_barang`
--

CREATE TABLE `tbl_pembelian_barang` (
  `id_pembelian` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_pembelian` int(11) DEFAULT NULL,
  `tgl_pembelian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pembelian_barang`
--

INSERT INTO `tbl_pembelian_barang` (`id_pembelian`, `id_supplier`, `id_barang`, `jml_pembelian`, `tgl_pembelian`) VALUES
(1, 1, 1, 10, '2021-01-01'),
(2, 3, 3, 12, '2021-01-02'),
(3, 3, 4, 9, '2021-01-02'),
(4, 2, 2, 16, '2021-01-03'),
(5, 4, 5, 12, '2021-01-04'),
(6, 3, 3, 11, '2021-01-08'),
(7, 3, 4, 6, '2021-01-08'),
(8, 4, 5, 10, '2021-01-09'),
(9, 1, 1, 10, '2021-01-10'),
(10, 2, 2, 11, '2021-01-11'),
(11, 3, 3, 10, '2021-01-15'),
(12, 3, 4, 8, '2021-01-15'),
(13, 4, 5, 7, '2021-01-16'),
(14, 1, 1, 7, '2021-01-18'),
(15, 2, 2, 6, '2021-01-20'),
(16, 3, 3, 10, '2021-01-23'),
(17, 3, 4, 8, '2021-01-23'),
(18, 4, 5, 8, '2021-01-24'),
(19, 1, 1, 7, '2021-01-26'),
(20, 2, 2, 8, '2021-01-27'),
(21, 3, 4, 12, '2021-02-01'),
(22, 4, 5, 10, '2021-02-01'),
(23, 1, 1, 7, '2021-02-02'),
(24, 2, 2, 11, '2021-02-02'),
(25, 3, 3, 10, '2021-02-05'),
(26, 2, 2, 12, '2021-02-07'),
(27, 4, 5, 10, '2021-02-07'),
(28, 1, 1, 7, '2021-02-08'),
(29, 3, 4, 12, '2021-02-08'),
(30, 3, 3, 11, '2021-02-11'),
(31, 4, 5, 5, '2021-02-14'),
(32, 1, 1, 10, '2021-02-16'),
(33, 2, 2, 12, '2021-02-16'),
(34, 3, 4, 12, '2021-02-18'),
(35, 3, 3, 6, '2021-02-20'),
(36, 4, 5, 5, '2021-02-24'),
(37, 2, 2, 11, '2021-03-01'),
(38, 4, 5, 12, '2021-03-01'),
(39, 3, 3, 13, '2021-03-02'),
(40, 3, 4, 15, '2021-03-02'),
(41, 1, 1, 10, '2021-03-03'),
(42, 2, 2, 11, '2021-03-08'),
(43, 4, 5, 10, '2021-03-08'),
(44, 3, 3, 10, '2021-03-09'),
(45, 3, 4, 10, '2021-03-09'),
(46, 1, 1, 10, '2021-03-10'),
(47, 4, 5, 10, '2021-03-16'),
(48, 3, 3, 7, '2021-03-19'),
(49, 3, 4, 10, '2021-03-19'),
(50, 2, 2, 10, '2021-03-20'),
(51, 1, 1, 8, '2021-03-22'),
(52, 4, 5, 8, '2021-03-24'),
(53, 1, 1, 10, '2021-04-01'),
(54, 2, 2, 11, '2021-04-01'),
(55, 3, 3, 12, '2021-04-02'),
(56, 3, 4, 8, '2021-04-02'),
(57, 4, 5, 10, '2021-04-03'),
(58, 2, 2, 12, '2021-04-07'),
(59, 3, 3, 12, '2021-04-08'),
(60, 3, 4, 10, '2021-04-08'),
(61, 1, 1, 10, '2021-04-09'),
(62, 4, 5, 10, '2021-04-10'),
(63, 2, 2, 13, '2021-04-16'),
(64, 3, 4, 9, '2021-04-16'),
(65, 3, 3, 13, '2021-04-17'),
(66, 4, 5, 11, '2021-04-18'),
(67, 1, 1, 10, '2021-04-19'),
(68, 3, 4, 10, '2021-04-24'),
(69, 3, 3, 13, '2021-04-25'),
(70, 3, 3, 15, '2021-05-01'),
(71, 3, 4, 9, '2021-05-01'),
(72, 2, 2, 10, '2021-05-02'),
(73, 1, 1, 12, '2021-05-03'),
(74, 4, 5, 11, '2021-05-04'),
(75, 3, 4, 11, '2021-05-05'),
(76, 2, 2, 11, '2021-05-08'),
(77, 1, 1, 12, '2021-05-09'),
(78, 4, 5, 10, '2021-05-09'),
(79, 3, 4, 12, '2021-05-12'),
(80, 3, 3, 11, '2021-05-13'),
(81, 2, 2, 11, '2021-05-16'),
(82, 1, 1, 10, '2021-05-17'),
(83, 4, 5, 11, '2021-05-17'),
(84, 3, 4, 13, '2021-05-22'),
(85, 1, 1, 8, '2021-05-25'),
(86, 2, 2, 9, '2021-05-25'),
(87, 4, 5, 5, '2021-05-27'),
(88, 1, 1, 15, '2021-06-01'),
(89, 3, 3, 11, '2021-06-01'),
(90, 3, 4, 10, '2021-06-01'),
(91, 2, 2, 11, '2021-06-02'),
(92, 4, 5, 11, '2021-06-02'),
(93, 3, 3, 10, '2021-06-09'),
(94, 2, 2, 11, '2021-06-10'),
(95, 4, 5, 10, '2021-06-10'),
(96, 3, 4, 11, '2021-06-11'),
(97, 1, 1, 15, '2021-06-14'),
(98, 3, 3, 11, '2021-06-18'),
(99, 3, 4, 12, '2021-06-18'),
(100, 2, 2, 11, '2021-06-19'),
(101, 4, 5, 11, '2021-06-20'),
(102, 3, 3, 6, '2021-06-26'),
(103, 3, 4, 6, '2021-06-26'),
(104, 2, 2, 10, '2021-07-01'),
(105, 3, 3, 12, '2021-07-01'),
(106, 4, 5, 7, '2021-07-01'),
(107, 1, 1, 10, '2021-07-02'),
(108, 3, 4, 8, '2021-07-03'),
(109, 3, 4, 9, '2021-07-06'),
(110, 4, 5, 10, '2021-07-06'),
(111, 1, 1, 10, '2021-07-09'),
(112, 2, 2, 11, '2021-07-09'),
(113, 3, 3, 10, '2021-07-10'),
(114, 4, 5, 7, '2021-07-11'),
(115, 3, 4, 10, '2021-07-12'),
(116, 1, 1, 12, '2021-07-16'),
(117, 2, 2, 10, '2021-07-17'),
(118, 4, 5, 8, '2021-07-17'),
(119, 3, 4, 9, '2021-07-20'),
(120, 3, 3, 9, '2021-07-21'),
(121, 2, 2, 10, '2021-07-25'),
(122, 4, 5, 10, '2021-07-25'),
(123, 1, 1, 11, '2021-08-01'),
(124, 3, 3, 10, '2021-08-01'),
(125, 3, 4, 11, '2021-08-02'),
(126, 2, 2, 12, '2021-08-03'),
(127, 4, 5, 9, '2021-08-04'),
(128, 3, 4, 10, '2021-08-07'),
(129, 1, 1, 10, '2021-08-08'),
(130, 2, 2, 10, '2021-08-08'),
(131, 3, 3, 11, '2021-08-08'),
(132, 4, 5, 13, '2021-08-08'),
(133, 3, 4, 10, '2021-08-14'),
(134, 4, 5, 11, '2021-08-16'),
(135, 2, 2, 9, '2021-08-17'),
(136, 3, 3, 9, '2021-08-17'),
(137, 1, 1, 13, '2021-08-20'),
(138, 4, 5, 13, '2021-08-21'),
(139, 3, 4, 11, '2021-08-22'),
(140, 2, 2, 8, '2021-08-24'),
(141, 3, 3, 11, '2021-08-25'),
(142, 1, 1, 9, '2021-08-26'),
(143, 1, 1, 9, '2021-09-01'),
(144, 2, 2, 8, '2021-09-01'),
(145, 3, 4, 8, '2021-09-01'),
(146, 3, 3, 11, '2021-09-02'),
(147, 4, 5, 9, '2021-09-02'),
(148, 1, 1, 9, '2021-09-07'),
(149, 3, 4, 10, '2021-09-07'),
(150, 2, 2, 7, '2021-09-08'),
(151, 3, 3, 10, '2021-09-09'),
(152, 4, 5, 9, '2021-09-09'),
(153, 1, 1, 10, '2021-09-14'),
(154, 2, 2, 10, '2021-09-14'),
(155, 3, 4, 11, '2021-09-14'),
(156, 3, 3, 10, '2021-09-16'),
(157, 4, 5, 8, '2021-09-17'),
(158, 3, 4, 13, '2021-09-19'),
(159, 2, 2, 12, '2021-09-20'),
(160, 1, 1, 8, '2021-09-23'),
(161, 3, 3, 9, '2021-09-24'),
(162, 3, 4, 4, '2021-09-24'),
(163, 4, 5, 9, '2021-09-25'),
(164, 2, 2, 10, '2021-10-01'),
(165, 3, 3, 10, '2021-10-01'),
(166, 4, 5, 7, '2021-10-02'),
(167, 1, 1, 10, '2021-10-03'),
(168, 3, 4, 9, '2021-10-03'),
(169, 1, 1, 11, '2021-10-08'),
(170, 3, 3, 8, '2021-10-07'),
(171, 3, 4, 11, '2021-10-08'),
(172, 2, 2, 11, '2021-10-09'),
(173, 4, 5, 8, '2021-10-09'),
(174, 3, 3, 9, '2021-10-12'),
(175, 4, 5, 10, '2021-10-14'),
(176, 1, 1, 11, '2021-10-16'),
(177, 2, 2, 11, '2021-10-16'),
(178, 3, 3, 11, '2021-10-20'),
(179, 3, 4, 12, '2021-10-20'),
(180, 2, 2, 12, '2021-10-21'),
(181, 1, 1, 6, '2021-10-25'),
(182, 4, 5, 6, '2021-10-25'),
(183, 2, 2, 10, '2021-11-01'),
(184, 3, 3, 11, '2021-11-01'),
(185, 4, 5, 9, '2021-11-01'),
(186, 1, 1, 12, '2021-11-02'),
(187, 3, 4, 10, '2021-11-03'),
(188, 4, 5, 11, '2021-11-06'),
(189, 3, 3, 11, '2021-11-07'),
(190, 2, 2, 10, '2021-11-09'),
(191, 3, 4, 12, '2021-11-09'),
(192, 1, 1, 10, '2021-11-10'),
(193, 4, 5, 10, '2021-11-14'),
(194, 3, 3, 11, '2021-11-16'),
(195, 2, 2, 11, '2021-11-17'),
(196, 3, 4, 13, '2021-11-19'),
(197, 1, 1, 13, '2021-11-20'),
(198, 4, 5, 13, '2021-11-21'),
(199, 2, 2, 9, '2021-11-23'),
(200, 3, 3, 10, '2021-11-23'),
(201, 2, 2, 7, '2021-11-28'),
(202, 1, 1, 8, '2021-12-01'),
(203, 2, 2, 13, '2021-12-02'),
(204, 3, 3, 15, '2021-12-01'),
(205, 4, 5, 10, '2021-12-01'),
(206, 3, 4, 13, '2021-12-03'),
(207, 4, 5, 11, '2021-12-06'),
(208, 2, 2, 11, '2021-12-07'),
(209, 1, 1, 10, '2021-12-08'),
(210, 3, 4, 11, '2021-12-08'),
(211, 3, 3, 12, '2021-12-09'),
(212, 2, 2, 11, '2021-12-13'),
(213, 1, 1, 10, '2021-12-15'),
(214, 4, 5, 10, '2021-12-15'),
(215, 3, 3, 12, '2021-12-16'),
(216, 3, 4, 13, '2021-12-18'),
(217, 2, 2, 14, '2021-12-21'),
(218, 3, 3, 14, '2021-12-22'),
(219, 4, 5, 7, '2021-12-22'),
(220, 1, 1, 11, '2021-12-24'),
(221, 3, 4, 8, '2021-12-26'),
(222, 7, 8, 4, '2021-01-05'),
(223, 7, 8, 4, '2021-02-04'),
(224, 7, 8, 7, '2021-03-01'),
(225, 7, 8, 4, '2021-04-07'),
(226, 7, 8, 4, '2021-05-03'),
(227, 7, 8, 5, '2021-07-03'),
(228, 7, 8, 5, '2021-08-01'),
(229, 7, 8, 5, '2021-09-08'),
(230, 7, 8, 5, '2021-10-02'),
(231, 7, 8, 5, '2021-11-03'),
(232, 7, 8, 10, '2021-12-03'),
(233, 8, 9, 5, '2021-01-03'),
(234, 8, 9, 5, '2021-01-21'),
(235, 8, 9, 7, '2021-04-01'),
(236, 8, 9, 10, '2021-05-01'),
(237, 8, 9, 3, '2021-06-03'),
(238, 8, 9, 7, '2021-07-04'),
(239, 8, 9, 6, '2021-08-02'),
(240, 8, 9, 4, '2021-09-04'),
(241, 8, 9, 3, '2021-10-01'),
(242, 8, 9, 7, '2021-11-03'),
(243, 10, 11, 7, '2021-01-04'),
(244, 10, 11, 5, '2021-02-05'),
(245, 10, 11, 5, '2021-03-04'),
(246, 10, 11, 5, '2021-04-02'),
(247, 10, 11, 7, '2021-05-03'),
(248, 10, 11, 5, '2021-06-07'),
(249, 10, 11, 5, '2021-07-02'),
(250, 10, 11, 5, '2021-08-04'),
(251, 10, 11, 5, '2021-09-01'),
(252, 10, 11, 3, '2021-10-06'),
(253, 10, 11, 4, '2021-11-02'),
(254, 10, 11, 3, '2021-12-01'),
(255, 10, 12, 7, '2021-01-03'),
(256, 10, 12, 5, '2021-02-12'),
(257, 10, 12, 4, '2021-04-08'),
(258, 10, 12, 5, '2021-05-05'),
(259, 10, 12, 4, '2021-06-01'),
(260, 10, 12, 4, '2021-07-04'),
(261, 10, 12, 5, '2021-08-05'),
(262, 10, 12, 5, '2021-09-03'),
(263, 10, 12, 5, '2021-10-03'),
(264, 10, 12, 4, '2021-11-03'),
(265, 10, 12, 5, '2021-12-05'),
(266, 10, 13, 5, '2021-01-05'),
(267, 10, 13, 4, '2021-02-06'),
(268, 10, 13, 3, '2021-03-01'),
(269, 10, 13, 3, '2021-04-13'),
(270, 10, 13, 5, '2021-05-08'),
(271, 10, 13, 3, '2021-06-02'),
(272, 10, 13, 3, '2021-07-05'),
(273, 10, 13, 3, '2021-08-02'),
(274, 10, 13, 4, '2021-09-02'),
(275, 10, 13, 3, '2021-10-05'),
(276, 10, 13, 4, '2021-11-02'),
(277, 10, 13, 3, '2021-12-01'),
(278, 8, 10, 7, '2021-01-03'),
(279, 8, 10, 7, '2021-01-19'),
(280, 8, 10, 5, '2021-03-03'),
(281, 8, 10, 7, '2021-04-01'),
(282, 8, 10, 7, '2021-04-10'),
(283, 8, 10, 7, '2021-05-01'),
(284, 8, 10, 7, '2021-05-17'),
(285, 8, 10, 5, '2021-06-10'),
(286, 8, 10, 6, '2021-07-05'),
(287, 8, 10, 7, '2021-07-22'),
(288, 8, 10, 8, '2021-09-05'),
(289, 8, 10, 5, '2021-11-02'),
(290, 8, 10, 7, '2021-12-01'),
(291, 9, 14, 10, '2021-01-02'),
(292, 9, 14, 10, '2021-02-06'),
(293, 9, 14, 10, '2021-01-14'),
(294, 9, 14, 10, '2021-01-23'),
(295, 9, 14, 10, '2021-02-03'),
(296, 9, 14, 10, '2021-02-12'),
(297, 9, 14, 10, '2021-02-19'),
(298, 9, 14, 5, '2021-02-25'),
(299, 9, 14, 10, '2021-03-04'),
(300, 9, 14, 10, '2021-03-13'),
(301, 9, 14, 8, '2021-03-19'),
(302, 9, 14, 10, '2021-04-03'),
(303, 9, 14, 5, '2021-04-14'),
(304, 9, 14, 10, '2021-05-02'),
(305, 9, 14, 10, '2021-05-16'),
(306, 9, 14, 10, '2021-05-24'),
(307, 9, 14, 10, '2021-06-04'),
(308, 9, 14, 10, '2021-06-17'),
(309, 9, 14, 10, '2021-06-23'),
(310, 9, 14, 10, '2021-07-01'),
(311, 9, 14, 10, '2021-07-09'),
(312, 9, 14, 10, '2021-07-18'),
(313, 9, 14, 10, '2021-07-25'),
(314, 9, 14, 10, '2021-08-01'),
(315, 9, 14, 10, '2021-08-12'),
(316, 9, 14, 10, '2021-08-18'),
(317, 9, 14, 10, '2021-09-02'),
(318, 9, 14, 10, '2021-09-12'),
(319, 9, 14, 10, '2021-09-20'),
(320, 9, 14, 4, '2021-09-29'),
(321, 9, 14, 10, '2021-10-07'),
(322, 9, 14, 10, '2021-10-19'),
(323, 9, 14, 5, '2021-10-28'),
(324, 9, 14, 10, '2021-11-02'),
(325, 9, 14, 10, '2021-11-13'),
(326, 9, 14, 9, '2021-11-23'),
(327, 9, 14, 6, '2021-12-01'),
(328, 9, 14, 5, '2021-12-10'),
(329, 9, 14, 3, '2021-12-26'),
(330, 11, 15, 6, '2021-01-02'),
(331, 11, 15, 6, '2021-01-15'),
(332, 11, 15, 10, '2021-02-01'),
(333, 11, 15, 10, '2021-02-19'),
(334, 11, 15, 5, '2021-03-05'),
(335, 11, 15, 5, '2021-03-18'),
(336, 11, 15, 10, '2021-04-01'),
(337, 11, 15, 5, '2021-04-24'),
(338, 11, 15, 5, '2021-05-02'),
(339, 11, 15, 10, '2021-05-13'),
(340, 11, 15, 10, '2021-06-03'),
(341, 11, 15, 7, '2021-06-11'),
(342, 11, 15, 10, '2021-07-05'),
(343, 11, 15, 10, '2021-07-16'),
(344, 11, 15, 10, '2021-07-26'),
(345, 11, 15, 10, '2021-08-02'),
(346, 11, 15, 10, '2021-08-11'),
(347, 11, 15, 10, '2021-08-16'),
(348, 11, 15, 8, '2021-08-25'),
(349, 11, 15, 10, '2021-09-03'),
(350, 11, 15, 10, '2021-09-14'),
(351, 11, 15, 5, '2021-09-27'),
(352, 11, 15, 10, '2021-10-08'),
(353, 11, 15, 8, '2021-10-19'),
(354, 11, 15, 10, '2021-11-02'),
(355, 11, 15, 8, '2021-11-18'),
(356, 11, 15, 10, '2021-12-01'),
(357, 11, 15, 10, '2021-12-10'),
(358, 11, 15, 10, '2021-12-18'),
(359, 12, 16, 10, '2021-01-01'),
(360, 12, 16, 9, '2021-01-12'),
(361, 12, 16, 9, '2021-01-22'),
(362, 12, 16, 10, '2021-02-01'),
(363, 12, 16, 10, '2021-02-12'),
(364, 12, 16, 5, '2021-03-03'),
(365, 12, 16, 10, '2021-03-17'),
(366, 12, 16, 10, '2021-04-01'),
(367, 12, 16, 10, '2021-04-11'),
(368, 12, 16, 7, '2021-04-20'),
(369, 12, 16, 10, '2021-05-09'),
(370, 12, 16, 10, '2021-05-20'),
(371, 12, 16, 10, '2021-06-04'),
(372, 12, 16, 10, '2021-06-20'),
(373, 12, 16, 10, '2021-07-01'),
(374, 12, 16, 10, '2021-07-14'),
(375, 12, 16, 7, '2021-08-02'),
(376, 12, 16, 6, '2021-08-19'),
(377, 12, 16, 10, '2021-09-01'),
(378, 12, 16, 8, '2021-09-14'),
(379, 12, 16, 10, '2021-10-03'),
(380, 12, 16, 10, '2021-10-11'),
(381, 12, 16, 10, '2021-11-01'),
(382, 12, 16, 10, '2021-11-14'),
(383, 12, 16, 5, '2021-11-23'),
(384, 12, 16, 10, '2021-12-04'),
(385, 12, 16, 10, '2021-12-14'),
(386, 12, 16, 8, '2021-12-20'),
(387, 13, 17, 7, '2021-01-03'),
(388, 13, 17, 7, '2021-02-03'),
(389, 13, 17, 5, '2021-03-01'),
(390, 13, 17, 10, '2021-05-02'),
(391, 13, 17, 6, '2021-07-02'),
(392, 13, 17, 10, '2021-08-01'),
(393, 13, 17, 6, '2021-10-04'),
(394, 13, 17, 5, '2021-11-06'),
(395, 13, 17, 7, '2021-12-02');

--
-- Trigger `tbl_pembelian_barang`
--
DELIMITER $$
CREATE TRIGGER `before_delete_tbl_pembelian` BEFORE DELETE ON `tbl_pembelian_barang` FOR EACH ROW BEGIN
	DECLARE stok_lama INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = old.id_barang);
	UPDATE tbl_barang SET jml_persediaan =(stok_lama - old.jml_pembelian) where id_barang = old.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_insert_tbl_pembelian` BEFORE INSERT ON `tbl_pembelian_barang` FOR EACH ROW BEGIN
	DECLARE stok_lama INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = new.id_barang);
	
	if stok_lama IS NULL THEN
		UPDATE tbl_barang SET jml_persediaan =new.jml_pembelian where id_barang = new.id_barang;
	ELSE
		UPDATE tbl_barang SET jml_persediaan =(stok_lama + new.jml_pembelian) where id_barang = new.id_barang;

	END IF;
	
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_tbl_pembelian` BEFORE UPDATE ON `tbl_pembelian_barang` FOR EACH ROW BEGIN
	DECLARE stok_lama INT;
	DECLARE stok_baru INT;
	set stok_lama = (select jml_persediaan from tbl_barang where id_barang = new.id_barang);
	set stok_baru = stok_lama - old.jml_pembelian;
	
		UPDATE tbl_barang SET jml_persediaan =(stok_baru + new.jml_pembelian) where id_barang = new.id_barang;

	
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_penjualan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `id_user`, `tgl_penjualan`) VALUES
(1, 1, '2021-01-31'),
(2, 1, '2021-01-31'),
(3, 1, '2021-01-31'),
(4, 1, '2021-01-31'),
(5, 1, '2021-01-31'),
(6, 1, '2021-02-28'),
(7, 1, '2021-02-28'),
(8, 1, '2021-02-28'),
(9, 1, '2021-02-23'),
(10, 1, '2021-02-28'),
(11, 1, '2021-03-31'),
(12, 1, '2021-03-31'),
(13, 1, '2021-03-31'),
(14, 1, '2021-03-31'),
(15, 1, '2021-03-31'),
(16, 1, '2021-04-30'),
(17, 1, '2021-04-30'),
(18, 1, '2021-04-30'),
(19, 1, '2021-04-30'),
(20, 1, '2021-04-30'),
(21, 1, '2021-05-31'),
(22, 1, '2021-05-31'),
(23, 1, '2021-05-31'),
(24, 1, '2021-05-31'),
(25, 1, '2021-05-31'),
(26, 1, '2021-06-30'),
(27, 1, '2021-06-30'),
(28, 1, '2021-06-30'),
(29, 1, '2021-06-30'),
(30, 1, '2021-06-30'),
(31, 1, '2021-07-31'),
(32, 1, '2021-07-31'),
(33, 1, '2021-07-31'),
(34, 1, '2021-07-31'),
(35, 1, '2021-07-31'),
(36, 1, '2021-08-31'),
(37, 1, '2021-08-31'),
(38, 1, '2021-08-31'),
(39, 1, '2021-08-31'),
(40, 1, '2021-08-31'),
(41, 1, '2021-09-30'),
(42, 1, '2021-09-30'),
(43, 1, '2021-09-30'),
(44, 1, '2021-09-30'),
(45, 1, '2021-09-30'),
(46, 1, '2021-10-31'),
(47, 1, '2021-10-31'),
(48, 1, '2021-10-31'),
(49, 1, '2021-10-31'),
(50, 1, '2021-10-31'),
(51, 1, '2021-11-30'),
(52, 1, '2021-11-30'),
(53, 1, '2021-11-30'),
(54, 1, '2021-11-30'),
(55, 1, '2021-11-30'),
(56, 1, '2021-12-31'),
(57, 1, '2021-12-31'),
(58, 1, '2021-12-31'),
(59, 1, '2021-12-31'),
(60, 1, '2021-12-31'),
(63, 1, '2021-01-31'),
(64, 1, '2021-02-28'),
(65, 1, '2021-03-31'),
(66, 1, '2021-04-30'),
(67, 1, '2021-05-31'),
(68, 1, '2021-06-30'),
(69, 1, '2021-07-31'),
(70, 1, '2021-08-31'),
(71, 1, '2021-09-30'),
(72, 1, '2021-10-31'),
(73, 1, '2021-11-30'),
(74, 1, '2021-12-31'),
(75, 1, '2021-01-31'),
(76, 1, '2021-02-28'),
(77, 1, '2021-03-31'),
(78, 1, '2021-04-30'),
(79, 1, '2021-05-31'),
(80, 1, '2021-06-30'),
(81, 1, '2021-07-31'),
(82, 1, '2021-08-31'),
(83, 1, '2021-09-30'),
(84, 1, '2021-10-31'),
(85, 1, '2021-11-30'),
(86, 1, '2021-12-31'),
(87, 1, '2021-01-31'),
(88, 1, '2021-02-28'),
(89, 1, '2021-03-31'),
(90, 1, '2021-04-30'),
(91, 1, '2021-05-31'),
(92, 1, '2021-06-30'),
(93, 1, '2021-07-31'),
(94, 1, '2021-08-31'),
(95, 1, '2021-09-30'),
(96, 1, '2021-10-31'),
(97, 1, '2021-11-30'),
(98, 1, '2021-12-31'),
(99, 1, '2021-01-31'),
(100, 1, '2021-02-28'),
(101, 1, '2021-03-31'),
(102, 1, '2021-04-30'),
(103, 1, '2021-05-31'),
(104, 1, '2021-06-30'),
(105, 1, '2021-07-31'),
(106, 1, '2021-08-31'),
(107, 1, '2021-09-30'),
(108, 1, '2021-10-31'),
(109, 1, '2021-11-30'),
(110, 1, '2021-12-31'),
(111, 1, '2021-01-31'),
(112, 1, '2021-02-28'),
(113, 1, '2021-03-31'),
(114, 1, '2021-04-30'),
(115, 1, '2021-05-31'),
(116, 1, '2021-06-30'),
(117, 1, '2021-07-31'),
(118, 1, '2021-08-31'),
(119, 1, '2021-09-30'),
(120, 1, '2021-10-31'),
(121, 1, '2021-11-30'),
(122, 1, '2021-12-31'),
(123, 1, '2021-01-31'),
(124, 1, '2021-02-28'),
(125, 1, '2021-03-31'),
(126, 1, '2021-04-30'),
(127, 1, '2021-05-31'),
(128, 1, '2021-06-30'),
(129, 1, '2021-07-31'),
(130, 1, '2021-08-31'),
(131, 1, '2021-09-30'),
(132, 1, '2021-10-31'),
(133, 1, '2021-11-30'),
(134, 1, '2021-12-31'),
(135, 1, '2021-01-31'),
(136, 1, '2021-02-28'),
(137, 1, '2021-03-31'),
(138, 1, '2021-04-30'),
(139, 1, '2021-05-31'),
(140, 1, '2021-06-30'),
(141, 1, '2021-07-31'),
(142, 1, '2021-08-31'),
(143, 1, '2021-09-30'),
(144, 1, '2021-10-31'),
(145, 1, '2021-11-30'),
(146, 1, '2021-12-31'),
(147, 1, '2021-01-31'),
(148, 1, '2021-02-28'),
(149, 1, '2021-03-31'),
(150, 1, '2021-04-30'),
(151, 1, '2021-05-31'),
(152, 1, '2021-06-30'),
(153, 1, '2021-07-31'),
(154, 1, '2021-08-31'),
(155, 1, '2021-09-30'),
(156, 1, '2021-10-31'),
(157, 1, '2021-11-30'),
(158, 1, '2021-12-31'),
(159, 1, '2021-01-31'),
(160, 1, '2021-02-28'),
(161, 1, '2021-03-31'),
(162, 1, '2021-04-30'),
(163, 1, '2021-05-31'),
(164, 1, '2021-06-30'),
(165, 1, '2021-07-31'),
(166, 1, '2021-08-31'),
(167, 1, '2021-09-30'),
(168, 1, '2021-10-31'),
(169, 1, '2021-11-30'),
(170, 1, '2021-12-31'),
(171, 1, '2021-01-31'),
(172, 1, '2021-02-28'),
(173, 1, '2021-03-31'),
(174, 1, '2021-04-30'),
(175, 1, '2021-05-31'),
(176, 1, '2021-06-30'),
(177, 1, '2021-07-31'),
(178, 1, '2021-08-31'),
(179, 1, '2021-09-30'),
(180, 1, '2021-10-31'),
(181, 1, '2021-11-30'),
(182, 1, '2021-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) DEFAULT NULL,
  `alamat_supplier` varchar(60) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telp`) VALUES
(1, 'Endah ', 'Jl Raya Popoh no 35, Campurdarat, Kabupaten Tulungagung ', '-'),
(2, 'Santo', 'Jl Pagutan no 25, Campurdarat, kabupaten Tulungagung', '-'),
(3, 'Titin', 'Jl Kidul no 43 Campurdarat, Kabupaten Tulungagung', '-'),
(4, 'Via', 'Jl Raya Sodo no 16 Campurdarat, Kabupaten Tulungagung', '-'),
(7, 'Yati', 'Jl Raya Popoh, Campurdarat, Kabupaten Tulungagung', ''),
(8, 'Sri', 'Jl. Kanigoro, Kec. Campurdarat, Kabupaten Tulungagung', ''),
(9, 'Parianto', 'Jl. Raya Waung, Boyolangu, Kabupaten Tulungagung', ''),
(10, 'Jono', 'Jl Mbah Dawam, Kabupaten Tulunganggung', ''),
(11, 'Kustiati', 'Jl Pagutan no 57, Kabupaten Tulungagung', ''),
(12, 'Ambar', 'Jl Sidomakmur, kecamatan Pakel, Kabupaten Tulungagung', ''),
(13, 'Sukirno', 'Jl Dusun Banyuireng, Kecamatan Pakel, Kabupaten Tulungagung', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(350) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', '$2y$10$5PG6a.exVg8/gyQ47rbXLORsgjwS.D7ujA8uvZBAVEUuERA3gybfO', 'Admin', 'Aktif'),
(2, 'davila', '$2y$10$mtbEpgUzygz/4ICGH/.g1OLsN4b/gtlPOG/NHsAyLi.RYLYfDb5sG', 'Admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_detail_penjualan_tbl_penjualan1_idx` (`id_penjualan`),
  ADD KEY `fk_detail_penjualan_tbl_barang1_idx` (`id_barang`);

--
-- Indeks untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  ADD PRIMARY KEY (`id_prediksi`),
  ADD KEY `fk_hasil_prediksi_tbl_user1_idx` (`id_user`),
  ADD KEY `fk_hasil_prediksi_tbl_barang1_idx` (`id_barang`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_tbl_barang_tbl_jenis_barang1_idx` (`id_jenis_barang`);

--
-- Indeks untuk tabel `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indeks untuk tabel `tbl_pembelian_barang`
--
ALTER TABLE `tbl_pembelian_barang`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `fk_tbl_pembelian_barang_tbl_supplier1_idx` (`id_supplier`),
  ADD KEY `fk_tbl_pembelian_barang_tbl_barang1_idx` (`id_barang`);

--
-- Indeks untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_tbl_penjualan_tbl_user_idx` (`id_user`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  MODIFY `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembelian_barang`
--
ALTER TABLE `tbl_pembelian_barang`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `fk_detail_penjualan_tbl_barang1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_penjualan_tbl_penjualan1` FOREIGN KEY (`id_penjualan`) REFERENCES `tbl_penjualan` (`id_penjualan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `hasil_prediksi`
--
ALTER TABLE `hasil_prediksi`
  ADD CONSTRAINT `fk_hasil_prediksi_tbl_barang1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hasil_prediksi_tbl_user1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `fk_tbl_barang_tbl_jenis_barang1` FOREIGN KEY (`id_jenis_barang`) REFERENCES `tbl_jenis_barang` (`id_jenis_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_pembelian_barang`
--
ALTER TABLE `tbl_pembelian_barang`
  ADD CONSTRAINT `fk_tbl_pembelian_barang_tbl_barang1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_pembelian_barang_tbl_supplier1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id_supplier`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `fk_tbl_penjualan_tbl_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
