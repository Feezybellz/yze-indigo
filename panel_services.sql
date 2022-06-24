-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2022 at 06:09 PM
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
-- Table structure for table `panel_services`
--

CREATE TABLE `panel_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_title` varchar(255) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `text_description` text NOT NULL,
  `visibility` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_services`
--

INSERT INTO `panel_services` (`id`, `hash_id`, `input_title`, `image_1`, `text_description`, `visibility`, `date_created`, `time_created`) VALUES
(1, '23trdes45678ghjr74', 'Business Management And Training', 'https://demo1.mckodev.com.ng/uploads/162483019781100filename.jpg', '<p>Ever wondered why 95% of every SME startup fails in their first 5 years of establishment? it boils down to the business management techniques and strategies they have chosen to implement. The high mortality rate in the SME and MSME sector is majorly caused by inadequate business management skills which include poor marketing strategies, poor business coordination, and inability to follow proper business planning, among others.</p><p>We are a management consulting firm with a proven track record of successful implementation of workable and scalable self-sufficient business management techniques. with several experienced consultants, that specializes in helping businesses thrive in any and all condition or environment, we are prepared and ready to provide you with expert business management services to ensure profitability and sustainability.&nbsp;</p>', 'show', '2020-03-18', '11:00:00'),
(2, '3456sdfgh456cvbd', 'Account Auditing And Cost control', 'https://demo1.mckodev.com.ng/uploads/162483032964731filename.jpg', '<p>Sustainability is every business owner\'s dream. The ability to sustain operations and daily activities lies majorly In how the company\'s funds are being utilized and accounted for.</p><p>We are equipped with professional accounting experts to help your business maintain steady momentum through various cost control measures to boose profitability, and top-notch account monitoring to ensure long-term sustainability.</p>', 'show', '2020-06-17', '11:33:49'),
(3, '23trdes45678gh54rdr74', 'Fundraising', 'https://demo1.mckodev.com.ng/uploads/162483040057522filename.jpg', '<p>Business financing is a major driving force behind the success of any enterprise. Glidex Consulting provides expert fund sourcing service, which includes access to loans, venture capital, angel investors, and private equity funding.</p><p>We ensure that businesses are provided with the best offer possible in little or no time.&nbsp;</p>', 'show', '2020-03-18', '11:00:00'),
(4, '3456sdfgh43343f56cvbd', 'Human Resource Management', 'assets/img/services-img-4.jpg\"', '<p>The staff and management of any organization are majorly responsible for her success. We help in recruiting the best-fitted employees for open positions, and we help manage and train your employees to incorporate a healthy and better work lifestyle.<br>&nbsp;</p>', 'show', '2020-06-17', '11:33:49'),
(5, '23trdejhdf6636hjr74', 'Project Management', 'https://demo1.mckodev.com.ng/uploads/162483055683052filename.jpg', '<p>Planning, organizing, and executing are integral to every project. The entire project lifecycle if not properly handled, regardless of how beautiful the idea is, will fail.</p><p>We help you plan and organize your resources to complete a specific task, project, or event. We are at the forefront of professional planning and execution In all project spheres.</p>', 'show', '2020-03-18', '11:00:00'),
(6, '34564567ghwdcvbd', 'IT Consulting', 'https://demo1.mckodev.com.ng/uploads/162483067743119filename.jpg', '<p>The world is on the horizon of technological advancement. Businesses and several enterprises are integrating technology to make work seamless, faster transaction processing, easy computing and accounting, effortless marketing, and easy tracking.</p><p>We help clients assess different technology-based strategies and, thereby, align these technology strategies with their business to boost productivity and achieve the company\'s objectives.</p>', 'show', '2020-06-17', '11:33:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_services`
--
ALTER TABLE `panel_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_services`
--
ALTER TABLE `panel_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
