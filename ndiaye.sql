-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 22 Janvier 2024 à 12:28
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ndiaye`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID_Client` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`ID_Client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID_Client`, `prenom`, `nom`, `adresse`, `contact`) VALUES
(1, 'coumba', 'ndiaye', 'dakar', 785436785),
(2, 'Astou', 'Ndong', 'Dakar', 764884949),
(3, 'mame', 'ndiaye', 'touba', 764359865),
(4, 'soxna', 'faye', 'pikine', 786436743),
(5, 'soulayemane', 'gome', 'pikine', 765438907),
(6, 'cheikh', 'ndiaye', 'louga', 764357890),
(7, 'Diarra', 'diop', 'Guédiawaye', 778997480);

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `ID_Produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `poids` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `stocks`
--

INSERT INTO `stocks` (`ID_Produit`, `nom`, `poids`, `type`) VALUES
(1, 'Arraw fondé', 1, 'Mais'),
(2, 'Couscous', 500, 'MIil'),
(3, 'Arraw riz', 1, 'Riz'),
(4, 'Couscous', 500, 'Riz'),
(5, 'thiakiri', 1, 'Mil'),
(6, 'Farine', 1, 'Mais'),
(7, 'Arraw fondé', 500, 'Mil');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE IF NOT EXISTS `ventes` (
  `ID_ventes` int(11) NOT NULL AUTO_INCREMENT,
  `ID_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `ID_client` int(11) NOT NULL,
  PRIMARY KEY (`ID_ventes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `ventes`
--

INSERT INTO `ventes` (`ID_ventes`, `ID_produit`, `quantite`, `prix`, `ID_client`) VALUES
(1, 5, 1, 2000, 1),
(2, 6, 1, 3000, 2),
(3, 7, 500, 5000, 3),
(4, 4, 500, 2000, 4),
(5, 3, 1, 3000, 5),
(6, 2, 500, 5000, 6),
(7, 1, 1, 3000, 7);
