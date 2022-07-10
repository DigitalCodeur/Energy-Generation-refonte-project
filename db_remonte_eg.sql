-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 10 juil. 2022 à 19:59
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : ` form_php_mysql`
--

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_form`
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
-- Structure de la table `programme_form`
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `programme_form`
--
ALTER TABLE `programme_form`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `programme_form`
--
ALTER TABLE `programme_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
