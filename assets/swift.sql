/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - multi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`swift` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `swift`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `parahraph` longtext,
  `paragraph1` longtext,
  `paragraph2` longtext,
  `paragraph3` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

insert  into `aboutus`(`a_id`,`image1`,`image2`,`image3`,`parahraph`,`paragraph1`,`paragraph2`,`paragraph3`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (1,'0.47145800 1540547045','0.08588500 1540546013','0.08808100 1540546013','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.vc','Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat','Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ','Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.',1,'2018-10-26 15:14:05','2018-10-26 15:14:05',2,1);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `paddress` varchar(250) DEFAULT NULL,
  `address` text,
  `gender` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `notes` text,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`role`,`name`,`email`,`mobile`,`dob`,`paddress`,`address`,`gender`,`password`,`org_password`,`profile_pic`,`notes`,`status`,`created_at`,`updated_at`) values (2,1,'reddem vasudevareddy','admin@gmail.com','8500050944','','kadapa','kadapa','Male','fcea920f7412b5da7be0cf42b8c93759','1234567','1540534910.jpg',NULL,1,NULL,'2018-10-29 15:36:13');

/*Table structure for table `contactform` */

DROP TABLE IF EXISTS `contactform`;

CREATE TABLE `contactform` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` text,
  `twitter_link` text,
  `facebook_link` text,
  `instagram_link` text,
  `google_plus` text,
  `linkedIn_link` text,
  `updated_at` datetime DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactform` */

insert  into `contactform`(`c_id`,`contact_email`,`email`,`phone`,`address`,`twitter_link`,`facebook_link`,`instagram_link`,`google_plus`,`linkedIn_link`,`updated_at`,`homepage_preview`) values (1,'conatact@gmail.com','email@gmail.com','1234567890','A108 Adam Street, NY 535022, USA','www.twitter.com','www.facebook.com','www.instagram.com','www.gmail.com','www.linkedin.com','2018-10-26 17:19:00',1);

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `subject` text,
  `email_id` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`c_id`,`name`,`subject`,`email_id`,`message`,`create_at`) values (1,'fdsfsd','test','inventory@gmail.com','dfasdfsd','2018-10-26 19:23:50'),(2,'fgf','fgsdf','admin@gmail.com','fdgdsfg','2018-10-26 19:25:02'),(3,'cvzxcvxc','cvzxcv','admin@gmail.com','cxvzxcv','2018-10-26 19:26:26'),(4,'vasudevareddy','test','testing@gmail.com','hello','2018-10-29 14:48:53'),(5,'vasudevareddy','test','admin@gmail.com','fgdfg','2018-10-29 14:50:00'),(6,'hello','ijdsfkh','heelo@gmail.com','hfkhdskf','2018-10-29 14:51:18');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `text` text,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`g_id`,`image`,`text`,`org_image`,`status`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (2,'0.457717001540548521app2.jpg','text1','app2.jpg',1,'2018-10-26 15:38:41','2018-10-26 15:38:41',2,1),(3,'0.496099001540548521app3.jpg','text2','app3.jpg',1,'2018-10-26 15:38:41','2018-10-26 15:38:41',2,1),(4,'0.546385001540548521card1.jpg','text3','card1.jpg',1,'2018-10-26 15:38:41','2018-10-26 15:38:41',2,1),(5,'0.879673001540548777app1.jpg','Third Slider Text','app1.jpg',1,'2018-10-26 15:42:57','2018-10-26 15:42:57',2,1),(6,'0.935455001540548777card3.jpg','Third Slider Text','card3.jpg',1,'2018-10-26 15:42:57','2018-10-26 15:42:57',2,1);

/*Table structure for table `logo` */

DROP TABLE IF EXISTS `logo`;

CREATE TABLE `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `org_image` varchar(250) DEFAULT NULL,
  `favicon` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `title` text,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `logo` */

insert  into `logo`(`id`,`image`,`keywords`,`description`,`org_image`,`favicon`,`status`,`title`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (1,'1540804634.png','keyword','des','client-4.png','21540804634.png',1,'pracha milti  demo','2018-10-29 14:47:14','2018-10-29 14:47:14',2,1);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` longtext,
  `paragraph1` longtext,
  `paragraph2` longtext,
  `paragraph3` longtext,
  `paragraph4` longtext,
  `paragraph5` longtext,
  `paragraph6` longtext,
  `title1` text,
  `title2` text,
  `title3` text,
  `title4` text,
  `title5` text,
  `title6` text,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`paragraph`,`paragraph1`,`paragraph2`,`paragraph3`,`paragraph4`,`paragraph5`,`paragraph6`,`title1`,`title2`,`title3`,`title4`,`title5`,`title6`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (1,'Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.','Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident','Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur','Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum','At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque','Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi','Lorem Ipsum','Dolor Sitema','Sed ut perspiciatis','Magni Dolores','Nemo Enim','Eiusmod Tempor',1,'2018-10-26 16:19:15','2018-10-26 16:19:15',2,1);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`s_id`,`text`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`,`homepage_preview`) values (2,'Second Slider Text','0.7978820015405385302.jpg','2.jpg',1,'2018-10-26 12:52:10','2018-10-26 13:43:39',2,1),(3,'Third Slider Text','0.8317110015405385303.jpg','3.jpg',1,'2018-10-26 12:52:10','2018-10-26 12:52:10',2,1),(4,'Fourth Slider Text','0.8982860015405385304.jpg','4.jpg',1,'2018-10-26 12:52:10','2018-10-26 12:52:10',2,1),(9,'Fourth Slider Text','0.7911540015405388915.jpg','5.jpg',1,'2018-10-26 12:58:11','2018-10-26 12:58:11',2,1),(13,'First Slider Text','0.8682530015405416321.jpg','1.jpg',1,'2018-10-26 13:43:52','2018-10-26 13:45:34',2,1),(17,'First Slider Text','0.5360880015405417185.jpg','5.jpg',1,'2018-10-26 13:45:18','2018-10-26 13:45:18',2,1),(18,'test','0.0420160015405418751.jpg','1.jpg',1,'2018-10-26 13:47:55','2018-10-26 13:47:55',2,1);

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `paragraph` longtext,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `homepage_preview` int(11) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`t_id`,`name`,`designation`,`paragraph`,`image`,`org_image`,`status`,`create_at`,`update_at`,`create_by`,`homepage_preview`) values (1,'Saul Goodman','Ceo &amp; Founder','Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.','0.764803001540551926testimonial-1.jpg','testimonial-1.jpg',1,'2018-10-26 16:35:26','2018-10-26 16:35:26',2,1),(3,'Sara Wilsson','Designer','Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.','0.266613001540552555testimonial-2.jpg','testimonial-2.jpg',1,'2018-10-26 16:45:55','2018-10-26 16:45:55',2,1),(4,'Jena Karlis','Store Owner','              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.\r\n','0.332117001540552578testimonial-3.jpg','testimonial-3.jpg',1,'2018-10-26 16:46:18','2018-10-26 16:46:18',2,1),(5,'','','','0.148807001540807384','',1,'2018-10-29 15:33:04','2018-10-29 15:33:04',2,0),(6,'','','','0.661925001540807531','',1,'2018-10-29 15:35:31','2018-10-29 15:35:31',2,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
