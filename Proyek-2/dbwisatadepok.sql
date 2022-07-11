-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Jul 2022 pada 15.33
-- Versi server: 8.0.21
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwisatadepok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

DROP TABLE IF EXISTS `jenis_wisata`;
CREATE TABLE IF NOT EXISTS `jenis_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Kolam Renang'),
(2, 'Taman Kota'),
(3, 'Pemancingan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(3, 'Cilodong'),
(5, 'Tapos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `isi` text,
  `users_id` int NOT NULL,
  `wisata_id` int NOT NULL,
  `nilai_rating_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanan_users1_idx` (`users_id`),
  KEY `fk_pesanan_produk1_idx` (`wisata_id`),
  KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `wisata_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'kalo berenang di sini anak2 ngak mau pulang', 2, 1, 4),
(2, '2022-07-08', 'Bagus banget tempatnya', 2, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_rating`
--

DROP TABLE IF EXISTS `nilai_rating`;
CREATE TABLE IF NOT EXISTS `nilai_rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata`
--

DROP TABLE IF EXISTS `tempat_wisata`;
CREATE TABLE IF NOT EXISTS `tempat_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int NOT NULL,
  `skor_rating` double DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `foto1` varchar(40) DEFAULT NULL,
  `foto2` varchar(40) DEFAULT NULL,
  `foto3` varchar(40) DEFAULT NULL,
  `kecamatan_id` int NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `fasilitas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama`, `alamat`, `latlong`, `jenis_id`, `skor_rating`, `harga_tiket`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `fasilitas`) VALUES
(1, 'Water Park Ceria', 'Jl. K.H.M. Usman No.110, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.3650158,106.8114586', 1, 4.2, 40000, '1240770890.png', '12407708901.png', '12407708902.png', 1, 'www.ceriadepok.com', 'tersedia 2 kolam renang, perosotan, arena futsal taman luas'),
(8, 'Kolam Renang Aladin', 'Jalan GDC', '123,321', 1, 10, 10000, '1247821998.png', '1247821998.jpg', '12478219981.png', 1, 'aladin.com', 'Bagus banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:18:11', '2022-06-12 00:18:11', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:18:12', '2022-06-12 00:18:12', 1, 'public'),
(6, 'Yusuf', '202cb962ac59075b964b07152d234b70', 'yusuf@mail.com', '2022-07-08 00:07:45', '2022-07-08 05:37:39', 1, 'administrator'),
(7, 'user', '202cb962ac59075b964b07152d234b70', 'user@user.com', '2022-07-08 07:07:38', '2022-07-08 08:15:07', 1, 'public');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`),
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`wisata_id`) REFERENCES `tempat_wisata` (`id`),
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_wisata` (`id`),
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
