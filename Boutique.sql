-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 31 mars 2021 à 18:33
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `articles` (
  `id` int(2) NOT NULL,
  `category_name` varchar(8) DEFAULT NULL,
  `article_name` varchar(10) DEFAULT NULL,
  `article_description` text,
  `article_color` varchar(10) DEFAULT NULL,
  `article_fabric` varchar(26) DEFAULT NULL,
  `article_price` varchar(5) DEFAULT NULL,
  `date_added` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `article_code` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `category_name`, `article_name`, `article_description`, `article_color`, `article_fabric`, `article_price`, `date_added`, `article_code`) VALUES
(1, 'polo', 'Polo 1', 'Polo MC. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blanc', 'coton', '19,99', '2021-03-29 22:00:00.000000', 100000),
(2, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', '2021-03-29 22:00:00.000000', 100001),
(3, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', '2021-03-29 22:00:00.000000', 100002),
(4, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', '2021-02-24 23:00:00.000000', 100003),
(5, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', '2021-02-24 23:00:00.000000', 100004),
(6, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', '2021-03-28 22:00:00.000000', 100005),
(7, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', '2021-02-24 23:00:00.000000', 100008),
(8, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', '2021-02-24 23:00:00.000000', 100009),
(9, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', '2021-03-29 22:00:00.000000', 100010),
(10, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', '2021-03-29 22:00:00.000000', 100011),
(11, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', '2021-02-24 23:00:00.000000', 100012),
(12, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', '2021-03-29 22:00:00.000000', 100013),
(13, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', '2021-02-24 23:00:00.000000', 100020),
(14, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', '2021-03-29 22:00:00.000000', 100021),
(15, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', '2021-03-29 22:00:00.000000', 100022),
(16, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '2021-02-24 23:00:00.000000', 100040),
(17, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '2021-03-29 22:00:00.000000', 100041),
(18, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '2021-03-29 22:00:00.000000', 100042),
(19, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '2021-03-29 22:00:00.000000', 100043),
(20, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '2021-02-24 23:00:00.000000', 100044),
(21, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '2021-02-24 23:00:00.000000', 100045),
(22, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '2021-03-29 22:00:00.000000', 100046),
(23, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '2021-03-29 22:00:00.000000', 100047),
(24, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '2021-03-29 22:00:00.000000', 100048),
(41, 'polo', 'zed', 'test', 'test', 'test', '29.99', '2021-03-02 09:41:40.463474', 522000),
(40, 'polo', 'azeaz', 'azeaze', 'aze', 'azea', '89', '2021-03-29 22:00:00.000000', 878987),
(39, 'jeans', 'test', 'test', 'test', 'test', '96', '2021-03-29 22:00:00.000000', 111111),
(37, 'jeans', 'jean', 'jean', 'jean', 'jean', '89', '2021-02-25 15:43:29.291885', 874633),
(38, 'polo', 'jean', 'jean', 'jean', 'zed', '87', '2021-02-25 15:45:39.492961', 555555);

-- --------------------------------------------------------

--
-- Structure de la table `article_sale`
--

CREATE TABLE `article_sale` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `promo_percent` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `article_stock` (
  `id` int(3) NOT NULL,
  `article_id` int(2) DEFAULT NULL,
  `article_name` varchar(10) DEFAULT NULL,
  `article_price` varchar(5) DEFAULT NULL,
  `article_size` varchar(3) DEFAULT NULL,
  `stock` int(2) DEFAULT NULL,
  `article_code` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_stock`
--

INSERT INTO `article_stock` (`id`, `article_id`, `article_name`, `article_price`, `article_size`, `stock`, `article_code`) VALUES
(1, 1, 'Polo 1', '19,99', 'S', 100, 100000),
(2, 1, 'Polo 1', '19,99', 'M', 100, 100001),
(3, 1, 'Polo 1', '19,99', 'L', 100, 100002),
(4, 1, 'Polo 1', '19,99', 'XL', 100, 100003),
(5, 1, 'Polo 1', '19,99', 'XXL', 100, 100004),
(6, 2, 'Polo 2', '24,99', 'S', 10, 100005),
(7, 2, 'Polo 2', '24,99', 'M', 25, 100006),
(8, 2, 'Polo 2', '24,99', 'L', 25, 100007),
(9, 2, 'Polo 2', '24,99', 'XL', 15, 100008),
(10, 2, 'Polo 2', '24,99', 'XXL', 10, 100009),
(11, 3, 'Polo 3', '14,99', 'S', 10, 100010),
(12, 3, 'Polo 3', '14,99', 'M', 25, 100011),
(13, 3, 'Polo 3', '14,99', 'L', 25, 100012),
(14, 3, 'Polo 3', '14,99', 'XL', 15, 100013),
(15, 3, 'Polo 3', '14,99', 'XXL', 10, 100014),
(16, 4, 'Polo 4', '24,99', 'S', 10, 100015),
(17, 4, 'Polo 4', '24,99', 'M', 25, 100016),
(18, 4, 'Polo 4', '24,99', 'L', 25, 100017),
(19, 4, 'Polo 4', '24,99', 'XL', 15, 100018),
(20, 4, 'Polo 4', '24,99', 'XXL', 10, 100019),
(21, 5, 'Polo 5', '19,99', 'S', 10, 100020),
(22, 5, 'Polo 5', '19,99', 'M', 25, 100021),
(23, 5, 'Polo 5', '19,99', 'L', 25, 100022),
(24, 5, 'Polo 5', '19,99', 'XL', 15, 100023),
(25, 5, 'Polo 5', '19,99', 'XXL', 10, 100024),
(26, 6, 'Polo 6', '16,99', 'S', 10, 100025),
(27, 6, 'Polo 6', '16,99', 'M', 25, 100026),
(28, 6, 'Polo 6', '16,99', 'L', 25, 100027),
(29, 6, 'Polo 6', '16,99', 'XL', 15, 100028),
(30, 6, 'Polo 6', '16,99', 'XXL', 10, 100029),
(31, 7, 'T-shirt 1', '14,99', 'S', 20, 100008),
(32, 7, 'T-shirt 1', '14,99', 'M', 35, 100008),
(33, 7, 'T-shirt 1', '14,99', 'L', 35, 100008),
(34, 7, 'T-shirt 1', '14,99', 'XL', 20, 100008),
(35, 7, 'T-shirt 1', '14,99', 'XXL', 10, 100008),
(36, 8, 'T-shirt 2', '11,99', 'S', 15, 100009),
(37, 8, 'T-shirt 2', '11,99', 'M', 25, 100009),
(38, 8, 'T-shirt 2', '11,99', 'L', 25, 100009),
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
(68, 14, 'Chemise 2', '19,99', 'L', 15, 100021),
(69, 14, 'Chemise 2', '19,99', 'XL', 10, 100021),
(70, 14, 'Chemise 2', '19,99', 'XXL', 7, 100021),
(71, 15, 'Chemise 3', '19,99', 'S', 7, 100022),
(72, 15, 'Chemise 3', '19,99', 'M', 15, 100022),
(73, 15, 'Chemise 3', '19,99', 'L', 15, 100022),
(74, 15, 'Chemise 3', '19,99', 'XL', 10, 100022),
(75, 15, 'Chemise 3', '19,99', 'XXL', 7, 100022),
(76, 16, 'Pantalon 1', '24,99', '36', 25, 100040),
(77, 16, 'Pantalon 1', '24,99', '38', 40, 100040),
(78, 16, 'Pantalon 1', '24,99', '40', 40, 100040),
(79, 16, 'Pantalon 1', '24,99', '42', 40, 100040),
(80, 16, 'Pantalon 1', '24,99', '44', 30, 100040),
(81, 16, 'Pantalon 1', '24,99', '46', 20, 100040),
(82, 17, 'Pantalon 2', '22,99', '36', 20, 100041),
(83, 17, 'Pantalon 2', '22,99', '38', 30, 100041),
(84, 17, 'Pantalon 2', '22,99', '40', 30, 100041),
(85, 17, 'Pantalon 2', '22,99', '42', 30, 100041),
(86, 17, 'Pantalon 2', '22,99', '44', 20, 100041),
(87, 17, 'Pantalon 2', '22,99', '46', 10, 100041),
(88, 18, 'Pantalon 3', '24,99', '36', 100, 100042),
(89, 18, 'Pantalon 3', '24,99', '38', 100, 100042),
(90, 18, 'Pantalon 3', '24,99', '40', 100, 100042),
(91, 18, 'Pantalon 3', '24,99', '42', 100, 100042),
(92, 18, 'Pantalon 3', '24,99', '44', 100, 100042),
(93, 18, 'Pantalon 3', '24,99', '46', 100, 100042),
(94, 19, 'Jeans 1', '39,99', '36', 25, 100043),
(95, 19, 'Jeans 1', '39,99', '38', 30, 100043),
(96, 19, 'Jeans 1', '39,99', '40', 40, 100043),
(97, 19, 'Jeans 1', '39,99', '42', 40, 100043),
(98, 19, 'Jeans 1', '39,99', '44', 30, 100043),
(99, 19, 'Jeans 1', '39,99', '46', 20, 100043),
(100, 20, 'Jeans 2', '39,99', '36', 25, 100044),
(101, 20, 'Jeans 2', '39,99', '38', 30, 100044),
(102, 20, 'Jeans 2', '39,99', '40', 40, 100044),
(103, 20, 'Jeans 2', '39,99', '42', 40, 100044),
(104, 20, 'Jeans 2', '39,99', '44', 30, 100044),
(105, 20, 'Jeans 2', '39,99', '46', 20, 100044),
(106, 21, 'Jeans 3', '39,99', '36', 25, 100045),
(107, 21, 'Jeans 3', '39,99', '38', 30, 100045),
(108, 21, 'Jeans 3', '39,99', '40', 40, 100045),
(109, 21, 'Jeans 3', '39,99', '42', 40, 100045),
(110, 21, 'Jeans 3', '39,99', '44', 30, 100045),
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
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_hierarchy` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_hierarchy`) VALUES
(1, 'polo', 'haut'),
(2, 'tshirt', 'haut'),
(3, 'chemise', 'haut'),
(4, 'pantalon', 'bas'),
(5, 'jeans', 'bas'),
(6, 'short', 'bas');

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `hex` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `color_name`, `hex`) VALUES
(1, 'blanc', 'FFFFFF'),
(2, 'bleu', '2F51AD'),
(3, 'gris', '888888'),
(4, 'rouge', 'CF1313'),
(5, 'noir', '000000'),
(6, 'vert', '2A7830'),
(7, 'beige', 'F6F3DA'),
(8, 'jaune', 'EEDB3F'),
(9, 'prune', '825597'),
(10, 'kaki', '4D624A'),
(12, 'bleu clair', '1AA2B2');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `comment_mother_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `comment`, `comment_mother_id`) VALUES
(1, 1, 1, 'Génial ce produit', NULL),
(2, 1, 3, 'Trop confort!', NULL),
(3, 1, 6, 'bravo', NULL),
(4, 1, 6, 'Hello', NULL),
(5, 1, 6, 'Hello', NULL),
(11, 12, 10, 'First !', NULL),
(12, NULL, 10, 'jerhgjerjk', NULL),
(13, NULL, 10, 'jerhgjerjk', NULL),
(14, 10, 10, 'erfer', NULL),
(15, 10, 10, 'jerfjker', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fabric`
--

CREATE TABLE `fabric` (
  `id` int(11) NOT NULL,
  `fabric_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `like_article` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(7, 10, NULL, NULL, 10),
(83, 10, NULL, NULL, 1),
(72, 10, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(8, 6, 'preparation', '2021-02-17 09:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `nb_pcs` int(11) DEFAULT NULL,
  `article_price` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `article_id`, `nb_pcs`, `article_price`) VALUES
(1, 1, 100036, 1, '11,99'),
(2, 1, 100059, 1, '11,99'),
(3, 1, 100077, 1, '24,99'),
(4, 2, 100092, 1, '39,99'),
(5, 2, 100100, 2, '39,99'),
(6, 2, 100107, 1, '39,99'),
(7, 3, 100006, 1, '24,99'),
(8, 4, 100024, 1, '19,99'),
(9, 4, 100057, 1, '11,99'),
(10, 5, 100073, 2, '19,99'),
(11, 6, 100096, 1, '39,99'),
(12, 6, 100126, 2, '34,99'),
(13, 7, 100036, 1, '11,99'),
(14, 7, 100059, 1, '11,99'),
(15, 8, 100077, 1, '24,99'),
(16, 9, 100000, 3, '20');

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `size_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `prenom`, `nom`, `email`, `password`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm`, `admin`) VALUES
(1, 'aaaa', 'aaaa', 'aaaa', 'aaa@aaaa.com', 'aaab', 'aaaa', 11111, 'aaaa', 'm', '', 0, '2021-02-11 15:01:56', '2021-02-11 15:01:56', NULL, 0),
(3, 'bbbb', 'bbbb', 'bbbb', 'bbbb@bbbb.com', 'bbbb', 'bbbb', 13000, 'bbbb', 'Mr', 'XS', 36, '2021-02-15 13:59:15', '2021-02-15 13:59:15', NULL, 0),
(6, 'cccc', 'cccc', 'cccc', 'cccc@cccc.com', '$2y$10$JNZrdTEftozC/FS170mQzuhcYlUBG7U9kvPvpx.0qaLj3G9GKb8wK', 'cccc', 13000, 'cccc', 'Mr', 'XS', 36, '2021-02-15 14:10:37', '2021-03-03 10:05:35', NULL, 0),
(7, 'dddd', 'dddd', 'dddd', 'dddd@dddd.com', 'ddde', 'dddd', 1000, 'dddd', 'Mr', 'XS', 36, '2021-02-16 10:09:05', '2021-02-16 10:09:05', NULL, 0),
(8, 'eeee', 'eeee', 'eeee', 'eeee@eeee.com', '$2y$10$WxygsWvgV.7jzQF/xeaQj.F10VsSDdtiuiJNvf.UEPZzFfRoNwwy2', 'eeee', 1000, 'eeee', 'Mr', 'XS', 36, '2021-02-16 11:26:40', '2021-02-16 11:26:40', NULL, 0),
(9, 'zzzz', 'zzzz', 'zzzz', 'zzzz@zzzz.com', '$2y$10$txZttcNre.VujzHt9ypzau73MHHe8b0zL7VwUfyH35MQKGh.32EmK', 'zzzz', 1000, 'zzzz', 'Mr', 'XS', 36, '2021-02-19 09:03:15', '2021-02-24 18:23:16', NULL, 1),
(10, 'peter', 'pit', 'herve', 'peterherve88@gmzil.com', '$2y$10$SS7UtU6EOcrKJFLCdOmhaOaZMv33OMij8AwsAsjJWL3Xe/YZODuq2', '48', 12334, 'Marseille', 'Mr', 'S', 38, '2021-03-03 09:11:12', '2021-03-31 15:47:42', NULL, 1),
(17, 'yoyo', 'yoyo', 'kjbnkjnjk', 'oefhbrf@gmail.com', '$2y$10$fGQMzDCE1ZumpBXY6xQet.4PkcoqNzZBz9TI40zgQOStH1CLOa796', 'kjhvbjn', 76567, 'ljkhbjknk,', 'Mr', 'M', 40, '2021-03-31 15:25:34', '2021-03-31 15:29:55', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_follow`
--

CREATE TABLE `users_follow` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_id_follow` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_sale`
--
ALTER TABLE `article_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Index pour la table `article_stock`
--
ALTER TABLE `article_stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `like_article`
--
ALTER TABLE `like_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `article_sale`
--
ALTER TABLE `article_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article_stock`
--
ALTER TABLE `article_stock`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `like_article`
--
ALTER TABLE `like_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
