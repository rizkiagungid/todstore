-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 03:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_sgb`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `harga` varchar(500) NOT NULL,
  `stok` varchar(500) NOT NULL,
  `ukuran` varchar(400) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `name`, `model`, `harga`, `stok`, `ukuran`, `image`) VALUES
(1, 'TOD Japanesee', 'MEN-711', '92000', '0', 'L', 'b1d96f6fccdf017f53c0dd697d25fced.jpg'),
(2, 'Batik Olympus TOD', 'Limited-edition-TOD69', '15000', '0', 'L', 'LINE_ALBUM_2933-2936-TNW 112146-2933-2936-SP_220108_8-1279x1280.jpg'),
(3, 'IndoPride TOD Jacket', 'MEN-J998', '69000', '2', 'XL', 'normal_69234ea215.jpg'),
(7, 'Gantengtod', 'MEN-776', '85000', '0', 'M', 'download.jpeg'),
(8, 'Gantengtod', 'MEN-776', '85000', '1', 'M', 'cute-g49cdaa9e8_1920.jpg'),
(9, 'CEKTEST', 'MEN-70711', '10000', '2', 'XNX', 'download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tentangtodstore`
--

CREATE TABLE `tentangtodstore` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentangtodstore`
--

INSERT INTO `tentangtodstore` (`id`, `deskripsi`, `judul`) VALUES
(1, 'TOD Project’s Adalah sebuah digital clothing store karya\r\nanak bangsa yang berbasis di Cilebut - Citayem \r\nmempunyai Visi untuk turut berpartisipasi dalam \r\nkearifan lokal.', 'JUDUL TOD STORE');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `users_id`, `status`, `bukti_pembayaran`, `tanggal_transaksi`) VALUES
(1, 2, 'Menunggu Konfirmasi', '17112022023626494410364.jpg', '2022-11-16 00:00:00'),
(2, 2, 'Menunggu Konfirmasi', '958558.png', '2022-11-16 00:00:00'),
(3, 2, 'Menunggu Konfirmasi', '17112022024219Capture.PNG', '2022-11-16 00:00:00'),
(4, 2, 'Menunggu Konfirmasi', '17112022023630494410364.jpg', '2022-11-16 00:00:00'),
(5, 2, 'Pending', '', '2022-11-16 00:00:00'),
(6, 2, 'Menunggu Konfirmasi', '411950.png', '2022-11-17 03:07:48'),
(7, 2, 'Pending', '', '2022-11-17 03:10:12'),
(8, 2, 'Menunggu Konfirmasi', '990921.png', '2022-11-17 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id`, `transaksi_id`, `produk_id`, `jumlah`) VALUES
(1, 0, 1, 2),
(2, 0, 2, 3),
(3, 0, 3, 3),
(4, 3, 1, 2),
(5, 3, 2, 3),
(6, 4, 1, 2),
(7, 4, 7, 2),
(8, 5, 2, 4),
(9, 6, 3, 3),
(10, 7, 8, 1),
(11, 8, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `telepon` text NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `namalengkap`, `email`, `password`, `level`, `telepon`, `alamat`) VALUES
(2, 'rizkiagungid', 'Rizki Agung Sentosa', 'mrrizkiagung@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '081290053660', 'Jawa Barat, Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangtodstore`
--
ALTER TABLE `tentangtodstore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tentangtodstore`
--
ALTER TABLE `tentangtodstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
