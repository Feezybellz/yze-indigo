-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2022 at 02:58 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `panel_blog`
--

CREATE TABLE `panel_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_title` varchar(255) NOT NULL,
  `input_address` varchar(225) DEFAULT NULL,
  `text_body` text NOT NULL,
  `select_blog_category` varchar(50) NOT NULL,
  `posted_by` varchar(225) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `visibility` varchar(50) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_blog`
--

INSERT INTO `panel_blog` (`id`, `hash_id`, `input_title`, `input_address`, `text_body`, `select_blog_category`, `posted_by`, `image_1`, `visibility`, `date_created`, `time_created`) VALUES
(1, '456dfgh4567fgh3', 'How to Access Business loans and Grants in Nigeria.', '', '<p>Your business idea remains an idea till you get financed.</p><p>Many ideas couldn\'t see daylight because of a lack of funds. So let\'s show you how you can access business loans and grants in Nigeria!<br>Important Notice; the only difference between a loan and a grant is that the former has to be repaid while the latter is what you can call \'free money.</p><p>While there aren\'t many business grants or loans in Nigeria, there are a few concrete ones that with the right energy you could access.</p><p>Today, we will look at grants and some other time, loans.</p><p>(If you haven\'t followed us on our social media platforms, kindly do, also turn on post notification so you don\'t miss out)</p><p><strong>1. TONY ELUMELU FOUNDATION:</strong> About 8,000 businesses have benefited from Mr. Tony Elumelu\'s foundation. This foundation started in 2015 and every year since then a selected number of entrepreneurs are chosen after evaluation and training to receive a $5,000 seed capital. &nbsp;Visit @tonyelumelufoundation to know more. #TEF2022</p><p>2. <strong>Africaâ€™s Young Entrepreneur Empowerment Nigeria (AYEEN):</strong> Are you a young entrepreneur with a dynamic business idea? Well, you should take a look at this. This is a yearly grant to empower NIGERIAN entrepreneurs. NB: You must be a NIGERIAN that resides in the country to be eligible. Visit https://ayeonline.org/join/ to register.</p><p>3. <strong>African Women Innovation &amp; Entrepreneurship:</strong> This is solely for African women with scalable business ideas. Interested participants should visit https://awief.awardsplatform.com/ for more information</p><p>4. <strong>Bank of Industry (BOI):</strong> This is not a typical grant but it\'s what you can call a \'soft loan\' from the federal government to empower Entrepreneurs within the country. To qualify for this program, you must have a registered business. To apply, visit any BOI branch near you to submit an application.</p><p>Follow us on all Social Media Platforms.<br>@glidexconsulting</p>', '1', 'Admin', 'https://glidexconsulting.com/uploads/165286770743743filename.jpg', 'show', '2020-06-17', '04:15:09'),
(2, '567fghj39876d33rf', 'Lessons from  MR BIGGS', '', '<p>Unknown to many, Mr. Biggs initially started with coffee shops in the 1960s. A decade later, in 1973, those coffee shops were rebranded as Kingsway rendezvous and in 1986 as Mr. Biggs.&nbsp;</p><p>Technically, Mr. Biggâ€™s was founded 49 years ago. It stayed the talk of the town for many decades as a rapidly growing fast-food restaurant in Nigeria. Mr. Biggs was one of the first Nigerian companies to sell franchises to investors, hence the massive growth that spread across decades.</p><p><strong>How did </strong><i><strong>MR BIGGS </strong></i><strong>become so â€˜smallâ€™? What did they do wrong, if any? What can they do to reclaim their lost glory?</strong></p><p>There is a major economic explanation as to why consumers would neglect a long-existing brand/establishment for new ones, and in laymanâ€™s language, it is the lack of satisfaction. Recent fast-food restaurants like Tasty fried chicken (TFC), KFC, The Place, Chicken Republic, and sweet sensation, among others, replaced the former highly prestigious Mr. Biggs. What did they do? They only capitalized on the weaknesses of Mr. Biggs which was majorly customer dissatisfaction.&nbsp;</p><p>The management of Mr. Biggs, at one time, no longer paid attention to what customers were saying about them. Reasons are unknown but if that were to be the case, one would easily point to internal conflict or status satisfaction as the major reason for such negligence. The success or failure of a business depends majorly on the management.&nbsp;</p><p>Restaurants like KFC and The Place implemented a feedback protocol to stay abreast of their customerâ€™s impressions. This is one thing Mr. Biggs should have done.</p><p><strong>How can they reclaim their lost glory?</strong></p><p>Whenever a company reaches a declining stage, it is usually, most often than not, because they slacked behind at delivering quality service(s) to their customers.&nbsp;</p><p>The fast-food industry, being highly competitive now than it was several decades ago when Mr. Biggs was really big, is highly subjected to Brand trust, and from the look of things, Mr. Biggs lost that years ago. &nbsp;When people hear of Mr. Biggs, they donâ€™t hear satisfaction anymore, they recount awful experiences with staff, services, or both. They need to â€˜wash awayâ€™ this stigma.</p><p>It is not too late for Mr. Biggs If there is a growth factor they can capitalize on, it is quality years of market experience. They can capitalize on that, rebrand both internally and externally, update their menu and shoot for the stars again.</p>', '1', 'Admin', 'https://glidexconsulting.com/uploads/165286866622448filename.jpg', 'show', '2020-02-05', '04:15:25'),
(3, '456dfgh4567f89798rgh3', '3 MISTAKES TO AVOID TO INCREASE PROFITABILITY FOR YOUR BUSINESS IN 2022', '', '<p>1. <strong>BAD VISIBILITY: </strong>A lot of business owners/entrepreneurs have very poor visibility both online and offline, you want to avoid that so much in 2022. As much as possible, you want to be properly positioned to attract prospective clients. To achieve this, a question that must consistently linger on your mind is â€œHow do I give my business/organization a better visibility?â€ sometimes it might take you fully rebrand your business to achieve this.</p><p>2. <strong>POOR MANAGEMENT: </strong>The success or failure of an enterprise depends majorly on the management team. The management team of your enterprise determines the goals that would be achieved or not achieved in a financial year. As much as possible, you want to have experienced and adequate individuals on your management team</p><p>3. <strong>BAD MARKETING STRATEGY:</strong> Let me ask you a question; If you had a gun to your head and you were to make a single sale to a complete stranger (Convince them to buy your product or service) to save your life, how would you measure who will buy from you?<br>That right there is the secret to effective marketing to generate massive sales. So, as much as possible, have a good marketing strategy. No one will buy what they donâ€™t know about.</p><p>&nbsp;</p>', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483148710262filename.jpg', 'show', '2020-06-17', '04:15:09'),
(4, '567fghj398hgfd76d33rf', 'Stop doing this when going for an interview', 'https://www.instagram.com/p/Cd5EBkSMo0a/?igshid=YmMyMTA2M2Y=', '<p>Check out full post on our Instagram page&nbsp;</p><figure class="media"><oembed url="https://www.instagram.com/p/Cd5EBkSMo0a/?igshid=YmMyMTA2M2Y="></oembed></figure>', '2', 'Admin', 'https://glidexconsulting.com/uploads/165338524171297filename.jpg', 'show', '2020-02-05', '04:15:25'),
(5, '567fghj398hgfd76d33rf', 'Demo Blog 5', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483153286362filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(6, '567fghj39876d33rf', 'Demo Blog 6', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483163090531filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(7, '567fghj39876d33rf', 'Demo Blog 7\r\n', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483169657909filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(8, '567fghj39876d33rf', 'Demo Blog 8\r\n', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483165389482filename.jpg', 'hide', '2020-02-05', '04:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `panel_slider`
--

CREATE TABLE `panel_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_title` varchar(255) DEFAULT NULL,
  `text_description` text,
  `image_1` varchar(225) DEFAULT NULL,
  `visibility` varchar(5) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_slider`
--

INSERT INTO `panel_slider` (`id`, `hash_id`, `input_title`, `text_description`, `image_1`, `visibility`, `date_created`, `time_created`) VALUES
(1, '2345tyuhygfdsae4567654', 'We Are Indigo', 'Real Estate With A Heart', '/asset/images/slide01.webp', 'show', '2020-09-09', '09:11:24'),
(2, '65gfr765hgf765hgf', 'We Are Indigo', 'Real Estate With A Heart', '/asset/images/slide02.webp', 'show', '2019-09-09', '11:33:49'),
(3, '34yfds3456juhgf345', 'We Are Indigo', 'Real Estate With A Heart', '/asset/images/slide03.webp', 'show', '2020-05-22', '04:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `read_about`
--

CREATE TABLE `read_about` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `text_body` text NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_about`
--

INSERT INTO `read_about` (`id`, `hash_id`, `text_body`, `image_1`, `visibility`, `date_created`, `time_created`) VALUES
(1, '345uhygf345yhgf', 'Indigo Homes and Developments Limited is a boutique real estate development firm based in Lagos Nigeria. Indigo conceives and develops exciting and innovative projects and seeks to create quality, comfortable and desirable properties that stand out and add value to our stakeholders. We are driven by a vision to be the preferred world class real estate lifestyle developer in Nigeria.', 'https://glidexconsulting.com/uploads/165296211629948filename.jpg', 'show', '2020-06-21', '15:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `read_privacy_and_policy`
--

CREATE TABLE `read_privacy_and_policy` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `text_body` text NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_privacy_and_policy`
--

INSERT INTO `read_privacy_and_policy` (`id`, `hash_id`, `text_body`, `visibility`, `date_created`, `time_created`) VALUES
(1, '345uhygf345yhgf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'show', '2020-06-21', '15:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `read_terms_and_condition`
--

CREATE TABLE `read_terms_and_condition` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `text_body` text NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_terms_and_condition`
--

INSERT INTO `read_terms_and_condition` (`id`, `hash_id`, `text_body`, `visibility`, `date_created`, `time_created`) VALUES
(1, '345uhygf345yhgf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'show', '2020-06-21', '15:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `read_website_info`
--

CREATE TABLE `read_website_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_name` varchar(225) NOT NULL,
  `input_email` varchar(100) NOT NULL,
  `input_phone_number` char(50) NOT NULL,
  `input_address` varchar(225) NOT NULL,
  `input_facebook` varchar(225) NOT NULL,
  `input_instagram` varchar(225) NOT NULL,
  `input_linkedin` varchar(225) NOT NULL,
  `input_twitter` varchar(225) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `text_description` text NOT NULL,
  `visibility` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `input_email_smtp_port` varchar(225) DEFAULT NULL,
  `input_email_password` varchar(225) DEFAULT NULL,
  `input_email_smtp_host` varchar(225) DEFAULT NULL,
  `input_email_smtp_secure_type` char(5) DEFAULT NULL,
  `input_email_from` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_website_info`
--

INSERT INTO `read_website_info` (`id`, `hash_id`, `input_name`, `input_email`, `input_phone_number`, `input_address`, `input_facebook`, `input_instagram`, `input_linkedin`, `input_twitter`, `image_1`, `text_description`, `visibility`, `date_created`, `time_created`, `input_email_smtp_port`, `input_email_password`, `input_email_smtp_host`, `input_email_smtp_secure_type`, `input_email_from`) VALUES
(1, '345yjhgfse3456yhbgvfc', 'Indigo Development', 'contact@glidexconsulting.com', '+2349030850063', 'No 14, Abayomi Street, Yaba, Lagos', 'http://facebook.com/glidexconsulting', 'http://instagram.com/glidexconsulting', 'https://www.linkedin.com/company/glidex-consulting', 'http://twitter.com', '/asset/images/logo-light.webp', 'Indigo Homes and Developments Limited is a boutique real estate development firm based in Lagos Nigeria. Indigo conceives and develops exciting and innovative projects and seeks to create quality, comfortable and desirable properties that stand out and add value to our stakeholders. We are driven by a vision to be the preferred world class real estate lifestyle developer in Nigeria.', 'show', '2021-06-20', '11:33:49', '465', 'GlidexConsul@.06', 'three.qservers.net', 'ssl', 'glidex@glidexconsulting.com');

-- --------------------------------------------------------

--
-- Table structure for table `selection_blog_category`
--

CREATE TABLE `selection_blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selection_blog_category`
--

INSERT INTO `selection_blog_category` (`id`, `input_name`, `hash_id`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'Category 1', '2345YTR23456YHGF', 'show', '2020-06-17', '04:15:09'),
(2, 'Category 2', '34r5tyuijhgf3456yuhgf', 'show', '2020-06-17', '04:15:25'),
(3, 'Category 3', '2345YTR2wsdf6543456YHGF', 'show', '2020-06-17', '04:15:09'),
(4, 'Category 4', '34r5tyuijhgf3456yuhgfjhg45', 'show', '2020-06-17', '04:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `website_status`
--

CREATE TABLE `website_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` char(20) NOT NULL,
  `color` char(11) NOT NULL,
  `status` char(4) NOT NULL,
  `coming_status` int(11) NOT NULL,
  `coming_date` date NOT NULL DEFAULT '2020-01-02',
  `maintenance_status` int(11) NOT NULL,
  `visibility` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_status`
--

INSERT INTO `website_status` (`id`, `hash_id`, `color`, `status`, `coming_status`, `coming_date`, `maintenance_status`, `visibility`) VALUES
(3, 'y7633gusdsd', 'bdaa53', 'live', 0, '2021-07-31', 0, 'show');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panel_blog`
--
ALTER TABLE `panel_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_slider`
--
ALTER TABLE `panel_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_about`
--
ALTER TABLE `read_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_privacy_and_policy`
--
ALTER TABLE `read_privacy_and_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_terms_and_condition`
--
ALTER TABLE `read_terms_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_website_info`
--
ALTER TABLE `read_website_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selection_blog_category`
--
ALTER TABLE `selection_blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_status`
--
ALTER TABLE `website_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panel_blog`
--
ALTER TABLE `panel_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `panel_slider`
--
ALTER TABLE `panel_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `read_about`
--
ALTER TABLE `read_about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `read_privacy_and_policy`
--
ALTER TABLE `read_privacy_and_policy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `read_terms_and_condition`
--
ALTER TABLE `read_terms_and_condition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `read_website_info`
--
ALTER TABLE `read_website_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `selection_blog_category`
--
ALTER TABLE `selection_blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `website_status`
--
ALTER TABLE `website_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
