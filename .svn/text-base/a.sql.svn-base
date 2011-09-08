-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: cdssiteweb001    Database: iwebsns
-- ------------------------------------------------------
-- Server version	5.5.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `isns_admin`
--

DROP TABLE IF EXISTS `isns_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_admin` (
  `admin_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` char(32) NOT NULL,
  `admin_group` varchar(20) DEFAULT NULL,
  `is_pass` tinyint(2) unsigned DEFAULT '1',
  `active_time` datetime DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_admin`
--

LOCK TABLES `isns_admin` WRITE;
/*!40000 ALTER TABLE `isns_admin` DISABLE KEYS */;
INSERT INTO `isns_admin` VALUES (1,'admin','0608eaf998e9535be734481b9063b35b','superadmin',1,'2011-07-20 10:56:20');
/*!40000 ALTER TABLE `isns_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_album`
--

DROP TABLE IF EXISTS `isns_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_album` (
  `album_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `album_name` varchar(20) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `album_info` varchar(150) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `album_skin` varchar(150) DEFAULT NULL,
  `photo_num` smallint(5) unsigned DEFAULT '0',
  `is_pass` tinyint(2) DEFAULT '1',
  `privacy` varchar(200) DEFAULT NULL,
  `comments` int(5) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`album_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_album`
--

LOCK TABLES `isns_album` WRITE;
/*!40000 ALTER TABLE `isns_album` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_album_comment`
--

DROP TABLE IF EXISTS `isns_album_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_album_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  `album_id` mediumint(8) unsigned NOT NULL,
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `album_id` (`album_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_album_comment`
--

LOCK TABLES `isns_album_comment` WRITE;
/*!40000 ALTER TABLE `isns_album_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_album_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_admin`
--

DROP TABLE IF EXISTS `isns_article_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_sex` tinyint(2) DEFAULT '1',
  `user_ico` varchar(150) NOT NULL,
  `gid` smallint(5) DEFAULT '0',
  `gname` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_admin`
--

LOCK TABLES `isns_article_admin` WRITE;
/*!40000 ALTER TABLE `isns_article_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_ads`
--

DROP TABLE IF EXISTS `isns_article_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_ads` (
  `id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `type_id` tinyint(2) DEFAULT '0',
  `re_src` varchar(150) DEFAULT '',
  `descrip` varchar(50) DEFAULT '',
  `width` smallint(5) DEFAULT '0',
  `height` smallint(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_ads`
--

LOCK TABLES `isns_article_ads` WRITE;
/*!40000 ALTER TABLE `isns_article_ads` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_channel`
--

DROP TABLE IF EXISTS `isns_article_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_channel` (
  `id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `order_num` smallint(5) NOT NULL DEFAULT '0',
  `nodepath` text,
  `meta_key` varchar(80) DEFAULT '',
  `meta_title` varchar(80) DEFAULT '',
  `meta_descrip` varchar(80) DEFAULT '',
  `out_link` varchar(100) DEFAULT '',
  `type_id` tinyint(2) DEFAULT '0',
  `is_menu` tinyint(2) DEFAULT '0',
  `is_digg` tinyint(2) DEFAULT '0',
  `is_show` tinyint(2) DEFAULT '0',
  `count` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_channel`
--

LOCK TABLES `isns_article_channel` WRITE;
/*!40000 ALTER TABLE `isns_article_channel` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_comment`
--

DROP TABLE IF EXISTS `isns_article_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_comment` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  `user_email` varchar(80) DEFAULT '',
  `content_id` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_comment`
--

LOCK TABLES `isns_article_comment` WRITE;
/*!40000 ALTER TABLE `isns_article_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_group`
--

DROP TABLE IF EXISTS `isns_article_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_group` (
  `id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `rights` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_group`
--

LOCK TABLES `isns_article_group` WRITE;
/*!40000 ALTER TABLE `isns_article_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_news`
--

DROP TABLE IF EXISTS `isns_article_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `channel_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `channel_name` varchar(30) DEFAULT '',
  `title` varchar(80) NOT NULL,
  `thumb` varchar(150) DEFAULT NULL,
  `hits` mediumint(8) unsigned DEFAULT '0',
  `tag` varchar(50) DEFAULT NULL,
  `comments` mediumint(8) unsigned DEFAULT '0',
  `content` text,
  `origin` varchar(200) DEFAULT NULL,
  `keywords` varchar(40) NOT NULL DEFAULT 'iwebsns',
  `description` char(255) NOT NULL DEFAULT '',
  `resume` varchar(150) DEFAULT '',
  `status` tinyint(2) unsigned DEFAULT '0',
  `support` mediumint(5) unsigned DEFAULT '0',
  `against` mediumint(5) unsigned DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) NOT NULL DEFAULT 'admin',
  `user_ico` varchar(150) NOT NULL DEFAULT '',
  `checker_name` varchar(20) DEFAULT '',
  `addtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `order_num` int(5) DEFAULT '0',
  `is_digg` tinyint(2) DEFAULT '0',
  `is_recom` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_news`
--

LOCK TABLES `isns_article_news` WRITE;
/*!40000 ALTER TABLE `isns_article_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_resource`
--

DROP TABLE IF EXISTS `isns_article_resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_resource` (
  `resource_id` varchar(30) NOT NULL,
  `modules_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_resource`
--

LOCK TABLES `isns_article_resource` WRITE;
/*!40000 ALTER TABLE `isns_article_resource` DISABLE KEYS */;
INSERT INTO `isns_article_resource` VALUES ('article_05','channel','频道管理'),('article_06','privacy','权限管理'),('article_07','comment','评论管理'),('article_08','content','文章管理');
/*!40000 ALTER TABLE `isns_article_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_slide`
--

DROP TABLE IF EXISTS `isns_article_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_slide` (
  `id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `photo_src` varchar(150) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `order_num` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_slide`
--

LOCK TABLES `isns_article_slide` WRITE;
/*!40000 ALTER TABLE `isns_article_slide` DISABLE KEYS */;
INSERT INTO `isns_article_slide` VALUES (1,'adsf','uploadfiles/cms/2011/07/21/thumb_2011072111263067.jpg','',1);
/*!40000 ALTER TABLE `isns_article_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_tag`
--

DROP TABLE IF EXISTS `isns_article_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_tag` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `hot` tinyint(2) DEFAULT '0',
  `count` mediumint(8) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_tag`
--

LOCK TABLES `isns_article_tag` WRITE;
/*!40000 ALTER TABLE `isns_article_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_article_tag_relation`
--

DROP TABLE IF EXISTS `isns_article_tag_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_article_tag_relation` (
  `id` mediumint(8) unsigned NOT NULL,
  `content_id` mediumint(8) NOT NULL,
  KEY `id` (`id`),
  KEY `content_id` (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_article_tag_relation`
--

LOCK TABLES `isns_article_tag_relation` WRITE;
/*!40000 ALTER TABLE `isns_article_tag_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_article_tag_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_ask`
--

DROP TABLE IF EXISTS `isns_ask`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_ask` (
  `ask_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) NOT NULL COMMENT '提问者id',
  `user_name` varchar(15) NOT NULL COMMENT '提问者名字',
  `title` varchar(200) NOT NULL COMMENT '问题',
  `detail` text COMMENT '详细',
  `replenish` text COMMENT '问题补充',
  `type_id` mediumint(6) NOT NULL COMMENT '问题分类id',
  `type_name` varchar(20) NOT NULL COMMENT '类别名',
  `reward` smallint(8) NOT NULL DEFAULT '0' COMMENT '悬赏积分',
  `reply_num` smallint(8) NOT NULL DEFAULT '0' COMMENT '回答数量',
  `view_num` smallint(8) NOT NULL DEFAULT '0' COMMENT '查看次数',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '问题状态 0待解决 1已解决',
  `add_time` datetime NOT NULL COMMENT '提问时间',
  `reply_time` datetime DEFAULT NULL COMMENT '最后回答时间',
  `solved_time` datetime DEFAULT NULL COMMENT '解决时间',
  PRIMARY KEY (`ask_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_ask`
--

LOCK TABLES `isns_ask` WRITE;
/*!40000 ALTER TABLE `isns_ask` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_ask` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_ask_reply`
--

DROP TABLE IF EXISTS `isns_ask_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_ask_reply` (
  `reply_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `ask_id` int(8) NOT NULL COMMENT '问题id',
  `user_id` mediumint(8) NOT NULL COMMENT '回答者id',
  `user_name` varchar(15) NOT NULL COMMENT '回答者名字',
  `user_ico` varchar(150) NOT NULL COMMENT '回答者头像',
  `content` text NOT NULL COMMENT '回答内容',
  `add_time` datetime NOT NULL COMMENT '回答时间',
  `edit_time` datetime DEFAULT NULL COMMENT '修改时间',
  `is_answer` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否满意答案 0否 1是',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='回答表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_ask_reply`
--

LOCK TABLES `isns_ask_reply` WRITE;
/*!40000 ALTER TABLE `isns_ask_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_ask_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_ask_type`
--

DROP TABLE IF EXISTS `isns_ask_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_ask_type` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `order_num` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_ask_type`
--

LOCK TABLES `isns_ask_type` WRITE;
/*!40000 ALTER TABLE `isns_ask_type` DISABLE KEYS */;
INSERT INTO `isns_ask_type` VALUES (6,'人力资源',6),(7,'工作/生活',7),(9,'其他',8);
/*!40000 ALTER TABLE `isns_ask_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_backgroup`
--

DROP TABLE IF EXISTS `isns_backgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_backgroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` varchar(20) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `rights` text,
  `pluginrights` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_backgroup`
--

LOCK TABLES `isns_backgroup` WRITE;
/*!40000 ALTER TABLE `isns_backgroup` DISABLE KEYS */;
INSERT INTO `isns_backgroup` VALUES (1,'1','asdf',NULL,NULL);
/*!40000 ALTER TABLE `isns_backgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_blog`
--

DROP TABLE IF EXISTS `isns_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_blog` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `log_title` varchar(80) DEFAULT NULL,
  `log_sort` mediumint(8) NOT NULL DEFAULT '0',
  `is_pass` tinyint(2) NOT NULL DEFAULT '1',
  `log_sort_name` varchar(30) DEFAULT NULL,
  `log_content` text,
  `add_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `privacy` varchar(200) DEFAULT NULL,
  `hits` mediumint(8) DEFAULT '0',
  `comments` int(5) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(80) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  KEY `log_sort` (`log_sort`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_blog`
--

LOCK TABLES `isns_blog` WRITE;
/*!40000 ALTER TABLE `isns_blog` DISABLE KEYS */;
INSERT INTO `isns_blog` VALUES (2,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','Social Club Logo 设计大赛',0,1,'','<p><span class=\"Apple-style-span\" style=\"color:#555555;font-size:13px;line-height:25px;font-family:Simsun;\">首届英特尔员工俱乐部开始招募全新Logo啦！！ 什么，今年年会连阳光普照奖都没拿到？莫灰心，这次是凭真实力，还有iPod touch拿? 没错，就是现在，拿起你手中的铅笔、粉笔、画图板、PS，以及任何能体现你创意的工具，开始设计Logo吧！从ww19.4至ww22.3，一个免费获得iPod touch，看着自己亲手设计的Logo在英特尔成都员工俱乐部飞翔的绝佳时刻到啦。 无论形式，无论内容。只要最酷展示Intel Chengdu的Great Place to Work，我们的激情活力，我们的想象力，我们的魅力，都来参加吧...</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color:#555555;font-size:13px;line-height:25px;font-family:Simsun;\"><img src=\"http://localhost/iweb/iwebsns/uploadfiles/photo_store/2011/08/08/thumb_2011080802105161.png\" alt=\"\" border=\"0\" /><br />\r\n</span></p>','2011-07-25 16:12:44','2011-08-08 14:11:03','',5,0,'Logo 设计','uploadfiles/photo_store/2011/08/08/thumb_2011080802105161.png'),(3,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','Social Club Logo 设计大赛投票系统',2,1,'活动公告','<p><span class=\"Apple-style-span\" style=\"color:#555555;font-size:13px;line-height:25px;font-family:Simsun;\">Social Club Logo Design Contest从ww19.4持续到ww22.3，期间共收到作品逾70副。如今，网上投票系统已启动，并且网上投票得分占总成绩的60%。同时，为了让参与投票的同事更加积极，我们对参与投票的同事开展赛后抽奖活动，共10个名额，奖品为价值50元的精美礼品。<span class=\"style2\" style=\"margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-style:initial;border-color:initial;font-size:13px;background-image:initial;background-attachment:initial;background-origin:initial;background-clip:initial;background-color:transparent;color:#ff0000;\">投票规则</span>：1.每人限投一票，我们会记录你们电脑的***和***值，如发现有刷票、破译系统刷票等违反COC问题，将上报调查。2.对于工号我们不进行检错，如输入错误，不会获得第二次投票机会。为了让我们准确记录您的工号并为您发奖，切记...</span></p>\r\n<p><span class=\"Apple-style-span\" style=\"color:#555555;font-size:13px;line-height:25px;font-family:Simsun;\"><br />\r\n</span></p>','2011-08-08 14:13:30',NULL,'',2,0,'Logo,投票','uploadfiles/photo_store/2011/08/08/thumb_2011080802131988.jpg'),(4,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','Logo design contest 获奖名单公示',2,1,'活动公告','<span class=\"Apple-style-span\" style=\"font-family:Simsun;line-height:normal;font-size:medium;\"><span lang=\"zh-cn\" class=\"style11\" style=\"font-family:KaiTi;font-size:x-large;color:#9933ff;\">员工俱乐部徽标设计大赛</span><span lang=\"zh-cn\" class=\"style9\" style=\"font-family:KaiTi;font-size:larger;color:#9933ff;\"><br />\r\n</span></span><p><span class=\"Apple-style-span\" style=\"font-family:Simsun;line-height:normal;font-size:medium;\"><span class=\"style9\" style=\"font-family:KaiTi;font-size:larger;color:#9933ff;\">(</span><span class=\"style6\" style=\"font-family:KaiTi;font-size:larger;\"><span lang=\"zh-cn\" class=\"style7\" style=\"color:#9933ff;\">获奖名单公示）</span></span></span></p>\r\n<p><span class=\"Apple-style-span\" style=\"font-family:Simsun;line-height:normal;font-size:medium;\"><span class=\"style6\" style=\"font-family:KaiTi;font-size:larger;\"><span lang=\"zh-cn\" class=\"style7\" style=\"color:#9933ff;\">see&nbsp;</span></span></span><a href=\"http://cdsite.cd.intel.com/siteportal/SocialClub-new/default/firstpage%20news/logo%20exhibition.htm\">http://cdsite.cd.intel.com/siteportal/SocialClub-new/default/firstpage%20news/logo%20exhibition.htm</a></p>\r\n<p></p>\r\n<p></p>','2011-08-08 14:14:59','2011-08-08 14:17:25','',4,0,'Logo,获奖名单','uploadfiles/photo_store/2011/08/08/thumb_2011080802144831.png');
/*!40000 ALTER TABLE `isns_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_blog_comment`
--

DROP TABLE IF EXISTS `isns_blog_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_blog_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `log_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `log_id` (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_blog_comment`
--

LOCK TABLES `isns_blog_comment` WRITE;
/*!40000 ALTER TABLE `isns_blog_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_blog_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_blog_sort`
--

DROP TABLE IF EXISTS `isns_blog_sort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_blog_sort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_blog_sort`
--

LOCK TABLES `isns_blog_sort` WRITE;
/*!40000 ALTER TABLE `isns_blog_sort` DISABLE KEYS */;
INSERT INTO `isns_blog_sort` VALUES (2,'活动公告',1);
/*!40000 ALTER TABLE `isns_blog_sort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event`
--

DROP TABLE IF EXISTS `isns_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event` (
  `event_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(15) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(80) NOT NULL DEFAULT '',
  `type_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `province` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(20) NOT NULL DEFAULT '',
  `location` varchar(80) NOT NULL DEFAULT '',
  `poster` varchar(60) NOT NULL DEFAULT '',
  `poster_thumb` varchar(60) NOT NULL DEFAULT '',
  `thumb` tinyint(1) NOT NULL DEFAULT '0',
  `remote` tinyint(1) NOT NULL DEFAULT '0',
  `deadline` int(10) unsigned NOT NULL DEFAULT '0',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `public` tinyint(3) NOT NULL DEFAULT '0',
  `member_num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `follow_num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `view_num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `grade` tinyint(3) NOT NULL DEFAULT '0',
  `photo_num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `detail` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '',
  `limit_num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `allow_pic` tinyint(1) NOT NULL DEFAULT '0',
  `allow_post` tinyint(1) NOT NULL DEFAULT '0',
  `allow_invite` tinyint(1) NOT NULL DEFAULT '0',
  `allow_fellow` tinyint(1) NOT NULL DEFAULT '0',
  `is_pass` tinyint(1) NOT NULL DEFAULT '1',
  `comments` int(5) NOT NULL DEFAULT '0',
  `group_id` int(8) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `grade` (`grade`),
  KEY `member_num` (`member_num`),
  KEY `user_id` (`user_id`,`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event`
--

LOCK TABLES `isns_event` WRITE;
/*!40000 ALTER TABLE `isns_event` DISABLE KEYS */;
INSERT INTO `isns_event` VALUES (8,1,'ChairMan',0,'一二三四',3,'','','intel','uploadfiles/event/default_event_poster.jpg','uploadfiles/event/default_event_poster.jpg',0,0,1314165480,1314251880,1314511080,2,2,0,7,1,0,1312783138,'','',0,0,1,1,1,0,1,0,1),(9,5,'Reed',0,'badminton sdfs',3,'','','TRC','uploadfiles/event/2011/08/12/2011081204255162.jpg','uploadfiles/event/2011/08/12/thumb_2011081204255162.jpg',0,0,1313137500,1313223900,1313223900,2,1,0,2,1,0,1313137551,'<p>费用说明：sfds<br />\r\n集合地点：ewew<br />\r\n着装要求：adfa<br />\r\n场地介绍：feww<br />\r\n联系方式：<br />\r\n注意事项：dfafwfe<br />\r\n</p>','afewfadfdsafdsfs',10,1,1,1,1,1,1,0,2);
/*!40000 ALTER TABLE `isns_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event_comment`
--

DROP TABLE IF EXISTS `isns_event_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `event_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `event_id` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event_comment`
--

LOCK TABLES `isns_event_comment` WRITE;
/*!40000 ALTER TABLE `isns_event_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_event_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event_invite`
--

DROP TABLE IF EXISTS `isns_event_invite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event_invite` (
  `event_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(15) NOT NULL DEFAULT '',
  `to_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_user_name` char(15) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_id`,`to_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event_invite`
--

LOCK TABLES `isns_event_invite` WRITE;
/*!40000 ALTER TABLE `isns_event_invite` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_event_invite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event_members`
--

DROP TABLE IF EXISTS `isns_event_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event_members` (
  `event_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(15) NOT NULL DEFAULT '',
  `user_sex` tinyint(2) NOT NULL DEFAULT '0',
  `user_ico` varchar(150) NOT NULL DEFAULT '',
  `reside_province` varchar(30) NOT NULL DEFAULT '',
  `reside_city` varchar(30) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `fellow` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `template` varchar(255) NOT NULL DEFAULT '',
  `check_in` int(1) DEFAULT '1',
  `wwid` int(8) DEFAULT NULL,
  PRIMARY KEY (`event_id`,`user_id`),
  KEY `user_id` (`user_id`,`dateline`),
  KEY `event_id` (`event_id`,`status`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event_members`
--

LOCK TABLES `isns_event_members` WRITE;
/*!40000 ALTER TABLE `isns_event_members` DISABLE KEYS */;
INSERT INTO `isns_event_members` VALUES (8,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg','','',1312783138,4,0,'',1,99999999),(9,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif','','',1313137551,4,0,'',1,10680788),(8,8,'Sandy',0,'uploadfiles/photo_store/2011/08/18/2011081802332320_ico_small.jpg','','',1313648909,2,0,'',1,10699567);
/*!40000 ALTER TABLE `isns_event_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event_photo`
--

DROP TABLE IF EXISTS `isns_event_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event_photo` (
  `photo_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `photo_src` varchar(200) DEFAULT NULL,
  `photo_name` varchar(20) NOT NULL,
  `photo_information` varchar(200) DEFAULT NULL,
  `photo_thumb_src` varchar(200) DEFAULT NULL,
  `event_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(20) NOT NULL DEFAULT '',
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `event_id` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event_photo`
--

LOCK TABLES `isns_event_photo` WRITE;
/*!40000 ALTER TABLE `isns_event_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_event_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_event_type`
--

DROP TABLE IF EXISTS `isns_event_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_event_type` (
  `type_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(80) NOT NULL DEFAULT '',
  `poster` varchar(100) NOT NULL DEFAULT '',
  `poster_thumb` varchar(100) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `display_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_event_type`
--

LOCK TABLES `isns_event_type` WRITE;
/*!40000 ALTER TABLE `isns_event_type` DISABLE KEYS */;
INSERT INTO `isns_event_type` VALUES (1,'生活/聚会','0','','<P><BR>费用说明:<BR>集合地点:<BR>着装要求:<BR>联系方式:<BR>注意事项:<BR></P>',1),(2,'出行/旅游','','','<P>路线说明:<BR>费用说明:<BR>装备要求:<BR>交通工具:<BR>集合地点:<BR>联系方式:<BR>注意事项:<BR></P>',2),(3,'比赛/运动','0','','<P>费用说明：<BR>集合地点：<BR>着装要求：<BR>场地介绍：<BR>联系方式：<BR>注意事项：<BR></P>',3),(4,'电影/演出','','','剧情介绍：<BR>费用说明：<BR>集合地点：<BR>联系方式：<BR>注意事项:<BR>',4),(5,'教育/讲座','','','主办单位：<BR>活动主题：<BR>费用说明：<BR>集合地点：<BR>联系方式：<BR>注意事项：<BR>',5),(6,'其它','0','','',6);
/*!40000 ALTER TABLE `isns_event_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_frontgroup`
--

DROP TABLE IF EXISTS `isns_frontgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_frontgroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` varchar(20) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `rights` text,
  `pluginrights` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_frontgroup`
--

LOCK TABLES `isns_frontgroup` WRITE;
/*!40000 ALTER TABLE `isns_frontgroup` DISABLE KEYS */;
INSERT INTO `isns_frontgroup` VALUES (2,'1',' 管理员',NULL,NULL),(3,'2','俱乐部主席',NULL,NULL),(4,'3','普通会员',NULL,NULL);
/*!40000 ALTER TABLE `isns_frontgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_budget`
--

DROP TABLE IF EXISTS `isns_group_budget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_budget` (
  `budget_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned DEFAULT NULL,
  `year` mediumint(4) unsigned DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `amount` int(8) DEFAULT '0',
  `user_id` mediumint(8) DEFAULT NULL,
  `kind` set('office','shift') DEFAULT NULL,
  `item_id` int(4) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `unit_price` int(8) DEFAULT NULL,
  `quality` int(8) DEFAULT NULL,
  `status` int(2) unsigned DEFAULT '1',
  `time` date DEFAULT NULL,
  `forcast_id` mediumint(8) NOT NULL,
  `approver` int(8) DEFAULT NULL,
  PRIMARY KEY (`budget_id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_budget`
--

LOCK TABLES `isns_group_budget` WRITE;
/*!40000 ALTER TABLE `isns_group_budget` DISABLE KEYS */;
INSERT INTO `isns_group_budget` VALUES (32,1,2011,8,10,3000,1,'office',7,'足球队教练费','',300,10,1,'2011-08-10',62,1),(33,1,2011,8,10,8000,1,'office',6,'首届英超比赛裁判费用','',8000,1,1,'2011-08-10',63,1),(34,1,2011,8,10,3000,1,'office',1,'周末比赛交通费','',3000,1,1,'2011-08-10',82,1),(35,1,2011,8,10,600,1,'office',5,'600','',600,1,1,'2011-08-10',83,1),(36,1,2011,8,10,500,1,'',3,'足球比赛相关器材','',500,1,1,'2011-08-10',84,1),(37,1,2011,8,10,1000,1,'office',8,'site level比赛用水费','',1000,1,1,'2011-08-10',85,1),(38,1,2011,8,10,7200,1,'shift',1,'职工活动费-交通费','  Reasons for refusal:',300,24,3,'2011-08-10',86,1),(39,1,2011,8,10,400,1,'shift',3,'去年一年都没有买过足球，现在俱乐部里的球都已踢坏','',200,2,1,'2011-08-10',87,1),(40,1,2011,8,10,1200,1,'shift',1,'代表公司与外部公司比赛及内部教学比赛（地点公司足球场郫县、红光、犀浦、顺江各30元单趟（市区可以到这四个地方转车），正常班下午回去的车费可省。）','',120,10,1,'2011-08-10',88,1),(41,1,2011,8,10,500,1,'shift',3,'由于上次买的足球坏掉需要更新足球（shiftC&amp;D各一个）','',250,2,1,'2011-08-10',89,1),(42,2,2011,8,10,7150,1,'',3,'Shuttlecocks for badminton(site and youpindao)','',55,130,1,'2011-08-10',91,1),(43,2,2011,8,10,360,1,'office',3,'Badminton Net replacement','',120,3,1,'2011-08-10',92,1),(44,2,2011,8,10,2080,1,'office',4,'book 2 Courts Youpindao book 2 Courts at Boli sport (south of Chengdu','',160,13,1,'2011-08-10',93,1),(45,2,2011,8,10,2600,1,'office',4,'book 2  Courts at Boli sport (south of Chengdu','',200,13,1,'2011-08-10',93,1),(46,2,2011,8,10,300,1,'shift',3,'sports device','  Reasons for refusal:',150,2,3,'2011-08-10',94,1),(47,2,2011,8,10,5760,1,'shift',4,'book 4  Courts，每次4小时','',30,12,1,'2011-08-10',95,1),(48,2,2011,8,10,1500,1,'shift',3,'Shuttlecocks for badminton','',50,30,1,'2011-08-10',96,1),(49,3,2011,8,10,1200,1,'office',4,'SWUFE (1 courts*2 hrs/wk)','',120,10,1,'2011-08-10',97,1),(50,3,2011,8,10,2000,1,'office',7,'SCU-200RMB/session, total 10 sessions','',200,10,1,'2011-08-10',98,1),(51,3,2011,8,10,990,1,'office',3,'Tennis Ball','',30,33,1,'2011-08-10',99,1),(52,3,2011,8,10,500,1,'office',4,'SWUFE (1 courts*2 hrs/wk)','',500,1,1,'2011-08-10',100,1),(53,4,2011,8,10,1200,1,'shift',1,'班车到公司，每周一次','  Reasons for refusal:',100,10,3,'2011-08-10',101,1),(54,4,2011,8,10,3600,1,'shift',1,'班车到公司，每周一次','  Reasons for refusal:',300,12,3,'2011-08-10',101,1),(55,4,2011,8,10,2640,1,'shift',6,'为2011年正式比赛准备的队服','  Reasons for refusal:',110,24,3,'2011-08-10',102,1),(56,5,2011,8,10,2800,1,'shift',9,'2011 Q1 forecast          ','',28,100,1,'2011-08-10',103,NULL),(57,5,2011,8,10,2400,1,'shift',5,'活动门票费','',20,120,1,'2011-08-10',104,NULL),(58,6,2011,8,10,4500,1,'shift',7,'5次年会排练+13次regular session','',250,18,1,'2011-08-10',105,NULL),(59,6,2011,8,10,2520,1,'office',7,'14次课程(包含年会排练)','',180,14,1,'2011-08-10',106,NULL),(60,6,2011,8,10,4750,1,'shift',7,' 6次年会排练+13次regular session','',250,19,1,'2011-08-10',107,NULL),(61,6,2011,8,10,1800,1,'shift',1,'纺专对面青鸟健身','',150,12,1,'2011-08-10',108,NULL),(62,6,2011,8,10,1800,1,'office',1,'15RMB/person，一次10人','',150,12,1,'2011-08-10',109,NULL),(63,7,2011,8,10,3600,1,'office',7,'','',300,12,1,'2011-08-10',110,NULL),(64,8,2011,8,10,2640,1,'office',7,'training fee, once a week','',240,11,1,'2011-08-10',111,NULL),(65,9,2011,8,10,15000,1,'office',9,'2011 Q1 旅游交通费','',300,50,1,'2011-08-10',112,NULL),(66,9,2011,8,10,12000,1,'shift',9,'每个季度C/D班各20人','',300,40,1,'2011-08-10',113,NULL),(67,9,2011,8,10,12000,1,'shift',9,'每个季度C/D班各20人','',300,40,1,'2011-08-10',113,NULL),(68,9,2011,8,10,21000,1,'shift',9,'','',300,70,1,'2011-08-10',114,NULL),(69,10,2011,8,10,600,1,'office',5,'照片冲印费和海报费，包括每季度的照片墙更新，奖状制作，易拉宝和电梯海报','',600,1,1,'2011-08-10',116,NULL),(70,10,2011,8,10,800,1,'office',7,'请专业摄影老师讲课','',800,1,1,'2011-08-10',117,NULL),(71,10,2011,8,10,1000,1,'office',3,'更新摄影辅助器材，三脚架，反光板等，以及运费','',1000,1,1,'2011-08-10',118,NULL),(72,12,2011,8,10,300,1,'office',8,'运动饮水','',10,30,1,'2011-08-10',120,NULL),(73,12,2011,8,10,300,1,'office',3,'修车工具，小部件，药品','',300,1,1,'2011-08-10',121,NULL),(74,12,2011,8,10,3000,1,'shift',3,'sports device','',50,60,1,'2011-08-10',122,NULL),(75,13,2011,8,10,500,1,'office',5,'Posters, banner','',500,1,1,'2011-08-10',123,NULL),(76,13,2011,8,10,1500,1,'office',7,'New member fee, one time for each person','',150,10,1,'2011-08-10',124,NULL),(77,13,2011,8,10,3420,1,'office',7,'Membership fee for Aug-Jan rest 8 people, and Oct-March 10 people','',190,18,1,'2011-08-10',125,NULL),(78,13,2011,8,10,1300,1,'office',7,'membership fee 20 members for Feb-March','',65,20,1,'2011-08-10',126,NULL),(79,15,2011,8,10,2400,1,'shift',1,'','  Reasons for refusal:',100,24,3,'2011-08-10',127,1),(80,15,2011,8,10,200,1,'shift',3,'sports device','',100,2,1,'2011-08-10',128,1),(81,1,2011,8,11,0,1,'office',4,'Q2 ???????/???','????club????????????????????',0,0,1,'2011-08-11',223,1),(82,1,2011,8,11,0,1,'office',10,'site level???????????','\"???????????????,???????\"',0,0,1,'2011-08-11',224,1),(83,1,2011,8,11,0,1,'office',7,'Q2??????','?Q1????????????????????????????300??Q1???10???',0,0,1,'2011-08-11',225,1),(84,1,2011,8,11,0,1,'office',2,'Q2 ??????????','Q4???????????????????????66????site?????shift??',0,0,1,'2011-08-11',226,1),(85,1,2011,8,11,0,1,'office',3,'????????','yearly budget ?1000? ??????????????????????',0,0,1,'2011-08-11',227,1),(86,1,2011,8,11,0,1,'office',5,'Q2??????????','????????????????????????????????CD1VSCD6??????????',0,0,1,'2011-08-11',228,1),(87,1,2011,8,11,0,1,'office',8,'site level?????','???budget?5???????????????1000?????',0,0,1,'2011-08-11',229,1),(88,1,2011,8,11,0,1,'shift',1,'15RMB/person???20?','',0,0,1,'2011-08-11',230,1),(89,1,2011,8,11,0,1,'shift',4,'??-->??--???---???---?site','',0,0,1,'2011-08-11',231,1),(90,1,2011,8,11,0,1,'shift',3,'????? C/D????','',0,0,1,'2011-08-11',232,1),(91,1,2011,8,11,0,1,'shift',8,'???(CD1shiftC&D???????)','',0,0,1,'2011-08-11',233,1),(92,1,2011,8,11,0,1,'shift',6,'??????','???????????',0,0,1,'2011-08-11',234,1),(93,1,2011,8,11,0,1,'shift',1,'??????????????????????????????????????30????????????????????????????????','',0,0,1,'2011-08-11',235,1),(94,1,2011,8,11,0,1,'shift',3,'?????????????????shiftC&D????','',0,0,1,'2011-08-11',236,1),(95,1,2011,8,11,0,1,'shift',6,'2011Intel ????Shift CD1 Shift CD socail club ????','',0,0,1,'2011-08-11',237,1),(96,2,2011,8,11,8580,1,'office',3,'??? (site+???+??)','No Change with Q1\'11',55,156,1,'2011-08-11',238,1),(97,2,2011,8,11,2080,1,'office',4,'???????(2???*2????)','No Change with Q1\'11',160,13,1,'2011-08-11',239,1),(98,2,2011,8,11,2600,1,'office',4,'??????(2???*2????)','No Change with Q1\'11',200,13,1,'2011-08-11',240,1),(99,2,2011,8,11,2080,1,'office',4,'?????????????????','New apply',160,13,1,'2011-08-11',241,1),(100,2,2011,8,11,1430,1,'office',3,'\"??? (??????????,????)\"','New apply',55,26,1,'2011-08-11',242,1),(101,2,2011,8,11,1440,1,'shift',4,'???????? ','2 yard x12',60,24,1,'2011-08-11',243,1),(102,2,2011,8,11,720,1,'shift',3,'???','a',60,12,1,'2011-08-11',244,1),(103,2,2011,8,11,720,1,'shift',3,'???','a',60,12,1,'2011-08-11',245,1),(104,2,2011,8,11,5760,1,'shift',4,'book 4  Courts，每次4小时','\"cover both Shift A and Shift B social club 为了增加员工的锻炼机会，所以每周举行一次，一个季度12次，每次定4个场地，时间是1：00～5：00PM共4小时\n\"',480,12,1,'2011-08-11',246,1),(105,2,2011,8,11,1500,1,'shift',3,'Shuttlecocks for badminton','\"cover both Shift A and Shift B social club 30打：2打/次×12次+6打（6打是为备用，如果一次2打不够用，）               \n\"',50,30,1,'2011-08-11',247,1),(106,2,2011,8,11,100,1,'shift',8,'water',NULL,20,5,1,'2011-08-11',248,1),(107,2,2011,8,11,300,1,'shift',3,'sports device','',150,2,1,'2011-08-11',249,1),(108,3,2011,8,11,990,1,'office',3,'\"SWUFE:30RMB / bucket, total 33 buckets\"','\" Ball budget increase due to site tennis court activity, attendance rate increase\"',30,33,1,'2011-08-11',250,1),(109,3,2011,8,11,1200,1,'office',4,'\"SCU:2 court on Saturday 10:00~12:00, 120 RMB)\"','',120,10,1,'2011-08-11',251,1),(110,3,2011,8,11,3600,1,'office',7,'\"Site: 300RMB/session, (2 hrs), total 12 sessions. 1 session / week, 12 weeks; \"','\"1. trainig enrollment big increase          2requirement, tranning session frequency increa\"',300,12,1,'2011-08-11',252,1),(111,3,2011,8,11,1800,1,'office',7,'\"SCU: 200RMB/session (2 hrs), total 9 sessions, 1 session / week, 9 weeks\"','',200,9,1,'2011-08-11',253,1),(112,3,2011,8,11,300,1,'office',4,'\"SWUFE: 2 court on Saturday 10:00~12:00, \"','',60,5,1,'2011-08-11',254,1),(113,3,2011,8,11,0,1,'office',1,'??????????','This may vary if we could arrange a shuttle.',0,0,1,'2011-08-11',255,1),(114,3,2011,8,11,0,1,'office',8,'water','water supply for both internal and external games',0,0,1,'2011-08-11',256,1),(115,3,2011,8,11,0,1,'office',3,'sports device','Intel Joursey for external games',0,0,1,'2011-08-11',257,1),(116,4,2011,8,11,0,1,'office',1,'\"there is one league ouside, the players transportation fee\"','Two balls for internal game',0,0,1,'2011-08-11',258,1),(117,4,2011,8,11,0,1,'office',8,'Water fee','Site game poster',0,0,1,'2011-08-11',259,1),(118,4,2011,8,11,0,1,'shift',6,'Joursey for 4 new players','',0,0,1,'2011-08-11',260,1),(119,4,2011,8,11,0,1,'shift',3,'Basketball','a',0,0,1,'2011-08-11',261,1),(120,4,2011,8,11,0,1,'shift',5,'Poster','a',0,0,1,'2011-08-11',262,1),(121,4,2011,8,11,0,1,'shift',3,'??','a',0,0,1,'2011-08-11',263,1),(122,4,2011,8,11,0,1,'shift',1,'15RMB/person???20?','',0,0,1,'2011-08-11',264,1),(123,4,2011,8,11,0,1,'shift',4,'??-->??--???---???---?site','',0,0,1,'2011-08-11',265,1),(124,4,2011,8,11,2347,1,'office',6,'C/D??????????Q2?????????','?????1000??',20,120,1,'2011-08-11',266,1),(125,4,2011,8,11,6000,1,'office',3,'two basketballs ?500????','?????5000??(???????)',30,200,1,'2011-08-11',267,1),(126,4,2011,8,11,2160,1,'office',3,'\"???????4 ?12/? X 4/??/? ???????,????????????\"','?????1680??',18,120,1,'2011-08-11',268,1),(127,5,2011,8,11,1500,1,'office',4,'swimming','a',1500,1,1,'2011-08-11',269,1),(128,5,2011,8,11,2340,1,'shift',4,'swimming','for both CD1 and 6 shift',180,13,1,'2011-08-11',270,1),(129,5,2011,8,11,3250,1,'shift',4,'swimming','for both CD1 and 6 shift',250,13,1,'2011-08-11',271,1),(130,5,2011,8,11,3250,1,'office',10,'promotion','a',250,13,1,'2011-08-11',272,1),(131,6,2011,8,11,0,1,'office',7,'For shift A/B','a',0,0,1,'2011-08-11',273,1),(132,6,2011,8,11,0,1,'office',7,'for shift C/D','a',0,0,1,'2011-08-11',274,1),(133,6,2011,8,11,0,1,'office',7,'for office. Total 26 session.13 session for cheering squad training','',0,0,1,'2011-08-11',275,1),(134,6,2011,8,11,0,1,'shift',7,'13 session for cheering squad training of soccer match','',0,0,1,'2011-08-11',276,1),(135,6,2011,8,11,0,1,'shift',6,'for cheering girls ','',0,0,1,'2011-08-11',277,1),(136,6,2011,8,11,2000,1,'office',5,'cheering girls poster','',100,20,1,'2011-08-11',278,1),(137,6,2011,8,11,3600,1,'office',7,'????','a',300,12,1,'2011-08-11',279,1),(138,6,2011,8,11,3120,1,'office',7,'??????????','a',240,13,1,'2011-08-11',280,1),(139,7,2011,8,11,0,1,'office',3,'replace yoga mat','',0,0,1,'2011-08-11',281,1),(140,7,2011,8,11,0,1,'shift',2,'yoga class on every Monday','',0,0,1,'2011-08-11',282,1),(141,8,2011,8,11,0,1,'shift',7,'\"training fee, once a week\"','',0,0,1,'2011-08-11',283,1),(142,9,2011,8,11,0,1,'shift',9,'merged Q2 &Q3 Travel for big events to celebrate CPT recovery','?????',0,0,1,'2011-08-11',284,1),(143,9,2011,8,11,0,1,'shift',9,'????A/B??20?','a',0,0,1,'2011-08-11',285,1),(144,9,2011,8,11,600,1,'office',9,'????????','a',0,0,1,'2011-08-11',286,1),(145,9,2011,8,11,800,1,'office',9,'Shift A Q2?????????','a',0,0,1,'2011-08-11',287,1),(146,9,2011,8,11,1000,1,'office',9,'TBD','a',0,0,1,'2011-08-11',288,1),(147,10,2011,8,11,21000,1,'office',7,'??????????????????????','',420,50,1,'2011-08-11',289,1),(148,10,2011,8,11,4000,1,'office',3,'??????????????????????????????','????? 5?2??6?4??7?4??',400,10,1,'2011-08-11',290,1),(149,10,2011,8,11,500,1,'office',5,'???????????','????',500,1,1,'2011-08-11',291,1),(150,11,2011,8,11,150,1,'shift',2,'Combine Q1 and Q2 budget for the Mengdingshan activity','??',15,10,1,'2011-08-11',292,1),(151,12,2011,8,11,400,1,'',8,'Sports drink','??+????',200,2,1,'2011-08-11',293,1),(152,12,2011,8,11,3000,1,'office',11,'Activity support','',100,30,1,'2011-08-11',294,1),(153,12,2011,8,11,1500,1,'office',3,'sports device','',1500,1,1,'2011-08-11',295,1),(154,12,2011,8,11,1000,1,'office',3,'sports device','',1000,1,1,'2011-08-11',296,1),(155,13,2011,8,11,0,1,'office',5,'Lunch Table Topics snacks','',0,0,1,'2011-08-11',297,1),(156,13,2011,8,11,360,1,'office',5,'Lanyard','poster & Promotion',180,2,1,'2011-08-11',298,1),(157,13,2011,8,11,4598,1,'office',2,'Monthly EC activities','award:',4598,1,1,'2011-08-11',299,1),(158,13,2011,8,11,0,1,'office',2,'Chengdu district toastmaster clubs combined meeting','',0,0,1,'2011-08-11',300,1),(159,13,2011,8,11,0,1,'shift',3,'Role plate','',0,0,1,'2011-08-11',301,1),(160,13,2011,8,11,0,1,'shift',7,'Training material','',0,0,1,'2011-08-11',302,1),(161,13,2011,8,11,0,1,'shift',7,'\"New member fee, one time for each person\"','',0,0,1,'2011-08-11',303,1),(162,16,2011,8,11,600,1,'office',5,'','',100,6,1,'2011-08-11',304,1),(163,17,2011,8,11,2500,1,'office',5,'','',5,500,1,'2011-08-11',305,1),(164,17,2011,8,11,300,1,'office',7,'','',100,3,1,'2011-08-11',306,1),(165,17,2011,8,11,2000,1,'office',2,'','',2000,1,1,'2011-08-11',307,1),(166,18,2011,8,11,250,1,'office',2,'Social club leader TB and operational success (17 office + 15 shift)','',50,5,1,'2011-08-11',308,1),(167,18,2011,8,11,400,1,'office',10,'1st: 800; 2nd: 500; 3rd: 300; allocate budget to reward club to decide club related recognition. Leader should submit plan for document purpose.','',200,2,1,'2011-08-11',309,1),(168,18,2011,8,11,750,1,'office',10,'1st: 500; 2nd: 300; 3rd: 200; allocate budget to reward club to decide club related recognition. Leader should submit plan for document purpose.','',150,5,1,'2011-08-11',310,1),(169,18,2011,8,11,512,1,'office',10,'coupoon','',256,2,1,'2011-08-11',311,1),(170,18,2011,8,11,600,1,'',5,'social club logo design','',0,0,1,'2011-08-11',312,1),(171,18,2011,8,11,500,1,'',10,'social club logo design','',0,0,1,'2011-08-11',313,1),(172,18,2011,8,11,400,1,'',2,'new club','',0,0,1,'2011-08-11',314,1),(173,1,2011,8,10,3000,1,'office',4,'每周末soccer club在市区或者犀浦红光等地和其他公司对手比赛场地用费或者是交通费','',300,10,1,'2011-08-10',315,NULL),(174,1,2011,8,10,1000,1,'office',5,'海报，展报，游戏辅助道具等制作费用','',1000,1,1,'2011-08-10',316,NULL),(175,1,2011,8,10,720,1,'office',2,'Q3三国争霸赛裁判费用','',120,6,1,'2011-08-10',317,NULL),(176,1,2011,8,10,1000,1,'office',8,'site level活动球赛水费','',1000,1,1,'2011-08-10',318,NULL),(177,1,2011,8,10,1500,1,'shift',4,'每周末soccer club在市区或者犀浦红光等地和其他公司对手比赛场地用费或者是交通费','',300,5,1,'2011-08-10',319,NULL),(179,3,2011,8,10,990,1,'office',3,'SWUFE:30RMB / bucket, total 33 buckets','',30,33,1,'2011-08-10',321,NULL),(180,3,2011,8,10,800,1,'office',4,'Caida:2 court on Saturday 9:00~11:00, 80 RMB)','',80,10,1,'2011-08-10',322,NULL),(181,3,2011,8,10,6000,1,'office',7,'SCU:300RMB/session, 10 HC (2hrs), total 26sessions. 2 session / week, 10 weeks;','',300,20,1,'2011-08-10',323,NULL),(182,5,2011,8,10,12000,1,'office',9,'金沙场馆场地费用','',30,400,1,'2011-08-10',324,NULL),(183,5,2011,8,10,5400,1,'office',9,'罗浮场馆场地费用','',18,300,1,'2011-08-10',324,NULL),(184,5,2011,8,10,3912,1,'office',9,'龙湖场馆场地费用','',19,200,1,'2011-08-10',324,NULL),(185,5,2011,8,10,5000,1,'office',9,'上锦颐园场馆场地费','',10,500,1,'2011-08-10',324,NULL),(186,5,2011,8,10,500,1,'office',5,'季度招新宣传','  Reasons for refusal:',500,1,3,'2011-08-10',325,1),(187,5,2011,8,10,500,1,'office',5,'季度活动宣传','  Reasons for refusal:',500,1,3,'2011-08-10',325,1),(188,6,2011,8,10,3520,1,'office',7,'Latin Session','',250,13,1,'2011-08-10',327,NULL),(189,6,2011,8,10,2000,1,'office',7,'Classic Dance','',200,10,1,'2011-08-10',328,NULL),(190,6,2011,8,10,2000,1,'office',0,'','',200,10,1,'2011-08-10',329,NULL),(191,6,2011,8,10,3250,1,'office',7,'','',250,13,1,'2011-08-10',330,NULL),(192,13,2011,8,10,400,1,'office',5,'  Purchase badge徽章for meeting use','',50,8,1,'2011-08-10',331,NULL),(193,13,2011,8,10,840,1,'office',5,'new member fee','',140,6,1,'2011-08-10',332,NULL),(194,13,2011,8,10,3000,1,'office',2,'Existing Membership fee for Apri 1st -Sep 30th；','',200,15,1,'2011-08-10',333,NULL),(195,13,2011,8,10,600,1,'office',2,'   Poster for attract guest;','',200,3,1,'2011-08-10',334,NULL),(196,13,2011,8,10,750,1,'office',7,'   Management’s medal','',50,15,1,'2011-08-10',336,NULL),(197,13,2011,8,10,400,1,'office',3,'  Officer name card','',50,8,1,'2011-08-10',336,NULL),(198,13,2011,8,10,300,1,'office',7,'Monthly EC activities','',100,3,1,'2011-08-10',337,NULL),(199,13,2011,8,10,1000,1,'office',7,'Internal English contest','',1000,1,1,'2011-08-10',337,NULL),(201,13,2011,8,10,1000,1,'office',7,'Training material','',1000,1,1,'2011-08-10',337,NULL),(202,17,2011,8,10,1000,1,'office',1,'Running Club 户外健康跑，登山跑步会员交通费','',50,20,1,'2011-08-10',338,NULL),(203,17,2011,8,10,90,1,'office',3,'Running Club 活动横幅','',90,1,1,'2011-08-10',339,NULL),(204,17,2011,8,10,1800,1,'office',7,'Running Club教练辅导费','',150,12,1,'2011-08-10',340,NULL),(205,17,2011,8,10,750,1,'shift',1,'Running Club 户外健康跑，登山跑步会员交通费','',50,15,1,'2011-08-10',341,NULL),(206,17,2011,8,10,750,1,'shift',1,'Running Club 户外健康跑，登山跑步会员交通费','',50,15,1,'2011-08-10',341,NULL),(207,8,2011,8,10,3120,1,'office',7,'training fee, once a week','',240,13,1,'2011-08-10',342,NULL),(208,10,2011,8,10,800,1,'office',7,'安排俱乐部成员去影棚学习，并请专业摄影师讲课','',800,1,1,'2011-08-10',343,NULL),(209,10,2011,8,10,1000,1,'office',3,'更新摄影灯，三脚架，反光板，遮光罩，以及摄影比赛需要的展板等','',1000,1,1,'2011-08-10',344,NULL),(211,10,2011,8,10,600,1,'office',5,'打印照片。制作活动海报','',600,1,1,'2011-08-10',345,NULL),(212,18,2011,8,10,10000,1,'office',5,'WIWAI SC promotion','',2000,5,1,'2011-08-10',346,NULL),(213,18,2011,8,10,1500,1,'office',10,'Recogntion for Q2 good job','',1500,1,1,'2011-08-10',347,NULL),(214,18,2011,8,10,2500,1,'office',10,'Recogntion for Q3 good job','',2500,1,1,'2011-08-10',347,NULL);
/*!40000 ALTER TABLE `isns_group_budget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_budget_type`
--

DROP TABLE IF EXISTS `isns_group_budget_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_budget_type` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `item` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_budget_type`
--

LOCK TABLES `isns_group_budget_type` WRITE;
/*!40000 ALTER TABLE `isns_group_budget_type` DISABLE KEYS */;
INSERT INTO `isns_group_budget_type` VALUES (1,'职工活动费-交通费'),(2,'职工活动费-其他小组活动费'),(3,'职工活动费-器材费'),(4,'职工活动费-场地/车辆等租用费'),(5,'职工活动费-宣传费'),(6,'职工活动费-服装费'),(7,'职工活动费-课程费'),(8,'职工活动费-食品费'),(9,'职工活动费-活动类门票'),(10,'职工活动费-奖品/礼品'),(11,'职工活动费-杂物费'),(12,'工会业务费-培训费'),(13,'工会业务费-会务费'),(14,'工会业务费-招待费'),(15,'工会业务费-办公费'),(16,'工会业务费-差旅费'),(17,'工会业务费-职工补助'),(18,'工会业务费-其他支出-财务费用');
/*!40000 ALTER TABLE `isns_group_budget_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_forcast`
--

DROP TABLE IF EXISTS `isns_group_forcast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_forcast` (
  `forcast_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned DEFAULT NULL,
  `year` mediumint(4) DEFAULT NULL,
  `amount` int(12) DEFAULT NULL,
  `quarter` int(4) DEFAULT NULL,
  `item_id` mediumint(4) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `user_id` mediumint(8) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `approver` varchar(30) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`forcast_id`)
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_forcast`
--

LOCK TABLES `isns_group_forcast` WRITE;
/*!40000 ALTER TABLE `isns_group_forcast` DISABLE KEYS */;
INSERT INTO `isns_group_forcast` VALUES (62,1,2011,3000,1,7,'2011-08-09',1,1,'1','足球队教练费'),(63,1,2011,8000,1,6,'2011-08-09',1,1,'1','首届英超比赛裁判费用'),(64,1,2011,16614,0,50,'2011-08-09',1,1,'1',''),(65,2,2011,56450,0,50,'2011-08-09',1,1,'1',''),(66,3,2011,25275,0,50,'2011-08-09',1,1,'1',''),(67,4,2011,17175,0,50,'2011-08-09',1,1,'1',''),(68,5,2011,53889,0,50,'2011-08-09',1,1,'1',''),(69,6,2011,32000,0,50,'2011-08-09',1,1,'1',''),(70,7,2011,24600,0,50,'2011-08-09',1,1,'1',''),(71,8,2011,10296,0,50,'2011-08-09',1,1,'1',''),(72,9,2011,148557,0,50,'2011-08-09',1,1,'1',''),(73,10,2011,5000,0,50,'2011-08-09',1,1,'1',''),(74,11,2011,40000,0,50,'2011-08-09',1,1,'1',''),(75,12,2011,5187,0,50,'2011-08-09',1,1,'1',''),(76,13,2011,15080,0,50,'2011-08-09',1,1,'1',''),(77,14,2011,12000,0,50,'2011-08-09',1,1,'1',''),(78,15,2011,10187,0,50,'2011-08-09',1,1,'1',''),(79,16,2011,8000,0,50,'2011-08-09',1,1,'1',''),(80,17,2011,8000,0,50,'2011-08-09',1,1,'1',''),(81,18,2011,0,0,50,'2011-08-09',1,1,'1',''),(82,1,2011,3000,1,1,'2011-08-09',1,1,'1','周末比赛交通费'),(83,1,2011,600,1,5,'2011-08-09',1,1,'1','英特尔超级联赛宣传费'),(84,1,2011,500,1,3,'2011-08-09',1,1,'1','足球比赛相关器材'),(85,1,2011,1000,1,8,'2011-08-09',1,1,'1','site level比赛用水费'),(86,1,2011,7200,1,1,'2011-08-09',1,1,'1','职工活动费-交通费'),(87,1,2011,400,1,3,'2011-08-09',1,1,'1','去年一年都没有买过足球，现在俱乐部里的球都已踢坏'),(88,1,2011,1200,1,1,'2011-08-09',1,1,'1','代表公司与外部公司比赛及内部教学比赛（地点公司足球场郫县、红光、犀浦、顺江各30元单趟（市区可以到这四个地方转车），正常班下午回去的车费可省。）'),(89,1,2011,500,1,3,'2011-08-09',1,1,'1','由于上次买的足球坏掉需要更新足球（shiftC&D各一个）'),(91,2,2011,7150,1,3,'2011-08-09',1,1,'1','Shuttlecocks for badminton(site and youpindao)'),(92,2,2011,360,1,3,'2011-08-09',1,1,'1','Badminton Net replacement'),(93,2,2011,4680,1,4,'2011-08-09',1,1,'1','book 2  Courts Youpindao book 2  Courts at Boli sport (south of Chengdu'),(94,2,2011,300,1,3,'2011-08-10',1,1,NULL,'sports device'),(95,2,2010,5760,1,4,'2011-08-10',1,1,NULL,'book 4  Courts，每次4小时'),(96,2,2011,1500,1,3,'2011-08-10',1,1,NULL,'Shuttlecocks for badminton'),(97,3,2011,1200,1,4,'2011-08-10',1,1,NULL,'SCU - Court (2 courts*4 hrs/wk)'),(98,3,2011,2000,1,7,'2011-08-10',1,1,NULL,'SCU-200RMB/session, total 10 sessions'),(99,3,2011,990,1,3,'2011-08-10',1,1,NULL,'Tennis Ball'),(100,3,2011,500,1,4,'2011-08-10',1,1,NULL,'SWUFE (1 courts*2 hrs/wk)'),(101,4,2011,4800,1,1,'2011-08-10',1,1,NULL,'班车到公司，每周一次'),(102,4,2011,2640,1,6,'2011-08-10',1,1,NULL,'为2011年正式比赛准备的队服'),(103,5,2011,2800,1,2,'2011-08-10',1,1,NULL,'2800'),(104,5,2011,2400,1,5,'2011-08-10',1,1,NULL,'活动门票费'),(105,6,2011,4500,1,7,'2011-08-10',1,1,NULL,'5次年会排练+13次regular session'),(106,6,2011,2520,1,7,'2011-08-10',1,1,NULL,'14次课程(包含年会排练)'),(107,6,2011,4750,1,7,'2011-08-10',1,1,NULL,' 6次年会排练+13次regular session'),(108,6,2011,1800,1,1,'2011-08-10',1,1,NULL,'纺专对面青鸟健身'),(109,6,2011,1800,1,1,'2011-08-10',1,1,NULL,'15RMB/person，一次10人'),(110,7,2011,3600,1,7,'2011-08-10',1,1,NULL,''),(111,8,2011,2640,1,7,'2011-08-10',1,1,NULL,'training fee, once a week'),(112,9,2011,15000,1,9,'2011-08-10',1,1,NULL,'2011 Q1 旅游交通费'),(113,9,2011,24000,1,9,'2011-08-10',1,1,NULL,'每个季度C/D班各20人'),(114,9,2011,21000,1,9,'2011-08-10',1,1,NULL,'东拉山大峡谷二日游 '),(116,10,2011,600,1,5,'2011-08-10',1,1,NULL,'照片冲印费和海报费，包括每季度的照片墙更新，奖状制作，易拉宝和电梯海报'),(117,10,2011,800,1,7,'2011-08-10',1,1,NULL,'请专业摄影老师讲课'),(118,10,2011,1000,1,3,'2011-08-10',1,1,NULL,'更新摄影辅助器材，三脚架，反光板等，以及运费'),(119,11,2011,0,1,1,'2011-08-10',1,1,NULL,'2011 Q1 旅游交通费'),(120,12,2011,300,1,8,'2011-08-10',1,1,NULL,'运动饮水'),(121,12,2011,300,1,3,'2011-08-10',1,1,NULL,'修车工具，小部件，药品'),(122,12,2011,3000,1,3,'2011-08-10',1,1,NULL,'sports device'),(123,13,2011,500,1,5,'2011-08-10',1,1,NULL,'Posters, banner'),(124,13,2011,1500,1,7,'2011-08-10',1,1,NULL,'1500'),(125,13,2011,3420,1,7,'2011-08-10',1,1,NULL,'Membership fee for Aug-Jan rest 8 people, and Oct-March 10 people'),(126,13,2011,1300,1,7,'2011-08-10',1,1,NULL,'membership fee 20 members for Feb-March'),(127,15,2011,2400,1,1,'2011-08-10',1,1,NULL,'班车到公司，每周一次'),(128,15,2011,200,1,3,'2011-08-10',1,1,NULL,'sports device'),(223,1,2011,0,2,4,'2011-08-11',1,1,'1','Q2 ???????/???\r'),(224,1,2011,0,2,10,'2011-08-11',1,1,'1','site level???????????\r'),(225,1,2011,0,2,7,'2011-08-11',1,1,'1','Q2??????\r'),(226,1,2011,0,2,2,'2011-08-11',1,1,'1','Q2 ??????????\r'),(227,1,2011,0,2,3,'2011-08-11',1,1,'1','????????\r'),(228,1,2011,0,2,5,'2011-08-11',1,1,'1','Q2??????????\r'),(229,1,2011,0,2,8,'2011-08-11',1,1,'1','site level?????\r'),(230,1,2011,0,2,1,'2011-08-11',1,1,'1','15RMB/person???20?\r'),(231,1,2011,0,2,4,'2011-08-11',1,1,'1','??-->??--???---???---?site\r'),(232,1,2011,0,2,3,'2011-08-11',1,1,'1','????? C/D????\r'),(233,1,2011,0,2,8,'2011-08-11',1,1,'1','???(CD1shiftC&D???????)\r'),(234,1,2011,0,2,6,'2011-08-11',1,1,'1','??????\r'),(235,1,2011,0,2,1,'2011-08-11',1,1,'1','??????????????????????????????????????30????????????????????????????????\r'),(236,1,2011,0,2,3,'2011-08-11',1,1,'1','?????????????????shiftC&D????\r'),(237,1,2011,0,2,6,'2011-08-11',1,1,'1','2011Intel ????Shift CD1 Shift CD socail club ????\r'),(238,2,2011,8580,2,3,'2011-08-11',1,1,'1','??? (site+???+??)\r'),(239,2,2011,2080,2,4,'2011-08-11',1,1,'1','???????(2???*2????)\r'),(240,2,2011,2600,2,4,'2011-08-11',1,1,'1','??????(2???*2????)\r'),(241,2,2011,2080,2,4,'2011-08-11',1,1,'1','?????????????????\r'),(242,2,2011,1430,2,3,'2011-08-11',1,1,'1','\"??? (??????????,????)\"\r'),(243,2,2011,1440,2,4,'2011-08-11',1,1,'1','???????? \r'),(244,2,2011,720,2,3,'2011-08-11',1,1,'1','???\r'),(245,2,2011,720,2,3,'2011-08-11',1,1,'1','???\r'),(246,2,2011,5760,2,4,'2011-08-11',1,1,'1','book 4  Courts???4??\r'),(247,2,2011,1500,2,3,'2011-08-11',1,1,'1','Shuttlecocks for badminton\r'),(248,2,2011,100,2,8,'2011-08-11',1,1,'1','water\r'),(249,2,2011,300,2,3,'2011-08-11',1,1,'1','sports device\r'),(250,3,2011,990,2,3,'2011-08-11',1,1,'1','\"SWUFE:30RMB / bucket, total 33 buckets\"\r'),(251,3,2011,1200,2,4,'2011-08-11',1,1,'1','\"SCU:2 court on Saturday 10:00~12:00, 120 RMB)\"\r'),(252,3,2011,3600,2,7,'2011-08-11',1,1,'1','\"Site: 300RMB/session, (2 hrs), total 12 sessions. 1 session / week, 12 weeks; \"\r'),(253,3,2011,1800,2,7,'2011-08-11',1,1,'1','\"SCU: 200RMB/session (2 hrs), total 9 sessions, 1 session / week, 9 weeks\"\r'),(254,3,2011,300,2,4,'2011-08-11',1,1,'1','\"SWUFE: 2 court on Saturday 10:00~12:00, \"\r'),(255,3,2011,0,2,1,'2011-08-11',1,1,'1','??????????\r'),(256,3,2011,0,2,8,'2011-08-11',1,1,'1','water\r'),(257,3,2011,0,2,3,'2011-08-11',1,1,'1','sports device\r'),(258,4,2011,0,2,1,'2011-08-11',1,1,'1','\"there is one league ouside, the players transportation fee\"\r'),(259,4,2011,0,2,8,'2011-08-11',1,1,'1','Water fee\r'),(260,4,2011,0,2,6,'2011-08-11',1,1,'1','Joursey for 4 new players\r'),(261,4,2011,0,2,3,'2011-08-11',1,1,'1','Basketball\r'),(262,4,2011,0,2,5,'2011-08-11',1,1,'1','Poster\r'),(263,4,2011,0,2,3,'2011-08-11',1,1,'1','??\r'),(264,4,2011,0,2,1,'2011-08-11',1,1,'1','15RMB/person???20?\r'),(265,4,2011,0,2,4,'2011-08-11',1,1,'1','??-->??--???---???---?site\r'),(266,4,2011,2347,2,6,'2011-08-11',1,1,'1','C/D??????????Q2?????????\r'),(267,4,2011,6000,2,3,'2011-08-11',1,1,'1','two basketballs ?500????\r'),(268,4,2011,2160,2,3,'2011-08-11',1,1,'1','\"???????4 ?12/? X 4/??/? ???????,????????????\"\r'),(269,5,2011,1500,2,4,'2011-08-11',1,1,'1','swimming\r'),(270,5,2011,2340,2,4,'2011-08-11',1,1,'1','swimming\r'),(271,5,2011,3250,2,4,'2011-08-11',1,1,'1','swimming\r'),(272,5,2011,3250,2,10,'2011-08-11',1,1,'1','promotion\r'),(273,6,2011,0,2,7,'2011-08-11',1,1,'1','For shift A/B\r'),(274,6,2011,0,2,7,'2011-08-11',1,1,'1','for shift C/D\r'),(275,6,2011,0,2,7,'2011-08-11',1,1,'1','for office. Total 26 session.13 session for cheering squad training\r'),(276,6,2011,0,2,7,'2011-08-11',1,1,'1','13 session for cheering squad training of soccer match\r'),(277,6,2011,0,2,6,'2011-08-11',1,1,'1','for cheering girls \r'),(278,6,2011,2000,2,5,'2011-08-11',1,1,'1','cheering girls poster\r'),(279,6,2011,3600,2,7,'2011-08-11',1,1,'1','????\r'),(280,6,2011,3120,2,7,'2011-08-11',1,1,'1','??????????\r'),(281,7,2011,0,2,3,'2011-08-11',1,1,'1','replace yoga mat\r'),(282,7,2011,0,2,2,'2011-08-11',1,1,'1','yoga class on every Monday\r'),(283,8,2011,0,2,7,'2011-08-11',1,1,'1','\"training fee, once a week\"\r'),(284,9,2011,0,2,9,'2011-08-11',1,1,'1','merged Q2 &Q3 Travel for big events to celebrate CPT recovery\r'),(285,9,2011,0,2,9,'2011-08-11',1,1,'1','????A/B??20?\r'),(286,9,2011,600,2,9,'2011-08-11',1,1,'1','????????\r'),(287,9,2011,800,2,9,'2011-08-11',1,1,'1','Shift A Q2?????????\r'),(288,9,2011,1000,2,9,'2011-08-11',1,1,'1','TBD\r'),(289,10,2011,21000,2,7,'2011-08-11',1,1,'1','??????????????????????\r'),(290,10,2011,4000,2,3,'2011-08-11',1,1,'1','??????????????????????????????\r'),(291,10,2011,500,2,5,'2011-08-11',1,1,'1','???????????\r'),(292,11,2011,150,2,2,'2011-08-11',1,1,'1','Combine Q1 and Q2 budget for the Mengdingshan activity\r'),(293,12,2011,400,2,8,'2011-08-11',1,1,'1','Sports drink\r'),(294,12,2011,3000,2,11,'2011-08-11',1,1,'1','Activity support\r'),(295,12,2011,1500,2,3,'2011-08-11',1,1,'1','sports device\r'),(296,12,2011,1000,2,3,'2011-08-11',1,1,'1','sports device\r'),(297,13,2011,0,2,5,'2011-08-11',1,1,'1','Lunch Table Topics snacks\r'),(298,13,2011,360,2,5,'2011-08-11',1,1,'1','Lanyard\r'),(299,13,2011,4598,2,2,'2011-08-11',1,1,'1','Monthly EC activities\r'),(300,13,2011,0,2,2,'2011-08-11',1,1,'1','Chengdu district toastmaster clubs combined meeting\r'),(301,13,2011,0,2,3,'2011-08-11',1,1,'1','Role plate\r'),(302,13,2011,0,2,7,'2011-08-11',1,1,'1','Training material\r'),(303,13,2011,0,2,7,'2011-08-11',1,1,'1','\"New member fee, one time for each person\"\r'),(304,16,2011,600,2,5,'2011-08-11',1,1,'1','\r'),(305,17,2011,2500,2,5,'2011-08-11',1,1,'1','\r'),(306,17,2011,300,2,7,'2011-08-11',1,1,'1','\r'),(307,17,2011,2000,2,2,'2011-08-11',1,1,'1','\r'),(308,18,2011,250,2,2,'2011-08-11',1,1,'1','Social club leader TB and operational success (17 office + 15 shift)\r'),(309,18,2011,400,2,10,'2011-08-11',1,1,'1','1st: 800; 2nd: 500; 3rd: 300; allocate budget to reward club to decide club related recognition. Leader should submit plan for document purpose.\r'),(310,18,2011,750,2,10,'2011-08-11',1,1,'1','1st: 500; 2nd: 300; 3rd: 200; allocate budget to reward club to decide club related recognition. Leader should submit plan for document purpose.\r'),(311,18,2011,512,2,10,'2011-08-11',1,1,'1','coupoon\r'),(312,18,2011,600,2,5,'2011-08-11',1,1,'1','social club logo design\r'),(313,18,2011,500,2,10,'2011-08-11',1,1,'1','social club logo design\r'),(314,18,2011,400,2,2,'2011-08-11',1,1,'1','new club\r'),(315,1,2011,3000,3,4,'2011-08-10',1,1,NULL,'每周末soccer club在市区或者犀浦红光等地和其他公司对手比赛场地用费或者是交通费'),(316,1,2011,1000,3,5,'2011-08-10',1,1,NULL,'海报，展报，游戏辅助道具等制作费用'),(317,1,2011,720,3,2,'2011-08-10',1,1,NULL,'Q3三国争霸赛裁判费用'),(318,1,2011,1000,3,8,'2011-08-10',1,1,NULL,'site level活动球赛水费'),(319,1,2011,1500,3,4,'2011-08-10',1,1,NULL,'每周末soccer club在市区或者犀浦红光等地和其他公司对手比赛场地用费或者是交通费'),(321,3,2011,990,3,3,'2011-08-10',1,1,NULL,'SWUFE:30RMB / bucket, total 33 buckets'),(322,3,2011,800,3,4,'2011-08-10',1,1,NULL,'Caida:2 court on Saturday 9:00~11:00, 80 RMB)'),(323,3,2011,6000,3,7,'2011-08-10',1,1,NULL,'6000'),(324,5,2011,26312,3,9,'2011-08-10',1,1,NULL,'场馆费用'),(325,5,2011,1000,3,5,'2011-08-10',1,1,NULL,'季度招新宣传'),(326,5,2011,1500,3,10,'2011-08-10',1,1,NULL,'季度活动奖品'),(327,6,2011,3520,3,7,'2011-08-10',1,1,NULL,'Latin Session'),(328,6,2011,2000,3,7,'2011-08-10',1,1,NULL,'Classic Dance'),(329,6,2011,3900,3,7,'2011-08-10',1,1,NULL,''),(330,6,2011,3250,3,7,'2011-08-10',1,1,NULL,''),(331,13,2011,400,3,5,'2011-08-10',1,1,NULL,'  Purchase badge徽章for meeting use'),(332,13,2011,840,3,5,'2011-08-10',1,1,NULL,'840'),(333,13,2011,3000,3,2,'2011-08-10',1,1,NULL,'Existing Membership fee for Apri 1st -Sep 30th；'),(334,13,2011,600,3,2,'2011-08-10',1,1,NULL,'   Poster for attract guest;'),(336,13,2011,400,3,3,'2011-08-10',1,1,NULL,'  Officer name card'),(337,13,2011,3050,3,7,'2011-08-10',1,1,NULL,'   Management’s medal'),(338,17,2011,1000,3,1,'2011-08-10',1,1,NULL,'Running Club 户外健康跑，登山跑步会员交通费'),(339,17,2011,90,3,3,'2011-08-10',1,1,NULL,'Running Club 活动横幅'),(340,17,2011,1800,3,7,'2011-08-10',1,1,NULL,'Running Club教练辅导费'),(341,17,2011,1500,3,1,'2011-08-10',1,1,NULL,'Running Club 户外健康跑，登山跑步会员交通费'),(342,8,2011,3120,3,7,'2011-08-10',1,1,NULL,'training fee, once a week'),(343,10,2011,800,3,7,'2011-08-10',1,1,NULL,'安排俱乐部成员去影棚学习，并请专业摄影师讲课'),(344,10,2011,1000,3,3,'2011-08-10',1,1,NULL,'更新摄影灯，三脚架，反光板，遮光罩，以及摄影比赛需要的展板等'),(345,10,2011,600,3,5,'2011-08-10',1,1,NULL,'打印照片。制作活动海报'),(346,18,2011,10000,2,5,'2011-08-10',1,1,NULL,'10000'),(347,18,2011,4000,3,10,'2011-08-10',1,1,NULL,'Recogntion for Q2 good job'),(348,2,2011,2000,3,2,'2011-08-12',5,3,'5','TB  violate'),(349,2,2011,5000,3,4,'2011-08-12',5,1,'5','hongguang'),(350,2,2011,1000,4,3,'2011-08-12',5,2,NULL,'badminton shuttlecock');
/*!40000 ALTER TABLE `isns_group_forcast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_members`
--

DROP TABLE IF EXISTS `isns_group_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_members` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_sex` tinyint(2) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `state` tinyint(2) DEFAULT NULL,
  `role` tinyint(2) DEFAULT '2',
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_members`
--

LOCK TABLES `isns_group_members` WRITE;
/*!40000 ALTER TABLE `isns_group_members` DISABLE KEYS */;
INSERT INTO `isns_group_members` VALUES (1,1,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-07-20 13:21:20'),(2,2,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-07-20 13:23:38'),(3,3,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-07-20 13:24:55'),(19,9,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:28:07'),(20,10,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:28:31'),(21,11,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:28:51'),(15,5,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:26:57'),(16,6,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:27:09'),(17,7,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:27:37'),(18,8,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:27:55'),(14,4,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:20:07'),(22,12,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:29:04'),(23,13,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:29:55'),(24,14,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:30:16'),(25,15,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:30:30'),(26,16,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:30:45'),(27,17,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-04 15:30:57'),(29,1,2,'Wynn',1,'uploadfiles/photo_store/2011/08/18/2011081803321484_ico_small.jpg',1,1,'2011-08-05 14:31:33'),(37,2,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-12 14:14:00'),(31,7,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-08 15:56:48'),(32,8,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-08 15:56:48'),(33,12,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-08 15:56:48'),(34,14,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-08 15:56:48'),(42,19,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-18 14:03:42'),(36,18,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,0,'2011-08-09 11:05:49'),(38,2,6,'ZhangJunyi',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-12 16:12:03'),(39,5,6,'ZhangJunyi',1,'skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-12 16:12:03'),(41,18,7,'Ervin',1,'uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg',1,1,'2011-08-18 09:50:37'),(43,19,8,'Sandy',0,'uploadfiles/photo_store/2011/08/18/2011081802332320_ico_small.jpg',1,1,'2011-08-18 14:07:58');
/*!40000 ALTER TABLE `isns_group_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_subject`
--

DROP TABLE IF EXISTS `isns_group_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_subject` (
  `subject_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `hits` int(5) unsigned DEFAULT '0',
  `comments` int(5) unsigned DEFAULT '0',
  `tag` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`subject_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_subject`
--

LOCK TABLES `isns_group_subject` WRITE;
/*!40000 ALTER TABLE `isns_group_subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_group_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_subject_comment`
--

DROP TABLE IF EXISTS `isns_group_subject_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_subject_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `subject_id` mediumint(8) unsigned NOT NULL,
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_subject_comment`
--

LOCK TABLES `isns_group_subject_comment` WRITE;
/*!40000 ALTER TABLE `isns_group_subject_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_group_subject_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_group_type`
--

DROP TABLE IF EXISTS `isns_group_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_group_type` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `order_num` mediumint(8) unsigned DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_group_type`
--

LOCK TABLES `isns_group_type` WRITE;
/*!40000 ALTER TABLE `isns_group_type` DISABLE KEYS */;
INSERT INTO `isns_group_type` VALUES (3,3,'艺术'),(4,4,'非球类运动'),(5,5,'球类运动'),(10,10,'生活与健康'),(15,15,'其他');
/*!40000 ALTER TABLE `isns_group_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_groups`
--

DROP TABLE IF EXISTS `isns_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `add_userid` mediumint(8) unsigned NOT NULL,
  `is_pass` tinyint(2) NOT NULL DEFAULT '1',
  `member_count` mediumint(8) unsigned DEFAULT '1',
  `group_name` varchar(50) DEFAULT NULL,
  `group_resume` varchar(500) DEFAULT NULL,
  `group_time` datetime DEFAULT NULL,
  `group_manager_name` varchar(60) DEFAULT NULL,
  `group_manager_id` varchar(20) DEFAULT NULL,
  `group_req_id` text,
  `group_creat_name` varchar(20) DEFAULT NULL,
  `group_logo` varchar(150) DEFAULT NULL,
  `group_join_type` tinyint(2) NOT NULL DEFAULT '0',
  `group_type` varchar(20) DEFAULT NULL,
  `group_type_id` smallint(5) unsigned DEFAULT NULL,
  `affiche` varchar(500) DEFAULT NULL,
  `tag` varchar(80) DEFAULT NULL,
  `subjects_num` mediumint(8) unsigned DEFAULT '0',
  `comments` mediumint(8) unsigned DEFAULT '0',
  PRIMARY KEY (`group_id`),
  KEY `add_userid` (`add_userid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_groups`
--

LOCK TABLES `isns_groups` WRITE;
/*!40000 ALTER TABLE `isns_groups` DISABLE KEYS */;
INSERT INTO `isns_groups` VALUES (1,1,1,3,'001-Soccer','sdafsdf','2011-07-20 13:21:20','|Wynn|',',2,',',','ChairMan','',0,'球类运动',5,'','autocomplete=off',0,0),(2,1,1,2,'002-Badminton','','2011-07-20 13:23:38','|Reed|ZhangJunyi|',',5,6,',',','ChairMan','',0,'球类运动',5,'','autocomplete=off',0,0),(3,1,1,0,'003-Tennis','','2011-07-20 13:24:55','|',',',NULL,'ChairMan','',0,'球类运动',5,'','autocomplete=off',0,0),(4,1,1,1,'004-Basketball','','2011-08-04 15:20:07',NULL,NULL,NULL,'ChairMan','',0,'球类运动',5,'','autocomplete=off',0,0),(5,1,1,2,'005-Swimming','','2011-08-04 15:26:57',NULL,NULL,NULL,'ChairMan','',0,'非球类运动',5,NULL,'',0,0),(6,1,1,1,'006-Dancing','','2011-08-04 15:27:09',NULL,NULL,NULL,'ChairMan','',0,'艺术',5,NULL,'',0,0),(7,1,1,2,'007-Gym','','2011-08-04 15:27:37',NULL,NULL,NULL,'ChairMan','',0,'生活与健康',5,NULL,'',0,0),(8,1,1,2,'008-Taichi','','2011-08-04 15:27:55',NULL,NULL,NULL,'ChairMan','',0,'非球类运动',5,NULL,'',0,0),(9,1,1,0,'009-Travel','','2011-08-04 15:28:07',NULL,NULL,NULL,'ChairMan','',0,'生活与健康',4,NULL,'',0,0),(10,1,1,1,'010-Photo','','2011-08-04 15:28:31',NULL,NULL,NULL,'ChairMan','',0,'艺术',10,NULL,'',0,0),(11,1,1,1,'011-Driving','','2011-08-04 15:28:51',NULL,NULL,NULL,'ChairMan','',0,'生活与健康',15,NULL,'',0,0),(12,1,1,2,'012-Bicycle','','2011-08-04 15:29:04',NULL,NULL,NULL,'ChairMan','',0,'非球类运动',5,NULL,'',0,0),(13,1,1,1,'013-Toastmaster','','2011-08-04 15:29:55',NULL,NULL,NULL,'ChairMan','',0,'艺术',15,NULL,'',0,0),(14,1,1,2,'014-Parents','','2011-08-04 15:30:16',NULL,NULL,NULL,'ChairMan','',0,'生活与健康',15,NULL,'',0,0),(15,1,1,1,'015-Table Tennis','','2011-08-04 15:30:30',NULL,NULL,NULL,'ChairMan','',0,'球类运动',5,NULL,'',0,0),(16,1,1,1,'016-Music','','2011-08-04 15:30:45',NULL,NULL,NULL,'ChairMan','',0,'艺术',3,NULL,'',0,0),(17,1,1,1,'017-Running','','2011-08-04 15:30:57',NULL,NULL,NULL,'ChairMan','',0,'非球类运动',5,NULL,'',0,0),(18,1,1,2,'Social Club','','2011-08-09 11:05:49','|Ervin|',',7,',NULL,'ChairMan','',2,'其他',15,NULL,'Social',0,0),(19,1,1,2,'WIN','WIN Stands for “Women @ Intel Network”\r\nThe objective of WIN is to build systematic and consistent female diversity program through site management support and corporate resource sharing\r\n目标：在管理层的支持下，建立一个系统的、持续的女性多元化项目','2011-08-18 14:03:42','|Sandy|',',8,',NULL,'ChairMan','',0,'其他',15,'','',0,0);
/*!40000 ALTER TABLE `isns_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_guest`
--

DROP TABLE IF EXISTS `isns_guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_guest` (
  `guest_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `guest_user_id` mediumint(8) unsigned NOT NULL,
  `guest_user_name` varchar(20) DEFAULT NULL,
  `guest_user_ico` varchar(150) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`guest_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_guest`
--

LOCK TABLES `isns_guest` WRITE;
/*!40000 ALTER TABLE `isns_guest` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_helloworld`
--

DROP TABLE IF EXISTS `isns_helloworld`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_helloworld` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `msg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_helloworld`
--

LOCK TABLES `isns_helloworld` WRITE;
/*!40000 ALTER TABLE `isns_helloworld` DISABLE KEYS */;
INSERT INTO `isns_helloworld` VALUES (6,'asdf');
/*!40000 ALTER TABLE `isns_helloworld` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_hi`
--

DROP TABLE IF EXISTS `isns_hi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_hi` (
  `hi_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `from_user_id` mediumint(8) unsigned NOT NULL,
  `from_user_name` varchar(20) DEFAULT NULL,
  `from_user_ico` varchar(150) DEFAULT NULL,
  `hi` tinyint(2) DEFAULT NULL,
  `to_user_id` mediumint(8) unsigned NOT NULL,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`hi_id`),
  KEY `to_user_id` (`to_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_hi`
--

LOCK TABLES `isns_hi` WRITE;
/*!40000 ALTER TABLE `isns_hi` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_hi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_integral`
--

DROP TABLE IF EXISTS `isns_integral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_integral` (
  `operation` varchar(20) DEFAULT NULL,
  `integral` smallint(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_integral`
--

LOCK TABLES `isns_integral` WRITE;
/*!40000 ALTER TABLE `isns_integral` DISABLE KEYS */;
INSERT INTO `isns_integral` VALUES ('blog',2),('photo',1),('com_sub',1),('subject',2),('com_msg',1),('login',10),('invited',20),('one_ico',40),('del_blog',-2),('del_photo',-1),('del_subject',-2),('del_com_msg',-1),('del_com_sub',-1),('convert',100),('upgrade',5),('poll',2),('del_poll',-2),('share',2),('del_share',-2);
/*!40000 ALTER TABLE `isns_integral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_invite_code`
--

DROP TABLE IF EXISTS `isns_invite_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_invite_code` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sendor_id` mediumint(8) NOT NULL,
  `code_txt` varchar(20) NOT NULL,
  `is_admin` tinyint(2) NOT NULL DEFAULT '0',
  `add_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_txt` (`code_txt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_invite_code`
--

LOCK TABLES `isns_invite_code` WRITE;
/*!40000 ALTER TABLE `isns_invite_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_invite_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_mood`
--

DROP TABLE IF EXISTS `isns_mood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_mood` (
  `mood_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_ico` varchar(150) NOT NULL,
  `mood` text,
  `comments` int(5) unsigned DEFAULT '0',
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`mood_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_mood`
--

LOCK TABLES `isns_mood` WRITE;
/*!40000 ALTER TABLE `isns_mood` DISABLE KEYS */;
INSERT INTO `isns_mood` VALUES (1,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','asdfasdfsdfzxcvdafsdafxzvdasfasdfasdfasdf',0,'2011-07-21 09:34:50'),(2,7,'Ervin','skin/default/jooyea/images/d_ico_1_small.gif','[em_2]',1,'2011-08-18 09:52:07'),(3,7,'Ervin','uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg','[em_2]test!',0,'2011-08-19 15:21:33');
/*!40000 ALTER TABLE `isns_mood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_mood_comment`
--

DROP TABLE IF EXISTS `isns_mood_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_mood_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mood_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `mood_id` (`mood_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_mood_comment`
--

LOCK TABLES `isns_mood_comment` WRITE;
/*!40000 ALTER TABLE `isns_mood_comment` DISABLE KEYS */;
INSERT INTO `isns_mood_comment` VALUES (1,2,7,7,'Ervin','???','2011-08-18 09:53:03','skin/default/jooyea/images/d_ico_1_small.gif',0);
/*!40000 ALTER TABLE `isns_mood_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_msg_inbox`
--

DROP TABLE IF EXISTS `isns_msg_inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_msg_inbox` (
  `mess_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mess_title` varchar(70) DEFAULT NULL,
  `mess_content` varchar(500) DEFAULT NULL,
  `from_user_id` mediumint(8) unsigned NOT NULL,
  `from_user` varchar(20) DEFAULT NULL,
  `from_user_ico` varchar(150) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `add_time` datetime DEFAULT NULL,
  `mesinit_id` mediumint(8) unsigned DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`mess_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_msg_inbox`
--

LOCK TABLES `isns_msg_inbox` WRITE;
/*!40000 ALTER TABLE `isns_msg_inbox` DISABLE KEYS */;
INSERT INTO `isns_msg_inbox` VALUES (1,'asdf添加您为好友','asdf添加您为好友。<br />此条信息为系统发送，不必回复 <br />您可以<a href=\"javascript:{send_join_js}\">加其为好友</a>或<a href=\"modules.php?app=mypals_search\">搜索其他好友</a><br>',7,'系统发送','skin/default/jooyea/images/d_ico_0_small.gif',1,'2011-07-21 10:26:13',0,0),(2,'yuyuyu101添加您为好友','yuyuyu101添加您为好友。<br />此条信息为系统发送，不必回复 <br />您可以<a href=\"javascript:{send_join_js}\">加其为好友</a>或<a href=\"modules.php?app=mypals_search\">搜索其他好友</a><br>',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',7,'2011-07-21 11:21:52',0,0),(3,'asdf','sdaf',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',7,'2011-07-22 09:14:04',1,0),(4,'1safsd添加您为好友','1safsd添加您为好友。<br />此条信息为系统发送，不必回复 <br />您可以<a href=\"javascript:{send_join_js}\">加其为好友</a>或<a href=\"modules.php?app=mypals_search\">搜索其他好友</a><br>',8,'系统发送','skin/default/jooyea/images/d_ico_0_small.gif',7,'2011-07-22 10:12:00',0,0),(5,'1safsd添加您为好友','1safsd添加您为好友。<br />此条信息为系统发送，不必回复 <br />您可以<a href=\"javascript:{send_join_js}\">加其为好友</a>或<a href=\"modules.php?app=mypals_search\">搜索其他好友</a><br>',8,'系统发送','skin/default/jooyea/images/d_ico_0_small.gif',1,'2011-07-22 10:12:07',0,0),(6,'sdaf','asdfsdfxzcv<br />\r\nsdfsdf<br />\r\nasd<br />\r\nf<br />\r\nsdaf<br />\r\n<br />\r\nsdf<br />\r\n',8,'1safsd','skin/default/jooyea/images/d_ico_0_small.gif',1,'2011-07-22 10:13:13',2,1),(7,'您被指派为zxcxzv俱乐部的管理员','您被指派为zxcxzv俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',8,'2011-07-22 10:14:22',0,0),(8,'1safsd邀请您参加asdf活动','1safsd邀请您参加<a href=\"home.php?h=8&app=event_space&event_id=1\" target=\"_blank\">asdf</a>活动<br />您可以<a href=\"javascript:void(0)\" onclick=\"join_event(1)\">接受邀请</a>或查看<a href=\"home.php?h=8&app=event_space&event_id=1\" target=\"_blank\">活动详情</a>',8,'系统发送','skin/default/jooyea/images/d_ico_0_small.gif',7,'2011-07-22 10:38:59',0,0),(9,'您在zxcxzv俱乐部的管理员身份被撤销','您在zxcxzv俱乐部的管理员身份被撤销',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',8,'2011-07-22 12:51:37',0,0),(10,'adf','asdf',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',7,'2011-08-02 10:20:59',3,0),(11,'asdfa','asdf',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',7,'2011-08-02 10:33:44',4,0),(12,'asdf','sadf',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',7,'2011-08-02 10:43:12',5,0),(13,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:10:03',6,0),(14,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:12:26',7,0),(15,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:14:40',8,0),(16,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:14:50',9,0),(17,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:15:14',10,0),(18,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:16:04',11,0),(19,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:16:20',12,0),(20,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:19:17',13,0),(21,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:19:28',14,0),(22,'活动通知：','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-02 11:22:15',15,1),(23,'您的zxcxzv群组已被锁定','yuyuyu101，您的群组zxcxzv因违反本站协议已被锁定，请您尽快修改，否则由管理员对您的信息进行修改和删除等操作所产生的一切后果，将由您自己承担。',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-04 14:38:49',0,0),(24,'您的zxcv群组已被锁定','yuyuyu101，您的群组zxcv因违反本站协议已被锁定，请您尽快修改，否则由管理员对您的信息进行修改和删除等操作所产生的一切后果，将由您自己承担。',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-04 14:38:51',0,0),(25,'您的asdf群组已被锁定','yuyuyu101，您的群组asdf因违反本站协议已被锁定，请您尽快修改，否则由管理员对您的信息进行修改和删除等操作所产生的一切后果，将由您自己承担。',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-04 14:38:53',0,1),(26,'您被指派为Soccer俱乐部的管理员','您被指派为Soccer俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',2,'2011-08-08 10:38:17',0,0),(27,'您在Soccer俱乐部的管理员身份被撤销','您在Soccer俱乐部的管理员身份被撤销',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',2,'2011-08-08 10:38:20',0,0),(28,'您被指派为Soccer俱乐部的管理员','您被指派为Soccer俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',2,'2011-08-08 10:38:22',0,0),(29,'您被指派为Badminton俱乐部的管理员','您被指派为Badminton俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',5,'2011-08-12 14:20:08',0,0),(30,'您被指派为Badminton俱乐部的管理员','您被指派为Badminton俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',6,'2011-08-12 16:12:37',0,0),(31,'您被指派为WIN俱乐部的管理员','您被指派为WIN俱乐部的管理员',1,'系统发送','skin/default/jooyea/images/d_ico_1_small.gif',8,'2011-08-18 14:08:48',0,0),(32,'您被指派为Social Club俱乐部的管理员','您被指派为Social Club俱乐部的管理员',1,'系统发送','uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',7,'2011-08-18 16:34:27',0,0);
/*!40000 ALTER TABLE `isns_msg_inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_msg_outbox`
--

DROP TABLE IF EXISTS `isns_msg_outbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_msg_outbox` (
  `mess_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mess_title` varchar(70) DEFAULT NULL,
  `mess_content` varchar(500) DEFAULT NULL,
  `to_user_id` mediumint(8) unsigned NOT NULL,
  `to_user` varchar(20) DEFAULT NULL,
  `to_user_ico` varchar(150) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `state` tinyint(2) DEFAULT '0',
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`mess_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_msg_outbox`
--

LOCK TABLES `isns_msg_outbox` WRITE;
/*!40000 ALTER TABLE `isns_msg_outbox` DISABLE KEYS */;
INSERT INTO `isns_msg_outbox` VALUES (2,'sdaf','asdfsdfxzcv<br />\r\nsdfsdf<br />\r\nasd<br />\r\nf<br />\r\nsdaf<br />\r\n<br />\r\nsdf<br />\r\n',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',8,2,'2011-07-22 10:13:13'),(6,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:10:03'),(7,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:12:26'),(8,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:14:40'),(9,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:14:50'),(10,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:15:14'),(11,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:16:04'),(12,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:16:20'),(13,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:19:17'),(14,'','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,1,'2011-08-02 11:19:28'),(15,'活动通知：','',1,'yuyuyu101','skin/default/jooyea/images/d_ico_1_small.gif',1,2,'2011-08-02 11:22:15');
/*!40000 ALTER TABLE `isns_msg_outbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_msgboard`
--

DROP TABLE IF EXISTS `isns_msgboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_msgboard` (
  `mess_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `from_user_id` mediumint(8) unsigned NOT NULL,
  `from_user_name` varchar(20) DEFAULT NULL,
  `from_user_ico` varchar(150) DEFAULT NULL,
  `message` text,
  `to_user_id` mediumint(8) unsigned NOT NULL,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`mess_id`),
  KEY `to_user_id` (`to_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_msgboard`
--

LOCK TABLES `isns_msgboard` WRITE;
/*!40000 ALTER TABLE `isns_msgboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_msgboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_online`
--

DROP TABLE IF EXISTS `isns_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_online` (
  `online_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_sex` tinyint(2) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `birth_year` varchar(6) DEFAULT NULL,
  `birth_province` varchar(30) DEFAULT NULL,
  `birth_city` varchar(30) DEFAULT NULL,
  `reside_province` varchar(30) DEFAULT NULL,
  `reside_city` varchar(30) DEFAULT NULL,
  `active_time` int(10) DEFAULT '0',
  `hidden` tinyint(2) DEFAULT '0',
  `session_code` char(32) DEFAULT NULL,
  `wwid` int(8) DEFAULT NULL,
  PRIMARY KEY (`online_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_online`
--

LOCK TABLES `isns_online` WRITE;
/*!40000 ALTER TABLE `isns_online` DISABLE KEYS */;
INSERT INTO `isns_online` VALUES (144,7,'Ervin',1,'uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg','1989','','','','',1313737803,0,NULL,NULL),(143,5,'Reed',1,'skin/default/jooyea/images/d_ico_1_small.gif','','','','','',1313737766,0,NULL,NULL),(147,1,'ChairMan',1,'uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg','1992','','','','',1314065146,0,NULL,NULL),(133,8,'Sandy',0,'skin/default/jooyea/images/d_ico_0_small.gif',NULL,NULL,NULL,NULL,NULL,1313647678,0,NULL,10699567);
/*!40000 ALTER TABLE `isns_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_pals_def_sort`
--

DROP TABLE IF EXISTS `isns_pals_def_sort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_pals_def_sort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_num` smallint(5) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_pals_def_sort`
--

LOCK TABLES `isns_pals_def_sort` WRITE;
/*!40000 ALTER TABLE `isns_pals_def_sort` DISABLE KEYS */;
INSERT INTO `isns_pals_def_sort` VALUES (1,1,'朋友'),(2,2,'公司同事'),(3,3,'部门同事');
/*!40000 ALTER TABLE `isns_pals_def_sort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_pals_mine`
--

DROP TABLE IF EXISTS `isns_pals_mine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_pals_mine` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `pals_id` mediumint(8) unsigned NOT NULL,
  `pals_sort_id` smallint(5) DEFAULT '0',
  `pals_sort_name` varchar(20) DEFAULT NULL,
  `pals_name` varchar(20) DEFAULT NULL,
  `pals_sex` tinyint(2) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `pals_ico` varchar(150) DEFAULT NULL,
  `accepted` tinyint(2) NOT NULL DEFAULT '0',
  `active_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `pals_id` (`pals_id`),
  KEY `pals_sort_id` (`pals_sort_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_pals_mine`
--

LOCK TABLES `isns_pals_mine` WRITE;
/*!40000 ALTER TABLE `isns_pals_mine` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_pals_mine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_pals_request`
--

DROP TABLE IF EXISTS `isns_pals_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_pals_request` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `req_id` mediumint(8) unsigned NOT NULL,
  `req_name` varchar(20) DEFAULT NULL,
  `req_sex` tinyint(2) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `req_ico` varchar(150) DEFAULT NULL,
  `from_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_pals_request`
--

LOCK TABLES `isns_pals_request` WRITE;
/*!40000 ALTER TABLE `isns_pals_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_pals_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_pals_sort`
--

DROP TABLE IF EXISTS `isns_pals_sort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_pals_sort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `count` mediumint(8) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_pals_sort`
--

LOCK TABLES `isns_pals_sort` WRITE;
/*!40000 ALTER TABLE `isns_pals_sort` DISABLE KEYS */;
INSERT INTO `isns_pals_sort` VALUES (1,'亲朋',1,0),(2,'好友',1,0),(3,'同学',1,0),(4,'亲朋',2,0),(5,'好友',2,0),(6,'同学',2,0),(7,'亲朋',3,0),(8,'好友',3,0),(9,'同学',3,0),(10,'亲朋',4,0),(11,'好友',4,0),(12,'同学',4,0),(13,'亲朋',5,0),(14,'好友',5,0),(15,'同学',5,0),(16,'亲朋',6,0),(17,'好友',6,0),(18,'同学',6,0),(28,'朋友',0,0),(29,'公司同事',0,0),(30,'部门同事',0,0),(31,'朋友',0,0),(32,'公司同事',0,0),(33,'部门同事',0,0),(34,'朋友',2,0),(35,'公司同事',2,0),(36,'部门同事',2,0),(37,'朋友',3,0),(38,'公司同事',3,0),(39,'部门同事',3,0),(40,'朋友',4,0),(41,'公司同事',4,0),(42,'部门同事',4,0),(43,'朋友',5,0),(44,'公司同事',5,0),(45,'部门同事',5,0),(46,'朋友',6,0),(47,'公司同事',6,0),(48,'部门同事',6,0),(49,'朋友',7,0),(50,'公司同事',7,0),(51,'部门同事',7,0),(52,'朋友',8,0),(53,'公司同事',8,0),(54,'部门同事',8,0);
/*!40000 ALTER TABLE `isns_pals_sort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_photo`
--

DROP TABLE IF EXISTS `isns_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_photo` (
  `photo_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `photo_name` varchar(20) DEFAULT NULL,
  `photo_information` text,
  `add_time` datetime DEFAULT NULL,
  `photo_src` varchar(150) DEFAULT NULL,
  `photo_thumb_src` varchar(150) DEFAULT NULL,
  `album_id` mediumint(8) unsigned NOT NULL,
  `is_pass` tinyint(2) DEFAULT '1',
  `privacy` varchar(200) DEFAULT NULL,
  `comments` int(5) unsigned NOT NULL DEFAULT '0',
  `tag` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `album_id` (`album_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_photo`
--

LOCK TABLES `isns_photo` WRITE;
/*!40000 ALTER TABLE `isns_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_photo_comment`
--

DROP TABLE IF EXISTS `isns_photo_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_photo_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` mediumint(8) unsigned NOT NULL,
  `host_id` mediumint(8) unsigned NOT NULL,
  `visitor_id` mediumint(8) unsigned NOT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `readed` tinyint(2) DEFAULT '0',
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `photo_id` (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_photo_comment`
--

LOCK TABLES `isns_photo_comment` WRITE;
/*!40000 ALTER TABLE `isns_photo_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_photo_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_plugin_url`
--

DROP TABLE IF EXISTS `isns_plugin_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_plugin_url` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `layout_id` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sequence` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_plugin_url`
--

LOCK TABLES `isns_plugin_url` WRITE;
/*!40000 ALTER TABLE `isns_plugin_url` DISABLE KEYS */;
INSERT INTO `isns_plugin_url` VALUES (1,'article_widget','blog_add_bottom','article_blogCon.php',NULL),(2,'article_widget','main_left_MENU','article_menu.php',NULL),(3,'article_widget','plugin_back','../../article/admin_back.php',NULL);
/*!40000 ALTER TABLE `isns_plugin_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_plugins`
--

DROP TABLE IF EXISTS `isns_plugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_plugins` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `valid` tinyint(2) DEFAULT '0',
  `autoorder` tinyint(2) DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `image` varchar(150) NOT NULL,
  `comment_num` mediumint(8) unsigned DEFAULT '0',
  `use_num` mediumint(8) unsigned DEFAULT '0',
  `info` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_plugins`
--

LOCK TABLES `isns_plugins` WRITE;
/*!40000 ALTER TABLE `isns_plugins` DISABLE KEYS */;
INSERT INTO `isns_plugins` VALUES (1,'article_widget','article_widget',0,0,'2011-07-21 11:24:41','img/article.jpg',0,0,'文章管理的插件');
/*!40000 ALTER TABLE `isns_plugins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_poll`
--

DROP TABLE IF EXISTS `isns_poll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_poll` (
  `p_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `username` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `subject` varchar(80) DEFAULT '',
  `voternum` mediumint(8) unsigned DEFAULT '0',
  `comments` int(5) unsigned DEFAULT '0',
  `multiple` tinyint(2) DEFAULT '0',
  `maxchoice` tinyint(3) DEFAULT '0',
  `sex` tinyint(2) DEFAULT '0',
  `noreply` tinyint(2) DEFAULT '0',
  `credit` smallint(5) unsigned DEFAULT '0',
  `percredit` smallint(5) unsigned DEFAULT '0',
  `expiration` date DEFAULT NULL,
  `lastvote` datetime DEFAULT NULL,
  `dateline` datetime DEFAULT NULL,
  `message` text,
  `summary` text,
  `option` text,
  `is_pass` tinyint(2) DEFAULT '1',
  `tag` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_poll`
--

LOCK TABLES `isns_poll` WRITE;
/*!40000 ALTER TABLE `isns_poll` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_poll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_poll_comment`
--

DROP TABLE IF EXISTS `isns_poll_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_poll_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_id` mediumint(8) unsigned DEFAULT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `p_id` mediumint(8) unsigned DEFAULT NULL,
  `host_id` mediumint(8) unsigned DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `content` text,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `p_id` (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_poll_comment`
--

LOCK TABLES `isns_poll_comment` WRITE;
/*!40000 ALTER TABLE `isns_poll_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_poll_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_polloption`
--

DROP TABLE IF EXISTS `isns_polloption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_polloption` (
  `oid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `votenum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `option` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_polloption`
--

LOCK TABLES `isns_polloption` WRITE;
/*!40000 ALTER TABLE `isns_polloption` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_polloption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_polluser`
--

DROP TABLE IF EXISTS `isns_polluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_polluser` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) DEFAULT '',
  `pid` mediumint(8) unsigned DEFAULT '0',
  `option` text,
  `dateline` datetime DEFAULT NULL,
  `anony` tinyint(2) NOT NULL DEFAULT '0',
  KEY `pid` (`pid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_polluser`
--

LOCK TABLES `isns_polluser` WRITE;
/*!40000 ALTER TABLE `isns_polluser` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_polluser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_recent_affair`
--

DROP TABLE IF EXISTS `isns_recent_affair`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_recent_affair` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(2) DEFAULT '0',
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `for_content_id` mediumint(8) DEFAULT '0',
  `mod_type` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `type_id` (`type_id`),
  KEY `mod_type` (`mod_type`,`for_content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_recent_affair`
--

LOCK TABLES `isns_recent_affair` WRITE;
/*!40000 ALTER TABLE `isns_recent_affair` DISABLE KEYS */;
INSERT INTO `isns_recent_affair` VALUES (1,0,'创建了群组<a href=\"home.php?h=1&app=group_space&group_id=1\" target=\"_blank\">asdf</a>','<a href=\"home.php?h=1&app=group_space&group_id=1\" target=\"_blank\">asdf</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-07-20 13:21:20','2011-07-20 13:21:20',0,1),(2,0,'创建了群组<a href=\"home.php?h=1&app=group_space&group_id=2\" target=\"_blank\">zxcv</a>','<a href=\"home.php?h=1&app=group_space&group_id=2\" target=\"_blank\">zxcv</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-07-20 13:23:38','2011-07-20 13:23:38',0,1),(3,0,'创建了群组<a href=\"home.php?h=1&app=group_space&group_id=3\" target=\"_blank\">zxcxzv</a>','<a href=\"home.php?h=1&app=group_space&group_id=3\" target=\"_blank\">zxcxzv</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-07-20 13:24:55','2011-07-20 13:24:55',0,1),(4,1,'事迹更新','asdfasdfsdfzxcvdafsdafxzvdasfasdfasdfasdf',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-07-21 09:34:50','2011-07-21 09:34:50',1,6),(9,3,'写了新日志<a href=\"home.php?h=1&app=blog&id=2\" target=_blank>阿斯顿飞是</a>','撒旦发',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-07-25 16:12:44','2011-07-25 16:12:44',2,0),(11,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=4\" target=\"_blank\">Basketball</a>','<a href=\"home.php?h=1&app=group_space&group_id=4\" target=\"_blank\">Basketball</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:20:07','2011-08-04 15:20:07',0,1),(12,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=5\" target=\"_blank\">Swimming</a>','<a href=\"home.php?h=1&app=group_space&group_id=5\" target=\"_blank\">Swimming</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:26:57','2011-08-04 15:26:57',0,1),(13,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=6\" target=\"_blank\">Dancing</a>','<a href=\"home.php?h=1&app=group_space&group_id=6\" target=\"_blank\">Dancing</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:27:09','2011-08-04 15:27:09',0,1),(14,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=7\" target=\"_blank\">Gym</a>','<a href=\"home.php?h=1&app=group_space&group_id=7\" target=\"_blank\">Gym</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:27:37','2011-08-04 15:27:37',0,1),(15,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=8\" target=\"_blank\">Taichi</a>','<a href=\"home.php?h=1&app=group_space&group_id=8\" target=\"_blank\">Taichi</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:27:55','2011-08-04 15:27:55',0,1),(16,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=9\" target=\"_blank\">Travel</a>','<a href=\"home.php?h=1&app=group_space&group_id=9\" target=\"_blank\">Travel</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:28:07','2011-08-04 15:28:07',0,1),(17,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=10\" target=\"_blank\">Photo</a>','<a href=\"home.php?h=1&app=group_space&group_id=10\" target=\"_blank\">Photo</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:28:31','2011-08-04 15:28:31',0,1),(18,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=11\" target=\"_blank\">Driving</a>','<a href=\"home.php?h=1&app=group_space&group_id=11\" target=\"_blank\">Driving</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:28:51','2011-08-04 15:28:51',0,1),(19,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=12\" target=\"_blank\">Bicycle</a>','<a href=\"home.php?h=1&app=group_space&group_id=12\" target=\"_blank\">Bicycle</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:29:04','2011-08-04 15:29:04',0,1),(20,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=13\" target=\"_blank\">Toastmaster</a>','<a href=\"home.php?h=1&app=group_space&group_id=13\" target=\"_blank\">Toastmaster</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:29:55','2011-08-04 15:29:55',0,1),(21,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=14\" target=\"_blank\">Parents</a>','<a href=\"home.php?h=1&app=group_space&group_id=14\" target=\"_blank\">Parents</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:30:16','2011-08-04 15:30:16',0,1),(22,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=15\" target=\"_blank\">Table Tennis</a>','<a href=\"home.php?h=1&app=group_space&group_id=15\" target=\"_blank\">Table Tennis</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:30:30','2011-08-04 15:30:30',0,1),(23,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=16\" target=\"_blank\">Music</a>','<a href=\"home.php?h=1&app=group_space&group_id=16\" target=\"_blank\">Music</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:30:45','2011-08-04 15:30:45',0,1),(24,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=17\" target=\"_blank\">Running</a>','<a href=\"home.php?h=1&app=group_space&group_id=17\" target=\"_blank\">Running</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-04 15:30:57','2011-08-04 15:30:57',0,1),(25,0,'加入了活动<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>','<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 14:29:25','2011-08-05 14:29:25',0,11),(26,0,'加入了俱乐部<a href=\"home.php?h=2&app=group_space&group_id=1\" target=\"_blank\">Soccer</a>','<a href=\"home.php?h=2&app=group_space&group_id=1\" target=\"_blank\">Soccer</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 14:31:33','2011-08-05 14:31:33',0,1),(27,0,'加入了活动<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>','<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 14:59:52','2011-08-05 14:59:52',0,11),(28,0,'加入了活动<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>','<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 15:02:44','2011-08-05 15:02:44',0,11),(29,0,'加入了活动<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>','<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 15:03:16','2011-08-05 15:03:16',0,11),(30,0,'加入了活动<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>','<a href=\"home.php?h=2&app=event_space&event_id=4\" target=\"_blank\">阿呆沙发空间</a>',2,'Wynn','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-05 15:05:01','2011-08-05 15:05:01',0,11),(31,3,'写了新日志<a href=\"home.php?h=1&app=blog&id=3\" target=_blank>Social Club Logo 设计大赛投票系统</a>','Social Club Logo Design Contest从ww19.4持续到ww22.3，期间共收到作品逾70副。如今，网上投票系统已启动，并且网上投票得分占总成绩的60%。同时，为了让参与投票的同事更加积极，我们对参与投.....',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-08 14:13:30','2011-08-08 14:13:30',3,0),(32,3,'写了新日志<a href=\"home.php?h=1&app=blog&id=4\" target=_blank>Logo design contest 获奖名单公示</a>',' ',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-08 14:14:59','2011-08-08 14:14:59',4,0),(33,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=18\" target=\"_blank\">Social Club</a>','<a href=\"home.php?h=1&app=group_space&group_id=18\" target=\"_blank\">Social Club</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-09 11:05:49','2011-08-09 11:05:49',0,1),(34,0,'加入了俱乐部<a href=\"home.php?h=5&app=group_space&group_id=2\" target=\"_blank\">Badminton</a>','<a href=\"home.php?h=5&app=group_space&group_id=2\" target=\"_blank\">Badminton</a>',5,'Reed','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-12 14:14:00','2011-08-12 14:14:00',0,1),(35,1,'事迹更新','[em_2]',7,'Ervin','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-18 09:52:07','2011-08-18 09:52:07',2,6),(36,0,'创建了俱乐部<a href=\"home.php?h=1&app=group_space&group_id=19\" target=\"_blank\">WIN</a>','<a href=\"home.php?h=1&app=group_space&group_id=19\" target=\"_blank\">WIN</a>',1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-18 14:03:42','2011-08-18 14:03:42',0,1),(37,0,'加入了活动<a href=\"home.php?h=8&app=event_space&event_id=8\" target=\"_blank\">一二三四</a>','<a href=\"home.php?h=8&app=event_space&event_id=8\" target=\"_blank\">一二三四</a>',8,'Sandy','skin/default/jooyea/images/d_ico_0_small.gif','2011-08-18 14:28:29','2011-08-18 14:28:29',0,11),(38,1,'头像更新为','<img class=\"photo_frame\" onerror=parent.pic_error(this) src=\"uploadfiles/photo_store/2011/08/18/2011081802332320_ico.jpg\" align=\"top\">',8,'Sandy','uploadfiles/photo_store/2011/08/18/2011081802332320_ico_small.jpg','2011-08-18 14:33:41','2011-08-18 14:33:41',0,7),(39,1,'头像更新为','<img class=\"photo_frame\" onerror=parent.pic_error(this) src=\"uploadfiles/photo_store/2011/08/18/2011081803274486_ico.jpg\" align=\"top\">',1,'ChairMan','uploadfiles/photo_store/2011/08/18/2011081803274486_ico_small.jpg','2011-08-18 15:27:59','2011-08-18 15:27:59',0,7),(40,1,'头像更新为','<img class=\"photo_frame\" onerror=parent.pic_error(this) src=\"uploadfiles/photo_store/2011/08/18/2011081803321484_ico.jpg\" align=\"top\">',2,'Wynn','uploadfiles/photo_store/2011/08/18/2011081803321484_ico_small.jpg','2011-08-18 15:32:38','2011-08-18 15:32:38',0,7),(41,1,'头像更新为','<img class=\"photo_frame\" onerror=parent.pic_error(this) src=\"uploadfiles/photo_store/2011/08/18/2011081804042161_ico.jpg\" align=\"top\">',1,'ChairMan','uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg','2011-08-18 16:04:37','2011-08-18 16:04:37',0,7),(42,1,'头像更新为','<img class=\"photo_frame\" onerror=parent.pic_error(this) src=\"uploadfiles/photo_store/2011/08/18/2011081804261138_ico.jpg\" align=\"top\">',7,'Ervin','uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg','2011-08-18 16:27:12','2011-08-18 16:27:12',0,7),(43,4,'分享了<a href=\"home.php?h=1\" target=\"_blank\">ChairMan</a>的俱乐部<a href=\"home.php?h=1&app=group_space&group_id=2\" target=\"_blank\">Badminton</a>','<div class=\"clear\"></div><div class=\"left_g left\"></div><div class=\"center_g left\">sdfsdfsdfe\r\n\r\ndsfsf\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nsdfse\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nsefes\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nafe</div><div class=\"right_g left\"></div><div class=\"clear\"></div>',5,'Reed','skin/default/jooyea/images/d_ico_1_small.gif','2011-08-19 14:27:56','2011-08-19 14:27:56',1,5),(44,1,'事迹更新','[em_2]test!',7,'Ervin','uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg','2011-08-19 15:21:33','2011-08-19 15:21:33',3,6);
/*!40000 ALTER TABLE `isns_recent_affair` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_recommend`
--

DROP TABLE IF EXISTS `isns_recommend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_recommend` (
  `recommend_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `is_pass` tinyint(2) DEFAULT '1',
  `guest_num` mediumint(8) DEFAULT '0',
  `user_sex` tinyint(2) DEFAULT '0',
  `rec_class` tinyint(2) DEFAULT '0',
  `rec_order` tinyint(2) DEFAULT '0',
  `show_ico` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`recommend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_recommend`
--

LOCK TABLES `isns_recommend` WRITE;
/*!40000 ALTER TABLE `isns_recommend` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_recommend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_remind`
--

DROP TABLE IF EXISTS `isns_remind`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_remind` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `type_id` tinyint(2) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `is_focus` tinyint(2) NOT NULL,
  `from_uid` mediumint(8) unsigned NOT NULL,
  `from_uname` varchar(20) NOT NULL,
  `from_uico` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `count` mediumint(8) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`is_focus`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_remind`
--

LOCK TABLES `isns_remind` WRITE;
/*!40000 ALTER TABLE `isns_remind` DISABLE KEYS */;
INSERT INTO `isns_remind` VALUES (2,7,1,'2011-08-18 16:34:27','{num}个通知',0,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','modules.php?app=msg_notice',4),(3,7,5,'2011-08-02 10:43:12','{num}张小纸条',0,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','modules.php?app=msg_minbox',4),(12,2,1,'2011-08-08 10:38:22','{num}个通知',0,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','modules.php?app=msg_notice',3),(13,5,1,'2011-08-12 14:20:08','{num}个通知',0,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','modules.php?app=msg_notice',1),(15,8,1,'2011-08-18 14:08:48','{num}个通知',0,1,'ChairMan','skin/default/jooyea/images/d_ico_1_small.gif','modules.php?app=msg_notice',1);
/*!40000 ALTER TABLE `isns_remind` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_report`
--

DROP TABLE IF EXISTS `isns_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_report` (
  `report_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `reason` varchar(150) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `reported_id` mediumint(8) unsigned DEFAULT NULL,
  `userd_id` mediumint(8) unsigned DEFAULT NULL,
  `rep_num` mediumint(8) unsigned DEFAULT '1',
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_report`
--

LOCK TABLES `isns_report` WRITE;
/*!40000 ALTER TABLE `isns_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_share`
--

DROP TABLE IF EXISTS `isns_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_share` (
  `s_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(2) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `content` text,
  `s_title` varchar(300) DEFAULT NULL,
  `out_link` varchar(255) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `for_content_id` mediumint(8) unsigned DEFAULT NULL,
  `comments` int(5) unsigned DEFAULT '0',
  `movie_thumb` varchar(255) DEFAULT NULL,
  `movie_link` varchar(255) DEFAULT NULL,
  `is_pass` tinyint(2) DEFAULT '1',
  `tag` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `user_id` (`user_id`),
  KEY `type_id` (`type_id`,`for_content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_share`
--

LOCK TABLES `isns_share` WRITE;
/*!40000 ALTER TABLE `isns_share` DISABLE KEYS */;
INSERT INTO `isns_share` VALUES (1,1,5,'Reed','skin/default/jooyea/images/d_ico_1_small.gif',NULL,'分享了<a href=\"home.php?h=1\" target=\"_blank\">ChairMan</a>的俱乐部<a href=\"home.php?h=1&app=group_space&group_id=2\" target=\"_blank\">Badminton</a>','','2011-08-19 14:27:56',2,0,'','',1,'sxxxx');
/*!40000 ALTER TABLE `isns_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_share_comment`
--

DROP TABLE IF EXISTS `isns_share_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_share_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_id` mediumint(8) unsigned DEFAULT NULL,
  `visitor_name` varchar(20) DEFAULT NULL,
  `s_id` mediumint(8) unsigned DEFAULT NULL,
  `host_id` mediumint(8) unsigned DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `content` text,
  `visitor_ico` varchar(150) DEFAULT NULL,
  `is_hidden` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `s_id` (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_share_comment`
--

LOCK TABLES `isns_share_comment` WRITE;
/*!40000 ALTER TABLE `isns_share_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_share_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_tag`
--

DROP TABLE IF EXISTS `isns_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_tag` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `count` mediumint(8) DEFAULT '0',
  `hot` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_tag`
--

LOCK TABLES `isns_tag` WRITE;
/*!40000 ALTER TABLE `isns_tag` DISABLE KEYS */;
INSERT INTO `isns_tag` VALUES (1,'asdf',1,0),(7,'投票',1,0),(6,'设计',2,0),(5,'Logo',4,0),(8,'获奖名单',1,0),(9,'Social',1,0),(10,'sxxxx',1,0);
/*!40000 ALTER TABLE `isns_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_tag_relation`
--

DROP TABLE IF EXISTS `isns_tag_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_tag_relation` (
  `id` mediumint(8) unsigned NOT NULL,
  `mod_id` mediumint(8) NOT NULL,
  `content_id` mediumint(8) NOT NULL,
  KEY `id` (`id`),
  KEY `mod_id` (`mod_id`),
  KEY `content_id` (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_tag_relation`
--

LOCK TABLES `isns_tag_relation` WRITE;
/*!40000 ALTER TABLE `isns_tag_relation` DISABLE KEYS */;
INSERT INTO `isns_tag_relation` VALUES (1,2,1),(6,0,2),(5,0,2),(5,0,2),(6,0,2),(5,0,3),(7,0,3),(5,0,4),(8,0,4),(9,2,18),(10,3,1);
/*!40000 ALTER TABLE `isns_tag_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_tmp_file`
--

DROP TABLE IF EXISTS `isns_tmp_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_tmp_file` (
  `mod_id` mediumint(8) unsigned NOT NULL,
  `mod_count` mediumint(8) unsigned DEFAULT '0',
  `affair_array` text,
  `data_array` text,
  PRIMARY KEY (`mod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_tmp_file`
--

LOCK TABLES `isns_tmp_file` WRITE;
/*!40000 ALTER TABLE `isns_tmp_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_tmp_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_uploadfile`
--

DROP TABLE IF EXISTS `isns_uploadfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_uploadfile` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `add_time` datetime DEFAULT NULL,
  `file_src` varchar(150) DEFAULT NULL,
  `file_name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_uploadfile`
--

LOCK TABLES `isns_uploadfile` WRITE;
/*!40000 ALTER TABLE `isns_uploadfile` DISABLE KEYS */;
INSERT INTO `isns_uploadfile` VALUES (1,8,'2011-08-18 14:33:23','uploadfiles/photo_store/2011/08/18/2011081802332320.jpg','猫头鹰.jpg'),(2,1,'2011-08-18 15:27:44','uploadfiles/photo_store/2011/08/18/2011081803274486.jpg','Koala.jpg'),(3,2,'2011-08-18 15:32:14','uploadfiles/photo_store/2011/08/18/2011081803321484.jpg','2011012909201801.jpg'),(4,1,'2011-08-18 16:04:21','uploadfiles/photo_store/2011/08/18/2011081804042161.jpg','Penguins.jpg'),(5,7,'2011-08-18 16:26:11','uploadfiles/photo_store/2011/08/18/2011081804261138.jpg','040709b38bb1c268082302dd.jpg');
/*!40000 ALTER TABLE `isns_uploadfile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_user_activation`
--

DROP TABLE IF EXISTS `isns_user_activation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_user_activation` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `time` datetime NOT NULL COMMENT '时间戳',
  `activation_code` varchar(100) NOT NULL COMMENT '激活码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户激活注册表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_user_activation`
--

LOCK TABLES `isns_user_activation` WRITE;
/*!40000 ALTER TABLE `isns_user_activation` DISABLE KEYS */;
/*!40000 ALTER TABLE `isns_user_activation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_user_info`
--

DROP TABLE IF EXISTS `isns_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_user_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'user表ID',
  `info_id` int(10) NOT NULL DEFAULT '0' COMMENT '信息表ID',
  `info_value` text COMMENT '信息值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_user_info`
--

LOCK TABLES `isns_user_info` WRITE;
/*!40000 ALTER TABLE `isns_user_info` DISABLE KEYS */;
INSERT INTO `isns_user_info` VALUES (49,1,3,'15613213'),(48,1,7,'123123'),(6,14,6,'CD3'),(7,14,5,'MFG'),(10,15,6,'CD2'),(11,15,5,'AE'),(12,16,5,''),(13,17,5,''),(14,17,6,''),(15,18,5,''),(16,18,6,''),(17,19,6,'CD3'),(18,19,5,'AE'),(19,20,6,'CD3'),(20,20,5,'PE'),(21,20,3,'2123123'),(47,1,5,'Shift B'),(46,1,6,'CD1'),(26,21,6,'请选择'),(27,21,5,'请选择'),(28,22,6,'请选择'),(29,22,5,'请选择'),(30,23,6,'请选择'),(31,23,5,'请选择'),(32,24,6,'请选择'),(33,24,5,'请选择'),(34,25,6,'请选择'),(35,25,5,'请选择'),(36,26,6,'CD1'),(37,26,5,'TE'),(38,27,6,'请选择'),(39,27,5,'请选择'),(40,28,6,'请选择'),(41,28,5,'请选择'),(42,31,6,'CD1'),(43,31,5,'Shift D'),(44,31,7,'123123'),(45,31,3,'123123'),(50,32,6,'CD'),(51,32,5,'TE'),(52,33,6,'请选择'),(53,33,5,'请选择'),(54,2,6,'CD'),(55,2,5,'other'),(56,3,6,'CD'),(57,3,5,'CS'),(58,4,6,'请选择'),(59,4,5,'请选择'),(60,5,6,'CD1'),(61,5,5,'FA'),(62,5,7,'13981752638'),(63,6,6,'CD6'),(64,6,5,'IE'),(65,6,7,'15928636324'),(75,7,7,'13699429030'),(74,7,3,'986749142'),(73,7,5,'Planning'),(72,7,6,'CD'),(70,8,6,'CD'),(71,8,5,'请选择');
/*!40000 ALTER TABLE `isns_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_user_information`
--

DROP TABLE IF EXISTS `isns_user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_user_information` (
  `info_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '信息id',
  `info_name` varchar(255) NOT NULL COMMENT '信息名称',
  `input_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '信息input类型 0:text,1:select,2:radio,3:checkbox',
  `info_values` text COMMENT '信息值 一行代表一个',
  `sort` tinyint(1) NOT NULL DEFAULT '0' COMMENT '显示排序',
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_user_information`
--

LOCK TABLES `isns_user_information` WRITE;
/*!40000 ALTER TABLE `isns_user_information` DISABLE KEYS */;
INSERT INTO `isns_user_information` VALUES (5,'部门',1,'请选择\r\nAE\r\nCS\r\nFA\r\nHR\r\nIE\r\nIT\r\nLogistic\r\nME\r\nNPI\r\nPE\r\nPlanning\r\nQ&amp;R\r\nShift A\r\nShift B\r\nShift C\r\nShift D\r\nTE\r\nTraining\r\nYield\r\nother',1),(3,'QQ',0,'',5),(6,'工厂',1,'请选择\r\nCD\r\nCD1\r\nCD6',0),(7,'联系电话',0,'',7);
/*!40000 ALTER TABLE `isns_user_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `isns_users`
--

DROP TABLE IF EXISTS `isns_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isns_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_pws` char(32) DEFAULT NULL,
  `user_sex` tinyint(2) DEFAULT NULL,
  `birth_province` varchar(30) DEFAULT NULL,
  `birth_city` varchar(30) DEFAULT NULL,
  `reside_province` varchar(30) DEFAULT NULL,
  `reside_city` varchar(30) DEFAULT NULL,
  `user_ico` varchar(150) DEFAULT NULL,
  `is_pass` tinyint(2) DEFAULT '1',
  `user_add_time` datetime DEFAULT NULL,
  `birth_year` char(6) DEFAULT NULL,
  `birth_month` char(4) DEFAULT NULL,
  `birth_day` char(4) DEFAULT NULL,
  `creat_group` varchar(150) DEFAULT NULL,
  `join_group` varchar(150) DEFAULT NULL,
  `guest_num` mediumint(8) unsigned DEFAULT '0',
  `integral` mediumint(8) DEFAULT '10',
  `access_limit` tinyint(2) DEFAULT '0',
  `access_questions` varchar(100) DEFAULT NULL,
  `access_answers` varchar(100) DEFAULT NULL,
  `inputmess_limit` tinyint(2) DEFAULT '0',
  `palsreq_limit` tinyint(2) DEFAULT '0',
  `lastlogin_datetime` datetime DEFAULT NULL,
  `invite_from_uid` mediumint(8) unsigned DEFAULT NULL,
  `hidden_pals_id` text,
  `hidden_type_id` text,
  `login_ip` char(15) DEFAULT NULL,
  `is_recommend` tinyint(2) NOT NULL DEFAULT '0',
  `dressup` varchar(20) DEFAULT '0',
  `use_plugins` varchar(1000) DEFAULT NULL,
  `use_apps` varchar(1000) DEFAULT NULL,
  `user_group` varchar(30) DEFAULT 'base',
  `forget_pass` varchar(50) DEFAULT NULL,
  `activation_id` int(8) DEFAULT '-1' COMMENT '激活码id值',
  `wwid` int(8) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isns_users`
--

LOCK TABLES `isns_users` WRITE;
/*!40000 ALTER TABLE `isns_users` DISABLE KEYS */;
INSERT INTO `isns_users` VALUES (1,'yuyuyu101@163.com','ChairMan','0608eaf998e9535be734481b9063b35b',1,'','','','','uploadfiles/photo_store/2011/08/18/2011081804042161_ico_small.jpg',1,'2011-07-20 12:55:11','1992','2','2',',1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,',NULL,0,276,0,NULL,NULL,0,0,'2011-08-23 10:05:46',0,NULL,NULL,'172.17.28.41',0,'0',NULL,NULL,'1',NULL,-1,99999999),(2,'haomai.wang@intel.com','Wynn','0608eaf998e9535be734481b9063b35b',1,NULL,NULL,NULL,NULL,'uploadfiles/photo_store/2011/08/18/2011081803321484_ico_small.jpg',1,'2011-08-05 13:38:50','','','',NULL,',1,',0,70,0,NULL,NULL,0,0,'2011-08-18 15:31:19',0,NULL,NULL,'172.17.37.90',0,'0',NULL,NULL,'1',NULL,-1,11380869),(5,'reed.tang@intel.com','Reed','efe90a8e604a7c840e88d03a67f6b7d8',1,NULL,NULL,NULL,NULL,'skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-08 15:56:48','','','',NULL,',2,',0,40,0,NULL,NULL,0,0,'2011-08-19 15:09:26',0,NULL,NULL,'172.17.28.35',0,'0',NULL,NULL,'1',NULL,-1,10680788),(6,'junyi.zhang@intel.com','ZhangJunyi','e99a18c428cb38d5f260853678922e03',1,NULL,NULL,NULL,NULL,'skin/default/jooyea/images/d_ico_1_small.gif',1,'2011-08-12 16:12:03','','','',NULL,',5,',0,10,0,NULL,NULL,0,0,'2011-08-12 16:12:03',0,NULL,NULL,'172.17.31.41',0,'0',NULL,NULL,'2',NULL,-1,10711174),(7,'erwen.chen@intel.com','Ervin','ed74cdd30b57265ab425f731fcc568cc',1,'','','','','uploadfiles/photo_store/2011/08/18/2011081804261138_ico_small.jpg',1,'2011-08-18 09:50:37','1989','5','1',NULL,',18,',0,60,0,NULL,NULL,0,0,'2011-08-19 15:10:03',0,NULL,NULL,'172.17.29.14',0,'0',NULL,NULL,'1',NULL,-1,11376754),(8,'sandy.zhou@intel.com','Sandy','bce6b4e178af9347d54043e0637efa8d',0,NULL,NULL,NULL,NULL,'uploadfiles/photo_store/2011/08/18/2011081802332320_ico_small.jpg',1,'2011-08-18 14:07:58','','','',NULL,',19,',0,50,0,NULL,NULL,0,0,'2011-08-18 14:07:58',0,NULL,NULL,'172.17.28.22',0,'0',NULL,NULL,'2',NULL,-1,10699567);
/*!40000 ALTER TABLE `isns_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-25 14:52:27
