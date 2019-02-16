-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 01:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `writers`
--

-- --------------------------------------------------------

--
-- Table structure for table `accowners`
--

CREATE TABLE `accowners` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `idnumber` int(15) NOT NULL,
  `staffid` varchar(255) NOT NULL,
  `yob` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `duty` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accowners`
--

INSERT INTO `accowners` (`id`, `username`, `password`, `fname`, `lname`, `idnumber`, `staffid`, `yob`, `gender`, `rank`, `duty`, `status`) VALUES
(12, 'ii@gmail.com', '$2y$10$xygNtoxSJ63kZI9kRVgDU.X6.QZZAE.1eXdhd8GK5mj6FATg3DXsS', 'ian', 'kamau', 777, '999', '1972', 'Male', 'sergent', '', 'active'),
(13, 'rty@iugf.com', '$2y$10$L5ZRFUJSa9EQ945ziYpHFuTZfcRo1IWnYlMKQ4BhDLWyl3pimNmMy', 'trew', 'trewrs', 3234, '43234', '432', 'Female', 'gfd', '', 'active'),
(14, 'rrrr@gmail.com', '$2y$10$S0LPQjHGr1O5wzcb76jCgub.UapQfT1lSpZ985sIH/Em1W6LOgl/m', 'mhngbfv', 'jhgfd', 635852, '356855852', '63565', 'Male', 'oiuytrew', '', 'active'),
(15, 'gg@gmail.com', '$2y$10$TKIYo6mQp5eUuOSM2djW3OCCuEvWpfe4zFEAActZGsgOu94i93Fo2', 'kamau', 'ndegwa', 8749347, '638387790', '1971', 'Male', 'sergent', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `idd` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `idd`, `title`, `type`, `cost`, `deadline`, `description`, `path`, `user`, `status`) VALUES
(1, 10, 'World war2', 'Essay Writing', 3000, '2019-01-29', 'bbbbbbbbbbbbbb bbbbbbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbb', 'upload/download.jpg', 'kaguris96@gmail.com', 'Assigned'),
(2, 6, 'Transport', 'Technical Writing', 6000, '2019-01-23', 'typedef enum{\r\n    SMS_STATUS_UNREAD                    = 0x01 ,\r\n    SMS_STATUS_READ                      = 0x02 ,\r\n    SMS_STATUS_UNSENT                    = 0x04 ,\r\n    SMS_STATUS_SENT_NOT_SR_REQ           = 0x08 ,\r\n    SMS_STATUS_SENT_SR_REQ_NOT_RECV ', 'upload/download.jpg', 'kaguris96@gmail.com', 'Assigned'),
(3, 7, 'World war', 'Creative Writing', 5000, '2019-01-01', 'World War I began in 1914, after the assassination of Archduke Franz Ferdinand, and lasted until 1918. During the conflict, Germany, Austria-Hungary, Bulgaria and the Ottoman Empire (the Central Powers) fought against Great Britain, France, Russia, Italy,', 'upload/download.jpg', 'kaguris96@gmail.com', 'Assigned'),
(4, 5, 'Education', 'Essay Writing', 2400, '2019-01-30', 'Writing for a magazine is perhaps one of the best feelings that anyone can ever experience. Think of it like writing for a newspaper company except you are going to be more relaxed as the deadlines are not that pressured as magazines only get published on', '', 'kaguris96@gmail.com', 'Assigned'),
(5, 2, 'hello there', 'Creative Writing', 1500, '2019-01-03', 'To the average user, a web page is a web page. It opens in the browser and provides information. Looking closer, though, some pages stay mostly the same, while other pages change regularly. Pages that donâ€™t changeâ€”static pagesâ€”are relatively simple ', '', 'kaguris96@gmail.com', 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `phone`, `relationship`, `message`) VALUES
(8, 'stephen kaguri', 'kaguris96@gmail.com', '0', '', 'fnj'),
(9, 'stephen kaguri', 'kaguris96@gmail.com', '0', '', 'fjkk'),
(10, 'ruben', 'ruben@mail.com', '0', '', 'qwertyuioplkjhgf1234567'),
(11, 'trfedwse', 'ytreewq@tre.com', '0', 'relationship', 'hgfckhdc vhdbvkf vyfvfuv gfvfv f '),
(12, 'trfedwse', 'ytreewq@tre.com', '0', 'relationship', 'hgfckhdc vhdbvkf vyfvfuv gfvfv f '),
(13, 'reuben Kihiu', 'reubeenkihiu@gmail.com', 'phone', 'relationship', 'hey boy'),
(14, 'reuben Kihiu', 'reubeenkihiu@gmail.com', 'phone', 'relationship', 'hey boy');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `noofwords` int(11) NOT NULL,
  `noofpages` int(11) NOT NULL,
  `cost` int(10) NOT NULL,
  `deadline` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `type`, `noofwords`, `noofpages`, `cost`, `deadline`, `description`, `path`, `status`, `user`) VALUES
(1, 'hello', 'Article Writing', 1000, 3, 2000, '2019-01-02', 'To the average user, a web page is a web page. It opens in the browser and provides information. Looking closer, though, some pages stay mostly the same, while other pages change regularly. Pages that donâ€™t changeâ€”static pagesâ€”are relatively simple ', '', 'new', ''),
(2, 'hello there', 'Creative Writing', 1000, 3, 1500, '2019-01-03', 'To the average user, a web page is a web page. It opens in the browser and provides information. Looking closer, though, some pages stay mostly the same, while other pages change regularly. Pages that donâ€™t changeâ€”static pagesâ€”are relatively simple ', '', 'Assigned', ''),
(3, 'hello world', 'Technical Writing', 800, 2, 1700, '2019-01-16', 'To the average user, a web page is a web page. It opens in the browser and provides information. Looking closer, though, some pages stay mostly the same, while other pages change regularly. Pages that donâ€™t changeâ€”static pagesâ€”are relatively simple ', '', 'new', ''),
(4, 'Transport', 'Essay Writing', 2000, 3, 3000, '2019-01-31', 'Write an essay on the following topic. You should select and use information from different  parts of the specification. Credit will be given not only for the biological content, but also for the selection and use of relevant information, and for the orga', '', 'new', ''),
(5, 'Education', 'Essay Writing', 3000, 3, 2400, '2019-01-30', 'Writing for a magazine is perhaps one of the best feelings that anyone can ever experience. Think of it like writing for a newspaper company except you are going to be more relaxed as the deadlines are not that pressured as magazines only get published on', '', 'Assigned', ''),
(6, 'Transport', 'Technical Writing', 543645, 3, 6000, '2019-01-23', 'typedef enum{\r\n    SMS_STATUS_UNREAD                    = 0x01 ,\r\n    SMS_STATUS_READ                      = 0x02 ,\r\n    SMS_STATUS_UNSENT                    = 0x04 ,\r\n    SMS_STATUS_SENT_NOT_SR_REQ           = 0x08 ,\r\n    SMS_STATUS_SENT_SR_REQ_NOT_RECV ', 'upload/download.jpg', 'Assigned', ''),
(7, 'World war', 'Creative Writing', 3000, 3, 5000, '2019-01-01', 'World War I began in 1914, after the assassination of Archduke Franz Ferdinand, and lasted until 1918. During the conflict, Germany, Austria-Hungary, Bulgaria and the Ottoman Empire (the Central Powers) fought against Great Britain, France, Russia, Italy,', 'upload/download.jpg', 'Assigned', ''),
(8, 'World war2', 'Creative Writing', 1000, 3, 3000, '2019-01-23', 'pppppppppppppppppppppppppppppppppppppppp', '', 'new', ''),
(9, 'Education', 'Essay Writing', 543645, 3, 3000, '2019-01-02', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 'new', ''),
(10, 'World war2', 'Essay Writing', 800, 2, 3000, '2019-01-29', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'upload/download.jpg', 'new', ''),
(11, 'hello world100', 'Technical Writing', 543645, 3, 6000, '2019-01-29', 'gggggggggggggggggggggkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkktttttttttttttttttttttttttttttttttttttttttt', 'upload/download.jpg', 'new', ''),
(12, 'World war2', 'Article Writing', 1000, 3, 3000, '2019-01-24', 'ff', 'upload/download.jpg', 'new', ''),
(13, 'World war2', 'Article Writing', 1000, 3, 3000, '2019-01-24', 'ff', 'upload/download.jpg', 'new', ''),
(14, 'Transport', 'Article Writing', 1000, 2, 3000, '2019-01-01', 'qwertyuiop 098765432xcvb', 'upload/download.jpg', 'new', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'kaguris96@gmail.com', '$2y$10$ygdpLp6jWuRgswmdBgzd1ut7gy/8z.WRdB8qLZMr3z1wrISIkWnHy');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `idnumber` int(255) NOT NULL,
  `inmateid` varchar(255) NOT NULL,
  `yob` varchar(255) NOT NULL,
  `crime` varchar(255) NOT NULL,
  `termlength` int(255) NOT NULL,
  `releasedate` date NOT NULL,
  `activity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `username`, `password`, `fname`, `lname`, `idnumber`, `inmateid`, `yob`, `crime`, `termlength`, `releasedate`, `activity`, `status`) VALUES
(20, 'ff@gmail.com', '', 'gfd', 'ghfd', 56789, '45678', '56789', 'Murder', 300, '2037-01-01', 'Furniture', 'Active'),
(21, 'ff@gmail.com', '', 'gfd', 'ghfd', 56789, '45678', '56789', 'Murder', 300, '2037-01-01', 'Furniture', 'Active'),
(22, 'kamau@gmail.com', '', 'John ', 'Kamau', 56789909, '4567', '1994', 'theft', 22, '2020-12-01', 'Masonry', 'Active'),
(23, '', '', '', '', 0, '', '', '', 0, '0000-00-00', '', 'Active'),
(24, '', '', '', '', 0, '', '', '', 0, '0000-00-00', '', 'Active'),
(25, '', '', '', '', 0, '', '', '', 0, '0000-00-00', '', 'Active'),
(26, '', '', '', '', 0, '', '', '', 0, '0000-00-00', '', 'Active'),
(27, 'kanjih2012@gmail.com', '', 'joe', 'job', 22446633, 'KAW6431D', '1979', 'Murder', 10000000, '2037-01-01', 'I.T', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accowners`
--
ALTER TABLE `accowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`username`),
  ADD KEY `user_name` (`password`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accowners`
--
ALTER TABLE `accowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
