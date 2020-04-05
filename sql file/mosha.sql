-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 04:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosha`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `description`, `picture`) VALUES
(1, 'I give infinite thanks to God, who has been pleased to make me the first observer of marvelous things.', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `picture`) VALUES
(1, 'I am Dipu Dey', 'I\'m dipu, professional web developer with long time experience in this field​.', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_picture` varchar(100) NOT NULL DEFAULT 'default_picture.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_picture`) VALUES
(5, 'PHPstome', '5.jpg'),
(6, 'vs editor', '6.jpg'),
(7, 'atom editor', '7.jpg'),
(8, 'sun', '8.jpg'),
(9, 'rocket', '9.png'),
(10, 'party', '10.png'),
(11, 'creative it', '11.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(18) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `email_address`, `phone_number`, `address`) VALUES
(1, 'dipudey764@gmail.com', '8801849111357', 'Dhanmondi-4,Mirpur Road,Dhaka-1200,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_message` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `message_sent_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `guest_name`, `guest_email`, `guest_message`, `status`, `message_sent_time`) VALUES
(1, 'dipu', 'dipudey764@gmial.com', 'Your protfolio is beautiful...', 2, '2020-03-06 05:37:51'),
(2, 'Mehedi hasan ', 'mehedi@gmail.com', 'hey bro ! this is a nice protfolio ..', 1, '2020-03-06 05:42:44'),
(3, 'Anik', 'anik@diu.com', 'khub sundor hoicee site ta...', 2, '2020-03-06 07:14:38'),
(4, 'Rabbi', 'rabbi@yahoo.com', 'I need Your Help ! Please Help Me \r\nI want to learn to  Laravel.', 2, '2020-03-06 07:33:36'),
(5, 'rafim', 'rafim@yahoo.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 2, '2020-03-08 02:43:11'),
(6, 'rahim', 'rahim444@gamil.com', 'Event definition is Event definition is Event definition is', 1, '2020-03-08 02:57:02'),
(8, 'dipu', 'dipudey764@gmial.com', '(hello , i\'m dipu)', 2, '2020-03-08 03:37:23'),
(9, 'Mehedi hasan', 'mehedi@gmail.com', '(hello , I\'am dipu, I am a student)', 2, '2020-03-08 03:38:52'),
(10, 'dipu', 'dipudey764@gmial.com', '( hello, i\'m mahi, i\'am a student)', 2, '2020-03-08 03:40:20'),
(11, 'shoel', 'shoel@yahoo.com', 'vai kemon asen', 1, '2020-03-17 11:33:48'),
(12, 'Robiul Islam', 'robiul@gmail.com', 'ki khobor bro', 1, '2020-03-19 11:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `qualification_name` varchar(100) NOT NULL,
  `qualification_year` int(5) NOT NULL,
  `qualification_persent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `qualification_name`, `qualification_year`, `qualification_persent`) VALUES
(2, 'Junior School Certificate', 2013, 99),
(4, 'Secendory School Certificate', 2016, 90),
(6, 'Diploma of Computer Engineering', 2020, 80);

-- --------------------------------------------------------

--
-- Table structure for table `my_work`
--

CREATE TABLE `my_work` (
  `id` int(11) NOT NULL,
  `feature_item` int(8) NOT NULL,
  `active_products` int(8) NOT NULL,
  `experience` int(8) NOT NULL,
  `clients` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_work`
--

INSERT INTO `my_work` (`id`, `feature_item`, `active_products`, `experience`, `clients`) VALUES
(1, 250, 220, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `protfolio`
--

CREATE TABLE `protfolio` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `protfolio_title` varchar(255) NOT NULL,
  `protfolio_picture` varchar(100) NOT NULL DEFAULT 'default_picture.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `protfolio`
--

INSERT INTO `protfolio` (`id`, `category_name`, `protfolio_title`, `protfolio_picture`) VALUES
(2, 'video', 'Dark Beauty', '2.jpg'),
(3, 'audio', 'Gilroy Limbo.', '3.jpg'),
(5, 'audio', 'Gilroy Limbo.', '5.jpg'),
(10, 'UI/UX', 'Hamble Triangle', '10.jpg'),
(11, 'audio', 'Dark Beauty', '11.jpg'),
(12, 'audio', 'again there', '12.jpg'),
(13, 'Blog Site Develop', 'Simple Blog Site Design And Develop', '13.png'),
(14, 'Web Development', 'Student Information System', '14.jpg'),
(15, 'Web Design', 'Simple Site Design', '15.png');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_picture` varchar(100) NOT NULL DEFAULT 'default_picture.jpg',
  `customer_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `customer_name`, `customer_picture`, `customer_comment`) VALUES
(1, 'tonoy jakson', '1.png', ' An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result '),
(5, 'Dipu Dey', '5.png', ' An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result  ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(150) NOT NULL,
  `service_icon` varchar(50) NOT NULL,
  `service_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_icon`, `service_description`) VALUES
(1, 'Creative Design', 'fab fa-react', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.'),
(2, 'Unlimited Features', 'fab fa-free-code-camp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.'),
(3, 'Ultra Responsive', 'fal fa-desktop', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.'),
(4, 'Creative Ideas', 'fal fa-lightbulb-on', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust'),
(5, 'Easy Customization', 'fal fa-edit', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.'),
(8, 'Unlimited Responsive', 'fal fa-headset', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ');

-- --------------------------------------------------------

--
-- Table structure for table `site_logo`
--

CREATE TABLE `site_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_logo`
--

INSERT INTO `site_logo` (`id`, `logo`) VALUES
(1, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `social_icon` varchar(50) NOT NULL,
  `social_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_icon`, `social_link`) VALUES
(2, 'fab fa-facebook-f', 'https://www.facebook.com/mosha'),
(3, 'fab fa-twitter', 'https://www.facebook.com'),
(4, 'fab fa-instagram', 'https://www.facebook.com/mosha'),
(7, 'fab fa-github', 'https://github.com/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'default_picture.jpg',
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_address`, `age`, `password`, `gender`, `picture`, `status`) VALUES
(15, 'Dipu Chandra Dey', 'dipudey764@gmail.com', 20, 'e230c74ce69b6e4e0bda0a77ef4dcefe', 'male', '15.png', 1),
(16, 'Rafim Rawmak', 'rafim@live.com', 21, 'e230c74ce69b6e4e0bda0a77ef4dcefe', 'male', 'default_picture.jpg', 2),
(17, 'Rema Dey', 'rema0176@gmail.com', 26, 'e230c74ce69b6e4e0bda0a77ef4dcefe', 'female', 'default_picture.jpg', 1),
(18, 'Abul kalam', 'abul@yahoo.com', 30, 'e230c74ce69b6e4e0bda0a77ef4dcefe', 'male', '18.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_work`
--
ALTER TABLE `my_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protfolio`
--
ALTER TABLE `protfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_logo`
--
ALTER TABLE `site_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `my_work`
--
ALTER TABLE `my_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `protfolio`
--
ALTER TABLE `protfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_logo`
--
ALTER TABLE `site_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
