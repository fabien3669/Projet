DROP TABLE IF EXISTS `fos_user`;

CREATE TABLE IF NOT EXISTS `fos_user` (
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
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(3, 'client', 'client', 'client@google.com', 'client@google.com', 1, NULL, '$2y$13$D9TE9B6itUgAhhfFxjoKQ.A9W.fDmA18JqMGzM.Xa6/Fz2mdfxxtO', '2017-01-27 12:14:04', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}'),
(4, 'client2', 'client2', 'client2@gmail.com', 'client2@gmail.com', 1, NULL, '$2y$13$bjSYGs6KJwXNm0M.ZCPHPez/jSbtOnW3V46Zzg9ThTFrDjH3plqTa', '2017-01-27 12:15:02', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}'),
(5, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$m9Rbx3m7XF2LH0lenspJSuDZCPeIrNXpYbsjLlTLrzZx0R0lS6ZVK', '2017-01-27 12:15:38', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(6, 'vendeur', 'vendeur', 'vendeur@gmai.com', 'vendeur@gmai.com', 1, NULL, '$2y$13$66bfuuYBv0NiGbWz1G8YzeHlE8Lnj/nBdCAJT/n4jfGI48jCscmTa', '2017-01-27 12:16:19', NULL, NULL, 'a:3:{i:0;s:11:"ROLE_CLIENT";i:1;s:12:"ROLE_VENDEUR";i:2;s:10:"ROLE_ADMIN";}'),
(7, 'vendeur2', 'vendeur2', 'vendeur2@gmai.com', 'vendeur2@gmai.com', 1, NULL, '$2y$13$66bfuuYBv0NiGbWz1G8YzeHlE8Lnj/nBdCAJT/n4jfGI48jCscmTa', '2017-01-27 12:16:19', NULL, NULL, 'a:3:{i:0;s:11:"ROLE_CLIENT";i:1;s:12:"ROLE_VENDEUR";i:2;s:10:"ROLE_ADMIN";}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fos_user`
--
-- ALTER TABLE `fos_user`
--  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`), ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);



