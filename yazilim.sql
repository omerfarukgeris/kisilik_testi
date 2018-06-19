-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 12:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yazilim`
--

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(11) NOT NULL,
  `KullaniciAdi` int(11) NOT NULL,
  `Askoru` int(11) NOT NULL,
  `Bskoru` int(11) NOT NULL,
  `Cskoru` int(11) NOT NULL,
  `Dskoru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sorular`
--

CREATE TABLE `sorular` (
  `ID` int(11) NOT NULL,
  `SoruNo` int(11) NOT NULL,
  `Soru` text COLLATE utf8_turkish_ci NOT NULL,
  `A` text COLLATE utf8_turkish_ci NOT NULL,
  `B` text COLLATE utf8_turkish_ci NOT NULL,
  `C` text COLLATE utf8_turkish_ci NOT NULL,
  `D` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sorular`
--

INSERT INTO `sorular` (`ID`, `SoruNo`, `Soru`, `A`, `B`, `C`, `D`) VALUES
(1, 1, 'Aşağıdaki beyitlerden hangisi sizi daha iyi\r\nanlatır?\r\n', 'Güçlü, kararlı, girişken ve doğuştan liderim Düşer kalkar, yoluma devam ederim\r\n', 'Hayata anlamlı renkler katar eğlenceyi severim Ömür boyu herkesin mutlu ve neşeli olmasını dilerim.\r\n', 'Her anımı huzurlu ve sakin geçirmek isterim Kavga gürültü sevmem, işlerimde en kolay yolu seçerim.\r\n', 'Her şeyin mükemmel, düzgün, kusursuz olmasını isterim İlişkilerimde saygılı ve mesafeli olmayı severim.\r\n'),
(2, 2, 'Genellikle hangi tempoda ve nasıl konuşursunuz?\r\n', 'Hızlı ve sonuca yönelik\r\n', 'Çok hızlı, heyecanlı ve eğlenceli\r\n', 'Daha yavaş ve sakin\r\n', 'Normal ve söyleyeceklerimi aklımda tartarak\r\n'),
(3, 3, 'Bir işe motive olmanızı sağlayan en önemli unsur hangisidir?\r\n', 'Sonuçları düşünmek\r\n', 'Onaylanmak, takdir edilmek\r\n', 'Guruptaki arkadaşlarımın desteği\r\n', 'Etkinlik, düzen ve disiplin\r\n'),
(4, 4, 'Çalışma tarzınız hangisine uygundur? ', 'Yoğun ve hızlıyımdır. Aynı anda birkaç iş bir arada yapabilirim.\r\n', 'Özgür bir ortamda çalışırım. İnsan ilişkileri odaklıyımdır.\r\n', 'Ön planda olmayan; ama gruba her türlü desteği veren bir yapım vardır.\r\n', 'Ayrıntıları önemserim ve tek bir konuya daklanarak çalışırım.\r\n'),
(5, 5, 'Çalışma temponuzu nasıl değerlendiriyorsunuz?\r\n', 'Hızlı bir tempoda çalışır, çabuk karar almayı severim.\r\n', 'İşlerin, rutin ve sıkıcı olmadığı ortamlarda yüksek motivasyonla çalışırım.\r\n', 'Nadiren aceleciyimdir. Geçde olsa üstlendiğim işi bitiririm.\r\n', 'Ayrıntılı düşünerek karar veririm. İş bitirici bir tempoyla çalışırım.\r\n'),
(6, 6, 'Hangisi sizi daha çok rahatsız eder?\r\n', 'Zaman israfı ve işlerin gecikmesi\r\n', 'Tekrar gerektiren işler ve monotonluk\r\n', 'Çatışma ortamı ve anlaşmazlıklar\r\n', 'Yanılmak ve yapılan hatanın tekrarlanması\r\n'),
(7, 7, 'Bulunduğunuz gruplarda hangi konumda daha başarılı olursunuz?\r\n', 'Olaylara yön veren ve otoriteyi kullanan\r\n', 'İnsanları motive eden ve neşelendiren\r\n', 'Uzlaştırıcı ve grup içindeki uyumu sağlayan\r\n', 'Bilgi sağlayıcı, araştırıcı ve olayları takip eden\r\n'),
(8, 8, 'Hangisi sizi daha çok strese sokar?\r\n', 'Olaylar üzerindeki güç ve kontrolümün azaldığını hissetmek\r\n', 'Sıkıcı, rutin işler yapılan bir ortamda bulunmak\r\n', 'Beni aşacağını düşündüğüm sorumluluklar Üstlenmek\r\n', 'Düzensiz ortamlar ve eksik yapılan işler\r\n'),
(9, 9, 'Bir öğrenci olsanız ve öğretmeniniz sınav kağıdınızı ikinci defa incelediğinde puanınızı artırdığını söylese, nasıl bir tepki verirsiniz?\r\n', 'Bunu zaten hak ettiğimi düşünürüm.\r\n', 'Çok sevinirim ve sevincimi belli ederim.\r\n', 'Hocama teşekkür eder ve saygı duyarım.\r\n', 'Hocamın nerede hata yaptığını merak eder, kağıdımı görmek isterim.\r\n'),
(10, 10, 'Saatler sürecek bir iş toplantısına katılmanız gerektiğinde aşağıdakilerden hangisini benimsersiniz?\r\n', 'Konunun ana hatlarının konuşulması için, sonucun belli olmasından hemen sonra çıkmayı tercih ederim.\r\n', 'Toplantı eğlenceli bir şekilde devam ettiğinde sonuna kadar kalmayı, sıkıcı olmaya başladığında erken çıkmayı tercih ederim.\r\n', 'Toplantının huzur içinde geçmesi ve güzel kararlar çıkması için üstüme düşeni yaparım.\r\n', 'Toplantıya vaktinden önce gelir, tüm detayları not eder ve bir değerlendirme yapmak için geç çıkarım.\r\n'),
(11, 11, 'Kendinizde gördüğünüz en zayıf yönünüz hangisidir?\r\n', 'İnsanlar işleri istediğim gibi yapmadığında ve seri olmadıklarında sinirlenmek\r\n', 'Düzensiz, dağınık ve programsız olmak\r\n', 'Kimseye hayır diyememek ve başkalarının işine koşarken kendi işimi aksatmak\r\n', 'Her şeyin kusursuz ve mükemmel olmasını istemek, İnsanlar buna uymadığında sinirlenmek\r\n'),
(12, 12, 'Kendinizde gördüğünüz en güçlü yönünüz hangisidir?\r\n', 'Kısa sürede karar alan ve harekete geçen yapım\r\n', 'Girdiğim ortamlara neşe ve heyecan katan tarafım\r\n', 'Her türlü ortama uyum sağlama ve çatışmaları önleme gayretim\r\n', 'Her şeyi planlı, programlı ve düzenli yapma huyum\r\n'),
(13, 13, 'Aşağıdaki ifadelerden hangisi sizi daha iyi\r\ntanımlar?\r\n', 'Güçlü, kararlı, otoriter ve yönlendirici\r\n', 'Popüler, neşeli, sevimli ve muzip\r\n', 'Barışçıl, sevecen, uyumlu ve sakin\r\n', 'Tertipli, düzenli, disiplinli ve planlı\r\n'),
(14, 14, 'Çalışma masanızda nelere dikkat edersiniz?\r\n', 'Öncelik verdiğim şeyleri yapacak şekilde düzenlenmiş sade bir masayı tercih ederim.', 'İnsanlara karma karışık gelen; ama benim aradığım her şeyi bulduğum bir masada çalışırım.', 'Önce masamın üzerine gerekli olan her türlü araç gereci koyarım. Sık sık kalkarak enerjimi harcamak istemem.\r\n', 'İyi bir iş çıkarmam için masam son derece derli-toplu ve düzenli olmalıdır.\r\n'),
(15, 15, 'Ertesi gün çözülmesi gereken bir problem varsa o\r\nakşamki ruh haliniz nasıl olur?\r\n', 'Çok büyük tedirginlik duymam; çünkü ertesi gün o işi olması gerektiği gibi yapacağımdan eminimdir.\r\n', 'Çok tedirginlik duymam; çünkü nasıl olsa işler bir şekilde hallolacaktır.\r\n', 'Sorumluluğun üstümde olmasından dolayı tedirginlik duyarım.\r\n', 'Tedirginlik duyarım ve gecenin büyük bir bölümünde problemin nasıl çözüleceğiyle ilgili planlar yaparım.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sorular`
--
ALTER TABLE `sorular`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
