<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_ggwd`;");
E_C("CREATE TABLE `wx_ggwd` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `num` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_ggwd` values('5','2674035041','0');");
E_D("replace into `wx_ggwd` values('2','123456789','0');");
E_D("replace into `wx_ggwd` values('3','68412505','0');");
E_D("replace into `wx_ggwd` values('4','1015097573','0');");

require("../../inc/footer.php");
?>