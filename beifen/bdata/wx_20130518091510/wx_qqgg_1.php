<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_qqgg`;");
E_C("CREATE TABLE `wx_qqgg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `qun_id` int(11) unsigned NOT NULL,
  `qq_num` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `qq_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `posttime` int(11) NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

require("../../inc/footer.php");
?>