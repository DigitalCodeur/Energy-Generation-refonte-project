-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-energy-generation.alwaysdata.net
-- Generation Time: Jul 14, 2022 at 05:06 PM
-- Server version: 10.6.7-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `energy-generation_db_remonte_eg`
--
CREATE DATABASE IF NOT EXISTS `energy-generation_db_remonte_eg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `energy-generation_db_remonte_eg`;

-- --------------------------------------------------------

--
-- Table structure for table `article_form`
--

CREATE TABLE `article_form` (
  `user_id` int(11) NOT NULL,
  `commentaire` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `article_form`
--

INSERT INTO `article_form` (`user_id`, `commentaire`) VALUES
(19, 'bonjour'),
(20, 'salut'),
(21, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_form`
--

CREATE TABLE `newsletter_form` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `langage1` varchar(100) NOT NULL,
  `langage2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `newsletter_form`
--

INSERT INTO `newsletter_form` (`user_id`, `name`, `email`, `langage1`, `langage2`) VALUES
(78, 'Pilantè', 'mewe.sizino3@gmail.com', '', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `programme_form`
--

CREATE TABLE `programme_form` (
  `user_id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `confirmeEmail` varchar(100) NOT NULL,
  `numeroWhatsap` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `niveauEducation` varchar(100) NOT NULL,
  `thematiqueChoisi` varchar(100) NOT NULL,
  `campusPrefere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `programme_form`
--

INSERT INTO `programme_form` (`user_id`, `prenom`, `nom`, `genre`, `email`, `confirmeEmail`, `numeroWhatsap`, `pays`, `niveauEducation`, `thematiqueChoisi`, `campusPrefere`) VALUES
(2, 'Pilantè Mèwè ', 'SIZIN', 'Homme', 'mewe.sizino3@gmail.com', 'mewe.sizino3@gmail.com', '+22893869893', 'Togo', ' Bac+3', 'Energie', 'Campus Anglophone - Accra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_form`
--
ALTER TABLE `article_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `programme_form`
--
ALTER TABLE `programme_form`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_form`
--
ALTER TABLE `article_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `programme_form`
--
ALTER TABLE `programme_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
