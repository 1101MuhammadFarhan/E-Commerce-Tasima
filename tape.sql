-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 06:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tape`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id_pemesanan`, `user_id`, `id_produk`, `jumlah_produk`, `created_at`, `updated_at`) VALUES
(39, '1', '1', '2', '2022-06-01 23:02:39', '2022-06-01 23:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_05_015731_create_carts_table', 2),
(6, '2022_05_21_065903_create_orders_table', 3),
(7, '2022_05_21_070239_create_orders_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` int(191) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Dikonfirmasi',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `nama_pemesan`, `email`, `no_telepon`, `alamat`, `total_harga`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`, `bukti_pembayaran`) VALUES
(34, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 65000, 'Sampai ke Pembeli', NULL, 'tasima1128', '2022-04-09 07:05:30', '2022-06-12 19:47:19', '1654783530.png'),
(44, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 300000, 'Sampai ke Pembeli', NULL, 'tasima1128', '2022-05-23 07:05:30', '2022-06-12 19:47:19', '1654783530.png'),
(46, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 300000, 'Sampai ke Pembeli', NULL, 'tasima1128', '2022-06-09 07:05:30', '2022-06-16 19:47:19', '1654783530.png'),
(47, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 230000, 'Sampai ke Pembeli', NULL, 'tasima1128', '2022-01-02 07:05:30', '2022-06-12 19:47:19', '1654783530.png'),
(48, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 600000, 'Sampai ke Pembeli', NULL, 'tasima1128', '2022-02-10 07:05:30', '2022-06-16 19:47:19', '1654783530.png'),
(51, '2', 'Farhan', 'farhan@gmail.com', '0812312731', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', 40000, 'Belum Dikonfirmasi', NULL, 'tasima5125', '2022-06-16 07:51:41', '2022-06-16 07:51:41', '1655391101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `id_produk`, `qty`, `total_harga`, `created_at`, `updated_at`) VALUES
(33, '26', '1', '1', '65000', '2022-05-29 20:29:40', '2022-05-29 20:29:40'),
(34, '27', '1', '1', '65000', '2022-06-01 23:00:59', '2022-06-01 23:00:59'),
(35, '28', '1', '2', '65000', '2022-06-01 23:03:56', '2022-06-01 23:03:56'),
(36, '29', '1', '2', '65000', '2022-06-01 23:04:15', '2022-06-01 23:04:15'),
(37, '30', '1', '1', '65000', '2022-06-01 23:10:15', '2022-06-01 23:10:15'),
(38, '31', '1', '1', '65000', '2022-06-05 21:25:51', '2022-06-05 21:25:51'),
(39, '32', '1', '1', '65000', '2022-06-05 21:26:12', '2022-06-05 21:26:12'),
(40, '33', '1', '1', '65000', '2022-06-05 21:28:27', '2022-06-05 21:28:27'),
(41, '34', '1', '1', '65000', '2022-06-09 07:05:30', '2022-06-09 07:05:30'),
(42, '35', '1', '1', '65000', '2022-06-12 20:10:00', '2022-06-12 20:10:00'),
(43, '36', '1', '1', '65000', '2022-06-12 20:10:39', '2022-06-12 20:10:39'),
(44, '37', '1', '2', '65000', '2022-06-16 05:26:11', '2022-06-16 05:26:11'),
(45, '39', '2', '3', '20000', '2022-06-16 06:07:41', '2022-06-16 06:07:41'),
(46, '39', '1', '2', '65000', '2022-06-16 06:07:41', '2022-06-16 06:07:41'),
(47, '40', '1', '3', '65000', '2022-06-16 06:27:16', '2022-06-16 06:27:16'),
(48, '50', '1', '3', '65000', '2022-06-16 07:35:15', '2022-06-16 07:35:15'),
(49, '51', '2', '2', '20000', '2022-06-16 07:51:41', '2022-06-16 07:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$zrOOVCQR.FMJpn0p69M9G.wESODBCfoHb5N6MKPwbOErBGw3mG2C6', '2022-05-07 06:18:47'),
('farhan@gmail.com', '$2y$10$1FSEOQKWivwdcRnDslp6B.AmK/Vp.oO.1qLzQyo4Rm061cb4aBKiO', '2022-06-16 09:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(191) NOT NULL,
  `harga_produk` int(191) NOT NULL,
  `foto_produk` blob NOT NULL,
  `stok_produk` varchar(191) NOT NULL,
  `proses_produksi` varchar(5000) NOT NULL,
  `foto_proses_produksi` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `stok_produk`, `proses_produksi`, `foto_proses_produksi`, `created_at`, `updated_at`) VALUES
(1, 'Prol Tape', 65000, 0x313635303136383435362e706e67, '20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque sem at bibendum ultrices. Proin cursus neque ac nisl condimentum rhoncus. Nullam at lacinia nunc, a accumsan velit. Suspendisse potenti. Duis massa augue, mattis quis ipsum vel, accumsan malesuada nunc. Aenean eget vestibulum dui, sit amet rhoncus ipsum. Aliquam porttitor laoreet justo, non pellentesque nisi auctor at. Ut ultrices vel eros ut luctus. Quisque nec purus a neque semper egestas eu id turpis. Sed et nunc vehicula, interdum urna ac, sodales urna. Cras tincidunt cursus lobortis. Suspendisse potenti. Suspendisse hendrerit erat neque, eu accumsan magna posuere et. Maecenas neque mi, maximus at ex et, malesuada condimentum ante. Donec pulvinar finibus lectus ac aliquet. Vestibulum a orci a quam accumsan feugiat.', 0x313635353339353331372e6a7067, '2022-04-16 21:03:21', '2022-06-16 09:01:57'),
(2, 'Tape Singkong', 20000, 0x313635333131373632372e6a7067, '20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque sem at bibendum ultrices. Proin cursus neque ac nisl condimentum rhoncus. Nullam at lacinia nunc, a accumsan velit. Suspendisse potenti. Duis massa augue, mattis quis ipsum vel, accumsan malesuada nunc. Aenean eget vestibulum dui, sit amet rhoncus ipsum. Aliquam porttitor laoreet justo, non pellentesque nisi auctor at. Ut ultrices vel eros ut luctus. Quisque nec purus a neque semper egestas eu id turpis. Sed et nunc vehicula, interdum urna ac, sodales urna. Cras tincidunt cursus lobortis. Suspendisse potenti. Suspendisse hendrerit erat neque, eu accumsan magna posuere et. Maecenas neque mi, maximus at ex et, malesuada condimentum ante. Donec pulvinar finibus lectus ac aliquet. Vestibulum a orci a quam accumsan feugiat.', 0x313635353339353439342e6a7067, '2022-05-07 06:32:28', '2022-06-16 09:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `profil_usaha`
--

CREATE TABLE `profil_usaha` (
  `idProfil_usaha` bigint(5) NOT NULL,
  `foto_profil` blob NOT NULL,
  `nama_usaha` varchar(191) NOT NULL,
  `pemilik_usaha` varchar(191) NOT NULL,
  `noTelepon` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_usaha`
--

INSERT INTO `profil_usaha` (`idProfil_usaha`, `foto_profil`, `nama_usaha`, `pemilik_usaha`, `noTelepon`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 0x313635303730313331332e504e47, 'TaSiMa', 'Saifudin', '0811360283', 'tasima@gmail.com', 'Jl. Mastrip No.70 d, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', '2022-04-23 01:08:33', '2022-04-23 01:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `no_telepon`, `alamat`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$z/f4N/a4gSSpMz/hmR4bI.ll7AOfZ3rQg8IQvncRPgq3ForBQRnQ6', '', '', 1, NULL, '2022-04-11 08:41:25', '2022-04-11 08:41:25'),
(2, 'Farhan', 'farhan@gmail.com', NULL, '$2y$10$hQtuvbeBOnSkz7ASpgsvEeEu7hoqQo7YxIB.LmYuNpqTeUyB.qCB.', '0812312731', 'Jawa Timur, Jember, Jl. Mastrip B 20', 0, '6zXV7tIe1z8Ey0obXKZXbT104lgmBPwA7bNp40KUGaPtQKZWguDhmoCM1blt', '2022-04-11 09:53:06', '2022-06-16 06:55:59'),
(3, 'didana', 'didana@gmail.com', NULL, '$2y$10$eaK.2RmkEzDurouuHtrEFeOl6V8udvpVAsZwRZSCxL.beuOh5TiO6', '', '', 0, NULL, '2022-04-16 05:11:37', '2022-04-16 05:11:37'),
(4, 'Ferrary', 'ferrary@gmail.com', NULL, '$2y$10$sdox5xHv6/bFVfgoZhi6uefG7OzmndUd6/uQS4gO.llC9FlENxD/C', '0812347232', 'Jawa Timur, Jember, Jl. Sumatra AB 40', 0, NULL, '2022-04-16 23:59:45', '2022-05-28 05:23:28'),
(6, 'Akbar Luqman', 'akbar@gmail.com', NULL, '$2y$10$TGqzXF.dZi27h5K0.pgWH.iAw0Yb1rmHusyIFdjN7LuW73f8NiC8a', '08112232', 'Jl. Kalimantan, A 12', 0, NULL, '2022-06-16 03:04:36', '2022-06-16 03:10:55'),
(7, 'Kevin', 'kevin@gmail.com', NULL, '$2y$10$hQtuvbeBOnSkz7ASpgsvEeEu7hoqQo7YxIB.LmYuNpqTeUyB.qCB.', '0823123148', 'Jl. Sumatra L 30', 0, NULL, '2022-06-16 06:57:02', '2022-06-16 06:57:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profil_usaha`
--
ALTER TABLE `profil_usaha`
  ADD PRIMARY KEY (`idProfil_usaha`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profil_usaha`
--
ALTER TABLE `profil_usaha`
  MODIFY `idProfil_usaha` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
