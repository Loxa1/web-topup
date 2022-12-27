-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 09:46 PM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypk1997_demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `caraorder` text NOT NULL,
  `keterangan` text NOT NULL,
  `metode` text NOT NULL,
  `produk` text NOT NULL,
  `nowa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `password`, `namaweb`, `caraorder`, `keterangan`, `metode`, `produk`, `nowa`) VALUES
(1, '123', 'WOLVES STORE', '1. Masukkan ID <br>\r\n2. Pilih Nominal yang ingin di beli <br>\r\n3. Pilih Metode Pembayaran <br>\r\n4. Pilih Beli Sekarang <br>', 'LAYANAN AKTIF 07.00 WIB SAMPAI 22.00 PROSES 1-30 MENIT', 'DANA, GOPAY, OVO, LINK AJA, SHOPEE PAY, QRIS,BRI', '50 DM|8.000, 70 DM|10.000, 82 DM|12.000, 100 DM|15.000 , 140 DM|20.000, 160 DM|22.000, 190 DM|26.000, 210 DM|30.000, 280 DM|40.000, 355 DM|50.000, 495 DM|65.000, 720 DM|94.000, 1440 DM|185.000, 2000 DM|250.000, 4000 DM|495.000, 6000 DM|745.000, 7290 DM|908.000, MEMBERSHIP MINGGUAN|30.000, MEMBERSHIP BULANAN|112.000', '6281335723217'),
(2, '0', 'WOLVES STORE', '1. Masukkan ID <br>\r\n2. Pilih Nominal yang ingin di beli <br>\r\n3. Pilih Metode Pembayaran <br>\r\n4. Pilih Beli Sekarang <br>', 'LAYANAN AKTIF 07.00 WIB SAMPAI 22.00 PROSES 1-30 MENIT', 'DANA, GOPAY, OVO, LINK AJA, SHOPEE PAY, QRIS,BRI', '86 DM|20.000,\r\n172 DM|40.000,\r\n257 DM|60.000,\r\n344 DM|80.000,\r\n429 DM|100.000,\r\n514 DM|120.000,\r\n706 DM|154.000,\r\n963 DM|215.000,\r\n2195 DM|446.000,\r\nSTARLIGHT| 126.000,\r\nTWILIGHT|126.000,\r\nSTARLIGHT+|282.000', '6281335723217'),
(3, '123', 'WOLVES STORE', '1. Masukkan ID <br>\r\n2. Pilih Nominal yang ingin di beli <br>\r\n3. Pilih Metode Pembayaran <br>\r\n4. Pilih Beli Sekarang <br>', 'LAYANAN AKTIF 07.00 WIB SAMPAI 22.00 PROSES 1-30 MENIT', '\r\nDANA, GOPAY, OVO, LINK AJA, SHOPEE PAY, QRIS,BRI', '263 UC | 50.000,\r\n525 UC | 96.000,\r\n788 UC | 138.000,\r\n1050 UC | 184.000,\r\n1375 UC | 228.000,\r\n1638 UC | 274.000,\r\n1900 UC | 320.000,\r\n2163 UC | 362.000,\r\n2425 UC | 406.000,\r\n2875 UC | 450.000', '6281335723217'),
(4, '', 'WOLVES STORE', '1. Masukkan ID <br> 2. Pilih Nominal yang ingin di beli <br> 3. Pilih Metode Pembayaran <br> 4. Pilih Beli Sekarang <br>', 'LAYANAN AKTIF 10.00 WIB SAMPAI 21.00 PROSES 1-60 Menit, Max 24 jam Apabila Melewati Jam Aktif, Maka Akan Di Proses Di Hari Berikutnya !', ' DANA, GOPAY, OVO, LINK AJA, SHOPEE PAY, QRIS,BRI', '60 Candy | 15.000,\r\n180 Candy | 45.000,\r\n316 Candy | 70.000,\r\n718 Candy | 145.000,\r\n1368 Candy | 285.000,\r\n2118 Candy | 440.000,\r\n3548 Candy | 720.000,\r\n7048 Candy | 1.400.000', '6281335723217');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
