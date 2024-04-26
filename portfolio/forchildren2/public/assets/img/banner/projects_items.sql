-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2024 г., 20:43
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forcemontage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects_items`
--

CREATE TABLE `projects_items` (
  `id` int NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_galery` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_project` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `projects_items`
--

INSERT INTO `projects_items` (`id`, `title`, `img`, `img_galery`, `id_project`) VALUES
(16, 'Спальня', '1712081414444.jpeg', '1712081414543.jpeg,1712081414587.jpeg,1712081414264.jpeg,1712081414317.jpeg', 89),
(17, 'Прихожая', '1712081493506.jpeg', '1712081493870.jpeg,1712081493498.jpeg,1712081493323.jpeg', 89),
(18, 'Прихожая', '1712081508513.jpeg', '1712081508269.jpeg,1712081508955.jpeg,1712081508216.jpeg', 89),
(19, 'Ванная', '1712081606553.jpeg', '1712081606303.jpeg,1712081606875.jpeg,1712081606397.jpeg', 89),
(20, 'Гостиная и кухня', '1712081829967.jpeg', '1712081829425.jpeg,1712081829660.jpeg,1712081829710.jpeg,1712081829684.jpeg', 90),
(21, 'Спальни', '1712081911503.jpeg', '1712081911311.jpeg,1712081911897.jpeg,1712081911411.jpeg,1712081911235.jpeg,1712081911987.jpeg,1712081911114.jpeg', 90),
(22, 'Ванная', '1712081998879.jpeg', '1712081998209.jpeg,1712081998977.jpeg,1712081998590.jpeg,1712081998938.jpeg,1712081998769.jpeg,1712081998258.jpeg,1712081998256.jpeg,1712081998476.jpeg', 90),
(23, 'Кухня', '1712082108268.jpeg', '1712082108699.jpeg,1712082108840.jpeg,1712082108454.jpeg', 91),
(24, 'Гостиная', '1712082160890.jpeg', '1712082160388.jpeg,1712082160628.jpeg,1712082160795.jpeg', 91),
(25, 'Прихожая', '1712082228974.jpeg', '1712082228641.jpeg,1712082228480.jpeg,1712082228909.jpeg,1712082228321.jpeg,1712082228728.jpeg,1712082228764.jpeg', 91),
(26, 'Гостиная', '1712082356278.jpeg', '1712082356900.jpeg,1712082356182.jpeg,1712082356759.jpeg,1712082356995.jpeg,1712082356718.jpeg', 92),
(27, 'Кухня', '1712082416576.jpeg', '1712082416324.jpeg,1712082416403.jpeg,1712082416684.jpeg', 92),
(28, 'Спальня', '1712082480636.jpeg', '1712082480205.jpeg,1712082480113.jpeg,1712082480894.jpeg,1712082480340.jpeg,1712082480189.jpeg', 92),
(41, 'sdfsdf', '1712264134146.webp', '1712264134595.webp,1712264134854.webp,1712264134728.webp,1712264134430.webp,1712264134134.webp', 103),
(42, 'sdfsdf', '1712264134611.webp', '1712264134891.webp,1712264134940.webp,1712264134166.webp,1712264134545.webp,1712264134392.webp', 103),
(43, 'sdfsdf', '1712264135589.webp', '1712264135492.webp,1712264135705.webp,1712264135362.webp,1712264135450.webp,1712264135993.webp', 103),
(44, 'sdfsdf', '1712264141309.webp', '1712264141156.webp,1712264141437.webp,1712264141201.webp,1712264141994.webp,1712264141156.webp', 103),
(45, 'asdgadgs', '1712264203609.webp', '1712264203562.webp,1712264203359.webp,1712264203893.webp', 104);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects_items`
--
ALTER TABLE `projects_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects_items`
--
ALTER TABLE `projects_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
