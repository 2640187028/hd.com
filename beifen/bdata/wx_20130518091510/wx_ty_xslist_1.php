<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_ty_xslist`;");
E_C("CREATE TABLE `wx_ty_xslist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `articleid` int(11) unsigned NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `xs_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_ty_xslist` values('1','16','848396','《天学者》','123456789','1');");
E_D("replace into `wx_ty_xslist` values('3','16','870141','解密伏羲最新研究成果','123456789','2');");

require("../../inc/footer.php");
?>