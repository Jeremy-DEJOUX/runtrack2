-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 nov. 2020 à 10:42
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(5, 'Mec, c\'est complètement incr\'', 30, '2020-11-25 16:10:48'),
(6, 'cc bb', 31, '2020-11-25 16:17:24'),
(7, 'Je rentre pas ce soir', 31, '2020-11-25 16:17:32'),
(8, 'Je rentre pas ce soir', 31, '2020-11-25 16:24:38'),
(9, 'Hey man, this opening party was littttttttttttttttttttt', 32, '2020-11-26 11:29:31'),
(10, 'boo', 33, '2020-11-27 10:25:07'),
(11, 'Boop', 33, '2020-11-27 10:27:14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
(24, 'Joris', '$2y$10$L7ABO/mqoElKhbyZuzNqOe9PlaGnF/6mOst9RjrL1Zn6YsCOgP17C'),
(25, 'Jeremy', '$2y$10$j8JSYHjrHtcC/NDiXVeYpee9LbDMaws5oG5.rpBppOZgYOBtG3S7y'),
(26, 'fabino', '$2y$10$zvL/pWm3i7wVfl4k75/CEOuOV9k74IZ3y0r1eNvxz57RxWRBHSdF6'),
(27, 'Marwane', '$2y$10$Hy04mvOgm56qQE9l1OZv3uvCjBBJ.BxjHIlgm1IxyeNsDQegJJhpS'),
(29, 'ruben', '$2y$10$78EJICi41otT1v.gpUtUpuVWAdvza8hDPOY5RWQ2Ycv/m0Z0G51su'),
(30, 'SCH', '$2y$10$MnNkeGzrHB7/JNaPoG9T3ucieZhUEUIQCePfS9RO/gmNhJXPDzkvi'),
(31, 'HARDJOJO', '$2y$10$X3CzWsAwIErPP5zBoGpOkusG08B8TubCcy0gdAKsDvR8H0KpeQAmS'),
(32, 'Travis scott', '$2y$10$5ttv6R6lcSzmFFVQfbNHJO/BYOs4Z3qBFvq/szZb7WDFKk19o1b/O'),
(33, 'Chester', '$2y$10$T9nwybdgM5DvgRBH.PMKius7Q.auAAQjJyKLF79ndm3K9BNagOq.u'),
(34, 'nad', '$2y$10$6pa./qgPDH6ADdzcv1lpkODSf438acq4kJy0zPFn2qhRO/HSAg7Mm'),
(35, 'a', '$2y$10$DQCpE0wbb0CEIoWvTuTHU.7lsnvFIJ0JvfRFIMHuxZLgmaSww5rhm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
