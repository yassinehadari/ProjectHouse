-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 09 Décembre 2017 à 21:57
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
  `address` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `total_rooms` int(11) DEFAULT NULL,
  `size_apartment` int(11) DEFAULT NULL,
  `apartment_room_id` int(11) DEFAULT NULL,
  `Apartment_sensor_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment_room`
--

CREATE TABLE `has_apartment_room` (
  `Apartment_room_id` int(11) NOT NULL,
  `room_type` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Apartment_sensor_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment_sensor_history`
--

CREATE TABLE `has_apartment_sensor_history` (
  `Apartment_sensor_id` int(11) NOT NULL,
  `sensor_name` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `status_sensor` tinyint(1) DEFAULT NULL,
  `timeLoad` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apar_room_sensor`
--

CREATE TABLE `has_apar_room_sensor` (
  `Apartment_Room_Sensor_id` int(11) NOT NULL,
  `Sensor_Name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `status_sensor` tinyint(1) DEFAULT NULL,
  `service_status` tinyint(1) DEFAULT NULL,
  `sensor_value` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apatmentroom_aparroomsensor`
--

CREATE TABLE `has_apatmentroom_aparroomsensor` (
  `ID` int(11) NOT NULL,
  `Apartment_room_id` int(11) DEFAULT NULL,
  `Apartment_Room_Sensor_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_productdetail`
--

CREATE TABLE `has_productdetail` (
  `Product_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_roomtype`
--

CREATE TABLE `has_roomtype` (
  `Roomtype_id` int(11) NOT NULL,
  `room_type` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `Apartment_room_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_sensoravailable`
--

CREATE TABLE `has_sensoravailable` (
  `sensor_id` int(11) NOT NULL,
  `sensorname` varchar(60) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_sensora_aparroom`
--

CREATE TABLE `has_sensora_aparroom` (
  `ID` int(11) NOT NULL,
  `sensor_id` int(11) DEFAULT NULL,
  `Apartment_Room_Sensor_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_user`
--

CREATE TABLE `has_user` (
  `User_id` int(11) NOT NULL,
  `f_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `l_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `MotDePasse` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `User_Type` tinyint(1) DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `User_Status` tinyint(1) DEFAULT NULL,
  `Product_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Apartment_id` int(11) DEFAULT NULL
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
  ADD PRIMARY KEY (`Apartment_room_id`);

--
-- Index pour la table `has_apartment_sensor_history`
--
ALTER TABLE `has_apartment_sensor_history`
  ADD PRIMARY KEY (`Apartment_sensor_id`);

--
-- Index pour la table `has_apar_room_sensor`
--
ALTER TABLE `has_apar_room_sensor`
  ADD PRIMARY KEY (`Apartment_Room_Sensor_id`);

--
-- Index pour la table `has_apatmentroom_aparroomsensor`
--
ALTER TABLE `has_apatmentroom_aparroomsensor`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `has_productdetail`
--
ALTER TABLE `has_productdetail`
  ADD PRIMARY KEY (`Product_id`);

--
-- Index pour la table `has_roomtype`
--
ALTER TABLE `has_roomtype`
  ADD PRIMARY KEY (`Roomtype_id`);

--
-- Index pour la table `has_sensoravailable`
--
ALTER TABLE `has_sensoravailable`
  ADD PRIMARY KEY (`sensor_id`);

--
-- Index pour la table `has_sensora_aparroom`
--
ALTER TABLE `has_sensora_aparroom`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `has_user`
--
ALTER TABLE `has_user`
  ADD PRIMARY KEY (`User_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
