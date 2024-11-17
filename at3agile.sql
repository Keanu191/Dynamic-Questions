-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 03:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at3agile`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Question_ID` int(11) NOT NULL,
  `Question` varchar(256) NOT NULL,
  `Description` varchar(1024) NOT NULL,
  `Answer` varchar(4096) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question_ID`, `Question`, `Description`, `Answer`) VALUES
(1, 'Question 1\r\nOrganisational Requirements ', 'A good team leader leads by example. Describe the professional behaviours that you would role model as a leader for your team. ', 'Methods: Verbal communication, Non-verbal communication (body language), Written communication, Listening, Visual communication.  \nStyle used with the team: Assertive (achieves goals without hurting others, emotionally expressive, protects own rights and rights of others, speaks with a balanced tone and volume). '),
(2, 'Question 2  \r\nTeam facilitation techniques ', 'Coaching and mentoring are development approaches based on the use of one-to-one conversation to enhance an individual’s skills, knowledge, or work performance. Describe 2 techniques in coaching and mentoring that you will use with your team to support the members. ', 'Maintain etiquette – many cultures have specific etiquette around the way they communicate. Research the target culture.  \nAvoid slang – Non-active English speakers have a comprehensive understanding of English but not slang idioms and sayings.  \nSpeak slowly – Modulating your pace will help as will speaking clearly and pronouncing your words properly.  \nKeep it simple – avoid using unnecessary large words. '),
(3, 'Question 3 \r\nMentoring and coaching techniques ', 'Working with teams can be challenging. What does establishing a team performance plan mean and what are the benefits? How would you handle a potential risk or safety hazard to ensure that it did not affect the team\'s performance? ', ' Establish team performance: Identify the desired performance levels of the team, Identify how these performance levels will be achieved, Provide guidance and direction to the team, Measure progress towards the desired performance levels.  \nAs an example of COVID, where face-to-face meetings were no longer possible, I would change the meetings to a suitable medium (continue with virtual meetings) but have more check-ins with individual team members to ensure that they don’t feel isolated. '),
(4, 'Question 4 \r\nConflict resolution ', 'Project success depends on effective communication. Steady communication from leadership can improve morale and engagement. Describe the different methods and styles of communication that you will use with your team. ', 'Communicate with your staff: Be clear with your staff about the purpose of their work, expectations, and common goals.  \nCommit to staff development: Invest in continued education and skills enhancement.  \nOffer feedback: Provide both casual and formal evaluations to show employees their value.  \nEncourage collaboration: Foster a comfortable space for teamwork and creative thinking.  \nBe consistent: Ensure fair treatment of all employees and clear communication of decisions. '),
(5, 'Question 5 \r\nCommunication methods and styles ', 'Personal events can often place strain on teams and contingencies need to be put in place for: Unplanned leave or absence of workers, Re-allocation of work tasks, Succession planning for important team roles. ', 'Identify common goals, Search for agreement, Consider the range of solutions and possibilities, Question our beliefs, Commit to resolving issues and problems as a group. '),
(6, 'Question 6  \r\nCross cultural communication ', 'When working with teams from other Divisions, describe the organizational policies that you will refer to, to ensure that your project aligns with the organization’s requirements and the importance of each. ', 'Workplace policies, Code of conduct, Reputation and culture, Legislative requirements (EEO, WHS). '),
(7, 'Question 7  \r\nProfessionalism ', 'We work and live in a diverse community that has different cultures and individuals with special needs or disabilities. Describe the principles of communication for these groups and how you would apply these principles with your team. ', 'Being grounded in ethics and integrity – doing the right things for the right reasons, Building trust – earn respect through actions, Bringing others along – help others grow, Inspiring those around you – motivate with vision and passion, Making decisions – confidently tackle hard decisions, Rewarding achievement – recognize and deliver on hard work. '),
(8, 'Question 8  \r\nWorkplace Contingencies ', 'Cohesive teams are better able to accomplish tasks, solve problems, and create innovation. As a team leader, describe several strategies that you will use to develop team cohesion and effectiveness in your project team. ', 'Code of Conduct: Details acceptable organizational and ethical and professional behaviours that employees must follow.  \nCITE Corporate Social Responsibility: Details the organization\'s social responsibilities and their importance to the community and sustainability.  \nThe Equity and Diversity Policy: Ensures that employees are aware of their rights and responsibilities regarding equal employment opportunity and diversity.  \nThe OSH Policy: Addresses employee safety and health responsibilities. '),
(9, 'Question 9  \r\nTeamwork Challenges ', 'When conflict is resolved effectively, it leads to many benefits, such as accomplishing goals and strengthening relationships. Broadly outline a strategy on how you would resolve a conflict within your team. ', 'Prioritize the tasks based on team and organizational goals. Evaluate the skill set of team members before distributing tasks. Undertake performance management to understand individual goals. Be transparent and communicate selections for mentorship or development, while investing in professional growth. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Question_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Question_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
