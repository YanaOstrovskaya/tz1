-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 01 2018 г., 17:16
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ostrow9j_tz1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--
-- Создание: Апр 30 2018 г., 21:29
-- Последнее обновление: Май 01 2018 г., 13:59
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_uid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `user_uid`, `comment`, `date`) VALUES
(1, 0, 67724784, 'dhfjgk', '2018-05-01'),
(2, 0, 67724784, 'dhfjgk;', '2018-05-01'),
(8, 0, 67724784, 'scascf', '2018-05-01'),
(9, 5, 67724784, 'fhgjgjhk', '2018-05-01'),
(11, 9, 67724784, 'bkjkll', '2018-05-01'),
(12, 7, 67724784, 'vgjgkig', '2018-05-01'),
(13, 11, 67724784, 'hello', '2018-05-01'),
(14, 8, 67724784, 'cbc', '2018-05-01'),
(16, 0, 67724784, 'iglgb;', '2018-05-01'),
(18, 8, 20106383, 'первый комментарий', '2018-05-01'),
(19, 0, 20106383, 'ничего себе даже фотку получить монжо надо попробовать атк у себя на фб', '2018-05-01'),
(21, 20, 67724784, 'нф', '2018-05-01'),
(22, 21, 67724784, 'new comment', '2018-05-01'),
(31, 0, 67724784, 'q', '2018-05-01'),
(32, 0, 67724784, 'qwe', '2018-05-01'),
(33, 32, 67724784, 'qwer', '2018-05-01'),
(34, 0, 67724784, 'qwr', '2018-05-01'),
(35, 32, 67724784, 'gh', '2018-05-01'),
(36, 0, 67724784, 'qwefjgh', '2018-05-01'),
(37, 0, 67724784, 'kynbgrf', '2018-05-01'),
(42, 36, 67724784, 'is comment 1', '2018-05-01'),
(43, 42, 67724784, 'comment 2', '2018-05-01'),
(44, 37, 67724784, 'comment 1223534', '2018-05-01'),
(45, 0, 67724784, 'hi', '2018-05-01');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Апр 29 2018 г., 22:15
-- Последнее обновление: Май 01 2018 г., 13:06
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `uid`, `first_name`, `last_name`, `photo`) VALUES
(56, 67724784, 'Яна', 'Островская', 'https://pp.userapi.com/c636230/v636230799/78404/fT6HS63GOrE.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
