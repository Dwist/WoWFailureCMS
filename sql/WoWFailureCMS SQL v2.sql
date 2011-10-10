/*
SQLyog Ultimate v8.55 
MySQL - 5.5.8 : Database - wowsite
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `comments` */
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `newsid` int(10) NOT NULL,
  `comment` text NOT NULL,
  `accountId` int(10) NOT NULL DEFAULT '1337',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*Data for the table `comments` */
INSERT INTO `comments`(`id`,`newsid`,`comment`,`accountId`,`date`) VALUES (57,1,'Nice ',12,'2011-04-21 09:32:53'),(62,1,'Fixed Comment System, no more double post',8,'2011-04-22 13:12:03');
/*Table structure for table `community_slides` */
DROP TABLE IF EXISTS `community_slides`;
CREATE TABLE `community_slides` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `desc` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '#',
  `date` date NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*Data for the table `community_slides` */
INSERT INTO `community_slides`(`id`,`desc`,`title`,`url`,`date`,`image`) VALUES (1,'Testing WoWFailureCMS at maximum capacity.','Testing WoWFailureCMS','#','2011-04-20','4ZONJ2G8H02S1291403588642.jpg'),(2,'Find us on WoWFailureCore.org.','Where to find us?','#','2011-04-20','3A016YGNDN971281040709386.jpg'),(3,'Check The Forum for the latest updates.','WoWFailureCMS Forum','#','2011-04-20','HXW8I6KL6MRK1290045863003.jpg'),(4,'test','test','#','2011-04-20','TE943VAV1IVZ1290560963083.jpg');
/*Table structure for table `forum_blizzposts` */
DROP TABLE IF EXISTS `forum_blizzposts`;
CREATE TABLE `forum_blizzposts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `postid` int(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*Data for the table `forum_blizzposts` */
INSERT INTO `forum_blizzposts`(`id`,`type`,`author`,`postid`,`date`) VALUES (1,'thread','FailZorD',1,'2011-04-19 22:21:47'),(2,'reply','FailZorD',1,'2011-04-20 11:29:21'),(3,'reply','FailZorD',2,'2011-04-20 11:30:22');
/*Table structure for table `forum_categ` */DROP TABLE IF EXISTS `forum_categ`;CREATE TABLE `forum_categ` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;/*Data for the table `forum_categ` */INSERT INTO `forum_categ`(`id`,`num`,`name`) VALUES (1,1,'WoWFailureCMS');/*Table structure for table `forum_forums` */DROP TABLE IF EXISTS `forum_forums`;CREATE TABLE `forum_forums` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `num` int(10) NOT NULL,
  `categ` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `locked` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;/*Data for the table `forum_forums` */INSERT INTO `forum_forums`(`id`,`num`,`categ`,`name`,`image`,`description`,`locked`) VALUES (1,1,1,'Announcement','blizzard','All important messages/announcements/informations regarding WoWFailureCMS will be posted here.',1),(2,2,1,'General Talk','general','You can talk anything you want here :)',0),(3,3,1,'Bugs','bugs','Post here all bugs you find.',0),(4,4,1,'Suggestions','suggestions','Post here your ideas regarding WoWFailureCMS.',0);/*Table structure for table `forum_replies` */DROP TABLE IF EXISTS `forum_replies`;CREATE TABLE `forum_replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `threadid` int(10) NOT NULL,
  `content` text NOT NULL,
  `author` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `forumid` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;/*Data for the table `forum_replies` */INSERT INTO `forum_replies`(`id`,`threadid`,`content`,`author`,`date`,`forumid`,`name`) VALUES (1,1,'Testing...',8,'2011-04-20 11:29:21',1,'WoWFailureCMS Opened'),(2,1,'Testing...',8,'2011-04-20 11:30:21',1,'WoWFailureCMS Opened');/*Table structure for table `forum_threads` */DROP TABLE IF EXISTS `forum_threads`;CREATE TABLE `forum_threads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `forumid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` int(10) NOT NULL,
  `replies` int(10) NOT NULL DEFAULT '0',
  `views` int(10) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `content` text NOT NULL,
  `locked` tinyint(1) DEFAULT '0',
  `has_blizz` tinyint(1) DEFAULT '0',
  `prefix` varchar(255) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;/*Data for the table `forum_threads` */INSERT INTO `forum_threads`(`id`,`forumid`,`name`,`author`,`replies`,`views`,`date`,`content`,`locked`,`has_blizz`,`prefix`) VALUES (1,1,'WoWFailureCMS Opened',8,2,56,'2011-04-19','Bla',1,1,'none'),(2,2,'demo',10,0,5,'2011-04-20',' [code]mm11[/code]<br />\r\n [quote]quote[/quote] [item=\\\"1234\\\" /]',0,0,'none'),(3,1,'WoWFailureCMS Updates',8,0,5,'2011-04-20','Here I will post some updates : ',0,0,'none'),(4,4,'hehe, hi i cant wait this website',11,0,5,'2011-04-21','Hi, i have the idea:<br />\r\n- Vote sistem<br />\r\n- Donation Sistem<br />\r\n- The admin panel and account panel.<br />\r\nYou can visit:<br />\r\nhttp://www.wowlcv.com<br />\r\nis a website in spanish but looks why this website (they use your projecy , idon\\\'t know). But it was idea. If you want, you can.',0,0,'none');/*Table structure for table `messages` */DROP TABLE IF EXISTS `messages`;CREATE TABLE `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'FailZorD',
  `class` varchar(255) NOT NULL DEFAULT 'Administrator',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;/*Data for the table `messages` */
INSERT INTO `messages`(`id`,`title`,`content`,`author`,`class`) VALUES (1,'Media Page','The Media page has been temporary disabled.<br />\r\nCheck out the updates on the main page.','FailZorD','Administrator'),(2,'Forums','The Forums are still in development.<br />\r\nCheck out the updates on the main page.','FailZorD','Administrator'),(3,'Services Page','The Services page has been temporary disabled.<br />\r\nCheck out the updates on the main page.','FailZorD','Administrator');/*Table structure for table `news` */DROP TABLE IF EXISTS `news`;CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL DEFAULT 'Unkown',
  `date` date NOT NULL,
  `content` text,
  `authorlnk` text,
  `contentlnk` text,
  `title` text,
  `comments` int(10) DEFAULT '0',
  `image` varchar(255) DEFAULT 'staff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;/*Data for the table `news` */INSERT INTO `news`(`id`,`author`,`date`,`content`,`authorlnk`,`contentlnk`,`title`,`comments`,`image`) VALUES (1,'FailZorD','2011-04-22','<p>Hey everyone, I\'m back. After a long time of sleeping I finally decided to continue this project.</p>\r\n<p>I don\'t know how much I will keep updating this project, but it depens on how much support you give me, thanks.</p>\r\nStay Tuned for Updates.',NULL,NULL,'Back on DEV',2,'fix');/*Table structure for table `slideshows` */DROP TABLE IF EXISTS `slideshows`;CREATE TABLE `slideshows` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;/*Data for the table `slideshows` */INSERT INTO `slideshows`(`id`,`title`,`description`,`image`,`link`) VALUES (2,'WoWFailureCMS is Back!','This is your new awesome website. Please be sure to LEAVE THE FOOTER ALONE! Contact FailZorD from Bitbucket, if you want custom logos or images. Enjoy!','traveling_rocket.jpg','#'),(1,'Updates soon','I\'m gonna post some updates soon...','draenei.jpg','#');/*Table structure for table `users` */DROP TABLE IF EXISTS `users`;CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) NOT NULL DEFAULT '0-0.jpg',
  `blizz` tinyint(1) DEFAULT '0',
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;/*Data for the table `users` */INSERT INTO `users`(`id`,`avatar`,`blizz`,`class`) VALUES (7,'0-0.jpg',0,''),(8,'blizzard.png',0,'blizz'),(9,'0-0.jpg',0,''),(10,'0-0.jpg',0,''),(11,'0-0.jpg',0,''),(12,'0-0.jpg',0,''),(13,'0-0.jpg',0,''),(14,'0-0.jpg',0,''),(15,'0-0.jpg',0,'');/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;