-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2022 at 10:32 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-34+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition_course_list`
--

CREATE TABLE `addition_course_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_title` varchar(255) NOT NULL,
  `tb` varchar(225) DEFAULT NULL,
  `tb_link` varchar(225) DEFAULT NULL,
  `hash_id` varchar(225) NOT NULL,
  `visibility` varchar(225) NOT NULL,
  `text_description` text NOT NULL,
  `text_course_embed_code` text NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addition_course_list`
--

INSERT INTO `addition_course_list` (`id`, `input_title`, `tb`, `tb_link`, `hash_id`, `visibility`, `text_description`, `text_course_embed_code`, `date_created`, `time_created`) VALUES
(11, 'Episode 1', 'Demo Content', '1585597034_97465', '1585597844_24842', 'show', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p><a href=\"https://admin.admc.dev/dummy.png\">Download File</a></p><p>&nbsp;</p><p>&nbsp;</p>', '', '2020-03-30', '19:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `panel_course`
--

CREATE TABLE `panel_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `add_course_list` varchar(225) DEFAULT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `input_price` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `text_body` text NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_course`
--

INSERT INTO `panel_course` (`id`, `input_name`, `add_course_list`, `date_created`, `time_created`, `image_1`, `input_price`, `hash_id`, `text_body`, `created_by`) VALUES
(12, 'Business Hacks: Managing Remote Teams', NULL, '2020-04-02', '20:12:28', 'https://thinkingschoolnigeria.org/uploads/158586103224965filename.jpg', 'FREE', '1585858348_19098', '<p><strong>Business Hack: Managing Remote Teams</strong></p><p>Small businesses will be greatly affected by the outbreak of<i> #COVID19</i> but it could be a turning point in their businesses.</p><p>The novel virus puts the world in a spectrum that we are not used to and this means processes and procedures would be affected.</p><p>This could be the turning point for businesses globally if they reposition their systems to respond appropriately to the challenge.</p><p>In Managing Remote Teams, we have shown comprehensively how business owners can maximize scarce resources in this period â€“ to reduce overhead cost and effectively solve their clientsâ€™ needs while staying safe.</p>', '158584226681339y9mo4i846aba'),
(13, 'Investment Masterclass', NULL, '2020-04-11', '08:48:05', 'https://thinkingschoolnigeria.org/uploads/158659488540152filename.jpg', 'FREE', '1586594885_79090', '<p>Investment is not usually how much you have saved, it is how much you have put away to generate more revenue for you.</p><p>&nbsp;</p><p>In this material, you will find answers to all your questions regarding investment and investment opportunities.</p>', '158584226681339y9mo4i846aba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addition_course_list`
--
ALTER TABLE `addition_course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_course`
--
ALTER TABLE `panel_course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addition_course_list`
--
ALTER TABLE `addition_course_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `panel_course`
--
ALTER TABLE `panel_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
