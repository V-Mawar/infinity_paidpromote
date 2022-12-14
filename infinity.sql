-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2023 pada 13.32
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id`, `nama`, `nohp`, `alamat`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(1, 'abaa', '09654357', 'samarinda', 'laki', '2022-11-24 10:36:18', '2022-11-24 10:36:18'),
(2, 'asda', 'asddas', 'asdas', 'asdasd', '2022-11-24 10:40:54', '2022-11-24 10:40:54'),
(3, 'Lintang Mawar Bani', '12312', 'kutai', 'perempuan', '2022-12-02 04:15:34', '2022-12-02 04:15:34'),
(4, 'anisa', '0239742232', 'kutai', 'perempuan', '2022-12-23 01:11:47', '2022-12-23 01:11:47'),
(5, 'putra', '098239822', 'jember', 'laki laki', '2022-12-23 01:12:21', '2022-12-23 01:12:21'),
(6, 'rada', '0897764564', 'samarinda', 'perempuan', '2022-12-23 01:13:07', '2022-12-23 01:13:07'),
(7, 'desi', '086654564', 'palaran', 'perempuan', '2022-12-23 01:13:49', '2022-12-23 01:13:49'),
(8, 'putri', '0253427532', 'tenggarong', 'perempuan', '2022-12-23 01:14:20', '2022-12-23 01:14:20'),
(9, 'reza', '0824432535', 'samarinda', 'laki laki', '2022-12-23 01:14:47', '2022-12-23 01:14:47'),
(10, 'andhika', '08524836482', 'pekalongan', 'laki laki', '2022-12-23 01:15:41', '2022-12-23 01:15:41'),
(11, 'zara', 'zara dila', 'samarinda', 'perempuan', '2022-12-29 08:28:14', '2022-12-29 08:28:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kreator`
--

CREATE TABLE `kreator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kreator`
--

INSERT INTO `kreator` (`id`, `nama`, `nohp`, `alamat`, `jeniskelamin`, `created_at`, `updated_at`) VALUES
(1, 'Hani', '0387236821', 'samarinda', 'perempuan', '2022-11-24 10:08:00', '2022-12-29 07:20:10'),
(2, 'asd', 'asdas', 'asdasd', 'asdasd', '2022-11-24 10:14:03', '2022-11-24 10:14:03'),
(3, 'Estetika', '12312', 'asdasd', 'laki', '2022-11-24 10:14:17', '2022-11-24 10:14:17'),
(4, 'asd', 'asds', 'sa', 'asd', '2022-11-24 10:38:04', '2022-11-24 10:38:04'),
(5, 'Rani', '0974631293', 'kutai', 'perem', '2022-11-25 02:17:09', '2022-11-25 02:17:09'),
(6, 'Rani', '0974631293', 'kutai', 'perempuan', '2022-11-25 02:17:18', '2022-11-25 02:17:18'),
(8, 'Lintang Mawar', '0182743234', 'samarinda', 'perempuan', '2022-11-25 03:03:47', '2022-11-25 03:03:47'),
(9, 'Zara', '083643321', 'berau', 'perempuan', '2022-11-25 06:21:27', '2022-11-25 06:21:27'),
(10, 'Estetika', '1029473864', 'Batang', 'perempuan', '2022-11-27 22:09:20', '2022-11-27 22:09:20'),
(11, 'Estetika', '1029473864', 'Batang', 'perempuan', '2022-11-27 22:11:54', '2022-11-27 22:11:54'),
(12, 'akmal', '029375223', 'tenggarong', 'laki laki', '2022-11-28 03:37:06', '2022-11-28 03:37:06'),
(13, 'Fatma Dewi', '0821192188', 'Jepara', 'perempuan', '2022-12-18 06:03:49', '2022-12-18 06:03:49'),
(14, 'zaki', '0979375', 'kutai', 'laki laki', '2022-12-23 01:41:46', '2022-12-23 01:41:46'),
(15, 'dika', '087234982', 'pekalongan', 'laki laki', '2022-12-23 01:42:13', '2022-12-29 08:27:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `materi`, `created_at`, `updated_at`) VALUES
(1, 'Premium', '250.000', 'vidio/poster', '2022-11-24 21:06:35', '2022-12-23 01:38:35'),
(2, 'Biasa', '50000', 'Gambar', '2022-11-24 21:54:40', '2022-11-24 21:54:40'),
(3, 'instastory', '30.000', 'poster', '2022-12-23 01:39:21', '2022-12-23 01:39:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_24_132855_buat__table__Kreator--create=_Kreator', 1),
(6, '2022_11_24_182012_buat__table__konsumen--create=_konsumen', 2),
(7, '2022_11_24_195800_buat__table__menu--create=_menu', 3),
(8, '2022_11_24_203926_buat__table__promo--create=_promo', 3),
(9, '2022_11_25_143816_buat__table__kreator--create=_kreator', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id`, `nama`, `harga`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Happy New Year', '150.000', 'Vidio dan Gambar/Poster', '2022-11-24 22:03:10', '2022-11-24 22:03:10'),
(3, 'Ramadhan', '500.000', 'Vidio,poster,gambar', '2022-12-23 01:55:12', '2022-12-23 01:55:12'),
(4, 'Natal', '120.000', 'poster', '2022-12-26 01:35:57', '2022-12-26 01:35:57'),
(5, 'Happy', '120.000', 'poster', '2022-12-26 01:36:38', '2022-12-26 01:36:38'),
(6, 'Bokek', '50.000', 'gambar', '2022-12-26 01:40:03', '2022-12-26 01:40:03'),
(7, 'Big Sale 12.12', '120.000', 'vidio dan poster', '2022-12-29 08:29:17', '2022-12-29 08:29:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Estetika', 'Teti', '12345678', 'admin', NULL, '2022-11-28 01:47:27', '2022-11-28 01:47:27'),
(5, 'fatma', 'fatma cantik', '123456', 'admin', NULL, '2022-12-18 06:02:42', '2022-12-18 06:02:42'),
(6, 'dewi', 'santi', '123456', 'admin', NULL, '2022-12-23 01:24:53', '2022-12-23 01:24:53'),
(7, 'Fitri', 'ratu', '123456', 'admin', NULL, '2022-12-23 01:26:04', '2022-12-23 01:26:04'),
(8, 'Puspita', 'Indah', '123456', 'admin', NULL, '2022-12-23 01:27:46', '2022-12-23 01:27:46'),
(9, 'Fajar', 'Bayu', '123456', 'admin', NULL, '2022-12-23 01:28:19', '2022-12-23 01:28:19'),
(10, 'Intan', 'permata', '123456', 'admin', NULL, '2022-12-23 01:28:54', '2022-12-23 01:28:54'),
(12, 'wiku', 'wiku tria', '123456', 'admin', NULL, '2022-12-29 08:26:51', '2022-12-29 08:26:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kreator`
--
ALTER TABLE `kreator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kreator`
--
ALTER TABLE `kreator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
