-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2020 pada 11.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rizkicomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, '@admin.com', 'admin', 'rizki ramadhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_pengiriman`
--

CREATE TABLE `biaya_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `kabupaten_kota_provinsi` varchar(50) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL,
  `metode_pengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya_pengiriman`
--

INSERT INTO `biaya_pengiriman` (`id_pengiriman`, `kabupaten_kota_provinsi`, `ongkos_kirim`, `metode_pengiriman`) VALUES
(1, '-', 0, '- '),
(2, 'Kabupaten Aceh Barat, Aceh   ', 71000, 'JNE (3-6 hari)'),
(3, 'Kabupaten Aceh Barat Daya, Aceh ', 71000, 'JNE (3-6 hari)'),
(4, 'Kabupaten Aceh Besar, Aceh ', 71000, 'JNE (3-6 hari)'),
(5, 'Kabupaten Aceh Jaya, Aceh ', 71000, 'JNE (3-6 hari)'),
(6, 'Kabupaten Aceh Selatan, Aceh ', 71000, 'JNE (3-6 hari)'),
(7, 'Kabupaten Aceh Singkil, Aceh ', 71000, 'JNE (3-6 hari)'),
(8, 'Kabupaten Aceh Tamiang, Aceh ', 71000, 'JNE (3-6 hari)'),
(9, 'Kabupaten Aceh Tengah, Aceh ', 71000, 'JNE (3-6 hari) '),
(10, 'Kabupaten Aceh Tenggara, Aceh  ', 71000, 'JNE (3-6 hari)'),
(11, 'Kabupaten Aceh Timur, Aceh ', 71000, 'JNE (3-6 hari)'),
(12, 'Kabupaten Aceh Utara ', 71000, 'JNE (3-6 hari)'),
(13, 'Kabupaten Bener Meriah, Aceh ', 71000, 'JNE (3-6 hari)'),
(14, 'Kabupaten Bireuen, Aceh ', 71000, 'JNE (3-6 hari)'),
(15, 'Kabupaten Gayo Lues, Aceh ', 71000, 'JNE (3-6 hari)'),
(16, 'Kabupaten Nagan Raya, Aceh ', 71000, 'JNE (3-6 hari)'),
(17, 'Kabupaten Pidie, Aceh ', 71000, 'JNE (3-6 hari)'),
(18, 'Kabupaten Pidie Jaya, Aceh ', 71000, 'JNE (3-6 hari)'),
(19, 'Kabupaten Simeulue, Aceh  ', 76000, 'JNE (10+hari)'),
(20, 'Kota Banda Aceh, Aceh', 45000, 'JNE (1-2 hari)'),
(21, 'Kota Langsa, Aceh', 56000, 'JNE (2-3 hari)'),
(22, 'Kota Lhokseumawe, Aceh', 56000, 'JNE (2-3 hari)'),
(23, 'Kota Sabang, Aceh', 56000, 'JNE (2-3 hari)'),
(24, 'Kota Subulussalam, Aceh', 56000, 'JNE (2-3 hari)'),
(25, 'Kabupaten Badung, Bali', 28000, 'JNE (1-2 hari)'),
(26, 'Kabupaten Bangli, Bali', 36000, 'JNE (3-6 hari)'),
(27, 'Kabupaten Buleleng, Bali', 36000, 'JNE (3-6 hari)'),
(28, 'Kabupaten Gianyar, Bali', 36000, 'JNE (3-6 hari)'),
(29, 'Kabupaten Jembrana, Bali', 36000, 'JNE (3-6 hari)'),
(30, 'Kabupaten Karangasem, Bali', 36000, 'JNE (3-6 hari)'),
(31, 'Kabupaten Klungkung, Bali', 36000, 'JNE (3-6 hari)'),
(32, 'Kabupaten Tabanan, Bali', 36000, 'JNE (3-6 hari)'),
(33, 'Kota Denpasar, Bali', 28000, 'JNE (1-2 hari)'),
(34, 'Kota Denpasar Utara, Bali', 28000, 'JNE (1-2 hari)'),
(35, 'Kabupaten Lebak, Banten', 16000, 'JNE (3-6 hari)'),
(36, 'Kabupaten Pandeglang, Banten', 16000, 'JNE (3-6 hari)'),
(37, 'Kabupaten Serang, Banten', 16000, 'JNE (3-6 hari)'),
(38, 'Kabupaten Tangerang, Banten', 9000, 'JNE (1-2 hari)'),
(39, 'Kota Cilegon, Banten', 10000, 'JNE (1-2 hari)'),
(40, 'Kota Serang, Banten', 10000, 'JNE (1-2 hari)'),
(41, 'Kota Tangerang, Banten', 9000, 'JNE (1-2 hari)'),
(42, 'Kota Tangerang Selatan, Banten', 9000, 'JNE (1-2 hari)'),
(43, 'Kabupaten Bengkulu Selatan, Bengkulu', 47000, 'JNE (3-6 hari)'),
(44, 'Kabupaten Bengkulu Tengah, Bengkulu', 47000, 'JNE (3-6 hari)'),
(45, 'Kabupaten Bengkulu Utara, Bengkulu', 47000, 'JNE (3-6 hari)'),
(46, 'Kabupaten Kaur, Bengkulu', 47000, 'JNE (3-6 hari)'),
(47, 'Kabupaten Kepahiang, Bengkulu ', 47000, 'JNE (3-6 hari)'),
(48, 'Kabupaten Lebong, Bengkulu ', 47000, 'JNE (3-6 hari)'),
(49, 'Kabupaten Mukomuko, Bengkulu', 47000, 'JNE (3-6 hari)'),
(50, 'Kabupaten Rejang Lebong, Bengkulu', 47000, 'JNE (3-6 hari)'),
(51, 'Kabupaten Seluma, Bengkulu', 47000, 'JNE (3-6 hari)'),
(52, 'Kota Bengkulu, Bengkulu', 38000, 'JNE (1-2 hari)'),
(53, 'Kabupaten Kepulauan Seribu, DKI Jakar ', 9000, 'JNE (1-2 hari) '),
(54, 'Kota Jakarta Barat, DKI Jakarta ', 9000, 'JNE (1-2 hari) '),
(55, 'Kota Jakarta Pusat, DKI Jakarta ', 9000, 'JNE (1-2 hari) '),
(56, 'Kota Jakarta Selatan, DKI Jakarta', 9000, 'JNE (1-2 hari)'),
(57, 'Kota Jakarta Timur, DKI Jakarta', 9000, 'JNE (1-2 hari)'),
(58, 'Kota Jakarta Utara, DKI Jakarta', 9000, 'JNE (1-2 hari)'),
(59, 'Kabupaten Boalemo, Gorontalo', 74000, 'JNE (5-7 hari)'),
(60, 'Kabupaten Bone Bolango, Gorontalo', 74000, 'JNE (5-7 hari)'),
(61, 'Kabupaten Gorontalo, Gorontalo', 74000, 'JNE (5-7 hari)'),
(62, 'Kabupaten Gorontalo Utara, Gorontalo', 74000, 'JNE (5-7 hari)'),
(63, 'Kabupaten Pohuwato, Gorontalo', 74000, 'JNE (5-7 hari)'),
(64, 'Kota Gorontalo, Gorontalo', 65000, 'JNE (2-3 hari)'),
(65, 'Kabupaten Batanghari, Jambi', 47000, 'JNE (3-6 hari)'),
(66, 'Kabupaten Bungo, Jambi', 47000, 'JNE (3-6 hari)'),
(67, 'Kabupaten Kerinci, Jambi', 47000, 'JNE (3-6 hari)'),
(68, 'Kabupaten Merangin, Jambi', 47000, 'JNE (3-6 hari)'),
(69, 'Kabupaten Muaro Jambi, Jambi', 47000, 'JNE (3-6 hari)'),
(70, 'Kabupaten Sarolangun, Jambi', 47000, 'JNE (3-6 hari)'),
(71, 'Kabupaten Tanjung Jabung Barat, Jambi', 45000, 'JNE (3-6 hari)'),
(72, 'Kabupaten Tanjung Jabung Timur, Jambi', 47000, 'JNE (3-6 hari)'),
(73, 'Kabupaten Tebo, Jambi', 47000, 'JNE (3-6 hari)'),
(74, 'Kota Jambi, Jambi', 28000, 'JNE (1-2 hari)'),
(75, 'Kota Sungai Penuh, jambi', 47000, 'JNE (3-6 hari)'),
(76, 'Kabupaten Bandung, Jawa Barat', 11000, 'JNE (1-2 hari)'),
(77, 'Kabupaten Bandung Barat, Jawa Barat', 11000, 'JNE (1-2 hari)'),
(78, 'Kabupaten Bekasi, Jawa Barat', 9000, 'JNE (1-2 hari)'),
(79, 'Kabupaten Bogor, Jawa Barat', 9000, 'JNE (1-2 hari)'),
(80, 'Kabupaten Ciamis, Jawa Barat', 19000, 'JNE (3-6 hari)'),
(81, 'Kabupaten Cianjur, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(82, 'Kabupaten Cirebon, Jawa Barat', 15000, 'JNE (2-3 hari)'),
(83, 'Kabupaten Garut, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(84, 'Kabupaten Indramayu, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(85, 'Kabupaten Karawang, Jawa Barat', 15000, 'JNE (2-3 hari)'),
(86, 'Kabupaten Kuningan, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(87, 'Kabupaten Majalengka, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(88, 'Kabupaten Pangandaran, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(89, 'Kabupaten Purwakarta, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(90, 'Kabupaten Subang, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(91, 'Kabupaten Sukabumi, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(92, 'Kabupaten Sumedang, Jawa Barat', 20000, 'JNE (3-6 hari)'),
(93, 'Kabupaten Tasikmalaya, Jawa Barat', 19000, 'JNE (3-6 hari)'),
(94, 'Kota Bandung, Jawa Barat', 11000, 'JNE (1-2 hari)'),
(95, 'Kota Banjar, Jawa Barat ', 19000, 'JNE (3-6 hari)'),
(96, 'Kota Bekasi, Jawa Barat', 9000, 'JNE (1-2 hari)'),
(97, 'Kota Bogor, Jawa Barat', 9000, 'JNE (1-2 hari)'),
(98, 'Kota Cimahi, Jawa Barat', 11000, 'JNE (1-2 hari)'),
(99, 'Kota Cirebon, Jawa Barat', 11000, 'JNE (1-2 hari)'),
(100, 'Kota Depok, Jawa Barat', 9000, 'JNE (1-2 hari)'),
(101, 'Kota Sukabumi, Jawa Barat', 10000, 'JNE (1-2 hari)'),
(102, 'Kota Tasikmalaya, Jawa Barat', 14000, 'JNE (2-3 hari)'),
(103, 'Kabupaten Banjarnegara, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(104, 'Kabupaten Banyumas, Jawa Tengah', 18000, 'JNE (3-6 hari)'),
(105, 'Kabupaten Batang, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(106, 'Kabupaten Blora, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(107, 'Kabupaten Boyolali, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(108, 'Kabupaten Brebes, Jawa Tengah', 23000, 'JNE (3-6 hari)'),
(109, 'Kabupaten Cilacap, Jawa Tengah', 23000, 'JNE (3-6 hari)'),
(110, 'Kabupaten Demak, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(111, 'Kabupaten Grobogan, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(112, 'Kabupaten Jepara, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(113, 'Kabupaten Karanganyar, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(114, 'Kabupaten Kebumen, Jawa Tengah', 29000, 'JNE (3-6 hari)'),
(115, 'Kabupaten Kendal, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(116, 'Kabupaten Klaten, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(117, 'Kabupaten Kudus, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(118, 'Kabupaten Magelang, Jawa Tengah', 20000, 'JNE (2-3 hari)'),
(119, 'Kabupaten Pati, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(120, 'Kabupaten Pekalongan, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(121, 'Kabupaten Pemalang, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(122, 'Kabupaten Purbalingga, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(123, 'Kabupaten Purworejo, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(124, 'Kabupaten Rembang, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(125, 'Kabupaten Semarang, Jawa Tengah', 18000, 'JNE (1-2 hari)'),
(126, 'Kabupaten Sragen, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(127, 'Kabupaten Sukoharjo, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(128, 'Kabupaten Tegal, Jawa Tengah', 18000, 'JNE (3-6 hari)'),
(129, 'Kabupaten Temanggung, Jawa Tengah', 29000, 'JNE (3-6 hari)'),
(130, 'Kabupaten Wonogiri, Jawa Tengah', 27000, 'JNE (3-6 hari)'),
(131, 'Kabupaten Wonosobo, Jawa Tengah', 29000, 'JNE (3-6 hari)'),
(132, 'Kota Magelang, Jawa Tengah', 20000, 'JNE (1-2 hari)'),
(133, 'Kota Pekalongan, Jawa Tengah', 22000, 'JNE (2-3 hari)'),
(134, 'Kota Salatiga, Jawa Tengah', 22000, 'JNE (2-3 hari)'),
(135, 'Kota Semarang, Jawa Tengah', 18000, 'JNE (1-2 hari)'),
(136, 'Kota Surakarta, Jawa Tengah', 18000, 'JNE (1-2 hari)'),
(137, 'Kota Tegal, Jawa Tengah', 16000, 'JNE (2-3 hari)'),
(138, 'Kabupaten Bangkalan, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(139, 'Kabupaten Banyuwangi, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(140, 'Kabupaten Blitar, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(141, 'Kabupaten Bojonegoro, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(142, 'Kabupaten Bondowoso, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(143, 'Kabupaten Gresik, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(144, 'Kabupaten Jember, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(145, 'Kabupaten Jombang, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(146, 'Kabupaten Kediri, Jawa Timur', 28000, 'JNE (2-4 hari)'),
(147, 'Kabupaten Lamongan, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(148, 'Kabupaten Lumajang, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(149, 'Kabupaten Madiun, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(150, 'Kabupaten Magetan, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(151, 'Kabupaten Malang, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(152, 'Kabupaten Mojokerto, Jawa Timur', 31000, 'JNE (2-3 hari)'),
(153, 'Kabupaten Nganjuk, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(154, 'Kabupaten Ngawi, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(155, 'Kabupaten Pacitan, Jawa Timur ', 31000, 'JNE (3-6 hari)'),
(156, 'Kabupaten Pamekasan, Jawa Timur  ', 27000, 'JNE (3-6 hari)'),
(157, 'Kabupaten Pasuruan, Jawa Timur', 28000, 'JNE (2-3 hari)'),
(158, 'Kabupaten Ponorogo, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(159, 'Kabupaten Probolinggo, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(160, 'Kabupaten Sampang, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(161, 'Kabupaten Sidoarjo, Jawa Timur', 19000, 'JNE (2-3 hari)'),
(162, 'Kabupaten Situbondo, Jawa Timur', 31000, 'JNE (3-6 hari)'),
(163, 'Kabupaten Sumenep, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(164, 'Kabupaten Trenggalek, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(165, 'Kabupaten Tuban, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(166, 'Kabupaten Tulungagung, Jawa Timur', 27000, 'JNE (3-6 hari)'),
(167, 'Kota Batu, Jawa Timur', 26000, 'JNE (2-3 hari)'),
(168, 'Kota Blitar, Jawa Timur', 26000, 'JNE (2-3 hari)'),
(169, 'Kota Kediri, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(170, 'Kota Madiun, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(171, 'Kota Malang, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(172, 'Kota Mojokerto, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(173, 'Kota Pasuruan, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(174, 'Kota Probolinggo, Jawa Timur', 22000, 'JNE (1-2 hari)'),
(175, 'Kota Surabaya, Jawa Timur', 19000, 'JNE (1-2 hari)'),
(176, 'Kabupaten Bengkayang, Kalimantan Barat', 50000, 'JNE (3-5 hari)'),
(177, 'Kabupaten Kapuas Hulu, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(178, 'Kabupaten Kayong Utara, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(179, 'Kabupaten Ketapang, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(180, 'Kabupaten Kubu Raya, Kalimantan Barat ', 55000, 'JNE (5-7 hari)'),
(181, 'Kabupaten Landak, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(182, 'Kabupaten Melawi, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(183, 'Kabupaten Mempawah, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(184, 'Kabupaten Sambas, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(185, 'Kabupaten Sanggau, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(186, 'Kabupaten Sekadau, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(187, 'Kabupaten Sintang, Kalimantan Barat', 55000, 'JNE (5-7 hari)'),
(188, 'Kota Pontianak, Kalimantan Barat', 37000, 'JNE (1-2 hari)'),
(189, 'Kota Singkawang, Kalimantan Barat', 50000, 'JNE (3-5 hari)'),
(190, 'Kabupaten Balangan, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(191, 'Kabupaten Banjar, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(192, 'Kabupaten Barito Kuala, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(193, 'Kabupaten Hulu Sungai Selatan, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(194, 'Kabupaten Hulu Sungai Tengah, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(195, 'Kabupaten Hulu Sungai Utara, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(196, 'Kabupaten Kotabaru, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(197, 'Kabupaten Tabalong, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(198, 'Kabupaten Tanah Bumbu, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(199, 'Kabupaten Tanah Laut, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(200, 'Kabupaten Tapin, Kalimantan Selatan', 67000, 'JNE (5-7 hari)'),
(201, 'Kota Banjarbaru, Kalimantan Selatan', 50000, 'JNE (3-5 hari)'),
(202, 'Kota Banjarmasin, Kalimantan Selatan', 41000, 'JNE (1-2 hari)'),
(203, 'Kabupaten Barito Selatan, Kalimantan Tengah', 67000, 'JNE (5-7 hari)'),
(204, 'Kabupaten Barito Timur, Kalimantan Tengah', 67000, 'JNE (5-7 hari)'),
(205, 'Kabupaten Barito Utara, Kalimantan Tengah', 67000, 'JNE (5-7 hari)'),
(206, 'Kabupaten Gunung Mas, Kalimantan Tengah', 67000, 'JNE (10+hari)'),
(207, 'Kabupaten Kapuas, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(208, 'Kabupaten Katingan, Kalimantan Tengah', 67000, 'JNE (10+hari)'),
(209, 'Kabupaten Kotawaringin Barat, Kalimantan Tengah', 57000, 'JNE (3-5 hari)'),
(210, 'Kabupaten Kotawaringin Timur, Kalimantan Tengah', 57000, 'JNE (3-5 hari)'),
(211, 'Kabupaten Lamandau, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(212, 'Kabupaten Murung Raya, Kalimantan Tengah', 67000, 'JNE (5-7 hari)'),
(213, 'Kabupaten Pulang Pisau, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(214, 'Kabupaten Sukamara, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(215, 'Kabupaten Seruyan, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(216, 'Kota Palangka Raya, Kalimantan Tengah', 62000, 'JNE (5-7 hari)'),
(217, 'Kabupaten Berau, Kalimantan Timur', 92000, 'JNE (5-7 hari)'),
(218, 'Kabupaten Kutai Barat, Kalimantan Timur', 68000, 'JNE (5-7 hari)'),
(219, 'Kabupaten Kutai Timur, Kalimantan Timur', 80000, 'JNE (3-5 hari)'),
(220, 'Kabupaten Kutai Kartanegara, Kalimantan Timur', 68000, 'JNE (5-7 hari)'),
(221, 'Kabupaten Mahakam Ulu, Kalimantan Timur', 73000, 'JNE (10+hari)'),
(222, 'Kabupaten Paser, Kalimantan Timur', 92000, 'JNE (5-7 hari)'),
(223, 'Kabupaten Penajam Paser Utara, Kalimantan Timur', 92000, 'JNE (5-7 hari)'),
(224, 'Kota Balikpapan, Kalimantan Timur', 49000, 'JNE (1-2 hari)'),
(225, 'Kota Bontang, Kalimantan Timur', 76000, 'JNE (2-3 hari)'),
(226, 'Kota Samarinda, Kalimantan Timur', 55000, 'JNE (2-3 hari)'),
(227, 'Kabupaten Bulungan, Kalimantan Utara', 83000, 'JNE (3-5 hari)'),
(228, 'Kabupaten Malinau, Kalimantan Utara', 83000, 'JNE (3-5 hari)'),
(229, 'Kabupaten Nunukan, Kalimantan Utara ', 83000, 'JNE (3-5 hari)'),
(230, 'Kabupaten Tana Tidung, Kalimantan Utara', 83000, 'JNE (3-5 hari)'),
(231, 'Kota Tarakan, Kalimantan Utara', 83000, 'JNE (2-3 hari)'),
(232, 'Kabupaten Bangka, Kepulauan Bangka Belitung', 50000, 'JNE (3-6 hari)'),
(233, 'Kabupaten Bangka Barat, Kepulauan Bangka Belitung ', 50000, 'JNE (3-6 hari)'),
(234, 'Kabupaten Bangka Selatan, Kepulauan Bangka Belitun', 50000, 'JNE (3-6 hari)'),
(235, 'Kabupaten Bangka Tengah, Kepulauan Bangka Belitung', 50000, 'JNE (3-6 hari)'),
(236, 'Kabupaten Belitung, Kepulauan Bangka Belitung', 40000, 'JNE (3-6 hari)'),
(237, 'Kabupaten Belitung Timur, Kepulauan Bangka Belitun', 40000, 'JNE (3-6 hari)'),
(238, 'Kota Pangkal Pinang, Kepulauan Bangka Belitung', 28000, 'JNE (1-2 hari)'),
(239, 'Kabupaten Bintan, Kepulauan Riau ', 75000, 'JNE (3-6 hari) '),
(240, 'Kabupaten Karimun, Kepulauan Riau', 55000, 'JNE (4-7 hari)'),
(241, 'Kabupaten Kepulauan Anambas, Kepulauan Riau', 66000, 'JNE (10+hari)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_faktur_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `subharga` int(20) NOT NULL,
  `subberat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_faktur_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `subharga`, `subberat`) VALUES
(94, 76, 55, 1, 'Asus Vivobook S330FA  ', 9649999, 9649999, 2),
(95, 77, 56, 1, 'DELL Inspiron 15 5570    ', 10900000, 10900000, 2),
(96, 78, 57, 1, 'Lenovo Ideapad 330S  ', 9099999, 9099999, 2),
(97, 79, 52, 1, 'HP Laptop 14-bw501AU -golden                   ', 3480000, 3480000, 2),
(98, 80, 57, 1, 'Lenovo Ideapad 330S  ', 9099999, 9099999, 2),
(99, 81, 58, 1, 'Sandisk Ultra CZ48 32GB USB 3.0           ', 69000, 69000, 1),
(100, 82, 54, 1, 'Asus ZenBook UX333FN-A5802T', 16800000, 16800000, 2),
(101, 82, 57, 1, 'Lenovo Ideapad 330S  ', 9099999, 9099999, 2),
(102, 82, 55, 1, 'Asus Vivobook S330FA  ', 9649999, 9649999, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(8) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `telepon_pelanggan` varchar(13) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'cahyoyusuf3@gmail.com                        ', 'yusuf', 'yusuf cahyo                        ', '085883142067 ', 'melia residence blok x.19/no.11 citra raya cikupa, 15710  '),
(2, 'grwggwe@gergre', 'huhk', 'rfhbfdshdh', '453764', 'ngndgnetddt'),
(3, 'admin@gmail.com ', 'admin', 'Admin ', '08123456789 ', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_faktur_pembelian` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `sub_jumlah` int(10) NOT NULL,
  `biaya_kirim` int(11) NOT NULL,
  `total_pembayaran` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `status_pembayaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_faktur_pembelian`, `id_pengiriman`, `nama`, `metode_pembayaran`, `sub_jumlah`, `biaya_kirim`, `total_pembayaran`, `tanggal`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(67, 76, 1, '', '', 9649999, 0, 9649999, '0000-00-00', '', 'menunggu'),
(68, 77, 41, 'Yusuf Cahyo Nusantoro', 'Bank BCA', 10900000, 18000, 10918000, '2019-10-30', '20191030104615struk.jpg', 'Lunas'),
(69, 78, 41, 'yusuf', 'Bank BCA', 9099999, 18000, 9117999, '2020-02-09', '20200209082337struk.jpg', 'Lunas'),
(70, 79, 54, 'Yusuf Cahyo Nusantoro', 'Bank BCA', 3480000, 18000, 3498000, '2020-03-10', '20200310132437struk.jpg', 'Lunas'),
(71, 80, 54, '', '', 9099999, 18000, 9117999, '0000-00-00', '', 'menunggu'),
(72, 81, 16, '', '', 69000, 71000, 140000, '2020-08-15', '20200815103444', 'Lunas'),
(73, 82, 190, '', '', 35549998, 402000, 35951998, '2020-08-15', '20200815104641', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur_pembelian`
--

CREATE TABLE `faktur_pembelian` (
  `id_faktur_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_faktur_pembelian` date NOT NULL,
  `biaya_kirim` int(11) NOT NULL,
  `total_faktur_pembelian` int(20) NOT NULL,
  `status_faktur_pembelian` varchar(50) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faktur_pembelian`
--

INSERT INTO `faktur_pembelian` (`id_faktur_pembelian`, `id_pelanggan`, `tanggal_faktur_pembelian`, `biaya_kirim`, `total_faktur_pembelian`, `status_faktur_pembelian`, `resi_pengiriman`) VALUES
(77, 1, '2019-10-30', 18000, 10918000, 'barang telah diterima', ''),
(80, 1, '2020-08-14', 18000, 9117999, 'pending', ''),
(81, 1, '2020-08-15', 71000, 140000, 'barang telah diterima', ''),
(82, 1, '2020-08-15', 402000, 35951998, 'barang telah diterima', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `berat` int(5) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `stock` int(5) NOT NULL,
  `foto_produk` varchar(20) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat`, `harga_produk`, `stock`, `foto_produk`, `deskripsi_produk`, `nama_kategori`) VALUES
(52, 'HP Laptop 14-bw501AU -golden                   ', 2, 3480000, 4, 'download.jpg', 'DESKRIPSI PRODUK\r\n\r\n<li> AMD A4-9120 </li><br> \r\n<li>RAM 4GB</li><br>\r\n<li>HARDISK 500GB</li><br>\r\n<li>Layar 14 inch</li><br>\r\n<li>windows 10 ori</li><br>                   ', 'laptop'),
(53, 'ASUS Vivobook A407UA - BV319T Grey    ', 2, 5485000, 0, 'ASUSA407UA.jpg', 'DESKRIPSI PRODUK\r\n\r\n<li>CPU : Intel Core i3 - 7020U</li><br>\r\n<li>RAM : 4 GB DDR4</li><br>\r\n<li>HDD : 1TB</li><br>\r\n<li>Network : WiFi, Bluetooth, Webcam</li><br>\r\n<li>Graphics : Intel UHD Graphics 600</li><br>\r\n<li>Display : 14.0-inch HD</li><br>\r\n<li>OS : Windows 10 Home</li><br>\r\n<li>No DVD</li><br>\r\n<li>Fingerprint</li><br>\r\n\r\nGARANSI : ASUS 2 Tahun (Sparepart & Jasa)\r\n   ', 'laptop'),
(54, 'Asus ZenBook UX333FN-A5802T', 2, 16800000, 2, 'AsusUX333FN.jpg', 'DESKRIPSI PRODUK\r\n<li>Warna : ROYAL BLUE </li>\r\n<li>Intel Core i5-8265U</li><br>\r\n<li>8 GB LPDDR3</li><br>\r\n<li>512 GB SSD</li><br>\r\n<li>WiFi, Bluetooth, Webcam</li><br>\r\n<li>Nvidia GeForce MX150 2 GB</li><br>\r\n<li>13.3-inch Full HD</li><br>\r\n<li>Windows 10 Home</li><br>\r\n  GARANSI RESMI INDONESIA 2 TAHUN ', 'laptop'),
(55, 'Asus Vivobook S330FA  ', 2, 9649999, 7, 'AsusS330FA.jpg', 'DESKRIPSI PRODUK\r\n<li>ntel Core i5-8265U</li><br>\r\n<li>RAM 4GB</li><br>\r\n<li>SSD 256GB</li><br>\r\n<li>LAYAR 13.3inch FHD</li><br>\r\n<li>DOS</li><br>  ', 'laptop'),
(56, 'DELL Inspiron 15 5570    ', 2, 10900000, 0, 'DELLInspiron.jpg', 'DESKRIPSI PRODUK\r\n<li>ntel Core i5-8265U</li><br>\r\n<li>RAM 8GB</li><br>\r\n<li>HDD 2Tb</li><br>\r\n<li>LAYAR 15.6inch FHD</li><br>\r\n<li>Graphic Radeon 2Gb</li><br>\r\n<li>Windows 10</li><br>  \r\n\r\nGaransi resmi 1 Tahun OnSite dari Dell Indonesia ', 'laptop'),
(57, 'Lenovo Ideapad 330S  ', 2, 9099999, 3, 'LenovoIdeapad.jpg', 'DESKRIPSI PRODUK\r\n\r\n<li>ntel Core i5-8265U</li><br>\r\n<li>RAM 4GB</li><br>\r\n<li>HDD 1Tb</li><br>\r\n<li>LAYAR 15.6inch FHD</li><br>\r\n<li>Graphic Radeon 2Gb</li><br>\r\n<li>windows 10 ori</li><br> ', 'laptop'),
(58, 'Sandisk Ultra CZ48 32GB USB 3.0           ', 1, 69000, 0, 'sandiskultra.jpg', '<ul>   SanDisk Ultra USB 3.0 32GB 100MB/s Garansi Resmi SanDisk Indonesia\r\n<li>- speed up to 100 MB/s</li>\r\n<li>- garansi resmi 5 tahun Sandisk Indonesia (list distributor bisa dilihat di web Sandisk)</li>\r\n</ul>\r\n<ul> Syarat klaim garansi:\r\n<li>- paking & stiker hologram harus ada</li>\r\n<li>- kondisi barang masih dalam keadaan baik (tidak cacat)</li>\r\n<li>- nota faktur_pembelian</li>\r\n<li>- barang langsung ditukar baru (bila stok tersedia)</li>\r\n</ul>\r\n<ul>\r\nMENGAPA LEBIH BAIK MEMBELI SANDISK GARANSI RESMI\r\n<li>- 100% ORIGINAL</li>\r\n<li>- klaim garansi mudah, karena SanDisk Indonesia memiliki 2 distributor resmi yang sudah terkenal di dunia komputer/mobile/kamera dan didukung oleh SanDisk Indonesia, atau bisa melalui kami</li>\r\n<li>- PASTI ADA STIKER Garansi Distributor Resmi (Astrindo/Datascrip), bila tidak ada stiker dari salah satu distributor ini, DIPASTIKAN BUKAN GARANSI RESMI DAN TIDAK ADA JAMINAN KALAU ITU BARANG ASLI/ORIGINAL</li>\r\n</ul>\r\n         ', 'Aksesoris'),
(59, 'jgfuf', 1, 86587, 4, '', ' jtdjfjhv', 'Aksesoris');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `biaya_pengiriman`
--
ALTER TABLE `biaya_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `faktur_pembelian`
--
ALTER TABLE `faktur_pembelian`
  ADD PRIMARY KEY (`id_faktur_pembelian`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biaya_pengiriman`
--
ALTER TABLE `biaya_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `faktur_pembelian`
--
ALTER TABLE `faktur_pembelian`
  MODIFY `id_faktur_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
