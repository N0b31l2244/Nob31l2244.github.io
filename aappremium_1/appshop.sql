-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 11:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pp_category_api`
--

CREATE TABLE `pp_category_api` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pp_category_api`
--

INSERT INTO `pp_category_api` (`id`, `name`, `img`, `status`, `info`) VALUES
(1, 'Netflix', 'assets/img/icon-product/netflix.gif', '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(2, 'Youtube', 'assets/img/icon-product/youtube.gif', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น Email/Password | <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> '),
(3, 'Disney+', 'assets/img/icon-product/disney+.gif', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Disney+ แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD 4K</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Disney แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://www.hotstar.com/th\" target=\"_blank\">https://www.hotstar.com/th</a></li>  '),
(4, 'MONOMAX', 'assets/img/icon-product/monomax.png', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ MONOMAX แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ MONOMAX แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.monomax.me/\" target=\"_blank\">https://www.monomax.me/</a></li> '),
(5, 'HBO', 'assets/img/icon-product/hbo.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ HBO GO แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ HBO GO แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.hbogo.co.th/\" target=\"_blank\">https://www.hbogo.co.th/</a></li> '),
(6, 'VIU', 'assets/img/icon-product/viu.png', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ VIU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม VIU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ VIU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.viu.com/\" target=\"_blank\">https://www.viu.com/</a></li> '),
(7, 'iQIYI', 'assets/img/icon-product/iQIYI.gif', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ iQIYI แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม iqiyi VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ iQIYI VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.iq.com/\" target=\"_blank\">https://www.iq.com/</a></li> '),
(8, 'WeTV', 'assets/img/icon-product/wetv.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ WeTV แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม WeTV VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ WeTV VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://wetv.vip/\" target=\"_blank\">https://wetv.vip/</a></li> '),
(9, 'Amazon', 'assets/img/icon-product/AmazonPrime.png', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Amazon Prime Video แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Amazon Prime Video แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.primevideo.com/\" target=\"_blank\">https://www.primevideo.com/</a></li> '),
(10, 'Spotify', 'assets/img/icon-product/spotify.gif', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Spotify แอปฟังเพลงออนไลน์ รวมเพลงทุกประเทศ</h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> ระดับพรีเมียม</span></h6> <h6>▶️ ฟังเพลงขนาดปิดหน้าจอไม่มีโฆษณากวนใจ</h6>  <h6>▶️ โหลดเพลงไว้ฟังขนาดออฟไลน์ได้</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Spotify แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://open.spotify.com/\" target=\"_blank\">https://open.spotify.com/</a></li> '),
(11, 'TrueID+', 'assets/img/icon-product/TrueID.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ TrueID แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม TrueID+ แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Phone/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ TrueID แพ็กเกจ  <span class=\"badge bg-warning\">TrueID+ รายเดือน</span></h6>  <li>website <a href=\"https://www.trueid.net/watch/th-th/trueidplus\" target=\"_blank\">https://www.trueid.net/watch/th-th/trueidplus</a></li> '),
(12, 'AIS', 'assets/img/icon-product/AIS.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ AIS Play แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ AIS Play แพ็กเกจ  <span class=\"badge bg-warning\">family รายเดือน</span></h6>  <li>website <a href=\"https://aisplay.ais.co.th/\" target=\"_blank\">https://aisplay.ais.co.th/</a></li> '),
(13, 'Bilibili', 'assets/img/icon-product/billi.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Bilibili แอปดูการ์ตูนอนิเมะ<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Bilibili แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://www.bilibili.tv/th\" target=\"_blank\">https://www.bilibili.tv/th</a></li> '),
(14, 'BeinSports', 'assets/img/icon-product/bein.png', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ beinsports แอปดูกีฬา LIVE สด - ย้อนหลัง<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ beinsports แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://connect-th.beinsports.com/th\" target=\"_blank\">https://connect-th.beinsports.com/th</a></li> '),
(15, 'CH3', 'assets/img/icon-product/ch3plus.png', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ CH3 Plus แอปดูภาพยนตร์ / ซีรีส์ / ละคร การ์ตูน / ข่าวสด ย้อนหลัง <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ CH3 Plus แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://ch3plus.com/\" target=\"_blank\">https://ch3plus.com/</a></li> '),
(16, 'YOUKU', 'assets/img/icon-product/youku.jpg', '1', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ YOUKU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม YOUKU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ YOUKU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://youku.tv/\" target=\"_blank\">https://youku.tv/</a></li> ');

-- --------------------------------------------------------

--
-- Table structure for table `pp_history_api`
--

CREATE TABLE `pp_history_api` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `info` varchar(9999) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `timeadd` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pp_setting`
--

CREATE TABLE `pp_setting` (
  `id` int(11) NOT NULL,
  `web_name` varchar(32) NOT NULL,
  `web_title` varchar(64) NOT NULL,
  `web_description` longtext NOT NULL,
  `web_keywords` longtext NOT NULL,
  `web_phone` varchar(10) NOT NULL,
  `web_status` int(11) NOT NULL,
  `web_view` int(11) NOT NULL,
  `web_keyapi` varchar(64) NOT NULL,
  `web_userapi` varchar(32) NOT NULL,
  `web_line` varchar(255) NOT NULL,
  `web_facebook` varchar(255) NOT NULL,
  `web_promotion` longtext NOT NULL,
  `web_img01` varchar(255) NOT NULL,
  `web_discord` varchar(255) NOT NULL,
  `web_slip_account` varchar(255) NOT NULL,
  `web_slip_name` varchar(255) NOT NULL,
  `web_slip_bank` varchar(255) NOT NULL,
  `web_slip_key` varchar(255) NOT NULL,
  `web_version` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pp_setting`
--

INSERT INTO `pp_setting` (`id`, `web_name`, `web_title`, `web_description`, `web_keywords`, `web_phone`, `web_status`, `web_view`, `web_keyapi`, `web_userapi`, `web_line`, `web_facebook`, `web_promotion`, `web_img01`, `web_discord`, `web_slip_account`, `web_slip_name`, `web_slip_bank`, `web_slip_key`, `web_version`) VALUES
(1, 'AppPremium', 'AppPremium เริ่มต้น10฿', '', 'พร้อมส่งแอพพรีเมี่ยมราคาถูก\nNetflix HD 4K  Youtube Premium  IQIYI WETV MONOMAX HBOGO VIU Disney+ Amazon Prime Video AisPlay YOUKU VIP', '', 0, 3825, '', '', 'https://www.facebook.com/xdnvc', 'https://www.facebook.com/xdnvc', '<p><br></p>', 'https://giphy.com/embed/l0HUpt2s9Pclgt9Vm', '', '1234567891', 'นาย xxxx xxxxx', 'พร้อมเพย์', '', '1.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `pp_shop_stock_api`
--

CREATE TABLE `pp_shop_stock_api` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `price_web` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `up` varchar(255) DEFAULT NULL,
  `showitem` int(11) NOT NULL DEFAULT 1,
  `category` varchar(255) DEFAULT NULL,
  `info` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pp_shop_stock_api`
--

INSERT INTO `pp_shop_stock_api` (`id`, `product_id`, `name`, `price`, `price_web`, `img`, `stock`, `status`, `up`, `showitem`, `category`, `info`) VALUES
(27, '1', 'Netflix 4K /30วัน (จอส่วนตัว)', '90.00', '120', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(28, '2', 'Netflix 4K /7วัน (จอส่วนตัว)', '29.00', '35.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">7วัน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(29, '3', 'Netflix 4K /30วัน (จอแชร์)', '69.00', '89.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '14', 'พร้อมส่ง', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(30, '4', 'Netflix 4K /7วัน (จอแชร์)', '15.00', '25.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">7วัน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>'),
(31, '5', 'Disney+ /30วัน (จอส่วนตัว) (ทุกอุปกรณ์)', '79.00', '89.00', 'https://img_app.byshop.me/api/img/app/Disney.png', '6', 'พร้อมส่ง', '', 1, '3', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Disney+ แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD 4K</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Disney แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://www.hotstar.com/th\" target=\"_blank\">https://www.hotstar.com/th</a></li>  '),
(32, '6', 'Youtube Premium/30วัน (เมลร้าน)', '10.00', '29.00', 'https://img_app.byshop.me/api/img/app/yt.png', '0', 'สินค้าหมด', '', 1, '2', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น Email/Password | <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> '),
(33, '7', 'Youtube Premium/30วัน (เมลตัวเอง)', '10.00', '29.00', 'https://img_app.byshop.me/api/img/app/yt.png', '11', 'พร้อมส่ง', '', 1, '2', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น Email/Password | <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> '),
(34, '8', 'Youtube Premium/1ปี (เมลตัวเอง)', '450.00', '590.00', 'https://img_app.byshop.me/api/img/app/yt.png', '0', 'สินค้าหมด', '', 1, '2', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น Email/Password | <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> '),
(35, '9', 'MONOMAX/30วัน (จอส่วนตัว)', '35.00', '49.00', 'https://img_app.byshop.me/api/img/app/monomax.png', '0', 'สินค้าหมด', '', 1, '4', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ MONOMAX แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ MONOMAX แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.monomax.me/\" target=\"_blank\">https://www.monomax.me/</a></li> '),
(36, '10', 'MONOMAX/30วัน (จอแชร์)', '25.00', '39.00', 'https://img_app.byshop.me/api/img/app/monomax.png', '7', 'พร้อมส่ง', '', 1, '4', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ MONOMAX แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ MONOMAX แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.monomax.me/\" target=\"_blank\">https://www.monomax.me/</a></li> '),
(37, '11', 'HBO GO/30วัน', '45.00', '60.00', 'https://img_app.byshop.me/api/img/app/hbo.png', '10', 'พร้อมส่ง', '', 1, '5', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ HBO GO แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ HBO GO แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.hbogo.co.th/\" target=\"_blank\">https://www.hbogo.co.th/</a></li> '),
(38, '12', 'VIU Premium/30วัน', '10.00', '29.00', 'https://img_app.byshop.me/api/img/app/viu.png', '40', 'พร้อมส่ง', '', 1, '6', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ VIU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม VIU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ VIU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.viu.com/\" target=\"_blank\">https://www.viu.com/</a></li> '),
(39, '13', 'iQIYI GOLD /30วัน', '22.00', '39.00', 'https://img_app.byshop.me/api/img/app/iq.png', '0', 'สินค้าหมด', '', 1, '7', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ iQIYI แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม iqiyi VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ iQIYI VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.iq.com/\" target=\"_blank\">https://www.iq.com/</a></li> '),
(40, '14', 'WeTV VIP /30วัน', '20.00', '39.00', 'https://img_app.byshop.me/api/img/app/wetv.png', '0', 'สินค้าหมด', '', 1, '8', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ WeTV แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม WeTV VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ WeTV VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://wetv.vip/\" target=\"_blank\">https://wetv.vip/</a></li> '),
(41, '15', 'Amazon Prime Video/30วัน', '45.00', '59.00', 'https://img_app.byshop.me/api/img/app/pv.png', '0', 'สินค้าหมด', '', 1, '9', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Amazon Prime Video แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Amazon Prime Video แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.primevideo.com/\" target=\"_blank\">https://www.primevideo.com/</a></li> '),
(42, '16', 'Amazon Prime Video/7วัน', '10.00', '20.00', 'https://byshop.me/api/img/app/pv.png', '0', 'สินค้าหมด', '', 1, '9', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Amazon Prime Video แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Amazon Prime Video แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.primevideo.com/\" target=\"_blank\">https://www.primevideo.com/</a></li> '),
(43, '17', 'Spotify Premium/30วัน(เมลร้าน)', '10.00', '29.00', 'https://img_app.byshop.me/api/img/app/sf.png', '0', 'สินค้าหมด', '', 1, '10', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Spotify แอปฟังเพลงออนไลน์ รวมเพลงทุกประเทศ</h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> ระดับพรีเมียม</span></h6> <h6>▶️ ฟังเพลงขนาดปิดหน้าจอไม่มีโฆษณากวนใจ</h6>  <h6>▶️ โหลดเพลงไว้ฟังขนาดออฟไลน์ได้</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Spotify แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://open.spotify.com/\" target=\"_blank\">https://open.spotify.com/</a></li> '),
(44, '18', 'TrueID+ /30วัน', '25.00', '29.00', 'https://img_app.byshop.me/api/img/app/trueid+.png', '0', 'สินค้าหมด', '', 1, '11', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ TrueID แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม TrueID+ แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Phone/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ TrueID แพ็กเกจ  <span class=\"badge bg-warning\">TrueID+ รายเดือน</span></h6>  <li>website <a href=\"https://www.trueid.net/watch/th-th/trueidplus\" target=\"_blank\">https://www.trueid.net/watch/th-th/trueidplus</a></li> '),
(45, '19', 'AIS Play /30วัน', '10.00', '29.00', 'https://img_app.byshop.me/api/img/app/ais.png', '0', 'สินค้าหมด', '', 1, '12', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ AIS Play แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ AIS Play แพ็กเกจ  <span class=\"badge bg-warning\">family รายเดือน</span></h6>  <li>website <a href=\"https://aisplay.ais.co.th/\" target=\"_blank\">https://aisplay.ais.co.th/</a></li> '),
(46, '20', 'Bilibili /30วัน', '25.00', '39.00', 'https://img_app.byshop.me/api/img/app/bb.png', '0', 'สินค้าหมด', '', 1, '13', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Bilibili แอปดูการ์ตูนอนิเมะ<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Bilibili แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://www.bilibili.tv/th\" target=\"_blank\">https://www.bilibili.tv/th</a></li> '),
(47, '21', 'Netflix 4K /1วัน (จอส่วนตัว)', '7.00', '10.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '11', 'พร้อมส่ง', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">1วัน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(48, '22', 'Netflix 4K /1วัน (จอแชร์)', '5.00', '10.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '14', 'พร้อมส่ง', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">1วัน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(49, '23', 'Netflix 4K /30วัน (TV) (จอส่วนตัว)', '159.00', '179.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(50, '24', 'YOUKU VIP /30วัน', '29.00', '39.00', 'https://img_app.byshop.me/api/img/app/&n.png', '15', 'พร้อมส่ง', '', 1, '16', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ YOUKU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม YOUKU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ YOUKU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://youku.tv/\" target=\"_blank\">https://youku.tv/</a></li> '),
(51, '25', 'BeinSports /30วัน', '49.00', '69.00', 'https://img_app.byshop.me/api/img/app/bs.png', '1', 'พร้อมส่ง', '', 1, '14', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ beinsports แอปดูกีฬา LIVE สด - ย้อนหลัง<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ beinsports แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://connect-th.beinsports.com/th\" target=\"_blank\">https://connect-th.beinsports.com/th</a></li> '),
(52, '26', 'CH3 Plus /30วัน', '39.00', '59.00', 'https://img_app.byshop.me/api/img/app/ch3.png', '0', 'สินค้าหมด', '', 1, '15', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ CH3 Plus แอปดูภาพยนตร์ / ซีรีส์ / ละคร การ์ตูน / ข่าวสด ย้อนหลัง <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ CH3 Plus แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://ch3plus.com/\" target=\"_blank\">https://ch3plus.com/</a></li> '),
(53, '27', 'Disney+ /30วัน (จอส่วนตัว) (มือถือ)', '49.00', '69.00', 'https://img_app.byshop.me/api/img/app/Disney.png', '0', 'สินค้าหมด', '', 1, '3', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Disney+ แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD 4K</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับอุปกรณ์ <i>(มือถือ)</i></h6> <h6>▶️ Disney แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://www.hotstar.com/th\" target=\"_blank\">https://www.hotstar.com/th</a></li>  '),
(54, '28', 'Netflix 4K /60วัน (TV) (จอส่วนตัว)', '299.00', '350.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(55, '29', 'Netflix 4K /60วัน (จอส่วนตัว)', '180.00', '220.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '0', 'สินค้าหมด', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(56, '30', 'Netflix 4K /60วัน (จอแชร์)', '138.00', '169.00', 'https://img_app.byshop.me/api/img/app/netflix.png', '4', 'พร้อมส่ง', '', 1, '1', '<h3><u>รายละเอียด</u></h3> \n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \n<h6>▶️ รองรับทุกอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  '),
(57, '100', 'TEST API', '0.00', '9999.00', 'https://img_app.byshop.me/buy/img/img_app/te.png', '999', 'พร้อมส่ง', '', 1, '0', 'ทดสอบ API');

-- --------------------------------------------------------

--
-- Table structure for table `pp_topup`
--

CREATE TABLE `pp_topup` (
  `id` int(11) NOT NULL,
  `topupby` varchar(32) NOT NULL,
  `topuptime` int(11) NOT NULL,
  `point` varchar(7) NOT NULL,
  `status` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `ref1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pp_users`
--

CREATE TABLE `pp_users` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `point` varchar(7) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `timeadd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pp_users`
--

INSERT INTO `pp_users` (`id`, `img`, `username`, `password`, `email`, `point`, `ip`, `status`, `timeadd`) VALUES
(17, 'assets/img/anya.jpg', 'ceoxdnvc', '1c159e3f8b97246947f42b442c5f51dc', 'keacaleikba@gmail.com', '9980001', '::1', 9, '1698950174');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pp_category_api`
--
ALTER TABLE `pp_category_api`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pp_history_api`
--
ALTER TABLE `pp_history_api`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pp_setting`
--
ALTER TABLE `pp_setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pp_shop_stock_api`
--
ALTER TABLE `pp_shop_stock_api`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pp_topup`
--
ALTER TABLE `pp_topup`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pp_users`
--
ALTER TABLE `pp_users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pp_category_api`
--
ALTER TABLE `pp_category_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pp_history_api`
--
ALTER TABLE `pp_history_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pp_setting`
--
ALTER TABLE `pp_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pp_shop_stock_api`
--
ALTER TABLE `pp_shop_stock_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `pp_topup`
--
ALTER TABLE `pp_topup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pp_users`
--
ALTER TABLE `pp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
