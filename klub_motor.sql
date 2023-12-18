-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Nov 2023 pada 16.01
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klub_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `deskripsi` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama_event`, `deskripsi`, `image`) VALUES
(1, 'The Prediksi Touring Solo Jogja', 'Solo Jogja 9 Juni - 11 Juni 2023', 'galery-3.jpg'),
(2, 'The Prediksi | Acara Halal Bihalal', 'Halal Bihalal menggunakan pakaian adat', 'galery-4.jpg'),
(3, 'The Prediksi Touring Bali', 'Agustus 2022', '299289108_862373461798262_1212241548150642289_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `nama_image` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama_image`, `image`) VALUES
(1, 'Touring Solo Jogja', 'galery-2.jpg'),
(2, 'Touring Solo Jogja', 'Motoran Solo - Jogja di akhir pekan kemarin.   @gradykayzel (1).jpg'),
(4, 'Touring Solo Jogja', 'solo-jogja.jpg'),
(6, 'bahkan voli', 'galery-1.jpg'),
(7, 'halal bihalal', 'galery-4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` int NOT NULL,
  `judul_konten` varchar(255) NOT NULL,
  `deskripsi` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `judul_konten`, `deskripsi`, `image`) VALUES
(1, 'About The Prediksi', 'The Prediksi adalah klub motor yang digagas oleh Andre Taulany dan Ronal Surapradja sejak tahun 2018, beranggotakan selebritas dan figur publik Indonesia sebagai sarana hiburan semata dan ajang silaturahmi. Klub ini terdiri dari anggota dengan berbagai profesi, namun didominasi oleh komedian.', 'about.jpg'),
(3, 'The Prediksi', 'Klub Motor Paling Dicintai Warganet', 'hero-2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` int NOT NULL,
  `nama_partner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `nama_partner`, `image`) VALUES
(1, 'tiket.com', 'partner-1.png'),
(3, 'wrangler', 'partner-2.png'),
(4, 'Foom', 'partner-3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `deskripsi` text,
  `image` text,
  `link_toko` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_product`, `deskripsi`, `image`, `link_toko`) VALUES
(1, 'The Prediksi X FOOM', 'SIAP-SIAP!! Tanggal 18 September waktunya serbu Vape Store dan FOOM Store terdekat dari rumah kalian!Kalo ga ada yang dekat, boleh langsung serbu official website foom.id dan e-commerce FOOM Lab Global! #FOOMTerPrediksi', 'product-1.jpg', 'https://www.instagram.com/foom_id/'),
(2, 'The Prediksi X Wrangler', 'Mau keren kaya kite-kite? Mampir ke store Wrangler terdekat dan sebutin kode : THEPREDIKSIxWRANGLER dan dapetin tambahan diskon 10% khusus pembelian koleksi jeans Wrangler Raw Denim! Buruan periode terbatas.', 'product-2.jpg', 'https://www.instagram.com/wranglerjeansid/'),
(3, 'Liquid Buah Mangga The Prediksi X FOOM ', 'Dengan pilihan mango-da dan mango-gah yang lezat, Anda dapat menikmati kelezatan mangga dalam bentuk liquit yang menyenangkan dan memuaskan. Tak hanya itu, suasana yang nyaman dan pelayanan yang ramah dari store foom_id x the prediksi akan menambah kenikmatan dalam setiap kunjungan Anda.', 'Snapinsta.app_360158873_18092024683356732_666272568863130514_n_1080.jpg', 'https://www.instagram.com/foom_id/');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
