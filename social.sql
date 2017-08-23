-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 07:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`) VALUES
(1, 'this is the first post', 'will_hamer', 'none', '2017-08-15 11:41:12', 'no', 'no', 0),
(2, 'we gonna be rich', 'will_hamer', 'none', '2017-08-15 11:41:28', 'no', 'no', 0),
(3, 'ohh   ohhh ohhh...', 'will_bennett', 'none', '2017-08-15 11:42:07', 'no', 'no', 0),
(4, 'hgfvd', 'will_bennett', 'none', '2017-08-15 14:03:37', 'no', 'no', 0),
(5, 'filling in data', 'will_bennett', 'none', '2017-08-17 11:34:25', 'no', 'no', 0),
(6, 'we need more', 'will_bennett', 'none', '2017-08-17 11:34:38', 'no', 'no', 0),
(7, 'keep going', 'will_bennett', 'none', '2017-08-17 11:34:52', 'no', 'no', 0),
(8, '8th posts  coming ur way', 'will_bennett', 'none', '2017-08-17 11:35:26', 'no', 'no', 0),
(9, 'almost there', 'will_bennett', 'none', '2017-08-17 11:35:46', 'no', 'no', 0),
(10, 'we need more', 'will_bennett', 'none', '2017-08-17 11:36:47', 'no', 'no', 0),
(11, 'lets see what happens now', 'will_bennett', 'none', '2017-08-17 11:37:30', 'no', 'no', 0),
(12, 'lets see what happens now', 'will_bennett', 'none', '2017-08-17 11:38:15', 'no', 'no', 0),
(13, 'wtf', 'will_bennett', 'none', '2017-08-17 11:39:10', 'no', 'no', 0),
(14, 'wtf', 'will_bennett', 'none', '2017-08-17 12:18:48', 'no', 'no', 0),
(15, 'wtf', 'will_bennett', 'none', '2017-08-17 12:42:34', 'no', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `ID` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL,
  `dated_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `first_name`, `last_name`, `password`, `signup_date`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `profile_pic`) VALUES
(39, 'will_bennett', 'Wbennet@gmail.com', 'Will', 'Bennett', '9eb9b2e61453642ee6ba9beb7bb3ea5a', '0000-00-00', 13, 0, '', '', 'assets/images/profile_pics/defaults/profile_avatar.jpg'),
(40, 'will_hamer', 'Whamer@gmail.com', 'Will', 'Hamer', 'e80b5017098950fc58aad83c8c14978e', '0000-00-00', 2, 0, 'no', ',', 'assets/images/profile_pics/defaults/female_default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
