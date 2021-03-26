-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2021 г., 21:03
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cities`
--
CREATE DATABASE IF NOT EXISTS `cities` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `cities`;

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Minsk'),
(2, 'Gomel'),
(3, 'Hrodna'),
(4, 'Baranovichi'),
(5, 'Brest'),
(6, 'Zhlobin'),
(7, 'Vitebsk'),
(8, 'Krugloe'),
(1, 'Minsk'),
(2, 'Gomel'),
(3, 'Hrodna'),
(4, 'Baranovichi'),
(5, 'Brest'),
(6, 'Zhlobin'),
(7, 'Vitebsk'),
(8, 'Krugloe');

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`id`, `city_id`, `fullname`) VALUES
(1, 5, 'Ivan Petrov'),
(2, 3, 'Sebastian Haponenka'),
(3, 3, 'Vasil Lutsevich'),
(4, 2, 'Leo Klimovich'),
(5, 7, 'Matea Kezhman'),
(6, 8, 'Alex Marshall'),
(7, 3, 'Bilbo Beggins');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `from_person_id` int(11) NOT NULL,
  `to_person_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `from_person_id`, `to_person_id`, `amount`) VALUES
(1, 4, 2, 10),
(2, 2, 3, 7),
(3, 5, 2, 13),
(4, 4, 7, 13),
(5, 3, 1, 8),
(6, 1, 3, 12),
(7, 2, 5, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
