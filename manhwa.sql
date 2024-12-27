-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 11:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manhwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chabter`
--

CREATE TABLE `chabter` (
  `Id` int(11) NOT NULL,
  `manga_num` int(11) NOT NULL,
  `chabter_num` int(11) NOT NULL,
  `last_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chabter`
--

INSERT INTO `chabter` (`Id`, `manga_num`, `chabter_num`, `last_add`) VALUES
(110, 6, 1, '2023-05-21'),
(111, 6, 2, '2023-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `gen_num` int(20) NOT NULL,
  `gen_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`gen_num`, `gen_name`) VALUES
(1, 'ACTION'),
(2, 'COMEDY'),
(3, 'ROMANCE'),
(4, 'DRAMA'),
(5, 'FANTASY'),
(6, 'Sports'),
(7, 'INFORMATIVE'),
(8, 'HORROR'),
(9, 'HEARTWARMING'),
(10, 'HISTORICAL'),
(11, 'MYSTERY'),
(12, 'SUPERNATURAL'),
(13, 'THRILLER'),
(14, 'SUPERHERO'),
(15, 'SLICE OF LIFE');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_num` int(11) NOT NULL,
  `chabter_num` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_num`, `chabter_num`, `url`) VALUES
(555, 110, 'http://localhost/project/chapter_imgs/6469d804d6242.jpg'),
(556, 110, 'http://localhost/project/chapter_imgs/6469d804d6a58.jpg'),
(557, 110, 'http://localhost/project/chapter_imgs/6469d804d7305.jpg'),
(558, 110, 'http://localhost/project/chapter_imgs/6469d804d8b6f.jpg'),
(559, 110, 'http://localhost/project/chapter_imgs/6469d804d9a45.jpg'),
(560, 110, 'http://localhost/project/chapter_imgs/6469d804da1a8.jpg'),
(561, 110, 'http://localhost/project/chapter_imgs/6469d804da832.jpg'),
(562, 110, 'http://localhost/project/chapter_imgs/6469d804db04e.jpg'),
(563, 110, 'http://localhost/project/chapter_imgs/6469d804dbb18.jpg'),
(564, 110, 'http://localhost/project/chapter_imgs/6469d804dc28a.jpg'),
(565, 110, 'http://localhost/project/chapter_imgs/6469d804dc952.jpg'),
(566, 110, 'http://localhost/project/chapter_imgs/6469d804dd2ce.jpg'),
(567, 111, 'http://localhost/project/chapter_imgs/6469d86a781cf.jpg'),
(568, 111, 'http://localhost/project/chapter_imgs/6469d86a7d36a.png'),
(569, 111, 'http://localhost/project/chapter_imgs/6469d86a7df6a.png');

-- --------------------------------------------------------

--
-- Table structure for table `manhwa`
--

CREATE TABLE `manhwa` (
  `Manhwa_Num` int(20) NOT NULL,
  `Man_name` varchar(255) NOT NULL,
  `chabters_counter` int(20) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `coverimg` varchar(255) NOT NULL,
  `genres_num` int(20) DEFAULT NULL,
  `addData` varchar(255) NOT NULL,
  `Evaluation` varchar(255) NOT NULL DEFAULT 'Updating',
  `Other_Names` varchar(255) NOT NULL DEFAULT 'Updating',
  `Author` varchar(255) NOT NULL DEFAULT 'Updating',
  `Painter` varchar(255) NOT NULL DEFAULT 'Updating',
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manhwa`
--

INSERT INTO `manhwa` (`Manhwa_Num`, `Man_name`, `chabters_counter`, `Description`, `coverimg`, `genres_num`, `addData`, `Evaluation`, `Other_Names`, `Author`, `Painter`, `Status`) VALUES
(2, 'Black clover', 0, '“The Gate” arose ten years ago, bridging the gap between the actual world and the domain of magic and monsters. Ordinary humans were given superhuman abilities and were known as “Hunters” in order to confront these heinous animals. Sung Jin-Woo, a twenty-year-old Hunter, is renowned as the “World’s Weakest” due to his pitiful power when compared to even a meager E-Rank. Despite this, he continues to hunt monsters in low-rank Gates to help pay for his mother’s medical expenditures. ', 'http://localhost/project/cover/blackclover.jpg', 1, '2023-05-18', '4', 'Black clover', 'Chugong', 'Chugong', 'continuing'),
(3, 'Gintama', 0, 'The story is set in an alternate', 'http://localhost/project/cover/e477cbc540fdd205d91e87b08b332933.jpg', 2, '2023-05-18', '5', 'Silver Soul', 'Hideaki Sorachi', 'Hideaki Sorachi', 'continuing'),
(4, 'One paice', 0, 'One Piece is a manga and anime series that follows the adventures of Monkey D. Luffy and his pirate crew in search of the ultimate treasure known as the “One Piece” in order to become the next King of the Pirates. The series explores themes of friendship and the power of teamwork. In order to reach their goal, Luffy and his crew must assemble a good pirate crew and navigate their way to Raftel, which can only be reached by finding the map to Raftel by combining Poneglyphs1. ', 'http://localhost/project/cover/th.jpeg', 4, '2023-05-18', '5', 'One paice', 'Oda', 'Oda', 'continuing'),
(5, 'Bleach', 0, 'Ichigo Kurosaki is a teenager from Karakura Town who can see ghosts, a talent allowing him to meet a supernatural human Rukia Kuchiki, who enters the town in search of a Hollow, a kind of monstrous lost soul who can harm both ghosts and humans. Rukia is one of the Soul Reapers ', 'http://localhost/project/cover/f7c31a2870e425053d488e5cc4f21220.jpg', 1, '2023-05-18', '5', 'Bleach', 'Noriaki Kubo', 'Noriaki Kubo', 'continuing'),
(6, 'Noblesse', 0, 'قصة مانجا Noblesse .. داخل مبنى مهجور في كوريا الجنوبية، يوجد تابوت أبيض، يرتفع منه رجل جميل وكريم و نبيل لا يمكن تصوره. يستيقظ راي في هذا الوقت المجهول ، ويجب عليه أن يبحث عن شخص يثق به – رفيقه المخل', 'http://localhost/project/cover/EjqgNvUX0AAvPyT.jpg', 1, '2023-05-20', '1', ' النبلاء', 'Jae-Ho,Son', 'Gwang-Su Lee', 'continuing'),
(7, 'Mercenary Enrollment', 0, 'في سن الثامنة ، فقد إيجين يو والديه في حادث تحطم طائرة وأصبح عالقًا في أرض أجنبية ، وأجبر على أن يصبح طفلاً مرتزقًا من أجل البقاء على قيد الحياة. عاد إلى المنزل بعد عشر سنوات ليجتمع شمله مع عائلته في ', 'http://localhost/project/cover/Mercenary-Enrollment-193x278.jpeg', 1, '2023-05-20', '4', ' 입학 용병تجنيد المرتزقة Teenage Mercenary', 'Updating', 'Updating', 'continuing');

-- --------------------------------------------------------

--
-- Table structure for table `swipper`
--

CREATE TABLE `swipper` (
  `idS` int(20) NOT NULL,
  `img_swip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `swipper`
--

INSERT INTO `swipper` (`idS`, `img_swip`) VALUES
(1, 'http://localhost/project/swipper1/pic1.jpg'),
(2, 'http://localhost/project/swipper1/pic3.jpg'),
(3, 'http://localhost/project/swipper1/pic4.jpg'),
(4, 'http://localhost/project/swipper1/pic5.jpg'),
(5, 'http://localhost/project/swipper1/pic6.jpg'),
(6, 'http://localhost/project/swipper1/pic7.jpg'),
(84, 'http://localhost/project/swipper1/wp8908707.png');

-- --------------------------------------------------------

--
-- Table structure for table `swipper2`
--

CREATE TABLE `swipper2` (
  `ids1` int(20) NOT NULL,
  `imgs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `swipper2`
--

INSERT INTO `swipper2` (`ids1`, `imgs`) VALUES
(1, 'http://localhost/project/swipper2/wp8908707.png'),
(3, 'http://localhost/project/swipper2/wp2510144.jpg'),
(4, 'http://localhost/project/swipper2/wp8908630.jpg'),
(5, 'http://localhost/project/swipper2/wp4086085.jpg'),
(6, 'http://localhost/project/swipper2/wp7561068.jpg'),
(7, 'http://localhost/project/swipper2/wp4086048.png'),
(8, 'http://localhost/project/swipper2/wp4086100.jpg'),
(9, 'http://localhost/project/swipper2/_EB9AA1EB80AB_E293A4EABCB9__EB84BD_EB90A3EB80AB_EC86BDE.png'),
(10, 'http://localhost/project/swipper2/wp7874882.jpg'),
(11, 'http://localhost/project/swipper2/wallpaperflare.com_wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Gmail` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Gmail`, `password`, `user_type`, `user_name`, `id`) VALUES
('aseelabosair12@gmail.com', '123', 'user', 'aseel abosair', 1),
('dldldss@gmai.com', '90', 'user', 'dld', 2),
('noorabosair12@gmail.com', '123', 'user', 'noorabosair', 3),
('sajaabosair12@gmail.com', '100', 'user', 'saja abosair', 4),
('samaabosair13@gmail.com', '12345', 'Admin', 'sama abosair', 5),
('aseelstar12@gmai.com', '123', 'user', 'aseel12', 6),
('sufyan12@gmail.com', '1234', 'user', 'Sufyan Samara', 7),
('waffaAbosair12@gmail.com', '1234', 'user', 'waffaAbosair', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chabter`
--
ALTER TABLE `chabter`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `manga_num` (`manga_num`),
  ADD KEY `chabter_num` (`chabter_num`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`gen_num`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_num`),
  ADD KEY `chabter_num` (`chabter_num`);

--
-- Indexes for table `manhwa`
--
ALTER TABLE `manhwa`
  ADD PRIMARY KEY (`Manhwa_Num`),
  ADD KEY `genres_num` (`genres_num`);

--
-- Indexes for table `swipper`
--
ALTER TABLE `swipper`
  ADD PRIMARY KEY (`idS`);

--
-- Indexes for table `swipper2`
--
ALTER TABLE `swipper2`
  ADD PRIMARY KEY (`ids1`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Gmail` (`Gmail`),
  ADD UNIQUE KEY `Gmail_2` (`Gmail`),
  ADD UNIQUE KEY `Gmail_3` (`Gmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chabter`
--
ALTER TABLE `chabter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=570;

--
-- AUTO_INCREMENT for table `manhwa`
--
ALTER TABLE `manhwa`
  MODIFY `Manhwa_Num` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `swipper`
--
ALTER TABLE `swipper`
  MODIFY `idS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `swipper2`
--
ALTER TABLE `swipper2`
  MODIFY `ids1` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chabter`
--
ALTER TABLE `chabter`
  ADD CONSTRAINT `chabter_ibfk_1` FOREIGN KEY (`manga_num`) REFERENCES `manhwa` (`Manhwa_Num`);

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `FK_T1_T2_Cascade` FOREIGN KEY (`chabter_num`) REFERENCES `chabter` (`Id`) ON DELETE CASCADE;

--
-- Constraints for table `manhwa`
--
ALTER TABLE `manhwa`
  ADD CONSTRAINT `manhwa_ibfk_1` FOREIGN KEY (`genres_num`) REFERENCES `genres` (`gen_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
