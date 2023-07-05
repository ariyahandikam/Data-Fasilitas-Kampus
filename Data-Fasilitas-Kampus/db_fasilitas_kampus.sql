-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jul 2023 pada 22.34
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fasilitas_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Employee`
--

CREATE TABLE `Employee` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `kapasitas` varchar(50) DEFAULT NULL,
  `jumlah_alat` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Employee`
--

INSERT INTO `Employee` (`id`, `nama`, `lokasi`, `deskripsi`, `kapasitas`, `jumlah_alat`, `created`) VALUES
(32, 'Lab Ict', 'Belakang rektorat', 'Tempat anak si', '30 orang', '50', '2023-07-04 22:19:33'),
(37, 'Bangunan Universitas Galuh.', 'Jalan R. E. Martadinata nomor 150 Ciamis 46274, Ja', 'Kampus 100% milik sendiri, representatif, berada dalam jalur strategis dan dapat dijangkau dengan mudah dari berbagai arah. letaknya di pinggir jalan sekali dan dekat terminal, meskipun begitu bangunan kampus universitas galuh ciamis bagus-bagus dan lahan', '100.000 orang', '738224', '2023-07-04 22:19:15'),
(38, 'Laboratorium Biologi', 'Di prodi Fikes', 'Laboratorium untuk praktek dan penelitian prodi fikes', '50 orang', '100', '2023-07-04 22:19:52'),
(39, 'Laboratorium Pertanian dan Rumah Kaca', 'Di Fakultas Pertanian', 'Laboratorium untuk praktek dan penelitian prodi pertanian', '100 orang', '50', '2023-07-04 22:20:39'),
(40, 'Laboratorium Fisip', 'Fakultas Fisip', 'Laboratorium ini digunakan untuk praktek mahasiswa fakultas fisip unigal', '100 orang', '100', '2023-07-04 22:20:20'),
(41, 'Upt Perpustakaan', 'Perpustakaan', 'Perpustakaan dilengkapi dengan berbagai macam buku dari berbagai bidang ilmu, tempat yang nyaman dilengkapi dengan pendingin ruangan sehingga memberikan kenyamanan bagi mahasiswa yang sedang membaca buku atau hanya sekedar untuk berdiskusi seputar materi ', '50 orang', '50', '2023-07-04 22:21:37'),
(42, 'Laboratorium Hukum', 'Fakultas Hukum', 'Laboratorium ini digunakan untuk praktek mahasiswa fakultas hukum unigal', '100 orang', '85', '2023-07-04 22:16:08'),
(43, 'Gedung Olahraga', 'Unigal Center', 'Gedung serbaguna, digunakan untuk event\" Tertentu seperti event olahraga dan lain\"', '1000 orang', '100', '2023-07-04 22:18:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'aa', '$2y$10$w4HVNgGoGlMuPNFddVeg0ehB3stQ2bU99faxM5Q3MgBJjBtR01/BO'),
(2, 'dika', '$2y$10$GLnHTqvRwvMYol7VQDQCBOH4WCWbyo9bpPNNMTGSnXqeGn50/2FOC'),
(3, 'ariya', '$2y$10$dAf.lF4gRvyb6BEMCj1V6.64XCMvDMNl1Un/4Lf/TtipFa3zJQDo.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
