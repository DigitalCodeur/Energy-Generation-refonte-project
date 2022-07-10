-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 08 juil. 2022 à 20:38
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espaceProgrammes`
--

-- --------------------------------------------------------

--
-- Structure de la table `makeInscription`
--

CREATE TABLE `makeInscription` (
  `user_Id` int(11) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirmeEmail` varchar(255) NOT NULL,
  `numeroWhatsap` varchar(20) NOT NULL,
  `pays` varchar(25) NOT NULL,
  `niveauEducation` varchar(25) NOT NULL,
  `thematiqueChoisi` varchar(25) NOT NULL,
  `campusPrefere` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `makeInscription`
--
ALTER TABLE `makeInscription`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `makeInscription`
--
ALTER TABLE `makeInscription`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
