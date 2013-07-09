<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_ggtj`;");
E_C("CREATE TABLE `wx_ggtj` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gg_id` int(11) unsigned NOT NULL,
  `yidu` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

require("../../inc/footer.php");
?>