-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:45 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`) VALUES
(1, 'Naruto tien nhan Rensin ', '2500$', 'luutruanh/sanpham1.jpg'),
(2, 'Sasuke Rensin Susanoo', '1500$', 'luutruanh/sanpham2.jpg'),
(3, 'Akatsuki', '3000$', 'luutruanh/sanpham3.jpg'),
(4, 'Luffy Gear 2', '1500$', 'luutruanh/sanpham4.jpg'),
(5, 'Luffy Gear 4 ', '5000$', 'luutruanh/sanpham5.jpg'),
(6, 'Luffy SnakeMan', '1500$', 'luutruanh/sanpham6.jpg'),
(7, 'Roronoa Zoro', '3000$', 'luutruanh/sanpham7.jpg'),
(8, 'Zoro nhi kiem', '2500$', 'luutruanh/sanpham8.jpg'),
(9, 'bang mu rom', '4000$', 'luutruanh/sanpham9.jpg'),
(10, 'Kaido', '3000$', 'luutruanh/sanpham10.jpg'),
(11, 'tu hoang Kaido', '2500$', 'luutruanh/sanpham11.jpg'),
(12, 'Portgas D. Ace', '4000$', 'luutruanh/sanpham12.jpg'),
(13, 'Ace hoa quyen', '3000$', 'luutruanh/sanpham13.jpg'),
(14, 'Sabo Chao Long', '4000$', 'luutruanh/sanpham14.jpg'),
(15, 'Ace mat troi ruc lua', '4000$', 'luutruanh/sanpham15.jpg'),
(16, 'Goku Super Saiyan 3', '4000$', 'luutruanh/sanpham16.jpg'),
(17, 'Goku ban nang vo cuc', '4000$', 'luutruanh/sanpham17.jpg'),
(18, 'Goku Ultra Instinct', '5000$', 'luutruanh/sanpham18.jpg'),
(19, 'Vegeta Super Saiyan Blue', '4000$', 'luutruanh/sanpham19.jpg'),
(20, 'Vegeta Super Saiyan 3', '3500$', 'luutruanh/sanpham20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'loc', '123'),
(2, 'muoi', 'muoi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
