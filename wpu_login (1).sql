-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2019 pada 03.35
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta`
--

CREATE TABLE `akta` (
  `id_akta` int(12) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `tgllahir` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akta`
--

INSERT INTO `akta` (`id_akta`, `nik`, `nama`, `alamat`, `tempatlahir`, `tgllahir`, `agama`, `keperluan`) VALUES
(1, '121211313', 'Aji Pratama', 'SsSas', 'sSSAS', '2019-08-08', 'ADADAD', 'adda'),
(2, '112123', 'Ajisdd', 'Ssdsd', 'sSSAS', '2019-08-08', 'ADADAD', 'adda'),
(3, '968868668', 'ldad', 'nakjdn', 'ldla', '2019-08-15', 'kadlkad', 'dladnad'),
(5, '3511191312990001', 'Vania Larissa', 'Jl. Jawa 86 gg Bahagia N0. 17', 'Jember', '1999-12-13', 'Islam', 'Pembaruan Akta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
--

CREATE TABLE `domisili` (
  `nik` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `domisili`
--

INSERT INTO `domisili` (`nik`, `nama`, `ttl`, `jenis_kelamin`, `pekerjaan`, `agama`, `status_perkawinan`, `kewarganegaraan`, `alamat`) VALUES
(2147483647, 'Vania Larissa', '', 'p', 'Mahasiswi', 'Islam', 'p', 'Indonesia', 'Jl. Mastrip 12 Jembe'),
(23133, 'adad', '', 'p', 'dD', 'Khatolik', 'l', 'S', 'XAS'),
(23, 'adad', 'sas', 'l', 'ada', 'Islam', 'l', 'ada', 'dad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktm`
--

CREATE TABLE `sktm` (
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `nik` int(16) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sktm`
--

INSERT INTO `sktm` (`nama`, `ttl`, `jenis_kelamin`, `nik`, `agama`, `pekerjaan`, `alamat`, `keperluan`) VALUES
('wa', 'Bondowoso, 14 Desember 1999', 'l', 315347586, 'Hindu', 'dv', 'rsth', 'Surat Rumah Sakit'),
('yrth', 'ndxgfn32', 'l', 67311134, 'Konghuchu', 'tutut', 'Mahasiswi', 'Pembaruan Akta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tanah`
--

CREATE TABLE `surat_tanah` (
  `NIK` int(16) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `luas_tanah` varchar(20) NOT NULL,
  `harga_petak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', 'profile1.jpg', '12345', 1, 1, 1552120289),
(6, 'Doddy Ferdiansyah', 'doddy@gmail.com', 'profile.jpg', '$2y$10$FhGzXwwTWLN/yonJpDLR0.nKoeWlKWBoRG9bsk0jOAgbJ007XzeFO', 1, 1, 1552285263),
(11, 'Sandhika Galih', 'sandhikagalih@gmail.com', 'default.jpg', '$2y$10$0QYEK1pB2L.Rdo.ZQsJO5eeTSpdzT7PvHaEwsuEyGSs0J1Qf5BoSq', 2, 1, 1553151354);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(10, 1, 5),
(11, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Surat Rekom'),
(6, 'Permintaan Pembuatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 5, 'Surat Domisili', 'user/domisili', 'fab fa-fw fa-youtube', 1),
(10, 5, 'Surat Pengantar Pindah', 'user/pengantarpindah', 'fab fa-fw fa-youtube', 1),
(11, 5, 'Surat Pengantar Nikah', 'user/pengantarnikah', 'fab fa-fw fa-youtube', 1),
(12, 5, 'Surat Pengantar Cerai', 'user/pengantarcerai', 'fab fa-fw fa-youtube', 1),
(13, 6, 'Pembuatan KTP', 'user/ktp', 'fab fa-fw fa-youtube', 1),
(14, 6, 'Pembuatan KK', 'user/kk', 'fab fa-fw fa-youtube', 1),
(15, 6, 'pembuatan akta', 'user/akta', 'fab fa-fw fa-youtube', 1),
(16, 6, 'pembuatan sktm', 'user/sktm', 'fab fa-fw fa-youtube', 1),
(17, 6, 'pembuatan surat tanah', 'user/surattanah', 'fab fa-fw fa-youtube', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta`
--
ALTER TABLE `akta`
  MODIFY `id_akta` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
