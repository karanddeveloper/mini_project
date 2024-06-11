-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 10:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminname` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminname`, `adminpassword`) VALUES
('helloadmin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(28, 'Apple MacBook Air', '79990', 'IMG-65202bd4b49053.45796746.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(2, 'karan', '9080445424', 'karanmrk2001@gmail.com', 'cash on delivery', '199', '9th street, 1st main road, sharma nagar, vyasarpadi', 'chennai', 'tamil nadu', 'India', '600039', 'HP Chromebook (1) , Skullcandy Hesh2 (1) ', 57332),
(3, 'mukesh manna.s', '7590004983', 'mukeshmanna2001@gmail.com', 'cash on delivery', '199', '9th street, 1st main road, sharma nagar, vyasarpadi', 'chennai', 'tamil nadu', 'India', '600039', 'HP Chromebook (1) , Xiaomi Notebook pro (1) , Skullcandy Hesh2 (1) ', 102331),
(4, 'sradha c', '9074538460', 'sradha@gmail.com', 'cash on delivery', 'chaithram HO,Olavilam PO THalassery', 'thalassery', 'Thalassery', 'kerala', 'India', '673313', 'Xiaomi Notebook pro (1) , Samsung Galaxy S23 (1) , Skullcandy Hesh2 (1) ', 127497),
(5, 'karan', '0', 'karanmrk2001@gmail.com', 'cash on delivery', '199', '9th street, 1st main road, sharma nagar, vyasarpadi', 'chennai', 'tamil nadu', 'India', '600039', 'HP Chromebook (2) ', 99666),
(6, 'ezhil', '8768275279', 'ezhilarasand07@gmail.com', 'cash on delivery', '199', '9th street, 1st main road, sharma nagar, vyasarpadi', 'chennai', 'tamil nadu', 'India', '600039', 'Apple MacBook Air (1) , Oneplus Nord 3 (1) ', 113989);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, 'HP Chromebook', '49833', 'IMG-651d0518d6cfa7.40979799.jpeg'),
(2, 'Skullcandy Hesh2', '7499', 'IMG-651d0552ea9356.67220088.jpeg'),
(3, 'Oneplus Y1S', '32000', 'IMG-651d058279f761.97167611.jpg'),
(4, 'Samsung Galaxy S23', '74999', 'IMG-651d0616576cf1.78188949.jpeg'),
(5, 'Xiaomi Notebook pro', '44999', 'IMG-65202b4f6be7e3.41340137.jpg'),
(6, 'Acer Aspire 5', '52990', 'IMG-65202b8233fe52.43481449.jpeg'),
(7, 'Apple MacBook Air', '79990', 'IMG-65202bd4b49053.45796746.jpg'),
(8, 'HP Victus', '57990', 'IMG-65202c08e8b824.31375638.jpeg'),
(9, 'Acer Predator Helios', '144990', 'IMG-65202c3853c7a0.20761813.jpg'),
(10, 'Apple iPhone 15 plus', '89900', 'IMG-652244b64ff1a7.07404692.jpeg'),
(11, 'Oneplus Nord 3', '33999', 'IMG-652245151caaa9.11308964.jpg'),
(12, 'Realme Narzo 60X', '14499', 'IMG-65224570342c87.03267307.jpg'),
(13, 'iQOO 9 pro', '44990', 'IMG-652245d287a024.75724544.jpg'),
(14, 'Redmi 12', '15499', 'IMG-652245fc5a6631.32348021.jpg'),
(15, 'boAt Airdopes 141', '1599', 'IMG-65241202d63c49.82217360.jpg'),
(16, 'boAt basshead 105', '499', 'IMG-6524129ccf3cc3.03849411.jpg'),
(17, 'JBL Flip 5', '6499', 'IMG-6524131852f497.39747900.jpeg'),
(18, 'Apple AirPods 2', '10499', 'IMG-65241344709eb3.93439319.jpg'),
(19, 'Zebronics ZEB-JUKE bar', '144990', 'IMG-65241371c79eb6.98559738.jpg'),
(20, 'Redmi X43', '22999', 'IMG-6543c62da4bf60.27276351.jpg'),
(21, 'Acer TV', '28999', 'IMG-6543c68d5d7759.86025548.png'),
(22, 'Sony Bravia', '75990', 'IMG-6543c6c7612c28.12110856.jpg'),
(23, 'Samsung TV', '42990', 'IMG-6543c71395feb8.21891774.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`firstname`, `lastname`, `gender`, `dob`, `contact`, `email`, `username`, `password`) VALUES
('Karan', 'D', 'male', '2001-03-21', '9080445424', 'karanmrk2001@gmail.com', 'karan', 'karan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
