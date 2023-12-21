c:\Users\ABDVO\OneDrive\Bureau\portfolio_website\imgs\location_immobiliere.sql-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 07:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location_immobiliere`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_order`
--

CREATE TABLE `location_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `logement_id` int(11) DEFAULT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_order`
--

INSERT INTO `location_order` (`id`, `user_id`, `logement_id`, `date_order`, `status`) VALUES
(1, 1, 1, '2023-01-01 09:00:00', 'approved'),
(2, 2, 2, '2023-01-02 11:30:00', 'pending'),
(3, 3, 3, '2023-01-03 13:45:00', 'rejected'),
(4, 4, 4, '2023-01-04 15:30:00', 'approved'),
(5, 5, 5, '2023-01-05 17:15:00', 'pending'),
(6, 6, 6, '2023-01-06 19:45:00', 'approved'),
(7, 7, 7, '2023-01-07 21:30:00', 'pending'),
(8, 8, 8, '2023-01-08 07:00:00', 'approved'),
(9, 9, 9, '2023-01-09 09:30:00', 'rejected'),
(10, 10, 10, '2023-01-10 11:45:00', 'approved'),
(11, 11, 11, '2023-01-11 14:00:00', 'pending'),
(12, 12, 12, '2023-01-12 16:30:00', 'rejected'),
(13, 13, 13, '2023-01-13 18:45:00', 'approved'),
(14, 14, 14, '2023-01-14 21:00:00', 'pending'),
(15, 15, 15, '2023-01-15 08:15:00', 'approved'),
(16, 16, 16, '2023-01-16 10:30:00', 'pending'),
(17, 17, 17, '2023-01-17 12:45:00', 'rejected'),
(18, 18, 18, '2023-01-18 15:00:00', 'approved'),
(19, 19, 19, '2023-01-19 17:15:00', 'pending'),
(20, 20, 20, '2023-01-20 19:30:00', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `type_logement` enum('apartment','house','condo','villa','townhouse','other') NOT NULL,
  `nombre_chambres` int(11) DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id`, `adresse`, `type_logement`, `nombre_chambres`, `prix`, `image_path`) VALUES
(1, '123 Main St', 'apartment', 2, 1200.00, '/images/apartment1.jpg'),
(2, '456 Oak St', 'house', 3, 2000.00, '/images/house1.jpg'),
(3, '789 Pine St', 'condo', 1, 1500.00, '/images/condo1.jpg'),
(4, '101 Maple St', 'villa', 4, 3000.00, '/images/villa1.jpg'),
(5, '202 Elm St', 'townhouse', 2, 1800.00, '/images/townhouse1.jpg'),
(6, '303 Cedar St', 'apartment', 1, 1000.00, '/images/apartment2.jpg'),
(7, '404 Birch St', 'house', 4, 2500.00, '/images/house2.jpg'),
(8, '505 Pine St', 'condo', 2, 1600.00, '/images/condo2.jpg'),
(9, '606 Oak St', 'villa', 3, 2700.00, '/images/villa2.jpg'),
(10, '707 Maple St', 'townhouse', 3, 1900.00, '/images/townhouse2.jpg'),
(11, '808 Elm St', 'apartment', 2, 1300.00, '/images/apartment3.jpg'),
(12, '909 Cedar St', 'house', 5, 2800.00, '/images/house3.jpg'),
(13, '111 Birch St', 'condo', 1, 1400.00, '/images/condo3.jpg'),
(14, '222 Pine St', 'villa', 4, 3200.00, '/images/villa3.jpg'),
(15, '333 Oak St', 'townhouse', 2, 1700.00, '/images/townhouse3.jpg'),
(16, '444 Maple St', 'apartment', 3, 1600.00, '/images/apartment4.jpg'),
(17, '555 Cedar St', 'house', 4, 2400.00, '/images/house4.jpg'),
(18, '666 Birch St', 'condo', 2, 1800.00, '/images/condo4.jpg'),
(19, '777 Pine St', 'villa', 5, 3500.00, '/images/villa4.jpg'),
(20, '888 Elm St', 'townhouse', 3, 2000.00, '/images/townhouse4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `type` enum('client','administrator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `password`, `image_path`, `type`) VALUES
(1, 'John', 'Doe', 'john.doe@email.com', 'hashed_password1', '/images/john_doe.jpg', 'client'),
(2, 'Jane', 'Smith', 'jane.smith@email.com', 'hashed_password2', '/images/jane_smith.jpg', 'client'),
(3, 'Michael', 'Johnson', 'michael.johnson@email.com', 'hashed_password3', '/images/michael_johnson.jpg', 'client'),
(4, 'Emily', 'Brown', 'emily.brown@email.com', 'hashed_password4', '/images/emily_brown.jpg', 'client'),
(5, 'David', 'Williams', 'david.williams@email.com', 'hashed_password5', '/images/david_williams.jpg', 'client'),
(6, 'Amanda', 'Jones', 'amanda.jones@email.com', 'hashed_password6', '/images/amanda_jones.jpg', 'client'),
(7, 'Ryan', 'Miller', 'ryan.miller@email.com', 'hashed_password7', '/images/ryan_miller.jpg', 'client'),
(8, 'Sophia', 'Wilson', 'sophia.wilson@email.com', 'hashed_password8', '/images/sophia_wilson.jpg', 'client'),
(9, 'Ethan', 'Taylor', 'ethan.taylor@email.com', 'hashed_password9', '/images/ethan_taylor.jpg', 'client'),
(10, 'Olivia', 'Anderson', 'olivia.anderson@email.com', 'hashed_password10', '/images/olivia_anderson.jpg', 'administrator'),
(11, 'William', 'Moore', 'william.moore@email.com', 'hashed_password11', '/images/william_moore.jpg', 'administrator'),
(12, 'Emma', 'Johnson', 'emma.johnson@email.com', 'hashed_password12', '/images/emma_johnson.jpg', 'administrator'),
(13, 'Alexander', 'Davis', 'alexander.davis@email.com', 'hashed_password13', '/images/alexander_davis.jpg', 'administrator'),
(14, 'Grace', 'Thomas', 'grace.thomas@email.com', 'hashed_password14', '/images/grace_thomas.jpg', 'administrator'),
(15, 'Henry', 'Jones', 'henry.jones@email.com', 'hashed_password15', '/images/henry_jones.jpg', 'administrator'),
(16, 'Lily', 'Harris', 'lily.harris@email.com', 'hashed_password16', '/images/lily_harris.jpg', 'administrator'),
(17, 'Mason', 'Clark', 'mason.clark@email.com', 'hashed_password17', '/images/mason_clark.jpg', 'administrator'),
(18, 'Ava', 'Walker', 'ava.walker@email.com', 'hashed_password18', '/images/ava_walker.jpg', 'administrator'),
(19, 'Logan', 'Baker', 'logan.baker@email.com', 'hashed_password19', '/images/logan_baker.jpg', 'administrator'),
(20, 'Sophie', 'Martin', 'sophie.martin@email.com', 'hashed_password20', '/images/sophie_martin.jpg', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_order`
--
ALTER TABLE `location_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `logement_id` (`logement_id`);

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location_order`
--
ALTER TABLE `location_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location_order`
--
ALTER TABLE `location_order`
  ADD CONSTRAINT `location_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `location_order_ibfk_2` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
