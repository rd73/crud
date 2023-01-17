-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukk2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(6) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(3) NOT NULL,
  `supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kategori`, `nama_barang`, `harga`, `stok`, `supplier`) VALUES
('123', 'snack', 'xxx', '5000', '40', 'siapa'),
('BR1001', 'Makanan', 'Kerupuk Ikan', '25000', '60', 'PD Idola Snack'),
('BR1002', 'Makanan', 'Keripik Singkong', '15000', '100', 'PD Idola Snack'),
('BR2001', 'Kosmetik', 'Sabun Herbal', '10000', '40', 'Herborist'),
('BR2002', 'Kosmetik', 'Masker Spirulina', '17000', '40', 'Herborist');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gerai`
--

CREATE TABLE `tb_gerai` (
  `id_gerai` varchar(5) NOT NULL,
  `nama_gerai` varchar(50) NOT NULL,
  `alamat_gerai` text NOT NULL,
  `kota_gerai` text NOT NULL,
  `telp_gerai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gerai`
--

INSERT INTO `tb_gerai` (`id_gerai`, `nama_gerai`, `alamat_gerai`, `kota_gerai`, `telp_gerai`) VALUES
('G1', 'Gerai Dago', 'Jl. Ir Hj Djuanda 115', 'Bandung', '0227206678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `kota_supplier` text NOT NULL,
  `telp_supplier` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `kota_supplier`, `telp_supplier`) VALUES
('SP01', 'PD Idola Snack', 'Jl. KUD - Sukadami', 'Bekasi', '085693725494');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_gerai`
--
ALTER TABLE `tb_gerai`
  ADD PRIMARY KEY (`id_gerai`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
