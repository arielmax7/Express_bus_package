-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2014 a las 02:20:03
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `express_bus_package`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_01_26_190914_create_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `address`, `phone`, `username`, `level`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mario', 'Gonzales', 'mario@gmail.com', 'calle 20 de mayo #100', 5452100, 'mario', 1, '$2y$10$IzJ/4GJRqMeTEh3WOAOrD.NU.pqmHBb/TWIc3PSekeok/rUcCSFG.', '2014-02-20 18:54:13', '2014-02-20 18:54:13'),
(2, 'Carlos', 'Sanchez', 'peds@gmail.com', 'calle junin #100', 5452100, 'pe', 0, '$2y$10$w2ZXene/z9i2kP.W1x3JMe4o8QJdLmvzSGljNCIgnllX3JdvoPnX6', '2014-02-20 18:56:59', '2014-02-23 04:41:03'),
(6, 'pablo', 'contreras', 'pablito@hotmail.com', 'calle beni #546', 458721212, 'pablo', 1, '$2y$10$s/6mIDjkCBkXf6QXgdzL3usBERgrSepG25JIB0hI9vL2TKu8c6gT2', '2014-02-23 04:11:56', '2014-02-23 04:11:56'),
(7, 'Juan', 'Rodriges', 'JuanR@gmail.com', 'topater #223', 4542121, 'pabli', 0, '$2y$10$nS.5276Uz3gbkcDmxawjmuroN8VvVi3TrYjueCV2oxR5nsemy1z36', '2014-02-23 04:13:12', '2014-02-23 04:40:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
