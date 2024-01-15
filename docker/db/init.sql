
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_db`
--
DROP DATABASE IF EXISTS `app_db`;
CREATE DATABASE IF NOT EXISTS `app_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `app_db`;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment`
(
    `id`   int(11)      NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `body` longtext     NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB
    AUTO_INCREMENT = 4
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `name`, `body`)
VALUES (1, 'Limmy Lesbieraufrai', 'Le premier commentaire'),
       (2, 'Evy Damant', 'Ceci est un deuxieme contenu de commentaire');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket`
(
    `id`   int(11)      NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `message` longtext     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 5
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `ticket` (`id`, `email`, `message`)
VALUES (1, 'michel@company.dev', 'Je n\' arrive pas à sauvegarder mon fichier Word'),
       (2, 'sandrine@company.dev', 'Impossible de contacter le serveur de fichier'),
       (3, 'martine@company.dev', 'L\'imrpimante ne fonctionne plus'),
       (4, 'david@company.dev', 'Mon ordinateur ne démarre plus')
;
-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user`
(
    `id`   int(11)      NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(60)  NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `user` (`id`, `username`, `password`)
VALUES (1,'admin','pass123' ),
       (2, 'alice','123456'),
       (3, 'bob','buildit'),
       (4, 'charlie','chaplin123'),
       (5, 'dan','dawn2024'),
       (6, 'elie','password'),
       (7, 'flora','rose21'),
       (8, 'gerard','golfgame'),
       (9, 'harry','potter'),
       (10, 'indiana','jones')
       ;
