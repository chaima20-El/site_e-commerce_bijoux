-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 16 avr. 2020 à 22:28
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id13014500_ex_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`) VALUES
(1, 'code : a1', 'img/1.png', 15),
(13, 'Code : a2', 'img/2.png', 40),
(14, 'Code : a3', 'img/3.png', 40),
(15, 'Code : a4', 'img/h3.png', 40),
(16, 'Code : a5', 'img/IM4.png', 40),
(17, 'Code : a6', 'img/e2.jpg', 40),
(18, 'Code : b1', 'img/e1.jpg', 40),
(19, 'Code : b2', 'img/e2.jpg', 40),
(20, 'Code : b3', 'img/e3.png', 40),
(21, 'Code : b4', 'img/e4.jpg', 40),
(22, 'Code : b5', 'img/e5.png', 40),
(23, 'Code : b6', 'img/e6.png', 40),
(24, 'Code : c1', 'img/IM1.jpeg', 40),
(25, 'Code : c2', 'img/IM3.jpg', 40),
(26, 'Code : c3', 'img/IM4.png', 40),
(27, 'Code : c4', 'img/imgF.png', 40),
(28, 'Code : c5', 'img/imgF1.png', 40),
(29, 'Code : c6', 'img/imgF2.png', 40),
(30, 'Code : d1', 'img/h1.jpg', 40),
(31, 'Code : d2', 'img/h2.png', 40),
(32, 'Code : d3', 'img/h3.png', 40),
(33, 'Code : d4', 'img/h4.png', 40),
(34, 'Code : d5', 'img/h5.jpg', 40),
(35, 'Code : d6', 'img/h6.jpg', 40),
(36, 'Code : e1', 'img/doe1.png', 40),
(37, 'Code : e2', 'img/doe2.png', 40),
(38, 'Code : e3', 'img/doe3.png', 40),
(39, 'Code : e4', 'img/doe4.png', 40),
(40, 'Code : e5', 'img/doe5.png', 40),
(41, 'Code : e6', 'img/doe6.png', 40),
(42, 'Code : f1', 'img/dof1.png', 40),
(43, 'Code : f2', 'img/dof2.png', 40),
(44, 'Code : f3', 'img/dof3.png', 40),
(45, 'Code : f4', 'img/dof4.png', 40),
(46, 'Code : f5', 'img/dof5.png', 40),
(47, 'Code : f6', 'img/dof6.png', 40),
(48, 'Code : g1', 'img/bm1.png', 40),
(49, 'Code : g2', 'img/bm2.png', 40),
(50, 'Code : g3', 'img/bm3.png', 40),
(51, 'Code : g4', 'img/bm4.png', 40),
(52, 'Code : g5', 'img/bm5.png', 40),
(53, 'Code : g6', 'img/bm6.png', 40),
(54, 'Code : h1', 'img/be1.png', 40),
(55, 'Code : h2', 'img/be2.png', 40),
(56, 'Code : h3', 'img/be3.png', 40),
(57, 'Code : h4', 'img/be4.png', 40),
(58, 'Code : h5', 'img/be5.png', 40),
(59, 'Code : h6', 'img/be6.png', 40),
(60, 'Code : i1', 'img/b1.png', 40),
(61, 'Code : i2', 'img/b2.png', 40),
(62, 'Code : i3', 'img/b3.png', 40),
(63, 'Code : i4', 'img/b4.png', 40),
(64, 'Code : i5', 'img/b5.png', 40),
(65, 'Code : i6', 'img/b6.png', 40),
(66, 'Code : j1', 'img/bh1.png', 40),
(67, 'Code : j2', 'img/bh2.png', 40),
(68, 'Code : j3', 'img/bh3.png', 40),
(69, 'Code : j4', 'img/bh4.png', 40),
(70, 'Code : j5', 'img/bh5.png', 40),
(71, 'Code : j6', 'img/bh6.png', 40),
(72, 'Code : y1', 'img/ce1.png', 40),
(73, 'Code : y2', 'img/ce2.png', 40),
(74, 'Code : y3', 'img/ce3.png', 40),
(75, 'Code : y4', 'img/ce4.png', 40),
(76, 'Code : y5', 'img/ce5.png', 40),
(77, 'Code : y6', 'img/ce6.png', 40),
(78, 'Code : p1', 'img/cf1.png', 40),
(79, 'Code : p2', 'img/cf2.png', 40),
(80, 'Code : p3', 'img/cf3.png', 40),
(81, 'Code : p4', 'img/cf4.jpg', 40),
(82, 'Code : p5', 'img/cf5.png', 40),
(83, 'Code : p6', 'img/cf6.png', 40),
(84, 'Code : m1', 'img/ch1.png', 40),
(85, 'Code : m2', 'img/ch2.png', 40),
(86, 'Code : m3', 'img/ch3.png', 40),
(87, 'Code : m4', 'img/ch4.png', 40),
(88, 'Code : m5', 'img/ch5.png', 40),
(89, 'Code : m6', 'img/ch6.png', 40),
(95, 'Code : z1', 'img/mon1.png', 40),
(96, 'Code : z2', 'img/mon2.png', 40),
(97, 'Code : z3', 'img/mon3.png', 40),
(98, 'Code : z4', 'img/mon4.png', 40),
(99, 'Code : z5', 'img/mon5.png', 40),
(100, 'Code : z6', 'img/mon6.png', 40);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Email`, `username`, `password`) VALUES
(1, 'chaima', 'elmejgari', 'chaimaelmejgari@gmail.com', 'chaim2020', '123456789'),
(2, 'nouhaila hassni', 'noha', 'jdeuxf200@gmail.com', 'nnn', 'nouhqilq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
