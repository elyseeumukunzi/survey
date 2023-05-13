-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 01:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(30) NOT NULL,
  `survey_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `answer` text NOT NULL,
  `question_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `survey_id`, `user_id`, `answer`, `question_id`, `date_created`) VALUES
(1, 1, 2, 'Sample Only', 4, '2020-11-10 14:46:07'),
(2, 1, 2, '[JNmhW],[zZpTE]', 2, '2020-11-10 14:46:07'),
(3, 1, 2, 'dAWTD', 1, '2020-11-10 14:46:07'),
(4, 1, 3, 'the answer here in text field', 4, '2020-11-10 15:59:43'),
(5, 1, 3, '[qCMGO],[JNmhW]', 2, '2020-11-10 15:59:43'),
(6, 1, 3, 'esNuP', 1, '2020-11-10 15:59:43'),
(7, 6, 1, 'Array', 7, '2023-05-11 17:43:01'),
(8, 6, 1, 'Array', 7, '2023-05-11 17:44:30'),
(9, 6, 1, '7', 7, '2023-05-11 17:44:57'),
(10, 6, 1, '7', 7, '2023-05-11 17:45:21'),
(11, 6, 1, '6', 6, '2023-05-11 17:46:44'),
(12, 6, 1, '6', 6, '2023-05-11 17:47:04'),
(13, 6, 1, 'pNIAe', 7, '2023-05-11 20:34:20'),
(14, 6, 1, 'eoDHI', 8, '2023-05-11 20:50:16'),
(15, 6, 1, '6', 6, '2023-05-11 20:50:39'),
(16, 6, 1, 'Array', 6, '2023-05-11 20:51:21'),
(17, 6, 1, 'Array', 6, '2023-05-11 20:51:59'),
(18, 6, 1, 'Array', 6, '2023-05-11 20:52:52'),
(19, 6, 1, 'Array', 6, '2023-05-11 20:53:30'),
(20, 6, 1, 'Array', 6, '2023-05-11 20:54:53'),
(21, 6, 1, 'Array', 6, '2023-05-11 20:55:10'),
(22, 6, 1, 'KvabxiyECU,', 6, '2023-05-11 20:59:43'),
(23, 6, 1, 'Kvabx,iyECU', 6, '2023-05-11 21:00:14'),
(24, 6, 1, 'iyECU,eGPkv,OmEgo', 6, '2023-05-11 21:01:00'),
(25, 6, 1, 'OmEgo', 6, '2023-05-11 21:09:20'),
(26, 6, 1, 'hsaghghsa', 4, '2023-05-11 21:10:45'),
(27, 6, 1, 'ccc', 4, '2023-05-11 21:17:44'),
(28, 6, 1, 'qBsiw', 7, '2023-05-11 21:18:20'),
(29, 6, 1, 'pNIAe', 7, '2023-05-11 21:22:04'),
(30, 6, 1, 'pNIAe', 7, '2023-05-11 21:22:12'),
(31, 6, 1, 'qBsiw', 7, '2023-05-11 21:22:34'),
(32, 6, 1, 'qBsiw', 7, '2023-05-11 21:22:56'),
(33, 6, 1, 'qBsiw', 7, '2023-05-11 21:22:59'),
(34, 6, 1, 'qBsiw', 7, '2023-05-11 21:23:10'),
(35, 6, 1, 'qBsiw', 7, '2023-05-11 21:23:21'),
(36, 6, 1, 'qBsiw', 7, '2023-05-11 21:23:23'),
(37, 6, 1, 'qBsiw', 7, '2023-05-11 21:23:30'),
(38, 6, 1, 'pNIAe', 7, '2023-05-11 21:24:01'),
(39, 6, 1, 'pNIAe', 7, '2023-05-11 21:24:15'),
(40, 6, 1, 'qBsiw', 7, '2023-05-11 21:24:41'),
(41, 6, 1, 'RElci', 8, '2023-05-11 21:24:49'),
(42, 6, 1, 'iyECU,eGPkv', 6, '2023-05-11 21:24:56'),
(43, 6, 1, 'iyECU,eGPkv', 6, '2023-05-11 21:25:24'),
(44, 6, 1, 'jdjdjcmajc', 4, '2023-05-11 21:25:32'),
(45, 3, 6, 'FwRnP', 5, '2023-05-13 11:19:00'),
(46, 6, 6, 'hh', 4, '2023-05-13 11:20:57'),
(47, 6, 6, 'tGYhg', 8, '2023-05-13 11:21:02'),
(48, 6, 6, 'qBsiw', 7, '2023-05-13 11:21:10'),
(49, 6, 6, 'Kvabx,eGPkv', 6, '2023-05-13 11:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `possible_answers`
--

CREATE TABLE `possible_answers` (
  `id` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `options` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `question` text NOT NULL,
  `frm_option` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `order_by` int(11) NOT NULL,
  `survey_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `frm_option`, `type`, `order_by`, `survey_id`, `date_created`) VALUES
(1, 'Sample Survey Question using Radio Button', '{\"cKWLY\":\"Option 1\",\"esNuP\":\"Option 2\",\"dAWTD\":\"Option 3\",\"eZCpf\":\"Option 4\"}', 'radio_opt', 3, 1, '2020-11-10 12:04:46'),
(2, 'Question for Checkboxes', '{\"qCMGO\":\"Checkbox label 1\",\"JNmhW\":\"Checkbox label 2\",\"zZpTE\":\"Checkbox label 3\",\"dOeJi\":\"Checkbox label 4\"}', 'check_opt', 2, 1, '2020-11-10 12:25:13'),
(4, 'Sample question for the text field', '', 'textfield_s', 1, 6, '2020-11-10 13:34:21'),
(5, 'when have you started working with us?!', '{\"YeXJN\":\"0-3 years\",\"Uqgph\":\"3-5 years\",\"jgPRH\":\"5-10 years\",\"FwRnP\":\"> 10\"}', 'radio_opt', 1, 3, '2023-04-22 10:42:58'),
(6, 'do you feel me?', '{\"Kvabx\":\"yes\",\"iyECU\":\"no\",\"eGPkv\":\"not at all\",\"OmEgo\":\"never\"}', 'check_opt', 4, 6, '2023-04-25 10:49:51'),
(7, 'What is the experience you had since you started working with ERI-wanda', '{\"pNIAe\":\"yes\",\"qBsiw\":\"no\"}', 'radio_opt', 3, 6, '2023-05-07 22:49:38'),
(8, 'How have you held about ERI-rwanda', '{\"zaRVO\":\"From a friend\",\"tGYhg\":\"From social medias\",\"HgVwG\":\"From bussiness partners\"}', 'radio_opt', 2, 6, '2023-05-07 22:51:04'),
(9, 'What service do you get from Eri', '{\"Vjobd\":\"Delivery \",\"qjriI\":\"Transportation\",\"doAJa\":\"Merchant\"}', 'check_opt', 0, 8, '2023-05-10 00:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `question_id` int(10) NOT NULL,
  `response` varchar(5000) NOT NULL,
  `session_token` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(100) NOT NULL,
  `value` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`) VALUES
('description', 'Default survey description'),
('email', 'elyseeumukunzi@gmail.com'),
('name', 'Eri  Rwanda customer survey');

-- --------------------------------------------------------

--
-- Table structure for table `survey_set`
--

CREATE TABLE `survey_set` (
  `id` int(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `surveylink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_set`
--

INSERT INTO `survey_set` (`id`, `title`, `description`, `user_id`, `start_date`, `end_date`, `date_created`, `surveylink`) VALUES
(1, 'Sample Survey', 'Sample Only', 0, '2020-11-06', '2020-12-10', '2020-11-10 09:57:47', 'ERI/SURVEY001'),
(3, 'NYARUGENGE CUSTOMER SATISFACTION SURVEY', 'Try to answer all of the questions!', 0, '2023-04-22', '2023-05-29', '2020-11-10 14:12:33', 'ERI/SURVEY003'),
(5, 'Sample Survey 101', 'Sample only', 0, '2020-10-01', '2020-11-23', '2020-11-10 14:14:29', 'ERI/SURVEY005'),
(6, 'New survey with a link', 'No more description, this survey is only for testing', 1, '2023-05-10', '2023-05-16', '2023-05-07 13:26:23', 'ERI/SURVEY006'),
(7, 'Customer wishlist questionaire', 'New survey that request basic information of how people get to know about ERI RWANDA ltd,', 1, '2023-05-10', '2023-05-10', '2023-05-08 14:33:30', 'ERI/SURVEY007'),
(8, 'Customer surveilance', 'Ths is to collect information frmm our customers', 1, '2023-05-09', '2023-05-11', '2023-05-10 00:50:41', 'ERI/SURVEY008'),
(9, 'Transport And delivery repporting ', 'Collecting comments and information about customer preference in transport department', 1, '2023-05-10', '2023-05-11', '2023-05-10 00:57:43', 'ERI/SURVEY009'),
(10, 'Service Analysis ', 'How do people react to our services', 1, '2023-05-10', '2023-05-18', '2023-05-10 01:02:12', 'ERI/SURVEY0010');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `tin` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2 = Staff, 3= Subscriber',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyname`, `tin`, `contact`, `address`, `email`, `password`, `type`, `date_created`) VALUES
(1, 'kelly', '', '+123456789', 'Sample address', 'kelly@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2020-11-10 08:43:06'),
(2, 'John', 'Smith', '8747808787', 'Sample Address', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 3, '2020-11-10 09:16:53'),
(4, 'Mike', 'Williams', '8747808787', 'Sample', 'mwilliams@sample.com', '3cc93e9a6741d8b40460457139cf8ced', 3, '2020-11-10 16:21:02'),
(5, 'david', 'ruti', '+250780887349', 'Muhanga-Gahogo', 'david@gmail.com', '202cb962ac59075b964b07152d234b70', 3, '2023-04-22 10:35:07'),
(6, 'Unlimited National Activities', '11298918384', '0789817969', 'Rwanda\r\nKigali\r\nKicukiro', 'unlimited@gmail.com', '202cb962ac59075b964b07152d234b70', 3, '2023-05-11 21:59:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `possible_answers`
--
ALTER TABLE `possible_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `survey_set`
--
ALTER TABLE `survey_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `possible_answers`
--
ALTER TABLE `possible_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_set`
--
ALTER TABLE `survey_set`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
