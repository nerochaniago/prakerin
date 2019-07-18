-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 04:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import`
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
-- Table structure for table `loker`
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
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `posisi`, `penempatan`, `syarat`, `batas`, `status_loker`, `gambar`, `role_id`) VALUES
(9, 'dummy testing', '', '', '0000-00-00', '', '', 0),
(10, 'dummy part 2', '', '', '0000-00-00', '', '', 1),
(11, 'bebas', '', '', '0000-00-00', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loker_baru`
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

--
-- Dumping data for table `loker_baru`
--

INSERT INTO `loker_baru` (`id_loker`, `role_id`, `posisi`, `penempatan`, `syarat`, `batas`, `gambar`) VALUES
(1, 0, 'jendral', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
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
  `hasil` varchar(10) NOT NULL,
  `sertif1` varchar(50) NOT NULL,
  `sertif2` varchar(50) NOT NULL,
  `sertif3` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `skkb` varchar(50) NOT NULL,
  `ks` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `kelengkapan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `id_pelamar`, `posisi`, `nama`, `tgl_lahir`, `tmpt_lahir`, `gender`, `status`, `agama`, `pendidikan`, `alamat`, `nomor`, `email`, `foto`, `cv`, `universitas`, `jurusan`, `hasil`, `sertif1`, `sertif2`, `sertif3`, `ijazah`, `nilai`, `skkb`, `ks`, `ktp`, `kk`, `npwp`, `kelengkapan`) VALUES
(0, 30, 'jendral', 'kedua', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'bismillah@gmail.com', 'foto32.jpg', 'CV17.pdf', '', '', 'Yes', 'CV17.pdf', 'CV17.pdf', 'CV17.pdf', 'CV18.pdf', 'CV19.pdf', 'CV20.pdf', 'CV21.pdf', 'CV22.pdf', 'CV23.pdf', 'CV23.pdf', '<p><span style="font-size:20px">minus npwp</span><'),
(0, 31, 'jendral', 'selanjutnya', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'bismillah@gmail.com', 'foto33.jpg', 'CV24.pdf', '', '', '', 'CV24.pdf', 'CV24.pdf', 'CV24.pdf', 'CV25.pdf', 'CV26.pdf', 'CV27.pdf', 'CV28.pdf', 'CV29.pdf', 'CV30.pdf', 'CV30.pdf', ''),
(0, 32, 'jendral', 'selanjutnyaaaaaaaaaa', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'bismillah@gmail.com', 'foto34.jpg', 'CV31.pdf', '', '', '', 'CV31.pdf', 'CV31.pdf', 'CV31.pdf', 'CV32.pdf', 'CV33.pdf', 'CV34.pdf', 'CV35.pdf', 'CV36.pdf', 'CV37.pdf', 'CV37.pdf', ''),
(0, 33, 'jendral', 'selanjutnyaaaaaaaaaa', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'bismillah@gmail.com', 'foto36.jpg', 'CV45.pdf', '', '', '', '', 'CV45.pdf', 'CV45.pdf', 'CV46.pdf', 'CV47.pdf', 'CV48.pdf', 'CV49.pdf', 'CV50.pdf', 'CV51.pdf', 'CV51.pdf', ''),
(0, 34, 'jendral', 'selanjutnyaaaaaaaaaa', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'bismillah@gmail.com', 'foto37.jpg', 'CV52.pdf', '', '', '', 'CV53.pdf', 'CV53.pdf', 'CV53.pdf', 'CV54.pdf', 'CV55.pdf', 'CV56.pdf', 'CV57.pdf', 'CV58.pdf', 'CV59.pdf', 'CV59.pdf', ''),
(0, 35, 'jendral', 'terakhir', '0000-00-00', '', 'Laki-laki', 'Lajang', '', 'S2', '', 0, 'terakhir@gmail.com', 'foto38.jpg', 'fotonon5.jpg', '', '', '', '', '', '', 'CV60.pdf', 'CV61.pdf', 'CV62.pdf', 'CV63.pdf', 'CV64.pdf', 'CV65.pdf', 'CV65.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `publish_hasil`
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
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'nero chaniago', 'nerochaniago19@gmail.com', 'default.jpg', '$2y$10$VME1rtUk8qDXD5J1KJZT5erO99yrH94YFK9VmUBFq7wllbwQOJHUm', 1, 1, 1558746937),
(9, 'shyffailmallia@yahoo.com', 'shyffailmallia@yahoo.com', 'default.jpg', '$2y$10$idIO9Lsq4l8l9jImsNrkBuBtm52vWZFubCwRyonw0aqDhsw/TO.n6', 1, 1, 1561455413),
(13, 'shyffa ilmallia noer fhadillah', 'nerochaniago@student.telkomuniversity.ac.id', 'default.jpg', '$2y$10$0w9GtV9VhXCOoJotc24UBer6xHfSLVZzMbR8.EeoCKYpUxt9MafRa', 2, 1, 1563073377),
(14, 'shyffa ilmallia noer fhadillah', 'shyffainf@yahoo.com', 'default.jpg', '$2y$10$NkJsqPhWv6.kYoIofNEsj.yEI7wsCpjxIeMVx.XQgi5ZvmvxgInKG', 2, 1, 1563074489),
(15, 'ustad nero chaniago', 'test@gmail.com', 'default.jpg', '$2y$10$7PU8L43KbPWHTjyzmtge8uRXr2dTOC7sirJ8IZtBFdn4VhLdVWtXa', 2, 1, 1563074519),
(16, 'siapaya', 'siapaya@yahoo.com', 'default.jpg', '$2y$10$J9QEQhdD2Pc7DqTIaiKKu.64qTpAHNaA5dV..Tw1vK/Q9.VbqT3wC', 2, 1, 1563172216),
(17, 'baru', 'baru@gmail.com', 'default.jpg', '$2y$10$YdEopllIiWO.uDR3lPn88uK6T15MW1E.eKCmBgPIs1BczgKas8rUS', 2, 1, 1563350027),
(18, 'barupisan', 'barupisan@gmail.com', 'default.jpg', '$2y$10$6k6wsP.aFkeEdLjRVVD7Bel17G5D0izSstYJ9u6H2ZnrloJHJHrjC', 2, 1, 1563351688),
(19, 'bismillah', 'bismillah@gmail.com', 'default.jpg', '$2y$10$8LKPqTx0kGKbq.X37asEUusxufewonQ7N6d18ilCa6jEX2hzLW.Ei', 2, 1, 1563353720),
(20, 'terakhir', 'terakhir@gmail.com', 'default.jpg', '$2y$10$XXdpQy2HLlu2wBEp1WSm3uQhEJVeuxy13AodKAuBU9vI1tDqNrctS', 2, 1, 1563355472);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `loker_baru`
--
ALTER TABLE `loker_baru`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `publish_hasil`
--
ALTER TABLE `publish_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `loker_baru`
--
ALTER TABLE `loker_baru`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `publish_hasil`
--
ALTER TABLE `publish_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
