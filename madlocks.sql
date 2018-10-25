-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 25 2018 г., 16:33
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `madlocks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `body`, `showhide`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>like</p>\r\n', 'show', NULL, '2018-10-25 12:23:34', '2018-10-25 12:23:34');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Добро пожаловать на наш сайт', '<div class=\"maintext\"></div>\r\n   			<p class=\"lead\">\r\n   		\r\n			<p style=\"margin-left: 40px;\"><em>AFROMARI -\r\nэто не просто студия по плетению афрокосичек, это настоящая мастерская для твоего нового,необычного образа! Студия основанаМарией Борисовой -\r\nмастером плетения с огромным теоретическими практическим  опытом. В студии заплетено уже более 17000 косичек,мастера обучались у лучших брейдистов России и работают только с качественными материалами!</em></p><p>\r\n	<p style=\"text-align: center;\"><img alt=\"Lorem Ipsum\" src=\"/public/media/img/1.jpg\" style=\"width: 600px; height: 550px; border-width: 1px; border-style: solid;\"></p><p style=\"margin-left: 40px;\"></p><p>\r\n	<p style=\"margin-left: 40px;\"><em>AFROMARI -\r\nэто не просто студия по плетению афрокосичек, это настоящая мастерская для твоего нового,необычного образа! Студия основанаМарией Борисовой -\r\nмастером плетения с огромным теоретическими практическим  опытом. В студии заплетено уже более 17000 косичек,мастера обучались у лучших брейдистов России и работают только с качественными материалами!</em></p><p>\r\n   \r\n         <div class=\"node node472 section section-clear\" id=\"b\" data-opacity=\"0.95\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"container\"><div class=\"cont\"><div class=\"node node473 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"xs-scale-80\"><h2 class=\"font-header spans xs-force-center textable\"><span style=\"font-size: 34px; letter-spacing: 0.1em; text-align: center;\" class=\"p\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-size: 48px;\"><strong>Вопросы </strong></span></span></span></h2></div></div></div></div><div class=\"node node474 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"flex\"><div style=\"opacity: 0.5;\" class=\"xs-force-center textable\"><p style=\"font-size: 110%; text-align: center;\"><span style=\"color: rgb(17, 17, 17);\">И наши ответы</span></p></div></div></div></div></div><div class=\"node node475 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node476 widget widget-spoiler\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"metahtml\"><div id=\"node476_meta\" class=\"code\"><div class=\"spoiler2\">\r\n  <div plp-spoiler-toggle=\"\" il-action=\"toggle\" class=\"spoiler2-header is-expanded\">\r\n    <div class=\"textable\"><p style=\"letter-spacing: 0.1em;\">ВРЕДНЫ ЛИ АФРОКОСЫ <span style=\"font-size: 14px;\">?</span></p></div>\r\n    <div class=\"spoiler2-toggle\">\r\n      <i class=\"fa fa-chevron-down\"></i>\r\n    </div>\r\n  </div>\r\n  <div style=\"display: block;\" plp-spoiler-container=\"\" class=\"spoiler2-container is-expanded\">\r\n    <div class=\"cont\"><div class=\"node node477 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"\"><div class=\"textable\"><p style=\"line-height: 1.5;\">&nbsp;До сих пор можно услышать, что афроплетение вредно для собственных волос.&nbsp;</p><p style=\"line-height: 1.5;\">Аргументируется это значительным «вычесом» волос, который отмечается после расплетения косичек. Опровергнуть это предубеждение довольно просто.<br>По естественным причинам у любого человека каждый день выпадает около 100 волосков. На их месте вырастают новые, и объем прически не меняется.<br>Афрокосички создаются на срок от 1 месяца. Путем нехитрых подсчетов выясняем, что за это время у человека выпадает минимум 3000 волос. Вот именно их и вычесывают после расплетания косичек. Поэтому волноваться не стоит, потому что за это время выросло такое же количество новых волосков! К тому же &nbsp;волосы отдохнут от укладок, фенов и воздействия агрессивной среды.<br>А при правильном уходе за косами, они точно не принесут вам никакого вреда!</p><p style=\"line-height: 1.5;\"><br>Носите косы с удовольствием!)</p></div></div></div></div></div></div>\r\n  </div>\r\n</div></div></div></div></div></div>\r\n<p style=\"text-align: center;\"><img alt=\"Lorem Ipsum\" src=\"/public/media/img/2.jpg\" style=\"width: 600px; height: 550px; border-width: 1px; border-style: solid;\"></p><p style=\"margin-left: 40px;\"></p><p><div class=\"node node478 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node479 widget widget-spoiler\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"metahtml\"><div id=\"node479_meta\" class=\"code\"><div class=\"spoiler2\">\r\n  <div plp-spoiler-toggle=\"\" il-action=\"toggle\" class=\"spoiler2-header is-expanded\">\r\n    <div class=\"textable\"><p style=\"letter-spacing: 0.1em;\">еСТЬ ЛИ ПРОТИВОПОКАЗАНИЯ <span style=\"font-size: 14px;\">?</span></p></div>\r\n    <div class=\"spoiler2-toggle\">\r\n      <i class=\"fa fa-chevron-down\"></i>\r\n    </div>\r\n  </div>\r\n  <div style=\"display: block;\" plp-spoiler-container=\"\" class=\"spoiler2-container is-expanded\">\r\n    <div class=\"cont\"><div class=\"node node480 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"\"><div class=\"textable\"><p style=\"line-height: 1.5;\">&nbsp;Да, &nbsp;ни в коем случае не делай АФРОКОСЫ, если у тебя:</p><p style=\"line-height: 1.5;\"><br>Вегетососудистая дистония, частные головные боли, мигрени&nbsp;</p><p style=\"line-height: 1.5;\">Раны, ссадины, незажившие шрамы на голове&nbsp;</p><p style=\"line-height: 1.5;\">Хронические кожные заболевания, нейродермит, псориаз&nbsp;</p><p style=\"line-height: 1.5;\">Себорея&nbsp;</p><p style=\"line-height: 1.5;\">Выпадение волос, облысение</p><p style=\"line-height: 1.5;\"><br>В этих случаях афрокосы только усугубят твоё положение, береги себя и мир вокруг 💕&nbsp;</p></div></div></div></div></div></div>\r\n  </div>\r\n</div></div></div></div></div></div>\r\n<p style=\"text-align: center;\"><img alt=\"Lorem Ipsum\" src=\"/public/media/img/3.jpg\" style=\"width: 600px; height: 550px; border-width: 1px; border-style: solid;\"></p><p style=\"margin-left: 40px;\"></p><p><div class=\"node node481 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node482 widget widget-spoiler\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"metahtml\"><div id=\"node482_meta\" class=\"code\"><div class=\"spoiler2\">\r\n  <div plp-spoiler-toggle=\"\" il-action=\"toggle\" class=\"spoiler2-header is-expanded\">\r\n    <div class=\"textable\"><p style=\"letter-spacing: 0.1em;\"><span style=\"font-size: 14px;\">КАК УХАЖИВАТЬ ЗА АФРОКОСАМИ ?</span></p></div>\r\n    <div class=\"spoiler2-toggle\">\r\n      <i class=\"fa fa-chevron-down\"></i>\r\n    </div>\r\n  </div>\r\n  <div style=\"display: block;\" plp-spoiler-container=\"\" class=\"spoiler2-container is-expanded\">\r\n    <div class=\"cont\"><div class=\"node node483 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"\"><div class=\"textable\"><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Косички-самая неприхотливая прическа</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br>Они не требуют никакого специального ухода,но есть пару рекомендаций<br>Перед сном сплетите все косички в одну большую кому, так они меньше будут пушиться и сохранят дольше свой эстетический вид<br>Так же перед сном можно одеть платочек на голову, что бы у корней не выбивались пушковые волосы<br>Если вас смущают торчащие волоски из косичек, то тут только один способ, подрежте их, кстати мы тоже это делаем по вашему желанию когда заплетаем вас<br>Ну и конечно своевременная коррекция теменной зоны и окантовки поможет вам проходить с косами как можно дольше&nbsp;</span></p></div></div></div></div></div></div>\r\n  </div>\r\n</div></div></div></div></div></div><div class=\"node node484 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node485 widget widget-spoiler\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"metahtml\"><div id=\"node485_meta\" class=\"code\"><div class=\"spoiler2\">\r\n  <div plp-spoiler-toggle=\"\" il-action=\"toggle\" class=\"spoiler2-header is-expanded\">\r\n    <div class=\"textable\"><p style=\"letter-spacing: 0.1em;\"><span style=\"font-size: 14px;\">Как мыть афрокосы?<br></span></p></div>\r\n    <div class=\"spoiler2-toggle\">\r\n      <i class=\"fa fa-chevron-down\"></i>\r\n    </div>\r\n  </div>\r\n  <div style=\"display: block;\" plp-spoiler-container=\"\" class=\"spoiler2-container is-expanded\">\r\n    <div class=\"cont\"><div class=\"node node486 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"\"><div class=\"textable\"><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Этим вопросом задаются все, даже тот кто не собирается их себе плести<br></span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Моют афрокосички раз в неделю теплой водой с обычным шампунем</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br><span title=\"Отредактировано\">•</span> Слишком часто мыть не стоит – от этого внешний вид только ухудшится!<br><br>Лучше всего подойдет шампунь для нормальных волос, без содержания бальзамов и кондиционеров.&nbsp;</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Нужно немного шампуня нанести на губку, вспенить и промыть кожу головы (вся пена которая будет стекать по косам, соберёт с них всю грязь, отдельно косы мыть не нужно)</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br>!Важно тщательно смывать остатки шампуня!</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br><span title=\"Отредактировано\">•</span> Нельзя использовать масла, бальзамы и кондиционеры, так как они тяжело вымываются и только лишь утяжеляют наши косы!</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br>После слегка отжать косички и завернуть в полотенце, чтобы оно впитало остальную влагу.&nbsp;</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Досушивают голову при комнатной температуре обычным способом•<br></span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\">Можно высушить феном, ! только не рекомендуется использовать горячий воздух ! , так как он может повредить синтетический материал, лучше прохладный или теплый</span></p><p style=\"line-height: 1.5;\"><span title=\"Отредактировано\"><br><span title=\"Отредактировано\">•</span>Также посещать баню, сауну и находиться под палящим солнцем нужно в головном уборе.<br></span></p></div></div></div></div></div></div>\r\n  </div>\r\n</div></div></div></div></div></div><div class=\"node node487 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node488 widget widget-blank\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"padding\"></div></div></div></div><div class=\"node node489 widget widget-spoiler\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"metahtml\"><div id=\"node489_meta\" class=\"code\"><div class=\"spoiler2\">\r\n  <div plp-spoiler-toggle=\"\" il-action=\"toggle\" class=\"spoiler2-header is-collapsed\">\r\n    <div class=\"textable\"><p style=\"letter-spacing: 0.1em;\">как расплетаются афрокосы<span style=\"font-size: 14px;\">?</span></p></div>\r\n    <div class=\"spoiler2-toggle\">\r\n      <i class=\"fa fa-chevron-down\"></i>\r\n    </div>\r\n  </div>\r\n  <div style=\"display: none;\" plp-spoiler-container=\"\" class=\"spoiler2-container is-collapsed\">\r\n    <div class=\"cont\"><div class=\"node node490 widget widget-text\"><div class=\"wrapper1\"><div class=\"wrapper2\"><div class=\"\"><div class=\"textable\"><p style=\"line-height: 1.5;\">Есть два варианта:</p><p style=\"line-height: 1.5;\"><br>1️.Вы приезжаете к нам в студию и снимаем вам Косички, просто расплетая их, а дальше уже даем ЦУ<br>Процесс это не быстрый, занимает примерно столько же времени сколько и плетение, поэтому и цена соответствующая&nbsp;</p><p style=\"line-height: 1.5;\"><br>2.Вы сами садитесь одна, либо с подружками и расплетаете чудесные Косички.Расплетаются они очень легко, если это Зизи, то узелок развязывается, либо срезается и дальше как простая косичка все расплетается, если это афро с канекалоном, то тут вы отстригаете косу до ваших волос и тоже дальше расплетаете Косички .</p></div></div></div></div></div></div>\r\n  </div>\r\n</div></div></div></div></div></div></div></div><span class=\"plplink\"></span></div></div>', 'index', NULL, NULL, NULL),
(2, 'Услуги', 'что мы можем вам предложить', 'services', NULL, NULL, NULL),
(3, 'наши мастера', NULL, 'HAirMaster', NULL, NULL, NULL),
(4, 'карта проезда', 'вы можете найти нас по карте\r\n<iframe src=\"https://yandex.by/map-widget/v1/-/CBB9yNvclA\" width=\"100%\" height=\"400\" frameborder=\"1\" allowfullscreen=\"true\"></iframe>', 'map', NULL, NULL, NULL),
(5, 'галерея', 'наши работы', 'photo', NULL, NULL, NULL),
(6, 'прайс-лист', 'цены на наши услуги', 'price', NULL, NULL, NULL),
(7, 'контакты', 'свяжитесь с нами', 'contacts', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_25_121723_create_maintexts_table', 2),
(4, '2018_10_25_145114_create_feedback_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alesya', 'Alesyavalko@mail.ru', NULL, '$2y$10$7hLwGDoONjiD1JkmFpkZ6uQBTo9NLkXgEKT5wnG0aA9QiEflaPAX2', '6xJwVfVqspC1hQhjH4otl8GAvfXQ5WMN2ORUPgBAsXJpN5aiyRPW2nneMKXn', '2018-10-25 07:43:05', '2018-10-25 07:43:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
