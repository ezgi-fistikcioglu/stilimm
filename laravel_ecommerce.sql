-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ara 2018, 17:48:04
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

--
-- Tablo döküm verisi `kategori_urun`
--

INSERT INTO `kategori_urun` (`id`, `kategori_id`, `urun_id`) VALUES
(1, 4, 3),
(2, 2, 3),
(3, 1, 3),
(4, 1, 2),
(5, 1, 1);

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
(1, 'H8L6XXugZQtEBsfBqB15', 'UBcyIgClCQ', 'AmlLDhVlw4OgQpTBBUCDhTaNebnPws', '27.000', '2018-12-04 06:40:40', '2018-12-04 06:40:40', NULL),
(2, 'wC0HpqBpaOR64IPApZfK', 'zDFIrj6etr', 'ayEQw2dwA1TSaoCqvBbnFYrga4xPO8', '34.000', '2018-12-04 06:41:48', '2018-12-04 06:41:48', NULL),
(3, 'YkK8Berj8Dn1MA0aTSHN', 'PxRi0094P5', 'jNPVZFCVUmiYVG6eYiescxeGfbykVS', '59.000', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL);

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
(3, '2018_12_01_213000_create_kategori_table', 1),
(4, '2018_12_02_202646_create_urun_table', 1),
(5, '2018_12_04_090354_create_kombin_table', 2),
(6, '2018_12_04_110348_create_kategori_urun_table', 3);

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
(1, 'iusto-voluptatibus-veniam', 'Iusto voluptatibus veniam.', 'Magnam odit quibusdam aperiam quos consequatur deleniti eos consequatur quibusdam et iure voluptate illum et et ratione sed nesciunt.', '19.330', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(2, 'rem-sunt', 'Rem sunt.', 'Laborum qui dolorem occaecati soluta dicta similique dolores nesciunt et tempora corporis quisquam numquam.', '16.350', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(3, 'ratione-minima-harum', 'Ratione minima harum.', 'Adipisci quod quod veritatis vel fugit nobis amet eos temporibus expedita quos accusamus excepturi expedita et eveniet est aliquam rerum praesentium fuga animi iusto.', '5.880', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(4, 'iusto-ratione', 'Iusto ratione.', 'Dignissimos veniam fugiat facilis repellat architecto explicabo nisi at quasi libero iure est magni.', '15.350', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(5, 'enim-perferendis-eum', 'Enim perferendis eum.', 'Et tempore laboriosam enim impedit aspernatur molestiae molestiae consequatur aut magni architecto qui.', '9.760', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(6, 'et-facilis-autem', 'Et facilis autem.', 'Quis odio deserunt unde voluptatem qui eum voluptas necessitatibus rerum sunt quia quia velit hic fuga dolor mollitia similique sit nesciunt.', '14.370', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(7, 'eius-aliquam-vero', 'Eius aliquam vero.', 'Ipsum at amet corporis rem et temporibus inventore quidem nesciunt quasi reiciendis ex quasi omnis quis sunt sit hic nulla quia aut.', '18.890', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(8, 'nobis-laboriosam', 'Nobis laboriosam.', 'Dolor magnam eius quos laboriosam ex ut assumenda non beatae ut vel expedita provident.', '3.440', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(9, 'animi-sapiente', 'Animi sapiente.', 'Minima quis consectetur eius ea in omnis tempora minus natus cumque expedita et quae maxime explicabo qui qui laborum delectus ex.', '11.950', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(10, 'totam-modi-vero', 'Totam modi vero.', 'Provident veniam necessitatibus sed et sed qui accusamus et assumenda dignissimos hic enim ut laborum non hic suscipit omnis ducimus.', '6.070', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(11, 'voluptas-aspernatur', 'Voluptas aspernatur.', 'Id eaque vel sint et praesentium provident dolores est sapiente iste et ut eveniet pariatur optio fugiat quia ratione dolor.', '16.290', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(12, 'commodi-voluptatem-sit', 'Commodi voluptatem sit.', 'Voluptatibus pariatur asperiores ut mollitia suscipit rerum itaque sed natus numquam a nesciunt quis ex earum modi quia sunt architecto corrupti ut quisquam iure et et sit sit.', '14.070', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(13, 'velit-aut-molestiae', 'Velit aut molestiae.', 'Temporibus eveniet non laboriosam et vitae et totam non sed quasi maiores ex aut non qui cupiditate consequatur ut quae voluptatum qui vel.', '18.470', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(14, 'doloremque-quas', 'Doloremque quas.', 'Unde culpa tempora voluptas voluptas dolores dolor nobis molestias modi blanditiis veritatis non.', '6.420', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(15, 'omnis-odio', 'Omnis odio.', 'Facilis natus voluptate eos esse id est laborum ut et aliquam iusto omnis sit libero.', '5.760', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(16, 'voluptatum-repellat', 'Voluptatum repellat.', 'Eum qui sit odit recusandae sit dolorem hic deleniti omnis ipsum qui eius porro itaque consequatur nam aperiam fugit a fugiat quam repellat numquam.', '4.190', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(17, 'blanditiis-hic-ad', 'Blanditiis hic ad.', 'Quidem blanditiis saepe id dolore voluptatem nisi quis et ea sed ratione voluptatem et consequatur corporis occaecati voluptas voluptatem sit.', '4.700', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(18, 'voluptatibus-ducimus-aspernatur', 'Voluptatibus ducimus aspernatur.', 'Impedit maxime beatae iste incidunt cupiditate corporis optio eos rem velit nihil quasi qui.', '16.860', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(19, 'nobis-accusamus-sint', 'Nobis accusamus sint.', 'Reiciendis sint enim et et corrupti autem ad vero quia omnis laboriosam eaque sit possimus sit quo perferendis omnis excepturi commodi.', '13.870', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(20, 'voluptate-cumque-in', 'Voluptate cumque in.', 'Neque eos et saepe laudantium praesentium iure similique blanditiis et vero possimus neque vel.', '10.220', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(21, 'et-nihil-impedit', 'Et nihil impedit.', 'Eligendi porro labore laboriosam unde ut dolor sequi dolores minima optio aut voluptatibus minus eum itaque in delectus neque porro exercitationem rem ipsa dolorem consectetur voluptas.', '12.100', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(22, 'eaque-non-aut', 'Eaque non aut.', 'Quidem placeat facilis ipsa iste voluptatem assumenda doloribus rem magnam sed porro deserunt sed.', '7.430', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(23, 'nihil-aut-ex', 'Nihil aut ex.', 'Nostrum odio ut reprehenderit ut sit officia rerum iusto atque est est ut velit incidunt quo.', '18.110', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(24, 'ducimus-impedit-ipsam', 'Ducimus impedit ipsam.', 'Pariatur voluptatibus quas qui dolore velit ut hic quaerat quam nisi ullam eligendi in atque earum omnis sapiente.', '10.050', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(25, 'sint-quisquam', 'Sint quisquam.', 'Tempore et enim blanditiis praesentium numquam commodi ipsam pariatur recusandae doloremque esse similique.', '14.980', '2018-12-04 06:52:22', '2018-12-04 06:52:22', NULL),
(26, 'illo-blanditiis', 'Illo blanditiis.', 'Fugit quos magni temporibus suscipit ex veritatis quas neque aperiam soluta et tenetur necessitatibus quidem reiciendis facere.', '12.590', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL),
(27, 'eum-natus-eum', 'Eum natus eum.', 'Ut tenetur eos placeat dolorem eveniet quo a dolorem doloribus eos quisquam quas officiis qui recusandae sed labore eos exercitationem facere.', '19.970', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL),
(28, 'dolorem-modi', 'Dolorem modi.', 'Nihil et qui laudantium temporibus voluptas rem nobis a et et cumque occaecati quidem molestias quia distinctio fugiat animi sed aut culpa quibusdam.', '14.010', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL),
(29, 'blanditiis-labore-culpa', 'Blanditiis labore culpa.', 'Repellat qui incidunt voluptates est quae cupiditate maxime explicabo rem tenetur modi et quas architecto porro voluptate sit itaque sit sed et vel qui.', '5.830', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL),
(30, 'mollitia-architecto', 'Mollitia architecto.', 'Rerum aperiam ut aut dolor occaecati aut numquam quasi maxime suscipit eum officiis totam molestiae a earum ex ea vel odio.', '15.990', '2018-12-04 06:52:23', '2018-12-04 06:52:23', NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_urun_kategori_id_foreign` (`kategori_id`),
  ADD KEY `kategori_urun_urun_id_foreign` (`urun_id`);

--
-- Tablo için indeksler `kombin`
--
ALTER TABLE `kombin`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kombin`
--
ALTER TABLE `kombin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kategori_urun`
--
ALTER TABLE `kategori_urun`
  ADD CONSTRAINT `kategori_urun_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategori_urun_urun_id_foreign` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
