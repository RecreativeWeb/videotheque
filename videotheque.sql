-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 14 nov. 2017 à 23:54
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `videotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `genre`, `realisateur`, `annee`) VALUES
(1, 'Amadeus', 'Comédie dramatique', 'Milos Forman', '1984-11-14 22:25:27'),
(2, 'Cyrano de Bergerac', 'Comedie dramatique', 'Jean Paul Rappeneau', '1990-11-14 22:35:50'),
(3, 'Vanilla sky', 'Science fiction', 'Cameron Crowe', '2001-11-14 22:39:38'),
(4, 'Alien, le huitième passager', 'Science fiction horrifique', 'Ridley Scott', '1979-11-14 22:44:43');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;