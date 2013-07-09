<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_mtorole`;");
E_C("CREATE TABLE `wx_mtorole` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `role_id` mediumint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=337 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_mtorole` values('1','123456789','1');");
E_D("replace into `wx_mtorole` values('2','123456789','2');");
E_D("replace into `wx_mtorole` values('3','123456789','6');");
E_D("replace into `wx_mtorole` values('4','123456789','9');");
E_D("replace into `wx_mtorole` values('5','68412505','1');");
E_D("replace into `wx_mtorole` values('6','1015097573','1');");
E_D("replace into `wx_mtorole` values('16','4918848','1');");
E_D("replace into `wx_mtorole` values('15','494949501','1');");
E_D("replace into `wx_mtorole` values('14','123123','1');");
E_D("replace into `wx_mtorole` values('13','1015097573','7');");
E_D("replace into `wx_mtorole` values('12','68412505','7');");
E_D("replace into `wx_mtorole` values('17','179063711','1');");
E_D("replace into `wx_mtorole` values('18','284958981','1');");
E_D("replace into `wx_mtorole` values('19','494949500','1');");
E_D("replace into `wx_mtorole` values('20','31646','1');");
E_D("replace into `wx_mtorole` values('21','323934','1');");
E_D("replace into `wx_mtorole` values('22','2537794','1');");
E_D("replace into `wx_mtorole` values('23','2819435','1');");
E_D("replace into `wx_mtorole` values('24','3489340','1');");
E_D("replace into `wx_mtorole` values('25','5841546','1');");
E_D("replace into `wx_mtorole` values('26','7116215','1');");
E_D("replace into `wx_mtorole` values('27','7399904','1');");
E_D("replace into `wx_mtorole` values('28','8503595','1');");
E_D("replace into `wx_mtorole` values('29','8510596','1');");
E_D("replace into `wx_mtorole` values('30','9028907','1');");
E_D("replace into `wx_mtorole` values('31','14086646','1');");
E_D("replace into `wx_mtorole` values('32','15399088','1');");
E_D("replace into `wx_mtorole` values('33','15936326','1');");
E_D("replace into `wx_mtorole` values('34','16880139','1');");
E_D("replace into `wx_mtorole` values('35','17235945','1');");
E_D("replace into `wx_mtorole` values('36','17998378','1');");
E_D("replace into `wx_mtorole` values('37','18576986','1');");
E_D("replace into `wx_mtorole` values('38','19663395','1');");
E_D("replace into `wx_mtorole` values('39','21245075','1');");
E_D("replace into `wx_mtorole` values('40','22308516','1');");
E_D("replace into `wx_mtorole` values('41','26288910','1');");
E_D("replace into `wx_mtorole` values('42','26340662','1');");
E_D("replace into `wx_mtorole` values('43','27864658','1');");
E_D("replace into `wx_mtorole` values('44','28287810','1');");
E_D("replace into `wx_mtorole` values('45','29048072','1');");
E_D("replace into `wx_mtorole` values('46','29149057','1');");
E_D("replace into `wx_mtorole` values('47','32507661','1');");
E_D("replace into `wx_mtorole` values('48','33960135','1');");
E_D("replace into `wx_mtorole` values('49','33965810','1');");
E_D("replace into `wx_mtorole` values('50','36451588','1');");
E_D("replace into `wx_mtorole` values('51','37483515','1');");
E_D("replace into `wx_mtorole` values('52','40838960','1');");
E_D("replace into `wx_mtorole` values('53','41786038','1');");
E_D("replace into `wx_mtorole` values('54','42150706','1');");
E_D("replace into `wx_mtorole` values('55','48318898','1');");
E_D("replace into `wx_mtorole` values('56','48571684','1');");
E_D("replace into `wx_mtorole` values('57','50993371','1');");
E_D("replace into `wx_mtorole` values('58','52248231','1');");
E_D("replace into `wx_mtorole` values('59','52499726','1');");
E_D("replace into `wx_mtorole` values('60','53643439','1');");
E_D("replace into `wx_mtorole` values('61','54209928','1');");
E_D("replace into `wx_mtorole` values('62','54241311','1');");
E_D("replace into `wx_mtorole` values('63','54594743','1');");
E_D("replace into `wx_mtorole` values('64','56617204','1');");
E_D("replace into `wx_mtorole` values('65','58188207','1');");
E_D("replace into `wx_mtorole` values('66','59444805','1');");
E_D("replace into `wx_mtorole` values('67','59567736','1');");
E_D("replace into `wx_mtorole` values('68','63828178','1');");
E_D("replace into `wx_mtorole` values('69','66402212','1');");
E_D("replace into `wx_mtorole` values('70','75000753','1');");
E_D("replace into `wx_mtorole` values('71','75505332','1');");
E_D("replace into `wx_mtorole` values('72','76676690','1');");
E_D("replace into `wx_mtorole` values('73','77912776','1');");
E_D("replace into `wx_mtorole` values('74','78712205','1');");
E_D("replace into `wx_mtorole` values('75','78745078','1');");
E_D("replace into `wx_mtorole` values('76','80970596','1');");
E_D("replace into `wx_mtorole` values('77','81842254','1');");
E_D("replace into `wx_mtorole` values('78','83053203','1');");
E_D("replace into `wx_mtorole` values('79','84918225','1');");
E_D("replace into `wx_mtorole` values('80','86850760','1');");
E_D("replace into `wx_mtorole` values('81','89364971','1');");
E_D("replace into `wx_mtorole` values('82','99652930','1');");
E_D("replace into `wx_mtorole` values('83','99665728','1');");
E_D("replace into `wx_mtorole` values('84','110038099','1');");
E_D("replace into `wx_mtorole` values('85','115437550','1');");
E_D("replace into `wx_mtorole` values('86','120556826','1');");
E_D("replace into `wx_mtorole` values('87','125117368','1');");
E_D("replace into `wx_mtorole` values('88','136467228','1');");
E_D("replace into `wx_mtorole` values('89','156120075','1');");
E_D("replace into `wx_mtorole` values('90','156172411','1');");
E_D("replace into `wx_mtorole` values('91','166500888','1');");
E_D("replace into `wx_mtorole` values('92','172049779','1');");
E_D("replace into `wx_mtorole` values('93','172238037','1');");
E_D("replace into `wx_mtorole` values('94','176729855','1');");
E_D("replace into `wx_mtorole` values('95','181084715','1');");
E_D("replace into `wx_mtorole` values('96','181708088','1');");
E_D("replace into `wx_mtorole` values('97','187325691','1');");
E_D("replace into `wx_mtorole` values('98','215078135','1');");
E_D("replace into `wx_mtorole` values('99','234619229','1');");
E_D("replace into `wx_mtorole` values('100','236991919','1');");
E_D("replace into `wx_mtorole` values('101','241137969','1');");
E_D("replace into `wx_mtorole` values('102','249494549','1');");
E_D("replace into `wx_mtorole` values('103','250821623','1');");
E_D("replace into `wx_mtorole` values('104','253425661','1');");
E_D("replace into `wx_mtorole` values('105','254080417','1');");
E_D("replace into `wx_mtorole` values('106','254282253','1');");
E_D("replace into `wx_mtorole` values('107','271487630','1');");
E_D("replace into `wx_mtorole` values('108','271617927','1');");
E_D("replace into `wx_mtorole` values('109','272479635','1');");
E_D("replace into `wx_mtorole` values('110','273081358','1');");
E_D("replace into `wx_mtorole` values('111','273230103','1');");
E_D("replace into `wx_mtorole` values('112','275337098','1');");
E_D("replace into `wx_mtorole` values('113','276467682','1');");
E_D("replace into `wx_mtorole` values('114','278938047','1');");
E_D("replace into `wx_mtorole` values('115','279365449','1');");
E_D("replace into `wx_mtorole` values('116','280620782','1');");
E_D("replace into `wx_mtorole` values('117','285565792','1');");
E_D("replace into `wx_mtorole` values('118','286548476','1');");
E_D("replace into `wx_mtorole` values('119','292410483','1');");
E_D("replace into `wx_mtorole` values('120','303069406','1');");
E_D("replace into `wx_mtorole` values('121','305114228','1');");
E_D("replace into `wx_mtorole` values('122','307430897','1');");
E_D("replace into `wx_mtorole` values('123','307528696','1');");
E_D("replace into `wx_mtorole` values('124','307559580','1');");
E_D("replace into `wx_mtorole` values('125','308059482','1');");
E_D("replace into `wx_mtorole` values('126','308202934','1');");
E_D("replace into `wx_mtorole` values('127','308402028','1');");
E_D("replace into `wx_mtorole` values('128','309186675','1');");
E_D("replace into `wx_mtorole` values('129','309454150','1');");
E_D("replace into `wx_mtorole` values('130','313413571','1');");
E_D("replace into `wx_mtorole` values('131','315707022','1');");
E_D("replace into `wx_mtorole` values('132','327888376','1');");
E_D("replace into `wx_mtorole` values('133','328507093','1');");
E_D("replace into `wx_mtorole` values('134','329514164','1');");
E_D("replace into `wx_mtorole` values('135','332023850','1');");
E_D("replace into `wx_mtorole` values('136','343371081','1');");
E_D("replace into `wx_mtorole` values('137','344133588','1');");
E_D("replace into `wx_mtorole` values('138','346610538','1');");
E_D("replace into `wx_mtorole` values('139','348542856','1');");
E_D("replace into `wx_mtorole` values('140','348879263','1');");
E_D("replace into `wx_mtorole` values('141','350277927','1');");
E_D("replace into `wx_mtorole` values('142','359561650','1');");
E_D("replace into `wx_mtorole` values('143','362155409','1');");
E_D("replace into `wx_mtorole` values('144','363116916','1');");
E_D("replace into `wx_mtorole` values('145','371949216','1');");
E_D("replace into `wx_mtorole` values('146','372655992','1');");
E_D("replace into `wx_mtorole` values('147','373009945','1');");
E_D("replace into `wx_mtorole` values('148','373135587','1');");
E_D("replace into `wx_mtorole` values('149','376541360','1');");
E_D("replace into `wx_mtorole` values('150','378756737','1');");
E_D("replace into `wx_mtorole` values('151','380596594','1');");
E_D("replace into `wx_mtorole` values('152','382007855','1');");
E_D("replace into `wx_mtorole` values('153','382728127','1');");
E_D("replace into `wx_mtorole` values('154','382766681','1');");
E_D("replace into `wx_mtorole` values('155','383932421','1');");
E_D("replace into `wx_mtorole` values('156','386970074','1');");
E_D("replace into `wx_mtorole` values('157','393401442','1');");
E_D("replace into `wx_mtorole` values('158','393419949','1');");
E_D("replace into `wx_mtorole` values('159','394740274','1');");
E_D("replace into `wx_mtorole` values('160','404280473','1');");
E_D("replace into `wx_mtorole` values('161','405660754','1');");
E_D("replace into `wx_mtorole` values('162','406569901','1');");
E_D("replace into `wx_mtorole` values('163','406660289','1');");
E_D("replace into `wx_mtorole` values('164','415602114','1');");
E_D("replace into `wx_mtorole` values('165','418887758','1');");
E_D("replace into `wx_mtorole` values('166','419143222','1');");
E_D("replace into `wx_mtorole` values('167','419425542','1');");
E_D("replace into `wx_mtorole` values('168','420254648','1');");
E_D("replace into `wx_mtorole` values('169','422798923','1');");
E_D("replace into `wx_mtorole` values('170','444357343','1');");
E_D("replace into `wx_mtorole` values('171','448247731','1');");
E_D("replace into `wx_mtorole` values('172','448621898','1');");
E_D("replace into `wx_mtorole` values('173','449005738','1');");
E_D("replace into `wx_mtorole` values('174','449201490','1');");
E_D("replace into `wx_mtorole` values('175','452601739','1');");
E_D("replace into `wx_mtorole` values('176','453861601','1');");
E_D("replace into `wx_mtorole` values('177','455679856','1');");
E_D("replace into `wx_mtorole` values('178','457979057','1');");
E_D("replace into `wx_mtorole` values('179','467798118','1');");
E_D("replace into `wx_mtorole` values('180','470124060','1');");
E_D("replace into `wx_mtorole` values('181','479783648','1');");
E_D("replace into `wx_mtorole` values('182','493104599','1');");
E_D("replace into `wx_mtorole` values('183','496905498','1');");
E_D("replace into `wx_mtorole` values('184','509164316','1');");
E_D("replace into `wx_mtorole` values('185','513084472','1');");
E_D("replace into `wx_mtorole` values('186','515447078','1');");
E_D("replace into `wx_mtorole` values('187','516157404','1');");
E_D("replace into `wx_mtorole` values('188','517437943','1');");
E_D("replace into `wx_mtorole` values('189','522762757','1');");
E_D("replace into `wx_mtorole` values('190','525092716','1');");
E_D("replace into `wx_mtorole` values('191','526116418','1');");
E_D("replace into `wx_mtorole` values('192','529968194','1');");
E_D("replace into `wx_mtorole` values('193','532581997','1');");
E_D("replace into `wx_mtorole` values('194','532702008','1');");
E_D("replace into `wx_mtorole` values('195','543347219','1');");
E_D("replace into `wx_mtorole` values('196','544324979','1');");
E_D("replace into `wx_mtorole` values('197','545210463','1');");
E_D("replace into `wx_mtorole` values('198','545609133','1');");
E_D("replace into `wx_mtorole` values('199','545969943','1');");
E_D("replace into `wx_mtorole` values('200','549407940','1');");
E_D("replace into `wx_mtorole` values('201','549985989','1');");
E_D("replace into `wx_mtorole` values('202','552343009','1');");
E_D("replace into `wx_mtorole` values('203','562729045','1');");
E_D("replace into `wx_mtorole` values('204','563549608','1');");
E_D("replace into `wx_mtorole` values('205','573645347','1');");
E_D("replace into `wx_mtorole` values('206','575979395','1');");
E_D("replace into `wx_mtorole` values('207','576850778','1');");
E_D("replace into `wx_mtorole` values('208','583296656','1');");
E_D("replace into `wx_mtorole` values('209','592736687','1');");
E_D("replace into `wx_mtorole` values('210','594124155','1');");
E_D("replace into `wx_mtorole` values('211','594702866','1');");
E_D("replace into `wx_mtorole` values('212','610724251','1');");
E_D("replace into `wx_mtorole` values('213','616607399','1');");
E_D("replace into `wx_mtorole` values('214','623154061','1');");
E_D("replace into `wx_mtorole` values('215','624112228','1');");
E_D("replace into `wx_mtorole` values('216','627190384','1');");
E_D("replace into `wx_mtorole` values('217','631192966','1');");
E_D("replace into `wx_mtorole` values('218','646936670','1');");
E_D("replace into `wx_mtorole` values('219','649206384','1');");
E_D("replace into `wx_mtorole` values('220','664004528','1');");
E_D("replace into `wx_mtorole` values('221','664791379','1');");
E_D("replace into `wx_mtorole` values('222','707199118','1');");
E_D("replace into `wx_mtorole` values('223','709690207','1');");
E_D("replace into `wx_mtorole` values('224','731471842','1');");
E_D("replace into `wx_mtorole` values('225','751191964','1');");
E_D("replace into `wx_mtorole` values('226','755874454','1');");
E_D("replace into `wx_mtorole` values('227','756733980','1');");
E_D("replace into `wx_mtorole` values('228','757534373','1');");
E_D("replace into `wx_mtorole` values('229','763424627','1');");
E_D("replace into `wx_mtorole` values('230','771267768','1');");
E_D("replace into `wx_mtorole` values('231','778774876','1');");
E_D("replace into `wx_mtorole` values('232','790257321','1');");
E_D("replace into `wx_mtorole` values('233','790642433','1');");
E_D("replace into `wx_mtorole` values('234','809278016','1');");
E_D("replace into `wx_mtorole` values('235','809737345','1');");
E_D("replace into `wx_mtorole` values('236','813907462','1');");
E_D("replace into `wx_mtorole` values('237','815394864','1');");
E_D("replace into `wx_mtorole` values('238','820355743','1');");
E_D("replace into `wx_mtorole` values('239','826485287','1');");
E_D("replace into `wx_mtorole` values('240','827851338','1');");
E_D("replace into `wx_mtorole` values('241','853755774','1');");
E_D("replace into `wx_mtorole` values('242','854008086','1');");
E_D("replace into `wx_mtorole` values('243','857434821','1');");
E_D("replace into `wx_mtorole` values('244','867724294','1');");
E_D("replace into `wx_mtorole` values('245','879201259','1');");
E_D("replace into `wx_mtorole` values('246','891782034','1');");
E_D("replace into `wx_mtorole` values('247','893429233','1');");
E_D("replace into `wx_mtorole` values('248','895060172','1');");
E_D("replace into `wx_mtorole` values('249','895301295','1');");
E_D("replace into `wx_mtorole` values('250','908126843','1');");
E_D("replace into `wx_mtorole` values('251','909750787','1');");
E_D("replace into `wx_mtorole` values('252','914018452','1');");
E_D("replace into `wx_mtorole` values('253','916842208','1');");
E_D("replace into `wx_mtorole` values('254','923610494','1');");
E_D("replace into `wx_mtorole` values('255','951626988','1');");
E_D("replace into `wx_mtorole` values('256','958804731','1');");
E_D("replace into `wx_mtorole` values('257','963574975','1');");
E_D("replace into `wx_mtorole` values('258','975070298','1');");
E_D("replace into `wx_mtorole` values('259','976221419','1');");
E_D("replace into `wx_mtorole` values('260','1002187204','1');");
E_D("replace into `wx_mtorole` values('261','1009347727','1');");
E_D("replace into `wx_mtorole` values('262','1012046731','1');");
E_D("replace into `wx_mtorole` values('263','1032734095','1');");
E_D("replace into `wx_mtorole` values('264','1055442943','1');");
E_D("replace into `wx_mtorole` values('265','1057553169','1');");
E_D("replace into `wx_mtorole` values('266','1067213349','1');");
E_D("replace into `wx_mtorole` values('267','1091553780','1');");
E_D("replace into `wx_mtorole` values('268','1096283849','1');");
E_D("replace into `wx_mtorole` values('269','1101633193','1');");
E_D("replace into `wx_mtorole` values('270','1123055974','1');");
E_D("replace into `wx_mtorole` values('271','1132217592','1');");
E_D("replace into `wx_mtorole` values('272','1136095659','1');");
E_D("replace into `wx_mtorole` values('273','1140127569','1');");
E_D("replace into `wx_mtorole` values('274','1149096604','1');");
E_D("replace into `wx_mtorole` values('275','1205507664','1');");
E_D("replace into `wx_mtorole` values('276','1211229148','1');");
E_D("replace into `wx_mtorole` values('277','1241157258','1');");
E_D("replace into `wx_mtorole` values('278','1241314565','1');");
E_D("replace into `wx_mtorole` values('279','1251129387','1');");
E_D("replace into `wx_mtorole` values('280','1253779751','1');");
E_D("replace into `wx_mtorole` values('281','1257159226','1');");
E_D("replace into `wx_mtorole` values('282','1275344471','1');");
E_D("replace into `wx_mtorole` values('283','1284979652','1');");
E_D("replace into `wx_mtorole` values('284','1294072729','1');");
E_D("replace into `wx_mtorole` values('285','1304368011','1');");
E_D("replace into `wx_mtorole` values('286','1316027150','1');");
E_D("replace into `wx_mtorole` values('287','1322843855','1');");
E_D("replace into `wx_mtorole` values('288','1327115233','1');");
E_D("replace into `wx_mtorole` values('289','1329798281','1');");
E_D("replace into `wx_mtorole` values('290','1341743734','1');");
E_D("replace into `wx_mtorole` values('291','1342638348','1');");
E_D("replace into `wx_mtorole` values('292','1423987860','1');");
E_D("replace into `wx_mtorole` values('293','1443218254','1');");
E_D("replace into `wx_mtorole` values('294','1448157781','1');");
E_D("replace into `wx_mtorole` values('295','1458925579','1');");
E_D("replace into `wx_mtorole` values('296','1470569925','1');");
E_D("replace into `wx_mtorole` values('297','1485584687','1');");
E_D("replace into `wx_mtorole` values('298','1525451251','1');");
E_D("replace into `wx_mtorole` values('299','1527228660','1');");
E_D("replace into `wx_mtorole` values('300','1544684242','1');");
E_D("replace into `wx_mtorole` values('301','1548019416','1');");
E_D("replace into `wx_mtorole` values('302','1576030655','1');");
E_D("replace into `wx_mtorole` values('303','1635137477','1');");
E_D("replace into `wx_mtorole` values('304','1666303852','1');");
E_D("replace into `wx_mtorole` values('305','1712699518','1');");
E_D("replace into `wx_mtorole` values('306','1744919851','1');");
E_D("replace into `wx_mtorole` values('307','1765453724','1');");
E_D("replace into `wx_mtorole` values('308','1780955123','1');");
E_D("replace into `wx_mtorole` values('309','1836686183','1');");
E_D("replace into `wx_mtorole` values('310','1845961490','1');");
E_D("replace into `wx_mtorole` values('311','1952109669','1');");
E_D("replace into `wx_mtorole` values('312','1963922029','1');");
E_D("replace into `wx_mtorole` values('313','1975824086','1');");
E_D("replace into `wx_mtorole` values('314','2209099621','1');");
E_D("replace into `wx_mtorole` values('315','2248285835','1');");
E_D("replace into `wx_mtorole` values('316','2251533128','1');");
E_D("replace into `wx_mtorole` values('317','2251925439','1');");
E_D("replace into `wx_mtorole` values('318','2302243386','1');");
E_D("replace into `wx_mtorole` values('319','2329547890','1');");
E_D("replace into `wx_mtorole` values('320','2358529914','1');");
E_D("replace into `wx_mtorole` values('321','2365246587','1');");
E_D("replace into `wx_mtorole` values('322','2382149249','1');");
E_D("replace into `wx_mtorole` values('323','2424494430','1');");
E_D("replace into `wx_mtorole` values('324','2429181543','1');");
E_D("replace into `wx_mtorole` values('325','2482239703','1');");
E_D("replace into `wx_mtorole` values('326','2499702625','1');");
E_D("replace into `wx_mtorole` values('327','2501153140','1');");
E_D("replace into `wx_mtorole` values('328','2519363474','1');");
E_D("replace into `wx_mtorole` values('329','2530500188','1');");
E_D("replace into `wx_mtorole` values('330','2587051011','1');");
E_D("replace into `wx_mtorole` values('331','2622052972','1');");
E_D("replace into `wx_mtorole` values('332','2625148143','1');");
E_D("replace into `wx_mtorole` values('333','2634060653','1');");
E_D("replace into `wx_mtorole` values('334','2674035041','1');");
E_D("replace into `wx_mtorole` values('335','2832352250','1');");
E_D("replace into `wx_mtorole` values('336','2856558902','1');");

require("../../inc/footer.php");
?>