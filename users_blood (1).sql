-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 04:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_db`
--
DROP DATABASE IF EXISTS blood_bank_db;

CREATE DATABASE blood_bank_db;

USE blood_bank_db;
-- --------------------------------------------------------

--
-- Table structure for table `users_blood`
--

CREATE TABLE `users_blood` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `blood_group` varchar(12) NOT NULL,
  `signupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_blood`
--

INSERT INTO `users_blood` (`id`, `first_name`, `last_name`, `user_name`, `email_id`, `password`, `mobile_number`, `blood_group`, `signupdate`) VALUES
(39, 'Surya', 'Sandeep', 'surya_sandeep', 'Bala@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234567890', 'A Negative', '2018-09-16'),
(40, 'Mani', 'Krishna', 'mani_krishna', 'Adada@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234567890', 'B Positive', '2018-09-17'),
(41, 'Manfc', 'Amfjal', 'manfc_amfjal', 'Asda@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234554321', 'A Positive', '2018-09-17'),
(42, 'Bolla', 'Gowthma', 'bolla_gowthma', 'Bolla@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '6789009876', 'O Positive', '2018-09-17'),
(43, 'Sai', 'Bolla', 'sai_bolla', 'Sai@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '4567887654', 'O Negative', '2018-09-17'),
(44, 'Sai', 'Kiran', 'sai_kiran', 'Kiran@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234576543', 'A Positive', '2018-09-17'),
(45, 'Venkat', 'Kiran', 'venkat_kiran', 'Venkat@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2345678909', 'AB Positive', '2018-09-17'),
(46, 'Chaava', 'Mani', 'chaava_mani', 'Chava@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '7898776542', 'AB Negative', '2018-09-17'),
(47, 'Bala', 'Sandeep', 'bala_sandeep', 'Asda@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1231231231', 'AB Negative', '2018-09-17'),
(48, 'Ada', 'Asda', 'ada_asda', 'Adad@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2345678987', 'A Positive', '2018-09-17'),
(49, 'Vajdll', 'Sdfosbo', 'vajdll_sdfosbo', 'Asgzc@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234565434', 'A Negative', '2018-09-17'),
(50, 'Mahesh', 'Babu', 'mahesh_babu', 'Mahesh@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1234678765', 'B Positive', '2018-09-17'),
(51, 'Bala', 'Surya ', 'bala_bala', 'suryait9210@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2899800169', 'O Positive', '2018-09-19'),
(52, 'Mansi', 'Mistry   ', 'mansi_mistry', 'Mansi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2345623456', 'B Negative', '2018-09-21'),
(53, 'Adad', 'Adadad ', 'adad_adadad', 'Adadada@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '9998881234', 'A Positive', '2019-02-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_blood`
--
ALTER TABLE `users_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_blood`
--
ALTER TABLE `users_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
