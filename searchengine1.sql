-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 06:57 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eee`
--

-- --------------------------------------------------------

--
-- Table structure for table `searchengine`
--

CREATE TABLE IF NOT EXISTS `searchengine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `searchengine`
--

INSERT INTO `searchengine` (`id`, `title`, `description`, `url`, `keywords`) VALUES
(1, 'softwares', 'this is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\n', '\\\\192.168.22.199\\soft', 'notepad++ coral draw turbo c++ software office2003 php oracle sqlserver ide-netbeans8.1 wamp apache tomcat32-64 kruti dreamweaver eclipse emulator\r\nanroidstudio cyberoam nero'),
(2, 'adobe software', 'All the adobe software planet\r\nThis is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\n', '\\\\192.168.22.199\\soft\\Adobe', '\r\nadobe adbobereader reader adobepagemaker photoshop flashplayer'),
(3, 'math software', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\ndifferent math software\r\n', '\\\\192.168.22.199\\soft\\Math Soft', 'math softwaremath software sigma stat wolf'),
(4, 'Browser', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\ndifferent Browsers\r\nmozilla \r\nfirefox\r\nopera\r\nchrome', '\\\\192.168.22.199\\soft\\BROWSERS', 'mozilla firefox opera chrome browser'),
(5, 'biometrics software', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft', '\\\\192.168.22.199\\soft\\Biometric software', 'software biometrics'),
(6, 'UtilitySoftware', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\nall genral utility software are present here\r\nmoviemaker mp4cutter mp3cutter usbshow datadoctor recovery pendrive cyberoam fileformat convertor software etc', '\\\\192.168.22.199\\soft\\utility', 'moviemaker mp4cutter mp3cutter usbshow datadoctor recovery pendrive cyberoam fileformat convertor software'),
(7, 'fonts', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\ndifferent fonts \r\nhindi fonts kruti fonts etc.', '\\\\192.168.22.199\\soft\\Fonts', 'fonts hindi kruti serfi'),
(8, 'All drivers', 'This is run accescible id address \r\nplease copy the url in your run command box\r\nusername =soft\r\npassword=soft\r\ndifferent drivers \r\n', '\\\\192.168.22.199\\soft\\all drvers', 'drivers software realtek printer media lan sound chipset bluetooth'),
(9, 'library', 'Elibrary\r\ndifferent question papers of branches', '\r\n\r\nhttps://192.168.3.31:9876/jspui/', 'library question paper exam'),
(10, 'antivirus server', 'This is run accescible id address ', '//192.168.1.3 ', 'antivirus software'),
(11, 'login', ' userlogin', 'http://192.168.1.51:8090/httpclient.html', 'login student entranet'),
(12, 'oracleserver', 'This is run accescible id address ', '\\\\192.168.14.170', 'server '),
(13, 'labaccess', 'This is run accescible id address \r\nconstrain-active till 7 pm', '\\\\192.168.3.31', 'software');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
