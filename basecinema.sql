-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Mai 2019 à 05:43
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basecinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `idcalendrier` int(11) NOT NULL,
  `prix` float NOT NULL,
  `idfilm` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `heure` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `calendrier`
--

INSERT INTO `calendrier` (`idcalendrier`, `prix`, `idfilm`, `date`, `heure`) VALUES
(14, 20, 32, 'mardi', '12:00'),
(15, 10, 31, 'lundi', '09:00'),
(16, 10, 32, 'lundi', '12:00'),
(17, 10, 26, 'lundi', '15:00'),
(18, 30, 31, 'mardi', '20:00'),
(20, 20, 25, 'mercredi', '15:00'),
(21, 20, 30, 'mercredi', '18:00'),
(22, 20, 35, 'mercredi', '20:00'),
(23, 10, 25, 'jeudi', '09:00'),
(24, 25, 34, 'jeudi', '15:00'),
(25, 30, 30, 'vendredi', '11:00'),
(28, 0, 0, 'lundi', ''),
(29, 10, 29, 'lundi', '12:00');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `nom`) VALUES
(1, 'Horreur'),
(4, 'Animé'),
(5, 'Combat'),
(6, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `login`, `password`) VALUES
(4, 'chad', 'chad', 'YVw50oTT393M4fXAuPVfIjnxTA57unfgkN+Vo3gM97Ie9o8x6tWytey+bqP6dCQ5YiRQ1VGTAEOQea6qWlzviA=='),
(5, 'admin', 'admin', '4GSR89ip89KLXI66ecUH0XyXXri2pC8hWf/c+GHYi/FytVaUTGyGfztOeNjcvcysCFtQBo47xf4w4qenq4YjqQ==');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `idfilm` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `notefilm` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `datesortie` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `idgenre` int(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `indexation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`idfilm`, `titre`, `notefilm`, `duree`, `datesortie`, `image`, `idgenre`, `description`, `indexation`) VALUES
(23, 'asterix', 12, 5, '2019-05-08', 'r5.jpg', 1, 'SQDSQFSDF', 'asterix1252019-05-08r5.jpg1SQDSQFSDF'),
(25, 'bey_max', 16, 2, '2019-05-30', 'm1.jpg', 4, 'Rencontrez le team Big 6 ', 'bey_max1622019/05/30m1.jpg4Rencontrez le team Big 6 '),
(29, 'batman', 12, 2, '2019-05-29', 'r4.jpg', 1, 'L\'histoire de batman dans Gotham City', 'batman1222019-05-29r4.jpg1L\'histoire de batman dans Gotham City'),
(30, 'LEGO THE MOVIE', 17, 2, '2018-03-14', 'r1.jpg', 4, 'Rencontrez le monde des LEGO ,rien de plus extraor', 'LEGO THE MOVIE1722018-03-14r1.jpg4Rencontrez le monde des LEGO ,rien de plus extraordinaire que de voir tous ces LEGO '),
(31, 'PURGE', 18, 2, '2018-04-17', 'purge.jpg', 1, 'La purge vient de commencer ,le combat vient de commencer !Qui sera la personne qui survivra jusqu à', 'PURGE1822018/04/17purge.jpg1La purge vient de commencer ,le combat vient de commencer !Qui sera la personne qui survivra jusqu à'),
(32, 'SpiderMan HOMECOMING', 16, 3, '2018-05-10', 'spider.jpg', 5, 'C\'est l\'histoire de Peter Parker ,un jeune lycéen qui est devenu un heros malgré une morsure d\'un ar', 'SpiderMan HOMECOMING1632018-05-10spider.jpg5C\'est l\'histoire de Peter Parker ,un jeune lycéen qui est devenu un heros malgré une morsure d\'un arraigné radioactif!'),
(33, 'Asterix et Obelix !Le secret de la potion Magique', 20, 3, '2018-05-15', 'asterix.jpg', 4, 'La potion magique ,qui connait son secret?Ici vous', 'Asterix et Obelix !Le secret de la potion Magique2032018-05-15asterix.jpg4La potion magique ,qui connait son secret?Ici vous allez voir la nouvelle aventure d\'Asterix et Obelix à la recherche d\'un nouveau druide pour lui donner le secret de la potion magique'),
(34, 'Iron Man 3', 19, 2, '2017-05-16', 'r3.jpg', 5, 'Voici la suite d\'Iron Man 2!Enfin Tony Stark nous ', 'Iron Man 31922017-05-16r3.jpg5Voici la suite d\'Iron Man 2!Enfin Tony Stark nous donne une nouvelle suite à son histoire!'),
(35, 'Sinister', 16, 2, '2019-01-02', 'sinister.jpg', 1, 'C est l histoire d un fantome d une petite fille qui nous est morte dans sa maison durant un incendi', 'Sinister1622019/01/02sinister.jpg1C est l histoire d un fantome d une petite fille qui nous est morte dans sa maison durant un incendi');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`idcalendrier`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idfilm`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `idcalendrier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `idfilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
