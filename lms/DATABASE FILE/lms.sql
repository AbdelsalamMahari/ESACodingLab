-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 11:26 AM
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
  `cart_qty` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `total` float NOT NULL,
  `status_book` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cart_id`, `cart_book_id`, `cart_user_email`, `cart_qty`, `total`, `status_book`) VALUES
(392, 4, 'abdelsalam.mahari@gmail.com', 5, 60, 'purchase'),
(393, 5, 'abdelsalam.mahari@gmail.com', 1, 1.45, 'borrow');

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
(13, 'J. R. R. Tolkien'),
(20, 'sergio'),
(21, 'Claudia Gray'),
(22, 'Malla Nunn'),
(23, 'Conan Doyle');

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
(12, 35),
(13, 15),
(21, 36),
(22, 40),
(23, 43);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` float NOT NULL,
  `borrow_price` float NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `category` int(11) NOT NULL,
  `book_desc` text NOT NULL,
  `book_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_price`, `borrow_price`, `quantity`, `category`, `book_desc`, `book_img`) VALUES
(1, 'Book Lovers', 13, 1.3, 0, 25, 'nice book', '71gDtm1U0FL._AC_UF1000,1000_QL80_.jpg'),
(2, 'Bitter-Sweet', 10, 1, 15, 28, 'nice book', '81d3qLZSKlL.jpg'),
(3, 'Quiet: The Power of Introverts in a World', 15, 1.5, 30, 28, 'nice book', '71FvX52xEBL._CR0,0,0,130_.jpg'),
(4, 'The Kite Runner', 12, 1.2, 5, 14, 'nice book', '81RUfP0ZOjL._AC_UF1000,1000_QL80_.jpg'),
(5, 'Shatter Me', 14.5, 1.45, 6, 27, 'nice book', '81RxMMXUnFL._AC_UF1000,1000_QL80_.jpg'),
(6, 'It ends with Us', 16.7, 1.67, 7, 25, 'nice book', '81s0B6NYXML.jpg'),
(7, 'Holes', 12, 1.2, 10, 5, 'nice book', '810r+QzOsnL._AC_UF1000,1000_QL80_.jpg'),
(8, 'Malibu Rising', 13.2, 1.32, 8, 10, 'nice book', '914BkcGCNgS.jpg'),
(9, 'The Book Thief', 14.3, 1.43, 12, 2, 'nice book', '914h7ms4FXL._AC_UF1000,1000_QL80_.jpg'),
(10, 'After You', 12.3, 1.23, 20, 25, 'try it', '81UWB7oUZ0L.jpg'),
(12, 'Big Magic', 16.3, 1.63, 15, 1, 'A must-have, one-of-a-kind, limited presentation-case edition of worldwide bestseller Elizabeth Gilbert\'s Big Magic, each bound in unique art by watercolor rock star Lourdes Sanchez.', '81WcnNQ-TBL.jpg'),
(13, 'A tall for the time being', 10, 1, 10, 5, 'In Tokyo, sixteen-year-old Nao has decided there\'s only one escape from her aching loneliness and her classmates\' bullying. But before she ends it all, Nao first plans to document the life of her great grandmother, a Buddhist nun who\'s lived more than a century.', '91RQ-qyNyfL._AC_UF1000,1000_QL80_.jpg'),
(15, 'The Hobbit', 15, 1.5, 5, 14, 'nice book', '710+HcoP38L._AC_UF1000,1000_QL80_.jpg'),
(35, 'The great gatsby', 14, 1.4, 20, 20, 'One of the classics of twentieth-century literature, The Great Gatsby is now available in a definitive, textually accurate edition. The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan has been acclaimed by generations of readers. But the first edition contained a number of errors resulting from Fitzgerald\'s extensive revisions and a rushed production schedule. Subsequent printings introduced further departures from the author\'s words. This edition, based on the Cambridge critical text, restores all the language of Fitzgerald\'s masterpiece. Drawing on the manuscript and surviving proof of the novel, along with Fitzgerald\'s later revisions and corrections, this is the authorized text - The Great Gatsby as Fitzgerald intended it.', '81af+MCATTL.jpg'),
(36, 'Ten Thousand Skies Above You', 13.5, 1.35, 5, 27, 'In this sequel to A Thousand Pieces of You by New York Times bestselling author Claudia Gray, Marguerite races through various dimensions to save the boy she loves.\r\n\r\nEver since she used the Firebird, her parents\' invention, to cross through to alternate dimensions, Marguerite has caught the attention of enemies who will do anything to force her into helping them dominate the multiverse—even hurt the people she loves. She resists until her boyfriend, Paul, is attacked, and his consciousness is scattered across multiple dimensions.\r\n\r\nThe hunt for each splinter of Paul\'s soul sends Marguerite racing through a war-torn San Francisco, the criminal underworld of New York City, and a glittering Paris where another Marguerite hides a shocking secret. Each dimension brings Marguerite one step closer to rescuing Paul. But with every trial she faces, she begins to question the one constant she\'s found between the worlds: their love for each other.', 'a8b9ff74ed0f3efd97e09a7a0447f892.jpg'),
(40, 'When the Ground Is Hard', 17, 1.7, 30, 18, 'This heartrending YA tale set in a Swaziland boarding school and featuring an unlikely friendship between girls of different castes won the LA Times Book Prize and is now available in paperback.Adele Joubert loves being one of the popular girls at Keziah Christian Academy. She knows the upcoming semester at school is going to be great with her best friend Delia at her side. Then Delia dumps her for a new girl with more money, and Adele is forced to share a room with Lottie, the school pariah, who doesn\'t pray and defies teachers\' orders. But as they share a copy of Jane Eyre, Lottie\'s gruff exterior and honesty grows on Adele, and Lottie learns to be a little sweeter. Together, they take on bullies and protect each other from the vindictive and prejudiced teachers. Then a boy goes missing on campus and Adele and Lottie must rely on each other to solve the mystery and along the way learn the true meaning of friendship.', '81kM4kSfHvL._AC_UF1000,1000_QL80_.jpg'),
(43, 'Sherlock Holmes', 12.5, 1.25, 20, 20, 'There is one literary detective who stands above all others, whose powers\r\n                            of deduction are known the world over, whose influence can still be felt in today\'s most\r\n                            modern whodunits', '81tNnqcHxlL._AC_UF1000,1000_QL80_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(11) NOT NULL,
  `db_borrowfrom` date NOT NULL,
  `db_borrowto` date NOT NULL,
  `db_bookname` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `db_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `db_borrowfrom`, `db_borrowto`, `db_bookname`, `status`, `db_email`) VALUES
(1, '2023-07-01', '2023-07-30', 'Bitter-Sweet', 0, 'rkaeen54@gmail.com');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback_title` varchar(50) NOT NULL,
  `feedback_desc` varchar(150) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_title`, `feedback_desc`, `book_id`, `user_email`) VALUES
(1, 'test', 'test 2', 0, ''),
(2, 'hello', 'hii', 0, ''),
(3, 'csF', 'FEQG', 1, 'abdelsalam.mahari@gmail.com'),
(4, 'hiii', 'abeddd', 0, 'abdelsalam.mahari@gmail.com'),
(5, 'hiii', 'mostafasafa', 4, 'abdelsalam.mahari@gmail.com'),
(6, 'Ahmad', 'HELLOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO', 2, 'abd'),
(7, 'hi', 'aliii', 2, 'abd'),
(8, 'test', 'hiii', 3, 'abdelsalam.mahari@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `db_image1` varchar(200) NOT NULL,
  `db_text1` text NOT NULL,
  `db_image2` varchar(200) NOT NULL,
  `db_text2` text NOT NULL,
  `category_name1` varchar(50) NOT NULL,
  `category_name2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `db_image1`, `db_text1`, `db_image2`, `db_text2`, `category_name1`, `category_name2`) VALUES
(1, 'Bibliophile.gif', 'At our library store, we believe in the transformative power of books and the importance of supporting charitable initiatives. With our unique donation program, we are dedicated to making a positive impact on society while promoting a love for reading.\r\n\r\nEvery time you borrow a book from our Book store, a portion the rental fee will be automatically transformed into a donation. These donations go directly to reputable charitable institutions that focus on promoting literacy, education, and access to books for those in need.', 'Bibliophile2.gif', 'By choosing to borrow books from our library, you not only engage in a delightful reading experience but also contribute to a meaningful cause. Together, we can foster the joy of reading and provide opportunities for individuals and communities to thrive through the power of knowledge.\r\n\r\nJoin us in this noble endeavor as we encourage reading and make a difference in the lives of others. Visit our library store today and embark on a literary journey that impacts lives.', 'Romance', 'History');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `paymentType` varchar(50) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `totalAmount`, `productId`, `productName`, `quantity`, `paymentType`, `db_email`, `date`) VALUES
(40, 15, 3, 'Quiet: The Power of Introverts in a World', 1, 'purchase', 'rkaeen54@gmail.com', '2023-06-29 15:05:52'),
(41, 15, 3, 'Quiet: The Power of Introverts in a World', 1, 'purchase', 'rkaeen54@gmail.com', '2023-06-29 15:24:34'),
(44, 30, 3, 'Quiet: The Power of Introverts in a World', 2, 'purchase', 'abdelsalam.sr4@gmail.com', '2023-06-30 11:25:14'),
(45, 24, 4, 'The Kite Runner', 2, 'borrow', 'abdelsalam.sr4@gmail.com', '2023-06-30 11:25:15'),
(46, 30, 3, 'Quiet: The Power of Introverts in a World', 2, 'purchase', 'abdelsalam.sr4@gmail.com', '2023-06-30 17:15:18'),
(47, 24, 4, 'The Kite Runner', 2, 'borrow', 'abdelsalam.sr4@gmail.com', '2023-06-30 17:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `rating_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `item_id`, `user_email`, `rating_value`) VALUES
(1, 3, 'rkaeen54@gmail.com', 4),
(2, 10, 'rkaeen54@gmail.com', 3),
(3, 6, 'rkaeen54@gmail.com', 5),
(4, 1, 'rkaeen54@gmail.com', 2),
(5, 5, 'rkaeen54@gmail.com', 5),
(6, 1, 'abdelsalam.mahari@gmail.com', 5),
(14, 2, 'rkaeen54@gmail.com', 4);

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
  `verification_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `db_fname`, `db_lname`, `db_email`, `db_date`, `db_password`, `email_verified`, `verification_code`, `verification_token`) VALUES
(1, 'Abdelsalam', 'Mahari', 'abdelsalam.mahari@gmail.com', '2023-06-11', '456', 1, 0, '-1'),
(7, 'Wafik', 'Safa', 'safawafik@gmail.com', '2023-06-16', '0', 1, 0, '8fe6aa9ef5600982685cd8f0b6303222'),
(10, 'ali', 'nahle', 'nahleali290@gmail.com', '2023-06-23', '666', 1, 0, '5555aa9ef5600982685cd8f0b6303ca'),
(13, 'sergio', 'ramos', 'abdelsalam.sr4@gmail.com', '2023-06-24', '111', 0, 0, '960045194d447b8239f714395fb9e48a');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `db_email` varchar(25) NOT NULL,
  `db_room` varchar(200) NOT NULL,
  `db_c` date NOT NULL DEFAULT current_timestamp(),
  `db_date` date NOT NULL,
  `db_time` time NOT NULL,
  `db_time2` time NOT NULL,
  `db_capacity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `verification_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `db_email`, `db_room`, `db_c`, `db_date`, `db_time`, `db_time2`, `db_capacity`, `status`, `verification_code`) VALUES
(36, 'abdelsalam.sr4@gmail.com', 'Quiet Room', '2023-06-28', '2023-06-28', '18:00:00', '18:30:00', 8, 0, 0),
(37, 'abdelsalam.mahari@gmail.c', 'Quiet Room', '2023-07-01', '2023-07-02', '12:30:00', '13:00:00', 5, 0, 0),
(38, 'abdelsalam.mahari@gmail.c', 'Quiet Room', '2023-07-01', '2023-07-02', '12:30:00', '13:00:00', 5, 0, 5),
(39, 'abdelsalam.mahari@gmail.c', 'Quiet Room', '2023-07-01', '2023-07-03', '12:30:00', '13:00:00', 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `db_room` varchar(200) NOT NULL,
  `db_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `db_room`, `db_capacity`) VALUES
(1, 'Quiet Room', 10);

-- --------------------------------------------------------

--
-- Table structure for table `room_availability`
--

CREATE TABLE `room_availability` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_slot` varchar(11) NOT NULL,
  `available_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `db_email` (`db_email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_availability`
--
ALTER TABLE `room_availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for table `room_availability`
--
ALTER TABLE `room_availability`
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
