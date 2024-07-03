-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:35 PM
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
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `flight_number` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `cabin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `flight_number`, `address`, `adult`, `children`, `from`, `to`, `arrivals`, `leaving`, `cabin`) VALUES
(1, 'medhat', 'medhat@gmail.com', 1, '123', 5, 2, 'rome', 'dubai', '2023-04-28', '2023-04-14', 'business'),
(2, 'medha', 'medha@gmail.com', 1, '123', 5, 2, '0', 'berlin', '2023-04-28', '2023-04-20', 'first'),
(3, 'medhat3', 'med@gmail.com', 1, '555', 1, 1, 'london', 'paris', '2023-03-31', '2023-04-11', 'First'),
(6, 'barabry', 'barbary@gmail.com', 1, '2323', 5, 3, '0', 'london', '2023-04-19', '2023-04-13', 'business'),
(7, 'medhat1', 'medhat@gmail.com', 1, '123456', 2, 1, '0', 'london', '2023-04-19', '2023-04-13', 'business'),
(8, 'medhat', 'medhat@gmail.com', 1, '5468484', 3, 1, '0', 'london', '2023-04-19', '2023-04-13', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_number` int(255) NOT NULL,
  `departure_location` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time(6) NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` time(6) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_number`, `departure_location`, `destination`, `departure_date`, `departure_time`, `arrival_date`, `arrival_time`, `price`) VALUES
(2, 'roma', 'london', '2023-04-01', '00:00:00.000000', '2023-04-12', '00:00:00.000000', 200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cardtype` varchar(255) NOT NULL,
  `cardnumber` int(255) NOT NULL,
  `expdate` date NOT NULL,
  `cvv` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `flight_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `registration_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `date_of_birth`, `registration_date`) VALUES
('medhat', 'medhat@gmail.com', '$2y$10$FIjI7BrDKf6WxwVR0NRisOevxmPEZg8Pjb6pZ3zAYabNHRsRVUnDa', '2004-10-21', '2023-05-02'),
('barabary', 'barabary@gmail.com', '$2y$10$AH0VuTaw11T4z.rry9wHBe1TAI9FDJ1IMh1kE6rrbperIcrU2hZJO', '2004-02-11', '2023-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
