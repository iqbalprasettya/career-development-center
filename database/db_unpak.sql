-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 13.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_unpak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `interface`
--

CREATE TABLE `interface` (
  `id` int(10) NOT NULL,
  `jumbotron` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `number_contact1` varchar(255) NOT NULL,
  `number_contact2` varchar(225) NOT NULL,
  `mail_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `interface`
--

INSERT INTO `interface` (`id`, `jumbotron`, `address`, `number_contact1`, `number_contact2`, `mail_contact`) VALUES
(1, 'gd-unpak400.jpg', 'Jl. Pakuan, Tegallega. Kecamatan Bogor Tengah, Kota Bogor. Jawa Barat Indonesia', '(0251) 8375 547', '(0251) 8375547 (Fax)', 'fmipa@unpak.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id` int(10) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `tujuan_kerjasama` varchar(225) NOT NULL,
  `waktu_kerjasama` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggung_jawab` text NOT NULL,
  `kualifikasi` text NOT NULL,
  `lokasi` text NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `kelamin` enum('Pria','Wanita','Semua Jenis Kelamin') NOT NULL,
  `pengalaman` enum('1 Tahun','2 Tahun','3 Tahun','4 Tahun','5 Tahun') NOT NULL,
  `tipe` enum('Magang','Full-Time','Part-Time','Freelance') NOT NULL,
  `tentang` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `nama`, `perusahaan`, `deskripsi`, `tanggung_jawab`, `kualifikasi`, `lokasi`, `pendidikan`, `kelamin`, `pengalaman`, `tipe`, `tentang`, `link`, `logo`) VALUES
(9, 'Graphic Designer', 'Kee Indonesia', '<p>Kami mencari orang yang memiliki keterampilan kreatif dan portfolio dalam membuat sebuah Grafik Desain terutama untuk industri fashion. Orang yang kami perlukan akan bekerja untuk membuat sebuah desain sesuai kebutuhan brand dengan berbagai platform.</p>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"ed0dn-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"ed0dn-0-0\"><span data-offset-key=\"ed0dn-0-0\"><span data-text=\"true\">Membuat creative design untuk keperluan Social Media</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"1smcg-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"1smcg-0-0\"><span data-offset-key=\"1smcg-0-0\"><span data-text=\"true\">Membuat creative design untuk Ads (Stories, Feed, Right Column, Youtube, dll)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"f1p7g-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"f1p7g-0-0\"><span data-offset-key=\"f1p7g-0-0\"><span data-text=\"true\">Mampu membuat design sesuai dengan Brand Guideline</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"frte6-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"frte6-0-0\"><span data-offset-key=\"frte6-0-0\"><span data-text=\"true\">Membuat segala keperluan design lainnya yang dibutuhkan oleh team.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"1f66i-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"1f66i-0-0\"><span data-offset-key=\"1f66i-0-0\"><span data-text=\"true\">Mampu membuat copywriting untuk Brand Communication dalam design</span></span></div>\r\n</li>\r\n</ul>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"dt5k2-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"dt5k2-0-0\"><span data-offset-key=\"dt5k2-0-0\"><span data-text=\"true\">Pendidikan S1 (Jurusan DKV / setara)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"61k90-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"61k90-0-0\"><span data-offset-key=\"61k90-0-0\"><span data-text=\"true\">Jujur, teliti, sabar, dan detail.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"bbj1q-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"bbj1q-0-0\"><span data-offset-key=\"bbj1q-0-0\"><span data-text=\"true\">Bisa menggunakan Adobe Illustrator, Photoshop</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"5gh2f-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5gh2f-0-0\"><span data-offset-key=\"5gh2f-0-0\"><span data-text=\"true\">Paham fotografi / videografi (Nilai +)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"2og25-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"2og25-0-0\"><span data-offset-key=\"2og25-0-0\"><span data-text=\"true\">Memiliki pengalaman di bidang yang sama (Min. 1 tahun)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"8ek55-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"8ek55-0-0\"><span data-offset-key=\"8ek55-0-0\"><span data-text=\"true\">Memiliki ide yang kreatif untuk design</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"117s1-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"117s1-0-0\"><span data-offset-key=\"117s1-0-0\"><span data-text=\"true\">Memiliki kemampuan berbahasa Inggris yang baik</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"9nmp2-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"9nmp2-0-0\"><span data-offset-key=\"9nmp2-0-0\"><span data-text=\"true\">Bisa bekerja dengan team dan sesuai deadline.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"c01i7\" data-offset-key=\"439a1-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"439a1-0-0\"><span data-offset-key=\"439a1-0-0\"><span data-text=\"true\">Bisa menggunakan MAC OS.</span></span></div>\r\n</li>\r\n</ul>', 'Jakarta, Indonesiavxfvxvx', 'Pendidikan S1', 'Semua Jenis Kelamin', '1 Tahun', 'Full-Time', '<p>KEE INDONESIA is an e-commerce company for camera bags and other photography equipment. Our mission is to create products that are safe, comfortable, and what photographers need.</p>', 'https://glints.com/id/opportunities/jobs/graphic-designer/c345dfc5-2470-4f7e-848a-39600a5ca200', '755-kee-img.jpg'),
(10, 'Finance and Accounting Staff', 'Kee Indonesia', '<p>Kami mencari orang yang memiliki keterampilan kreatif dan portfolio dalam membuat sebuah Grafik Desain terutama untuk industri fashion. Orang yang kami perlukan akan bekerja untuk membuat sebuah desain sesuai kebutuhan brand dengan berbagai platform.</p>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"2vi7q-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"2vi7q-0-0\"><span data-offset-key=\"2vi7q-0-0\"><span data-text=\"true\">Membuat laporan keuangan bulanan (Laba Rugi &amp; Neraca)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"1slj4-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"1slj4-0-0\"><span data-offset-key=\"1slj4-0-0\"><span data-text=\"true\">Mencatat dan mengecek setiap transaksi harian</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"5fe3j-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5fe3j-0-0\"><span data-offset-key=\"5fe3j-0-0\"><span data-text=\"true\">Melakukan budgeting &amp; forecasting</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"doou9-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"doou9-0-0\"><span data-offset-key=\"doou9-0-0\"><span data-text=\"true\">Melakukan pembayaran ke supplier</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"9mvvo-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"9mvvo-0-0\"><span data-offset-key=\"9mvvo-0-0\"><span data-text=\"true\">Mengecek pembayaran dari partner</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"2j4fo-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"2j4fo-0-0\"><span data-offset-key=\"2j4fo-0-0\"><span data-text=\"true\">Menganalisis keuangan perusahaan</span></span></div>\r\n</li>\r\n</ul>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"a8sd7-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"a8sd7-0-0\"><span data-offset-key=\"a8sd7-0-0\"><span data-text=\"true\">Pria / Wanita, umur maksimal 30 tahun</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"7l452-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"7l452-0-0\"><span data-offset-key=\"7l452-0-0\"><span data-text=\"true\">Pendidikan minimal Diploma / S1 dengan jurusan Akutansi / Finance</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"ar0v0-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"ar0v0-0-0\"><span data-offset-key=\"ar0v0-0-0\"><span data-text=\"true\">Memiliki pengalaman minimal 1 tahun di bidang yang sama</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"724j7-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"724j7-0-0\"><span data-offset-key=\"724j7-0-0\"><span data-text=\"true\">Memahami aplikasi Accurate (Nilai +)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"1a949-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"1a949-0-0\"><span data-offset-key=\"1a949-0-0\"><span data-text=\"true\">Jujur, teliti dan bertanggung jawab</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"4kato\" data-offset-key=\"c1l2j-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"c1l2j-0-0\"><span data-offset-key=\"c1l2j-0-0\"><span data-text=\"true\">Mampu bekerja di bawah tekanan &amp; deadline</span></span></div>\r\n</li>\r\n</ul>', 'Jakarta, Indonesia', 'Pendidikan S1 (Akutansi / Finance)', 'Semua Jenis Kelamin', '1 Tahun', 'Full-Time', '<p>KEE INDONESIA is an e-commerce company for camera bags and other photography equipment. Our mission is to create products that are safe, comfortable, and what photographers need.</p>', 'https://glints.com/id/opportunities/jobs/finance-and-accounting-staff/8a3a7818-46e3-49a3-86cc-536668a324bb', '364-kee-img.jpg'),
(11, 'Backend Developer - Laravel', 'PT Adma Digital Solusi', '<p>We re Hiring Backend Developer - Laravel for one of Our Product Lines, PanenPanen.id that meets requirements below :</p>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"7oc0v-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"7oc0v-0-0\"><span data-offset-key=\"7oc0v-0-0\"><span data-text=\"true\">Develop website / application using selected framework on PHP language</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"9leck-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"9leck-0-0\"><span data-offset-key=\"9leck-0-0\"><span data-text=\"true\">Develop backend app and REST API server development</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"dlus1-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"dlus1-0-0\"><span data-offset-key=\"dlus1-0-0\"><span data-text=\"true\">Able to setup and configure server and workspace</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"a4orj-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"a4orj-0-0\"><span data-offset-key=\"a4orj-0-0\"><span data-text=\"true\">Working closely with other division members to ensure projects are developed as expected</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"clv5b-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"clv5b-0-0\"><span data-offset-key=\"clv5b-0-0\"><span data-text=\"true\">Execute companys best practice, methodologies to ensure deliverable and results will be the highest quality possible</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"8s3vd-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"8s3vd-0-0\"><span data-offset-key=\"8s3vd-0-0\"><span data-text=\"true\">Rechecking the code to minimize bugs</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"a4881-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"a4881-0-0\"><span data-offset-key=\"a4881-0-0\"><span data-text=\"true\">Initiatively keep up with the programming technologies&nbsp;</span></span></div>\r\n</li>\r\n</ul>', '<ul class=\"public-DraftStyleDefault-ul\" data-offset-key=\"i9jc-0-0\">\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"i9jc-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"i9jc-0-0\"><span data-offset-key=\"i9jc-0-0\">Have min 1 years experience as PHP Developer</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"65s00-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"65s00-0-0\"><span data-offset-key=\"65s00-0-0\">Experience in working with current PHP framework such as Laravel would be an advantage</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"i4ct-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"i4ct-0-0\"><span data-offset-key=\"i4ct-0-0\">Familiar with SQL databases and web server configuration</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"4s6lg-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"4s6lg-0-0\"><span data-offset-key=\"4s6lg-0-0\">Good understanding on Object Oriented Programming (OOP)</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"m650\" data-offset-key=\"c3s69-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"c3s69-0-0\"><span data-offset-key=\"c3s69-0-0\">Mastering Version Control / Git</span></div>\r\n</li>\r\n</ul>', 'Surabaya', 'Pendidikan S1 / D3 / D4', 'Semua Jenis Kelamin', '1 Tahun', 'Full-Time', '<p>PT ADMA Digital Solusi is one of three holding companies consisting of PT ARM Solusi which is engaged in E-Office, and PT Infonika Parasa which was established in 2007 is engaged in the telecommunications sector. Our company is engaged in developing digital supply chains for the agriculture sector and MSMEs in Indonesia. One of our start-up lines, PanenPanen.id is the official partner of BAKTI Kominfo to improve BUMDES fostered throughout Indonesia.</p>', 'https://glints.com/id/opportunities/jobs/backend-developer-laravel/dc03ad16-ca0c-4cd0-8ae6-a7897da3bce7', '33-adma.webp'),
(13, 'Graphic Designer DOKI', 'DOKI', '<div class=\"\" data-block=\"true\" data-editor=\"7jjml\" data-offset-key=\"7e19r-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"7e19r-0-0\"><span data-offset-key=\"7e19r-0-0\">Digital Agency in Jakarta Selatan. Our focus are on social media and content. We value our work life balance very seriously. </span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"7jjml\" data-offset-key=\"ene4i-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"ene4i-0-0\"><span data-offset-key=\"ene4i-0-0\">Let s talk!</span></div>\r\n</div>', '', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"di3k2-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"di3k2-0-0\"><span data-offset-key=\"di3k2-0-0\"><span data-text=\"true\">Proficient in Photoshop, Illustrator, and related softwares</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"9o1km-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"9o1km-0-0\"><span data-offset-key=\"9o1km-0-0\"><span data-text=\"true\">Great layouting skill and taste in design</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"6lps2-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6lps2-0-0\"><span data-offset-key=\"6lps2-0-0\"><span data-text=\"true\">Great visual eye and attention to details</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"5m84p-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5m84p-0-0\"><span data-offset-key=\"5m84p-0-0\"><span data-text=\"true\">Creative thinker and able to participate in the brainstorming and concept creation of digital ideas</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"78cnq-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"78cnq-0-0\"><span data-offset-key=\"78cnq-0-0\"><span data-text=\"true\">Have an affinity for visual storytelling and visual interface design</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"7q2m4-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"7q2m4-0-0\"><span data-offset-key=\"7q2m4-0-0\"><span data-text=\"true\">Ability to understand the brief and turn it into creative design</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"2po0-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"2po0-0-0\"><span data-offset-key=\"2po0-0-0\"><span data-text=\"true\">Must be organized and adaptable to work on multiple projects</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"5n6tg-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5n6tg-0-0\"><span data-offset-key=\"5n6tg-0-0\"><span data-text=\"true\">Solid team player</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"cmii3\" data-offset-key=\"7e3qq-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"7e3qq-0-0\"><span data-offset-key=\"7e3qq-0-0\"><span data-text=\"true\">Motion design skill is a plus</span></span></div>\r\n</li>\r\n</ul>', 'Jakarta Pusat', 'Pendidikan S1 / D3 / D4', 'Semua Jenis Kelamin', '2 Tahun', 'Full-Time', '<p>Digital Agency in Jakarta Selatan. Our focus are on social media and content. We value our work life balance very seriously</p>', 'https://glints.com/id/opportunities/jobs/graphic-designer/2eb0a7ea-cbfe-414e-a6a8-8152cc4d4e3a', '725-doki.webp'),
(14, 'IT Support ', 'PT. Cahaya Bahari Jakarta', '', '<ul>\r\n<li>IT Support bertanggung jawab untuk mengawasi sistem komputer dan menjawab pertanyaan staf tentang pengoperasian perangkat lunak atau perangkat keras komputer.</li>\r\n<li>Menyiapkan peralatan untuk digunakan karyawan, melakukan dan memastikan pemasangan kabel, sistem operasi, atau perangkat lunak yang sesuai.</li>\r\n<li>Memasang dan melakukan perbaikan pada perangkat keras, perangkat lunak, atau perlengkapan periferal, mengikuti spesifikasi desain atau pemasangan.</li>\r\n<li>Memberikan layanan dan dukungan untuk masalah dan insiden terkait sistem komputer di kantor.</li>\r\n</ul>', '<ul>\r\n<li>Diploma / Sarjana jurusan IT / sistem informasi / ilmu komputer.</li>\r\n<li>Minimal 2 (atau lebih) tahun pengalaman bekerja di posisi yang sama.</li>\r\n<li>Jujur, bertanggung jawab, pekerja keras, mandiri, inisiatif dan keterampilan kepemimpinan dibutuhkan (anda akan bekerja sendiri).</li>\r\n<li>Menguasai troubleshooting jaringan, perangkat keras, perangkat lunak, konfigurasi sistem IT, LAN dan internet.</li>\r\n<li>Menguasai pengembangan dan pemeliharaan jaringan dan server.</li>\r\n<li>Hardware: dekstop, PC, laptop, printer (Printer Multifungsi/MFP)</li>\r\n<li>Sistem Operasi: Sistem Operasi Microsoft Windows.</li>\r\n</ul>', 'Jakarta Utara', 'Pendidikan S1 / D3 / D4', 'Semua Jenis Kelamin', '2 Tahun', 'Full-Time', '<p>Cahaya Bahari Corporation or also known as PT Cahaya Bahari Jakarta is the leading frozen seafood provider in Indonesia since year 2006. We are committed to provide a consistent supply of frozen seafood of higher freshness quality to every home in Indonesia. Delivering enjoyable eating experience has always been our priority. To do that, we constantly pursue incremental innovation to improve our freezing and cooling technologies such as on board freezing to maximize freshness. Over the years of expanding our distribution network to bring fresh frozen seafood to every home in Indonesia, we take pride of ourselves being the 1st largest frozen seafood provider in the country. Serving more than 70% of the country&rsquo;s population with a monthly distribution of 1.000 tons. Cahaya Bahari Corporation is also a parent company of several companies working within other various sectors such as export and import of agricultural products, production of preserved foods, natural energy exploration, distribution of healthcare products, education, bike rental system and technology.</p>', 'https://www.jobstreet.co.id/id/job/it-support-3892945?jobId=jobstreet-id-job-3892945§ionRank=20&token=0~ba87be75-b57a-4ee8-8cd0-5a889da78394&fr=SRP%20View%20In%20New%20Tab', '421-cbj.jpg'),
(16, 'Frontend Engineer', 'Lion Parcel', '<p>-</p>', '<ul>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"6gjrq-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6gjrq-0-0\"><span data-offset-key=\"6gjrq-0-0\"><span data-text=\"true\">Designing and implementing new features for our user-facing client front end</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"74i9d-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"74i9d-0-0\"><span data-offset-key=\"74i9d-0-0\"><span data-text=\"true\">Write a good, clean, readable, testable and maintainable code.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"d2qov-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"d2qov-0-0\"><span data-offset-key=\"d2qov-0-0\"><span data-text=\"true\">Contribute and participate in all phases of the development life cycle including analysis, design, development, testing and maintenance.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"5jpd5-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5jpd5-0-0\"><span data-offset-key=\"5jpd5-0-0\"><span data-text=\"true\">Integrate with partners and develop API for external services.</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"44s25-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"44s25-0-0\"><span data-offset-key=\"44s25-0-0\"><span data-text=\"true\">Develop a scalable and efficient web based application and secure features</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"3qefm-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"3qefm-0-0\"><span data-offset-key=\"3qefm-0-0\"><span data-text=\"true\">Contributing in all phases of the development lifecycle</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"6vn8e-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6vn8e-0-0\"><span data-offset-key=\"6vn8e-0-0\"><span data-text=\"true\">Following best practices (test-driven development, continuous integration, refactoring, code standards)</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"5qvb8-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5qvb8-0-0\"><span data-offset-key=\"5qvb8-0-0\"><span data-text=\"true\">Driving continuous adoption and integration of relevant new technologies into design</span></span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"89k7n-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"89k7n-0-0\"><span data-offset-key=\"89k7n-0-0\"><span data-text=\"true\">Continually learn about new programming languages, technologies, and platforms that will affect the functions of applications in development</span></span></div>\r\n</li>\r\n</ul>', '<ul class=\"public-DraftStyleDefault-ul\" data-offset-key=\"6rmbt-0-0\">\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"6rmbt-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6rmbt-0-0\"><span data-offset-key=\"6rmbt-0-0\">Bachelor s or Master s Degree in Computer Science</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"ac99o-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"ac99o-0-0\"><strong>Min. 2-4 years experiences.</strong></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"5iepd-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"5iepd-0-0\"><span data-offset-key=\"5iepd-0-0\">Good communication skills.</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"ffi36-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"ffi36-0-0\"><span data-offset-key=\"ffi36-0-0\">Have a good understanding of Web Technology including HTTP, Web Services, OAuth and RESTful API.</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"2urid-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"2urid-0-0\"><span data-offset-key=\"2urid-0-0\">Strong Computer Science fundamentals (algorithms, data structures, software design)</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"6vqi1-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6vqi1-0-0\"><span data-offset-key=\"6vqi1-0-0\">An understanding of how web applications work including security, session management, and best development practices</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"6shpu-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"6shpu-0-0\"><span data-offset-key=\"6shpu-0-0\">Proficiency and experience working with JavaScript ES5 or later, typescript, HTML, and CSS</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"fnsbj-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"fnsbj-0-0\"><span data-offset-key=\"fnsbj-0-0\">Experience in web technologies (</span><strong>Vue.Js</strong><span data-offset-key=\"fnsbj-0-2\">, Vuex, React, React Native &amp; Javascript)</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"aa1d4-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"aa1d4-0-0\"><span data-offset-key=\"aa1d4-0-0\">Knowledge about modern Frontend paradigm and concept like Single Page Application, Server-side Rendering, Client-side Rendering</span></div>\r\n</li>\r\n<li class=\"public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR\" data-block=\"true\" data-editor=\"it92\" data-offset-key=\"38jii-0-0\">\r\n<div class=\"public-DraftStyleDefault-block public-DraftStyleDefault-ltr\" data-offset-key=\"38jii-0-0\"><span data-offset-key=\"38jii-0-0\">Able to work with a team and get used to it with deadlines</span></div>\r\n</li>\r\n</ul>', 'Jakarta, Indonesia', 'Sarjana', 'Semua Jenis Kelamin', '2 Tahun', 'Full-Time', '<p>Lion Parcel is a reliable delivery service company in Indonesia that provides local and international package delivery. Member of Lion Air Group. Lion Parcel (PT Lion Express) is Lion Group express courier arm with aim to leverage on its aircraft fleet, widest destination and quality of service to become leader in the market.</p>', 'https://glints.com/id/opportunities/jobs/frontend-engineer/39110d5f-95d6-4742-870d-bfbbd9e7986e', '412-lion.webp'),
(19, 'Web Developer', 'PT Nusantara Secom InfoTech', '', '<ul>\r\n<li>\r\n<p>Develop web application based on user requirement.</p>\r\n</li>\r\n<li>\r\n<p>Support and improve sustainability of some application and products.</p>\r\n</li>\r\n<li>\r\n<p>Integrate data from various back-end services and database.</p>\r\n</li>\r\n</ul>', '<ul>\r\n<li>\r\n<p>Bachelor Degree or Diploma 3 in&nbsp;Informatics or related.</p>\r\n</li>\r\n<li>\r\n<p>Have experience as front end developer and/or back end developer.</p>\r\n</li>\r\n<li>\r\n<p>Mastering programming language of JavaScript NodeJS/Angular/React/Vue.js), HTML, CSS.</p>\r\n</li>\r\n<li>\r\n<p>Mastering programming language of SQL (PostgreSQL).</p>\r\n</li>\r\n<li>\r\n<p>Understand programming language of Python, C# and Java is an advantage.</p>\r\n</li>\r\n<li>\r\n<p>Understand android or mobile programming language is an advantage.</p>\r\n</li>\r\n<li>\r\n<p>Understand about Geographic Information System is an advantage.</p>\r\n</li>\r\n<li>\r\n<p>Have good analytical approach.</p>\r\n</li>\r\n</ul>', 'Jakarta Raya', 'Pendidikan S1', 'Semua Jenis Kelamin', '2 Tahun', 'Full-Time', '<p>PT. Nusantara Secom InfoTech that focused on IT related services since 1988 is a subsidiary company of SECOM Group Japan through Secom Co. Ltd. and PASCO Corporation Japan. Secom is a leading company for physical and cyber security services industry in Japan, whereas Pasco is a leading GIS and Mapping Company in Japan</p>', 'https://www.jobstreet.co.id/id/job/web-developer-3878174?jobId=jobstreet-id-job-3878174§ionRank=4&token=0~eb7b72d7-e6e6-4fb7-a172-6953329e32ce&fr=SRP%20View%20In%20New%20Tab', '845-NSI.jpg'),
(21, 'Full Stack Developer', 'PT Teknologi Api Dua Sisi', '', '<ul>\r\n<li>Pengalaman di Web Development.</li>\r\n<li>Mengembangkan desain front end dari sebuah App dan website</li>\r\n<li>Merancang cara pengguna dalam mengakses App dan website</li>\r\n<li>Mengembangkan back end dari website atau aplikasi</li>\r\n<li>Membuat server dan database</li>\r\n<li>Memastikan platform bisa diakses lewat mobile secara optimal</li>\r\n<li>Memastikan aplikasi responsif</li>\r\n<li>Bekerja sama dengan desainer grafis untuk desain App dan web</li>\r\n<li>Menyelesaikan proyek dari konsep hingga produk jadi</li>\r\n<li>Mendesain dan mengembangkan Application Programming Interface (API)</li>\r\n<li>Memenuhi kebutuhan teknis dan kebutuhan konsumen</li>\r\n<li>Mengikuti perkembangan dunia aplikasi, web, dan bahasa pemrograman</li>\r\n</ul>', '<ul>\r\n<li>Memiliki Portfolio Web Development Project.</li>\r\n<li>Menguasai Framework PHP, Code Igniter, Laravel, JSON, HTML5, CSS, Javascript, MySQL.</li>\r\n<li>Memahami konsep RESTful API.</li>\r\n<li>Menguasai NodeJS, MongoDB.</li>\r\n<li>Menguasai Reach Native, Reach JS, Golang, Kotlin, IONIC, Flutter menjadi nilai tambah.</li>\r\n<li>Pengalaman dalam Mobile APP Development menjadi nilai tambah.</li>\r\n<li>Familiar dengan source control Git.</li>\r\n<li>Mempunyai skill problem solving yang baik.</li>\r\n<li>Good Attitude dan Attention to detail.</li>\r\n</ul>', 'Jakarta Barat', 'Pendidikan S1 / D3 / D4', 'Semua Jenis Kelamin', '2 Tahun', 'Full-Time', '<p>TADS (Teknologi Api Dua Sisi) adalah perusahaan developer yang bergerak dalam perancangan digital system di dalam berbagai jenis industri. Kami terlahir dari kebutuhan usaha untuk mendigitalisasi system-system di dalam perusahaan mereka. Tentunya dengan jaman digital banyak pengusaha sudah menyadari efek digital system di bisnis mereka. Dari mulai pembayaran, pengaturan karyawan, bahkan pencatatan keuangan internal bisnis.</p>\r\n<p>Dimulai dari pengalaman sebagai freelancer project manager untuk berbagai perusahaan. Founder kami memutuskan untuk membangun TADS sebagai solusi untuk banyak perusahaan di berbagai bidang. Kami menyediakan system ordering untuk industri F&amp;B, Absensi untuk kebutuhan HRD, bahkan ledgering system untuk pencatatan keuangan di dalam perusahaan.</p>', 'https://www.jobstreet.co.id/id/job/full-stack-developer-3877542?jobId=jobstreet-id-job-3877542%C2%A7ionRank=6&token=0~eb7b72d7-e6e6-4fb7-a172-6953329e32ce&fr=SRP%20View%20In%20New%20Tab', '136-tads.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `gambar`) VALUES
(1, '98-prodi-ilkom.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktik`
--

CREATE TABLE `praktik` (
  `id` int(10) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `penjelasan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `praktik`
--

INSERT INTO `praktik` (`id`, `judul`, `penjelasan`, `deskripsi`, `gambar`) VALUES
(20, 'Project Pembuatan Website CDC SMK Infokom Bogor 1', '<p>Career Development Center (CDC) merupakan suatu sistem yang menyediakan informasi lowongan pekerjaan dalam mengembangkan karir khususnya bagi alumni Universitas Pakuan. Sistem ini juga menyediakan data perusahaan yang bekerja sama dengan Universitas Pakuan dan informasi seputar dunia kerja.</p>', '<p>Project ini dibuat oleh Siswa Siswi PKL SMK INFOKOM Kota Bogor</p>\r\n<p>Prakerin atau Praktek Kerja Industri merupakan kegiatan pendidikan, pelatihan, dan pembelajaran bagi siswa SMK (Sekolah Menengah Kejuruan) yang dilakukan di dunia usaha atau dunia industri yang berkaitan dengan kompetensi siswa sesuai bidang yang digelutinya.</p>\r\n<p>Yayasan Telekomunikasi Nasional terletak di dua lokasi yang berbeda tepatnya di Jalan RE Abdullah Nomor 15 Gunung Batu, Bogor menempati lahan seluas 800 m2 dijadikan lokasi pertama satuan pendidikan: SMP INFOKOM Bogor. Sedangkan untuk lokasi kedua di Jalan Letjen Ibrahim Adjie Nomor 178 Sindang Barang Bogor menempati lahan seluas 2.600 m2 satuan pendidikan: SMK INFOKOM Bogor</p>', '91-cdc-pkl.jpg'),
(26, 'Project Pembuatan Website CDC SMK Infokom Bogor 2', '<p>Career Development Center (CDC) merupakan suatu sistem yang menyediakan informasi lowongan pekerjaan dalam mengembangkan karir khususnya bagi alumni Universitas Pakuan. Sistem ini juga menyediakan data perusahaan yang bekerja sama dengan Universitas Pakuan dan informasi seputar dunia kerja</p>', '<p>Project ini dibuat oleh Siswa Siswi PKL SMK INFOKOM Kota Bogor</p>\r\n<p>Prakerin atau Praktek Kerja Industri merupakan kegiatan pendidikan, pelatihan, dan pembelajaran bagi siswa SMK (Sekolah Menengah Kejuruan) yang dilakukan di dunia usaha atau dunia industri yang berkaitan dengan kompetensi siswa sesuai bidang yang digelutinya.</p>', '86-cdc-pkl -.jpg'),
(27, 'Project Pembuatan Website CDC SMK Infokom Bogor 3', '<p>Career Development Center (CDC) merupakan suatu sistem yang menyediakan informasi lowongan pekerjaan dalam mengembangkan karir khususnya bagi alumni Universitas Pakuan. Sistem ini juga menyediakan data perusahaan yang bekerja sama dengan Universitas Pakuan dan informasi seputar dunia kerja</p>', '<p>Project ini dibuat oleh Siswa Siswi PKL SMK INFOKOM Kota Bogor</p>\r\n<p>Prakerin atau Praktek Kerja Industri merupakan kegiatan pendidikan, pelatihan, dan pembelajaran bagi siswa SMK (Sekolah Menengah Kejuruan) yang dilakukan di dunia usaha atau dunia industri yang berkaitan dengan kompetensi siswa sesuai bidang yang digelutinya.</p>', '27-cdc-pkl -.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktural`
--

CREATE TABLE `struktural` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktural`
--

INSERT INTO `struktural` (`id`, `nama`, `jabatan`) VALUES
(1, 'Asep Denih, S.Kom., M.Sc., Ph.D', 'Dekan'),
(2, 'Dr. Herfina,M.Pd., M.Kom.', 'Wakil Dekan Bidang Akademik & Kemahasiswaan'),
(3, 'Sri Wardatun, S.Si., M.Si. Apt.', 'Wakil Dekan Bidang Administrasi & Keuangan'),
(4, 'Dra. Bina Lohita Sari, M.Pd. M.Farm. Apt.', 'Asisten Wadek-1: Bidang Penelitian & Pengabdian Masyarakat'),
(5, 'Usep Suhendar, M.Si.', 'Asisten Wadek-1: Bidang Akademik & Kemahasiswaan'),
(7, 'Linda Jati Kusuma, S.Si. M.Si.', 'Asisten Wadek-2: Bidang SDM & Kerjasama'),
(8, 'Triastinurmiatiningsih, S.Si., M.Si.', 'Ketua Program Studi Biologi'),
(9, 'Ade Heri Mulyati, S.Si., M.Si.', 'Ketua Program Studi Kimia'),
(10, 'Dr. Ir. Fitria Virgantari, M.Si.', 'Ketua Program Studi Matematika'),
(11, 'Lita Karlitasari, S.Kom., MMSI.', ' Ketua Program Studi Ilmu Komputer'),
(12, ' Dra. Ike Yulia Wiendarlina, M.Farm. Apt', 'Ketua Program Studi Farmasi'),
(13, 'Irma Anggraeni, S.T., M.Kom.', 'Asisten Program Studi Ilmu Komputer'),
(14, ' Dra. Trirakhma Sofihidayati, M.Si.', ' Asisten Program Studi Farmasi'),
(15, ' Erni Rustiani, M.Farm. Apt.', 'Koordinator Laboratorium Fakultas MIPA'),
(16, ' Dra. Tri Saptari Haryani, M.Si.', ' Koordinator Laboratorium Program Studi Biologi'),
(17, ' Diana Widiastuti, S.Si. M.Phil.', ' Koordinator Laboratorium Program Studi Kimia'),
(18, ' Isti Kamila, S.Pd., M.Si.', 'Koordinator Laboratorium Program Studi Matematika'),
(19, 'Arie Qur’ania, S.Kom., M.Kom.', ' Koordinator Laboratorium Program Studi Ilmu Komputer'),
(20, ' Agus Ismangil, S.Si., M.Si.', 'Koordinator Laboratorium Program Studi Workshop (Robotik)'),
(21, ' Septia Andini, M.Farm., Apt.', '  Koordinator Laboratorium Program Studi Farmasi'),
(22, 'Teguh Puja Negara, S.Si., M.Si.', 'Koordinator Laboratorium Fisika'),
(23, ' Hagni Wijayanti, S.Si. M.Si', ' Kepala Unit: Penjaminan Mutu Fakultas (UPMF)'),
(24, ' Drs. Cecep Sudrajat, M.Pd.', 'Koordinator UPM Program Studi Biologi'),
(25, ' Siti Warnasih, S.Si. M.Si.', ' Koordinator UPM Program Studi Kimia'),
(26, 'Maya Widiastuti, S.Si. M.Si.', ' Koordinator UPM Program Studi Matematika'),
(27, ' Mulyati, S.Kom. M.Kom.', '  Koordinator UPM Program Studi Ilmu Komputer'),
(28, 'Lusi Indriani, M.Farm. Apt.', ' Koordinator UPM Program Studi Farmasi'),
(29, 'Novi Fajar Utami, M.Farm. Apt.', ' Kepala Perpustakaan'),
(30, 'Lusi Agus Setiani. M.Farm. Apt', ' Kepala Unit Pelayanan Kesehatan'),
(31, ' Oktaviana Zunnita, M.Farm., Apt.', ' Kepala Unit Apotek Pakuan Farma'),
(32, ' Asep Saepulrohman, S.Si., M.Si.', ' Kepala Unit Publikasi dan Jurnal Fakultas'),
(33, '  Agung Prajuhana Putra, S.Kom. M.Si.', 'Kepala Unit Teknologi Informasi dan Komunikasi'),
(34, '  Prihastuti Harsani, S.Si. M.Si.', 'Kepala Unit Computer Science dan Training Center (COMSTRAC)'),
(35, ' Tanti Sutanti, S.Kom', ' Kepala Tata Usaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_login`, `username`, `password`, `nama_pengguna`, `telepon`, `email`, `alamat`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '081298669897', 'admin@gmail.com', 'Bogor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `interface`
--
ALTER TABLE `interface`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `praktik`
--
ALTER TABLE `praktik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktural`
--
ALTER TABLE `struktural`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `interface`
--
ALTER TABLE `interface`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `praktik`
--
ALTER TABLE `praktik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `struktural`
--
ALTER TABLE `struktural`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
