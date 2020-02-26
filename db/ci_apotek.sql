-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 04:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(128) NOT NULL,
  `medicine_name` varchar(128) NOT NULL,
  `medicine_type` varchar(128) NOT NULL,
  `medicine_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `transaction_id` varchar(128) NOT NULL,
  `date_transaction` date NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(128) NOT NULL,
  `medicine_name` varchar(128) NOT NULL,
  `medicine_type` varchar(128) NOT NULL,
  `medicine_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `transaction_id` varchar(128) NOT NULL,
  `date_transaction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`id`, `medicine_id`, `medicine_name`, `medicine_type`, `medicine_qty`, `price`, `total`, `transaction_id`, `date_transaction`) VALUES
(7, 'M002', 'Bodrexin', 'Internal medicine', 50, 900, 45000, 'P-001', '2019-05-18'),
(8, 'M001', 'Komik', 'Internal medicine', 100, 1200, 120000, 'P-002', '2019-05-17'),
(9, 'M002', 'Bodrexin', 'Internal medicine', 2, 900, 1800, 'P-', '2019-05-18'),
(10, 'M002', 'Bodrexin', 'Internal medicine', 6, 900, 5400, 'P-003', '2019-05-18'),
(11, 'M001', 'Komik', 'Internal medicine', 4, 1200, 4800, 'P-004', '2019-05-17'),
(12, 'M002', 'Bodrexin', 'Internal medicine', 2, 900, 1800, 'P-005', '2019-05-18'),
(13, 'M003', 'Paramex', 'Internal medicine', 100, 1150, 115000, 'P-006', '2019-05-16'),
(14, 'M001', 'Komik', 'Internal medicine', 6, 1200, 7200, 'P-007', '2019-05-17'),
(15, 'M003', 'Paramex', 'Internal medicine', 7, 1150, 8050, 'P-007', '2019-05-12'),
(16, 'M004', 'Panadol', 'Eksternal medicine', 99, 1230, 121770, 'P-006', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(128) NOT NULL,
  `medicine_name` varchar(128) NOT NULL,
  `medicine_type` varchar(128) NOT NULL,
  `medicine_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `transaction_id` varchar(128) NOT NULL,
  `total` int(11) NOT NULL,
  `date_stock` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `medicine_id`, `medicine_name`, `medicine_type`, `medicine_qty`, `price`, `transaction_id`, `total`, `date_stock`) VALUES
(16, 'M001', 'Komik', 'Internal medicine', 790, 1200, 'T001', 7200, '2019-05-17'),
(17, 'M002', 'Bodrexin', 'Internal medicine', 190, 900, 'T002', 1800, '2019-05-18'),
(18, 'M003', 'Paramex', 'Internal medicine', 793, 1150, 'T003', 8050, '2019-05-16'),
(19, 'M004', 'Panadol', 'Eksternal medicine', 100, 1230, 'T004', 121770, '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(128) NOT NULL,
  `medicine_id` varchar(128) NOT NULL,
  `medicine_name` varchar(128) NOT NULL,
  `medicine_type` varchar(128) NOT NULL,
  `medicine_qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date_stock` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`id`, `transaction_id`, `medicine_id`, `medicine_name`, `medicine_type`, `medicine_qty`, `price`, `total`, `date_stock`) VALUES
(11, 'T001', 'M001', 'Komik', 'Internal medicine', 1000, 1200, 1200000, '2019-05-17'),
(12, 'T002', 'M002', 'Bodrexin', 'Internal medicine', 250, 900, 225000, '2019-05-18'),
(13, 'T003', 'M003', 'Paramex', 'Internal medicine', 977, 1150, 1123550, '2019-05-16'),
(14, 'T004', 'M004', 'Panadol', 'Eksternal medicine', 199, 1230, 244770, '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(128) NOT NULL,
  `medicine_name` varchar(128) NOT NULL,
  `medicine_type` varchar(128) NOT NULL,
  `medicine_qty` int(11) NOT NULL,
  `date_stock` date NOT NULL,
  `transaction_id` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`id`, `medicine_id`, `medicine_name`, `medicine_type`, `medicine_qty`, `date_stock`, `transaction_id`, `price`, `total`) VALUES
(23, 'M002', 'Bodrexin', 'Internal medicine', 50, '2019-05-18', 'P-001', 900, 45000),
(24, 'M001', 'Komik', 'Internal medicine', 100, '2019-05-17', 'P-002', 1200, 120000),
(25, 'M002', 'Bodrexin', 'Internal medicine', 2, '2019-05-18', 'P-', 900, 1800),
(26, 'M002', 'Bodrexin', 'Internal medicine', 6, '2019-05-18', 'P-003', 900, 5400),
(27, 'M001', 'Komik', 'Internal medicine', 4, '2019-05-17', 'P-004', 1200, 4800),
(28, 'M002', 'Bodrexin', 'Internal medicine', 2, '2019-05-18', 'P-005', 900, 1800),
(29, 'M003', 'Paramex', 'Internal medicine', 100, '2019-05-16', 'P-006', 1150, 115000),
(30, 'M001', 'Komik', 'Internal medicine', 6, '2019-05-17', 'P-007', 1200, 7200),
(31, 'M003', 'Paramex', 'Internal medicine', 7, '2019-05-12', 'P-007', 1150, 8050),
(32, 'M004', 'Panadol', 'Eksternal medicine', 99, '2019-06-13', 'P-006', 1230, 121770);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Dimas Yogi Sugara', 'admin@gmail.com', 'Captain_Americas_shield_svg.png', '$2y$10$xQMe8mzUylA4IPhh9Pg1ieZw1F5arhe720mNwhbt55/ahCoXySmFa', 1, 1, 1557543428),
(6, 'Kasir', 'kasir@gmail.com', 'kasir.png', '$2y$10$JX1xXv7RMfW8CXG7MBRhNO6KRYYG9oCjfr.V6/GdjBWmn7oE4N1Vy', 2, 1, 1557543440),
(8, 'Apoteker', 'apoteker@gmail.com', 'apoteker.png', '$2y$10$JX1xXv7RMfW8CXG7MBRhNO6KRYYG9oCjfr.V6/GdjBWmn7oE4N1Vy', 3, 1, 1557543428);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3),
(24, 3, 2),
(26, 3, 10),
(27, 2, 2),
(29, 1, 10),
(30, 1, 11),
(31, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(10, 'Inventory'),
(11, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Kasir'),
(3, 'Apoteker');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profil', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(12, 10, 'Stock Item', 'apoteker/stock', 'fas fa-fw fa-boxes', 1),
(13, 10, 'Report Stock In', 'apoteker/rinstock', 'fas fa-fw fa-plus', 1),
(14, 10, 'Report Stock Out', 'apoteker/routstock', 'fas fa-fw fa-minus', 1),
(15, 11, 'Sales', 'kasir/sale', 'fas fa-fw fa-cash-register', 1),
(16, 11, 'Report Sale', 'kasir/rsales', 'fas fa-fw fa-file-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
