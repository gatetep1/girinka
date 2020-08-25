-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 03:32 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girinka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cells`
--

CREATE TABLE `cells` (
  `cell_code` int(11) NOT NULL,
  `cell_name` varchar(45) NOT NULL,
  `sector_code` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cells`
--

INSERT INTO `cells` (`cell_code`, `cell_name`, `sector_code`, `status`) VALUES
(1, 'Cyohoha', 1, 1),
(2, 'Rwamahwa', 1, 1),
(3, 'Gitare', 1, 1),
(4, 'Karengeli', 2, 1),
(5, 'Taba', 2, 1),
(6, 'Butangampundu', 2, 1),
(7, 'Gasiza', 3, 1),
(8, 'Mukoto', 3, 1),
(9, ' Nyirangarama', 3, 1),
(10, 'Giko', 3, 1),
(11, 'Kayenzi', 3, 1),
(36, 'Mwumba', 4, 1),
(37, 'Gahororo', 4, 1),
(38, 'Karama', 4, 1),
(39, 'Busoro', 4, 1),
(40, 'Butare', 4, 1),
(41, 'Gitumba', 4, 1),
(42, 'Ndarage', 4, 1),
(43, 'Budakiranya', 5, 1),
(44, 'Rudogo', 5, 1),
(45, 'Migendezo', 5, 1),
(46, 'Burehe', 6, 1),
(47, 'Marembo', 6, 1),
(48, 'Rwili', 6, 1),
(69, 'Butunzi', 7, 1),
(70, 'Rebero', 7, 1),
(71, 'Marembo', 7, 1),
(72, 'Karegamazi', 7, 1),
(73, 'Kamushenyi', 8, 1),
(74, 'Sayo', 8, 1),
(75, 'Kigarama', 8, 1),
(76, 'Gitatsa', 8, 1),
(77, 'Mubuga', 8, 1),
(78, 'Murama', 8, 1),
(79, 'Kabuga', 9, 1),
(80, 'Shengampuri', 9, 1),
(81, 'Kivugiza', 9, 1),
(82, 'Kigarama', 9, 1),
(83, 'Nyamyumba', 9, 1),
(84, 'Ngiramazi', 10, 1),
(85, 'Mushali', 10, 1),
(86, 'Rurenge', 10, 1),
(87, 'Bukoro', 10, 1),
(93, 'Mvuzo', 11, 1),
(94, 'Mugambazi', 11, 1),
(95, 'Gatwa', 11, 1),
(96, 'Bubangu', 11, 1),
(97, 'Kabuga', 12, 1),
(98, 'Karembo', 12, 1),
(99, 'Mugote', 12, 1),
(100, 'Munyarwanda', 12, 1),
(101, 'Kiyanza', 13, 1),
(102, 'Kajevuba', 13, 1),
(103, 'Mahaza', 13, 1),
(104, 'Mbuye', 14, 1),
(105, 'Mberuka', 14, 1),
(106, 'Bwimo', 14, 1),
(107, 'Buraro', 14, 1),
(108, 'Kirenge', 15, 1),
(109, 'Taba', 15, 1),
(110, 'Gako', 15, 1),
(111, 'Rutonde', 16, 1),
(112, 'Bugaragara', 16, 1),
(113, 'Kijabagwe', 16, 1),
(114, 'Muvumu', 16, 1),
(115, 'Rubona', 16, 1),
(116, 'Misezero', 17, 1),
(117, 'Nyirabirori', 17, 1),
(118, 'Barari', 17, 1),
(119, 'Taba', 17, 1),
(120, 'Gahabwa', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cows`
--

CREATE TABLE `cows` (
  `cow_id` int(10) UNSIGNED NOT NULL,
  `ctype` enum('Inflizone','Ikimanyi','Inyarwanda') NOT NULL,
  `sex` enum('Heifer','Bull') NOT NULL,
  `don_id` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0:Distrib., 1:Not yet Dist.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cows`
--

INSERT INTO `cows` (`cow_id`, `ctype`, `sex`, `don_id`, `date`, `status`) VALUES
(1, 'Inflizone', 'Heifer', 1, '2020-08-20 09:08:00', 0),
(2, 'Inyarwanda', 'Heifer', 2, '2020-08-20 09:08:42', 0),
(3, 'Inflizone', 'Bull', 1, '2020-08-20 09:08:11', 0),
(4, 'Inyarwanda', 'Heifer', 1, '2020-08-20 09:08:20', 0),
(5, 'Ikimanyi', 'Bull', 2, '2020-08-20 09:08:08', 0),
(8, 'Inflizone', 'Heifer', 1, '2020-08-20 09:08:26', 0),
(9, 'Inflizone', 'Bull', 1, '2020-08-20 09:08:33', 0),
(13, 'Ikimanyi', 'Heifer', 3, '2020-08-24 03:08:22', 0),
(14, 'Ikimanyi', 'Heifer', 3, '2020-08-22 03:08:48', 0),
(15, 'Ikimanyi', 'Heifer', 3, '2020-08-22 08:08:09', 0),
(16, 'Inyarwanda', 'Heifer', 3, '2020-08-23 10:08:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doners`
--

CREATE TABLE `doners` (
  `don_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doners`
--

INSERT INTO `doners` (`don_id`, `name`, `sector`, `description`, `date`) VALUES
(1, 'IPRC Tumba', 'Public', 'Community Outreach\r\n\r\n', '2020-08-24 03:08:11'),
(2, 'UR-Huye', 'Private', 'Charity', '2020-08-22 03:08:22'),
(3, 'Urwibutso', 'Private', 'Charity', '2020-08-22 03:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` int(11) NOT NULL,
  `id_no` varchar(16) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `sex` enum('Female','Male') NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `cell` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '0:Served, 1:Pending',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `id_no`, `fname`, `lname`, `sex`, `phone`, `sector`, `cell`, `village`, `status`, `date`) VALUES
(43, '1192170048258789', 'Kanzayire', 'Bonifride', 'Female', '0788888012', 'Kinihira', 'Butunzi', 'Gisekuru', 0, '2020-08-24 09:08:04'),
(48, '1192800188589010', 'Gasikiri', 'Patrice', 'Male', '0786580957', 'Ntarabana', 'Kiyanza', 'Nyarurama', 1, '2020-08-19 03:08:25'),
(41, '1193370048258789', 'Nyirambarushimana', 'Alphonsine', 'Female', '0733878300', 'Ntarabana', 'Mahaza', 'Rusekabuye', 0, '2020-08-19 03:08:37'),
(63, '1195700000000000', 'Kawera', 'Assoumpta', 'Female', '0729825312', 'Cyinzuzi', 'Migendezo', 'Rusigara', 0, '2020-08-18 12:08:03'),
(49, '1195700188589010', 'Abijuru', 'Clarisse', 'Female', '0729828378', 'Ngoma', 'Munyarwanda', 'Rushubi', 1, '2020-08-19 03:08:09'),
(38, '1198570048258000', 'Sezibera', 'Antoine', 'Male', '0722878012', 'Mbogo', 'Ngiramazi', 'Kigombe', 0, '2020-08-17 02:08:57'),
(37, '1198570048258012', 'Ndagijimana', 'Emmanuel', 'Male', '0736878312', 'Kinihira', 'Butunzi', 'Gisekuru', 0, '2020-08-15 11:08:57'),
(36, '1198570048258321', 'haji', 'Hakizimana', 'Male', '0726878012', 'Mbogo', 'Mushali', 'Nyakabuye', 0, '2020-08-14 02:08:03'),
(44, '1198570048258528', 'Buregeya', 'Pascal', 'Male', '0783888012', 'Rukozo', 'Bwimo', 'Gatwa', 0, '2020-08-18 12:08:23'),
(47, '1198570048258987', 'Uwanyirigira', 'Miriam', 'Female', '0733878000', 'Rusiga', 'Kirenge', 'Kinini', 0, '2020-08-18 01:08:25'),
(45, '1198570048288528', 'Ingabire', 'Rehema', 'Female', '0723488012', 'Kinihira', 'Karegamazi', 'Mutoyi', 0, '2020-08-18 01:08:50'),
(70, '1198570048288532', 'Semana', 'Athanase', 'Male', '0781180812', 'Bushoki', 'Gasiza', 'Rulindo', 0, '2020-08-17 02:08:57'),
(68, '1198570048288533', 'Kanyarwanda', 'Annicet', 'Male', '0781180190', 'Bushoki', 'Gasiza', 'Rulindo', 1, '2020-08-19 09:56:01'),
(67, '1198570048288538', 'Ndagijimana', 'Evariste', 'Male', '0789580952', 'Bushoki', 'Gasiza', 'Rulindo', 1, '2020-08-19 09:56:01'),
(69, '1198570048288570', 'Tambineza', 'Antoinette', 'Female', '0729811311', 'Cyinzuzi', 'Migendezo', 'Rusigara', 0, '2020-08-19 09:56:01'),
(66, '1198570048288577', 'Nyiramajyambere', 'Nadia', 'Female', '0729825311', 'Cyinzuzi', 'Migendezo', 'Rusigara', 0, '2020-08-19 09:56:01'),
(46, '1198570118258321', 'Ndayambaje', 'Williams', 'Male', '0733873210', 'Kinihira', 'Karegamazi', 'Bwishya', 0, '2020-08-19 03:08:50'),
(39, '1198770048258321', 'Uwambajimana', 'Pascasie', 'Female', '0733878312', 'Kinihira', 'Rebero', 'Kirwa', 0, '2020-08-17 02:08:57'),
(40, '1198880048258321', 'Kalisa', 'Steven', 'Male', '0788878012', 'Kisaro', 'Kigarama', 'Runyinya', 0, '2020-08-17 02:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hist_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hist_id`, `user_id`, `data`, `date`) VALUES
(172, 16, 'New family with ID No. of 1198570048258014 Added', '2020-08-09 00:08:22'),
(173, 16, 'New family with ID No. of 1198570048258014 Added', '2020-08-09 00:08:34'),
(174, 16, 'New family with ID No. of 1198570048258000 Added', '2020-08-09 00:08:58'),
(175, 16, 'New family with ID No. of 1198570048258321 Added', '2020-08-09 01:08:37'),
(176, 16, 'New family with ID No. of 1198570048258789 Added', '2020-08-09 01:08:50'),
(177, 16, 'New family with ID No. of 1198570048258321 Added', '2020-08-09 01:08:30'),
(178, 16, 'IPRC Tumba Doner Added', '2020-08-15 09:08:04'),
(179, 16, 'UR-Huye Doner Added', '2020-08-15 09:08:33'),
(180, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-15 09:08:55'),
(181, 16, 'Femaleof Inyarwandaas a New Cow Added', '2020-08-15 09:08:14'),
(182, 16, 'New family with ID No. of 1198570048258321 Served Successfully', '2020-08-15 09:08:54'),
(183, 16, 'New family with ID No. of 1198570048258012 Added', '2020-08-15 09:08:44'),
(184, 16, 'New family with ID No. of 1198570048258012 Served Successfully', '2020-08-15 09:08:53'),
(185, 16, 'New family with ID No. of 1198570048258000 Added', '2020-08-17 01:08:17'),
(186, 16, 'New family with ID No. of 1198770048258321 Added', '2020-08-17 01:08:50'),
(187, 16, 'New family with ID No. of 1198880048258321 Added', '2020-08-17 01:08:52'),
(188, 16, 'New family with ID No. of 1193370048258789 Added', '2020-08-17 01:08:29'),
(189, 16, 'New family with ID No. of  Added', '2020-08-17 01:08:34'),
(190, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-17 05:08:40'),
(191, 16, 'New family with ID No. of 1193370048258789 Served Successfully', '2020-08-17 05:08:34'),
(192, 16, 'Femaleof Inyarwandaas a New Cow Added', '2020-08-17 05:08:50'),
(193, 16, 'Femaleof Ikimanyias a New Cow Added', '2020-08-17 05:08:59'),
(194, 16, 'New family with ID No. of 1198570048258000 Served Successfully', '2020-08-17 05:08:42'),
(195, 16, 'New family with ID No. of 1198880048258321 Served Successfully', '2020-08-17 05:08:22'),
(196, 16, 'Femaleof Inyarwandaas a New Cow Added', '2020-08-17 05:08:43'),
(197, 16, 'New family with ID No. of 1192170048258789 Added', '2020-08-17 05:08:27'),
(198, 16, 'New family with ID No. of 1192170048258789 Served Successfully', '2020-08-17 05:08:55'),
(199, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-18 09:08:06'),
(200, 16, 'New family with ID No. of 1198570048258528 Added', '2020-08-18 10:08:59'),
(201, 16, 'New family with ID No. of 1198570048258528 Served Successfully', '2020-08-17 23:08:36'),
(202, 16, 'Maleof Inflizoneas a New Cow Added', '2020-08-17 23:08:27'),
(203, 16, 'New family with ID No. of 1198770048258321 Served Successfully', '2020-08-17 23:08:47'),
(204, 16, 'New family with ID No. of 1198570048288528 Added', '2020-08-17 23:08:43'),
(205, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-17 23:08:05'),
(206, 16, 'New family with ID No. of 1198570048288528 Served Successfully', '2020-08-17 23:08:21'),
(207, 16, 'New family with ID No. of 1198570118258321 Added', '2020-08-17 23:08:01'),
(208, 16, 'New family with ID No. of 1198570048258987 Added', '2020-08-17 23:08:41'),
(209, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-17 23:08:00'),
(210, 16, 'Femaleof Inyarwandaas a New Cow Added', '2020-08-17 23:08:08'),
(211, 16, 'New family with ID No. of 1198570118258321 Served Successfully', '2020-08-17 23:08:24'),
(212, 16, 'New family with ID No. of 1198570048258987 Served Successfully', '2020-08-17 23:08:49'),
(213, 16, 'Femaleof Inflizoneas a New Cow Added', '2020-08-18 02:08:28'),
(215, 16, 'Heiferof Ikimanyias a New Cow Added', '2020-08-20 07:08:38'),
(216, 16, 'Urwibutso Doner Added', '2020-08-22 01:08:30'),
(217, 16, 'Heiferof Ikimanyi as a New Cow Added', '2020-08-22 01:08:25'),
(218, 16, 'New family with ID No. of 1198570048288570 Served Successfully', '2020-08-22 06:08:29'),
(219, 16, 'New family with ID No. of 1198570048288532 Served Successfully', '2020-08-22 06:08:44'),
(220, 16, 'Heiferof Ikimanyi as a New Cow Added', '2020-08-22 06:08:22'),
(221, 16, 'New family with ID No. of 1198570048288577 Served Successfully', '2020-08-22 06:08:51'),
(222, 16, 'Heiferof Inyarwanda as a New Cow Added', '2020-08-23 08:08:45'),
(223, 16, 'New family with ID No. of  Added', '2020-08-23 01:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `sector_code` int(11) NOT NULL,
  `sector_name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: Blocked, 1: Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_code`, `sector_name`, `status`) VALUES
(1, 'Base', 1),
(2, 'Burega', 1),
(3, 'Bushoki', 1),
(4, 'Buyoga', 1),
(5, 'Cyinzuzi', 1),
(6, 'Cyungo', 1),
(7, 'Kinihira', 1),
(8, 'Kisaro', 1),
(9, 'Masoro', 1),
(10, 'Mbogo', 1),
(11, 'Murambi', 1),
(12, 'Ngoma', 1),
(13, 'Ntarabana', 1),
(14, 'Rukozo', 1),
(15, 'Rusiga', 1),
(16, 'Shyorongi', 1),
(17, 'Tumba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `nat_id_no` varchar(16) NOT NULL,
  `cow_id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `nat_id_no`, `cow_id`, `date`) VALUES
(1, '1198570048258321', 1, '2020-08-15 09:08:37'),
(2, '1198570048258012', 2, '2020-08-15 09:08:31'),
(3, '1193370048258789', 3, '2020-08-17 05:08:05'),
(4, '1198570048258000', 4, '2020-08-17 05:08:25'),
(5, '1198880048258321', 5, '2020-08-17 05:08:09'),
(8, '1198770048258321', 8, '2020-08-17 23:08:40'),
(9, '1198570048288528', 9, '2020-08-17 23:08:14'),
(12, '1198570048288570', 13, '2020-08-22 06:08:12'),
(13, '1198570048288532', 14, '2020-08-22 06:08:48'),
(14, '1198570048288577', 15, '2020-08-22 06:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` enum('Admin','Other') NOT NULL,
  `register_date` date NOT NULL,
  `last_login` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `usertype`, `register_date`, `last_login`, `status`) VALUES
(9, 'Uwimana Emmanuel', 'emmanueluwimana@gmail.com', '$2y$08$ubTQTizTNtZZgFn1vzoWHe9PqeLi/feSFD85ocdkHrz5E/rtuBBrG', 'Other', '2020-05-14', '2020-05-14 00:00:00', '1'),
(14, 'Akimana Ratifa', 'akimana@gmail.com', '$2y$08$XemsBiYADVvthjw08HK/XeBu0TWaG8/vBMr8tmV3JnnZP5Q/SLbBC', 'Admin', '2020-05-14', '2020-05-23 10:05:59', '0'),
(15, 'Rwabukambiza Eric', 'ericrwabukamba@gmail.com', '$2y$08$jJwhlwhP2V4cSgD4ooY55uTtTUVR0193UTitrHp8ymW7MU1IPj8/m', 'Admin', '2020-05-14', '2020-05-14 02:05:52', '1'),
(16, 'GATETE Patrick', 'p.gatete1@gmail.com', '$2y$08$uLJv7MUPU6gA9uc29e.iSeNNfykVfR8IaYmmTl1mLv0eF/ihNFRga', 'Admin', '2020-05-19', '2020-08-24 03:08:31', '0');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `village_code` int(11) NOT NULL,
  `village_name` varchar(50) NOT NULL,
  `cell_code` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`village_code`, `village_name`, `cell_code`, `status`) VALUES
(1, 'Mushongi', 1, 1),
(2, 'Kabuga', 1, 1),
(3, 'Kabingo', 1, 1),
(4, 'Gitwa', 1, 1),
(5, 'Buramba', 1, 1),
(6, 'Nyangoyi', 1, 1),
(7, 'Musenyi', 1, 1),
(8, 'Rubanda', 1, 1),
(9, 'Bukangano', 1, 1),
(10, 'Gihemba', 2, 1),
(11, 'Cyondo', 2, 1),
(12, 'Base', 2, 1),
(13, 'Karambi', 2, 1),
(14, 'Kabeza', 2, 1),
(15, 'Kiruli', 2, 1),
(16, 'Kabahama', 2, 1),
(17, 'Gitovu', 2, 1),
(18, 'Mutima', 2, 1),
(19, 'Gatete', 3, 1),
(20, 'Rugaragara', 3, 1),
(21, 'Mugenda II', 3, 1),
(22, 'Gisiza', 3, 1),
(23, 'Nyamugali', 3, 1),
(24, 'Gihora', 3, 1),
(25, 'Mugenda I', 3, 1),
(26, 'Bushyiga', 3, 1),
(27, 'Kirwa', 3, 1),
(28, 'Rugerero', 3, 1),
(44, 'Gasharu', 4, 1),
(45, 'Kiziba', 4, 1),
(46, 'Byerwa', 4, 1),
(47, 'Gashinge', 4, 1),
(48, 'Kizenga', 4, 1),
(49, 'Mukarange', 4, 1),
(50, 'Rwamiko', 4, 1),
(51, 'Gatete', 4, 1),
(52, 'Kanunga', 4, 1),
(53, 'Mitabi', 4, 1),
(54, 'Bugoboka', 4, 1),
(55, 'Mataba', 4, 1),
(56, 'Kantabo', 4, 1),
(57, 'Gasare', 4, 1),
(58, 'Cyinzuzi', 5, 1),
(69, 'Kiboha', 5, 1),
(70, 'Gasango', 5, 1),
(71, 'Mwenene', 5, 1),
(72, 'Mwite', 5, 1),
(73, 'Bugarama', 5, 1),
(74, 'Nyagisozi', 5, 1),
(75, 'Rubara', 5, 1),
(76, 'Ngange', 5, 1),
(77, 'Kivomo', 5, 1),
(78, 'Lyinzovu', 5, 1),
(79, 'Rusine', 5, 1),
(80, 'Karugaju', 6, 1),
(81, 'Kigarama', 6, 1),
(82, 'Karambi', 6, 1),
(83, 'Muduha', 6, 1),
(84, 'Gashinge', 6, 1),
(85, 'Runyinya', 6, 1),
(86, 'Muhondo', 6, 1),
(87, 'Kigabiro', 6, 1),
(88, 'Gacyamo', 6, 1),
(89, 'Karera', 6, 1),
(90, 'Kisigiro', 6, 1),
(91, 'Nyamiyaga', 6, 1),
(92, 'Kibiraro', 6, 1),
(93, 'Mayaga', 6, 1),
(104, 'Gatare', 8, 1),
(105, 'Muko', 8, 1),
(106, 'Mukoto', 8, 1),
(107, 'Buvumo', 8, 1),
(108, 'Marembo', 8, 1),
(109, 'Rusave', 8, 1),
(110, 'Buyogoma', 8, 1),
(111, 'Nyirangarama', 9, 1),
(112, 'Gifuba', 9, 1),
(113, 'Terambere', 9, 1),
(114, 'Buriro', 9, 1),
(115, 'Karambi', 9, 1),
(116, 'Byimana', 9, 1),
(117, 'Remera', 9, 1),
(118, 'Tare', 9, 1),
(119, 'Gatenga', 9, 1),
(120, 'Nyenyeri', 9, 1),
(121, 'Rugote', 10, 1),
(122, 'Cyili', 10, 1),
(123, 'Ngarama', 10, 1),
(124, 'Kigamba', 10, 1),
(125, 'Kivomo', 10, 1),
(126, 'Karambo', 10, 1),
(127, 'Gashiru', 10, 1),
(128, 'Buramira', 10, 1),
(129, 'Rwanzu', 11, 1),
(130, 'Rebero', 11, 1),
(131, 'Murambo', 11, 1),
(132, ' Muduha', 11, 1),
(133, 'Gitaba', 11, 1),
(134, 'Budaha', 7, 1),
(135, 'Buhande', 7, 1),
(136, 'Gitwa', 7, 1),
(137, 'Karambi', 7, 1),
(138, 'Remera', 7, 1),
(139, 'Ruhanga', 7, 1),
(140, 'Rulindo', 7, 1),
(141, 'Gakoma', 36, 1),
(142, 'Mataba', 36, 1),
(143, 'Murambo', 36, 1),
(144, 'Nyamwiza', 36, 1),
(145, 'Nyarubuye', 36, 1),
(146, 'Bunyana', 37, 1),
(147, 'Gatare', 37, 1),
(148, 'Gatenderi', 37, 1),
(149, 'Gipfundo', 37, 1),
(150, 'Gitabura', 37, 1),
(151, 'Shagasha', 37, 1),
(152, 'Cyasenga', 38, 1),
(153, 'Kajeneni', 38, 1),
(154, 'Karambi', 38, 1),
(155, 'Karambo', 38, 1),
(156, 'Kavumo', 38, 1),
(157, 'Kigarama', 38, 1),
(158, 'Gashana', 39, 1),
(159, 'Gatwa', 39, 1),
(160, 'Karambo', 39, 1),
(161, 'Kibanda', 39, 1),
(162, 'Rugarama', 39, 1),
(163, 'Gasave', 40, 1),
(164, 'Giko', 40, 1),
(165, 'Kankanga', 40, 1),
(166, 'Karambi', 40, 1),
(167, 'Ryanyirakayobe', 40, 1),
(168, 'Gitaba', 41, 1),
(169, 'Munini', 41, 1),
(170, 'Nyarubuye', 41, 1),
(171, 'Remera', 41, 1),
(172, 'Rutabo', 41, 1),
(173, 'Gahondo', 42, 1),
(174, 'Gikingo', 42, 1),
(175, 'Kagozi', 42, 1),
(176, 'Karambi', 42, 1),
(177, 'Kimagali', 42, 1),
(178, 'Kigarama', 43, 1),
(179, 'Kanyoni', 43, 1),
(180, 'Nyakabanga', 43, 1),
(181, 'Gatagara', 43, 1),
(182, 'Gihinga', 43, 1),
(183, 'Kamatongo', 43, 1),
(184, 'Kavumu', 43, 1),
(185, 'Rugaragara', 43, 1),
(186, 'Gihuke', 44, 1),
(187, 'Musenyi', 44, 1),
(188, 'Munini', 44, 1),
(189, 'Gasekabuye', 44, 1),
(190, 'Gaseke', 44, 1),
(191, 'Munoga', 44, 1),
(192, 'Gasiza', 44, 1),
(193, 'Kirambo', 44, 1),
(194, 'Marembo', 45, 1),
(195, 'Gitabage', 45, 1),
(196, 'Rusagara', 45, 1),
(197, 'Cyanya', 45, 1),
(198, 'Nyamugali', 45, 1),
(199, 'Karambo', 45, 1),
(200, 'Remera', 45, 1),
(201, 'Ngabitsinze', 45, 1),
(202, 'Kibogora', 46, 1),
(203, 'Kabengeri', 46, 1),
(204, 'Sove', 46, 1),
(205, 'Gitandi', 46, 1),
(206, 'Nyagatovu', 46, 1),
(207, 'Kibande', 46, 1),
(208, 'Karambo', 46, 1),
(209, 'Kidomo', 47, 1),
(210, 'Gahinga', 47, 1),
(211, 'Nganzo', 47, 1),
(212, 'Rugaragara', 47, 1),
(213, 'Rusayo', 47, 1),
(214, 'Kibuye', 47, 1),
(215, 'Buyaga', 47, 1),
(216, 'Murambo', 47, 1),
(217, 'Kabanda', 48, 1),
(218, 'Karambi', 48, 1),
(219, 'Kirwa', 48, 1),
(220, 'Kivumu', 48, 1),
(221, 'Nturo', 48, 1),
(222, 'Nyabisasa', 48, 1),
(223, 'Sakara', 48, 1),
(303, 'Bunahi', 69, 1),
(304, 'Gisekuru', 69, 1),
(305, 'Ndorandi', 69, 1),
(306, 'Barayi', 69, 1),
(307, 'Kinihira', 69, 1),
(308, 'Akimiyove', 69, 1),
(309, 'Karambi', 70, 1),
(310, 'Ndusu', 70, 1),
(311, 'Rugundu', 70, 1),
(312, 'Kabuga', 70, 1),
(313, 'Kirwa', 70, 1),
(314, 'Taba', 70, 1),
(315, 'Buhunde', 47, 1),
(316, 'Kiyebe', 47, 1),
(317, 'Gatare', 47, 1),
(318, 'Kigali', 47, 1),
(319, 'Cyogo', 47, 1),
(320, 'Magezi', 72, 1),
(321, 'Buhita', 72, 1),
(322, 'Gatembe', 72, 1),
(323, 'Bwishya', 72, 1),
(324, 'Mutoyi', 72, 1),
(325, 'Ntunguru', 72, 1),
(326, 'Gakenke', 73, 1),
(327, 'Gatete', 73, 1),
(328, 'Gatovu', 73, 1),
(329, 'Kabeza', 73, 1),
(330, 'Karambi', 73, 1),
(331, 'Songa', 73, 1),
(332, 'Amahoro', 73, 1),
(333, 'Cyasuli', 74, 1),
(334, 'Kibanda', 74, 1),
(335, 'Nyamiyaga', 74, 1),
(336, 'Rugarama', 74, 1),
(337, 'Rusongati', 74, 1),
(338, 'Rusumo', 74, 1),
(339, 'Gaseke', 75, 1),
(340, 'Gasharu', 75, 1),
(341, 'Ntantabo', 75, 1),
(342, 'Runyinya', 75, 1),
(383, 'Rwintare', 75, 1),
(384, 'Ruberano', 75, 1),
(385, 'Ndago', 76, 1),
(386, 'Kabere', 76, 1),
(387, 'Rwili', 76, 1),
(388, 'Gako', 77, 1),
(389, 'Kubuye', 77, 1),
(390, 'Kirenge', 77, 1),
(391, 'Murambi', 77, 1),
(392, 'Nyakarekare', 77, 1),
(393, 'Rutabo', 77, 1),
(394, 'Akamanama', 78, 1),
(395, 'Gishinge', 78, 1),
(396, 'Karambi', 78, 1),
(397, 'Kibingwe', 78, 1),
(398, 'Mugomero', 78, 1),
(399, 'Ryarubuguza', 78, 1),
(400, 'Karambi', 79, 1),
(401, 'Kanunga', 79, 1),
(402, 'Kigarama', 79, 1),
(403, 'Nyakizu', 79, 1),
(404, 'Nyakibande', 79, 1),
(405, 'Gisiza', 79, 1),
(406, 'Rubaya', 79, 1),
(407, 'Rusine', 80, 1),
(408, 'Nyabinyana', 80, 1),
(409, 'Agasharu', 80, 1),
(410, 'Amataba', 80, 1),
(411, 'Umubuga', 80, 1),
(412, 'Mutagata', 80, 1),
(413, 'Musega', 81, 1),
(414, 'Nyarurembo', 81, 1),
(415, 'Gasenga', 81, 1),
(416, 'Rebero', 81, 1),
(417, 'Nyakibungo', 75, 1),
(418, 'Gacyamo', 75, 1),
(419, 'Marenge', 75, 1),
(420, 'Rukurazo', 75, 1),
(421, 'Kigomwa', 83, 1),
(422, 'Kabeza', 83, 1),
(423, 'Marembo', 83, 1),
(424, 'Kabuga', 83, 1),
(425, 'Rusenyi', 83, 1),
(426, 'Gasovu', 84, 1),
(427, 'Gisha', 84, 1),
(428, 'Kigombe', 84, 1),
(429, 'Kibungo', 84, 1),
(430, 'Muhora', 84, 1),
(431, 'Nyakabembe', 84, 1),
(432, 'Yaramba', 84, 1),
(433, 'Buraro', 85, 1),
(434, 'Buyanja', 85, 1),
(435, 'Rwambogo', 85, 1),
(436, 'Bukongi', 85, 1),
(437, 'Nyakabuye', 85, 1),
(438, 'Gitaba', 85, 1),
(439, 'Nkurura', 85, 1),
(440, 'Gakoma', 86, 1),
(441, 'Gitaba', 86, 1),
(442, 'Munini', 86, 1),
(443, 'Rurenge', 86, 1),
(444, 'Rutonde', 86, 1),
(445, 'Gicumbi', 86, 1),
(446, 'Ruhondo', 86, 1),
(447, 'Karehe', 86, 1),
(448, 'Gasama', 87, 1),
(449, 'Bukoro', 87, 1),
(450, 'Buhira', 87, 1),
(451, 'Gihonga', 87, 1),
(452, 'Kinini/Mbobo', 87, 1),
(453, 'Karindi', 87, 1),
(454, 'Kibaya', 87, 1),
(455, 'Kibamba', 87, 1),
(456, 'Ruhanya', 87, 1),
(457, 'Rwambogo', 87, 1),
(458, 'Kabuga', 93, 1),
(459, 'Kabeza', 93, 1),
(460, 'Ntyaba', 93, 1),
(461, 'Rurama', 93, 1),
(462, 'Mutabo', 93, 1),
(463, 'Iraro', 93, 1),
(464, 'Munyinya', 93, 1),
(465, 'Ruri', 94, 1),
(466, 'Nyarurembo', 94, 1),
(467, 'Kigarama', 94, 1),
(468, 'Amahoro', 94, 1),
(469, 'Gahama', 94, 1),
(470, 'Buliza', 94, 1),
(471, 'Gahinge', 94, 1),
(472, 'Kabeza', 95, 1),
(473, 'Akarambi', 95, 1),
(474, 'Gisiza', 95, 1),
(475, 'Mataba', 95, 1),
(476, 'Kigarama', 95, 1),
(477, 'Gatare', 95, 1),
(478, 'Karambo', 95, 1),
(479, 'Karwa', 96, 1),
(480, 'Gashubi', 96, 1),
(481, 'Karambo', 96, 1),
(482, 'Nyagisozi', 96, 1),
(483, 'Mayange', 96, 1),
(484, 'Ruhunga', 96, 1),
(485, 'Rebero', 96, 1),
(486, 'Taba', 96, 1),
(487, 'Gatete', 79, 1),
(488, 'Kiruli', 79, 1),
(489, 'Nyabuko', 79, 1),
(490, 'Kirambo', 79, 1),
(491, 'Kagarama', 79, 1),
(492, 'Rubona', 79, 1),
(493, 'Kagwa', 98, 1),
(494, 'Karambi', 98, 1),
(495, 'Nyakagezi', 98, 1),
(496, 'Butare', 98, 1),
(497, 'Marebe', 98, 1),
(498, 'Jyambere', 98, 1),
(499, 'Nyakibyeyi', 99, 1),
(500, 'Rukoma', 99, 1),
(501, 'Mwishya', 99, 1),
(502, 'Riryi', 99, 1),
(503, 'Sakara', 99, 1),
(504, 'Kigina', 99, 1),
(505, 'Kiboha', 99, 1),
(506, 'Cyabasigi', 99, 1),
(507, 'Rusizi', 100, 1),
(508, 'Gaseke', 100, 1),
(509, 'Kirungu', 100, 1),
(510, 'Munyanze', 100, 1),
(511, 'Ngaru', 100, 1),
(512, 'Nyaruvumu', 100, 1),
(513, 'Rushayu', 100, 1),
(514, 'Rushubi', 100, 1),
(515, 'Nyagasozi', 101, 1),
(516, 'Nyarurama', 101, 1),
(517, 'Gatobotobo', 101, 1),
(518, 'Kabirizi', 101, 1),
(519, 'Nombe', 101, 1),
(520, 'Nyamurema', 101, 1),
(521, 'Kivubwe', 101, 1),
(522, 'Kiyanza I', 101, 1),
(523, 'Nyakambu', 102, 1),
(524, 'Rusana', 102, 1),
(525, 'Gitambi', 102, 1),
(526, 'Kazi', 102, 1),
(527, 'Cyamutara', 102, 1),
(528, 'Rukore', 102, 1),
(529, 'Nyarubuye', 102, 1),
(530, 'Bikamba', 102, 1),
(531, 'Kamuhororo', 103, 1),
(532, 'Burambi', 103, 1),
(533, 'Rugogwe', 103, 1),
(534, 'Kayenzi', 103, 1),
(535, 'Karera', 103, 1),
(536, 'Kibeho', 103, 1),
(537, 'Gitwa', 103, 1),
(538, 'Rusekabuye', 103, 1),
(539, 'Musare', 104, 1),
(540, 'Kibare', 104, 1),
(541, 'Mujebe', 104, 1),
(542, 'Nyarusebeya', 104, 1),
(543, 'Ruhanga', 104, 1),
(544, 'Mwana', 105, 1),
(545, 'Kavumo', 106, 1),
(546, 'Bushyana', 106, 1),
(547, 'Kadendegeri', 106, 1),
(548, 'Gatwa', 106, 1),
(549, 'Gatiba', 106, 1),
(550, 'Kabgayi', 107, 1),
(551, 'Kamiyove', 107, 1),
(552, 'Murwa', 107, 1),
(703, 'Kivomo', 107, 1),
(704, 'Rukingu', 107, 1),
(705, 'Kabingo', 107, 1),
(706, 'Nyenyeri', 107, 1),
(707, 'Shyondwe', 107, 1),
(708, 'Kigarama', 108, 1),
(709, 'Kinini', 108, 1),
(710, 'Ntaruka', 108, 1),
(711, 'Rebero', 108, 1),
(712, 'Bitare', 5, 1),
(713, 'Gahondo', 5, 1),
(714, 'Karambi', 5, 1),
(715, 'Karenge', 5, 1),
(716, 'Kingazi', 5, 1),
(717, 'Nyakarama', 5, 1),
(718, 'Gifumba', 110, 1),
(719, 'Kabuye', 110, 1),
(720, 'Kabunigu', 110, 1),
(721, 'Nkanga', 110, 1),
(722, 'Ntakara', 110, 1),
(733, 'Rwintare', 110, 1),
(734, 'Rutonde', 111, 1),
(735, 'Bugarura', 111, 1),
(736, 'Ngendo', 111, 1),
(737, 'Nyabisindu', 111, 1),
(738, 'Rweya', 111, 1),
(739, 'Mwagiro', 111, 1),
(740, 'Gisiza', 112, 1),
(741, 'Kigarama', 112, 1),
(742, 'Kabaraza', 112, 1),
(743, 'Kiziranyenzi', 112, 1),
(744, 'Nyarushinya', 112, 1),
(745, 'Nyakaruri', 112, 1),
(746, 'Gatimba', 112, 1),
(747, 'Gatwa', 112, 1),
(748, 'Kabagabaga', 113, 1),
(749, 'Rimwe', 113, 1),
(750, 'Rugendabari', 113, 1),
(751, 'Gaseke', 113, 1),
(752, 'Nyamugali', 113, 1),
(753, 'Kabakene', 113, 1),
(754, 'Mukumba', 114, 1),
(755, 'Karama', 114, 1),
(756, 'Kiviri', 114, 1),
(757, 'Kirurumo', 114, 1),
(758, 'Nyabubare', 114, 1),
(759, 'Kagunda', 114, 1),
(760, 'Ruhanga', 114, 1),
(761, 'Kavoma', 114, 1),
(762, 'Kavoma', 114, 1),
(763, 'Cyikera', 114, 1),
(764, 'Muvumu', 114, 1),
(765, 'Nyabitare', 115, 1),
(766, 'Gishyita', 115, 1),
(767, 'Kigali', 115, 1),
(768, 'Nyarusange', 115, 1),
(769, 'Ngona', 115, 1),
(770, 'Nyarunyinya', 115, 1),
(771, 'Rwahi', 115, 1),
(772, 'Bwimo', 115, 1),
(773, 'Taba', 116, 1),
(774, 'Karambi', 116, 1),
(775, 'Gatsinde', 117, 1),
(776, 'Gatare', 117, 1),
(777, 'Rusura', 117, 1),
(778, 'Rugando', 117, 1),
(779, 'Murambi', 117, 1),
(780, 'Gihanga', 117, 1),
(781, 'Bukiga', 117, 1),
(782, 'Karambi', 118, 1),
(783, 'Gaseke', 118, 1),
(784, 'Gashoro', 118, 1),
(785, 'Kigarma', 118, 1),
(786, 'Rukore', 118, 1),
(787, 'Nkinda', 5, 1),
(788, 'Ruvumba', 5, 1),
(789, 'Nyirambuga', 5, 1),
(790, 'Kamuragi', 5, 1),
(791, 'Nyirataba', 5, 1),
(792, 'Mwili', 5, 1),
(793, 'Munyinya', 120, 1),
(794, 'Rushaki', 120, 1),
(795, 'Mafene', 120, 1),
(796, 'Kabuga', 120, 1),
(797, 'Kagusa', 120, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cells`
--
ALTER TABLE `cells`
  ADD PRIMARY KEY (`cell_code`),
  ADD KEY `sector_code` (`sector_code`);

--
-- Indexes for table `cows`
--
ALTER TABLE `cows`
  ADD PRIMARY KEY (`cow_id`),
  ADD KEY `don_id` (`don_id`),
  ADD KEY `don_id_2` (`don_id`);

--
-- Indexes for table `doners`
--
ALTER TABLE `doners`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id_no`),
  ADD UNIQUE KEY `id_no` (`id_no`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`sector_code`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `cow_id` (`cow_id`),
  ADD UNIQUE KEY `nat_id_no` (`nat_id_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`village_code`),
  ADD KEY `cell_code` (`cell_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cells`
--
ALTER TABLE `cells`
  MODIFY `cell_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `cows`
--
ALTER TABLE `cows`
  MODIFY `cow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `doners`
--
ALTER TABLE `doners`
  MODIFY `don_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `sector_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `village_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=798;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cells`
--
ALTER TABLE `cells`
  ADD CONSTRAINT `cells_ibfk_1` FOREIGN KEY (`sector_code`) REFERENCES `sectors` (`sector_code`);

--
-- Constraints for table `cows`
--
ALTER TABLE `cows`
  ADD CONSTRAINT `cows_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `doners` (`don_id`) ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`cow_id`) REFERENCES `cows` (`cow_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`nat_id_no`) REFERENCES `families` (`id_no`) ON UPDATE CASCADE;

--
-- Constraints for table `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_ibfk_1` FOREIGN KEY (`cell_code`) REFERENCES `cells` (`cell_code`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
