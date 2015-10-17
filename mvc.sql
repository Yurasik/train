-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 17 2015 г., 21:06
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.13

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
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `full_text`) VALUES
(1, 'Новость 1', '1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.'),
(2, 'Новость 2', '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.'),
(3, 'Новость 3', '3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.'),
(4, 'Новость 4', '4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.'),
(5, 'Новость 5', '5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.'),
(6, 'Новость 6', '6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda delectus deserunt dicta doloremque earum enim eveniet exercitationem illum in, inventore ipsam modi nobis nostrum, omnis praesentium quasi quia ratione sit suscipit. At imped', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aliquid architecto, assumenda aut commodi consequatur cumque debitis dolores doloribus ducimus error esse excepturi facilis id itaque libero mollitia nemo, nobis, rem reprehenderit voluptatibus. Alias commodi consequuntur cum debitis dolorum ducimus esse eveniet in labore laudantium maiores odit, officiis perspiciatis quidem quisquam repellendus, reprehenderit repudiandae tempora? Explicabo fuga impedit molestiae non tenetur! Fugiat quis vel voluptas voluptate. Adipisci at distinctio est fuga in itaque libero necessitatibus porro reiciendis saepe, sunt, voluptatibus voluptatum. Ad aliquid distinctio dolorem earum eos impedit magni maxime nam nemo quas quisquam quos repellat, unde, voluptatibus.');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'info@yurasik.ml', '92956371ce3f3bea6c775e3f4252952a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
