-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2022 at 06:35 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remonte_eg`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_form`
--

CREATE TABLE `article_form` (
  `user_id` int(11) NOT NULL,
  `commentaire` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `programme_form`
--
ALTER TABLE `programme_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
