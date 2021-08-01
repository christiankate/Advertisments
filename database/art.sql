-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 08:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `Names` varchar(17) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `usertype` varchar(17) NOT NULL DEFAULT 'Visitor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `Names`, `Username`, `Password`, `usertype`) VALUES
(6, 'Ishimwe', 'Ishimwe', 'Aimee', 'Admin'),
(7, 'Emma', 'Emma', 'Emma', 'Admin'),
(8, 'Ishimwe', 'recto', 'verso', 'Visitor'),
(9, 'Nsanzimana ', 'verso', 'recto', 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fav_id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fav_id`, `Order_Id`) VALUES
(10, 46);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message_Id` int(17) NOT NULL,
  `Sender` varchar(17) NOT NULL,
  `Subject` varchar(17) NOT NULL,
  `Comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_Id`, `Sender`, `Subject`, `Comment`) VALUES
(7, 'Ishimwe ', 'Wish ', 'I would like to know how I can get in connection w'),
(8, 'Karinda', 'Kubaza', 'Good'),
(9, 'Kanani', 'Suggestion', 'God is Good.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(17) NOT NULL,
  `ProductImage` text NOT NULL,
  `ProductName` varchar(23) NOT NULL,
  `ProductCategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `ProductImage`, `ProductName`, `ProductCategory`) VALUES
(35, 'lion.jpg', 'Lion Paint', 'Visual Art'),
(36, 'galaxy.jpg', 'Galaxy', 'Visual Art'),
(37, 'man.jpg', 'Man', 'Visual Art'),
(38, 'forest.jpeg', 'Forest', 'Visual Art'),
(39, 'eyes.jpg', 'Eyes', 'Graffiti'),
(40, 'wall.jpg', 'Wall', 'Graffiti'),
(41, 'new.jpg', 'Graffiti', 'Graffiti'),
(42, 'wins.jpg', 'love image', 'Graffiti'),
(43, 'jugs.jpg', 'table ', 'decorative'),
(44, 'decoration.jpg', 'decorations', 'decorative'),
(45, 'purse.jpg', 'money purse', 'decorative'),
(46, 'newlook.jpg', 'House Decoration', 'decorative');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `Usernames` varchar(17) NOT NULL,
  `Passwords` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Usernames`, `Passwords`) VALUES
(1, 'aimee', 'aimee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Message_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Message_Id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`Order_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
