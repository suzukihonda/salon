-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 26 Wrz 2015, 01:01
-- Wersja serwera: 5.5.44-0ubuntu0.14.04.1
-- Wersja PHP: 5.6.13-1+deb.sury.org~trusty+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `salon`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `motocykle`
--

CREATE TABLE IF NOT EXISTS `motocykle` (
  `id` int(11) NOT NULL,
  `model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marka` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `rok` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `motocykle`
--

INSERT INTO `motocykle` (`id`, `model`, `marka`, `pojemnosc`, `rok`) VALUES
(1, 'GSXR', 'Suzuki', 1000, '2015-12-19'),
(2, 'F3', 'Honda', 600, '1998-09-16'),
(3, 'CRF', 'Honda', 450, '0000-00-00'),
(4, 'CRF', 'Honda', 450, '0000-00-00'),
(5, 'CRF', 'Honda', 450, '0000-00-00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `motocykle`
--
ALTER TABLE `motocykle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `motocykle`
--
ALTER TABLE `motocykle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;