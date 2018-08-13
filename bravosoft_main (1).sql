-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 01:55 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bravosoft_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'BXTvRbFpdfhkFzGdDLOQ6Ncu5vIpm6c1', 1, '2017-10-26 12:48:03', '2017-10-26 12:48:03', '2017-10-26 12:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `asset_type_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_price` decimal(10,2) DEFAULT NULL,
  `value` decimal(10,2) DEFAULT NULL,
  `serial_number` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `assigned_to` int(10) UNSIGNED DEFAULT NULL,
  `assignment_category_id` int(10) UNSIGNED DEFAULT NULL,
  `due_on` date DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `completed_notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_categories`
--

CREATE TABLE `assignment_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `assigned_to` int(10) UNSIGNED DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `goal` text COLLATE utf8_unicode_ci,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `branch_id`, `user_id`, `name`, `notes`, `start_date`, `end_date`, `status`, `goal`, `year`, `month`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '2nd test', 'this is for seed', NULL, NULL, 0, 'seed offering', NULL, NULL, '2018-01-19 16:08:45', '2018-01-19 16:08:45'),
(2, NULL, NULL, '2nd test', 'this is for seed', NULL, NULL, 0, 'seed offering', NULL, NULL, '2018-01-19 16:08:59', '2018-01-19 16:08:59'),
(3, NULL, NULL, 'another', 'test', NULL, NULL, 0, 'test', NULL, NULL, '2018-01-19 16:10:43', '2018-01-19 16:10:43'),
(4, NULL, NULL, 'another', 'test', NULL, NULL, 0, 'test', NULL, NULL, '2018-01-19 16:16:02', '2018-01-19 16:16:02'),
(5, NULL, NULL, 'another campaign', 'for missionaries', NULL, NULL, 0, 'for missionaries', NULL, NULL, '2018-01-22 16:54:30', '2018-01-22 16:54:30'),
(6, NULL, NULL, 'building for ogba church', 'this is for ogba church', NULL, NULL, 0, 'building for ogba church', NULL, NULL, '2018-01-24 03:04:27', '2018-01-24 03:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `member_type` tinyint(4) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `family_id` int(10) UNSIGNED DEFAULT NULL,
  `fund_id` int(10) UNSIGNED DEFAULT NULL,
  `contribution_batch_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_method_id` int(10) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `trans_ref` text COLLATE utf8_unicode_ci,
  `amount` decimal(10,2) NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `branch_id`, `member_type`, `user_id`, `member_id`, `family_id`, `fund_id`, `contribution_batch_id`, `payment_method_id`, `date`, `notes`, `files`, `trans_ref`, `amount`, `year`, `month`, `created_at`, `updated_at`) VALUES
(26, NULL, 1, NULL, 2, NULL, 10, NULL, 7, '2018-03-07', 'this is a test', NULL, NULL, '145000.00', NULL, NULL, '2018-03-08 13:15:39', '2018-03-08 13:15:39'),
(25, NULL, 1, NULL, 3, NULL, 10, NULL, 7, '2012-11-02', NULL, NULL, NULL, '75000.00', NULL, NULL, '2018-03-02 02:58:40', '2018-03-02 02:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `contribution_batches`
--

CREATE TABLE `contribution_batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `current` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `sortname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua And Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas The'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CD', 'Congo The Democratic Republic Of The'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)'),
(54, 'HR', 'Croatia (Hrvatska)'),
(55, 'CU', 'Cuba'),
(56, 'CY', 'Cyprus'),
(57, 'CZ', 'Czech Republic'),
(58, 'DK', 'Denmark'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'TP', 'East Timor'),
(63, 'EC', 'Ecuador'),
(64, 'EG', 'Egypt'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Equatorial Guinea'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Ethiopia'),
(70, 'XA', 'External Territories of Australia'),
(71, 'FK', 'Falkland Islands'),
(72, 'FO', 'Faroe Islands'),
(73, 'FJ', 'Fiji Islands'),
(74, 'FI', 'Finland'),
(75, 'FR', 'France'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territories'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia The'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'XU', 'Guernsey and Alderney'),
(92, 'GN', 'Guinea'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HT', 'Haiti'),
(96, 'HM', 'Heard and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HK', 'Hong Kong S.A.R.'),
(99, 'HU', 'Hungary'),
(100, 'IS', 'Iceland'),
(101, 'IN', 'India'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'JM', 'Jamaica'),
(109, 'JP', 'Japan'),
(110, 'XJ', 'Jersey'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea North'),
(116, 'KR', 'Korea South'),
(117, 'KW', 'Kuwait'),
(118, 'KG', 'Kyrgyzstan'),
(119, 'LA', 'Laos'),
(120, 'LV', 'Latvia'),
(121, 'LB', 'Lebanon'),
(122, 'LS', 'Lesotho'),
(123, 'LR', 'Liberia'),
(124, 'LY', 'Libya'),
(125, 'LI', 'Liechtenstein'),
(126, 'LT', 'Lithuania'),
(127, 'LU', 'Luxembourg'),
(128, 'MO', 'Macau S.A.R.'),
(129, 'MK', 'Macedonia'),
(130, 'MG', 'Madagascar'),
(131, 'MW', 'Malawi'),
(132, 'MY', 'Malaysia'),
(133, 'MV', 'Maldives'),
(134, 'ML', 'Mali'),
(135, 'MT', 'Malta'),
(136, 'XM', 'Man (Isle of)'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'YT', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia'),
(144, 'MD', 'Moldova'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'MS', 'Montserrat'),
(148, 'MA', 'Morocco'),
(149, 'MZ', 'Mozambique'),
(150, 'MM', 'Myanmar'),
(151, 'NA', 'Namibia'),
(152, 'NR', 'Nauru'),
(153, 'NP', 'Nepal'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NL', 'Netherlands The'),
(156, 'NC', 'New Caledonia'),
(157, 'NZ', 'New Zealand'),
(158, 'NI', 'Nicaragua'),
(159, 'NE', 'Niger'),
(160, 'NG', 'Nigeria'),
(161, 'NU', 'Niue'),
(162, 'NF', 'Norfolk Island'),
(163, 'MP', 'Northern Mariana Islands'),
(164, 'NO', 'Norway'),
(165, 'OM', 'Oman'),
(166, 'PK', 'Pakistan'),
(167, 'PW', 'Palau'),
(168, 'PS', 'Palestinian Territory Occupied'),
(169, 'PA', 'Panama'),
(170, 'PG', 'Papua new Guinea'),
(171, 'PY', 'Paraguay'),
(172, 'PE', 'Peru'),
(173, 'PH', 'Philippines'),
(174, 'PN', 'Pitcairn Island'),
(175, 'PL', 'Poland'),
(176, 'PT', 'Portugal'),
(177, 'PR', 'Puerto Rico'),
(178, 'QA', 'Qatar'),
(179, 'RE', 'Reunion'),
(180, 'RO', 'Romania'),
(181, 'RU', 'Russia'),
(182, 'RW', 'Rwanda'),
(183, 'SH', 'Saint Helena'),
(184, 'KN', 'Saint Kitts And Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'PM', 'Saint Pierre and Miquelon'),
(187, 'VC', 'Saint Vincent And The Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'XG', 'Smaller Territories of the UK'),
(200, 'SB', 'Solomon Islands'),
(201, 'SO', 'Somalia'),
(202, 'ZA', 'South Africa'),
(203, 'GS', 'South Georgia'),
(204, 'SS', 'South Sudan'),
(205, 'ES', 'Spain'),
(206, 'LK', 'Sri Lanka'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syria'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad And Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks And Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States Minor Outlying Islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State (Holy See)'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (US)'),
(241, 'WF', 'Wallis And Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'YU', 'Yugoslavia'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `field_type` enum('number','textfield','date','decimal','textarea','radiobox','select','checkbox') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'textfield',
  `required` tinyint(4) NOT NULL DEFAULT '0',
  `radio_box_values` text COLLATE utf8_unicode_ci,
  `checkbox_values` text COLLATE utf8_unicode_ci,
  `select_values` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields_meta`
--

CREATE TABLE `custom_fields_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `custom_field_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `member_id` int(10) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `recipients` int(10) UNSIGNED DEFAULT NULL,
  `send_to` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `member_id`, `subject`, `message`, `recipients`, `send_to`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'doubleasam92@gmail.com', NULL, 'test email', NULL, NULL, NULL, NULL, '2018-03-19 04:26:35', '2018-03-19 04:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `event_location_id` int(10) UNSIGNED DEFAULT NULL,
  `event_calendar_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `all_day` tinyint(4) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recurring` tinyint(4) NOT NULL DEFAULT '0',
  `recur_frequency` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '30',
  `recur_start_date` date DEFAULT NULL,
  `recur_end_date` date DEFAULT NULL,
  `recur_next_date` date DEFAULT NULL,
  `recur_type` enum('day','week','month','year') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month',
  `checkin_type` enum('everyone','specific_tags','no_one','form_respondents') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'everyone',
  `tags` text COLLATE utf8_unicode_ci,
  `include_checkout` tinyint(4) NOT NULL DEFAULT '0',
  `family_checkin` tinyint(4) NOT NULL DEFAULT '0',
  `featured_image` text COLLATE utf8_unicode_ci,
  `gallery` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `latitude` text COLLATE utf8_unicode_ci,
  `longitude` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_attendance`
--

CREATE TABLE `event_attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `anonymous` tinyint(4) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_calendars`
--

CREATE TABLE `event_calendars` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_locations`
--

CREATE TABLE `event_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_payments`
--

CREATE TABLE `event_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_method_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_volunteers`
--

CREATE TABLE `event_volunteers` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('accepted','declined','no_response') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no_response',
  `roles` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_volunteer_roles`
--

CREATE TABLE `event_volunteer_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_volunteer_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `volunteer_role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `expense_type_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recurring` tinyint(4) NOT NULL DEFAULT '0',
  `recur_frequency` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '31',
  `recur_start_date` date DEFAULT NULL,
  `recur_end_date` date DEFAULT NULL,
  `recur_next_date` date DEFAULT NULL,
  `recur_type` enum('day','week','month','year') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month',
  `notes` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `branch_id`, `user_id`, `expense_type_id`, `amount`, `date`, `year`, `month`, `recurring`, `recur_frequency`, `recur_start_date`, `recur_end_date`, `recur_next_date`, `recur_type`, `notes`, `files`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, '35000.00', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', NULL, NULL, '2018-03-13 08:17:16', '2018-03-13 08:17:16'),
(2, NULL, NULL, 6, '55000.00', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', NULL, NULL, '2018-03-13 08:53:20', '2018-03-13 08:53:20'),
(3, NULL, NULL, 5, '20000.00', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', NULL, NULL, '2018-03-13 08:53:38', '2018-03-13 08:53:38'),
(4, NULL, NULL, 6, '75000.00', '2018-03-21', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', 'this is for bus maintenance', NULL, '2018-03-13 08:58:48', '2018-03-13 08:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`id`, `name`, `notes`) VALUES
(6, 'bus maintenance', 'this is for bus maintenance'),
(5, 'fuel', 'this is for fuel');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `picture` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_members`
--

CREATE TABLE `family_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `family_id` int(10) UNSIGNED DEFAULT NULL,
  `family_role` enum('adult','spouse','head','child','unassigned') COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow_ups`
--

CREATE TABLE `follow_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `hod_id` int(10) UNSIGNED DEFAULT NULL,
  `follow_up_category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_categories`
--

CREATE TABLE `follow_up_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `days` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `follow_up_categories`
--

INSERT INTO `follow_up_categories` (`id`, `branch_id`, `user_id`, `name`, `notes`, `days`) VALUES
(1, NULL, NULL, 'test', 'this is a test', '33'),
(2, NULL, NULL, 'followup things', 'this is a followup test', '23');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `default_fund` tinyint(4) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `user_id`, `default_fund`, `name`, `notes`, `created_at`, `updated_at`) VALUES
(10, NULL, 0, 'falz the badh guy', 'support the movement', '2018-02-28 13:26:09', '2018-02-28 13:26:09'),
(11, NULL, 0, 'la fete in paris', 'this is for paris', '2018-02-28 13:27:07', '2018-02-28 13:27:07'),
(12, NULL, 0, 'davido fans things', 'this is davidos fan things', '2018-02-28 13:48:16', '2018-02-28 13:48:16'),
(13, NULL, 0, 'mayor lazer things the southy niggar', 'major lazer niggar with mr incredible', '2018-02-28 13:52:38', '2018-02-28 13:52:38'),
(14, NULL, 0, 'trip to southafrica all the way long', 'i like this girl in particular', '2018-02-28 13:53:40', '2018-02-28 13:53:40'),
(15, NULL, 0, 'Davido in the DMW team', 'this is for davidos team  and all and all', '2018-02-28 13:54:42', '2018-02-28 13:54:42'),
(16, NULL, 0, 'test', 'tester', '2018-03-01 02:59:11', '2018-03-01 02:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `headofdepartments`
--

CREATE TABLE `headofdepartments` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `middle_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `gender` enum('male','female','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `status` enum('attender','visitor','member','inactive','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `marital_status` enum('single','engaged','married','divorced','widowed','separated','unknown','deceased') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `dob` date DEFAULT NULL,
  `departments` text COLLATE utf8_unicode_ci,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headofdepartments`
--

INSERT INTO `headofdepartments` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `status`, `marital_status`, `dob`, `departments`, `mobile_phone`, `email`, `address`, `notes`, `photo`, `created_at`, `updated_at`) VALUES
(4, 'tolu hod', 'baba hod', NULL, 'male', 'unknown', 'engaged', '2018-03-06', NULL, '08143202358', 'doubleasam92@gmail.com', 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state', NULL, NULL, '2018-03-11 07:37:16', '2018-03-11 07:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `middle_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `gender` enum('male','female','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `status` enum('attender','visitor','member','inactive','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `marital_status` enum('single','engaged','married','divorced','widowed','separated','unknown','deceased') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `dob` date DEFAULT NULL,
  `deceased` date DEFAULT NULL,
  `home_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `branch_id`, `user_id`, `first_name`, `middle_name`, `last_name`, `gender`, `status`, `marital_status`, `dob`, `deceased`, `home_phone`, `mobile_phone`, `work_phone`, `email`, `address`, `notes`, `photo`, `files`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Afolabi', 'adeniyi', 'samuel', 'male', 'attender', 'engaged', '2012-11-02', NULL, NULL, '08143202358', NULL, 'doubleasam92@gmail.com', 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state', NULL, 'public/qvEYyJd1h4tFwHXg7zp7FRxdRZGVETz4bBUQ8XSu.png', NULL, '2018-01-19 16:32:39', '2018-01-19 16:32:39'),
(2, NULL, NULL, 'benedict', 'shola', 'matthews', 'male', 'visitor', 'engaged', '2012-11-02', NULL, NULL, '8143202358', NULL, 'doubleasam92@gmail.com', 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state', NULL, 'public/IlsgXNyYpR2m4taq4H6Je8f1f6YgLoFxQBBpAlp3.jpeg', NULL, '2018-01-23 08:37:25', '2018-01-23 08:37:25'),
(3, NULL, NULL, 'joshua', 'Asilp', 'lola', 'male', 'visitor', 'married', '2012-11-02', NULL, NULL, '8143202358', NULL, 'joshuaafo@yahoo.com', 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state', NULL, 'public/exfc6GWsgUijhaTCiAluPs1SENAwdulLo5CWnrat.jpeg', NULL, '2018-01-23 16:09:44', '2018-01-23 16:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `member_tags`
--

CREATE TABLE `member_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `attachment` text COLLATE utf8_unicode_ci,
  `to_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `read` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_07_02_230147_migration_cartalyst_sentinel', 1),
('2016_07_23_173157_create_messages_table', 1),
('2016_07_23_173226_create_sms_table', 1),
('2016_07_23_173242_create_settings_table', 1),
('2016_11_05_062734_create_permissions_table', 1),
('2017_02_23_002300_create_custom_fields_table', 1),
('2017_02_23_003720_create_custom_fields_meta_table', 1),
('2017_04_11_091435_create_payroll_templates_table', 1),
('2017_04_11_094729_create_payroll_template_meta_table', 1),
('2017_04_12_004631_create_payroll_table', 1),
('2017_04_12_004829_create_payroll_meta_table', 1),
('2017_04_14_083438_create_expenses_table', 1),
('2017_04_14_083535_create_expense_types_table', 1),
('2017_04_16_084016_create_other_income_table', 1),
('2017_04_16_084118_create_other_income_types_table', 1),
('2017_04_18_083800_create_emails_table', 1),
('2017_05_04_103559_create_countries_table', 1),
('2017_07_23_064420_create_audit_trail_table', 1),
('2017_09_21_071217_create_events_table', 1),
('2017_09_21_073052_create_event_locations_table', 1),
('2017_09_21_074026_create_event_calendars_table', 1),
('2017_09_21_092140_create_event_attendance_table', 1),
('2017_09_21_092803_create_event_volunteers_table', 1),
('2017_09_21_093013_create_event_volunteer_roles_table', 1),
('2017_09_21_093657_create_volunteer_roles_table', 1),
('2017_09_21_094218_create_tags_table', 1),
('2017_09_21_100337_create_assignments_table', 1),
('2017_09_21_101425_create_assignment_categories_table', 1),
('2017_09_21_104652_create_contribution_batches_table', 1),
('2017_09_21_111015_create_campaigns_table', 1),
('2017_09_21_114512_create_funds_table', 1),
('2017_09_21_121258_create_branches_table', 1),
('2017_09_21_121940_create_contributions_table', 1),
('2017_09_21_124524_create_pledges_table', 1),
('2017_09_21_130631_create_payment_methods_table', 1),
('2017_09_21_143819_create_pledge_payments_table', 1),
('2017_09_21_172236_create_families_table', 1),
('2017_09_21_173528_create_family_members_table', 1),
('2017_09_21_182544_create_members_table', 1),
('2017_09_21_190852_create_member_tags_table', 1),
('2017_09_22_065017_create_assets_table', 1),
('2017_09_22_065332_create_asset_types_table', 1),
('2017_09_26_070512_create_event_payments_table', 1),
('2017_10_25_081127_create_follow_ups_table', 1),
('2017_10_25_081208_create_follow_up_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_income`
--

CREATE TABLE `other_income` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `other_income_type_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `files` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_income_types`
--

CREATE TABLE `other_income_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `user_id`, `name`) VALUES
(1, NULL, 'test'),
(2, NULL, 'test'),
(3, NULL, 'test'),
(4, NULL, 'test'),
(5, NULL, 'test'),
(6, NULL, 'test'),
(7, NULL, 'loan'),
(8, NULL, 'flash'),
(9, NULL, 'flash'),
(10, NULL, 'flash'),
(11, NULL, 'flash'),
(12, NULL, 'flash'),
(13, NULL, 'flash'),
(14, NULL, 'cheque'),
(15, NULL, 'cheque');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `settings_id` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `staff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `pay_amount` decimal(10,0) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recurring` tinyint(4) NOT NULL DEFAULT '0',
  `recur_frequency` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '31',
  `recur_start_date` date DEFAULT NULL,
  `recur_end_date` date DEFAULT NULL,
  `recur_next_date` date DEFAULT NULL,
  `recur_type` enum('day','week','month','year') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `branch_id`, `settings_id`, `staff_id`, `staff`, `business_name`, `payment_method`, `bank_name`, `account_number`, `description`, `comments`, `pay_amount`, `date`, `year`, `month`, `recurring`, `recur_frequency`, `recur_start_date`, `recur_end_date`, `recur_next_date`, `recur_type`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '2', NULL, 'cheque', 'GT Bank', '08277372828378', NULL, NULL, '560000', '2018-03-12', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-12 16:31:42', '2018-03-12 16:31:42'),
(2, NULL, NULL, NULL, '1', NULL, 'cash', 'first Bank', '99303839392', NULL, NULL, '969000', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 10:59:30', '2018-03-16 10:59:30'),
(3, NULL, NULL, NULL, '2', NULL, 'cheque', 'Fidelity Bank', '007373282282', NULL, NULL, '102000', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 11:01:05', '2018-03-16 11:01:05'),
(4, NULL, NULL, NULL, '2', NULL, NULL, 'teu', '49499494', NULL, NULL, '54646464', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 11:03:11', '2018-03-16 11:03:11'),
(5, NULL, NULL, NULL, NULL, NULL, 'bank', 'zenith', '83838388', NULL, NULL, '888888', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 11:12:21', '2018-03-16 11:12:21'),
(6, NULL, NULL, NULL, NULL, NULL, 'cash', 'omega bank', '999999999', NULL, NULL, '750000', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 11:13:30', '2018-03-16 11:13:30'),
(7, NULL, NULL, NULL, NULL, NULL, 'cash', 'first Bank', '8829382920', NULL, NULL, '150000', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 12:11:12', '2018-03-16 12:11:12'),
(8, NULL, NULL, NULL, NULL, NULL, 'bank transfer', 'FCMB', '334322454', NULL, NULL, '750000', '2018-03-15', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 12:17:58', '2018-03-16 12:17:58'),
(9, NULL, NULL, 3, NULL, NULL, 'cash', 'GT Bank', '077566733', NULL, NULL, '35000', '2012-11-02', NULL, NULL, 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 12:27:47', '2018-03-16 12:27:47'),
(10, NULL, NULL, 3, NULL, NULL, 'cash', 'GT Bank', '077566733', NULL, NULL, '35000', '2012-11-02', '2012', '11', 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 12:36:06', '2018-03-16 12:36:06'),
(11, NULL, NULL, 1, NULL, NULL, 'cash', 'Monumental Bank', '01128828383', NULL, NULL, '850000', '2012-11-02', '2012', '11', 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 12:52:27', '2018-03-16 12:52:27'),
(12, NULL, NULL, 3, NULL, NULL, 'cash', 'union bank', '5546123570', NULL, NULL, '64000', '2012-11-02', '2012', '11', 0, '31', NULL, NULL, NULL, 'month', '2018-03-16 13:32:12', '2018-03-16 13:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_meta`
--

CREATE TABLE `payroll_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `payroll_id` int(10) UNSIGNED NOT NULL,
  `payroll_template_meta_id` int(10) UNSIGNED DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` enum('top_left','top_right','bottom_left','bottom_right') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bottom_left'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_templates`
--

CREATE TABLE `payroll_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payroll_templates`
--

INSERT INTO `payroll_templates` (`id`, `name`, `notes`, `picture`) VALUES
(1, 'Default', 'Default Payroll Template', 'default_payroll_template');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_template_meta`
--

CREATE TABLE `payroll_template_meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `payroll_template_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` enum('top_left','top_right','bottom_left','bottom_right') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bottom_left',
  `is_default` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `parent_id`, `name`, `slug`, `description`) VALUES
(1, 0, 'Members', 'members', 'Access Members Module'),
(2, 1, 'View members', 'members.view', 'View members'),
(3, 1, 'Update members', 'members.update', 'Update members'),
(4, 1, 'Delete members', 'members.delete', 'Delete members'),
(5, 1, 'Create members', 'members.create', 'Add new members'),
(6, 0, 'Events', 'events', 'Access events Module'),
(7, 6, 'Create events', 'events.create', 'Create events'),
(9, 6, 'Update events', 'events.update', 'Update events'),
(10, 6, 'Delete events', 'events.delete', 'Delete events'),
(11, 6, 'View events', 'events.view', 'View events'),
(20, 0, 'Payroll', 'payroll', 'Access Payroll Module'),
(21, 20, 'View Payroll', 'payroll.view', 'View Payroll'),
(22, 20, 'Update Payroll', 'payroll.update', 'Update Payroll'),
(23, 20, 'Delete Payroll', 'payroll.delete', 'Delete Payroll'),
(24, 20, 'Create Payroll', 'payroll.create', 'Create Payroll'),
(25, 0, 'Expenses', 'expenses', 'Access Expenses Module'),
(26, 25, 'View Expenses', 'expenses.view', 'View Expenses'),
(27, 25, 'Create Expenses', 'expenses.create', 'Create Expenses'),
(28, 25, 'Update Expenses', 'expenses.update', 'Update Expenses'),
(29, 25, 'Delete Expenses', 'expenses.delete', 'Delete Expenses'),
(30, 0, 'Other Income', 'other_income', 'Access Other Income Module'),
(31, 30, 'View Other Income', 'other_income.view', 'View Other income'),
(32, 30, 'Create Other Income', 'other_income.create', 'Create other income'),
(33, 30, 'Update Other Income', 'other_income.update', 'Update Other Incom'),
(34, 30, 'Delete Other Income', 'other_income.delete', 'Delete other income'),
(40, 0, 'Reports', 'reports', 'Access Reports Module'),
(41, 0, 'Communication', 'communication', 'Access Communication Module'),
(42, 41, 'Create Communication', 'communication.create', 'Send Emails & SMS'),
(43, 41, 'Delete Communication', 'communication.delete', 'Delete Communication'),
(44, 0, 'Custom Fields', 'custom_fields', 'Access Custom Fields Module'),
(45, 44, 'View Custom Fields', 'custom_fields.view', 'View Custom fields'),
(46, 44, 'Create Custom Fields', 'custom_fields.create', 'Create Custom Fields'),
(47, 44, 'Custom Fields', 'custom_fields.update', 'Update Custom Fields'),
(48, 44, 'Delete Custom Fields', 'custom_fields.delete', 'Delete Custom Fields'),
(49, 0, 'Users', 'users', 'Access Users Module'),
(50, 49, 'View Users', 'users.view', 'View Users '),
(51, 49, 'Create Users', 'users.create', 'Create users'),
(52, 49, 'Update Users', 'users.update', 'Update Users'),
(53, 49, 'Delete Users', 'users.delete', 'Delete Users'),
(54, 49, 'Manage Roles', 'users.roles', 'Manage user roles'),
(55, 0, 'Settings', 'settings', 'Manage Settings'),
(56, 0, 'Audit Trail', 'audit_trail', 'Access Audit Trail'),
(74, 0, 'Dashboard', 'dashboard', 'Access Dashboard'),
(97, 0, 'Assets', 'assets', 'Access Assets Menu'),
(98, 97, 'Create Assets', 'assets.create', ''),
(99, 97, 'View Assets', 'assets.view', ''),
(100, 97, 'Update Assets', 'assets.update', ''),
(101, 97, 'Delete Assets', 'assets.delete', ''),
(102, 0, 'Tags', 'tags', 'Access Tags menu'),
(103, 102, 'View Tags', 'tags.view', ''),
(104, 102, 'Create Tags', 'tags.create', ''),
(105, 102, 'Update Tags', 'tags.update', ''),
(106, 102, 'Delete Tags', 'tags.delete', ''),
(107, 0, 'Follow Ups', 'follow_ups', 'Access Follow Ups'),
(108, 107, 'View Follow Ups', 'follow_ups.view', ''),
(109, 107, 'Create Follow Ups', 'follow_ups.create', ''),
(110, 107, 'Update Follow Ups', 'follow_ups.update', ''),
(111, 107, 'Delete Follow Ups', 'follow_ups.delete', ''),
(112, 0, 'Pledges', 'pledges', ''),
(113, 112, 'View Pledges', 'pledges.view', ''),
(114, 112, 'Create Pledges', 'pledges.create', ''),
(115, 112, 'Update Pledges', 'pledges.update', ''),
(116, 112, 'Delete Pledges', 'pledges.delete', ''),
(117, 0, 'Contributions', 'contributions', 'Access Contributions Menu'),
(118, 117, 'View Contributions', 'contributions.view', ''),
(119, 117, 'Create Contributions', 'contributions.create', ''),
(120, 117, 'Update Contributions', 'contributions.update', ''),
(121, 117, 'Delete Contributions', 'contributions.delete', ''),
(122, 74, 'Member Statistics', 'dashboard.members_statistics', ''),
(123, 74, 'Events Calendar', 'dashboard.calendar', ''),
(124, 74, 'Contributions', 'dashboard.contributions_statistics', ''),
(125, 74, 'Pledges Statistics', 'dashboard.pledges_statistics', ''),
(126, 74, 'Finance Graph', 'dashboard.finance_graph', ''),
(127, 74, 'Tags Statistics', 'dashboard.tags_statistics', '');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `family_id` int(10) UNSIGNED DEFAULT NULL,
  `pledge_type` tinyint(4) NOT NULL DEFAULT '1',
  `campaign_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(1) NOT NULL,
  `recurring` tinyint(4) NOT NULL DEFAULT '0',
  `recur_frequency` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '31',
  `recur_type` enum('day','week','month','year') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month',
  `recur_start_date` date DEFAULT NULL,
  `recur_end_date` date DEFAULT NULL,
  `recur_next_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `times_number` int(11) NOT NULL DEFAULT '1',
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `branch_id`, `user_id`, `member_id`, `family_id`, `pledge_type`, `campaign_id`, `amount`, `status`, `recurring`, `recur_frequency`, `recur_type`, `recur_start_date`, `recur_end_date`, `recur_next_date`, `total_amount`, `times_number`, `year`, `month`, `date`, `notes`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, 1, NULL, 1, 1, '55.00', 0, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-01-27 07:57:23', '2018-01-27 07:57:23'),
(10, NULL, NULL, 2, NULL, 1, 6, '99.00', 0, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-01-27 07:57:53', '2018-01-27 07:57:53'),
(11, NULL, NULL, 3, NULL, 1, 3, '45.00', 0, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-01-27 08:05:07', '2018-01-27 08:05:07'),
(13, NULL, NULL, 3, NULL, 1, 5, '99000.00', 0, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-03-15 23:40:02', '2018-03-15 23:40:02'),
(14, NULL, NULL, 1, NULL, 1, 6, '88000.00', 1, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-03-15 23:40:42', '2018-03-15 23:40:42'),
(15, NULL, NULL, 1, NULL, 1, 6, '969.00', 0, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-03-15 23:41:40', '2018-03-15 23:41:40'),
(16, NULL, NULL, 1, NULL, 1, 4, '101.00', 1, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-03-15 23:43:40', '2018-03-15 23:43:40'),
(17, NULL, NULL, 1, NULL, 1, 6, '33.00', 1, 0, '31', 'month', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2012-11-02', NULL, '2018-03-15 23:44:41', '2018-03-15 23:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `pledge_payments`
--

CREATE TABLE `pledge_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `pledge_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_method_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{"members":true,"members.view":true,"members.update":true,"members.delete":true,"members.create":true,"events":true,"events.create":true,"events.update":true,"events.delete":true,"events.view":true,"payroll":true,"payroll.view":true,"payroll.update":true,"payroll.delete":true,"payroll.create":true,"expenses":true,"expenses.view":true,"expenses.create":true,"expenses.update":true,"expenses.delete":true,"other_income":true,"other_income.view":true,"other_income.create":true,"other_income.update":true,"other_income.delete":true,"reports":true,"communication":true,"communication.create":true,"communication.delete":true,"custom_fields":true,"custom_fields.view":true,"custom_fields.create":true,"custom_fields.update":true,"custom_fields.delete":true,"users":true,"users.view":true,"users.create":true,"users.update":true,"users.delete":true,"users.roles":true,"settings":true,"audit_trail":true,"dashboard":true,"dashboard.members_statistics":true,"dashboard.calendar":true,"dashboard.contributions_statistics":true,"dashboard.pledges_statistics":true,"dashboard.finance_graph":true,"dashboard.tags_statistics":true,"assets":true,"assets.create":true,"assets.view":true,"assets.update":true,"assets.delete":true,"tags":true,"tags.view":true,"tags.create":true,"tags.update":true,"tags.delete":true,"follow_ups":true,"follow_ups.view":true,"follow_ups.create":true,"follow_ups.update":true,"follow_ups.delete":true,"pledges":true,"pledges.view":true,"pledges.create":true,"pledges.update":true,"pledges.delete":true,"contributions":true,"contributions.view":true,"contributions.create":true,"contributions.update":true,"contributions.delete":true}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-10-26 12:48:03', '2017-10-26 12:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `church_name` varchar(255) NOT NULL,
  `church_email` varchar(255) NOT NULL,
  `church_website` varchar(255) NOT NULL,
  `church_mobile_phone` int(11) NOT NULL,
  `church_address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `church_name`, `church_email`, `church_website`, `church_mobile_phone`, `church_address`) VALUES
(1, 'Revelation Manager-edited', 'info@revmanager.com', 'www.revmanager.com', 801238594, 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `recipients` int(10) UNSIGNED NOT NULL,
  `send_to` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `gateway` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` text COLLATE utf8_unicode_ci,
  `middle_name` text COLLATE utf8_unicode_ci,
  `last_name` text COLLATE utf8_unicode_ci,
  `gender` enum('male','female','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `status` enum('attender','visitor','member','inactive','unknown') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `marital_status` enum('single','engaged','married','divorced','widowed','separated','unknown','deceased') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `dob` date DEFAULT NULL,
  `position` text COLLATE utf8_unicode_ci,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `status`, `marital_status`, `dob`, `position`, `mobile_phone`, `email`, `address`, `notes`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Afolabi', 'adeniyi', NULL, 'male', 'unknown', 'single', '2012-11-02', 'Technology Expert', '08143202358', 'doubleasam92@gmail.com', 'plot 8, block 2 surulere estate, ijede ikorodu, lagos state', NULL, NULL, '2018-03-12 15:19:24', '2018-03-12 15:19:24'),
(2, 'joshua-ade', 'matthew', NULL, 'male', 'unknown', 'engaged', '2012-11-02', 'Treasurer', '08143202358', 'joshua@yahoo.com', NULL, NULL, NULL, '2018-03-12 15:32:31', '2018-03-12 15:32:31'),
(3, 'joyce', 'the beatuy', NULL, 'unknown', 'unknown', 'unknown', '2012-11-02', 'PRO', NULL, NULL, NULL, NULL, NULL, '2018-03-16 11:04:00', '2018-03-16 11:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `permissions`, `last_login`, `first_name`, `last_name`, `address`, `phone`, `city`, `gender`, `notes`, `created_at`, `updated_at`) VALUES
(1, '', 'admin@webstudio.co.zw', '$2y$10$o2Y8rGrnLzau9mST9AH5n.wIFtPzY7dOMpOqa6bSEwz.o7v.X5K5O', 'NTVBbFxuSaB22hnNlQfkAK13KrNuUv1ODzNvR7Vkmwnes5foHqrA2QhAg7LF', NULL, NULL, 'Admin', 'Admin', NULL, NULL, NULL, NULL, NULL, '2017-10-26 12:48:03', '2017-10-26 12:48:03'),
(2, 'joshua', 'joshuaafo@yahoo.com', '$2y$10$UfcXUgu2iQCTSdfOdtuYhOMSUIfaxYaETiYAsKz0Ok2bZqq5BgDcK', 'SLCyvFvLzXyr0yuuZ0DzpAo1J7rdkSpPib5ILQEIu73RYqNLaCu0DzsIljMx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-20 09:08:58', '2018-01-20 09:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_roles`
--

CREATE TABLE `volunteer_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `notes` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_categories`
--
ALTER TABLE `assignment_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contribution_batches`
--
ALTER TABLE `contribution_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields_meta`
--
ALTER TABLE `custom_fields_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_attendance`
--
ALTER TABLE `event_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_calendars`
--
ALTER TABLE `event_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_locations`
--
ALTER TABLE `event_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_payments`
--
ALTER TABLE `event_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_volunteers`
--
ALTER TABLE `event_volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_volunteer_roles`
--
ALTER TABLE `event_volunteer_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_members`
--
ALTER TABLE `family_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_ups`
--
ALTER TABLE `follow_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_up_categories`
--
ALTER TABLE `follow_up_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headofdepartments`
--
ALTER TABLE `headofdepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_tags`
--
ALTER TABLE `member_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_income`
--
ALTER TABLE `other_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_income_types`
--
ALTER TABLE `other_income_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_meta`
--
ALTER TABLE `payroll_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_templates`
--
ALTER TABLE `payroll_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_template_meta`
--
ALTER TABLE `payroll_template_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledge_payments`
--
ALTER TABLE `pledge_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteer_roles`
--
ALTER TABLE `volunteer_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asset_types`
--
ALTER TABLE `asset_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignment_categories`
--
ALTER TABLE `assignment_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `contribution_batches`
--
ALTER TABLE `contribution_batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `custom_fields_meta`
--
ALTER TABLE `custom_fields_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_attendance`
--
ALTER TABLE `event_attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_calendars`
--
ALTER TABLE `event_calendars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_locations`
--
ALTER TABLE `event_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_payments`
--
ALTER TABLE `event_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_volunteers`
--
ALTER TABLE `event_volunteers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_volunteer_roles`
--
ALTER TABLE `event_volunteer_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_members`
--
ALTER TABLE `family_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `follow_ups`
--
ALTER TABLE `follow_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `follow_up_categories`
--
ALTER TABLE `follow_up_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `headofdepartments`
--
ALTER TABLE `headofdepartments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member_tags`
--
ALTER TABLE `member_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_income`
--
ALTER TABLE `other_income`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_income_types`
--
ALTER TABLE `other_income_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payroll_meta`
--
ALTER TABLE `payroll_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payroll_templates`
--
ALTER TABLE `payroll_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payroll_template_meta`
--
ALTER TABLE `payroll_template_meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pledge_payments`
--
ALTER TABLE `pledge_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `volunteer_roles`
--
ALTER TABLE `volunteer_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
