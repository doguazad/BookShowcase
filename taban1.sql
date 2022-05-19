-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Nis 2022, 11:26:44
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `taban1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yazar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(78) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `tarih` date NOT NULL,
  `fotograf` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`isim`, `yazar`, `aciklama`, `ekleyen`, `fiyat`, `id`, `tarih`, `fotograf`, `ip`) VALUES
('Başlangıç', 'Dan Brown ', 'Kim olursan ol, neye inanırsan inan, çok yakında her şey değişecek', 'admin', 39, 2, '0000-00-00', 'img/cv4357.jpg', ''),
('Sussex Vampiri', 'Sir Arthur Conan Doyle', 'Sherlock Holmes, Yazar Arthur Conan Doyle’nin hayat verdiği hayali bir dede', 'reptilian', 15, 3, '0000-00-00', 'img/cv6839.jpg', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelik`
--

CREATE TABLE `uyelik` (
  `id` int(7) NOT NULL,
  `eposta` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciadi` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `ip` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyelik`
--

INSERT INTO `uyelik` (`id`, `eposta`, `kullaniciadi`, `sifre`, `tarih`, `ip`) VALUES
(2, 'test@mail.net', 'test', 'test', '0000-00-00', '127.0.0.1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyelik`
--
ALTER TABLE `uyelik`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `uyelik`
--
ALTER TABLE `uyelik`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
