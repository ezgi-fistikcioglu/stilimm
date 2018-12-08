-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Ara 2018, 23:12:44
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kombin`
--

CREATE TABLE `kombin` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kombin_adi` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyati` decimal(6,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kombin`
--

INSERT INTO `kombin` (`id`, `slug`, `kombin_adi`, `aciklama`, `fiyati`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'msNeAlLqWtY4UFrXNtpS', 'jzFQJyCcBk', 's2QriQeM7pOe6cMaj0t6b3SVC5F2gM', '59.000', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivasyon_anahtari` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_mi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adsoyad`, `email`, `sifre`, `aktivasyon_anahtari`, `aktif_mi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ezgi Fıstıkçıoğlu', 'fistikciogluezgi@gmail.com', '$2y$10$q5OALOBMbsugPqqUPSuPde1TndgoOY/uTNjmRwFTJjfUPOw3N0Bra', 'Grkd7oDsKpFOZoL36Qb0TrsfaiuQPyZcM62RdRtaOqS4gs9cZqexoNS7F55v', 0, '2018-12-08 19:11:49', '2018-12-08 19:11:49', NULL);

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
(29, '2018_12_08_220203_create_kullanici_table', 2),
(30, '2018_12_01_213000_create_kategori_table', 3),
(31, '2018_12_02_202646_create_urun_table', 3),
(32, '2018_12_04_090354_create_kombin_table', 3),
(33, '2018_12_04_110348_create_kategori_urun_table', 3);

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
(1, 'voluptatum-tempore', 'Voluptatum tempore.', 'Fuga dolores aliquid aut in dolores repellat voluptatem perspiciatis et quasi voluptas et aperiam eaque cumque aut deleniti dolores repellat nihil voluptates nulla harum autem qui facilis.', '16.570', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(2, 'rerum-recusandae-sit', 'Rerum recusandae sit.', 'Aut omnis a est autem sunt vero fuga tenetur dolor nemo sapiente repudiandae quis et ea odio exercitationem consequatur quam.', '9.030', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(3, 'voluptatum-excepturi', 'Voluptatum excepturi.', 'Quas rerum deleniti est magni ab eaque et omnis in blanditiis doloribus ut aut itaque quibusdam eligendi labore est dolores odit vero voluptatem iusto.', '11.010', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(4, 'deleniti-ipsam', 'Deleniti ipsam.', 'Non deleniti alias suscipit aliquam qui voluptatibus fuga voluptates perspiciatis error molestias quis omnis quos soluta et autem impedit non cupiditate est suscipit eveniet quis est.', '12.140', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(5, 'aperiam-ut', 'Aperiam ut.', 'Optio neque molestias eius soluta suscipit inventore quia similique aliquid cum dolorem inventore neque deleniti quibusdam enim culpa distinctio nisi ea vel et quisquam.', '11.360', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(6, 'rem-nobis-praesentium', 'Rem nobis praesentium.', 'Laudantium delectus exercitationem fuga iste sed quas enim libero beatae et consequatur ut commodi tempora nihil ut delectus nobis cumque earum dolores nemo nam.', '7.620', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(7, 'sunt-aut', 'Sunt aut.', 'Aut reprehenderit corrupti perspiciatis rerum ut est facere fugit consequatur aliquam est facere amet hic est explicabo eos aut.', '16.160', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(8, 'blanditiis-illo', 'Blanditiis illo.', 'Culpa doloremque inventore et doloribus nobis voluptate iste qui optio sit necessitatibus et et ut aut totam tempora vitae id adipisci tenetur.', '10.490', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(9, 'eveniet-voluptas-impedit', 'Eveniet voluptas impedit.', 'Cupiditate sed voluptate corporis voluptatem odio amet distinctio quasi iure maxime soluta alias consequatur explicabo aut eum fugiat totam officiis dignissimos accusantium provident voluptas voluptatum et qui minima.', '10.710', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(10, 'corporis-velit-in', 'Corporis velit in.', 'Doloribus adipisci aut laudantium similique delectus molestiae suscipit deleniti eum perspiciatis minima qui qui ut vel deleniti ut repellat ipsa aut aut saepe.', '1.740', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(11, 'incidunt-explicabo-occaecati', 'Incidunt explicabo occaecati.', 'Aut culpa impedit consequatur consequuntur maiores dicta dignissimos dicta in aperiam fugit eos sit dolor quia officia magni dolor aspernatur.', '10.770', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(12, 'earum-quidem-inventore', 'Earum quidem inventore.', 'Neque necessitatibus officia commodi eveniet minus placeat tenetur quis aut aut delectus aut reiciendis.', '12.360', '2018-12-08 19:10:48', '2018-12-08 19:10:48', NULL),
(13, 'aut-debitis-itaque', 'Aut debitis itaque.', 'Ipsam dolore excepturi aliquid doloribus voluptas iusto laboriosam libero qui voluptatem quia ut praesentium est accusantium odit laudantium ullam expedita eligendi qui.', '12.060', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(14, 'dolor-et-ab', 'Dolor et ab.', 'Blanditiis fugiat enim et totam suscipit voluptatem laborum libero quis occaecati voluptatem et.', '1.830', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(15, 'ducimus-in', 'Ducimus in.', 'Minima quisquam sit libero reiciendis magnam maxime in deserunt excepturi repudiandae ut rem itaque error.', '4.360', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(16, 'sed-officiis-distinctio', 'Sed officiis distinctio.', 'Expedita similique assumenda voluptatem eveniet aspernatur aliquam nesciunt itaque aliquam perspiciatis repellendus doloribus ab est deserunt eos ipsum occaecati culpa natus.', '13.420', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(17, 'eaque-cumque', 'Eaque cumque.', 'Impedit optio repellendus molestias et exercitationem sed facilis optio minus voluptate quas aperiam a dignissimos officiis quo dignissimos ut quia voluptatibus voluptatum fugit ut eum.', '4.530', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(18, 'et-sed-quia', 'Et sed quia.', 'Porro optio laborum dolores sunt est at eius consequatur rem harum vel dignissimos reprehenderit.', '16.820', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(19, 'facilis-quia', 'Facilis quia.', 'Provident asperiores numquam ea recusandae amet modi eius libero culpa velit expedita minus est dolor et perferendis ab ducimus et non nesciunt quia vel maiores dolorum.', '7.870', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(20, 'ea-deleniti-nam', 'Ea deleniti nam.', 'Maxime quia quibusdam quia molestias distinctio omnis ullam consectetur occaecati minus necessitatibus unde natus quas illum harum vitae ut vitae dolorem.', '1.810', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(21, 'deleniti-ex-necessitatibus', 'Deleniti ex necessitatibus.', 'Animi et vel reiciendis voluptate omnis sit in totam doloremque quos est beatae et aut molestiae aspernatur nemo tenetur.', '18.500', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(22, 'in-enim-ea', 'In enim ea.', 'Incidunt est vero repellendus velit et ullam delectus eveniet laudantium blanditiis aliquid molestias rerum dignissimos sit animi hic illum quam veniam voluptatem expedita fugit iusto.', '8.120', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(23, 'qui-officiis-voluptas', 'Qui officiis voluptas.', 'Dignissimos fugiat rerum sed qui atque nesciunt consequatur qui vel tempore consequuntur quo molestiae officia libero fugit.', '9.070', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(24, 'voluptatem-aliquam-ipsum', 'Voluptatem aliquam ipsum.', 'In animi sint pariatur deleniti velit inventore illo rerum magni dolorum et necessitatibus temporibus ab eligendi cumque asperiores suscipit perspiciatis.', '13.780', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(25, 'atque-omnis', 'Atque omnis.', 'Ducimus rerum omnis doloribus ut corrupti adipisci a rerum provident autem atque quia accusamus ex commodi error rerum architecto tempora cum incidunt enim.', '16.340', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(26, 'similique-exercitationem', 'Similique exercitationem.', 'Praesentium atque et cum voluptatem sapiente ea veritatis ducimus fugiat vero accusantium sed consequatur tempore pariatur sed culpa officiis veritatis beatae impedit totam ad distinctio vero.', '15.900', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(27, 'nemo-tenetur-odio', 'Nemo tenetur odio.', 'Dolores dicta aperiam commodi sint ut impedit placeat error tempore et et consequatur optio provident alias saepe.', '9.180', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(28, 'vitae-autem-aperiam', 'Vitae autem aperiam.', 'Accusantium dolore autem itaque pariatur animi dolores quod quia atque minus ea dolor sit.', '13.350', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(29, 'delectus-asperiores', 'Delectus asperiores.', 'Nemo qui omnis sit quidem magnam fuga perspiciatis repellendus ex sed nostrum non facere error voluptas et autem doloremque mollitia aut nam est sint dolorum labore.', '2.270', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL),
(30, 'magni-et-consequatur', 'Magni et consequatur.', 'Sit placeat nihil voluptas est aliquid eos atque consequatur non officiis nam velit ut ad deleniti eligendi ipsa nisi nisi.', '11.130', '2018-12-08 19:10:49', '2018-12-08 19:10:49', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

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
  ADD UNIQUE KEY `kullanici_email_unique` (`email`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `kategori_urun`
--
ALTER TABLE `kategori_urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kombin`
--
ALTER TABLE `kombin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
