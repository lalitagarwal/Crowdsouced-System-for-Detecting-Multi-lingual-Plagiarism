-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2014 at 10:04 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `plagiarism_detector`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `ID` varchar(3) CHARACTER SET latin1 NOT NULL,
  `Doc1` mediumtext CHARACTER SET latin1 NOT NULL,
  `Doc2` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Similarity` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`ID`, `Doc1`, `Doc2`, `Similarity`) VALUES
('ID1', 'Islamic State militants released a chilling videotape on Sunday showing they had beheaded a fifth Western hostage, an American aid worker the group had threatened to kill in retaliation for airstrikes carried out by the United States in Iraq and Syria.\r\nPresident Obama on Sunday confirmed the death of the aid worker, Peter Kassig, a former Army Ranger who disappeared more than a year ago at a checkpoint in northeastern Syria while delivering medical supplies.\r\nMr. Kassig “was taken from us in an act of pure evil by a terrorist group,” Mr. Obama said in a statement from aboard Air Force One that was read to the news media in Washington.\r\nIn recent days, American intelligence agencies received strong indications that the Islamic State had killed Mr. Kassig, the group’s third American victim. The president’s announcement was the first official confirmation of his death.', '土耳其加齐安泰普——周日，奥巴马总统确认美国援助工作者、前陆军游骑兵彼得·卡西格(Peter Kassig)已经身亡。一年多以前，他在运送医疗用品时，在叙利亚东北部的一个检查站失踪。\r\n奥巴马是在下午三点左右发布的这项声明。几小时之前，伊斯兰国(Islamic State)公布了一段视频显示，一名身穿黑衣的刽子手两脚分开站在一个砍下的人头旁，伊斯兰国称此人正是卡西格。\r\n卡西格“被一个恐怖组织，以极端罪恶的行径，从我们身边带走了”，奥巴马在空军一号(Air Force One)上宣读的一份声明中写道。在场的听众是华盛顿的新闻媒体。\r\n近日，美国情况机构得到了具有说服力的线索，表明伊斯兰国已经杀害了卡西格。总统的声明首次正式确定了他的死亡。\r\n奥巴马在声明中称，“现在，我们为阿卜杜勒-拉赫曼·卡西格(Abdul-Rahman Kassig)，也就是我们所知的彼得的父母和亲属祈祷，并向他们表示慰问。”总统使用了卡西格起的穆斯林名字，说明伊斯兰国杀害了自己的一名成员。他表示理解卡西格家人“在这个痛苦时刻的悲痛之情”。', 78),
('ID2', 'Americans say they are deeply concerned about privacy on the web and their cellphones. They say they do not trust Internet companies or the government to protect it. Yet they keep using the services and handing over their personal information.\r\nThat paradox is captured in a new survey by Pew Research Center. It found that there is no communications channel, including email, cellphones or landlines, that the majority of Americans feel very secure using when sharing personal information. Of all the forms of communication, they trust landlines the most, and fewer and fewer people are using them.\r\nDistrust of digital communication has only increased, Pew found, with the young expressing the most concern by some measures, in the wake of the revelations by Edward Snowden about online surveillance by the government. Yet Americans for now seem to grudgingly accept that these are the trade-offs of living in the digital age — or else they fear that it is too late to do anything about it.', '美国人说他们非常关注网络和手机上的隐私问题。他们说自己不信任网络公司或者政府能保护这种隐私。但他们仍然使用那些服务，同时交出自己的个人信息。\r\n皮尤研究中心(Pew Research Center)的一项新调查捕捉到了这种悖论。它发现，大部分美国人都觉得在分享个人信息时，自己所使用的通讯渠道并不安全，包括电子邮件、移动电话和固定电话。在所有通讯方式中，他们最信任固定电话，然而使用它的人却愈来愈少。\r\n对于数码通讯方式的不信任有增无减，皮尤研究中心发现，由于爱德华·斯诺登(Edward Snowden)揭露的政府网络监视行为，年轻人通过种种方式对这个问题表达的关切最多。然而，目前美国人似乎满腹抱怨地接受了这个问题，把它当做数码时代生活必须付出的代价，抑或认为对之进行任何改变为时已晚。', 45),
('ID3', 'US-based Palo Alto Networks said WireLurker appeared to have originated in China and was mostly infecting devices there. The malware first targets Mac computers via a third-party store before copying itself to iOS devices. Researchers warn it steals information and can install other damaging apps.\r\nWireLurker has the ability to transfer from Apple''s Mac computer to mobile devices through a USB cable. The malware initially gets onto an iOS device via a USB link to an infected Mac computer. The security firm said the malware was capable of stealing "a variety of information" from mobile devices it infects and regularly requested updates from the attackers'' control server \r\nAccording to Palo Alto Networks, WireLurker was first noticed in June when a developer at the Chinese firm Tencent realised there were suspicious files and processes happening on his Mac and iPhone. Further inquiries revealed a total of 467 Mac programs listed on the Maiyadi App Store had been compromised to include the malware, which in turn had been downloaded 356,104 times as of 16 Oct.\r\nInfected software included popular games including Angry Birds, The Sims 3, Pro Evolution Soccer 2014 and Battlefield: Bad Company 2. Once the malware was on the Mac, it communicated with a command-and-control server to check if it needed to update its code, and then waited until an iPhone, iPad or iPod was connected. When an iOS device was connected the malware would check if it was jailbroken - a process used by some to remove some of Apple''s restrictions.', '帕洛阿尔托网络公司(Palo Alto Network)报告称，该公司发现了一种名为WireLurker的针对苹果移动设备及台式电脑的恶意软件，并称“这是我们见过的规模最大的恶意软件”。\r\n虽然这款恶意软件——旨在造成损害或盗取信息的软件——针对的是中国的用户，而且能够避免，但此次行动展示了攻击者侵袭装有苹果iOS系统的移动设备的新方式。\r\n该公司称，用户如果通过USB连接线将移动设备与Mac电脑连接，用户的iOS设备也会受到感染。“任何iOS设备只要通过USB连接到受感染的OS X电脑，并安装下载的第三方应用程序，或自动在设备上产生恶意应用程序，都会被WireLurker监控，不管设备是否已经越狱，”该公司安全研究人员说。“因此我们称之为‘wire lurker’（连接线中的潜藏者）。”\r\n研究人员称，一旦WireLurker被安装到Mac电脑上，这款恶意软件就会等待用户通过USB连接iOS设备，然后立即感染该设备。一旦被感染，WireLurker的制造者就能窃取受害人的通讯簿、读取iMessage中的短信并定期从攻击者的指挥控制服务器发出更新请求。尽管尚不清楚制造者的最终目的，但研究人员称，有人正在积极更新该恶意软件。', 90),
('ID4', 'A surgeon who contracted the Ebola virus while working in Sierra Leone died Monday at a Nebraska hospital where he was being treated in a biocontainment unit, the facility said in a statement. Salia, 44, was being treated in the medical center''s biocontainment unit after arriving Saturday by plane from West Africa. He was transported by ambulance to the hospital, where two other Ebola patients have been successfully treated. On Sunday officials had described his condition as "an hour-by-hour situation." \r\nSalia had been working as a general surgeon at Kissy United Methodist Hospital in the Sierra Leone capital of Freetown. It''s not clear whether he was involved in the care of Ebola patients. Kissy is not an Ebola treatment unit, but Salia worked in at least three other facilities, United Methodist News said, citing health ministry sources. \r\nSalia, a Sierra Leone citizen who was a permanent resident of the U.S. and lived in Maryland, first showed Ebola symptoms on Nov. 6 but tested negative for the virus. He eventually tested positive on Monday. Smith called the initial test results "not unusual." ', '周一，感染埃博拉病毒的外科医生马丁·萨利亚(Martin Salia)在奥马哈一所生物控制中心接受治疗期间死亡。萨利亚在塞拉利昂工作期间感染了病毒。\r\n萨利亚是塞拉利昂公民，但生活在马里兰州。他曾在塞拉利亚首都弗里敦的基西联合卫理公会医院(Kissy United Methodist Hospital)担任普外科医生。目前尚不清楚他在哪里接触到埃博拉患者，但医院官员表示，他的工作地点所在的地区出现了很多埃博拉病例。在塞拉利昂，还有另外五名医生感染病毒，并都已经死亡。\r\n医院发言人泰勒·威尔逊(Taylor Wilson)表示，萨利亚于周一凌晨4时左右死亡。他在11月6日开始出现埃博拉症状，但最初检测结果呈阴性。埃博拉患者在感染初期检测呈假阴性的现象并不罕见。萨利亚的症状一直持续，一周前检测呈阳性。\r\n萨利亚于周六，也就是患病第13天到达奥马哈。奥马哈这所医院的重症监护部主任丹尼尔·W·约翰逊(Daniel W. Johnson)表示，当时萨利亚的肾脏已经衰竭，呼吸非常困难。', 20),
('ID5', 'Statement by the delegation of Malaysia , on behalf of the Group of Non-Aligned States Parties to the Treaty on the Non-Proliferation of Nuclear Weapons , at the plenary of the 2005 Review Conference of the Parties to the Treaty on the Non-Proliferation of Nuclear Weapons , concerning the adoption of the agenda , New York , 11 May 2005 \r\nThe Non-Aligned States Parties to the NPT welcome the adoption of the agenda of the 2005 Review Conference of the Parties to the NPT . \r\nThe agenda establishes the framework for conducting the review of the operation of the Treaty in accordance with article VIII , paragraph 3 of the Treaty , the decisions and the resolution of previous Conferences , in particular the 1995 Review and Extension Conference and the decision of the 2000 Review Conference to adopt by consensus its Final Document . The Non-Aligned States Parties to the NPT reaffirm their commitment to implement — in good faith their obligations — under the Treaty as well as all the commitments agreed upon by consensus in the 1995 and 2000 Review Conferences .  The Non-Aligned States Parties to the NPT urge all States Parties to implement their obligations and commitments in the same spirit .  The Non-Aligned States Parties to the NPT also reaffirm their commitment to ensure the successful outcome of this Review Conference . \r\nhe Non-Aligned States Parties to the NPT request that this present statement be circulated as an official document of this Review Conference .', '马来西亚代表团在不扩散核武器条约缔约国2005年审议大会全体会议上以不扩散核武器条约不结盟缔约国集团的名义就通过议程发表的声明 \r\n不扩散条约不结盟缔约国欢迎通过了不扩散条约缔约国2005年审议大会的议程 。 \r\n议程建立了一个框架 ， 以便按照本条约第八条第3款 、 过去历次审议大会 （ 特别是1995年审议大会和延长有效期会议 ） 的决定和决议以及2000年审议大会关于以协商一致方式通过最后文件的决定 ， 对本条约实施情况进行审查 。 \r\n不扩散条约不结盟缔约国重申它们关于将本着诚意履行其根据本条约所承担义务的承诺 ， 并重申在1995年和2000年审议大会上以协商一致方式商定的所有承诺 。 \r\n不扩散条约不结盟缔约国敦促所有缔约国本着同样的精神履行其义务和承诺 。 \r\n不扩散条约不结盟缔约国还重申 ， 它们承诺将确保使这次审议大会取得圆满成功 。 \r\n不扩散条约不结盟缔约国请求将本声明作为本次审议大会的正式文件分发 。', 56);

-- --------------------------------------------------------

--
-- Table structure for table `session_activity`
--

CREATE TABLE IF NOT EXISTS `session_activity` (
  `uid` varchar(3) NOT NULL,
  `ID` varchar(3) NOT NULL,
  `plevel` varchar(50) NOT NULL,
  `time_finished` text NOT NULL,
  PRIMARY KEY (`uid`,`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_activity`
--

INSERT INTO `session_activity` (`uid`, `ID`, `plevel`, `time_finished`) VALUES
('69', '1', 'Plagiarized', '2014-11-23 15:32:20'),
('69', '2', 'Plagiarized', '2014-11-23 15:34:40'),
('69', '3', 'Plagiarized', '2014-11-23 15:34:42'),
('69', '4', 'Plagiarized', '2014-11-23 15:34:43'),
('69', '5', 'Plagiarized', '2014-11-23 15:34:44'),
('70', '5', 'Plagiarized', '2014-11-23 15:35:01'),
('71', '5', 'Plagiarized', '2014-11-23 15:35:15'),
('72', '5', 'Plagiarized', '2014-11-23 15:35:50'),
('73', '5', 'Plagiarized', '2014-11-23 15:38:12'),
('74', '5', 'Plagiarized', '2014-11-23 15:38:37'),
('75', '5', 'Plagiarized', '2014-11-23 15:38:46'),
('76', '5', 'Plagiarized', '2014-11-23 15:39:07'),
('77', '1', 'Plagiarized', '2014-11-23 15:39:24'),
('77', '2', 'Plagiarized', '2014-11-23 15:39:25'),
('77', '3', 'Plagiarized', '2014-11-23 15:39:26'),
('77', '4', 'Plagiarized', '2014-11-23 15:39:27'),
('77', '5', 'Plagiarized', '2014-11-23 15:39:29'),
('78', '5', 'Plagiarized', '2014-11-23 15:40:45'),
('79', '5', 'Plagiarized', '2014-11-23 15:41:07'),
('80', '5', 'Plagiarized', '2014-11-23 15:41:59'),
('81', '5', 'Plagiarized', '2014-11-23 15:42:13'),
('82', '5', 'Plagiarized', '2014-11-23 15:42:30'),
('83', '5', 'Plagiarized', '2014-11-23 15:46:27'),
('84', '5', 'Plagiarized', '2014-11-23 15:46:41'),
('85', '5', 'Plagiarized', '2014-11-23 15:46:53'),
('86', '5', 'Plagiarized', '2014-11-23 15:47:33'),
('87', '1', 'Plagiarized', '2014-11-23 15:47:54'),
('87', '2', 'Plagiarized', '2014-11-23 15:47:55'),
('87', '3', 'Plagiarized', '2014-11-23 15:47:56'),
('87', '4', 'Plagiarized', '2014-11-23 15:47:57'),
('87', '5', 'Plagiarized', '2014-11-23 15:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `session_details`
--

CREATE TABLE IF NOT EXISTS `session_details` (
  `uid` varchar(3) NOT NULL,
  `start_time` text NOT NULL,
  `end_time` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_details`
--

INSERT INTO `session_details` (`uid`, `start_time`, `end_time`) VALUES
('100', '2014-11-23 21:33:11', NULL),
('101', '2014-11-23 21:33:31', NULL),
('102', '2014-11-23 21:34:02', NULL),
('103', '2014-11-23 21:34:39', NULL),
('104', '2014-11-23 21:34:50', NULL),
('105', '2014-11-23 21:34:59', NULL),
('106', '2014-11-23 21:35:04', NULL),
('107', '2014-11-23 21:35:18', NULL),
('108', '2014-11-23 21:41:34', NULL),
('109', '2014-11-23 21:44:34', NULL),
('69', '2014-11-23 15:32:20', '2014-11-23 15:34:44'),
('70', '2014-11-23 15:35:01', '2014-11-23 15:35:01'),
('71', '2014-11-23 15:35:15', '2014-11-23 15:35:15'),
('72', '2014-11-23 15:35:50', '2014-11-23 15:35:50'),
('73', '2014-11-23 15:38:12', '2014-11-23 15:38:12'),
('74', '2014-11-23 15:38:37', '2014-11-23 15:38:37'),
('75', '2014-11-23 15:38:46', '2014-11-23 15:38:46'),
('76', '2014-11-23 15:39:07', '2014-11-23 15:39:07'),
('77', '2014-11-23 15:39:23', '2014-11-23 15:39:29'),
('78', '2014-11-23 15:40:45', '2014-11-23 15:40:45'),
('79', '2014-11-23 15:41:07', '2014-11-23 15:41:07'),
('80', '2014-11-23 15:41:59', '2014-11-23 15:41:59'),
('81', '2014-11-23 15:42:13', '2014-11-23 15:42:13'),
('82', '2014-11-23 15:42:30', '2014-11-23 15:42:30'),
('83', '2014-11-23 15:46:27', '2014-11-23 15:46:27'),
('84', '2014-11-23 15:46:40', '2014-11-23 15:46:41'),
('85', '2014-11-23 15:46:53', '2014-11-23 15:46:53'),
('86', '2014-11-23 15:47:33', '2014-11-23 15:47:33'),
('87', '2014-11-23 15:47:54', '2014-11-23 15:48:06'),
('88', '2014-11-23 17:20:13', NULL),
('89', '2014-11-23 21:26:47', NULL),
('90', '2014-11-23 21:28:00', NULL),
('91', '2014-11-23 21:28:53', NULL),
('92', '2014-11-23 21:29:13', NULL),
('93', '2014-11-23 21:29:19', NULL),
('94', '2014-11-23 21:29:25', NULL),
('95', '2014-11-23 21:30:57', NULL),
('96', '2014-11-23 21:32:10', NULL),
('97', '2014-11-23 21:32:23', NULL),
('98', '2014-11-23 21:32:35', NULL),
('99', '2014-11-23 21:32:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `top10words`
--

CREATE TABLE IF NOT EXISTS `top10words` (
  `ID` varchar(3) NOT NULL,
  `Words1` text NOT NULL,
  `Words2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top10words`
--

INSERT INTO `top10words` (`ID`, `Words1`, `Words2`) VALUES
('ID1', 'Syria,Obama,Islamic,State,American,Kill,President,Death,Hostage', 'Lorem,texte,Ipsum,Composition,Spécimen,Popularisé,Galère,Standard,Récemment'),
('ID2', 'Research,Center,Americans,Pew,Edward,Internet,Digital,Snowden,Channel', 'Nombreuses,d’immigrants,Principale,Phénomène,Particulièrement,Socialisation,Informatique,Personnes,Dans'),
('ID3', 'Palo,Mac,iOS,Malware,Chinese,USB,US,Mobile,Updates', 'Ebola,Provoquées,Eruptions,Humains,Pression,d''autres,Semaines,Symptoms,Généralement'),
('ID4', 'Ebola,Surgeon,Sierra,United,Salia,Patients,Health,Treated,Plane', 'Ebola,Humans,Death,Fluid,Blood,Virus,Disease,Signs,Low'),
('ID5', 'Malaysia,Nuclear,Extenion,Review,Non,Conference,Agenda,Decisions,Review', 'Malaysia,Nuclear,Extenion,Review,Non,Conference,Agenda,Decisions,Review');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
