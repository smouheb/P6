-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 12 Novembre 2017 à 11:30
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `P6`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `trick_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `trick_id`, `description`, `created_at`, `created_by`) VALUES
(1, 1, 'Well it is not super difficult to achieve that come on', '2017-11-02 19:32:13', 'Smael'),
(2, 5, 'What''s up', '2017-11-05 20:52:41', 'Smael'),
(3, 5, 'Hello just a quick test', '2017-11-06 19:03:01', 'Sma'),
(4, 9, 'Testy', '2017-11-06 19:26:40', 'Sma'),
(5, 5, 'test', '2017-11-06 19:32:19', 'Sma'),
(6, 11, 'hey thafadwets', '2017-11-08 19:07:53', 'admin'),
(7, 6, 'hello', '2017-11-10 05:28:14', 'smael'),
(8, 6, 'hello', '2017-11-10 19:07:06', 'momums'),
(9, 5, 'hello', '2017-11-10 23:45:16', 'momums'),
(10, 5, 'test again', '2017-11-10 23:45:40', 'momums'),
(11, 5, 'yep and again', '2017-11-10 23:45:58', 'momums'),
(12, 5, 'yep again and again', '2017-11-10 23:46:20', 'momums'),
(13, 5, 'come on mate', '2017-11-10 23:46:39', 'momums'),
(14, 5, 'alright', '2017-11-10 23:46:52', 'momums'),
(15, 5, 'sure it''s working', '2017-11-10 23:47:07', 'momums'),
(16, 5, 'yes but now I should see the paginator', '2017-11-10 23:47:30', 'momums'),
(17, 5, 'Hello', '2017-11-11 00:12:32', 'lololoelelel'),
(18, 5, 'hello', '2017-11-11 12:23:27', 'lololoelelel'),
(19, 5, 'Hello guys I just joined this group', '2017-11-11 14:33:26', 'nounou'),
(20, 5, 'Hello I just joined as well', '2017-11-11 14:41:44', 'testsma');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `trick_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `picture`
--

INSERT INTO `picture` (`id`, `trick_id`, `url`, `created_at`, `updated_at`, `image`) VALUES
(5, 5, 'https://i.ytimg.com/vi/7fG7-_ucpsY/maxresdefault.jpg', '2017-11-05 20:52:03', NULL, NULL),
(6, 6, 'https://www.powderwhite.com/expertise/wp-content/uploads/2014/01/ski-courchevel-1.jpg', '2017-11-06 19:23:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tricks_creation`
--

CREATE TABLE `tricks_creation` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tricks_creation`
--

INSERT INTO `tricks_creation` (`id`, `group_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `name`, `description`) VALUES
(5, 10, '2017-11-05 20:52:03', NULL, NULL, NULL, 'Trick360', 'Demo'),
(6, 8, '2017-11-06 19:23:28', NULL, NULL, NULL, 'F360', '360');

-- --------------------------------------------------------

--
-- Structure de la table `tricks_group`
--

CREATE TABLE `tricks_group` (
  `id` int(11) NOT NULL,
  `groupName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tricks_group`
--

INSERT INTO `tricks_group` (`id`, `groupName`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(7, 'FS-720', '2017-11-04 10:51:57', NULL, NULL, NULL),
(8, 'FS-360', '2017-11-04 10:52:11', NULL, NULL, NULL),
(10, '360', '2017-11-05 20:47:13', NULL, NULL, NULL),
(12, 'FS-RUFFLE', '2017-11-11 22:22:48', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `image`) VALUES
(1, 'Sma', 'sma', 'smael.mouheb@gmail.com', 'smael.mouheb@gmail.com', 1, NULL, '$2y$13$TeHnwljvEzCHp4VrmG8rH.P/8rkO8m52uslaS1wrrKlxcfe.6aUCi', '2017-11-07 03:54:17', 'L4gfz9casSUEXZSwgnBXx8fe1unrZxSMYvipaj2Ja9g', '2017-11-07 20:48:34', 'a:0:{}', ''),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$1xeGAESO9FgNiBaQk.tCLe8wm16Mys85U5ekHGh4j3G8zIMoBq9NW', '2017-11-11 22:06:13', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', ''),
(3, 'smamoi', 'smamoi', 'smael.mouheb@senso.lu', 'smael.mouheb@senso.lu', 1, NULL, '$2y$13$J4xArJ12TE8idDhNSRtaVuTujBI1vLmkW6VIGykmuyl3ch/YpJwh2', '2017-11-06 20:41:43', NULL, NULL, 'a:0:{}', ''),
(4, 'test1', 'test1', 'test@test.com', 'test@test.com', 1, NULL, '$2y$13$E5hTyNN81BM5aeIJdePAq.xcYh3DYOAn7wBJ1QVNKPT6HmcrQ9Ja6', '2017-11-08 12:58:45', NULL, NULL, 'a:0:{}', 'noimage.png'),
(5, 'test2', 'test2', 'test@test2.com', 'test@test2.com', 1, NULL, '$2y$13$9p.Slj40DUAT4Ab.WkzkseG6GNngYyk3VLuAb8EQxeV/PKr8BbtEO', '2017-11-08 13:11:09', NULL, NULL, 'a:0:{}', 'noimage.png'),
(6, 'test3', 'test3', 'test2@test3.com', 'test2@test3.com', 1, NULL, '$2y$13$kFiZgFxgrjfyQb532Yn1CupBfqwZQZxiYahBYCqStV3mbnTw9UoYG', '2017-11-08 17:38:47', NULL, NULL, 'a:0:{}', 'noimage.png'),
(7, 'test4', 'test4', 'test2@test4.com', 'test2@test4.com', 1, NULL, '$2y$13$9idy9pu778rfb84XMv3A.O14TiGDcUJcujuim2pfJbFhfhQujD4HW', '2017-11-08 17:44:13', NULL, NULL, 'a:0:{}', 'noimage.png'),
(8, 'test5', 'test5', 'smael.test@super.com', 'smael.test@super.com', 1, NULL, '$2y$13$IVLq7b/93mRF8L47Ld4oeOPXCeZzIERNZto.mgussTUYAjSQqeAqq', '2017-11-08 20:11:28', NULL, NULL, 'a:0:{}', 'noimage.png'),
(9, 'smammm', 'smammm', 'sma@sma1.com', 'sma@sma1.com', 1, NULL, '$2y$13$3TASm6tWka.Z1RIU/vcMn..vz/IGjS.0NMOkSrZ2DZrukY95kri22', '2017-11-08 20:27:17', NULL, NULL, 'a:0:{}', 'noimage.png'),
(10, 'test6', 'test6', 'test6@test6.com', 'test6@test6.com', 1, NULL, '$2y$13$O8ZszEnRZAy4ggbAV9arouE6NmNzfdyeJOlE0SS5tS.ZkdKFuPLHa', '2017-11-09 05:13:23', NULL, NULL, 'a:0:{}', 'noimage.png'),
(11, 'test9', 'test9', 'test7@test8.com', 'test7@test8.com', 1, NULL, '$2y$13$bXvT/RWdBy7d3W.rks7u1u6Heac996WuJZSYhQ70GNorNu4WHVyYq', '2017-11-09 20:04:29', NULL, NULL, 'a:0:{}', 'noimage.png'),
(12, 'best', 'best', 'sma.mouhouh@best.com', 'sma.mouhouh@best.com', 1, NULL, '$2y$13$pUcpW11bj4iqI8nK5xNPsulEQikNq3oq7DSftGl2dR3lue73RcZfi', '2017-11-09 20:29:18', NULL, NULL, 'a:0:{}', 'backgroundshow.jpg'),
(13, 'smael', 'smael', 'smael@smael.com', 'smael@smael.com', 1, NULL, '$2y$13$sTKlmIObC8YdYWWCVQ5eRO2q5JV6u7qTc2/O8gL8c8wb04qiMiUoS', '2017-11-09 20:51:17', NULL, NULL, 'a:0:{}', 'male3-512.png'),
(14, 'momums', 'momums', 'sma@moiie.com', 'sma@moiie.com', 1, NULL, '$2y$13$IZoDqW6Z7DmINbH01NoYqeQ5NG6itmtZYzsjOMkjirEivpYziQmp.', '2017-11-10 23:44:40', NULL, NULL, 'a:0:{}', 'noimage.png'),
(15, 'lololoelelel', 'lololoelelel', 'lo@lol.com', 'lo@lol.com', 1, NULL, '$2y$13$q3YFQIhJQOE2YYqZ.9fh4uOy02BPKGUsh6glyCxkaZlsRPuml5/HG', '2017-11-11 00:12:10', '32OBBi-itJhXAjnUpeqCSHI9S5wj90oGaa5Z9FD99mo', '2017-11-11 09:47:51', 'a:0:{}', 'thumbnail.png'),
(16, 'nounou', 'nounou', 'nounou@nounou.com', 'nounou@nounou.com', 1, NULL, '$2y$13$lGC2bG/JzbFxnRTE54ucpeabMSXte0sdzj4rv./A78i1C9TXTNbGy', '2017-11-11 14:32:54', NULL, NULL, 'a:0:{}', 'thumbnail-icon.png'),
(17, 'testsma', 'testsma', 'test@testsma.com', 'test@testsma.com', 1, NULL, '$2y$13$rdEFu4QZrT4N8RTeO.VwS.9umYbUonVhp1ZG/lQ50t9w0M1R2JmAe', '2017-11-11 14:41:23', NULL, NULL, 'a:0:{}', 'Nanou1stComputerPainting.png');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `trick_id` int(11) DEFAULT NULL,
  `video_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `trick_id`, `video_url`, `created_at`, `updated_at`) VALUES
(5, 5, 'https://www.youtube.com/embed/n0F6hSpxaFc', '2017-11-05 20:52:03', NULL),
(6, 6, 'https://www.youtube.com/embed/SQyTWk7OxSI', '2017-11-06 19:23:28', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_16DB4F89B281BE2E` (`trick_id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tricks_creation`
--
ALTER TABLE `tricks_creation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_77F45ED35E237E06` (`name`),
  ADD KEY `IDX_77F45ED3FE54D947` (`group_id`);

--
-- Index pour la table `tricks_group`
--
ALTER TABLE `tricks_group`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CC7DA2CB281BE2E` (`trick_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tricks_creation`
--
ALTER TABLE `tricks_creation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tricks_group`
--
ALTER TABLE `tricks_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `FK_16DB4F89B281BE2E` FOREIGN KEY (`trick_id`) REFERENCES `tricks_creation` (`id`);

--
-- Contraintes pour la table `tricks_creation`
--
ALTER TABLE `tricks_creation`
  ADD CONSTRAINT `FK_77F45ED3FE54D947` FOREIGN KEY (`group_id`) REFERENCES `tricks_group` (`id`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2CB281BE2E` FOREIGN KEY (`trick_id`) REFERENCES `tricks_creation` (`id`);
