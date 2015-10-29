-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 29 2015 г., 07:05
-- Версия сервера: 5.5.46-0ubuntu0.14.04.2
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `category_name`) VALUES
(1, NULL, 'HTML'),
(2, NULL, 'PHP');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category_id`, `author_id`, `title`, `description`, `full_text`, `date`) VALUES
(1, 1, 1, 'Новость 1', '<p style="text-align: center;">Краткое описание новости 1...</p>', '<p style="text-align: center;">Полный текст новости 1...</p>', '27-10-2015 16:46:52'),
(2, 1, 1, 'Новость 2', '<p style="text-align: center;">Краткое описание новости 2...</p>', '<p style="text-align: center;">Полный текст новости 2...</p>', '27-10-2015 16:46:49'),
(9, 2, 1, 'Проба поломать Tiny', '<p style="text-align: center;">Ломаем</p>\r\n<p style="text-align: center;">&lt;form acrion="" method="get"&gt;</p>\r\n<p style="text-align: center;">&lt;input type="text" name="hack"&gt;</p>\r\n<p style="text-align: center;">&lt;/form&gt;</p>', '<p style="text-align: left;">Ломаем</p>\r\n<p style="text-align: left;">&lt;form acrion="" method="get"&gt;</p>\r\n<p style="text-align: left;">&lt;input type="text" name="hack"&gt;</p>\r\n<p style="text-align: left;">&lt;/form&gt;</p>', '27-10-2015 16:46:40'),
(12, 1, 1, 'Добавление с выбором категории', '<p style="text-align: center;">&nbsp;public function article_add_action()</p>', '<p style="text-align: center;">&nbsp;public function article_add_action()</p>', '29-10-2015 04:26:02'),
(18, 1, 1, 'Добавление новости с данными автора', '<p style="text-align: center;">Добавление новости с данными автора</p>', '<p style="text-align: center;">Добавление новости с данными автора</p>', '29-10-2015 02:50:37'),
(19, 1, 1, 'Проверка на авторство', '<p style="text-align: center;">Проверка на авторство</p>', '<p style="text-align: center;">Проверка на авторство</p>', '29-10-2015 03:29:48');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(4) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `year`, `url`, `description`) VALUES
(1, 2012, 'http://DunkelBeer.ru', 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'),
(2, 2012, 'http://ZopoMobile.ru', 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'),
(3, 2012, 'http://GeekWear.ru', 'Интернет-магазин брендовой одежды для гиков.'),
(4, 2011, 'http://РоналВарвар.рф', 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'),
(5, 2011, 'http://TompsonTatoo.ru', 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'),
(6, 2011, 'http://DaftState.ru', 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'),
(7, 2011, 'http://TiltPeople.ru', 'Сайт сообщества фотографов в стиле Tilt Shif.'),
(8, 2011, 'http://AbsurdGames.ru', 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`) VALUES
(1, 'info@yurasik.ml', '92956371ce3f3bea6c775e3f4252952a', 'admin'),
(3, 'yurasik777@mail.ru', '92956371ce3f3bea6c775e3f4252952a', 'user'),
(4, 'user@yurasik.ml', '08d76284cb7b85130945d8396881ca91', 'user'),
(5, 'mawina11000@mail.ru', 'f9c73450aa3cf64eeb8dcf746b5f390c', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
