-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 19 fév. 2021 à 20:04
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
-- Structure de la table `poster`
--

CREATE TABLE `poster` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `categorie` varchar(10) NOT NULL,
  `sujet` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date_mess` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poster`
--

INSERT INTO `poster` (`id`, `nom`, `prenom`, `categorie`, `sujet`, `message`, `date_mess`) VALUES
(1, 'zongo', 'ibra', 'CSS 3', 'responsive design', 'comment intégrer un media queries?', '2021-02-16 10:22:02'),
(15, 'Ouidi', 'Wendpouire Emilie', 'PYTHON', 'pdo', 'je sais pas  comment gerer la connexion', '2021-02-16 20:53:01'),
(16, 'ouiya', 'ismael', 'SGBD', 'requette sql', 'comment créer un table avec les script SQL?', '2021-02-17 12:43:29'),
(19, 'bakyonom', 'max', 'BOOTSTRAP', 'les grid', 'probleme avec les row et les col', '2021-02-17 15:13:21'),
(20, 'ouedraogo', 'moubarack', 'JQUERIE', 'jquerie data table', 'comment integrer un tableau avec j_querie data table', '2021-02-17 15:37:08'),
(21, 'Zoanga', 'rafihatou', 'JAVA', 'les variables', 'commeent bien declarer les variables en java?', '2021-02-18 09:05:29');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date_rep` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `nom`, `prenom`, `contenu`, `date_rep`) VALUES
(1, '', '', '', '2021-02-19 00:44:26'),
(2, 'MIHIN', 'Hugues Aime', 'revoir le cours sur la plateforme openclassroom', '2021-02-19 00:45:28'),
(3, 'MIHIN', 'Hugues Aime', 'revoir le cours sur la plateforme openclassroom', '2021-02-19 00:57:33'),
(4, 'bassina', 'rebecca', 'reponse au question', '2021-02-19 01:15:33'),
(6, 'zongo', 'rebecca', 'WGLchkcvhkwbv', '2021-02-19 16:53:46');

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
(26, 'alain', 'alain@gmail.com', '$2y$10$zcvJvNdiee6IvYuUPb769eG2KeieAGerXzaXJmiaOOjHNx.k1FFcy', '$2y$10$dHY1Jbo.WDtGd0qz.rcoFuCLVxxxWrMes.m3LQWKrNP04E1jk2Twm'),
(27, 'max', 'max@gmail.com', '$2y$10$enZqGGk2pI0TpGPdDEcMu.ymkocMCjGXfIKFoFw/PJdxOBomeyTCW', '$2y$10$8w.suzbDfE2gcKkLYUe24.IqVs3Jgmahoo6ZoLDwhGPfJzcayJ.2q'),
(28, 'moussa', 'moussa@gmail.com', '$2y$10$k.KnWdeZlK.qTolnwBX10ON62IecZVX.PwssE78yeWOJv4F1rdKTC', '$2y$10$lSoDrq59eJ84DjSYGf1jDeoCkhzwQUdlh2.28VFd1uuUniqyirese'),
(29, 'davy', 'davy@gmail.com', '$2y$10$Gw071/pXq2r4j2kmB5soD.IhYbZ70qDEAuITrRvj7wqPYNm4sYIde', '$2y$10$jUjG42XkqWnbUV7hhjO3de2qvPB7dwGb3wisWMdnHFE9XvkGJyBWy'),
(30, 'franck', 'traore@gmail.com', '$2y$10$iQbF5D1bLOcHyPScHB6aoeQmMjWJgY1SSty7KWgr15.iioidMTcPe', '$2y$10$9KIGn0RSN0bGKlzgF0XWmOYe0g13ih/yVh72/bzCbFn4x0WD/EEQi'),
(31, 'ty', 'b@gmail.com', '$2y$10$67IiB8y8eykwUJWC1fab9u/aAoHxWynrXsFJX9nPuz/4iv5JDVe3m', '$2y$10$q1ME4PmPSEp1VJMF8vqs..YYmkgQD4lO.gNCpiHCbOkFXgxe6r6k2'),
(32, 'hugues', 'eouidi@gmail.com', '$2y$10$IiuDlAbVjon8knQYs1ZmzOy3wWDE9bR7tpEHn09DcF1ix5E2BcTz2', '$2y$10$ZpLfah5WygXDbJ/X3Rr5EuP1awLnQVU/OXbIrlCE2Crp040QPDXVe');

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
(7, 'ismael', 'ismael@gmail.com', '$2y$10$Li785.ZC2Yzk2hvFR8z7K.X.xWYEZaCfWz.8RvNo/9NfcCcEBi8ZW', '$2y$10$J0EKP9wkHu1A5kRf6SzO0eLca.JMLvqYmoVgwkyuWd4WATk7yeKaa'),
(8, 'hugues', 'hugues@gmail.com', '$2y$10$dv6oWEIjl0m1kAhi5/XDqew/rSdN3NoEMQGB6t2GsRiHDAE9f6oHS', '$2y$10$zvZIc9SnnfwM2ErGqDqOU.KTKyWKh7CN3sbe2VEPXmdRqVBUzRTAy'),
(13, 'felicite', 'felicite@gmail.com', '$2y$10$HbnXkkPfmx5ZbXSCTrQBjeqNzcyGXPZGcPbug1rFDH0LQHSfzxSde', '$2y$10$qwf5kh02CT1G.Mu9CtF.xu.QjCYweJXqv8f1j.WTeYICxXbUjQqrG'),
(14, 'yasmine', 'yasmine@gmail.com', '$2y$10$zZXpSjUiQTumZcxQAnKCHu/QWxnoOtNQ9w.n9cPUykMh3Gwg5727m', '$2y$10$ZhtMIYISIj8FsuvASZcug.cQ5FEsBvz/xNJvsB.5DDr0j6cdm4tPK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `user_dev`
--
ALTER TABLE `user_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
