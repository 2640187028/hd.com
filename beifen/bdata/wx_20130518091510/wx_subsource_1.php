<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_subsource`;");
E_C("CREATE TABLE `wx_subsource` (
  `s_id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `s_type` tinyint(1) unsigned NOT NULL,
  `s_parentid` mediumint(5) unsigned NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_name` (`s_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_subsource` values('1','微博订阅','0','0');");
E_D("replace into `wx_subsource` values('2','博客订阅','0','0');");
E_D("replace into `wx_subsource` values('3','论坛订阅','0','0');");
E_D("replace into `wx_subsource` values('4','频道订阅','0','0');");
E_D("replace into `wx_subsource` values('5','国学研读','0','0');");
E_D("replace into `wx_subsource` values('6','时政评论','0','0');");
E_D("replace into `wx_subsource` values('7','经济纵横','0','0');");
E_D("replace into `wx_subsource` values('8','特色业务','0','0');");
E_D("replace into `wx_subsource` values('9','定制业务','0','0');");
E_D("replace into `wx_subsource` values('10','新浪微博','0','1');");
E_D("replace into `wx_subsource` values('11','腾讯微博','0','1');");

require("../../inc/footer.php");
?>