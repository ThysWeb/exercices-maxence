-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 mars 2020 à 16:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `libelleCategorie`) VALUES
(1, 'Fruits'),
(2, 'Légumes'),
(3, 'Snacks'),
(4, 'Boissons');

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
  `dateAjout` date NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `mailClient`, `passClient`, `adresseClient`, `villeClient`, `dateAjout`) VALUES
(1, 'Jean', 'Arthur', 'jean.jean@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '15 rue du JeJe', 'JeJe', '2020-03-20');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` date NOT NULL,
  `sommeCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`idCommande`, `dateCommande`, `sommeCommande`, `idClient`) VALUES
(1, '2020-03-20', 6, 1);

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
  `roleGerant` int(11) NOT NULL,
  PRIMARY KEY (`idGerant`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gerants`
--

INSERT INTO `gerants` (`idGerant`, `pseudoGerant`, `passGerant`, `mailGerant`, `roleGerant`) VALUES
(1, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'admin@epicerie.bio', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`idProduit`),
  KEY `produits_categories_FK` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idProduit`, `libelleProduit`, `photoProduit`, `prixProduit`, `quantiteProduit`, `descriptionProduit`, `idCategorie`) VALUES
(1, 'Pomme', 'pomme.png', 1, 20, 'C\'est une pomme', 1),
(2, 'Carotte', 'carotte.png', 1, 20, 'C\'est une carotte', 2),
(3, 'Poire', 'poire.png', 1, 20, 'C\'est une poire.', 1),
(4, 'Oignon', 'oignon.png', 1, 20, 'C\'est un oignon.', 2),
(5, 'Coca-cola (33cl)', 'coca.png', 1, 20, 'C\'est une canette de coca.', 4),
(6, 'Croissant', 'croissant.png', 1, 20, 'C\'est un croissant.', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_categories_FK` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
