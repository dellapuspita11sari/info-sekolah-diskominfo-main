-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2024 at 04:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jarak` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_lokasi`, `link_maps`, `gambar`, `alamat`, `jarak`) VALUES
(6, 'asas', 'https://www.google.com/maps/place/Sekolah+Dasar+Tlogomulyo/@-6.9991732,110.4783922,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d1beb8bc7a5:0xe86dad510d0a0a49!8m2!3d-6.9991785!4d110.4809671!16s%2Fg%2F11c3mpzc1t?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D', '66dfc7db7e6d0.jpeg', 'Jl. Taman Tlogomulyo No.03, Tlogomulyo, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50195', 12),
(9, 'yayaya', 'https://www.google.com/maps/place/Sekolah+Dasar+Tlogomulyo/@-6.9991732,110.4783922,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d1beb8bc7a5:0xe86dad510d0a0a49!8m2!3d-6.9991785!4d110.4809671!16s%2Fg%2F11c3mpzc1t?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66dfca65bb6859.29001823.jpeg', 'yayayayaya', 1),
(10, 'contoh', 'sasas', 'IMG-66dfcd55818df9.99501025.jpeg', 'sasas', 1),
(11, 'sasa', 'sasa', 'IMG-66dfcd8421de26.73576807.jpeg', 'sasas', 1),
(12, '1', '1', 'IMG-66dfcd8de746f5.69273489.jpeg', '1', 1),
(13, 'qwqw', 'qwqw', 'IMG-66dfcda5aad2d4.63461404.jpeg', 'qwqw', 1212),
(14, '1212', '1212', 'IMG-66dfcdafdf7a34.75193947.jpeg', '212', 1212),
(15, '1212', '1212', 'IMG-66dfcdb937c687.22552884.jpeg', '1212', 1212),
(16, '1212', '121', 'IMG-66dfcdcb993262.63081261.jpeg', '2121', 212),
(17, '1212', '1212', 'IMG-66dfcdd8b6b1f7.81928007.jpeg', '1212', 1212),
(19, 'sas', 'asasa', 'IMG-66dfceb3ebfe45.06999161.jpeg', 'ssas', 111);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'ayu', '$2y$10$xfPQQjFk7yQ3llWX0KbDV.KU4dDff6f3hkT17lh2IYkpMkbOuo/9e'),
(4, 'admin', '$2y$10$oZmASnlq/YKoOkt.IT//mebTYVSM.oUnekI1LEzFg3mk5ysAm0cqy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
