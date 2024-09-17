-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2024 at 02:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `link_maps` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `jarak` int NOT NULL
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
(28, 'SMP N 10 Semarang', 'https://www.google.com/maps/place/Sekolah+Menengah+Pertama+Negeri+10+Kota+Semarang/@-6.9912891,110.4138355,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708b64f0b969e7:0x1f683dcfa7a6dd5d!8m2!3d-6.9912944!4d110.4164104!16s%2Fg%2F112yff21y?entry=ttu&g_ep=EgoyMDI0MDkwOC4w', 'IMG-66e24aac4c6cc6.07121222.jpg', 'Jl. Menteri Supeno No.1, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249', 3),
(30, 'SDN Ngadirgo 02', 'https://maps.app.goo.gl/5ari966sqfHkTBMS8', 'IMG-66e8bf8bce4598.04592991.png', 'Jl. Raya Ngadirgo No.02 02, RW.02, Ngadirgo, Kec. Mijen, Kota Semarang, Jawa Tengah 50213', 16),
(31, 'SDN Ngadirgo 03', 'https://maps.app.goo.gl/gqMaDJvBmP2h9SgT7', 'IMG-66e8c01cf35823.53422280.png', 'W8X8+HRC, Jl. RM Hadi Soebeno Sosrowardoyo, Ngadirgo, Mijen, Semarang City, Central Java 50213', 15),
(32, 'SDN Ngaliyan 01', 'https://maps.app.goo.gl/kMKpwLDtvqGJwgNZ9', 'IMG-66e8c086999068.94208739.jpg', '283X+F9C, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181', 8),
(33, 'SDN Ngaliyan 02', 'https://maps.app.goo.gl/GsKdYcAYrMdMmD4r9', 'IMG-66e8c0e803aa20.73071876.jpg', 'Jl. Klampisan, RT.7/RW.2, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181', 7),
(34, 'SDN Ngaliyan 03', 'https://maps.app.goo.gl/PULNYnYF1RSxCW4R8', 'IMG-66e8c142a87e84.29956767.jpg', 'Jl. Wismasari Utara No.04, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181', 8),
(35, 'SDN Ngaliyan 04', 'https://maps.app.goo.gl/oPFtPVZMd4XS5nZA6', 'IMG-66e8c18e63e325.08051725.jpg', 'X9H3+MR, Bambankerep, Kec. Ngaliyan, Kota Semarang, Jawa Tengah', 9),
(36, 'SDN Ngaliyan 05', 'https://maps.app.goo.gl/UTqQiPNVZDcxc7v99', 'IMG-66e8c1d9d2d441.61051486.jpeg', 'Jl. Raya Mr. Moch Ichsan, Wates, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50189', 10),
(37, 'SDN Ngemplak Simongan 01', 'https://maps.app.goo.gl/qu5zfaaGEgBztnLE8', 'IMG-66e8c2334549f8.16099268.jpg', '292W+6MG, Jl. Srinindito Raya No.12a, Ngemplak Simongan, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50148', 4),
(38, 'SDN Ngemplak Simongan 02', 'https://maps.app.goo.gl/rX4MsMdHjvsFhsJm7', 'IMG-66e8c2908c6372.90226205.png', '2C32+94M, Jl. Gedung Batu Tengah II, Ngemplak Simongan, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50148', 3),
(39, 'SDN Ngesrep 01', 'https://maps.app.goo.gl/yWcZKyWgfSaPbYTZ7', 'IMG-66e8c2e0ee2be7.50830175.png', 'XC89+796, Jl. Trangkil, Ngesrep, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50261', 8),
(40, 'SDN Ngesrep 02', 'https://maps.app.goo.gl/2TfAyMtESaVcQqby7', 'IMG-66e8c340087d12.71462059.png', 'Jl. Jatiluhur I No.4, RW.5, Ngesrep, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50261', 8),
(41, 'SDN Ngesrep 03', 'https://maps.app.goo.gl/B7E66tEgdVzns8958', 'IMG-66e8c395e02745.06080073.png', 'Jl. Tamtama Bar. VI, Ngesrep, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50261', 9),
(42, 'SDN Ngijo 01', 'https://maps.app.goo.gl/xchptsZ9ZovsksXEA', 'IMG-66e8c3f6dd3aa7.54268493.png', 'W9JM+463, Jl. Raya Ngijo, RT.02/RW.02, Ngijo, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50228', 12),
(43, 'SDN Ngijo 02', 'https://maps.app.goo.gl/bYfS8nB5gfbVT9Jx5', 'IMG-66e8c4993d7b20.27771588.png', 'W9CG+52P, Jl. Mangunsari/Puntan Raya, RT.01/RW.01, Ngijo, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50227', 14),
(44, 'SDN Nongkosawit 01', 'https://maps.app.goo.gl/AXgKk6PXbGdDjvhY7', 'IMG-66e8c4f6449f44.73573302.png', 'W9J7+HVW, Jl. Nongkosawit Raya, Nongkosawit, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50224', 15),
(45, 'SDN Nongkosawit 02', 'https://maps.app.goo.gl/WphFQPpSC7jejXqQ7', 'IMG-66e8c568117cc0.31095163.jpg', 'Jl. Randusari No.06 06, RW.02, Nongkosawit, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50224', 15),
(46, 'SDN Padangsari 01', 'https://maps.app.goo.gl/FbMVkFewq8ZJXiUX6', 'IMG-66e8cd4ed8b280.40276118.png', 'Jl. Damar Terusan No.80 A, Padangsari, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50267', 14),
(47, 'SDN Padangsari 02', 'https://maps.app.goo.gl/ZsLGy3WSj6sji4sP7', 'IMG-66e8cdaf6a6057.79860212.png', 'Jl. Merbau Tim. No.167, Padangsari, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50267', 18),
(48, 'SDN Pakintelan 01', 'https://maps.app.goo.gl/XHQ2u4cqd5Q9rMBW6', 'IMG-66e8cdfc045736.51915831.png', 'W96W+8FX, Pakintelan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50227', 15),
(49, 'SDN Pakintelan 02', 'https://maps.app.goo.gl/yyDdZNNAkBiWsqLPA', 'IMG-66e8ce485653d8.04122279.png', 'W93W+R7C, Jl. Krajan Raya, Pakintelan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50227', 16),
(50, 'SDN Pakintelan 03', 'https://maps.app.goo.gl/rjisEJgqPPrbVxfEA', 'IMG-66e8ce94341699.82953772.png', 'Gg. Langkir No.I, Pakintelan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50227', 14),
(51, 'SDN Palebon 01', 'https://maps.app.goo.gl/qVFbKuZGSK4tCxUb6', 'IMG-66e8ceef0375f1.59123111.png', 'Jl. Panda Raya No.5, Palebon, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50246', 8),
(52, 'SDN Palebon  02', 'https://maps.app.goo.gl/d354jb1bS1Dm6UAg8', 'IMG-66e8cf4294b1b7.27706668.png', 'XFVC+24H, Jl. Pedurungan Tengah VI, RT.002/RW.02, Pedurungan Tengah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50199', 7),
(53, 'SDN Palebon 03', 'https://maps.app.goo.gl/6bkoojEnQQPYuv4f7', 'IMG-66e8cf92e0b964.71289091.png', 'Jl. Brigjen Sudiarto No.330, Palebon, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50246', 6),
(54, 'SDN Pandean Lamper 01', 'https://maps.app.goo.gl/3RGchiB1WTcnRVsR7', 'IMG-66e8cfe5d6ae56.03053667.png', 'Jl. Brigjen Sudiarto No.105, Pandean Lamper, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50167', 4),
(55, 'SDN Pandean Lamper 02', 'https://maps.app.goo.gl/ZYzqYFooGSHrvG5G7', 'IMG-66e8d03bc64a18.35006076.png', 'Jl. Badak V No.33, Pandean Lamper, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50249', 4),
(56, 'SDN Pandean Lamper 03', 'https://maps.app.goo.gl/WjsNNR9EAtGZxT7x5', 'IMG-66e8d09bb8fa33.61637654.png', 'Jl. Badak Raya No.59, Pandean Lamper, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50249', 4),
(57, 'SDN Pandean Lamper 04', 'https://maps.app.goo.gl/nuU795C6w1PDLwVs9', 'IMG-66e8d103463ff7.53907356.png', 'Jl. Banteng Utara VI, Pandean Lamper, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50249', 4),
(58, 'SDN Pandean Lamper 05', 'https://maps.app.goo.gl/jWioW7gxcaE5cWgR7', 'IMG-66e8d161285ce3.09889295.jpeg', 'Jl. Gajah Bar. IV, Pandean Lamper, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50249', 4),
(59, 'SDN Panggung Kidul', 'https://maps.app.goo.gl/m5Eqw6gYtjdaMRWz7', 'IMG-66e8d1be994742.90760731.jpg', 'Jl. BrotoJoyo Tim. IV No.18, Panggung Kidul, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50178', 3),
(60, 'SDN Panggung Lor', 'https://maps.app.goo.gl/nsm8DgYhRX2RDDrm6', 'IMG-66e8d21a2943a7.11809839.png', 'Jl. Kuala Mas III No.110, Panggung Lor, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50177', 4),
(61, 'SDN Patemon 01', 'https://maps.app.goo.gl/AFmQGExFmKAJ8EUp8', 'IMG-66e8d678d275a9.78178509.png', 'JF2R+M55, Jl. Merbabu, Nalan, Patemon, Kec. Tengaran, Kabupaten Semarang, Jawa Tengah 50775', 55),
(62, 'SDN Patemon 02', 'https://maps.app.goo.gl/BJMyinj18e2rNa4r6', 'IMG-66e8d6d2afac38.90735074.png', 'Jl. Merbabu, Nalan, Patemon, Kec. Tengaran, Kabupaten Semarang, Jawa Tengah 50775', 63),
(63, 'SDN Pedalangan 01', 'https://maps.app.goo.gl/UuWfuNQ3usKR6nk29', 'IMG-66e8d72206de36.40502053.png', 'Jl. Durian Raya No.8, Pedalangan, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50268', 12),
(64, 'SDN Pedalangan 02', 'https://maps.app.goo.gl/K9vsKVAmczJ5LDXC7', 'IMG-66e8d7768982d9.21810117.png', 'Jl. Jatimulyo No.4B, Pedalangan, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269', 11),
(65, 'SDN Pedalangan 03', 'https://maps.app.goo.gl/6x3JnSFi2wsDpYWJ8', 'IMG-66e8d7c4a49fa0.12872644.png', 'WCQF+7FH, Jl. Durian Utara III, Pedalangan, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50268', 12),
(66, 'SDN Pedurungan Kidul 01', 'https://maps.app.goo.gl/rdTCHRZSs78PvLaY6', 'IMG-66e8d8146ac4f2.65067098.png', 'Jl. Brigjen Sudiarto No.KM.10, Pedurungan Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 8),
(67, 'SDN Pedurungan Kidul 02', 'https://maps.app.goo.gl/2MF4MFj1eQmURPmv6', 'IMG-66e8d867713857.54556902.png', 'Jl. Fatmawati No.120, Pedurungan Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 8),
(68, 'SDN Pedurungan Kidul 03', 'https://maps.app.goo.gl/KVZsqWjeoFAXZtk3A', 'IMG-66e8d8b7f323e5.10383390.png', 'Jl. Plamongan Larasati III No.616, Pedurungan Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 9),
(69, 'SDN Pedurungan Kidul 04', 'https://maps.app.goo.gl/gib7BGvwiw3PNULL8', 'IMG-66e8d903a27c73.91966957.jpg', 'XF7J+RQC, Jl. Blancir Raya, Pedurungan Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 10),
(70, 'SDN Pedurungan Kidul 05', 'https://maps.app.goo.gl/PeHga8en7xbkmedf8', 'IMG-66e8d9488b8ad0.14507690.png', 'Jl. Sapta Prasetya Utara I No.1, Pedurungan Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 8),
(71, 'SDN Pedurungan Lor 01', 'https://maps.app.goo.gl/9TXaBXh5Scnx5mBfA', 'IMG-66e8d9c89ceaa3.51590806.jpg', 'XFRQ+56J, Jl. KH. Thohir, Pedurungan Lor, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 10),
(72, 'SDN Pedurungan Lor 02', 'https://maps.app.goo.gl/J6QhFa3FQkm1qQ1bA', 'IMG-66e8da272efec6.54991060.png', 'XFRH+57H, Jl. Purwomukti Bar. III, Pedurungan Lor, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 8),
(73, 'SDN Pedurungan Tengah 01', 'https://maps.app.goo.gl/h1uJAhp2uwFzXMa49', 'IMG-66e8da7f1b1301.17654712.png', '2F39+JMW, Jl. Wolter Monginsidi, Pedurungan Tengah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 8),
(74, 'SDN Pedurungan Tengah 02', 'https://maps.app.goo.gl/tibvfJWMyrPEtpvX7', 'IMG-66e8daca236967.54859728.png', 'Jl. Soekarno Hatta No.5, Pedurungan Tengah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 7),
(75, 'SDN Pekunden', 'https://maps.app.goo.gl/oLiZSztMfTrTH5hLA', 'IMG-66e8db1cbb8cb7.71284739.jpg', 'Jl. Taman Pekunden No.9, RT.3/RW.3, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134', 1),
(76, 'SDN Pendrikan Kidul', 'https://maps.app.goo.gl/95Vwee3exDecg37X7', 'IMG-66e8db64bd06d1.11595202.jpg', '2CC5+36C, Jl. Sadewa No.21, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 1),
(77, 'SDN Pendrikanlor 01', 'https://maps.app.goo.gl/SzJFQrRp9xvLMBnc8', 'IMG-66e8dbb5795416.92389811.png', 'Jl. Sadewa Utara No.101, Pindrikan Lor, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 1),
(78, 'SDN Pendrikanlor 02', 'https://maps.app.goo.gl/LUMEp7Y3Ke83epkH6', 'IMG-66e8dc95b964b8.22540922.png', 'Jl. Poncowolo Barat V No.650b, Pindrikan Lor, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 2),
(79, 'SDN Pendrikanlor 03', 'https://maps.app.goo.gl/WqtBUN4RB4nEk3zj6', 'IMG-66e8dcdf50d810.07093611.jpeg', 'Jl. Indraprasta No.5, Pindrikan Lor, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131', 1),
(80, 'SDN Penggaron Kidul', 'https://maps.app.goo.gl/T2PVxbP6QMuhDSb89', 'IMG-66e8dd29d25080.47818097.jpg', 'Jl. Kyai Morang XI No.kel, Penggaron Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50194', 10),
(81, 'SDN Pesantren', 'https://maps.app.goo.gl/RzNKN7fvmQGTDnH78', 'IMG-66e8dd69ea1462.91463231.jpg', 'X8G6+V9X, Jalan Wonorejo, RT.02/RW.01, Pesantren, Kec. Mijen, Kota Semarang, Jawa Tengah 50212', 16),
(82, 'SDN Peterongan', 'https://maps.app.goo.gl/hTMbuEoC217v2Ynn8', 'IMG-66e8ddab6718a9.28614365.png', 'Jl. Kompol Maksum No.292, Peterongan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242', 3),
(83, 'SDN Petompon 01', 'https://maps.app.goo.gl/hF7VX2VSH4m2cpzh6', 'IMG-66e8ddffeccef9.90725043.png', '2C33+F2J, Jl. Kelud Raya, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237', 2),
(84, 'SDN Petompon 02', 'https://maps.app.goo.gl/mzvJfrZrS4e7wApH6', 'IMG-66e8de49632976.43254918.png', 'Jl. Kelud Raya No.5, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237', 3),
(85, 'SDN Petompon 03', 'https://maps.app.goo.gl/JRhhxidnMxqonZvy7', 'IMG-66e8de954c8892.73211844.png', 'Jl. Tampomas Sel. I No.21, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237', 2),
(86, 'SDN Plalangan 01', 'https://maps.app.goo.gl/CH2G3LgiirfUsWADA', 'IMG-66e8dee34f3826.92247021.png', 'W97C+97P, Plalangan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50225', 16),
(87, 'SDN Plalangan 02', 'https://maps.app.goo.gl/Rwp3ikdcDkxgUARZA', 'IMG-66e8df24eb9ae5.90785182.png', 'W929+JVQ, Jl. Terwidi, Plalangan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50225', 17),
(88, 'SDN Plalangan 03', 'https://maps.app.goo.gl/BR75xFUVQZjDuhM59', 'IMG-66e8df656770d2.60217271.png', 'W978+J82, Jl. Mr. Wuryanto, Plalangan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50225', 15),
(89, 'SDN Plamongansari 01', 'https://maps.app.goo.gl/FATbWECa4aR6nq7B6', 'IMG-66e8dfa98d5093.13255155.png', 'Jl. Brigjen Sudiarto No.705, Plamongan Sari, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 9),
(90, 'SDN Plamongansari 02', 'https://maps.app.goo.gl/2mFL2Bp5kKYVjgnC7', 'IMG-66e8dfedab0601.53541355.png', 'XFGP+89M, Jl. Plamongansari V, Plamongan Sari, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', 10),
(91, 'SDN Pleburan 01', 'https://maps.app.goo.gl/GKxQUkKFLQTZtSUt5', 'IMG-66e8e0360292e6.23234804.jpg', 'Jl. Singosari VII No.7, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241', 3),
(92, 'SDN Pleburan 02', 'https://maps.app.goo.gl/dsTMNEfyJr9szeHc8', 'IMG-66e8e088ac0e08.81617910.png', 'Jl. Kertanegara Sel. No.3, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241', 2),
(93, 'SDN Pleburan 03', 'https://maps.app.goo.gl/mW8KDVf69bNQk3TRA', 'IMG-66e8e0cee094e5.07327110.jpg', 'Jl. Singosari IV No.11, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241', 3),
(94, 'SDN Pleburan 04', 'https://maps.app.goo.gl/YMCc9e7yk5cDtmBB8', 'IMG-66e8e15de96d58.92652324.jpg', 'Jl. Kusuma Wardani No.1, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241', 2),
(95, 'SDN Podorejo 01', 'https://maps.app.goo.gl/PnTNzgmPcJYfJjjS8', 'IMG-66e8e1a365f2f0.53001534.jpg', 'X7QV+3G5, Podorejo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50187', 17),
(96, 'SDN Podorejo 02', 'https://maps.app.goo.gl/aeHxypoZxHH4Gsnq9', 'IMG-66e8e1eb79c233.14944255.png', 'X7XW+MR6, Jl. Kaliancar, Podorejo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50187', 15),
(97, 'SDN Podorejo 03', 'https://maps.app.goo.gl/kjbtrTfnvnioLHF6A', 'IMG-66e8e22e83b5d4.49410696.png', 'Jalan Kiyai Tuban, Grujugan, RT.03/RW.06, Podorejo, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50187', 17),
(98, 'SDN Polaman', 'https://maps.app.goo.gl/JkWMmprA3T1Acs3j7', 'IMG-66e8e26a9c19c9.86866726.png', 'W85J+7RH, Jl. RM. Subagiono, Polaman, Kec. Mijen, Kota Semarang, Jawa Tengah 50217', 20),
(99, 'SDN Pongangan', 'https://maps.app.goo.gl/X6cUgpDFBb7At8ks8', 'IMG-66e8e2a7f2f766.46198208.jpg', 'W9R7+FRH, Jl. Pongangan, Pongangan, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229', 13),
(100, 'SDN Pudakpayung 01', 'https://maps.app.goo.gl/GDEPU7sLyKgvZ6Ld7', 'IMG-66e8e2ead5cfc0.13178458.png', 'WC46+C68, Jl. Perintis Kemerdekaan No.159A, Pudakpayung, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265', 13),
(101, 'SDN Pudakpayung 02', 'https://maps.app.goo.gl/4rEWoG31i1NiEwpK7', 'IMG-66e8e32921c599.64425509.png', 'Jl. Payung Asri Raya No.1, Pudakpayung, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265', 13),
(102, 'SDN Pudakpayung 03', 'https://maps.app.goo.gl/9pf3wD2H9NBhx3fcA', 'IMG-66e8e36acfdba8.69962175.png', 'Jl. Grogol III No.10, Pudakpayung, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
