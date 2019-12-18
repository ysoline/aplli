-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 déc. 2019 à 09:34
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appli`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajax`
--

DROP TABLE IF EXISTS `ajax`;
CREATE TABLE IF NOT EXISTS `ajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ajax`
--

INSERT INTO `ajax` (`id`, `test`) VALUES
(1, 'test'),
(2, 'test'),
(3, 'test1'),
(4, 'test2'),
(5, 'test3'),
(6, 'test4'),
(7, 'test5'),
(8, 'test6'),
(9, '5'),
(10, 'test7'),
(11, 'test8'),
(12, 'test9'),
(13, 'test10'),
(14, 'test11'),
(15, 'test12'),
(16, 'test'),
(17, 'test'),
(18, 'Test rewrite'),
(19, 'test12'),
(20, 'test13');

-- --------------------------------------------------------

--
-- Structure de la table `dates_format`
--

DROP TABLE IF EXISTS `dates_format`;
CREATE TABLE IF NOT EXISTS `dates_format` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_brut` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dates_format`
--

INSERT INTO `dates_format` (`id`, `date_brut`) VALUES
(1, '2019-11-30'),
(2, '2019-11-30'),
(3, '1970-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
