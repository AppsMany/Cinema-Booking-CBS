-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 05:53 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `cinemamovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieName` varchar(150) NOT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(50) NOT NULL,
  `bookingDate` varchar(30) NOT NULL,
  `bookingTime` varchar(39) NOT NULL,
  `bookingFName` varchar(50) NOT NULL,
  `bookingLName` varchar(150) NOT NULL,
  `bookingPNumber` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(0, 'It Chapter Two (2019)', 'main-hall', '3d', '14-3', '18-00', 'plan', 'planned', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'It Chapter Two (2019)', 'Horror, Suspense/Thriller ', 249, '2019-10-29', 'Andy Muschietti ', 'Bill SkarsgÃ¥rd, Sophia Lillis, Jessica Chastain, James McAvoy, Jay Ryan, Bill Hader, Finn Wolfhard, Andy Muschietti, Gary Dauberman '),
(2, 'Good Boys (2019)', 'Comedy ', 135, '2019-10-03', 'GENE STUPNITSKY', 'Jacob Tremblay, Brady Noon, Keith L. Williams, Molly Gordon, Midori Francis, Will Forte, Millie Davis, Lil Rel Howery, Enid-Raye Adams'),
(4, 'Joker (2019', 'Drama, Suspense/Thriller', 123, '2019-10-10', 'Todd Phillips ', ' Joaquin Phoenix, Robert De Niro, Zazie Beetz, Brian Tyree Henry, Bill Camp, Frances Conroy, Brett Cullen, Glenn Fleshler, Douglas Hodge '),
(5, 'Rambo: Last Blood', ' Action/Adventure ', 128, '2019-10-11', 'Adrian Grunberg ', 'Jacob Tremblay, Brady Noon, Keith L. Williams, Molly Gordon, Midori Francis, Will Forte, Millie Davis, Lil Rel Howery, Enid-Raye Adams'),
(6, 'HUSTLERS', ' Action/Adventure ', 123, '2019-10-21', 'Lorene Scafaria ', 'Jennifer Lopez, Constance Wu, Cardi B, Julia Stiles, Keke Palmer, Lili Reinhart, Lizzo, Madeline Brewer, Mette Towley ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
