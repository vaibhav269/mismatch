-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 07:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mismatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_block`
--

CREATE TABLE IF NOT EXISTS `mismatch_block` (
`block_id` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TO_USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_chat`
--

CREATE TABLE IF NOT EXISTS `mismatch_chat` (
`chat_id` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TO_USER_ID` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1333 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mismatch_chat`
--

INSERT INTO `mismatch_chat` (`chat_id`, `USER_ID`, `TO_USER_ID`, `message`, `time`, `seen`) VALUES
(1292, 12, 11, ' hiii ', '2017-07-12 08:40:40', 0),
(1293, 33, 13, ' hello ', '2017-07-12 12:47:47', 0),
(1294, 33, 13, ' 12345678990-= ', '2017-07-12 12:47:51', 0),
(1295, 33, 13, ' !@#$%^&amp;*() ', '2017-07-12 12:47:58', 0),
(1296, 33, 13, ' \\n ', '2017-07-12 12:48:01', 0),
(1297, 33, 13, ' ("\\n") ', '2017-07-12 12:48:10', 0),
(1298, 33, 13, ' <img style="display:inline" src=".\\selected emoji\\8.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\11.png" <="" img="">\\t("\\n") ', '2017-07-12 12:48:31', 0),
(1299, 12, 11, ' hel ', '2017-07-12 13:55:44', 0),
(1300, 12, 11, ' hgeljvewf<img style="display:inline" src=".\\selected emoji\\4.png" <="" img="">bkewads ', '2017-07-12 13:56:03', 0),
(1301, 12, 11, ' hfkads fdnsa<img style="display:inline" src=".\\selected emoji\\3.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\3.png" <="" img="">bjksfd  fasd<img style="display:inline" src=".\\selected emoji\\6.png" <="" img=""> ', '2017-07-12 13:56:12', 0),
(1302, 12, 11, ' <img style="display:inline" src=".\\selected emoji\\9.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\7.png" <="" img=""> ', '2017-07-12 13:56:49', 0),
(1303, 12, 11, ' &lt;div&gt;gekl&lt;\\div&gt; ', '2017-07-12 13:58:24', 0),
(1304, 12, 11, ' &lt;code&gt;hello&lt;\\code&gt; ', '2017-07-12 13:58:34', 0),
(1305, 12, 11, ' &lt;code&gt;afsdfds&lt;\\code&gt; ', '2017-07-12 13:58:53', 0),
(1306, 12, 14, ' hiiii ', '2017-07-13 11:01:27', 0),
(1307, 12, 14, ' hello ', '2017-07-13 11:01:30', 0),
(1308, 12, 14, ' hello ', '2017-07-22 20:27:41', 0),
(1309, 62, 12, ' hello abc ', '2017-07-24 11:14:12', 0),
(1310, 62, 12, ' sorry you are bc too ', '2017-07-24 11:14:24', 0),
(1311, 62, 12, ' <img style="display:inline" src=".\\selected emoji\\4.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\4.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\4.png" <="" img=""> ', '2017-07-24 11:14:29', 0),
(1312, 62, 12, ' fds ', '2017-07-24 11:14:47', 0),
(1313, 12, 62, ' chup be ', '2017-07-24 11:26:45', 0),
(1314, 12, 62, ' get lost you asshole ', '2017-07-24 11:26:52', 0),
(1315, 12, 62, ' hello ', '2017-07-27 07:15:45', 0),
(1316, 12, 62, ' <img style="display:inline" src=".\\selected emoji\\2.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\2.png" <="" img=""> ', '2017-07-27 07:15:52', 0),
(1317, 12, 11, ' jle ', '2017-07-27 07:16:50', 0),
(1318, 12, 11, ' ble ', '2017-07-27 07:16:54', 0),
(1319, 12, 11, ' hiii ', '2017-07-27 19:47:32', 0),
(1320, 12, 11, ' helo ', '2017-07-27 19:47:35', 0),
(1321, 12, 62, ' hiii ', '2017-07-28 14:23:31', 0),
(1322, 12, 62, ' hy ', '2017-07-28 14:23:52', 0),
(1323, 12, 11, ' yo ', '2017-07-30 19:08:06', 0),
(1324, 12, 22, ' hiiiii ', '2017-08-04 13:40:50', 0),
(1325, 12, 14, ' goa  ', '2017-08-04 13:43:02', 0),
(1326, 12, 14, ' gower ', '2017-08-04 13:43:10', 0),
(1327, 12, 22, ' <img style="display:inline" src=".\\selected emoji\\3.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\3.png" <="" img=""> <img style="display:inline" src=".\\selected emoji\\3.png" <="" img=""> ', '2017-08-04 13:44:11', 0),
(1328, 12, 127, ' heart ', '2017-08-04 13:45:04', 0),
(1329, 12, 127, ' &lt;3 ', '2017-08-04 13:45:08', 0),
(1330, 12, 127, ' &lt;:3 ', '2017-08-04 13:45:12', 0),
(1331, 12, 127, ' :) ', '2017-08-04 13:45:16', 0),
(1332, 12, 14, ' hello ', '2017-08-13 12:24:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_response`
--

CREATE TABLE IF NOT EXISTS `mismatch_response` (
`RESPONSE_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TOPIC_ID` int(11) NOT NULL,
  `response` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=576 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mismatch_response`
--

INSERT INTO `mismatch_response` (`RESPONSE_ID`, `USER_ID`, `TOPIC_ID`, `response`) VALUES
(1, 12, 1, 0),
(2, 12, 2, 0),
(3, 12, 3, 0),
(4, 12, 4, 0),
(5, 12, 5, 0),
(6, 12, 6, 0),
(7, 12, 7, 0),
(8, 12, 8, 0),
(9, 12, 9, 0),
(10, 12, 10, 0),
(11, 12, 11, 0),
(12, 12, 12, 0),
(13, 12, 13, 0),
(14, 12, 14, 0),
(15, 12, 15, 0),
(16, 12, 16, 0),
(17, 12, 17, 0),
(18, 12, 18, 0),
(19, 12, 19, 0),
(20, 12, 20, 0),
(21, 12, 21, 0),
(22, 12, 22, 0),
(23, 12, 23, 0),
(24, 12, 24, 0),
(25, 12, 25, 0),
(26, 11, 1, 1),
(27, 11, 2, 1),
(28, 11, 3, 1),
(29, 11, 4, 1),
(30, 11, 5, 1),
(31, 11, 6, 1),
(32, 11, 7, 1),
(33, 11, 8, 1),
(34, 11, 9, 1),
(35, 11, 10, 1),
(36, 11, 11, 1),
(37, 11, 12, 1),
(38, 11, 13, 1),
(39, 11, 14, 1),
(40, 11, 15, 1),
(41, 11, 16, 1),
(42, 11, 17, 1),
(43, 11, 18, 1),
(44, 11, 19, 1),
(45, 11, 20, 1),
(46, 11, 21, 1),
(47, 11, 22, 1),
(48, 11, 23, 1),
(49, 11, 24, 1),
(50, 11, 25, 1),
(51, 15, 1, 0),
(52, 15, 2, 0),
(53, 15, 3, 0),
(54, 15, 4, 0),
(55, 15, 5, 0),
(56, 15, 6, 1),
(57, 15, 7, 1),
(58, 15, 8, 1),
(59, 15, 9, 1),
(60, 15, 10, 1),
(61, 15, 11, 1),
(62, 15, 12, 1),
(63, 15, 13, 1),
(64, 15, 14, 0),
(65, 15, 15, 0),
(66, 15, 16, 1),
(67, 15, 17, 1),
(68, 15, 18, 0),
(69, 15, 19, 0),
(70, 15, 20, 0),
(71, 15, 21, 1),
(72, 15, 22, 1),
(73, 15, 23, 1),
(74, 15, 24, 1),
(75, 15, 25, 1),
(76, 16, 1, 0),
(77, 16, 2, 0),
(78, 16, 3, 0),
(79, 16, 4, 0),
(80, 16, 5, 0),
(81, 16, 6, 1),
(82, 16, 7, 1),
(83, 16, 8, 1),
(84, 16, 9, 1),
(85, 16, 10, 1),
(86, 16, 11, 1),
(87, 16, 12, 1),
(88, 16, 13, 1),
(89, 16, 14, 0),
(90, 16, 15, 0),
(91, 16, 16, 1),
(92, 16, 17, 1),
(93, 16, 18, 0),
(94, 16, 19, 0),
(95, 16, 20, 0),
(96, 16, 21, 1),
(97, 16, 22, 1),
(98, 16, 23, 1),
(99, 16, 24, 1),
(100, 16, 25, 1),
(101, 13, 1, 0),
(102, 13, 2, 0),
(103, 13, 3, 0),
(104, 13, 4, 0),
(105, 13, 5, 0),
(106, 13, 6, 0),
(107, 13, 7, 1),
(108, 13, 8, 0),
(109, 13, 9, 0),
(110, 13, 10, 0),
(111, 13, 11, 0),
(112, 13, 12, 0),
(113, 13, 13, 0),
(114, 13, 14, 0),
(115, 13, 15, 0),
(116, 13, 16, 0),
(117, 13, 17, 0),
(118, 13, 18, 0),
(119, 13, 19, 0),
(120, 13, 20, 0),
(121, 13, 21, 0),
(122, 13, 22, 0),
(123, 13, 23, 0),
(124, 13, 24, 0),
(125, 13, 25, 0),
(126, 14, 1, 0),
(127, 14, 2, 0),
(128, 14, 3, 0),
(129, 14, 4, 0),
(130, 14, 5, 0),
(131, 14, 6, 1),
(132, 14, 7, 1),
(133, 14, 8, 1),
(134, 14, 9, 1),
(135, 14, 10, 1),
(136, 14, 11, 1),
(137, 14, 12, 1),
(138, 14, 13, 1),
(139, 14, 14, 0),
(140, 14, 15, 0),
(141, 14, 16, 1),
(142, 14, 17, 1),
(143, 14, 18, 0),
(144, 14, 19, 0),
(145, 14, 20, 0),
(146, 14, 21, 1),
(147, 14, 22, 1),
(148, 14, 23, 1),
(149, 14, 24, 1),
(150, 14, 25, 1),
(151, 17, 1, 1),
(152, 17, 2, 1),
(153, 17, 3, 0),
(154, 17, 4, 0),
(155, 17, 5, 1),
(156, 17, 6, 0),
(157, 17, 7, 0),
(158, 17, 8, 0),
(159, 17, 9, 1),
(160, 17, 10, 0),
(161, 17, 11, 1),
(162, 17, 12, 1),
(163, 17, 13, 1),
(164, 17, 14, 1),
(165, 17, 15, 0),
(166, 17, 16, 0),
(167, 17, 17, 1),
(168, 17, 18, 0),
(169, 17, 19, 1),
(170, 17, 20, 1),
(171, 17, 21, 1),
(172, 17, 22, 0),
(173, 17, 23, 1),
(174, 17, 24, 0),
(175, 17, 25, 0),
(176, 18, 1, 0),
(177, 18, 2, 1),
(178, 18, 3, 0),
(179, 18, 4, 1),
(180, 18, 5, 0),
(181, 18, 6, 1),
(182, 18, 7, 0),
(183, 18, 8, 1),
(184, 18, 9, 0),
(185, 18, 10, 1),
(186, 18, 11, 1),
(187, 18, 12, 0),
(188, 18, 13, 1),
(189, 18, 14, 0),
(190, 18, 15, 0),
(191, 18, 16, 1),
(192, 18, 17, 0),
(193, 18, 18, 1),
(194, 18, 19, 1),
(195, 18, 20, 1),
(196, 18, 21, 1),
(197, 18, 22, 1),
(198, 18, 23, 1),
(199, 18, 24, 1),
(200, 18, 25, 1),
(201, 19, 1, 1),
(202, 19, 2, 1),
(203, 19, 3, 1),
(204, 19, 4, 1),
(205, 19, 5, 1),
(206, 19, 6, 1),
(207, 19, 7, 1),
(208, 19, 8, 1),
(209, 19, 9, 1),
(210, 19, 10, 1),
(211, 19, 11, 1),
(212, 19, 12, 1),
(213, 19, 13, 1),
(214, 19, 14, 1),
(215, 19, 15, 1),
(216, 19, 16, 1),
(217, 19, 17, 1),
(218, 19, 18, 1),
(219, 19, 19, 1),
(220, 19, 20, 1),
(221, 19, 21, 1),
(222, 19, 22, 1),
(223, 19, 23, 1),
(224, 19, 24, 1),
(225, 19, 25, 1),
(226, 20, 1, 0),
(227, 20, 2, 0),
(228, 20, 3, 0),
(229, 20, 4, 1),
(230, 20, 5, 0),
(231, 20, 6, 0),
(232, 20, 7, 0),
(233, 20, 8, 0),
(234, 20, 9, 1),
(235, 20, 10, 0),
(236, 20, 11, 1),
(237, 20, 12, 0),
(238, 20, 13, 0),
(239, 20, 14, 0),
(240, 20, 15, 0),
(241, 20, 16, 0),
(242, 20, 17, 0),
(243, 20, 18, 0),
(244, 20, 19, 0),
(245, 20, 20, 0),
(246, 20, 21, 0),
(247, 20, 22, 1),
(248, 20, 23, 0),
(249, 20, 24, 0),
(250, 20, 25, 1),
(251, 21, 1, 1),
(252, 21, 2, 1),
(253, 21, 3, 1),
(254, 21, 4, 1),
(255, 21, 5, 1),
(256, 21, 6, 1),
(257, 21, 7, 1),
(258, 21, 8, 1),
(259, 21, 9, 1),
(260, 21, 10, 1),
(261, 21, 11, 1),
(262, 21, 12, 1),
(263, 21, 13, 1),
(264, 21, 14, 1),
(265, 21, 15, 1),
(266, 21, 16, 1),
(267, 21, 17, 1),
(268, 21, 18, 1),
(269, 21, 19, 1),
(270, 21, 20, 1),
(271, 21, 21, 1),
(272, 21, 22, 1),
(273, 21, 23, 1),
(274, 21, 24, 1),
(275, 21, 25, 1),
(276, 22, 1, 1),
(277, 22, 2, 1),
(278, 22, 3, 1),
(279, 22, 4, 1),
(280, 22, 5, 1),
(281, 22, 6, 1),
(282, 22, 7, 1),
(283, 22, 8, 1),
(284, 22, 9, 1),
(285, 22, 10, 1),
(286, 22, 11, 1),
(287, 22, 12, 1),
(288, 22, 13, 1),
(289, 22, 14, 1),
(290, 22, 15, 1),
(291, 22, 16, 1),
(292, 22, 17, 1),
(293, 22, 18, 1),
(294, 22, 19, 1),
(295, 22, 20, 1),
(296, 22, 21, 1),
(297, 22, 22, 1),
(298, 22, 23, 1),
(299, 22, 24, 1),
(300, 22, 25, 1),
(301, 23, 1, 1),
(302, 23, 2, 1),
(303, 23, 3, 1),
(304, 23, 4, 1),
(305, 23, 5, 1),
(306, 23, 6, 1),
(307, 23, 7, 1),
(308, 23, 8, 1),
(309, 23, 9, 1),
(310, 23, 10, 1),
(311, 23, 11, 1),
(312, 23, 12, 1),
(313, 23, 13, 1),
(314, 23, 14, 1),
(315, 23, 15, 1),
(316, 23, 16, 1),
(317, 23, 17, 1),
(318, 23, 18, 1),
(319, 23, 19, 1),
(320, 23, 20, 1),
(321, 23, 21, 1),
(322, 23, 22, 1),
(323, 23, 23, 1),
(324, 23, 24, 1),
(325, 23, 25, 1),
(326, 24, 1, 1),
(327, 24, 2, 1),
(328, 24, 3, 1),
(329, 24, 4, 1),
(330, 24, 5, 1),
(331, 24, 6, 1),
(332, 24, 7, 1),
(333, 24, 8, 1),
(334, 24, 9, 1),
(335, 24, 10, 1),
(336, 24, 11, 1),
(337, 24, 12, 1),
(338, 24, 13, 1),
(339, 24, 14, 1),
(340, 24, 15, 1),
(341, 24, 16, 1),
(342, 24, 17, 1),
(343, 24, 18, 1),
(344, 24, 19, 1),
(345, 24, 20, 1),
(346, 24, 21, 1),
(347, 24, 22, 1),
(348, 24, 23, 1),
(349, 24, 24, 1),
(350, 24, 25, 1),
(351, 25, 1, 1),
(352, 25, 2, 1),
(353, 25, 3, 1),
(354, 25, 4, 1),
(355, 25, 5, 1),
(356, 25, 6, 1),
(357, 25, 7, 1),
(358, 25, 8, 1),
(359, 25, 9, 1),
(360, 25, 10, 1),
(361, 25, 11, 1),
(362, 25, 12, 1),
(363, 25, 13, 1),
(364, 25, 14, 1),
(365, 25, 15, 1),
(366, 25, 16, 1),
(367, 25, 17, 1),
(368, 25, 18, 1),
(369, 25, 19, 1),
(370, 25, 20, 1),
(371, 25, 21, 1),
(372, 25, 22, 1),
(373, 25, 23, 1),
(374, 25, 24, 1),
(375, 25, 25, 1),
(376, 26, 1, 1),
(377, 26, 2, 1),
(378, 26, 3, 1),
(379, 26, 4, 1),
(380, 26, 5, 1),
(381, 26, 6, 1),
(382, 26, 7, 1),
(383, 26, 8, 1),
(384, 26, 9, 1),
(385, 26, 10, 1),
(386, 26, 11, 1),
(387, 26, 12, 1),
(388, 26, 13, 1),
(389, 26, 14, 1),
(390, 26, 15, 1),
(391, 26, 16, 1),
(392, 26, 17, 1),
(393, 26, 18, 1),
(394, 26, 19, 1),
(395, 26, 20, 1),
(396, 26, 21, 1),
(397, 26, 22, 1),
(398, 26, 23, 1),
(399, 26, 24, 1),
(400, 26, 25, 1),
(401, 27, 1, 1),
(402, 27, 2, 1),
(403, 27, 3, 1),
(404, 27, 4, 1),
(405, 27, 5, 1),
(406, 27, 6, 1),
(407, 27, 7, 1),
(408, 27, 8, 1),
(409, 27, 9, 1),
(410, 27, 10, 1),
(411, 27, 11, 1),
(412, 27, 12, 1),
(413, 27, 13, 1),
(414, 27, 14, 1),
(415, 27, 15, 1),
(416, 27, 16, 1),
(417, 27, 17, 1),
(418, 27, 18, 1),
(419, 27, 19, 1),
(420, 27, 20, 1),
(421, 27, 21, 1),
(422, 27, 22, 1),
(423, 27, 23, 1),
(424, 27, 24, 1),
(425, 27, 25, 1),
(426, 29, 1, 1),
(427, 29, 2, 1),
(428, 29, 3, 0),
(429, 29, 4, 0),
(430, 29, 5, 1),
(431, 29, 6, 1),
(432, 29, 7, 0),
(433, 29, 8, 0),
(434, 29, 9, 0),
(435, 29, 10, 0),
(436, 29, 11, 1),
(437, 29, 12, 1),
(438, 29, 13, 1),
(439, 29, 14, 1),
(440, 29, 15, 0),
(441, 29, 16, 0),
(442, 29, 17, 0),
(443, 29, 18, 1),
(444, 29, 19, 1),
(445, 29, 20, 1),
(446, 29, 21, 1),
(447, 29, 22, 0),
(448, 29, 23, 1),
(449, 29, 24, 0),
(450, 29, 25, 0),
(451, 30, 1, 1),
(452, 30, 2, 0),
(453, 30, 3, 0),
(454, 30, 4, 1),
(455, 30, 5, 1),
(456, 30, 6, 0),
(457, 30, 7, 1),
(458, 30, 8, 1),
(459, 30, 9, 1),
(460, 30, 10, 0),
(461, 30, 11, 1),
(462, 30, 12, 1),
(463, 30, 13, 1),
(464, 30, 14, 1),
(465, 30, 15, 1),
(466, 30, 16, 0),
(467, 30, 17, 0),
(468, 30, 18, 0),
(469, 30, 19, 1),
(470, 30, 20, 0),
(471, 30, 21, 0),
(472, 30, 22, 1),
(473, 30, 23, 1),
(474, 30, 24, 1),
(475, 30, 25, 1),
(476, 33, 1, 0),
(477, 33, 2, 0),
(478, 33, 3, 0),
(479, 33, 4, 0),
(480, 33, 5, 0),
(481, 33, 6, 0),
(482, 33, 7, 0),
(483, 33, 8, 1),
(484, 33, 9, 1),
(485, 33, 10, 0),
(486, 33, 11, 1),
(487, 33, 12, 1),
(488, 33, 13, 1),
(489, 33, 14, 1),
(490, 33, 15, 0),
(491, 33, 16, 1),
(492, 33, 17, 1),
(493, 33, 18, 1),
(494, 33, 19, 1),
(495, 33, 20, 1),
(496, 33, 21, 1),
(497, 33, 22, 1),
(498, 33, 23, 1),
(499, 33, 24, 0),
(500, 33, 25, 0),
(501, 62, 1, 1),
(502, 62, 2, 1),
(503, 62, 3, 1),
(504, 62, 4, 1),
(505, 62, 5, 1),
(506, 62, 6, 1),
(507, 62, 7, 1),
(508, 62, 8, 1),
(509, 62, 9, 1),
(510, 62, 10, 1),
(511, 62, 11, 1),
(512, 62, 12, 1),
(513, 62, 13, 1),
(514, 62, 14, 1),
(515, 62, 15, 1),
(516, 62, 16, 1),
(517, 62, 17, 1),
(518, 62, 18, 1),
(519, 62, 19, 1),
(520, 62, 20, 1),
(521, 62, 21, 1),
(522, 62, 22, 1),
(523, 62, 23, 1),
(524, 62, 24, 1),
(525, 62, 25, 1),
(526, 127, 1, 1),
(527, 127, 2, 1),
(528, 127, 3, 1),
(529, 127, 4, 1),
(530, 127, 5, 1),
(531, 127, 6, 1),
(532, 127, 7, 1),
(533, 127, 8, 1),
(534, 127, 9, 1),
(535, 127, 10, 1),
(536, 127, 11, 1),
(537, 127, 12, 1),
(538, 127, 13, 1),
(539, 127, 14, 1),
(540, 127, 15, 1),
(541, 127, 16, 1),
(542, 127, 17, 1),
(543, 127, 18, 1),
(544, 127, 19, 1),
(545, 127, 20, 1),
(546, 127, 21, 1),
(547, 127, 22, 1),
(548, 127, 23, 1),
(549, 127, 24, 1),
(550, 127, 25, 1),
(551, 129, 1, 1),
(552, 129, 2, 1),
(553, 129, 3, 1),
(554, 129, 4, 1),
(555, 129, 5, 1),
(556, 129, 6, 1),
(557, 129, 7, 1),
(558, 129, 8, 1),
(559, 129, 9, 1),
(560, 129, 10, 1),
(561, 129, 11, 1),
(562, 129, 12, 1),
(563, 129, 13, 1),
(564, 129, 14, 1),
(565, 129, 15, 1),
(566, 129, 16, 1),
(567, 129, 17, 1),
(568, 129, 18, 1),
(569, 129, 19, 1),
(570, 129, 20, 1),
(571, 129, 21, 1),
(572, 129, 22, 1),
(573, 129, 23, 1),
(574, 129, 24, 1),
(575, 129, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_topic`
--

CREATE TABLE IF NOT EXISTS `mismatch_topic` (
`TOPIC_ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mismatch_topic`
--

INSERT INTO `mismatch_topic` (`TOPIC_ID`, `name`, `category`) VALUES
(1, 'Tattoos', 'Appearance'),
(2, 'Gold Chains', 'Appearance'),
(3, 'Body piercings', 'Appearance'),
(4, 'Cowboy boots', 'Appearance'),
(5, 'Long hair', 'Appearance'),
(6, 'Reality TV', 'Entertainment'),
(7, 'Professional wrestling', 'Entertainment'),
(8, 'Horror movies', 'Entertainment'),
(9, 'Easy listening music', 'Entertainment'),
(10, 'The opera', 'Entertainment'),
(11, 'pizza', 'Food'),
(12, 'Homemade dishes', 'Food'),
(13, 'spicy food', 'Food'),
(14, 'Fruits', 'Food'),
(15, 'non vegitarian', 'Food'),
(16, 'Bill Gates', 'people'),
(17, 'Narendra Modi', 'people'),
(18, 'Stephen Hawkings', 'people'),
(19, 'APJ Abdul Kalam', 'people'),
(20, 'Sachin Tendulkar', 'people'),
(21, 'Indoor Gaming', 'Activities'),
(22, 'Outdoor Gaming', 'Activities'),
(23, 'Hiking', 'Activities'),
(24, 'Weightlifting', 'Activities'),
(25, 'Reading', 'Activities');

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_user`
--

CREATE TABLE IF NOT EXISTS `mismatch_user` (
`USER_ID` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `join_date` datetime NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthdate` varchar(25) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `picture` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mismatch_user`
--

INSERT INTO `mismatch_user` (`USER_ID`, `username`, `password`, `join_date`, `first_name`, `last_name`, `gender`, `birthdate`, `city`, `state`, `picture`) VALUES
(11, 'vaibhav', 'f6d4f91291604bb69f6396a91cabd9d4fd2a9a2a', '2017-06-12 08:47:00', 'vaibhav', 'verma', 'M', '1997-11-26', 'nagal', 'up', 'img_silence_demo.jpg'),
(12, 'abc', 'a9993e364706816aba3e25717850c26c9cd0d89d', '2017-06-12 08:48:08', 'abc', 'bc', 'F', '1997-11-26', 'roorkee', 'uttarakhand', 'img_silence_demo.jpg'),
(13, 'anjali', '60284ce206bf1e6b0955c450c6fddac766b0f3d7', '2017-06-12 15:59:25', 'anjali', 'bisht', 'F', '1997-11-26', 'dehradun', 'uttrakhand', 'dp.jpg'),
(14, 'arjun', '9e5366c413685cb0485d044692e200fa40dd567c', '2017-06-12 16:11:38', 'arjun', 'arjun', 'M', '2017-06-30', 'roorkee', 'uttrakhand', 'img_silence_demo.jpg'),
(15, 'pra', 'f3e41b35b5347dcb333523bdc90e96aeef96d538', '2017-06-12 16:12:12', 'pra', 'pra', 'F', '2017-06-09', 'roorkee', 'uttarakhand', 'dp.jpg'),
(16, 'pri', '4eaddd83a3221965b4df86b6e5c69adaa66882cd', '2017-06-12 16:12:40', 'pri', 'pri', 'F', '2017-06-02', 'pri', 'pri', 'img_silence_demo.jpg'),
(17, 'akriti', '7db8caa5f90d6180336f128ca9a8275cf23a17d1', '2017-06-15 19:11:28', 'akriti', 'pandey', 'F', '1995-03-22', 'lucknow', 'up', 'dp.jpg'),
(18, 'vv', '4cf997735475afd79f8711e22efaa9d306294785', '2017-06-15 19:15:35', 'vv', 'vv', 'F', '2017-06-15', 'roorkee', 'uttarakhand', 'img_silence_demo.jpg'),
(19, 'ARYAN', '2c98cef3ec3431130b8f87a372832475d241c7fc', '2017-06-19 10:44:48', 'Aryan', 'Rocks', 'M', '1996-10-24', 'Meerut', 'UP', 'dp.jpg'),
(20, 'vishu', '36095b765314362a2d48fe73ef8e963b617c0316', '2017-06-20 00:34:32', 'vishu', 'verma', 'M', '2000-10-25', 'meerut', 'uttarakhand', 'php.gif'),
(21, 'shivu', '048839cea9bc9828b312b0b79f05d7195094a614', '2017-06-20 02:19:16', 'shivu', 'verma', 'M', '2017-06-20', 'meerut', 'up', 'img_silence_demo.jpg'),
(22, 'vibhu', 'f7e22906fc0c59f42639c87eb87c5caeb2c4e8f1', '2017-06-20 18:41:53', 'vaibhav', 'verma', 'M', '0000-00-00', 'roork', 'uttaarakhand', 'img_silence_demo.jpg'),
(23, 'ab', 'da23614e02469a0d7c7bd1bdab5c9c474b1904dc', '2017-06-20 19:04:37', 'ab', 'acb', 'M', '0000-00-00', 'ab', 'abc', 'img_silence_demo.jpg'),
(24, 'EKACCOUNT', '7003398f8ee0861feabca1fdf1f573b035ad9ab8', '2017-06-20 19:09:46', 'Shivank', 'Verma', 'M', '0000-00-00', 'London', 'United Kingdom', 'dp.jpg'),
(25, 'c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4', '2017-06-20 21:25:15', 'c', 'c', 'M', '2017-06-16', 'c', 'c', 'dp.jpg'),
(26, 'udit', '06ada9e7369d31c5584c5be6880ccf166faf110a', '2017-06-20 22:39:44', 'udit', 'bhaskar', 'M', '2017-06-20', 'baksar', 'up', 'dp.jpg'),
(27, 'mehta', 'ef1033c3d9d58ed65f0c61c241392cf5f1340c0b', '2017-06-20 22:40:52', 'mehta', 'mehta', 'M', '2017-06-20', 'rke', 'up', 'img_silence_demo.jpg'),
(28, 'it', '6c5522ca8af86fc5069b737bb8892b3ea61002c2', '2017-06-25 16:31:40', 'it', 'is', 'M', '0000-00-00', 'it', 'is', 'img_silence_demo.jpg'),
(29, 'Billi Meaw', 'f1bb71b55c496f81c4c5adb43c3412009e3a5643', '2017-07-08 20:35:30', 'Vishakha ', 'Verma', 'F', '1993-07-28', 'Dehradoon', 'Uttarakhand', 'dp.jpg'),
(30, 'arshit', '1bb6aca87c59f6d7cff81bd8b47d1c5faa2377a7', '2017-07-10 13:54:17', 'arshit', 'tyagi', 'M', '1997-07-03', 'roorkee', 'uttarakhand', 'img_silence_demo.jpg'),
(32, 'helo', 'c6efaf27673db4f7d2de52c0ab20a0655112cbad', '2017-07-11 02:59:18', '<script>alert("fuck")</script>', 'hello', 'M', '0000-00-00', 'roorkee', 'up', 'img_silence_demo.jpg'),
(33, 'JON SNOW', 'e92ef0f4c4df045c83520f86b6a8f64c59252c76', '2017-07-12 18:15:24', 'Shivank', 'Verma', 'M', '1996-10-24', 'Meerut', 'UP', 'dp.jpg'),
(34, 'heck', '7bebfcb0744cfb9182c0db55b2eb9ebde29cf571', '2017-07-12 21:06:58', 'heck', 'heck', 'M', '2017-07-12', 'heck', 'heck', 'img_silence_demo.jpg'),
(35, 'PA<24>mnjhuy@#', 'ef1e7a0343a50976a626bcb49bea8da4340cf1d9', '2017-07-13 22:44:09', 'Shivank', 'Verma', 'M', '1996-10-24', 'Meerut', 'UP', '1f642.png'),
(36, 'Hj111111', '5e1d0ff336d964db746f4a32d27627d0ee282853', '2017-07-14 01:28:34', 'as', 'hj', 'M', '2017-07-14', 'hj', 'hj', '1f642.png'),
(37, 'Bc222222', '7272b33483e56db9d86f639330dc87dc486e4d82', '2017-07-14 02:06:22', 'bc', 'bc', 'M', '2017-07-14', 'bc', 'bc', 'img_silence_demo.jpg'),
(39, 'j@#', '27d5482eebd075de44389774fce28c69f45c8a75', '2017-07-14 02:39:03', 'j', 'Jj', 'M', '2017-07-14', 'jj', 'j', '1f642.png'),
(40, '7', '54fd1711209fb1c0781092374132c66e79e2241b', '2017-07-14 02:40:09', 'g', 'g', 'M', '2017-07-14', 'g', 'g', '1f642.png'),
(41, 'h_67', '27d5482eebd075de44389774fce28c69f45c8a75', '2017-07-14 02:41:06', 'h', 'h', 'M', '2017-07-14', 'h', 'h', '1f642.png'),
(42, 'j_h', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', '2017-07-14 02:42:11', 'j', 'j', 'M', '2017-07-14', 'j', 'j', '1f642.png'),
(43, 'h', '27d5482eebd075de44389774fce28c69f45c8a75', '2017-07-14 02:46:52', 'h', 'h', 'M', '2017-07-14', 'h', 'h', '1f642.png'),
(44, 'hj', '623b04843afe5638c5ccdd0ac3350b3c653e9b83', '2017-07-14 03:00:10', 'j', 'J', 'M', '2017-07-14', 'J', 'J', '1f642.png'),
(45, 'ho', '9a76a857ad399b492ba01879d0fa2d717e4430b2', '2017-07-14 03:00:42', 'hj', 'hj', 'M', '2017-07-14', 'hj', 'hj', '1f642.png'),
(46, 'bh', '6de8967f3f33cce72fb2858eaa856fcd7fc8d487', '2017-07-14 03:01:27', 'bh', 'bh', 'M', '0000-00-00', 'bh', 'bh', '1f642.png'),
(47, 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', '2017-07-14 03:02:24', 'b', 'b', 'M', '2017-07-14', 'b', 'b', '1f642.png'),
(48, 'k', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '2017-07-14 03:11:09', 'k', 'k', 'M', '2017-07-14', 'k', 'k', '1f642.png'),
(49, 'jk', '70391c1fb857f620543b546b0e661b989e2c218c', '2017-07-14 13:21:02', 'jk', 'jk', 'M', '0000-00-00', 'jk', 'jk', '1f642.png'),
(50, 'bc', '88fb68249b24d90ec25c067818bfb7aa28d9c820', '2017-07-14 13:36:30', 'bcb', 'bcb', 'M', '0000-00-00', 'bcb', 'bcb', '1f642.png'),
(51, 'a', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', '2017-07-15 01:41:26', 'a', 'a', 'M', '2017-07-15', 'a', 'a', '1f642.png'),
(52, 's', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', '2017-07-15 01:51:14', 's', 's', 'M', '2017-07-15', 's', 's', '1f642.png'),
(53, 'z', 'd08f88df745fa7950b104e4a707a31cfce7b5841', '2017-07-15 01:51:42', 'z', 'z', 'M', '0000-00-00', 'z', 'z', '1f642.png'),
(54, 'aa', '86cc8858b5e66e4e58f47518391a4cda39453134', '2017-07-15 02:05:28', 'a', 'a', 'M', '2017-07-15', 'a', 'a', '1f642.png'),
(55, 'j', 'd3270f852a922a83e8e2dabb8535a68464ec5165', '2017-07-15 02:06:51', 'j', 'j', 'M', '2017-07-15', 'j', 'j', '1f642.png'),
(56, 'aaa', '006c8c3f88017894fa48de569e5962310a9c7865', '2017-07-15 02:07:24', 'a', 'a', 'M', '2017-07-15', 'a', 'aa', '1f642.png'),
(57, 'aaaa', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', '2017-07-15 02:13:49', 'a', 'a', 'M', '2017-07-15', 'a', 'a', '1f642.png'),
(58, 'bbb', 'a3483204ebe41022977c4b56e52b0e0342028b20', '2017-07-15 02:16:41', 'b', 'b', 'M', '2017-07-15', 'b', 'b', '1f642.png'),
(59, 'q', 'fa6977c99b809db68e1c56888ec38bd004719b39', '2017-07-23 02:01:31', 'jk', 'jk', 'M', '2017-07-23', 'jk', 'jk', 'emoji_show.png'),
(60, 'aaaaa', 'e93b4e3c464ffd51732fbd6ded717e9efda28aad', '2017-07-24 16:24:25', 'a', 'a', 'M', '0000-00-00', 'a', 'a', 'emoji_show.png'),
(61, 'hhhh', 'bcb58c91e18656345fafda2f2914264135091014', '2017-07-24 16:36:50', 'h', 'h', 'M', '0000-00-00', 'h', 'h', 'emoji_show.png'),
(62, 'vibhuverma', 'a6cbc953ba9460f6a24967ef005d1651d5b58921', '2017-07-24 16:42:43', 'vibhu', 'verma', 'M', '19-Febuary-2000', 'roorkee', 'uttarakhand', 'guy-proposing2.jpg'),
(63, 'hh', 'bcb58c91e18656345fafda2f2914264135091014', '2017-07-25 11:10:34', 'h', 'h', 'M', '1-January-2017', 'h', 'h', 'emoji_hide.png'),
(64, 'kk', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '2017-07-25 11:11:51', 'k', 'k', 'M', '16-January-2017', 'k', 'k', '1f642.png'),
(65, 'kkk', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '2017-07-25 11:12:14', 'k', 'k', 'M', '1-January-2017', 'k', 'k', '1f642.png'),
(66, 'l', '5af9c3959a9bd7b25614beea8954059e8eb478a1', '2017-07-25 11:12:59', 'l', 'l', 'M', '1-January-2017', 'l', 'l', '1f642.png'),
(67, 'kkkk', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '2017-07-25 11:13:39', 'k', 'k', 'M', '1-January-2017', 'k', 'k', '1f642.png'),
(68, 'lll', '5af9c3959a9bd7b25614beea8954059e8eb478a1', '2017-07-25 11:15:08', 'l', 'l', 'M', '1-January-2017', 'l', 'l', '1f642.png'),
(69, 'i', 'e6ee3fd5c2f53f4faab3f3c3d07faf72f23289ed', '2017-07-25 11:19:39', 'i', 'i', 'M', '1-January-2017', 'i', 'i', '1f642.png'),
(70, 'mmm', 'cecec3ec436bf58a4ecce3e179835e25ff691f3e', '2017-07-25 15:28:03', 'm', 'm', 'M', '1-Feb-2016', 'm', 'm', '1f642.png'),
(71, 'm', 'cecec3ec436bf58a4ecce3e179835e25ff691f3e', '2017-07-25 15:43:34', 'm', 'm', 'M', '90-January-2017', 'm', 'm', 'emoji_show.png'),
(72, 'mm', 'cecec3ec436bf58a4ecce3e179835e25ff691f3e', '2017-07-25 15:45:07', 'm', 'm', 'M', '31-January-2017', 'm', 'm', 'emoji_show.png'),
(73, 'mmmm', 'cecec3ec436bf58a4ecce3e179835e25ff691f3e', '2017-07-25 15:46:44', 'm', 'm', 'M', '29-Febuary-2004', 'm', 'm', 'emoji_hide.png'),
(74, 'kkkkk', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '2017-07-25 15:49:44', 'k', 'k', 'M', '- Day --January-2017', 'k', 'k', 'guy-proposing2.jpg'),
(75, 'w', 'b33b5e3e04dae7c04d1e4dc759ca5c80e26e576a', '2017-07-25 15:50:58', 'w', 'w', 'M', '- Day --January-2017', 'w', 'w', 'emoji_show.png'),
(76, 'ww', 'b33b5e3e04dae7c04d1e4dc759ca5c80e26e576a', '2017-07-25 15:51:52', 'w', 'w', 'M', '- Day --January-2017', 'ww', 'w', 'emoji_show.png'),
(77, 'mk', 'ccc45acab38ca140fb906e9191bbeb5595a544b8', '2017-07-25 15:55:12', 'm', 'm', 'M', 'pp-March-2001', 'mm', 'm', 'emoji_hide.png'),
(78, 'kkkkkk', '92fc472e870b9cf61aa2b6f8bd8267f9c14f58f5', '2017-07-25 16:24:44', 'k', 'k', 'M', '- Day --November-2001', 'k', 'k', '1f642.png'),
(79, 'jj', '609ce8a2e2faae8845d3be484394f2cdf51e4cbd', '2017-07-25 17:45:13', 'k', 'j', 'M', '- Day --January-2017', 'j', 'j', '1f642.png'),
(80, 'p', 'b572dc7bb7e0ff7e2887f32e1b733cffdc954fad', '2017-07-25 17:45:47', 'p', 'pp', 'M', '- Day --January-2017', 'pp', 'p', '1f642.png'),
(81, 'o', '7f8b6b25b3f62699bf073be153438f81e9a2dc51', '2017-07-25 17:49:12', 'o', 'o', 'M', '1-January-- Year -', 'o', 'o', '1f642.png'),
(82, 'll', '5af9c3959a9bd7b25614beea8954059e8eb478a1', '2017-07-25 17:51:28', 'l', 'l', 'M', '1-January-- Year -', 'l', 'l', '1f642.png'),
(83, 'pp', 'b572dc7bb7e0ff7e2887f32e1b733cffdc954fad', '2017-07-25 17:56:13', 'pP', 'p', 'M', '1-January-2017', 'pp', 'pp', 'emoji_hide.png'),
(84, 'ppp', 'b572dc7bb7e0ff7e2887f32e1b733cffdc954fad', '2017-07-25 17:58:00', 'p', 'p', 'M', '19-Febuary-2017', 'p', 'p', 'emoji_show.png'),
(85, 'we', '8008d8c59116c134be545698aded1ef36069b8dd', '2017-07-25 18:24:54', 'p', 'we', 'M', '1-January-- Year -', 'we', 'we', '1f642.png'),
(86, 'jkk', '0f8950ef42b100fa74070f4302963ad4a043808d', '2017-07-25 18:25:59', 'jk', 'jk', 'M', '1-January-- Year -', 'jk', 'jk', '1f642.png'),
(87, 'ppppp', 'b572dc7bb7e0ff7e2887f32e1b733cffdc954fad', '2017-07-25 18:27:35', 'p', 'p', 'M', '1-Febuary-- Year -', 'p', 'p', 'guy-proposing2.jpg'),
(88, 'llll', '5af9c3959a9bd7b25614beea8954059e8eb478a1', '2017-07-25 18:29:20', 'l', 'l', 'M', '1-January-90', 'l', 'l', '1f642.png'),
(89, 'ui', '5ec75cd4e2d386765309e02d12ae946e1f97f1a9', '2017-07-25 18:42:03', 'ui', 'ui', 'M', '1-January-2015', 'ui', 'ui', '1f642.png'),
(90, 'ml', '212cef2f1e919e699c0ffa52467a63ea0a0c89e8', '2017-07-25 19:08:35', 'ml', 'ml', 'M', '1-January-2017', 'ml', 'ml', '1f642.png'),
(91, 'op', '54c275ecefbc2022d3889e40706c7d52e46e847b', '2017-07-25 19:15:48', 'p', 'p', 'M', '1-January-- Year -', 'p', 'p', '1f642.png'),
(92, 'oj', '9bfe132e7b9b9c0ca759b0f91b33db2fc460c7d5', '2017-07-25 19:16:44', 'oj', 'oj', 'M', '2-January-2017', 'oj', 'oj', '1f642.png'),
(93, 'ooj', '68e1c50dd43ae699d22b2a3d2522dbc94e2f6df8', '2017-07-25 19:22:42', 'o', 'o', 'M', '1-January-2017', 'oo', 'o', '1f642.png'),
(94, 'bj', 'd9c0ae93e0adcf2a511ee6a291577770123a2eef', '2017-07-25 19:27:53', 'bj', 'bj', 'M', '1-January-2017', 'bj', 'bj', '1f642.png'),
(95, 'nj', '5e84478e08d1a92a4a09bd0213b3e7b0ccbaa4bb', '2017-07-25 21:43:37', 'nj', 'kn', 'M', '1-January-2017', 'nj', 'nk', 'guy-proposing2.jpg'),
(96, 'nkl', '55466f17cf06116a7f3816132acdca6d564c10e0', '2017-07-25 21:51:05', 'nlk', 'nkl', 'M', '1-- Month --2017', 'nlk', 'nkl', 'emoji_show.png'),
(97, 'po', '8027410bf425901e329de6dc4812379798e3bc1a', '2017-07-25 21:52:27', 'po', 'po', 'M', '31-Febuary-2017', 'po', 'po', '1f642.png'),
(98, 'kljkljlkj', '32322dd762421bcfecee27b8d9a1057ecfef593f', '2017-07-25 21:56:50', 'kl', 'kl', 'M', '1-- Month --2017', 'kl', 'kl', 'emoji_show.png'),
(99, 'njnkjn', '73a374cf71f3fd63539473b82c991cd6b97f377c', '2017-07-25 21:57:14', 'njk', 'njk', 'M', '1-- Month --2017', 'njk', 'njk', '1f642.png'),
(100, 'nlk', '45f0dcdc242bfe12bbf382d44d65ebaef44e8ef3', '2017-07-25 21:58:39', 'nl', 'nkl', 'M', '1-- Month --2017', 'nkl', 'nkl', '1f642.png'),
(101, 'klnkl', '41d6af2c94490b16781e515eb2dba0d9bcfa6d2d', '2017-07-25 22:13:06', 'kn', 'nkl', 'M', '1-January-2017', 'nkl', 'nkl', '1f642.png'),
(102, 'jknnjnj', '89057150a22fedc001ff556a11e904474c514f2d', '2017-07-25 22:14:27', 'njk', 'nj', 'M', '1-January-2017', 'nj', 'k', '1f642.png'),
(103, 'bjkbjbjk', '602a7a43f141943ddd672cea054d367fc235b2e6', '2017-07-25 22:16:34', 'nj', 'jbjb', 'M', '1-- Month --2017', 'bjkjbjb', 'kjkbjb', 'guy-proposing2.jpg'),
(104, 'mlkml', '74826ef4c098f5d693926f69f06c1b9216ebd26e', '2017-07-25 22:24:24', 'mlkmkl', 'mk', 'M', '1-- Month --2017', 'klkml', 'kmlk', '1f642.png'),
(105, 'jbkjkjkb', '77dd786eda1c5a4b46859f1f27d7b5dbd4d6c7d0', '2017-07-25 22:26:30', 'hukbuk', 'kbjjkjk', 'M', '2-Febuary-2017', 'jkbjbk', 'jkbb', '1f642.png'),
(106, 'bjkbjkbjkjbk', '3144c468a1879108ee2b7aa4f33052686ace82d7', '2017-07-25 23:00:33', 'uk', 'bjkbjk', 'M', '1-Febuary-2017', 'bjk', 'bjjbkbjk', '1f642.png'),
(107, 'er', '909f0c9b6de433b23a81fe89fac55fa7510bd83d', '2017-07-27 00:20:27', 'er', 'er', 'M', '1-March-1991', 'er', 'er', 'er'),
(108, 'pop', '4d55d0c9e7ad3c07cc660678a303a7d5ada0943d', '2017-07-27 00:22:53', 'po', 'po', 'M', '1-Febuary-1991', 'op', 'po', 'popAxent-Wear-Cat-Ear-Headphones-a-Cool-'),
(109, 'pw', 'b572dc7bb7e0ff7e2887f32e1b733cffdc954fad', '2017-07-27 00:29:51', 'p', 'p', 'M', '1-Febuary-2017', 'p', 'p', 'pwjpg'),
(110, 'nk', '6aa985a40edbd641ae7e0f163cf3a2def4c68bf5', '2017-07-27 00:30:40', 'nk', 'nk', 'M', '3-January-2017', 'nk', 'nk', 'nk.jpg'),
(111, 'pl', '5c59871d806990b6551ea19248420a2e0d5304d1', '2017-07-27 00:46:20', 'pl', 'pl', 'M', '1-Febuary-2017', 'pl', 'pl', 'pl.torrent'),
(112, 'pk', 'cd316da100427324823ef8d083ba55ba1703841e', '2017-07-27 00:47:16', 'pk', 'pk', 'M', '1-January-2016', 'pk', 'pk', 'pk.torrent'),
(113, 'nkkn', '0c86a8551f52a3b660ddee5c41900d1881a2e07b', '2017-07-27 00:51:46', 'nk', 'nkn', 'M', '1-Febuary-2017', 'nknk', 'nknk', 'nkkn.jpg'),
(114, 'hi', '3085296069762c17b36f0cb5db8110c654b4d669', '2017-07-27 00:52:13', 'ih', 'hi', 'M', '1-January-2016', 'hi', 'hi', 'hi.jpg'),
(115, 'nn', '9e6c47ab512faa326aec4120c4c1dd4414a39297', '2017-07-27 01:02:29', 'nkl', 'nkl', 'M', '1-Febuary-2017', 'nkl', 'nkl', 'nn.png'),
(116, 'nnkl', '2441cb5e7264c3f5ee959e4a3bd2ab4b28710afd', '2017-07-27 01:04:05', 'lk', 'nkl', 'M', '1-Febuary-2016', 'lnkl', 'nklk', 'nnkl.png'),
(117, 'klknlkn', 'e85d2003c6f32f9f69c0c809d9bbfe14c381fd63', '2017-07-27 01:04:46', 'nk', 'nkl', 'M', '2-January-2016', 'nklknl', 'knkn', 'klknlkn.png'),
(118, 'pkpk', 'cd316da100427324823ef8d083ba55ba1703841e', '2017-07-27 01:06:32', 'p', 'pk', 'M', '1-Febuary-2017', 'pk', 'pk', 'pkpk.jpg'),
(119, 'n', '627472552e8f892576d489392eaf4b8a03b4e562', '2017-07-27 01:06:58', 'n', 'n', 'M', '2-January-2016', 'n', 'n', 'n.jpg'),
(120, 'bhbhbhb', 'acf2e6364eab4e4480f3242a4ae58652472c7a05', '2017-07-27 12:42:11', 'bhBH', 'bh', 'M', '1-January-2016', 'bh', 'bh', 'bhbhbhb.jpg'),
(121, 'bjp', 'e88e5cc8af604053611cca9ac50f5dfc882e1c8e', '2017-07-31 01:01:32', 'd', 'b', 'M', '1-January-2017', 'bj', 'bj', 'bjp.jpg'),
(122, 'jojo', 'd84f3cdac1ff2a33109bdf01b6771c7b2216525c', '2017-07-31 01:02:33', 'jo', 'jo', 'M', '3-January-2017', 'jo', 'jo', 'jojo.jpg'),
(123, 'hio', '5286910e6d944e05e903d2e831a0631e73aee25a', '2017-07-31 01:03:31', 'hio', 'hio', 'M', '2-Febuary-2017', 'hio', 'hio', 'hio.jpg'),
(124, 'bjbj', '8eebd02a896a22f124feb396abac70cccc4089e4', '2017-07-31 22:10:53', 'bj', 'bj', 'M', '3-Febuary-2017', 'bj', 'bj', 'bjbj.jpg'),
(125, 'nkk', '182e68728c8b1cbd665d36b23fe389a52e3e3bbc', '2017-07-31 23:37:03', 'nk', 'nk', 'M', '1-January-2017', 'nk', 'nk', 'nkk.jpg'),
(126, 'jbjb', 'ef400ff8e959d02d9b0e8fc9c89d34d8e7619120', '2017-07-31 23:43:36', 'jb', 'bj', 'M', '1-Febuary-2016', 'bj', 'bj', 'jbjb.jpg'),
(127, 'suuu', '8a1604f3febebb363e40a0a03bee1674115beec3', '2017-08-01 23:10:53', 'suuu', 'suuu', 'M', '1-Febuary-2017', 'suuu', 'suuu', 'suuu.jpg'),
(128, 'hike', '87dc93cfe620c4baa64ed917c8ca6b53e9dbd2ca', '2017-08-01 23:59:06', 'hike', 'hike', 'M', '1-Febuary-2017', 'hike', 'hike', 'hike.jpg'),
(129, 'hoke', 'a7a5583bc7beedee79005045b5232cf07bfff1aa', '2017-08-02 00:00:16', 'hoke', 'hoke', 'M', '1-January-2016', 'hoke', 'hoke', 'hoke.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mismatch_block`
--
ALTER TABLE `mismatch_block`
 ADD PRIMARY KEY (`block_id`), ADD KEY `USER_ID` (`USER_ID`), ADD KEY `TO_USER_ID` (`TO_USER_ID`);

--
-- Indexes for table `mismatch_chat`
--
ALTER TABLE `mismatch_chat`
 ADD PRIMARY KEY (`chat_id`), ADD KEY `USER_ID` (`USER_ID`), ADD KEY `TO_USER_ID` (`TO_USER_ID`);

--
-- Indexes for table `mismatch_response`
--
ALTER TABLE `mismatch_response`
 ADD PRIMARY KEY (`RESPONSE_ID`), ADD KEY `USER_ID` (`USER_ID`), ADD KEY `TOPIC_ID` (`TOPIC_ID`);

--
-- Indexes for table `mismatch_topic`
--
ALTER TABLE `mismatch_topic`
 ADD PRIMARY KEY (`TOPIC_ID`);

--
-- Indexes for table `mismatch_user`
--
ALTER TABLE `mismatch_user`
 ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mismatch_block`
--
ALTER TABLE `mismatch_block`
MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mismatch_chat`
--
ALTER TABLE `mismatch_chat`
MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1333;
--
-- AUTO_INCREMENT for table `mismatch_response`
--
ALTER TABLE `mismatch_response`
MODIFY `RESPONSE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=576;
--
-- AUTO_INCREMENT for table `mismatch_topic`
--
ALTER TABLE `mismatch_topic`
MODIFY `TOPIC_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mismatch_user`
--
ALTER TABLE `mismatch_user`
MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mismatch_block`
--
ALTER TABLE `mismatch_block`
ADD CONSTRAINT `mismatch_block_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `mismatch_user` (`USER_ID`),
ADD CONSTRAINT `mismatch_block_ibfk_2` FOREIGN KEY (`TO_USER_ID`) REFERENCES `mismatch_user` (`USER_ID`);

--
-- Constraints for table `mismatch_chat`
--
ALTER TABLE `mismatch_chat`
ADD CONSTRAINT `mismatch_chat_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `mismatch_user` (`USER_ID`),
ADD CONSTRAINT `mismatch_chat_ibfk_2` FOREIGN KEY (`TO_USER_ID`) REFERENCES `mismatch_user` (`USER_ID`);

--
-- Constraints for table `mismatch_response`
--
ALTER TABLE `mismatch_response`
ADD CONSTRAINT `mismatch_response_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `mismatch_user` (`USER_ID`),
ADD CONSTRAINT `mismatch_response_ibfk_2` FOREIGN KEY (`TOPIC_ID`) REFERENCES `mismatch_topic` (`TOPIC_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
