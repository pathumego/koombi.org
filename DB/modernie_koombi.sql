-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2014 at 12:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `modernie_koombi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE IF NOT EXISTS `tbl_media` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `media_id` bigint(20) NOT NULL,
  `media_type` int(11) NOT NULL,
  `project_token` text COLLATE utf16_bin NOT NULL,
  `media_url` text COLLATE utf16_bin NOT NULL,
  ` media_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_org`
--

CREATE TABLE IF NOT EXISTS `tbl_org` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `org_name` text COLLATE utf16_bin NOT NULL,
  `org_type` text COLLATE utf16_bin NOT NULL,
  `org_desc` mediumtext COLLATE utf16_bin NOT NULL,
  `admin_uuser_id` bigint(20) NOT NULL,
  `org_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `project_id` bigint(20) NOT NULL,
  `created_user_id` bigint(20) NOT NULL,
  `project_token` text COLLATE utf16_bin NOT NULL,
  `project_title` text COLLATE utf16_bin NOT NULL,
  `project_desc` mediumtext COLLATE utf16_bin NOT NULL,
  `project_blurb` text COLLATE utf16_bin NOT NULL,
  `project_type` int(11) NOT NULL,
  `project_tags` text COLLATE utf16_bin NOT NULL,
  `project_loc_city` text COLLATE utf16_bin NOT NULL,
  `project_loc_country` text COLLATE utf16_bin NOT NULL,
  `project_start_date` text COLLATE utf16_bin NOT NULL,
  `project_funding_duration` text COLLATE utf16_bin NOT NULL,
  `funding_type` int(1) NOT NULL,
  `optimum_funding_goal` text COLLATE utf16_bin NOT NULL,
  `minimum_funding_goal` text COLLATE utf16_bin NOT NULL,
  `pledged_amount` text COLLATE utf16_bin NOT NULL,
  `project_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `project_id`, `created_user_id`, `project_token`, `project_title`, `project_desc`, `project_blurb`, `project_type`, `project_tags`, `project_loc_city`, `project_loc_country`, `project_start_date`, `project_funding_duration`, `funding_type`, `optimum_funding_goal`, `minimum_funding_goal`, `pledged_amount`, `project_status`) VALUES
(1, 1, 1, '1', 'title 1', 'safasf safasf a sfas fas f as f asffs af as fas f asf as f asf as  asf as fa sf asf', 'q3cx xcbxc hjg ui fjgf jf j yjytty tyty tyu  gfhgf h', 1, 'sfs, sdf, sdfsd', 'Colombo', 'LK', '2352523523', '33', 2, '32423', '32', '3423', 1),
(2, 2, 1, '1', 'title 1', 'safasf safasf a sfas fas f as f asffs af as fas f asf as f asf as  asf as fa sf asf', 'q3cx xcbxc hjg ui fjgf jf j yjytty tyty tyu  gfhgf h', 1, 'sfs, sdf, sdfsd', 'Colombo', 'LK', '2352523523', '33', 2, '32423', '32', '3423', 1),
(3, 3, 1, '1', 'title 1', 'safasf safasf a sfas fas f as f asffs af as fas f asf as f asf as  asf as fa sf asf', 'q3cx xcbxc hjg ui fjgf jf j yjytty tyty tyu  gfhgf h', 1, 'sfs, sdf, sdfsd', 'Colombo', 'LK', '2352523523', '33', 2, '32423', '32', '3423', 1),
(4, 4, 1, '1', 'title 1', 'safasf safasf a sfas fas f as f asffs af as fas f asf as f asf as  asf as fa sf asf', 'q3cx xcbxc hjg ui fjgf jf j yjytty tyty tyu  gfhgf h', 1, 'sfs, sdf, sdfsd', 'Colombo', 'LK', '2352523523', '33', 2, '32423', '32', '3423', 1),
(5, 5, 1, '1', 'title 1', 'safasf safasf a sfas fas f as f asffs af as fas f asf as f asf as  asf as fa sf asf', 'q3cx xcbxc hjg ui fjgf jf j yjytty tyty tyu  gfhgf h', 1, 'sfs, sdf, sdfsd', 'Colombo', 'LK', '2352523523', '33', 2, '32423', '32', '3423', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_name` text COLLATE utf16_bin NOT NULL,
  `user_email` text COLLATE utf16_bin NOT NULL,
  `user_pwd` text COLLATE utf16_bin NOT NULL,
  `user_type` int(1) NOT NULL,
  `user_reg_type` int(1) NOT NULL,
  `facebook_id` text COLLATE utf16_bin NOT NULL,
  `twitter_handler` text COLLATE utf16_bin NOT NULL,
  `google_id` text COLLATE utf16_bin NOT NULL,
  `linkedin_id` text COLLATE utf16_bin NOT NULL,
  `user_token` text COLLATE utf16_bin NOT NULL,
  `created_timestamp` text COLLATE utf16_bin NOT NULL,
  `update_timestamp` text COLLATE utf16_bin NOT NULL,
  `user_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_id`, `user_name`, `user_email`, `user_pwd`, `user_type`, `user_reg_type`, `facebook_id`, `twitter_handler`, `google_id`, `linkedin_id`, `user_token`, `created_timestamp`, `update_timestamp`, `user_status`) VALUES
(1, 140822204552930, 'jj', 'jj@jjd.lk', '3f67232bdfdaa9f26c6719fcb373b70f', 0, 0, '', '', '', '', 'f1dbdce721069b15645a84c80570b6b44ec6ab8d', '1408222045', '1408222045', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE IF NOT EXISTS `tbl_user_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `first_name` text COLLATE utf16_bin NOT NULL,
  `last_name` text COLLATE utf16_bin NOT NULL,
  `pin` text COLLATE utf16_bin NOT NULL,
  `address_line_1` text COLLATE utf16_bin NOT NULL,
  `address_line_2` text COLLATE utf16_bin NOT NULL,
  `city` text COLLATE utf16_bin NOT NULL,
  `province` text COLLATE utf16_bin NOT NULL,
  `country` text COLLATE utf16_bin NOT NULL,
  `mobile` text COLLATE utf16_bin NOT NULL,
  `fixed_phone` text COLLATE utf16_bin NOT NULL,
  `website` text COLLATE utf16_bin NOT NULL,
  `desc` longtext COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_funding_types`
--

CREATE TABLE IF NOT EXISTS `_funding_types` (
  `funding_type_id` int(1) NOT NULL,
  `funding_type_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_funding_types`
--

INSERT INTO `_funding_types` (`funding_type_id`, `funding_type_desc`) VALUES
(0, 'All or Nothing'),
(1, 'Keep it All');

-- --------------------------------------------------------

--
-- Table structure for table `_media_status`
--

CREATE TABLE IF NOT EXISTS `_media_status` (
  `media_status_id` int(11) NOT NULL,
  `media_status_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_media_status`
--

INSERT INTO `_media_status` (`media_status_id`, `media_status_desc`) VALUES
(0, 'Not Approved'),
(1, 'Approved'),
(2, 'Deleted'),
(3, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `_media_types`
--

CREATE TABLE IF NOT EXISTS `_media_types` (
  `media_type_id` int(11) NOT NULL,
  `media_type_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_media_types`
--

INSERT INTO `_media_types` (`media_type_id`, `media_type_desc`) VALUES
(0, 'Profile Pic'),
(1, 'Project Image'),
(2, 'Project Video');

-- --------------------------------------------------------

--
-- Table structure for table `_org_status`
--

CREATE TABLE IF NOT EXISTS `_org_status` (
  `org_status_id` int(1) NOT NULL,
  `org_status_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_org_status`
--

INSERT INTO `_org_status` (`org_status_id`, `org_status_desc`) VALUES
(0, 'Not Approved'),
(1, 'Approved'),
(2, 'Deleted'),
(3, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `_project_status`
--

CREATE TABLE IF NOT EXISTS `_project_status` (
  `project_status_id` int(1) NOT NULL,
  `project_status_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_project_status`
--

INSERT INTO `_project_status` (`project_status_id`, `project_status_desc`) VALUES
(0, 'Not Approved'),
(1, 'Approved'),
(2, 'Funded'),
(3, 'Failed'),
(4, 'Deleted'),
(5, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `_project_types`
--

CREATE TABLE IF NOT EXISTS `_project_types` (
  `project_type_id` int(11) NOT NULL,
  `project_type_desc` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_project_types`
--

INSERT INTO `_project_types` (`project_type_id`, `project_type_desc`) VALUES
(0, 'Animals'),
(1, 'Art'),
(2, 'Comic'),
(3, 'Community'),
(4, 'Dance'),
(5, 'Design'),
(6, 'Education'),
(7, 'Environment'),
(8, 'Fashion'),
(9, 'Film'),
(10, 'Food'),
(11, 'Gaming'),
(12, 'Health'),
(13, 'Music'),
(14, 'Photography'),
(15, 'Politics'),
(16, 'Religion'),
(17, 'Small Business'),
(18, 'Sports'),
(19, 'Technology'),
(20, 'Theater'),
(21, 'Transmedia'),
(22, 'Video / Web'),
(23, 'Writing');

-- --------------------------------------------------------

--
-- Table structure for table `_user_reg_types`
--

CREATE TABLE IF NOT EXISTS `_user_reg_types` (
  `user_reg_type_id` int(1) NOT NULL,
  `user_reg_type_desc` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`user_reg_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_user_reg_types`
--

INSERT INTO `_user_reg_types` (`user_reg_type_id`, `user_reg_type_desc`) VALUES
(0, 'OnSite'),
(1, 'Facebook'),
(2, 'Twitter'),
(3, 'Google'),
(4, 'LinkedIn');

-- --------------------------------------------------------

--
-- Table structure for table `_user_status`
--

CREATE TABLE IF NOT EXISTS `_user_status` (
  `user_status_id` int(1) NOT NULL,
  `user_status_desc` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`user_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_user_status`
--

INSERT INTO `_user_status` (`user_status_id`, `user_status_desc`) VALUES
(0, 'Not Approved'),
(1, 'Email Verified'),
(2, 'Approved'),
(3, 'Deleted'),
(4, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `_user_types`
--

CREATE TABLE IF NOT EXISTS `_user_types` (
  `user_type_id` int(1) NOT NULL,
  `user_type_desc` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `_user_types`
--

INSERT INTO `_user_types` (`user_type_id`, `user_type_desc`) VALUES
(0, 'Contributor'),
(1, 'Project Owner');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
