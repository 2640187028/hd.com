<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_adminrole`;");
E_C("CREATE TABLE `wx_adminrole` (
  `identify_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `identify` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `authority` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`identify_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_adminrole` values('1','超级管理员','SUPERADMIN');");
E_D("replace into `wx_adminrole` values('2','小编','EDITOR');");
E_D("replace into `wx_adminrole` values('3','管理员','MANGER');");

require("../../inc/footer.php");
?>