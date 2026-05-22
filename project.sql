-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 04:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'Fouzia@iub.edu.pk', '1234'),
(2, 'Fouzia@iub.edu.pk', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'html'),
(3, 'JAVASCRIPT'),
(4, 'css'),
(5, 'O.S'),
(6, 'S.E'),
(7, 'oop'),
(8, 'AI'),
(9, 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(168) NOT NULL,
  `ans1` varchar(122) NOT NULL,
  `ans2` varchar(133) NOT NULL,
  `ans3` varchar(144) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'Hypertext Preprossor', 'Private home page', 'Private Hypertext Preprossor', 0, 1),
(2, 'How do you write \"Hello World\" in PHP', 'echo \"Hello World\";', 'document.write(\"Hello World\");', '\"Hello World\";', 1, 1),
(3, 'All variables in PHP start with which symbol?', '&', '!', '$', 2, 1),
(4, 'What is the correct way to end a PHP statement?', ';', '%', '\"\"', 0, 1),
(5, 'How do you get information from a form that is submitted using the \"get\" method?', 'Request.QueryString', '$GET[];', 'Request.Query', 1, 1),
(6, 'When using the POST method, variables are displayed in the URL:', 'both', 'false', 'true', 2, 1),
(7, 'In PHP you can use both single quotes ( \' \' ) and double quotes ( \" \" ) for strings:', 'false', 'true', 'both', 1, 1),
(8, 'Include files must have the file extension \".inc\"', 'false', 'true', 'both', 1, 1),
(9, 'What is the correct way to create a function in PHP?', 'function myfunction()', 'new_function myfunction()', 'create myfunction', 0, 1),
(10, 'Which superglobal variable holds information about headers, paths, and script locations?', '$_SERVER', '$_GLOBAL', '$_SESSION', 2, 1),
(11, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Home Tool Markup Language', 'Hyperlinks and Markup Language', 0, 2),
(12, 'Who is making the Web standards?', 'Google', 'Microsoft', 'The World Wide Web Consortium', 2, 2),
(13, 'Inline elements are normally displayed without starting a new line.', 'false', 'true', 'both', 1, 2),
(14, 'An iframe is used to display a web page within a web page.', 'there is no thing as an iframe', 'true', 'false', 0, 2),
(15, 'HTML comments start with <!-- and end with -->', 'true', 'false', 'non of these', 1, 2),
(16, 'Block elements are normally displayed without starting a new line.', 'true', 'false', 'non of these', 0, 2),
(17, 'Which character is used to indicate an end tag?', '*', '^', '/', 2, 2),
(18, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'alt', 'src', 'img', 0, 2),
(19, 'In HTML, you can embed SVG elements directly into an HTML page.', 'true', 'false', 'non of these', 1, 2),
(20, 'In HTML, onblur and onfocus are:', 'event attributes', 'style attributes', 'html attributes', 1, 2),
(21, 'How to write an IF statement for executing some code if \"i\" is NOT equal to 5?', 'if(<>5)', 'if i=! 5 then', 'if(i=!5)', 1, 3),
(22, 'What is the correct JavaScript syntax to change the content of the HTML element below?\r\n\r\n<p id=\"demo\">This is a demonstration.</p>', 'document.getElementById(\"demo\").innerHTML=\"Hello World!\";', 'document.getElementBy(\"p\").innerHTML=\"Hello World!\";', 'getElementById(\"demo\").innerHTML=\"Hello World!\";', 0, 3),
(23, 'Where is the correct place to insert a JavaScript?', 'The <body> section', 'The <head> section', 'both are correct', 2, 3),
(26, 'How do you call a function named \"myFunction\"?', 'call function myfunction()', 'myfunction()', 'function myfunction()', 1, 3),
(31, ' I/O interrupt-driven is more efficient than.', 'I/O Modules', 'I/O Devices', 'Programmed I/O', 2, 5),
(32, 'Error detection and response clears the', 'Program', 'Data', 'Error Condition', 2, 5),
(33, 'Program execution services are used to', 'Control Program', 'Delete Program', 'Execute Program', 2, 5),
(34, 'Access control in operating system is just another name for', 'Compartmentalization of resources', 'Data manipulation', 'Data and Resources Access', 0, 5),
(35, 'Operating system provides System access function to protect', 'I/O Modules', 'Data and Resources', 'Computer', 1, 5),
(36, 'Application developers have no direct access to system calls but they can access through', 'application programming interface (API).', 'Pool blocks', 'Computer Interface', 0, 5),
(37, 'Interrupt table of pointers having addresses for each interrupt is located at', 'Main memory', 'low memory', 'Cache memory', 1, 5),
(38, 'Example of open source operating system is', 'UNIX', 'Linux', 'both a and b', 2, 5),
(39, 'Main memory of computer system is known to be', 'non volatile', 'volatile', 'reserved', 1, 5),
(40, 'Controller of computer system transfers data from device to', 'buffers', 'cache', 'registers', 0, 5),
(41, 'Structured design methodology is an approach to design that adheres to rules based on principles such as:', 'Top-down refinement ', 'Bottom-up design ', 'Data flow analysis ', 2, 6),
(42, 'Software compatibility means:', 'Being able to use existing programs with the new program ', 'Being able to connect machines together ', 'Being able to transfer data between the old and new machines ', 0, 6),
(43, 'User documentation consists of:', 'Flow diagrams ', 'Training manuals, operations manuals, and reference manuals ', 'All of these ', 1, 6),
(44, ' The document listing all procedures and regulations that generally govern an organization is the:', 'Personal policy book ', 'Administrative policy manual', 'Organization manual', 1, 6),
(45, 'A statement by statement description of a procedure is detailed in a:', 'Written narrative ', 'Procedure log ', 'Record layout ', 0, 6),
(46, 'On the feasibility committee, department representatives serve as:', 'Liaison to their departments ', 'Direct users of the new system', 'Ready source of information ', 2, 6),
(47, 'Which of the following tools is (are) used in modelling the new system?', 'Decision Table ', 'Data Flow Diagrams', 'All of these ', 2, 6),
(48, 'Which of the following is generally not contained in a feasibility document?', 'Data Dictionary ', 'Pseudo codes ', 'Decision tables ', 0, 6),
(49, 'Efficiency in a software product does not include ____________________?', 'responsiveness', 'licensing', 'memory utilization', 1, 6),
(50, 'In terms of Issues related to professional responsibility____________________?', 'Confidentiality', 'Intellectual property rights', 'Both Confidentiality &amp; Intellectual property rights', 0, 6),
(51, 'Why so JavaScript and Java have similar name?', 'JavaScript is a stripped-down version of Java', 'JavaScript\'s syntax is loosely based on Java\'s', 'They both originated on the island of Java', 1, 3),
(52, ' ______ JavaScript is also called client-side JavaScript.', 'Microsoft', 'Navigator', 'LiveWire', 1, 3),
(53, '  __________ JavaScript is also called server-side JavaScript.', 'Microsoft', 'Navigator', 'LiveWire', 2, 3),
(54, 'What are variables used for in JavaScript Programs?', 'Storing numbers, dates, or other values', 'Varying randomly', 'Causing high-school algebra flashbacks', 0, 3),
(55, ' _____ JavaScript statements embedded in an HTML page can respond to user events such as mouse-clicks, form input, and page navigation.', ' Server-side', ' Client-side', 'Local', 1, 3),
(56, ' What should appear at the very end of your JavaScript? The &lt;script LANGUAGE=&quot;JavaScript&quot;&gt;tag', 'The &lt;script&gt;', 'The END statement', 'The &lt;/script&gt;', 0, 3),
(57, 'CSS padding property is used for?', 'Space', 'Border', 'Margin', 0, 4),
(58, 'A small piece of program that can add interactivity to your website is called as', 'Meta', 'Script', 'Marquee', 1, 4),
(59, 'For checking a regular expression in input fields of HTML forms which attribute is used?', '&lt;checker&gt;', '&lt;valid input&gt;', '&lt;pattern&gt;', 0, 4),
(60, ' Tags that are used to tell meaning of enclosed text (e.g. &lt;strong&gt; &lt;/strong&gt; ) these type of tags are called', 'Similar tags', 'Defined tags', 'Logical tags', 2, 4),
(61, 'If we want define style for an unique element, then which css selector will we use ?', 'id', 'text', 'class', 0, 4),
(62, 'If we want to show an Arrow as cursor, then which value we will use ?', 'arrow', 'default', 'pointer', 1, 4),
(63, 'If we want to use a nice looking green dotted border around an image, which css property will we use?', 'border-color', 'border-decoration', 'border-style', 2, 4),
(64, 'Which of the following properties will we use to display border around a cell without any content ?', 'empty-cell', 'blank-cell', 'noncontent-cell', 0, 4),
(65, 'What should be the table width, so that the width of a table adjust to the current width of the browser window?', '640 pixels', '100%', '1024 px', 2, 4),
(66, 'Which element is used in the &lt;HEAD&gt; section on an HTML / XHTMLpage, if we want to use an external style sheet file to decorate the page ?', '&lt;css&gt;', '&lt;src&gt;', '&lt;link&gt;', 0, 4),
(67, 'Which is private member functions access scope?', 'Member functions which can only be used within the class', 'Member functions which can used outside the class', 'Member functions which are accessible in derived class', 0, 7),
(68, 'Which among the following is true?', 'The private members can&rsquo;t be accessed by public members of the class', 'The private members can be accessed by public members of the class', 'The private members can be accessed only by the private members of the class', 1, 7),
(69, 'Which member can never be accessed by inherited classes?', 'Private member function', ' Public member function', ' Protected member function', 0, 7),
(70, 'Which syntax among the following shows that a member is private in a class?', 'private: functionName(parameters)', 'private(functionName(parameters))', 'private functionName(parameters)', 2, 7),
(71, ' If private member functions are to be declared in C++ then _____________', 'private:', 'private(private member list)', 'private :- &lt;private members&gt;', 0, 7),
(72, ' How many private member functions are allowed in a class ?', 'Only 1', 'Only 255', 'As many as required', 2, 7),
(73, 'How to access a private member function of a class?', 'Using object of class', 'Using class address', 'Using object pointer', 1, 7),
(74, 'Private member functions ____________', 'Can&rsquo;t be called from enclosing class', 'Can be accessed from enclosing class', 'Can be accessed only if nested class is private', 0, 7),
(75, 'Which function among the following can&rsquo;t be accessed outside the class in java in same package?', 'public void show()', 'void show()', ' protected show()', 2, 7),
(76, 'Which error will be produced if private members are accessed?', 'Can&rsquo;t access private message', 'Code unreachable', 'Core dumped', 0, 7),
(77, 'AI stand for?', 'Artificial Intelligence', 'Artificial Intellect', 'Artificial Interface', 0, 8),
(78, 'Which instruments are used for perceiving and acting upon the environment?', ' Sensors and Actuators', 'Sensors', 'Perceiver', 0, 8),
(79, '', '', '', '', 0, 0),
(80, 'Which depends on the percepts and actions available to the agent?', 'Agent', 'Sensor', 'Design problem', 2, 8),
(81, 'C++ language was developed by ___.', 'Dennis Rechard', 'Dennis M. Ritchie', 'Bjarne Stroustrup', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(39) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Fouzia', 'fouzia@gmail.com', '1234', '31234567899');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
