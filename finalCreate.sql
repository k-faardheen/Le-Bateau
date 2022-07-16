--registration
CREATE TABLE `registration` (
  `registrationId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `role` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `streetName` varchar(50) NOT NULL,
  `postalCode` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`registrationId`))

  --student 
CREATE TABLE `student` (
  `studentId` int(11) NOT NULL AUTO_INCREMENT,
  `registrationId` int(11) NOT NULL,
  PRIMARY KEY (`studentId`)
)

  --contributor
  CREATE TABLE `contributor` (
  `contributorId` int(11) NOT NULL AUTO_INCREMENT,
  `registrationId` int(11) NOT NULL,
  PRIMARY KEY (`contributorId`)
) 
-- insert into contributor
INSERT INTO `contributor` (`contributorId`, `registrationId`) VALUES
(1, 4),
(4, 0);

--enrollment
CREATE TABLE `enrollment` (
 `enrollId` int(11) NOT NULL AUTO_INCREMENT,
 `courseId` int(11) NOT NULL,
 `studentId` int(11) NOT NULL,
 `dateEnrolled` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 PRIMARY KEY (`enrollId`),
 KEY `course_fk` (`courseId`),
 KEY `student_fk` (`studentId`),
 CONSTRAINT `course_fk` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`),
 CONSTRAINT `student_fk` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`)
) 
---------------------------------------------wally db---------------------------------------------
--course 
course	CREATE TABLE `course` (
 `courseId` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(20) NOT NULL,
 PRIMARY KEY (`courseId`),
)

INSERT INTO `course` (`courseId`, `courseName`, `description`, `image`) VALUES
(1, 'html', '', ''),
(2, 'go', '', ''),
(3, 'dfd', '', 'user.png'),
(4, 'jquery', '<p><strong>Intro</strong></p>\r\n<p>This is a test</p>', 'download.jpg');

--postcontent
CREATE TABLE `postcontent` (
  `postId` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `course` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`postId`)
)

INSERT INTO `postcontent` (`postId`, `author`, `title`, `image`, `course`, `rating`, `content`) VALUES
(20, 'mun', 'test2', 'learning.png', 'html', 0, '<p>test 33</p>');



