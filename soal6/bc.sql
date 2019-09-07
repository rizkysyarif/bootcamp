-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Sep 2019 pada 12.48
-- Versi Server: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `name`
--

CREATE TABLE IF NOT EXISTS `name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_salary` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `name`
--

INSERT INTO `name` (`id`, `name`, `id_work`, `id_salary`) VALUES
(1, 'Rebecca', 1, 2),
(2, 'Vita', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, 10000000),
(2, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_salary` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id`, `name`, `id_salary`) VALUES
(1, 'Frontend Dev', 1),
(2, 'Backend Dev', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`,`id_work`,`id_salary`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
