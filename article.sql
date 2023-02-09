-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2023 pada 13.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Content` text NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(100) NOT NULL COMMENT 'Publish; Draft; Thrash;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `Title`, `Content`, `Category`, `Created_date`, `Updated_date`, `Status`) VALUES
(1, 'Dampak Buruk Junk Food untuk Kesehatan Tubuh', 'Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia. Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. Tak hanya itu saja, makanan cepat saji memiliki cita rasa yang lezat, ditambah lagi harganya yang terjangkau.', 'Makasan dan Kesehatan', '2023-02-09 05:11:38', '2023-02-09 05:23:01', 'Publish'),
(2, 'Kebakaran Hutan di Indonesia', 'Indonesia adalah negara dengan iklim tropis yang terdiri dari ribuan pulau. Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak, mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia).\r\nMengenai faktor alam memang tak ada yang dapat disalahkan, tetapi mengenai faktor buatan yaitu manusia itulah hal yang perlu dievaluasi. Kini manusia telah kehilangan kesadarannya hingga mereka melakukan hal-hal yang merugikan banyak pihak di antaranya merugikan lingkungan hidup, contohnya hutan. Hutan adalah habitat dari ribuan spesies makhluk hidup yang saling bergantungan.', 'Kebakaran', '2023-02-09 05:12:47', '2023-02-09 05:12:47', 'Publish'),
(3, 'Pengaruh Pendidikan Terhadap Kualitas Anak Pedalaman', 'Bukan rahasia lagi bila anak-anak yang tinggal di daerah pedalaman sangat sulit mendapatkan kehidupan yang layak seperti anak-anak pada umumnya. Mereka kesulitan mendapat air bersih, mengenyam pendidikan sesuai batas kelayakan pendidikan Indonesia dan sulit mengikuti perkembangan zaman. Tak hanya itu saja , mereka bahkan tidak mengenal alat komunikasi seperti telepon genggam.\r\nHal pokok yang menjadi sorotan utama yaitu betapa sulitnya mereka mendapat pendidikan yang layak dan mengenyam pendidikan dua belas tahun. Faktanya, tak semua salah mereka, kesulitan mereka menjangkau lokasi sekolah menjadi masalah karena mereka harus mengarungi sungai. Mereka juga harus berjalan kaki hingga berpuluh-puluh kilo meter, bahkan ada pula yang tak memakai alas kaki.', 'Pendidikan', '2023-02-09 06:14:04', '2023-02-09 06:32:43', 'Draft'),
(4, 'Pentingnya Pendidikan Untuk Masa Depan', 'Pendidikan merupakan salah satu upaya kita untuk menanggulangi kebodohan dan kemiskinan yang terjadi di Negara kita yaitu Indonesia. Yang mana kita ketahui bersama, bawasannya dengan seseorang mengenyam bangku sekolah maka, orang tersebut telah mengetahui berbagai hal yang ada di dunia ini.\r\nSebenarnya pendidikan itu dapat kita perolah dimana saja dan kapan saja. Oleh karenaitu, kita sebagai manusia hendaknya mau menyadari hal tersebut. Pendidikan sangat berdampak besar bagi pengaruh perkembangan masa depan.', 'Pendidikan', '2023-02-09 06:16:25', '2023-02-09 06:16:25', 'Thrash');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
