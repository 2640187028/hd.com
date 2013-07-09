<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_qqgroup_affiche`;");
E_C("CREATE TABLE `wx_qqgroup_affiche` (
  `aff_id` int(11) NOT NULL AUTO_INCREMENT,
  `qqgroup_id` int(11) NOT NULL,
  `aff_content` text COLLATE utf8_unicode_ci NOT NULL,
  `aff_time` datetime NOT NULL,
  PRIMARY KEY (`aff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

require("../../inc/footer.php");
?>