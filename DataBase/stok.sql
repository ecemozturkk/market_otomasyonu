-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2021, 19:41:47
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stok`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(200) NOT NULL,
  `kategori_etkin` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_etkin`, `kategori_durum`) VALUES
(1, 'denemeeeeee', 1, 2),
(2, '', 0, 2),
(3, '', 0, 2),
(4, 'abc', 1, 2),
(5, 'abc', 1, 2),
(6, 'abc', 1, 2),
(7, 'xxxxxxxx', 2, 2),
(8, 'FIRIN', 1, 1),
(9, 'DONDURMA', 1, 1),
(10, 'SEBZE', 1, 1),
(11, 'MEYVE', 1, 1),
(12, 'ICECEK', 1, 1),
(13, 'ATISTIRMALIK', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `marka_id` int(11) NOT NULL,
  `marka_ad` varchar(200) NOT NULL,
  `marka_etkin` int(11) NOT NULL,
  `marka_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `markalar`
--

INSERT INTO `markalar` (`marka_id`, `marka_ad`, `marka_etkin`, `marka_durum`) VALUES
(1, '', 0, 2),
(2, 'deneme1', 1, 2),
(9, 'Hayat', 1, 2),
(10, 'test', 1, 2),
(11, 'test3', 2, 2),
(12, 'test3', 2, 2),
(13, 'abc', 1, 2),
(14, 'abc', 1, 2),
(15, 'zxc', 2, 2),
(16, 'testttttt', 1, 2),
(17, 'test500', 2, 2),
(18, 'test', 2, 2),
(19, 'hayat su', 1, 2),
(20, 'abc', 1, 2),
(21, 'sdf', 1, 2),
(22, 'UNO', 1, 1),
(23, 'ALGIDA', 1, 1),
(24, 'DOGADAN', 1, 1),
(25, 'LIPTON', 1, 1),
(26, 'NESTLE', 2, 1),
(27, 'LAYS', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `siparis_tarih` date NOT NULL,
  `musteri_isim` varchar(200) NOT NULL,
  `musteri_iletisim` varchar(200) NOT NULL,
  `ara_toplam` varchar(200) NOT NULL,
  `indirim` varchar(200) NOT NULL,
  `toplam` varchar(200) NOT NULL,
  `odenmis` varchar(200) NOT NULL,
  `borc` varchar(200) NOT NULL,
  `odeme_sekli` varchar(200) NOT NULL,
  `odeme_durum` int(11) NOT NULL,
  `siparis_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `siparis_urun_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` varchar(200) NOT NULL,
  `fiyat` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `siparis_urun_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(200) NOT NULL,
  `urun_kod` varchar(200) NOT NULL,
  `urun_resim` text NOT NULL,
  `marka_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `adet` varchar(200) NOT NULL,
  `fiyat` varchar(200) NOT NULL,
  `etkin` int(11) NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_kod`, `urun_resim`, `marka_id`, `kategori_id`, `adet`, `fiyat`, `etkin`, `durum`) VALUES
(11, 'Somun Ekmek', '', '../assets/images/19925556060cb77ebb090e.jpg', 22, 8, '10', '1,5', 1, 1),
(12, 'Elma', '', '../assets/images/114902231160cb780d4d1c0.png', 24, 11, '20', '2', 1, 1),
(13, 'Magnum Klasik ', '', '../assets/images/93786774860cb783a75f9f.png', 23, 9, '20', '5', 1, 1),
(14, 'Portakal', '', '../assets/images/211079870060cb78608c6a6.png', 24, 11, '20', '4', 2, 1),
(15, 'Tost Ekmegi', '', '../assets/images/93457946360cb78b1beeb3.png', 22, 8, '2', '5', 2, 1),
(16, 'Sogan', '', '../assets/images/76210014560cb78d466294.png', 24, 10, '50', '5', 1, 1),
(17, 'Ice Tea Mango', '', '../assets/images/147254502260cb78f81c1cf.png', 25, 12, '50', '5', 1, 1),
(18, 'a', '', '../assets/images84034506360cb8212eccef.png', 22, 9, '2', '3', 1, 1),
(19, 'dsf', '', '../assets/images166758254560cb823815caa.png', 22, 9, '2', '3', 1, 1),
(20, 'dfg', '', '../assets/images40574183660cb82d672c0f.png', 22, 8, '34', '56', 1, 1),
(21, 'fgh', '', '../assets/images572247560cb83263b60a.jpg', 22, 8, '5', '6', 1, 1),
(22, 'fh', '', '../assets/images124164565060cb8377670a0.jpg', 22, 8, '5', '4', 1, 1),
(23, 'dsfds', '', '../assets/images200176343860cb87ba7f50b.png', 22, 8, '2', '2', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(2, 'ttbilgin', '7fd24288957f2d6c0514e1e86891c548', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`marka_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`siparis_urun_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `marka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `siparis_urun_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
