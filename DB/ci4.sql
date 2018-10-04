-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 18:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_Usuarios` int(11) NOT NULL,
  `Usuarios_email` varchar(70) DEFAULT NULL,
  `Usuarios_password` varchar(70) DEFAULT NULL COMMENT 'Tabla de registros de usuarios.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id_Usuarios`, `Usuarios_email`, `Usuarios_password`) VALUES
(1, 'user1@gmail.com', '$2y$12$kI1ovb5IvlneUYKhEDegpucmpetdOACr6QT5NLkGeEMTFW01O1oPq'),
(2, 'user2@gmail.com', '$2y$12$VU7stMF/HPPlQDFMPv2OVOO/mpQh88GTwrU7aDIpEqCBT17wDVQmW'),
(3, 'user3@gmail.com', '$2y$12$HhmwDP9ld8hJ8rMzP7Et1eIEEWDvj8lTAiQsG.P42X2jf11SBSUHy'),
(4, 'user4@gmail.com', '$2y$12$N4E//WXGP4x8TlOLYFCGUOHoQbX9QXQBbBAIyWp5ncxS2pm9zmSEC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_Usuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
