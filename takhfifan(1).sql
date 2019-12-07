-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 05:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takhfifan`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_festival`
--

CREATE TABLE `f_festival` (
  `F_FestivalID` int(11) NOT NULL,
  `F_Title` varchar(255) DEFAULT NULL,
  `F_BeginDate` varchar(10) DEFAULT NULL,
  `F_EndDate` varchar(10) DEFAULT NULL,
  `F_CityID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(6, '2016_06_01_000004_create_oauth_clients_table', 2),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('3f8c363ab2469f38cad7ea0d10ddc3028fe3cc2471e75ecfd94598f09eaa3e1fe8b82301306ebc1d', 1, 1, 'MyApp', '[]', 0, '2019-07-22 17:42:20', '2019-07-22 17:42:20', '2020-07-22 15:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'qKxbhLf3XV0w6Z1l4nqFtNHwG8KLMjyLOij3Z3kE', 'http://localhost', 1, 0, 0, '2019-07-22 16:42:54', '2019-07-22 16:42:54'),
(2, NULL, 'Laravel Password Grant Client', 'kA87TD7rBWBVavM7YuuVW5PQIdZDA23L8hKOVl46', 'http://localhost', 0, 1, 0, '2019-07-22 16:42:54', '2019-07-22 16:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-22 16:42:54', '2019-07-22 16:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_barg`
--

CREATE TABLE `t_barg` (
  `F_BargID` int(11) NOT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_Title` varchar(500) DEFAULT NULL,
  `F_ExpireDate` bigint(20) DEFAULT NULL,
  `F_CategoryID` int(11) DEFAULT NULL,
  `F_Type` tinyint(1) DEFAULT NULL,
  `F_State` tinyint(1) DEFAULT NULL,
  `F_Active` tinyint(1) DEFAULT NULL,
  `F_Fee` bigint(255) DEFAULT NULL,
  `F_Off` int(11) DEFAULT NULL,
  `F_Count` int(11) DEFAULT NULL,
  `F_Property` blob,
  `F_Text` text,
  `F_Condition` blob,
  `F_Keyword` varchar(300) DEFAULT NULL,
  `F_Slag` varchar(255) DEFAULT NULL,
  `F_Tell` varchar(13) DEFAULT NULL,
  `F_Mobile` varchar(13) DEFAULT NULL,
  `F_ShortURL` varchar(255) DEFAULT NULL,
  `F_lat` varchar(255) DEFAULT NULL,
  `F_lang` varchar(255) DEFAULT NULL,
  `F_CityID` varchar(255) DEFAULT NULL,
  `F_ZoneID` int(11) DEFAULT NULL,
  `F_Adress` varchar(255) DEFAULT NULL,
  `F_TrendID` int(11) DEFAULT NULL,
  `F_Pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_barg`
--

INSERT INTO `t_barg` (`F_BargID`, `F_UserID`, `F_Title`, `F_ExpireDate`, `F_CategoryID`, `F_Type`, `F_State`, `F_Active`, `F_Fee`, `F_Off`, `F_Count`, `F_Property`, `F_Text`, `F_Condition`, `F_Keyword`, `F_Slag`, `F_Tell`, `F_Mobile`, `F_ShortURL`, `F_lat`, `F_lang`, `F_CityID`, `F_ZoneID`, `F_Adress`, `F_TrendID`, `F_Pic`) VALUES
(1, 1, 'My Title', 1398, 1, 1, 1, 1, 80000, 10, 10, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', 1, NULL),
(2, 1, 'jaroo barghi', 1573059072, 2, 1, 1, 1, 870000, 10, 10, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', NULL, NULL),
(3, 1, 'yakhchl', 1397, 1, 1, 1, 1, 980000, 12, 8, NULL, 'yakh chal\r\nyakhchal', NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', 1, NULL),
(4, 1, 'cooler', 1397, 1, 1, 1, 1, 10000, 12, 8, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', NULL, NULL),
(5, 1, 'lamp', 1397, 1, 1, 1, 1, 10000, 12, 8, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', NULL, NULL),
(6, 1, 'samavar', 1397, 1, 1, 1, 1, 10000, 12, 8, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', NULL, NULL),
(7, 1, 'kljlj', 1397, 2, 1, 1, 1, 10000, 12, 8, NULL, NULL, NULL, 'title,titlex,titley', 'mytitle', '09121234564', '09121234564', '123123', NULL, NULL, '1', 1, 'bandar abbas - golshahr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_category`
--

CREATE TABLE `t_category` (
  `F_CategoryID` int(11) NOT NULL,
  `F_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `F_Slag` varchar(50) DEFAULT NULL,
  `F_ParentID` int(10) DEFAULT NULL,
  `F_Code` int(10) DEFAULT NULL,
  `F_ParentCode` int(10) DEFAULT NULL,
  `F_Root` tinyint(1) NOT NULL DEFAULT '0',
  `F_Important` tinyint(4) NOT NULL DEFAULT '0',
  `F_Icon` varchar(50) NOT NULL DEFAULT 'icon-logo_e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_category`
--

INSERT INTO `t_category` (`F_CategoryID`, `F_Name`, `F_Slag`, `F_ParentID`, `F_Code`, `F_ParentCode`, `F_Root`, `F_Important`, `F_Icon`) VALUES
(1, 'نت برگ های امروز', 'lavazem-barghi', 1, 1, NULL, 1, 1, 'icon-logo_e'),
(2, 'رستوران و فست فود', 'lavazem-barghi', 1, 2, NULL, 1, 1, 'icon-burger'),
(3, 'پزشکی و سلامت', 'khanegi', 1, 3, 0, 1, 1, 'icon-car-first-aid-kit'),
(4, 'کد تخفیف', 'sard-konande', 2, 4, 0, 1, 1, 'icon-couponcodes'),
(8, 'لحظه آخری', 'khanegi', 6, 8, 0, 1, 1, 'icon-timer'),
(9, 'آموزشی', 'sard-konande', 6, 9, 0, 1, 1, 'icon-earth-globe'),
(10, 'کالا', 'ashpaz-khaneii', 6, 10, 0, 1, 1, 'icon-shopping-bag-1');

-- --------------------------------------------------------

--
-- Table structure for table `t_city`
--

CREATE TABLE `t_city` (
  `F_CityID` int(11) NOT NULL,
  `F_Name` varchar(255) DEFAULT NULL,
  `F_lat` varchar(255) DEFAULT NULL,
  `F_lang` varchar(255) DEFAULT NULL,
  `F_Dist` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_city`
--

INSERT INTO `t_city` (`F_CityID`, `F_Name`, `F_lat`, `F_lang`, `F_Dist`) VALUES
(1, 'bandar', NULL, NULL, '\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `t_comment`
--

CREATE TABLE `t_comment` (
  `F_commentID` int(11) NOT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_Status` varchar(255) DEFAULT NULL,
  `F_Text` text CHARACTER SET utf8 COLLATE utf8_persian_ci,
  `F_Date` varchar(10) DEFAULT NULL,
  `F_Time` varchar(10) DEFAULT NULL,
  `F_BargID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_comment`
--

INSERT INTO `t_comment` (`F_commentID`, `F_UserID`, `F_Status`, `F_Text`, `F_Date`, `F_Time`, `F_BargID`) VALUES
(1, 1, '1', 'takhfife khubi bud', '1398/05/09', '20:58', 1),
(2, 10, '1', 'خوب بود', '1398/05/09', '20:58', 2),
(3, 1, '1', 'بد نبود', '1398/05/09', '20:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_config`
--

CREATE TABLE `t_config` (
  `id` int(11) NOT NULL,
  `F_Key` varchar(30) NOT NULL,
  `F_Value` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_document`
--

CREATE TABLE `t_document` (
  `F_DocumentID` int(11) NOT NULL,
  `F_Date` varchar(10) DEFAULT NULL,
  `F_Time` varchar(10) DEFAULT NULL,
  `F_DocDes` varchar(20000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_documentdetail`
--

CREATE TABLE `t_documentdetail` (
  `F_DocumentDetailID` int(11) NOT NULL,
  `F_DocumentID` int(11) DEFAULT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_BargID` int(11) NOT NULL,
  `F_Bedehkar` bigint(20) DEFAULT NULL,
  `F_Bestankar` varchar(0) DEFAULT NULL,
  `F_Des` varchar(20000) DEFAULT NULL,
  `F_PeygiriCode` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_documentdetail`
--

INSERT INTO `t_documentdetail` (`F_DocumentDetailID`, `F_DocumentID`, `F_UserID`, `F_BargID`, `F_Bedehkar`, `F_Bestankar`, `F_Des`, `F_PeygiriCode`) VALUES
(1, NULL, 10, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_festivalbarg`
--

CREATE TABLE `t_festivalbarg` (
  `F_FestivalID` int(11) NOT NULL,
  `F_BargID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_job`
--

CREATE TABLE `t_job` (
  `F_JobID` int(11) NOT NULL,
  `F_JobName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_job`
--

INSERT INTO `t_job` (`F_JobID`, `F_JobName`) VALUES
(1, 'مهندس'),
(2, 'دکتر');

-- --------------------------------------------------------

--
-- Table structure for table `t_like`
--

CREATE TABLE `t_like` (
  `F_LikeID` int(11) NOT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_BargID` int(11) DEFAULT NULL,
  `F_Date` varchar(10) DEFAULT NULL,
  `F_Time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_like`
--

INSERT INTO `t_like` (`F_LikeID`, `F_UserID`, `F_BargID`, `F_Date`, `F_Time`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 1, 2, NULL, NULL),
(16, 10, 2, '2019/11/08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_media`
--

CREATE TABLE `t_media` (
  `F_MediaID` int(11) NOT NULL,
  `F_BargID` int(11) DEFAULT NULL,
  `F_URL` varchar(255) DEFAULT NULL,
  `F_Type` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_media`
--

INSERT INTO `t_media` (`F_MediaID`, `F_BargID`, `F_URL`, `F_Type`) VALUES
(1, 1, 'http://static.netbarg.com/img/responsive_small/deals/162926/18c20389.jpg', NULL),
(2, 2, 'klhklj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `F_OrderID` int(11) NOT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_Date` varchar(10) DEFAULT NULL,
  `F_Time` varchar(10) DEFAULT NULL,
  `F_DocID` int(11) DEFAULT NULL,
  `F_FinalFactor` bigint(20) DEFAULT NULL,
  `F_Tax` varchar(50) DEFAULT NULL,
  `F_Des` varchar(2000) DEFAULT NULL,
  `F_SumFactor` bigint(20) DEFAULT NULL,
  `F_PeygiriCode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_orderdetail`
--

CREATE TABLE `t_orderdetail` (
  `F_OrderDetailID` int(11) NOT NULL,
  `F_OrderID` int(11) DEFAULT NULL,
  `F_BargID` int(11) DEFAULT NULL,
  `F_QRCode` varchar(255) DEFAULT NULL,
  `F_State` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_orderdetail`
--

INSERT INTO `t_orderdetail` (`F_OrderDetailID`, `F_OrderID`, `F_BargID`, `F_QRCode`, `F_State`) VALUES
(1, 1, 1, NULL, NULL),
(2, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_rate`
--

CREATE TABLE `t_rate` (
  `F_RateID` int(11) NOT NULL,
  `F_BargID` int(11) DEFAULT NULL,
  `F_Score` int(1) DEFAULT NULL,
  `F_UserID` int(11) DEFAULT NULL,
  `F_Time` varchar(10) DEFAULT NULL,
  `F_Date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rate`
--

INSERT INTO `t_rate` (`F_RateID`, `F_BargID`, `F_Score`, `F_UserID`, `F_Time`, `F_Date`) VALUES
(1, 2, 1, 1, NULL, NULL),
(2, 2, 1, 1, NULL, NULL),
(3, 2, 1, 1, NULL, NULL),
(4, 2, 1, 1, NULL, NULL),
(5, 2, 2, 1, NULL, NULL),
(6, 2, 2, 1, NULL, NULL),
(7, 2, 3, 1, NULL, NULL),
(8, 2, 1, 1, NULL, NULL),
(9, 2, 2, 1, NULL, NULL),
(10, 2, 2, 1, NULL, NULL),
(11, 2, 1, 1, NULL, NULL),
(12, 2, 1, 1, NULL, NULL),
(13, 2, 1, 1, NULL, NULL),
(14, 2, 1, 1, NULL, NULL),
(15, 2, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_slider`
--

CREATE TABLE `t_slider` (
  `id` int(11) NOT NULL,
  `alt` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `F_BargID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_slider`
--

INSERT INTO `t_slider` (`id`, `alt`, `img`, `F_BargID`) VALUES
(1, '', 'http://static.netbarg.com/img/banner/sliders/vitrin/6900150d.jpg', 0),
(2, '', 'http://static.netbarg.com/img/banner/sliders/vitrin/b4ed18fa.jpg', 0),
(3, '', 'http://static.netbarg.com/img/banner/sliders/vitrin/b1f61b4f.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_suggestions`
--

CREATE TABLE `t_suggestions` (
  `id` int(11) NOT NULL,
  `F_BargID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_suggestions`
--

INSERT INTO `t_suggestions` (`id`, `F_BargID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_tag`
--

CREATE TABLE `t_tag` (
  `F_TagID` int(11) NOT NULL,
  `F_TagName` varchar(100) DEFAULT NULL,
  `F_TagSlag` varchar(60) DEFAULT NULL,
  `F_picURL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_tagparent`
--

CREATE TABLE `t_tagparent` (
  `F_TagParentID` varchar(255) DEFAULT NULL,
  `F_TagID` int(11) DEFAULT NULL,
  `F_BargID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_trend`
--

CREATE TABLE `t_trend` (
  `id` int(10) NOT NULL,
  `F_CategoryID` int(11) NOT NULL,
  `F_Pic` varchar(500) NOT NULL,
  `F_Description` text NOT NULL,
  `F_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_trend`
--

INSERT INTO `t_trend` (`id`, `F_CategoryID`, `F_Pic`, `F_Description`, `F_Name`) VALUES
(1, 5, '????', '????????', '??????');

-- --------------------------------------------------------

--
-- Table structure for table `t_zone`
--

CREATE TABLE `t_zone` (
  `F_ZoneID` int(11) NOT NULL,
  `F_CityID` int(11) DEFAULT NULL,
  `F_Name` varchar(50) DEFAULT NULL,
  `F_lat` varchar(60) DEFAULT NULL,
  `F_lang` varchar(60) DEFAULT NULL,
  `F_Dist` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `F_Username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_SmsCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `F_Family` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_Mobile` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_Tell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_CityID` int(11) DEFAULT NULL,
  `F_ZoneID` int(11) DEFAULT NULL,
  `F_Adress` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_Gender` tinyint(1) DEFAULT NULL,
  `F_CodeMeli` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_Edu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_PushID` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_Role` tinyint(1) DEFAULT NULL,
  `F_Active` tinyint(1) DEFAULT NULL,
  `F_lat` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_lang` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_JobID` int(11) DEFAULT NULL,
  `F_VisitorID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `F_Username`, `name`, `email`, `F_SmsCode`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `F_Family`, `F_Mobile`, `F_Tell`, `F_CityID`, `F_ZoneID`, `F_Adress`, `F_Gender`, `F_CodeMeli`, `F_Edu`, `F_PushID`, `F_Role`, `F_Active`, `F_lat`, `F_lang`, `F_JobID`, `F_VisitorID`) VALUES
(1, NULL, 'admin', 'admin@admin.admin', '', NULL, '$2y$10$vBWEksZJN.QMJm5RR/SiWeFLZ5LMsklFowbLZ2odmzaO7JjXnvNm6', NULL, '2019-07-22 16:58:32', '2019-07-22 16:58:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(2, NULL, 'test', 'test@test.test', '', NULL, '$2y$10$DHUQnyqotUNwhA8O/aKjPuemX2fTH9WEWbF97.pmZsRDzoLoG4Uvi', NULL, '2019-08-12 21:30:57', '2019-08-12 21:30:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(10, '09172914763', 'hajebi', NULL, '7610', NULL, '$2y$10$AuxUBlGo7.7kdhLGgYIUnOwqiEKeAWtcrfPy9m6d0xU721hinQMwy', NULL, NULL, '2019-11-08 09:11:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_festival`
--
ALTER TABLE `f_festival`
  ADD PRIMARY KEY (`F_FestivalID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `t_barg`
--
ALTER TABLE `t_barg`
  ADD PRIMARY KEY (`F_BargID`);

--
-- Indexes for table `t_category`
--
ALTER TABLE `t_category`
  ADD PRIMARY KEY (`F_CategoryID`),
  ADD KEY `important` (`F_Important`);

--
-- Indexes for table `t_city`
--
ALTER TABLE `t_city`
  ADD PRIMARY KEY (`F_CityID`);

--
-- Indexes for table `t_comment`
--
ALTER TABLE `t_comment`
  ADD PRIMARY KEY (`F_commentID`);

--
-- Indexes for table `t_document`
--
ALTER TABLE `t_document`
  ADD PRIMARY KEY (`F_DocumentID`);

--
-- Indexes for table `t_documentdetail`
--
ALTER TABLE `t_documentdetail`
  ADD PRIMARY KEY (`F_DocumentDetailID`);

--
-- Indexes for table `t_festivalbarg`
--
ALTER TABLE `t_festivalbarg`
  ADD PRIMARY KEY (`F_FestivalID`);

--
-- Indexes for table `t_job`
--
ALTER TABLE `t_job`
  ADD PRIMARY KEY (`F_JobID`);

--
-- Indexes for table `t_like`
--
ALTER TABLE `t_like`
  ADD PRIMARY KEY (`F_LikeID`);

--
-- Indexes for table `t_media`
--
ALTER TABLE `t_media`
  ADD PRIMARY KEY (`F_MediaID`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`F_OrderID`);

--
-- Indexes for table `t_orderdetail`
--
ALTER TABLE `t_orderdetail`
  ADD PRIMARY KEY (`F_OrderDetailID`);

--
-- Indexes for table `t_rate`
--
ALTER TABLE `t_rate`
  ADD PRIMARY KEY (`F_RateID`);

--
-- Indexes for table `t_slider`
--
ALTER TABLE `t_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_suggestions`
--
ALTER TABLE `t_suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tag`
--
ALTER TABLE `t_tag`
  ADD PRIMARY KEY (`F_TagID`);

--
-- Indexes for table `t_trend`
--
ALTER TABLE `t_trend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_zone`
--
ALTER TABLE `t_zone`
  ADD PRIMARY KEY (`F_ZoneID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_barg`
--
ALTER TABLE `t_barg`
  MODIFY `F_BargID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_category`
--
ALTER TABLE `t_category`
  MODIFY `F_CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_comment`
--
ALTER TABLE `t_comment`
  MODIFY `F_commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_documentdetail`
--
ALTER TABLE `t_documentdetail`
  MODIFY `F_DocumentDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_like`
--
ALTER TABLE `t_like`
  MODIFY `F_LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_media`
--
ALTER TABLE `t_media`
  MODIFY `F_MediaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_orderdetail`
--
ALTER TABLE `t_orderdetail`
  MODIFY `F_OrderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_rate`
--
ALTER TABLE `t_rate`
  MODIFY `F_RateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_slider`
--
ALTER TABLE `t_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_suggestions`
--
ALTER TABLE `t_suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_trend`
--
ALTER TABLE `t_trend`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
