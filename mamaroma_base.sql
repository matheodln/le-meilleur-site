-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2023 at 05:24 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamaroma_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `achat_immediat`
--

DROP TABLE IF EXISTS `achat_immediat`;
CREATE TABLE IF NOT EXISTS `achat_immediat` (
  `Pseudo_Acheteur` varchar(45) NOT NULL,
  `Id_Item` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`Pseudo_Acheteur`,`Id_Item`),
  KEY `fk_Achat_Immediat_Item1_idx` (`Id_Item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `Pseudo` varchar(45) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Mail` varchar(80) NOT NULL,
  `Telephone` varchar(45) NOT NULL,
  `Photo` varchar(45) NOT NULL,
  `MDP` varchar(45) NOT NULL,
  `Adresse` varchar(45) NOT NULL,
  `Ville` varchar(45) NOT NULL,
  `Code_Postal` int(11) NOT NULL,
  `Pays` varchar(45) NOT NULL,
  PRIMARY KEY (`Pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acheteur`
--

INSERT INTO `acheteur` (`Pseudo`, `Nom`, `Prenom`, `Mail`, `Telephone`, `Photo`, `MDP`, `Adresse`, `Ville`, `Code_Postal`, `Pays`) VALUES
('RomainLeCrack', 'Thépaut', 'Romain', 'rm.thepaut@gmail.com', '+33 7 67 09 09 08', 'teteDeCul.jpg', 'azertyuiop', '33 rue de la salope', 'Thepaut Land', 666666, 'Irak'),
('mama', 'Nainville', 'Maëlys', 'maelysnainville@gmail.com', '3630', 'mama.jpg', 'azertyuiop', 'chez bebe spirou', 'Le perreu', 94170, 'France'),
('mathisLeGay', 'Chatillon', 'Mathis', 'mathis.chatillon@gmail.com', '442', 'mathis.jpg', 'azertyuiop', '4 rue des etoiles', 'Marseille', 13000, 'France'),
('mathisLeBG', 'Chatillon', 'Mathis', 'mathis.LeBG@gmail.com', '442', 'mathis.jpg', 'azertyuiop', '4 rue des etoiles', 'Marseille', 13000, 'France');

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `Pseudo` varchar(45) NOT NULL,
  `Mail` varchar(80) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `MDP` varchar(45) NOT NULL,
  PRIMARY KEY (`Pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enchere`
--

DROP TABLE IF EXISTS `enchere`;
CREATE TABLE IF NOT EXISTS `enchere` (
  `Id_Enchere` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Item` int(11) NOT NULL,
  `Pseudo_Admin` varchar(45) NOT NULL,
  `Prix_Actuel` int(11) NOT NULL,
  PRIMARY KEY (`Id_Enchere`),
  KEY `fk_Enchere_Item1_idx` (`Id_Item`),
  KEY `fk_Enchere_Administrateur1_idx` (`Pseudo_Admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `encherit`
--

DROP TABLE IF EXISTS `encherit`;
CREATE TABLE IF NOT EXISTS `encherit` (
  `Pseudo_Acheteur` varchar(45) NOT NULL,
  `Id_Enchere` int(11) NOT NULL,
  `Prix_Max_Acheteur` int(11) NOT NULL,
  PRIMARY KEY (`Pseudo_Acheteur`,`Id_Enchere`),
  KEY `fk_Encherit_Enchere1_idx` (`Id_Enchere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Id_Item` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(45) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Date_Publication` datetime NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(45) NOT NULL,
  `Quantite_actuel` int(11) NOT NULL,
  `Quantite_initial` int(11) NOT NULL,
  `Pseudo_Vendeur` varchar(45) NOT NULL,
  `Video` varchar(45) DEFAULT NULL,
  `type_vente` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Item`),
  KEY `fk_Item_Vendeur1_idx` (`Pseudo_Vendeur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Id_Item`, `Nom`, `Description`, `Date_Publication`, `Prix`, `Categorie`, `Quantite_actuel`, `Quantite_initial`, `Pseudo_Vendeur`, `Video`, `type_vente`) VALUES
(1, 'Bracelets royales Romains', 'Magnifiques bracelets en or 24 carrat ayant appartenu au 5ème empereur Romain', '2023-06-02 11:32:21', 500, 'accessoires', 500, 500, 'MatheoLeViking', NULL, 'achat immédiat'),
(2, 'Robe cléopatre', 'Robe en velour ayant appartenue à Cléopatre elle même', '2023-06-02 11:33:48', 15000, 'vêtements', 1, 1, 'MatheoLeViking', NULL, 'enchère'),
(3, 'Lots d\'armure soldat Romain', 'Lots de 2 armures de soldats Romain, général et soldats en cuivre et bronze avec également le casque de général en argent pur.', '2023-06-02 11:35:20', 1000, 'vêtements', 10, 10, 'MatheoLeViking', NULL, 'achat immédiat'),
(4, 'Armes et outils de soldats Romain', 'Lots de 10 outils et armes comportant notamment des épées, fourches et marteaux', '2023-06-02 11:37:01', 1000, 'objets', 30, 30, 'MatheoLeViking', NULL, 'négociation'),
(5, 'amphore', 'Magnifique trophée pour gladiateur fait de marbre avec finitions en bronze', '2023-06-04 17:07:19', 300, 'objets', 200, 200, 'MatheoLeViking', 'video.mp4', 'achat immédiat');

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `Adresse` varchar(80) NOT NULL,
  `Ville` varchar(45) NOT NULL,
  `Code_Postal` int(11) NOT NULL,
  `Pays` varchar(45) NOT NULL,
  `Telephone` varchar(45) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Pseudo_Acheteur` varchar(45) NOT NULL,
  PRIMARY KEY (`Adresse`,`Ville`,`Code_Postal`,`Pays`),
  KEY `fk_Livraison_Acheteur_idx` (`Pseudo_Acheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `negociation`
--

DROP TABLE IF EXISTS `negociation`;
CREATE TABLE IF NOT EXISTS `negociation` (
  `Pseudo_Acheteur` varchar(45) NOT NULL,
  `Pseudo_Vendeur` varchar(45) NOT NULL,
  `Id_Item` int(11) NOT NULL,
  `Nouveau_Prix` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Nb_offres` int(11) NOT NULL,
  PRIMARY KEY (`Pseudo_Acheteur`,`Pseudo_Vendeur`,`Id_Item`),
  KEY `fk_Negociation_Vendeur1_idx` (`Pseudo_Vendeur`),
  KEY `fk_Negociation_Item1_idx` (`Id_Item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `Numero_Carte` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Nom_Proprietaire` varchar(45) NOT NULL,
  `Code_Secu` int(11) NOT NULL,
  `Pseudo_Acheteur` varchar(45) NOT NULL,
  `Solde` float NOT NULL,
  PRIMARY KEY (`Numero_Carte`),
  KEY `fk_Paiement_Acheteur1_idx` (`Pseudo_Acheteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_item`
--

DROP TABLE IF EXISTS `photo_item`;
CREATE TABLE IF NOT EXISTS `photo_item` (
  `Nom_Photo` varchar(45) NOT NULL,
  `Id_Item` int(11) NOT NULL,
  PRIMARY KEY (`Nom_Photo`),
  KEY `fk_Photo_Item_Item1_idx` (`Id_Item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo_item`
--

INSERT INTO `photo_item` (`Nom_Photo`, `Id_Item`) VALUES
('Image1.jpg', 1),
('Image2.jpg', 2),
('Image3.jpg', 3),
('Image4.jpg', 4),
('amphore.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `Pseudo` varchar(45) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Mail` varchar(60) NOT NULL,
  `Photo` varchar(45) NOT NULL,
  `Image_Fond` varchar(45) NOT NULL,
  `MDP` varchar(45) NOT NULL,
  `Validation` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendeur`
--

INSERT INTO `vendeur` (`Pseudo`, `Nom`, `Prenom`, `Mail`, `Photo`, `Image_Fond`, `MDP`, `Validation`) VALUES
('MatheoLeViking', 'Delannoy', 'Mathéo', 'matheo.delannoy@gmail.com', 'matheo.jpg', 'gladiator.jpg', 'azertyuiop', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
