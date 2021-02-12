-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 12 fév. 2021 à 00:25
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forumls`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passe` varchar(60) NOT NULL,
  `passe2` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_admin`
--

INSERT INTO `user_admin` (`id`, `utilisateur`, `email`, `passe`, `passe2`) VALUES
(13, 'hugues', 'aime@gmail.com', '$2y$10$sHIT5THLlJmRs1n88o1d5Oc1.zkrkqJBcHRORFqs1o.zzPeguVwNm', '$2y$10$UpD82jloUxO8UpLq0OCMrOUUTP3J68RKBEG1IVdnMR/PJEd3uAmeO'),
(14, 'hugues', 'dddd@gmail.com', '$2y$10$8tWOQMbO19T0WFVO1fJp8eAdnqvZeQbJDlVqIVHcHXKHcMAS4PH3i', '$2y$10$QcbNj9w2jnZgZ8NkF.LWYuDCsxdAo6nTfyedCeWGBVATbF7yDPoGS'),
(15, 'ty', 'rebecca@gmail.com', '$2y$10$ZvUATPA23iYhC71xRnhC0en/wFDYE3AY2n/Hlxzp/vM1FbAAuUl5m', '$2y$10$XNPKvrAqFkX5YbhQ52UmA.58pKO1lqCyHNc5ntfGutiSlos7bC7qW'),
(16, 'ali', 'ali@gmail.com', '$2y$10$N7F0oo5shdvHvrUQeg3GtuK0L2Lz/8KLsSDimEcR6FXMSOij.dGOS', '$2y$10$BMIZPm57kmSqZkkLG25h9.emONFgbb54QdySOkj1rp0cK68lDUp2S'),
(17, 'n', 'b@gmail.com', '$2y$10$iXwjT73HPVWrFKP3HzdHLOoflClkUqMVjBbQFG3CqxKmXtlb94hnC', '$2y$10$f8AwMUlahvw0CFbbS4RO1Ogcxkij/rjK6pGffGUcDGIJduOH3HbYa'),
(18, 'n', 'b2@gmail.com', '$2y$10$E56ihRABE1G.ouTSbE0cpur8MhTVyJRksYZBBHl.7J4lRMw1hXfW6', '$2y$10$3Oh.jLqCwW4r4uoJGdCgA.xkbEU6l.FM54BvIRq2jNe6Wt5cLzwUu'),
(19, 'n2', 'b28@gmail.com', '$2y$10$36p46ig7YLRFirCXVkz9duqG7aac1wR8GeluSBdOmeqOsfUQcsZwy', '$2y$10$vvBicYaEMMpuz6In4cxQkO7OQqcwQJ27s4zi1V4qxgZ.if2J0KBli'),
(20, 'lili', 'lili@gmail.com', '$2y$10$AFug.asKygGrGa/4w7EGkO7Wn/B515r/jz5vm9J56IQlcKGgdZ71C', '$2y$10$N3OH7N03.zMADXLnoxI0juabLWPdF4.vNbtrxavqLrdK5uCiVoBXq'),
(21, 'az', 'az@gmail.com', '$2y$10$c/0CN1f/JLPjwBRkjAvhIe7Jf1WEBYTkbvfXLKjPYQ.65G.nvaYq2', '$2y$10$ODazVgOSCBMlXBh/jR/PvefrvO/WfMMJo4NSOFqNI2rzH3WG.60I6'),
(22, 'hugues', 'ke@gmail.com', '$2y$10$rUESGJ6fBS.IH3iUUPfdwe4Uz6UhjPC1.0LmBUJnJ7FdlxbJb8fSm', '$2y$10$4uJhZj2jo47NZCCwtWCD5OB/Qbgkz0OYvNYLBLm98FBzV/hDvZs7O'),
(23, 'bn', 'bn@gmail.com', '$2y$10$XhXIIOI723gqmGEmEOncVukmT0fZcRtO7RVd.Lo2x1jgaofNDxpcO', '$2y$10$j4yrYk2C315oF1p.xmXXmegxgWO/axoShTj5XSdU/km6dGZKTJjVW');

-- --------------------------------------------------------

--
-- Structure de la table `user_dev`
--

CREATE TABLE `user_dev` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_retype` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_dev`
--

INSERT INTO `user_dev` (`id`, `utilisateur`, `email`, `password`, `password_retype`) VALUES
(1, 'n', 'n@h.com', '123', '123'),
(2, 'az', 'az@gmail.com', '$2y$10$dCFnrGgX/UbZEFbwZaBiIez7fzew45nF1nrDn0VhV35btjd.JSEKu', '$2y$10$dsVVHgDq/6dUKddSN4ifsO/icPWkrBtWWtZ1hJljZfOpcWGc.lUv.'),
(3, 'gh', 'gh@gmail.com', '$2y$10$SMvLAnScM3VEzyMYIPrOrOn9k.NMWd8X0xGWIjsaZ55ZxiQn0R7Fi', '$2y$10$GfpehqW1fJ2HK.gCfcovVOZHIAF/tPkqPbWZGiXk0XTC4hVJPGoL2'),
(4, 'hugues ', 'hugues@gmail.com', '$2y$10$ZdIeSFxI1ahWDyvhp5qW5ufgb1vuGWniE3ZjR78kM.ky2yzIfnPda', '$2y$10$WtgvoeOCAtkPFUCoVwktnOvBeFxgLlHVUecrDG/XyDHEOKFe.T0NC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_dev`
--
ALTER TABLE `user_dev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `user_dev`
--
ALTER TABLE `user_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
