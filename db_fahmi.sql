-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 17.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fahmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `level`, `log`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '2018-03-30 02:51:21'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'user', '2018-04-02 18:27:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krisis`
--

CREATE TABLE `krisis` (
  `id_krisis` int(11) NOT NULL,
  `upt` varchar(100) NOT NULL,
  `ultg` varchar(100) NOT NULL,
  `penghantar` varchar(100) NOT NULL,
  `kv` int(50) NOT NULL,
  `tower` varchar(100) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `update` varchar(20) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kkp` varchar(100) NOT NULL,
  `kelling` varchar(100) NOT NULL,
  `kelpo` varchar(100) NOT NULL,
  `kelfo` varchar(100) NOT NULL,
  `skoli` varchar(50) NOT NULL,
  `skopo` varchar(50) NOT NULL,
  `skohu` varchar(20) NOT NULL,
  `klali` varchar(50) NOT NULL,
  `klapo` varchar(100) NOT NULL,
  `klahu` varchar(50) NOT NULL,
  `anomali` varchar(100) NOT NULL,
  `tautan` varchar(50) NOT NULL,
  `penanganan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `risiko` varchar(100) NOT NULL,
  `mitigasi` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  `foto3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_group`
--

CREATE TABLE `ms_group` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_aktif` int(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_group`
--

INSERT INTO `ms_group` (`group_id`, `group_name`, `group_aktif`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Admin', 1, '2021-04-02 22:07:08', 1, '2021-04-02 22:07:08', 1),
(2, 'User', 1, '2021-04-02 22:07:08', 1, '2021-04-03 00:10:05', 2),
(3, 'Root', 1, '2021-04-10 00:00:00', NULL, '2021-04-10 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_group_menu`
--

CREATE TABLE `ms_group_menu` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_group_menu`
--

INSERT INTO `ms_group_menu` (`group_id`, `menu_id`, `created_at`, `created_by`) VALUES
(1, 1, '2021-04-02 22:07:09', 1),
(1, 2, '2021-04-02 22:07:09', 1),
(1, 3, '2021-04-02 22:07:09', 1),
(1, 4, '2021-04-02 22:07:09', 1),
(1, 14, '2021-04-10 15:45:47', NULL),
(2, 14, '2021-04-10 15:45:55', NULL),
(1, 15, '2021-04-10 15:49:03', NULL),
(1, 16, '2021-04-10 15:49:05', NULL),
(3, 1, '2021-04-10 15:52:25', NULL),
(3, 2, '2021-04-10 15:52:25', NULL),
(3, 3, '2021-04-10 15:52:25', NULL),
(3, 4, '2021-04-10 15:52:26', NULL),
(3, 14, '2021-04-10 15:52:26', NULL),
(3, 15, '2021-04-10 15:52:26', NULL),
(3, 16, '2021-04-10 15:52:26', NULL),
(3, 0, '2021-04-10 15:52:27', NULL),
(3, 0, '2021-04-10 15:52:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_menu`
--

CREATE TABLE `ms_menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_kode` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `menu_aktif` int(2) DEFAULT NULL,
  `menu_level` int(11) DEFAULT NULL,
  `menu_parent_id` int(11) DEFAULT NULL,
  `menu_parent_kode` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_menu`
--

INSERT INTO `ms_menu` (`menu_id`, `menu_kode`, `menu_name`, `menu_link`, `menu_icon`, `menu_aktif`, `menu_level`, `menu_parent_id`, `menu_parent_kode`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '01', 'Admin System', '#', 'fa fa-gears', 1, 1, 0, '', '2021-04-02 22:07:08', 1, '2021-04-10 00:00:00', 1),
(2, '01.1', 'Master User', 'ms_user', '', 1, 2, 1, '01', '2021-04-02 22:07:08', 1, '2021-04-02 22:07:08', 1),
(3, '01.2', 'Master Group', 'ms_group', '', 1, 2, 1, '01', '2021-04-02 22:07:08', 1, '2021-04-02 22:07:08', 1),
(4, '01.3', 'Master Menu', 'ms_menu', '', 1, 2, 1, '01', '2021-04-02 22:07:08', 1, '2021-04-02 22:07:08', 1),
(14, '02', 'Dashboard', 'admin', '', 1, 1, 0, '', '2021-04-10 00:00:00', NULL, '2021-04-10 00:00:00', NULL),
(15, '03', 'Admin Data', '#', '', 1, 1, 0, '', '2021-04-10 00:00:00', NULL, '2021-04-10 00:00:00', NULL),
(16, '03.1', 'Data Krisis', 'admin/krisis', '', 1, 2, 15, '03', '2021-04-10 00:00:00', NULL, '2021-04-10 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_user`
--

CREATE TABLE `ms_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_aktif` int(2) DEFAULT NULL,
  `is_superuser` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_user`
--

INSERT INTO `ms_user` (`user_id`, `username`, `user_fullname`, `email`, `group_id`, `password`, `user_aktif`, `is_superuser`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'Administrator', NULL, 1, '21232f297a57a5a743894a0e4a801fc3', 1, 1, NULL, NULL, NULL, NULL),
(3, 'tadin', 'Muhammad Iqbal Muhtadin', NULL, 2, '7b410ed61b0a43480cf6d1fbcfa73d63', 1, 0, '2021-04-10 00:00:00', NULL, '2021-04-10 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `krisis`
--
ALTER TABLE `krisis`
  ADD PRIMARY KEY (`id_krisis`);

--
-- Indeks untuk tabel `ms_group`
--
ALTER TABLE `ms_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indeks untuk tabel `ms_menu`
--
ALTER TABLE `ms_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `krisis`
--
ALTER TABLE `krisis`
  MODIFY `id_krisis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_group`
--
ALTER TABLE `ms_group`
  MODIFY `group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ms_menu`
--
ALTER TABLE `ms_menu`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
