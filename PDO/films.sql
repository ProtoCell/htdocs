-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 09 avr. 2019 à 08:35
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdfilms`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(2) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `annee` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `duree` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `realisateur`, `titre`, `annee`, `budget`, `genre`, `duree`) VALUES
(7, 'Christopher Nolan', 'Interstellar', 2014, 165000000, 'Science-fiction', 169),
(8, 'David Fincher', 'Fight Club', 1999, 63000000, 'Thriller', 139),
(9, 'Stanley Kubrick', 'Shining', 1980, 19000000, 'Horreur', 119),
(10, 'Steven Spielberg', 'Jurassic Park', 1993, 63000000, 'Science-fiction', 127),
(11, 'Peter Jackson', 'Le Seigneur des anneaux : Le retour du Roi', 2003, 94000000, 'Fantasy', 201),
(12, 'Robert Zemeckis', 'Forrest Gump', 1994, 65000000, 'Comédie dramatique', 142);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
