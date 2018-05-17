-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2018 at 05:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbookroom`
--

CREATE TABLE IF NOT EXISTS `tbbookroom` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `roomdsc` varchar(500) NOT NULL,
  `roomCnt` int(11) NOT NULL,
  `roompic` varchar(100) NOT NULL,
  `roomHotelID` int(11) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbbookroom`
--

INSERT INTO `tbbookroom` (`roomID`, `roomdsc`, `roomCnt`, `roompic`, `roomHotelID`) VALUES
(1, 'Ac Room', 10, 'h1.jpg', 1),
(2, 'Non AC Room', 10, 'h2.jpg', 1),
(3, 'Normal Room', 10, 'h3.jpg', 1),
(4, 'AC Room', 20, 'h1.jpg', 4),
(5, 'Non Ac Room', 20, 'h2.jpg', 4),
(6, 'Normal Room', 20, 'h3.jpg', 4),
(7, 'Ac Room', 30, 'h1.jpg', 5),
(8, 'Non Ac Room', 30, 'h2.jpg', 5),
(9, 'Normal Room', 30, 'h3.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbbus`
--

CREATE TABLE IF NOT EXISTS `tbbus` (
  `busID` int(11) NOT NULL AUTO_INCREMENT,
  `busNum` varchar(100) NOT NULL,
  `busRoot` varchar(100) NOT NULL,
  `busSeatcount` int(11) NOT NULL,
  `busStatus` varchar(50) NOT NULL,
  `busTime` varchar(50) NOT NULL,
  PRIMARY KEY (`busID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbbus`
--

INSERT INTO `tbbus` (`busID`, `busNum`, `busRoot`, `busSeatcount`, `busStatus`, `busTime`) VALUES
(1, 'HP 36 3592', 'Kangra to Dehra', 32, '1', '01:PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbcty`
--

CREATE TABLE IF NOT EXISTS `tbcty` (
  `ctycod` int(11) NOT NULL AUTO_INCREMENT,
  `ctynam` varchar(100) NOT NULL,
  PRIMARY KEY (`ctycod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbcty`
--

INSERT INTO `tbcty` (`ctycod`, `ctynam`) VALUES
(1, 'Kullu'),
(2, 'Shimla'),
(3, 'Dharmsala'),
(4, 'Kasauli'),
(5, 'Solan'),
(6, 'Kangra');

-- --------------------------------------------------------

--
-- Table structure for table `tbhotel`
--

CREATE TABLE IF NOT EXISTS `tbhotel` (
  `hotelID` int(11) NOT NULL AUTO_INCREMENT,
  `hotelName` varchar(50) NOT NULL,
  `hoteldec` varchar(500) NOT NULL,
  `hotelroomprice` int(11) NOT NULL,
  `hotelloccod` int(11) NOT NULL,
  `hotelpic` varchar(100) NOT NULL,
  PRIMARY KEY (`hotelID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbhotel`
--

INSERT INTO `tbhotel` (`hotelID`, `hotelName`, `hoteldec`, `hotelroomprice`, `hotelloccod`, `hotelpic`) VALUES
(1, 'K.C. Residency', 'Give customer GSTIN to hotelier before check-in to get GST invoice from hotel. GST credit is availed when customers GSTIN is in same state as hotel', 2000, 1, 'im1.jpg'),
(4, 'Ramada Jammu City Centre', 'Excellent stay. Good service. courteous staff. Nice breakfast buffet. This hotel is highly recommended for stay in Jammu. great location', 2500, 1, 'im2.jpg'),
(5, 'Lords Inn Jammu', 'This is a very strategically located hotel and will fulfill requirements of a star property. food quality could be better. staff is helpful', 1500, 1, 'im3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbloc`
--

CREATE TABLE IF NOT EXISTS `tbloc` (
  `loccod` int(11) NOT NULL AUTO_INCREMENT,
  `locnam` varchar(100) NOT NULL,
  `locctycod` int(11) NOT NULL,
  PRIMARY KEY (`loccod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbloc`
--

INSERT INTO `tbloc` (`loccod`, `locnam`, `locctycod`) VALUES
(1, 'Raghunath Temple', 1),
(2, 'Shringi Rishi Temple- Banjar', 1),
(3, 'Kasol', 1),
(5, 'Kufri', 2),
(6, 'Tara Devi', 2),
(7, 'Summer Hill', 2),
(8, 'Christ Church', 2),
(9, 'Kareri Lake', 3),
(10, 'Triund-Thatri-Trek', 3),
(11, 'Dharamshala International Cricket Stadium', 3),
(12, 'Toral Pass', 3),
(13, 'Nahri Temple', 4),
(14, 'Nirmand', 1),
(15, 'Beja State', 4),
(16, 'Mahlog State', 4),
(17, 'Old Faridabad', 5),
(18, 'Badshapur', 5),
(19, 'Lakewood City', 5),
(20, 'Ballabgarh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbreg`
--

CREATE TABLE IF NOT EXISTS `tbreg` (
  `regcod` int(11) NOT NULL AUTO_INCREMENT,
  `regname` varchar(100) NOT NULL,
  `regeml` varchar(50) NOT NULL,
  `regpwd` varchar(50) NOT NULL,
  `regdat` datetime NOT NULL,
  PRIMARY KEY (`regcod`),
  UNIQUE KEY `regeml` (`regeml`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbreg`
--

INSERT INTO `tbreg` (`regcod`, `regname`, `regeml`, `regpwd`, `regdat`) VALUES
(1, 'Ayush', 'abc@gmail.com', 'abc123#', '2016-07-08 00:00:00'),
(2, 'Ayush Padit', 'ayush@gmail.com', 'user123#', '2018-03-24 00:00:00'),
(3, 'User', 'User@gmail.com', 'user123#', '2018-03-24 00:00:00'),
(4, 'Mohan Rana', 'mohanrana800@gmail.com', 'rana', '2018-03-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbroombook`
--

CREATE TABLE IF NOT EXISTS `tbroombook` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `roomID` int(11) NOT NULL,
  `datefrom` datetime NOT NULL,
  `dateto` datetime NOT NULL,
  `hotelID` int(11) NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbroombook`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbtrp`
--

CREATE TABLE IF NOT EXISTS `tbtrp` (
  `trpcod` int(11) NOT NULL AUTO_INCREMENT,
  `trploccod` int(11) NOT NULL,
  `trpregcod` int(11) NOT NULL,
  `trptit` varchar(100) NOT NULL,
  `trpdsc` varchar(1000) NOT NULL,
  `trpcst` varchar(100) NOT NULL,
  `trpdat` datetime NOT NULL,
  `trplik` int(11) NOT NULL,
  `trpmanpiccod` int(11) NOT NULL,
  PRIMARY KEY (`trpcod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbtrp`
--

INSERT INTO `tbtrp` (`trpcod`, `trploccod`, `trpregcod`, `trptit`, `trpdsc`, `trpcst`, `trpdat`, `trplik`, `trpmanpiccod`) VALUES
(3, 1, 1, 'Dt-Mall', 'Everyone loves watching movies, and a good movie is best enjoyed at DT City Centre: Chandigarh. The theatre, which has become the hub for cinemagoers in Chandigarh, is the place to check out all the hottest new releases. Whether you want to watch Great Grand Masti - Hindi or	Sultan - Hindi etc, just make your way to DLF Infocity, Rajiv Gandhi Technology Park, Chandigarh, Chandigarh 160017, India.Then sit back, relax and enjoy a stellar cinematic experience!', '1500', '2016-07-15 00:00:00', 0, 21),
(4, 2, 1, 'Aroma', '8.8 km from Chandigarh Railway Station, 8.8 km from Airport, Meeting and banquet facilities, 2 Multi-cuisine restaurants, Cafeteria and pastry shop Hotel Aroma Complex offers comfortable accommodation at reasonable rates. Along with railway station and airport, many popular commercial and shopping hubs, such as Picaddily Square, Shastri Market and Sector-17, are located within easy reach from the hotel. It features well-designed rooms that are available in three categories, namely Deluxe, Royal and Luxury Rooms. Every room features all the basic amenities like television and telephone. At Aroma Complex, there is a banquet hall, conference hall and exhibition centre for organising meetings and party events. The hotel offers facilities like a business centre, florist, medical assistance and functional travel desk, which make it suitable for corporate as well as leisure travellers. Grapewine Bar and Restaurant at the hotel serves a wide range of delicacies and refreshing drinks. The Casca', '3000', '2016-07-15 00:00:00', 0, 17),
(5, 3, 1, 'Neelam Theatre', '+(91)-172-2703600  Sector 17e, Chandigarh - 160017, Backside Bus Stand (Map)  Cinema Halls	, Great Grand Masti (Hindi Movie)', '300', '2016-07-15 00:00:00', 0, 14),
(6, 5, 1, 'Aga Khan Palace', 'The Aga Khan Palace was built by Sultan Muhammed Shah Aga Khan III in Pune, India. Built in 1892, it is one of the biggest landmarks in Indian history. The palace was an act of charity by the Sultan who wanted to help the poor in the neighbouring areas of Pune, who were drastically hit by famine', '2000', '2016-07-15 00:00:00', 0, 8),
(7, 6, 1, 'Raja Dinkar Kelkar Museum', 'The Raja Dinkar Kelkar Museum is in Pune, Maharashtra, India.[1] It contains the collection of Dr. Dinkar G. Kelkar (1896–1990), dedicated to the memory of his only son, Raja.[2] The three-storey building houses various sculptures dating back to the 14th century.[citation needed] There are also ornaments made of ivory, silver and gold, musical instruments (a particularly fine collection)[citation needed], war weapons and vessels.\r\n\r\nThe collection was started around 1920 and by 1960 it contained around 15,000 objects. In 1962, Dr. Kelkar handed his collection to the Department of Archaeology within the Government of Maharashtra.', '2000', '2016-07-15 00:00:00', 2, 22),
(8, 7, 1, 'Mulshi Dam', 'Mulshi is the name of a major dam on the Mula river in India.[1] It is located in the Mulshi taluka administrative division of the Pune district of Maharashtra State.\r\nWater from the dam is used for irrigation as well as for producing electricity at the Bhira hydroelectric power plant, operated by Tata Power. The station operates six 25MW Pelton turbines established in 1927 and one 150MW Pumped Storage Unit. Water from this reservoir located in Krishna river basin is diverted to the Bhira power house for generating Hydro electricity.', '1000', '2016-07-15 00:00:00', 0, 18),
(9, 8, 1, 'Lohagad', 'Lohagad (Marathi: &#2354;&#2379;&#2361;&#2327;&#2337;, iron fort) is one of the many hill forts of Maharashtra state in India. Situated close to the hill station Lonavala and 52 km (32 mi) northwest of Pune, Lohagad rises to an elevation of 1,033 m (3,389 ft) above sea level. The fort is connected to the neighboring Visapur fort by a small range. The fort was under the Maratha empire for the majority of time, with a short period of 5 years under the Mughal empire.', '2500', '2016-07-15 00:00:00', 0, 15),
(10, 9, 1, 'Atta Market', 'This is the place of large variety of shopping and any category of buyers can purchase, Atta is meant for Low to medium income group For Upper income Sec18 & near malls', '2000', '2016-07-15 00:00:00', 0, 9),
(11, 10, 1, 'Spice World Mall', 'Excellent Movie Hall Seats and good inexpensive eating. Parking not a problem. Nice shops to browse around. Excellent glass lifts conveniently located.', '1000', '2016-07-15 00:00:00', 0, 23),
(12, 11, 1, 'Logix City Centre Mall', 'A very nice mall bang opp Noida city metro station... great location... visited the mall just after lunch for a stroll... mall is huge and all outlets are not yet open... Food', '1000', '2016-07-15 00:00:00', 0, 19),
(13, 12, 1, 'Rashtriya Dalit Prerna Sthal and Green Garden', 'The place is awesome but there should be more gardens and plantation of the trees. It should look close to nature rather than concrete park.', '1200', '2016-07-15 00:00:00', 0, 12),
(14, 13, 1, 'Kingdom Of Dreams ', 'Kingdom of Dreams is located in sector 29 of Gurgaon near Leisure Valley Park and is easily accessible by the available means of transport. The nearest metro station is IFFCO Chowk metro station.', '1500', '2016-07-15 00:00:00', 0, 10),
(15, 14, 1, 'shri mata sheetla devi temple', 'To reach this place, you can hire a cab or an auto-rickshaw or take the metro till Guru Dronacharya Metro Station.', '3000', '2016-07-15 00:00:00', 1, 20),
(16, 15, 1, 'Farrukh Nagar Fort', 'The town is located about 21 km from the district headquarters, to the north-west near the border of the Rohtak district.', '1500', '2016-07-15 00:00:00', 0, 16),
(17, 15, 1, 'Sohna', 'From NH 8 take the Badshapur/Sohna road/SH 13 and make your way to Maharaja Aggarsain .', '1000', '2016-07-15 00:00:00', 0, 13),
(18, 16, 1, 'Leisure Valley Park', 'Located in Sector 29, half a kilometer away from the IFFCO chowk metro station the place is well connected by metro service. You can also reach here by your private vehicle without any inconvenience.', '1200', '2016-07-15 00:00:00', 0, 11),
(19, 1, 1, 'asas', '                ', 'asasa', '2016-07-15 00:00:00', 0, 0),
(20, 1, 1, 'aaa', '                ', 'aaaa', '2016-07-15 00:00:00', 0, 0),
(21, 1, 1, 'ddd', '                ', 'ssss', '2016-07-15 00:00:00', 0, 0),
(22, 5, 1, 'dsds', 'dfdfd', '2222', '2016-07-15 00:00:00', 0, 0),
(23, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(24, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(25, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(26, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(27, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(28, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(29, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(30, 5, 1, '', '', '', '2016-07-15 00:00:00', 0, 0),
(31, 1, 1, 'fgfg', 'fgfgffg', '555', '2016-07-15 00:00:00', 0, 0),
(32, 6, 1, 'adfdff', 'dfdfdfdfdfd', '1212', '2016-07-15 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbtrppic`
--

CREATE TABLE IF NOT EXISTS `tbtrppic` (
  `trppiccod` int(11) NOT NULL AUTO_INCREMENT,
  `trppictrpcod` int(11) NOT NULL,
  `trppicfil` varchar(50) NOT NULL,
  `trppicdsc` varchar(500) NOT NULL,
  PRIMARY KEY (`trppiccod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbtrppic`
--

INSERT INTO `tbtrppic` (`trppiccod`, `trppictrpcod`, `trppicfil`, `trppicdsc`) VALUES
(8, 6, '1.jpg', 'The Aga Khan Palace was built by Sultan Muhammed Shah Aga Khan III in Pune, India. Built in 1892, it is one of the biggest landmarks in Indian history.'),
(9, 10, '2.jpg', 'Atta Market, Noida: See 85 reviews, articles, and 5 photos of Atta Market, ranked No.6 on TripAdvisor among 25 attractions in Noida.'),
(10, 14, '3.jpg', 'The Best entertainment place in India which brings live entertainment shows with bollywood style musical at one place.'),
(11, 18, '4.jpg', 'Leisure Valley Park, Gurgaon: See 305 reviews, articles, and 73 photos of Leisure Valley Park, ranked No.6 on TripAdvisor among 56 attractions in Gurgaon.'),
(12, 13, '5.jpg', 'The Rashtriya Dalit Prerna Sthal and Green Garden is a memorial in Noida, Uttar Pradesh, India. It was commissioned by Chief Minister of Uttar Pradesh '),
(13, 17, '6.jpg', 'Set amidst 37 acres of lush greenery and located only 45 minutes from Gurgaon and 60 minutes from the International Airport.'),
(14, 5, '7.jpg', 'Get Show Timings & Movie Tickets For a Theatre Near You. Check Now!\r\nReserve now pay later* · 100% safe & secure · 24/7 customer care'),
(15, 9, '8.jpg', 'Lohagad (Marathi: &#2354;&#2379;&#2361;&#2327;&#2337;, iron fort) is one of the many hill forts of Maharashtra state in India. Situated close to the hill station Lonavala and 52 km '),
(16, 16, '9.jpg', 'See farrukh nagar fort location, address and where farrukh nagar fort is situated in gurgaon on a map.'),
(17, 4, '10.jpg', 'Aroma definition, an odor arising from spices, plants, cooking, etc., especially an agreeable odor; fragrance.'),
(18, 8, '12.jpg', 'Mulshi is the name of a major dam on the Mula river in India. It is located in the Mulshi taluka administrative division of the Pune district of Maharashtra State.'),
(19, 12, '13.jpg', ']Logix City Center is one of the first mixed use commercial projects in the heart of Noida city. Logix City Center shall have over 7 lac sq ft of retail'),
(20, 15, '14.jpg', 'Shitala (Sheetala), also called Sitala (&#2358;&#2368;&#2340;&#2354;&#2366; &#347;&#299;tal&#257;), is a folk deity, worshiped by many faiths ... Some of them are shri shitla mata chalisa, Shitala Maa ki Arti, Shri Shitala mata ... Shitala Mata Mandir,Nizambad, Azamgarh, Uttar Pradesh; Sheetala Mata Mandir,Village- Kanana,City- Balotra, Barmer, Rajasthan; Shitala Devi '),
(21, 3, '15.jpg', 'Exclusive Premiere of Joy at DT Star Cinemas, Vasant Kunj on 21/01/2016. Date: 21/01/2016. DT Cinemas hosted an xclusive premiere of Joy. Joy is a 2015 '),
(22, 7, '16.jpg', 'The Raja Dinkar Kelkar Museum is in Pune, Maharashtra, India. It contains the collection of Dr. Dinkar G. Kelkar (1896–1990), dedicated to the memory'),
(23, 11, '17.jpg', 'Mall Directory. UB/LB · Ground Floor · 1st Floor · 2nd Floor · 3rd - 5th Floors. Mall Directory. DTS TELESHOPPING. Home > Media Center > Ground Floor. '),
(24, 8, '7.jpg', 'kjkjkjjkjj'),
(25, 0, 'secure-safe-img.png', 'dfbjsd duif iuhdf sh\r\n'),
(26, 4, 'secure-bg.jpg', 'fuyfghfghfghc');
