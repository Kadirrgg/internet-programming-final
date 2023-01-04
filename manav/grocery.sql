-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2023, 10:42:53
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `grocery`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisiö`
--

DROP TABLE IF EXISTS `iletisiö`;
CREATE TABLE IF NOT EXISTS `iletisiö` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(20) COLLATE utf32_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf32_unicode_520_ci NOT NULL,
  `tel` varchar(11) COLLATE utf32_unicode_520_ci NOT NULL,
  `mesaj` varchar(1500) COLLATE utf32_unicode_520_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_520_ci;

--
-- Tablo döküm verisi `iletisiö`
--

INSERT INTO `iletisiö` (`id`, `isim`, `email`, `tel`, `mesaj`, `tarih`) VALUES
(10, 'son deneme 1', 'asdd@gmail.com', '1345676543', 'asdfgbs furkan beyyy', '2022-12-27 21:07:15'),
(11, 'son deneme 1123', 'user1@gmail.com', '12312312', 'dsadasd', '2022-12-27 21:07:15'),
(12, 'furkanBey', 'furkanbey@gmail.com', '05419823154', 'mesaj yazma yeri deneme yazıyoruz kütahya teknik bilimler meslek yüksek okulu', '2022-12-27 21:07:15'),
(17, 'asd', 'user1@gmail.com', '12312312312', 'xdcfvgbhjkfghjkljıkol', '2022-12-27 21:07:15'),
(18, 'emirbey', 'user1@gmail.com', '12458712323', 'PDO Kullanımı (PHP Veri Nesneleri)\r\nBu derste, veritabanı tablosundan Tüm sütunları seçmek için ', '2022-12-27 21:07:15'),
(19, 'kadir', 'geasd@gmail.com', '05485789831', 'PDO Kullanımı (PHP Veri Nesneleri)\r\nBu derste, veritabanı tablosundan Tüm sütunları seçmek için  karakterini kullandım. Gerçek bir uygulamada muhakkak LIMIT kullanarak verilerinizi sınırlandırın.\r\n\r\nÖncelikle baglanti.php dosyasını aşağıdaki gibi oluşturun. Kodları kopyalayıp, yapıştırabilirsiniz ', '2022-12-27 21:07:15'),
(20, 'kadir', 'geasd@gmail.com', '05485789831', 'PDO Kullanımı (PHP Veri Nesneleri)\r\nBu derste, veritabanı tablosundan Tüm sütunları seçmek için  karakterini kullandım. Gerçek bir uygulamada muhakkak LIMIT kullanarak verilerinizi sınırlandırın.\r\n\r\nÖncelikle baglanti.php dosyasını aşağıdaki gibi oluşturun. Kodları kopyalayıp, yapıştırabilirsiniz ', '2022-12-27 21:07:15'),
(21, 'kadir', 'phpmysql@putlook.com', '45217896', 'kütahay belediyesi', '2022-12-27 21:07:15'),
(22, 'ahmet', 'ahmet43@outlook.com', '05478961345', 'suan deneme için ilteisim kısmına yazıyorum', '2022-12-27 21:07:15'),
(23, 'emirbey123', 'asd123123@gmail.com', '12312312312', 'asdfghjhgfdsdfg', '2022-12-27 21:07:15'),
(24, 'emirbey', 'asd@gmail.com', '23123', 'sdasd', '2022-12-27 21:07:15'),
(25, 'son deneme 1', 'emirbey@outlook.com', '123123', 'asdasd12rgfds', '2022-12-27 21:07:43'),
(26, 'kadirbey', 'kadirbey@outlook.com', '05479856314', 'lütfen ürünleri çoğaltın', '2022-12-28 00:16:13'),
(27, 'son deneme 1', 'user1@gmail.com', '12312456', 'ürümler hala cogalmadı', '2022-12-28 00:17:48'),
(28, 'asdq12e1', 'htkjygkl@gmail.com', '1235896', 'asd1 eürün yokk pack 0.9', '2022-12-28 20:36:26'),
(29, 'final denemesi', 'final@gmail.com', '1478523654', 'final son denemeler', '2023-01-04 13:36:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(70) COLLATE utf32_unicode_520_ci NOT NULL,
  `email` varchar(70) COLLATE utf32_unicode_520_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf32_unicode_520_ci NOT NULL,
  `kayit-tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_520_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici`, `email`, `sifre`, `kayit-tarih`) VALUES
(2, 'asd', 'asd@gmail.com', '123qa', '2022-12-27 19:11:49'),
(6, 'user1', 'user1@gmail.com', 'deneme', '2022-12-27 19:11:49'),
(7, 'kadir', 'emirbey@outlook.com', 'asdqwe1', '2022-12-27 19:11:49'),
(9, 'kadir', 'furkanbey@gmail.com', '1231a', '2022-12-27 19:11:49'),
(10, 'ahmet', 'ahmet@gmail.com', 'qwe123', '2022-12-27 19:11:49'),
(11, 'user323', 'asdd1@gmail.com1', 'asd123', '2022-12-27 19:11:49'),
(12, 'user123', 'user123@outlook.com', '123', '2022-12-27 19:12:07'),
(13, 'kadir', 'asd@gmail.com1', '1', '2022-12-27 19:22:55'),
(14, 'kadir', 'asd@gmail.com1', '1', '2022-12-27 19:23:14'),
(15, 'user31', 'asd@gmail.com', '123', '2022-12-27 19:23:19'),
(16, 'user322', 'user231@gmail.com', 'asdwqe', '2022-12-27 20:10:32'),
(17, 'kadir', 'kadirg@outlook.com', '123', '2022-12-27 21:27:20'),
(18, 'ahmetalkan', 'ahmetalkan@outlook.com', '4353631asd', '2022-12-28 00:00:01'),
(19, 'kadir1', 'kadir1@outlook.com', 'asdzxc', '2022-12-28 00:01:54'),
(20, 'kadir1', 'kadir11@outlook.com', 'asd', '2022-12-28 00:03:23'),
(21, 'kadir', 'asd1@gmail.com', '123', '2022-12-28 00:07:39'),
(22, 'furkaneby', 'furkanbey43@outlook.com', 'qwe', '2022-12-28 19:50:04'),
(23, 'hakan', 'hakan@outlook.com', 'qwe', '2022-12-28 20:57:38'),
(24, 'qwe', 'qwe@gmail.com', '123', '2023-01-04 11:47:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

DROP TABLE IF EXISTS `sayfalar`;
CREATE TABLE IF NOT EXISTS `sayfalar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(500) COLLATE utf32_unicode_520_ci NOT NULL,
  `sira` varchar(50) COLLATE utf32_unicode_520_ci NOT NULL,
  `aktif` varchar(30) COLLATE utf32_unicode_520_ci NOT NULL,
  `icerik` varchar(1500) COLLATE utf32_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_520_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `baslik`, `sira`, `aktif`, `icerik`) VALUES
(5, 'panel bakımı ', '2', 'on', 'duyuru panel bakıma girecektir'),
(2, 'yazı', '1', 'on', 'Ben sadece mantığı anlattım. Sizler temiz kodla ve diğer kurallara uyarak bunu yazarsınız. Bu mantıkla farklı dillerde de işlemler yapabilirsiniz. Örneğin aynı mantık Javascript\'te de çalışır.\r\nVideodaki websitenin kaynak kodları açıklamada yer almaktadır. İndirebilirsiniz.'),
(7, 'panel duyuru', '5', 'on', 'oanel duyuru denemesi yapacağız'),
(4, 'php sepet yapımı', '3', 'on', 'Merhaba ben Uğur KILCI, 10 dakikada PHP eticaret sitesi sepet mantığı isimli videomda php ile alışveriş sepeti yapmak mantığını anlattım. PHP ile e ticaret sitesi yapmak istiyorsanız ve PHP sepete ekle mantığını anlamadıysanız yada PHP alışveriş sepeti yapmasını bilmiyorsanız, bu video tam size göre.\r\n\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(70) COLLATE utf32_unicode_520_ci NOT NULL,
  `fiyat` varchar(50) COLLATE utf32_unicode_520_ci NOT NULL,
  `adet` varchar(250) COLLATE utf32_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_520_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `urunadi`, `fiyat`, `adet`) VALUES
(1, 'salatalık', '11.95', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
