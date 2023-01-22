-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 03:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buynsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(7) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `group`) VALUES
(17, 'Nabil', 'Newaz', 'nabilnewaz', 'nabilnewaz@gmail.com', '12345', '1'),
(20, 'Anika', 'Tabassum', 'anikatabassum', 'anika@gmail.com', '12345', '1');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(7) NOT NULL,
  `areaname` varchar(30) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `areaname`, `createdate`) VALUES
(1, 'Dhaka', '2014-11-27'),
(2, 'Chittagong', '2014-11-27'),
(3, 'Sylhet', '2014-11-27'),
(4, 'Barishal', '2014-11-27'),
(5, 'Khulna', '2014-11-27'),
(6, 'Rangpur', '2014-11-27'),
(7, 'Rajshahi', '2014-11-27'),
(8, 'Mymensingh', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(7) NOT NULL,
  `categoryname` varchar(40) NOT NULL,
  `categorydescription` varchar(200) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `categorydescription`, `createdate`) VALUES
(1, 'Business & Industry', 'Business & Industry', '2022-11-27'),
(2, 'Vehicle', 'Vehicle', '2022-11-27'),
(3, 'Book & Magazine', 'Book & Magazine', '2022-11-27'),
(4, 'Electronics', 'Electronics', '2022-11-27'),
(5, 'Home & Living', 'Home & Living', '2022-11-27'),
(6, 'Land & Property', 'Land & Property', '2022-11-27'),
(7, 'Services', 'Services', '2022-11-27'),
(8, 'Health & Beauty', 'Health & Beauty', '2022-11-27'),
(9, 'Fashion & Life Style', 'Fashion & Life Style', '2022-11-27'),
(10, 'Hobby, Sports & Kids', 'Hobby, Sports & Kids', '2022-11-27'),
(11, 'Pet & Animal', 'Pet & Animal', '2022-11-27'),
(12, 'Food & Agriculture', 'Food & Agriculture', '2022-11-27'),
(13, 'Grocery', 'Grocery', '2022-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `date`) VALUES
(7, 'mehedy', 'This is test', '0000-00-00 00:00:00'),
(8, 'mehedy', 'This is test', '0000-00-00 00:00:00'),
(9, 'kamal', 'kwqhrirjin932 9u3942r', '0000-00-00 00:00:00'),
(10, 'mehedy', 'This is test', '0000-00-00 00:00:00'),
(11, 'mehedy', 'This is test', '0000-00-00 00:00:00'),
(12, '', '', '0000-00-00 00:00:00'),
(13, 'kamal', 'name=\"myIframe\"', '0000-00-00 00:00:00'),
(15, 'ewtw4t', '432532156', '2017-09-17 06:36:10'),
(16, 'ewtw4t', '432532156', '2017-09-17 06:54:40'),
(17, 'ewtw4t', '432532156', '2017-09-17 06:57:37'),
(18, 'ewtw4t', '432532156', '2017-09-17 06:58:37'),
(19, 'ewtw4t', '432532156', '2017-09-17 06:58:59'),
(20, 'ewtw4t', '432532156', '2017-09-17 07:00:18'),
(21, 'ewtw4t', '432532156', '2017-09-17 07:01:18'),
(22, 'ewtw4t', '432532156', '2017-09-17 07:01:43'),
(23, 'ewtw4t', '432532156', '2017-09-17 07:01:57'),
(24, 'ewtw4t', '432532156', '2017-09-17 07:02:21'),
(25, 'ewtw4t', '432532156', '2017-09-17 07:02:42'),
(26, 'ewtw4t', '432532156', '2017-09-17 07:04:45'),
(27, 'ewtw4t', '432532156', '2017-09-17 07:05:35'),
(28, 'ewtw4t', '432532156', '2017-09-17 07:06:08'),
(29, 'ewtw4t', '432532156', '2017-09-17 07:07:07'),
(30, 'ewtw4t', '432532156', '2017-09-17 07:07:35'),
(31, 'ewtw4t', '432532156', '2017-09-17 07:08:31'),
(32, 'ewtw4t', '432532156', '2017-09-17 07:08:51'),
(33, 'ewtw4t', '432532156', '2017-09-17 07:09:08'),
(34, 'ewtw4t', '432532156', '2017-09-17 07:09:25'),
(35, 'ewtw4t', '432532156', '2017-09-17 07:09:39'),
(36, 'ewtw4t', '432532156', '2017-09-17 07:10:28'),
(37, 'ewtw4t', '432532156', '2017-09-17 07:11:00'),
(38, 'ewtw4t', '432532156', '2017-09-17 07:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(7) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `featurelist` varchar(300) DEFAULT NULL,
  `price` varchar(20) NOT NULL,
  `pricetype` varchar(100) DEFAULT NULL,
  `discount` int(100) DEFAULT NULL,
  `image0` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `areaid` int(7) NOT NULL,
  `subareaid` int(7) NOT NULL,
  `location` varchar(300) DEFAULT NULL,
  `categoryid` int(7) NOT NULL,
  `subcategoryid` int(7) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `adtype` varchar(50) NOT NULL,
  `condition` varchar(5) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `authenticity` varchar(255) DEFAULT NULL,
  `publishtype` varchar(255) DEFAULT NULL,
  `storeid` int(11) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `wpnumber` varchar(100) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `approve` tinyint(1) NOT NULL,
  `hotitem` tinyint(4) NOT NULL DEFAULT 0,
  `adddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expiredate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `title`, `description`, `featurelist`, `price`, `pricetype`, `discount`, `image0`, `image1`, `image2`, `image3`, `image4`, `areaid`, `subareaid`, `location`, `categoryid`, `subcategoryid`, `size`, `color`, `adtype`, `condition`, `brand`, `authenticity`, `publishtype`, `storeid`, `phone`, `email`, `wpnumber`, `zipcode`, `approve`, `hotitem`, `adddate`, `expiredate`) VALUES
(1, 1, 'Toyota Allion A15 2008', ' ব্র্যান্ড: Toyota\r\nমডেল: Allion\r\nমডেল ইয়ার: 2008\r\nরেজিস্ট্রেশন সাল: 2017\r\nকন্ডিশন: ব্যবহৃত\r\nট্রান্সমিশন: অটোমেটিক\r\nবডি টাইপ: সেলুন\r\nফুয়েল টাইপ: অকটেন\r\nইঞ্জিন ক্ষমতা: ১,৫০০ সিসি\r\nকিলোমিটার চলেছে: ৪১,', '', '1650000', 'Negotiable', 0, '1621331770Wenyo.jpg', '1621338371erGPW.jpg', '1621331770Wenyo.jpg', '1621338371erGPW.jpg', '1621331770Wenyo.jpg', 1, 7, 'Ruposhi Pro Active Village, Mirpur 13', 2, 7, 'Large', 'Sky Blue', 'sell', 'Used', 'Toyota', 'original', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 02:10:07', '0000-00-00 00:00:00'),
(2, 1, 'SAMSUNG QN90B NEO QLED 4K VOICE CONTROL ', ' 75” Class QN90B Samsung Neo QLED 4K Smart TV (2022)\r\nModel: 75QN90B\r\nScreen Size 75\"\r\nResolution 3,840 x 2,160\r\nRefresh Rate - 120Hz\r\nMotion Xcelerator Turbo+\r\nNeo Quantum Processor 4K\r\nEyeComfort Pi', '', '38000', 'On Call', 0, '1672038700C6DTi.jpg', '1672038700htF9c.jpg', '16720387001DbNw.png', '1672038700C6DTi.jpg', '1672038700htF9c.jpg', 2, 27, '55/B, NOAKHALI TOWER, NUE (4th Floor)', 4, 22, '42 inch', 'Black', 'sell', 'New', 'Samsung', '', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 02:14:21', '0000-00-00 00:00:00'),
(3, 1, 'Canon IXUS 185 20.0 MP 8X Optical Zoom D', ' CANON IXUS 185 20.0 MP 8X OPTICAL ZOOM CAMERA\r\nমামা সাউথ আফরিকা থেকে আনছে, শুধু ২/৩ দিন ইউস করা হয়েছে।\r\nফুল ফ্রেস। মার্কেট প্রাইস ১১-১৩ হাজারে দেখতে পাবেন। দাম fixed', '', '3500', 'Negotiable', 0, '1629291870BOZVr.jpg', '1629291870PBhfE.jpg', '16292918706D1i6.jpg', '162929187021684.jpg', '1629291870PBhfE.jpg', 7, 63, 'Maijdee bazar, Sirajganj', 4, 18, 'Small', 'Black', 'rental', 'Used', 'Canon', '', 'individual', 1, '01685346687', 'nabilnewaz@gmail.com', '01685346687', 1700, 0, 0, '2022-12-26 03:20:20', '0000-00-00 00:00:00'),
(4, 1, 'V380 Mini HD 720P IP Camera, Two Way Int', ' V380 Camera General:\r\nModel No: Q6XHR\r\nPort: MICRO USB\r\nVideo Resolution: 1280*720\r\nWi-Fi modes: 2.4GHz\r\nFOV: 120 degrees\r\nIP camera performance: Real-time video capture and recording\r\nMotion Detecti', '', '1600', 'Fixed', 0, '1671035308FP5YY.jpg', '1671035308GyJuZ.jpg', '1671035308o00Sq.jpg', '1671035308upoKn.jpg', '16710353088miHV.jpg', 7, 56, 'Dhanshiri, 639-Ramchandrapur, Basar Road (Southern), Ghoramara, Boalia, Rajshahi, Bangladesh.', 4, 18, 'Small', 'White', 'sell', 'New', 'V380', '', 'store', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1609, 0, 0, '2022-12-26 03:28:07', '0000-00-00 00:00:00'),
(5, 1, 'Double bed for sell', ' Double bed\r\nSize :\r\nLength --> 6 (1/2) ft\r\nWidth --> 5 ft\r\nIts in good condition\r\nLocation: Mirpur dohs, House #1138, rd 10, avenue 9, 2nd floor', '', '15000', 'Negotiable', 0, '1621311172uOLcs.jpg', '1621311172uOLcs.jpg', '1621311172uOLcs.jpg', '1621311172uOLcs.jpg', '1621311172uOLcs.jpg', 1, 7, 'Mirpur dohs, House #1138, rd 10, avenue 9, 2nd floor', 5, 35, 'Double', 'Kathali', 'sell', 'Used', 'Own Made', 'original', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 03:33:55', '0000-00-00 00:00:00'),
(6, 1, 'Xiaomi Enchen Boost Trimmer', ' Model: Boost\r\nMaterial: ABS.\r\nColor: Black.\r\nWeight: 142g\r\nSize: 43 x 164 mm\r\nPower: 5W\r\nVoltage: 5V\r\nCharging Time: 120 Minutes\r\nPower Supply: USB Charging.\r\nOne Button Locks The Length Of The Hairc', '', '1390', 'On Call', 0, '1647207405XGLRi.jpeg', '1647207405pIG3J.jpeg', '1647207405XGLRi.jpeg', '1647207405pIG3J.jpeg', '1647207405XGLRi.jpeg', 1, 7, '19/B, Rasulbag, Mohakhali, Dhaka', 9, 68, 'As Usual', 'Black', 'rental', 'Used', 'Xiaomi', '', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 04:09:44', '0000-00-00 00:00:00'),
(7, 1, 'acoustic guitar , (Thailand )', ' Ekdom Notun 3 month hoise 7500 taka diye kinsilam ,shokh kore kinsilam , Desher bahire chole jabo next month e . bajaitei pari nh ,dui ekdin nara chara korsi khali. almarite jotno kore rekhe disilam ', '', '5480', 'Negotiable', 0, '1643884474AzTEn.jpeg', '1643884474WzZfv.jpeg', '1643884475wep4h.jpeg', '1643884476SVtwM.jpeg', '1643884476z3s8C.jpeg', 1, 7, '15/6, Block-B, Uttora', 10, 73, 'As Usual', 'Glossy wooden', 'sell', 'Used', 'Thailand', 'original', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 04:16:07', '0000-00-00 00:00:00'),
(8, 1, 'Samsung A21s', ' শরীয়তপুর ফেরি ঘাট থেকে নিয়ে যেতে হবে এসে,অরিজিনাল চার্জার আর বক্স দুটোই আছে।কোনো প্রবলেম নেই প্রোডাক্ট এ।দেখে শুনে পণ্য নেবেন,আল্লাহ হাফেজ।', '', '1100', 'Negotiable', 0, '1647223383rcwy8.jpg', '1647223383y1sZm.jpg', '1647223383YOaQu.jpg', '1647223384hhsBg.jpg', '1647223384ijOYk.jpg', 1, 64, 'Shariatpur, Fery Ghat', 4, 28, 'A', 'White', 'sell', 'Used', 'Samsung', 'original', 'individual', 1, '01714940700', 'nabilnewaz@gmail.com', '01714940700', 1209, 0, 0, '2022-12-26 20:04:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_archive`
--

CREATE TABLE `product_archive` (
  `id` int(7) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `areaid` int(7) NOT NULL,
  `subareaid` int(7) NOT NULL,
  `categoryid` int(7) NOT NULL,
  `subcategoryid` int(7) NOT NULL,
  `adtype` varchar(5) NOT NULL,
  `condition` varchar(5) NOT NULL,
  `approve` tinyint(1) NOT NULL,
  `hotitem` tinyint(4) NOT NULL DEFAULT 0,
  `adddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `storeUserId` int(11) NOT NULL,
  `StoreBanner` text NOT NULL,
  `StoreLogo` text NOT NULL,
  `OpeningHours` text NOT NULL,
  `openingHourStart` text NOT NULL,
  `openingHourEnd` text NOT NULL,
  `storeName` text NOT NULL,
  `Slogan` text NOT NULL,
  `Location` text NOT NULL,
  `Website` text NOT NULL,
  `Mobile` text NOT NULL,
  `Email` text NOT NULL,
  `Description` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `youtube` text NOT NULL,
  `storeAddedTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `storeUserId`, `StoreBanner`, `StoreLogo`, `OpeningHours`, `openingHourStart`, `openingHourEnd`, `storeName`, `Slogan`, `Location`, `Website`, `Mobile`, `Email`, `Description`, `facebook`, `twitter`, `linkedin`, `youtube`, `storeAddedTime`) VALUES
(1, 1, '1647206434VjTwF.png', '16472064341Fifv.png', 'always-open', '03:26', '22:26', 'Stnbazar', 'Serve the Humanity, Serve the Almighty', 'Kh-19/B,Rasulbag,Mohakhali', 'https://www.stnbazar.com', '01714940700', 'nabilnewaz@gmail.com', 'Welcome to STN BAZAR,This page is in the business category and all kinds products are available.', '', '', '', '', '2022-12-25 01:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `subarea`
--

CREATE TABLE `subarea` (
  `id` int(7) NOT NULL,
  `subareaname` varchar(30) NOT NULL,
  `areaid` int(7) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `subarea`
--

INSERT INTO `subarea` (`id`, `subareaname`, `areaid`, `createdate`) VALUES
(1, 'Rajbari', 1, '2014-11-27'),
(2, 'Faridpur', 1, '2014-11-27'),
(3, 'Gopalganj', 1, '2014-11-27'),
(4, 'Madaripur', 1, '2014-11-27'),
(5, 'Munshiganj', 1, '2014-11-27'),
(6, 'Manikganj', 1, '2014-11-27'),
(7, 'Dhaka', 1, '2014-11-27'),
(8, 'Narayanganj', 1, '2014-11-27'),
(9, 'kishorganj', 1, '2014-11-27'),
(10, 'Maymanshing', 1, '2014-11-27'),
(11, 'tangail', 1, '2014-11-27'),
(12, 'netrokona', 1, '2014-11-27'),
(13, 'sherpur', 1, '2014-11-27'),
(14, 'jamalpur', 1, '2014-11-27'),
(15, 'gazipur', 1, '2014-11-27'),
(17, 'Barisal', 4, '2015-04-07'),
(18, 'Barguna', 4, '2015-04-07'),
(19, 'Bhola', 4, '2015-04-07'),
(20, 'Jhalokati', 4, '2015-04-07'),
(21, 'Patuakhali', 4, '2015-04-07'),
(22, 'Pirojpur', 4, '2015-04-07'),
(23, 'Chittagong', 2, '2015-04-07'),
(24, 'Bandarban', 2, '2015-04-07'),
(25, 'Brahmanbaria', 2, '2015-04-07'),
(26, 'Chandpur', 2, '2015-04-07'),
(27, 'Comilla', 2, '2015-04-07'),
(28, 'Feni', 2, '2015-04-07'),
(29, 'Khagrachhari', 2, '2015-04-07'),
(30, 'Lakshmipur', 2, '2015-04-07'),
(31, 'Noakhali', 2, '2015-04-07'),
(32, 'Rangamati', 2, '2015-04-07'),
(33, 'Cox\'s Bazar', 2, '2015-04-07'),
(34, 'Sylhet', 3, '2015-04-07'),
(35, 'Moulvibazar', 3, '2015-04-07'),
(36, 'Sunamganj', 3, '2015-04-07'),
(37, 'Habiganj', 3, '2015-04-07'),
(38, 'Khulna', 5, '2015-04-07'),
(39, 'Bagerhat', 5, '2015-04-07'),
(40, 'Chuadanga', 5, '2015-04-07'),
(41, 'Jessore', 5, '2015-04-07'),
(42, 'Jhenaidah', 5, '2015-04-07'),
(43, 'Kushtia', 5, '2015-04-07'),
(44, 'Magura', 5, '2015-04-07'),
(45, 'Meherpur', 5, '2015-04-07'),
(46, 'Narail', 5, '2015-04-07'),
(47, 'Satkhira', 5, '2015-04-07'),
(48, 'Rangpur', 6, '2015-04-07'),
(49, 'Dinajpur', 6, '2015-04-07'),
(50, 'Gaibandha', 6, '2015-04-07'),
(51, 'Kurigram', 6, '2015-04-07'),
(52, 'Lalmonirhat', 6, '2015-04-07'),
(53, 'Nilphamari', 6, '2015-04-07'),
(54, 'Panchagarh', 6, '2015-04-07'),
(55, 'Thakurgaon', 6, '2015-04-07'),
(56, 'Rajshahi', 7, '2015-04-07'),
(57, 'Bogra', 7, '2015-04-07'),
(58, 'Joypurhat', 7, '2015-04-07'),
(59, 'Naogaon', 7, '2015-04-07'),
(60, 'Natore', 7, '2015-04-07'),
(61, 'Chapainawabganj', 7, '2015-04-07'),
(62, 'Pabna', 7, '2015-04-07'),
(63, 'Sirajganj', 7, '2015-04-07'),
(64, 'Shariatpur', 1, '2015-04-07'),
(65, 'Narsingdi', 1, '2015-04-07'),
(66, 'Maijdee', 8, '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(7) NOT NULL,
  `subcategoryname` varchar(40) NOT NULL,
  `categoryid` int(7) NOT NULL,
  `description` varchar(200) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategoryname`, `categoryid`, `description`, `createdate`) VALUES
(1, 'Industry Machinery', 1, 'Industry Machinery', '2022-04-25'),
(2, 'Medical Equipment & Supplies', 1, 'Medical Equipment & Supplies', '2022-04-08'),
(3, 'Office Supplies', 1, 'Office Supplies & Stationary', '2022-04-08'),
(4, 'Licence, Title & Tender', 1, 'Licence, Title & Tender', '2022-04-08'),
(5, 'Safety & Security', 1, 'Safety & Security', '2022-04-08'),
(6, 'Other Industry Items', 1, 'Other Industry Items', '2022-04-08'),
(7, 'Car', 2, 'Car', '2022-04-25'),
(8, 'Bicycle & Three Wheeler', 2, 'Bicycle & Three Wheeler', '2022-04-08'),
(9, 'Motorbike & Scooter', 2, 'Motorbike & Scooter', '2022-04-08'),
(10, 'Truck, Van & Bus', 2, 'Truck, Van & Bus', '2022-04-08'),
(11, 'Boat & Water Transport', 2, 'Boat & Water Transport', '2022-04-08'),
(12, 'Tractor & Heavy-Duty', 2, 'Tractor & Heavy-Duty', '2022-04-08'),
(13, 'Auto Parts & Accessories', 2, 'Auto Parts & Accessories', '2022-04-08'),
(14, 'Auto Service', 2, 'Auto Service', '2022-04-08'),
(15, 'Text Book', 3, 'Text Book', '2022-04-08'),
(16, 'Other Book & Magazine', 3, 'Other Book & Magazine', '2022-04-08'),
(17, 'Air Conditioner ( AC )', 4, 'Air Conditioner ( AC )', '2022-04-25'),
(18, 'Camera & Camcorder', 4, 'Camera & Camcorder', '2022-04-08'),
(19, 'Desktop Computer', 4, 'Desktop Computer', '2022-04-08'),
(20, 'Laptop', 4, 'Laptop', '2022-04-08'),
(21, 'Computer Accessories', 4, 'Computer Accessories', '2022-04-08'),
(22, 'TVs', 4, 'TVs', '2022-04-08'),
(23, 'TV & Video Accessories', 4, 'TV & Video Accessories', '2022-04-25'),
(24, 'Audio & Sound System', 4, 'Audio & Sound System', '2022-04-08'),
(25, 'Printer & Photocopier', 4, 'Printer & Photocopier', '2022-04-08'),
(26, 'Video Game Console & Accessories', 4, 'Game Console & Accessories', '2022-04-08'),
(27, 'Tablet & accessories', 4, 'Tablet & accessories', '2022-04-08'),
(28, 'Mobile Phone', 4, 'Mobile Phone', '2022-04-08'),
(29, 'Mobile Accessories', 4, 'Mobile Accessories', '2022-04-08'),
(30, 'Freeze', 4, 'Freeze', '2022-04-08'),
(31, 'Lighting', 4, 'Lighting', '2022-04-08'),
(32, 'Other Electronics Items', 4, 'Other Electronics Items', '2022-04-08'),
(33, 'Kitchen & Dinning Furniture', 5, 'Kitchen & Dinning Furniture', '2022-04-08'),
(34, 'Office & Shop Furniture', 5, 'Office & Shop Furniture', '2022-04-08'),
(35, 'Bed Room Furniture', 5, 'Bed Room Furniture', '2022-04-08'),
(37, 'Home Appliances', 5, 'Home Appliances', '2022-04-08'),
(38, 'Drawing Room Furniture', 5, 'Drawing Room Furniture', '2022-04-08'),
(39, 'Household Items', 5, 'Household Items', '2022-04-08'),
(40, 'Apartment & Flat', 6, 'Apartment & Flat', '2022-04-08'),
(41, 'House', 6, 'House', '2022-04-08'),
(42, 'Plot & Land', 6, 'Plot & Land', '2022-04-08'),
(43, 'Room', 6, 'Room', '2022-04-08'),
(44, 'Garage', 6, 'Garage', '2022-04-08'),
(45, 'Commercial Property', 6, 'Commercial Property', '2022-04-08'),
(46, 'Business & Technical Services', 7, 'Business & Technical Services', '2022-04-08'),
(47, 'Event & Hospitality', 7, 'Event & Hospitality', '2022-04-08'),
(48, 'Ticket', 7, 'Ticket', '2022-04-08'),
(49, 'Travel & Visa', 7, 'Travel & Visa', '2022-04-08'),
(50, 'Domestic & Personal', 7, 'Domestic & Personal', '2022-04-08'),
(51, 'Health & Life Style', 7, 'Health & Life Style', '2022-04-08'),
(52, 'Tuition', 7, 'Tuition', '2022-04-08'),
(53, 'Study Abroad', 7, 'Study Abroad', '2022-04-08'),
(54, 'Car/Vehicle Rental', 7, 'Car/Vehicle Rental', '2022-04-08'),
(55, 'IT Service', 7, 'IT Service', '2022-04-08'),
(56, 'Domestic & Day Care Service', 7, 'Domestic & Day Care Service', '2022-04-08'),
(57, 'Service & Repair', 7, 'Service & Repair', '2022-04-08'),
(58, 'Other Services', 7, 'Other Services', '2022-04-08'),
(59, 'Beauty product', 8, 'Beauty product', '2022-04-08'),
(60, 'Health products', 8, 'Health products', '2022-04-08'),
(61, 'Jewellery', 9, 'Jewellery', '2022-04-08'),
(62, 'Women\'s Clothing & Accessories', 9, 'Women\'s Clothing & Accessories', '2022-04-08'),
(63, 'Children\'s Clothing & Accessories', 9, 'Children\'s Clothing & Accessories', '2022-04-08'),
(64, 'Watches', 9, 'Watches', '2022-04-08'),
(65, 'Optical Items', 6, 'Optical Items', '2022-04-08'),
(66, 'Shoes & Footwear', 9, 'Shoes & Footwear', '2022-04-08'),
(67, 'Wholesale-Bulk', 9, 'Wholesale-Bulk', '2022-04-08'),
(68, 'Other Fshion & Life Style', 9, 'Other Fshion & Life Style', '2022-04-08'),
(69, 'Bags & Luggage', 9, 'Bags & Luggage', '2022-04-08'),
(70, 'Children\'s Items', 10, 'Children\'s Items', '2022-04-08'),
(71, 'Handicrafts & Decoration', 10, 'Handicrafts & Decoration', '2022-04-08'),
(72, 'Music, Books & Movies', 10, 'Music, Books & Movies', '2022-04-08'),
(73, 'Musical Instruments', 10, 'Musical Instruments', '2022-04-08'),
(74, 'Sports Equipment', 10, 'Sports Equipment', '2022-04-08'),
(75, 'Other Hobby, Spotrs & Kids Items ', 10, 'Other Hobby, Spotrs & Kids Items ', '2022-04-08'),
(76, 'Fitness & Gim Equipment', 10, 'Fitness & Gim Equipment', '2022-04-08'),
(77, 'Pets', 11, 'Pets', '2022-04-08'),
(78, 'Farm Animals', 11, 'Farm Animals', '2022-04-08'),
(79, 'Animal Accessories ', 11, 'Animal Accessories', '2022-04-08'),
(80, 'Other Pets & Animals', 11, 'Other Pets & Animals', '2022-04-08'),
(81, 'Cattle', 11, 'Cattle', '2022-04-08'),
(82, 'Farming Tools & Machinery', 12, 'Farming Tools & Machinery', '2022-04-08'),
(83, 'Food', 12, 'Food', '2022-04-08'),
(84, 'Crops, Seeds & Plants', 12, 'Crops, Seeds & Plants', '2022-04-08'),
(85, 'Other Food & Agriculture', 12, 'Other Food & Agriculture', '2022-04-08'),
(86, 'Meat', 13, 'Meat', '2022-04-08'),
(87, 'Rice', 13, 'Rice', '2022-04-08'),
(88, 'Oil & Fat', 13, 'Oil & Fat', '2022-04-08'),
(89, 'Fruits & Vegetables', 13, 'Fruits & Vegetables', '2022-04-08'),
(90, 'Spices', 13, 'Spices', '2022-04-08'),
(91, 'Canned & Dried Food', 13, 'Canned & Dried Food', '2022-04-08'),
(92, 'Frozen Food', 13, 'Frozen Food', '2022-04-08'),
(94, 'Bakery', 13, 'Bakery', '2022-04-08'),
(95, 'Dairy', 13, 'Dairy', '2022-04-08'),
(96, 'Snacks and Crackers', 13, 'Snacks and Crackers', '2022-04-08'),
(97, 'Drinks', 13, 'Drinks', '2022-04-08'),
(98, 'Toiletries / Personal Hygiene', 13, 'Toiletries / Personal Hygiene', '2022-04-08'),
(99, 'Cleaning Supplies', 13, 'Cleaning Supplies', '2022-04-08'),
(100, 'Disposables', 13, 'Disposables', '2022-04-08'),
(101, 'Other Grocery Item', 13, 'Other Grocery Item', '2022-04-08'),
(102, 'Seafood', 13, 'Seafood', '2022-04-08'),
(103, 'Fish', 13, 'Fish', '2022-04-08');

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_category_item`
-- (See below for the actual view)
--
CREATE TABLE `total_category_item` (
`categoryid` int(7)
,`totalitem` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_subcat_item`
-- (See below for the actual view)
--
CREATE TABLE `total_subcat_item` (
`subcategoryid` int(7)
,`totalitem` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `userip` varchar(15) NOT NULL,
  `referer` varchar(200) NOT NULL,
  `useragent` varchar(200) NOT NULL,
  `visittime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userip`, `referer`, `useragent`, `visittime`) VALUES
(1, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 15:33:36'),
(2, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD13QVFIbUNWZnAmZW5jPUFaUHVydEdyWTFGZlJqTGgzUnJ2Z2syOFZxTXQ3UU1hcnVWRkVkXzZIeW8wTlhMcXhNbmI0aTVxeXlj', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 15:33:59'),
(3, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1ZQVFIQm1YX1dBUUZOUFRLellRUkRHcDlRS3lnYWJsLVpWLS1rR1QxREVIYnpyZyZlbmM9QVpNRUZudTJrOXc3S1hxSThHbDBz', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 15:34:59'),
(4, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1ZQVFIQm1YX1dBUUZOUFRLellRUkRHcDlRS3lnYWJsLVpWLS1rR1QxREVIYnpyZyZlbmM9QVpNRUZudTJrOXc3S1hxSThHbDBz', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 15:50:49'),
(5, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1ZQVFIQm1YX1dBUUZOUFRLellRUkRHcDlRS3lnYWJsLVpWLS1rR1QxREVIYnpyZyZlbmM9QVpNRUZudTJrOXc3S1hxSThHbDBz', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 15:51:35'),
(6, '103.231.228.202', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjY1IFNhZmFyaS81MzcuMzY,', '2015-05-25 16:03:44'),
(7, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL3BvcnRmb2xpby5odG1s', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjY1IFNhZmFyaS81MzcuMzY,', '2015-05-25 16:25:57'),
(8, '182.48.88.7', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDQuMC4yNDAzLjkgU2FmYXJpLzUzNy4zNg,,', '2015-05-25 17:08:15'),
(9, '182.48.88.7', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTk,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDQuMC4yNDAzLjkgU2FmYXJpLzUzNy4zNg,,', '2015-05-25 17:12:20'),
(10, '182.48.88.7', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDQuMC4yNDAzLjkgU2FmYXJpLzUzNy4zNg,,', '2015-05-25 17:15:07'),
(11, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1rQVFHd1hXRXomZW5jPUFaUE0ybEN3WGI4bG9aWloyT0picS14YXJxWlFYOWNiNVQwYUNuVUFEeFA5V0pERVZXNHRBZ0xhWlJM', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 17:28:02'),
(12, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1rQVFHd1hXRXomZW5jPUFaUE0ybEN3WGI4bG9aWloyT0picS14YXJxWlFYOWNiNVQwYUNuVUFEeFA5V0pERVZXNHRBZ0xhWlJM', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-25 17:28:49'),
(13, '72.14.199.43', '', 'TW96aWxsYS81LjAgKGNvbXBhdGlibGUpIEZlZWRmZXRjaGVyLUdvb2dsZTsoK2h0dHA6Ly93d3cuZ29vZ2xlLmNvbS9mZWVkZmV0Y2hlci5odG1sKQ,,', '2015-05-25 23:36:00'),
(14, '24.239.145.84', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny42NSBTYWZhcmkvNTM3LjM2', '2015-05-26 01:58:09'),
(15, '212.40.56.82', '', 'TW96aWxsYS81LjAgKGNvbXBhdGlibGU7IE1KMTJib3QvdjEuNC41OyBodHRwOi8vd3d3Lm1hamVzdGljMTIuY28udWsvYm90LnBocD8rKQ,,', '2015-05-26 03:17:50'),
(16, '202.84.42.69', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1EQVFGTHF3MngmZW5jPUFaUFl0dUVRX1plSGxDb0dINkZBTGRLclFkRlVpSXdqYWNpWjNmMTNqS0FEWEgtOGRkcnk4WUtvcmph', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-05-26 04:26:02'),
(17, '202.84.42.69', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1EQVFGTHF3MngmZW5jPUFaUFl0dUVRX1plSGxDb0dINkZBTGRLclFkRlVpSXdqYWNpWjNmMTNqS0FEWEgtOGRkcnk4WUtvcmph', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-05-26 04:29:01'),
(18, '71.231.180.126', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-26 05:39:32'),
(19, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1SQVFGZ3lzTW4mZW5jPUFaTmJlRnI5ZUhaVW1ra1BmNWtHemlKRlhia19oMkt0aVBocU1WRDVTRW9XOXN1LUpJT3Ywa2htU1BT', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-26 05:45:29'),
(20, '123.49.2.106', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-26 05:45:55'),
(21, '63.141.217.46', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-26 06:24:11'),
(22, '66.249.84.184', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-05-26 07:26:17'),
(23, '150.242.106.6', 'aHR0cDovL3d3dy5nb29nbGUuY29tL3NlYXJjaA,,', 'TW96aWxsYS81LjAgKFgxMTsgTGludXggeDg2XzY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvOyBHb29nbGUgV2ViIFByZXZpZXcpIENocm9tZS8yNy4wLjE0NTMgU2FmYXJpLzUzNy4zNg,,', '2015-05-26 07:26:17'),
(24, '182.48.75.58', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-26 09:49:00'),
(25, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzQuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zNC4w', '2015-05-26 13:50:44'),
(26, '58.65.224.5', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzQuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zNC4w', '2015-05-26 14:03:45'),
(27, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzQuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zNC4w', '2015-05-26 14:27:46'),
(28, '209.15.21.122', '', 'TW96aWxsYS81LjAgKFgxMTsgTGludXggeDg2XzY0OyBydjoxMC4wLjEyKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzIxLjAgV29yZFByZXNzLmNvbSBtU2hvdHM,', '2015-05-26 15:07:16'),
(29, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-26 19:12:49'),
(30, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL3BvcnRmb2xpby5odG1s', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-26 19:17:27'),
(31, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL2luZGV4Lmh0bWw,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-26 19:36:23'),
(32, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny42NSBTYWZhcmkvNTM3LjM2', '2015-05-27 03:36:26'),
(33, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny42NSBTYWZhcmkvNTM3LjM2', '2015-05-27 03:37:07'),
(34, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-27 03:40:18'),
(35, '182.160.113.138', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL2luZGV4Lmh0bWw,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny42NSBTYWZhcmkvNTM3LjM2', '2015-05-27 03:42:09'),
(36, '114.31.4.118', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNS4xOyBydjoxOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzE4LjA,', '2015-05-27 08:22:13'),
(37, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD1NQVFFaTNuaHkmZW5jPUFaTWp1TmNsUjNVTnJBLWJzalBwb2dCYS1JZ3Z5THlPUVdlOFF4ODZabkp4UE81MmdWcmt2MHpaektH', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-27 12:59:45'),
(38, '103.231.228.202', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-27 16:58:16'),
(39, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-27 17:04:57'),
(40, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL2luZGV4Lmh0bWw,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-28 13:48:05'),
(41, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-28 13:49:34'),
(42, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-28 14:46:49'),
(43, '103.15.141.122', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-05-28 18:13:47'),
(44, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:26:30'),
(45, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:27:06'),
(46, '103.231.228.202', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:46:44'),
(47, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:50:43'),
(48, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9ODc,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:53:21'),
(49, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:54:05'),
(50, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocD9iaWdfc2VhcmNoPWNhdA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-29 14:54:16'),
(51, '66.220.158.119', '', 'ZmFjZWJvb2tleHRlcm5hbGhpdC8xLjEgKCtodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9leHRlcm5hbGhpdF91YXRleHQucGhwKQ,,', '2015-05-29 20:36:43'),
(52, '203.82.193.66', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2wucGhwP3U9aHR0cCUzQSUyRiUyRmFtYWRlcmNvZGUuY29tJTJGc29iYXJiYXphYXIlMkYmaD15QVFGNHZWX1omZW5jPUFaUHdFUDIzWC0wLTc4NE5WQXVrZnZNSmNqSkRFNlFlZlVmZmNhZXhNMVh6TmZHZkNrU1ppczZ3TWR2', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-29 20:36:43'),
(53, '203.82.193.66', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-29 20:37:26'),
(54, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-05-30 07:40:59'),
(55, '174.129.228.67', '', 'aWFfYXJjaGl2ZXI,', '2015-05-30 07:48:26'),
(56, '58.65.224.5', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 09:45:00'),
(57, '58.65.224.5', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 09:45:59'),
(58, '58.65.224.5', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 10:18:07'),
(59, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 11:41:04'),
(60, '182.160.113.138', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3dwc2ktYWRtaW4vbWFuYWdlQ2F0ZWdvcnkucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 11:43:02'),
(61, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-30 11:43:34'),
(62, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:04:28'),
(63, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:15:34'),
(64, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:50:59'),
(65, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:52:55'),
(66, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTU3', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:53:39'),
(67, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:54:20'),
(68, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MjA,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-05-31 12:55:06'),
(69, '66.249.84.178', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-05-31 14:02:29'),
(70, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-31 14:41:32'),
(71, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-05-31 14:43:12'),
(72, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:42:01'),
(73, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:43:30'),
(74, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:44:58'),
(75, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:46:10'),
(76, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:48:24'),
(77, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:48:49'),
(78, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NDAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC80MC4w', '2015-05-31 18:51:37'),
(79, '209.15.21.122', '', 'TW96aWxsYS81LjAgKFgxMTsgTGludXggeDg2XzY0OyBydjoxMC4wLjEyKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzIxLjAgV29yZFByZXNzLmNvbSBtU2hvdHM,', '2015-06-01 01:08:40'),
(80, '202.22.195.54', 'aHR0cDovL2Jvb3N0LXdvcmsuY29tL2h0bWwtdmNhcmQtcmVzdW1lLWN2LXRlbXBsYXRlcy1mcmVlLWRvd25sb2FkLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 01:09:07'),
(81, '103.49.201.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzMzLjAuMTc1MC41IFNhZmFyaS81MzcuMzY,', '2015-06-01 05:13:15'),
(82, '124.6.226.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-01 05:14:57'),
(83, '64.233.172.155', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-06-01 05:57:29'),
(84, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 06:04:23'),
(85, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-01 07:20:07'),
(86, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-01 14:30:39'),
(87, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-01 14:34:31'),
(88, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9wcm9kdWN0ZGV0YWlscy5waHA_cGlkPTE0NA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-01 14:35:46'),
(89, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:06:42'),
(90, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:08:21'),
(91, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:09:32'),
(92, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:13:02'),
(93, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:13:44'),
(94, '182.48.64.161', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:14:11'),
(95, '182.48.64.161', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNwb3N0LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-01 15:14:17'),
(96, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-02 03:17:59'),
(97, '124.6.226.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-02 03:38:23'),
(98, '124.6.226.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-02 03:39:09'),
(99, '124.6.226.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-02 03:46:12'),
(100, '173.252.90.123', '', 'ZmFjZWJvb2tleHRlcm5hbGhpdC8xLjEgKCtodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9leHRlcm5hbGhpdF91YXRleHQucGhwKQ,,', '2015-06-02 07:01:44'),
(101, '180.211.215.247', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2xzci5waHA_dT1odHRwJTNBJTJGJTJGYW1hZGVyY29kZS5jb20lMkZzb2JhcmJhemFhciZleHQ9MTQzMzIyODU2MyZoYXNoPUFjbk40enR2WGZ5NWZnekhFXzdNTE53RDJKdlBfMVBkaEMxQlRWZDY0WDhxaFE,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-02 07:01:45'),
(102, '124.6.226.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-02 11:16:58'),
(103, '66.249.84.178', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-06-03 15:33:42'),
(104, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-04 04:54:10'),
(105, '54.164.54.74', '', '', '2015-06-04 04:55:05'),
(106, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-04 04:57:30'),
(107, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-04 05:08:58'),
(108, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 05:56:57'),
(109, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 05:57:13'),
(110, '123.49.2.106', '', 'TW96aWxsYS80LjAgKGNvbXBhdGlibGU7IE1TSUUgOC4wOyBXaW5kb3dzIE5UIDYuMTsgV09XNjQ7IFRyaWRlbnQvNC4wOyBTTENDMjsgLk5FVCBDTFIgMi4wLjUwNzI3OyAuTkVUIENMUiAzLjUuMzA3Mjk7IC5ORVQgQ0xSIDMuMC4zMDcyOTsgTWVkaWEgQ2VudGVy', '2015-06-04 05:57:23'),
(111, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:07:52'),
(112, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:10:33'),
(113, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:10:35'),
(114, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:11:26'),
(115, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:12:38'),
(116, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:13:26'),
(117, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:16:08'),
(118, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:16:55'),
(119, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:17:57'),
(120, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:37:50'),
(121, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:39:37'),
(122, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MzE,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:41:10'),
(123, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 06:43:11'),
(124, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:45:16'),
(125, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:46:27'),
(126, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:46:40'),
(127, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:46:48'),
(128, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:47:36'),
(129, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:48:51'),
(130, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:48:56'),
(131, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAx', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:49:30'),
(132, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:49:38'),
(133, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAx', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:49:48'),
(134, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:50:18'),
(135, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:50:41'),
(136, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NTA,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:51:12'),
(137, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NTA,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:51:21'),
(138, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 06:52:02'),
(139, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAy', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:52:26'),
(140, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:52:38'),
(141, '123.49.2.106', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 06:52:51'),
(142, '182.160.113.138', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 06:54:09'),
(143, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 10:13:49'),
(144, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 10:18:48'),
(145, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 10:19:48'),
(146, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 11:31:33'),
(147, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 11:43:49'),
(148, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTU5', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 11:56:54'),
(149, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTU5', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 11:57:08'),
(150, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 11:57:35'),
(151, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 12:35:57'),
(152, '103.49.201.246', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzMzLjAuMTc1MC41IFNhZmFyaS81MzcuMzY,', '2015-06-04 12:38:22'),
(153, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 12:41:24'),
(154, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 12:42:18'),
(155, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 12:46:46'),
(156, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 12:48:30'),
(157, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 13:21:14'),
(158, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 13:21:28'),
(159, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3VzZXJzaW5ndXAucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 13:25:53'),
(160, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3VzZXJzaW5ndXAucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 13:26:38'),
(161, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 13:42:44'),
(162, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:14:31'),
(163, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:34:04'),
(164, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:35:06'),
(165, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:36:05'),
(166, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:42:34'),
(167, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3VzZXJzaW5ndXAucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 14:42:56'),
(168, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 15:03:35'),
(169, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 15:06:03'),
(170, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 15:08:14'),
(171, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 15:15:45'),
(172, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 15:35:19'),
(173, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-04 16:24:48'),
(174, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 17:04:25'),
(175, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 17:06:25'),
(176, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 17:34:02'),
(177, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAx', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-04 17:34:47'),
(178, '202.134.10.138', 'aHR0cDovL2wuZmFjZWJvb2suY29tL2xzci5waHA_dT1odHRwJTNBJTJGJTJGYW1hZGVyY29kZS5jb20lMkZzb2JhcmJhemFhciUyRiZleHQ9MTQzMzQ0NTE1MyZoYXNoPUFjbjN6SmVybzYzbEJIQ0xDd2NIRGJXbkdpeFNJLWVJb0hKYlhIQW0zYTRHWnc,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozNy4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM3LjA,', '2015-06-04 19:11:35'),
(179, '182.48.95.98', 'aHR0cDovL3BsdXMudXJsLmdvb2dsZS5jb20vdXJsP3NhPWomdXJsPWh0dHAlM0ElMkYlMkZhbWFkZXJjb2RlLmNvbSUyRnNvYmFyYmF6YWFyJTJGJnVjdD0xNDMzNDMyMTI2JnVzZz1Kbkd4ajVESm9BTTNNMWJoUWplblBSR3FBcHMu', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 20:05:27'),
(180, '182.48.95.98', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTQ4', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 20:06:35'),
(181, '182.48.95.98', 'aHR0cDovL3BsdXMudXJsLmdvb2dsZS5jb20vdXJsP3NhPWomdXJsPWh0dHAlM0ElMkYlMkZhbWFkZXJjb2RlLmNvbSUyRnNvYmFyYmF6YWFyJTJGJnVjdD0xNDMzNDMyMTI2JnVzZz1Kbkd4ajVESm9BTTNNMWJoUWplblBSR3FBcHMu', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-04 20:06:48'),
(182, '66.249.84.170', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-06-05 04:39:03'),
(183, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-05 04:46:19'),
(184, '202.4.104.186', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 04:46:25'),
(185, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 04:51:33'),
(186, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-05 04:54:33'),
(187, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3VzZXJzaW5ndXAucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 04:58:51'),
(188, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 04:59:33'),
(189, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 05:00:03'),
(190, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 05:00:24'),
(191, '150.242.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-05 12:40:08'),
(192, '150.242.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-05 12:51:10'),
(193, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 14:40:58'),
(194, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-05 16:04:18'),
(195, '66.249.84.170', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjo2LjApIEdlY2tvLzIwMTEwODE0IEZpcmVmb3gvNi4wIEdvb2dsZSBmYXZpY29u', '2015-06-06 04:43:16'),
(196, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:23:29'),
(197, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2xvZ2luLnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:24:28'),
(198, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2luZGV4LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:27:56'),
(199, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:28:14'),
(200, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9ODA,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:29:13'),
(201, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:38:13'),
(202, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:42:04'),
(203, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 05:42:51'),
(204, '103.19.253.122', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4yOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 06:02:07'),
(205, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-06 06:05:01'),
(206, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-06 06:06:26'),
(207, '103.19.253.122', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4yOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 06:14:45'),
(208, '103.19.253.122', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4yOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 06:15:51'),
(209, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-06 06:54:58'),
(210, '202.22.195.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-06 06:55:24'),
(211, '173.252.90.122', '', 'ZmFjZWJvb2tleHRlcm5hbGhpdC8xLjEgKCtodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9leHRlcm5hbGhpdF91YXRleHQucGhwKQ,,', '2015-06-06 07:14:05'),
(212, '103.231.228.202', 'aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-06 07:14:05'),
(213, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 10:25:46'),
(214, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-06 10:30:43'),
(215, '203.82.193.66', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-06 13:29:42'),
(216, '203.82.193.66', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyLw,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-06 13:30:58'),
(217, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:11:13'),
(218, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:14:19'),
(219, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:14:44'),
(220, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTk5', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:29:54'),
(221, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTk5', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:29:58'),
(222, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTk5', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:30:02'),
(223, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEz', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:31:03'),
(224, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEz', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 06:31:28'),
(225, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEwMA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 07:05:41'),
(226, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEwMA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 07:05:44'),
(227, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEwMA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 07:05:48'),
(228, '202.22.195.54', 'aHR0cDovL3d3dy5hbWFkZXJjb2RlLmNvbS9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEwMQ,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 07:07:40'),
(229, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-07 07:08:44'),
(230, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 07:09:00'),
(231, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 07:09:27'),
(232, '123.49.2.106', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-07 08:10:03'),
(233, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL2luZGV4Lmh0bWw,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 12:16:55'),
(234, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL2luZGV4Lmh0bWw,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 12:17:38'),
(235, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTM,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 12:18:19'),
(236, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 13:27:59');
INSERT INTO `userinfo` (`id`, `userip`, `referer`, `useragent`, `visittime`) VALUES
(237, '103.231.228.202', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:35:27'),
(238, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAx', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:36:14'),
(239, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:40:32'),
(240, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTcw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:46:21'),
(241, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTI,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:48:09'),
(242, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MjY,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:48:29'),
(243, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTM,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:49:22'),
(244, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NDY,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:50:15'),
(245, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NDY,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:51:18'),
(246, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9NDY,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-07 17:52:15'),
(247, '124.6.238.245', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6MzguMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC8zOC4w', '2015-06-08 06:03:36'),
(248, '103.231.162.34', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-08 13:15:32'),
(249, '103.231.162.34', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-08 13:19:50'),
(250, '103.19.253.122', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4yOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-08 13:37:44'),
(251, '202.126.124.130', 'aHR0cDovL3d3dy5nb29nbGUuY29tL3VybD9xPWh0dHAlM0ElMkYlMkZhbWFkZXJjb2RlLmNvbSUyRnNvYmFyYmF6YWFyJTJGJnNhPUQmc250ej0xJnVzZz1BRlFqQ05Hd3Z0ckJjd1dHQjB4Zld1OS00NUtYUkdMRE5R', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBydjozOC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzM4LjA,', '2015-06-08 15:02:51'),
(252, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL21vcnNoZWQvcG9ydGZvbGlvL3BvcnRmb2xpby5odG1s', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-08 17:35:56'),
(253, '103.231.162.34', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-08 20:45:00'),
(254, '103.230.105.24', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 06:16:32'),
(255, '103.230.105.24', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 06:29:40'),
(256, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 07:41:53'),
(257, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 07:51:53'),
(258, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 07:52:59'),
(259, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 07:53:06'),
(260, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 08:10:57'),
(261, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 08:11:59'),
(262, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 08:26:02'),
(263, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 11:03:47'),
(264, '103.230.106.2', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 14:34:43'),
(265, '202.22.195.54', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 14:35:02'),
(266, '103.230.106.2', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL3Byb2R1Y3RkZXRhaWxzLnBocD9waWQ9MTI3', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 14:38:14'),
(267, '202.4.173.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 14:39:41'),
(268, '202.4.173.54', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-09 14:45:21'),
(269, '103.231.228.202', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 18:58:24'),
(270, '103.231.228.202', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Nob3dwYWdlLnBocD9waWQ9MTAw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xKSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNDMuMC4yMzU3LjgxIFNhZmFyaS81MzcuMzY,', '2015-06-09 19:00:24'),
(271, '103.49.201.230', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-10 02:46:12'),
(272, '103.49.201.230', 'aHR0cDovL2FtYWRlcmNvZGUuY29tL3NvYmFyYmF6YWFyL2Fkc3Bvc3QucGhw', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4zOyBXT1c2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzQzLjAuMjM1Ny44MSBTYWZhcmkvNTM3LjM2', '2015-06-10 02:51:16'),
(273, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 09:44:57'),
(274, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 09:51:02'),
(275, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC9zb2JhcmJhemFhci9hZHNzaG93cGFnZS5waHA_cGlkPTEwNQ,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 09:52:00'),
(276, '::1', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 09:56:01'),
(277, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC9zb2JhcmJhemFhci9hZHNwb3N0LnBocA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:03:01'),
(278, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC9zb2JhcmJhemFhci9wcm9kdWN0ZGV0YWlscy5waHA_cGlkPTE3NA,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:04:29'),
(279, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC9zb2JhcmJhemFhci9wcm9kdWN0ZGV0YWlscy5waHA_cGlkPTE1MQ,,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:08:32'),
(280, '::1', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:10:57'),
(281, '::1', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:12:33'),
(282, '::1', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:13:05'),
(283, '::1', 'aHR0cDovL2xvY2FsaG9zdC9yMzAvcHJvamVjdC8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-11-22 10:22:32'),
(284, '192.168.0.115', 'aHR0cDovLzE5Mi4xNjguMC4xMDcvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0OyBydjo1MC4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzUwLjA,', '2016-11-23 09:30:54'),
(285, '192.168.0.131', 'aHR0cDovLzE5Mi4xNjguMC4xMjkvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-11-24 12:10:57'),
(286, '192.168.0.131', 'aHR0cDovLzE5Mi4xNjguMC4xMjkvcjMwL3Byb2plY3Qvc29iYXJiYXphYXIv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-11-24 12:12:21'),
(287, '192.168.0.131', 'aHR0cDovLzE5Mi4xNjguMC4xMjkvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-11-24 12:13:12'),
(288, '192.168.0.126', 'aHR0cDovLzE5Mi4xNjguMC4xMDUvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-12-01 09:32:51'),
(289, '192.168.0.126', '', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-12-01 09:33:58'),
(290, '192.168.0.110', 'aHR0cDovLzE5Mi4xNjguMC4xMDAvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvNTQuMC4yODQwLjk5IFNhZmFyaS81MzcuMzY,', '2016-12-03 10:41:32'),
(291, '192.168.0.123', 'aHR0cDovLzE5Mi4xNjguMC4xMDQvcjMwL3Byb2plY3Qv', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXT1c2NDsgcnY6NTAuMCkgR2Vja28vMjAxMDAxMDEgRmlyZWZveC81MC4w', '2016-12-04 09:34:28'),
(292, '192.168.1.8', 'aHR0cDovLzE5Mi4xNjguMS4yMS9yMzAvcHJvamVjdC8,', 'TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNi4xOyBXaW42NDsgeDY0OyBydjo1My4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzUzLjA,', '2017-05-13 07:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `userphoto` varchar(255) DEFAULT NULL,
  `usertype` varchar(15) NOT NULL,
  `registrationdate` datetime NOT NULL,
  `lastlogindate` datetime NOT NULL,
  `blocked` varchar(1) NOT NULL DEFAULT 'N',
  `agree` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `storeid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `userphoto`, `usertype`, `registrationdate`, `lastlogindate`, `blocked`, `agree`, `nid`, `dob`, `storeid`) VALUES
(1, 'Nabil Newaz', 'nabilnewaz@gmail.com', 'nabilnewaz@gmail.com', '12345', '01714940700', NULL, 'Individual', '2022-11-01 02:47:41', '2022-12-27 01:20:20', '', 'agreed', '7362041282', '1999-11-04', 1),
(10, 'tukku', 'nabilnewaztaku@gmail.com', 'nabilnewaztukku@gmail.com', '12345', '01714940700', NULL, 'Individual', '2022-11-01 03:31:36', '2022-12-25 06:01:20', '', 'agreed', '7362041282', '2022-11-01', 3),
(11, 'b7_31561138', 'nabilnewazgfg@gmail.com', 'nabilnewazdfgdfg@gmail.com', '12345', '01714940700', NULL, 'Individual', '2022-11-01 03:35:29', '0000-00-00 00:00:00', '', 'agreed', '7362041282', '2022-11-03', NULL);

-- --------------------------------------------------------

--
-- Structure for view `total_category_item`
--
DROP TABLE IF EXISTS `total_category_item`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_category_item`  AS SELECT `product`.`categoryid` AS `categoryid`, count(0) AS `totalitem` FROM `product` GROUP BY `product`.`categoryid` ORDER BY `product`.`categoryid` ASC  ;

-- --------------------------------------------------------

--
-- Structure for view `total_subcat_item`
--
DROP TABLE IF EXISTS `total_subcat_item`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_subcat_item`  AS SELECT `product`.`subcategoryid` AS `subcategoryid`, count(0) AS `totalitem` FROM `product` GROUP BY `product`.`subcategoryid` ORDER BY `product`.`subcategoryid` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `product_archive`
--
ALTER TABLE `product_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subarea`
--
ALTER TABLE `subarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_archive`
--
ALTER TABLE `product_archive`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subarea`
--
ALTER TABLE `subarea`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
