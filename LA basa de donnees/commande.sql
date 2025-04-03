-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 mai 2023 à 01:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `Matricule` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `moteur` varchar(10) NOT NULL,
  `Qte` int(2) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`Matricule`, `designation`, `moteur`, `Qte`, `categorie`, `prix`, `image`) VALUES
('100UDHE', 'GLA', 'V7', 4, 'mercedes', 100000000000, ' images/gla.jpg'),
('12121ER', 'Audi A9', 'V6', 3, 'audi', 100001000, 'images/AudiA9.jpg'),
('122Z3E', 'Audi A1', 'V7', 3, 'audi', 10000000000, 'images/Audi1.png'),
('1234AZES', 'MCANT', 'V6', 4, 'porsche', 10000000000, ' images/macan2.jpg'),
('1234EDSR', 'panamera', 'V7', 3, 'porsche', 12000000000, ' img_ved_od/panaa.jpg'),
('1234QBC', 'grecale', 'V7', 3, 'maserati', 10000000000, ' images/masJN.jpg'),
('123EZSD', 'GLE', 'V7', 2, 'maserati', 1000020000, ' images/gle.png'),
('123REZE', 'AMG', 'V7', 4, 'mercedes', 10000000000, ' images/amg.jpg'),
('123YEFD', 'Cayenne', 'V8', 4, 'porsche', 10000000000, ' images/blaC.jpg'),
('123ZSZEE', '488 CHALLENGE', 'V7', 4, 'ferari', 100000000000, 'images/cha2.jpg'),
('124ESZA', 'Ghlibi', 'V8', 4, 'maserati', 1234000000, ' images/ghib.jpg'),
('126478YFF', 'CIELO', 'V8', 4, 'maserati', 1000000000000, ' images/ciel3.jpg'),
('12ESR', 'ClASSE G', 'V8', 3, 'mercedes', 120000000000, ' images/merc2.jpg'),
('12EZSA', 'TONAL', 'V6', 4, 'alfa', 1000000000, 'images/tnal1.jpg'),
('12Z3A', 'LUSSO', 'V6', 4, 'alfa', 12220000, 'images/lusso2.jpg'),
('12Z3E', '488 PISTA', 'V6', 4, 'ferari', 1200000000, 'images/PSTA.jpg'),
('12ZAS3', '812 SUPERFAST', 'V7', 3, 'ferari', 1231000000, 'images/super2.jpg'),
('12ZZZ1', 'GUILIA', 'V6', 4, 'alfa', 120000000, 'images/g1.jpg'),
('234ESZD', 'QUATTROPORTE', 'V8', 4, 'maserati', 20000000000, ' images/qutro.jpg'),
('235ZSYT', 'Audi A8', 'V6', 4, 'audi', 1989100000, 'images/AUA8.jpg'),
('314TRD', 'Boxter', 'V7', 4, 'alfa', 120000000000, 'images/boxter3.jpg'),
('563TE5', 'AMG', 'V7', 4, 'mercedes', 120000000, 'images/amg.jpg'),
('847YU', 'Lmola', 'V5', 4, 'alfa', 12000000, 'images/mola3.jpg'),
('HYE615', 'PORTOFINO', 'V7', 2, 'ferari', 10000000000, 'images/porto1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
