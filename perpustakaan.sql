-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 07:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_02_07_092756_create_buku_table', 2),
(6, '2023_02_07_093401_create_mahasiswa_table', 2),
(7, '2023_02_07_093532_create_petugas_table', 2),
(8, '2023_02_07_093803_create_pinjam_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `idbuku` int(10) UNSIGNED NOT NULL,
  `kodebuku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`idbuku`, `kodebuku`, `judul`, `gambar`, `pengarang`, `penerbit`, `created_at`, `updated_at`) VALUES
(1, 'DTI', 'Dasar-Dasar Teknik Informatika', '1.jpg', 'Novega Pratama Adiputra', 'Deepublish', '2023-02-07 02:55:35', '2023-02-07 02:55:35'),
(2, 'PTI', 'Pengantar Teknologi Informasi', '2.jpg', 'Buhori Muslim', 'Deepublish', '2023-02-07 02:59:55', '2023-02-07 03:13:15'),
(3, 'MPTI', 'Metode Penelitian Teknik Informatika', '3.jpg', 'Ade Johar Maturidi', 'Deepublish', '2023-02-07 02:59:55', '2023-02-07 03:13:15'),
(6, 'KC', 'Komputer Cerdas Untuk Mahasiswa Teknik Informatika', '4.jpg', 'Nur Nafi’iyah', 'Deepublish', '2023-02-08 07:43:31', '2023-02-08 07:43:31'),
(7, 'TAV', 'Teknik Pengolahan Audio & Video Kompetensi Keahlian Multimedia Program Keahlian Teknik Komputer dan Informatika', '5.jpg', 'Johnie Rogers Swanda Pasaribu, S.Kom., M.Kom.', 'Deepublish', '2023-02-08 07:48:20', '2023-02-08 07:48:20'),
(8, 'KD', 'Pengantar Teknologi Informatika Dan Komunikasi Data', '6.jpg', 'Bagaskoro, S.Kom., M.M.', 'Deepublish', '2023-02-08 07:49:42', '2023-02-08 07:55:36'),
(9, 'AP', 'Aplikasi Komputer', '7.jpg', 'Dwi Krisbiantoro', 'Deepublish', '2023-02-08 07:56:40', '2023-02-08 07:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `idmahasiswa` int(10) UNSIGNED NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`idmahasiswa`, `nim`, `nama`, `prodi`, `nohp`, `created_at`, `updated_at`) VALUES
(1, '10059', 'Anandyta', 'Teknik Informatika', '081312345679', '2023-02-07 02:55:47', '2023-02-08 08:02:31'),
(2, '10065', 'Ilham', 'Teknik Informatika', '081234567890', '2023-02-07 03:08:22', '2023-02-07 03:14:25'),
(3, '10066', 'Zidni', 'Teknik Informatika', '082312345678', '2023-02-08 08:01:01', '2023-02-08 08:01:01'),
(4, '10069', 'Debby', 'Teknik Informatika', '082298765432', '2023-02-08 08:01:35', '2023-02-08 08:01:35'),
(5, '10091', 'Sigit', 'Teknik Informatika', '087765430987', '2023-02-08 08:02:19', '2023-02-08 08:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `idpinjam` int(10) UNSIGNED NOT NULL,
  `idpetugas` varchar(255) NOT NULL,
  `idmahasiswa` varchar(255) NOT NULL,
  `idbuku` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`idpinjam`, `idpetugas`, `idmahasiswa`, `idbuku`, `created_at`, `updated_at`) VALUES
(11, '2', '2', '9', '2023-02-08 21:34:10', '2023-02-08 21:34:19'),
(12, '2', '3', '3', '2023-02-08 21:35:26', '2023-02-08 21:35:26'),
(13, '3', '1', '2', '2023-02-08 23:25:34', '2023-02-08 23:27:13'),
(14, '2', '4', '7', '2023-02-08 23:27:55', '2023-02-08 23:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `idpetugas` int(10) UNSIGNED NOT NULL,
  `namapetugas` varchar(100) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`idpetugas`, `namapetugas`, `notlp`, `created_at`, `updated_at`) VALUES
(2, 'Budi', '088877665512', '2023-02-07 03:14:55', '2023-02-07 03:15:03'),
(3, 'Asep', '08898765434', '2023-02-08 08:02:59', '2023-02-08 08:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Debby Navia Anggraini', 'debbynavia@gmail.com', NULL, '$2y$10$yfX7biRWlyJbWl1fdQE5keS8MkozAJZrRABqFNcgsY3MA2FHeubNu', 'user', NULL, '2023-02-08 05:51:58', '2023-02-08 05:51:58'),
(10, 'ZIDNI', 'hai.zid27@gmail.com', NULL, '$2y$10$mSweCvT0ZqEeXky3qQrVPuoSjNgMvDtlrT/NrYNrbsVdJsudw79GO', 'admin', NULL, '2023-02-08 07:07:38', '2023-02-08 07:07:38'),
(11, 'Sigit Nur Ervansah', 'snurervansah@gmail.com', NULL, '$2y$10$9/RLaSigvlkqp/DbCdeqF.1a5QhcHPd0Q9FSQWfe4HRifIIdeXDyK', 'admin', NULL, '2023-02-08 23:30:59', '2023-02-08 23:30:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD UNIQUE KEY `tbl_buku_kodebuku_unique` (`kodebuku`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`),
  ADD UNIQUE KEY `tbl_mahasiswa_nohp_unique` (`nohp`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`idpetugas`),
  ADD UNIQUE KEY `tbl_petugas_notlp_unique` (`notlp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `idbuku` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `idmahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `idpinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `idpetugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
