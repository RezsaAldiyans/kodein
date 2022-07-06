-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 03:03 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kodein`
--

-- --------------------------------------------------------
--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tgl_gabung` datetime DEFAULT NULL,
  `profile_user` varchar(255) DEFAULT NULL,
  `asal_kota` text DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `badges` enum('rookie','beginner','intermediate','professional') DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `kategori_user` enum('end-user','administrator') NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `token` varchar(50) NOT NULL,
  `expired_token` int(3) NOT NULL,
  `status_token` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `email`, `password`, `tgl_gabung`, `profile_user`, `asal_kota`, `exp`, `badges`, `level`, `kategori_user`, `linkedin`, `instagram`, `twitter`, `token`, `expired_token`, `status_token`) VALUES
('pelajar-20220508211228', 'mikhael', 'mikhael.hosea@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2022-05-11 19:55:09', 'assets/images/default.jpg', '', 2100, 'rookie', 0, 'end-user', '', '', '', 'a9ecdc93624084b296a4e2663245fde7ce587e94', 60, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` varchar(10) NOT NULL,
  `id_akun` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `nama_materi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_akun`, `id_kelas`, `tgl_mulai`, `tgl_selesai`, `nama_materi`) VALUES
('history1', 'pelajar-20220508211228', 'html-1', '2021-08-23 05:53:58', '2021-08-23 10:01:53', 'Kelas HTML'),
('history3', 'pelajar-20220508211228', 'js-1', '2021-08-23 13:44:52', '2021-08-23 15:45:54', 'Kelas JAVASCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_koding`
--

CREATE TABLE `kelas_koding` (
  `id_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `deskripsi_kelas` text DEFAULT NULL,
  `total_materi` int(11) DEFAULT NULL,
  `icon_kelas` text NOT NULL,
  `estimasi_belajar` int(11) DEFAULT NULL,
  `level` enum('newbie','intermediate','profesional') DEFAULT NULL,
  `pelajar_terdaftar` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_koding`
--

INSERT INTO `kelas_koding` (`id_kelas`, `nama_kelas`, `deskripsi_kelas`, `total_materi`, `icon_kelas`, `estimasi_belajar`, `level`, `pelajar_terdaftar`) VALUES
('css-1', 'CSS', 'Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.', 14, 'css.png', 60, 'newbie', 1),
('html-1', 'HTML', 'Perkenalan HTML dasar untuk membuat website. HTML merupakan singkatan dari Hypertext Markup Language, yaitu bahasa markup standar untuk membuat dan menyusun halaman dan aplikasi web', 19, 'mbr-9.png', 60, 'newbie', 1),
('js-1', 'JAVASCRIPT', 'JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer, Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.', 16, 'mbr-5.png', 60, 'newbie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_materi`
--

CREATE TABLE `kelas_materi` (
  `id_materi` int(20) NOT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `id_soal` int(11) NOT NULL,
  `materi_title` varchar(255) NOT NULL,
  `submateri_title` varchar(255) NOT NULL,
  `tipe_materi` int(11) NOT NULL,
  `text_slides` text NOT NULL,
  `gambar_slides` varchar(255) NOT NULL,
  `subject_card` text NOT NULL,
  `konteks_card` text NOT NULL,
  `subject_codesite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_materi`
--

INSERT INTO `kelas_materi` (`id_materi`, `id_kelas`, `id_soal`, `materi_title`, `submateri_title`, `tipe_materi`, `text_slides`, `gambar_slides`, `subject_card`, `konteks_card`, `subject_codesite`) VALUES
(1, 'js-1', 1, 'Perkenalan Console', 'Menggunakan Console di JS', 1, '', '', '', '', ''),
(2, 'html-1', 2, 'Perkenalan HTML 1', 'Tag HTML', 1, 'Perkenalan tag pada HTML!', '', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!'),
(3, 'html-1', 3, 'Perkenalan HTML', 'Tag HTML', 1, 'Perkenalan tag pada HTML!', '', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!'),
(4, 'js-1', 4, 'Materi js-1 4', 'Submateri js-1 4', 1, '', '', '', '', ''),
(5, 'html-1', 5, 'Materi html-1 5', 'Submateri html-1 5', 1, '', '', '', '', ''),
(6, 'js-1', 6, 'Materi js-1 6', 'Submateri js-1 6', 1, '', '', '', '', ''),
(7, 'html-1', 7, 'Materi html-1 7', 'Submateri html-1 7', 1, '', '', '', '', ''),
(8, 'js-1', 8, 'Materi js-1 8', 'Submateri js-1 8', 1, '', '', '', '', ''),
(9, 'js-1', 9, 'Materi js-1 9', 'Submateri js-1 9', 1, '', '', '', '', ''),
(10, 'html-1', 10, 'Materi html-1 10', 'Submateri html-1 10', 1, '', '', '', '', ''),
(11, 'css-1', 11, 'Materi css-1 11', 'Submateri css-1 11', 1, '', '', '', '', ''),
(12, 'html-1', 12, 'Materi html-1 12', 'Submateri html-1 12', 1, '', '', '', '', ''),
(13, 'html-1', 13, 'Materi html-1 13', 'Submateri html-1 13', 1, '', '', '', '', ''),
(14, 'css-1', 14, 'Materi css-1 14', 'Submateri css-1 14', 1, '', '', '', '', ''),
(15, 'js-1', 15, 'Materi js-1 15', 'Submateri js-1 15', 1, '', '', '', '', ''),
(16, 'html-1', 16, 'Materi html-1 16', 'Submateri html-1 16', 1, '', '', '', '', ''),
(17, 'js-1', 17, 'Materi js-1 17', 'Submateri js-1 17', 1, '', '', '', '', ''),
(18, 'html-1', 18, 'Materi html-1 18', 'Submateri html-1 18', 1, '', '', '', '', ''),
(19, 'css-1', 19, 'Materi css-1 19', 'Submateri css-1 19', 1, '', '', '', '', ''),
(20, 'html-1', 20, 'Materi html-1 20', 'Submateri html-1 20', 1, '', '', '', '', ''),
(21, 'js-1', 21, 'Materi js-1 21', 'Submateri js-1 21', 1, '', '', '', '', ''),
(22, 'css-1', 22, 'Materi css-1 22', 'Submateri css-1 22', 1, '', '', '', '', ''),
(23, 'js-1', 23, 'Materi js-1 23', 'Submateri js-1 23', 1, '', '', '', '', ''),
(24, 'html-1', 24, 'Materi html-1 24', 'Submateri html-1 24', 1, '', '', '', '', ''),
(25, 'js-1', 25, 'Materi js-1 25', 'Submateri js-1 25', 1, '', '', '', '', ''),
(26, 'html-1', 26, 'Materi html-1 26', 'Submateri html-1 26', 1, '', '', '', '', ''),
(27, 'css-1', 27, 'Materi css-1 27', 'Submateri css-1 27', 1, '', '', '', '', ''),
(28, 'css-1', 28, 'Materi css-1 28', 'Submateri css-1 28', 1, '', '', '', '', ''),
(29, 'html-1', 29, 'Materi html-1 29', 'Submateri html-1 29', 1, '', '', '', '', ''),
(30, 'js-1', 30, 'Materi js-1 30', 'Submateri js-1 30', 1, '', '', '', '', ''),
(31, 'html-1', 31, 'Materi html-1 31', 'Submateri html-1 31', 1, '', '', '', '', ''),
(32, 'html-1', 32, 'Materi html-1 32', 'Submateri html-1 32', 1, '', '', '', '', ''),
(33, 'css-1', 33, 'Materi css-1 33', 'Submateri css-1 33', 1, '', '', '', '', ''),
(34, 'js-1', 34, 'Materi js-1 34', 'Submateri js-1 34', 1, '', '', '', '', ''),
(35, 'css-1', 35, 'Materi css-1 35', 'Submateri css-1 35', 1, '', '', '', '', ''),
(36, 'js-1', 36, 'Materi js-1 36', 'Submateri js-1 36', 1, '', '', '', '', ''),
(37, 'html-1', 37, 'Materi html-1 37', 'Submateri html-1 37', 1, '', '', '', '', ''),
(38, 'js-1', 38, 'Materi js-1 38', 'Submateri js-1 38', 1, '', '', '', '', ''),
(39, 'css-1', 39, 'Materi css-1 39', 'Submateri css-1 39', 1, '', '', '', '', ''),
(40, 'html-1', 40, 'Materi html-1 40', 'Submateri html-1 40', 1, '', '', '', '', ''),
(41, 'html-1', 41, 'Materi html-1 41', 'Submateri html-1 41', 1, '', '', '', '', ''),
(42, 'css-1', 42, 'Materi css-1 42', 'Submateri css-1 42', 1, '', '', '', '', ''),
(43, 'html-1', 43, 'Materi html-1 43', 'Submateri html-1 43', 1, '', '', '', '', ''),
(44, 'js-1', 44, 'Materi js-1 44', 'Submateri js-1 44', 1, '', '', '', '', ''),
(45, 'css-1', 45, 'Materi css-1 45', 'Submateri css-1 45', 1, '', '', '', '', ''),
(46, 'css-1', 46, 'Materi css-1 46', 'Submateri css-1 46', 1, '', '', '', '', ''),
(47, 'css-1', 47, 'Materi css-1 47', 'Submateri css-1 47', 1, '', '', '', '', ''),
(48, 'css-1', 48, 'Materi css-1 48', 'Submateri css-1 48', 1, '', '', '', '', ''),
(49, 'js-1', 49, 'Materi js-1 49', 'Submateri js-1 49', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_soal`
--

CREATE TABLE `kelas_soal` (
  `id_soal` int(11) NOT NULL,
  `id_materi` varchar(20) NOT NULL,
  `tipe_soal` int(11) NOT NULL,
  `soal_code` text DEFAULT NULL,
  `jawaban_code` text DEFAULT NULL,
  `soal_pilgan` text DEFAULT NULL,
  `pilgan_a` text DEFAULT NULL,
  `pilgan_b` text DEFAULT NULL,
  `pilgan_c` text DEFAULT NULL,
  `pilgan_d` text DEFAULT NULL,
  `jawaban_pilgan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_soal`
--

INSERT INTO `kelas_soal` (`id_soal`, `id_materi`, `tipe_soal`, `soal_code`, `jawaban_code`, `soal_pilgan`, `pilgan_a`, `pilgan_b`, `pilgan_c`, `pilgan_d`, `jawaban_pilgan`) VALUES
(1, '1', 1, 'Gunakan console untuk menampilkan Hello World!', 'console.log(\"Hello World!\")', NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2', 1, '<p>Buatlah tag h1 dengan kata \"Hello World\"</p>\r\n<p>Buatlah tag h2 dengan kata \"Hello World\"</p>', '<h1>Hello World</h1>\r\n<h2>Hello World</h2>', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '3', 2, NULL, NULL, '<p>HTML kepanjangan dari ?</p>', '<p>A. Hypertext Markup Language</p>', '<p>B. Hypertext Mark Lone</p>', '<p>C. Hyper Me Love</p>', '<p>D. Hindari Markas Lalu</p>', 'a'),
(4, '4', 1, 'ujicoba  4', 'ujicoba  4', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '5', 1, 'ujicoba  5', 'ujicoba  5', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '6', 1, 'ujicoba  6', 'ujicoba  6', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '7', 1, 'ujicoba  7', 'ujicoba  7', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '8', 1, 'ujicoba  8', 'ujicoba  8', NULL, NULL, NULL, NULL, NULL, NULL),
(9, '9', 1, 'ujicoba  9', 'ujicoba  9', NULL, NULL, NULL, NULL, NULL, NULL),
(10, '10', 1, 'ujicoba  10', 'ujicoba  10', NULL, NULL, NULL, NULL, NULL, NULL),
(11, '11', 1, 'ujicoba  11', 'ujicoba  11', NULL, NULL, NULL, NULL, NULL, NULL),
(12, '12', 1, 'ujicoba  12', 'ujicoba  12', NULL, NULL, NULL, NULL, NULL, NULL),
(13, '13', 1, 'ujicoba  13', 'ujicoba  13', NULL, NULL, NULL, NULL, NULL, NULL),
(14, '14', 1, 'ujicoba  14', 'ujicoba  14', NULL, NULL, NULL, NULL, NULL, NULL),
(15, '15', 1, 'ujicoba  15', 'ujicoba  15', NULL, NULL, NULL, NULL, NULL, NULL),
(16, '16', 1, 'ujicoba  16', 'ujicoba  16', NULL, NULL, NULL, NULL, NULL, NULL),
(17, '17', 1, 'ujicoba  17', 'ujicoba  17', NULL, NULL, NULL, NULL, NULL, NULL),
(18, '18', 1, 'ujicoba  18', 'ujicoba  18', NULL, NULL, NULL, NULL, NULL, NULL),
(19, '19', 1, 'ujicoba  19', 'ujicoba  19', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '20', 1, 'ujicoba  20', 'ujicoba  20', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '21', 1, 'ujicoba  21', 'ujicoba  21', NULL, NULL, NULL, NULL, NULL, NULL),
(22, '22', 1, 'ujicoba  22', 'ujicoba  22', NULL, NULL, NULL, NULL, NULL, NULL),
(23, '23', 1, 'ujicoba  23', 'ujicoba  23', NULL, NULL, NULL, NULL, NULL, NULL),
(24, '24', 1, 'ujicoba  24', 'ujicoba  24', NULL, NULL, NULL, NULL, NULL, NULL),
(25, '25', 1, 'ujicoba  25', 'ujicoba  25', NULL, NULL, NULL, NULL, NULL, NULL),
(26, '26', 1, 'ujicoba  26', 'ujicoba  26', NULL, NULL, NULL, NULL, NULL, NULL),
(27, '27', 1, 'ujicoba  27', 'ujicoba  27', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '28', 1, 'ujicoba  28', 'ujicoba  28', NULL, NULL, NULL, NULL, NULL, NULL),
(29, '29', 1, 'ujicoba  29', 'ujicoba  29', NULL, NULL, NULL, NULL, NULL, NULL),
(30, '30', 1, 'ujicoba  30', 'ujicoba  30', NULL, NULL, NULL, NULL, NULL, NULL),
(31, '31', 1, 'ujicoba  31', 'ujicoba  31', NULL, NULL, NULL, NULL, NULL, NULL),
(32, '32', 1, 'ujicoba  32', 'ujicoba  32', NULL, NULL, NULL, NULL, NULL, NULL),
(33, '33', 1, 'ujicoba  33', 'ujicoba  33', NULL, NULL, NULL, NULL, NULL, NULL),
(34, '34', 1, 'ujicoba  34', 'ujicoba  34', NULL, NULL, NULL, NULL, NULL, NULL),
(35, '35', 1, 'ujicoba  35', 'ujicoba  35', NULL, NULL, NULL, NULL, NULL, NULL),
(36, '36', 1, 'ujicoba  36', 'ujicoba  36', NULL, NULL, NULL, NULL, NULL, NULL),
(37, '37', 1, 'ujicoba  37', 'ujicoba  37', NULL, NULL, NULL, NULL, NULL, NULL),
(38, '38', 1, 'ujicoba  38', 'ujicoba  38', NULL, NULL, NULL, NULL, NULL, NULL),
(39, '39', 1, 'ujicoba  39', 'ujicoba  39', NULL, NULL, NULL, NULL, NULL, NULL),
(40, '40', 1, 'ujicoba  40', 'ujicoba  40', NULL, NULL, NULL, NULL, NULL, NULL),
(41, '41', 1, 'ujicoba  41', 'ujicoba  41', NULL, NULL, NULL, NULL, NULL, NULL),
(42, '42', 1, 'ujicoba  42', 'ujicoba  42', NULL, NULL, NULL, NULL, NULL, NULL),
(43, '43', 1, 'ujicoba  43', 'ujicoba  43', NULL, NULL, NULL, NULL, NULL, NULL),
(44, '44', 1, 'ujicoba  44', 'ujicoba  44', NULL, NULL, NULL, NULL, NULL, NULL),
(45, '45', 1, 'ujicoba  45', 'ujicoba  45', NULL, NULL, NULL, NULL, NULL, NULL),
(46, '46', 1, 'ujicoba  46', 'ujicoba  46', NULL, NULL, NULL, NULL, NULL, NULL),
(47, '47', 1, 'ujicoba  47', 'ujicoba  47', NULL, NULL, NULL, NULL, NULL, NULL),
(48, '48', 1, 'ujicoba  48', 'ujicoba  48', NULL, NULL, NULL, NULL, NULL, NULL),
(49, '49', 1, 'ujicoba  49', 'ujicoba  49', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_user`
--

CREATE TABLE `kelas_user` (
  `ids_KU` int(11) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `id_akun` varchar(50) DEFAULT NULL,
  `status_kelas` varchar(50) DEFAULT NULL,
  `progress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_user`
--

INSERT INTO `kelas_user` (`ids_KU`, `id_kelas`, `id_akun`, `status_kelas`, `progress`) VALUES
(1, 'css-1', 'admin', 'masih berjalan', '0'),
(2, 'html-1', 'pelajar-20210609065805', 'masih berjalan', '0'),
(3, 'js-1', 'pelajar-20210609065805', 'masih berjalan', '0'),
(4, 'html-1', 'admin', 'masih berjalan', '2'),
(5, 'js-1', 'admin', 'masih berjalan', '0,1,4'),
(14, 'html-1', 'pelajar-20220508211228', 'masih berjalan', '0,2');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` varchar(20) NOT NULL,
  `tgl_pengunjung` datetime DEFAULT NULL,
  `name_os` varchar(255) DEFAULT NULL,
  `name_device` varchar(255) DEFAULT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `tgl_pengunjung`, `name_os`, `name_device`, `user_agent`) VALUES
('pengunjung-1', '2021-06-15 00:00:00', 'Android', 'Nexus 5', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36'),
('pengunjung-10', '2021-07-02 01:57:08', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36'),
('pengunjung-11', '2021-07-05 08:17:23', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36'),
('pengunjung-12', '2021-07-09 06:47:24', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'),
('pengunjung-14', '2021-07-13 07:58:10', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'),
('pengunjung-15', '2021-07-25 07:27:19', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36'),
('pengunjung-18', '2021-08-10 10:09:37', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.115 Safari/537.36'),
('pengunjung-2', '2021-06-16 00:00:00', 'Android', 'Nexus 5', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36'),
('pengunjung-20', '2021-08-12 07:43:55', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.115 Safari/537.36'),
('pengunjung-21', '2021-08-16 02:54:27', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36'),
('pengunjung-22', '2021-08-20 02:28:19', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36'),
('pengunjung-23', '2021-08-23 07:52:03', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36'),
('pengunjung-24', '2021-08-25 11:00:24', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36'),
('pengunjung-25', '2021-08-26 12:19:52', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36'),
('pengunjung-26', '2021-09-15 10:10:53', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36'),
('pengunjung-3', '2021-06-16 12:02:52', 'Android', 'Nexus 5', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36'),
('pengunjung-36', '2022-02-19 09:18:20', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36'),
('pengunjung-4', '2021-06-16 12:03:10', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36'),
('pengunjung-6', '2021-06-22 08:05:34', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'),
('pengunjung-7', '2021-06-22 08:35:02', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'),
('pengunjung-8', '2021-06-22 10:03:24', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'),
('pengunjung-2', '2022-02-23 08:31:37', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `kelas_koding`
--
ALTER TABLE `kelas_koding`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_materi`
--
ALTER TABLE `kelas_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `kelas_soal`
--
ALTER TABLE `kelas_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `kelas_user`
--
ALTER TABLE `kelas_user`
  ADD PRIMARY KEY (`ids_KU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas_soal`
--
ALTER TABLE `kelas_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kelas_user`
--
ALTER TABLE `kelas_user`
  MODIFY `ids_KU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
