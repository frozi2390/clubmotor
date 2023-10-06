-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motorc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `isi`) VALUES
(1, 'About ALC', 'Anak Langit Club didirikan dengan tujuan menjadi wadah bagi para pecinta motor khususnya motor besar dengan berlandaskan keluargaan dan solidaritas. Selain itu club ini menjadi bantuan para masyarakat sekitar yang mengalami kesulitan. Anak Langit sudah te');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'hansen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `gambar`, `judul`, `isi`) VALUES
(1, 'artikel1.png', 'Membantu Masyarakat', 'Kegiatan setiap minggunya membantu masyarakat dalam mengatasi permasalahan yang ada dilingkungan dan melakukan pemungutan sampah agar ligkungan bersih dan segar.'),
(2, 'artikel2.png', 'Lomba Bapal Motor', 'Mendapatkan Juara 1 pada balapan motor sircuit yang dimengkan oleh bayu sebagai perwakilan dari ALC'),
(3, 'artikel3.png', 'Bakti Sosial', 'Melakukan kegiatan bakti sosial ke panti asuhan amal jaya sebagai salah satu bentuk kepedulian sosial mereka pada anak yatim tersebut. Aktivitas penggalangan dana ini untuk donasi atau bantuan bagi anak-anak yatim ini, dilakukan sebelumnya.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`) VALUES
(1, 'banner.jpg'),
(2, 'galeri1.png'),
(3, 'galeri2.png'),
(4, 'galeri3.jpg'),
(5, 'galeri4.jpg'),
(6, 'galeri5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `filter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `gambar`, `nama_barang`, `filter`) VALUES
(1, 'cloth.jpg', 'Jacket', 'filter-app'),
(2, 'cloth2.jpg', 'Shirt', 'filter-app'),
(3, 'part3.jpg', 'Helm', 'filter-card'),
(4, 'motor1.jpg', 'Motorcycle', 'filter-web'),
(5, 'motor2.jpg', 'Motorcycle', 'filter-web'),
(6, 'part.jpg', 'motorcycle chain', 'filter-card'),
(7, 'cloth3.jpg', 'Denim Trousers', 'filter-app'),
(8, 'part2.jpg', 'Sparepart', 'filter-card'),
(9, 'motor3.jpg', 'Motorcycle', 'filter-web'),
(11, '651f761fd8131.jpg', 'dsadsa', 'asdsads');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `isi`) VALUES
(1, 'Club ini hanya sebatas komunitas pencinta motor besar, yang bertujuan menyalurkan hobi dan kegabutannya kepada sepeda motor , kelebihan dari club ini adalah membantu masyarakat dalam mengatasi permasalahan yang ada dan gotoroyong open donasi bagi yang membutuhkan\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
