-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:00 PM
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
-- Database: `mess_rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`) VALUES
(0, ''),
(1, 'Aloo Parantha'),
(2, 'Curd'),
(3, 'Boiled egg'),
(4, 'Tea'),
(5, 'Pickle'),
(6, 'Aloo Bhaji'),
(7, 'Puri'),
(8, 'Banana'),
(9, 'Salted Dalia'),
(10, 'Cornflakes'),
(11, 'Milk'),
(12, 'Pao Bhaji'),
(13, 'Idli'),
(14, 'Sambhar'),
(15, 'Apple'),
(16, 'Dal Parantha'),
(17, 'Gobhi Parantha'),
(18, 'Aloo Sabji'),
(19, 'Egg Bhurji'),
(20, 'Aloo Pyaaz'),
(21, 'Chole Bhature'),
(22, 'Ring Onion'),
(23, 'Veg Biryani'),
(24, 'Raita'),
(25, 'Tomato Chutney'),
(26, 'Salad'),
(27, 'Black Chana'),
(28, 'Seasonal Vegetable'),
(29, 'Roti'),
(30, 'Lemon Rice'),
(31, 'Arhar Dal Tadka'),
(32, 'Soya Chaap'),
(33, 'Rice'),
(34, 'Boondi Raita'),
(35, 'Kadhi Pakoda'),
(36, 'Aloo Jeera '),
(37, 'Suji Ka Halwa'),
(38, 'Rajma Masala'),
(39, 'Aloo Methi'),
(40, 'Soya Keema '),
(41, 'Dal Makhani'),
(42, 'Kheer'),
(43, 'Punjabi Daal'),
(44, 'Aloo Matar'),
(45, 'Microni'),
(46, 'Aloo Bhujia'),
(47, 'Mint Chutney'),
(48, 'Veg Noodles'),
(49, 'Masala Poha'),
(50, 'Vada Pav'),
(51, 'Samosa'),
(53, 'Kadai Paneer'),
(54, 'Dal Tadka'),
(55, 'Mix Dal '),
(56, 'Aloo Nutri'),
(57, 'White Rasgulla '),
(58, 'Green Moong Dal'),
(59, 'Aloo Gobhi'),
(60, 'Peas Pulao'),
(61, 'Custard'),
(62, 'Chana Dal'),
(63, 'Aloo Palak'),
(64, 'Gulab Jamun'),
(65, 'Shahi Paneer'),
(66, 'Egg Curry'),
(67, 'Chole'),
(68, 'Jeera Rice'),
(69, 'Black Masoor'),
(70, 'Aloo Baingan');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name`) VALUES
(1, 'breakfast'),
(2, 'lunch'),
(3, 'snacks'),
(4, 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `meal_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `datetime`, `meal_id`, `item_id`) VALUES
(1, '2023-11-30 00:00:00', 3, 8),
(2, '2023-11-30 00:00:00', 3, 12),
(3, '2023-11-30 00:00:00', 3, 21),
(4, '2023-11-30 00:00:00', 3, 35),
(5, '2023-11-30 00:00:00', 4, 3),
(6, '2023-11-30 00:00:00', 4, 25),
(7, '2023-11-30 00:00:00', 4, 20),
(8, '2023-11-30 00:00:00', 4, 26),
(9, '2023-11-30 00:00:00', 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `meal_id` tinyint(4) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `date`, `user_id`, `meal_id`, `item_id`, `rating`) VALUES
(5, '2023-11-30', 1, 3, 12, 2),
(6, '2023-11-30', 1, 3, 21, 3),
(8, '2023-11-30', 1, 4, 25, 4),
(9, '2023-11-30', 1, 4, 26, 3),
(10, '2023-11-30', 1, 4, 3, 1),
(11, '2023-11-30', 1, 4, 20, 5),
(12, '2023-11-30', 2, 4, 3, 1),
(13, '2023-11-30', 2, 4, 25, 2),
(14, '2023-11-30', 2, 4, 26, 5),
(15, '2023-11-30', 2, 4, 16, 3),
(16, '2023-11-30', 2, 4, 20, 2),
(17, '2023-11-30', 1, 4, 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `roll_no` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `course` text NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `roll_no`, `email`, `password`, `course`, `semester`) VALUES
(1, 'Humanshu', 2301301001, '2301301001.humanshu@geetauniversity.edu.in', 'geeta@123', 'B.Tech', 'first'),
(2, 'Kaushik', 2301301032, '2301301032.kaushik@geetauniversity.edu.in', 'geeta@123', 'B.Tech', 'first'),
(3, 'Ankur', 2301301007, '2301301007.ankur@geetauniversity.edu.in', 'geeta@123', 'B.Tech', 'First'),
(4, 'Gourav', 2301301035, '2301301035.gourav@geetauniversity.edu.in', 'geeta@123', 'B.Tech', 'first');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
