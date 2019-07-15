-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 04.39
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
-- Database: `puri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `import`
--

CREATE TABLE `import` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `import`
--

INSERT INTO `import` (`id`, `name`, `email`) VALUES
(1, 'Tani', '30'),
(2, 'Nelayan', '15'),
(3, 'Swasta', '11'),
(4, 'PNS', '20'),
(5, 'TNI', '16'),
(6, 'Polri', '9'),
(7, 'Wiraswasta', '3'),
(8, 'Pedagang', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `syarat` text NOT NULL,
  `batas` date NOT NULL,
  `status_loker` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `posisi`, `penempatan`, `syarat`, `batas`, `status_loker`, `gambar`, `role_id`) VALUES
(9, 'dummy testing', '', '', '0000-00-00', '', '', 0),
(10, 'dummy part 2', '', '', '0000-00-00', '', '', 1),
(11, 'bebas', '', '', '0000-00-00', '', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker_baru`
--

CREATE TABLE `loker_baru` (
  `id_loker` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `syarat` text NOT NULL,
  `batas` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `id_pelamar` int(10) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `hasil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `id_pelamar`, `posisi`, `nama`, `tgl_lahir`, `tmpt_lahir`, `gender`, `status`, `agama`, `pendidikan`, `alamat`, `nomor`, `email`, `foto`, `cv`, `universitas`, `jurusan`, `hasil`) VALUES
(0, 10, '', 'ustad nero', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'nerochaniago@student.telkomuniversity.ac.id', '', '', '', '', 'No'),
(0, 11, '', 'ustad nero 2', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'test@gmail.com', '', '', '', '', ''),
(0, 12, '', 'aaa', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'shyffainf@yahoo.com', '', '', '', '', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publish_hasil`
--

CREATE TABLE `publish_hasil` (
  `id_hasil` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(255) NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'nero chaniago', 'nerochaniago19@gmail.com', 'default.jpg', '$2y$10$VME1rtUk8qDXD5J1KJZT5erO99yrH94YFK9VmUBFq7wllbwQOJHUm', 1, 1, 1558746937),
(9, 'shyffailmallia@yahoo.com', 'shyffailmallia@yahoo.com', 'default.jpg', '$2y$10$idIO9Lsq4l8l9jImsNrkBuBtm52vWZFubCwRyonw0aqDhsw/TO.n6', 1, 1, 1561455413),
(13, 'shyffa ilmallia noer fhadillah', 'nerochaniago@student.telkomuniversity.ac.id', 'default.jpg', '$2y$10$0w9GtV9VhXCOoJotc24UBer6xHfSLVZzMbR8.EeoCKYpUxt9MafRa', 2, 1, 1563073377),
(14, 'shyffa ilmallia noer fhadillah', 'shyffainf@yahoo.com', 'default.jpg', '$2y$10$NkJsqPhWv6.kYoIofNEsj.yEI7wsCpjxIeMVx.XQgi5ZvmvxgInKG', 2, 1, 1563074489),
(15, 'ustad nero chaniago', 'test@gmail.com', 'default.jpg', '$2y$10$7PU8L43KbPWHTjyzmtge8uRXr2dTOC7sirJ8IZtBFdn4VhLdVWtXa', 2, 1, 1563074519);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `loker_baru`
--
ALTER TABLE `loker_baru`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `publish_hasil`
--
ALTER TABLE `publish_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `import`
--
ALTER TABLE `import`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `loker_baru`
--
ALTER TABLE `loker_baru`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `publish_hasil`
--
ALTER TABLE `publish_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
