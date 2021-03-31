-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 16:46
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(8) DEFAULT NULL,
  `article_name` varchar(10) DEFAULT NULL,
  `article_description` varchar(28) DEFAULT NULL,
  `article_color` varchar(10) DEFAULT NULL,
  `article_fabric` varchar(26) DEFAULT NULL,
  `article_price` varchar(5) DEFAULT NULL,
  `date_added` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `article_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `category_name`, `article_name`, `article_description`, `article_color`, `article_fabric`, `article_price`, `date_added`, `article_code`) VALUES
(1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', '2021-02-24 23:00:00.000000', 100000),
(2, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', '2021-02-24 23:00:00.000000', 100001),
(3, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', '2021-02-24 23:00:00.000000', 100002),
(4, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', '2021-02-24 23:00:00.000000', 100003),
(5, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', '2021-02-24 23:00:00.000000', 100004),
(6, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', '2021-02-24 23:00:00.000000', 100005),
(7, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', '2021-02-24 23:00:00.000000', 100008),
(8, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', '2021-02-24 23:00:00.000000', 100009),
(9, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', '2021-02-24 23:00:00.000000', 100010),
(10, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', '2021-02-24 23:00:00.000000', 100011),
(11, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', '2021-02-24 23:00:00.000000', 100012),
(12, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', '2021-02-24 23:00:00.000000', 100013),
(13, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', '2021-02-24 23:00:00.000000', 100020),
(14, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', '2021-02-24 23:00:00.000000', 100021),
(15, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', '2021-02-24 23:00:00.000000', 100022),
(16, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '2021-02-24 23:00:00.000000', 100040),
(17, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '2021-02-24 23:00:00.000000', 100041),
(18, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '2021-02-24 23:00:00.000000', 100042),
(19, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '2021-02-24 23:00:00.000000', 100043),
(20, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '2021-02-24 23:00:00.000000', 100044),
(21, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '2021-02-24 23:00:00.000000', 100045),
(22, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '2021-02-24 23:00:00.000000', 100046),
(23, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '2021-02-24 23:00:00.000000', 100047),
(24, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '2021-02-24 23:00:00.000000', 100048),
(41, 'polo', 'zed', 'test', 'test', 'test', '29.99', '2021-03-02 09:41:40.463474', 522000),
(40, 'polo', 'azeaz', 'azeaze', 'aze', 'azea', '89', '2021-03-01 07:43:08.570110', 878987),
(39, 'jeans', 'test', 'test', 'test', 'test', '96', '2021-02-25 15:47:34.523190', 111111),
(37, 'jeans', 'jean', 'jean', 'jean', 'jean', '89', '2021-02-25 15:43:29.291885', 874633),
(38, 'polo', 'jean', 'jean', 'jean', 'zed', '87', '2021-02-25 15:45:39.492961', 555555),
(44, 'tshirt', 'test', 'test', 'rouge', 'coton', '19.99', '2021-03-31 11:59:58.437439', 999999);

-- --------------------------------------------------------

--
-- Structure de la table `article_sale`
--

DROP TABLE IF EXISTS `article_sale`;
CREATE TABLE IF NOT EXISTS `article_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `promo_percent` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_sale`
--

INSERT INTO `article_sale` (`id`, `article_id`, `promo_percent`, `start_date`, `end_date`) VALUES
(1, 1, 50, '2021-03-23 13:12:52', '2021-03-31 13:12:52'),
(2, 3, 20, '2021-03-11 14:06:33', '2021-03-30 14:06:33'),
(3, 6, 15, '2021-03-23 14:06:33', '2021-03-26 14:06:33');

-- --------------------------------------------------------

--
-- Structure de la table `article_stock`
--

DROP TABLE IF EXISTS `article_stock`;
CREATE TABLE IF NOT EXISTS `article_stock` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `article_id` int(2) DEFAULT NULL,
  `article_name` varchar(10) DEFAULT NULL,
  `article_price` varchar(5) DEFAULT NULL,
  `article_size` varchar(3) DEFAULT NULL,
  `stock` int(2) DEFAULT NULL,
  `article_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_stock`
--

INSERT INTO `article_stock` (`id`, `article_id`, `article_name`, `article_price`, `article_size`, `stock`, `article_code`) VALUES
(1, 1, 'Polo 1', '19,99', 'S', 90, 100000),
(2, 1, 'Polo 1', '19,99', 'M', 83, 100000),
(3, 1, 'Polo 1', '19,99', 'L', 98, 100000),
(4, 1, 'Polo 1', '19,99', 'XL', 99, 100000),
(5, 1, 'Polo 1', '19,99', 'XXL', 100, 100000),
(6, 2, 'Polo 2', '24,99', 'S', 10, 100001),
(7, 2, 'Polo 2', '24,99', 'M', 24, 100001),
(8, 2, 'Polo 2', '24,99', 'L', 25, 100001),
(9, 2, 'Polo 2', '24,99', 'XL', 15, 100001),
(10, 2, 'Polo 2', '24,99', 'XXL', 10, 100001),
(11, 3, 'Polo 3', '14,99', 'S', 10, 100002),
(12, 3, 'Polo 3', '14,99', 'M', 24, 100002),
(13, 3, 'Polo 3', '14,99', 'L', 24, 100002),
(14, 3, 'Polo 3', '14,99', 'XL', 14, 100002),
(15, 3, 'Polo 3', '14,99', 'XXL', 10, 100002),
(16, 4, 'Polo 4', '24,99', 'S', 10, 100003),
(17, 4, 'Polo 4', '24,99', 'M', 25, 100003),
(18, 4, 'Polo 4', '24,99', 'L', 25, 100003),
(19, 4, 'Polo 4', '24,99', 'XL', 15, 100003),
(20, 4, 'Polo 4', '24,99', 'XXL', 10, 100003),
(21, 5, 'Polo 5', '19,99', 'S', 10, 100004),
(22, 5, 'Polo 5', '19,99', 'M', 25, 100004),
(23, 5, 'Polo 5', '19,99', 'L', 25, 100004),
(24, 5, 'Polo 5', '19,99', 'XL', 15, 100004),
(25, 5, 'Polo 5', '19,99', 'XXL', 10, 100004),
(26, 6, 'Polo 6', '16,99', 'S', 10, 100005),
(27, 6, 'Polo 6', '16,99', 'M', 24, 100005),
(28, 6, 'Polo 6', '16,99', 'L', 25, 100005),
(29, 6, 'Polo 6', '16,99', 'XL', 15, 100005),
(30, 6, 'Polo 6', '16,99', 'XXL', 10, 100005),
(31, 7, 'T-shirt 1', '14,99', 'S', 20, 100008),
(32, 7, 'T-shirt 1', '14,99', 'M', 35, 100008),
(33, 7, 'T-shirt 1', '14,99', 'L', 35, 100008),
(34, 7, 'T-shirt 1', '14,99', 'XL', 20, 100008),
(35, 7, 'T-shirt 1', '14,99', 'XXL', 10, 100008),
(36, 8, 'T-shirt 2', '11,99', 'S', 15, 100009),
(37, 8, 'T-shirt 2', '11,99', 'M', 25, 100009),
(38, 8, 'T-shirt 2', '11,99', 'L', 20, 100009),
(39, 8, 'T-shirt 2', '11,99', 'XL', 15, 100009),
(40, 8, 'T-shirt 2', '11,99', 'XXL', 10, 100009),
(41, 9, 'T-shirt 3', '25,99', 'S', 20, 100010),
(42, 9, 'T-shirt 3', '25,99', 'M', 35, 100010),
(43, 9, 'T-shirt 3', '25,99', 'L', 35, 100010),
(44, 9, 'T-shirt 3', '25,99', 'XL', 20, 100010),
(45, 9, 'T-shirt 3', '25,99', 'XXL', 10, 100010),
(46, 10, 'T-shirt 4', '9,99', 'S', 20, 100011),
(47, 10, 'T-shirt 4', '9,99', 'M', 35, 100011),
(48, 10, 'T-shirt 4', '9,99', 'L', 35, 100011),
(49, 10, 'T-shirt 4', '9,99', 'XL', 20, 100011),
(50, 10, 'T-shirt 4', '9,99', 'XXL', 10, 100011),
(51, 11, 'T-shirt 5', '13,99', 'S', 20, 100012),
(52, 11, 'T-shirt 5', '13,99', 'M', 35, 100012),
(53, 11, 'T-shirt 5', '13,99', 'L', 35, 100012),
(54, 11, 'T-shirt 5', '13,99', 'XL', 20, 100012),
(55, 11, 'T-shirt 5', '13,99', 'XXL', 10, 100012),
(56, 12, 'T-shirt 6', '11,99', 'S', 10, 100013),
(57, 12, 'T-shirt 6', '11,99', 'M', 20, 100013),
(58, 12, 'T-shirt 6', '11,99', 'L', 20, 100013),
(59, 12, 'T-shirt 6', '11,99', 'XL', 15, 100013),
(60, 12, 'T-shirt 6', '11,99', 'XXL', 10, 100013),
(61, 13, 'Chemise 1', '19,99', 'S', 20, 100020),
(62, 13, 'Chemise 1', '19,99', 'M', 30, 100020),
(63, 13, 'Chemise 1', '19,99', 'L', 30, 100020),
(64, 13, 'Chemise 1', '19,99', 'XL', 20, 100020),
(65, 13, 'Chemise 1', '19,99', 'XXL', 10, 100020),
(66, 14, 'Chemise 2', '19,99', 'S', 7, 100021),
(67, 14, 'Chemise 2', '19,99', 'M', 15, 100021),
(68, 14, 'Chemise 2', '19,99', 'L', 14, 100021),
(69, 14, 'Chemise 2', '19,99', 'XL', 10, 100021),
(70, 14, 'Chemise 2', '19,99', 'XXL', 7, 100021),
(71, 15, 'Chemise 3', '19,99', 'S', 6, 100022),
(72, 15, 'Chemise 3', '19,99', 'M', 15, 100022),
(73, 15, 'Chemise 3', '19,99', 'L', 8, 100022),
(74, 15, 'Chemise 3', '19,99', 'XL', 10, 100022),
(75, 15, 'Chemise 3', '19,99', 'XXL', 7, 100022),
(76, 16, 'Pantalon 1', '24,99', '36', 25, 100040),
(77, 16, 'Pantalon 1', '24,99', '38', 40, 100040),
(78, 16, 'Pantalon 1', '24,99', '40', 40, 100040),
(79, 16, 'Pantalon 1', '24,99', '42', 39, 100040),
(80, 16, 'Pantalon 1', '24,99', '44', 30, 100040),
(81, 16, 'Pantalon 1', '24,99', '46', 20, 100040),
(82, 17, 'Pantalon 2', '22,99', '36', 20, 100041),
(83, 17, 'Pantalon 2', '22,99', '38', 30, 100041),
(84, 17, 'Pantalon 2', '22,99', '40', 30, 100041),
(85, 17, 'Pantalon 2', '22,99', '42', 29, 100041),
(86, 17, 'Pantalon 2', '22,99', '44', 20, 100041),
(87, 17, 'Pantalon 2', '22,99', '46', 9, 100041),
(88, 18, 'Pantalon 3', '24,99', '36', 100, 100042),
(89, 18, 'Pantalon 3', '24,99', '38', 100, 100042),
(90, 18, 'Pantalon 3', '24,99', '40', 100, 100042),
(91, 18, 'Pantalon 3', '24,99', '42', 100, 100042),
(92, 18, 'Pantalon 3', '24,99', '44', 100, 100042),
(93, 18, 'Pantalon 3', '24,99', '46', 100, 100042),
(94, 19, 'Jeans 1', '39,99', '36', 24, 100043),
(95, 19, 'Jeans 1', '39,99', '38', 30, 100043),
(96, 19, 'Jeans 1', '39,99', '40', 40, 100043),
(97, 19, 'Jeans 1', '39,99', '42', 40, 100043),
(98, 19, 'Jeans 1', '39,99', '44', 30, 100043),
(99, 19, 'Jeans 1', '39,99', '46', 20, 100043),
(100, 20, 'Jeans 2', '39,99', '36', 25, 100044),
(101, 20, 'Jeans 2', '39,99', '38', 29, 100044),
(102, 20, 'Jeans 2', '39,99', '40', 40, 100044),
(103, 20, 'Jeans 2', '39,99', '42', 39, 100044),
(104, 20, 'Jeans 2', '39,99', '44', 30, 100044),
(105, 20, 'Jeans 2', '39,99', '46', 19, 100044),
(106, 21, 'Jeans 3', '39,99', '36', 21, 100045),
(107, 21, 'Jeans 3', '39,99', '38', 30, 100045),
(108, 21, 'Jeans 3', '39,99', '40', 40, 100045),
(109, 21, 'Jeans 3', '39,99', '42', 39, 100045),
(110, 21, 'Jeans 3', '39,99', '44', 29, 100045),
(111, 21, 'Jeans 3', '39,99', '46', 20, 100045),
(112, 22, 'Short 1', '24,99', '36', 25, 100046),
(113, 22, 'Short 1', '24,99', '38', 25, 100046),
(114, 22, 'Short 1', '24,99', '40', 40, 100046),
(115, 22, 'Short 1', '24,99', '42', 40, 100046),
(116, 22, 'Short 1', '24,99', '44', 25, 100046),
(117, 22, 'Short 1', '24,99', '46', 15, 100046),
(118, 23, 'Short 2', '34,99', '36', 25, 100047),
(119, 23, 'Short 2', '34,99', '38', 25, 100047),
(120, 23, 'Short 2', '34,99', '40', 40, 100047),
(121, 23, 'Short 2', '34,99', '42', 40, 100047),
(122, 23, 'Short 2', '34,99', '44', 25, 100047),
(123, 23, 'Short 2', '34,99', '46', 15, 100047),
(124, 24, 'Short 3', '34,99', '36', 25, 100048),
(125, 24, 'Short 3', '34,99', '38', 25, 100048),
(126, 24, 'Short 3', '34,99', '40', 40, 100048),
(127, 24, 'Short 3', '34,99', '42', 40, 100048),
(128, 24, 'Short 3', '34,99', '44', 25, 100048),
(129, 24, 'Short 3', '34,99', '46', 15, 100048);

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `article_code` int(11) NOT NULL,
  `article_size` varchar(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`basket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_hierarchy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_hierarchy`) VALUES
(1, 'polo', 'haut'),
(2, 'tshirt', 'haut'),
(3, 'chemise', 'haut'),
(4, 'pantalon', 'bas'),
(5, 'jeans', 'bas'),
(6, 'short', 'bas'),
(12, 'xxxx', 'haut');

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `color_name`) VALUES
(1, 'blanc'),
(2, 'bleu'),
(3, 'gris'),
(4, 'rouge'),
(5, 'noir'),
(6, 'vert'),
(7, 'beige'),
(8, 'jaune'),
(9, 'prune'),
(10, 'kaki'),
(11, 'gris'),
(12, 'bleu clair');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `comment_mother_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `comment`, `comment_mother_id`) VALUES
(1, 1, 1, 'Génial ce produit', NULL),
(2, 1, 3, 'Trop confort!', NULL),
(3, 1, 6, 'bravo', NULL),
(4, 1, 6, 'Hello', NULL),
(5, 1, 6, 'Hello', NULL),
(6, 1, 10, 'Encore un commentaire', NULL),
(9, 1, 10, 'kefvjzernfzelrfglzert', NULL),
(8, 1, 10, 'test', NULL),
(10, 1, 10, 'test test', NULL),
(11, 12, 10, 'First !', NULL),
(12, NULL, 10, 'jerhgjerjk', NULL),
(13, NULL, 10, 'jerhgjerjk', NULL),
(14, 10, 10, 'erfer', NULL),
(15, 10, 10, 'jerfjker', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fabric`
--

DROP TABLE IF EXISTS `fabric`;
CREATE TABLE IF NOT EXISTS `fabric` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fabric_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fabric`
--

INSERT INTO `fabric` (`id`, `fabric_name`) VALUES
(1, 'coton'),
(2, 'coton/polyester'),
(3, 'coton/elasthane'),
(4, 'coton/polyesther/elasthane');

-- --------------------------------------------------------

--
-- Structure de la table `like_article`
--

DROP TABLE IF EXISTS `like_article`;
CREATE TABLE IF NOT EXISTS `like_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `like_article`
--

INSERT INTO `like_article` (`id`, `user_id`, `rating`, `comment`, `article_id`) VALUES
(1, 1, 2, NULL, 1),
(2, 2, 4, NULL, 1),
(3, 10, NULL, NULL, 100013),
(4, 10, NULL, NULL, 100013),
(5, 10, NULL, NULL, 12),
(6, 10, NULL, NULL, 19),
(7, 10, NULL, NULL, 10);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'preparation',
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `date`) VALUES
(1, 2, 'received', '2021-02-19 09:00:00'),
(2, 2, 'received', '2021-02-19 09:00:00'),
(3, 2, 'sent', '2021-02-18 09:00:00'),
(4, 4, 'sent', '2021-02-18 09:00:00'),
(5, 4, 'sent', '2021-02-18 09:00:00'),
(6, 4, 'sent', '2021-02-17 09:00:00'),
(7, 6, 'delivered', '2021-02-17 09:00:00'),
(8, 6, 'preparation', '2021-02-17 09:00:00'),
(9, 6, 'received', '2021-03-29 18:13:46'),
(10, 6, 'received', '2021-03-29 18:15:30'),
(11, 6, 'received', '2021-03-29 18:17:37'),
(12, 6, 'received', '2021-03-29 18:18:05'),
(13, 6, 'received', '2021-03-29 18:18:26'),
(14, 6, 'received', '2021-03-29 18:18:47'),
(15, 6, 'received', '2021-03-29 18:30:22'),
(16, 6, 'received', '2021-03-29 18:31:54'),
(17, 6, 'received', '2021-03-29 18:35:39'),
(27, 6, 'received', '2021-03-29 18:43:55'),
(26, 6, 'received', '2021-03-29 18:43:46'),
(25, 6, 'received', '2021-03-29 18:42:59'),
(24, 6, 'received', '2021-03-29 18:42:47'),
(23, 6, 'received', '2021-03-29 18:37:57'),
(28, 6, 'received', '2021-03-29 18:46:54'),
(29, 6, 'received', '2021-03-29 18:47:23'),
(30, 6, 'received', '2021-03-29 18:48:19'),
(31, 6, 'received', '2021-03-29 18:48:52'),
(32, 6, 'received', '2021-03-29 18:49:14'),
(33, 6, 'received', '2021-03-30 08:04:20'),
(34, 6, 'received', '2021-03-30 08:05:16'),
(35, 6, 'received', '2021-03-30 08:09:35'),
(36, 6, 'received', '2021-03-30 08:10:03'),
(37, 6, 'received', '2021-03-30 08:12:03'),
(38, 6, 'received', '2021-03-30 08:12:03'),
(39, 6, 'received', '2021-03-30 08:12:03'),
(40, 6, 'received', '2021-03-30 08:12:04'),
(41, 6, 'received', '2021-03-30 08:12:20'),
(42, 6, 'received', '2021-03-30 08:12:37'),
(43, 6, 'received', '2021-03-30 08:19:13'),
(65, 8, 'received', '2021-03-31 08:26:55'),
(64, 8, 'received', '2021-03-31 08:25:35'),
(63, 8, 'received', '2021-03-31 08:22:53'),
(62, 8, 'received', '2021-03-31 08:19:30'),
(61, 8, 'received', '2021-03-31 08:19:04'),
(60, 8, 'received', '2021-03-31 08:18:37'),
(59, 8, 'received', '2021-03-31 08:18:24'),
(58, 8, 'received', '2021-03-31 08:18:01'),
(57, 8, 'received', '2021-03-31 08:13:45'),
(56, 8, 'received', '2021-03-31 08:12:58'),
(55, 8, 'received', '2021-03-30 21:38:03'),
(66, 8, 'received', '2021-03-31 08:27:16'),
(67, 8, 'received', '2021-03-31 08:28:05'),
(68, 8, 'received', '2021-03-31 08:39:12'),
(69, 8, 'received', '2021-03-31 08:43:51'),
(70, 8, 'received', '2021-03-31 08:44:41'),
(71, 8, 'received', '2021-03-31 08:45:42'),
(72, 6, 'received', '2021-03-31 11:19:15'),
(73, 6, 'received', '2021-03-31 11:20:00'),
(74, 6, 'preparation', '2021-03-31 11:55:18'),
(75, 8, 'preparation', '2021-03-31 18:19:42'),
(76, 8, 'preparation', '2021-03-31 18:20:50'),
(77, 8, 'preparation', '2021-03-31 18:34:22'),
(78, 8, 'preparation', '2021-03-31 18:35:56'),
(79, 8, 'preparation', '2021-03-31 18:39:23'),
(80, 8, 'preparation', '2021-03-31 18:39:52'),
(81, 8, 'preparation', '2021-03-31 18:41:06'),
(82, 8, 'preparation', '2021-03-31 18:42:01'),
(83, 8, 'preparation', '2021-03-31 18:46:05');

-- --------------------------------------------------------

--
-- Structure de la table `orders_details`
--

DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE IF NOT EXISTS `orders_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `article_size` varchar(6) NOT NULL,
  `nb_pcs` int(11) DEFAULT NULL,
  `article_price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `article_id`, `article_size`, `nb_pcs`, `article_price`) VALUES
(2, 79, 20, '42', 1, '39,99'),
(3, 79, 21, '44', 1, '39,99'),
(4, 79, 20, '38', 1, '39,99'),
(5, 80, 8, 'L', 5, '11,99'),
(6, 81, 6, 'M', 1, '16,99'),
(7, 81, 3, 'XL', 1, '14,99'),
(8, 81, 3, 'L', 1, '14,99'),
(9, 81, 17, '42', 1, '22,99'),
(10, 81, 17, '46', 1, '22,99'),
(11, 81, 16, '42', 1, '24,99'),
(12, 82, 1, 'S', 10, '19,99'),
(13, 83, 15, 'S', 1, '19,99'),
(14, 83, 21, '42', 1, '39,99'),
(15, 83, 19, '36', 1, '39,99'),
(16, 83, 3, 'M', 1, '14,99'),
(17, 83, 1, 'L', 1, '19,99');

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `size_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `size`
--

INSERT INTO `size` (`id`, `category_name`, `size_name`) VALUES
(1, 'tshirt', 'S'),
(2, 'tshirt', 'M'),
(3, 'tshirt', 'L'),
(4, 'tshirt', 'XL'),
(5, 'tshirt', 'XXL'),
(6, 'polo', 'S'),
(7, 'polo', 'M'),
(8, 'polo', 'L'),
(9, 'polo', 'XL'),
(10, 'polo', 'XXL'),
(11, 'chemise', 'S'),
(12, 'chemise', 'M'),
(13, 'chemise', 'L'),
(14, 'chemise', 'XL'),
(15, 'chemise', 'XXL'),
(16, 'Short chino', '36'),
(17, 'Short chino', '38'),
(18, 'Short chino', '40'),
(19, 'Short chino', '42'),
(20, 'Short chino', '44'),
(21, 'Short chino', '46'),
(22, 'Short en jean', '36'),
(23, 'Short en jean', '38'),
(24, 'Short en jean', '40'),
(25, 'Short en jean', '42'),
(26, 'Short en jean', '44'),
(27, 'Short en jean', '46'),
(28, 'Short cargo avec ceinture', '36'),
(29, 'Short cargo avec ceinture', '38'),
(30, 'Short cargo avec ceinture', '40'),
(31, 'Short cargo avec ceinture', '42'),
(32, 'Short cargo avec ceinture', '44'),
(33, 'Short cargo avec ceinture', '46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `top_size` text NOT NULL,
  `bottom_size` int(2) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_connexion` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_confirm` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `prenom`, `nom`, `email`, `password`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm`, `admin`) VALUES
(1, 'aaaa', 'aaaa', 'aaaa', 'aaa@aaaa.com', 'aaab', 'aaaa', 11111, 'aaaa', 'm', '', 0, '2021-02-11 15:01:56', '2021-02-11 15:01:56', NULL, 0),
(3, 'bbbb', 'bbbb', 'bbbb', 'bbbb@bbbb.com', 'bbbb', 'bbbb', 13000, 'bbbb', 'Mr', 'XS', 36, '2021-02-15 13:59:15', '2021-02-15 13:59:15', NULL, 0),
(6, 'cccc', 'cccc', 'cccc', 'cccc@cccc.com', '$2y$10$JNZrdTEftozC/FS170mQzuhcYlUBG7U9kvPvpx.0qaLj3G9GKb8wK', 'cccc', 13000, 'Lille', 'Mr', 'XS', 36, '2021-02-15 14:10:37', '2021-03-31 15:25:51', NULL, 1),
(7, 'dddd', 'dddd', 'dddd', 'dddd@dddd.com', 'ddde', 'dddd', 1000, 'dddd', 'Mr', 'XS', 36, '2021-02-16 10:09:05', '2021-02-16 10:09:05', NULL, 0),
(8, 'eeee', 'eeee', 'eeee', 'eeee@eeee.com', '$2y$10$WxygsWvgV.7jzQF/xeaQj.F10VsSDdtiuiJNvf.UEPZzFfRoNwwy2', 'test', 1000, 'Lille', 'Mr', 'XS', 36, '2021-02-16 11:26:40', '2021-03-31 18:45:40', NULL, 0),
(9, 'zzzz', 'zzzz', 'zzzz', 'zzzz@zzzz.com', '$2y$10$txZttcNre.VujzHt9ypzau73MHHe8b0zL7VwUfyH35MQKGh.32EmK', 'zzzz', 1000, 'zzzz', 'Mr', 'XS', 36, '2021-02-19 09:03:15', '2021-02-24 18:23:16', NULL, 0),
(10, 'yyyy', 'yyyy', 'yyyy', 'yyyy@yyyy.com', '$2y$10$WTQlAyCE1IuuJPX2YzYLYecRNbVJNbk7vK3jxV1ny7UYB3C21zdk6', 'yyyy', 13009, 'yyyy', 'Mr', 'XS', 36, '2021-03-31 14:57:20', '2021-03-31 14:57:20', NULL, 0),
(11, 'tttt', 'tttt', 'tttt', 'tttt@ttt', '$2y$10$C4eRsTDO5ibLcWR5KqlrROdAfZpo/sqA4lMdRGxW9qQWQ.8s7ScBu', 'ttt', 1309, 'ttt', 'Mr', 'S', 36, '2021-03-31 15:03:42', '2021-03-31 15:03:42', NULL, 0),
(15, 'gggg', 'gggg', 'gggg', 'gggg@ggg.gog', '$2y$10$QNApXAiA6XtzctqOX.omhuzQviqdfgZNN5ON0yY7wR8V57yLVEpl.', 'gggg', 13009, 'gggg', 'Mr', 'XS', 36, '2021-03-31 15:17:49', '2021-03-31 15:17:49', NULL, 0),
(17, 'nnnn', 'nnnn', 'nnnn', 'nnnn@nnnn.com', '$2y$10$ShAEKl4HjcorDZ/SDeGpSukyuu11m0F/MZJlPawhxZKy3McaTcTOi', 'nnnn', 13000, 'nnnn', 'Mr', 'XS', 38, '2021-03-31 15:34:33', '2021-03-31 15:34:40', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_follow`
--

DROP TABLE IF EXISTS `users_follow`;
CREATE TABLE IF NOT EXISTS `users_follow` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_id_follow` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
