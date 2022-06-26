-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2022 at 09:32 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-34+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mckodevc_demoIndigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_hash_id` varchar(225) NOT NULL,
  `asset_hash_id` varchar(255) NOT NULL,
  `image_1` varchar(225) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_hash_id`, `asset_hash_id`, `image_1`, `date_created`, `time_created`) VALUES
(1, 'f53rygw563653', '345hgf456ghj67', 'uploads/product-01.jpg', '2020-06-17', '04:15:09'),
(2, '23tfd234tgfd', '345hgf456ghj67', 'uploads/product-02.jpg', '2020-06-17', '04:27:12'),
(3, 'f53rygw345563653', '345hgf456ghj67', 'uploads/product-03.jpg', '2020-06-17', '04:15:09'),
(4, '23tfd234gf345tgfd', '345hgf456ghj67', 'uploads/product-04.jpg', '2020-06-17', '04:27:12'),
(5, 'f53rygw563sdfgh653', '098yjhm45hfjkd', 'uploads/product-05.jpg', '2020-06-17', '04:15:09'),
(6, '23tfd234tsdcvbw3gfd', '098yjhm45hfjkd', 'uploads/product-06.jpg', '2020-06-17', '04:27:12'),
(7, 'f53rygw34fgh653', '098yjhm45hfjkd', 'uploads/product-07.jpg', '2020-06-17', '04:15:09'),
(8, '23tfd345gfv5tgfd', '098yjhm45hfjkd', 'uploads/product-08.jpg', '2020-06-17', '04:27:12'),
(9, 'f53rygw5dfg63653', '345hgf456ghj', 'uploads/blog-01.jpg', '2020-06-17', '04:15:09'),
(10, '23tfd234tgf2345d', '345hgf456ghj', 'uploads/blog-02.jpg', '2020-06-17', '04:27:12'),
(11, 'f53rygw3455636wed53', '345hgf456ghj', 'uploads/blog-03.jpg', '2020-06-17', '04:15:09'),
(12, '23tfd234gsd45g4f345tgfd', '345hgf456ghj', 'uploads/blog-04.jpg', '2020-06-17', '04:27:12'),
(13, 'f53rygw563sdcf3456', '098yjhm45hfj', 'uploads/product-05.jpg', '2020-06-17', '04:15:09'),
(14, '23tfd23423456d', '098yjhm45hfj', 'uploads/product-06.jpg', '2020-06-17', '04:27:12'),
(15, 'f53ry234rtg653', '098yjhm45hfj', 'uploads/product-07.jpg', '2020-06-17', '04:15:09'),
(16, '23tfd3sdf345gfd', '098yjhm45hfj', 'uploads/product-08.jpg', '2020-06-17', '04:27:12'),
(17, 'f53rygw563653sdfgh', '345hgf456huighj6', 'uploads/product-01.jpg', '2020-06-17', '04:15:09'),
(18, '23tfd234tgfd234', '345hgf456huighj6', 'uploads/product-02.jpg', '2020-06-17', '04:27:12'),
(19, 'f53rygw34556fghj3653', '345hgf456huighj6', 'uploads/product-03.jpg', '2020-06-17', '04:15:09'),
(20, '23tfd234gf334frftgfd', '345hgf456huighj6', 'uploads/product-04.jpg', '2020-06-17', '04:27:12'),
(21, 'f53rygw5dfg6dfg334', '098yjhm4574hhfjkd', 'uploads/blog-01.jpg', '2020-06-17', '04:15:09'),
(22, '23tfd234tedf3454', '098yjhm4574hhfjkd', 'uploads/blog-02.jpg', '2020-06-17', '04:27:12'),
(23, 'f53rygw3455636wededf', '098yjhm4574hhfjkd', 'uploads/blog-03.jpg', '2020-06-17', '04:15:09'),
(24, '23tfd234e345434345tgfd', '098yjhm4574hhfjkd', 'uploads/blog-04.jpg', '2020-06-17', '04:27:12'),
(26, 'IMG_16387202895619366', '73bdu4e74d', 'https://fawazadelaja.com/uploads/163872028922838filename.jpg', '2021-12-05', '16:04:49'),
(27, 'IMG_16390574576028125', '73bdu4e74d', 'https://fawazadelaja.com/uploads/163905745754488filename.jpg', '2021-12-09', '13:44:17'),
(28, 'IMG_16390574908910198', '73bdu4e74d', 'https://fawazadelaja.com/uploads/163905749031664filename.jpg', '2021-12-09', '13:44:50'),
(30, 'IMG_16390575658796062', '73bdu4e74d', 'https://fawazadelaja.com/uploads/163905756551671filename.jpg', '2021-12-09', '13:46:05'),
(31, 'IMG_16390575842676302', '73bdu4e74d', 'https://fawazadelaja.com/uploads/163905758419923filename.jpg', '2021-12-09', '13:46:24'),
(32, 'IMG_1639092687', '1639092687_95250', 'https://fawazadelaja.com/uploads/163909268766885filename.jpg', '2021-12-09', '23:31:27'),
(33, 'IMG_1639092758', '1639092756_16806', 'https://fawazadelaja.com/uploads/163909275890109filename.jpg', '2021-12-09', '23:32:38'),
(34, 'IMG_1639120619', '1639120618_25947', 'https://fawazadelaja.com/uploads/163912061884463filename.jpg', '2021-12-10', '07:16:59'),
(35, 'IMG_1639120627', '1639120627_58479', 'https://fawazadelaja.com/uploads/163912062734528filename.jpg', '2021-12-10', '07:17:07'),
(36, 'IMG_1639120642', '1639120641_39393', 'https://fawazadelaja.com/uploads/163912064249836filename.jpg', '2021-12-10', '07:17:22'),
(37, 'IMG_1639131772', '1639131770_14932', 'https://fawazadelaja.com/uploads/163913177229217filename.jpg', '2021-12-10', '10:22:52'),
(38, 'IMG_1639131772', '1639131770_14932', 'https://fawazadelaja.com/uploads/163913177210231filename.jpg', '2021-12-10', '10:22:52'),
(39, 'IMG_1639131937', '1639131937_48034', 'https://fawazadelaja.com/uploads/163913193727972filename.jpg', '2021-12-10', '10:25:37'),
(42, 'IMG_16391321368908064', '1639131937_48034', 'https://fawazadelaja.com/uploads/163913213666103filename.jpg', '2021-12-10', '10:28:56'),
(44, 'IMG_16391321775976301', '1639131937_48034', 'https://fawazadelaja.com/uploads/163913217792255filename.jpg', '2021-12-10', '10:29:37'),
(60, 'IMG_16393117788443565', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931177852787filename.jpg', '2021-12-12', '12:22:58'),
(61, 'IMG_16393118128420461', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931181210319filename.jpg', '2021-12-12', '12:23:32'),
(62, 'IMG_16393118849833930', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931188472616filename.jpg', '2021-12-12', '12:24:44'),
(63, 'IMG_16393119294446406', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931192928644filename.jpg', '2021-12-12', '12:25:29'),
(64, 'IMG_16393119851570484', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931198586993filename.jpg', '2021-12-12', '12:26:25'),
(66, 'IMG_16393124163484385', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931241633413filename.jpg', '2021-12-12', '12:33:36'),
(67, 'IMG_16393124422925062', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931244279345filename.jpg', '2021-12-12', '12:34:02'),
(69, 'IMG_16393125025338960', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931250239846filename.jpg', '2021-12-12', '12:35:02'),
(70, 'IMG_16393125606378529', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931256055156filename.jpg', '2021-12-12', '12:36:00'),
(71, 'IMG_16393126273397034', '1639139261_56631', 'https://fawazadelaja.com/uploads/163931262776963filename.jpg', '2021-12-12', '12:37:07'),
(72, 'IMG_16393128846652518', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931288457476filename.jpg', '2021-12-12', '12:41:24'),
(73, 'IMG_16393128845507404', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931288442914filename.jpg', '2021-12-12', '12:41:24'),
(74, 'IMG_16393128848366809', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931288455846filename.jpg', '2021-12-12', '12:41:24'),
(75, 'IMG_16393129423084364', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931294292862filename.jpg', '2021-12-12', '12:42:22'),
(76, 'IMG_16393129426045641', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931294290039filename.jpg', '2021-12-12', '12:42:22'),
(77, 'IMG_16393129428349264', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931294266230filename.jpg', '2021-12-12', '12:42:22'),
(78, 'IMG_16393129842134823', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931298426775filename.jpg', '2021-12-12', '12:43:04'),
(79, 'IMG_16393129844597911', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931298459359filename.jpg', '2021-12-12', '12:43:04'),
(80, 'IMG_16393129846657874', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931298435294filename.jpg', '2021-12-12', '12:43:04'),
(81, 'IMG_16393129846379960', '1639305234_79223', 'https://fawazadelaja.com/uploads/163931298480665filename.jpg', '2021-12-12', '12:43:04'),
(82, 'IMG_16393131905538874', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931319092842filename.jpg', '2021-12-12', '12:46:30'),
(83, 'IMG_16393136912710898', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931369158468filename.jpg', '2021-12-12', '12:54:51'),
(86, 'IMG_16393139795969080', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931397982694filename.jpg', '2021-12-12', '12:59:39'),
(87, 'IMG_16393140315209267', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931403163680filename.jpg', '2021-12-12', '13:00:31'),
(88, 'IMG_16393140314426096', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931403152205filename.jpg', '2021-12-12', '13:00:31'),
(89, 'IMG_16393140317937689', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931403117894filename.jpg', '2021-12-12', '13:00:31'),
(90, 'IMG_16393140312211525', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931403162155filename.jpg', '2021-12-12', '13:00:31'),
(91, 'IMG_16393142692424070', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931426913979filename.jpg', '2021-12-12', '13:04:29'),
(92, 'IMG_16393142696952871', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931426970759filename.jpg', '2021-12-12', '13:04:29'),
(93, 'IMG_16393142694584434', '1639304394_38013', 'https://fawazadelaja.com/uploads/163931426950514filename.jpg', '2021-12-12', '13:04:29'),
(94, 'IMG_16393144362354434', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931443698050filename.jpg', '2021-12-12', '13:07:16'),
(95, 'IMG_16393144369974447', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931443681461filename.jpg', '2021-12-12', '13:07:16'),
(96, 'IMG_16393144368114001', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931443642796filename.jpg', '2021-12-12', '13:07:16'),
(97, 'IMG_16393144368137279', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931443636364filename.jpg', '2021-12-12', '13:07:16'),
(98, 'IMG_16393144361792800', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931443691632filename.jpg', '2021-12-12', '13:07:16'),
(99, 'IMG_16393145536714089', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931455317021filename.jpg', '2021-12-12', '13:09:13'),
(100, 'IMG_16393145531914141', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931455342062filename.jpg', '2021-12-12', '13:09:13'),
(101, 'IMG_16393145533783838', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931455335253filename.jpg', '2021-12-12', '13:09:13'),
(102, 'IMG_16393145533135144', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931455326249filename.jpg', '2021-12-12', '13:09:13'),
(103, 'IMG_16393145534472615', '1639236480_20472', 'https://fawazadelaja.com/uploads/163931455353269filename.jpg', '2021-12-12', '13:09:13'),
(104, 'IMG_16393146815222104', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931468141359filename.jpg', '2021-12-12', '13:11:21'),
(105, 'IMG_16393146812255305', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931468182636filename.jpg', '2021-12-12', '13:11:21'),
(106, 'IMG_16393148449345510', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931484447416filename.jpg', '2021-12-12', '13:14:04'),
(107, 'IMG_16393148448470971', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931484482653filename.jpg', '2021-12-12', '13:14:04'),
(108, 'IMG_16393148447615180', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931484464164filename.jpg', '2021-12-12', '13:14:04'),
(109, 'IMG_16393148442011800', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931484427641filename.jpg', '2021-12-12', '13:14:04'),
(110, 'IMG_16393149244711037', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931492463872filename.jpg', '2021-12-12', '13:15:24'),
(111, 'IMG_16393149241499202', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931492450169filename.jpg', '2021-12-12', '13:15:24'),
(112, 'IMG_16393149246828029', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931492414521filename.jpg', '2021-12-12', '13:15:24'),
(113, 'IMG_16393149243986503', '1639305076_86163', 'https://fawazadelaja.com/uploads/163931492451453filename.jpg', '2021-12-12', '13:15:24'),
(114, 'IMG_16393153607962335', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931536029323filename.jpg', '2021-12-12', '13:22:40'),
(115, 'IMG_16393153606797415', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931536074051filename.jpg', '2021-12-12', '13:22:40'),
(116, 'IMG_16393153608413399', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931536026263filename.jpg', '2021-12-12', '13:22:40'),
(117, 'IMG_16393153606537544', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931536090018filename.jpg', '2021-12-12', '13:22:40'),
(118, 'IMG_16393154797637190', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931547930806filename.jpg', '2021-12-12', '13:24:39'),
(119, 'IMG_16393154791450244', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931547923450filename.jpg', '2021-12-12', '13:24:39'),
(120, 'IMG_16393154795501470', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931547975317filename.jpg', '2021-12-12', '13:24:39'),
(121, 'IMG_16393155602187921', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931556077299filename.jpg', '2021-12-12', '13:26:00'),
(122, 'IMG_16393156348830461', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931563413733filename.jpg', '2021-12-12', '13:27:14'),
(123, 'IMG_16393156342846396', '1639304566_75773', 'https://fawazadelaja.com/uploads/163931563451984filename.jpg', '2021-12-12', '13:27:14'),
(125, 'IMG_16393161099166714', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931610994160filename.jpg', '2021-12-12', '13:35:09'),
(126, 'IMG_16393161093661171', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931610980315filename.jpg', '2021-12-12', '13:35:09'),
(127, 'IMG_16393161341427201', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931613351624filename.jpg', '2021-12-12', '13:35:34'),
(128, 'IMG_16393161471164243', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931614771774filename.jpg', '2021-12-12', '13:35:47'),
(129, 'IMG_16393162228992830', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931622269413filename.jpg', '2021-12-12', '13:37:02'),
(130, 'IMG_16393162227972949', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931622260263filename.jpg', '2021-12-12', '13:37:02'),
(131, 'IMG_16393162225457113', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931622215765filename.jpg', '2021-12-12', '13:37:02'),
(132, 'IMG_16393162222658245', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931622238495filename.jpg', '2021-12-12', '13:37:02'),
(133, 'IMG_16393162447100996', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931624472661filename.jpg', '2021-12-12', '13:37:24'),
(134, 'IMG_16393162443997109', '1639143419_20510', 'https://fawazadelaja.com/uploads/163931624441752filename.jpg', '2021-12-12', '13:37:24'),
(135, 'IMG_1639316615', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931661584162filename.jpg', '2021-12-12', '13:43:35'),
(136, 'IMG_16393166713807298', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931667131387filename.jpg', '2021-12-12', '13:44:31'),
(137, 'IMG_16393166713790310', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931667118606filename.jpg', '2021-12-12', '13:44:31'),
(138, 'IMG_16393166714945790', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931667112718filename.jpg', '2021-12-12', '13:44:31'),
(139, 'IMG_16393167132197807', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931671348682filename.jpg', '2021-12-12', '13:45:13'),
(140, 'IMG_16393167135032691', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931671343748filename.jpg', '2021-12-12', '13:45:13'),
(141, 'IMG_16393167136902075', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931671364089filename.jpg', '2021-12-12', '13:45:13'),
(142, 'IMG_16393167131293478', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931671350122filename.jpg', '2021-12-12', '13:45:13'),
(143, 'IMG_16393167132534161', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931671381291filename.jpg', '2021-12-12', '13:45:13'),
(144, 'IMG_16393167267594153', '1639316613_17582', 'https://fawazadelaja.com/uploads/163931672649049filename.jpg', '2021-12-12', '13:45:26'),
(145, 'IMG_1639318542', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931854256755filename.jpg', '2021-12-12', '14:15:42'),
(148, 'IMG_16393186252419150', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931862590855filename.jpg', '2021-12-12', '14:17:05'),
(149, 'IMG_16393186556445705', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931865533272filename.jpg', '2021-12-12', '14:17:35'),
(150, 'IMG_16393186746577245', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931867452144filename.jpg', '2021-12-12', '14:17:54'),
(151, 'IMG_16393186908282686', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931869056755filename.jpg', '2021-12-12', '14:18:10'),
(152, 'IMG_16393187066472372', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931870661633filename.jpg', '2021-12-12', '14:18:26'),
(153, 'IMG_16393187236986424', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931872383090filename.jpg', '2021-12-12', '14:18:43'),
(154, 'IMG_16393187235206761', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931872330927filename.jpg', '2021-12-12', '14:18:43'),
(155, 'IMG_16393187235233020', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931872372034filename.jpg', '2021-12-12', '14:18:43'),
(156, 'IMG_16393187317101706', '1639318542_22044', 'https://fawazadelaja.com/uploads/163931873159532filename.jpg', '2021-12-12', '14:18:51'),
(157, 'IMG_1639652642', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965264256578filename.jpg', '2021-12-16', '11:04:02'),
(158, 'IMG_16396526908542267', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965269025097filename.jpg', '2021-12-16', '11:04:50'),
(159, 'IMG_16396526904499111', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965269035583filename.jpg', '2021-12-16', '11:04:50'),
(160, 'IMG_16396526901664245', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965269086361filename.jpg', '2021-12-16', '11:04:50'),
(161, 'IMG_16396526905859891', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965269034798filename.jpg', '2021-12-16', '11:04:50'),
(162, 'IMG_16396526902264851', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965269034689filename.jpg', '2021-12-16', '11:04:50'),
(163, 'IMG_16396527983397281', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965279889433filename.jpg', '2021-12-16', '11:06:38'),
(164, 'IMG_16396527987255795', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965279897733filename.jpg', '2021-12-16', '11:06:38'),
(165, 'IMG_16396527982930373', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965279833848filename.jpg', '2021-12-16', '11:06:38'),
(166, 'IMG_16396527986711764', '1639652640_36008', 'https://fawazadelaja.com/uploads/163965279832116filename.jpg', '2021-12-16', '11:06:38'),
(172, 'IMG_16396927566882631', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969275622017filename.jpg', '2021-12-16', '22:12:36'),
(176, 'IMG_16396927981489356', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969279879175filename.jpg', '2021-12-16', '22:13:18'),
(177, 'IMG_16396927987308537', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969279823142filename.jpg', '2021-12-16', '22:13:18'),
(178, 'IMG_16396928383847769', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969283895836filename.jpg', '2021-12-16', '22:13:58'),
(179, 'IMG_16396928597014565', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969285916343filename.jpg', '2021-12-16', '22:14:19'),
(180, 'IMG_16396928969818428', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969289620987filename.jpg', '2021-12-16', '22:14:56'),
(181, 'IMG_16396929683399621', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969296861736filename.jpg', '2021-12-16', '22:16:08'),
(182, 'IMG_16396929683115107', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969296832245filename.jpg', '2021-12-16', '22:16:08'),
(183, 'IMG_16396929813127571', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969298117035filename.jpg', '2021-12-16', '22:16:21'),
(184, 'IMG_16396929937247330', '1639692219_97465', 'https://fawazadelaja.com/uploads/163969299334362filename.jpg', '2021-12-16', '22:16:33'),
(186, 'IMG_16402700756251913', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027007564534filename.jpg', '2021-12-23', '14:34:35'),
(187, 'IMG_16402700955999501', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027009521181filename.jpg', '2021-12-23', '14:34:55'),
(188, 'IMG_16402701321114863', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027013263330filename.jpg', '2021-12-23', '14:35:32'),
(189, 'IMG_16402701421091559', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027014254119filename.jpg', '2021-12-23', '14:35:42'),
(190, 'IMG_16402701531552024', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027015380679filename.jpg', '2021-12-23', '14:35:53'),
(191, 'IMG_16402701648856326', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027016476465filename.jpg', '2021-12-23', '14:36:04'),
(192, 'IMG_16402701784098933', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027017838642filename.jpg', '2021-12-23', '14:36:18'),
(193, 'IMG_16402701882212749', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027018873009filename.jpg', '2021-12-23', '14:36:28'),
(194, 'IMG_16402702401691718', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027024020480filename.jpg', '2021-12-23', '14:37:20'),
(195, 'IMG_16402702413690663', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027024010318filename.jpg', '2021-12-23', '14:37:21'),
(196, 'IMG_16402702414632319', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027024020236filename.jpg', '2021-12-23', '14:37:21'),
(197, 'IMG_16402702416732719', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027024057153filename.jpg', '2021-12-23', '14:37:21'),
(198, 'IMG_16402702414442359', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027024092664filename.jpg', '2021-12-23', '14:37:21'),
(199, 'IMG_16402702705706420', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027027077378filename.jpg', '2021-12-23', '14:37:50'),
(200, 'IMG_16402702702514128', '1640269863_28664', 'https://fawazadelaja.com/uploads/164027027035414filename.jpg', '2021-12-23', '14:37:50'),
(201, 'IMG_1641805559', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180555977198filename.jpg', '2022-01-10', '09:05:59'),
(202, 'IMG_16418059378748545', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180593710578filename.jpg', '2022-01-10', '09:12:17'),
(203, 'IMG_16418059492190353', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180594931552filename.jpg', '2022-01-10', '09:12:29'),
(204, 'IMG_16418059677343062', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180596774290filename.jpg', '2022-01-10', '09:12:47'),
(205, 'IMG_16418059795921654', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180597973559filename.jpg', '2022-01-10', '09:12:59'),
(206, 'IMG_16418059885348856', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180598896930filename.jpg', '2022-01-10', '09:13:08'),
(207, 'IMG_16418060131699424', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180601349427filename.jpg', '2022-01-10', '09:13:33'),
(208, 'IMG_16418060222020616', '1641805558_80505', 'https://fawazadelaja.com/uploads/164180602255098filename.jpg', '2022-01-10', '09:13:42'),
(209, 'IMG_1641806608', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180660829320filename.jpg', '2022-01-10', '09:23:28'),
(212, 'IMG_16418066731054694', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180667384467filename.jpg', '2022-01-10', '09:24:33'),
(213, 'IMG_16418067027909970', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180670277526filename.jpg', '2022-01-10', '09:25:02'),
(214, 'IMG_16418067165886051', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180671646648filename.jpg', '2022-01-10', '09:25:16'),
(215, 'IMG_16418067241006675', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180672430833filename.jpg', '2022-01-10', '09:25:24'),
(216, 'IMG_16418067538282640', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180675368701filename.jpg', '2022-01-10', '09:25:53'),
(217, 'IMG_16418067743812756', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180677465456filename.jpg', '2022-01-10', '09:26:14'),
(218, 'IMG_16418067757288814', '1641806608_14928', 'https://fawazadelaja.com/uploads/164180677416111filename.jpg', '2022-01-10', '09:26:15'),
(219, 'IMG_1641807872', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180787275214filename.jpg', '2022-01-10', '09:44:32'),
(220, 'IMG_16418079699183469', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180796945239filename.jpg', '2022-01-10', '09:46:09'),
(221, 'IMG_16418079697669159', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180796989499filename.jpg', '2022-01-10', '09:46:09'),
(222, 'IMG_16418079694122850', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180796999071filename.jpg', '2022-01-10', '09:46:09'),
(223, 'IMG_16418079699202390', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180796973535filename.jpg', '2022-01-10', '09:46:09'),
(224, 'IMG_16418079695824030', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180796986014filename.jpg', '2022-01-10', '09:46:09'),
(225, 'IMG_16418080139391731', '1641807872_22457', 'https://fawazadelaja.com/uploads/164180801384814filename.jpg', '2022-01-10', '09:46:53'),
(227, 'IMG_16418097714004753', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180977177309filename.jpg', '2022-01-10', '10:16:11'),
(228, 'IMG_16418097965435929', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180979617374filename.jpg', '2022-01-10', '10:16:36'),
(229, 'IMG_16418098111871815', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180981115492filename.jpg', '2022-01-10', '10:16:51'),
(230, 'IMG_16418098211009340', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180982196051filename.jpg', '2022-01-10', '10:17:01'),
(231, 'IMG_16418098335615287', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180983335356filename.jpg', '2022-01-10', '10:17:13'),
(232, 'IMG_16418098468843412', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180984636164filename.jpg', '2022-01-10', '10:17:26'),
(233, 'IMG_16418098465160055', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180984679198filename.jpg', '2022-01-10', '10:17:26'),
(234, 'IMG_16418098808715549', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180988038800filename.jpg', '2022-01-10', '10:18:00'),
(235, 'IMG_16418098807983409', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180988071191filename.jpg', '2022-01-10', '10:18:00'),
(236, 'IMG_16418098804597194', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180988082239filename.jpg', '2022-01-10', '10:18:00'),
(237, 'IMG_16418098809342094', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180988012071filename.jpg', '2022-01-10', '10:18:00'),
(238, 'IMG_16418098806997854', '1641809723_93433', 'https://fawazadelaja.com/uploads/164180988060069filename.jpg', '2022-01-10', '10:18:00'),
(239, 'IMG_1651058147', '1651058147_35003', 'https://fawazadelaja.com/uploads/165105814798191filename.jpg', '2022-04-27', '11:15:47'),
(240, 'IMG_16510581888966011', '1651058147_35003', 'https://fawazadelaja.com/uploads/165105818826088filename.jpg', '2022-04-27', '11:16:28'),
(241, 'IMG_16510582108434500', 'abcdefgh', 'https://fawazadelaja.com/uploads/165105820982026filename.jpg', '2022-04-27', '11:16:50'),
(242, 'IMG_16510582103052096', '1651058147_35003', 'https://fawazadelaja.com/uploads/165105820965190filename.jpg', '2022-04-27', '11:16:50'),
(243, 'IMG_16510582104582048', '1651058147_35003', 'https://fawazadelaja.com/uploads/165105820936120filename.jpg', '2022-04-27', '11:16:50'),
(244, 'IMG_16510582101825033', 'abcdefgh', 'https://fawazadelaja.com/uploads/165105820970471filename.jpg', '2022-04-27', '11:16:50'),
(245, 'IMG_16510582102999648', 'abcdefgh', 'https://fawazadelaja.com/uploads/165105820914163filename.jpg', '2022-04-27', '11:16:50'),
(246, 'IMG_16510582302561030', 'abcd', 'https://fawazadelaja.com/uploads/165105823021652filename.jpg', '2022-04-27', '11:17:10'),
(247, 'IMG_16510582304707872', 'abcd', 'https://fawazadelaja.com/uploads/165105823033031filename.jpg', '2022-04-27', '11:17:10'),
(248, 'IMG_16510582304657147', 'abcd', 'https://fawazadelaja.com/uploads/165105823042782filename.jpg', '2022-04-27', '11:17:10'),
(249, 'IMG_16510582302632279', 'abcd', 'https://fawazadelaja.com/uploads/165105823064514filename.jpg', '2022-04-27', '11:17:10');

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
(4, '567fghj398hgfd76d33rf', 'Stop doing this when going for an interview', 'https://www.instagram.com/p/Cd5EBkSMo0a/?igshid=YmMyMTA2M2Y=', '<p>Check out full post on our Instagram page&nbsp;</p><figure class=\"media\"><oembed url=\"https://www.instagram.com/p/Cd5EBkSMo0a/?igshid=YmMyMTA2M2Y=\"></oembed></figure>', '2', 'Admin', 'https://glidexconsulting.com/uploads/165338524171297filename.jpg', 'show', '2020-02-05', '04:15:25'),
(5, '567fghj398hgfd76d33rf', 'Demo Blog 5', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483153286362filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(6, '567fghj39876d33rf', 'Demo Blog 6', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483163090531filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(7, '567fghj39876d33rf', 'Demo Blog 7\r\n', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483169657909filename.jpg', 'hide', '2020-02-05', '04:15:25'),
(8, '567fghj39876d33rf', 'Demo Blog 8\r\n', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', 'Admin', 'https://demo1.mckodev.com.ng/uploads/162483165389482filename.jpg', 'hide', '2020-02-05', '04:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `panel_faq`
--

CREATE TABLE `panel_faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_question` varchar(255) DEFAULT NULL,
  `text_answer` text,
  `visibility` varchar(50) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_faq`
--

INSERT INTO `panel_faq` (`id`, `hash_id`, `input_question`, `text_answer`, `visibility`, `date_created`, `time_created`) VALUES
(1, '456dfgh4567fgh3', 'FAQ 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'show', '2020-06-17', '04:15:09'),
(2, '567fghj39876d33rf', 'FAQ 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'show', '2020-02-05', '04:15:25'),
(3, '456dfgh4567f89798rgh3', 'FAQ 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'show', '2020-06-17', '04:15:09'),
(4, '567fghj398hgfd76d33rf', 'FAQ 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'show', '2020-02-05', '04:15:25'),
(5, '567fghj398hgfd76d33rf', 'FAQ 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'hide', '2020-02-05', '04:15:25'),
(6, '567fghj39876d33rf', 'FAQ 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'hide', '2020-02-05', '04:15:25'),
(7, '567fghj39876d33rf', 'FAQ 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'hide', '2020-02-05', '04:15:25'),
(8, '567fghj39876d33rf', 'FAQ 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In leo lacus, suscipit nec hendrerit mattis, tempus sed nibh. Integer sit amet imperdiet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc venenatis risus at interdum ultricies. Aenean sodales placerat massa a sagittis. Maecenas non congue est. Duis ac euismod eros. Integer semper tortor nec nisl accumsan vehicula. Aliquam erat volutpat. Phasellus dapibus leo in diam vestibulum cursus. Nam auctor, urna nec facilisis dapibus, justo leo porttitor nisl, eu cursus quam magna nec nulla. Nunc sollicitudin pellentesque urna a dictum.\r\n\r\nDuis lorem neque, pellentesque nec nisl quis, laoreet fermentum tellus. Suspendisse rutrum est eros, ac vestibulum libero ullamcorper at. Donec egestas velit urna, vel ornare dolor laoreet sit amet. Mauris vestibulum porta mi quis tempus. Phasellus ac faucibus eros. Vestibulum et tempor mauris. Donec fermentum ac mi ut placerat. Donec laoreet commodo cursus. Nulla volutpat mattis arcu, quis dictum neque blandit at. Maecenas quis rhoncus lacus. Nullam ac lorem tempus, luctus nisl at, gravida mauris. Proin erat felis, ultrices quis eleifend at, rhoncus ac purus. Donec viverra finibus laoreet. Phasellus a sem quis odio fermentum dapibus a quis nibh. Pellentesque non nisl elit.', 'hide', '2020-02-05', '04:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `panel_gallery`
--

CREATE TABLE `panel_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` char(100) NOT NULL,
  `image_2` text,
  `visibility` char(4) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_gallery`
--

INSERT INTO `panel_gallery` (`id`, `hash_id`, `image_2`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'abcd', 'https://fawazadelaja.com/uploads/165105823064514filename.jpg', 'show', '2022-06-23', '07:14:26'),
(2, 'abcdefgh', 'https://fawazadelaja.com/uploads/165105820982026filename.jpg', 'show', '2022-06-23', '07:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `panel_projects`
--

CREATE TABLE `panel_projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` char(100) NOT NULL,
  `input_title` varchar(225) DEFAULT NULL,
  `input_location` varchar(225) DEFAULT NULL,
  `input_price` char(20) DEFAULT NULL,
  `dated_project_date` date DEFAULT NULL,
  `input_brochure_link` varchar(225) DEFAULT NULL,
  `input_faq_link` varchar(225) DEFAULT NULL,
  `input_subscription_form_link` varchar(225) DEFAULT NULL,
  `text_body` text,
  `image_2` text,
  `visibility` char(4) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_projects`
--

INSERT INTO `panel_projects` (`id`, `hash_id`, `input_title`, `input_location`, `input_price`, `dated_project_date`, `input_brochure_link`, `input_faq_link`, `input_subscription_form_link`, `text_body`, `image_2`, `visibility`, `date_created`, `time_created`) VALUES
(1, 'hash03jd', 'Demo Project 1', 'Gwagwalada, Abuja, Nigeria', '200000', '2022-06-24', 'https://www.indigodevelopments.com/_files/ugd/f844ed_cb55094cbe9f4ab0b0feaeae18c75157.pdf', NULL, NULL, 'luctus aliquam a quis metus. Nullam ac erat et turpis ultrices posuere vitae sed dolor. Maecenas neque metus, malesuada sed imperdiet at, gravida at neque. Donec semper fringilla urna ut elementum. Donec ut rutrum est. Quisque mollis lacus sed arcu faucibus, in volutpat velit molestie. Nullam non dolor turpis. Donec molestie tincidunt laoreet.\n\nNam hendrerit mattis dolor, eu tempor mauris porttitor eget. Curabitur convallis orci a nisl pulvinar, vitae malesuada libero ultrices. Aenean cursus facilisis laoreet. Nunc nec rhoncus mauris, nec sagittis lacus. Nunc ac orci quis est aliquam cursus ac id nisl. Maecenas ut purus quis metus bibendum porttitor. Proin ac magna a sem rhoncus varius at vel erat. Nullam vulputate consequat elit non eleifend. Vestibulum convallis nisl non sapien accumsan facilisis. Cras ex quam, elementum sed accumsan ut, luctus vitae sapien. In tempus mollis nisl non semper.\n\nNam lobortis ex quis massa bibendum, sit amet sodales nisi rutrum. Pellentesque sit amet venenatis sapien. In tincidunt augue eget felis vestibulum luctus. Sed pulvinar, leo vitae vulputate rhoncus, lectus nunc condimentum orci, ac auctor lectus dui nec quam. Aenean non mi sit amet metus euismod pulvinar. Nulla ullamcorper ullamcorper tellus non tempor. Duis in sodales urna. Aenean felis turpis, eleifend nec tempor pretium, rutrum nec urna. Nam non eleifend ex. Vestibulum porttitor aliquam semper. Ut turpis enim, varius sed nunc ac, elementum volutpat elit. Proin id mollis ipsum.', 'uploads/project-2.webp', 'show', '2022-06-23', '07:14:26'),
(2, 'hashioer0', 'Demo Project 2', 'Ikoyi, Lagos, Nigeria', '1800000', '2022-06-22', 'https://www.indigodevelopments.com/_files/ugd/f844ed_20306c44147b4b418a3779d964647537.pdf', NULL, NULL, 'luctus aliquam a quis metus. Nullam ac erat et turpis ultrices posuere vitae sed dolor. Maecenas neque metus, malesuada sed imperdiet at, gravida at neque. Donec semper fringilla urna ut elementum. Donec ut rutrum est. Quisque mollis lacus sed arcu faucibus, in volutpat velit molestie. Nullam non dolor turpis. Donec molestie tincidunt laoreet.\n\nNam hendrerit mattis dolor, eu tempor mauris porttitor eget. Curabitur convallis orci a nisl pulvinar, vitae malesuada libero ultrices. Aenean cursus facilisis laoreet. Nunc nec rhoncus mauris, nec sagittis lacus. Nunc ac orci quis est aliquam cursus ac id nisl. Maecenas ut purus quis metus bibendum porttitor. Proin ac magna a sem rhoncus varius at vel erat. Nullam vulputate consequat elit non eleifend. Vestibulum convallis nisl non sapien accumsan facilisis. Cras ex quam, elementum sed accumsan ut, luctus vitae sapien. In tempus mollis nisl non semper.\n\nNam lobortis ex quis massa bibendum, sit amet sodales nisi rutrum. Pellentesque sit amet venenatis sapien. In tincidunt augue eget felis vestibulum luctus. Sed pulvinar, leo vitae vulputate rhoncus, lectus nunc condimentum orci, ac auctor lectus dui nec quam. Aenean non mi sit amet metus euismod pulvinar. Nulla ullamcorper ullamcorper tellus non tempor. Duis in sodales urna. Aenean felis turpis, eleifend nec tempor pretium, rutrum nec urna. Nam non eleifend ex. Vestibulum porttitor aliquam semper. Ut turpis enim, varius sed nunc ac, elementum volutpat elit. Proin id mollis ipsum.', 'uploads/project-1.webp', 'show', '2022-06-23', '07:14:26'),
(3, 'hashioer0jnv', 'Demo Project 3', 'Lekki, Lagos, Nigeria', '1800000', '2022-06-22', 'https://www.indigodevelopments.com/_files/ugd/f844ed_cb55094cbe9f4ab0b0feaeae18c75157.pdf', NULL, NULL, 'luctus aliquam a quis metus. Nullam ac erat et turpis ultrices posuere vitae sed dolor. Maecenas neque metus, malesuada sed imperdiet at, gravida at neque. Donec semper fringilla urna ut elementum. Donec ut rutrum est. Quisque mollis lacus sed arcu faucibus, in volutpat velit molestie. Nullam non dolor turpis. Donec molestie tincidunt laoreet.\r\n\r\nNam hendrerit mattis dolor, eu tempor mauris porttitor eget. Curabitur convallis orci a nisl pulvinar, vitae malesuada libero ultrices. Aenean cursus facilisis laoreet. Nunc nec rhoncus mauris, nec sagittis lacus. Nunc ac orci quis est aliquam cursus ac id nisl. Maecenas ut purus quis metus bibendum porttitor. Proin ac magna a sem rhoncus varius at vel erat. Nullam vulputate consequat elit non eleifend. Vestibulum convallis nisl non sapien accumsan facilisis. Cras ex quam, elementum sed accumsan ut, luctus vitae sapien. In tempus mollis nisl non semper.\r\n\r\nNam lobortis ex quis massa bibendum, sit amet sodales nisi rutrum. Pellentesque sit amet venenatis sapien. In tincidunt augue eget felis vestibulum luctus. Sed pulvinar, leo vitae vulputate rhoncus, lectus nunc condimentum orci, ac auctor lectus dui nec quam. Aenean non mi sit amet metus euismod pulvinar. Nulla ullamcorper ullamcorper tellus non tempor. Duis in sodales urna. Aenean felis turpis, eleifend nec tempor pretium, rutrum nec urna. Nam non eleifend ex. Vestibulum porttitor aliquam semper. Ut turpis enim, varius sed nunc ac, elementum volutpat elit. Proin id mollis ipsum.', 'uploads/project-3.webp', 'show', '2022-06-23', '07:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `panel_services`
--

CREATE TABLE `panel_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_title` varchar(255) DEFAULT NULL,
  `icon_icon` varchar(225) DEFAULT NULL,
  `text_description` text,
  `visibility` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_services`
--

INSERT INTO `panel_services` (`id`, `hash_id`, `input_title`, `icon_icon`, `text_description`, `visibility`, `date_created`, `time_created`) VALUES
(1, '23trdes45678ghjr74', 'Business Management And Training', 'fa-crown', '<p>Ever wondered why 95% of every SME startup fails in their first 5 years of establishment? it boils down to the business management techniques and strategies they have chosen to implement. The high mortality rate in the SME and MSME sector is majorly caused by inadequate business management skills which include poor marketing strategies, poor business coordination, and inability to follow proper business planning, among others.</p><p>We are a management consulting firm with a proven track record of successful implementation of workable and scalable self-sufficient business management techniques. with several experienced consultants, that specializes in helping businesses thrive in any and all condition or environment, we are prepared and ready to provide you with expert business management services to ensure profitability and sustainability.&nbsp;</p>', 'show', '2020-03-18', '11:00:00'),
(2, '3456sdfgh456cvbd', 'Account Auditing And Cost control', 'fa-crown', '<p>Sustainability is every business owner\'s dream. The ability to sustain operations and daily activities lies majorly In how the company\'s funds are being utilized and accounted for.</p><p>We are equipped with professional accounting experts to help your business maintain steady momentum through various cost control measures to boose profitability, and top-notch account monitoring to ensure long-term sustainability.</p>', 'show', '2020-06-17', '11:33:49'),
(3, '23trdes45678gh54rdr74', 'Fundraising', 'fa-crown', '<p>Business financing is a major driving force behind the success of any enterprise. Glidex Consulting provides expert fund sourcing service, which includes access to loans, venture capital, angel investors, and private equity funding.</p><p>We ensure that businesses are provided with the best offer possible in little or no time.&nbsp;</p>', 'show', '2020-03-18', '11:00:00'),
(4, '3456sdfgh43343f56cvbd', 'Human Resource Management', 'fa-crown', '<p>The staff and management of any organization are majorly responsible for her success. We help in recruiting the best-fitted employees for open positions, and we help manage and train your employees to incorporate a healthy and better work lifestyle.<br>&nbsp;</p>', 'show', '2020-06-17', '11:33:49');

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
(1, '2345tyuhygfdsae4567654', 'Boluwatife Matt Oladejo', 'CEO', 'https://www.linkedin.com/in/boluwatife-matt-oladejo-945bb7b6/', '', '', '', '/dummy.png', 'show', '2020-09-09', '09:11:24'),
(2, '65gfr765hgf765hgf', 'Stephen Smith', 'Marketing Director', 'https://www.linkedin.com/in/stephen-a-b4762a100/', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', '/dummy.png', 'show', '2019-09-09', '11:33:49'),
(3, '34yfds3456juhgf345', 'Joan Akinbinu', 'Director', 'https://www.linkedin.com/in/joan-a-13b630227/', '', 'http://instagram.com/akinbinujoan', '', '/dummy.png', 'show', '2020-05-22', '04:15:09'),
(4, '234jhbgv2345jhgfw345hgfd345', 'Segun Cadmus', 'Lead Consultant', 'http://linkedin.com', 'http://facebook.com', 'http://instagram.com', 'http://twitter.com', '/dummy.png', 'show', '2020-06-17', '12:52:46');

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
-- Table structure for table `read_working_hours`
--

CREATE TABLE `read_working_hours` (
  `id` int(10) UNSIGNED NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  `input_day_span` text NOT NULL,
  `input_time_span` char(150) DEFAULT NULL,
  `image_1` varchar(225) NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_working_hours`
--

INSERT INTO `read_working_hours` (`id`, `hash_id`, `input_day_span`, `input_time_span`, `image_1`, `visibility`, `date_created`, `time_created`) VALUES
(1, '345uhygf345yhgf', 'Monday to Friday', '9:00AM to 7:00PM', 'https://glidexconsulting.com/uploads/165296211629948filename.jpg', 'show', '2020-06-21', '15:09:13');

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_blog`
--
ALTER TABLE `panel_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_faq`
--
ALTER TABLE `panel_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_gallery`
--
ALTER TABLE `panel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_projects`
--
ALTER TABLE `panel_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_services`
--
ALTER TABLE `panel_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_slider`
--
ALTER TABLE `panel_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_teams`
--
ALTER TABLE `panel_teams`
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
-- Indexes for table `read_working_hours`
--
ALTER TABLE `read_working_hours`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `panel_blog`
--
ALTER TABLE `panel_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `panel_faq`
--
ALTER TABLE `panel_faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `panel_gallery`
--
ALTER TABLE `panel_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `panel_projects`
--
ALTER TABLE `panel_projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `panel_services`
--
ALTER TABLE `panel_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `panel_slider`
--
ALTER TABLE `panel_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `panel_teams`
--
ALTER TABLE `panel_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `read_working_hours`
--
ALTER TABLE `read_working_hours`
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
