-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 juin 2020 à 20:59
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `undefeated`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `subject`, `content`) VALUES
('AHED BAHRI', 'ahedelbahri@gmail.com', 21210125, 'Events', 'I would love to know more about events'),
('Khaalid alMowad', 'khalid@mail.free', 20321658, 'Cost', 'cost of family group'),
('MARAM Donia', 'donii@gmail.com', 54125632, 'Personal Coach', 'Can i have personal coach ?'),
('Oro', 'doro@gmail.com', 23546852, 'Price', 'I wanna know more about the price, Thanks.'),
('SAMI EZZEDINE', 'ezzedine@yahoo.fr', 97546210, 'Discount', 'Is there any discount on a plus partner ?'),
('Sayyidah Tawil', 'tawil@free.edu', 97201563, 'weekends', 'full on weekend?'),
('Shihab Atallah', 'shihab@outlook.fr', 23652147, 'Coach', 'private one ?'),
('testlachya', 'lachya@yahoo.fr', 2147483647, 'TESSTT', 'ssdlkfhdslk'),
('Yassine', 'ezzine@yahoo.fr', 21369852, 'Monthly Subs', 'Family price would costless ?');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `log` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`username`, `log`, `mdp`) VALUES
('AHED BAHRI', 'ahedelbahri@gmail.com', '26101996'),
('Bahri', 'myapp@gmail.com', '26101996'),
('doudi', 'ahed@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `adress`, `tel`, `upload`) VALUES
(16, 'maram', 'maram@you.fr', 55321456, 'tcp.png'),
(28, 'Mohamed', 'hama94@gmail.com', 54120325, 'api.jpg'),
(31, 'Ala', 'ala@yahoo.fr', 23012359, 'editors.PNG'),
(36, 'macro', 'macro@laser.fe', 97546852, '1200px-Client-server-model.svg.png'),
(38, 'Bahri', 'bahri@test.tn', 20325698, 'html.jpg'),
(39, 'TicketErr', 'Voila@voial.fr', 32321059, 'unnamed.png'),
(40, 'ticketReserved', 'ticketReserved@test.', 31256985, 'servers.jpg'),
(41, 'ssq', 'sqsq@dfdf.fd', 6565656, 'servers.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
