-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Sep 2018 pada 13.09
-- Versi server: 10.0.34-MariaDB-cll-lve
-- Versi PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhozztraining_portalrahma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `foto_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `foto_berita`, `isi_berita`) VALUES
(1, 'Configuration & installation classic asp', 'loves.png', 'This document guides you through installing IIS and configuring a classic ASP website. Classic ASP is a server-side scripting environment that you can use to create and run dynamic web applications. With ASP, you can combine HTML pages, script commands, and COM components to create interactive web pages that are easy to develop and modify. Classic ASP is the predecessor to ASP.NET, but it is still in wide use today.\r\nThe Classic ASP server configuration adds IIS modules for ASP and ISAPI extensions to the default IIS installation.'),
(2, 'Investor Singapura Tertarik Proyek LRT Jabodetabek', 'proyek.png', 'Menteri Koordinator Bidang Kemaritiman Luhut Binsar Pandjaitan mengatakan ada investor asal Singapura berminat ikut mendanai proyek kereta ringan Jakarta-Bogor-Depok-Bekasi (LRT Jabodebek). Investor itu menyediakan dana Rp2 triliun.'),
(3, 'HOME  OLAHRAGA\r\nSEA Games 2017 Hari Ini: Angkat Besi Raih Medali Emas', 'angkatberat.png', 'Indonesia kembali mendulang emas dari cabang olahraga angkat besi. Lifter Indonesia, Deni sukses memecah kebuntuan setelah sukses meraih medali emas nomor 69 kg di MITEC Hall, Kuala Lumpur, Malaysia, Selasa (29/8/2017) setelah sehari sebelumnya lifter lainnya gagal mencapai puncak.'),
(4, 'Rudal Korea Utara Bikin Bursa Saham Asia Ambruk', 'politik.png', 'Tokyo - Bursa Asia tumbang mengekor Wall Street terpicu ketegangan politik usai Korea Utara melepaskan sebuah rudal ke wilayah utara Jepang. Sementara Yen melonjak ke level tertinggi dalam empat bulan terhadap dolar AS akibat masalah ini.'),
(5, 'Peristiwa Santunan untuk Korban Crane Jatuh di Masjidil Haram Sudah Cair', 'bantuan.png', ' Proses penentuan pemberian santunan bagi jemaah haji Indonesia yang menjadi korban tragedi jatuhnya crane pada 2015 lalu di Kompleks Masjidil Haram, Mekah, sudah selesai dilakukan Pemerintah Arab Saudi.'),
(7, 'How to connect to MS SQL Server database', 'car2.png', '\r\nThis article will help you to create a System Data Source Name (DSN) for an Access database on your local machine. To do that you need to follow a couple of steps:'),
(8, 'Profesor Indonesia Kenalkan Manfaat Daun Torbangun di Australia', 'kebun.png', 'Brisbane -\r\nMungkin Anda pernah mendengar manfaat daun torbangun, nama ilmiahnya adalah Coleus ambonicus Lour, yang dapat meningkatkan kuantitas dan kualitas air susu ibu (ASI).\r\n\r\nDi kalangan suku Batak, Sumatera Utara, daun ini sudah dikonsumsi oleh ibu-ibu hamil dan menyusui selama ratusan tahun.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Ranee ', '02180800880', 'Jakarta'),
(2, 'Hasbi', '21100000', 'Tangerang'),
(3, 'Aulia', '1231231231', 'Tangerang'),
(4, 'xxx', '322222222', 'afsdfs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `id_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `title`, `picture`, `content`, `id_admin`) VALUES
(1, 'Configuration & installation classic asp ok', 'konfigurasi.png', 'This document guides you through installing IIS and configuring a classic ASP website. Classic ASP is a server-side scripting environment that you can use to create and run dynamic web applications. With ASP, you can combine HTML pages, script commands, and COM components to create interactive web pages that are easy to develop and modify. Classic ASP is the predecessor to ASP.NET, but it is still in wide use today.\r\nThe Classic ASP server configuration adds IIS modules for ASP and ISAPI extensions to the default IIS installation.', '4'),
(2, 'Investor Singapura Tertarik Proyek LRT Jabodetabek', 'car.ico', 'Menteri Koordinator Bidang Kemaritiman Luhut Binsar Pandjaitan mengatakan ada investor asal Singapura berminat ikut mendanai proyek kereta ringan Jakarta-Bogor-Depok-Bekasi (LRT Jabodebek). Investor itu menyediakan dana Rp2 triliun.', '4'),
(3, 'HOME  OLAHRAGASEA Games 2017 Hari Ini: Angkat Besi Raih Medali Emas', 'angkatbesi.png', 'Indonesia kembali mendulang emas dari cabang olahraga angkat besi. Lifter Indonesia, Deni sukses memecah kebuntuan setelah sukses meraih medali emas nomor 69 kg di MITEC Hall, Kuala Lumpur, Malaysia, Selasa (29/8/2017) setelah sehari sebelumnya lifter lainnya gagal mencapai puncak.', '3'),
(4, 'Rudal Korea Utara Bikin Bursa Saham Asia Ambruk', 'sea.gif', 'Tokyo - Bursa Asia tumbang mengekor Wall Street terpicu ketegangan politik usai Korea Utara melepaskan sebuah rudal ke wilayah utara Jepang. Sementara Yen melonjak ke level tertinggi dalam empat bulan terhadap dolar AS akibat masalah ini.', '4'),
(5, 'angkat besi', 'angkatbesi.png', 'angkat besi angkat besi angkat besi', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `jenis_kelamin`, `alamat`, `no_tlp`, `foto`) VALUES
(1, 'Rania', 'P', 'Jakarta', 217005000, 'orang8.png'),
(2, 'Hasbi Rizkianto', 'L', 'Tangerang', 7500000, 'orang11.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
