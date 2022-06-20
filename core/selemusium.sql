-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 15:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `selemusium`
--

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `version` varchar(255) NOT NULL,
  `start_project` varchar(255) NOT NULL,
  `end_project` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `iframe` text NOT NULL,
  `url` text NOT NULL,
  `host` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `music`
--

INSERT INTO `music` (`id`, `title`, `description`, `version`, `start_project`, `end_project`, `credit`, `iframe`, `url`, `host`) VALUES
(1, 'evangelion remix', 'Voici le remix d\'un anim&eacute; (Japanimation) qui s\'appel \"N&eacute;on Genesis Evangelion\"', 'Release', '19/10/20', '21/10/20', 'Edward', 'https://www.instagram.com/p/CVTKBwYoRLz/embed', 'https://www.instagram.com/p/CVTKBwYoRLz/', 1),
(20, 'one piece remix', 'Voici le remix d\'un anim&eacute; (Japanimation) qui s\'appel \"One Piece\"', 'Release', '28/10/21', '29/10/20', 'Edward', 'https://www.instagram.com/p/CVnuuP8INub/embed', 'https://www.instagram.com/p/CVnuuP8INub/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `usermusic`
--

CREATE TABLE `usermusic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usermusic`
--

INSERT INTO `usermusic` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'root', 'root', 'root', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usermusic`
--
ALTER TABLE `usermusic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `usermusic`
--
ALTER TABLE `usermusic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
