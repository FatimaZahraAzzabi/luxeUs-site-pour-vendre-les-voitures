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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `code` varchar(10) NOT NULL,
  `username` varchar(35) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `image_cl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`code`, `username`, `telephone`, `email`, `cin`, `image_cl`) VALUES
('amina84', 'Amina wakil', '0699999999', 'Aminawakil@gmail.com', 'BB66545', 'images/admina.png'),
('fatima12', 'fatima zahra salim', '065434118', 'fatimazahra@gmail.com', 'BB77283', 'images/client6.jpg'),
('hassan123', 'hassan addil', '0643234565', 'hassanaddil@gmail.com', 'bb112233', 'images/client1.png'),
('hatima09', 'hatim amari', '0654123423', 'hatimaamari@gmail.com', 'bb563421', 'images/client8.png'),
('hicham78', 'hicham atifi', '092782782', 'hichamatifi@gmail.com', 'bb87872', 'images/clien9.png'),
('med543', 'mohamed elnaji', '065458932', 'mohamedelnaji@gmail.com', 'bg543423', 'images/client3.png'),
('salma12', 'salma jamil', '065481743', 'salmajamil@gmail.com', 'bb778847', 'images/client5.png'),
('zak123', 'zakaria hassi', '0656723412', 'zakariahass@gmail.com', 'bb778899', 'images/client2.png'),
('zineb12', 'zineb harit', '0675342312', 'zinebharit@gmail.cim', 'bb568723', 'images/client4.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
