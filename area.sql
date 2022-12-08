-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 08 2022 г., 00:24
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `area`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`) VALUES
(1, 'Contacts 3', '                 <h1>Где нас искать</h1>\r\n<p>Адрес 20</p>\r\n<p>Телефон30</p>\r\n<p>E-mail</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `carton`
--

CREATE TABLE `carton` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carton`
--

INSERT INTO `carton` (`id`, `title`, `img`, `video`) VALUES
(1, '      Черепашки ниндзя', '      <img src=\"img2/101.jpg\" alt=\"cart\"/>', '      <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/cQ5t0zl6jqQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '   Добро пожаловать в клуб', '    <img src=\"img2/102.jpg\" alt=\"cart\"/>', '<iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/iLfXM_L5B68\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>    '),
(3, '  Супер сыновья', '  <img src=\"img2/103.jpg\" alt=\"cart\"/>', '<iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/I921P7frmoQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>  '),
(4, '  Икар', '  <img src=\"img2/104.jpg\" alt=\"cart\"/>', '<iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/KvGTmpdhKjE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>  '),
(5, ' Легенда о Морду', '  <img src=\"img2/105.jpg\" alt=\"cart\"/>', '  <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/s1T0QpDnlSE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, ' Хребет ночи', '  <img src=\"img2/106.jpg\" alt=\"cart\"/>', '  <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/FLKurtriZC4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, '  Легенды смертельной битвы', '  <img src=\"img2/107.jpg\" alt=\"cart\"/>', '<iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/HjreSZOFx6k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>  '),
(8, '  Скуб-Ду', '  <img src=\"img2/108.jpg\" alt=\"cart\"/>', '  <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/5AigEfHm5wk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `film`
--

INSERT INTO `film` (`id`, `title`, `img`, `video`) VALUES
(1, '             Трудные подростки ', '               <img src=\"img/101.jpg\" alt=\"logo\"/>', '      <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/TB60OSJqWKU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '          Вечные', '            <img src=\"img/102.jpg\" alt=\"logo\"/>', '           <iframe  width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/lj_QSqm3xkI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '   Тайны Дамблдора', '    <img src=\"img/103.jpg\" alt=\"logo\"/>', ' <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/GlNCkqdeZnk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, '    13 жизней', '     <img src=\"img/104.jpg\" alt=\"logo\"/>', '    <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/R068Si4eb3Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, '   Бесконечность', '    <img src=\"img/105.jpg\" alt=\"logo\"/>', '   <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/jsnX8j-hyTE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, '   Гхатоткача', '    <img src=\"img/106.jpg\" alt=\"logo\"/>', '   <iframe width=\"50\" height=\"50\"\r\n src=\"https://www.youtube.com/embed/t0CBH_sUGq4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, '   Время для себя', '    <img src=\"img/107.jpg\" alt=\"logo\"/>', '   <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/8Fj1OTTC-ik\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, '   Мобильный мистера Гариса', '    <img src=\"img/108.jpg\" alt=\"logo\"/>', '   <iframe width=\"50\" height=\"50\" src=\"https://www.youtube.com/embed/a2aW4pKZFgY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carton`
--
ALTER TABLE `carton`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `carton`
--
ALTER TABLE `carton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
