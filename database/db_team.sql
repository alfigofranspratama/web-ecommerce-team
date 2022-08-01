-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 10:08 AM
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
-- Database: `db_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `img_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `img_kategori`) VALUES
(1, 'pakaian', 'baju.png'),
(2, 'gadget', 'gadget.jpg'),
(3, 'alas kaki', 'sep.jpg'),
(4, 'elektronik', 'selektronik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`) VALUES
(3, 'Alfigo Frans Pratama', 'admin', '$2y$10$Nf89JBCng6YIoyJQ85ni4OsWfU7LnpGOIQvYXdT0OpA7.kT661tnW', 'alfigofranspratamaa@gmail.com', '081292389150');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `harga_diskon` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `stok` varchar(1000) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `produk`, `harga`, `harga_diskon`, `kategori`, `deskripsi`, `stok`, `images`) VALUES
(1, 'Handphone oppo f11', '5000000', '250000', 'gadget', 'Handphone oppo f11 ram 8/128', '120', 'hp.jpg'),
(2, 'Laptop ASUS ROG ', '7000000', '500000', 'gadget', 'Laptop asus rog intel core i9 ram 8gb ssd 512gb', '50', 'laptop.jpg'),
(3, 'kulkas sharp dua pintu', '1000000', '300000', 'elektronik', 'kulkas sharp 2 pintu diskon akhir tahun', '5', 'kulkas.jpg'),
(4, 'Celana jeans pria', '60000', '30000', 'pakaian', 'celana jeans pria diskon akhir tahun tersedia ukuran xxl, xl, l.', '36', 'jeans.jpg'),
(5, 'Celana lepis pria', '80000', '35000', 'pakaian', 'celana lepis pria tersedia ukuran xl l m.', '36', 'lepis.jpg'),
(6, 'Sepatu snakers', '80000', '40000', 'alas kaki', 'sepatu snakers', '60', 'sepatu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
