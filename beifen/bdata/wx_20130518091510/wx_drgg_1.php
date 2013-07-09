<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_drgg`;");
E_C("CREATE TABLE `wx_drgg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `daren_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `posttime` int(11) unsigned NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

require("../../inc/footer.php");
?>