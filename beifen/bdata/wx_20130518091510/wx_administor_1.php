<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_administor`;");
E_C("CREATE TABLE `wx_administor` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identify_id` smallint(5) unsigned NOT NULL,
  `login_ip` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lasttime` int(10) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_administor` values('1','root','63a9f0ea7bb98050796b649e85481845','','1','192.168.1.103','1366530139','1');");
E_D("replace into `wx_administor` values('2','editor','63a9f0ea7bb98050796b649e85481845','','2','192.168.1.104','2013','1');");
E_D("replace into `wx_administor` values('3','manger','63a9f0ea7bb98050796b649e85481845','','3','192.168.1.100','2013','1');");

require("../../inc/footer.php");
?>