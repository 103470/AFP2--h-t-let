-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 10. 00:19
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
(0, 'Quiz címe ', 66, 'test3 ', 'Array', 0),
(0, 'Quiz címe ', 66, 'test3 ', 'Array', 0),
(0, 'Quiz címe ', 66, 'test3 ', 'Array', 0),
(0, 'test1 ', 56, 'teszt6 ', 'Array', 0),
(33, ' ', 26, '2345 ', 'Array', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '', 0),
(33, ' ', 26, '2345 ', '7', 0),
(33, ' ', 26, '2345 ', '7', 0),
(33, ' ', 26, '2345 ', '4', 0),
(33, ' ', 26, '2345 ', '5', 0),
(33, 'test ', 54, '4567 ', '3', 0),
(33, 'test ', 54, '4567 ', '7', 0),
(33, 'test ', 54, '4567 ', '22', 0),
(33, 'test ', 54, '4567 ', '32', 0),
(33, 'test ', 54, '4567 ', '3', 0),
(33, 'test ', 54, '4567 ', '6', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `question`
--

INSERT INTO `question` (`id`, `quiz_id`, `quiz_name`, `question_id`, `question`) VALUES
(18, 61, 'test1', 99, '2345'),
(20, 63, 'Elégedettségi felmérés', 2, 'Mennyire elégedett szolgáltatásunk gyorsaságával?'),
(21, 63, 'Elégedettségi felmérés', 88, 'Ajánlaná szolgáltatásunkat másoknak?'),
(22, 61, 'test1', 78, 'test 2');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `question_text`
--

CREATE TABLE `question_text` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `question_text`
--

INSERT INTO `question_text` (`quiz_id`, `quiz_name`, `question_id`, `question`) VALUES
(61, 'test1', 98, 'test1 text'),
(61, 'test1', 70, 'test 1 text 2');

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
('61', 'test1', 'test1'),
('63', 'Elégedettségi felmérés', 'anonim'),
('70', 'test2', '2'),
('42', 'test3', '3'),
('62', '4', '4'),
('5', '', ''),
('74', '5', '5'),
('27', '6', '6'),
('88', '7', '7'),
('14', '8', '8'),
('30', '9', '9'),
('68', '10', '10'),
('55', '11', '11'),
('75', '12', '12'),
('23', '', ''),
('66', '13', '13'),
('87', '14', '14'),
('6', '15', '15'),
('57', '', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `q_answers`
--

CREATE TABLE `q_answers` (
  `aid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `q_answers`
--

INSERT INTO `q_answers` (`aid`, `qid`, `answer`, `correct`) VALUES
(21, 66, '9', ''),
(22, 66, '10', ''),
(23, 66, '11', ''),
(24, 66, '12', ''),
(25, 97, '20', ''),
(26, 97, '21', ''),
(27, 97, '22', ''),
(28, 97, '23', ''),
(29, 13, '30', ''),
(30, 13, '31', ''),
(31, 13, '32', ''),
(32, 13, '33', ''),
(33, 56, '40', ''),
(34, 56, '41', ''),
(35, 56, '42', ''),
(36, 56, '43', ''),
(37, 26, '2', ''),
(38, 26, '3', ''),
(39, 26, '4', ''),
(40, 26, '5', ''),
(41, 41, '5', ''),
(42, 41, '4', ''),
(43, 41, '5', ''),
(44, 41, '4', ''),
(45, 36, '1', ''),
(46, 36, '2', ''),
(47, 36, '3', ''),
(48, 36, '4', ''),
(49, 99, '2', ''),
(50, 99, '3', ''),
(51, 99, '4', ''),
(52, 99, '5', ''),
(57, 2, 'Nagyon', ''),
(58, 2, 'Elégedett', ''),
(59, 2, 'Semleges', ''),
(60, 2, 'Nem vagyok elégedett', ''),
(61, 88, 'Ajánlanám', ''),
(62, 88, 'Semleges', ''),
(63, 88, 'Nem ajánlanám', ''),
(64, 88, '', ''),
(65, 78, '2', ''),
(66, 78, '2', ''),
(67, 78, '2', ''),
(68, 78, '2', '');

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
-- A tábla indexei `q_answers`
--
ALTER TABLE `q_answers`
  ADD PRIMARY KEY (`aid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT a táblához `q_answers`
--
ALTER TABLE `q_answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
