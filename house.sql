-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Janvier 2018 à 15:20
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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`) VALUES
(1, 'adminadmin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `has_apartment`
--

CREATE TABLE `has_apartment` (
  `Apartment_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `Contry` text COLLATE utf8_bin,
  `City` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `total_rooms` int(11) DEFAULT NULL,
  `NumPerson` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_apartment`
--

INSERT INTO `has_apartment` (`Apartment_id`, `address`, `Contry`, `City`, `total_rooms`, `NumPerson`, `user_id`) VALUES
(24, '69 Rue de la Republique, A325', 'France', 'Montreuil', 6, 1, 57);

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
('115765380', 1),
('171081542', 0);

-- --------------------------------------------------------

--
-- Structure de la table `has_user`
--

CREATE TABLE `has_user` (
  `User_ID` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(256) COLLATE utf8_bin NOT NULL,
  `Dob` date NOT NULL,
  `Address` varchar(200) COLLATE utf8_bin NOT NULL,
  `Photo` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT 'vide',
  `ProductID` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `has_user`
--

INSERT INTO `has_user` (`User_ID`, `FirstName`, `LastName`, `Email`, `Password`, `Dob`, `Address`, `Photo`, `ProductID`) VALUES
(57, 'Yassine', 'Hadari', 'yassinehadari12@gmail.com', '$2y$10$testbjbbbbbbujjjjbkjbe/P7pDR2WaH7sA4bvobUyXxLogHMufAS', '2018-01-04', '69 Rue de la Republique, A325', '', '115765380');

-- --------------------------------------------------------

--
-- Structure de la table `onoffsensors`
--

CREATE TABLE `onoffsensors` (
  `ID` int(11) NOT NULL,
  `KitchenDoor` int(11) NOT NULL DEFAULT '0',
  `KitchenWindow` int(11) NOT NULL DEFAULT '0',
  `KitchenHeating` int(11) NOT NULL DEFAULT '0',
  `KitchenLight` int(11) NOT NULL DEFAULT '0',
  `KitchenSmook` int(11) NOT NULL DEFAULT '0',
  `LivingRoomDoor` int(11) NOT NULL DEFAULT '0',
  `LivingRoomWindow` int(11) NOT NULL DEFAULT '0',
  `LivingRoomHeating` int(11) NOT NULL DEFAULT '0',
  `LivingRoomLight` int(11) NOT NULL DEFAULT '0',
  `LivingRoomSmook` int(11) NOT NULL DEFAULT '0',
  `BedRoomDoor` int(11) NOT NULL DEFAULT '0',
  `BedRoomWindow` int(11) NOT NULL DEFAULT '0',
  `BedRoomHeating` int(11) NOT NULL DEFAULT '0',
  `BedRoomLight` int(11) NOT NULL DEFAULT '0',
  `BedRoomSmook` int(11) NOT NULL DEFAULT '0',
  `OtherRoomsDoor` int(11) NOT NULL DEFAULT '0',
  `OtherRoomsWindow` int(11) NOT NULL DEFAULT '0',
  `OtherRoomsHeating` int(11) NOT NULL DEFAULT '0',
  `OtherRoomsLight` int(11) NOT NULL DEFAULT '0',
  `OtherRoomsSmook` int(11) NOT NULL DEFAULT '0',
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `onoffsensors`
--

INSERT INTO `onoffsensors` (`ID`, `KitchenDoor`, `KitchenWindow`, `KitchenHeating`, `KitchenLight`, `KitchenSmook`, `LivingRoomDoor`, `LivingRoomWindow`, `LivingRoomHeating`, `LivingRoomLight`, `LivingRoomSmook`, `BedRoomDoor`, `BedRoomWindow`, `BedRoomHeating`, `BedRoomLight`, `BedRoomSmook`, `OtherRoomsDoor`, `OtherRoomsWindow`, `OtherRoomsHeating`, `OtherRoomsLight`, `OtherRoomsSmook`, `UserId`) VALUES
(11, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 57);

-- --------------------------------------------------------

--
-- Structure de la table `roomsnum`
--

CREATE TABLE `roomsnum` (
  `ID` int(11) NOT NULL,
  `LivingRoom` int(11) NOT NULL DEFAULT '0',
  `BedRoom` int(11) NOT NULL DEFAULT '0',
  `Kitchen` int(11) NOT NULL DEFAULT '0',
  `OtherRooms` int(11) NOT NULL DEFAULT '0',
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `roomsnum`
--

INSERT INTO `roomsnum` (`ID`, `LivingRoom`, `BedRoom`, `Kitchen`, `OtherRooms`, `UserId`) VALUES
(18, 2, 4, 1, 2, 57);

-- --------------------------------------------------------

--
-- Structure de la table `roomssensors`
--

CREATE TABLE `roomssensors` (
  `ID` int(11) NOT NULL,
  `LivingRoomDoor` int(1) NOT NULL DEFAULT '0',
  `LivingRoomWindow` int(1) NOT NULL DEFAULT '0',
  `LivingRoomHeating` int(1) NOT NULL DEFAULT '0',
  `LivingRoomLight` int(1) NOT NULL DEFAULT '0',
  `LivingRoomSmook` int(1) NOT NULL DEFAULT '0',
  `BedRoomDoor` int(1) NOT NULL DEFAULT '0',
  `BedRoomWindow` int(1) NOT NULL DEFAULT '0',
  `BedRoomHeating` int(1) NOT NULL DEFAULT '0',
  `BedRoomLight` int(1) NOT NULL DEFAULT '0',
  `BedRoomSmook` int(1) NOT NULL DEFAULT '0',
  `KitchenDoor` int(1) NOT NULL DEFAULT '0',
  `KitchenWindow` int(1) NOT NULL DEFAULT '0',
  `KitchenHeating` int(1) NOT NULL DEFAULT '0',
  `KitchenLight` int(1) NOT NULL DEFAULT '0',
  `KitchenSmook` int(1) NOT NULL DEFAULT '0',
  `OtherRoomsDoor` int(1) NOT NULL DEFAULT '0',
  `OtherRoomsWindow` int(1) NOT NULL DEFAULT '0',
  `OtherRoomsHeating` int(1) NOT NULL DEFAULT '0',
  `OtherRoomsLight` int(1) NOT NULL DEFAULT '0',
  `OtherRoomsSmook` int(1) NOT NULL DEFAULT '0',
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `roomssensors`
--

INSERT INTO `roomssensors` (`ID`, `LivingRoomDoor`, `LivingRoomWindow`, `LivingRoomHeating`, `LivingRoomLight`, `LivingRoomSmook`, `BedRoomDoor`, `BedRoomWindow`, `BedRoomHeating`, `BedRoomLight`, `BedRoomSmook`, `KitchenDoor`, `KitchenWindow`, `KitchenHeating`, `KitchenLight`, `KitchenSmook`, `OtherRoomsDoor`, `OtherRoomsWindow`, `OtherRoomsHeating`, `OtherRoomsLight`, `OtherRoomsSmook`, `UserId`) VALUES
(14, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 57);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

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
-- Index pour la table `has_user`
--
ALTER TABLE `has_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Index pour la table `onoffsensors`
--
ALTER TABLE `onoffsensors`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `roomsnum`
--
ALTER TABLE `roomsnum`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `roomssensors`
--
ALTER TABLE `roomssensors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `has_apartment`
--
ALTER TABLE `has_apartment`
  MODIFY `Apartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `has_user`
--
ALTER TABLE `has_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT pour la table `onoffsensors`
--
ALTER TABLE `onoffsensors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `roomsnum`
--
ALTER TABLE `roomsnum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `roomssensors`
--
ALTER TABLE `roomssensors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
