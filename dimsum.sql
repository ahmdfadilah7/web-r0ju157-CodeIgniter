-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 08:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimsum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `tanggal_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `isi_log`, `tanggal_log`, `id_user`) VALUES
(1, 'Menu dengan nama menu <b>Dimsum Sayur</b> berhasil diubah menjadi <b>Dimsum Sayur</b>', 1659741138, 1),
(2, 'Menu dengan nama menu <b>Dimsum Ayam</b> berhasil diubah menjadi <b>Dimsum Ayam</b>', 1659741142, 1),
(3, 'Print profile', 1690286434, 1),
(4, 'Transaksi baru dengan kode invoice <b>250720230101T0001</b> berhasil ditambahkan', 1690286886, 1),
(5, 'Pembayaran baru dengan kode invoice <b>250720230101T0001</b> berhasil ditambahkan', 1690286924, 1),
(6, 'Print Pembayaran dengan kode invoice <b>250720230101T0001</b>', 1690286934, 1),
(7, 'Transaksi baru dengan kode invoice <b>260720230101T0001</b> berhasil ditambahkan', 1690339095, 1),
(8, 'Pembayaran baru dengan kode invoice <b>260720230101T0001</b> berhasil ditambahkan', 1690339112, 1),
(9, 'Transaksi baru dengan kode invoice <b>260720230101T0002</b> berhasil ditambahkan', 1690339133, 1),
(10, 'Pembayaran baru dengan kode invoice <b>260720230101T0002</b> berhasil ditambahkan', 1690339147, 1),
(11, 'Print Pembayaran dengan kode invoice <b>260720230101T0002</b>', 1690339150, 1),
(12, 'Transaksi baru dengan kode invoice <b>260720230101T0003</b> berhasil ditambahkan', 1690339174, 1),
(13, 'Transaksi baru dengan kode invoice <b>260720230101T0004</b> berhasil ditambahkan', 1690339204, 1),
(14, 'Menu baru dengan nama menu <b>M 1</b> berhasil ditambahkan', 1690339248, 1),
(15, 'Menu baru dengan nama menu <b>M 2</b> berhasil ditambahkan', 1690339258, 1),
(16, 'Transaksi baru dengan kode invoice <b>260720230101T0005</b> berhasil ditambahkan', 1690339286, 1),
(17, 'Pembayaran baru dengan kode invoice <b>260720230101T0005</b> berhasil ditambahkan', 1690339295, 1),
(18, 'Transaksi baru dengan kode invoice <b>260720230101T0006</b> berhasil ditambahkan', 1690339481, 1),
(19, 'Transaksi baru dengan kode invoice <b>260720230101T0007</b> berhasil ditambahkan', 1690339511, 1),
(20, 'Pembayaran baru dengan kode invoice <b>260720230101T0007</b> berhasil ditambahkan', 1690339563, 1),
(21, 'Pengeluaran berhasil ditambahkan oleh <b>Dimas Ramadhan</b>', 1690340015, 1),
(22, 'User dengan nama user <b>Whiki</b> berhasil diubah menjadi <b>Whiki</b>', 1690377605, 1),
(23, 'User baru dengan nama user <b>Kasir 2</b> berhasil ditambahkan', 1690379892, 1),
(24, 'Print Pembayaran dengan kode invoice <b>260720230101T0007</b>', 1690379917, 13),
(25, 'Transaksi baru dengan kode invoice <b>260720230113T0008</b> berhasil ditambahkan', 1690379949, 13),
(26, 'Pembayaran baru dengan kode invoice <b>260720230113T0008</b> berhasil ditambahkan', 1690379962, 13),
(27, 'Print Pembayaran dengan kode invoice <b>260720230113T0008</b>', 1690379965, 13),
(28, 'Transaksi baru dengan kode invoice <b>260720230113T0009</b> berhasil ditambahkan', 1690379995, 13),
(29, 'Pembayaran baru dengan kode invoice <b>260720230113T0009</b> berhasil ditambahkan', 1690380007, 13),
(30, 'Print Pembayaran dengan kode invoice <b>260720230113T0009</b>', 1690380012, 13),
(31, 'Print Pembayaran dengan kode invoice <b>260720230113T0009</b>', 1690519595, 1),
(32, 'Print Pembayaran dengan kode invoice <b>260720230113T0009</b>', 1690519616, 1),
(33, 'pemasukkan berhasil ditambahkan oleh <b>Dimas Ramadhan</b>', 1690522419, 1),
(34, 'pemasukkan berhasil ditambahkan oleh <b>Dimas Ramadhan</b>', 1690522495, 1),
(35, 'pemasukkan berhasil diubah oleh <b>Dimas Ramadhan</b>', 1690551498, 1),
(36, 'pemasukkan berhasil diubah oleh <b>Dimas Ramadhan</b>', 1690551503, 1),
(37, 'pemasukkan berhasil dihapus oleh Dimas Ramadhan', 1690551588, 1),
(38, 'Print Laporan Pengeluaran dari tanggal2023-07-01 sampai 2023-07-28', 1690551834, 1),
(39, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552075, 1),
(40, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552099, 1),
(41, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552137, 1),
(42, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552156, 1),
(43, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552215, 1),
(44, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552248, 1),
(45, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552274, 1),
(46, 'Print Laporan Pemasukkan dari tanggal2023-07-01 sampai 2023-07-28', 1690552353, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_pengeluaran`
--

CREATE TABLE `tb_log_pengeluaran` (
  `id_log_pengeluaran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_log_pengeluaran`
--

INSERT INTO `tb_log_pengeluaran` (`id_log_pengeluaran`, `keterangan`, `tanggal`, `id_user`) VALUES
(1, 'Pengeluaran berhasil ditambahkan oleh <b>Dimas Ramadhan</b> dengan pengeluaran sebesar <b> Rp. 20,000</b>, Keterangan : <b>Membeli bahan pokok.</b>', 1690340015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga_modal` int(11) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga_modal`, `harga_menu`, `id_outlet`) VALUES
(1, 'Dimsum Ayam', 0, 2500, 1),
(2, 'Dimsum Sayur', 0, 2000, 1),
(3, 'Dimsum Sapi', 0, 3000, 1),
(4, 'Dimsum Keju', 0, 3000, 1),
(5, 'M 1', 0, 20000, 1),
(6, 'M 2', 0, 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) NOT NULL,
  `no_telepon_outlet` varchar(20) NOT NULL,
  `alamat_outlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama_outlet`, `no_telepon_outlet`, `alamat_outlet`) VALUES
(1, 'At Dymsum Aww', '088211623915', 'Jl. AMD Babakan Pocis 11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemasukkan`
--

CREATE TABLE `tb_pemasukkan` (
  `id_pemasukkan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `laba_kotor` int(11) NOT NULL,
  `laba_bersih` int(11) NOT NULL,
  `tanggal_pemasukkan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `jml_uang_dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tgl_pembayaran` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `keterangan_pengeluaran` text NOT NULL,
  `tanggal_pengeluaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `status_bayar` enum('belum_dibayar','sudah_dibayar') NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` enum('administrator','kasir') NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `jabatan`, `id_outlet`) VALUES
(1, 'Dimas Ramadhan', 'admin', '$2y$10$yICyAfAkWZDX2nGec2BwqOf2le4TAxGtjU53AKb0QeutbD7akJw92', 'administrator', 1),
(2, 'Haus Coding Dev', 'hako-975', '$2y$10$b4VVR0au7fQTJH8C/FKGL.WmpSja8TCTuWunQaQN0vYCu8WfHfxcO', 'administrator', 2),
(12, 'Whiki', 'kasir01', '$2y$10$AjK7x3/4nCzMV/2GKJhk2.hadFXn34eplSw/bwzFvi8jo1H3W8VqG', 'kasir', 1),
(13, 'Kasir 2', 'kasir2', '$2y$10$Nhud9aAd5/qIcENjkJH0quhUFm6D44fH1r5ikWIElNM7nwV0NJae2', 'kasir', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_log_pengeluaran`
--
ALTER TABLE `tb_log_pengeluaran`
  ADD PRIMARY KEY (`id_log_pengeluaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `tb_pemasukkan`
--
ALTER TABLE `tb_pemasukkan`
  ADD PRIMARY KEY (`id_pemasukkan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`kode_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_log_pengeluaran`
--
ALTER TABLE `tb_log_pengeluaran`
  MODIFY `id_log_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pemasukkan`
--
ALTER TABLE `tb_pemasukkan`
  MODIFY `id_pemasukkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
