<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_qqgroup`;");
E_C("CREATE TABLE `wx_qqgroup` (
  `qqgroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `qqgroup_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qun_num` int(15) NOT NULL,
  `qun_max` int(5) NOT NULL,
  PRIMARY KEY (`qqgroup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_qqgroup` values('1','伏羲天学书院','277705233','500');");

require("../../inc/footer.php");
?>