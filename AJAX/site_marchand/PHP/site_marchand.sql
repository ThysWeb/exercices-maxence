-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 15:56
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
-- Base de données :  `site_marchand`
--
CREATE DATABASE IF NOT EXISTS `site_marchand` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `site_marchand`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `libelleCategorie`) VALUES
(2, 'Fruits'),
(3, 'Légumes'),
(4, 'Snacks'),
(6, 'Boissons froides');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `mailClient` varchar(75) NOT NULL,
  `passClient` varchar(50) NOT NULL,
  `adresseClient` varchar(100) NOT NULL,
  `villeClient` varchar(100) NOT NULL,
  `dateAjout` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` datetime DEFAULT CURRENT_TIMESTAMP,
  `sommeCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gerants`
--

DROP TABLE IF EXISTS `gerants`;
CREATE TABLE IF NOT EXISTS `gerants` (
  `idGerant` int(11) NOT NULL AUTO_INCREMENT,
  `pseudoGerant` varchar(18) NOT NULL,
  `passGerant` varchar(50) NOT NULL,
  `mailGerant` varchar(100) NOT NULL,
  `roleGerant` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idGerant`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gerants`
--

INSERT INTO `gerants` (`idGerant`, `pseudoGerant`, `passGerant`, `mailGerant`, `roleGerant`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@epicerie.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `idProduit` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `quantiteCommande` int(11) NOT NULL,
  PRIMARY KEY (`idPanier`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `libelleProduit` varchar(50) NOT NULL,
  `photoProduit` varchar(100) NOT NULL,
  `prixProduit` int(11) NOT NULL,
  `quantiteProduit` int(11) NOT NULL,
  `descriptionProduit` varchar(75) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `libelleCategorie` varchar(50) DEFAULT NULL COMMENT 'Objet categorie',
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idProduit`, `libelleProduit`, `photoProduit`, `prixProduit`, `quantiteProduit`, `descriptionProduit`, `idCategorie`, `libelleCategorie`) VALUES
(2, 'Pomme', 'pomme.png', 1, 19, 'C\'est une pomme verte', 2, ''),
(3, 'Carotte', 'carotte.png', 1, 84, 'C\'est bon pour la vue, le teint et la bonne humeur', 3, ''),
(4, 'Poire', 'poire.png', 1, 32, 'C\'est une poire', 2, ''),
(5, 'Oignon', 'oignon.png', 1, 16, 'Eh bah ça fait pleurer', 3, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
