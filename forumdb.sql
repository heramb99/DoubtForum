-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 11:07 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `quid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `upvote` int(11) NOT NULL DEFAULT 0,
  `downvote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `qid`, `quid`, `aid`, `answer`, `upvote`, `downvote`) VALUES
(1, 3, 1, 1, 'test answer test answer test answer test answer test answer test answer test answer test answer', 0, 0),
(2, 3, 1, 6, 'asndlskjdnsjkndjkdnajkaddlsdansdkjnandsjkasdasdsdada', 0, 0),
(3, 3, 1, 1, '$qd=$quest->id $qd=$quest->id$qd=$quest->id', 0, 0),
(4, 3, 1, 1, '404 Not Found404 Not Found404 Not Found', 0, 0),
(5, 3, 1, 1, 'test answer', 0, 0),
(6, 3, 1, 8, 'test2@test.test test2@test.testtest2@test.test', 0, 0),
(7, 4, 1, 1, 'dd($answerlist);   dd($answerlist);', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `field` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `uid`, `question`, `field`) VALUES
(2, 1, 'Test Doubt', 'Python'),
(3, 1, 'try:     Some code except:     log error in my own words, i.e \'Some code\' failed to execute     Some other code This catches all exceptions thus ensuring my site does not deliver 500 errors and such like.', 'Python'),
(4, 1, 'the error it returns is:  NameError: name \'lives\' is not defined I know the code isn\'t as efficient as possible, this is one of my first projects', 'Python'),
(5, 1, 'While creating an object of using Class.forName() I am getting following Errors. Can you please confirm where I am doing wrong.', 'Java'),
(6, 1, 'Please excuse what is probably a very basic question, but I am writing a program to store employee info and it works fine until it tries to set the info inside my employee class. It gives a stackoverflow error and I cannot figure out why.', 'Java'),
(7, 1, 'String objects are immutable. Then how come the object str can be assigned value \"Help!\". Isn\'t this contradicting the immutability of strings in Java? Can anybody please explain me the exact concept of immutability?', 'Java'),
(8, 1, 'In C++, I\'m finding out that I can\'t return a null value if the object doesn\'t exist. I just want to return an \'indicator\' of type T that notifies the calling function that no object has been found.', 'C++'),
(9, 1, 'list<int>L[]=new list<int>[20]; This gives an error \" array initializer must be an initializer list\" What is wrong with initializing list like:  list<int> L[100];', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'test', 'test@test.test', 'password'),
(6, 'rahul', 'rahul@xyz.xyz', 'password'),
(7, 'rahul', 'rahul@xyz.xyz', 'password'),
(8, 'test2', 'test2@test.test', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
