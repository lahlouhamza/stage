-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Juillet 2016 à 21:20
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
  `contenu` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `created`, `user_id`, `ville_id`) VALUES
(1, 'test1', 'test1', 0, 1, 1);

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
(1, 1, 1);

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
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `type`) VALUES
(1, 'categories1', '0'),
(2, 'categorie2', '2');

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
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galeries`
--

INSERT INTO `galeries` (`id`, `nom`) VALUES
(1, 'g1');

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
(1, 'x', '2016-07-04 00:00:00', 1, '', ''),
(2, 'x', '2016-07-04 00:00:00', 1, '', ''),
(3, 'x', '2016-07-04 00:00:00', 2, '', '');

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
(1, 'maroc');

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
(1, 'lahlou', 'hamza', 'homme', '06012873140', '2016-07-26 01:03:21', '2307478492.jpg', 1),
(2, '', '', '', '', '0000-00-00 00:00:00', '8027508010689508_831530923576463_3476372534942649749_n.jpg', 2);

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
(2, 'admin', '4995c5278965e5dd6f1b7e32df922bca4ba0a4a7', 'admin@gmail.com', '2016-07-25 22:44:15', 'user', 1);

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
(2, 'fes', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `articles_galeries`
--
ALTER TABLE `articles_galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
