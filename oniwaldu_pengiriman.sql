-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 06:07 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ku_pengiriman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_office`
--

CREATE TABLE `branch_office` (
  `code_branch` varchar(150) NOT NULL,
  `desc_branch_office` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`code_branch`, `desc_branch_office`) VALUES
('PR', 'Prapatan Jakarta'),
('VD', 'Viaduct Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `id` varchar(100) NOT NULL,
  `jenis_layanan` int(2) DEFAULT NULL,
  `jenis_paket` varchar(255) DEFAULT NULL,
  `asal_paket` varchar(255) DEFAULT NULL,
  `tujuan_paket` varchar(255) DEFAULT NULL,
  `pengambilan` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `jumlah_paket` varchar(255) DEFAULT NULL,
  `isi_paket` varchar(255) DEFAULT NULL,
  `tarif_total` varchar(255) DEFAULT NULL,
  `kode_cabang` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  `nama_pengirim` varchar(254) NOT NULL,
  `nohp_pengirim` varchar(20) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `nama_penerima` varchar(254) NOT NULL,
  `nohp_penerima` varchar(20) NOT NULL,
  `alamat_penerima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`id`, `jenis_layanan`, `jenis_paket`, `asal_paket`, `tujuan_paket`, `pengambilan`, `pembayaran`, `berat`, `harga`, `jumlah_paket`, `isi_paket`, `tarif_total`, `kode_cabang`, `date`, `status`, `nama_pengirim`, `nohp_pengirim`, `alamat_pengirim`, `nama_penerima`, `nohp_penerima`, `alamat_penerima`) VALUES
('0020000001', 2, '1', '1101', '1102', '1', '1', '2', '20000', '1', 'handphone', '40000', 'PR', '2021-01-23', 1, 'Yudi Setyawan', '31232423', 'Jakarta', 'Nepriisa', '323423', 'Bandung'),
('0020000002', 3, '1', '1101', '1102', '1', '1', '2', '30000', '1', 'handphone bekas', '60000', 'PR', '2021-01-24', 1, 'Yudi Setyawan', '31232423', 'Jakarta', 'Evie', '2113232', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_paket`
--

CREATE TABLE `daftar_paket` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(255) DEFAULT '',
  `berat` varchar(255) DEFAULT NULL,
  `pkt_pertama` decimal(11,2) DEFAULT NULL,
  `pkt_selanjutnya` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_paket`
--

INSERT INTO `daftar_paket` (`id`, `nama_paket`, `berat`, `pkt_pertama`, `pkt_selanjutnya`) VALUES
(2, 'Paket Diambil', '1', '15000.00', '3500.00'),
(3, 'Paket Kilat', '1', '10000.00', '5000.00'),
(4, 'Paket Biasa', '1', '10000.00', '45000.00');

-- --------------------------------------------------------

--
-- Table structure for table `detailmanifest`
--

CREATE TABLE `detailmanifest` (
  `id` int(11) NOT NULL,
  `id_manifest` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailmanifest`
--

INSERT INTO `detailmanifest` (`id`, `id_manifest`, `waktu`, `status`) VALUES
(2, 2, '2021-01-23 12:56:22', 'Pengiriman dari kota asal'),
(3, 2, '2021-01-23 13:21:48', 'Paket telah sampai di kota tujuan'),
(6, 2, '2021-01-23 13:34:02', 'Paket telah diambil oleh Sdri Indri'),
(7, 3, '2021-01-24 02:52:30', 'Pengiriman dari kota asal'),
(8, 3, '2021-01-24 02:53:35', 'Paket sudah sampai dikta tujuan');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `resi` varchar(255) NOT NULL DEFAULT '',
  `id_core` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `aktif` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`resi`, `id_core`, `desc`, `aktif`) VALUES
('0000000001', '1', 'Pengiriman', 1),
('0000000002', '2', 'Pengiriman', 1),
('0000000003', '3', 'Pengiriman', 1),
('0000000004', '4', 'Pengiriman', 1),
('0000000005', '1', 'Pengiriman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `id` int(11) NOT NULL,
  `nama_dokumen` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_paket`
--

INSERT INTO `jenis_paket` (`id`, `nama_dokumen`) VALUES
(1, 'Dokumen'),
(2, 'Motor'),
(3, 'Mobil');

-- --------------------------------------------------------

--
-- Table structure for table `manifest`
--

CREATE TABLE `manifest` (
  `id` int(11) NOT NULL,
  `id_core` varchar(100) NOT NULL,
  `id_kurir` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manifest`
--

INSERT INTO `manifest` (`id`, `id_core`, `id_kurir`, `waktu`) VALUES
(2, '0020000001', 6, '2021-01-23 12:56:22'),
(3, '0020000002', 6, '2021-01-24 02:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `desc_package` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `desc_package`) VALUES
(1, 'Dokumen'),
(2, 'Paket'),
(3, 'Motor'),
(4, 'Hewan');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_core` varchar(100) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengirim_penerima`
--

CREATE TABLE `pengirim_penerima` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengirim_penerima`
--

INSERT INTO `pengirim_penerima` (`id`, `nama`, `telp`, `alamat`, `status`) VALUES
(1, 'Andika', '089643771074', 'JL. Bekasi', 'pengirim'),
(2, 'Pratama', '089643771074', 'JL. Bekasi', 'penerima'),
(3, 'Rayen', '089643771074', 'Jaktim', 'pengirim'),
(4, 'law', '089643771074', 'test', 'penerima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('kurir','admin') NOT NULL,
  `nopol` varchar(10) DEFAULT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mail`, `gender`, `birthday`, `password`, `level`, `nopol`, `status`) VALUES
(5, 'Andika', 'Pratama', 'admin@admin.com', 1, '2020-12-20', '202cb962ac59075b964b07152d234b70', 'admin', NULL, 'aktif'),
(6, 'rayen', 'law', 'admin@rayen.com', 1, '2020-11-11', '202cb962ac59075b964b07152d234b70', 'kurir', 'B 4040 Fcd', 'aktif'),
(7, 'Oniwaldus', 'Bere Mali', 'oniwaldus0910@gmail.com', 1, NULL, '202cb962ac59075b964b07152d234b70', 'kurir', 'B 4041 Fcd', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_kabupaten`
--

CREATE TABLE `wilayah_kabupaten` (
  `id` varchar(4) NOT NULL,
  `provinsi_id` varchar(3) NOT NULL DEFAULT '',
  `kd_branch` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah_kabupaten`
--

INSERT INTO `wilayah_kabupaten` (`id`, `provinsi_id`, `kd_branch`, `nama`) VALUES
('1101', '002', 'PR', 'Jakarta'),
('1102', '001', 'VD', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_office`
--
ALTER TABLE `branch_office`
  ADD PRIMARY KEY (`code_branch`);

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_paket`
--
ALTER TABLE `daftar_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailmanifest`
--
ALTER TABLE `detailmanifest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`resi`);

--
-- Indexes for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest`
--
ALTER TABLE `manifest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `pengirim_penerima`
--
ALTER TABLE `pengirim_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah_kabupaten`
--
ALTER TABLE `wilayah_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_paket`
--
ALTER TABLE `daftar_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detailmanifest`
--
ALTER TABLE `detailmanifest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manifest`
--
ALTER TABLE `manifest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengirim_penerima`
--
ALTER TABLE `pengirim_penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
