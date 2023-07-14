-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2023. Júl 14. 12:09
-- Kiszolgáló verziója: 8.0.31
-- PHP verzió: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `composite`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adminok`
--

DROP TABLE IF EXISTS `adminok`;
CREATE TABLE IF NOT EXISTS `adminok` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `adminok`
--

INSERT INTO `adminok` (`id`, `nev`, `jelszo`) VALUES
(1, 'Péter', 'Admin1'),
(2, 'Composite', 'Admin2');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hibajegyek`
--

DROP TABLE IF EXISTS `hibajegyek`;
CREATE TABLE IF NOT EXISTS `hibajegyek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ugyfel_id` int NOT NULL,
  `tartalom` text NOT NULL,
  `esedekesseg` datetime NOT NULL,
  `letrehozva` datetime NOT NULL,
  `targy` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `hibajegyek`
--

INSERT INTO `hibajegyek` (`id`, `ugyfel_id`, `tartalom`, `esedekesseg`, `letrehozva`, `targy`) VALUES
(8, 2, 'Belépés után hibaüzenet a képernyőn', '2023-07-18 10:04:22', '2023-07-18 10:04:22', 'Hibaüzenet'),
(7, 2, 'Bejelentkezés nem működik', '2023-07-18 10:04:08', '2023-07-18 10:04:08', 'Bejelentés'),
(9, 3, 'Nem elérhető az oldal', '2023-07-18 11:54:07', '2023-07-18 11:54:07', 'Hibajegy');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ugyfelek`
--

DROP TABLE IF EXISTS `ugyfelek`;
CREATE TABLE IF NOT EXISTS `ugyfelek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `ugyfelek`
--

INSERT INTO `ugyfelek` (`id`, `nev`, `email`) VALUES
(2, 'Hibajegy Kft.', 'czpth01@gmail.com'),
(3, 'Másik Cég Kft.', 'czpth01@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
