-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 08:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkksa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `role` int(2) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `dibuat`) VALUES
(1, 'Tamam Muhammad', 'maztamam67@gmail.com', '$2y$10$oRlxh14eHHFvzCT9e42IHOyhHiaxE7CAzl6vDM22PtxT.aAv1jCx6', 'tamamuhammad.png', 1, 1587654321),
(2, 'Kuswanto', 'engkus@gmail.com', '$2y$10$oRlxh14eHHFvzCT9e42IHOyhHiaxE7CAzl6vDM22PtxT.aAv1jCx6', 'default.jpg', 2, 1589877894),
(3, 'Muchammad Rizqi', 'isanhacker@gmail.com', '$2y$10$jg0iFs7Ijmeg/L42nxQnj.MmJPs4FcxIZr80FpKSsf5PTm50vWCtK', 'default.jpg', 2, 1589090871);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama_alumni` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `jurusan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `keg_set_lulus` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_industry` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `upload_foto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rating_smksa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `saran_smksa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama_alumni`, `jenis_kelamin`, `alamat`, `jurusan`, `tahun_lulus`, `no_telp`, `email`, `keg_set_lulus`, `nama_industry`, `upload_foto`, `rating_smksa`, `saran_smksa`, `tanggal_daftar`) VALUES
(2, 'Iqomudin', 'Laki-Laki', 'Pecakaran, Wonokerto, Pekalongan', 'Teknik Kendaraan Ringan Otomotif', 2021, '089765431657', 'santryloversmudin@gmail.com', 'Bekerja', 'Toyota', 'default.jpg', 'Mantap', 'Jos', '2020-05-01'),
(4, 'Alfan Baihaqi', 'Laki-Laki', 'Tegal', 'Teknik Komputer dan Jaringan', 2020, '087645673456', '', 'Pengangguran', '', '', '', '', '2020-05-04'),
(5, 'Ciana Tri Agusti', 'Perempuan', 'Ampelgading, Pemalang', 'Rekayasa Perangkat Lunak', 2021, '087656545689', 'cianataa@gmail.com', 'Kuliah', 'Oioi Academy', 'default.jpg', '', '', '2020-05-04'),
(6, 'Nur Fairoh', 'Perempuan', 'Bandar, Batang', 'Tata Busana', 2021, '089765642435', 'irohlovikom@gmail.com', 'Bekerja', 'Lab TB SMKSA', 'default.jpg', '', '', '2020-05-04'),
(7, 'sdfssdf', 'Perempuan', 'dssdfsfdsd', 'Tata Busana', 2019, '43363634', 'aaaa@gmail.com', 'Wirausaha', 'sadas as', 'images12_1.jpg', 'Kurang Baik', 'sa asadssad', '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `isi_lowongan` varchar(256) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `judul`, `isi_lowongan`, `gambar`, `tanggal_post`) VALUES
(2, 'Loker SMKSA', 'jadi Kepsek SMKSA', 'SA.png', '2020-05-07'),
(3, 'Tabiul Marfu', 'Bergabunglah ke Angkatan Tabi\'ul Marfu\' PPSA 18-21', 'Banner.jpg', '2020-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 4),
(6, 1, 3),
(8, 2, 1),
(9, 2, 5),
(10, 1, 5),
(11, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Admin'),
(3, 'Menu'),
(4, 'Profile'),
(5, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `icon` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `icon`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'fas fa-tachometer-alt fa-fw', 'dashboard', 1),
(2, 1, 'Tabel Alumni', 'fas fa-table', 'dashboard/table', 1),
(3, 1, 'Info Loker', 'fas fa-briefcase', 'dashboard/loker', 1),
(4, 2, 'Data Petugas', 'fas fa-user-check', 'admin', 1),
(5, 2, 'Role', 'fas fa-fw fa-user-tie', 'admin/role', 1),
(6, 2, 'Register Petugas', 'fas fa-user-plus', 'admin/signup', 1),
(7, 3, 'Menu Management', 'fas fa-fw fa-bars', 'menu', 1),
(8, 3, 'Submenu Management', 'fab fa-fw fa-elementor', 'menu/submenu', 1),
(9, 4, 'My Profile', 'fas fa-user-circle fa-fw', 'profile', 1),
(10, 4, 'Edit Profile', 'fas fa-fw fa-user-edit', 'profile/edit', 1),
(11, 4, 'Change Password', 'fas fa-fw fa-key', 'profile/changepassword', 1),
(12, 5, 'Export Laporan', 'fas fa-download', 'report', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
