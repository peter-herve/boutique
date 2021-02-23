-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 fév. 2021 à 11:24
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(1) DEFAULT NULL,
  `category_name` varchar(8) DEFAULT NULL,
  `article_name` varchar(10) DEFAULT NULL,
  `article_description` varchar(28) DEFAULT NULL,
  `article_color` varchar(10) DEFAULT NULL,
  `article_fabric` varchar(26) DEFAULT NULL,
  `article_price` varchar(5) DEFAULT NULL,
  `article_size` varchar(3) DEFAULT NULL,
  `article_stock` int(2) DEFAULT NULL,
  `date_added` date NOT NULL,
  `article_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `category_name`, `article_name`, `article_description`, `article_color`, `article_fabric`, `article_price`, `article_size`, `article_stock`, `date_added`, `article_code`) VALUES
(1, 1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', 'S', 10, '2021-02-19', 100000),
(2, 1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', 'M', 25, '2021-02-19', 100001),
(3, 1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', 'L', 25, '2021-02-19', 100002),
(4, 1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', 'XL', 15, '2021-02-19', 100003),
(5, 1, 'polo', 'Polo 1', 'Polo MC', 'blanc', 'coton', '19,99', 'XXL', 10, '2021-02-19', 100004),
(6, 1, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', 'S', 10, '2021-02-19', 100005),
(7, 1, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', 'M', 25, '2021-02-19', 100006),
(8, 1, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', 'L', 25, '2021-02-19', 100007),
(9, 1, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', 'XL', 15, '2021-02-19', 100008),
(10, 1, 'polo', 'Polo 2', 'Polo MC motif exotique', 'bleu', 'coton/polyester', '24,99', 'XXL', 10, '2021-02-19', 100009),
(11, 1, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', 'S', 10, '2021-02-19', 100010),
(12, 1, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', 'M', 25, '2021-02-19', 100011),
(13, 1, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', 'L', 25, '2021-02-19', 100012),
(14, 1, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', 'XL', 15, '2021-02-19', 100013),
(15, 1, 'polo', 'Polo 3', 'Polo coupe droite', 'gris', 'coton', '14,99', 'XXL', 10, '2021-02-19', 100014),
(16, 1, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', 'S', 10, '2021-02-19', 100015),
(17, 1, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', 'M', 25, '2021-02-19', 100016),
(18, 1, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', 'L', 25, '2021-02-19', 100017),
(19, 1, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', 'XL', 15, '2021-02-19', 100018),
(20, 1, 'polo', 'Polo 4', 'Polo casual ML', 'rouge', 'coton', '24,99', 'XXL', 10, '2021-02-19', 100019),
(21, 1, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', 'S', 10, '2021-02-19', 100020),
(22, 1, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', 'M', 25, '2021-02-19', 100021),
(23, 1, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', 'L', 25, '2021-02-19', 100022),
(24, 1, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', 'XL', 15, '2021-02-19', 100023),
(25, 1, 'polo', 'Polo 5', 'Polo col officier', 'bleu', 'coton', '19,99', 'XXL', 10, '2021-02-19', 100024),
(26, 1, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', 'S', 10, '2021-02-19', 100025),
(27, 1, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', 'M', 25, '2021-02-19', 100026),
(28, 1, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', 'L', 25, '2021-02-19', 100027),
(29, 1, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', 'XL', 15, '2021-02-19', 100028),
(30, 1, 'polo', 'Polo 6', 'Polo ML', 'noir', 'coton', '16,99', 'XXL', 10, '2021-02-19', 100029),
(31, 2, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', 'S', 20, '2021-02-19', 100030),
(32, 2, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', 'M', 35, '2021-02-19', 100031),
(33, 2, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', 'L', 35, '2021-02-19', 100032),
(34, 2, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', 'XL', 20, '2021-02-19', 100033),
(35, 2, 'tshirt', 'T-shirt 1', 'T-shirt premium en coton bio', 'blanc', 'coton', '14,99', 'XXL', 10, '2021-02-19', 100034),
(36, 2, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', 'S', 15, '2021-02-19', 100035),
(37, 2, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', 'M', 25, '2021-02-19', 100036),
(38, 2, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', 'L', 25, '2021-02-19', 100037),
(39, 2, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', 'XL', 15, '2021-02-19', 100038),
(40, 2, 'tshirt', 'T-shirt 2', 'T-shirt col rond', 'vert', 'coton', '11,99', 'XXL', 10, '2021-02-19', 100039),
(41, 2, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', 'S', 20, '2021-02-19', 100040),
(42, 2, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', 'M', 35, '2021-02-19', 100041),
(43, 2, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', 'L', 35, '2021-02-19', 100042),
(44, 2, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', 'XL', 20, '2021-02-19', 100043),
(45, 2, 'tshirt', 'T-shirt 3', 'T-shirt relief ML', 'beige', 'coton/polyester', '25,99', 'XXL', 10, '2021-02-19', 100044),
(46, 2, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', 'S', 20, '2021-02-19', 100045),
(47, 2, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', 'M', 35, '2021-02-19', 100046),
(48, 2, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', 'L', 35, '2021-02-19', 100047),
(49, 2, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', 'XL', 20, '2021-02-19', 100048),
(50, 2, 'tshirt', 'T-shirt 4', 'T-shirt matière fantaisie', 'bleu', 'coton/polyester', '9,99', 'XXL', 10, '2021-02-19', 100049),
(51, 2, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', 'S', 20, '2021-02-19', 100050),
(52, 2, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', 'M', 35, '2021-02-19', 100051),
(53, 2, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', 'L', 35, '2021-02-19', 100052),
(54, 2, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', 'XL', 20, '2021-02-19', 100053),
(55, 2, 'tshirt', 'T-shirt 5', 'T-shirt imprimé', 'jaune', 'coton', '13,99', 'XXL', 10, '2021-02-19', 100054),
(56, 2, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', 'S', 10, '2021-02-19', 100055),
(57, 2, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', 'M', 20, '2021-02-19', 100056),
(58, 2, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', 'L', 20, '2021-02-19', 100057),
(59, 2, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', 'XL', 15, '2021-02-19', 100058),
(60, 2, 'tshirt', 'T-shirt 6', 'T-shirt à poches', 'blanc', 'coton/polyester', '11,99', 'XXL', 10, '2021-02-19', 100059),
(61, 3, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', 'S', 20, '2021-02-19', 100060),
(62, 3, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', 'M', 30, '2021-02-19', 100061),
(63, 3, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', 'L', 30, '2021-02-19', 100062),
(64, 3, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', 'XL', 20, '2021-02-19', 100063),
(65, 3, 'chemise', 'Chemise 1', 'Chemise slim unie', 'blanc', 'coton/elasthane', '19,99', 'XXL', 10, '2021-02-19', 100064),
(66, 3, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', 'S', 7, '2021-02-19', 100065),
(67, 3, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', 'M', 15, '2021-02-19', 100066),
(68, 3, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', 'L', 15, '2021-02-19', 100067),
(69, 3, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', 'XL', 10, '2021-02-19', 100068),
(70, 3, 'chemise', 'Chemise 2', 'Chemise slim unie', 'bleu', 'coton/elasthane', '19,99', 'XXL', 7, '2021-02-19', 100069),
(71, 3, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', 'S', 7, '2021-02-19', 100070),
(72, 3, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', 'M', 15, '2021-02-19', 100071),
(73, 3, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', 'L', 15, '2021-02-19', 100072),
(74, 3, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', 'XL', 10, '2021-02-19', 100073),
(75, 3, 'chemise', 'Chemise 3', 'Chemise slim unie', 'rouge', 'coton/elasthane', '19,99', 'XXL', 7, '2021-02-19', 100074),
(76, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '36', 25, '2021-02-19', 100074),
(77, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '38', 40, '2021-02-19', 100075),
(78, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '40', 40, '2021-02-19', 100076),
(79, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '42', 40, '2021-02-19', 100077),
(80, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '44', 30, '2021-02-19', 100078),
(81, 4, 'pantalon', 'Pantalon 1', 'Pantalon chino regular', 'bleu', 'coton/elasthane', '24,99', '46', 20, '2021-02-19', 100079),
(82, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '36', 20, '2021-02-19', 100080),
(83, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '38', 30, '2021-02-19', 100081),
(84, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '40', 30, '2021-02-19', 100082),
(85, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '42', 30, '2021-02-19', 100083),
(86, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '44', 20, '2021-02-19', 100084),
(87, 4, 'pantalon', 'Pantalon 2', 'Pantalon chino slim', 'prune', 'coton/elasthane', '22,99', '46', 10, '2021-02-19', 100085),
(88, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '36', 15, '2021-02-19', 100086),
(89, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '38', 20, '2021-02-19', 100087),
(90, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '40', 25, '2021-02-19', 100088),
(91, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '42', 25, '2021-02-19', 100089),
(92, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '44', 20, '2021-02-19', 100090),
(93, 4, 'pantalon', 'Pantalon 3', 'Pantalon cargo clim', 'kaki', 'coton/elasthane', '24,99', '46', 15, '2021-02-19', 100091),
(94, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '36', 25, '2021-02-19', 100092),
(95, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '38', 30, '2021-02-19', 100093),
(96, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '40', 40, '2021-02-19', 100094),
(97, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '42', 40, '2021-02-19', 100095),
(98, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '44', 30, '2021-02-19', 100096),
(99, 5, 'jeans', 'Jeans 1', 'Jean slim délavé', 'bleu', 'coton/polyesther/elasthane', '39,99', '46', 20, '2021-02-19', 100097),
(100, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '36', 25, '2021-02-19', 100098),
(101, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '38', 30, '2021-02-19', 100099),
(102, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '40', 40, '2021-02-19', 100100),
(103, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '42', 40, '2021-02-19', 100101),
(104, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '44', 30, '2021-02-19', 100102),
(105, 5, 'jeans', 'Jeans 2', 'Jean slim brut', 'bleu', 'coton/polyesther/elasthane', '39,99', '46', 20, '2021-02-19', 100103),
(106, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '36', 25, '2021-02-19', 100104),
(107, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '38', 30, '2021-02-19', 100105),
(108, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '40', 40, '2021-02-19', 100106),
(109, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '42', 40, '2021-02-19', 100107),
(110, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '44', 30, '2021-02-19', 100108),
(111, 5, 'jeans', 'Jeans 3', 'Jean gris délavé', 'gris', 'coton/polyesther/elasthane', '39,99', '46', 20, '2021-02-19', 100109),
(112, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '36', 25, '2021-02-19', 100110),
(113, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '38', 25, '2021-02-19', 100111),
(114, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '40', 40, '2021-02-19', 100112),
(115, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '42', 40, '2021-02-19', 100113),
(116, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '44', 25, '2021-02-19', 100114),
(117, 6, 'short', 'Short 1', 'Short chino', 'bleu clair', 'coton', '24,99', '46', 15, '2021-02-19', 100115),
(118, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '36', 25, '2021-02-19', 100116),
(119, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '38', 25, '2021-02-19', 100117),
(120, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '40', 40, '2021-02-19', 100118),
(121, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '42', 40, '2021-02-19', 100119),
(122, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '44', 25, '2021-02-19', 100120),
(123, 6, 'short', 'Short 2', 'Short en jean', 'bleu', 'coton/elasthane', '34,99', '46', 15, '2021-02-19', 100121),
(124, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '36', 25, '2021-02-19', 100122),
(125, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '38', 25, '2021-02-19', 100123),
(126, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '40', 40, '2021-02-19', 100124),
(127, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '42', 40, '2021-02-19', 100125),
(128, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '44', 25, '2021-02-19', 100126),
(129, 6, 'short', 'Short 3', 'Short cargo avec ceinture', 'gris', 'coton', '34,99', '46', 15, '2021-02-19', 100127),
(130, NULL, 'polo', 'polo 4', 'polo MC', 'rouge', 'coton', '29', 'S', NULL, '2021-02-23', 999999),
(131, NULL, 'polo', 'polo 4', 'polo MC', 'rouge', 'coton', '29', 'M', NULL, '2021-02-23', 999999),
(132, NULL, 'polo', 'polo 4', 'polo MC', 'rouge', 'coton', '29', 'L', NULL, '2021-02-23', 999999),
(133, NULL, 'polo', 'polo 4', 'polo MC', 'rouge', 'coton', '29', 'XL', NULL, '2021-02-23', 999999),
(134, NULL, 'polo', 'polo 4', 'polo MC', 'rouge', 'coton', '29', 'XXL', NULL, '2021-02-23', 999999),
(135, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '36', NULL, '2021-02-23', 999998),
(136, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '38', NULL, '2021-02-23', 999998),
(137, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '40', NULL, '2021-02-23', 999998),
(138, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '42', NULL, '2021-02-23', 999998),
(139, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '44', NULL, '2021-02-23', 999998),
(140, NULL, 'pantalon', 'pantalon 4', 'pantalon chino test', 'blanc', 'coton', '49', '46', NULL, '2021-02-23', 999998);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
(8, 6, 'delivered', '2021-02-17 09:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `orders_details`
--

DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE IF NOT EXISTS `orders_details` (
  `id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `nb_pcs` int(11) DEFAULT NULL,
  `article_price` varchar(255) DEFAULT NULL,
  KEY `order_id` (`order_id`)
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
(16, 8, 100092, 1, '39,99');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `prenom`, `nom`, `email`, `password`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm`, `admin`) VALUES
(1, 'aaaa', 'aaaa', 'aaaa', 'aaa@aaaa.com', 'aaab', 'aaaa', 11111, 'aaaa', 'm', '', 0, '2021-02-11 15:01:56', '2021-02-11 15:01:56', NULL, 0),
(3, 'bbbb', 'bbbb', 'bbbb', 'bbbb@bbbb.com', 'bbbb', 'bbbb', 13000, 'bbbb', 'Mr', 'XS', 36, '2021-02-15 13:59:15', '2021-02-15 13:59:15', NULL, 0),
(6, 'cccc', 'cccc', 'cccc', 'cccc@cccc.com', '$2y$10$JNZrdTEftozC/FS170mQzuhcYlUBG7U9kvPvpx.0qaLj3G9GKb8wK', 'cccc', 13000, 'cccc', 'Mr', 'XS', 36, '2021-02-15 14:10:37', '2021-02-15 14:10:37', NULL, 0),
(7, 'dddd', 'dddd', 'dddd', 'dddd@dddd.com', 'ddde', 'dddd', 1000, 'dddd', 'Mr', 'XS', 36, '2021-02-16 10:09:05', '2021-02-16 10:09:05', NULL, 0),
(8, 'eeee', 'eeee', 'eeee', 'eeee@eeee.com', '$2y$10$WxygsWvgV.7jzQF/xeaQj.F10VsSDdtiuiJNvf.UEPZzFfRoNwwy2', 'eeee', 1000, 'eeee', 'Mr', 'XS', 36, '2021-02-16 11:26:40', '2021-02-16 11:26:40', NULL, 0),
(9, 'zzzz', 'zzzz', 'zzzz', 'zzzz@zzzz.com', '$2y$10$txZttcNre.VujzHt9ypzau73MHHe8b0zL7VwUfyH35MQKGh.32EmK', 'zzzz', 1000, 'zzzz', 'Mr', 'XS', 36, '2021-02-19 09:03:15', '2021-02-19 09:03:15', NULL, 0);

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
