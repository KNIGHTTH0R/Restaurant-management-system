-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 10:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderNo` varchar(150) NOT NULL,
  `orderID` varchar(150) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `pid` varchar(150) NOT NULL,
  `qty` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `qtyXprice` varchar(150) NOT NULL,
  `isDelivered` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderNo`, `orderID`, `userid`, `pid`, `qty`, `name`, `price`, `qtyXprice`, `isDelivered`) VALUES
('ordNo-5f68c7abca589', 'PK-5f68c7abcd805', '', 'pid5f67d33d1eca6', '1', 'a', '6000', '6000', 'no'),
('ordNo-5f68c7b92a828', 'PK-5f68c7b92b325', '', 'pid5f67d33d1eca6', '1', 'a', '6000', '6000', 'no'),
('ordNo-5f68c808c6e62', 'PK-5f68c808c74e3', '', 'pid5f67d33d1eca6', '1', 'a', '6000', '6000', 'no'),
('ordNo-5f68c809c23d5', 'PK-5f68c809c29d1', '', 'pid5f67d33d1eca6', '1', 'a', '6000', '6000', 'no'),
('ordNo-5f6b3820a76ea', 'PK-5f6b3820a82db', 'ahadarif444@gmail.com', 'pid5f67d33d1eca6', '1', 'a', '6000', '6000', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `productDescription` varchar(250) NOT NULL,
  `availableQuantity` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productCategory`, `price`, `productDescription`, `availableQuantity`, `picture`) VALUES
('pid5f6c9f76410b6', 'momo', 'fast food', '100', 'tasty and Healthy', '6', '../staticFile/productImages/momos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `personalAddress` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `day`, `month`, `year`, `gender`, `phone`, `email`, `personalAddress`, `password`, `picture`, `role`) VALUES
('admin', 'master ', '14', 'october', '2008', 'female', '01720513318', 'admin001@gmail.com', '14,shukrabad', '123456789', '../staticFile/userImages/IMG_0263.JPG', 'admin'),
('ahad', 'arif', '8', 'may', '2002', 'male', '01987623456', 'ahadarif444@gmail.com', '140,adabor', '1234567', '../staticFile/userImages/IMG_0262.JPG', 'customer'),
('natasha', 'rahman', '2', 'september', '1995', 'female', '01934567882', 'natasha@gmail.com', '120,adabor,mohammadpur', '123123123', '../staticFile/userImages/IMG_0302.JPG', 'manager'),
('sanjana', 'rahman', '2', 'january', '1994', 'female', '01711268492', 'sanjana@gmail.com', '170,adabor-12', '#sanj123', '../staticFile/userImages/IMG_0302.JPG', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
