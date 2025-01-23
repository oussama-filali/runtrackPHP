-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 jan. 2025 à 22:21
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour 08`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(24) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`nom`, `prenom`, `naissance`, `sexe`, `email`) VALUES
('Zimmermann', 'Cyril', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Zimmermann', 'Cyril', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Soriano', 'Jessica', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roumégas', 'Roxan', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Assens', 'Pascal', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Cristinelli', 'Terry', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Habib', 'Ruben', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Dupont', 'Toto', '2019-11-07', 'Homme', 'toto@laplateforme.io'),
('Zimmermann', 'Cyril', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Soriano', 'Jessica', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Roumégas', 'Roxan', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Assens', 'Pascal', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Cristinelli', 'Terry', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Habib', 'Ruben', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Dupont', 'Toto', '2019-11-07', 'Homme', 'toto@laplateforme.io');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
