-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mars 2021 à 04:30
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bodenordnungsverfahren`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `verfahren_id` int(11) DEFAULT NULL,
  `toeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `einwendung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `verfahren_id`, `toeb`, `einwendung`, `created_at`) VALUES
(1, 2, 'Töb', 'Das Flurbereinigungsgebiet hat eine Fläche von 240 ha und umfasst die landwirtschaftlichen Nutzflächen der Gemarkung Ilbesheim östlich, südlich und nördlich der Ortslage. Mit dieser vereinfachten Flurbereinigung werden Ziele verfolgt, die die strukturelle Entwicklung in der Gemarkung fördern: -Verbesserung der Produktions- und Arbeitsbedingungen in der Landwirtschaft durch bodenordnerische Maßnahmen -', '2021-02-14 00:25:29'),
(2, 2, 'Töb', 'Das Flurbereinigungsgebiet hat eine Fläche von 240 ha und umfasst die landwirtschaftlichen Nutzflächen der Gemarkung Ilbesheim östlich, südlich und nördlich der Ortslage. Mit dieser vereinfachten Flurbereinigung werden Ziele verfolgt, die die strukturelle Entwicklung in der Gemarkung fördern: -Verbesserung der Produktions- und Arbeitsbedingungen in der Landwirtschaft durch bodenordnerische Maßnahmen -', '2021-02-14 00:29:09'),
(3, 2, 'Töb', 'Das Flurbereinigungsgebiet hat eine Fläche von 240 ha und umfasst die landwirtschaftlichen Nutzflächen der Gemarkung Ilbesheim östlich, südlich und nördlich der Ortslage. Mit dieser vereinfachten Flurbereinigung werden Ziele verfolgt, die die strukturelle Entwicklung in der Gemarkung fördern: -Verbesserung der Produktions- und Arbeitsbedingungen in der Landwirtschaft durch bodenordnerische Maßnahmen -', '2021-02-14 00:29:33'),
(7, 5, 'Töb2', 'Vereinfachte Flurbereinigung nach §86(1) Nr.1', '2021-02-14 02:09:01');

-- --------------------------------------------------------

--
-- Structure de la table `dienstsitz`
--

CREATE TABLE `dienstsitz` (
  `id` int(11) NOT NULL,
  `ort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dienstsitz`
--

INSERT INTO `dienstsitz` (`id`, `ort`) VALUES
(1, 'Kaiserslautern'),
(2, 'Mayen'),
(3, 'Bad Kreuznach'),
(4, 'Bernkastel-Kues'),
(5, 'Bitburg');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(2, 1, 'CijETh7IoHY2rz5Oofhi', 'zStmt0Av5jyxiRsrb+rGrAkGSdo8QhH5fZ35a/T+VUA=', '2021-02-08 23:53:44', '2021-02-09 00:53:44'),
(3, 1, 'Tff1gLmm0FGktbaGXUh0', 'C+cqvsfsVUCnCes7BKsy9LZZ4xz5K+xVRle0PgqeZoM=', '2021-02-10 15:42:13', '2021-02-10 16:42:13'),
(5, 14, 'BMwloERj082ggMP8OG2I', 'nMR89pNZxpPJW0A3O/RNpg5l0TXybzmduOxCjjL/PPU=', '2021-02-15 16:41:10', '2021-02-15 17:41:10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `benutzname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `is_verified`, `benutzname`) VALUES
(1, 'admin.muster@test.de', '{\"1\":\"ROLE_USER\",\"0\":\"ROLE_MODO\"}', '$argon2id$v=19$m=65536,t=4,p=1$aDFMZ3p6NFo5d2hvM3ZZMA$zbRO9dy0S8BYlrl25SjXqqygUQGDuSJjhQXqTMHQEKQ', 1, ''),
(3, 'toeb.muster@test.de', '{\"2\":\"ROLE_USER\",\"1\":\"ROLE_TOEB\"}', '$argon2id$v=19$m=65536,t=4,p=1$SVBISi5JVXVGUkFyR3B2Rg$8MKQYQd7pDImE6XGK78/oFvNZj7GWZuqYeoUNcRY9jw', 1, ''),
(5, 'beteiligte.muster@test.de', '[\"ROLE_MODO\"]', '$argon2id$v=19$m=65536,t=4,p=1$U0xRbXUwSThpWWtHTkZqaw$GLGk6qAWTBsyoSsCokwUjd0/oOrCCkee8XVx4El0/XA', 1, ''),
(10, 'admin@test.de', '[\"ROLE_USER\",\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$WG5JOFVJOHdFNE4yeGo5Wg$iD0eVwupfE2y1+YV1S0O6DMn7FFUsz3nlV8Yc5VdVG4', 1, ''),
(14, 'test.email@test.de', '[\"ROLE_USER\",\"ROLE_MODO\"]', '$argon2id$v=19$m=65536,t=4,p=1$UjRsM0dxZXRaWDhURVRJUg$MmlxLNprGuG4DYPy2YeDhV48Th+rCurF9OUDX2E1IF8', 1, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `verfahren`
--

CREATE TABLE `verfahren` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nummer` int(11) NOT NULL,
  `art` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anschrift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ziel` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auszug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auslage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `dienstsitz_id` int(11) DEFAULT NULL,
  `inhalt` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `verfahren`
--

INSERT INTO `verfahren` (`id`, `name`, `nummer`, `art`, `anschrift`, `stadt`, `plz`, `ziel`, `auszug`, `auslage`, `karte`, `lat`, `lng`, `link`, `created_at`, `dienstsitz_id`, `inhalt`) VALUES
(2, 'Ilbesheim', 21126, 'Vereinfachte Flurbereinigung nach §86(1) Nr.1', 'Hauptstraße 47', 'Ilbesheim', '67294', 'Das Flurbereinigungsgebiet hat eine Fläche von 240 ha und umfasst die landwirtschaftlichen Nutzflächen der Gemarkung Ilbesheim östlich, südlich und nördlich der Ortslage.\r\nMit dieser vereinfachten Flurbereinigung werden Ziele verfolgt, die die strukturelle Entwicklung in der Gemarkung fördern:\r\n-Verbesserung der Produktions- und Arbeitsbedingungen in der Landwirtschaft durch bodenordnerische Maßnahmen\r\n- Vergrößerung der Besitzstände und der Schlaglängen\r\n- Verbesserung der Erschließung der landwirtschaftlichen Grundstücke durch Wege\r\n\r\nEine wettbewerbsfähige und standortgerechte Landwirtschaft trägt zugleich entscheidend dazu bei, die Kulturlandschaft zu erhalten und den ländlichen Raum in seiner Wohn-, Wirtschafts-, Ausgleichs- und Erholungsfunktion zu stärken.\r\n\r\nDas vereinfachte Flurbereinigungsverfahren kann zudem die Voraussetzungen zur Verwirklichung landespflegerischer und grünordnerischer Maßnahmen schaffen und somit auch Grundlage für die Aktion \'Mehr Grün durch Flurbereinigung sein.', NULL, NULL, NULL, 49.690799, 8.075338, 'https://www.dlr.rlp.de/Landentwicklung/Verfahren/Alle/V21126', '2021-02-13 13:40:47', 1, 'Feststellung der UVP-Pflicht\r\nIn dem Vereinfachten Flurbereinigungsverfahren Ilbeheim ist der Bau gemeinschaftlicher und öffentlicher Anlagen im Sinne des Flurbereinigungsgesetzes vorgesehen.\r\nDas Vorhaben wird nach Einschätzung der Aufsichts- und Dienstleistungsdirektion aufgrund überschlägiger Prüfung unter Berücksichtigung der in der Anlage 3 UVPG aufgeführten Kriterien keine erheblichen nachteiligen Umweltauswirkungen haben, die nach § 25 UVPG zu berücksichtigen wären.\r\nEs besteht daher keine Verpflichtung zur Durchführung einer Umweltverträglichkeitsprüfung.'),
(3, 'Stadecken Projekt V', 91695, 'Vereinfachte Flurbereinigung nach §86(1) Nr.1', 'Auf Der Peterwiese 1', 'Stadecken', '55271', 'Das vereinfachte Flurbereinigungsverfahren Stadecken Projekt V ist gemäß § 86 Abs. 1 FlurbG angeordnet, um eine erforderlich gewordene Neuordnung des Grundbesitzes in einer bereits flurbereinigten Gemeinde durchzuführen.', NULL, NULL, NULL, 49.908035, 8.151889, 'https://www.dlr.rlp.de/Landentwicklung/Verfahren/Alle/V91694', '2021-02-13 13:56:34', 3, ''),
(4, 'Kottweiler-Schwanden', 21702, 'Vereinfachte Flurbereinigung nach §86(1) Nr.3', 'Grünewaldstraße 23', 'Kottweiler-Schwanden', '66879', 'Nur durch die Konzeption eines neuen Wegenetzes bzw. Befestigung einzelner vorhandener Hauptwirtschaftswege und Zusammenlegung des zersplitterten Grundbesitzes ist den heutigen Erfordernissen der Landwirtschaft gerecht zu werden.\r\nDie Flurstückszersplitterung bei den privaten und gemeidschaftlichen Waldflächen im Flurbereinigungsgebiet soll beseitigt und die tlw. fehlende Wegeanschlüsse sollen geschaffen werden.\r\nErgänzend zu diesen agrarstrukturellen und landespflegerischen Zielsetzungen sollen auch gemeindliche Planungen durch die Bodenordnung unterstützt werden.\r\nDurch die Ortsregulierung können die Ortslagengrundstücke in ihrem Zuschnitt und damit in ihrer Nutzung verbessert werden.\r\nWeiterhin sollen die rechtlichen Verhältnisse, insbesondere Überbauungen und alte Grunddienstbarkeiten wie Geh- und Fahrrechte, neu geordnet werden.', NULL, NULL, NULL, 49.477209, 7.541387, 'https://www.dlr.rlp.de/Landentwicklung/Verfahren/DLR-Westpfalz/V21702', '2021-02-13 16:29:05', 1, 'Bekanntgabe des Flurbereinigungsplanes und Anhörungstermin über den Inhalt des Flurbereinigungsplanes\r\nIm Vereinfachten Flurbereinigungsverfahren Kottweiler-Schwanden findet die Bekanntgabe des Flurbereinigungsplanes sowie der Anhörungstermin statt. Die Bekanntgabe erfolgt in der Sulzbachhalle, Reichenbacher Str. 66 C in 66879 Kottweiler-Schwanden getrennt nach Ordnungsnummernbereiche vom 14. bis 17. September 2020 und vom 21 bis 24 September 2020.\r\nDer Anhörungstermin findet am 28 September 2020 ebenfalls in der Sulzbachhalle statt. Für diesen Termin ist eine vorherige Anmeldung erforderlich. Es wird ausdrücklich auf die Vorgaben aufgrund der Covid-19-Pandemie wie Mindestabstand, Behelfs-Mund-Nasen-Maske, begrenzte Anzahl der Personen und Erfassung der Anwesenheit.\r\nDie Karte mit der neuen Feldeinteilung und weitere Informationen finden sie in der öffentlichen Bekanntmachung und dem Infoblatt unter Punkt 4 und 5.'),
(5, 'verfahren', 21126, 'Vereinfachte Flurbereinigung nach §86(1) Nr.1', 'Hauptstraße 47', 'Wiesbaden', '65197', 'Vereinfachte Flurbereinigung nach §86(1) Nr.1', NULL, NULL, NULL, 49.690799, 8.075338, 'https://www.dlr.rlp.de/Internet/global/inetcntr.nsf/dlr_web_full.xsp?src=SI93KX5EQC&p1=8571ARFKW1&p3=QK595PD880&p4=78HV82A9P5&Highlight=0,', '2021-02-14 01:59:36', 2, 'Vereinfachte Flurbereinigung nach §86(1) Nr.1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CBD3D1FC8` (`verfahren_id`);

--
-- Index pour la table `dienstsitz`
--
ALTER TABLE `dienstsitz`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- Index pour la table `verfahren`
--
ALTER TABLE `verfahren`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E7D4C3F918F740E1` (`dienstsitz_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `dienstsitz`
--
ALTER TABLE `dienstsitz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `verfahren`
--
ALTER TABLE `verfahren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526CBD3D1FC8` FOREIGN KEY (`verfahren_id`) REFERENCES `verfahren` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `verfahren`
--
ALTER TABLE `verfahren`
  ADD CONSTRAINT `FK_E7D4C3F918F740E1` FOREIGN KEY (`dienstsitz_id`) REFERENCES `dienstsitz` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
