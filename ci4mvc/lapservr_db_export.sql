-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: oct. 22, 2022 la 10:56 PM
-- Versiune server: 10.4.25-MariaDB
-- Versiune PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `lapservr_db`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_status`, `createdAt`, `updatedAt`, `deletedAt`) VALUES
(1, 'laptopuri', 1, '2022-10-14 10:20:11', '2022-10-14 10:20:19', NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `customers`
--

CREATE TABLE `customers` (
  `customer_id` varchar(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_email` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_unique_code` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_unique_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
('677129842', 'DUMITRU ALIN', '0752900552', 'dumitru.mihailalin@gmail.com', 'SADSADA', '1867667779', '2022-10-22 08:32:55', '2022-10-22 08:32:55', NULL),
('71456631', 'Ionel', '075291231', 'Ionel@gmail.com', 'fsdfsafs', '666796033', '2022-10-22 10:59:55', '2022-10-22 10:59:55', NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `devices`
--

CREATE TABLE `devices` (
  `device_id` int(11) NOT NULL,
  `device_type` text NOT NULL,
  `device_category` int(11) NOT NULL,
  `device_serial` text NOT NULL,
  `device_name` text NOT NULL,
  `device_repair` text NOT NULL,
  `device_battery` tinyint(1) NOT NULL,
  `device_charger` tinyint(1) NOT NULL,
  `device_status` int(11) NOT NULL,
  `device_claimed` text NOT NULL,
  `device_model` varchar(50) NOT NULL,
  `device_customer_id` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `devices`
--

INSERT INTO `devices` (`device_id`, `device_type`, `device_category`, `device_serial`, `device_name`, `device_repair`, `device_battery`, `device_charger`, `device_status`, `device_claimed`, `device_model`, `device_customer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 1, '34twreg', 'SAMNSUNG', 'CEVA DE REPARAT', 1, 1, 2, 'CEVA DE Reclamat', 'X2', '677129842', '2022-10-22 08:36:02', '2022-10-22 08:44:53', NULL),
(2, '', 1, '', 'iphone', 'dsadasd', 1, 1, 1, 'asda', 'dsada', '677129842', '2022-10-22 08:57:45', '2022-10-22 08:57:45', NULL),
(3, '', 1, '', 'da', 'dasda', 1, 1, 1, 'dsada', 'fsaf', '677129842', '2022-10-22 08:58:24', '2022-10-22 08:58:24', NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-09-17-135546', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1663423410, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `statuses`
--

CREATE TABLE `statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL,
  `status_bg` varchar(20) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL,
  `deletedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `statuses`
--

INSERT INTO `statuses` (`status_id`, `status_name`, `status_bg`, `createdAt`, `updatedAt`, `deletedAt`) VALUES
(1, 'primit', 'warning', '2022-10-14 10:18:31', '2022-10-14 10:18:31', NULL),
(2, 'predat', 'success', '2022-10-17 05:40:28', '2022-10-17 05:40:28', NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'DUMITRU ', 'alin@gmail.com', '$2y$10$pX3IqLkGaP1Slv1.tYMPS.KEU4eUQShc/S7Aes3lTLy1Dd/Ef3.l.', '2022-09-17 10:59:38', '2022-09-17 10:59:38'),
(2, 'Mihai', 'mihai@lapserv.ro', '$2y$10$IQRnvHki7pTdAAJv4lqxP.IJz9rpO5IzJQDpXRUej0iD/RY0tYvLm', '2022-09-17 17:42:34', '2022-09-17 17:42:34');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexuri pentru tabele `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexuri pentru tabele `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexuri pentru tabele `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pentru tabele `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
