-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Janvier 2018 à 14:44
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `house`
--

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment`
--

CREATE TABLE `has_apartment` (
  `Apartment_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Area` text COLLATE utf8_bin NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `NumPerson` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment_room`
--

CREATE TABLE `has_apartment_room` (
  `room_type_id` int(11) DEFAULT NULL,
  `room_type` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Apartment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment_sensor_history`
--

CREATE TABLE `has_apartment_sensor_history` (
  `Apartment_sensor_id` int(11) NOT NULL,
  `sensor_name` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `status_sensor` tinyint(1) DEFAULT NULL,
  `timeLoad` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_apar_room_sensor`
--

CREATE TABLE `has_apar_room_sensor` (
  `sensor_id` int(11) DEFAULT NULL,
  `Apartment_id` int(11) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `status_sensor` tinyint(1) DEFAULT NULL,
  `service_status` tinyint(1) DEFAULT NULL,
  `sensor_value` varchar(40) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `has_productdetail`
--

CREATE TABLE `has_productdetail` (
  `ProductID` varchar(25) COLLATE utf8_bin NOT NULL,
  `Status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_productdetail`
--

INSERT INTO `has_productdetail` (`ProductID`, `Status`) VALUES
('123456789', 1),
('887170410', 0),
('891152954', 1);

-- --------------------------------------------------------

--
-- Structure de la table `has_roomtype`
--

CREATE TABLE `has_roomtype` (
  `room_type_id` int(11) NOT NULL,
  `room_type` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_roomtype`
--

INSERT INTO `has_roomtype` (`room_type_id`, `room_type`) VALUES
(1, 'Living Room'),
(2, 'Kitchen'),
(3, 'Bedroom'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Structure de la table `has_sensoravailable`
--

CREATE TABLE `has_sensoravailable` (
  `sensorid` int(11) NOT NULL,
  `sensorName` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_sensoravailable`
--

INSERT INTO `has_sensoravailable` (`sensorid`, `sensorName`) VALUES
(1, 'Door Sensor'),
(2, 'Window Sensor'),
(3, 'Heating Sensor'),
(4, 'light Sensor'),
(5, 'Smoke Sensor');

-- --------------------------------------------------------

--
-- Structure de la table `has_user`
--

CREATE TABLE `has_user` (
  `User_ID` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Dob` date NOT NULL,
  `Address` varchar(200) COLLATE utf8_bin NOT NULL,
  `ProductID` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_user`
--

INSERT INTO `has_user` (`User_ID`, `FirstName`, `LastName`, `Email`, `Password`, `Dob`, `Address`, `ProductID`) VALUES
(33, 'Yassine', 'Hadari', 'yassinehadari12@gmail.com', 'ii', '2018-01-05', '69 Rue de la Republique', '123456789'),
(34, 'jknjnjkn', 'Hadari', 'yassinehadari12@gmail.fr', 'ii', '2018-01-12', '69 Rue de la Republique', '891152954');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `has_apartment`
--
ALTER TABLE `has_apartment`
  ADD PRIMARY KEY (`Apartment_id`);

--
-- Index pour la table `has_productdetail`
--
ALTER TABLE `has_productdetail`
  ADD PRIMARY KEY (`ProductID`);

--
-- Index pour la table `has_roomtype`
--
ALTER TABLE `has_roomtype`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Index pour la table `has_sensoravailable`
--
ALTER TABLE `has_sensoravailable`
  ADD PRIMARY KEY (`sensorid`);

--
-- Index pour la table `has_user`
--
ALTER TABLE `has_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `has_user`
--
ALTER TABLE `has_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
