-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Cze 2022, 14:32
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shoop_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(64) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `Name`) VALUES
(1, 'Tablety Graficzne'),
(2, 'Zaestaw Farb');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `Id` bigint(20) NOT NULL,
  `Obraz` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `Category_id` bigint(20) NOT NULL,
  `Nazwa` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `Cenna` int(11) NOT NULL,
  `Opis` mediumtext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`Id`, `Obraz`, `Category_id`, `Nazwa`, `Cenna`, `Opis`) VALUES
(6, 'produkty/tablet3.jpg', 1, 'Kamvas 18', 3000, 'lorem dorem ipsum'),
(7, 'produkty/Tablet5.jpg', 1, 'tab', 3333, 'fsfsfsfs'),
(8, 'produkty/tablet2.jpg', 1, 'tab', 8888, 'dkdmskdmskdmsdksmds\n'),
(9, 'produkty/tablet1.jpg', 1, 'tablet', 1111111, 'dksodfksdsodkso'),
(14, 'produkty/paintset.jpg', 1, 'farby', 200, 'farby');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `Surname` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `Password` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `Role` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `Name`, `Surname`, `Email`, `Password`, `Role`) VALUES
(1, 'Dawid', 'Gach', 'ang@ang.ang', 'haslo', 'Admin'),
(2, 'Pawel', 'Pawlowski', 'piw@paw.com', 'Password', 'Worker'),
(6, 'Dawid', 'Gach', 'en@en.pl', 'haslo', 'User'),
(7, 'User', '', '32233', 'haslo', 'User');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Name` (`Name`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `Nazwa` (`Nazwa`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Surname` (`Surname`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Role` (`Role`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
