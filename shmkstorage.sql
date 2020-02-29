-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 29 2020 г., 10:07
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shmkstorage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `post_id` int(2) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`) VALUES
(4, 1, 1, 'sadsad'),
(5, 1, 1, 'asdasd'),
(6, 1, 1, 'sadasd'),
(7, 1, 1, 'as'),
(10, 1, 1, 'sdasd'),
(11, 1, 1, 'asdasdad'),
(12, 1, 1, 'sdff'),
(14, 1, 1, 'f'),
(19, 1, 4, 'Прикольная новость'),
(20, 1, 4, 'Баян'),
(21, 1, 4, 'фу'),
(22, 1, 4, 'фу'),
(23, 1, 4, 'фу');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(1, 'New', 'this is a new!'),
(4, 'lol', 'lorem ipsum'),
(5, 'Cooltema', 'lorem ipsum dolor');

-- --------------------------------------------------------

--
-- Структура таблицы `porfolio`
--

CREATE TABLE `porfolio` (
  `id` int(2) NOT NULL,
  `year` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `porfolio`
--

INSERT INTO `porfolio` (`id`, `year`, `site`, `description`) VALUES
(1, '2020', 'spacex.com', 'Сайт Илона Маска'),
(2, '2002', 'antidemping.com', 'Сайт Илона Маска'),
(3, '2001', 'cmd.com', 'сайт о цмд'),
(5, '1001', 'primate.oa', 'Сайт наших дедов');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `service`, `price`) VALUES
(1, 'Сервис', 'Автосервис', '300 бакс'),
(2, 'аук', 'тоже сервис рашид', '32423424 ен'),
(3, 'Сервис', 'Автосервис', '300 бакс'),
(4, 'аук', 'тоже сервис рашид', '32423424 ен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `status`) VALUES
(1, 'admin@adm.ru', 'qwerty', 1),
(3, 'asd@mail.ru', 'asdasddasd', 0),
(4, 'dfgdfg@mail.ru', 'asdasdaasd', 0),
(9, 'viking@mail.ru', 'йцуфыв', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `porfolio`
--
ALTER TABLE `porfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `porfolio`
--
ALTER TABLE `porfolio`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `news` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
