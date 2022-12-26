-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2022 at 03:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schmanag_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_language`
--

CREATE TABLE `c_language` (
  `cid` varchar(30) NOT NULL,
  `ctime` varchar(30) NOT NULL,
  `cplace` varchar(30) NOT NULL,
  `listening` varchar(30) NOT NULL,
  `speaking` varchar(30) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `writing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_language`
--

INSERT INTO `c_language` (`cid`, `ctime`, `cplace`, `listening`, `speaking`, `reading`, `writing`) VALUES
('CTU-0001', '1', 'Yangon', 'Poor', 'Poor', 'Poor', 'Poor'),
('CTU-0002', '2', 'Mandalay', 'Poor', 'Average', 'Good', 'Average'),
('CTU-0003', '1', 'Mandalay', 'Excellent', 'Good', 'Poor', 'Average'),
('CTU-0004', '2', 'Yangon', 'Excellent', 'Excellent', 'Excellent', 'Excellent'),
('CTU-0005', '1', 'Yangon', 'Excellent', 'Poor', 'Good', 'Average'),
('CTU-0006', '2', 'Yangon', 'Good', 'Average', 'Excellent', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `doc_submit`
--

CREATE TABLE `doc_submit` (
  `did` varchar(30) NOT NULL,
  `appform` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dip` varchar(255) NOT NULL,
  `transcript` varchar(255) NOT NULL,
  `recom` varchar(255) NOT NULL,
  `autobio` varchar(255) NOT NULL,
  `studyp` varchar(255) NOT NULL,
  `financial` varchar(255) NOT NULL,
  `doc1` varchar(255) NOT NULL,
  `doc2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_submit`
--

INSERT INTO `doc_submit` (`did`, `appform`, `pass`, `dip`, `transcript`, `recom`, `autobio`, `studyp`, `financial`, `doc1`, `doc2`) VALUES
('DID-0001', '暨大資工宣傳影片-拍攝行程表.pdf', '暨大資工宣傳影片-拍攝行程表.pdf', '暨大資工宣傳影片-拍攝行程表.pdf', '暨大資工宣傳影片-拍攝行程表.pdf', 'Ui design.pdf', 'Ui design.pdf', 'Ui design.pdf', 'Thiri Shwe Zin Tun CV.pdf', '暨大資工宣傳影片-拍攝行程表.pdf', '暨大資工宣傳影片-拍攝行程表.pdf'),
('DID-0002', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf'),
('DID-0003', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf', 'Thiri Shwe Zin Tun CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `eduback`
--

CREATE TABLE `eduback` (
  `eid` varchar(30) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `hlocation` varchar(30) NOT NULL,
  `hdegree` varchar(30) NOT NULL,
  `hdate` varchar(30) NOT NULL,
  `hmajor` varchar(30) NOT NULL,
  `hminor` varchar(30) NOT NULL,
  `hgpa` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `ulocation` varchar(30) NOT NULL,
  `udegree` varchar(30) NOT NULL,
  `udate` varchar(30) NOT NULL,
  `umajor` varchar(30) NOT NULL,
  `uminor` varchar(30) NOT NULL,
  `ugpa` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `mlocation` varchar(30) NOT NULL,
  `mdegree` varchar(30) NOT NULL,
  `mdate` varchar(30) NOT NULL,
  `mmajor` varchar(30) NOT NULL,
  `mminor` varchar(30) NOT NULL,
  `mgpa` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dlocation` varchar(30) NOT NULL,
  `ddegree` varchar(30) NOT NULL,
  `ddate` varchar(30) NOT NULL,
  `dmajor` varchar(30) NOT NULL,
  `dminor` varchar(30) NOT NULL,
  `dgpa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eduback`
--

INSERT INTO `eduback` (`eid`, `hname`, `hlocation`, `hdegree`, `hdate`, `hmajor`, `hminor`, `hgpa`, `uname`, `ulocation`, `udegree`, `udate`, `umajor`, `uminor`, `ugpa`, `mname`, `mlocation`, `mdegree`, `mdate`, `mmajor`, `mminor`, `mgpa`, `dname`, `dlocation`, `ddegree`, `ddate`, `dmajor`, `dminor`, `dgpa`) VALUES
('ETU-0001', 'why', 'a', 'a', '2022-11-07', 'a', 'a', 'a', 'a', 'a', 'a', '2022-11-07', 's', 'a', 'a', 'a', 'a', 'a', '2022-11-14', 's', 'a', 'a', 'a', 'a', 'a', '2022-11-09', 'x', 'a', 'a'),
('ETU-0003', 'fffffffff', 'd', 'd', '2022-11-01', 'd', 'd', '4', 'd', 'd', 'd', '2022-11-05', 'd', 'd', '4', 'd', 'ff', 'd', '2022-11-16', 'd', 'd', '4', 'd', 'd', 'd', '2022-11-09', 'd', 'd', '4'),
('ETU-0004', 'fffffffff', 'fff', 'ff', '2022-12-19', 'fff', 'ff', 'ff', 'ffff', 'fff', 'fff', '2022-12-01', 'fff', 'ff', 'ff', 'ffff', 'ff', 'fff', '2022-12-02', 'fff', 'ff', 'f', 'fff', 'fff', 'fff', '2022-12-03', 'ff', 'ff', 'f'),
('ETU-0005', 'qqq', 'qq', 'q', '2022-11-30', 'q', 'q', 'q', 'qqq', 'q', 'q', '2022-12-02', 'q', 'q', 'q', 'q', 'q', 'q', '2022-12-01', 'q', 'q', 'q', 'q', 'q', 'q', '2022-11-29', 'q', 'q', 'q'),
('ETU-0006', 's', 's', 's', '2022-11-27', 's', 's', 's', 's', 's', 's', '2022-11-28', 's', 's', 's', 's', 's', 's', '2022-11-30', 's', 's', 's', 's', 's', 's', '2022-12-02', 's', 's', 's'),
('ETU-0007', 'r', 'r', 'r', '2022-11-30', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-03', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-01', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-17', 'r', 'r', 'r'),
('ETU-0008', 's', 's', 's', '2022-11-30', 's', 's', 's', 's', 's', 's', '2022-12-02', 's', 's', 's', 's', 's', 's', '2022-12-03', 's', 's', 's', 's', 's', 's', '2022-12-06', 's', 's', 's'),
('ETU-0009', 'r', 'r', 'r', '2022-11-30', 'r', 'r', 'r', 'r', 'r', 'r', '2022-11-29', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-01', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-01', 'r', 'r', 'r'),
('ETU-0010', 'a', 'a', 'a', '2022-11-29', 'a', 'a', 'a', 'a', 'a', 'a', '2022-12-06', 'a', 'a', 'a', 'a', 'a', 'a', '2022-12-08', 'a', 'a', 'a', 'a', 'a', 'a', '2022-12-08', 'a', 'a', 'a'),
('ETU-0011', 'h', 'h', 'h', '2022-11-29', 'h', 'h', 'h', 'h', 'hh', 'h', '2022-11-30', 'h', 'h', 'h', 'h', 'h', 'h', '2022-12-03', 'h', 'h', 'h', 'h', 'h', 'h', '2022-12-04', 'h', 'h', 'h'),
('ETU-0012', 'r', 'r', 'r', '2022-11-29', 'r', 'r', 'r', 'University of Greenwich', 'r', 'r', '2022-11-30', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-02', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-04', 'r', 'r', '2022-12-04'),
('ETU-0013', 'r', 'r', 'r', '2022-12-10', 'r', 'r', 'r', 'r', 'r', 'r', '2022-12-16', 'r', 'r', 'r', 'r', 'r', '', '', '', '', '', 'r', 'r', 'r', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pid` varchar(30) NOT NULL,
  `season` varchar(30) NOT NULL,
  `edulevel` varchar(30) NOT NULL,
  `fcdep` varchar(100) NOT NULL,
  `scdep` varchar(100) NOT NULL,
  `tcdep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`pid`, `season`, `edulevel`, `fcdep`, `scdep`, `tcdep`) VALUES
('PID-0001', 'Spring', 'Master', 'Education', 'AI', 'Bio Chemistry'),
('PID-0002', 'Fall', 'PhD', 'Computer Science and Information Engineering', 'Information Management', 'Education'),
('PID-0003', 'Spring', 'Bachelor', 'Information Management', 'Computer Science and Information Engineering', 'Tourism'),
('PID-0004', 'Spring', 'Master', 'Information Management', 'Education', 'Education'),
('PID-0005', 'Fall', 'PhD', 'Electrical Engineering', 'AI', 'Civil Engineering'),
('PID-0006', 'Fall', 'Master', 'Electrical Engineering', 'Tourism', 'Electrical Engineering'),
('PID-0007', 'Fall', 'Bachelor', 'Electrical Engineering', 'Bio Chemistry', 'AI'),
('PID-0008', 'Spring', 'Master', 'Information Management', 'Tourism', 'Civil Engineering'),
('PID-0009', 'Spring', 'PhD', 'Tourism', 'AI', 'Civil Engineering'),
('PID-0010', 'Fall', 'PhD', 'Education', 'Electrical Engineering', 'Bio Chemistry'),
('PID-0011', 'Fall', 'Master', 'Tourism', 'AI', 'Electrical Engineering'),
('PID-0012', 'Fall', 'Bachelor', 'Electrical Engineering', 'Civil Engineering', ''),
('PID-0013', 'Fall', 'Bachelor', 'Tourism', 'Electrical Engineering', 'AI'),
('PID-0014', 'Fall', 'Bachelor', 'Tourism', 'Civil Engineering', 'AI'),
('PID-0015', 'Spring', 'Bachelor', 'Civil Engineering', 'Education', 'Bio Chemistry'),
('PID-0016', 'Fall', 'Master', 'Information Management', 'Education', 'Education'),
('PID-0017', 'Spring', 'Master', 'Electrical Engineering', 'Education', 'AI'),
('PID-0018', 'Spring', 'Master', 'Tourism', 'Electrical Engineering', 'AI'),
('PID-0019', 'Spring', 'Master', 'Tourism', 'AI', 'Education'),
('PID-0020', 'Spring', 'Master', 'Information Management', 'Tourism', 'Electrical Engineering'),
('PID-0021', 'Fall', 'Bachelor', 'Information Management', 'Information Management', 'Tourism'),
('PID-0022', 'Fall', 'PhD', 'Education', 'Civil Engineering', 'AI'),
('PID-0023', 'Fall', 'PhD', 'Education', 'Civil Engineering', 'AI'),
('PID-0024', 'Fall', 'Bachelor', 'Education', 'Electrical Engineering', 'AI'),
('PID-0025', 'Spring', 'PhD', 'Information Management', 'Civil Engineering', 'Bio Chemistry'),
('PID-0026', 'Fall', 'Master', 'Information Management', 'Tourism', 'AI'),
('PID-0027', 'Spring', 'Master', 'Civil Engineering', 'Education', 'Computer Science and Information Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `slid` varchar(30) NOT NULL,
  `pmoney` varchar(30) NOT NULL,
  `fmoney` varchar(30) NOT NULL,
  `smoney` varchar(30) NOT NULL,
  `schscholar` varchar(255) NOT NULL,
  `health_condi` varchar(30) NOT NULL,
  `health_problem` varchar(30) NOT NULL,
  `scholar_apply` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`slid`, `pmoney`, `fmoney`, `smoney`, `schscholar`, `health_condi`, `health_problem`, `scholar_apply`) VALUES
('SLID-0002', 'US$0 - US$99', 'US$7100 - US$8000', 'US$2100 - US$3000', 'MOE (Ministry of Education)', 'Poor', 'no', 'Yes'),
('SLID-0003', 'US$4100 - US$5000', 'US$2100 - US$3000', 'US$4100 - US$5000', 'From School', 'Good', 'no', 'No'),
('SLID-0004', 'US$8100 - US$9000', 'US$9100 - US$10000', 'US$6100 - US$7000', 'MOE (Ministry of Education)', 'Poor', 'yes', 'Yes'),
('SLID-0005', 'US$100 - US$1000', 'US$1100 - US$2000', 'US$2100 - US$3000', 'TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)', 'Average', 'no', 'Yes'),
('SLID-0006', 'US$100 - US$1000', 'US$1100 - US$2000', 'US$2100 - US$3000', 'TaiwanICDF (International Higher Education Scholarship Programs of TaiwanlCDF)', 'Poor', 'no', 'Yes'),
('SLID-0007', 'US$2100 - US$3000', 'US$1100 - US$2000', 'US$2100 - US$3000', 'MOE (Ministry of Education)', 'Poor', 'no', 'No'),
('SLID-0008', 'US$3100 - US$4000', 'US$8100 - US$9000', 'US$7100 - US$8000', 'MOE (Ministry of Education)', 'Good', '-', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` varchar(30) NOT NULL,
  `staffname` varchar(40) NOT NULL,
  `stafftypeid` varchar(30) NOT NULL,
  `staffemail` varchar(40) NOT NULL,
  `staffpassword` varchar(40) NOT NULL,
  `staffaddress` varchar(255) NOT NULL,
  `staffphnumber` varchar(30) NOT NULL,
  `staffimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `stafftypeid`, `staffemail`, `staffpassword`, `staffaddress`, `staffphnumber`, `staffimage`) VALUES
('SID-0001', 'Lain', 'STID-0001', 'lain@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No.26 Taiwan', '0912345678', 'staffimages/_IMG_5945.JPG'),
('SID-0003', 'b', 'STID-0003', 'b@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Yangon', '09952009192', 'staffimages/_IMG_7356.JPG'),
('SID-0004', 'img', 'STID-0002', 'img1@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Yangon', '09952009192', 'staffimages/_1.jpg'),
('SID-0005', 'dd', 'STID-0002', 'cc@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Location', '09123456789', 'staffimages/_images.jpeg'),
('SID-0006', 'ddw', 'STID-0001', 'ddw@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No.111 Nantou', '093652362512', 'staffimages/_IMG_6055.JPG'),
('SID-0007', 'Rose', 'STID-0003', 'rose@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'No.112 Daxue R.d', '09123456789', 'staffimages/_IMG_7275.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `stafftype`
--

CREATE TABLE `stafftype` (
  `stafftypeid` varchar(30) NOT NULL,
  `stafftype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafftype`
--

INSERT INTO `stafftype` (`stafftypeid`, `stafftype`) VALUES
('STID-0001', 'Admin'),
('STID-0002', 'Teacher'),
('STID-0003', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `sid` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `spassw` varchar(50) NOT NULL,
  `stuid` varchar(30) DEFAULT NULL,
  `eid` varchar(30) DEFAULT NULL,
  `pid` varchar(30) DEFAULT NULL,
  `cid` varchar(30) DEFAULT NULL,
  `slid` varchar(30) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`sid`, `sname`, `semail`, `spassw`, `stuid`, `eid`, `pid`, `cid`, `slid`, `did`) VALUES
('SID-0001', 'thiri', 't@email.com', '698d51a19d8a121ce581499d7b701668', 'STU-0020', 'ETU-0011', 'PID-0021', 'CTU-0003', 'SLID-0004', 'DID-0002'),
('SID-0002', 'ww', 'ww@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'STU-0011', 'ETU-0012', 'PID-0027', 'CTU-0004', 'SLID-0006', 'DID-0003'),
('SID-0003', 'tinzar', 'tinzar@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'STU-0021', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` varchar(30) NOT NULL,
  `stuCname` varchar(30) NOT NULL,
  `stuEname` varchar(30) NOT NULL,
  `passno` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `marital` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(11) NOT NULL,
  `lename` varchar(30) NOT NULL,
  `lerelation` varchar(30) NOT NULL,
  `leaddress` varchar(30) NOT NULL,
  `lephno` varchar(30) NOT NULL,
  `ctname` varchar(30) NOT NULL,
  `ctrelation` varchar(30) NOT NULL,
  `ctaddress` varchar(30) NOT NULL,
  `ctphno` varchar(30) NOT NULL,
  `roc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `stuCname`, `stuEname`, `passno`, `nationality`, `sex`, `marital`, `dob`, `address`, `email`, `phno`, `lename`, `lerelation`, `leaddress`, `lephno`, `ctname`, `ctrelation`, `ctaddress`, `ctphno`, `roc`) VALUES
('STU-0001', '谢宝玲', 'Thiri', 'MF341343', 'Myanmar', 'Other', 'Single', '2022-11-21', 'I dont know', 'Myanmar', '09342345433', 'lain', 'mother', 'Yangon', '09324523532', 'exxx', 'friend', 'Yangon', '093254535435', 'Yes'),
('STU-0002', 'Second', 'Second', 'MF11111', 'Taiwan', 'Female', 'Single', '2022-12-12', 'Taiwan', 'a@gmail.com', '09123456789', 'Flower', 'Mother', 'America', '09324523532', 'Tree', 'Grandfather', 'Yangon', '09888888888', 'No'),
('STU-0003', 'Rose', 'Rose', 'MF12345', 'Taiwan', 'Male', 'Married', '2022-11-28', 'Yangon', 'b@gmail.com', '0912345678', 'Flower', 'Mother', 'America', '09324523532', 'Tree', 'Grandfather', 'Yangon', '093254535435', 'Yes'),
('STU-0004', 'test', 'test', 'MF000000', 'Vietnam', 'Other', 'Married', '2022-12-03', 'Vietname', 'test@email.com', '0912345678', 'testtest', 'Mother', 'UK', '09324523532', 'test_again', 'Father', 'Rusia', '093254535435', 'Yes'),
('STU-0005', 'ok', 'ok', 'ME000000', 'Taiwan', 'Female', 'Married', '2022-12-03', 'Canada', 'ok@email.com', '0912345678', 'Flower', 'Mother', 'America', '09324523532', 'evan', 'Father', 'Yangon', '09888888888', 'Yes'),
('STU-0006', 'a', 'a', 'ME000000', 'Taiwan', 'Female', 'Single', '2022-11-10', 'Mandalay', 'a1@email.com', '0912345678', 'b', 'Aunt', 'America', '0977777777', 'c', 'Uncle', 'Yangon', '09888888888', 'Yes'),
('STU-0007', '谢', 'x', 'ME000000', 'Taiwan', 'Male', 'Single', '2022-12-14', 'No. 126C Bahan', 'x@email.com', '0912345678', 's', 'Aunt', 'UK', '09111111111', 'f', 'Father', 'Rusia', '09888754235', 'No'),
('STU-0008', '陈', 'chen', 'MN000000', 'Indonesia', 'Male', 'Single', '2022-12-01', 'Yangon', 'as@email.com', '09342345433', 'as', 'Aunt', 'America', '0977777777', 'asd', 'Grandfather', 'Yangon', '09888888888', 'No'),
('STU-0009', '谢', 'e', 'MF341343', 'Taiwan', 'Other', 'Single', '2022-12-01', 'Yangon', 'ee@email.com', '0912345678', 'b', 'Mother', 'America', '0977777777', 'e', 'Father', 'Yangon', '093254535435', 'Yes'),
('STU-0010', 'we', 'we', 'ME000000', 'Taiwan', 'Female', 'Single', '2022-12-02', 'Yangon', 'we@email.com', '09123456789', 'wer', 'Mother', 'Vietnam', '0977777777', 'wert', 'Grandfather', 'France', '099999999', 'No'),
('STU-0011', 'asdf', 'What', 'ME000000', 'Taiwan', 'Female', 'Single', '2022-11-30', 'Mandalay', 'ww@email.com', '0912345678', 'Winnie', 'Mother', 'Vietnam', '0900000000', 'Joseph', 'Father', 'France', '09333333333', 'No'),
('STU-0012', '谢', 'ok', 'ME000000', 'Taiwan', 'Male', 'Single', '2022-12-14', 'Taiwan', 't@email.com', '0912345678', 'b', 'Mother', 'Yangon', '0977777777', 'Tree', 'Grandfather', 'Yangon', '093254535435', 'Yes'),
('STU-0013', '谢', 'test', 'MF11111', 'Taiwan', 'Male', 'Single', '2022-12-09', 'Taiwan', 'a@gmail.com', '0912345678', 'q', 'Mother', 'Vietnam', '0977777777', 'c', 'Father', 'Yangon', '09333333333', 'Yes'),
('STU-0014', '谢宝玲', 'Thiri', 'MF000000', 'Indonesia', 'Male', 'Single', '2022-12-07', 'Taiwan', 'lain@email.com', '0912345678', 'lain', 'mother', 'Yangon', '09111111111', 'c', 'Father', 'Yangon', '09333333333', 'Yes'),
('STU-0015', '谢宝玲', 'Tinzar', 'MF000000', 'Taiwan', 'Female', 'Married', '2022-12-09', 'Yangon', 'tinzar@gmail.com', '0912345678', 'Flower', 'Aunt', 'Yangon', '0900000000', 'Tree', 'Uncle', 'Rusia', '09888754235', 'No'),
('STU-0016', '谢宝玲', 'Tinzar', 'MF000000', 'Taiwan', 'Female', 'Married', '2022-12-09', 'Yangon', 'tinzar@gmail.com', '0912345678', 'Flower', 'Aunt', 'Yangon', '0900000000', 'Tree', 'Uncle', 'Rusia', '09888754235', 'No'),
('STU-0017', '谢宝玲', 'Tinzar', 'MN000000', 'Taiwan', 'Male', 'Single', '2022-12-01', 'Mandalay', 'tinzar@gmail.com', '09123456789', 'lain', 'mother', 'Vietnam', '0977777777', 'evan', 'Grandfather', 'France', '09333333333', 'Yes'),
('STU-0018', '谢宝玲', 'Tinzar', 'MN000000', 'Taiwan', 'Male', 'Single', '2022-12-01', 'Mandalay', 'tinzar@gmail.com', '09123456789', 'lain', 'mother', 'Vietnam', '0977777777', 'evan', 'Grandfather', 'France', '09333333333', 'Yes'),
('STU-0019', '谢宝玲', 'Tinzar', 'MN000000', 'Taiwan', 'Male', 'Single', '2022-12-01', 'Mandalay', 'tinzar@gmail.com', '09123456789', 'lain', 'mother', 'Vietnam', '0977777777', 'evan', 'Grandfather', 'France', '09333333333', 'Yes'),
('STU-0020', '谢宝玲', 'Tinzar', 'MF000000', 'Taiwan', 'Female', 'Single', '2022-12-02', 'Yangon', 'kun@gmail.com', '0912345678', 'testtest', 'father', 'UK', '09111111111', 'test_again', 'friend', 'Taiwan', '09888754235', 'Yes'),
('STU-0021', '谢宝玲', 'Tinzar', 'MN000000', 'Myanmar', 'Male', 'Married', '2022-12-03', 'Taiwan', 'a@gmail.com', '0912345678', 'Tin Tin', 'Husband', 'Italy', '09111111111', 'Tun Tun', 'Wife', 'France', '09333333333', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_language`
--
ALTER TABLE `c_language`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doc_submit`
--
ALTER TABLE `doc_submit`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `eduback`
--
ALTER TABLE `eduback`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`slid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `stafftype`
--
ALTER TABLE `stafftype`
  ADD PRIMARY KEY (`stafftypeid`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
