-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Décembre 2017 à 11:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `has`
--

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment`
--

CREATE TABLE `has_apartment` (
  `Apartment_id` int(11) NOT NULL,
  `address` varchar(60) COLLATE utf8_bin NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `size_appartment` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment_room`
--

CREATE TABLE `has_apartment_room` (
  `Apartment_id_room` int(11) NOT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sensor_id` int(11) DEFAULT NULL,
  `status_sensor` tinyint(1) DEFAULT NULL,
  `service_status` tinyint(1) DEFAULT NULL,
  `sensor_value` varchar(40) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_productdetail`
--

CREATE TABLE `has_productdetail` (
  `ProductID` varchar(20) COLLATE utf8_bin NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_roomtype`
--

CREATE TABLE `has_roomtype` (
  `id` int(11) NOT NULL,
  `room_type` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_sensoravailable`
--

CREATE TABLE `has_sensoravailable` (
  `sensorId` int(11) NOT NULL,
  `sensorName` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_user`
--

CREATE TABLE `has_user` (
  `ID` int(11) NOT NULL,
  `FirstName` text COLLATE utf8_bin NOT NULL,
  `LastName` text COLLATE utf8_bin NOT NULL,
  `Email` text COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  `Dob` date NOT NULL,
  `User_Type` tinyint(1) NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `User_Status` tinyint(1) NOT NULL,
  `Product_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `haveapartment`
--

CREATE TABLE `haveapartment` (
  `ID` int(11) NOT NULL,
  `Apartment_id` int(11) DEFAULT NULL,
  `apartment_room_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `has_apartment`
--
ALTER TABLE `has_apartment`
  ADD PRIMARY KEY (`Apartment_id`);

--
-- Index pour la table `has_apartment_room`
--
ALTER TABLE `has_apartment_room`
  ADD PRIMARY KEY (`Apartment_id_room`);

--
-- Index pour la table `has_productdetail`
--
ALTER TABLE `has_productdetail`
  ADD PRIMARY KEY (`ProductID`);

--
-- Index pour la table `has_roomtype`
--
ALTER TABLE `has_roomtype`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `has_sensoravailable`
--
ALTER TABLE `has_sensoravailable`
  ADD PRIMARY KEY (`sensorId`);

--
-- Index pour la table `has_user`
--
ALTER TABLE `has_user`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `haveapartment`
--
ALTER TABLE `haveapartment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `has_apartment`
--
ALTER TABLE `has_apartment`
  MODIFY `Apartment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `has_roomtype`
--
ALTER TABLE `has_roomtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `has_sensoravailable`
--
ALTER TABLE `has_sensoravailable`
  MODIFY `sensorId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `has_user`
--
ALTER TABLE `has_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
