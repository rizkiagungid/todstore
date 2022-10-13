-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 05:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todstore`
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
(1, 'TOD Japanesee', 'MEN-711', '92000', '2', 'L', 'b1d96f6fccdf017f53c0dd697d25fced.jpg'),
(2, 'Batik Olympus TOD', 'Limited-edition-TOD69', '15000', '3', 'L', 'LINE_ALBUM_2933-2936-TNW 112146-2933-2936-SP_220108_8-1279x1280.jpg'),
(3, 'IndoPride TOD Jacket', 'MEN-J998', '69000', '6', 'XL', 'normal_69234ea215.jpg'),
(4, 'Tzuyu Edition', 'Limited-edition-TOD70', '54000', '11', 'S', '2948649_f6626da9-da33-4d9e-a5e8-dfd9885aa069_700_700.jpg'),
(5, 'TOD Wiboee Style', 'WOMEN-6969', '15000', '7', 'M', '07susi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'rizkiagungid', 'mrrizkiagung@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'ganteng', 'ganteng@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
