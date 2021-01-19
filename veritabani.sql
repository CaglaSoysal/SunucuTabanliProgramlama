-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 19 Oca 2021, 15:28:01
-- Sunucu sürümü: 10.4.16-MariaDB
-- PHP Sürümü: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adSoyad` text NOT NULL,
  `kullaniciAdi` text NOT NULL,
  `sifre` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adSoyad`, `kullaniciAdi`, `sifre`, `email`) VALUES
(1, 'Çağla Soysal', 'caglasoysal', '123', 'ssoysalcagla@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `beceriler`
--

CREATE TABLE `beceriler` (
  `id` int(11) NOT NULL,
  `adi` text NOT NULL,
  `yuzde` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `beceriler`
--

INSERT INTO `beceriler` (`id`, `adi`, `yuzde`) VALUES
(1, 'Bootstrap', 90),
(2, 'WordPress', 55),
(3, 'Illustrator', 30),
(4, 'PHP', 30),
(5, 'Flutter', 40),
(6, 'Photoshop', 70),
(8, 'fswefwe', 27);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `universite` text NOT NULL,
  `tarih` text NOT NULL,
  `bolum` text NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `universite`, `tarih`, `bolum`, `aciklama`) VALUES
(1, 'Karabük Üniversitesi\r\n', '2014 - 2016\r\n', 'Bilgisayar Programcılığı\r\n', 'Bölüm ikincisi olarak mezun oldum.'),
(2, 'Mehmet Akif Ersoy Üniversitesi\r\n', '2018 - 2021\r\n', 'Bilgisayar Mühendisliği\r\n', 'Bu üniversitede öğrencilik hayatımı sürdürüyorum.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `girisresmi`
--

CREATE TABLE `girisresmi` (
  `id` int(11) NOT NULL,
  `resim` text NOT NULL,
  `buyukYazi` text NOT NULL,
  `kucukYazi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `girisresmi`
--

INSERT INTO `girisresmi` (`id`, `resim`, `buyukYazi`, `kucukYazi`) VALUES
(1, 'bg.jpg', 'Merhabalar!\r\n', 'Bağımsız bir şekilde web siteleri tasarlıyorum.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `id` int(11) NOT NULL,
  `icerik` text NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `icerik`, `resim`) VALUES
(1, 'Karşıyaka\'lıyım , hani İzmir\'in incisi olan. Web Programcılığı okudum, Mersinli Endüstri Meslek Lisesinde, en yoğunundan... Bir Karadeniz serüveni yaşattı bilgisayar aşkı ve ver elini Karabük Üniversitesi Bilgisayar Programcılığı... Yani anlayacağınız denizden çok da uzak kalmadan fakat sürekli elde dizüstü... Hedefler bitmiyor bitmemeli de. \'Eğitim Şart\' mottosuyla şimdi MAKÜ\' de Bilgisayar Mühendisliği bölümünü okumaktayım.\r\n\r\nNeler mi yapıyorum? Mesela bu siteden başlayayım... Bilgisayar üzerinde çalıştıktan sonra şu ana kendi sitemde gördüğünüz gibi anahtar teslim web siteleri tasarlıyorum. Konut kredisi çekmenize gerek yok. Bu sitelere ulaşmak size bir tuş kadar yakın :)', 'ben.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `aciklama` text NOT NULL,
  `konum` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `aciklama`, `konum`, `email`) VALUES
(1, 'Benimle iletişime geçin. Böylece merak ettiklerinizi yanıtlayabilirim.', 'Karşıyaka, İzmir', 'admin@caglasoysal.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `adSoyad` text NOT NULL,
  `email` text NOT NULL,
  `konu` text NOT NULL,
  `mesaj` text NOT NULL,
  `zaman` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `adSoyad`, `email`, `konu`, `mesaj`, `zaman`) VALUES
(6, 'Çağla', 'ssoysalcagla@gmail.com', 'Deneme', 'Deneme içerik', '2021-01-14 11:40:44'),
(8, 'Çağla Soysal', 'ssoysalcagla@gmail.com', 'Deneme', 'Deneme içerik', '2021-01-14 11:41:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `adi` text NOT NULL,
  `resim` text NOT NULL,
  `link` text NOT NULL,
  `filtre` text NOT NULL,
  `uyari` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `adi`, `resim`, `link`, `filtre`, `uyari`) VALUES
(1, 'Tornado Fish', '1.jpg', 'https://tornadofish.com/', 'bootstrap', ''),
(2, 'Fatih Elibol Otomotiv', '2.jpg', 'https://www.feotomotiv.com/default.aspx', 'bootstrap', ''),
(3, 'Ahmet Tokeri', '3.jpg', 'http://www.ahmettokeri.com/', 'bootstrap', ''),
(4, 'Beton Parlatalım', '4.jpg', 'http://www.betonparlatalim.com/', 'wordpress', ''),
(5, 'Gezgin', '5.jpg', '#', 'php', 'alert(\'Gezgin adındaki site projemi daha sonra siteme eklemeyi planlıyorum.\')');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staj`
--

CREATE TABLE `staj` (
  `id` int(11) NOT NULL,
  `firmaAdi` text NOT NULL,
  `tarih` text NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `staj`
--

INSERT INTO `staj` (`id`, `firmaAdi`, `tarih`, `aciklama`) VALUES
(1, 'Bilsa Yazılım A.Ş.\r\n', '2015\r\n', 'Üniversite stajımı burada yaptım.'),
(2, 'Armonksoft Bilişim Hizmetleri\r\n', '2012 - 2013\r\n', 'Liseyken stajımı burada yaptım');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaret`
--

CREATE TABLE `ziyaret` (
  `id` int(11) NOT NULL,
  `anasayfa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ziyaret`
--

INSERT INTO `ziyaret` (`id`, `anasayfa`) VALUES
(1, 39);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `beceriler`
--
ALTER TABLE `beceriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `girisresmi`
--
ALTER TABLE `girisresmi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `staj`
--
ALTER TABLE `staj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ziyaret`
--
ALTER TABLE `ziyaret`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `beceriler`
--
ALTER TABLE `beceriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `girisresmi`
--
ALTER TABLE `girisresmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `staj`
--
ALTER TABLE `staj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `ziyaret`
--
ALTER TABLE `ziyaret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
