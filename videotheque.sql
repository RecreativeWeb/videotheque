-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 nov. 2017 à 15:29
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `videotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee` datetime DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `synopsis` longtext COLLATE utf8_unicode_ci,
  `bigcover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `genre`, `realisateur`, `annee`, `cover`, `synopsis`, `bigcover`) VALUES
(1, 'Amadeus', 'Comédie dramatique', 'Milos Forman', '1984-11-14 22:25:27', 'amadeus.jpg', 'A Vienne, en novembre 1823. Au coeur de la nuit, un vieil homme égaré clame cette étonnante confession : \"Pardonne, Mozart, pardonne à ton assassin !\" Ce fantôme, c\'est Antonio Salieri, jadis musicien réputé et compositeur officiel de la Cour.\r\nDès l\'enfance, il s\'était voué tout entier au service de Dieu, s\'engageant à le célébrer par sa musique, au prix d\'un incessant labeur. Pour prix de ses sacrifices innombrables, il réclamait la gloire éternelle. Son talent, reconnu par l\'empereur mélomane Joseph II, valut durant quelques années à Salieri les plus hautes distinctions.\r\nMais, en 1781, un jeune homme arrive à Vienne, précédé d\'une flatteuse réputation. Wolfgang Amadeus Mozart est devenu le plus grand compositeur du siècle. Réalisant la menace que représente pour lui ce surdoué arrogant dont il admire le profond génie, Salieri tente de l\'évincer. ', 'amadeusG.jpg'),
(2, 'Cyrano de Bergerac', 'Comedie dramatique', 'Jean Paul Rappeneau', '1990-11-14 22:35:50', 'cyranoDeBergerac.jpg', 'Les aventures du célèbre et turbulent cadet de Gascogne, amoureux de sa cousine, Roxane, vues par le réalisateur de \"La Vie de château\" et le scénariste Jean-Claude Carrière. \"Il s\'agissait de faire un film. Nous ne pouvions nous contenter d\'une simple mise en images de la pièce. Nous voulions donner à cette histoire que nous aimions la dynamique et la tension d\'un film. Le vrai pari du film, c\'est que les personnages y parlent en vers.\" ', 'cyranoDeBergerac.jpg'),
(3, 'Vanilla sky', 'Science fiction', 'Cameron Crowe', '2001-11-14 22:39:38', 'vanillasky.jpg', 'David Aames est un jeune et brillant éditeur new-yorkais qui a tout pour lui : l\'argent, la réussite professionnelle et les femmes. Son ami Pelayo commet l\'erreur de lui présenter Sofia, sa nouvelle compagne. Au premier regard, David succombe au charme de celle-ci. Tous les deux filent bientôt le parfait amour.\r\nAlors que David se dispute en voiture avec Julie, une ex folle de jalousie, la jeune femme accélère et c\'est l\'accident. Julie décède. Atrocement défiguré, David est transporté d\'urgence à l\'hôpital où les médecins ne peuvent réaliser de miracle. Sa vie bascule. Les gens ont dorénavant peur de lui et Sofia l\'évite.\r\nMais un matin, David se fait gentiment réveiller par celle-ci, qui lui déclare son amour. Les médecins lui annoncent même qu\'il pourra retrouver son ancien visage. Réalité ou hallucination ? ', 'vanillaskyG.jpg'),
(4, 'Alien, le huitième passager', 'Science fiction horrifique', 'Ridley Scott', '1979-11-14 22:44:43', 'alien.jpg', 'Le vaisseau commercial Nostromo et son équipage, sept hommes et femmes, rentrent sur Terre avec une importante cargaison de minerai. Mais lors d\'un arrêt forcé sur une planète déserte, l\'officier Kane se fait agresser par une forme de vie inconnue, une arachnide qui étouffe son visage.\r\nAprès que le docteur de bord lui retire le spécimen, l\'équipage retrouve le sourire et dîne ensemble. Jusqu\'à ce que Kane, pris de convulsions, voit son abdomen perforé par un corps étranger vivant, qui s\'échappe dans les couloirs du vaisseau... ', 'alienG.jpg'),
(6, 'Les dents de la mer', 'Thriller', 'Stevent Spielberg', NULL, NULL, 'La mignonne petite station balnéaire d’Amity baigne dans le calme, la volupté et la rentabilité jusqu’au jour où un énorme requin blanc entreprend de dépiauter tous les touristes qui viennent s’y tremper les fesses. Panique générale, fermeture des plages, fréquentation à la baisse, commerçants en colère et maire congestionné. Le chef Brody, aquaphobe convaincu, doit alors partir chasser la bête, en compagnie d’un vieux briscard de marin et d’un jeune océanologue...', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
