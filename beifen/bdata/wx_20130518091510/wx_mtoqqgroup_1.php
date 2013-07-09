<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_mtoqqgroup`;");
E_C("CREATE TABLE `wx_mtoqqgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `qqgroup_id` int(11) NOT NULL,
  `is_boss` int(1) NOT NULL,
  `is_admin` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=337 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_mtoqqgroup` values('1','123456789','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('2','68412505','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('10','1015097573','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('13','123123','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('14','123123','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('15','494949501','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('16','4918848','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('17','179063711','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('18','284958981','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('19','494949500','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('20','31646','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('21','323934','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('22','2537794','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('23','2819435','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('24','3489340','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('25','5841546','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('26','7116215','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('27','7399904','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('28','8503595','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('29','8510596','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('30','9028907','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('31','14086646','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('32','15399088','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('33','15936326','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('34','16880139','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('35','17235945','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('36','17998378','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('37','18576986','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('38','19663395','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('39','21245075','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('40','22308516','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('41','26288910','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('42','26340662','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('43','27864658','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('44','28287810','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('45','29048072','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('46','29149057','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('47','32507661','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('48','33960135','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('49','33965810','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('50','36451588','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('51','37483515','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('52','40838960','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('53','41786038','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('54','42150706','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('55','48318898','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('56','48571684','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('57','50993371','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('58','52248231','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('59','52499726','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('60','53643439','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('61','54209928','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('62','54241311','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('63','54594743','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('64','56617204','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('65','58188207','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('66','59444805','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('67','59567736','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('68','63828178','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('69','66402212','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('70','75000753','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('71','75505332','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('72','76676690','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('73','77912776','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('74','78712205','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('75','78745078','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('76','80970596','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('77','81842254','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('78','83053203','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('79','84918225','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('80','86850760','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('81','89364971','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('82','99652930','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('83','99665728','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('84','110038099','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('85','115437550','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('86','120556826','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('87','125117368','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('88','136467228','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('89','156120075','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('90','156172411','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('91','166500888','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('92','172049779','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('93','172238037','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('94','176729855','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('95','181084715','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('96','181708088','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('97','187325691','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('98','215078135','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('99','234619229','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('100','236991919','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('101','241137969','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('102','249494549','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('103','250821623','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('104','253425661','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('105','254080417','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('106','254282253','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('107','271487630','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('108','271617927','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('109','272479635','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('110','273081358','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('111','273230103','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('112','275337098','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('113','276467682','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('114','278938047','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('115','279365449','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('116','280620782','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('117','285565792','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('118','286548476','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('119','292410483','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('120','303069406','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('121','305114228','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('122','307430897','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('123','307528696','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('124','307559580','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('125','308059482','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('126','308202934','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('127','308402028','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('128','309186675','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('129','309454150','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('130','313413571','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('131','315707022','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('132','327888376','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('133','328507093','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('134','329514164','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('135','332023850','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('136','343371081','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('137','344133588','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('138','346610538','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('139','348542856','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('140','348879263','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('141','350277927','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('142','359561650','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('143','362155409','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('144','363116916','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('145','371949216','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('146','372655992','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('147','373009945','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('148','373135587','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('149','376541360','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('150','378756737','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('151','380596594','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('152','382007855','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('153','382728127','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('154','382766681','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('155','383932421','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('156','386970074','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('157','393401442','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('158','393419949','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('159','394740274','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('160','404280473','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('161','405660754','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('162','406569901','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('163','406660289','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('164','415602114','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('165','418887758','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('166','419143222','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('167','419425542','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('168','420254648','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('169','422798923','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('170','444357343','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('171','448247731','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('172','448621898','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('173','449005738','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('174','449201490','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('175','452601739','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('176','453861601','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('177','455679856','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('178','457979057','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('179','467798118','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('180','470124060','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('181','479783648','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('182','493104599','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('183','496905498','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('184','509164316','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('185','513084472','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('186','515447078','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('187','516157404','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('188','517437943','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('189','522762757','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('190','525092716','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('191','526116418','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('192','529968194','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('193','532581997','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('194','532702008','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('195','543347219','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('196','544324979','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('197','545210463','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('198','545609133','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('199','545969943','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('200','549407940','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('201','549985989','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('202','552343009','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('203','562729045','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('204','563549608','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('205','573645347','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('206','575979395','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('207','576850778','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('208','583296656','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('209','592736687','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('210','594124155','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('211','594702866','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('212','610724251','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('213','616607399','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('214','623154061','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('215','624112228','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('216','627190384','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('217','631192966','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('218','646936670','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('219','649206384','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('220','664004528','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('221','664791379','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('222','707199118','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('223','709690207','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('224','731471842','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('225','751191964','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('226','755874454','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('227','756733980','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('228','757534373','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('229','763424627','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('230','771267768','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('231','778774876','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('232','790257321','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('233','790642433','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('234','809278016','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('235','809737345','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('236','813907462','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('237','815394864','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('238','820355743','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('239','826485287','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('240','827851338','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('241','853755774','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('242','854008086','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('243','857434821','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('244','867724294','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('245','879201259','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('246','891782034','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('247','893429233','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('248','895060172','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('249','895301295','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('250','908126843','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('251','909750787','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('252','914018452','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('253','916842208','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('254','923610494','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('255','951626988','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('256','958804731','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('257','963574975','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('258','975070298','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('259','976221419','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('260','1002187204','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('261','1009347727','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('262','1012046731','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('263','1032734095','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('264','1055442943','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('265','1057553169','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('266','1067213349','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('267','1091553780','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('268','1096283849','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('269','1101633193','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('270','1123055974','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('271','1132217592','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('272','1136095659','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('273','1140127569','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('274','1149096604','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('275','1205507664','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('276','1211229148','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('277','1241157258','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('278','1241314565','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('279','1251129387','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('280','1253779751','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('281','1257159226','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('282','1275344471','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('283','1284979652','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('284','1294072729','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('285','1304368011','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('286','1316027150','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('287','1322843855','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('288','1327115233','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('289','1329798281','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('290','1341743734','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('291','1342638348','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('292','1423987860','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('293','1443218254','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('294','1448157781','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('295','1458925579','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('296','1470569925','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('297','1485584687','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('298','1525451251','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('299','1527228660','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('300','1544684242','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('301','1548019416','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('302','1576030655','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('303','1635137477','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('304','1666303852','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('305','1712699518','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('306','1744919851','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('307','1765453724','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('308','1780955123','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('309','1836686183','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('310','1845961490','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('311','1952109669','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('312','1963922029','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('313','1975824086','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('314','2209099621','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('315','2248285835','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('316','2251533128','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('317','2251925439','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('318','2302243386','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('319','2329547890','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('320','2358529914','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('321','2365246587','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('322','2382149249','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('323','2424494430','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('324','2429181543','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('325','2482239703','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('326','2499702625','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('327','2501153140','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('328','2519363474','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('329','2530500188','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('330','2587051011','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('331','2622052972','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('332','2625148143','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('333','2634060653','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('334','2674035041','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('335','2832352250','1','0','0');");
E_D("replace into `wx_mtoqqgroup` values('336','2856558902','1','0','0');");

require("../../inc/footer.php");
?>