-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 06:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `cart_id` int(11) NOT NULL,
  `cart_book_id` int(50) NOT NULL,
  `cart_user_email` varchar(50) NOT NULL,
  `purchase_option` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cart_id`, `cart_book_id`, `cart_user_email`, `purchase_option`) VALUES
(167, 1, 'safawafik@gmail.com', 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'Emily Henry'),
(2, 'Susan Cain'),
(3, 'Khaled Hosseini'),
(4, 'Theren Mafi'),
(5, 'Colleen Hoover'),
(6, 'Louis Sachar'),
(7, 'Taylor Jenkins Reid'),
(8, 'Markus Zusak'),
(9, 'Jojo Moyes'),
(10, 'Elizabeth  Gilbert'),
(11, 'Ruth ozeki'),
(12, 'F.Scott fitzgerald'),
(13, 'J. R. R. Tolkien');

-- --------------------------------------------------------

--
-- Table structure for table `author_books`
--

CREATE TABLE `author_books` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author_books`
--

INSERT INTO `author_books` (`author_id`, `book_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(8, 9),
(9, 10),
(10, 12),
(11, 13),
(12, 14),
(13, 15);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` float NOT NULL,
  `book_price_dis` float NOT NULL,
  `category` int(11) NOT NULL,
  `book_desc` text NOT NULL,
  `book_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_price`, `book_price_dis`, `category`, `book_desc`, `book_img`) VALUES
(1, 'Book Lovers', 12.4, 10, 25, 'nice book', '71gDtm1U0FL._AC_UF1000,1000_QL80_.jpg'),
(2, 'Bitter-Sweet', 10, 9, 28, 'nice book', '81d3qLZSKlL.jpg'),
(3, 'Quiet: The Power of Introverts in a World', 15, 13.5, 28, 'nice book', '71FvX52xEBL._CR0,0,0,130_.jpg'),
(4, 'The Kite Runner', 12, 13.2, 14, 'nice book', '81RUfP0ZOjL._AC_UF1000,1000_QL80_.jpg'),
(5, 'Shatter Me', 14.5, 13, 27, 'nice book', '81RxMMXUnFL._AC_UF1000,1000_QL80_.jpg'),
(6, 'It ends with Us', 16.7, 15, 25, 'nice book', '81s0B6NYXML.jpg'),
(7, 'Holes', 12, 11.5, 5, 'nice book', '810r+QzOsnL._AC_UF1000,1000_QL80_.jpg'),
(8, 'Malibu Rising', 13.2, 11, 10, 'nice book', '914BkcGCNgS.jpg'),
(9, 'The Book Thief', 14.3, 12, 2, 'nice book', '914h7ms4FXL._AC_UF1000,1000_QL80_.jpg'),
(10, 'After You', 12.3, 11.5, 25, 'try it', '81UWB7oUZ0L.jpg'),
(12, 'Big Magic', 16.3, 14, 1, 'A must-have, one-of-a-kind, limited presentation-case edition of worldwide bestseller Elizabeth Gilbert\'s Big Magic, each bound in unique art by watercolor rock star Lourdes Sanchez.', '81WcnNQ-TBL.jpg'),
(13, 'A tall for the time being', 10, 9, 5, 'In Tokyo, sixteen-year-old Nao has decided there\'s only one escape from her aching loneliness and her classmates\' bullying. But before she ends it all, Nao first plans to document the life of her great grandmother, a Buddhist nun who\'s lived more than a century.', '91RQ-qyNyfL._AC_UF1000,1000_QL80_.jpg'),
(14, 'The great gatsby', 17.2, 15, 18, 'One of the classics of twentieth-century literature, The Great Gatsby is now available in a definitive, textually accurate edition.', '81af+MCATTL.jpg'),
(15, 'The Hobbit', 15, 12, 14, 'nice book', '710+HcoP38L._AC_UF1000,1000_QL80_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Arts & Photography'),
(2, 'Biographies & Memoirs'),
(3, 'Business & Money'),
(4, 'Calendars'),
(5, 'Children\'s Books'),
(6, 'Christian Books & Bibles'),
(7, 'Comics & Graphic Novels'),
(8, 'Computers & Technology'),
(9, 'Cookbooks, Food & Wine'),
(10, 'Crafts, Hobbies & Home'),
(11, 'Education & Teaching'),
(12, 'Engineering & Transportation'),
(13, 'Health, Fitness & Dieting'),
(14, 'History'),
(15, 'Humor & Entertainment'),
(16, 'Law'),
(17, 'LGBTQ+ Books'),
(18, 'Literature & Fiction'),
(19, 'Medical Books'),
(20, 'Mystery, Thriller & Suspense'),
(21, 'Parenting & Relationships'),
(22, 'Politics & Social Sciences'),
(23, 'Reference'),
(24, 'Religion & Spirituality'),
(25, 'Romance'),
(26, 'Science & Math'),
(27, 'Science Fiction & Fantasy'),
(28, 'Self-Help'),
(29, 'Sports & Outdoors'),
(30, 'Teen & Young Adult'),
(31, 'Test Preparation'),
(32, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Abdelsalam Mahari', 'abdelsalam.mahari@gmail.com', 'Job application', 'hello'),
(2, 'Abdelsalam Mahari', 'abdelsalam.mahari@gmail.com', 'Job application', 'hello'),
(3, 'Abdelsalam Mahari', 'abdelsalam.mahari@gmail.com', 'test 2', 'hii'),
(4, 'Abdelsalam Mahari', 'abdelsalam.mahari@gmail.com', 'alii', 'wafik');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fav_id` int(11) NOT NULL,
  `fav_book_id` int(11) NOT NULL,
  `fav_user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `db_fname` varchar(20) NOT NULL,
  `db_lname` varchar(20) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `db_date` date NOT NULL DEFAULT current_timestamp(),
  `db_password` varchar(200) NOT NULL,
  `email_verified` int(11) NOT NULL DEFAULT 0,
  `verification_code` int(11) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `db_fname`, `db_lname`, `db_email`, `db_date`, `db_password`, `email_verified`, `verification_code`, `reset_token`) VALUES
(1, 'Abdelsalam', 'Mahari', 'abdelsalam.mahari@gmail.com', '2023-06-11', '456', 1, 0, NULL),
(6, 'sergio', 'ramos', 'abdelsalam.sr4@gmail.com', '2023-06-14', '333', 1, 44, NULL),
(7, 'Wafik', 'Safa', 'safawafik@gmail.com', '2023-06-16', '321', 1, 0, NULL),
(9, 'rami', 'kaeen', 'rkaeen54@gmail.com', '2023-06-16', '369', 0, 2147483647, NULL),
(10, 'ali', 'nahle', 'nahleali290@gmail.com', '2023-06-23', '123', 0, 0, '649589c26b249'),
(11, 'wifo', 'ss', 'zzzaaazazaaazz@gmail.com', '2023-06-23', '111', 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_user_id` (`cart_book_id`),
  ADD KEY `cart_book_email` (`cart_user_email`),
  ADD KEY `cart_user_email` (`cart_user_email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `author_books`
--
ALTER TABLE `author_books`
  ADD KEY `author_id` (`author_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `fav_user_id` (`fav_book_id`),
  ADD KEY `fav_book_email` (`fav_user_email`),
  ADD KEY `fav_user_email` (`fav_user_email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `db_email` (`db_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addcart`
--
ALTER TABLE `addcart`
  ADD CONSTRAINT `addcart_ibfk_1` FOREIGN KEY (`cart_book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addcart_ibfk_2` FOREIGN KEY (`cart_user_email`) REFERENCES `register` (`db_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `author_books`
--
ALTER TABLE `author_books`
  ADD CONSTRAINT `author_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `author_books_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`fav_book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`fav_user_email`) REFERENCES `register` (`db_email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
