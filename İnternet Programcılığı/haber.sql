-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Nis 2014, 11:46:36
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `haber`
--
CREATE DATABASE IF NOT EXISTS `haber` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `haber`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(225) NOT NULL,
  `admin_link` varchar(225) NOT NULL,
  `admin_pw` varchar(225) NOT NULL,
  `admin_image` varchar(225) NOT NULL,
  `admin_rank` int(11) NOT NULL,
  `admin_hit` int(11) NOT NULL,
  `admin_age` int(11) NOT NULL,
  `admin_gender` int(11) NOT NULL,
  `admin_text` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_link`, `admin_pw`, `admin_image`, `admin_rank`, `admin_hit`, `admin_age`, `admin_gender`, `admin_text`) VALUES
(1, 'admin', 'özgür', '123', '', 1, 0, 0, 0, ''),
(2, 'özgür', 'sadasd', '123', '', 1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_url` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_desc` text NOT NULL,
  `site_keyw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_url`, `site_title`, `site_desc`, `site_keyw`) VALUES
('http://localhost:90/hbr/index.php', 'haberler deneme post231231', 'hbaer burda koş gel gel 231321231321', 'spor , magazinkjlk');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE IF NOT EXISTS `bilgiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Adi` varchar(255) NOT NULL,
  `Soyadi` varchar(255) NOT NULL,
  `KullaniciAdi` varchar(255) NOT NULL,
  `Sifre` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Telefon` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `Adi`, `Soyadi`, `KullaniciAdi`, `Sifre`, `Mail`, `Telefon`) VALUES
(1, 'özgür', 'kan', 'özgür123', '123', 'aa', 0),
(2, 'deneme', 'de', 'de', '123', 'wqe', 0),
(3, 'asd', 'asd', 'asd', 'asd', 'asd', 0),
(4, '', '', '', '', '', 0),
(5, 'ded', 'de', 'de', 'de', 'de', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 123456),
(8, 'sss', 'sss', 'sss', 'ss', 'sss', 123213);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
  `haber_id` int(11) NOT NULL AUTO_INCREMENT,
  `haber_baslik` varchar(40) NOT NULL,
  `haber_özet` text NOT NULL,
  `haber_detay` varchar(500) NOT NULL,
  `haber_resim` varchar(200) NOT NULL,
  `haber_okunma` int(11) NOT NULL,
  `haber_yer` int(11) NOT NULL,
  `ekleme_tarihi` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`haber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`haber_id`, `haber_baslik`, `haber_özet`, `haber_detay`, `haber_resim`, `haber_okunma`, `haber_yer`, `ekleme_tarihi`, `admin_id`) VALUES
(1, 'Twitter!!!', 'Dün gece itibariyle twittera eriim engellendi.', 'Twitter dün gece itibariyle Türkiye''de engellendi.', 'resim1.jpg', 2, 1, '0000-00-00', 0),
(2, 'Deneme Haberleri', 'Dün gece itibariyle twittera eriim engellendi.', 'İkinci haberimiz  çok güzel', 'resim2.jpg', 0, 1, '0000-00-00', 0),
(3, 'Yeni bir haber ', 'Dün gece itibariyle twittera eriim engellendi.', 'Deneme', 'resim1.jpg', 5, 1, '0000-00-00', 0),
(4, 'Haber Ekleme', 'Dün gece itibariyle twittera eriim engellendi.', 'Deneme123213', 'resim2.jpg', 5, 1, '0000-00-00', 0),
(6, 'Haberler Haberler', 'Dün gece itibariyle twittera eriim engellendi.', 'Türkçe Karakter Sorunu', 'resim1.jpg', 55, 1, '0000-00-00', 0),
(60, 'Haberlerimiz', 'Haberlerimiz çok güzeldir.', 'sadsadsa', '1522261_10151953069723387_1616857143_n_2.jpg', 0, 1, '03/22/2014', 1),
(61, 'Haber Demo', 'Haber Demo deneme 1 2 ses 1 2', 'sadsad', '308777_454822781243089_1102073771_n_5.jpg', 0, 1, '03/22/2014', 1),
(62, 'ghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hgjghjhgj', 'ghjhgj', '308777_454822781243089_1102073771_n_6.jpg', 0, 0, '03/22/2014', 1),
(63, 'asdddddddddddddddddddddddddddddddddddddd', 'asdasd', 'asdsad', '308777_454822781243089_1102073771_n_7.jpg', 0, 0, '03/22/2014', 1),
(74, 'kk', 'kk', 'kk', '308777_454822781243089_1102073771_n_5.jpg', 0, 1, '03/22/2014', 1),
(75, 'lol', 'lol', 'lol', '82465.jpg', 0, 1, '03/22/2014', 1),
(76, 'lol', 'lol', 'ololol', '82465.jpg', 0, 0, '03/22/2014', 1),
(80, 'lol', 'lol', 'ololol', 'bugatti031.jpg', 0, 1, '03/22/2014', 1),
(81, 'deneme', 'den', 'tagsız haber', '016845128.jpg', 0, 0, '03/23/2014', 1),
(86, 'asdsad', 'sadasd', 'asdsasadsadsadsadsaasdsadsadsadsadsadsad', 'Purple_Marbles.jpg', 0, 0, '03/23/2014', 1),
(87, 'HTML TAGLERİ KALDIRILDI', 'HTML TAGLERİ KALDIRILDI HABERİMİZDİR', 'HTML TAGLERİ KALDIRILDI BUDA DENEME HABERMİZ OLARAK YAZILMIŞTIR.Deneme haberi asdada', 'Full_HD_Wallpapers_21_1.jpg', 0, 0, '03/23/2014', 1),
(88, 'asddddasd', 'asdsad', 'asdsa', 'Fairyland.jpg', 0, 0, '03/27/2014', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal_medya`
--

CREATE TABLE IF NOT EXISTS `sosyal_medya` (
  `Sm_İd` int(11) NOT NULL AUTO_INCREMENT,
  `Sm_Adi` varchar(225) NOT NULL,
  `Sm_Linki` varchar(225) NOT NULL,
  `Sm_Durum` int(11) NOT NULL,
  PRIMARY KEY (`Sm_İd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `sosyal_medya`
--

INSERT INTO `sosyal_medya` (`Sm_İd`, `Sm_Adi`, `Sm_Linki`, `Sm_Durum`) VALUES
(1, 'dribbble', 'http://dribbble.com/', 1),
(2, 'twitter', 'https://twitter.com/', 1),
(3, 'facebook', 'https://tr-tr.facebook.com/', 1),
(4, 'gplus', 'https://accounts.google.com/', 1),
(5, 'linkedin', 'http://www.linkedin.com', 1),
(6, 'rss', '#', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum_detay` varchar(255) NOT NULL,
  `haber_id` int(11) NOT NULL,
  `yorum_durum` int(11) NOT NULL,
  `yorum_tarih` datetime NOT NULL,
  `uye_adi` varchar(255) NOT NULL,
  PRIMARY KEY (`yorum_id`),
  KEY `yorum_id` (`yorum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_detay`, `haber_id`, `yorum_durum`, `yorum_tarih`, `uye_adi`) VALUES
(1, 'dedede', 0, 1, '0000-00-00 00:00:00', ''),
(2, '', 87, 1, '0000-00-00 00:00:00', ''),
(3, 'asdf', 87, 1, '0000-00-00 00:00:00', ''),
(4, 'asdf', 87, 1, '0000-00-00 00:00:00', ''),
(5, 'dd', 87, 1, '0000-00-00 00:00:00', ''),
(6, 'dd', 87, 1, '0000-00-00 00:00:00', ''),
(7, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(8, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(9, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(10, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(11, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(12, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(13, 'ff', 0, 1, '0000-00-00 00:00:00', ''),
(14, 'asd', 0, 1, '0000-00-00 00:00:00', ''),
(15, 'yorum', 0, 1, '2012-10-30 00:00:00', ''),
(16, 'asd', 87, 1, '2011-12-10 20:20:20', 'ali'),
(17, 'asd', 87, 1, '2012-02-05 10:10:10', 'veli'),
(18, 'sad', 88, 1, '2013-02-03 10:08:05', 'ahmet'),
(19, 'jkhjk', 87, 1, '2014-02-20 12:12:10', 'mehmet'),
(20, 'bu haber çok güzel', 87, 1, '0000-00-00 00:00:00', 'deneme üyesi'),
(21, 'deneme saat', 87, 0, '0000-00-00 00:00:00', 'deneme üyesi'),
(22, 'deneme saat', 87, 0, '0000-00-00 00:00:00', 'deneme üyesi'),
(23, 'deneme saat', 87, 0, '0000-00-00 00:00:00', 'deneme üyesi'),
(24, 'deneme saat', 87, 0, '0000-00-00 00:00:00', 'deneme üyesi'),
(25, 'dede', 87, 0, '0000-00-00 00:00:00', 'deneme üyesi'),
(26, 'yorum', 80, 0, '2012-10-10 12:12:12', 'deneme üyesi'),
(27, 'asd', 80, 0, '2014-03-29 04:28:56', 'deneme üyesi'),
(28, 'asdsadsadsadsadsad', 80, 1, '0000-00-00 00:00:00', 'deneme üyesi'),
(29, 'ssss', 80, 1, '2014-03-29 16:32:15', 'deneme üyesi'),
(30, 'dedededededed', 80, 1, '2014-03-29 17:35:44', 'deneme üyesi'),
(31, 'askfgh', 80, 0, '2014-03-29 17:36:43', 'deneme üyesi'),
(32, 'askfgh', 80, 0, '2014-03-29 17:36:50', 'deneme üyesi'),
(33, 'aa', 80, 0, '2014-03-29 17:39:27', 'deneme üyesi'),
(34, 'aa', 80, 0, '2014-03-29 17:40:49', 'deneme üyesi'),
(35, 'aa', 80, 0, '2014-03-29 17:40:52', 'deneme üyesi'),
(36, 'aa', 80, 0, '2014-03-29 17:41:47', 'deneme üyesi'),
(37, 'asdfgh', 80, 0, '2014-03-29 17:44:14', 'deneme üyesi'),
(38, 'asdfgh', 80, 0, '2014-03-29 17:44:18', 'deneme üyesi'),
(39, 'asdfgh', 80, 0, '2014-03-29 17:44:22', 'deneme üyesi'),
(40, 'asdfgh', 80, 0, '2014-03-29 17:46:45', 'deneme üyesi'),
(41, 'deneme 123213213213213213213', 80, 0, '2014-03-29 18:09:45', 'deneme üyesi'),
(42, 'deneme 123213213213213213213', 80, 0, '2014-03-29 18:09:54', 'deneme üyesi'),
(43, 'deneme 123213213213213213213', 80, 0, '2014-03-29 18:10:08', 'deneme üyesi'),
(44, 'deneme 123213213213213213213', 80, 0, '2014-03-29 18:11:36', 'deneme üyesi'),
(45, 'deneme 123213213213213213213', 80, 0, '2014-03-29 18:11:49', 'deneme üyesi'),
(46, 'ffff', 80, 0, '2014-03-29 18:12:13', 'deneme üyesi'),
(47, 'ffff', 80, 0, '2014-03-29 18:13:36', 'deneme üyesi'),
(48, 'ffff', 80, 0, '2014-03-29 18:15:43', 'deneme üyesi'),
(49, 'ffff', 80, 0, '2014-03-29 18:16:06', 'deneme üyesi'),
(50, 'ffff', 80, 0, '2014-03-29 18:16:44', 'deneme üyesi'),
(51, 'kkk', 80, 0, '2014-03-29 18:17:01', 'deneme üyesi'),
(52, 'kkrkrkrkrkrkrkr', 80, 0, '2014-03-29 18:23:04', 'deneme üyesi'),
(53, 'kkrkrkrkrkrkrkr', 80, 0, '2014-03-29 18:23:55', 'deneme üyesi'),
(54, 'kkrkrkrkrkrkrkr', 80, 0, '2014-03-29 18:24:00', 'deneme üyesi'),
(55, 'wqewqewqewqe', 80, 0, '2014-03-29 18:25:31', 'deneme üyesi'),
(56, 'wqewqewqewqe', 80, 0, '2014-03-29 18:25:35', 'deneme üyesi'),
(57, 'wqewqewqewqe', 80, 0, '2014-03-29 18:25:39', 'deneme üyesi'),
(58, 'wqewqewqewqe', 80, 0, '2014-03-29 18:26:18', 'deneme üyesi'),
(59, 'wqewqewqewqe', 80, 0, '2014-03-29 18:26:23', 'deneme üyesi'),
(60, 'wqewqewqewqe', 80, 0, '2014-03-29 18:27:21', 'deneme üyesi'),
(61, 'wqewqewqewqe', 80, 0, '2014-03-29 18:27:24', 'deneme üyesi'),
(62, 'wqewqewqewqe', 80, 0, '2014-03-29 18:27:50', 'deneme üyesi'),
(63, 'hh', 80, 0, '2014-03-29 18:28:03', 'deneme üyesi'),
(64, 'hh', 80, 0, '2014-03-29 18:28:20', 'deneme üyesi'),
(65, 'ccc', 80, 0, '2014-03-29 18:28:57', 'deneme üyesi'),
(66, 'dasadsa', 88, 0, '2014-03-29 18:32:14', 'deneme üyesi'),
(67, 'dasadsa', 88, 0, '2014-03-29 18:32:33', 'deneme üyesi'),
(68, 'dasadsa', 88, 0, '2014-03-29 18:33:50', 'deneme üyesi'),
(69, 'hooo', 88, 0, '2014-03-29 18:34:02', 'deneme üyesi'),
(70, 'goooooooo', 88, 0, '2014-03-29 18:35:12', 'deneme üyesi'),
(71, 'sadsadsadsd', 88, 0, '2014-03-29 18:37:34', 'deneme üyesi'),
(72, 'dfgfdgfdgfdg', 88, 0, '2014-03-29 18:38:24', 'deneme üyesi'),
(73, 'sfsfdsfsdfsdfdsfdsfds', 88, 0, '2014-03-29 18:38:40', 'deneme üyesi'),
(74, 'looooooo', 88, 0, '2014-03-29 18:40:10', 'deneme üyesi'),
(75, 'looooooo', 88, 0, '2014-03-29 18:40:21', 'deneme üyesi'),
(76, 'asd', 80, 0, '2014-03-29 18:42:07', 'deneme üyesi'),
(77, 'dedededededededede', 80, 0, '2014-03-29 18:42:53', 'deneme üyesi'),
(78, 'kukukukukukukukukuku', 80, 0, '2014-03-29 18:45:18', 'deneme üyesi'),
(79, 'tktktk', 80, 0, '2014-03-29 18:45:56', 'deneme üyesi'),
(80, 'asdsad', 80, 0, '2014-03-29 18:46:47', 'deneme üyesi'),
(81, 'dedqqweqwewqewqe', 80, 0, '2014-03-29 18:47:25', 'deneme üyesi'),
(82, 'asd', 80, 0, '2014-03-29 18:47:51', 'deneme üyesi'),
(83, 'asdsadas', 80, 0, '2014-03-29 18:48:06', 'deneme üyesi'),
(84, 'asdsadsad', 87, 0, '2014-03-29 18:48:27', 'deneme üyesi'),
(85, 'sadsadsa', 87, 0, '2014-03-29 18:59:27', 'deneme üyesi'),
(86, 'asdsadsadsadsadsad', 87, 0, '2014-04-03 03:36:50', 'deneme üyesi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
