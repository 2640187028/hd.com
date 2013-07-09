<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_mrole`;");
E_C("CREATE TABLE `wx_mrole` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `member_role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_mrole` values('1','注册用户');");
E_D("replace into `wx_mrole` values('2','网络达人');");
E_D("replace into `wx_mrole` values('3','VIP达人');");
E_D("replace into `wx_mrole` values('4','普通伯乐');");
E_D("replace into `wx_mrole` values('5','VIP伯乐');");
E_D("replace into `wx_mrole` values('6','合作伙伴');");
E_D("replace into `wx_mrole` values('7','志愿者');");
E_D("replace into `wx_mrole` values('8','小编');");
E_D("replace into `wx_mrole` values('9','QQ群主');");

require("../../inc/footer.php");
?>