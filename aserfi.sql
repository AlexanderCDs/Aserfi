-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2019 a las 14:31:35
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aserfi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` text COLLATE utf8mb4_unicode_ci,
  `usuarioalta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`id`, `clave`, `valor`, `usuarioalta`, `usuariomodificacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'CONTACTO', 'C. 16 No. 61A x 3 y 5 C.P. 97139 San Antonio Cinta. Mérida, Yucatán.', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(2, 'CONTACTO', '(999) 422 5312', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(3, 'CONTACTO', '(999) 322 8638', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(4, 'CONTACTO', 'fgonzalez@aserfi.mx', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 11:38:25'),
(5, 'QUIENESSOMOS', 'Somos una firma de profesionales especializados en el sector financiero, nuestro modelo de negocios se basa en capitalizar la competencia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posibles.', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(6, 'QUIENESSOMOS', 'Fernando González de Salceda Urbina', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(7, 'QUIENESSOMOS', 'Egresado de la Universidad de la Iberoamericana en Administración de Empresas con Maestría en Finanzas en el ITAM. Con 36 años de experiencia en el sector financiero.', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(8, 'QUIENESSOMOS', '5c8b6e2371771_1552641571.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:19:31'),
(9, 'QUIENESSOMOS', 'Fernando González de Salceda Heshem              ', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(10, 'QUIENESSOMOS', 'Egresado del Tecnológico de monterrey Campus Monterrey de la carrera de Ingeniería industrial con certificación en figura 3 de la Asociación Mexicana de Intermediario Bursátiles', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(11, 'QUIENESSOMOS', '5c8b6e9accfa7_1552641690.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:21:30'),
(12, 'VIDEO', '<svg version=\"1.1\" id=\"btn-play\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" height=\"100px\" width=\"100px\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 100 100\" xml:space=\"preserve\">\r\n              <path class=\"stroke-solid\" fill=\"none\" stroke=\"white\"  d=\"M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5\"/>\r\n              <path class=\"stroke-dotted\" fill=\"none\" stroke=\"white\"  d=\"M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5\"/>\r\n              <path class=\"icon\" fill=\"white\" d=\"M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z\"/>\r\n            </svg>', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(13, 'FINANCIAMIENTO', 'Nos encargamos de la elaboración y estructuración de proyectos de inversión para conseguir las mejores condiciones crediticias de acuerdo al mercado actual', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:00'),
(14, 'SERVICIOS_FINANCIAMIENTO', 'ELABORACIÓN DE PROYECTOS DE INVERSIÓN', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:00'),
(15, 'SERVICIOS_FINANCIAMIENTO', 'CRÉDITOS A LA MEDIDA', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:00'),
(16, 'SERVICIOS_FINANCIAMIENTO', 'MEJORA DE CONDICIONES', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:00'),
(17, 'SERVICIOS_INVERSION', 'Instrumentos y búsqueda de socios inversionistas', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:00'),
(18, 'SERVICIOS_PATRIMONIO', 'Trabajamos como consejeros y coach financieros', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:48:01'),
(19, 'BENEFICIOS_FINANCIAMIENTO', 'AHORROS EN TIEMPO DE RESPUESTAs', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:29:41'),
(20, 'BENEFICIOS_FINANCIAMIENTO', 'ELABORACIÓN DE PROYECTOS A LA MEDIDA s', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:29:32'),
(21, 'BENEFICIOS_FINANCIAMIENTO', 'SELECCIÓN DE INSTITUCIÓN ESPECIALIZADAs', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:29:41'),
(22, 'BENEFICIOS_FINANCIAMIENTO', 'MEJORA DE TÉRMINOS Y CONDICIONESs', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:29:41'),
(23, 'BENEFICIOS_FINANCIAMIENTO', 'MITIGACIÓN DE RIESGOS', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:31:02'),
(24, 'BENEFICIOS_INVERSION', '5c8b70b0882e8_1552642224.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:30:24'),
(25, 'BENEFICIOS_PATRIMONIO', 'ASESORAMIENTO', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(26, 'BENEFICIOS_PATRIMONIO', 'DIVERSIFICACIÓN', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(27, 'BENEFICIOS_PATRIMONIO', 'RENTABILIDAD dddd', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-13 12:29:13'),
(28, 'INICIO', 'LA SITUACIÓN DEL MERCADO A TU FAVOR', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(29, 'INICIO', 'LA SITUACIÓN DEL MERCADO', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-11 06:00:00'),
(30, 'INICIO', 'A TU FAVOR ', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(31, 'INICIO', '5c8b6e85027d8_1552641669.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:21:09'),
(32, 'INICIO', 'LA SITUACIÓN DEL MERCADO A TU FAVOR 2', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(33, 'INICIO', 'LA SITUACIÓN DEL MERCADO', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(34, 'INICIO', 'A TU FAVOR 2', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(35, 'INICIO', '5c8b6e85506e4_1552641669.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:21:09'),
(36, 'INICIO', 'LA SITUACIÓN DEL MERCADO A TU FAVOR 3', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(37, 'INICIO', 'LA SITUACIÓN DEL MERCADO', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 13:11:41'),
(38, 'INICIO', 'A TU FAVOR 3', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 12:22:11'),
(39, 'INICIO', '5c8b6e858db26_1552641669.png', 'SuperAdmin', 'SuperAdmin', 1, '2019-03-11 06:00:00', '2019-03-15 15:21:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_12_021357_crear_tabla_modulos', 1),
(2, '2018_10_12_021435_crear_tabla_perfiles', 1),
(3, '2018_10_12_021536_crear_tabla_permisos', 1),
(4, '2018_10_12_021643_create_password_resets_table', 1),
(5, '2018_10_12_021643_create_users_table', 1),
(6, '2018_10_14_050639_crear_tabla_perfilpermisos', 1),
(7, '2019_03_12_032621_create_table_configuraciones', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posicion` int(11) NOT NULL,
  `menu` tinyint(1) NOT NULL,
  `modulopadre_id` int(10) UNSIGNED DEFAULT NULL,
  `usuarioalta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`, `titulo`, `ruta`, `icono`, `posicion`, `menu`, `modulopadre_id`, `usuarioalta`, `usuariomodificacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Usuarios', 'Usuarios', 'Usuarios', 'person', 1, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(2, 'Carrusel', 'Carrusel', 'Carrusel', 'view_carousel', 2, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(3, 'Quiénes Somos', 'Quiénes Somos', 'QuienesSomos', 'help', 3, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(4, 'Servicios', 'Servicios', 'Servicios', 'room_service', 4, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(5, 'Beneficios', 'Beneficios', 'Beneficios', 'trending_up', 5, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(6, 'Contacto', 'Contacto', 'Contacto', 'people', 6, 0, NULL, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `perfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuarioalta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `perfil`, `clave`, `usuarioalta`, `usuariomodificacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'SuperAdmin', 'SuperAdministrador', 'SuperAdministrador', 1, '2019-03-10 06:00:00', '2019-03-10 06:00:00'),
(2, 'Administrador', 'Administrador', 'SuperAdministrador', 'SuperAdministrador', 1, '2019-03-10 06:00:00', '2019-03-10 06:00:00'),
(3, 'Empleado', 'Empleado', 'SuperAdministrador', 'SuperAdministrador', 1, '2019-03-10 06:00:00', '2019-03-10 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilpermisos`
--

CREATE TABLE `perfilpermisos` (
  `id` int(10) UNSIGNED NOT NULL,
  `permiso_id` int(10) UNSIGNED NOT NULL,
  `perfil_id` int(10) UNSIGNED NOT NULL,
  `usuarioalta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfilpermisos`
--

INSERT INTO `perfilpermisos` (`id`, `permiso_id`, `perfil_id`, `usuarioalta`, `usuariomodificacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(2, 2, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(3, 3, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(4, 4, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(5, 5, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(6, 6, 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(7, 1, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(8, 2, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(9, 3, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(10, 4, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(11, 5, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(12, 6, 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(13, 2, 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(14, 3, 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(15, 4, 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(16, 5, 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(17, 6, 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(10) UNSIGNED NOT NULL,
  `permiso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modulo_id` int(10) UNSIGNED NOT NULL,
  `usuarioalta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `permiso`, `clave`, `modulo_id`, `usuarioalta`, `usuariomodificacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Acceso a Usuarios', 'ACCESO_USUARIOS', 1, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(2, 'Acceso a Carrusel', 'ACCESO_CARRUSEL', 2, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(3, 'Acceso a Quiénes Somos', 'ACCESO_QUIENESSOMOS', 3, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(4, 'Acceso a Servicios', 'ACCESO_SERVICIOS', 4, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(5, 'Acceso a Beneficios', 'ACCESO_Beneficios', 5, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00'),
(6, 'Acceso a Contacto', 'ACCESO_CONTACTO', 6, 'SuperAdmin', 'SuperAdmin', 1, '2019-03-15 06:00:00', '2019-03-15 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `perfil_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primerApellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundoApellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuarioalta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuariomodificacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `perfil_id`, `name`, `primerApellido`, `segundoApellido`, `email`, `password`, `usuarioalta`, `usuariomodificacion`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Administrador', 'Del Sistema', NULL, 'arturochi2@hotmail.com', '$2y$10$G5c8eUj8u/LNvjT3qiF89O9R9b6aSXJLOycaP6rcp7t/gF.fRfkzm', 'Auth::user()->name', 'Auth::user()->name', 1, NULL, '2019-03-11 12:02:35', '2019-03-11 12:10:38'),
(2, 2, 'Administrador', 'Del Sistema', NULL, 'fgonzalez@aserfi.mx', '$2y$10$e0ilh4AqWoQpkrRbOZDpouqualf45ayGhDX/PIgBd2dwWo.m1Nbqy', 'Auth::user()->name', 'Auth::user()->name', 1, NULL, '2019-03-11 12:15:54', '2019-03-15 17:04:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulos_modulopadre_id_foreign` (`modulopadre_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilpermisos`
--
ALTER TABLE `perfilpermisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfilpermisos_permiso_id_foreign` (`permiso_id`),
  ADD KEY `perfilpermisos_perfil_id_foreign` (`perfil_id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permisos_modulo_id_foreign` (`modulo_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_perfil_id_foreign` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfilpermisos`
--
ALTER TABLE `perfilpermisos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_modulopadre_id_foreign` FOREIGN KEY (`modulopadre_id`) REFERENCES `modulos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `perfilpermisos`
--
ALTER TABLE `perfilpermisos`
  ADD CONSTRAINT `perfilpermisos_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perfilpermisos_permiso_id_foreign` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_modulo_id_foreign` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
