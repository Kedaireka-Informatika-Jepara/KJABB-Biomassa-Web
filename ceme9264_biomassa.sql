-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Des 2022 pada 17.32
-- Versi server: 10.5.18-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceme9264_biomassa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biota`
--

CREATE TABLE `biota` (
  `biota_id` int(11) NOT NULL,
  `jenis_biota` varchar(75) NOT NULL,
  `bobot` float(5,2) NOT NULL,
  `panjang` float(5,2) NOT NULL,
  `jumlah_bibit` int(11) NOT NULL,
  `tanggal_tebar` date NOT NULL,
  `tanggal_panen` date DEFAULT NULL,
  `keramba_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `biota`
--

INSERT INTO `biota` (`biota_id`, `jenis_biota`, `bobot`, `panjang`, `jumlah_bibit`, `tanggal_tebar`, `tanggal_panen`, `keramba_id`) VALUES
(8, 'Lele', 42.00, 12.00, 100, '2021-12-15', '2021-12-16', 18),
(17, 'Bawal', 12.00, 12.00, 100, '2021-12-15', '2021-12-16', 24),
(37, 'Kerapu', 12.00, 12.00, 200, '2021-12-20', '2021-12-31', 24),
(40, 'Nila', 12.00, 12.00, 150, '2021-12-24', '2022-01-06', 24),
(143, 'Kerapu Cantang', 10.00, 10.00, 100, '2021-12-30', NULL, 18),
(144, 'Bawal Bintang', 10.00, 10.00, 150, '2021-12-30', '2022-03-11', 24),
(148, 'kerapu', 5.30, 8.20, 25, '2022-05-01', '2022-05-20', 115),
(149, 'kerapu', 5.30, 8.30, 25, '2022-05-01', '2022-05-21', 115),
(150, 'bawal', 7.30, 10.40, 30, '2022-05-01', '2022-05-07', 115),
(151, 'lele', 7.30, 0.00, 13, '2022-05-01', '2022-05-20', 115),
(157, 'Kakap Putih', 100.00, 15.00, 2000, '2022-01-01', '0000-00-00', 18),
(158, 'kerapu macan', 20.00, 15.00, 2000, '2022-12-14', NULL, 118),
(159, 'Kerapu macan', 10.00, 10.00, 3000, '2022-12-01', '2022-12-16', 120),
(160, 'Kerapu Batik', 10.00, 10.00, 2000, '2022-12-01', NULL, 120),
(161, 'Kerapu Cantang', 10.00, 10.00, 4000, '2022-12-16', NULL, 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_feeding`
--

CREATE TABLE `detail_feeding` (
  `detail_id` int(11) NOT NULL,
  `ukuran_tebar` float(5,2) NOT NULL,
  `jam_feeding` time NOT NULL,
  `pakan_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `detail_feeding`
--

INSERT INTO `detail_feeding` (`detail_id`, `ukuran_tebar`, `jam_feeding`, `pakan_id`, `activity_id`) VALUES
(14, 200.00, '06:30:00', 13, 22),
(24, 22.00, '14:04:00', 12, 30),
(25, 10.00, '06:02:00', 12, 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feeding`
--

CREATE TABLE `feeding` (
  `activity_id` int(11) NOT NULL,
  `tanggal_feeding` date NOT NULL,
  `keramba_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `feeding`
--

INSERT INTO `feeding` (`activity_id`, `tanggal_feeding`, `keramba_id`, `user_id`) VALUES
(5, '2021-12-23', 18, 1),
(7, '2021-12-31', 18, 1),
(22, '2021-12-26', 24, 1),
(30, '2022-06-17', 18, 1),
(31, '2022-12-15', 118, 1),
(32, '2022-12-16', 120, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keramba`
--

CREATE TABLE `keramba` (
  `keramba_id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `ukuran` float(5,2) NOT NULL,
  `tanggal_install` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `keramba`
--

INSERT INTO `keramba` (`keramba_id`, `nama`, `ukuran`, `tanggal_install`, `user_id`) VALUES
(18, 'KJABB Karimunjawa ', 25.00, '2022-02-24', 1),
(24, 'Karang Garam', 12.00, '2021-12-15', 1),
(64, 'Keramba Karimunjawa Jaya', 2.50, '2022-02-17', 1),
(66, 'kermba jaring     5 ', 2.60, '2022-04-09', 1),
(115, 'Kjabb', 10.00, '2022-04-03', 3),
(116, 'karimum', 10.00, '2022-05-01', 3),
(117, 'KJABB', 16.00, '2022-05-21', 3),
(118, 'jantan kerapu ', 105.00, '0000-00-00', 1),
(120, 'KJABB Jepara', 25.00, '2022-11-21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan`
--

CREATE TABLE `pakan` (
  `pakan_id` int(11) NOT NULL,
  `jenis_pakan` varchar(100) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pakan`
--

INSERT INTO `pakan` (`pakan_id`, `jenis_pakan`, `deskripsi`, `user_id`) VALUES
(6, 'Pelet   ', ' Pelet merupakan pakan non-organik yang memiliki ukuran yang bermacam - macam', 2),
(12, 'Pelet Mikro', 'Pelet mikro merupakan jenis pelet non organik yang memiliki ukurna lebih besar daripada pelet nano', 1),
(13, 'Pelet Nano', 'Pelet nano merupakan pakan yang berukuran kecil - kecil yang biasanya digunakan untuk memberi pakan ikan yang masih kecil', 1),
(23, 'pelet', 'makan ikan', 3),
(24, 'Cacing darah', 'Cacing jenis Cacing darah beku yang dibeli di toko pakan ikan', 3),
(25, 'udang   ', 'udang    ', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `panen`
--

CREATE TABLE `panen` (
  `activity_id` int(11) NOT NULL,
  `tanggal_panen` date NOT NULL,
  `panjang` float(5,2) NOT NULL,
  `bobot` float(5,2) NOT NULL,
  `jumlah_hidup` int(11) NOT NULL,
  `jumlah_mati` int(11) NOT NULL,
  `biota_id` int(11) NOT NULL,
  `keramba_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `panen`
--

INSERT INTO `panen` (`activity_id`, `tanggal_panen`, `panjang`, `bobot`, `jumlah_hidup`, `jumlah_mati`, `biota_id`, `keramba_id`, `user_id`) VALUES
(1, '2021-12-16', 25.00, 25.00, 250, 20, 17, 24, 1),
(2, '2021-12-16', 250.00, 250.00, 50, 50, 8, 18, 1),
(6, '2021-12-31', 100.00, 100.00, 190, 10, 37, 24, 1),
(7, '2022-01-06', 25.00, 25.00, 120, 30, 40, 24, 1),
(12, '2022-03-11', 20.00, 20.00, 100, 20, 144, 24, 1),
(13, '2022-05-20', 20.30, 40.20, 20, 5, 148, 115, 3),
(14, '2022-05-07', 25.00, 18.00, 5, 0, 150, 115, 3),
(15, '2022-05-20', 13.00, 16.00, 3, 0, 151, 115, 3),
(16, '2022-05-21', 21.00, 14.00, 7, 1, 149, 115, 3),
(17, '2022-12-16', 40.00, 200.00, 2000, 500, 159, 120, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengukuran`
--

CREATE TABLE `pengukuran` (
  `pengukuran_id` int(11) NOT NULL,
  `panjang` float(5,2) NOT NULL,
  `bobot` float(5,2) NOT NULL,
  `tanggal_ukur` date NOT NULL,
  `biota_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengukuran`
--

INSERT INTO `pengukuran` (`pengukuran_id`, `panjang`, `bobot`, `tanggal_ukur`, `biota_id`, `user_id`) VALUES
(3, 16.00, 15.00, '2021-12-21', 17, 1),
(9, 14.00, 12.00, '2021-12-15', 17, 1),
(11, 14.00, 14.00, '2021-12-23', 37, 1),
(12, 15.00, 15.00, '2021-12-24', 37, 1),
(13, 16.00, 16.00, '2021-12-26', 37, 1),
(14, 20.00, 20.00, '2021-12-29', 37, 1),
(15, 14.00, 14.00, '2021-12-25', 40, 1),
(16, 15.00, 16.00, '2021-12-26', 40, 1),
(17, 17.00, 17.00, '2021-12-27', 40, 1),
(18, 18.00, 19.00, '2021-12-28', 40, 1),
(19, 19.00, 19.00, '2021-12-29', 40, 1),
(20, 20.00, 20.00, '2021-12-30', 40, 1),
(21, 20.00, 20.00, '2021-12-31', 40, 1),
(22, 21.00, 21.00, '2022-01-01', 40, 1),
(23, 22.00, 22.00, '2022-01-02', 40, 1),
(24, 23.00, 23.00, '2022-01-04', 40, 1),
(53, 15.00, 15.00, '2022-01-30', 143, 1),
(55, 18.00, 25.00, '2022-02-16', 143, 1),
(56, 22.00, 30.00, '2022-02-28', 143, 1),
(57, 24.00, 34.00, '2022-04-01', 143, 1),
(58, 15.00, 50.00, '2022-12-16', 160, 1),
(59, 20.00, 100.00, '2022-12-16', 160, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'agung', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Roqy', '202cb962ac59075b964b07152d234b70'),
(34, 'keramba', '5c84c5001ce6b34ab00bbb491252f798'),
(35, '', ''),
(36, '', ''),
(37, '', ''),
(38, 'Keramba', '5c84c5001ce6b34ab00bbb491252f798'),
(39, '', ''),
(40, '', ''),
(41, 'upl2', '4cfd81c2630292c675703fae9bb27cb4'),
(42, '', ''),
(43, '', ''),
(44, 'upl21', 'c21aeae4165829b8bef8fb00d8e4d06e'),
(45, 'upl2', '4cfd81c2630292c675703fae9bb27cb4'),
(46, '', ''),
(47, '', ''),
(48, '', ''),
(49, '', ''),
(50, 'aqsya', 'aqsya123'),
(51, 'hai', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biota`
--
ALTER TABLE `biota`
  ADD PRIMARY KEY (`biota_id`),
  ADD KEY `FK_KerambaAsal` (`keramba_id`);

--
-- Indeks untuk tabel `detail_feeding`
--
ALTER TABLE `detail_feeding`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `FK_TabelFeeding` (`activity_id`),
  ADD KEY `FK_JenisPakan` (`pakan_id`);

--
-- Indeks untuk tabel `feeding`
--
ALTER TABLE `feeding`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `FK_FeededKeramba` (`keramba_id`),
  ADD KEY `FK_Feeder` (`user_id`);

--
-- Indeks untuk tabel `keramba`
--
ALTER TABLE `keramba`
  ADD PRIMARY KEY (`keramba_id`),
  ADD KEY `FK_KerambaOwner` (`user_id`);

--
-- Indeks untuk tabel `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`pakan_id`),
  ADD KEY `FK_PakanOwner` (`user_id`);

--
-- Indeks untuk tabel `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `FK_BiotaTerpanen` (`biota_id`),
  ADD KEY `FK_KerambaPanen` (`keramba_id`),
  ADD KEY `FK_Pemanen` (`user_id`);

--
-- Indeks untuk tabel `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`pengukuran_id`),
  ADD KEY `FK_BiotaUkur` (`biota_id`),
  ADD KEY `FK_Pengukur` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biota`
--
ALTER TABLE `biota`
  MODIFY `biota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT untuk tabel `detail_feeding`
--
ALTER TABLE `detail_feeding`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `feeding`
--
ALTER TABLE `feeding`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `keramba`
--
ALTER TABLE `keramba`
  MODIFY `keramba_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `pakan`
--
ALTER TABLE `pakan`
  MODIFY `pakan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `panen`
--
ALTER TABLE `panen`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `pengukuran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biota`
--
ALTER TABLE `biota`
  ADD CONSTRAINT `FK_KerambaAsal` FOREIGN KEY (`keramba_id`) REFERENCES `keramba` (`keramba_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_feeding`
--
ALTER TABLE `detail_feeding`
  ADD CONSTRAINT `FK_JenisPakan` FOREIGN KEY (`pakan_id`) REFERENCES `pakan` (`pakan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TabelFeeding` FOREIGN KEY (`activity_id`) REFERENCES `feeding` (`activity_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `feeding`
--
ALTER TABLE `feeding`
  ADD CONSTRAINT `FK_FeededKeramba` FOREIGN KEY (`keramba_id`) REFERENCES `keramba` (`keramba_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Feeder` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keramba`
--
ALTER TABLE `keramba`
  ADD CONSTRAINT `FK_KerambaOwner` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pakan`
--
ALTER TABLE `pakan`
  ADD CONSTRAINT `FK_PakanOwner` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `panen`
--
ALTER TABLE `panen`
  ADD CONSTRAINT `FK_BiotaTerpanen` FOREIGN KEY (`biota_id`) REFERENCES `biota` (`biota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KerambaPanen` FOREIGN KEY (`keramba_id`) REFERENCES `keramba` (`keramba_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Pemanen` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD CONSTRAINT `FK_BiotaUkur` FOREIGN KEY (`biota_id`) REFERENCES `biota` (`biota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Pengukur` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
