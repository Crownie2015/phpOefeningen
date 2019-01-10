-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 jan 2019 om 12:50
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_reacties`
--

CREATE TABLE `tbl_reacties` (
  `id` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `boodschap` varchar(255) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_reacties`
--

INSERT INTO `tbl_reacties` (`id`, `auteur`, `boodschap`, `datum`) VALUES
(1, 'IK', 'qsqqq', '2019-01-07 10:08:19'),
(2, 'Yoerik', 'xxxxx', '2019-01-07 10:08:59'),
(3, '', 'dddfdfdf', '2019-01-07 10:52:22'),
(4, 'IK', 'ssss', '2019-01-07 10:58:59'),
(5, 'IK', 'sdsdsdsd', '2019-01-07 11:01:17'),
(6, 'IK', 'fffff', '2019-01-07 11:03:24'),
(7, 'IK', 'fffff', '2019-01-07 11:03:54'),
(8, 'Yoerik', 'Dit is een test van Yoerik', '2019-01-07 11:04:23'),
(9, 'Yoerik', 'KKKK', '2019-01-07 11:10:23'),
(10, 'IK', 'Nog een test', '2019-01-07 11:18:49'),
(11, 'Yoerik2', 'ccwxwcxwxc', '2019-01-07 11:19:55'),
(12, 'IK', 'fdgdgdggddgf', '2019-01-07 11:34:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_registratie`
--

CREATE TABLE `tbl_registratie` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_registratie`
--

INSERT INTO `tbl_registratie` (`id`, `username`, `email`, `password`) VALUES
(1, 'Yoerik', 'yoerikdejans@msn.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'IK', 'ik@ik.be', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'ik2', 'ik2@ik2.be', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'IK2', 'ik2@IK2.be', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Yoerik2', 'yoerik@yoerik.be', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_reacties`
--
ALTER TABLE `tbl_reacties`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_registratie`
--
ALTER TABLE `tbl_registratie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_reacties`
--
ALTER TABLE `tbl_reacties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `tbl_registratie`
--
ALTER TABLE `tbl_registratie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
