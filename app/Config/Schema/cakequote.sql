-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 25 Février 2013 à 13:26
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakequote`
--

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Japon'),
(2, 'Argentine'),
(3, 'France');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'administrators'),
(2, 'moderators'),
(3, 'editors');

-- --------------------------------------------------------

--
-- Structure de la table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` char(15) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `country_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `updated` (`updated`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `quotes`
--

INSERT INTO `quotes` (`id`, `slug`, `title`, `body`, `user_id`, `created`, `updated`, `country_id`) VALUES
(1, 'hasta', 'Le silence est d''or', 'Dans une conversation en Japonais, il n''est pas rare d''être confronté à de longues pauses. Celles-ci peuvent paraitre interminables pour un Occidental mais chacun les respectera en se rappelant le fameux adage...', 1, '2013-02-19 14:06:17', '2013-02-24 19:34:32', 1),
(2, 'carpe-diem', 'A demi-mot', 'Lors des conversations, on peut signifier  certains sentiments en émettant des sons précis. Ainsi indiquer son accord ou désaccord prendra la forme d''un "hm" bouche fermée, plus ou moins long selon la réponse.', 1, '2013-02-19 15:19:09', '2013-02-24 19:34:47', 1),
(3, 'wtf', 'Savoir dire non...', 'Décliner une invitation ou répondre par la négative se fait sans recours au "non" direct ("iie"). On dira "Muzukashii" ("C''est difficile") ou "Sumimasen" ("Désolé"). Si l''on vous propose de vous reservir à table, un "Kekkodesu" ("C''est parfait") contentera votre hôte sans le vexer.', 2, '2013-02-19 15:21:22', '2013-02-22 12:08:11', 1),
(4, 'mieux-vaut', 'Peut-être bien que non', 'les japonais emploient très rarement le mot "iie"- un "non" ferme et définitif-, considéré comme malpoli. Ce "non" ne sera généralement utilisé que pour jouer de la fausse modestie, par convenance, suite à un compliment.', 2, '2013-02-19 15:21:18', '2013-02-22 12:05:41', 1),
(5, 'i-am-your-fathe', '... avec les mains', 'Décliner une proposition se traduit par une agitation légère de la main droite ouverte au niveau du nez, la paume face au coté gauche.', 2, '2013-02-19 15:21:58', '2013-02-22 12:09:16', 1),
(8, NULL, 'Hep!', 'Pour appeler quelqu''un ou un taxi, on lui fait signe de s''approcher avec la main, comme si on éventait quelque chose devant soi, les doigts serrés et la paume vers le bas.', 3, '2013-02-22 12:10:08', '2013-02-22 12:10:08', 1),
(9, NULL, 'Un petit doigt qui en dit long', 'Quand on évoque sa petite amie dans une conversation, elle est symbolisée en montrant le petit doigt.', 6, '2013-02-22 12:10:41', '2013-02-24 19:33:55', 1),
(10, NULL, 'Malaise', 'Quand on éprouve une certaine gêne face à d''autrees personnes, on se frotte le crâne avec la main droite en prenant une expression faciale de réflexion.', 4, '2013-02-22 12:11:30', '2013-02-22 12:11:30', 1),
(11, NULL, 'Cachez ce rire', 'Quand une femme rit en présence d''autres personnes, il est de bon ton qu''elle cache sa bouche avec la main.', 4, '2013-02-22 12:12:12', '2013-02-22 12:12:12', 1),
(12, NULL, 'Tout chiffre a son signe', 'Pour communiquer un chiffre avec les mains, "un" est désigné par l''index et "cinq" par la main ouverte, le pouce arrivant le dernier.', 6, '2013-02-22 12:13:04', '2013-02-22 12:13:04', 1),
(17, NULL, 'Langues Latine', 'En Argentine, même si l''espagnol est la seule langue officielle au niveau fédéral, quelques centaines d’indigènes parlent encore des langues amérindiennes : le quechua dans les régions andines du Nord-Ouest et le guarani dans les provinces de Misiones et de Corrientes (le guarani est co-officiel dans ces provinces).\r\nLa langue italienne est omniprésente en Argentine, et l''accent italianisant prévaut au quotidien.\r\nBuenos Aires possède son propre argot, le lunfardo, dont l''histoire est liée à celle du tango.', 10, '2013-02-24 19:42:12', '2013-02-24 19:42:12', 2),
(18, NULL, 'Le "mate" argentin', 'Le maté est une infusion traditionnelle issu de la culture des indiens Guaranis consommée en Argentine. C''est une part très importante de la culture, et il est fréquent de voir des personnes boire le maté dans la rue. La plante utilisée, la yerba maté, parfois appelé « thé du Paraguay », « thé des Jésuites » ou « thé du Brésil », est une espèce sud-américaine dont les feuilles, que l''on torréfie et pulvérise, fournissent, infusées dans l''eau chaude, une boisson stimulante, aux effets semblables à ceux du café ou du thé. Cette boisson, consommée chaude et parfois froide, de goût fort et amer, est préparée avec des feuilles de yerba maté. Elle se boit dans une calebasse grâce à un tube métallique qui sert aussi de filtre, la bombilla. Pour le savourer, les gauchos s''organisent en cercle où le maté passe de main en main selon un rituel très précis qui invite par exemple les participants à faire circuler la calebasse dans le sens anti-horaire afin de faire passer le temps moins vite. Cette boisson traditionnelle symbolise par ses rites de consommation la fraternité et l''hospitalité des gauchos.', 10, '2013-02-24 19:44:22', '2013-02-24 19:44:22', 2),
(19, NULL, 'Fleur d''Argentine', 'La fleur nationale de l''Argentine est le ceibo, dont le nom scientifique est Erythrina crista-galli. Elle fut déclarée comme telle le 23 décembre 1942 par le décret 13 847 du pouvoir exécutif.', 10, '2013-02-24 19:45:12', '2013-02-24 19:45:12', 2),
(20, NULL, 'Salutations', 'Contrairement à la croyance populaire, la poignée de main est la forme la plus commune de salutation, la bise est en général réservée à la famille, aux amis proches et collègues. Un autre aspect déroutant de la bise est qu''elle change selon les régions. Certains vous embrasseront deux fois sur les deux joues, alors que d''autres vous embrasseront seulement une fois sur les deux joues. Le meilleur conseil est d''observer ce qui se fait et de suivre l''exemple.', 10, '2013-02-24 19:48:10', '2013-02-24 19:48:10', 3),
(21, NULL, 'Usages du dîner', 'Apportez toujours un petit cadeau pour l''hôtesse: des fleurs, des chocolats, une petite plante ou une bonne bouteille de vin du pays seront toujours appréciés.', 10, '2013-02-24 19:49:09', '2013-02-24 19:49:09', 3),
(22, NULL, 'Contact visuel', 'Dans de nombreuses cultures, les contacts visuels sont très personnels et cela peut paraître étrange ou même déplaisant. En France, le contact visuel est un signe d’égalité et de politesse. En parlant avec quelqu’un, il est impoli de NE PAS se regarder dans les yeux.', 10, '2013-02-24 20:06:34', '2013-02-24 20:06:34', 3),
(23, NULL, 'Heures argentines', 'Les horaires argentins ressemblent à ceux de leurs cousins espagnols. Entre 13 h et 15/16 h, c''est l''heure sacrée de la sieste. Le dîner est servi vers 21/22 h.', 10, '2013-02-24 20:09:31', '2013-02-24 20:09:31', 2),
(24, NULL, 'Croyances', 'En Argentine, on trouve d''innombrables petits autels le long des routes, illustrant le culte des "santos", ces saints populaires consacrés par le peuple, devenus légendaires parce qu''ils étaient humains, pauvres, coléreux ou encore insoumis.Parmi les santos préférés des Argentins : le Gauchito Gil (le Robin des Bois de Corrientes, dont l''autel, une niche rouge recouverte de fleurs et de foulards rouges claquant au vent, est le plus récurrent sur les routes) et la Difunta Correa, de San Juan, dont l''autel est entouré de bouteilles remplies d''eau, en souvenir de sa mort (elle est morte de soif dans le désert, à la recherche de son mari parti en guerre ; on a retrouvé sur son sein, vivant, l''enfant qu''elle allaitait).', 6, '2013-02-25 11:35:48', '2013-02-25 11:35:48', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `password` char(50) DEFAULT NULL,
  `email` char(200) NOT NULL,
  `group_id` int(10) unsigned NOT NULL DEFAULT '3',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`, `created`, `updated`) VALUES
(1, 'admin', 'pass', 'admin@admin.com', 1, '2013-02-19 13:42:43', NULL),
(2, 'bob', 'pass', 'bob@bob.com', 2, '2013-02-19 15:19:59', NULL),
(3, 'alice', '127c8225418bc65b8c72ef506f872bb7638bd7ba', 'alice@alice.com', 3, '2013-02-19 15:20:16', '2013-02-21 12:38:58'),
(4, 'charlie', 'pass', 'charlie@charlie.com', 3, '2013-02-19 15:20:32', NULL),
(5, 'modo', 'e28a4bde27090352f2fd5bcbaead71ac17090451', 'ed@ouard.sastre', 2, '2013-02-20 20:00:31', '2013-02-20 20:00:31'),
(6, 'Dou', 'e28a4bde27090352f2fd5bcbaead71ac17090451', 'dou@gmail.com', 3, '2013-02-20 20:10:14', '2013-02-20 20:10:14'),
(7, 'pwit', 'e28a4bde27090352f2fd5bcbaead71ac17090451', 'pwit@gmail.com', 3, '2013-02-21 12:49:40', '2013-02-21 12:49:40'),
(10, 'Nico', 'e28a4bde27090352f2fd5bcbaead71ac17090451', 'nico@gmail.com', 3, '2013-02-22 12:26:22', '2013-02-22 12:26:22'),
(9, 'admiin', 'e28a4bde27090352f2fd5bcbaead71ac17090451', 'admin@gmail.com', 1, '2013-02-21 13:30:10', '2013-02-21 13:30:10');
