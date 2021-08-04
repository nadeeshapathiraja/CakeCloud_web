-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2021 at 11:24 AM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techswor_db_cakecloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_locations`
--

CREATE TABLE `delivery_locations` (
  `location_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_locations`
--

INSERT INTO `delivery_locations` (`location_id`, `location`, `shop_id`) VALUES
(1, 'Yatadola', 1),
(2, 'Kurunegala', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cake_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`history_id`, `user_id`, `cake_id`, `location_id`, `date`) VALUES
(1, 2, 1, 1, '2021-07-31 23:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `shop_name`
--

CREATE TABLE `shop_name` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_name`
--

INSERT INTO `shop_name` (`shop_id`, `shop_name`, `location`, `phone_number`) VALUES
(1, 'Cake Cloud', 'Mathugama', 768352207),
(2, 'Emmy Eats', 'Wariyapola', 713578569);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_cakes`
--

CREATE TABLE `type_of_cakes` (
  `cake_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_cakes`
--

INSERT INTO `type_of_cakes` (`cake_id`, `name`, `image`, `price`, `quantity`) VALUES
(1, 'Type 1', 'Test 1', 1200, 2),
(2, 'Type 2', 'Test 2', 1500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nerest_location` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `birthday`, `gender`, `address`, `email`, `phone_number`, `password`, `nerest_location`, `user_role`) VALUES
(1, 'Nadeesha', 'Pathiraja', '1995/10/26', 'Male', 'Mathugama', 'aaaa@gmail.com', 768352207, 'ucsc@123', 'Yatadola', 'admin'),
(2, 'Sumudu', 'Kosala', '1995/01/21', 'Male', 'Kurunegala', 'acc@gmail.com', 768352781, 'ucsc@123', 'Kurunegala', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_locations`
--
ALTER TABLE `delivery_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `cake_id` (`cake_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shop_name`
--
ALTER TABLE `shop_name`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `type_of_cakes`
--
ALTER TABLE `type_of_cakes`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_locations`
--
ALTER TABLE `delivery_locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_name`
--
ALTER TABLE `shop_name`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_of_cakes`
--
ALTER TABLE `type_of_cakes`
  MODIFY `cake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_locations`
--
ALTER TABLE `delivery_locations`
  ADD CONSTRAINT `delivery_locations_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_name` (`shop_id`);

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`cake_id`) REFERENCES `type_of_cakes` (`cake_id`),
  ADD CONSTRAINT `order_history_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `delivery_locations` (`location_id`),
  ADD CONSTRAINT `order_history_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
