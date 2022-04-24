-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 24 2022 г., 05:59
-- Версия сервера: 8.0.27-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `agrotime_BD`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `inf` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `climate` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `light` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `water` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fertilize` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time_water` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `season` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `step_1` int NOT NULL,
  `step_2` int NOT NULL,
  `step_3` int NOT NULL,
  `step_4` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `inf`, `category`, `climate`, `light`, `water`, `fertilize`, `image`, `time_water`, `season`, `step_1`, `step_2`, `step_3`, `step_4`) VALUES
(1, 'Цикламен', 'Цикламен (Cyclamen) – многолетнее клубневое травянистое растение из семейства Мирсиновые, в условиях российского климата культивируемое как комнатное. В «диком» виде встречается на средиземноморском, черноморском и каспийском побережье, в Северной Африке, Южной Европе, на Ближнем Востоке.\r\n', 'Цветы', 'На лето можно прикопать горшок в саду, обеспечив защиту от яркого солнца, осадков и порывов ветра. Зимой цикламены размещают подальше от источников тепла.\r\n', 'Растение любит свет, но не прямые солнечные лучи. Цикламену подойдёт полутень. В тени цветение становится не таким обильным, исчезает «узор» с листьев. Оптимальная продолжительность светового дня — 14–16 часов, независимо от того, растёт цикламен или «отдыхает». На большей части территории России естественного света, особенно зимой.', 'Часто поливать цветок не советуют, обычно ему достаточно раза в 3–4 дня. Вместо этого рекомендуется повышать влажность воздуха всеми доступными способами.', 'Из удобрений культура предпочитает минеральные подкормки, хотя неплохо реагирует и на натуральную органику. Цикламену подойдут любые комплексные препараты для декоративно-цветущих растений (Мастер, Бона Форте, Флоровит). Длительное и продолжительное цветение отнимает у растения много сил, поэтому в течение сезона активной вегетации удобрения вносят регулярно, каждые 12–15 дней.', 'https://lifeflower.ru/wp-content/uploads/2021/05/tsiklamen-persidskiy.jpg', '345600', '03', 1, 3, 5, 6),
(2, 'Лилия', 'Лилия – удивительно красивый цветок с приятным ароматом, который почитался во многих культурах. Греки приписывали ей божественное происхождение, считая, что лилия выросла из молока Юноны – матери богов. И при дословном переводе с греческого «ли-ли» звучит, как «белый-белый». Римляне почитали ее главным цветком на празднествах, прославляющих богиню весны Флору. Христиане и иудеи украшают ею свои священные алтари, считая лилию символом непорочности.', 'Цветы', 'Выбирая посадочный материал, важно учитывать климатические особенности местности, поскольку далеко не все лилии способны безболезненно переносить колебания температуры.\r\n', 'Планируя, где разместить экзотическую красавицу на участке, следует ориентироваться на ее групповую принадлежность. Трубчатые, азиатские и восточные линии наибольшую декоративность проявляют только на хорошо освещенных участках.\r\n', 'Хоть лилия и не любит излишнюю влагу, но особо засушливые дни нуждается в частом поливе. Поливать нужно под корень, стараясь не увлажнять листья. Случайно попавшие капли воды могут служить своеобразными линзами, вызывая солнечный ожог.\r\n', 'Лучшим удобрением для лилий считается перегной. Но его стоит вносить с осторожностью: при переизбытке питания растения начинают «жировать». Это провоцирует их замедление развития, снижение устойчивости к болезням и понижение морозостойкости. Оптимальное соотношение вносимого перегноя составляет 7-8 кг на 1 кв.м.\r\n', 'https://dachaogorod.ru/wp-content/uploads/6/0/3/603f8148c916e8f00abd5c69f571ce4c.jpeg', '345600', '10', 345600, 545600, 745600, 1045600),
(3, 'лилии', 'inf', 'Цветы', 'жаркий', 'освещение нормальное', 'вода', 'удобрение', 'картинка', '300560', 'сезон', 454, 4565, 654, 45654),
(4, 'Материалы', 'Информация', 'Цветы', 'климат', 'освещение', 'полив', 'удобрение', 'https://yandex.ru/images/search?pos=2&from=tabbar&img_url=https%3A%2F%2Fsun9-45.userapi.com%2Fimpg%2FJOnIcwiTG6ycjA3I3Cq0OUXFIfOjsBBWY4Z3FA%2FCKZsYeddgs4.jpg%3Fsize%3D604x437%26quality%3D96%26sign%3Db2d50d046820f72bb0fdc290d2430e0f%26type%3Dalbum&text=уход+за+лилиями&rpt=simage', '300560', '10', 345000, 645000, 945000, 3145000),
(5, 'Лилия', 'ыаыва', 'Папоротниковые', 'климат', 'освещение', 'нормальный полив', 'удобрение', 'https://yandex.ru/images/search?pos=2&from=tabbar&img_url=https%3A%2F%2Fsun9-45.userapi.com%2Fimpg%2FJOnIcwiTG6ycjA3I3Cq0OUXFIfOjsBBWY4Z3FA%2FCKZsYeddgs4.jpg%3Fsize%3D604x437%26quality%3D96%26sign%3Db2d50d046820f72bb0fdc290d2430e0f%26type%3Dalbum&text=уход+за+лилиями&rpt=simage', '300560', '10', 345000, 645000, 945000, 3145000),
(6, 'Лилия', 'ыаыва', 'Кустарники', 'климат', 'освещение', 'нормальный полив', 'удобрение', 'https://yandex.ru/images/search?pos=2&from=tabbar&img_url=https%3A%2F%2Fsun9-45.userapi.com%2Fimpg%2FJOnIcwiTG6ycjA3I3Cq0OUXFIfOjsBBWY4Z3FA%2FCKZsYeddgs4.jpg%3Fsize%3D604x437%26quality%3D96%26sign%3Db2d50d046820f72bb0fdc290d2430e0f%26type%3Dalbum&text=уход+за+лилиями&rpt=simage', '300560', '10', 259200, 518400, 777600, 864000);

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_flow` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(500) NOT NULL,
  `time_born` date NOT NULL,
  `date` int NOT NULL,
  `time_water` int NOT NULL,
  `step` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `id_user`, `id_flow`, `name`, `image`, `time_born`, `date`, `time_water`, `step`) VALUES
(1, 1, 2, 'Гартензия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650716426, 353256, 1),
(3, 1, 3, 'лилии', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650727053, 300560, 1),
(4, 1, 3, 'лилии', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650730975, 300560, 1),
(7, 1, 2, 'Лилия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650731734, 345600, 1),
(8, 3, 2, 'Лилия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650731905, 345600, 1),
(9, 1, 2, 'Лилия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650732092, 345600, 1),
(10, 3, 2, 'Лилия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650732153, 345600, 1),
(11, 1, 1, 'Цикламен', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650732173, 145600, 2),
(12, 1, 2, 'Лилия', 'https://i0.wp.com/fruitree.ru/wp-content/uploads/2018/12/ciklamen-1.jpg?w=750', '2022-04-23', 1650732276, 345600, 1),
(14, 1, 2, 'Лилия', 'https://dachaogorod.ru/wp-content/uploads/6/0/3/603f8148c916e8f00abd5c69f571ce4c.jpeg', '2022-04-23', 1650743965, 345600, 1),
(15, 6, 2, 'Лилия', 'https://dachaogorod.ru/wp-content/uploads/6/0/3/603f8148c916e8f00abd5c69f571ce4c.jpeg', '2022-04-23', 1650746828, 145600, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_history` int NOT NULL,
  `step` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `inf` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `id_user`, `id_history`, `step`, `name`, `inf`, `image`) VALUES
(1, 1, 1, 1, 'Это заметка по первому этапу.', 'Это информация по первому этапу.', 'https://u-florista.ru/wp-content/uploads/2019/10/7-23.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `guid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pass`, `image`, `guid`) VALUES
(1, 'Артём', 'artem_logunov@bk.ru', '123456', '', 'f4943tgff24r3rt'),
(3, 'Владислав', 'vlad228', '12345f', '', 'b8146538-4133-49ab-a96a-8df430fdf3ff'),
(7, 'Владислав', 'Владислав', '12345678', '', '3497c1b8-9fb9-48a2-a225-53ac3a375f2f'),
(6, 'Грихан', 'zaqwsx', 'zaqwsx', '', '3ee6b46e-b68e-4751-aa93-ce0f087b67a2'),
(8, 'Владислав', 'slickshoot14881', '098765', '', '4e20c6cc-fb5d-4bfb-ad49-95346f4907c4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
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
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
