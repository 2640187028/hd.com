<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_member_active`;");
E_C("CREATE TABLE `wx_member_active` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `md6` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `expire_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_member_active` values('1','123123','a2caf73b3fefaf128f49c336096fa072','1368871089');");
E_D("replace into `wx_member_active` values('3','1015097573','f23841a423c6599728f445768c0c642d','1368871954');");
E_D("replace into `wx_member_active` values('4','1015097573','b5751dd4d1ca32c4ff655c632ed1ede6','1368871978');");
E_D("replace into `wx_member_active` values('5','1015097573','68966b7184002884e0e5540e6717473b','1368872002');");
E_D("replace into `wx_member_active` values('6','1015097573','839243983ac0850ea32c109c9efb0617','1368872038');");

require("../../inc/footer.php");
?>