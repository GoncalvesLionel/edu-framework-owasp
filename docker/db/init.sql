
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
