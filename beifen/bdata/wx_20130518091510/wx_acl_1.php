<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_acl`;");
E_C("CREATE TABLE `wx_acl` (
  `aclid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `acl_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aclid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_acl` values('1','后台登陆','main','login','SPANONYMOUS');");
E_D("replace into `wx_acl` values('2','后台登陆验证','main','login_check','SPANONYMOUS');");
E_D("replace into `wx_acl` values('3','退出后台','main','logout','SPANONYMOUS');");
E_D("replace into `wx_acl` values('4','后台验证码','main','_vcode','SPANONYMOUS');");
E_D("replace into `wx_acl` values('5','后台框架主页','main','index','SUPERADMIN');");
E_D("replace into `wx_acl` values('6','后台框架主页','main','index','EDITOR');");
E_D("replace into `wx_acl` values('7','后台框架主页','main','index','MANGER');");
E_D("replace into `wx_acl` values('8','后台框架顶部','main','top','SUPERADMIN');");
E_D("replace into `wx_acl` values('9','后台框架顶部','main','top','EDITOR');");
E_D("replace into `wx_acl` values('10','后台框架顶部','main','top','MANGER');");
E_D("replace into `wx_acl` values('11','后台框架导航','main','left','SUPERADMIN');");
E_D("replace into `wx_acl` values('12','后台框架导航','main','left','EDITOR');");
E_D("replace into `wx_acl` values('13','后台框架导航','main','left','MANGER');");
E_D("replace into `wx_acl` values('14','后台框架内容','main','right','SUPERADMIN');");
E_D("replace into `wx_acl` values('15','后台框架内容','main','right','EDITOR');");
E_D("replace into `wx_acl` values('16','后台框架内容','main','right','MANGER');");
E_D("replace into `wx_acl` values('17','网站运行情况','main','statu','SUPERADMIN');");
E_D("replace into `wx_acl` values('18','网站基本设置','setting','index','SUPERADMIN');");
E_D("replace into `wx_acl` values('19','管理员设置','manger','index','SUPERADMIN');");
E_D("replace into `wx_acl` values('20','后台主框架','main','iframe','SUPERADMIN');");
E_D("replace into `wx_acl` values('21','后台主框架','main','iframe','EDITOR');");
E_D("replace into `wx_acl` values('22','后台主框架','main','iframe','MANGER');");
E_D("replace into `wx_acl` values('23','后台管理员添加','manger','addition','SUPERADMIN');");
E_D("replace into `wx_acl` values('24','设置管理员角色','manger','mrole','SUPERADMIN');");
E_D("replace into `wx_acl` values('25','注册设置','member','setting','SUPERADMIN');");
E_D("replace into `wx_acl` values('26','用户管理','member','index','SUPERADMIN');");
E_D("replace into `wx_acl` values('27','添加用户','member','add','SUPERADMIN');");
E_D("replace into `wx_acl` values('28','管理用户角色','member','mrole','SUPERADMIN');");
E_D("replace into `wx_acl` values('29','添加成员ajax判断','member','add_ajax','SUPERADMIN');");
E_D("replace into `wx_acl` values('30','用户添加处理','member','add_do','SUPERADMIN');");

require("../../inc/footer.php");
?>