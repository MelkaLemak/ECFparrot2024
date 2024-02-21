-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 fév. 2024 à 10:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `statut` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `name`, `firstname`, `message`, `statut`) VALUES
(16, 'melka', 'lemak', 'super', 1),
(17, 'joel', 'bats', 'genial je suis hyper content', 1),
(18, 'Fontaine', 'Just', 'garage trés serieux je recommande', 0),
(19, 'michel', 'rasmus', 'prestations solide, acceuil pas terrible. le sourire ne serait pas de trop ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `days1` varchar(25) DEFAULT NULL,
  `days2` varchar(25) DEFAULT NULL,
  `hours1` varchar(25) DEFAULT NULL,
  `hours2` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `office`
--

INSERT INTO `office` (`id`, `phone`, `address`, `mail`, `days1`, `days2`, `hours1`, `hours2`) VALUES
(1, '05 83 83 83 83', '12 rue de la joie 30000 Toulouse', 'contact@garage-parrot.com', 'Du lundi au vendredi', 'Samedi', '8h45 - 12h00, 14h00 - 18h', '08h45 - 12h00');

-- --------------------------------------------------------

--
-- Structure de la table `secure`
--

CREATE TABLE `secure` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `secure`
--

INSERT INTO `secure` (`id`, `user`, `password`, `role`) VALUES
(0, 'Joel', '$2y$10$VLJlqO.2lZeFexw74JP6lefCpDme1Yy7QLnlPfiZ1fkSaOif092ie', 2),
(0, 'V.Parrot', '$2y$10$13VDXdZouKLXzdAsb.fh3O9czzBmsycN3/TEo3Uk1QnDTzibth4Pe', 1),
(3, 'employe', '$2y$10$Od/NaLNtJWalQCpa71hlc.C7lJoucV5xy1ypgb1T1xjc2rBnYikTS', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `secure`
--
ALTER TABLE `secure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `secure`
--
ALTER TABLE `secure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `cout` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `cout`, `description`) VALUES
(3, 'nettoyage', 20.00, 'venez au garage pour un nettoyage en profondeur de votre habitacle');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `role`) VALUES
(1, 'Admin', 'MP', 1),
(2, 'User', 'MP2', 2),
(3, 'test', 'test', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `type_energie` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `image`, `prix`, `kilometrage`, `type_energie`, `annee`, `description`) VALUES
(3, 'udhue', 25.00, 2555, 'ddd', 255, 'ddd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
