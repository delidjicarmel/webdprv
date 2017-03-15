-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 15 Mars 2017 à 10:09
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dprv`
--

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_dossier` varchar(255) NOT NULL,
  `nom_usager` varchar(255) NOT NULL,
  `position_dossier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`id`, `numero_dossier`, `nom_usager`, `position_dossier`) VALUES
(1, '001/5485', 'SOSSOU Mensan', 'Sécrétariat'),
(2, '002/2895', 'KOSSI Carmel', 'Service des Pensions'),
(3, '003/4720', 'SOSSOU Peck', 'Service Financier'),
(4, '004/6323', 'CODO Paterne', 'Service Retrait'),
(5, '005/2555', 'BOUKARI Emmanuel', 'Sécrétariat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
