-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2020 г., 12:37
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `goods`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_orders`
--

CREATE TABLE `about_orders` (
  `id` int(11) NOT NULL,
  `id_o` int(11) NOT NULL,
  `id_t` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about_orders`
--

INSERT INTO `about_orders` (`id`, `id_o`, `id_t`) VALUES
(9, 14, 4),
(10, 14, 5),
(11, 14, 26),
(12, 15, 23),
(13, 15, 24),
(14, 16, 7),
(15, 16, 6),
(16, 17, 4),
(38, 36, 7),
(39, 37, 9),
(40, 37, 5),
(41, 37, 24),
(42, 16, 4),
(43, 17, 4),
(44, 17, 9),
(45, 18, 4),
(46, 18, 23),
(47, 19, 4),
(48, 20, 10),
(49, 21, 10),
(50, 22, 10),
(51, 22, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Компьютеры'),
(2, 'Оргтехника'),
(3, 'Услуги');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` mediumint(9) NOT NULL,
  `ntext` text NOT NULL,
  `ntitle` varchar(255) DEFAULT NULL,
  `ndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `ntext`, `ntitle`, `ndate`) VALUES
(1, 'При заказе от 5000 рублей, в подарок вам достанется беспроводная зарядка или наушники', '', '2020-05-27 19:00:00'),
(4, 'При первом заказе скидка 30%', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `summa` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_u`, `summa`, `status`) VALUES
(18, 20, 17499, 4),
(19, 14, 16999, 1),
(20, 14, 17798, 1),
(21, 14, 17798, 1),
(22, 16, 86798, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Ожидается подтверждение'),
(2, 'Ожидается отправка'),
(3, 'Отправлено'),
(4, 'Доставлено');

-- --------------------------------------------------------

--
-- Структура таблицы `tmp_korz`
--

CREATE TABLE `tmp_korz` (
  `id` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tmp_korz`
--

INSERT INTO `tmp_korz` (`id`, `id_u`, `id_tovar`) VALUES
(41, 15, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `descriptions` text NOT NULL,
  `price` float NOT NULL,
  `img` varchar(250) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `descriptions`, `price`, `img`, `id_category`) VALUES
(3, 'ПК Acer Aspire XC-885', 'ПК Acer Aspire XC-885 [DT.BAQER.027] - производительная модель стационарного компьютера. Имеющий компактные габариты (330x100x295 мм)системный блок ', 26500, 'image/111.jpg', 1),
(4, 'ПК DEXP Atlas H197', 'ПК DEXP Atlas H197 обладает компактными размерами и довольно высокими техническими характеристиками, что позволит использовать его в рабочих и ', 16999, 'image/123123.jpg', 1),
(5, 'ПК HP Slim Desktop - S01', 'ПК HP Slim Desktop - S01-pF0012ur в тонком корпусе представляет собой функциональное устройство, способное решать разнообразные рабочие задачи и не только.', 36999, 'image/1542.jpg', 1),
(6, 'Ноутбук Prestigio Smartbook 141S ', 'Ноутбук Prestigio Smartbook 141S в стильном коричневом корпусе является устройством для работы и отдыха, ведь в нем собраны ключевые характеристики, способные гарантировать комфорт.', 13699, 'image/123.jpeg', 1),
(7, 'Ноутбук Acer Aspire 3 A315-42-R1JJ', 'Ноутбук Acer Aspire 3 A315-42-R1JJ в тонком черном корпусе из пластика обладает классическим функционалом для такого типа устройств и станет хорошим приобретением для любого пользователя. ', 23999, 'image/6666.jpg', 1),
(8, 'Canon imageFORMULA DR-3010C\r\n', 'Предназначенный для выполнения ежедневных высоких нагрузок, DR-3010C без усилий выполняет критически важные или регулярные задачи сканирования со скоростью до 40 стр./мин в черно-белом режиме (200 и 300 т./д.) \r\n', 23000, 'image/a1.jpg\r\n', 2),
(9, 'Шредер IDEAL AL 1 shreder', 'Немецкие дизайнеры фирмы IDEAL создали эксклюзивную модель шредера AL 1 в алюминиевом корпусе для VIP клиентов. Данная модель выпускается ограниченным тиражом. В компании IDEAL считают, что теперь все любители роскоши и стильных вещей имеют еще одну возмо', 69000, 'image/123123123.jpg', 2),
(10, 'МФУ Xerox WorkCentre 3215NI', 'Надежный в эксплуатации копир. Обеспечивает копирование больших объемов документов и предлагает удобные дополнительные функции, включая функцию двустороннего копирования удостоверений личности с последующей печатью двух полученных изображений на одной стр', 17798, 'image/44822.jpg', 2),
(23, 'Антивирус', 'Наша фирма поможет вам установить антивирус на ПК', 500, 'image/касперский.jpg', 3),
(24, 'Ремонт', 'Мы поможем починить ваш компьютер', 1000, 'image/898.jpg', 3),
(25, 'Чистка ПК', 'Наша фирма предоставляет услуги по чистке пк', 350, 'image/777.jpg', 3),
(26, 'Переустановка WINDOWS', 'Фирма предоставляет услуги по переустановки системы', 1400, 'image/000.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `mail`) VALUES
(14, 'test', '098f6bcd4621d373cade4e832627b4f6', 'tesst', ''),
(15, 'test2', '098f6bcd4621d373cade4e832627b4f6', 'test', ''),
(16, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
(18, 'zid', '098f6bcd4621d373cade4e832627b4f6', 'zid', 'zidanez@mail.ru'),
(19, 'test1', '202cb962ac59075b964b07152d234b70', 'test1', 'exampl@mail.ru'),
(20, 'test3', '202cb962ac59075b964b07152d234b70', 'test3', 'exampl@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_orders`
--
ALTER TABLE `about_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tmp_korz`
--
ALTER TABLE `tmp_korz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
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
-- AUTO_INCREMENT для таблицы `about_orders`
--
ALTER TABLE `about_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tmp_korz`
--
ALTER TABLE `tmp_korz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
