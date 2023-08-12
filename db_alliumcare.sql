-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 04:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alliumcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejalahamas`
--

CREATE TABLE `gejalahamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalahamas`
--

INSERT INTO `gejalahamas` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(21, 'GH01', 'Pembentukan jalur korokan larva yang berkelok-kelok', '2023-08-11 21:48:49', '2023-08-11 21:48:49'),
(22, 'GH02', 'Terdapat bintik-bintik putih akibat ovipositor', '2023-08-12 02:46:35', '2023-08-12 02:46:35'),
(23, 'GH03', 'Seluruh Helaian daun penuh dengan korokan, sehingga menjadi kering dan berwarna coklat seperti terbakar', '2023-08-12 02:46:46', '2023-08-12 02:46:46'),
(24, 'GH04', 'Kerusakan daun pada tanaman', '2023-08-12 02:47:09', '2023-08-12 02:47:09'),
(25, 'GH05', 'Rusaknya bagian batang tanaman bawang', '2023-08-12 02:47:25', '2023-08-12 02:47:25'),
(26, 'GH06', 'Daun tanaman bawang tampak seperti dikerat, dipotong dan di tarik-tarik', '2023-08-12 02:47:31', '2023-08-12 02:47:31'),
(27, 'GH07', 'Serangannya terjadi pada sore dan malam hari', '2023-08-12 02:47:38', '2023-08-12 02:47:38'),
(28, 'GH08', 'Menyerang tanaman yang berumur 2-3 minggu', '2023-08-12 02:47:46', '2023-08-12 02:47:46'),
(29, 'GH09', 'Kerusakan pada umbi dan akar tanaman', '2023-08-12 02:47:53', '2023-08-12 02:47:53'),
(30, 'GH10', 'Gejala serangan tampak pada daun berupa bercak berwarna putih transparan', '2023-08-12 02:48:02', '2023-08-12 02:48:02'),
(31, 'GH11', 'Begitu menetas dari ulat masuk kedalam daun dengan jalan melubangi ujung daun pada saat stadia larva kemudian menggerek perkaan bagian epidermis luar ditinggalkan', '2023-08-12 02:48:09', '2023-08-12 02:48:09'),
(32, 'GH12', 'Serangan lebih lanjut menyebabkan daun mengering. Jika populasi ulat banyak, dapat menyerang umbi', '2023-08-12 02:48:18', '2023-08-12 02:48:18'),
(33, 'GH13', 'Tanaman menjadi layu dan mati', '2023-08-12 02:48:26', '2023-08-12 02:48:26'),
(34, 'GH14', 'Menyerang seluruh bagian tanaman bawang', '2023-08-12 02:48:39', '2023-08-12 02:48:39'),
(35, 'GH15', 'Hama ini menyerang tanaman yang berumur 1-2 minggu setelah tanam.', '2023-08-12 02:48:53', '2023-08-12 02:48:53'),
(36, 'GH16', 'Terdapat noda perak atau abu-abu pucat pada permukaan daun bawang merah', '2023-08-12 02:49:03', '2023-08-12 02:49:03'),
(37, 'GH17', 'Terdapat bintik-bintik gelap kecil pada permukaan daun bawang merah', '2023-08-12 02:49:10', '2023-08-12 02:49:10'),
(38, 'GH18', 'Sasaran serangan adalah daun muda dan pucuk daun', '2023-08-12 02:49:15', '2023-08-12 02:49:15'),
(39, 'GH19', 'Nimfa dan imago menyerang bagian tersebut dengan jalan menggaruk atau meraut jaringan daun muda dan menghisap cairan selnya', '2023-08-12 02:49:22', '2023-08-12 02:49:22'),
(40, 'GH20', 'Secara visual daun yang terserang berwarna putih mengkilap seperti perak dan kemudian berubah kecoklatan dan berbintik hitam', '2023-08-12 02:49:30', '2023-08-12 02:49:30'),
(41, 'GH21', 'Bila serangan berat seluruh daun bisa berwarna putih', '2023-08-12 02:49:37', '2023-08-12 02:49:37'),
(42, 'GH22', 'Sebagai hama pembawa virus', '2023-08-12 02:49:46', '2023-08-12 02:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `gejalahama_hama`
--

CREATE TABLE `gejalahama_hama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hama_id` bigint(20) UNSIGNED NOT NULL,
  `gejalahama_id` bigint(20) UNSIGNED NOT NULL,
  `value` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalahama_hama`
--

INSERT INTO `gejalahama_hama` (`id`, `hama_id`, `gejalahama_id`, `value`, `created_at`, `updated_at`) VALUES
(101, 6, 21, 1, '2023-08-11 21:48:49', '2023-08-12 06:26:25'),
(102, 6, 22, 1, '2023-08-12 02:46:35', '2023-08-12 06:26:25'),
(103, 6, 23, 0.8, '2023-08-12 02:46:46', '2023-08-12 06:26:25'),
(104, 6, 24, 0.2, '2023-08-12 02:47:09', '2023-08-12 06:26:25'),
(105, 6, 25, 0, '2023-08-12 02:47:25', '2023-08-12 06:26:25'),
(106, 6, 26, 0, '2023-08-12 02:47:31', '2023-08-12 06:26:25'),
(107, 6, 27, 0, '2023-08-12 02:47:38', '2023-08-12 06:26:25'),
(108, 6, 28, 0, '2023-08-12 02:47:46', '2023-08-12 06:26:25'),
(109, 6, 29, 0, '2023-08-12 02:47:53', '2023-08-12 06:26:25'),
(110, 6, 30, 0, '2023-08-12 02:48:02', '2023-08-12 06:26:25'),
(111, 6, 31, 0, '2023-08-12 02:48:09', '2023-08-12 06:26:25'),
(112, 6, 32, 0, '2023-08-12 02:48:18', '2023-08-12 06:26:25'),
(113, 6, 33, 0, '2023-08-12 02:48:26', '2023-08-12 06:26:25'),
(114, 6, 34, 0, '2023-08-12 02:48:39', '2023-08-12 06:26:25'),
(115, 6, 35, 0, '2023-08-12 02:48:53', '2023-08-12 06:26:25'),
(116, 6, 36, 0, '2023-08-12 02:49:03', '2023-08-12 06:26:25'),
(117, 6, 37, 0, '2023-08-12 02:49:10', '2023-08-12 06:26:25'),
(118, 6, 38, 0, '2023-08-12 02:49:15', '2023-08-12 06:26:25'),
(119, 6, 39, 0, '2023-08-12 02:49:22', '2023-08-12 06:26:25'),
(120, 6, 40, 0, '2023-08-12 02:49:30', '2023-08-12 06:26:25'),
(121, 6, 41, 0, '2023-08-12 02:49:37', '2023-08-12 06:26:25'),
(122, 6, 42, 0, '2023-08-12 02:49:46', '2023-08-12 06:26:25'),
(123, 7, 21, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(124, 7, 22, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(125, 7, 23, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(126, 7, 24, 0.2, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(127, 7, 25, 0.8, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(128, 7, 26, 1, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(129, 7, 27, 0.8, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(130, 7, 28, 0.6, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(131, 7, 29, 0.2, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(132, 7, 30, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(133, 7, 31, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(134, 7, 32, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(135, 7, 33, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(136, 7, 34, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(137, 7, 35, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(138, 7, 36, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(139, 7, 37, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(140, 7, 38, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(141, 7, 39, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(142, 7, 40, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(143, 7, 41, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(144, 7, 42, 0, '2023-08-12 03:04:42', '2023-08-12 06:26:25'),
(145, 8, 21, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(146, 8, 22, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(147, 8, 23, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(148, 8, 24, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(149, 8, 25, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(150, 8, 26, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(151, 8, 27, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(152, 8, 28, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(153, 8, 29, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(154, 8, 30, 1, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(155, 8, 31, 1, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(156, 8, 32, 0.8, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(157, 8, 33, 0.2, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(158, 8, 34, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(159, 8, 35, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(160, 8, 36, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(161, 8, 37, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(162, 8, 38, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(163, 8, 39, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(164, 8, 40, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(165, 8, 41, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(166, 8, 42, 0, '2023-08-12 03:06:59', '2023-08-12 06:26:25'),
(167, 9, 21, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(168, 9, 22, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(169, 9, 23, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(170, 9, 24, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(171, 9, 25, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(172, 9, 26, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(173, 9, 27, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(174, 9, 28, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(175, 9, 29, 0.2, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(176, 9, 30, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(177, 9, 31, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(178, 9, 32, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(179, 9, 33, 0.2, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(180, 9, 34, 1, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(181, 9, 35, 0.8, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(182, 9, 36, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(183, 9, 37, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(184, 9, 38, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(185, 9, 39, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(186, 9, 40, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(187, 9, 41, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(188, 9, 42, 0, '2023-08-12 03:11:18', '2023-08-12 06:26:25'),
(189, 10, 21, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(190, 10, 22, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(191, 10, 23, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(192, 10, 24, 0.2, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(193, 10, 25, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(194, 10, 26, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(195, 10, 27, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(196, 10, 28, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(197, 10, 29, 0.2, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(198, 10, 30, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(199, 10, 31, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(200, 10, 32, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(201, 10, 33, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(202, 10, 34, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(203, 10, 35, 0, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(204, 10, 36, 1, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(205, 10, 37, 1, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(206, 10, 38, 0.4, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(207, 10, 39, 0.6, '2023-08-12 03:13:27', '2023-08-12 06:26:25'),
(208, 10, 40, 0.6, '2023-08-12 03:13:28', '2023-08-12 06:26:25'),
(209, 10, 41, 0.8, '2023-08-12 03:13:28', '2023-08-12 06:26:25'),
(210, 10, 42, 0.6, '2023-08-12 03:13:28', '2023-08-12 06:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `gejalapenyakits`
--

CREATE TABLE `gejalapenyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalapenyakits`
--

INSERT INTO `gejalapenyakits` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(26, 'GP01', 'Penguningan daun', '2023-08-12 02:54:52', '2023-08-12 02:54:52'),
(27, 'GP02', 'Pertumbuhan akar tidak sempurna', '2023-08-12 02:55:01', '2023-08-12 02:55:01'),
(28, 'GP03', 'Akar membusuk', '2023-08-12 02:55:14', '2023-08-12 02:55:14'),
(29, 'GP04', 'Pada dasar umbi lapis terdapat cendawan keputih-putihan', '2023-08-12 02:55:24', '2023-08-12 02:55:24'),
(30, 'GP05', 'Terdapat pembusukan yang agak berair pada pangkal tanaman dan meluas keatas lapisan umbi', '2023-08-12 02:55:34', '2023-08-12 02:55:34'),
(31, 'GP06', 'Daun terplintir', '2023-08-12 02:55:41', '2023-08-12 02:55:41'),
(32, 'GP07', 'Terdapat bercak berwarna putih pada daun tua yang kemudian akan meluas', '2023-08-12 02:55:50', '2023-08-12 02:55:50'),
(33, 'GP08', 'Terdapat cekungan berwarna ungu pada daun tua, biasanya berbentuk elips dengan tepi berwarna kuning pucat hingga kecoklatan', '2023-08-12 02:55:59', '2023-08-12 02:55:59'),
(34, 'GP09', 'Daun mengering', '2023-08-12 02:56:05', '2023-08-12 02:56:05'),
(35, 'GP10', 'Pada permukaan bercak akhirnya akan berwarna kehitaman', '2023-08-12 02:56:11', '2023-08-12 02:56:11'),
(36, 'GP11', 'Terdapat pembusukan umbi yang dimulai dari bagian leher kemudian jaringan umbi yang terinfeksi akan penyakit dan berwarna lebih gelap', '2023-08-12 02:56:17', '2023-08-12 02:56:17'),
(37, 'GP12', 'Terdapat kegagalan pembentukan umbi akibat serangan penyakit', '2023-08-12 02:56:23', '2023-08-12 02:56:23'),
(38, 'GP13', 'Pertumbuhan tanaman menjadi kerdil', '2023-08-12 02:56:33', '2023-08-12 02:56:33'),
(39, 'GP14', 'Warna daun belang hijau pucat sampai bergaris kekuningan', '2023-08-12 02:56:40', '2023-08-12 02:56:40'),
(40, 'GP15', 'Umbi menjadi kecil', '2023-08-12 02:56:47', '2023-08-12 02:57:07'),
(41, 'GP16', 'Bentuk daun lebih kecil dibanding daun sehat', '2023-08-12 02:57:47', '2023-08-12 02:57:47'),
(42, 'GP17', 'Daun bagian luar dan umbi tertutup “bulu – bulu halus” berwarna ungu yang merupakan', '2023-08-12 02:58:01', '2023-08-12 02:58:01'),
(43, 'GP18', 'Apabila tanaman terinfeksi mampu bertahan hidup, pertumbuhannya terhambat, daun hijau pucat', '2023-08-12 02:58:09', '2023-08-12 02:58:09'),
(44, 'GP19', 'Serangan dapat menjalar ke umbi yang mengakibatkan umbi membusuk tetapi lapis luarnya mengering dan berkerut', '2023-08-12 02:58:16', '2023-08-12 02:58:16'),
(45, 'GP20', 'Tampak bercak putih pada daun yang terserang dengan ukuran antara 1 - 2 mm', '2023-08-12 02:58:27', '2023-08-12 02:58:27'),
(46, 'GP21', 'Bercak putih melebar pada daun dan berubah warna menjadi putih kehijauan', '2023-08-12 02:58:32', '2023-08-12 02:58:32'),
(47, 'GP22', 'Tanaman dapat mati mendadak karena daun bagian bawah pangkal mengecil', '2023-08-12 02:58:38', '2023-08-12 02:58:38'),
(48, 'GP23', 'Infeksi penyakit akan terus berlanjut hingga terbentuk koloni konidia berwarna merah muda, kemudian berubah cokelat muda, cokelat tua, lalu menggelap hingga kehitaman', '2023-08-12 02:58:44', '2023-08-12 02:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `gejalapenyakit_penyakit`
--

CREATE TABLE `gejalapenyakit_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `gejalapenyakit_id` bigint(20) UNSIGNED NOT NULL,
  `value` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalapenyakit_penyakit`
--

INSERT INTO `gejalapenyakit_penyakit` (`id`, `penyakit_id`, `gejalapenyakit_id`, `value`, `created_at`, `updated_at`) VALUES
(121, 6, 26, 0.2, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(122, 6, 27, 0.8, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(123, 6, 28, 0.6, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(124, 6, 29, 1, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(125, 6, 30, 0.6, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(126, 6, 31, 0.2, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(127, 6, 32, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(128, 6, 33, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(129, 6, 34, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(130, 6, 35, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(131, 6, 36, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(132, 6, 37, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(133, 6, 38, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(134, 6, 39, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(135, 6, 40, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(136, 6, 41, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(137, 6, 42, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(138, 6, 43, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(139, 6, 44, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(140, 6, 45, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(141, 6, 46, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(142, 6, 47, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(143, 6, 48, 0, '2023-08-12 03:21:52', '2023-08-12 06:30:29'),
(144, 7, 26, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(145, 7, 27, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(146, 7, 28, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(147, 7, 29, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(148, 7, 30, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(149, 7, 31, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(150, 7, 32, 0.6, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(151, 7, 33, 1, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(152, 7, 34, 0.2, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(153, 7, 35, 0.4, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(154, 7, 36, 0.6, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(155, 7, 37, 0.8, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(156, 7, 38, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(157, 7, 39, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(158, 7, 40, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(159, 7, 41, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(160, 7, 42, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(161, 7, 43, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(162, 7, 44, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(163, 7, 45, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(164, 7, 46, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(165, 7, 47, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(166, 7, 48, 0, '2023-08-12 03:24:22', '2023-08-12 06:30:29'),
(167, 8, 26, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(168, 8, 27, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(169, 8, 28, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(170, 8, 29, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(171, 8, 30, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(172, 8, 31, 0.2, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(173, 8, 32, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(174, 8, 33, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(175, 8, 34, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(176, 8, 35, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(177, 8, 36, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(178, 8, 37, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(179, 8, 38, 0.2, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(180, 8, 39, 1, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(181, 8, 40, 0.6, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(182, 8, 41, 0.8, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(183, 8, 42, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(184, 8, 43, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(185, 8, 44, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(186, 8, 45, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(187, 8, 46, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(188, 8, 47, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(189, 8, 48, 0, '2023-08-12 03:29:18', '2023-08-12 06:30:29'),
(190, 9, 26, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(191, 9, 27, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(192, 9, 28, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(193, 9, 29, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(194, 9, 30, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(195, 9, 31, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(196, 9, 32, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(197, 9, 33, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(198, 9, 34, 0.2, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(199, 9, 35, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(200, 9, 36, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(201, 9, 37, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(202, 9, 38, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(203, 9, 39, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(204, 9, 40, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(205, 9, 41, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(206, 9, 42, 1, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(207, 9, 43, 0.6, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(208, 9, 44, 0.8, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(209, 9, 45, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(210, 9, 46, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(211, 9, 47, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(212, 9, 48, 0, '2023-08-12 03:32:17', '2023-08-12 06:30:29'),
(213, 10, 26, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(214, 10, 27, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(215, 10, 28, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(216, 10, 29, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(217, 10, 30, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(218, 10, 31, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(219, 10, 32, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(220, 10, 33, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(221, 10, 34, 0.2, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(222, 10, 35, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(223, 10, 36, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(224, 10, 37, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(225, 10, 38, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(226, 10, 39, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(227, 10, 40, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(228, 10, 41, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(229, 10, 42, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(230, 10, 43, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(231, 10, 44, 0, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(232, 10, 45, 1, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(233, 10, 46, 1, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(234, 10, 47, 0.4, '2023-08-12 03:33:47', '2023-08-12 06:30:29'),
(235, 10, 48, 0.8, '2023-08-12 03:33:47', '2023-08-12 06:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `hamas`
--

CREATE TABLE `hamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `det_hama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `srn_hama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hamas`
--

INSERT INTO `hamas` (`id`, `user_id`, `code`, `name`, `det_hama`, `srn_hama`, `images`, `created_at`, `updated_at`) VALUES
(6, 1, 'H1', 'Hama Lalat Pengorok Daun', '<p><strong>Detail tentang Hama Lalat Pengorok Daun pada Tanaman Bawang Merah:</strong></p><p>Hama lalat pengorok daun (Liriomyza spp.), juga dikenal sebagai lalat pengorok daun bawang, adalah serangga kecil yang menjadi salah satu masalah utama pada tanaman bawang merah. Serangga ini merusak tanaman dengan cara larva menggali terowongan atau galeri di dalam jaringan daun, yang mengakibatkan kerusakan estetika dan merugikan kualitas serta hasil panen bawang merah.</p><p><strong>Ciri-ciri Lalat Pengorok Daun:</strong></p><ul><li>Lalat pengorok daun memiliki ukuran kecil, sekitar 2-3 mm.</li><li>Tubuhnya kebanyakan berwarna hitam atau abu-abu dengan garis-garis atau bintik-bintik pada sayapnya.</li></ul><p><strong>Siklus Hidup:</strong></p><ul><li>Hama ini mengalami empat tahap perkembangan: telur, larva, pupa, dan imago (dewasa).</li><li>Lalat dewasa betina meletakkan telurnya di permukaan daun bawah.</li><li>Larva menetas dari telur dan menggali terowongan pada daun, menghisap cairan sel dan menyebabkan kerusakan.</li><li>Setelah fase larva selesai, larva akan keluar dari daun dan menjalani tahap pupa di tanah sebelum berubah menjadi lalat dewasa.</li></ul><p><strong>Kerusakan yang Diakibatkan:</strong></p><ul><li>Larva merusak jaringan daun dan membuatnya tampak berwarna putih atau mengkerut.</li><li>Galeri larva pada daun dapat mengurangi kemampuan fotosintesis tanaman.</li><li>Kerusakan ini dapat menghambat pertumbuhan dan mengurangi hasil panen bawang merah.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pantau dan Identifikasi:</strong> Periksa secara rutin tanaman bawang merah Anda untuk mendeteksi tanda-tanda serangan lalat pengorok daun. Identifikasi serangga ini dengan seksama.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian. Singkirkan sisa-sisa tanaman yang sudah tidak produktif, karena larva dapat menginfestasi daun-daun yang masih tersisa.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko serangan hama yang terus menerus pada bawang merah dan tanaman lainnya.</p><p><strong>Penggunaan Serangga Penguntit:</strong> Serangga penguntit seperti lebah pengorok daun parasit (Diglyphus isaea) dapat digunakan sebagai agen pengendalian biologis.</p><p><strong>Aplikasi Neem Oil atau Ekstrak Bawang Putih:</strong> Neem oil atau ekstrak bawang putih dapat digunakan sebagai bahan alami untuk mengendalikan serangan hama ini.</p><p><strong>Penggunaan Pestisida:</strong> Jika infestasi sudah parah, pertimbangkan penggunaan pestisida yang sesuai. Pastikan untuk mengikuti petunjuk penggunaan dengan benar dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Perhatian terhadap Varietas Unggul:</strong> Pilih varietas bawang merah yang lebih tahan terhadap serangan hama ini.</p><p><strong>Pengairan yang Tepat:</strong> Atur pola pengairan agar daun tetap kering, karena lalat pengorok daun lebih suka di lingkungan yang lembap.</p><p><strong>Pendidikan Petani:</strong> Berikan pelatihan kepada petani tentang tanda-tanda serangan hama, pengenalan musuh alami, dan praktik pertanian yang berkelanjutan.</p>', '1691815858.jpg', '2023-08-11 20:50:58', '2023-08-12 03:46:55'),
(7, 1, 'H2', 'Hama Ulat Tanah', '<p><strong>Detail tentang Hama Ulat Tanah pada Tanaman Bawang Merah:</strong></p><p>Hama ulat tanah merupakan masalah umum yang dapat mengganggu pertumbuhan dan hasil panen tanaman bawang merah. Ulat tanah adalah larva dari berbagai jenis ngengat atau kupu-kupu yang biasanya hidup di dalam tanah dan merusak akar serta bagian bawah tanaman.</p><p><strong>Ciri-ciri Ulat Tanah:</strong></p><ul><li>Ulat tanah memiliki tubuh lunak dan berwarna bervariasi, tergantung pada spesiesnya.</li><li>Ukuran ulat bervariasi, tetapi biasanya lebih panjang daripada lebar.</li><li>Mereka cenderung memiliki kepala yang lebih gelap dan tubuh berwarna lebih terang.</li></ul><p><strong>Siklus Hidup:</strong></p><ul><li>Ngengat dewasa bertelur di tanah atau di sekitar tanaman.</li><li>Setelah menetas, larva ulat tanah menggali terowongan di dalam tanah dan mulai memakan akar dan bagian bawah tanaman.</li><li>Larva tumbuh dalam tanah selama beberapa minggu atau bulan tergantung pada spesiesnya.</li><li>Setelah cukup besar, larva ulat tanah akan keluar dari tanah dan membentuk kokon di tanah sebelum berubah menjadi ngengat dewasa.</li></ul><p><strong>Kerusakan yang Diakibatkan:</strong></p><ul><li>Ulat tanah merusak akar dan bagian bawah tanaman bawang merah.</li><li>Kerusakan akar dapat mengganggu penyerapan air dan nutrisi, menghambat pertumbuhan tanaman, dan mengurangi hasil panen.</li><li>Tanaman yang terinfestasi ulat tanah dapat tampak layu, menguning, dan tumbuh dengan lemah.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pantau Tanaman:</strong> Lakukan pemantauan secara rutin pada tanaman bawang merah Anda. Perhatikan tanda-tanda kerusakan akibat ulat tanah seperti pertumbuhan yang terhambat, daun kuning, dan tanaman yang tampak lemah.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko serangan hama ulat tanah pada bawang merah dan tanaman lainnya.</p><p><strong>Pembersihan Lahan:</strong> Jaga kebersihan lahan pertanian. Singkirkan sisa-sisa tanaman yang sudah tidak produktif dan bahan organik lainnya yang dapat menjadi tempat berkembang biak bagi ulat tanah.</p><p><strong>Penggunaan Serangga Penguntit:</strong> Serangga penguntit seperti nematoda parasitik dapat digunakan sebagai agen pengendalian biologis untuk mengurangi populasi ulat tanah.</p><p><strong>Penggunaan Pestisida Nabati:</strong> Pestisida nabati seperti ekstrak neem oil atau ekstrak bawang putih dapat digunakan sebagai alternatif yang lebih ramah lingkungan.</p><p><strong>Pemupukan yang Seimbang:</strong> Berikan pemupukan yang seimbang untuk menjaga kesehatan tanaman. Tanaman yang sehat memiliki daya tahan yang lebih baik terhadap serangan hama.</p><p><strong>Pengairan yang Tepat:</strong> Pastikan pola pengairan yang tepat agar tanah tidak terlalu lembap, karena ulat tanah cenderung lebih aktif dalam lingkungan yang lembap.</p><p><strong>Penggunaan Perangkap:</strong> Tempatkan perangkap di sekitar area pertanian untuk menangkap ngengat dewasa dan mengurangi populasi ulat tanah.</p><p><strong>Perhatian terhadap Varietas Unggul:</strong> Pilih varietas bawang merah yang lebih tahan terhadap serangan ulat tanah.</p><p><strong>Konsultasi Ahli:</strong> Jika serangan ulat tanah terus berlanjut, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang sesuai.</p>', '1691838282.jpeg', '2023-08-12 03:04:42', '2023-08-12 03:47:03'),
(8, 1, 'H3', 'Hama Ulat Bawang', '<p><strong>Detail tentang Hama Ulat Bawang pada Tanaman Bawang Merah:</strong></p><p>Hama ulat bawang adalah salah satu masalah serius pada tanaman bawang merah. Ulat bawang adalah tahap larva dari ngengat yang menyerang tanaman bawang merah. Mereka merusak daun dan bagian atas tanaman, mengurangi kualitas dan hasil panen.</p><p><strong>Ciri-ciri Ulat Bawang:</strong></p><ul><li>Ulat bawang memiliki tubuh lunak, biasanya berwarna hijau atau kuning muda dengan garis-garis atau bintik-bintik yang lebih gelap pada tubuhnya.</li><li>Ukuran ulat bawang bervariasi tergantung pada usia dan spesiesnya.</li></ul><p><strong>Siklus Hidup:</strong></p><ul><li>Ngengat dewasa bertelur di permukaan daun bawang merah.</li><li>Telur-telur ini menetas menjadi larva ulat bawang.</li><li>Larva mengamati daun dan tumbuh dengan memakan jaringan daun dan batang muda.</li><li>Setelah mencapai ukuran maksimal, larva akan berpindah ke tanah untuk membentuk kokon dan mengalami fase pupa sebelum berubah menjadi ngengat dewasa.</li></ul><p><strong>Kerusakan yang Diakibatkan:</strong></p><ul><li>Ulat bawang merusak daun bawang merah dengan menggigit jaringan, meninggalkan lubang-lubang yang mengurangi kemampuan fotosintesis.</li><li>Tanaman yang terinfestasi ulat bawang dapat tampak rapuh, daun-daunnya dapat menguning, bahkan mati.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda. Perhatikan tanda-tanda adanya ulat bawang seperti daun yang tergulung, lubang-lubang pada daun, dan keberadaan larva.</p><p><strong>Pemangkasan:</strong> Jika ada daun yang terinfestasi, potong dan buang daun tersebut untuk mencegah penyebaran larva ke bagian lain tanaman.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian. Singkirkan sisa-sisa tanaman yang sudah tidak produktif untuk mengurangi tempat berkembang biak ulat bawang.</p><p><strong>Perangkap Feromon:</strong> Gunakan perangkap feromon untuk menarik dan menangkap ngengat dewasa, sehingga mengurangi populasi ulat bawang.</p><p><strong>Penggunaan Serangga Penguntit:</strong> Beberapa serangga penguntit seperti parasitoid dan predator alami dapat membantu mengendalikan populasi ulat bawang.</p><p><strong>Penggunaan Pestisida Nabati:</strong> Pestisida nabati seperti neem oil atau ekstrak bawang putih bisa digunakan sebagai alternatif pengendalian kimia yang lebih ramah lingkungan.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko serangan hama ulat bawang pada tanaman bawang merah.</p><p><strong>Pengendalian Budaya:</strong> Menyusun jadwal penanaman sehingga menghindari periode ketika populasi ulat bawang paling aktif dapat membantu mengurangi serangan.</p><p><strong>Penggunaan Pestisida Kimia:</strong> Jika serangan sangat parah dan tindakan lain tidak efektif, pertimbangkan penggunaan pestisida kimia. Namun, pastikan untuk mematuhi petunjuk penggunaan dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Konsultasi Ahli:</strong> Jika masalah serangan ulat bawang sulit dikendalikan, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691838419.jpg', '2023-08-12 03:06:59', '2023-08-12 03:47:09'),
(9, 1, 'H4', 'Hama Orong-orong (Agrotis spp.)', '<p><strong>Detail tentang Hama Orong-orong pada Tanaman Bawang Merah:</strong></p><p>Hama orong-orong (Agrotis spp.), juga dikenal sebagai ulat merayap, adalah serangga yang bisa menjadi masalah pada tanaman bawang merah. Ulat orong-orong merupakan larva dari ngengat yang aktif pada malam hari dan dapat merusak tanaman dengan cara menggerek bagian bawah tanaman dan akar.</p><p><strong>Ciri-ciri Ulat Orong-orong:</strong></p><ul><li>Ulat orong-orong memiliki tubuh lunak dengan warna bervariasi, coklat tua, keabu-abuan, atau abu-abu gelap.</li><li>Tubuhnya agak bengkok dengan beberapa tonjolan.</li></ul><p><strong>Siklus Hidup:</strong></p><ul><li>Ngengat dewasa bertelur di dekat tanaman bawang merah atau di tanah di sekitar tanaman.</li><li>Larva menetas dari telur dan mulai menggerek bagian bawah tanaman, termasuk akar.</li><li>Ulat orong-orong aktif pada malam hari dan bersembunyi di dalam tanah atau tempat yang lembab di siang hari.</li><li>Setelah tumbuh dalam tanah dan makan selama beberapa minggu, ulat akan membentuk kokon di tanah sebelum berubah menjadi ngengat dewasa.</li></ul><p><strong>Kerusakan yang Diakibatkan:</strong></p><ul><li>Ulat orong-orong dapat merusak tanaman bawang merah dengan menggerek batang dan akar.</li><li>Serangan ini dapat mengganggu penyerapan air dan nutrisi oleh tanaman, mengakibatkan pertumbuhan yang lemah, daun yang menguning, dan akhirnya mengurangi hasil panen.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemantauan Rutin:</strong> Periksa tanaman bawang merah secara rutin, terutama di malam hari, untuk mendeteksi adanya ulat orong-orong atau tanda-tanda kerusakan.</p><p><strong>Penggunaan Pencahayaan:</strong> Gunakan cahaya lampu pada malam hari untuk menarik ulat orong-orong keluar dari tanah. Kemudian, tangkap dan singkirkan serangga tersebut.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan menghilangkan sisa-sisa tanaman yang sudah tidak produktif dan bahan organik yang dapat menjadi tempat persembunyian ulat.</p><p><strong>Penggunaan Perangkap:</strong> Tempatkan perangkap berbentuk cangkir yang berisi air di sekitar tanaman pada malam hari. Ulat yang naik akan terjebak dalam air.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko serangan ulat orong-orong pada tanaman bawang merah dan tanaman lainnya.</p><p><strong>Penggunaan Serangga Penguntit:</strong> Beberapa serangga penguntit seperti kelabang atau kumbang penggerek tanah bisa membantu mengendalikan populasi ulat orong-orong.</p><p><strong>Penggunaan Pestisida Nabati:</strong> Pestisida nabati seperti neem oil atau ekstrak bawang putih bisa digunakan sebagai alternatif pengendalian kimia yang lebih ramah lingkungan.</p><p><strong>Pengendalian Lingkungan:</strong> Buat lingkungan yang tidak menguntungkan bagi ulat orong-orong, seperti menjaga tanah tetap kering.</p><p><strong>Penggunaan Pestisida Kimia:</strong> Jika serangan sangat parah dan tindakan lain tidak efektif, pertimbangkan penggunaan pestisida kimia. Pastikan untuk mematuhi petunjuk penggunaan dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Konsultasi Ahli:</strong> Jika masalah serangan ulat orong-orong sulit dikendalikan, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691838678.jpg', '2023-08-12 03:11:18', '2023-08-12 03:47:15'),
(10, 1, 'H5', 'Hama Thrips', '<p><strong>Detail tentang Hama Thrips pada Tanaman Bawang Merah:</strong></p><p>Hama thrips adalah serangga kecil yang menjadi masalah pada tanaman bawang merah. Thrips adalah serangga berukuran sangat kecil yang dapat merusak tanaman dengan cara menghisap cairan tumbuhan dan mengakibatkan kerusakan pada daun, bunga, dan buah.</p><p><strong>Ciri-ciri Thrips:</strong></p><ul><li>Thrips memiliki ukuran kecil, sekitar 1-2 mm, sehingga sulit terlihat dengan mata telanjang.</li><li>Serangga ini berwarna bervariasi, dari transparan hingga coklat atau hitam, tergantung pada spesies dan tahap perkembangannya.</li></ul><p><strong>Siklus Hidup:</strong></p><ul><li>Thrips dewasa bertelur di dalam jaringan tanaman.</li><li>Telur-telur ini menetas menjadi larva yang menghisap cairan tanaman.</li><li>Setelah beberapa tahap perkembangan, larva akan berubah menjadi pupa dan kemudian menjadi thrips dewasa.</li><li>Thrips dapat berkembang biak dengan cepat dalam kondisi yang hangat dan lembap.</li></ul><p><strong>Kerusakan yang Diakibatkan:</strong></p><ul><li>Thrips merusak tanaman dengan cara menghisap cairan sel tumbuhan, mengakibatkan daun bercak-bercak putih atau perak.</li><li>Selain itu, mereka juga dapat membawa virus tanaman dan mentransmisikannya saat menghisap cairan, yang dapat merusak pertumbuhan dan kualitas tanaman bawang merah.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan secara rutin pada tanaman bawang merah Anda, terutama pada bagian bawah daun dan di sekitar bunga dan buah, untuk mendeteksi adanya thrips.</p><p><strong>Penggunaan Serangga Penguntit:</strong> Beberapa serangga penguntit seperti kepik atau kumbang khloropidae dapat membantu mengendalikan populasi thrips.</p><p><strong>Penggunaan Pestisida Nabati:</strong> Pestisida nabati seperti neem oil atau sabun insektisida dapat digunakan sebagai alternatif pengendalian kimia yang lebih ramah lingkungan.</p><p><strong>Penggunaan Pestisida Kimia:</strong> Jika serangan thrips sangat parah dan tindakan lain tidak efektif, pertimbangkan penggunaan pestisida kimia yang sesuai. Pastikan untuk mengikuti petunjuk penggunaan dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan menghilangkan sisa-sisa tanaman yang sudah tidak produktif. Thrips sering berkumpul di daun-daun yang rusak.</p><p><strong>Penyemprotan Air:</strong> Semprotkan air pada tanaman dengan tekanan sedang untuk menghilangkan atau mengurangi jumlah thrips pada tanaman.</p><p><strong>Pengendalian Lingkungan:</strong> Mempertahankan lingkungan yang kering dan ventilasi yang baik dapat membantu mengurangi populasi thrips.</p><p><strong>Pendekatan Terpadu:</strong> Kombinasikan beberapa metode di atas dalam pendekatan terpadu untuk mengendalikan serangan thrips.</p><p><strong>Pendidikan Petani:</strong> Berikan pelatihan kepada petani tentang pengenalan thrips, cara mencegah serangan, dan teknik pengendalian yang efektif.</p><p><strong>Konsultasi Ahli:</strong> Jika serangan thrips sulit dikendalikan, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691838807.jpg', '2023-08-12 03:13:27', '2023-08-12 03:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `hasilhamas`
--

CREATE TABLE `hasilhamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hama` bigint(20) UNSIGNED NOT NULL,
  `hasil_diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cf_max` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala_terpilih` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasilpenyakits`
--

CREATE TABLE `hasilpenyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `hasil_diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cf_max` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala_terpilih` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_15_002502_create_values_table', 1),
(6, '2022_05_15_010111_create_settings_table', 1),
(7, '2022_07_30_212712_create_gejalahamas_table', 1),
(8, '2022_07_30_213134_create_gejalapenyakits_table', 1),
(9, '2022_09_16_051843_create_penyakits_table', 1),
(10, '2022_09_16_052002_create_hamas_table', 1),
(11, '2022_09_16_052547_create_hasilhamas_table', 1),
(12, '2022_09_16_052620_create_hasilpenyakits_table', 1),
(13, '2022_09_16_052745_create_gejalahama_hama_table', 1),
(14, '2022_09_16_052836_create_gejalapenyakit_penyakit_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `det_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `srn_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `user_id`, `code`, `name`, `det_penyakit`, `srn_penyakit`, `images`, `created_at`, `updated_at`) VALUES
(6, 1, 'P1', 'Penyakit Layu Fusarium', '<p><strong>Detail tentang Penyakit Layu Fusarium pada Tanaman Bawang Merah:</strong></p><p>Penyakit layu Fusarium adalah masalah umum pada tanaman bawang merah yang disebabkan oleh jamur Fusarium. Penyakit ini dapat mengakibatkan layu, kerdil, dan akhirnya kematian tanaman bawang merah.</p><p><strong>Ciri-ciri Penyakit Layu Fusarium:</strong></p><ul><li>Tanaman yang terinfeksi akan menunjukkan gejala awal berupa daun yang layu, kerdil, dan warna daun yang menguning.</li><li>Akar tanaman dapat mengalami pembusukan dan memperlihatkan bintik-bintik coklat atau merah gelap.</li><li>Batang tanaman mungkin tampak berwarna gelap atau memperlihatkan bercak-bercak coklat.</li><li>Infeksi yang parah dapat menyebabkan matinya tanaman bawang merah.</li></ul><p><strong>Penyebab dan Siklus Penyakit:</strong></p><ul><li>Penyakit layu Fusarium disebabkan oleh jamur Fusarium spp. yang hidup di dalam tanah.</li><li>Jamur ini masuk ke dalam tanaman melalui akar dan akhirnya menyebar melalui sistem vaskular tanaman.</li><li>Jamur ini menyumbat pembuluh tanaman, mengganggu aliran air dan nutrisi, sehingga mengakibatkan gejala layu.</li></ul><p><strong>Faktor Lingkungan yang Mempengaruhi Penyebaran:</strong></p><ul><li>Kelembaban tanah yang tinggi dapat mempromosikan perkembangan jamur Fusarium.</li><li>Tanah yang terkontaminasi oleh sisa-sisa tanaman atau residu jamur Fusarium dapat menjadi sumber infeksi.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemilihan Bibit Unggul:</strong> Pilih bibit bawang merah yang tahan terhadap penyakit layu Fusarium jika tersedia.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko infeksi jamur Fusarium di lokasi yang sama.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan membuang sisa-sisa tanaman yang terinfeksi dan jangan menyimpan residu tanaman yang dapat menjadi sumber infeksi.</p><p><strong>Perawatan Tanah:</strong> Penerapan bahan organik dan penggunaan tanaman penutup tanah dapat membantu memperbaiki struktur dan kesehatan tanah, serta mengurangi risiko infeksi.</p><p><strong>Pengendalian Lingkungan:</strong> Jaga kelembaban tanah pada tingkat yang seimbang dan hindari penggenangan air yang berlebihan.</p><p><strong>Penggunaan Pestisida Biologis:</strong> Beberapa mikroorganisme seperti Trichoderma spp. dapat digunakan sebagai agen pengendalian biologis untuk menghambat pertumbuhan jamur Fusarium.</p><p><strong>Penggunaan Pestisida Kimia:</strong> Penggunaan fungisida kimia dapat menjadi pilihan jika serangan penyakit sudah parah. Pastikan untuk mengikuti petunjuk penggunaan dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Pendidikan Petani:</strong> Berikan pelatihan kepada petani tentang cara mengenali gejala penyakit layu Fusarium, pencegahan, dan teknik pengendalian.</p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda untuk mendeteksi gejala awal penyakit layu Fusarium.</p><p><strong>Konsultasi Ahli:</strong> Jika penyakit layu Fusarium tidak terkendali, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691839312.jpg', '2023-08-12 03:21:52', '2023-08-12 03:21:52'),
(7, 1, 'P2', 'Penyakit Bercak Ungu', '<p><strong>Detail tentang Penyakit Bercak Ungu pada Tanaman Bawang Merah:</strong></p><p>Penyakit bercak ungu, atau yang juga dikenal dengan istilah bercak daun ungu (Purple blotch), adalah penyakit yang umumnya menyerang tanaman bawang merah. Penyakit ini disebabkan oleh jamur Alternaria porri dan dapat mengakibatkan kerusakan pada daun bawang merah.</p><p><strong>Ciri-ciri Penyakit Bercak Ungu:</strong></p><ul><li>Gejala awal penyakit ini adalah munculnya bercak-barcak kecil berwarna coklat muda pada daun.</li><li>Bercak-bercak ini kemudian berkembang menjadi bercak-bercak yang lebih besar dengan warna ungu atau coklat tua di tengahnya dan tepi yang lebih terang.</li><li>Daun yang terinfeksi dapat mengering dan mati.</li></ul><p><strong>Penyebab dan Siklus Penyakit:</strong></p><ul><li>Penyakit bercak ungu disebabkan oleh jamur Alternaria porri yang dapat hidup dalam bentuk spora di tanah atau sisa-sisa tanaman.</li><li>Spora jamur menyebar melalui tetesan air hujan, embun, atau kontak langsung.</li><li>Jamur tumbuh dan berkembang biak pada daun bawang merah yang lembap, memicu gejala penyakit.</li></ul><p><strong>Faktor Lingkungan yang Mempengaruhi Penyebaran:</strong></p><ul><li>Kelembaban tinggi dan kondisi lembap mendukung perkembangan jamur Alternaria porri.</li><li>Tanaman yang tumbuh terlalu rapat atau tidak memiliki ventilasi yang cukup dapat lebih rentan terhadap penyakit ini.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemilihan Bibit Unggul:</strong> Pilih varietas bawang merah yang tahan terhadap penyakit bercak ungu jika tersedia.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko penyebaran penyakit di lokasi yang sama.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan membuang sisa-sisa tanaman yang terinfeksi dan residu tanaman yang dapat menjadi sumber infeksi.</p><p><strong>Perawatan Tanah:</strong> Penerapan bahan organik dan pemupukan yang seimbang dapat membantu meningkatkan kekebalan tanaman terhadap penyakit.</p><p><strong>Jarak Tanam yang Tepat:</strong> Menanam tanaman dengan jarak yang cukup antara satu dengan yang lain membantu ventilasi udara yang baik, mengurangi kelembaban yang berlebihan, dan mengurangi risiko penyebaran penyakit.</p><p><strong>Pengendalian Lingkungan:</strong> Pastikan area pertanian memiliki sirkulasi udara yang baik dan hindari kelembaban berlebih yang dapat mendukung perkembangan jamur.</p><p><strong>Penggunaan Fungisida:</strong> Jika infeksi sudah terjadi, penggunaan fungisida yang sesuai dapat membantu mengendalikan penyebaran penyakit. Pastikan untuk mengikuti petunjuk penggunaan dan berhati-hati terhadap dampak lingkungan.</p><p><strong>Pendidikan Petani:</strong> Berikan pelatihan kepada petani tentang gejala penyakit bercak ungu, praktik pencegahan, dan teknik pengendalian yang efektif.</p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda untuk mendeteksi gejala awal penyakit bercak ungu.</p><p><strong>Konsultasi Ahli:</strong> Jika penyakit bercak ungu tidak terkendali, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691839462.jpg', '2023-08-12 03:24:22', '2023-08-12 03:24:22'),
(8, 1, 'P3', 'Penyakit Mosaik Bawang Merah', '<p><strong>Detail tentang Penyakit atau Virus Mosaik pada Tanaman Bawang Merah:</strong></p><p>Penyakit atau virus mosaik adalah penyakit viral yang dapat menyerang berbagai jenis tanaman, termasuk tanaman bawang merah. Virus mosaik pada tanaman bawang merah, terutama saat musim hujan, adalah masalah serius yang dapat mengganggu pertumbuhan dan hasil panen. Virus mosaik biasanya disebabkan oleh berbagai virus yang dapat menginfeksi tanaman bawang merah.&nbsp;<br><br><strong>Ciri-ciri Virus Mosaik pada Tanaman Bawang Merah:</strong></p><ul><li>Daun tanaman bawang merah yang terinfeksi virus mosaik akan menunjukkan gejala bercak-bercak berwarna terang dan gelap, yang membentuk pola seperti mozaik.</li><li>Daun-daun ini mungkin mengalami kerdil atau mengerut, dan pertumbuhan tanaman terganggu.</li><li>Gejala dapat bervariasi tergantung pada jenis virus yang menginfeksi dan kondisi lingkungan.</li></ul><p><strong>Penyebab dan Penyebaran:</strong></p><ul><li>Virus mosaik menyebar melalui serangga vektor seperti kutu daun atau thrips yang menghisap cairan tumbuhan yang terinfeksi.</li><li>Musim hujan dapat mendukung penyebaran serangga vektor dan virus, karena kelembaban dan kondisi lingkungan yang lebih baik untuk perkembangan serangga.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pengendalian Serangga Vektor:</strong> Lakukan pengendalian serangga vektor seperti kutu daun atau thrips dengan menggunakan serangga penguntit, penyemprotan insektisida yang sesuai, atau teknik lain yang disarankan oleh ahli pertanian.</p><p><strong>Isolasi Tanaman:</strong> Jika ada tanaman yang terinfeksi, isolasikan mereka dari tanaman bawang merah yang sehat untuk mencegah penyebaran virus.</p><p><strong>Perawatan Tanaman yang Baik:</strong> Berikan perawatan yang baik untuk tanaman bawang merah Anda, termasuk pemupukan yang seimbang dan pengelolaan air yang tepat.</p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda selama musim hujan. Perhatikan gejala awal virus mosaik dan tindakan serangga vektor.</p><p><strong>Pestisida Nabati atau Kimia:</strong> Jika infeksi serius, pertimbangkan penggunaan pestisida nabati atau kimia yang disarankan. Pastikan untuk mengikuti petunjuk penggunaan dengan benar.</p><p><strong>Pendidikan Petani:</strong> Berikan pengetahuan kepada petani tentang gejala virus mosaik, cara pencegahan, dan teknik pengendalian yang efektif.</p><p><strong>Varietas Tahan:</strong> Pilih varietas bawang merah yang tahan terhadap penyakit atau virus mosaik jika tersedia.</p><p><strong>Konsultasi Ahli:</strong> Jika masalah virus mosaik tidak terkendali, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik, terutama yang sesuai dengan kondisi musim hujan.</p>', '1691839758.jpg', '2023-08-12 03:29:18', '2023-08-12 03:29:18'),
(9, 1, 'P4', 'Penyakit Embun Tepung', '<p><strong>Detail tentang Penyakit Embun Tepung pada Tanaman Bawang Merah:</strong></p><p>Penyakit embun tepung adalah salah satu penyakit jamur yang umum menyerang tanaman bawang merah. Penyakit ini disebabkan oleh jamur Golovinomyces cichoracearum dan dapat menyebabkan kerusakan pada daun dan bagian atas tanaman.</p><p><strong>Ciri-ciri Penyakit Embun Tepung:</strong></p><ul><li>Gejala awal penyakit ini adalah adanya lapisan putih seperti serbuk pada permukaan daun dan bagian atas tanaman.</li><li>Lapisan putih ini akan berkembang menjadi bercak-bercak besar yang mengakibatkan daun terlihat seperti dilapisi oleh serbuk tepung.</li><li>Tanaman yang terinfeksi dapat mengalami penghambatan pertumbuhan, daun menguning, dan akhirnya mati.</li></ul><p><strong>Penyebab dan Siklus Penyakit:</strong></p><ul><li>Penyakit embun tepung disebabkan oleh jamur Golovinomyces cichoracearum yang dapat hidup dalam bentuk spora di udara.</li><li>Spora jamur menyebar melalui udara dan menempel pada permukaan tanaman.</li><li>Jamur ini berkembang biak pada daun yang lembap, menghasilkan lapisan putih yang khas.</li></ul><p><strong>Faktor Lingkungan yang Mempengaruhi Penyebaran:</strong></p><ul><li>Kelembaban tinggi dan suhu yang lebih sejuk memfasilitasi perkembangan jamur embun tepung.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pengaturan Kelembaban:</strong> Hindari situasi yang memungkinkan terbentuknya kelembaban tinggi di sekitar tanaman, seperti penyiraman terlalu sering atau pengaturan tata letak tanaman yang tidak mengizinkan sirkulasi udara yang baik.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan membuang sisa-sisa tanaman yang terinfeksi. Ini akan mengurangi sumber spora jamur.</p><p><strong>Perawatan Tanaman yang Baik:</strong> Berikan pemupukan yang seimbang dan jaga tanaman dalam kondisi yang sehat untuk membantu meningkatkan ketahanan terhadap penyakit.</p><p><strong>Pemisahan Tanaman:</strong> Menanam tanaman dengan jarak yang cukup antara satu dengan yang lain memungkinkan sirkulasi udara yang lebih baik, mengurangi kelembaban yang berlebihan, dan menghambat penyebaran penyakit.</p><p><strong>Penggunaan Pestisida Nabati:</strong> Beberapa pestisida nabati seperti ekstrak neem oil atau minyak bawang putih dapat digunakan sebagai alternatif pengendalian yang lebih ramah lingkungan.</p><p><strong>Penggunaan Pestisida Kimia:</strong> Jika infeksi sudah serius, pertimbangkan penggunaan fungisida kimia yang sesuai. Pastikan untuk mengikuti petunjuk penggunaan dengan benar.</p><p><strong>Pendidikan Petani:</strong> Berikan pengetahuan kepada petani tentang gejala penyakit embun tepung, cara pencegahan, dan teknik pengendalian yang efektif.</p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda untuk mendeteksi gejala awal penyakit embun tepung.</p><p><strong>Varietas Tahan:</strong> Pilih varietas bawang merah yang tahan terhadap penyakit embun tepung jika tersedia.</p><p><strong>Konsultasi Ahli:</strong> Jika penyakit embun tepung tidak terkendali, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691839937.jpg', '2023-08-12 03:32:17', '2023-08-12 03:32:17'),
(10, 1, 'P5', 'Penyakit Antraknosa', '<p><strong>Detail tentang Penyakit Antraknosa pada Tanaman Bawang Merah:</strong></p><p>Antraknosa adalah penyakit jamur yang dapat menyerang berbagai jenis tanaman, termasuk tanaman bawang merah. Penyakit ini disebabkan oleh jamur Colletotrichum spp. dan dapat menyebabkan kerusakan pada daun, batang, dan buah tanaman bawang merah.</p><p><strong>Ciri-ciri Penyakit Antraknosa:</strong></p><ul><li>Gejala awal antraknosa pada tanaman bawang merah adalah munculnya bercak-bercak berwarna coklat atau hitam pada daun, batang, atau buah.</li><li>Bercak-bercak ini berkembang menjadi bercak yang lebih besar dengan tepi yang lebih gelap.</li><li>Daerah yang terinfeksi seringkali tampak lembap atau basah.</li><li>Pada buah bawang merah, antraknosa dapat menyebabkan luka berair dan berubah menjadi bercak busuk yang membusuk.</li></ul><p><strong>Penyebab dan Siklus Penyakit:</strong></p><ul><li>Penyakit antraknosa disebabkan oleh jamur Colletotrichum spp. yang dapat hidup dalam bentuk spora di tanah atau sisa-sisa tanaman.</li><li>Spora jamur menyebar melalui tetesan air hujan, embun, atau kontak langsung.</li><li>Jamur ini tumbuh dan berkembang biak pada daun yang lembap atau di permukaan buah yang basah.</li></ul><p><strong>Faktor Lingkungan yang Mempengaruhi Penyebaran:</strong></p><ul><li>Kelembaban tinggi dan kondisi lembap mendukung perkembangan jamur antraknosa.</li><li>Musim hujan atau kondisi cuaca basah dapat memperburuk penyebaran penyakit.</li></ul>', '<p><strong>Strategi Pengendalian dan Saran:</strong></p><p><strong>Pemilihan Bibit Unggul:</strong> Pilih varietas bawang merah yang tahan terhadap penyakit antraknosa jika tersedia.</p><p><strong>Rotasi Tanaman:</strong> Praktikkan rotasi tanaman untuk mengurangi risiko penyebaran penyakit di lokasi yang sama.</p><p><strong>Sanitasi:</strong> Jaga kebersihan lahan pertanian dengan membuang sisa-sisa tanaman yang terinfeksi dan residu tanaman yang dapat menjadi sumber infeksi.</p><p><strong>Pengaturan Air dan Irigasi:</strong> Hindari penyiraman yang berlebihan dan pastikan sistem irigasi memberikan air pada akar tanaman, bukan pada daun atau buah.</p><p><strong>Pemisahan Tanaman:</strong> Menanam tanaman dengan jarak yang cukup antara satu dengan yang lain memungkinkan sirkulasi udara yang lebih baik dan mengurangi risiko penyebaran penyakit.</p><p><strong>Penggunaan Pestisida:</strong> Jika infeksi sudah serius, pertimbangkan penggunaan fungisida yang sesuai. Pastikan untuk mengikuti petunjuk penggunaan dengan benar.</p><p><strong>Pendidikan Petani:</strong> Berikan pengetahuan kepada petani tentang gejala penyakit antraknosa, cara pencegahan, dan teknik pengendalian yang efektif.</p><p><strong>Pemantauan Rutin:</strong> Lakukan pemantauan rutin pada tanaman bawang merah Anda untuk mendeteksi gejala awal penyakit antraknosa.</p><p><strong>Varietas Tahan:</strong> Pilih varietas bawang merah yang tahan terhadap penyakit antraknosa jika tersedia.</p><p><strong>Konsultasi Ahli:</strong> Jika penyakit antraknosa tidak terkendali, konsultasikan dengan ahli pertanian atau petugas pertanian lokal untuk solusi yang lebih spesifik.</p>', '1691840027.JPG', '2023-08-12 03:33:47', '2023-08-12 03:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` enum('input','select') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `input_type`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Pakar Diagnosa Hama dan Penyakit pada Tanaman Bawang Merah', '<p>Tanaman Bawang Merah adalah salah satu jenis tanaman umbi yang populer dalam budidaya pertanian. Tanaman ini memiliki daun hijau dan umbi yang digunakan sebagai bahan masakan dan rempah-rempah. Proses budidaya tanaman bawang merah membutuhkan perhatian khusus terhadap berbagai faktor agar dapat tumbuh dengan baik dan menghasilkan umbi yang berkualitas.</p><p>Dalam konteks pertanian, penggunaan sistem pakar memiliki peran penting dalam mendukung para petani atau ahli pertanian dalam mengatasi berbagai masalah yang mungkin terjadi pada tanaman bawang merah. Sistem pakar ini memanfaatkan komputer untuk melakukan diagnosa berdasarkan pengetahuan dan pemahaman dari para ahli pertanian.</p><p>Salah satu metode yang diterapkan dalam sistem pakar untuk mendiagnosa masalah pada tanaman bawang merah adalah metode Certainty Factor. Metode ini memungkinkan untuk mengukur tingkat kepastian suatu fakta atau informasi terkait dengan kondisi tanaman, apakah itu pasti atau tidak pasti. Metode ini dapat membantu petani atau ahli pertanian dalam mengambil keputusan yang tepat dalam merawat tanaman bawang merah.</p><p>Kelebihan utama dari sistem pakar ini adalah kemampuannya untuk menambahkan berbagai jenis hipotesis terkait dengan masalah yang mungkin dihadapi pada tanaman bawang merah, seperti serangan hama atau penyakit. Sistem ini juga memuat informasi tentang gejala-gejala yang terkait dengan hama atau penyakit tersebut. Dengan bantuan sistem pakar ini, petani dapat melakukan diagnosa dengan lebih akurat untuk mengidentifikasi hama atau penyakit yang mungkin menginfeksi tanaman bawang merah mereka.</p><p>Secara keseluruhan, Sistem pakar AlliumCare memiliki potensi besar dalam mendukung budidaya tanaman bawang merah. Dengan menggunakan metode Certainty Factor dan kemampuannya untuk mengelola informasi tentang berbagai masalah yang mungkin terjadi pada tanaman bawang merah, sistem ini dapat menjadi alat yang berharga bagi para petani dalam meningkatkan hasil panen dan menjaga kesehatan tanaman mereka.</p>', 'input', '2023-08-11 19:47:14', '2023-08-12 06:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$HZm5c/Jltmm2.pYONjLlUOBUgK1WP8McNK9eA/SxS1Pu.D8dRjaGy', 'admin', NULL, NULL, '2023-08-11 19:47:13', '2023-08-11 19:47:13'),
(2, 'User', 'user@mail.com', '$2y$10$IkblL3DNTNN1xeFWM6.mD.tdEZDMWSGshNP24UbZYkjAASLgHmZ1C', 'user', NULL, NULL, '2023-08-11 19:47:13', '2023-08-11 19:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Sedikit Yakin', 0.40, '2023-08-12 05:21:51', '2023-08-12 06:27:29'),
(2, 'Sangat Yakin', 1.00, '2023-08-12 05:21:51', '2023-08-12 06:27:29'),
(3, 'Cukup Yakin', 0.60, '2023-08-12 05:21:51', '2023-08-12 06:27:29'),
(4, 'Yakin', 0.80, '2023-08-12 05:21:51', '2023-08-12 06:27:29'),
(5, 'Tidak Yakin', 0.20, '2023-08-12 05:28:25', '2023-08-12 06:27:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejalahamas`
--
ALTER TABLE `gejalahamas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejalahamas_code_unique` (`code`);

--
-- Indexes for table `gejalahama_hama`
--
ALTER TABLE `gejalahama_hama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejalahama_hama_hama_id_foreign` (`hama_id`),
  ADD KEY `gejalahama_hama_gejalahama_id_foreign` (`gejalahama_id`);

--
-- Indexes for table `gejalapenyakits`
--
ALTER TABLE `gejalapenyakits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejalapenyakits_code_unique` (`code`);

--
-- Indexes for table `gejalapenyakit_penyakit`
--
ALTER TABLE `gejalapenyakit_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejalapenyakit_penyakit_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `gejalapenyakit_penyakit_gejalapenyakit_id_foreign` (`gejalapenyakit_id`);

--
-- Indexes for table `hamas`
--
ALTER TABLE `hamas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hamas_code_unique` (`code`),
  ADD KEY `hamas_user_id_foreign` (`user_id`);

--
-- Indexes for table `hasilhamas`
--
ALTER TABLE `hasilhamas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasilhamas_id_hama_foreign` (`id_hama`);

--
-- Indexes for table `hasilpenyakits`
--
ALTER TABLE `hasilpenyakits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasilpenyakits_id_penyakit_foreign` (`id_penyakit`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyakits_code_unique` (`code`),
  ADD KEY `penyakits_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejalahamas`
--
ALTER TABLE `gejalahamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gejalahama_hama`
--
ALTER TABLE `gejalahama_hama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `gejalapenyakits`
--
ALTER TABLE `gejalapenyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `gejalapenyakit_penyakit`
--
ALTER TABLE `gejalapenyakit_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `hamas`
--
ALTER TABLE `hamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hasilhamas`
--
ALTER TABLE `hasilhamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasilpenyakits`
--
ALTER TABLE `hasilpenyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejalahama_hama`
--
ALTER TABLE `gejalahama_hama`
  ADD CONSTRAINT `gejalahama_hama_gejalahama_id_foreign` FOREIGN KEY (`gejalahama_id`) REFERENCES `gejalahamas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejalahama_hama_hama_id_foreign` FOREIGN KEY (`hama_id`) REFERENCES `hamas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gejalapenyakit_penyakit`
--
ALTER TABLE `gejalapenyakit_penyakit`
  ADD CONSTRAINT `gejalapenyakit_penyakit_gejalapenyakit_id_foreign` FOREIGN KEY (`gejalapenyakit_id`) REFERENCES `gejalapenyakits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejalapenyakit_penyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hamas`
--
ALTER TABLE `hamas`
  ADD CONSTRAINT `hamas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasilhamas`
--
ALTER TABLE `hasilhamas`
  ADD CONSTRAINT `hasilhamas_id_hama_foreign` FOREIGN KEY (`id_hama`) REFERENCES `hamas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasilpenyakits`
--
ALTER TABLE `hasilpenyakits`
  ADD CONSTRAINT `hasilpenyakits_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD CONSTRAINT `penyakits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
