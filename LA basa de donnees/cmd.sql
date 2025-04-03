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
-- Structure de la table `cmd`
--

CREATE TABLE `cmd` (
  `ID` int(3) NOT NULL,
  `id_client` varchar(10) NOT NULL,
  `id_car` varchar(10) NOT NULL,
  `Qte_cmd` int(3) NOT NULL,
  `total` float NOT NULL,
  `localisation_client` varchar(20) NOT NULL,
  `mode_payer` varchar(20) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cmd`
--

INSERT INTO `cmd` (`ID`, `id_client`, `id_car`, `Qte_cmd`, `total`, `localisation_client`, `mode_payer`, `date_creation`) VALUES
(78, 'zineb12', '122Z3E', 2, 20000000000, 'Tanger', 'mastercard', '2023-04-28 13:16:14'),
(79, 'fatima12', '12ZAS3', 1, 1231000000, 'Casablanca', 'mastercard', '2023-04-28 13:21:01'),
(80, 'hassan123', '12ESR', 1, 120000000000, 'Rabat', 'paypal', '2023-04-28 13:22:06'),
(81, 'salma12', 'HYE615', 2, 20000000000, 'Fes', 'paypal', '2023-04-28 13:23:06'),
(82, 'amina84', '123EZSD', 1, 1000020000, 'Casablanca', 'mastercard', '2023-04-28 13:24:32'),
(83, 'zak123', '12121ER', 1, 100001000, 'Dakhla', 'mastercard', '2023-05-01 13:45:05'),
(85, 'hatima09', '1234QBC', 1, 10000000000, 'Agadir', 'paypal', '2023-05-01 14:23:36'),
(86, 'med543', '1234EDSR', 1, 12000000000, 'El Jadida', 'mastercard', '2023-05-01 16:58:26'),
(93, 'hicham78', '123EZSD', 1, 1000020000, 'Casablanca', 'visa', '2023-05-02 17:44:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cmd`
--
ALTER TABLE `cmd`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cmd`
--
ALTER TABLE `cmd`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
