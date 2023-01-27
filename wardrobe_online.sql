-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2022 г., 23:30
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wardrobe_online`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clothes`
--

CREATE TABLE `clothes` (
  `clothesID` int NOT NULL,
  `clothesName` varchar(100) NOT NULL,
  `clothesInfo` varchar(1000) NOT NULL,
  `clothesImageURL` varchar(1000) NOT NULL,
  `clothesGender` varchar(100) NOT NULL,
  `clothesSVG` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clothes`
--

INSERT INTO `clothes` (`clothesID`, `clothesName`, `clothesInfo`, `clothesImageURL`, `clothesGender`, `clothesSVG`) VALUES
(20, 'Футболка', 'Футболка давно стала неотъемлемой частью базового гардероба как женщин, так и мужчин любого возраста. Удобная и во многом универсальная вещь не только идеально дополняет комплекты одежды спортивного и повседневного стилей, но и отлично комбинируется со строгими, классическими нарядами.', 't-shirt.jpg', 'female', '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\"/><path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\"/><path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\"/><path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"/><path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"collar\" d=\"\"/></g>\r\n<g id=\"pieceClothing\" class=\"move-item\" transform=translate(0,0)><path id=\"strokePieceClothing\" class=\"pocket\" transform=rotate(0) d=\"\"/></g>\r\n<g id=\"sizeMarkers\">\r\n    <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"360\" y=\"138\"></text>\r\n    <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"360\" y=\"280\"></text>\r\n    <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"360\" y=\"377\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\r\n    <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\r\n    <path class=\"marker-line\" d=\"M 335 75 335 425\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\r\n</g>\r\n</svg>'),
(25, 'Футболка', 'Футболка давно стала неотъемлемой частью базового гардероба как женщин, так и мужчин любого возраста. Удобная и во многом универсальная вещь не только идеально дополняет комплекты одежды спортивного и повседневного стилей, но и отлично комбинируется со строгими, классическими нарядами', 't-shirt.jpg', 'male', '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\"/><path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\"/><path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\"/><path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"/><path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"/></g>\r\n<g id=\"pieceClothing\"><path id=\"strokePieceClothing\" class=\"collar\" d=\"\"/></g>\r\n<g id=\"pieceClothing\" class=\"move-item\" transform=translate(0,0)><path id=\"strokePieceClothing\" class=\"pocket\" transform=rotate(0) d=\"\"/></g>\r\n<g id=\"sizeMarkers\">\r\n    <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"360\" y=\"138\"></text>\r\n    <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"360\" y=\"280\"></text>\r\n    <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\" />\r\n    <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"360\" y=\"377\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\r\n    <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\r\n    <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\r\n    <path class=\"marker-line\" d=\"M 335 75 335 425\" />\r\n    <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\r\n</g>\r\n</svg>');

-- --------------------------------------------------------

--
-- Структура таблицы `clothes_colors`
--

CREATE TABLE `clothes_colors` (
  `colorID` int NOT NULL,
  `colorType` varchar(100) NOT NULL,
  `colorValue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clothes_colors`
--

INSERT INTO `clothes_colors` (`colorID`, `colorType`, `colorValue`) VALUES
(1, 'color', 'E30000'),
(2, 'color', '1e881e'),
(3, 'color', '000'),
(4, 'color', 'dfdf13'),
(5, 'color', 'db6bdb'),
(7, 'color', 'fff');

-- --------------------------------------------------------

--
-- Структура таблицы `clothes_details`
--

CREATE TABLE `clothes_details` (
  `detailID` int NOT NULL,
  `detailType` varchar(100) NOT NULL,
  `detailMoveStatus` varchar(100) NOT NULL,
  `detailSVG` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clothes_details`
--

INSERT INTO `clothes_details` (`detailID`, `detailType`, `detailMoveStatus`, `detailSVG`) VALUES
(2, 'collar', 'static', 'M 335 75 330 77.5 340 105 C 340 105 375 125 410 105 L 420 77.5 415 75 405 100 C 405 100 375 115 345 100 z'),
(3, 'pocket', 'move', 'M 335 270 415 270 425 315 420 330 330 330 325 315 z');

-- --------------------------------------------------------

--
-- Структура таблицы `clothes_sizes`
--

CREATE TABLE `clothes_sizes` (
  `sizeID` int NOT NULL,
  `sizeTag` varchar(10) NOT NULL,
  `sizeGender` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sizeBreast` int NOT NULL,
  `sizeWaist` int NOT NULL,
  `sizeHip` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clothes_sizes`
--

INSERT INTO `clothes_sizes` (`sizeID`, `sizeTag`, `sizeGender`, `sizeBreast`, `sizeWaist`, `sizeHip`) VALUES
(1, 'XXS', 'female', 76, 58, 82),
(2, 'XXS', 'male', 88, 70, 92),
(3, 'XS', 'female', 80, 62, 86),
(4, 'XS', 'male', 92, 76, 96),
(5, 'S', 'female', 84, 66, 92),
(6, 'S', 'male', 96, 82, 100),
(7, 'M', 'female', 88, 70, 96),
(8, 'M', 'male', 100, 88, 104),
(9, 'L', 'female', 96, 74, 100),
(10, 'L', 'male', 104, 94, 108),
(11, 'XL', 'female', 104, 86, 112),
(12, 'XL', 'male', 108, 100, 112),
(13, 'XXL', 'female', 108, 90, 116),
(14, 'XXL', 'male', 112, 106, 116);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `userLogin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userRole` varchar(20) NOT NULL,
  `userGender` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userBreast` float NOT NULL,
  `userWaist` float NOT NULL,
  `userHip` float NOT NULL,
  `userShouldersW` float NOT NULL,
  `userNeck` float NOT NULL,
  `userShouldersG` float NOT NULL,
  `userSleeveLength` float NOT NULL,
  `userProdLength` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userID`, `userLogin`, `userPassword`, `userRole`, `userGender`, `userBreast`, `userWaist`, `userHip`, `userShouldersW`, `userNeck`, `userShouldersG`, `userSleeveLength`, `userProdLength`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 'male', 17.4, 86, 45, 95, 65, 90, 23, 23),
(7, 'pixel', 'c4ca4238a0b923820dcc509a6f75849b', 'user', 'male', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_works`
--

CREATE TABLE `user_works` (
  `userWorkID` int NOT NULL,
  `userID` int NOT NULL,
  `clothesID` int NOT NULL,
  `userWorkSVG` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user_works`
--

INSERT INTO `user_works` (`userWorkID`, `userID`, `clothesID`, `userWorkSVG`) VALUES
(20, 7, 1, '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\n                            \n                            <defs>\n                              <pattern id=\"bg\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&amp;d=identicon&amp;r=PG\"></image>\n                              </pattern>\n                              \n                              <pattern id=\"bgh\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://i.stack.imgur.com/V2XAq.jpg\"></image>\n                              </pattern>\n                            </defs>\n\n                            <!-- левая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\" fill=\"#E30000\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"></path>\n                            </g>\n    \n                            <!-- правая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\" fill=\"#E30000\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"></path>\n                            </g>\n\n                            <!-- торс -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\" fill=\"#E30000\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"></path>\n                            </g>\n    \n                            <!-- статичные детали -->\n                            <g id=\"pieceClothing\">\n                                <path id=\"strokePieceClothing\" class=\"collar\" d=\"\"></path>\n                            </g>\n\n                            <!-- Движущиеся детали -->\n                            <g id=\"pieceClothing\" class=\"move-item\" transform=\"translate(0,0)\">\n                                <path id=\"strokePieceClothing\" class=\"pocket\" transform=\"rotate(0)\" d=\"\"></path>\n                            </g>\n\n                            <!-- Маркеры размера -->\n                            <g id=\"sizeMarkers\">\n                                <!-- Обхват груди -->\n                                <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"300\" y=\"138\"></text>\n\n                                <!-- Обхват талии -->\n                                <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"300\" y=\"280\"></text>\n\n                                <!-- Обхват бедер -->\n                                <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"300\" y=\"377\"></text>\n\n                                <!-- Ширина плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\n\n                                <!-- Обхват шеи -->\n                                <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\n                                \n                                <!-- Обхват плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\n\n                                <!-- Длина рукава -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\n\n                                <!-- Длина изделия -->\n                                <path class=\"marker-line\" d=\"M 335 75 335 425\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\n                            </g>\n\n                        </svg>'),
(27, 1, 20, '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\n                            \n                            <defs>\n                              <pattern id=\"bg\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&amp;d=identicon&amp;r=PG\"></image>\n                              </pattern>\n                              \n                              <pattern id=\"bgh\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://i.stack.imgur.com/V2XAq.jpg\"></image>\n                              </pattern>\n                            </defs>\n\n                            <!-- левая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\" fill=\"#dfdf13\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"></path>\n                            </g>\n    \n                            <!-- правая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\" fill=\"#dfdf13\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"></path>\n                            </g>\n\n                            <!-- торс -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\" fill=\"#E30000\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"></path>\n                            </g>\n    \n                            <!-- статичные детали -->\n                            <g id=\"pieceClothing\">\n                                <path id=\"strokePieceClothing\" class=\"collar\" d=\"\"></path>\n                            </g>\n\n                            <!-- Движущиеся детали -->\n                            <g id=\"pieceClothing\" class=\"move-item\" transform=\"translate(0,0)\">\n                                <path id=\"strokePieceClothing\" class=\"pocket\" transform=\"rotate(0)\" d=\"\"></path>\n                            </g>\n\n                            <!-- Маркеры размера -->\n                            <g id=\"sizeMarkers\" fill=\"none\" stroke=\"black\" stroke-width=\"2\">\n                                <!-- Обхват груди -->\n                                <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"300\" y=\"138\"></text>\n\n                                <!-- Обхват талии -->\n                                <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"300\" y=\"280\"></text>\n\n                                <!-- Обхват бедер -->\n                                <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"300\" y=\"377\"></text>\n\n                                <!-- Ширина плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\n\n                                <!-- Обхват шеи -->\n                                <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\n                                \n                                <!-- Обхват плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\n\n                                <!-- Длина рукава -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\n\n                                <!-- Длина изделия -->\n                                <path class=\"marker-line\" d=\"M 335 75 335 425\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\n                            </g>\n\n                        </svg>'),
(28, 1, 20, '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\n                            \n                            <defs>\n                              <pattern id=\"bg\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&amp;d=identicon&amp;r=PG\"></image>\n                              </pattern>\n                              \n                              <pattern id=\"bgh\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://i.stack.imgur.com/V2XAq.jpg\"></image>\n                              </pattern>\n                            </defs>\n\n                            <!-- левая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\" fill=\"#db6bdb\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"></path>\n                            </g>\n    \n                            <!-- правая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\" fill=\"#db6bdb\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"></path>\n                            </g>\n\n                            <!-- торс -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\" fill=\"#1e881e\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"></path>\n                            </g>\n    \n                            <!-- статичные детали -->\n                            <g id=\"pieceClothing\">\n                                <path id=\"strokePieceClothing\" class=\"collar\" d=\"\"></path>\n                            </g>\n\n                            <!-- Движущиеся детали -->\n                            <g id=\"pieceClothing\" class=\"move-item\" transform=\"translate(0,0)\">\n                                <path id=\"strokePieceClothing\" class=\"pocket\" transform=\"rotate(0)\" d=\"\"></path>\n                            </g>\n\n                            <!-- Маркеры размера -->\n                            <g id=\"sizeMarkers\" fill=\"none\" stroke=\"black\" stroke-width=\"2\">\n                                <!-- Обхват груди -->\n                                <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"300\" y=\"138\"></text>\n\n                                <!-- Обхват талии -->\n                                <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"300\" y=\"280\"></text>\n\n                                <!-- Обхват бедер -->\n                                <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"300\" y=\"377\"></text>\n\n                                <!-- Ширина плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\n\n                                <!-- Обхват шеи -->\n                                <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\n                                \n                                <!-- Обхват плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\n\n                                <!-- Длина рукава -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\n\n                                <!-- Длина изделия -->\n                                <path class=\"marker-line\" d=\"M 335 75 335 425\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\n                            </g>\n\n                        </svg>'),
(29, 1, 20, '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\n                            \n                            <defs>\n                              <pattern id=\"bg\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&amp;d=identicon&amp;r=PG\"></image>\n                              </pattern>\n                              \n                              <pattern id=\"bgh\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://i.stack.imgur.com/V2XAq.jpg\"></image>\n                              </pattern>\n                            </defs>\n\n                            <!-- левая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\" fill=\"#dfdf13\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"></path>\n                            </g>\n    \n                            <!-- правая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\" fill=\"#dfdf13\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"></path>\n                            </g>\n\n                            <!-- торс -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\" fill=\"#dfdf13\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"></path>\n                            </g>\n    \n                            <!-- статичные детали -->\n                            <g id=\"pieceClothing\">\n                                <path id=\"strokePieceClothing\" class=\"collar\" d=\"\"></path>\n                            </g>\n\n                            <!-- Движущиеся детали -->\n                            <g id=\"pieceClothing\" class=\"move-item piece-clothing-select\" transform=\"translate(0,0)\">\n                                <path id=\"strokePieceClothing\" class=\"pocket\" transform=\"rotate(0)\" d=\"M 335 270 415 270 425 315 420 330 330 330 325 315 z\" fill=\"#db6bdb\" style=\"transform: rotate(0deg);\"></path>\n                            </g>\n\n                            <!-- Маркеры размера -->\n                            <g id=\"sizeMarkers\" fill=\"none\" stroke=\"black\" stroke-width=\"2\">\n                                <!-- Обхват груди -->\n                                <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"300\" y=\"138\"></text>\n\n                                <!-- Обхват талии -->\n                                <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"300\" y=\"280\"></text>\n\n                                <!-- Обхват бедер -->\n                                <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"300\" y=\"377\"></text>\n\n                                <!-- Ширина плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\n\n                                <!-- Обхват шеи -->\n                                <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\n                                \n                                <!-- Обхват плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\n\n                                <!-- Длина рукава -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\n\n                                <!-- Длина изделия -->\n                                <path class=\"marker-line\" d=\"M 335 75 335 425\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\n                            </g>\n\n                        </svg>'),
(30, 1, 20, '<svg viewBox=\"0 0 750 500\" class=\"clothes\">\n                            \n                            <defs>\n                              <pattern id=\"bg\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://www.gravatar.com/avatar/9bd620150717350f66401d7f9590a8b2?s=32&amp;d=identicon&amp;r=PG\"></image>\n                              </pattern>\n                              \n                              <pattern id=\"bgh\" x=\"0\" y=\"0\" patternUnits=\"userSpaceOnUse\" height=\"30\" width=\"30\">\n                                <image xlink:href=\"https://i.stack.imgur.com/V2XAq.jpg\"></image>\n                              </pattern>\n                            </defs>\n\n                            <!-- левая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"left-hand\" d=\"M 275 100 200 190 250 250 275 230 z\" fill=\"url(#bg)\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 200 190 C 200 190 230 210 250 250 z\"></path>\n                            </g>\n    \n                            <!-- правая рука -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"right-hand\" d=\"M 475 100 550 190 500 250 475 230 z\" fill=\"url(#bg)\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 550 190 C 550 190 520 210 500 250 z\"></path>\n                            </g>\n\n                            <!-- торс -->\n                            <g id=\"pieceClothing\" class=\"\">\n                                <path id=\"strokePieceClothing\" class=\"torso\" d=\"M 335 75 275 100 275 230 265 425 485 425 475 230 475 100 415 75 C 415 75 375 85 335 75\" fill=\"url(#bg)\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 335 75 345 100 C 345 100 375 115 405 100 L 415 75 M 415 75 C 415 75 375 85 335 75\"></path>\n                                <path id=\"shadowPieceClothing\" d=\"M 265 425 C 380 425 375 410 485 425 z\"></path>\n                            </g>\n    \n                            <!-- статичные детали -->\n                            <g id=\"pieceClothing\">\n                                <path id=\"strokePieceClothing\" class=\"collar\" d=\"\"></path>\n                            </g>\n\n                            <!-- Движущиеся детали -->\n                            <g id=\"pieceClothing\" class=\"move-item\" transform=\"translate(0,0)\">\n                                <path id=\"strokePieceClothing\" class=\"pocket\" transform=\"rotate(0)\" d=\"\"></path>\n                            </g>\n\n                            <!-- Маркеры размера -->\n                            <g id=\"sizeMarkers\" fill=\"none\" stroke=\"black\" stroke-width=\"2\">\n                                <!-- Обхват груди -->\n                                <path class=\"marker-line international-parameter compareBreast\" d=\"M 275 137.5 C 275 137.5 375 147.5 475 137.5\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerBreast\" x=\"300\" y=\"138\"></text>\n\n                                <!-- Обхват талии -->\n                                <path class=\"marker-line international-parameter compareWaist\" d=\"M 272.5 278.75 C 272.5 278.75 375 290 477.5 278.75\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerWaist\" x=\"300\" y=\"280\"></text>\n\n                                <!-- Обхват бедер -->\n                                <path class=\"marker-line international-parameter compareHip\" d=\"M 267.5 376.25 C 267.5 376.25 375 386.5 482.5 376.25\"></path>\n                                <text class=\"marker-value international-parameter\" id=\"valueMarkerHip\" x=\"300\" y=\"377\"></text>\n\n                                <!-- Ширина плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 300 80 335 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersW\" x=\"285\" y=\"75\"></text>\n\n                                <!-- Обхват шеи -->\n                                <path class=\"marker-line\" d=\"M 335 75 C 335 75 375 65 415 75\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerNeck\" x=\"360\" y=\"65\"></text>\n                                \n                                <!-- Обхват плеч -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 267 165 275 230\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerShouldersG\" x=\"235\" y=\"170\"></text>\n\n                                <!-- Длина рукава -->\n                                <path class=\"marker-line\" d=\"M 275 100 C 275 100 233 135 200 190\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerSleeve\" x=\"205\" y=\"130\"></text>\n\n                                <!-- Длина изделия -->\n                                <path class=\"marker-line\" d=\"M 335 75 335 425\"></path>\n                                <text class=\"marker-value\" id=\"valueMarkerLength\" x=\"295\" y=\"250\"></text>\n                            </g>\n\n                        </svg>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`clothesID`);

--
-- Индексы таблицы `clothes_colors`
--
ALTER TABLE `clothes_colors`
  ADD PRIMARY KEY (`colorID`);

--
-- Индексы таблицы `clothes_details`
--
ALTER TABLE `clothes_details`
  ADD PRIMARY KEY (`detailID`);

--
-- Индексы таблицы `clothes_sizes`
--
ALTER TABLE `clothes_sizes`
  ADD PRIMARY KEY (`sizeID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Индексы таблицы `user_works`
--
ALTER TABLE `user_works`
  ADD PRIMARY KEY (`userWorkID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clothes`
--
ALTER TABLE `clothes`
  MODIFY `clothesID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `clothes_colors`
--
ALTER TABLE `clothes_colors`
  MODIFY `colorID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `clothes_details`
--
ALTER TABLE `clothes_details`
  MODIFY `detailID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `clothes_sizes`
--
ALTER TABLE `clothes_sizes`
  MODIFY `sizeID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_works`
--
ALTER TABLE `user_works`
  MODIFY `userWorkID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
