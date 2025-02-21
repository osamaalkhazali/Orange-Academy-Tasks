-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2025 at 12:57 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `add_student`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_student` (IN `fName` VARCHAR(255), IN `lName` VARCHAR(255), IN `email` VARCHAR(191), IN `dob` DATE, IN `gender` ENUM('Male','Female'), IN `major` VARCHAR(255), IN `enrollment_year` YEAR)   BEGIN
    INSERT INTO students (first_name, last_name, email, date_of_birth , gender , major , enrollment_year ) VALUES (fName, lName , email , dob ,gender , major , enrollment_year );
END$$

--
-- Functions
--
DROP FUNCTION IF EXISTS `calculate_age`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `calculate_age` (`dob` DATE) RETURNS INT  BEGIN
    RETURN TIMESTAMPDIFF(YEAR, dob, CURDATE());
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `course_code` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `credits` int NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_code` (`course_code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `credits`, `department`) VALUES
(1, 'Introduction to Programming', 'CS101', 3, 'Computer Science'),
(2, 'Calculus I', 'MATH101', 4, 'Mathematics'),
(3, 'Physics for Engineers', 'PHYS101', 4, 'Physics'),
(4, 'Biology Basics', 'BIO101', 3, 'Biology'),
(5, 'General Chemistry', 'CHEM101', 3, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `course_assignments`
--

DROP TABLE IF EXISTS `course_assignments`;
CREATE TABLE IF NOT EXISTS `course_assignments` (
  `assignment_id` int NOT NULL AUTO_INCREMENT,
  `instructor_id` int NOT NULL,
  `course_id` int NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `year` year NOT NULL,
  PRIMARY KEY (`assignment_id`),
  KEY `instructor_id` (`instructor_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_assignments`
--

INSERT INTO `course_assignments` (`assignment_id`, `instructor_id`, `course_id`, `semester`, `year`) VALUES
(1, 1, 1, 'Fall', '2023'),
(2, 2, 2, 'Fall', '2023'),
(3, 3, 3, 'Fall', '2023'),
(4, 4, 4, 'Fall', '2023'),
(5, 5, 5, 'Fall', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

DROP TABLE IF EXISTS `enrollments`;
CREATE TABLE IF NOT EXISTS `enrollments` (
  `enrollment_id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `grade` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `student_id` (`student_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `student_id`, `course_id`, `grade`) VALUES
(1, 1, 1, 'A'),
(2, 1, 2, 'B'),
(3, 2, 2, 'A'),
(4, 2, 3, 'B+'),
(5, 3, 3, 'A-'),
(6, 3, 4, 'B'),
(7, 4, 4, 'A'),
(8, 4, 5, 'C+'),
(9, 5, 5, 'B'),
(10, 5, 1, 'A-'),
(11, 6, 1, 'A'),
(12, 6, 2, 'B+'),
(13, 7, 2, 'A-'),
(14, 7, 3, 'B'),
(15, 8, 3, 'A'),
(16, 8, 4, 'B+'),
(17, 9, 4, 'A-'),
(18, 9, 5, 'B'),
(19, 10, 5, 'A'),
(20, 10, 1, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `hire_date` date NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`instructor_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `first_name`, `last_name`, `email`, `hire_date`, `department`) VALUES
(1, 'Michael', 'Scott', 'michael.scott@example.com', '2015-06-01', 'Computer Science'),
(2, 'Pam', 'Beesly', 'pam.beesly@example.com', '2016-07-15', 'Mathematics'),
(3, 'Jim', 'Halpert', 'jim.halpert@example.com', '2017-08-20', 'Physics'),
(4, 'Dwight', 'Schrute', 'dwight.schrute@example.com', '2018-09-25', 'Biology'),
(5, 'Angela', 'Martin', 'angela.martin@example.com', '2019-10-30', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enrollment_year` year DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `email`, `date_of_birth`, `gender`, `major`, `enrollment_year`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '2000-05-15', 'Male', 'Computer Science', '2020'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '2001-02-20', 'Female', 'Mathematics', '2021'),
(3, 'Alice', 'Johnson', 'alice.johnson@example.com', '1999-11-10', 'Female', 'Physics', '2019'),
(4, 'Bob', 'Brown', 'bob.brown@example.com', '2000-08-25', 'Male', 'Biology', '2020'),
(5, 'Charlie', 'Davis', 'charlie.davis@example.com', '2001-03-30', 'Male', 'Chemistry', '2021'),
(6, 'Diana', 'Evans', 'diana.evans@example.com', '2000-07-12', 'Female', 'Computer Science', '2020'),
(7, 'Ethan', 'Harris', 'ethan.harris@example.com', '2001-01-05', 'Male', 'Mathematics', '2021'),
(8, 'Fiona', 'Clark', 'fiona.clark@example.com', '1999-12-18', 'Female', 'Physics', '2019'),
(9, 'George', 'Lewis', 'george.lewis@example.com', '2000-09-22', 'Male', 'Biology', '2020'),
(10, 'Hannah', 'Walker', 'hannah.walker@example.com', '2001-04-14', 'Female', 'Chemistry', '2021'),
(11, 'Osama', 'Khazali', 'osama@gmail.com', '1997-05-16', 'Male', 'Engineering', '2025'),
(12, 'Layan', 'Alem', 'Layan@gmail.com', '1997-05-16', 'Female', 'Engineering', '2025'),
(13, 'Omar', 'Qudah', 'Omar@gmail.com', '1997-05-16', 'Male', 'Engineering', '2025');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
