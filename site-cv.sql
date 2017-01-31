-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Janvier 2017 à 16:53
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
(9, 'PHP', 'Notions'),
(11, 'Bootstrap', 'Intermédiaire');

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
(1, 'Stagiaire au sein du service informatique', 'Stage d''observation de 3ème à Six Telekurs', 'Nanterre', 'Juin 2012', 0),
(2, 'Développeuse / intégratrice web junior', 'Intégration de sites web au sein du PoleS', 'Villeneuve-la-Garenne', 'Juillet 2016 - mai 2017', 0),
(5, 'Stage d''intégrateur web', 'Intégration de site web...', 'Villeneuve-la-Garenne', '15/03/2017 - 15/05/2017', 0);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dates_formation` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `formation`, `description`, `dates_formation`, `lieu`) VALUES
(1, 'Baccalauréat Littéraire', 'Niveau BAC - Lycée Auguste Renoir', '2012-2015', 'Asnières-sur-Seine'),
(2, 'WF3', 'Formation de développeur / intégrateur WEB : acquisition de plusieurs langages et pratique web tel que le HTML / CSS, PHP, Javascript, framework (W), Bootstrap...', '01/09/2016 - 15/01/2017', 'Villeneuve-la-Garenne');

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id_langues` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `niveau` enum('notions','bon','très bon','courant','langue maternelle') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `langues`
--

INSERT INTO `langues` (`id_langues`, `langue`, `niveau`) VALUES
(1, 'Français', 'langue maternelle'),
(2, 'Espagnol', 'très bon'),
(3, 'Anglais', 'bon'),
(4, 'Allemand', 'notions');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE `loisirs` (
  `id_loisir` int(11) NOT NULL,
  `titre_loisir` varchar(100) NOT NULL,
  `loisir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `loisirs`
--

INSERT INTO `loisirs` (`id_loisir`, `titre_loisir`, `loisir`) VALUES
(1, 'Musique', 'Guitare & batterie (association YouRock!) et le piano.'),
(2, 'Numérique', ''),
(3, 'Voyages', ''),
(4, 'Photographie', ''),
(5, 'Astronomie', '');

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

--
-- Contenu de la table `titre`
--

INSERT INTO `titre` (`id_titre`, `titre_cv`, `accroche`, `logo`) VALUES
(1, 'Développeuse / intégratrice WEB JUNIOR', '"La logique te mènera d''un point A à un point B, alors que l''imagination t''emmènera n''importe où"', '');

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
  `notes` text NOT NULL,
  `poste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `tel`, `mdp`, `pseudo`, `avatar`, `age`, `sexe`, `etat_civil`, `statut`, `adresse`, `code_postal`, `ville`, `pays`, `notes`, `poste`) VALUES
(1, 'Michelot', 'Laurianne', 'lauriannemichelot@gmail.com', '06 99 90 37 85', '123456', 'killa', 'hp.png', 19, 'femme', 'Mlle', 'Célibataire', '7, villa Jean Charles', '92600', 'Asnières-sur-Seine', 'France', '', 'Développeuse / Intégratrice WEB');

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
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id_langues`);

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
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id_langues` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `titre`
--
ALTER TABLE `titre`
  MODIFY `id_titre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
