-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2018, 21:41:05
-- Sunucu sürümü: 10.1.34-MariaDB
-- PHP Sürümü: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel_ecommerce`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bayilik`
--

CREATE TABLE `bayilik` (
  `id` int(10) UNSIGNED NOT NULL,
  `magazaadi` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon_no` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `uyelik_turu` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `akt_anahtari` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_mi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `bayilik`
--

INSERT INTO `bayilik` (`id`, `magazaadi`, `email`, `sifre`, `telefon_no`, `uyelik_turu`, `akt_anahtari`, `aktif_mi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'deneme', 'deneme@gmail.com', '$2y$10$ayVPG5EBiRc8/I3reCkO1uXPFX.hH92BuDb6hI0tGGvRdu1aGigSa', '5536437003', '1', 'gCvxJnYA2Diy9J1bLVbtCKBbxPW5Om51uR1xMWSoycyHBF5apwJ1RBud0EeJ', 0, '2018-12-14 19:08:28', '2018-12-14 19:08:28', NULL),
(3, 'deneme', 'cccc@gmail.com', '$2y$10$iG6DTrLBnNY3cDUQOuPxLed9dWQu.HOMuHfAHun23BFhqyBBk3p1.', '5538437003', '2', '1qOhabt36mvRMb72TIj4uuRKZx8UDPhjhIMp7jCGxaKmcGQokBiglGymKaHL', 0, '2018-12-14 19:10:55', '2018-12-14 19:10:55', NULL),
(6, 'sevecen', 'sevecen@gmail.com', '$2y$10$BeFX.lNBhD30jDF4mErZqOFQhKCqCxbHopMHzhNpb4DXpv9BEqzqG', '5536425003', 'Sirket', 'h845GV0dSiOl0Wsw6FXZX0khqWwMjkY9rQxiD4YTK1PWNDwx7lVMTSUEl5qX', 0, '2018-12-14 19:32:15', '2018-12-14 19:32:15', NULL),
(8, 'b', 'xd@gmail.com', '$2y$10$qIoxgiryqFuderqOOrdeUufcKGmE0ZVld93UeVHK2uDHHifdWPqdq', '5536437003', 'Sirket', 'Z8AuWCRyDHy8BmCT1IfrPS4SI0LaFQJPaI5TLmwvTCFV6Rboym0qOU0fMNw4', 0, '2018-12-14 20:02:22', '2018-12-14 20:02:22', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `begen`
--

CREATE TABLE `begen` (
  `begen_id` int(11) NOT NULL,
  `combin_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `begen`
--

INSERT INTO `begen` (`begen_id`, `combin_id`, `kullanici_id`, `created_at`) VALUES
(1, 14, 5, '2018-12-26 16:03:43'),
(2, 14, 5, '2018-12-26 16:05:49'),
(3, 14, 5, '2018-12-26 16:06:15'),
(4, 14, 5, '2018-12-26 16:06:18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `ust_id` int(11) DEFAULT NULL,
  `kategori_adi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `ust_id`, `kategori_adi`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Kozmetik', 'kozmetik', NULL, NULL, NULL),
(2, 1, 'Far Paleti', 'far-paleti', NULL, NULL, NULL),
(3, 1, 'Göz Kalemi', 'goz-kalemi', NULL, NULL, NULL),
(4, 1, 'Ruj', 'ruj', NULL, NULL, NULL),
(5, 1, 'Eyeliner', 'eyeliner', NULL, NULL, NULL),
(6, 1, 'Allık', 'allik', NULL, NULL, NULL),
(7, 1, 'Fondoten', 'fondoten', NULL, NULL, NULL),
(8, 1, 'Rimel', 'Rimel', NULL, NULL, NULL),
(9, NULL, 'Kişisel Bakım', 'kisisel-bakim', NULL, NULL, NULL),
(10, 9, 'Diş Macunu', 'dis-macunu', NULL, NULL, NULL),
(11, 9, 'Diş Fırçası', 'dis-fircasi', NULL, NULL, NULL),
(12, 9, 'Ağız Gargarası', 'agis-gargarasi', NULL, NULL, NULL),
(13, 9, 'Parfüm', 'parfum', NULL, NULL, NULL),
(14, 9, 'Deodorant', 'deodorant', NULL, NULL, NULL),
(15, NULL, 'Giyim ve Moda', 'giyim-moda', NULL, NULL, NULL),
(16, 15, 'Spor Ürünler', 'spor-urunler', NULL, NULL, NULL),
(17, 15, 'Erkek Giyim', 'erkek-giyim', NULL, NULL, NULL),
(18, 15, 'Kadın Giyim', 'kadin-giyim', NULL, NULL, NULL),
(19, 15, 'Çocuk Giyim', 'cocuk-giyim', NULL, NULL, NULL),
(20, 15, 'Takı/Mücevher', 'taki-mucevher', NULL, NULL, NULL),
(21, 15, 'Saatler', 'saatler', NULL, NULL, NULL),
(22, 15, 'Güneş Gözlüğü', 'gunes-gozlugu', NULL, NULL, NULL),
(23, NULL, 'Anne ve Bebek', 'anne-cocuk', NULL, NULL, NULL),
(24, 23, 'Hamile Giyim', 'hamile-giyim', NULL, NULL, NULL),
(25, 23, 'Kadın Giyim', 'kadin-giyim', NULL, NULL, NULL),
(26, 23, 'Bebek Giyim', 'bebek-giyim', NULL, NULL, NULL),
(27, 23, 'Bebek Arabası', 'bebek-arabasi', NULL, NULL, NULL),
(28, 23, 'Bebek Oyuncakları', 'bebek-oyuncaklari', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_urun`
--

CREATE TABLE `kategori_urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategori_urun`
--

INSERT INTO `kategori_urun` (`id`, `kategori_id`, `urun_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 5),
(4, 3, 4),
(5, 4, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kombin`
--

CREATE TABLE `kombin` (
  `id` int(10) UNSIGNED NOT NULL,
  `kullanici_id` int(10) NOT NULL,
  `kombin_adi` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyati` decimal(6,2) DEFAULT NULL,
  `satilik_mi` int(1) NOT NULL,
  `fotograf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kombin`
--

INSERT INTO `kombin` (`id`, `kullanici_id`, `kombin_adi`, `aciklama`, `fiyati`, `satilik_mi`, `fotograf`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 5, 'deneme', 'asdfff', '45.00', 1, 'IGw2z8HNeIkL5oZnWFQwGvOO9RODYeJuZq8LwOJw.jpeg', '2018-12-17 07:10:45', '2018-12-17 07:10:45', NULL),
(8, 5, 'deneme2', 'sfghhhhh', '70.00', 1, 'ZB8cJQYkrYaweZ4ls3zBtF5eD7YnmsbE6zCy7UVr.jpeg', '2018-12-17 07:26:21', '2018-12-17 07:26:21', NULL),
(9, 5, 'fdsf', 'sfgghgh', NULL, 0, 'gJi27KfkPGp3RSP796pBJmTAEsYn0ChGxHTgAoL5.jpeg', '2018-12-17 10:11:16', '2018-12-17 10:11:16', NULL),
(10, 5, 'sercan', 'easrtfghjkl', '90.00', 1, 'wqLf8q8Mw42hFsarLtv4oLudGH8NLXgsYlXr9ltk.jpeg', '2018-12-18 12:05:35', '2018-12-18 12:05:35', NULL),
(11, 5, '111', 'hyj', NULL, 0, 'bd6nH1NUteQaqxEuByDDHYPl5oMzQgALmdYVhYqP.jpeg', '2018-12-18 18:50:58', '2018-12-18 18:50:58', NULL),
(12, 5, 'kombin', 'aghhh', NULL, 0, 'yfjNaJXlmPOoPvNxXnN4OeJS8Xw3SuEdwBO7YjTk.jpeg', '2018-12-21 05:32:23', '2018-12-21 05:32:23', NULL),
(13, 5, 'gggg', 'fggg', NULL, 0, 'Q17sBsMBJhfuMjcgWEWMMHQ9FCmXTuoM2OTJTbe9.jpeg', '2018-12-23 18:28:29', '2018-12-23 18:28:29', NULL),
(14, 5, 'adfsd', 'hhjh', '78.00', 1, 'NUGk75cefgR9L77HldfEv1549Wfr6cDoNxFveLfg.jpeg', '2018-12-23 19:05:39', '2018-12-23 19:05:39', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cinsiyet` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dogum_tarihi` date NOT NULL DEFAULT '2018-12-14',
  `aktivasyon_anahtari` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_mi` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adsoyad`, `email`, `sifre`, `telefon_no`, `cinsiyet`, `dogum_tarihi`, `aktivasyon_anahtari`, `aktif_mi`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Ezgi Fıstıkçıoğlu', 'fistikciogluezgi@gmail.com', '$2y$10$PMrDJA84gGPiaJH9fj8h5ObPubW.k6ePWDxDvRG.bj1eqEZEp5BcS', '5536437003', 'Female', '1995-04-12', 'e7N2Iwhc1zGj6O5XEmik1lrQA0oZBQt1NyT6vVEMavNsTqoIzaRqdhdIkO4h', 0, 'Ehy14Fc1QE9qe5lgBssjZNrVe9JY44SLbLxHmC9T29EKGe5yfvyh1hBzSzfu', '2018-12-14 06:16:58', '2018-12-14 06:16:58', NULL),
(9, 'Sercan Kara', 'wercil94@gmail.com', '$2y$10$By.Bpz1K2/0rNBihIKStNOVJunytfKxRt6x6n8siC2BG1T58u94Zm', '5388324415', 'Male', '1994-02-06', 'rsiJ90fzsyb44d1JiBHVtxpDCvQBW9fgf57x40rE39NqKhkaHfJOLTeCmMhB', 0, 'PRSbOnNbd7b4bBGZreD7yuoQCQNSqKpr8KYQuWio2lMNNfzTHULHOSCSlSAN', '2018-12-24 07:29:36', '2018-12-24 07:29:36', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_detay`
--

CREATE TABLE `kullanici_detay` (
  `id` int(10) UNSIGNED NOT NULL,
  `kullanici_id` int(10) UNSIGNED NOT NULL,
  `adres` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceptelefonu` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici_detay`
--

INSERT INTO `kullanici_detay` (`id`, `kullanici_id`, `adres`, `telefon`, `ceptelefonu`, `updated_at`, `created_at`) VALUES
(1, 5, 'Elazığ', '3125556677', '5536437003', '2018-12-24 10:28:47', '2018-12-24 10:29:33'),
(2, 9, NULL, NULL, NULL, '2018-12-24 07:29:36', '2018-12-24 07:29:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_01_213000_create_kategori_table', 1),
(2, '2018_12_02_202646_create_urun_table', 1),
(3, '2018_12_04_090354_create_kombin_table', 1),
(4, '2018_12_04_110348_create_kategori_urun_table', 1),
(5, '2018_12_06_190201_create_bayilik_table', 1),
(6, '2018_12_12_082557_create_kullanici_table', 1),
(8, '2018_12_18_215215_create_sepet_table', 2),
(9, '2018_12_18_220236_create_sepet_urun_table', 3),
(12, '2018_12_19_093054_create_siparis_table', 4),
(13, '2018_12_19_103427_create_kullanici_detay_table', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(10) UNSIGNED NOT NULL,
  `kullanici_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `kullanici_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 5, '2018-12-24 10:41:30', '2018-12-24 10:41:30', NULL),
(5, 5, NULL, NULL, NULL),
(6, 5, NULL, NULL, NULL),
(7, 5, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL),
(9, 5, NULL, NULL, NULL),
(10, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet_urun`
--

CREATE TABLE `sepet_urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `sepet_id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) UNSIGNED NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyati` decimal(5,2) NOT NULL,
  `durum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sepet_urun`
--

INSERT INTO `sepet_urun` (`id`, `sepet_id`, `urun_id`, `adet`, `fiyati`, `durum`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 1, 2, '9.35', 'Beklemede', '2018-12-24 07:42:23', '2018-12-26 12:00:25', '2018-12-26 12:00:25'),
(2, 4, 4, 1, '5.13', 'Beklemede', '2018-12-24 07:43:02', '2018-12-26 12:00:25', '2018-12-26 12:00:25'),
(3, 4, 1, 1, '9.35', 'Beklemede', '2018-12-26 12:00:30', '2018-12-26 12:00:30', NULL),
(4, 4, 4, 1, '5.13', 'Beklemede', '2018-12-26 12:00:41', '2018-12-26 12:00:41', NULL),
(5, 7, 1, 6, '9.35', 'Beklemede', '2018-12-26 12:13:47', '2018-12-26 12:13:54', '2018-12-26 12:13:54'),
(6, 7, 1, 8, '9.35', 'Beklemede', '2018-12-26 12:14:02', '2018-12-26 12:15:56', '2018-12-26 12:15:56'),
(7, 7, 2, 1, '10.74', 'Beklemede', '2018-12-26 12:14:07', '2018-12-26 12:15:56', '2018-12-26 12:15:56'),
(8, 7, 1, 1, '9.35', 'Beklemede', '2018-12-26 12:16:01', '2018-12-26 12:16:01', NULL),
(9, 8, 1, 1, '9.35', 'Beklemede', '2018-12-26 12:16:57', '2018-12-26 12:16:57', NULL),
(10, 9, 1, 1, '9.35', 'Beklemede', '2018-12-26 12:17:12', '2018-12-26 12:17:12', NULL),
(11, 10, 1, 1, '9.35', 'Beklemede', '2018-12-27 16:39:15', '2018-12-27 16:39:15', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(10) UNSIGNED NOT NULL,
  `sepet_id` int(10) UNSIGNED NOT NULL,
  `siparis_tutari` decimal(10,4) NOT NULL,
  `durum` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adsoyad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceptelefonu` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banka` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taksit_sayisi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `sepet_id`, `siparis_tutari`, `durum`, `adsoyad`, `adres`, `telefon`, `ceptelefonu`, `banka`, `taksit_sayisi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, '14.4800', 'Siparişiniz alındı', 'Ezgi Fıstıkçıoğlu', 'Elazığ', '(312) 555-66-77', '5536437003', 'Garanti', 1, '2018-12-26 12:08:10', '2018-12-26 12:08:10', NULL),
(2, 7, '9.3500', 'Siparişiniz alındı', 'Ezgi Fıstıkçıoğlu', 'Elazığ', '(312) 555-66-77', '5536437003', 'Garanti', 1, '2018-12-26 12:16:44', '2018-12-26 12:16:44', NULL),
(3, 8, '9.3500', 'Siparişiniz alındı', 'Ezgi Fıstıkçıoğlu', 'Elazığ', '(312) 555-66-77', '5536437003', 'Garanti', 1, '2018-12-26 12:17:01', '2018-12-26 12:17:01', NULL),
(4, 9, '9.3500', 'Siparişiniz alındı', 'Ezgi Fıstıkçıoğlu', 'Elazığ', '(312) 555-66-77', '5536437003', 'Garanti', 1, '2018-12-26 12:25:08', '2018-12-26 12:25:08', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_adi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyati` decimal(6,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `slug`, `urun_adi`, `aciklama`, `fiyati`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'neque-sed', 'Neque sed.', 'Debitis nostrum rerum aperiam et architecto cupiditate quia voluptas rerum et vero sunt repellendus est magni iure sed.', '9.350', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(2, 'repellat-nostrum-ipsam', 'Repellat nostrum ipsam.', 'Quia qui ex dolores odio adipisci voluptatibus corporis id aut consectetur natus itaque necessitatibus assumenda eveniet molestias eum laborum.', '10.740', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(3, 'voluptas-quia-et', 'Voluptas quia et.', 'Accusamus rerum consequuntur dolores eos accusantium quia qui tempora ex et et vero aperiam impedit repudiandae deleniti aut.', '2.130', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(4, 'mollitia-placeat', 'Mollitia placeat.', 'Quis sed est delectus sit fugit voluptatem eos quibusdam perferendis occaecati rerum quam et provident dignissimos omnis iste dolores recusandae provident omnis veritatis dolor.', '5.130', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(5, 'laborum-nisi-quos', 'Laborum nisi quos.', 'Saepe aut eos non et dolorem qui est debitis ut iusto minima et minus qui molestias fuga omnis rem molestias qui minima voluptates.', '2.420', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(6, 'est-expedita', 'Est expedita.', 'Nostrum numquam aut quo qui vel sed velit quaerat fuga inventore asperiores iure aut placeat.', '18.780', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(7, 'mollitia-possimus-debitis', 'Mollitia possimus debitis.', 'Soluta ipsa provident quia dicta quis delectus et ab sequi nulla aut nobis sapiente.', '4.960', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(8, 'molestiae-voluptas', 'Molestiae voluptas.', 'Excepturi fuga inventore consequuntur tempore totam minima optio facere consectetur et voluptas qui est unde labore.', '8.060', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(9, 'dolores-asperiores', 'Dolores asperiores.', 'Modi illum aut facere aliquid repellendus adipisci autem alias vero harum est adipisci magnam delectus dicta non dolor qui et fugit.', '17.030', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(10, 'animi-inventore-minima', 'Animi inventore minima.', 'Ea sed nisi ipsa explicabo consequatur rerum laudantium et dicta sed voluptates aut unde maxime distinctio et molestias excepturi adipisci iure reiciendis quia incidunt asperiores nulla omnis.', '7.110', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(11, 'nemo-aliquid', 'Nemo aliquid.', 'Et at at non assumenda voluptatibus ea eius velit laborum officia minima illum debitis unde.', '11.420', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(12, 'eum-dicta', 'Eum dicta.', 'Enim tempora perferendis quos eligendi atque labore architecto sit facilis deleniti vel asperiores sed.', '6.620', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(13, 'quibusdam-voluptatum', 'Quibusdam voluptatum.', 'Eius qui et laudantium quaerat iure sit sit non odit aliquid qui nihil asperiores nulla voluptatibus minus saepe iure voluptatibus quia perferendis quo minus.', '4.980', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(14, 'dolores-aperiam', 'Dolores aperiam.', 'Odit id magni officia fuga provident non qui eum sed ullam aut vero ratione eligendi omnis.', '19.260', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(15, 'rerum-atque-accusantium', 'Rerum atque accusantium.', 'Amet et molestias iusto alias odio quis aliquam modi repudiandae eos esse hic rerum.', '12.480', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(16, 'nesciunt-consequatur-rem', 'Nesciunt consequatur rem.', 'Et asperiores et et aliquam enim culpa reprehenderit et consequuntur eos officiis tenetur fuga veniam tempora eaque reiciendis corporis est consequatur aliquam ut tempora excepturi eligendi totam.', '3.090', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(17, 'minus-non-ullam', 'Minus non ullam.', 'Quam minus reprehenderit dolorem et beatae ipsam totam excepturi facilis voluptates doloribus magni earum facere et unde iusto illum dolores.', '11.840', '2018-12-14 04:47:23', '2018-12-14 04:47:23', NULL),
(18, 'dolor-et-quia', 'Dolor et quia.', 'Animi magnam non voluptatem nemo tenetur nisi quia eligendi sunt blanditiis quis molestias aut dolore ab nesciunt quia a qui iste molestiae quaerat inventore est sed sunt.', '17.410', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(19, 'quisquam-unde', 'Quisquam unde.', 'Eum numquam laudantium dolores nihil quaerat laudantium molestiae vel veritatis occaecati facere dicta omnis voluptatem fuga sequi.', '11.610', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(20, 'animi-autem', 'Animi autem.', 'Quibusdam maiores fugit rerum a quo non repellat qui voluptas maxime officia vel perspiciatis fugiat.', '18.580', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(21, 'vel-quae-quibusdam', 'Vel quae quibusdam.', 'Enim est et quaerat nesciunt vero quae ut nostrum nihil voluptatem qui dolore quaerat quia cum sunt quaerat ut eius sunt sunt.', '11.590', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(22, 'et-qui-et', 'Et qui et.', 'Odit velit voluptate autem molestias sint sed alias deleniti iure eos culpa in ipsam itaque ut cum ullam vero sequi sit voluptatem fugiat ullam maiores velit quia.', '15.850', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(23, 'est-quisquam-assumenda', 'Est quisquam assumenda.', 'Nisi accusantium nam commodi laboriosam magnam voluptatem similique magnam dolorem officia nobis explicabo harum sunt aut esse occaecati qui ut blanditiis officia quos tenetur perferendis non a provident.', '16.440', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(24, 'vero-labore', 'Vero labore.', 'Qui nam repellat amet fugiat tenetur ad provident deserunt cum dolor earum omnis aut iste laudantium in qui sit voluptates nisi ipsa et a aut.', '16.220', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(25, 'excepturi-nemo', 'Excepturi nemo.', 'Ut perspiciatis voluptatibus ea sed eaque consequatur nostrum eius omnis a animi ad.', '19.610', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(26, 'commodi-laudantium', 'Commodi laudantium.', 'Voluptas sint vel maxime nesciunt ex sunt quo ea incidunt repellat itaque quia dolores inventore ducimus odit soluta quam aliquid aut ut quia et.', '11.620', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(27, 'fuga-quia-eligendi', 'Fuga quia eligendi.', 'Placeat accusamus quae eaque aperiam minima omnis ut qui reiciendis tenetur suscipit earum nulla cum et commodi dolor consequatur vero et dolor sit.', '17.480', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(28, 'est-repellendus', 'Est repellendus.', 'Ipsam aspernatur maxime quo aut dignissimos quos vel est quibusdam eos et sed nihil corporis et ut ab similique et qui alias est tempora nostrum voluptatem magnam.', '2.240', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(29, 'beatae-consequatur-vel', 'Beatae consequatur vel.', 'Animi minus sapiente nesciunt omnis mollitia ullam sit qui expedita ducimus veniam quia aperiam natus voluptatem laborum.', '4.540', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL),
(30, 'sed-voluptate', 'Sed voluptate.', 'Eaque dolore modi facere omnis facere voluptatem velit corrupti officia eum voluptatem in deleniti saepe maiores tenetur sit ad.', '16.250', '2018-12-14 04:47:24', '2018-12-14 04:47:24', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bayilik`
--
ALTER TABLE `bayilik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bayilik_email_unique` (`email`);

--
-- Tablo için indeksler `begen`
--
ALTER TABLE `begen`
  ADD PRIMARY KEY (`begen_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori_urun`
--
ALTER TABLE `kategori_urun`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kombin`
--
ALTER TABLE `kombin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_email_unique` (`email`),
  ADD UNIQUE KEY `kullanici_telefon_no_unique` (`telefon_no`);

--
-- Tablo için indeksler `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullanici_detay_kullanici_id_foreign` (`kullanici_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sepet_kullanici_id_foreign` (`kullanici_id`);

--
-- Tablo için indeksler `sepet_urun`
--
ALTER TABLE `sepet_urun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sepet_urun_sepet_id_foreign` (`sepet_id`),
  ADD KEY `sepet_urun_urun_id_foreign` (`urun_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siparis_sepet_id_unique` (`sepet_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bayilik`
--
ALTER TABLE `bayilik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `begen`
--
ALTER TABLE `begen`
  MODIFY `begen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `kategori_urun`
--
ALTER TABLE `kategori_urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kombin`
--
ALTER TABLE `kombin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `sepet_urun`
--
ALTER TABLE `sepet_urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanici_detay`
--
ALTER TABLE `kullanici_detay`
  ADD CONSTRAINT `kullanici_detay_kullanici_id_foreign` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sepet`
--
ALTER TABLE `sepet`
  ADD CONSTRAINT `sepet_kullanici_id_foreign` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sepet_urun`
--
ALTER TABLE `sepet_urun`
  ADD CONSTRAINT `sepet_urun_sepet_id_foreign` FOREIGN KEY (`sepet_id`) REFERENCES `sepet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sepet_urun_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `siparis_sepet_id_foreign` FOREIGN KEY (`sepet_id`) REFERENCES `sepet` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
