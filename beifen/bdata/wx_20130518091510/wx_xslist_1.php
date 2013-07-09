<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_xslist`;");
E_C("CREATE TABLE `wx_xslist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `list_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) unsigned NOT NULL,
  `xs_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=189 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_xslist` values('1','《天学者》之《人生几何》作品相关','0','1');");
E_D("replace into `wx_xslist` values('2','作者不得不说的话','1','1');");
E_D("replace into `wx_xslist` values('4','前言','1','1');");
E_D("replace into `wx_xslist` values('5','第一卷：血海枫林','0','1');");
E_D("replace into `wx_xslist` values('6','第一章：封神塔异变 ','5','1');");
E_D("replace into `wx_xslist` values('7','第二章：智破景门阵','5','1');");
E_D("replace into `wx_xslist` values('8','第三章：不解之卦','5','1');");
E_D("replace into `wx_xslist` values('9','第四章： 迷魂阵','5','1');");
E_D("replace into `wx_xslist` values('10','第五章：雷火惊魂','5','1');");
E_D("replace into `wx_xslist` values('11','第六章： 她是何方神圣','5','1');");
E_D("replace into `wx_xslist` values('12','第七章：谈虎色变','5','1');");
E_D("replace into `wx_xslist` values('13','第八章：山般的巨尸','5','1');");
E_D("replace into `wx_xslist` values('14','第九章（上）：血战死门阵之鬼王出世','5','1');");
E_D("replace into `wx_xslist` values('15','第九章（下）：血战死门阵之七星奔雷真诀','5','1');");
E_D("replace into `wx_xslist` values('16','第十章：落迦仙境','5','1');");
E_D("replace into `wx_xslist` values('17','第十一章：小可爱的馈赠','5','1');");
E_D("replace into `wx_xslist` values('18','第十二章：神奇的说书人','5','1');");
E_D("replace into `wx_xslist` values('19','第十三章：何以解忧，唯有杜康。','5','1');");
E_D("replace into `wx_xslist` values('20','第十四章： 这次绝对正确','5','1');");
E_D("replace into `wx_xslist` values('21','第十五章：济公再世？','5','1');");
E_D("replace into `wx_xslist` values('22','第十六章：楚天一古松','5','1');");
E_D("replace into `wx_xslist` values('23','第十七章：突如其来的国际大战','5','1');");
E_D("replace into `wx_xslist` values('24','第十八章：该死的，每次总是握不到她的手','5','1');");
E_D("replace into `wx_xslist` values('25','第十九章：真是坏了平日，没人信我今朝','5','1');");
E_D("replace into `wx_xslist` values('26','第二十章：天啊~~打雷劈死这群不会动脑筋的人吧','5','1');");
E_D("replace into `wx_xslist` values('27','第二十一章：轩辕斗魂？！','5','1');");
E_D("replace into `wx_xslist` values('28','第二十二章：易象秘诀？！','5','1');");
E_D("replace into `wx_xslist` values('29','第二十三章： 万金不卖','5','1');");
E_D("replace into `wx_xslist` values('30','第二十四章：刚认识的普通朋友','5','1');");
E_D("replace into `wx_xslist` values('31','第二十五章： 因我而生，为你而活。','5','1');");
E_D("replace into `wx_xslist` values('32','第二十六章 ：天纵奇才','5','1');");
E_D("replace into `wx_xslist` values('33','第二十七章 ：你还是不是男人啊？！','5','1');");
E_D("replace into `wx_xslist` values('34','第二十八章 ：这小子什么来头？！','5','1');");
E_D("replace into `wx_xslist` values('35','第二十九章：查！我要查他！','5','1');");
E_D("replace into `wx_xslist` values('36','第三十章：绝不为难你','5','1');");
E_D("replace into `wx_xslist` values('37','第三十一章：你大哥是谁？！','5','1');");
E_D("replace into `wx_xslist` values('38','第三十二章：冤有头，债有主。','5','1');");
E_D("replace into `wx_xslist` values('39','第三十三章：放心。我不是坏人。','5','1');");
E_D("replace into `wx_xslist` values('40','第三十四章： 兰花拂穴手','5','1');");
E_D("replace into `wx_xslist` values('41','第三十五章：真的伤不起','5','1');");
E_D("replace into `wx_xslist` values('42','第三十六章：《真武经》文书昊','5','1');");
E_D("replace into `wx_xslist` values('43','第三十七章：乱魔相','5','1');");
E_D("replace into `wx_xslist` values('44','第三十八章： 你。练了？','5','1');");
E_D("replace into `wx_xslist` values('45','第三十九章：中医，宇宙之核心哲理','5','1');");
E_D("replace into `wx_xslist` values('46','第四十章：伏羲汉字构造义理','5','1');");
E_D("replace into `wx_xslist` values('47','第四十一章： 传说','5','1');");
E_D("replace into `wx_xslist` values('48','第四十二章： 又有宝贝？','5','1');");
E_D("replace into `wx_xslist` values('49','第四十三章：修复《子午神针》。','5','1');");
E_D("replace into `wx_xslist` values('50','第四十四章：煮茶论道','5','1');");
E_D("replace into `wx_xslist` values('51','第四十五章：点化，由点而化。','5','1');");
E_D("replace into `wx_xslist` values('52','第四十六章：造化会元功','5','1');");
E_D("replace into `wx_xslist` values('53','第四十七章：初入神境 ','5','1');");
E_D("replace into `wx_xslist` values('54','第四十八章：这里我好像来过','5','1');");
E_D("replace into `wx_xslist` values('55','第四十九章：池承枫的手段','5','1');");
E_D("replace into `wx_xslist` values('56','第五十章（上）：伪装的魔鬼——解剑','5','1');");
E_D("replace into `wx_xslist` values('57','第五十章（下）：伪装的魔鬼——斗剑','5','1');");
E_D("replace into `wx_xslist` values('58','第五十一章：不合格的军人','5','1');");
E_D("replace into `wx_xslist` values('59','第五十二章：战技训练','5','1');");
E_D("replace into `wx_xslist` values('60','第五十三章：龙息','5','1');");
E_D("replace into `wx_xslist` values('61','第五十四章：金镶玉手镯','5','1');");
E_D("replace into `wx_xslist` values('62','第五十五章：穿长衫的左老师','5','1');");
E_D("replace into `wx_xslist` values('63','第五十六章：点穴治病','5','1');");
E_D("replace into `wx_xslist` values('64','第五十七章：由武入文','5','1');");
E_D("replace into `wx_xslist` values('65','第五十八章：一文而化无穷','5','1');");
E_D("replace into `wx_xslist` values('66','第五十九章：僵尸脸','5','1');");
E_D("replace into `wx_xslist` values('67','第六十章：天下万物皆可入药','5','1');");
E_D("replace into `wx_xslist` values('68','第六十一章：天空霹雳一闪，老子闪亮登场','5','1');");
E_D("replace into `wx_xslist` values('69','第六十二章：这叫《天学》','5','1');");
E_D("replace into `wx_xslist` values('70','第六十三章：一笑泯恩仇','5','1');");
E_D("replace into `wx_xslist` values('71','第六十四章：心病难医','5','1');");
E_D("replace into `wx_xslist` values('72','第六十五章：商鞅变法','5','1');");
E_D("replace into `wx_xslist` values('73','第六十六章：怕死就不是共产党','5','1');");
E_D("replace into `wx_xslist` values('74','第六十七章：朝闻道，夕死可矣','5','1');");
E_D("replace into `wx_xslist` values('75','第六十八章：桥归桥，路归路','5','1');");
E_D("replace into `wx_xslist` values('76','第六十九章：超哥哥最坏了 ','5','1');");
E_D("replace into `wx_xslist` values('77','第七十章：娇躯入怀','5','1');");
E_D("replace into `wx_xslist` values('78','第七十一章：便宜你了 ','5','1');");
E_D("replace into `wx_xslist` values('79','第七十二章：画中玄机','5','1');");
E_D("replace into `wx_xslist` values('80','第七十三章：愉快的晚餐','5','1');");
E_D("replace into `wx_xslist` values('170','第十节','160','2');");
E_D("replace into `wx_xslist` values('169','第九节','160','2');");
E_D("replace into `wx_xslist` values('160',' 卷一：伏羲汉字，文化瑰宝','0','2');");
E_D("replace into `wx_xslist` values('161','第一节','160','2');");
E_D("replace into `wx_xslist` values('162','第二节','160','2');");
E_D("replace into `wx_xslist` values('188','测试发新的章节','160','2');");
E_D("replace into `wx_xslist` values('176','第十六节','160','2');");
E_D("replace into `wx_xslist` values('168','第八节','160','2');");
E_D("replace into `wx_xslist` values('167','第七节','160','2');");
E_D("replace into `wx_xslist` values('163','第三节','160','2');");
E_D("replace into `wx_xslist` values('164','第四节','160','2');");
E_D("replace into `wx_xslist` values('165','第五节','160','2');");
E_D("replace into `wx_xslist` values('166','第六节','160','2');");
E_D("replace into `wx_xslist` values('181','第二十一节','160','2');");
E_D("replace into `wx_xslist` values('175','第十五节','160','2');");
E_D("replace into `wx_xslist` values('174','第十四节','160','2');");
E_D("replace into `wx_xslist` values('182','第二十二节','160','2');");
E_D("replace into `wx_xslist` values('173','第十三节','160','2');");
E_D("replace into `wx_xslist` values('172','第十二节','160','2');");
E_D("replace into `wx_xslist` values('183','第二十三节','160','2');");
E_D("replace into `wx_xslist` values('171','第十一节','160','2');");
E_D("replace into `wx_xslist` values('184','第二十四节','160','2');");
E_D("replace into `wx_xslist` values('177','第十七节','160','2');");
E_D("replace into `wx_xslist` values('178','第十八节','160','2');");
E_D("replace into `wx_xslist` values('179','第十九节','160','2');");
E_D("replace into `wx_xslist` values('180','第二十节','160','2');");

require("../../inc/footer.php");
?>