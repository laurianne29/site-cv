-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Janvier 2017 à 17:02
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site-cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id_competence` int(11) NOT NULL,
  `competence` text NOT NULL,
  `niveau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id_competence`, `competence`, `niveau`) VALUES
(1, 'HTML/CSS', 'Intermédiaire'),
(2, 'Wordpress', 'Débutant'),
(5, 'Javascript', 'Notions'),
(9, 'PHP', 'Notions');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id_experience` int(11) NOT NULL,
  `experience` varchar(150) NOT NULL,
  `taches` text,
  `lieu` varchar(255) NOT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `id_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`id_experience`, `experience`, `taches`, `lieu`, `dates`, `id_competence`) VALUES
(2, 'Développeuse / intégratrice WEB', '<h3><a href="http://www.google.fr" target="_blank">Int&eacute;gration de sites web</a><strong> - <em>Villeneuve-la-garenne</em></strong></h3>\r\n', 'Villeneuve-la-Garenne', '18/07/2016 - 18/05/2017', 0);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dates_formation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `formation`, `description`, `dates_formation`) VALUES
(1, 'WF3', 'Formation de développeur / intégrateur WEB avec WF3', '01/09/2016 - 15/01/2017'),
(3, 'Baccalauréat Littéraire', 'Niveau BAC - Lycée Auguste Renoir', '2012-2015');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE `loisirs` (
  `id_loisir` int(11) NOT NULL,
  `titre_loisir` varchar(100) NOT NULL,
  `loisir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE `titre` (
  `id_titre` int(11) NOT NULL,
  `titre_cv` varchar(200) NOT NULL,
  `accroche` text NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `pseudo` varchar(32) NOT NULL,
  `avatar` varchar(64) NOT NULL,
  `age` int(3) NOT NULL,
  `sexe` enum('homme','femme') NOT NULL,
  `etat_civil` enum('M.','Mme','Mlle') NOT NULL,
  `statut` varchar(13) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(32) NOT NULL,
  `pays` varchar(25) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `tel`, `mdp`, `pseudo`, `avatar`, `age`, `sexe`, `etat_civil`, `statut`, `adresse`, `code_postal`, `ville`, `pays`, `notes`) VALUES
(1, 'Michelot', 'Laurianne', 'lauriannemichelot@gmail.com', '06 99 90 37 85', '123456', 'killa', 'hp.png', 19, 'femme', 'Mlle', 'Célibataire', '7, villa Jean Charles', '92600', 'Asnières-sur-Seine', 'France', ''),
(2, 'Snape', 'Severus', 'sevy@gmail.com', '07 85 31 64 25', '123', 'sevy', '', 38, 'homme', 'M.', 'Célibataire', '', '', 'London', 'England', ''),
(3, 'Lovegood', 'Luna', 'lunaweird@gmail.com', '06 99 35 64 85', '123456', 'luna', 'luna.jpg', 21, '', 'Mlle', 'Célibataire', '15 avenue Mcqueen', '62354', 'London', 'Angleterre', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `titre`
--
ALTER TABLE `titre`
  ADD PRIMARY KEY (`id_titre`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `titre`
--
ALTER TABLE `titre`
  MODIFY `id_titre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
