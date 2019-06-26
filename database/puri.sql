-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 05:23 AM
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
(1, 'web developper', 'pt len persero', '1. mampu mengoperasikan codeigniter,php,js', '2019-06-04', '', 'default.jpg', 1),
(3, 'adminn', 'nero ganteng', '', '0000-00-00', '', '', 0),
(4, 'adminn', 'nero ganteng', '', '0000-00-00', '', '', 0),
(5, 'lia', 'nchan', '', '0000-00-00', '', '', 1),
(6, 'efefe', 'wwrwwr', '', '2019-05-28', '', '', 1),
(7, '', '', '', '0000-00-00', '', '', 1),
(8, 'Junior Programmer', 'len', '', '2019-07-05', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pelamar` int(10) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pelamar`, `posisi`, `nama`, `tgl_lahir`, `tmpt_lahir`, `gender`, `status`, `agama`, `alamat`, `nomor`, `email`, `foto`, `cv`) VALUES
(2, 'a', 'a', '2019-06-04', 'a', 'a', 'a', 'a', 'a', 0, 'a', '', ''),
(3, 'b', 'b', '2019-06-14', 'b', 'b', 'b', 'b', 'b', 0, 'b', '', ''),
(4, 'c', 'c', '2019-06-01', 'c', 'c', 'c', 'c', 'c', 0, 'c', '', ''),
(5, 'd', 'd', '2019-06-14', 'd', 'd', 'dd', 'd', 'd', 0, 'd', '', '');

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
(4, 'shyffa ilmallia noer fhadillah', 'shyffainf@yahoo.com', 'download.png', '$2y$10$9LPlNGk0nHo5jmUB/aoILeQCUE3xYFMdBFyHv5GKyRX6OeqL9dcty', 2, 1, 1558750388),
(5, 'test', 'test@gmail.com', 'captain-america-1600x900-artwork-hd-8107.jpg', '$2y$10$zuX8uXQZ2tOSmmElvbZcJOLw8XgsurAeByIt6zyUHBKq49Dm5TQ0a', 2, 1, 1558913293),
(9, 'shyffailmallia@yahoo.com', 'shyffailmallia@yahoo.com', 'default.jpg', '$2y$10$idIO9Lsq4l8l9jImsNrkBuBtm52vWZFubCwRyonw0aqDhsw/TO.n6', 1, 1, 1561455413);

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
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pelamar`);

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
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pelamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
