-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 31 Juillet 2016 à 22:28
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `created`, `user_id`, `ville_id`) VALUES
(1, 'test1', 'test1', '0000-00-00 00:00:00', 1, 1),
(2, '', '', '0000-00-00 00:00:00', 1, 1),
(3, 'hello', 'test', '2016-07-28 16:26:18', 1, 2),
(4, '', '', '2016-07-28 16:27:24', 1, 1),
(5, '', '', '2016-07-28 16:28:41', 1, 1),
(6, 'xxx', 'xxx', '2016-07-28 18:45:08', 1, 3),
(7, 'x', 'x', '2016-07-28 19:49:13', 1, 1),
(8, '', '', '2016-07-28 19:50:05', 1, 1),
(9, '', '', '2016-07-28 19:50:42', 1, 1),
(10, '', '', '2016-07-28 19:53:06', 1, 1),
(11, '', '', '2016-07-28 19:54:25', 1, 1),
(12, '', '', '2016-07-28 19:54:57', 1, 1),
(13, '', '', '2016-07-28 19:55:17', 1, 1),
(14, '', '', '2016-07-28 19:55:33', 1, 1),
(15, '', '', '2016-07-28 19:56:10', 1, 1),
(16, '', '', '2016-07-28 19:56:35', 1, 1),
(17, '', '', '2016-07-28 19:58:33', 1, 1),
(18, '', '', '2016-07-28 19:59:04', 1, 1),
(19, '', '', '2016-07-28 20:01:32', 1, 1),
(20, '', '', '2016-07-28 20:02:08', 1, 1),
(21, '', '', '2016-07-28 20:02:25', 1, 1),
(22, '', '', '2016-07-28 20:04:28', 1, 1),
(23, '', '', '2016-07-28 20:05:20', 1, 1),
(24, '', '', '2016-07-28 20:07:33', 1, 1),
(25, '', '', '2016-07-28 20:08:11', 1, 1),
(26, '', '', '2016-07-28 20:08:45', 1, 1),
(27, '', '', '2016-07-28 20:09:23', 1, 1),
(28, '', '', '2016-07-28 20:09:44', 1, 1),
(29, '', '', '2016-07-28 20:10:30', 1, 1),
(30, '', '', '2016-07-28 20:11:18', 1, 1),
(31, '', '', '2016-07-28 20:16:17', 1, 1),
(32, '', '', '2016-07-28 20:16:55', 1, 1),
(33, '', '', '2016-07-28 20:17:27', 1, 1),
(34, '', '', '2016-07-28 20:18:41', 1, 1),
(35, '', '', '2016-07-28 20:19:08', 1, 1),
(36, '', '', '2016-07-28 20:20:52', 1, 1),
(37, '', '', '2016-07-28 20:22:02', 1, 3),
(38, '', '', '2016-07-29 02:16:42', 1, 1),
(39, '', '', '2016-07-30 02:32:03', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `article_id`, `category_id`) VALUES
(38, 13, 4),
(39, 14, 4),
(40, 15, 4),
(41, 16, 4),
(42, 16, 4),
(43, 16, 4),
(44, 17, 4),
(45, 18, 4),
(46, 19, 4),
(47, 20, 4),
(48, 21, 4),
(49, 22, 4),
(50, 23, 4),
(51, 25, 4),
(52, 29, 4),
(53, 30, 4),
(54, 36, 4),
(55, 37, 9),
(56, 37, 10),
(57, 38, 4),
(58, 39, 7),
(59, 39, 7);

-- --------------------------------------------------------

--
-- Structure de la table `articles_galeries`
--

CREATE TABLE `articles_galeries` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `galery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles_galeries`
--

INSERT INTO `articles_galeries` (`id`, `article_id`, `galery_id`) VALUES
(2, 39, 22);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created`) VALUES
(4, 't1', '0000-00-00 00:00:00'),
(5, 't1', '0000-00-00 00:00:00'),
(6, 't1', '0000-00-00 00:00:00'),
(7, 'refrf', '0000-00-00 00:00:00'),
(8, 'rùflerflerfl7', '0000-00-00 00:00:00'),
(9, 'hamza', '0000-00-00 00:00:00'),
(10, 'hamza1', '0000-00-00 00:00:00'),
(11, 'pp', '2016-07-27 18:44:15'),
(12, 'efe', '2016-07-27 18:45:49'),
(13, 'test', '2016-07-27 19:07:15');

-- --------------------------------------------------------

--
-- Structure de la table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `contenu` text NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `descriptions`
--

INSERT INTO `descriptions` (`id`, `created`, `contenu`, `article_id`) VALUES
(1, '0000-00-00 00:00:00', 'eflelf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE `galeries` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galeries`
--

INSERT INTO `galeries` (`id`, `nom`, `created`) VALUES
(22, 'kfekfelfk', '0000-00-00 00:00:00'),
(23, 'efzefkpzekf^zepfz', '2016-07-27 00:00:00'),
(24, 'jalal', '2016-07-30 02:29:33'),
(27, 'simo', '2016-07-31 15:51:32'),
(31, 'hamzatest', '2016-07-31 22:20:56'),
(32, 'jajajaj', '2016-07-31 22:23:26');

-- --------------------------------------------------------

--
-- Structure de la table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `journals`
--

INSERT INTO `journals` (`id`, `src`, `created`, `user_id`, `nom`, `extension`) VALUES
(23, 'liste_css.pdf', '2016-07-27 16:47:27', 1, '', 'pdf'),
(24, 'certive.pdf', '2016-07-27 18:16:44', 1, 'test', 'pdf'),
(25, '11.pdf', '2016-07-29 03:16:30', 1, 'x', 'pdf');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `galery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `created`, `type`, `position`, `src`, `extension`, `galery_id`) VALUES
(31, '2016-07-29 19:47:24', '1', 0, '1.mp4', 'mp4', 20),
(32, '2016-07-29 19:47:24', '1', 1, '2.mp4', 'mp4', 20),
(33, '2016-07-29 19:49:58', '0', 0, '20160627_154102.jpg', 'jpg', 21),
(34, '2016-07-29 20:17:24', '0', 3, '20160627_001120.jpg', 'jpg', 22),
(35, '2016-07-29 20:17:24', '1', 1, '1.mp4', 'mp4', 22),
(36, '2016-07-29 20:30:02', '0', 0, '20160627_154048.jpg', 'jpg', 23),
(37, '2016-07-29 20:30:02', '0', 1, '20160627_154032.jpg', 'jpg', 23),
(38, '2016-07-30 02:29:33', '0', 0, '20160627_001120.jpg', 'jpg', 24),
(39, '2016-07-30 02:29:33', '0', 1, '20160627_154048.jpg', 'jpg', 24),
(42, '2016-07-31 15:11:37', '0', 2, '547649_503161203080105_7017529_n.jpg', 'jpg', 26),
(44, '2016-07-31 15:51:32', '0', 1, '2.jpg', 'jpg', 27),
(45, '2016-07-31 15:51:32', '0', 2, '270805_465785700150989_506810966_n.jpg', 'jpg', 27),
(46, '2016-07-31 15:51:32', '0', 3, '547649_503161203080105_7017529_n.jpg', 'jpg', 27),
(47, '2016-07-31 15:51:32', '0', 0, '599437_373812576014969_1331073533_n.jpg', 'jpg', 27),
(48, '2016-07-31 20:34:39', '0', 4, '319913_503161626413396_166230944_n.jpg', 'jpg', 27),
(49, '2016-07-31 20:35:46', '0', 0, '319913_503161626413396_166230944_n.jpg', 'jpg', 22),
(51, '2016-07-31 20:36:10', '0', 4, '547649_503161203080105_7017529_n.jpg', 'jpg', 22),
(52, '2016-07-31 20:36:21', '0', 2, '10378165_697111117018445_142818796115463578_n.jpg', 'jpg', 22),
(54, '2016-07-31 22:20:56', '1', 0, 'Untitled.mp4', 'mp4', 31),
(55, '2016-07-31 22:23:26', '0', 1, '2.jpg', 'jpg', 32),
(57, '2016-07-31 22:23:26', '0', 0, '10378165_697111117018445_142818796115463578_n.jpg', 'jpg', 32),
(58, '2016-07-31 22:23:52', '0', 3, '547649_503161203080105_7017529_n.jpg', 'jpg', 32);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'maroc'),
(2, 'france'),
(3, 'espagne');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`id`, `nom`, `prenom`, `sexe`, `telephone`, `created`, `img`, `user_id`) VALUES
(1, 'lahlou', 'hamza', 'homme', '06012873140', '2016-07-26 01:03:21', 'profil.jpg', 1),
(2, '', '', '', '', '0000-00-00 00:00:00', '8027508010689508_831530923576463_3476372534942649749_n.jpg', 2),
(4, '', '', '', '', '2016-07-28 20:48:04', 'profil.jpg', 4),
(5, '', '', '', '', '2016-07-28 20:50:55', 'profil.jpg', 5),
(6, 'jalal', 'hamza', 'homme', '0601287314', '2016-07-30 02:27:01', '16032819120160627_001126.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `role` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `role`, `active`) VALUES
(1, 'hamza', '795631beebc1850d4aac90c874978a017353fb7a', 'lahloudofus@gmail.com', '2016-07-15 00:00:00', 'admin', 1),
(2, 'admin', '4995c5278965e5dd6f1b7e32df922bca4ba0a4a7', 'admin@gmail.com', '2016-07-25 22:44:15', 'user', 1),
(3, 'hamza', '795631beebc1850d4aac90c874978a017353fb7a', 'lahloudofus@gmail.com', '2016-07-15 00:00:00', 'admin', 0),
(4, 'tetet', '2488b9c5c60b86afefb75c7d93ff5de0128c3aa3', 'tetetlahloudofus@gmail.com', '2016-07-28 20:47:14', 'user', 1),
(5, 'poopopopopo', '4638fa36a61c66f97ef4a597e82c090fe8cf973a', 'efelahloudofus@gmail.com', '2016-07-28 20:50:25', 'user', 1),
(6, 'jalal', '50f2e678d80249eb779a6e0877e9cc406bd122d5', 'jalallahloudofus@gmail.com', '2016-07-30 02:26:58', 'user', 1);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `pay_id`) VALUES
(1, 'casa', 1),
(2, 'fes', 1),
(3, 'parie', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles_galeries`
--
ALTER TABLE `articles_galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `articles_galeries`
--
ALTER TABLE `articles_galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
