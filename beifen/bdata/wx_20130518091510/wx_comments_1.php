<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_comments`;");
E_C("CREATE TABLE `wx_comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `xs_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_time` datetime NOT NULL,
  `where_from` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reply_id` int(11) NOT NULL,
  `view` int(1) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_comments` values('1','2','68412505','写的很好，受益非浅。','2013-05-18 16:08:20','本网站','0','1');");
E_D("replace into `wx_comments` values('2','2','123456789','谢谢！','2013-05-18 16:09:30','本网站','1','0');");

require("../../inc/footer.php");
?>