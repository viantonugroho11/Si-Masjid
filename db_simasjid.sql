-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simasjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_anggota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumentasis`
--

CREATE TABLE `data_dokumentasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pelaksanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_dokumentasis`
--

INSERT INTO `data_dokumentasis` (`id`, `jenis_dokumentasi`, `foto_dokumentasi`, `deskripsi_foto`, `tanggal_pelaksanaan`, `created_at`, `updated_at`) VALUES
(1, 'Pembangunan Masjid', 'null', 'Alhamdulillah', '30-06-2022', NULL, '2022-06-12 08:30:49'),
(2, 'Kegiatan Masjid', 'null', 'Bismillah', '20-06-2022', NULL, '2022-06-12 08:37:37'),
(3, 'Pembangunan Masjid', 'null', 'Pembangunan Auning Masjid Jami\' Al Manar pada 2015', '2022-06-01', NULL, NULL),
(5, 'Zakat, Infaq dan Shadaqah', 'null', 'test', '26-07-2022', '2022-07-27 09:15:43', '2022-07-27 09:15:43'),
(6, 'Zakat, Infaq dan Shadaqah', '6c7c5jv3Uy09gePPM9HWpL2xLMNuHak8LVuXalQb.jpg', 'tst', '24-07-2022', '2022-07-27 09:29:22', '2022-07-27 09:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `data_inventaris`
--

CREATE TABLE `data_inventaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembelian_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_inventaris`
--

INSERT INTO `data_inventaris` (`id`, `nama_barang`, `jenis_barang`, `kode_barang`, `jumlah`, `satuan`, `kondisi_barang`, `tanggal_pembelian_barang`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 'Sejadah', 'Silahkan Pilih', 'INV20226100001', '2', 'Pcs', 'Silahkan Pilih', NULL, 'Sejadah Masjid Type A', '2022-06-09 22:44:25', '2022-07-30 19:33:15'),
(5, 'Speaker BNB', 'Pengeras Suara', 'INV20226100002', '5', 'Pcs', 'Baik', '01-06-2022', 'Speaker BNB Wakaf dan Pengadaan', '2022-06-12 08:50:54', '2022-06-12 08:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `data_kampanyes`
--

CREATE TABLE `data_kampanyes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kampanyes`
--

INSERT INTO `data_kampanyes` (`id`, `kategori`, `nama_kampanye`, `foto_kampanye`, `deskripsi_kampanye`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Infaq', 'Infaq Pembangunan Menara Masjid', 'yNPl3f4d5UWLsIa8hxKFxCKH3QsZ0pVOeWSS6fFE.jpg', 'testimonial', '50000', 'Aktif', '2022-07-27 07:54:06', '2022-07-27 07:54:06'),
(3, 'Shadaqah', 'Shadaqah Jariyah Pembebasan Lahan Pesantren', 'p88wBBkPKwAhE56AZpnk0XwgbztZ3mhDzAMXryyL.jpg', 'Testimonial', '10000', 'Aktif', '2022-07-29 05:35:34', '2022-07-29 05:35:34'),
(4, 'Zakat', 'Zakat Fitrah', 'cBttV6a1H4UJIY0Pk83g1leDFa9Ukt0j0rYF4xO8.jpg', 'Testimonial', '35000', 'Aktif', '2022-07-29 05:36:18', '2022-07-29 05:36:18'),
(5, 'Zakat', 'Zakat Mal', 'uRr11uLY4qLrX78KDUdsIz9pwXeQUk2oX3NoXUbO.jpg', 'Zakat tahunan', '100000', 'Aktif', '2022-08-01 05:30:03', '2022-08-01 05:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `data_penguruses`
--

CREATE TABLE `data_penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_kepengurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_penguruses`
--

INSERT INTO `data_penguruses` (`id`, `foto`, `nama_lengkap`, `alamat_lengkap`, `jenis_kelamin`, `nomor_telepon`, `jabatan_kepengurusan`, `created_at`, `updated_at`) VALUES
(1, 'qmZWQCPdqgmGrkzsi6SIUbwhwzfucZxaxSYALiHH.jpg', 'Dimas Wahyu Pratomo, S.Kom', 'Tambun Utara, Kab. Bekasi', 'Laki - laki', '1234', 'Sekertaris', NULL, '2022-06-23 08:46:01'),
(4, 'null', 'dsa', 'dsad', 'Perempuan', '32131232', 'Pengurus', '2022-06-16 01:44:25', '2022-06-16 01:44:25'),
(6, 'V3knSFGz78HcMRwp4jCPTbRH4UptHM9axErDwnlG.png', 'dsa', 'dsadsa', 'Laki - laki', '321321321', 'Sekertaris', '2022-06-23 07:01:50', '2022-06-23 07:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jenis_pemasukans`
--

CREATE TABLE `jenis_pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pemasukans`
--

INSERT INTO `jenis_pemasukans` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Kas Jum\'at', NULL, NULL),
(2, 'Kas Kegiatan Masjid', '2022-07-28 04:44:19', '2022-07-28 04:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `kampanyes`
--

CREATE TABLE `kampanyes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kampanye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kampanyes`
--

INSERT INTO `kampanyes` (`id`, `kategori`, `nama_kampanye`, `foto_kampanye`, `deskripsi_kampanye`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Infaq', 'Zakat Fitrah', 'null', 'Bismillah', 'Aktif', NULL, '2022-07-26 19:22:54'),
(3, 'Shadaqah', 'Shadaqah Bantuan Bencana Alam', 'xfZ5JoOhULa9di2OeOcj8gOwB15VASDnip6wRRTS.jpg', 'Bismillah', 'Aktif', '2022-07-26 19:24:45', '2022-07-26 19:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kegiatans`
--

CREATE TABLE `laporan_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lpj_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_kegiatans`
--

INSERT INTO `laporan_kegiatans` (`id`, `nama_kegiatan`, `tanggal_kegiatan`, `lpj_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Muharram', '29-07-2022', 'D0zhrYCHGdzJXdZLdz7no2e5D8C4MO2s07khavx0.pdf', '2022-07-31 01:11:06', '2022-07-31 01:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_04_19_071030_create_admins_table', 1),
(6, '2022_05_12_065833_create_permission_tables', 1),
(7, '2022_05_31_075441_create_data_penguruses_table', 2),
(8, '2022_05_31_080016_create_data_dokumentasis_table', 2),
(9, '2022_05_31_080036_create_data_inventaris_table', 3),
(10, '2022_07_26_070803_create_transaksis_table', 4),
(11, '2022_07_26_154124_create_kampanyes_table', 4),
(12, '2022_07_27_143448_create_data_kampanyes_table', 5),
(13, '2022_07_27_144648_create_data_kampanyes_table', 6),
(14, '2022_07_28_055058_create_pemasukans_table', 7),
(15, '2022_07_28_060201_create_pemasukans_table', 8),
(16, '2022_07_28_060917_create_jenis_pemasukans_table', 9),
(17, '2022_07_30_164250_create_profil_masjids_table', 10),
(18, '2022_07_31_023720_create_program_kegiatans_table', 11),
(19, '2022_07_31_025005_create_program_kegiatans_table', 12),
(20, '2022_07_31_055736_create_pengeluarans_table', 13),
(21, '2022_07_31_072841_create_laporan_kegiatans_table', 14),
(22, '2022_08_01_021744_create_daftars_table', 15),
(23, '2022_08_01_064058_add_field_alamat_telp_in_table_users', 15);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `jenis_pemasukan`, `jumlah_pemasukan`, `tanggal_pemasukan`, `deskripsi_pemasukan`, `created_at`, `updated_at`) VALUES
(1, 'Kas Masjid', '1000000', '08-07-2022', 'Dari Majlis Ta\'lim Assamawat', '2022-07-28 07:06:46', '2022-07-30 22:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `jenis_pengeluaran`, `jumlah_pengeluaran`, `tanggal_pengeluaran`, `deskripsi_pengeluaran`, `bukti_pengeluaran`, `created_at`, `updated_at`) VALUES
(1, 'Biaya Operasional', '210000', '30-07-2022', 'Konsumsi Kerja bakti', 'UcaZ4MKzmP52q6ruFBZNaPSjwlLWgZqWlItjYYUr.png', '2022-07-30 23:31:02', '2022-07-30 23:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_masjids`
--

CREATE TABLE `profil_masjids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_masjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_masjid` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_masjid` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi_masjid` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_masjids`
--

INSERT INTO `profil_masjids` (`id`, `logo_masjid`, `nama_masjid`, `alamat_masjid`, `telepon_masjid`, `email_masjid`, `instagram_masjid`, `facebook_masjid`, `youtube_masjid`, `sejarah_masjid`, `visi_masjid`, `misi_masjid`, `created_at`, `updated_at`) VALUES
(2, '2ssX3mX7lSKZqKzY1G813PTohFZdb9Q4KwWE7YZh.png', 'Masjid Al Manar', 'Jl. Pondok Kelapa Selatan, No. 26, RT 009/012, Kel. Pondok Kelapa, Kec. Duren Sawit, DKI Jakarta 13450', '08551706489', 'masjid@almanar.sch.id', '@masjidalmanar', 'Masjid Jami\' Al Manar', 'Al Manar Foundation', '<p>Masjid Al Manar adalah masjid yang terletak di Jl. Pondok Kelapa Selatan II No.26, RT. 009/012, Jakarta Timur. Masjid ini satu bangunan dengan Yayasan Wakaf pesantren Al Manar, namun masjid ini juga dipergunakan untuk masyarakat sekitar. Nama masjid Al Manar di ambil dari sebuah nama kitab Tafsir yaitu Tafsir Al Manar yang ditulis oleh Syeikh Rasyid Ridha&rsquo; atau Sayyid Muhammad Rasyid Ridha&rsquo; berasal dari Lebanon. Beliau merupakan keturunan Al Husain cucu Rasulullah Shallahu &lsquo;Alaihi Wasallam, ayah beliau meruapakan seorang ulama dari ahli thoriqoh syadziliyah.</p>', '<p>Terwujudnya Masjid Al Manar yang makmur, mandiri, dan modern, serta mampu melaksanakan fungsinya sebagai pusat peribadatan, wahana musyawarah dan silaturrahim, lembaga dakwah, pendidikan, pengembangan ilmu, yang dilandasi oleh keimanan dan ketaqwaan kepada Allah SWT.</p>', '<ul><li>Menyelenggarakan berbagai macam kegiatan untuk memakmurkan masjid dan meningkatkan syiar Islam.</li><li>Membentuk unit &ndash; unit kerja yang bergerak dalam bidang keuangan dan bisnis untuk menggali dana guna membiayai pengelolaan masjid dan kemaslahatan umat.</li><li>Mewujudkan terjaganya kesucian, kebersihan dan ketertiban masjid.</li><li>Mewujudkan sistem pengelolaan masjid yang modern dan professional.</li><li>Menyelenggarakan kegiatan &ndash; kegiatan peribadatan, dakwah dan pendidikan dalam rangka membimbing umat agar memiliki keteguhan iman dan taqwa, akhlaqul karimah, kesalihan individu dan sosial, semangat ukhuwah Islamiyah, patriotism, berilmu, patuh pada hukum, dan peduli lingkungan.</li></ul>', '2022-07-30 11:22:19', '2022-07-31 12:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `program_kegiatans`
--

CREATE TABLE `program_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_kegiatans`
--

INSERT INTO `program_kegiatans` (`id`, `nama_kegiatan`, `hari_kegiatan`, `waktu_kegiatan`, `deskripsi_kegiatan`, `created_at`, `updated_at`) VALUES
(2, 'Tahsin Al Qur\'an', 'Ahad', '08:00', 'Kegiatan pembelajaran Tahsin Al Qur\'an dalam rangka memperbaiki bacaan Al Qur\'an agar lebih baik', '2022-07-30 21:07:57', '2022-07-30 21:07:57'),
(3, 'Tahfizh Al Qur\'an', 'Kamis', '18:31', 'Bismillah', '2022-08-01 05:32:13', '2022-08-01 05:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `va_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `froud_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `va_number`, `bank`, `transaction_time`, `transaction_status`, `transaction_id`, `signature_key`, `settlement_time`, `payment_type`, `paid_at`, `amount`, `order_id`, `merchant_id`, `gross_amount`, `froud_status`, `currency`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Belum Transaksi', '0', NULL, NULL, '0', NULL, NULL, '5', NULL, '500000', NULL, NULL, '2022-08-02 01:15:14', '2022-08-02 01:15:14'),
(2, NULL, NULL, NULL, 'Belum Transaksi', '0', NULL, NULL, '0', NULL, NULL, '6', NULL, '175000', NULL, NULL, '2022-08-02 01:24:08', '2022-08-02 01:24:08'),
(3, NULL, NULL, NULL, 'Belum Transaksi', '0', NULL, NULL, '0', NULL, NULL, '7', NULL, '300000', NULL, NULL, '2022-08-02 01:27:44', '2022-08-02 01:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto_profil` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`, `foto_profil`, `alamat_lengkap`, `jenis_kelamin`, `nomor_telepon`) VALUES
(1, 'Abdul Hamid Utsman, MA.', 'dkm@almanar.sch.id', '2022-05-12 01:42:06', '$2y$10$QEx885voQpQSuIA2fJ3nde7RHv2NXMMjbyrlX1ffDQ35rhV3aCIkK', 'FoOJzJVEkuuu3kYF1b9pZIqDmvQqjzummDUtuIhILNf24TFh75hJ8D7RBeFg', '1', '2022-05-12 01:42:06', '2022-05-12 01:42:06', '', '', '', ''),
(2, 'Wawan Iwandri, S.Pd.I', 'sekertaris.dkm@almanar.sch.id', '2022-05-12 01:42:06', '$2y$10$ijGlbrnGdLgPCVytjMXCy.hAPhZDBaRUd4hakG1qi7n3vG8EbFufy', 'b2FFQcG3JkQsl9M8LQVsGysTtwe3QXPJ73ju1nqzMi1ScFSJy8VHy82zXg0S', '3', '2022-05-12 01:42:06', '2022-05-12 01:42:06', '', '', '', ''),
(3, 'Mulyanto, S.E', 'bendahara.dkm@almanar.sch.id', '2022-05-12 01:42:16', '$2y$10$8v4mCEg7gCmZgH0v2O4e9euCF0N9a0FeELKik5zUv82ERi5Px8smi', '30xXMxuarWCfTq4WNlsFDYZjI0dghkEvSWZIDk04Tg427mkmuYbHsAzALcqb', '2', '2022-05-12 01:42:17', '2022-05-12 01:42:17', '', '', '', ''),
(4, 'Fulan bin Fulan', 'amil.dkm@almanar.sch.id', '2022-05-12 01:42:17', '$2y$10$Hy0AX8xXgKXrkvJFHkGpSO3nvCzg1wGlppHdSQcPZ55VuXDCcufBy', '8I9IOfhRNDVw6bgx57VIR3wyi7IIDm7JOAvCLIpS4qjoSfiqi13Ed9w3UoaU', '4', '2022-05-12 01:42:17', '2022-05-12 01:42:17', '', '', '', ''),
(11, 'Dimas Wahyu Pratomo', 'dimas@gmail.com', NULL, '$2y$10$jRUpu2sSeSAAdjYA0xP1FOIa/RxCHkRQIp2veHlqcRggc5.7Pdm0S', NULL, '5', '2022-08-01 00:45:01', '2022-08-01 00:45:01', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `daftars_email_unique` (`email`);

--
-- Indexes for table `data_dokumentasis`
--
ALTER TABLE `data_dokumentasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_inventaris`
--
ALTER TABLE `data_inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kampanyes`
--
ALTER TABLE `data_kampanyes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penguruses`
--
ALTER TABLE `data_penguruses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_pemasukans`
--
ALTER TABLE `jenis_pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kampanyes`
--
ALTER TABLE `kampanyes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_kegiatans`
--
ALTER TABLE `laporan_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil_masjids`
--
ALTER TABLE `profil_masjids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_kegiatans`
--
ALTER TABLE `program_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_dokumentasis`
--
ALTER TABLE `data_dokumentasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_inventaris`
--
ALTER TABLE `data_inventaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kampanyes`
--
ALTER TABLE `data_kampanyes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_penguruses`
--
ALTER TABLE `data_penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pemasukans`
--
ALTER TABLE `jenis_pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kampanyes`
--
ALTER TABLE `kampanyes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan_kegiatans`
--
ALTER TABLE `laporan_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_masjids`
--
ALTER TABLE `profil_masjids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_kegiatans`
--
ALTER TABLE `program_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
