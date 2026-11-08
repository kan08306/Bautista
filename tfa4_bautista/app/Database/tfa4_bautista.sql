-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2026 at 01:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfa4_bautista`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Ken Bautista', 'ken.bautista@email.com', '09171234567', '2026-11-08 00:24:35'),
(2, 'Ken Anthonie', 'ken.anthonie@email.com', '09181234567', '2026-11-08 00:24:35'),
(3, 'Ken Aquino', 'ken.aquino@email.com', '09191234567', '2026-11-08 00:24:35'),
(4, 'Anthonie Bautista', 'anthonie.bautista@email.com', '09201234567', '2026-11-08 00:24:35'),
(5, 'Anthonie Aquino', 'anthonie.aquino@email.com', '09211234567', '2026-11-08 00:24:35'),
(6, 'Ken Igop', 'kenigop123@example.com', '12345678910', '2026-11-08 01:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `created_at`, `avatar`) VALUES
(1, 'kbautista', '$2y$10$8ElRezMrSqsJ23LjwerXGOyuOmDPomnqjn/lLE0YvlxnGekMR7Fxq', 'Ken Bautista', '2026-11-08 00:24:35', NULL),
(2, 'kanthonie', '$2y$10$PNvhml18lDY3R1RhRdpC2.1r59VZRgdE2MAk8KzVMIzVRTKmOb6pi', 'Ken Anthonie', '2026-11-08 00:24:35', NULL),
(3, 'kaquino', '$2y$10$Q04UrQzhTz4iqQLQb5JP1OMRn2vIM4t/8c4/51KbIgOM6hmGIWj7G', 'Ken Aquino', '2026-11-08 00:24:35', NULL),
(4, 'abautista', '$2y$10$.gRGAGeeUESdITGwCkj8ve/AVg3JmmMe5xz1Z.UBjTJ6aqud4bagy', 'Anthonie Bautista', '2026-11-08 00:24:35', NULL),
(5, 'aaquino', '$2y$10$6VCeXApqgo4BrVTgDnWgvO50nXKjPDnD9IblhGFwJSfyWXvirkooy', 'Anthonie Aquino', '2026-11-08 00:24:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
