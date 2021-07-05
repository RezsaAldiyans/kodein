-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 05:31 PM
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
  `kategori_user` enum('end-user','administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `email`, `password`, `tgl_gabung`, `profile_user`, `asal_kota`, `exp`, `badges`, `level`, `kategori_user`) VALUES
('pelajar-20210609065805', 'mirai', 'mirai@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-06-09 06:58:05', 'https://pbs.twimg.com/profile_images/1377694404048080896/2xkOsX2r_400x400.jpg', '', 100, 'beginner', 2, 'end-user'),
('pelajar-20210614011449', 'kodein', 'kodein@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-06-14 01:14:49', 'assets/images/kodein-logo-k-560x560.png', '', 3001, 'beginner', 20, 'end-user'),
('pelajar-20210703024209', 'yoges', 'yoges@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 02:42:09', 'assets/images/kodein-logo-k-560x560.png', '', 4500, 'beginner', 20, 'end-user'),
('pelajar-20210703030220', 'test1', 'test1@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:02:20', 'assets/images/kodein-logo-k-560x560.png', '', 3000, 'beginner', 20, 'end-user'),
('pelajar-20210703030233', 'test2', 'test2@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:02:33', 'assets/images/kodein-logo-k-560x560.png', '', 4330, 'beginner', 20, 'end-user'),
('pelajar-20210703030246', 'test3', 'test3@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:02:46', 'assets/images/kodein-logo-k-560x560.png', '', 4210, 'beginner', 20, 'end-user'),
('pelajar-20210703030258', 'test4', 'test4@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:02:58', 'assets/images/kodein-logo-k-560x560.png', '', 4302, 'beginner', 20, 'end-user'),
('pelajar-20210703030311', 'test5', 'test5@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:03:11', 'assets/images/kodein-logo-k-560x560.png', '', 4320, 'beginner', 20, 'end-user'),
('pelajar-20210703030325', 'test6', 'test6@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:03:25', 'assets/images/kodein-logo-k-560x560.png', '', 4423, 'beginner', 20, 'end-user'),
('pelajar-20210703030340', 'test7', 'test7@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:03:40', 'assets/images/kodein-logo-k-560x560.png', '', 4232, 'beginner', 20, 'end-user'),
('pelajar-20210703030354', 'test8', 'test8@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:03:54', 'assets/images/kodein-logo-k-560x560.png', '', 4000, 'beginner', 20, 'end-user'),
('pelajar-20210703030408', 'test9', 'test9@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:04:08', 'assets/images/kodein-logo-k-560x560.png', '', 4000, 'beginner', 20, 'end-user'),
('pelajar-20210703030426', 'test10', 'test10@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 03:04:26', 'assets/images/kodein-logo-k-560x560.png', '', 4000, 'beginner', 20, 'end-user'),
('pelajar-20210703111037', 'mikhael', 'mik@gmail.com', 'c4673dd606f1f7bd5045dd337b0c9d06', '2021-07-03 11:10:37', 'assets/images/kodein-logo-k-560x560.png', '', 3020, 'beginner', 20, 'end-user');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` varchar(10) NOT NULL,
  `id_akun` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `nama_materi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_akun`, `id_kelas`, `tgl_selesai`, `nama_materi`) VALUES
('history1', 'pelajars-20210609065805', 'kelas1', '2021-07-02 14:01:53', 'Kelas awal');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_koding`
--

CREATE TABLE `kelas_koding` (
  `id_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `total_materi` int(11) DEFAULT NULL,
  `estimasi_belajar` int(11) DEFAULT NULL,
  `level` enum('newbie','intermediate','profesional') DEFAULT NULL,
  `pelajar_terdaftar` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_user`
--

CREATE TABLE `kelas_user` (
  `id_kelas` varchar(20) DEFAULT NULL,
  `id_akun` varchar(50) DEFAULT NULL,
  `nama_kelas` text NOT NULL,
  `status_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_user`
--

INSERT INTO `kelas_user` (`id_kelas`, `id_akun`, `nama_kelas`, `status_kelas`) VALUES
('kelas-123', 'pelajar-20210609065805', 'JAVASCRIPT', 'masih berjalan'),
('kelas-1234', 'pelajar-20210609065805', 'HTML', 'masih berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id_akun` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `badges` enum('rookie','beginner','intermediate','pro') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`id_akun`, `nama_lengkap`, `level`, `exp`, `badges`) VALUES
('pelajar-20210609065805', 'mirai', 20, 20000, 'pro'),
('pelajar-20210614011449', 'kodein', 20, 30000, 'pro');

-- --------------------------------------------------------

--
-- Table structure for table `materi_kelas`
--

CREATE TABLE `materi_kelas` (
  `id_materi` varchar(20) NOT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `nama_materi` varchar(255) DEFAULT NULL,
  `total_halaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('pengunjung-2', '2021-06-16 00:00:00', 'Android', 'Nexus 5', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36'),
('pengunjung-3', '2021-06-16 12:02:52', 'Android', 'Nexus 5', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36'),
('pengunjung-4', '2021-06-16 12:03:10', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36'),
('pengunjung-6', '2021-06-22 08:05:34', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'),
('pengunjung-7', '2021-06-22 08:35:02', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36'),
('pengunjung-8', '2021-06-22 10:03:24', 'NT', 'Win64; x64', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36');

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
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `materi_kelas`
--
ALTER TABLE `materi_kelas`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
