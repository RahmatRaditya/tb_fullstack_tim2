-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Jun 2023 pada 09.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_salesvisit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `barang_code` varchar(32) NOT NULL,
  `barang_name` varchar(255) NOT NULL,
  `barang_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`barang_id`, `barang_code`, `barang_name`, `barang_qty`, `created_at`, `updated_at`) VALUES
(10, 'BSN001', 'Nike Air Jordan MX', 125, '2023-06-07 00:20:30', '2023-06-19 07:11:13'),
(13, 'BSA002', 'Adidas Yolo V', 32, '2023-06-07 00:20:30', '2023-06-19 07:11:18'),
(14, 'BNN003', 'Nike Nmax - White Edition', 45, '2023-06-07 00:20:30', '2023-06-19 07:11:25'),
(17, 'BCG004', 'Compass Green Army - Clasic High', 73, '2023-06-07 00:20:30', '2023-06-19 07:11:33'),
(18, 'BPO006', 'Oxvord Pantofel - Full Black', 34, '2023-06-07 00:20:30', '2023-06-19 07:11:42'),
(23, 'BPS001', 'Spotless Parfum Sepatu', 235, '2023-06-07 00:20:30', '2023-06-19 07:11:03'),
(35, 'BBD007', 'BRODO Husher', 29, '2023-06-07 23:20:33', '2023-06-19 07:12:18'),
(36, 'BJH008', 'Jhonson Pro Lowcut - Black', 52, '2023-06-07 23:20:33', '2023-06-19 07:12:53'),
(43, 'BGN009', 'Gabino Slip On Ben', 15, '2023-06-07 23:20:33', '2023-06-19 07:13:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2023_05_10_022557_create_sales_table', 2),
(11, '2023_05_10_023222_create_outlets_table', 3),
(13, '2023_05_10_024042_create_barangs_table', 4),
(16, '2023_06_07_072846_create_transaksi_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlets`
--

CREATE TABLE `outlets` (
  `outlet_id` bigint(20) UNSIGNED NOT NULL,
  `outlet_name` varchar(255) NOT NULL,
  `outlet_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outlets`
--

INSERT INTO `outlets` (`outlet_id`, `outlet_name`, `outlet_address`, `created_at`, `updated_at`) VALUES
(3, 'Outlet Mampang', 'Jl. Sejati No.19, Mampang Prapatan, Jakarta Selatan', '2023-05-11 06:51:01', '2023-06-19 07:04:35'),
(6, 'Outlet Tebet', 'Jl. Kilo, No 7, Tebet, Jakarta Selatan', '2023-05-18 01:23:55', '2023-06-19 07:04:26'),
(9, 'Outlet Gandaria', 'Jl. Tengah No.3, Gandaria Utara, Kebayoran Lama, Jakarta Selatan', '2023-06-07 23:29:36', '2023-06-19 07:05:27'),
(10, 'Oulet Kemang', 'Jl Semangat No.12D Blok H , Jakarta Selatan', '2023-06-19 07:06:10', '2023-06-19 07:06:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_nomor` varchar(32) NOT NULL,
  `id` bigint(11) NOT NULL,
  `barang_id` bigint(11) NOT NULL,
  `outlet_id` bigint(11) NOT NULL,
  `transaksi_display` int(11) NOT NULL,
  `transaksi_visit` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_nomor`, `id`, `barang_id`, `outlet_id`, `transaksi_display`, `transaksi_visit`, `created_at`, `updated_at`) VALUES
(1, 'TN0001', 3, 13, 3, 8, '2023-06-07', '2023-06-02 04:41:50', '2023-06-19 07:16:53'),
(3, 'TN0002', 3, 18, 6, 7, '2023-06-07', '2023-06-09 04:41:41', '2023-06-19 07:16:05'),
(10, 'TN0003', 3, 18, 3, 12, '2023-06-06', '2023-06-07 05:03:24', '2023-06-19 07:16:11'),
(12, 'TN0004', 4, 14, 6, 6, '2023-06-11', '2023-06-10 04:41:27', '2023-06-19 07:16:16'),
(13, 'TN0005', 4, 36, 3, 12, '2023-06-11', '2023-06-09 20:38:56', '2023-06-19 07:16:22'),
(16, 'TN0006', 3, 13, 3, 15, '2023-06-10', '2023-06-10 02:11:57', '2023-06-19 07:16:42'),
(17, 'TN0084', 4, 10, 9, 5, '2023-06-23', '2023-06-23 20:15:45', '2023-06-23 20:16:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Sales1 - Rahmat', 'sales1@mail.com', NULL, '$2y$10$cmwterVm7.d1I6aZn/OBjunC1ttROsNb4WwyZ3/KK46MSJqpATQ6y', NULL, '2023-05-17 22:54:48', '2023-06-19 07:14:47'),
(4, 'Sales2 - Dino', 'sales2@mail.com', NULL, '$2y$10$dzZI8VfsLJEEw9c36hZd5e4.vL/FaiFAlmiDzJoTSyzIgEzCuIYiu', NULL, '2023-05-18 02:28:06', '2023-06-19 07:14:44'),
(9, 'Sales3 - Budi', 'sales3@mail.com', NULL, '$2y$10$2R2ZVD7C1zF75RSbErAbg.5m5s6AbOhQIW61knwDCv5IuW3Cgwmde', NULL, '2023-05-18 02:55:34', '2023-06-19 07:14:36'),
(11, 'Sales4 - Rika', 'sales4@mail.com', NULL, '$2y$10$Z2xN3WXngjqaji5yIHJknuWfTJdybQNn/8yNpff2FfS7LpGvkWRDG', NULL, '2023-05-18 02:56:34', '2023-06-19 07:15:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`outlet_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `barang_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `outlets`
--
ALTER TABLE `outlets`
  MODIFY `outlet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
