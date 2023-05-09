-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 01. 17:39
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `afp2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `answer`
--

CREATE TABLE `answer` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(65) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `is_correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `answer`
--

INSERT INTO `answer` (`quiz_id`, `quiz_name`, `question_id`, `question`, `answer`, `is_correct`) VALUES
(0, '', 0, 't2 ', '3', 0),
(0, '', 0, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '1', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '1', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 59, 't2 ', '1', 0),
(0, ' ', 59, 't2 ', '4', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 89, 't2 ', '3', 0),
(0, ' ', 89, 't2 ', '3', 0),
(0, ' ', 89, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 89, 't2 ', '3', 0),
(0, ' ', 59, 't2 ', '2', 0),
(0, ' ', 89, 't2 ', '3', 0),
(0, ' ', 89, 't2 ', '4', 0),
(0, 'Quiz címe ', 57, ' ', '', 0),
(0, 'test ', 26, '2 ', '3', 0),
(0, 'test ', 69, 'test ', '4', 0),
(0, 'test ', 69, 'test ', '4', 0),
(0, 'test ', 69, 'test ', '5', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `question`
--

INSERT INTO `question` (`id`, `quiz_id`, `quiz_name`, `question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(4, 0, 'test', 26, '2', '3', '4', '5', '6', ''),
(5, 0, 'test', 69, 'test', '2', '3', '4', '5', ''),
(6, 0, 'test1', 42, '1', '2', '3', '4', '5', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(255) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `made_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`, `made_by`) VALUES
('33', 'test', 'test'),
('61', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `passwd_2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`username`, `passwd`, `passwd_2`, `email`, `first_name`, `last_name`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin@admin.com', 'admin', 'admin');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
