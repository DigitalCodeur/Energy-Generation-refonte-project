-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 10 juil. 2022 à 19:51
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
-- Base de données : `db_remonte_eg`
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

--
-- Déchargement des données de la table `newsletter_form`
--

INSERT INTO `newsletter_form` (`user_id`, `name`, `email`, `langage1`, `langage2`) VALUES
(1, 'sdfdgfhjbk', 'aaaaaa@gmail.com', '', 'english'),
(2, 'sdfdgfhjbk', '', '', 'english'),
(3, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(4, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(5, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(6, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(7, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(8, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(9, 'afi', 'aaaaaa@gmail.com', 'french', ''),
(10, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(11, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(12, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(13, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(14, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(15, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(16, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(17, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(18, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(19, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(20, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(21, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(22, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(23, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(24, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(25, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(26, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(27, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(28, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(29, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(30, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(31, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(32, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(33, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(34, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(35, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(36, 'sdfdgfhjbk', 'aaaaaa@gmail.com', 'french', ''),
(37, 'sdfdgfhjbk', 'aaaaaa@gmail.com', '', 'english');

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
-- Déchargement des données de la table `programme_form`
--

INSERT INTO `programme_form` (`user_id`, `prenom`, `nom`, `genre`, `email`, `confirmeEmail`, `numeroWhatsap`, `pays`, `niveauEducation`, `thematiqueChoisi`, `campusPrefere`) VALUES
(1, 'dftgyuh', 'erdtfyguh', 'Homme', 'example@gmail.com', 'example@gmail.com', '78946513265312', 'Burkina Faso', ' Bac+2', 'Agri-business', 'Campus Anglophone - Accra');

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
