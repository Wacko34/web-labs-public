-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 21 2022 г., 19:00
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guards_info`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guards`
--

CREATE TABLE `guards` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_path` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `full_name` varchar(45) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `year_of_birth` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guards`
--

INSERT INTO `guards` (`id`, `photo_path`, `full_name`, `bio`, `year_of_birth`, `id_post`) VALUES
(1, 'img/guards/suslov.png', 'Суслов А. А.', 'Очень богатый, имеет не один дом, яхты, виллы, автомобили и всё, о чем можно мечтать. Атеист до мозга костей. Увидев бродячее животное, всегда зовёт его.', 1977, 4),
(2, 'img/guards/volkova.png', 'Волкова Е. С.', 'Среднего достатка. На основные нужны хватает и на кое-что ещё. Не думает о боге и вообще о религии. Не задумывается о своих страхах, ничего сильно не боится.', 1985, 3),
(3, 'img/guards/belov.png', 'Белов И. Е.', 'Живёт без ценностных ориентиров. Среднего достатка. Атеист до мозга костей. Грызёт ногти. Боится высоты.', 1984, 1),
(4, 'img/guards/grishina.png', 'Гришина Е. Ф.', 'Верит, что бог есть, но особенно не думает о вере. В церкви была раз или два за всю жизнь, посты не соблюдает. Цокает языком.', 1979, 2),
(5, 'img/guards/shiryaev.png', 'Ширяев А. Г.', 'Мусульманин. Верит в бога, молится, посещает мечети, соблюдает посты. Рисует на листке, когда слушает кого-то во время указаний. Верит в карму и принцип бумеранга', 1985, 4),
(6, 'img/guards/egorova.png', 'Егорова П. Н.', 'Живёт в достатке. Может позволить себе очень многое, но не всё. Курит. Любит вкусно покушать', 1978, 5),
(7, 'img/guards/cherepanov.png', 'Черепанова А. Д.', 'Агностик. Не может сказать есть бог, или нет. Любит кофе. Припасены шуточки на все случаи жизни, особенно на те, где юмор вообще неуместен.', 1975, 2),
(8, 'img/guards/trofimov.png', 'Трофимов М. А.', 'Живет в своё удовольствие. Буддист. Любит Дождливую погоду, когда сыро и льёт сильный ливень. Чавкает во время еды.', 1970, 5),
(9, 'img/guards/ivanova.png', 'Иванова Д. А.', 'Не имеет вредных привычек. Не задумывается о своих страхах, ничего сильно не боится. Любит змей.', 1964, 4),
(10, 'img/guards/gubanov.png', 'Губанов А. Я.', 'Главная ценность в жизни - деньги. Любит рисовать. Боится змей.', 1974, 3),
(11, 'img/guards/kovaleva.png', 'Ковалева А. Н.', 'Хладнокровна, несмотря ни на что. Никогда не повышает голоса и не позволяет эмоциям управлять ею. Лицо вытянутое, немного невыразительное.', 1990, 1),
(12, 'img/guards/bulgakova.png', 'Булгакова М. И.', 'Обострённое чувство справедливости. Короткие волнистые светлые волосы. Всегда носит с собой фонарик.', 1989, 5),
(13, 'img/guards/bons.png', 'Билли Бонс', 'Он же капитан. Обладатель карты сокровищ. Много пьет. Всегда простужен. Характер скверный. Не женат.', 1967, 1),
(14, 'img/guards/treloni.png', 'Сквайер Трелони', 'Туп. Жаден. Прожорлив. Ленив. Труслив. Надменен. Характер отсутсвует. Не женат.', 1985, 3),
(15, 'img/guards/silver.png', 'Джон Сильвер', 'Он же \"окорок\", он же \"одноногий\". Самый страшный пират, удачно притворяется добрым. Характер скрытный. Не женат.', 1987, 2),
(16, 'img/guards/livsi.png', 'Доктор Ливси', 'Очень хороший и веселый человек. Характер общительный. Не женат', 1983, 5),
(17, 'img/guards/gokins.png', 'Джимми Гокинс', 'Очень, Очень хороший мальчик. Вежлив, правдив, скромен, добр. Слушает маму, каждое утро делает зарядку. Характер очень мягкий.', 1990, 3),
(18, 'img/guards/smollet.png', 'Капитан Смоллет', 'Старый моряк и солдат. Говорит правду в глаза, отчего и страдает. Характер прескверный. Не женат.', 1986, 1),
(19, 'img/guards/black_dog.png', 'Черный пес', 'Охотится за картой сокровищ. Характер скрытный. Не женат.', 1982, 4),
(20, 'img/guards/gann.png', 'Бен Ганн', 'В детстве был благовоспитанным мальчиком, но начал играть в орлянку, связался с пиратами и покатился... Характер мягкий. Не женат.', 1970, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `building` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `building`) VALUES
(1, 'Корпус А'),
(2, 'Корпус Б'),
(3, 'Библиотека'),
(4, 'Столовая'),
(5, 'Корпус К');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `patronymic` varchar(45) DEFAULT NULL,
  `yearofbirth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `floor` varchar(30) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `vk` varchar(255) DEFAULT NULL,
  `interests` varchar(255) DEFAULT NULL,
  `blood_type` varchar(20) DEFAULT NULL,
  `rh_factor` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `surname`, `patronymic`, `yearofbirth`, `address`, `floor`, `gender`, `vk`, `interests`, `blood_type`, `rh_factor`, `user_id`) VALUES
('dentomarev@gmail.com', '$2y$10$789IDYhcL32iCrBArKaNne7xuVWCwSpQsDFLFeDn4rTjbwj1bmQWu', 'Денис', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
('mort@mail.com', '$2y$10$qB8C/x9UOl3pPycMVSvbXewbW3MaUp/I9/6lemXBwa8E2NY1syA0O', 'Morty', '', '', '2022-09-30', '', '', 'woman', '', '', '', '', 6),
('rick@gmail.com', '$2y$10$eS75/HV18fzntTcy22r78uYaOFNLK1qqVYvC.sb4kI63a9r60qGki', 'Rick', '', '', '0000-00-00', '', '', 'man', '', '', '', '', 7),
('aboba@mail.ru', '$2y$10$MHX63WFFDmYzFuVDLHE5ee.tcWC06YnTzn9EQurycWKeT/u8kEWl6', 'Aboba', '', '', '2022-09-09', 'Лесогорская ул., 82, Волгоград, Волгоградская обл., 400048', 'плитка', 'men that pee without aiming', 'https://vk.com/wacko34', 'проживать жизнь впустую', 'на рукаве', 'не надо никого резус', 8),
('den456@mail.ru', '$2y$10$wlizd4BaoR.hEwZwRA3EcOjq.9A.iiAOiiAIa5SNi3BgflZeUh2v2', 'Денис', '', '', '2022-10-01', 'Лесогорская ул., 82, Волгоград, Волгоградская обл., 400048', 'плитка', 'men that pee without aiming', 'https://vk.com/wacko34', 'проживать жизнь впустую', 'на рукаве', 'не надо никого резус', 9),
('mort234@mail.com', '$2y$10$zMTMLsXhXwKLGlVNJk20Le/d/gPSdX6CWTygXPg1HOxdYEQ6sDwGS', 'Денис', '', '', '2022-10-07', 'Лесогорская ул., 82, Волгоград, Волгоградская обл., 400048', 'плитка', 'men that pee without aiming', 'https://vk.com/wacko34', 'проживать жизнь впустую', 'на рукаве', 'не надо никого резус', 10),
('denis@mail.com', '$2y$10$ldhxj1XV63XpwMo6kBw5UOaGvstatL94NzQR/bVgmPBlFZs/Vkq7u', 'Денис', 'Томарев', 'Fktrcfylhjdbx', '2022-10-07', 'Лесогорская ул., 82, Волгоград, Волгоградская обл., 400048', 'плитка', 'bi-mayonnaise', 'https://vk.com/wacko34', 'проживать жизнь впустую', 'на рукаве', 'не надо никого резус', 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_post`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `guards`
--
ALTER TABLE `guards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `guards`
--
ALTER TABLE `guards`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
