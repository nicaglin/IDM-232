-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 12:12 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `veroniw8_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(3) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) COLLATE utf8_bin NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `description`, `picture`, `tag`) VALUES
(1, 'Abby', 'img/abby.jpg', 'This is an outline of an architectural structure. It was made using Adobe Illustrator. ', 'img/Babby.jpg', 'architecture, illustrator'),
(2, 'Animation', 'img/animation.jpg', 'This is an animation that I made. There is a theme of separation in the repetition. ', 'img/animation.gif', 'animation, grayscale'),
(3, 'Animation', 'img/animation2.jpg', 'This is another animation that I made. I played with the theme of transparency with the different levels of opacity and how shapes were layered. ', 'img/animation2.gif', 'animation, photoshop'),
(4, 'Architecture', 'img/bbstairs.jpg', 'This is an architectural structure that I outlined. Parts of it were used to make motifs. ', 'img/Bbbstairs.jpg', 'illustrator, lightning, curvilinear '),
(5, 'Architecture', 'img/books.jpg', 'This is an architecture that I outlined with very much detail. ', 'img/Bbooks.jpg', 'illustrator, black, lorem'),
(6, 'Architecture', 'img/colorful.jpg', 'This is an architecture that I outlined. ', 'img/Bcolorful.jpg', 'black, illustrator'),
(7, 'Pattern', 'img/eyes.jpg', 'This is a pattern designed from motifs of the architectures.', 'img/Beyes.jpg', 'illustrator, black, linear lines'),
(8, 'Posterization ', 'img/faces.jpg', 'This is a poster of my face under different circumstances such as monochrome or simply the grayscaled posterization of me. ', 'img/Bfaces.jpg', 'red, green, yellow, complementary, monochromatic, photoshop'),
(9, 'Architecture', 'img/fancy.jpg', 'This is an architecture that I outlined. This specific architecture was inspired by the Baroque period. ', 'img/Bfancy.jpg', 'illustrator, intricate '),
(10, 'Playground', 'img/ibk.jpg', 'A person explores the different areas of the "playground". Paint and ink were used for the physical copy. ', 'img/Bibk.jpg', 'illustrator, grayscale, black, gray, ibk, model '),
(11, 'Boxes', 'img/inkedboxes.jpg', 'These boxes were inked in a one-point perspective. ', 'img/Binkedboxes.jpg', 'ink, Bristol, shapes, perspective'),
(12, 'Untitled', 'img/joey.jpg', 'This untitled piece was inspired by Joey. The concept of simultaneous contrast is displayed as well.   ', 'img/Bjoey.jpg', 'color, joe, illustrator'),
(13, 'Laser', 'img/laser.jpg', 'This piece was made with the help of a laser cutter in the foreground. The background was hand-cut. ', 'img/Blaser.jpg', 'intricate, laser, illustrator'),
(14, 'Line Study', 'img/linestudy.jpg', 'This was a line study performed to explore the different types and emotional responses when it comes to lines. ', 'img/Blinestudy.jpg', 'line, ink, linear, curvilinear, natural, organic  '),
(15, 'Main Building', 'img/mainbuilding.jpg', 'This is a drawing of a hidden small place in the Main Building of Drexel University. Props to you if you can find it!', 'img/Bmainbuilding.jpg', 'pencil, Drexel, building'),
(16, 'Mirror', 'img/mirrorball.jpg', 'This was a charcoal piece where a reflective surface(mirror sphere) was placed in the scene.', 'img/Bmirrorball.jpg', 'charcoal, lines, reflective'),
(17, 'Motion', 'img/motion.jpg', 'This piece explored the topic of motion. ', 'img/Bmotion.jpg', 'illustrator, motion, skull'),
(18, 'Head', 'img/planhead.jpg', 'This charcoal drawing really explored the light and shadow around an object resembling a human head. ', 'img/Bplanhead.jpg', 'charcoal, arches, shadows'),
(19, 'Rhino ', 'img/rhino.jpg', 'This is a charcoal piece of a rhino. ', 'img/Brhino.jpg', 'charcoal, rhino, shadows'),
(20, 'Swallowed ', 'img/richy.jpg', 'This piece was inspired by another artist.  The concept of simultaneous contrast is displayed as well.   ', 'img/Brichy.jpg', 'color'),
(21, 'Cardboard', 'img/rockethead.jpg', 'This piece involved drawing cardboard objects with transparencies. ', 'img/Brockethead.jpg', 'pencil, shapes'),
(22, 'Time', 'img/roy.jpg', 'This was a pice inspired by another artist. The concept of simultaneous contrast is displayed as well.   ', 'img/Broy.jpg', 'color'),
(23, 'Skull', 'img/skull.jpg', 'This inked drawing incorporated the findings of the line study to create the skull like objects on a more dynamic background. ', 'img/Bskull.jpg', 'pattern, ink, skull'),
(24, 'Stairs ', 'img/stairs.jpg', 'This is one of my first charcoal drawings. There is a strong sense of where the light and darkness fell on the canvas. ', 'img/Bstairs.jpg', 'charcoal, black, shadows'),
(25, 'Complex Cardboard Objects', 'img/steps.jpg', 'This is a drawing of more complex objects. As you can see there is a presence of more complex objects in the background as well. ', 'img/Bsteps.jpg', 'pencil'),
(26, 'Table', 'img/table.jpg', 'This is a line drawing of a small table with more boxes on it. ', 'img/Btable.jpg', 'pencil'),
(27, '>', 'img/tri.jpg', 'This piece was inspired by another artist. The concept of simultaneous contrast is displayed as well.   ', 'img/Btri.jpg', 'color, arrows, green, contrast'),
(28, 'Famous', 'img/washington.jpg', 'This charcoal drawing displays a person of importance. ', 'img/Bwashington.jpg', 'charcoal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
