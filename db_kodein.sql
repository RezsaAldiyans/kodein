-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:42 PM
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
  `twitter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `email`, `password`, `tgl_gabung`, `profile_user`, `asal_kota`, `exp`, `badges`, `level`, `kategori_user`, `linkedin`, `instagram`, `twitter`) VALUES
('admin', 'mikhael hosea', 'mikhael.hosea@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-08-13 07:22:38', 'assets/images/admin.jpg', 'Jakarta', 2800, 'rookie', 0, 'administrator', 'https://www.linkedin.com/in/mikhael-hosea', 'https://instagram.com/mikhaelhosea', 'https://twitter.com/test'),
('pelajar-20210609065805', 'mirai', 'mirai@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-06-09 00:00:00', 'assets/images/admin.jpg', 'bekasi', 5000, 'intermediate', 50, 'end-user', 'https://www.linkedin.com/in/mikhael-hosea', 'https://instagram.com/mikhaelhosea', ''),
('pelajar-20210614011449', 'kodeins', 'kodein@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-06-14 00:00:00', 'assets/images/kodein-logo-k-560x560.png', 'jakarta', 7000, 'professional', 70, 'end-user', '', '', ''),
('pelajar-20210703024209', 'yoges', 'yoges@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2800, 'beginner', 28, 'end-user', '', '', ''),
('pelajar-20210703030220', 'test1', 'test1@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2200, 'beginner', 22, 'end-user', '', '', ''),
('pelajar-20210703030233', 'test2', 'test2@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2300, 'beginner', 23, 'end-user', '', '', ''),
('pelajar-20210703030258', 'test4', 'test4@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2500, 'beginner', 25, 'end-user', '', '', ''),
('pelajar-20210703030311', 'test5', 'test5@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2600, 'beginner', 26, 'end-user', '', '', ''),
('pelajar-20210703030325', 'test6', 'test6@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2200, 'beginner', 22, 'end-user', '', '', ''),
('pelajar-20210703030340', 'test7', 'test7@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2100, 'beginner', 21, 'end-user', '', '', ''),
('pelajar-20210703030354', 'test8', 'test8@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2300, 'beginner', 23, 'end-user', '', '', ''),
('pelajar-20210703030408', 'test9', 'test9@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 2501, 'beginner', 25, 'end-user', '', '', ''),
('pelajar-20210725073030', 'yuvika', 'yuvi@gmail.com', '97f21c2c62f7151db6edc0e9ccccf8e6', '2021-07-25 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 0, 'rookie', 0, 'end-user', '', '', ''),
('pelajar-20210812074540', 'yoges', 'yoges@gmail.com', '5d76b59f14ee06a7c730d7caa2637f0d', '2021-08-12 00:00:00', 'assets/images/kodein-logo-k-560x560.png', '', 0, 'rookie', 0, 'end-user', '', '', ''),
('pelajar-20210915104942', 'user_kodein', 'kodeins@gmail.com', 'b6e778842f12ff0560ed4d3ccede8811', '2021-09-15 10:49:42', 'assets/images/default.jpg', '', 0, 'rookie', 0, 'end-user', '', '', '');

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
('history1', 'pelajar-20210609065805', 'html-1', '2021-08-23 05:53:58', '2021-08-23 10:01:53', 'Kelas HTML'),
('history3', 'pelajar-20210609065805', 'js-1', '2021-08-23 13:44:52', '2021-08-23 15:45:54', 'Kelas JAVASCRIPT');

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
('css-1', 'CSS', 'Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.', 5, 'css.png', 60, 'newbie', 1),
('html-1', 'HTML', 'Perkenalan HTML dasar untuk membuat website', 2, 'mbr-9.png', 60, 'newbie', 1),
('js-1', 'JAVASCRIPT', 'JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer, Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.', 5, 'mbr-5.png', 60, 'newbie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_materi`
--

CREATE TABLE `kelas_materi` (
  `id_materi` varchar(20) NOT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `id_soal` int(11) NOT NULL,
  `materi_title` varchar(255) NOT NULL,
  `submateri_title` varchar(255) NOT NULL,
  `tipe_materi` int(11) NOT NULL,
  `text_slides` text NOT NULL,
  `gambar_slides` varchar(255) NOT NULL,
  `subject_card` text NOT NULL,
  `konteks_card` text NOT NULL,
  `subject_codesite` text NOT NULL,
  `soal_pilgan` text NOT NULL,
  `pil_a` text NOT NULL,
  `pil_b` text NOT NULL,
  `pil_c` text NOT NULL,
  `pil_d` text NOT NULL,
  `kunci_pilgan` varchar(50) NOT NULL,
  `soal_puzzle` text NOT NULL,
  `jawaban_puzzle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_materi`
--

INSERT INTO `kelas_materi` (`id_materi`, `id_kelas`, `id_soal`, `materi_title`, `submateri_title`, `tipe_materi`, `text_slides`, `gambar_slides`, `subject_card`, `konteks_card`, `subject_codesite`, `soal_pilgan`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `kunci_pilgan`, `soal_puzzle`, `jawaban_puzzle`) VALUES
('1', 'html-1', 1, 'Perkenalan HTML 1', 'Tag HTML', 1, 'Perkenalan tag pada HTML!', '', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', '', '', '', '', '', '', '', ''),
('2', 'html-1', 2, 'Perkenalan 2', 'Tag HTML', 1, 'Perkenalan tag pada HTML!', '', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', 'Perkenalan tag pada HTML!', '', '', '', '', '', '', '', '');

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
(1, '1', 1, '<p>Buatlah tag h1 dengan kata \"Hello World\"</p>\r\n<p>Buatlah tag h2 dengan kata \"Hello World\"</p>', '<h1>Hello World</h1>\r\n<h2>Hello World</h2>', NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2', 2, NULL, NULL, '<p>HTML kepanjangan dari ?</p>', '<p>A. Hypertext Markup Language</p>', '<p>B. Hypertext Mark Lone</p>', '<p>C. Hyper Me Love</p>', '<p>D. Hindari Markas Lalu</p>', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_user`
--

CREATE TABLE `kelas_user` (
  `ids_KU` int(11) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `id_akun` varchar(50) DEFAULT NULL,
  `status_kelas` varchar(50) DEFAULT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_user`
--

INSERT INTO `kelas_user` (`ids_KU`, `id_kelas`, `id_akun`, `status_kelas`, `progress`) VALUES
(1, 'css-1', 'admin', 'masih berjalan', 0),
(2, 'html-1', 'pelajar-20210609065805', 'masih berjalan', 0),
(3, 'js-1', 'pelajar-20210609065805', 'masih berjalan', 0),
(4, 'html-1', 'admin', 'masih berjalan', 1),
(5, 'js-1', 'admin', 'masih berjalan', 0);

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
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas_user`
--
ALTER TABLE `kelas_user`
  MODIFY `ids_KU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
