-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 06:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `at_id` int(11) NOT NULL,
  `kw_id` int(11) NOT NULL,
  `at_start` datetime NOT NULL,
  `at_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`at_id`, `kw_id`, `at_start`, `at_end`) VALUES
(6, 7, '2020-03-07 13:58:13', NULL),
(7, 2, '2020-03-07 16:10:32', NULL),
(8, 8, '2020-03-07 16:13:45', NULL),
(9, 7, '2020-03-09 08:54:43', '2020-03-09 09:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `kw_id` int(11) NOT NULL,
  `kw_nip` varchar(18) NOT NULL,
  `kw_password` text NOT NULL,
  `kw_full_name` varchar(255) NOT NULL,
  `kw_dob` date NOT NULL,
  `kw_address` text NOT NULL,
  `kw_city` varchar(50) NOT NULL,
  `kw_provience` varchar(50) NOT NULL,
  `kw_email` varchar(100) NOT NULL,
  `kw_is_del` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`kw_id`, `kw_nip`, `kw_password`, `kw_full_name`, `kw_dob`, `kw_address`, `kw_city`, `kw_provience`, `kw_email`, `kw_is_del`) VALUES
(1, '000000000000000001', '$2y$10$CB01DxrfCSI62JK1YkpXSezZ/1AQjxKciLC2Cn9C1oCGROF3uYTDm', 'Rizky Setiawan', '2020-01-08', 'Jl. Ansana 3 no 78', 'Tangerang', 'Banten', 'rizkys2323@gmail.com', 1),
(2, '00000001', '$2y$10$yMc3A9NY8BM/FDjug9POuOiGyKjNfPPP1Srr2vdZLImVTrDQF/y2.', 'Bonari Simanjuntak', '2020-03-07', 'test', 'Tangerang', 'Banten', 'rizkys2323@gmail.com', 1),
(7, '00000002', '$2y$10$0BfiPGnTsgiWreZhTC22QO51P06Qr3cQSQzhHJl62fnmmJNTGR7q6', 'Rizky Setiawan', '2020-03-07', 'arqwr', 'Tangerang', 'Banten', 'rizkys2323@gmail.com', 0),
(8, '00000003', '$2y$10$fIL.1mfS1bkYkvnVHn1D3.mNMAwcNQlwm3AxsCbB9vUu/pzW6F9ga', 'Nishimiya Kaguya', '1996-08-21', 'jl. angsana', 'Tangerang', 'Banten', 'kaguya@mail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `ps_id` int(11) NOT NULL,
  `ps_name` varchar(256) NOT NULL,
  `ps_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `ss_id` int(11) NOT NULL,
  `ss_web_name` varchar(100) DEFAULT NULL,
  `ss_address` text NOT NULL,
  `ss_contact` text NOT NULL,
  `ss_lat` varchar(50) DEFAULT NULL,
  `ss_lot` varchar(50) DEFAULT NULL,
  `ss_range` int(3) NOT NULL,
  `ss_hash` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`ss_id`, `ss_web_name`, `ss_address`, `ss_contact`, `ss_lat`, `ss_lot`, `ss_range`, `ss_hash`) VALUES
(1, 'TeaTime Lab', 'JL. Angsana 3, NO. 78 04/05, Periuk Jaya, Periuk', 'Phone : 081384247749, Email: rizkys2323@gmail.com', '-6.165138', '106.603621', 100, 'e8ceeea316d07c6e0c1f6a115a3da38e');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `userlogs_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `activity` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `activity_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_lang` varchar(2) NOT NULL DEFAULT 'en',
  `user_username` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` text NOT NULL,
  `user_group_id` int(11) DEFAULT NULL,
  `user_ip_address` varchar(16) DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_lang`, `user_username`, `user_email`, `user_name`, `user_password`, `user_group_id`, `user_ip_address`, `user_status`, `user_last_login`) VALUES
(1, 'en', 'superadmin', 'superadmin@test.id', 'Super Admin', '$2y$10$CB01DxrfCSI62JK1YkpXSezZ/1AQjxKciLC2Cn9C1oCGROF3uYTDm', 1, '', 1, '2020-03-09 12:27:53'),
(2, 'en', 'owner', 'owner@test.id', 'Owner', '$2y$10$T.XxjJIzLPNtt68189912OB/bom9DPuWrEjfdTMIiKcmIH/KX8cRe', 2, '', 1, '2020-02-18 00:00:00'),
(3, 'en', 'admin', 'admin@test.id', 'Admin', '$2y$10$CB01DxrfCSI62JK1YkpXSezZ/1AQjxKciLC2Cn9C1oCGROF3uYTDm', 3, '', 1, '2020-02-29 09:22:44'),
(4, 'en', 'guest', 'guest@test.id', 'Guest', '$2y$10$BoswVmy7LVWvSI0v3.EGYuVVE6UhCSylfJc1/WYcqHK0KTSiguZ3q', 4, '', 1, '2020-02-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `user_group_id` int(11) NOT NULL,
  `user_group_name` varchar(32) NOT NULL,
  `user_group_note` text NOT NULL,
  `user_group_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_group_limit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`user_group_id`, `user_group_name`, `user_group_note`, `user_group_status`, `user_group_limit`) VALUES
(1, 'Super Admin', 'All Access', 1, 1),
(2, 'Owner', 'All Access', 1, 1),
(3, 'Admin', 'Selected Access for Admin', 1, 2),
(4, 'Guest', 'Selected Access for Guest', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menus`
--

CREATE TABLE `user_menus` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(32) NOT NULL,
  `tag` varchar(32) NOT NULL,
  `url` varchar(32) NOT NULL,
  `icon_menu` varchar(25) DEFAULT NULL,
  `show_in_menu` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menus`
--

INSERT INTO `user_menus` (`id`, `parent_id`, `name`, `tag`, `url`, `icon_menu`, `show_in_menu`) VALUES
(1, 0, 'Dashboard', '', 'dashboard', 'fa fa-home', 1),
(16, 0, 'Karyawan', '', 'employee', 'fa fa-address-card', 1),
(17, 16, 'Karyawan Aktif', '', '', NULL, 1),
(18, 16, 'Karyawan Arsip', '', 'archives', NULL, 1),
(19, 0, 'Report', '', 'report', 'fa fa-print', 1),
(20, 19, 'Semua Karyawan', '', 'all_employee', NULL, 1),
(21, 19, 'Per Karyawan', '', 'per_employee', NULL, 1),
(22, 0, 'Setting', '', 'setting', 'fa fa-cog', 1),
(23, 22, 'Site Setting', '', 'site_setting', NULL, 1),
(24, 22, 'Menu Setting', '', 'menu_setting', NULL, 1),
(37, 0, 'List Harians', '', 'listings', 'fa fa-home', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_rules`
--

CREATE TABLE `user_rules` (
  `rules_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rules`
--

INSERT INTO `user_rules` (`rules_id`, `group_id`, `menu_id`) VALUES
(23, 1, 16),
(24, 1, 17),
(25, 1, 18),
(26, 1, 19),
(27, 1, 20),
(28, 1, 21),
(29, 1, 22),
(30, 1, 23),
(31, 1, 24),
(32, 1, 25),
(35, 1, 28),
(36, 1, 29),
(39, 1, 32),
(40, 1, 33),
(41, 1, 34),
(42, 1, 35),
(43, 1, 36),
(44, 1, 1),
(45, 1, 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`kw_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`userlogs_id`),
  ADD KEY `name` (`name`),
  ADD KEY `activity_date` (`activity_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_username` (`user_username`),
  ADD KEY `user_group_id` (`user_group_id`) USING BTREE;

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD KEY `groups` (`user_group_id`,`user_group_name`);

--
-- Indexes for table `user_menus`
--
ALTER TABLE `user_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `name` (`name`) USING BTREE,
  ADD KEY `url` (`url`);

--
-- Indexes for table `user_rules`
--
ALTER TABLE `user_rules`
  ADD PRIMARY KEY (`rules_id`),
  ADD KEY `group` (`group_id`) USING BTREE,
  ADD KEY `menu` (`menu_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `kw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menus`
--
ALTER TABLE `user_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_rules`
--
ALTER TABLE `user_rules`
  MODIFY `rules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
