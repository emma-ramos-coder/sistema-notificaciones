-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2023 a las 02:15:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `py_notificaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Comunicado', '2023-12-25 22:54:23', '2023-12-25 22:54:23'),
(3, 'Evento', '2023-12-25 22:56:49', '2023-12-25 22:56:49'),
(4, 'Noticia', '2023-12-25 22:57:31', '2023-12-25 22:57:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_12_25_035317_create_categories_table', 2),
(7, '2023_12_25_035417_create_notifications_table', 2),
(10, '2023_12_26_171007_create_receivers_table', 3),
(11, '2023_12_26_171430_create_notification_details_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `destinatario` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` varchar(15) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id`, `titulo`, `contenido`, `destinatario`, `fecha_inicio`, `fecha_fin`, `estado`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Suspención de Labores 28 diciembre', 'Comunicado de suspensión de labores por el día 28/12/2023 por motivo de corte de agua.', 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '2023-12-26', '2023-12-28', 'activo', 1, 1, '2023-12-26 23:51:34', '2023-12-26 23:51:34'),
(6, 'Presentación de folder de EFSRT', 'Presentación del folder de EFSRT el día viernes 29 de diciembre de 2023 de 8:00 a 9.00 am', 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '2023-12-27', '2023-12-29', 'Activo', 1, 2, '2023-12-28 09:08:46', '2023-12-29 01:24:15'),
(7, 'Reunión con delegados y tutores', 'El Viernes 29 de diciembre a las 12.30 m. se realizará una reunión en el aula 1 del 2do piso, para informe de fin de año', 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com, elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '2023-12-28', '2023-12-29', 'Activo', 1, 2, '2023-12-28 10:35:02', '2023-12-28 10:35:02'),
(10, 'Ceremonia de Aniversario', 'El jefe del área académica, docentes y alumnos se complacen en invitarlo a la ceremonia central pro el V Aniversario de la Carrera el día 6 de diciembre a las 8:00 am.', 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com, elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '2023-12-01', '2023-12-06', 'Inactivo', 1, 2, '2023-12-29 00:40:30', '2023-12-29 00:40:30'),
(11, 'Reunion DSI IV Noche', 'EL día 28 a las 5:00 p.m. se llevrá a cabo una reunión del grupo DSI IV noche', 'elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '2023-12-28', '2023-12-28', 'Activo', 1, 2, '2023-12-29 01:22:32', '2023-12-29 01:22:32'),
(12, 'Reunion de docentes', 'El día 28 de diciembre a las 15.00 h se realizará una reunión en el aula 201', 'fcalisaya@gmail.com, efernandez@gmail.com', '2023-12-27', '2023-12-28', 'Activo', 1, 2, '2023-12-29 01:35:05', '2023-12-29 01:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification_details`
--

CREATE TABLE `notification_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notification_details`
--

INSERT INTO `notification_details` (`id`, `notification_id`, `receiver_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '980432516, 987654123, 989456123', '2023-12-26 23:58:42', '2023-12-26 23:58:42'),
(4, 6, 5, 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '980432516, 987654123, 989456123', '2023-12-28 09:08:46', '2023-12-28 09:08:46'),
(5, 6, 7, 'elopez@gmail.com', '951951951', '2023-12-28 09:08:46', '2023-12-28 09:08:46'),
(6, 7, 5, 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '980432516, 987654123, 989456123', '2023-12-28 10:35:02', '2023-12-28 10:35:02'),
(7, 7, 10, 'elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '951951951, 956956956, 963963963', '2023-12-28 10:35:02', '2023-12-28 10:35:02'),
(13, 10, 5, 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '980432516, 987654123, 989456123', '2023-12-29 00:40:30', '2023-12-29 00:40:30'),
(14, 10, 10, 'elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '951951951, 956956956, 963963963', '2023-12-29 00:40:30', '2023-12-29 00:40:30'),
(15, 11, 10, 'elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '951951951, 956956956, 963963963', '2023-12-29 01:22:32', '2023-12-29 01:22:32'),
(16, 6, 5, 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '980432516, 987654123, 989456123', '2023-12-29 01:24:15', '2023-12-29 01:24:15'),
(17, 12, 11, 'fcalisaya@gmail.com', '946 636 970', '2023-12-29 01:35:05', '2023-12-29 01:35:05'),
(18, 12, 12, 'efernandez@gmail.com', '945 945 945', '2023-12-29 01:35:05', '2023-12-29 01:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receivers`
--

CREATE TABLE `receivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `receivers`
--

INSERT INTO `receivers` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Emma Ramos', '980432516', 'emmyramosc@gmail.com', '2023-12-26 20:31:31', '2023-12-26 20:31:31'),
(3, 'Jack Peredo', '987654123', 'jperedo@gmail.com', '2023-12-26 21:26:50', '2023-12-26 21:26:50'),
(4, 'Eduardo Cruz', '989456123', 'ecruz@gmail.com', '2023-12-26 23:56:49', '2023-12-26 23:56:49'),
(5, 'Alumnos DSI-IV D', '980432516, 987654123, 989456123', 'emmyramosc@gmail.com, jperedo@gmail.com, ecruz@gmail.com', '2023-12-26 23:56:49', '2023-12-26 23:56:49'),
(7, 'Eliali Lopez', '951951951', 'elopez@gmail.com', '2023-12-28 09:02:10', '2023-12-28 09:03:49'),
(8, 'Erick Machaca', '956956956', 'emachaca@gmail.com', '2023-12-28 09:03:14', '2023-12-28 09:03:14'),
(9, 'Ingrid Barrios', '963963963', 'ibarrios@gmail.com', '2023-12-28 09:03:35', '2023-12-28 09:03:35'),
(10, 'Alumnos DSI-IV N', '951951951, 956956956, 963963963', 'elopez@gmail.com, emachaca@gmail.com, ibarrios@gmail.com', '2023-12-28 09:04:54', '2023-12-28 09:04:54'),
(11, 'Filomeno Calisaya', '946 636 970', 'fcalisaya@gmail.com', '2023-12-29 01:33:09', '2023-12-29 01:33:09'),
(12, 'Edú Fernández', '945 945 945', 'efernandez@gmail.com', '2023-12-29 01:34:00', '2023-12-29 01:34:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `job`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omar Valencia', 'Coordinador DSI', '980432516', 'ovalencia@gmail.com', NULL, '$2y$12$G1684NNhoKOtZ1npdumwqeslLHXKaJU3n8VtTjAefo.zF3N8Td8JO', NULL, '2023-12-25 08:25:33', '2023-12-25 08:25:33'),
(2, 'Yovani Quinteros', 'Tutor DSI-IV Día', '975986954', 'admin@gmail.com', NULL, '$2y$12$5KvM3YLByERxLJGnuVN8L.U1qNz7fEdPRSK7hfTNG7LiKmKMlQwdq', NULL, '2023-12-25 08:27:31', '2023-12-25 08:27:31'),
(3, 'Omar Banda', 'Tutor DSI-IV Noche', '945785124', 'obanda@gmail.com', NULL, '$2y$12$2n0l.92bz/Z8vGptnykod.m3WhPa6zKWDWRqUvHUcIQ/D5YpmP9ZW', NULL, '2023-12-27 06:14:27', '2023-12-27 06:14:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_category_id_foreign` (`category_id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `notification_details`
--
ALTER TABLE `notification_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_details_notification_id_foreign` (`notification_id`),
  ADD KEY `notification_details_receiver_id_foreign` (`receiver_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receivers_phone_unique` (`phone`),
  ADD UNIQUE KEY `receivers_email_unique` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `notification_details`
--
ALTER TABLE `notification_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notification_details`
--
ALTER TABLE `notification_details`
  ADD CONSTRAINT `notification_details_notification_id_foreign` FOREIGN KEY (`notification_id`) REFERENCES `notifications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_details_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `receivers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
