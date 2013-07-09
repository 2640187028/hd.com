<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_prevol`;");
E_C("CREATE TABLE `wx_prevol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_prevol` values('1','68412505','123456789','1');");
E_D("replace into `wx_prevol` values('2','1015097573','123456789','1');");

require("../../inc/footer.php");
?>