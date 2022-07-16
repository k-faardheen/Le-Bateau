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

--course 
course	CREATE TABLE `course` (
 `courseId` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(20) NOT NULL,
 PRIMARY KEY (`courseId`)
)

