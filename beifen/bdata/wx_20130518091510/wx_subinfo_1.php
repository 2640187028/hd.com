<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_subinfo`;");
E_C("CREATE TABLE `wx_subinfo` (
  `sub_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `daren_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `source_id` mediumint(5) unsigned NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=331 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_subinfo` values('1','68412505','123456789','5');");
E_D("replace into `wx_subinfo` values('2','1015097573','123456789','5');");
E_D("replace into `wx_subinfo` values('12','284958981','123456789','5');");
E_D("replace into `wx_subinfo` values('11','179063711','123456789','5');");
E_D("replace into `wx_subinfo` values('10','4918848','123456789','5');");
E_D("replace into `wx_subinfo` values('9','494949501','123456789','5');");
E_D("replace into `wx_subinfo` values('8','123123','123456789','5');");
E_D("replace into `wx_subinfo` values('13','494949500','123456789','5');");
E_D("replace into `wx_subinfo` values('14','31646','123456789','5');");
E_D("replace into `wx_subinfo` values('15','323934','123456789','5');");
E_D("replace into `wx_subinfo` values('16','2537794','123456789','5');");
E_D("replace into `wx_subinfo` values('17','2819435','123456789','5');");
E_D("replace into `wx_subinfo` values('18','3489340','123456789','5');");
E_D("replace into `wx_subinfo` values('19','5841546','123456789','5');");
E_D("replace into `wx_subinfo` values('20','7116215','123456789','5');");
E_D("replace into `wx_subinfo` values('21','7399904','123456789','5');");
E_D("replace into `wx_subinfo` values('22','8503595','123456789','5');");
E_D("replace into `wx_subinfo` values('23','8510596','123456789','5');");
E_D("replace into `wx_subinfo` values('24','9028907','123456789','5');");
E_D("replace into `wx_subinfo` values('25','14086646','123456789','5');");
E_D("replace into `wx_subinfo` values('26','15399088','123456789','5');");
E_D("replace into `wx_subinfo` values('27','15936326','123456789','5');");
E_D("replace into `wx_subinfo` values('28','16880139','123456789','5');");
E_D("replace into `wx_subinfo` values('29','17235945','123456789','5');");
E_D("replace into `wx_subinfo` values('30','17998378','123456789','5');");
E_D("replace into `wx_subinfo` values('31','18576986','123456789','5');");
E_D("replace into `wx_subinfo` values('32','19663395','123456789','5');");
E_D("replace into `wx_subinfo` values('33','21245075','123456789','5');");
E_D("replace into `wx_subinfo` values('34','22308516','123456789','5');");
E_D("replace into `wx_subinfo` values('35','26288910','123456789','5');");
E_D("replace into `wx_subinfo` values('36','26340662','123456789','5');");
E_D("replace into `wx_subinfo` values('37','27864658','123456789','5');");
E_D("replace into `wx_subinfo` values('38','28287810','123456789','5');");
E_D("replace into `wx_subinfo` values('39','29048072','123456789','5');");
E_D("replace into `wx_subinfo` values('40','29149057','123456789','5');");
E_D("replace into `wx_subinfo` values('41','32507661','123456789','5');");
E_D("replace into `wx_subinfo` values('42','33960135','123456789','5');");
E_D("replace into `wx_subinfo` values('43','33965810','123456789','5');");
E_D("replace into `wx_subinfo` values('44','36451588','123456789','5');");
E_D("replace into `wx_subinfo` values('45','37483515','123456789','5');");
E_D("replace into `wx_subinfo` values('46','40838960','123456789','5');");
E_D("replace into `wx_subinfo` values('47','41786038','123456789','5');");
E_D("replace into `wx_subinfo` values('48','42150706','123456789','5');");
E_D("replace into `wx_subinfo` values('49','48318898','123456789','5');");
E_D("replace into `wx_subinfo` values('50','48571684','123456789','5');");
E_D("replace into `wx_subinfo` values('51','50993371','123456789','5');");
E_D("replace into `wx_subinfo` values('52','52248231','123456789','5');");
E_D("replace into `wx_subinfo` values('53','52499726','123456789','5');");
E_D("replace into `wx_subinfo` values('54','53643439','123456789','5');");
E_D("replace into `wx_subinfo` values('55','54209928','123456789','5');");
E_D("replace into `wx_subinfo` values('56','54241311','123456789','5');");
E_D("replace into `wx_subinfo` values('57','54594743','123456789','5');");
E_D("replace into `wx_subinfo` values('58','56617204','123456789','5');");
E_D("replace into `wx_subinfo` values('59','58188207','123456789','5');");
E_D("replace into `wx_subinfo` values('60','59444805','123456789','5');");
E_D("replace into `wx_subinfo` values('61','59567736','123456789','5');");
E_D("replace into `wx_subinfo` values('62','63828178','123456789','5');");
E_D("replace into `wx_subinfo` values('63','66402212','123456789','5');");
E_D("replace into `wx_subinfo` values('64','75000753','123456789','5');");
E_D("replace into `wx_subinfo` values('65','75505332','123456789','5');");
E_D("replace into `wx_subinfo` values('66','76676690','123456789','5');");
E_D("replace into `wx_subinfo` values('67','77912776','123456789','5');");
E_D("replace into `wx_subinfo` values('68','78712205','123456789','5');");
E_D("replace into `wx_subinfo` values('69','78745078','123456789','5');");
E_D("replace into `wx_subinfo` values('70','80970596','123456789','5');");
E_D("replace into `wx_subinfo` values('71','81842254','123456789','5');");
E_D("replace into `wx_subinfo` values('72','83053203','123456789','5');");
E_D("replace into `wx_subinfo` values('73','84918225','123456789','5');");
E_D("replace into `wx_subinfo` values('74','86850760','123456789','5');");
E_D("replace into `wx_subinfo` values('75','89364971','123456789','5');");
E_D("replace into `wx_subinfo` values('76','99652930','123456789','5');");
E_D("replace into `wx_subinfo` values('77','99665728','123456789','5');");
E_D("replace into `wx_subinfo` values('78','110038099','123456789','5');");
E_D("replace into `wx_subinfo` values('79','115437550','123456789','5');");
E_D("replace into `wx_subinfo` values('80','120556826','123456789','5');");
E_D("replace into `wx_subinfo` values('81','125117368','123456789','5');");
E_D("replace into `wx_subinfo` values('82','136467228','123456789','5');");
E_D("replace into `wx_subinfo` values('83','156120075','123456789','5');");
E_D("replace into `wx_subinfo` values('84','156172411','123456789','5');");
E_D("replace into `wx_subinfo` values('85','166500888','123456789','5');");
E_D("replace into `wx_subinfo` values('86','172049779','123456789','5');");
E_D("replace into `wx_subinfo` values('87','172238037','123456789','5');");
E_D("replace into `wx_subinfo` values('88','176729855','123456789','5');");
E_D("replace into `wx_subinfo` values('89','181084715','123456789','5');");
E_D("replace into `wx_subinfo` values('90','181708088','123456789','5');");
E_D("replace into `wx_subinfo` values('91','187325691','123456789','5');");
E_D("replace into `wx_subinfo` values('92','215078135','123456789','5');");
E_D("replace into `wx_subinfo` values('93','234619229','123456789','5');");
E_D("replace into `wx_subinfo` values('94','236991919','123456789','5');");
E_D("replace into `wx_subinfo` values('95','241137969','123456789','5');");
E_D("replace into `wx_subinfo` values('96','249494549','123456789','5');");
E_D("replace into `wx_subinfo` values('97','250821623','123456789','5');");
E_D("replace into `wx_subinfo` values('98','253425661','123456789','5');");
E_D("replace into `wx_subinfo` values('99','254080417','123456789','5');");
E_D("replace into `wx_subinfo` values('100','254282253','123456789','5');");
E_D("replace into `wx_subinfo` values('101','271487630','123456789','5');");
E_D("replace into `wx_subinfo` values('102','271617927','123456789','5');");
E_D("replace into `wx_subinfo` values('103','272479635','123456789','5');");
E_D("replace into `wx_subinfo` values('104','273081358','123456789','5');");
E_D("replace into `wx_subinfo` values('105','273230103','123456789','5');");
E_D("replace into `wx_subinfo` values('106','275337098','123456789','5');");
E_D("replace into `wx_subinfo` values('107','276467682','123456789','5');");
E_D("replace into `wx_subinfo` values('108','278938047','123456789','5');");
E_D("replace into `wx_subinfo` values('109','279365449','123456789','5');");
E_D("replace into `wx_subinfo` values('110','280620782','123456789','5');");
E_D("replace into `wx_subinfo` values('111','285565792','123456789','5');");
E_D("replace into `wx_subinfo` values('112','286548476','123456789','5');");
E_D("replace into `wx_subinfo` values('113','292410483','123456789','5');");
E_D("replace into `wx_subinfo` values('114','303069406','123456789','5');");
E_D("replace into `wx_subinfo` values('115','305114228','123456789','5');");
E_D("replace into `wx_subinfo` values('116','307430897','123456789','5');");
E_D("replace into `wx_subinfo` values('117','307528696','123456789','5');");
E_D("replace into `wx_subinfo` values('118','307559580','123456789','5');");
E_D("replace into `wx_subinfo` values('119','308059482','123456789','5');");
E_D("replace into `wx_subinfo` values('120','308202934','123456789','5');");
E_D("replace into `wx_subinfo` values('121','308402028','123456789','5');");
E_D("replace into `wx_subinfo` values('122','309186675','123456789','5');");
E_D("replace into `wx_subinfo` values('123','309454150','123456789','5');");
E_D("replace into `wx_subinfo` values('124','313413571','123456789','5');");
E_D("replace into `wx_subinfo` values('125','315707022','123456789','5');");
E_D("replace into `wx_subinfo` values('126','327888376','123456789','5');");
E_D("replace into `wx_subinfo` values('127','328507093','123456789','5');");
E_D("replace into `wx_subinfo` values('128','329514164','123456789','5');");
E_D("replace into `wx_subinfo` values('129','332023850','123456789','5');");
E_D("replace into `wx_subinfo` values('130','343371081','123456789','5');");
E_D("replace into `wx_subinfo` values('131','344133588','123456789','5');");
E_D("replace into `wx_subinfo` values('132','346610538','123456789','5');");
E_D("replace into `wx_subinfo` values('133','348542856','123456789','5');");
E_D("replace into `wx_subinfo` values('134','348879263','123456789','5');");
E_D("replace into `wx_subinfo` values('135','350277927','123456789','5');");
E_D("replace into `wx_subinfo` values('136','359561650','123456789','5');");
E_D("replace into `wx_subinfo` values('137','362155409','123456789','5');");
E_D("replace into `wx_subinfo` values('138','363116916','123456789','5');");
E_D("replace into `wx_subinfo` values('139','371949216','123456789','5');");
E_D("replace into `wx_subinfo` values('140','372655992','123456789','5');");
E_D("replace into `wx_subinfo` values('141','373009945','123456789','5');");
E_D("replace into `wx_subinfo` values('142','373135587','123456789','5');");
E_D("replace into `wx_subinfo` values('143','376541360','123456789','5');");
E_D("replace into `wx_subinfo` values('144','378756737','123456789','5');");
E_D("replace into `wx_subinfo` values('145','380596594','123456789','5');");
E_D("replace into `wx_subinfo` values('146','382007855','123456789','5');");
E_D("replace into `wx_subinfo` values('147','382728127','123456789','5');");
E_D("replace into `wx_subinfo` values('148','382766681','123456789','5');");
E_D("replace into `wx_subinfo` values('149','383932421','123456789','5');");
E_D("replace into `wx_subinfo` values('150','386970074','123456789','5');");
E_D("replace into `wx_subinfo` values('151','393401442','123456789','5');");
E_D("replace into `wx_subinfo` values('152','393419949','123456789','5');");
E_D("replace into `wx_subinfo` values('153','394740274','123456789','5');");
E_D("replace into `wx_subinfo` values('154','404280473','123456789','5');");
E_D("replace into `wx_subinfo` values('155','405660754','123456789','5');");
E_D("replace into `wx_subinfo` values('156','406569901','123456789','5');");
E_D("replace into `wx_subinfo` values('157','406660289','123456789','5');");
E_D("replace into `wx_subinfo` values('158','415602114','123456789','5');");
E_D("replace into `wx_subinfo` values('159','418887758','123456789','5');");
E_D("replace into `wx_subinfo` values('160','419143222','123456789','5');");
E_D("replace into `wx_subinfo` values('161','419425542','123456789','5');");
E_D("replace into `wx_subinfo` values('162','420254648','123456789','5');");
E_D("replace into `wx_subinfo` values('163','422798923','123456789','5');");
E_D("replace into `wx_subinfo` values('164','444357343','123456789','5');");
E_D("replace into `wx_subinfo` values('165','448247731','123456789','5');");
E_D("replace into `wx_subinfo` values('166','448621898','123456789','5');");
E_D("replace into `wx_subinfo` values('167','449005738','123456789','5');");
E_D("replace into `wx_subinfo` values('168','449201490','123456789','5');");
E_D("replace into `wx_subinfo` values('169','452601739','123456789','5');");
E_D("replace into `wx_subinfo` values('170','453861601','123456789','5');");
E_D("replace into `wx_subinfo` values('171','455679856','123456789','5');");
E_D("replace into `wx_subinfo` values('172','457979057','123456789','5');");
E_D("replace into `wx_subinfo` values('173','467798118','123456789','5');");
E_D("replace into `wx_subinfo` values('174','470124060','123456789','5');");
E_D("replace into `wx_subinfo` values('175','479783648','123456789','5');");
E_D("replace into `wx_subinfo` values('176','493104599','123456789','5');");
E_D("replace into `wx_subinfo` values('177','496905498','123456789','5');");
E_D("replace into `wx_subinfo` values('178','509164316','123456789','5');");
E_D("replace into `wx_subinfo` values('179','513084472','123456789','5');");
E_D("replace into `wx_subinfo` values('180','515447078','123456789','5');");
E_D("replace into `wx_subinfo` values('181','516157404','123456789','5');");
E_D("replace into `wx_subinfo` values('182','517437943','123456789','5');");
E_D("replace into `wx_subinfo` values('183','522762757','123456789','5');");
E_D("replace into `wx_subinfo` values('184','525092716','123456789','5');");
E_D("replace into `wx_subinfo` values('185','526116418','123456789','5');");
E_D("replace into `wx_subinfo` values('186','529968194','123456789','5');");
E_D("replace into `wx_subinfo` values('187','532581997','123456789','5');");
E_D("replace into `wx_subinfo` values('188','532702008','123456789','5');");
E_D("replace into `wx_subinfo` values('189','543347219','123456789','5');");
E_D("replace into `wx_subinfo` values('190','544324979','123456789','5');");
E_D("replace into `wx_subinfo` values('191','545210463','123456789','5');");
E_D("replace into `wx_subinfo` values('192','545609133','123456789','5');");
E_D("replace into `wx_subinfo` values('193','545969943','123456789','5');");
E_D("replace into `wx_subinfo` values('194','549407940','123456789','5');");
E_D("replace into `wx_subinfo` values('195','549985989','123456789','5');");
E_D("replace into `wx_subinfo` values('196','552343009','123456789','5');");
E_D("replace into `wx_subinfo` values('197','562729045','123456789','5');");
E_D("replace into `wx_subinfo` values('198','563549608','123456789','5');");
E_D("replace into `wx_subinfo` values('199','573645347','123456789','5');");
E_D("replace into `wx_subinfo` values('200','575979395','123456789','5');");
E_D("replace into `wx_subinfo` values('201','576850778','123456789','5');");
E_D("replace into `wx_subinfo` values('202','583296656','123456789','5');");
E_D("replace into `wx_subinfo` values('203','592736687','123456789','5');");
E_D("replace into `wx_subinfo` values('204','594124155','123456789','5');");
E_D("replace into `wx_subinfo` values('205','594702866','123456789','5');");
E_D("replace into `wx_subinfo` values('206','610724251','123456789','5');");
E_D("replace into `wx_subinfo` values('207','616607399','123456789','5');");
E_D("replace into `wx_subinfo` values('208','623154061','123456789','5');");
E_D("replace into `wx_subinfo` values('209','624112228','123456789','5');");
E_D("replace into `wx_subinfo` values('210','627190384','123456789','5');");
E_D("replace into `wx_subinfo` values('211','631192966','123456789','5');");
E_D("replace into `wx_subinfo` values('212','646936670','123456789','5');");
E_D("replace into `wx_subinfo` values('213','649206384','123456789','5');");
E_D("replace into `wx_subinfo` values('214','664004528','123456789','5');");
E_D("replace into `wx_subinfo` values('215','664791379','123456789','5');");
E_D("replace into `wx_subinfo` values('216','707199118','123456789','5');");
E_D("replace into `wx_subinfo` values('217','709690207','123456789','5');");
E_D("replace into `wx_subinfo` values('218','731471842','123456789','5');");
E_D("replace into `wx_subinfo` values('219','751191964','123456789','5');");
E_D("replace into `wx_subinfo` values('220','755874454','123456789','5');");
E_D("replace into `wx_subinfo` values('221','756733980','123456789','5');");
E_D("replace into `wx_subinfo` values('222','757534373','123456789','5');");
E_D("replace into `wx_subinfo` values('223','763424627','123456789','5');");
E_D("replace into `wx_subinfo` values('224','771267768','123456789','5');");
E_D("replace into `wx_subinfo` values('225','778774876','123456789','5');");
E_D("replace into `wx_subinfo` values('226','790257321','123456789','5');");
E_D("replace into `wx_subinfo` values('227','790642433','123456789','5');");
E_D("replace into `wx_subinfo` values('228','809278016','123456789','5');");
E_D("replace into `wx_subinfo` values('229','809737345','123456789','5');");
E_D("replace into `wx_subinfo` values('230','813907462','123456789','5');");
E_D("replace into `wx_subinfo` values('231','815394864','123456789','5');");
E_D("replace into `wx_subinfo` values('232','820355743','123456789','5');");
E_D("replace into `wx_subinfo` values('233','826485287','123456789','5');");
E_D("replace into `wx_subinfo` values('234','827851338','123456789','5');");
E_D("replace into `wx_subinfo` values('235','853755774','123456789','5');");
E_D("replace into `wx_subinfo` values('236','854008086','123456789','5');");
E_D("replace into `wx_subinfo` values('237','857434821','123456789','5');");
E_D("replace into `wx_subinfo` values('238','867724294','123456789','5');");
E_D("replace into `wx_subinfo` values('239','879201259','123456789','5');");
E_D("replace into `wx_subinfo` values('240','891782034','123456789','5');");
E_D("replace into `wx_subinfo` values('241','893429233','123456789','5');");
E_D("replace into `wx_subinfo` values('242','895060172','123456789','5');");
E_D("replace into `wx_subinfo` values('243','895301295','123456789','5');");
E_D("replace into `wx_subinfo` values('244','908126843','123456789','5');");
E_D("replace into `wx_subinfo` values('245','909750787','123456789','5');");
E_D("replace into `wx_subinfo` values('246','914018452','123456789','5');");
E_D("replace into `wx_subinfo` values('247','916842208','123456789','5');");
E_D("replace into `wx_subinfo` values('248','923610494','123456789','5');");
E_D("replace into `wx_subinfo` values('249','951626988','123456789','5');");
E_D("replace into `wx_subinfo` values('250','958804731','123456789','5');");
E_D("replace into `wx_subinfo` values('251','963574975','123456789','5');");
E_D("replace into `wx_subinfo` values('252','975070298','123456789','5');");
E_D("replace into `wx_subinfo` values('253','976221419','123456789','5');");
E_D("replace into `wx_subinfo` values('254','1002187204','123456789','5');");
E_D("replace into `wx_subinfo` values('255','1009347727','123456789','5');");
E_D("replace into `wx_subinfo` values('256','1012046731','123456789','5');");
E_D("replace into `wx_subinfo` values('257','1032734095','123456789','5');");
E_D("replace into `wx_subinfo` values('258','1055442943','123456789','5');");
E_D("replace into `wx_subinfo` values('259','1057553169','123456789','5');");
E_D("replace into `wx_subinfo` values('260','1067213349','123456789','5');");
E_D("replace into `wx_subinfo` values('261','1091553780','123456789','5');");
E_D("replace into `wx_subinfo` values('262','1096283849','123456789','5');");
E_D("replace into `wx_subinfo` values('263','1101633193','123456789','5');");
E_D("replace into `wx_subinfo` values('264','1123055974','123456789','5');");
E_D("replace into `wx_subinfo` values('265','1132217592','123456789','5');");
E_D("replace into `wx_subinfo` values('266','1136095659','123456789','5');");
E_D("replace into `wx_subinfo` values('267','1140127569','123456789','5');");
E_D("replace into `wx_subinfo` values('268','1149096604','123456789','5');");
E_D("replace into `wx_subinfo` values('269','1205507664','123456789','5');");
E_D("replace into `wx_subinfo` values('270','1211229148','123456789','5');");
E_D("replace into `wx_subinfo` values('271','1241157258','123456789','5');");
E_D("replace into `wx_subinfo` values('272','1241314565','123456789','5');");
E_D("replace into `wx_subinfo` values('273','1251129387','123456789','5');");
E_D("replace into `wx_subinfo` values('274','1253779751','123456789','5');");
E_D("replace into `wx_subinfo` values('275','1257159226','123456789','5');");
E_D("replace into `wx_subinfo` values('276','1275344471','123456789','5');");
E_D("replace into `wx_subinfo` values('277','1284979652','123456789','5');");
E_D("replace into `wx_subinfo` values('278','1294072729','123456789','5');");
E_D("replace into `wx_subinfo` values('279','1304368011','123456789','5');");
E_D("replace into `wx_subinfo` values('280','1316027150','123456789','5');");
E_D("replace into `wx_subinfo` values('281','1322843855','123456789','5');");
E_D("replace into `wx_subinfo` values('282','1327115233','123456789','5');");
E_D("replace into `wx_subinfo` values('283','1329798281','123456789','5');");
E_D("replace into `wx_subinfo` values('284','1341743734','123456789','5');");
E_D("replace into `wx_subinfo` values('285','1342638348','123456789','5');");
E_D("replace into `wx_subinfo` values('286','1423987860','123456789','5');");
E_D("replace into `wx_subinfo` values('287','1443218254','123456789','5');");
E_D("replace into `wx_subinfo` values('288','1448157781','123456789','5');");
E_D("replace into `wx_subinfo` values('289','1458925579','123456789','5');");
E_D("replace into `wx_subinfo` values('290','1470569925','123456789','5');");
E_D("replace into `wx_subinfo` values('291','1485584687','123456789','5');");
E_D("replace into `wx_subinfo` values('292','1525451251','123456789','5');");
E_D("replace into `wx_subinfo` values('293','1527228660','123456789','5');");
E_D("replace into `wx_subinfo` values('294','1544684242','123456789','5');");
E_D("replace into `wx_subinfo` values('295','1548019416','123456789','5');");
E_D("replace into `wx_subinfo` values('296','1576030655','123456789','5');");
E_D("replace into `wx_subinfo` values('297','1635137477','123456789','5');");
E_D("replace into `wx_subinfo` values('298','1666303852','123456789','5');");
E_D("replace into `wx_subinfo` values('299','1712699518','123456789','5');");
E_D("replace into `wx_subinfo` values('300','1744919851','123456789','5');");
E_D("replace into `wx_subinfo` values('301','1765453724','123456789','5');");
E_D("replace into `wx_subinfo` values('302','1780955123','123456789','5');");
E_D("replace into `wx_subinfo` values('303','1836686183','123456789','5');");
E_D("replace into `wx_subinfo` values('304','1845961490','123456789','5');");
E_D("replace into `wx_subinfo` values('305','1952109669','123456789','5');");
E_D("replace into `wx_subinfo` values('306','1963922029','123456789','5');");
E_D("replace into `wx_subinfo` values('307','1975824086','123456789','5');");
E_D("replace into `wx_subinfo` values('308','2209099621','123456789','5');");
E_D("replace into `wx_subinfo` values('309','2248285835','123456789','5');");
E_D("replace into `wx_subinfo` values('310','2251533128','123456789','5');");
E_D("replace into `wx_subinfo` values('311','2251925439','123456789','5');");
E_D("replace into `wx_subinfo` values('312','2302243386','123456789','5');");
E_D("replace into `wx_subinfo` values('313','2329547890','123456789','5');");
E_D("replace into `wx_subinfo` values('314','2358529914','123456789','5');");
E_D("replace into `wx_subinfo` values('315','2365246587','123456789','5');");
E_D("replace into `wx_subinfo` values('316','2382149249','123456789','5');");
E_D("replace into `wx_subinfo` values('317','2424494430','123456789','5');");
E_D("replace into `wx_subinfo` values('318','2429181543','123456789','5');");
E_D("replace into `wx_subinfo` values('319','2482239703','123456789','5');");
E_D("replace into `wx_subinfo` values('320','2499702625','123456789','5');");
E_D("replace into `wx_subinfo` values('321','2501153140','123456789','5');");
E_D("replace into `wx_subinfo` values('322','2519363474','123456789','5');");
E_D("replace into `wx_subinfo` values('323','2530500188','123456789','5');");
E_D("replace into `wx_subinfo` values('324','2587051011','123456789','5');");
E_D("replace into `wx_subinfo` values('325','2622052972','123456789','5');");
E_D("replace into `wx_subinfo` values('326','2625148143','123456789','5');");
E_D("replace into `wx_subinfo` values('327','2634060653','123456789','5');");
E_D("replace into `wx_subinfo` values('328','2674035041','123456789','5');");
E_D("replace into `wx_subinfo` values('329','2832352250','123456789','5');");
E_D("replace into `wx_subinfo` values('330','2856558902','123456789','5');");

require("../../inc/footer.php");
?>