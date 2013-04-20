-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2013 at 07:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `queen_villas`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE IF NOT EXISTS `accomodations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `slug` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`id`, `name`, `slug`) VALUES
(1, 'Deluxe Room', 'deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `desc`) VALUES
(1, 'Accomodation', ''),
(2, 'Facility', ''),
(3, 'Event', ''),
(4, 'Package', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_from` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `testimonial` text,
  `admin` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publish` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `cust_name`, `cust_from`, `title`, `testimonial`, `admin`, `timestamp`, `publish`) VALUES
(1, 'Barbara', 'Madrid, Spain', 'Spectacular resort in Gili Trawangan, off the beat', 'I spent three nights in this lovely and exotic island off Lombok coast The choice made of Queen Villas was fantastic. This recently refurbished or built resort (it smells of brand-new yet) is located at the other side of the island Harbour, which serves as landmark to move around and where the hustle and bustle is at. \r\n\r\nThe hotel facilities are beautiful, as well as the luxury double room chosen, nicely decorated in modern but simple style. The hotel beach has some sun beds and beach restaurant though it gets hard to swim at this part of this island because of all the coral covering the beach.\r\n\r\nOne of the hotel highlights is the magnific sunset view you can get while walking to/from the Queen Villas hotel to the harbour along the island coastline. Despite the island is so cozy and nice, it was such a disappointment to see that the center of the island is full of rubbish, as there are no hotels or touristic resorts, just locals'' houses.\r\n\r\nIt is advisable to hire bicycles to travel along the island coast but carriages can also be hired in the harbour or outside hotels, although walking along the island is a pleasure. Piece of advice: don''t stop bargaining for better prices. Everything can de negotiated except for the public transport into an from other gili islands. The best beaches on the island rest near the harbour, though best idea is to take the public boat to Gili meno or Gili air, departing at 9 am and returning at 3 pm. Gili trawanjan is the busiest of the three gili islands but still keeps a laid back atmosphere.', 1, '2013-04-06 18:14:41', 1),
(2, 'Natasha', 'Plymouth, United States', 'Heavenly Honeymoon', 'We stayed for five nights in August 2012. We arrived at reception a little earlier than planned and were congratulated immediately on our recent wedding. We booked through asiarooms and so must have put in the comment box that it was our honeymoon. We were immediately ungraded to a luxury villa with a private pool without even asking. The hotel itself is beautiful and super clean. It is around 15 minute (horse and cart ride) away from the main strip but that was exactly what we wanted as it was lovely and private.\r\n\r\nOn our first night we were delivered a yummy cake congratulating us on our wedding, a lovely touch! The beach outside the hotel is lovely and sandy although quite abit of coral on the sea bed and so difficult to swim, go around the otherside of the island for a nicer sea swim. The sunset is beautiful from this part of the island, we had a perfect view from the loungers on the beach at around 6pm.\r\n\r\nStaff were amazing and very attentive. The hotel was not crowded and so we could access all facilities at any point. The restaurant was lovely but we mainly went to the other side of the island for the evening just for a busier atmosphere. Scallywags (on the main strip) cook amazing food. Also book your snorkeling trips on this side of the island, we paid $10 each for a full day trip. Gili Trawangan is beautiful and this hotel gives you luxury and privacy on this amazing island. We would definitely stay again.', 1, '2013-04-06 18:26:29', 1),
(3, 'Kelly', 'Whistler, Canada', 'Peaceful, serene, clean and friendly', 'We''ve stayed at 4 hotels on Trawangan and this was by far the best. On the far side of the island, away from the beach noise. Great value, it was March, so $87 included breakfast, bikes and taxes. The room was lovely and clean with A/C and hot water. Nice big bathroom and super comfortable bed. The staff was helpful and knowledgeable. The pool has natural shade, loads of trees, birds singing and it''s large enough to stay a bit cool. It''s not on the beach, but we were happy to have the shade. The breakfast buffet was fantastic. They have a great chef - lot''s of variety and everything was tasty and fresh. I can''t think of anything I didn''t like about this hotel.', 1, '2013-04-06 18:32:09', 1),
(5, 'Jianita', 'Indonesia', 'Hidden Paradise', 'Had a chance to stay at Queen Villas when I looked it thru tripadvisor, and had chosen it because it is the newest 5-star hotel in the Gili Trawangan. Had never made a better decision in my life. The hotel is very nice, has good ambience and atmosphere, really sets your mood for holiday. It is located on the quieter side of the island, and this the only point where you can enjoy the sunset (you can''t enjoy the sunset on the crowded part of the island) We stayed in the villa for 5 nights, the villa had its own private pool, nice and comfy room and bed, huge bathroom, i feel the price is really worth it down to the single cent for the villas.\r\n\r\nThe queen is the only hotel with big fresh water swimming pool and unlimited fresh water supply in your room (i hope i was informed correctly, because this tiny island had no natural fresh water resources, they have to bring fresh water supplies from lombok island, therefore fresh water is a luxurious items on the island, or so i was informed, and actually on most of the hotels they actually provide the guests with seawater for shower/bathing, so the water at Queen is a big plus plus for me) Breakfast and hotel food was good. And if you wanna go the harbour for more selection of food and mingle with the crowd, renting a horse-cart is the most convenient, or you can rent a bike from the hotel and just cycle while enjoying the wind, waves sound, and view of the island, or you could go the bar, order beer a bottle or two for the road, and start walking strolling along the beach, very relaxing experience.\r\n\r\nThis hotel has its own dive center located right in front of the hotel, be sure not to miss it, and if you have never dived before, this is a perfect time to try, coz they have beginner crash course, and you can start diving on your second day, it''s really a breathtaking experience, and an unforgotten one. Overall stay at the queen, a very memorable place, best holiday I''ve had, will definitely come back to this hotel.', 1, '2013-04-07 03:30:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) COLLATE utf8_turkish_ci NOT NULL,
  `image` varchar(44) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `image`) VALUES
(1, 'Private Pool', 'icon-facility-swim.gif'),
(2, 'Spring Airbed', 'icon-facility-bed.gif'),
(3, 'Safe Deposit Box', 'icon-facility-lock.gif'),
(4, 'LED TV', 'icon-facility-tv.gif'),
(5, 'Tea & Coffee Maker', 'icon-facility-coffee.gif');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `src` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `location_id` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=84 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `src`, `location_id`) VALUES
(2, 'Queen Villas', 'qv-9.jpg', '1'),
(3, 'Queen Villas', 'qv-8.jpg', '1'),
(4, 'Queen Villas', 'qv-7.jpg', '1'),
(5, 'Queen Villas', 'qv-6.jpg', '1'),
(6, 'Queen Villas', 'qv-5.jpg', '1'),
(7, 'Queen Villas', 'qv-4.jpg', '1'),
(8, 'Queen Villas', 'qv-3.jpg', '1'),
(9, 'Queen Villas', 'qv-2.jpg', '1'),
(10, 'Queen Villas', 'qv-17.jpg', '1'),
(11, 'Queen Villas', 'qv-16.jpg', '1'),
(12, 'Queen Villas', 'qv-15.jpg', '1'),
(13, 'Queen Villas', 'qv-14.jpg', '1'),
(14, 'Queen Villas', 'qv-13.jpg', '1'),
(15, 'Queen Villas', 'qv-12.jpg', '1'),
(16, 'Queen Villas', 'qv-11.jpg', '1'),
(17, 'Queen Villas', 'qv-10.jpg', '1'),
(18, 'Queen Villas', 'qv-1.jpg', '1'),
(19, 'Around Gili', 'ag-9.jpg', '2'),
(20, 'Around Gili', 'ag-8.jpg', '2'),
(21, 'Around Gili', 'ag-7.jpg', '2'),
(22, 'Around Gili', 'ag-6.jpg', '2'),
(23, 'Around Gili', 'ag-5.jpg', '2'),
(24, 'Around Gili', 'ag-4.jpg', '2'),
(25, 'Around Gili', 'ag-3.jpg', '2'),
(26, 'Around Gili', 'ag-2.jpg', '2'),
(27, 'Around Gili', 'ag-17.jpg', '2'),
(28, 'Around Gili', 'ag-16.jpg', '2'),
(29, 'Around Gili', 'ag-15.jpg', '2'),
(30, 'Around Gili', 'ag-14.jpg', '2'),
(31, 'Around Gili', 'ag-13.jpg', '2'),
(32, 'Around Gili', 'ag-12.jpg', '2'),
(33, 'Around Gili', 'ag-11.jpg', '2'),
(34, 'Around Gili', 'ag-10.jpg', '2'),
(35, 'Around Gili', 'ag-1.jpg', '2'),
(36, 'Around Lombok', 'al-9.jpg', '3'),
(37, 'Around Lombok', 'al-8.jpg', '3'),
(38, 'Around Lombok', 'al-7.jpg', '3'),
(39, 'Around Lombok', 'al-6.jpg', '3'),
(40, 'Around Lombok', 'al-5.jpg', '3'),
(41, 'Around Lombok', 'al-4.jpg', '3'),
(42, 'Around Lombok', 'al-32.jpg', '3'),
(43, 'Around Lombok', 'al-31.jpg', '3'),
(44, 'Around Lombok', 'al-30.jpg', '3'),
(45, 'Around Lombok', 'al-3.jpg', '3'),
(46, 'Around Lombok', 'al-27.jpg', '3'),
(47, 'Around Lombok', 'al-26.jpg', '3'),
(48, 'Around Lombok', 'al-25.jpg', '3'),
(49, 'Around Lombok', 'al-24.jpg', '3'),
(50, 'Around Lombok', 'al-23.jpg', '3'),
(51, 'Around Lombok', 'al-22.jpg', '3'),
(52, 'Around Lombok', 'al-21.jpg', '3'),
(53, 'Around Lombok', 'al-20.jpg', '3'),
(54, 'Around Lombok', 'al-2.jpg', '3'),
(55, 'Around Lombok', 'al-19.jpg', '3'),
(56, 'Around Lombok', 'al-18.jpg', '3'),
(57, 'Around Lombok', 'al-17.jpg', '3'),
(58, 'Around Lombok', 'al-16.jpg', '3'),
(59, 'Around Lombok', 'al-15.jpg', '3'),
(60, 'Around Lombok', 'al-14.jpg', '3'),
(61, 'Around Lombok', 'al-13.jpg', '3'),
(62, 'Around Lombok', 'al-12.jpg', '3'),
(63, 'Around Lombok', 'al-11.jpg', '3'),
(64, 'Around Lombok', 'al-10.jpg', '3'),
(65, 'Around Lombok', 'al-1.jpg', '3'),
(66, 'Queen Villas', 'photo1.jpg', '1'),
(67, 'Queen Villas', 'photo2.jpg', '1'),
(68, 'Queen Villas', 'photo3.jpg', '1'),
(69, 'Queen Villas', 'photo4.jpg', '1'),
(70, 'Queen Villas', 'photo5.jpg', '1'),
(71, 'Queen Villas', 'photo6.jpg', '1'),
(72, 'Queen Villas', 'photo7.jpg', '1'),
(73, 'Queen Villas', 'photo8.jpg', '1'),
(74, 'Queen Villas', 'photo9.jpg', '1'),
(75, 'Queen Villas', 'photo10.jpg', '1'),
(76, 'Queen Villas', 'photo11.jpg', '1'),
(77, 'Queen Villas', 'photo12.jpg', '1'),
(78, 'Queen Villas', 'photo13.jpg', '1'),
(79, 'Queen Villas', 'photo14.jpg', '1'),
(80, 'Queen Villas', 'photo15.jpg', '1'),
(81, 'Queen Villas', 'photo16.jpg', '1'),
(82, 'Queen Villas', 'photo17.jpg', '1'),
(83, 'Queen Villas', 'photo18.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rcpt_fname` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rcpt_lname` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rcpt_email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `body` text COLLATE utf8_turkish_ci,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `rcpt_fname`, `rcpt_lname`, `rcpt_email`, `body`, `timestamp`, `read`) VALUES
(21, 'How do i get there ? ', 'Robby', 'Prima S', 'robbiejobs@live.com', 'Where filename is the name of your config file, without the .php file extension.\n\nIf you need to load multiple config files normally they will be merged into one master config array. Name collisions can occur, however, if you have identically named array indexes in different config files. To avoid collisions you can set the second parameter to TRUE and each config file will be stored in an array index corresponding to the name of the config file. Example:', '2013-03-02 21:07:53', 1),
(22, 'How do you do ?', 'Robby', 'Prima S', 'robbiejobs@hotmail.com', 'asd', '2013-03-02 21:07:51', 1),
(23, 'EaEaEa', 'Wendy ', 'Julianto', 'toxictoadz@gmail.com', 'It took an hour to figure out 4 4 .. could you give us a simpler question ?', '2013-03-04 12:36:35', 1),
(24, 'Coy', 'Robby', 'Prima', 'robbiejobs@gmail.com', 'awaw', '2013-03-13 12:00:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nprice` varchar(50) DEFAULT '0',
  `sprice` varchar(50) DEFAULT '0',
  `q` varchar(50) DEFAULT '0',
  `publish` tinyint(4) DEFAULT '0',
  `post_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `nprice`, `sprice`, `q`, `publish`, `post_id`) VALUES
(1, '250', '199', '10', 1, 1),
(2, '350', '299', '10', 1, 2),
(3, '450', '399', '10', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `slug`, `image`, `desc`, `detail`) VALUES
(1, 'First Dive Package', 'first-dive', '/assets/uploads/images/packages/c_1.jpg', 'For those who feel the need to get away, this is the dive package for you. You can explore the wonders of Gili Trawangan marine life with a local guide master.\nDesigned for two certified divers\n', '<b>Rp.4.700.000 nett / 2 Persons</br></br></b>\r\n2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability</br>\r\nDaily Breakfast for 2 Person</br>\r\n1x Lunch for 2 Person</br>\r\nFruit Basket</br>\r\nWelcome Drink</br>\r\nIn Room Minibar</br>\r\nAfternoon Tea & Snack</br>\r\nFree Trans in or out</br>\r\nPool Session for 2 Person</br>\r\nOpen Water Dive for 2 Person</br>\r\nUnder Water Documentation</br>\r\nValid from January 1st 2013 - July 1st 2013</br>\r\n</br>\r\n*Terms and Conditions Apply'),
(2, 'Water Creature', 'water-creature', '/assets/uploads/images/packages/c_2.jpg', 'Have you ever wondered what it’s like to breathe underwater? If you want to find out but aren’t quite ready to take the plunge into a certification course, Discover Scuba Diving will let you try scuba to see if you like it.', '<b>Rp.3.000.000 nett / 2 Persons</b></br></br>\r\n2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability</br>\r\nDaily Breakfast for 2 Person</br>\r\n1x Lunch for 2 Person</br>\r\nFruit Basket</br>\r\nWelcome Drink</br>\r\nIn Room Minibar</br>\r\nAfternoon Tea & Snack</br>\r\nFree Trans in or out</br>\r\nPool Session for 2 Person</br>\r\nSnorkeling 3 Island for 2 Person</br>\r\nUnder Water Documentation</br></br>\r\n\r\n*Terms and Conditions Apply'),
(3, 'Honeymoon Package', 'queen-honeymoon', '/assets/uploads/images/packages/c_3.jpg', 'Your honeymoon should be the ultimate expression of luxury and romance. Celebrate the moment in exquisite fashion, enjoying the exceptional services and amenities that define Gili Trawangan''s premier luxury resort.', '<b>Deluxe Package</br>\r\nRp.5.750.000 nett</b></br>\r\n2 Nights accomodation in Deluxe Room</br>\r\nDaily Buffet breakfast, 2x Romantic Candlelight Dinner.</br>\r\nReturn pick up service to airport including car,boat, and cidomo.</br>\r\n1 Hour honeymoon spa treatments</br>\r\nWelcome Drink, Welcome Amenities, Daily Turndown Service</br>\r\nComplimentary Afternoon High Tea</br>\r\nIn-room Flower Arrangement</br>\r\nSouvenir ( Hat and Scraft )</br></br>\r\n\r\n<b>Exclusive Package</br>\r\nRp.7.500.000 nett</b></br>\r\n2 Nights accomodation in Luxury Room</br>\r\nDaily Buffet breakfast, 2x Romantic Candlelight Dinner.</br>\r\nReturn pick up service to airport including car,boat, and cidomo.</br>\r\n1 Hour honeymoon spa treatments</br>\r\nWelcome Drink, Welcome Amenities, Daily Turndown Service</br>\r\nComplimentary Afternoon High Tea</br>\r\nIn-room Flower Arrangement</br>\r\nSouvenir ( Hat and Scraft )</br>'),
(4, 'Explore Gili', 'queen-gili', '/assets/uploads/images/packages/c_4.jpg', 'Explore the islands with our Gili Explorer Tour! Just as our other tours, this one allows you to experience the culture, landscapes and essence of Gili Trawangan, with the freedom to move, explore, and meet the locals!', '<b>Rp.4.500.000 nett / 2 Persons </b></br>\r\n3 Nights Accomodation at Deluxe Room, Free upgrade to Cottage upon availability</br>\r\nDaily Breakfast for 2 Person</br>\r\nWelcome Fruit</br>\r\nIn Room Minibar</br>\r\nAfternoon Tea & Snack</br>\r\n1x Snorkeling 3 Gili Island for 2 Persons</br>\r\n1x Discovery Scuba for 2 Persons</br>\r\n1x Sea Kayak for 2 Persons</br>\r\nFree Trans In Or Out</br>'),
(6, 'Meeting Packages', 'queen-meeting', '/assets/uploads/images/packages/c_5.jpg', 'Our Coral and Pearl meeting room is specially designed for those who demands for perfection. Focus on the result of your meeting and we will take care of the rest to ensure your corporate activities are successful. ', '<b>Halfday Meeting Package ( 4 Hours )</br></b>\r\nRp.335.000net/person</br>\r\ninclusive of :</br>\r\n- 1x Coffee Break</br>\r\n- Free Flow Juice</br>\r\n- 1x Lunch or Dinner</br>\r\n- Standard Meeting Equipment</br>\r\n- Free Wi-Fi Internet Access in all areas</br></br>\r\n\r\n<b>Half Board Resident</br></b>\r\n- Room rate Single Occupancy</br>\r\n  Rp.1.165.000net/pax/night</br>\r\n- Room rate Double Occupancy</br>\r\nInclusive of :</br>\r\n- Breakfast</br>\r\n- 2x Coffee Break</br>\r\n- Free Flow Juice</br>\r\n- 1x Lunch or Dinner</br>\r\n- Standard Meeting Equipment</br>\r\n- Free Wi-Fi Internet Access in All Areas</br></br>\r\n\r\n<b>Full Board Resident</br></b>\r\n- Room Rate Single Occupancy</br>\r\n  Rp.1.350.000net/pax/night</br>\r\n- Room Rate Double Occupancy</br>\r\n  Rp.1.920.000net/pax/night</br>\r\nInclusive of :</br>\r\n- Breakfast</br>\r\n- 2x Coffee Break</br>\r\n- Free Flow Juice</br>\r\n- 1x Lunch or Dinner</br>\r\n- Standard Meeting Equipment</br>\r\n- Free Wi-Fi Internet Access in All Areas</br></br>\r\n\r\n<b>Full Board Meeting Package ( 12 Hours )</br></b>\r\nRp.570.000nett/person</br>\r\nInclusive of :</br>\r\n- 2x Coffee Break</br>\r\n- Free Flow Juice</br>\r\n- 1x Lunch and 1x Dinner</br>\r\n- Standard meeting equipment</br>\r\n- Free Wi-Fi Internet Access in all areas</br></br>\r\n\r\n<b>Full Day Meeting Package ( 8 Hours )</br></b>\r\nRp.385.000nett/person</br>\r\nInclusive of :</br>\r\n- 2x Coffee Break</br>\r\n- Free Flow Juice</br>\r\n- 1x Lunch or Dinner</br>\r\n- Standard Meeting Equipment</br>\r\n- Free Wi-Fi Internet Access in All Areas</br></br>\r\n\r\n<b>Meeting Room Facilities :</br></b>\r\n- Standard Sound System</br>\r\n- LCD Projector & Standard Screen</br>\r\n- Reception Desk</br>\r\n- Wireless Microphone</br>\r\n- Notepads & Pencil</br>\r\n- Candles</br></br>\r\n\r\n<b>Minimum 20 Persons</b>'),
(5, 'Explore Lombok', 'explore-lombok', '/assets/uploads/images/packages/c_6.jpg', 'Explore Lombok Island in 3 Days 2 Nights trip with us. On this trip we take you further inside to meet with locals and see their cultures, from the exotic beach of Lombok, landscape, wildlife and soft trekking for more adventure to see the nature. ', '<b>Rp.3.500.000 nett / 2 Persons</b></br>\r\n2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability</br>\r\nDaily Breakfast for 2 Person</br>\r\nWelcome Fruit</br>\r\nIn Room Minibar</br>\r\nAfternoon Tea & Snack</br>\r\n1x Snorkeling 3 Gili Island for 2 Persons</br>\r\n1x City Tour to Autore, Monkey Forest, Desa Sukarara, Desa Sade, for 2 Persons</br>\r\n1x Massage 90 Minutes for 2 Persons</br>');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(55) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `timestamp`) VALUES
(1, 'Landing Page', '2013-02-21 10:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `meta_desc` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `creator_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `images` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cover_image` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facilities` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category_id`, `meta_desc`, `content`, `creator_id`, `timestamp`, `images`, `cover_image`, `facilities`, `offer_id`) VALUES
(1, 'Deluxe Room', 'deluxe-room', 1, NULL, '												<b><font face="Georgia">Rates : USD 200.00++</font></b><div><b><font face="Georgia"><br></font></b><div><b><font face="Georgia">Rates inclusive of :&nbsp;</font></b></div><div style="font-weight: normal;"><font face="Georgia">American buffet breakfast for 2 persons&nbsp;</font></div><div style="font-weight: normal;"><font face="Georgia">Welcome drink &amp; snack</font></div><div style="font-weight: normal;"><font face="Georgia">Welcome fruit basket&nbsp;</font></div><div style="font-weight: normal;"><font face="Georgia">Daily turndown service&nbsp;</font></div><div style="font-weight: normal;"><font face="Georgia">Free in-room internet access&nbsp;</font></div><div style="font-weight: normal;"><font face="Georgia"><br></font></div><div><font face="Georgia"><b>Note</b>:&nbsp;</font></div><div style="font-weight: normal;"><font face="Georgia">The above rates are subject to 21% government tax &amp; service charge\r\nHigh season surcharge USD 30.00/room/night (Jul 01 - Sep 15) &amp; (Dec 15 - Jan 15)</font></div></div>										', 1, '2013-04-15 19:22:08', '01d.jpg, 02d.jpg, v04.jpg, 04d.jpg', 'deluxe-room.jpg', '2, 3, 4, 5', 1),
(2, 'Cottage Room', 'cottage-room', 1, NULL, '						<div><font face="Georgia"><b>Rates : USD 250.00++</b></font></div><div><font face="Georgia"><b><br></b></font></div><div><font face="Georgia"><b><br></b></font></div><div><font face="Georgia"><b>Rates inclusive of :</b></font></div><div><font face="Georgia">American buffet breakfast for 2 persons</font></div><div><font face="Georgia">Welcome drink &amp; snack</font></div><div><font face="Georgia">Welcome fruit basket</font></div><div><font face="Georgia">Daily turndown service</font></div><div><font face="Georgia">Free in-room internet access</font></div><div><font face="Georgia">Complimentary afternoon high tea</font></div><div><font face="Georgia"><br></font></div><div><font face="Georgia"><b>Note:</b></font></div><div><font face="Georgia">The above rates are subject to 21% government tax &amp; service charge</font></div><div><font face="Georgia">High season surcharge USD 30.00/room/night (Jul 01 - Sep 15) &amp; (Dec 15 - Jan 15)</font></div>																																																																																																																																																																																	', 1, '2013-04-07 14:37:42', 'c01.jpg, c02.jpg, c03.jpg, c04.jpg', 'cottage-room.jpg', '2, 3, 4, 5', NULL),
(3, 'Luxury Villa', 'luxury-villa', 1, NULL, '						<div><b>Rates : USD 350.00++</b></div><div><b><br></b></div><div><b><br></b></div><div><b>Rates inclusive of :</b></div><div style="font-weight: normal;">American buffet breakfast for 2 persons</div><div style="font-weight: normal;">Welcome drink &amp; snack</div><div style="font-weight: normal;">Welcome fruit basket</div><div style="font-weight: normal;">Daily turndown service</div><div style="font-weight: normal;">Free in-room internet access</div><div style="font-weight: normal;">Complimentary afternoon high tea</div><div style="font-weight: normal;"><br></div><div><b>Note:</b></div><div style="font-weight: normal;">The above rates are subject to 21% government tax &amp; service charge</div><div style="font-weight: normal;">High season surcharge USD 30.00/room/night (Jul 01 - Sep 15) &amp; (Dec 15 - Jan 15)</div>					', 1, '2013-04-07 14:37:34', 'v01.jpg, 2.jpg, v03.jpg, v04.jpg', 'luxury-villa.jpg', '1, 2, 3, 4, 5', NULL),
(5, 'Meeting Room', 'meeting-room', 2, NULL, '<font face="Arial, Verdana" size="2">Our Coral and Pearl meeting room is specially designed for those who demands for perfection. Focus on the result of your meeting and we will take care of the rest to ensure your corporate activities are successful.&nbsp;</font>', 1, '2013-02-27 16:36:40', 'meet1.jpg, meet2.jpg, meet3.jpg, meet4.jpg', 'meeting-room.jpg', NULL, NULL),
(19, 'Hello!', 'hello', 3, NULL, 'a', 0, '2013-03-13 08:16:37', NULL, NULL, NULL, NULL),
(18, 'Queen Villas & Spa on Travelista Metro TV!', 'queen-villas-and-spa-on-travelista-metro-tv', 3, NULL, '<p>Hey travelers! We are so excited with visitation from Travelista crew Metro TV on last July. They spent their 4 days 3 nights here and did feature program shooting using all the hotel properties. Big thanks to Marischka Prudence, host - blogger traveler who wrote down her Gili experience on Bali Beyond September issue. Kindly check out Queen Villas Spa on Metro TV Travelista Gili Experience, Saturday, September 9th, 2012 - 14.30 WIB or 15.30 WITA.</p>\r\n<img src="/assets/img/news_1.jpg" class="bot20" alt=""/>\r\n<img src="/assets/img/news_2.jpg" class="bot20" alt=""/>', 1, '2013-03-08 14:39:04', NULL, NULL, NULL, NULL),
(6, 'Voodoo Bar & Lounge', 'voodoo-bar', 2, NULL, '																								<font face="Arial, Verdana" size="2">A stunning rendezvous by the beach. Enjoy the endless list of refreshing cocktails and mouth-watering light dishes accompanied by groovy sound of music.</font>																				', 1, '2013-02-27 13:08:57', 'v3.jpg, v4.jpg, v1.jpg, v2.jpg', 'voodoo-bar.jpg', NULL, NULL),
(7, 'Taman Gili Pool Bar', 'taman-gili-pool-bar', 2, NULL, '																								Relax by the lagoon swimming pool and enjoy a cocktail to refresh your day. The one and only 24 Hour Fresh Water Supply in Gili Trawangan.															', 1, '2013-02-26 05:14:22', 'pool1.jpg, pool2.jpg, pool3.jpg, pool4.jpg', 'taman-gili-pool-bar.', NULL, NULL),
(9, 'Diving Center', 'bee-diving', 2, NULL, '						<font face="Arial, Verdana" size="2">Spend your day in the water with elaborate beach and water activities. This is Gili Trawangan.. Snorkeling and Diving is a must!</font>					', 1, '2013-02-25 12:52:36', 'd1.jpg, d2.jpg, d3.jpg, d4.jpg', 'bee-diving.jpg', NULL, NULL),
(10, 'Queen''s Spa', 'queens-spa', 2, NULL, 'Indulge yourself with rejuvenating spa escape. A glamorous retreat that allows you to engage into magical spa experience with elaborate variety sensational reviving treatments with a royal touch.', 1, '2013-02-27 12:33:27', 'qs1.jpg, qs2.jpg, qs3.jpg, qs4.jpg', 'queens-spa.jpg', NULL, NULL),
(14, 'Queen''s Coffee House', 'queen-coffee-house', 2, NULL, '												<font face="Arial, Verdana" size="2">Queen''s Coffee House is the ideal place to enjoy dining any time of day. Enjoy the sea breeze with our specialties gourmet.</font>										', 1, '2013-02-27 17:37:14', 'cs1.jpg, cs2.jpg, cs3.jpg, cs5.jpg', 'queen-coffee-house.jpg', NULL, NULL),
(15, 'Sun Deck', 'sun-deck', 2, NULL, '												Enjoy majestic sunset with the view of mount Agung every day. Feel the beauty of a nature at the end of an amazing day.&nbsp;										', 1, '2013-02-25 13:35:00', 'sd1.jpg, sd2.jpg, sd3.jpg, sd4.jpg', 'sun-deck.jpg', NULL, NULL),
(28, 'First Dive Package', 'first-dive', 4, '<div style="text-align: center;"><font size="3" face="Georgia">Experience your first breath under the water. Explore the wonders of gili trawangan oceanic creatures with our macrospecialist</font></div>', '																																																																																																<b>Rp.3.500.000 nett / 2 Persons</b><br>\r\n2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability<br>\r\nDaily Breakfast for 2 Person<br>\r\nWelcome Fruit<br>\r\nIn Room Minibar<br>\r\nAfternoon Tea &amp; Snack<br>\r\n1x Snorkeling 3 Gili Island for 2 Persons<br>\r\n1x City Tour to Autore, Monkey Forest, Desa Sukarara, Desa Sade, for 2 Persons<br>\r\n1x Massage 90 Minutes for 2 Persons<br>																																																																																', 1, '2013-04-19 19:17:26', 'c_1.jpg', NULL, NULL, NULL),
(29, 'Water Creature', 'water-creature', 4, '<div style="text-align: center;"><font face="Georgia">Take plunge and be amazed! Feel the sensation of discovery scuba and island hope snorkeling.</font></div>', '<span style="text-align: center;"><b>Rp.3.000.000 nett / 2 Persons</b></span><br style="text-align: center;"><br style="text-align: center;"><span style="text-align: center;">2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability</span><br style="text-align: center;"><span style="text-align: center;">Daily Breakfast for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">1x Lunch for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">Fruit Basket</span><br style="text-align: center;"><span style="text-align: center;">Welcome Drink</span><br style="text-align: center;"><span style="text-align: center;">In Room Minibar</span><br style="text-align: center;"><span style="text-align: center;">Afternoon Tea &amp; Snack</span><br style="text-align: center;"><span style="text-align: center;">Free Trans in or out</span><br style="text-align: center;"><span style="text-align: center;">Discovery Scuba for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">Snorkeling 3 Island for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">Under Water Documentation</span><br style="text-align: center;"><br style="text-align: center;"><span style="text-align: center;"><i>*Terms and Conditions Apply</i></span>						\r\n					', 0, '2013-04-19 19:17:49', 'c_2.jpg', NULL, NULL, NULL),
(30, 'Honeymoon Package', 'honeymoon-package', 4, '<div style="text-align: center;"><font face="Georgia">Your honeymoon should be the ultimate expression of love and romance. Celebrate your special moment in the heaven of tranquility and magical beauty of nature.</font></div>', '<b><span style="text-align: center;">Deluxe Package</span><br><span style="text-align: center;">Rp.5.750.000 nett</span></b><div><b><br style="text-align: center;"></b><span style="text-align: center;">2 Nights accomodation in Deluxe Room</span><br style="text-align: center;"><span style="text-align: center;">Daily Buffet breakfast, 2x Romantic Candlelight Dinner.</span><br style="text-align: center;"><span style="text-align: center;">Return pick up service to airport including car,boat, and cidomo.</span><br style="text-align: center;"><span style="text-align: center;">1 Hour honeymoon spa treatments</span><br style="text-align: center;"><span style="text-align: center;">Welcome Drink, Welcome Amenities, Daily Turndown Service</span><br style="text-align: center;"><span style="text-align: center;">Complimentary Afternoon High Tea</span><br style="text-align: center;"><span style="text-align: center;">In-room Flower Arrangement</span><br style="text-align: center;"><span style="text-align: center;">Souvenir ( Hat and Scraft )</span><br style="text-align: center;"><br style="text-align: center;"><b><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; text-align: center; background-color: rgb(255, 255, 255);">Exclusive Package</span></font><br>Rp.7.500.000 nett</b></div><div><div style="text-align: start;"><b><br></b></div><span style="text-align: center;">2 Nights accomodation in Luxury Room</span><br style="text-align: center;"><span style="text-align: center;">Daily Buffet breakfast, 2x Romantic Candlelight Dinner.</span><br style="text-align: center;"><span style="text-align: center;">Return pick up service to airport including car,boat, and cidomo.</span><br style="text-align: center;"><span style="text-align: center;">1 Hour honeymoon spa treatments</span><br style="text-align: center;"><span style="text-align: center;">Welcome Drink, Welcome Amenities, Daily Turndown Service</span><br style="text-align: center;"><span style="text-align: center;">Complimentary Afternoon High Tea</span><br style="text-align: center;"><span style="text-align: center;">In-room Flower Arrangement</span><br style="text-align: center;"><span style="text-align: center;">Souvenir ( Hat and Scraft )</span>						\r\n					</div>', 0, '2013-04-19 19:18:00', 'c_3.jpg', NULL, NULL, NULL),
(31, 'Explore Gili', 'explore-gili', 4, '<div style="text-align: center;"><font face="Georgia">Explore the island with our design of excursion. Experience the culture, landscapes and water adventure of Gili Trawangan.</font></div>', '<span style="text-align: center;"><b>Rp.4.500.000 nett / 2 Persons&nbsp;</b></span><div><br style="text-align: center;"><span style="text-align: center;">3 Nights Accomodation at Deluxe Room, Free upgrade to Cottage upon availability</span><br style="text-align: center;"><span style="text-align: center;">Daily Breakfast for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">Welcome Fruit</span><br style="text-align: center;"><span style="text-align: center;">In Room Minibar</span><br style="text-align: center;"><span style="text-align: center;">Afternoon Tea &amp; Snack</span><br style="text-align: center;"><span style="text-align: center;">1x Snorkeling 3 Gili Island for 2 Persons</span><br style="text-align: center;"><span style="text-align: center;">1x Discovery Scuba for 2 Persons</span><br style="text-align: center;"><span style="text-align: center;">1x Sea Kayak for 2 Persons</span><br style="text-align: center;"><span style="text-align: center;">Free Trans In Or Out</span>						\r\n					</div>', 0, '2013-04-19 19:18:12', 'c_4.jpg', NULL, NULL, NULL),
(32, 'Meeting Packages', 'meeting-packages', 4, '<span style="text-align: center;">Our Coral and Pearl meeting room is specially designed for those who demands for perfection. Focus on the result of your meeting and we will take care of the rest to ensure your corporate activities are successful.</span>						\r\n					', '<b><span style="text-align: center;">Halfday Meeting Package ( 4 Hours )</span><br><span style="text-align: center;">Rp.335.000net/person</span></b><br style="text-align: center;"><span style="text-align: center;">inclusive of :</span><br style="text-align: center;"><span style="text-align: center;">- 1x Coffee Break</span><br style="text-align: center;"><span style="text-align: center;">- Free Flow Juice</span><br style="text-align: center;"><span style="text-align: center;">- 1x Lunch or Dinner</span><br style="text-align: center;"><span style="text-align: center;">- Standard Meeting Equipment</span><br style="text-align: center;"><span style="text-align: center;">- Free Wi-Fi Internet Access in all areas</span><br style="text-align: center;"><br style="text-align: center;"><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255); text-align: center;">Half Board Resident</span></font><br><span style="text-align: center;">- Room rate Single Occupancy</span><br style="text-align: center;"><span style="text-align: center;">Rp.1.165.000net/pax/night</span><br style="text-align: center;"><span style="text-align: center;">- Room rate Double Occupancy</span><br style="text-align: center;"><span style="text-align: center;">Inclusive of :</span><br style="text-align: center;"><span style="text-align: center;">- Breakfast</span><br style="text-align: center;"><span style="text-align: center;">- 2x Coffee Break</span><br style="text-align: center;"><span style="text-align: center;">- Free Flow Juice</span><br style="text-align: center;"><span style="text-align: center;">- 1x Lunch or Dinner</span><br style="text-align: center;"><span style="text-align: center;">- Standard Meeting Equipment</span><br style="text-align: center;"><span style="text-align: center;">- Free Wi-Fi Internet Access in All Areas</span><br style="text-align: center;"><br style="text-align: center;"><b><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255); text-align: center;">Full Board Resident</span></font><br><span style="text-align: center;">- Room Rate Single Occupancy</span><br style="text-align: center;"><span style="text-align: center;">Rp.1.350.000net/pax/night</span><br style="text-align: center;"><span style="text-align: center;">- Room Rate Double Occupancy</span><br style="text-align: center;"><span style="text-align: center;">Rp.1.920.000net/pax/night</span></b><br style="text-align: center;"><span style="text-align: center;">Inclusive of :</span><br style="text-align: center;"><span style="text-align: center;">- Breakfast</span><br style="text-align: center;"><span style="text-align: center;">- 2x Coffee Break</span><br style="text-align: center;"><span style="text-align: center;">- Free Flow Juice</span><br style="text-align: center;"><span style="text-align: center;">- 1x Lunch or Dinner</span><br style="text-align: center;"><span style="text-align: center;">- Standard Meeting Equipment</span><br style="text-align: center;"><span style="text-align: center;">- Free Wi-Fi Internet Access in All Areas</span><br style="text-align: center;"><br style="text-align: center;"><b><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255); text-align: center;">Full Board Meeting Package ( 12 Hours )</span></font><br><span style="text-align: center;">Rp.570.000nett/person</span></b><br style="text-align: center;"><span style="text-align: center;">Inclusive of :</span><br style="text-align: center;"><span style="text-align: center;">- 2x Coffee Break</span><br style="text-align: center;"><span style="text-align: center;">- Free Flow Juice</span><br style="text-align: center;"><span style="text-align: center;">- 1x Lunch and 1x Dinner</span><br style="text-align: center;"><span style="text-align: center;">- Standard meeting equipment</span><br style="text-align: center;"><span style="text-align: center;">- Free Wi-Fi Internet Access in all areas</span><br style="text-align: center;"><br style="text-align: center;"><b><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255); text-align: center;">Full Day Meeting Package ( 8 Hours )</span></font><br><span style="text-align: center;">Rp.385.000nett/person</span></b><br style="text-align: center;"><span style="text-align: center;">Inclusive of :</span><br style="text-align: center;"><span style="text-align: center;">- 2x Coffee Break</span><br style="text-align: center;"><span style="text-align: center;">- Free Flow Juice</span><br style="text-align: center;"><span style="text-align: center;">- 1x Lunch or Dinner</span><br style="text-align: center;"><span style="text-align: center;">- Standard Meeting Equipment</span><br style="text-align: center;"><span style="text-align: center;">- Free Wi-Fi Internet Access in All Areas</span><br style="text-align: center;"><br style="text-align: center;"><font face="georgia, serif"><span style="font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255); text-align: center;">Meeting Room Facilities :</span></font><br><span style="text-align: center;">- Standard Sound System</span><br style="text-align: center;"><span style="text-align: center;">- LCD Projector &amp; Standard Screen</span><br style="text-align: center;"><span style="text-align: center;">- Reception Desk</span><br style="text-align: center;"><span style="text-align: center;">- Wireless Microphone</span><br style="text-align: center;"><span style="text-align: center;">- Notepads &amp; Pencil</span><br style="text-align: center;"><span style="text-align: center;">- Candles</span><br style="text-align: center;"><br style="text-align: center;"><span style="text-align: center;">Minimum 20 Persons</span>						\r\n					', 0, '2013-04-12 16:09:35', 'c_5.jpg', NULL, NULL, NULL),
(33, 'Explore Lombok', 'explore-lombok', 4, '<div style="text-align: center;"><font size="2" face="Georgia">Explore the island of Lombok. Take a step further inside the culture and tradition of Sasak Lombok. Adventure of experience the exotic white sand beach, lush green landscape, wildlife and so much more.</font></div>', '<span style="text-align: center;"><b>Rp.3.500.000 nett / 2 Persons</b></span><div><b><br style="text-align: center;"></b><span style="text-align: center;">2 Nights Stay at Deluxe Room, Free upgrade to Cottage upon availability</span><br style="text-align: center;"><span style="text-align: center;">Daily Breakfast for 2 Person</span><br style="text-align: center;"><span style="text-align: center;">Welcome Fruit</span><br style="text-align: center;"><span style="text-align: center;">In Room Minibar</span><br style="text-align: center;"><span style="text-align: center;">Afternoon Tea &amp; Snack</span><br style="text-align: center;"><span style="text-align: center;">1x Snorkeling 3 Gili Island for 2 Persons</span><br style="text-align: center;"><span style="text-align: center;">1x City Tour to Autore, Monkey Forest, Desa Sukarara, Desa Sade, for 2 Persons</span><br style="text-align: center;"><span style="text-align: center;">1x Massage 90 Minutes for 2 Persons</span>						\r\n					</div>', 0, '2013-04-19 19:18:36', 'c_6.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slides` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slides`) VALUES
(1, '1, 2, 3, 4, 5');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `caption` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `weight` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `caption`, `status`, `weight`) VALUES
(1, '01.jpg', '																																																																																																																							Uniquely located on the west side of Gili Trawangan Island facing Mount Agung, Queen Villas & Spa is Knowns for the perfect sunset point and an ideal gate away from the city. It is a perfect chemistry of a beautiful nature and exceptional service to capture the moments that last forever.																																																																																													', 1, 1),
(2, '02.jpg', '																																																																																																																							Enjoy majestic sunset with the view of mount Agung every day. Feel the beauty of a nature at the end of an amazing day.																																																																																																																		', 1, 2),
(3, '03.jpg', '																																																																																																																							Relax by the lagoon swimming pool and enjoy a cocktail to refresh your day. The one and only 24 Hour Fresh Water Supply in Gili Trawangan.																																																																																																																		', 1, 4),
(4, '04.jpg', '																																																																																																																							Welcome to Queen Villas & Spa! Unlimited excitement lies mere steps from our front door.																																																																																																																		', 1, 3),
(5, '05.jpg', 'Every luxury holiday deserves a villa to match and we offers everything you need for a holiday by the sea in Gili Trawangan', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `salt` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `activation_code` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1366398655, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '\0\0', 'robbiejobs', '40113ce5529eb6ece498cb9086b335f3df94d4cc', NULL, 'robbiejobs@gmail.com', NULL, NULL, NULL, NULL, 1365470932, 1365470979, 1, 'Robby', 'Prima', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
