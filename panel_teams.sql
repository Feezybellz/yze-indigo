-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2022 at 04:28 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-34+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demoGlidex`
--

-- --------------------------------------------------------

--
-- Table structure for table `panel_teams`
--

CREATE TABLE `panel_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `input_title` varchar(225) NOT NULL,
  `input_linkedIn` varchar(225) NOT NULL,
  `input_facebook` varchar(225) NOT NULL,
  `input_instagram` varchar(225) NOT NULL,
  `input_twitter` varchar(225) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_teams`
--

INSERT INTO `panel_teams` (`id`, `hash_id`, `input_name`, `input_title`, `input_linkedIn`, `input_facebook`, `input_instagram`, `input_twitter`, `image_1`, `visibility`, `date_created`, `time_created`) VALUES
(1, '2345tyuhygfdsae4567654', 'Boluwatife Matt Oladejo', 'CEO', 'https://www.linkedin.com/in/boluwatife-matt-oladejo-945bb7b6/', '', '', '', 'https://glidexconsulting.com/uploads/165287005893238filename.jpg', 'show', '2020-09-09', '09:11:24'),
(2, '65gfr765hgf765hgf', 'Stephen Smith', 'Marketing Director', 'https://www.linkedin.com/in/stephen-a-b4762a100/', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'https://glidexconsulting.com/uploads/165295975029546filename.jpg', 'show', '2019-09-09', '11:33:49'),
(3, '34yfds3456juhgf345', 'Joan Akinbinu', 'Director', 'https://www.linkedin.com/in/joan-a-13b630227/', '', 'http://instagram.com/akinbinujoan', '', 'https://glidexconsulting.com/uploads/165287067641166filename.jpg', 'show', '2020-05-22', '04:15:09'),
(4, '234jhbgv2345jhgfw345hgfd345', 'Segun Cadmus', 'Lead Consultant', 'http://linkedin.com', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', 'https://glidexconsulting.com/uploads/165287110763780filename.jpg', 'show', '2020-06-17', '12:52:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_teams`
--
ALTER TABLE `panel_teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_teams`
--
ALTER TABLE `panel_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
