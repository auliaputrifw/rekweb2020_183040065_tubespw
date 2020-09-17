-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 04:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(64) NOT NULL,
  `manfaat` varchar(128) NOT NULL,
  `harga` int(22) NOT NULL,
  `daya` varchar(64) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id`, `nama_barang`, `manfaat`, `harga`, `daya`, `gambar`) VALUES
(1, 'Televisi', 'Keperluan informasi dan hiburan', 4000000, '50 watt', ''),
(2, 'Rice Cooker', 'Untuk memasak nasi', 500000, '500 watt', ''),
(3, 'Blender', 'Untuk menghaluskan makanan', 500000, '400 watt', ''),
(4, 'Kulkas', 'Pendingin dan mengawetkan makanan', 2000000, '115 watt', ''),
(5, 'Microwave', 'Untuk memanaskan makanan', 600000, '400 watt', ''),
(6, 'Air Conditioner (AC)', 'Pendingin ruangan', 3000000, '460 watt', ''),
(7, 'Printer', 'Menampilkan data dalam bentuk cetakan, berupa teks maupun gambar, diatas kertas', 1900000, '300 watt', ''),
(8, 'Bread Toaster', 'Untuk memanggang roti', 200000, '700 watt', ''),
(9, 'Kompor Listrik', 'Untuk memasak makanan', 750000, '600 watt', ''),
(10, 'Vacuum Cleaner', 'Untuk membersihkan ruangan dari debu', 700000, '400 watt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
