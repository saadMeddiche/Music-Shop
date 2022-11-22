-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 nov. 2022 à 21:23
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `music_website`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `type`, `price`, `img`, `stock`) VALUES
(17, 'Guitar', 20, 'guitar.jpg', 0),
(18, 'Drums', 100, 'drums.jpg', 0),
(19, 'Test', 200, 'sells.jpg', 0),
(20, 'Deleniti alias ipsa', 428, 'boughts.jpg', 100),
(21, 'Dolore voluptatem re', 451, 'income.jpg', 0),
(22, 'Drums', 8787, 'guitar.jpg', 1),
(23, 'Aspernatur laudantiu', 575, 'guitar.jpg', 0),
(24, 'Aspernatur laudantiu', 575, 'guitar.jpg', 0),
(25, 'Aspernatur laudantiu', 575, 'guitar.jpg', 0),
(26, 'Aspernatur laudantiu', 575, 'guitar.jpg', 0),
(27, 'Aspernatur laudantiu', 575, 'guitar.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `signin`
--

INSERT INTO `signin` (`id`, `name`, `email`, `pass`) VALUES
(15, 'Saad Meddiche', 'saadmeddiche2004201@gmail.com', 'saadsaad'),
(16, 'Ahmed Abderrafie', 'ahmed@gmail.com', 'SAADSAAD'),
(17, 'Khalid Meddiche', 'khalidmeddiche@gmail.com', '12345678'),
(18, 'SAAD MOUMOU', 'saad@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `statistique`
--

CREATE TABLE `statistique` (
  `sumOfSells` int(11) NOT NULL,
  `sumOfBoughts` int(11) NOT NULL,
  `priceOfSells` int(11) NOT NULL,
  `priceOfBoughts` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `statistique`
--

INSERT INTO `statistique` (`sumOfSells`, `sumOfBoughts`, `priceOfSells`, `priceOfBoughts`, `id`) VALUES
(101, 202, 18787, 101310, 99);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statistique`
--
ALTER TABLE `statistique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
