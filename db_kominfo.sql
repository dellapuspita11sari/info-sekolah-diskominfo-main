-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2024 at 05:42 PM
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
(6, 'SDN Bandarharjo 01', 'https://www.google.com/maps/place/SD+Negeri+Bandarharjo+01/@-6.9623598,110.4183666,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70f4a685ae75d1:0xdad4ed5410099772!8m2!3d-6.9623651!4d110.4209415!16s%2Fg%2F1ptyc2t03?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1b06e69d41.jpg', 'Jl. Cumi-Cumi Raya No.2, Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50175', 4),
(9, 'SDN Bandarharjo 02', 'https://www.google.com/maps/place/SD+N+2+Bandarharjo/@-6.9633733,110.4189669,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70f4a30df5851b:0x2d57a4ca6cc2257a!8m2!3d-6.9633786!4d110.4215418!16s%2Fg%2F1ptyrwf5w?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1b2252c3c9.jpeg', 'Jl. Lodan Raya No.1, Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50175', 4),
(10, 'SDN Bangetayukulon', 'https://www.google.com/maps/place/SD+Negeri+Bangetayu+Kulon/@-6.9822906,110.4728349,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d289aeac901:0xf1556271210f275b!8m2!3d-6.9822959!4d110.4777058!16s%2Fg%2F1hm2hnv7z?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1b4b237f36.jpg', 'Jl. Bangetayu Raya, Bangetayu Kulon, Kec. Genuk, Kota Semarang, Jawa Tengah 50115', 11),
(11, 'SDN Bangetayuwetan 01', 'https://www.google.com/maps/place/SD+Negeri+Bangetayu+Wetan+01/@-6.9829033,110.4754868,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d00482a65bf:0xbba99babca290553!8m2!3d-6.9829086!4d110.4780617!16s%2Fg%2F11y6w14l00?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3', '66e1b8265285e.jpg', 'Jl. Bangetayu Asri, Bangetayu Wetan, Kec. Genuk, Kota Semarang, Jawa Tengah 50115', 10),
(12, 'SDN Bangetayuwetan 02', 'https://www.google.com/maps/place/SD+Negeri+Bangetayu+Wetan+02/@-6.9825534,110.4831167,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d2561b465cf:0x6f662c788b510805!8m2!3d-6.9825587!4d110.4856916!16s%2Fg%2F1pzrc3bzz?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1b9f38115d.png', 'Jl. Sedayu Sawo Raya No.1, Bangetayu Wetan, Kec. Genuk, Kota Semarang, Jawa Tengah 50115', 3),
(13, 'SDN Bangunharjo', 'https://www.google.com/maps/place/Sekolah+Dasar+Negeri+Bangunharjo/@-6.9740206,110.4191342,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70f4ab721ee0c5:0xb3b11d052bdab523!8m2!3d-6.9740259!4d110.4217091!16s%2Fg%2F1pzsb0b2x?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3', '66e1ba442582f.jpg', 'Jl. Bangunharjo Gg. Tengah No.24, Bangunharjo, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50139', 3),
(14, 'SDN Banyumanik 01', 'https://www.google.com/maps/place/SD+Negeri+Banyumanik+01/@-7.0775419,110.4037356,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70894756723791:0xc8c48724131b4ceb!8m2!3d-7.0775472!4d110.4086065!16s%2Fg%2F11c3mtdxzn?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1bc6654bf8.jpg', 'Jl. Bangunharjo Bar. No.1, Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50264', 12),
(15, 'SDN Banyumanik 02', 'https://www.google.com/maps/place/SD+Negeri+Banyumanik+02/@-7.0795455,110.412581,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7089379c9808a3:0x290a7bdf8286ac5!8m2!3d-7.0795508!4d110.4151559!16s%2Fg%2F11c1pdw2kv?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1bcc6192fe.jpg', 'Jl. Sendang Gede No.20, Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50264', 12),
(16, 'SDN Banyumanik 03', 'https://www.google.com/maps/place/SD+Negeri+Banyumanik+03/@-7.0774377,110.4050331,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70894755b3beb7:0xcfcc7d3d6142a7ff!8m2!3d-7.077443!4d110.407608!16s%2Fg%2F11bztdl230?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1bdcf1ed1b.jpg', 'Jl. Bangunharjo Bar., Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50264', 11),
(17, 'SDN Banyumanik 04', 'https://www.google.com/maps/place/SD+Negeri+Banyumanik+04/@-7.0759662,110.4120715,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7089487741f37d:0xb0179748fa8457e2!8m2!3d-7.0759715!4d110.4146464!16s%2Fg%2F11cjkw44n7?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1be04b6eb1.jpg', 'Jl. Waringin Putih No.1, RT.1/RW.3, Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50264', 13),
(19, 'SMP N  1  Semarang', 'https://www.google.com/maps/place/SMPN+1+Semarang/@-6.9809681,110.3860964,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b2a9091d9c1:0xf52f9298147036b!8m2!3d-6.9809734!4d110.3886713!16s%2Fg%2F1211jkpd?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', '66e1ca6192073.jpg', 'Jl. Ronggolawe Tim., RT.1/RW.8, Gisikdrono, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149', 3),
(20, 'SMP N 2 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+2+Semarang/@-6.9947474,110.4317124,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708ca2784888c1:0x7a90f539588f0c83!8m2!3d-6.9947527!4d110.4342873!16s%2Fg%2F1211qzr8?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e2469cce7033.80068377.jpg', 'Jl. Brigjend Katamso No.14, Karangtempel, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50242', 2),
(21, 'SMP N 3 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+3+Semarang/@-6.9854369,110.4240632,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708d209a4a9c3f:0xc21fb75d02fc669d!8m2!3d-6.9854422!4d110.4266381!16s%2Fg%2F112yft6q9?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e24724e11a14.40165005.jpg', 'Jl. Mayor Jend. D.I. Panjaitan No.58, Brumbungan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50135', 2),
(22, 'SMP N 4 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+4+Semarang/@-6.9748687,110.4453151,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70f34acced3971:0xcec2eb33b5ff75dc!8m2!3d-6.974874!4d110.44789!16s%2Fg%2F112yfnz25?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e247bae8bb40.33555775.jpg', 'Jl. Tambak Dalam Raya, Sawah Besar, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166', 5),
(23, 'SMP N 5 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+5+Semarang/@-7.0109789,110.4145159,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b82461f1f6d:0xc8f13f1683a13a38!8m2!3d-7.0109842!4d110.4170908!16s%2Fg%2F1tfn5nbs?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e247fbbd75a6.14915502.jpg', 'Jl. Sultan Agung No.9, Wonotingal, Kec. Candisari, Kota Semarang, Jawa Tengah 50252', 2),
(24, 'SMP N 6  Semarang', 'https://www.google.com/maps/place/Sekolah+Menengah+Pertama+Negeri+6+Kota+Semarang/@-6.969909,110.4309661,17z/data=!3m1!4b1!4m6!3m5!1s0x2e70f351568f4e93:0x63af55bb850cf467!8m2!3d-6.9699143!4d110.433541!16s%2Fg%2F112yfzf8f?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKX', 'IMG-66e248fa54add4.77972149.jpg', 'Jl. Patimura No.9, Kebonagung, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50123', 2),
(25, 'SMP N 7 Semarang', 'https://www.google.com/maps/place/Sekolah+Menengah+Pertama+Negeri+7+Kota+Semarang/@-6.9813182,110.4077328,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b4e9c69d269:0xa5e24a3c4b79970!8m2!3d-6.9813235!4d110.4103077!16s%2Fg%2F1pzsmt2qj?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIK', 'IMG-66e249ade420e9.88967421.png', 'Jl. Imam Bonjol No.191A, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 1),
(26, 'SMP N 8 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+8+Semarang/@-7.0112301,110.4340389,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708c8614b33713:0x984930518d39ebf5!8m2!3d-7.0112354!4d110.4366138!16s%2Fg%2F112yfl3qd?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e24a0a8cafe7.60596266.jpg', 'Jl. Cinde Raya No.18, Jomblang, Kec. Candisari, Kota Semarang, Jawa Tengah 50256', 6),
(27, 'SMP N 9 Semarang', 'https://www.google.com/maps/place/SMP+Negeri+9+Semarang/@-7.0092252,110.4571011,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708cf0d319e309:0x6d7a22b6c4de2b39!8m2!3d-7.0092305!4d110.459676!16s%2Fg%2F112yg8q1_?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D', 'IMG-66e24a73131ec0.79226473.jpg', 'Jl. Sendang Utara No.2, Gemah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50246', 3),
(28, 'SMP N 10 Semarang', 'https://www.google.com/maps/place/Sekolah+Menengah+Pertama+Negeri+10+Kota+Semarang/@-6.9912891,110.4138355,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b64f0b969e7:0x1f683dcfa7a6dd5d!8m2!3d-6.9912944!4d110.4164104!16s%2Fg%2F112yff21y?entry=ttu&g_ep=EgoyMDI0MDkwOC4w', 'IMG-66e24aac4c6cc6.07121222.jpg', 'Jl. Menteri Supeno No.1, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249', 3);

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
(4, 'admin', '$2y$10$oZmASnlq/YKoOkt.IT//mebTYVSM.oUnekI1LEzFg3mk5ysAm0cqy'),
(6, 'joyy', '$2a$12$JnOrSChAG2H57m2EJYYUseyTbW.FYlMe9OI5qOvJzb9HAlAHY/BQO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
