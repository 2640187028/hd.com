<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wx_qqcomments`;");
E_C("CREATE TABLE `wx_qqcomments` (
  `qqc_id` int(11) NOT NULL AUTO_INCREMENT,
  `xs_id` int(11) NOT NULL,
  `qqc_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `qqc_posttime` datetime NOT NULL,
  `qqc_qunid` int(11) NOT NULL,
  `qqc_content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`qqc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
E_D("replace into `wx_qqcomments` values('3','2','挪威的森林(68412505)','2013-05-18 15:03:36','277705233','<p><br /></p><table cellspacing=\"0\" width=\"100%\"><tbody><tr><td style=\"border-bottom-color:#8ec3eb;line-height:24px;color:#3568bb;font-weight:bold;margin-bottom:5px;\" height=\"24\">日期: 2013-05-09</td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">(31646)</div>19:12:46</div><div style=\"padding-left:20px;\"><strong><span style=\"color:#008000;font-family:&#39;tahoma&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:16px\">这么麻烦干嘛。。。几杯酒把东方灌醉，随便你打。。。</span></strong></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">轩辕斗魂(68489744)</div>19:12:50</div><div style=\"padding-left:20px;\"><img src=\"undefined\" /></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">轩辕斗魂(68489744)</div>19:13:08</div><div style=\"padding-left:20px;\"><span style=\"color:#000000;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">就凭你想灌醉我？</span></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">(4918848)</div>19:13:12</div><div style=\"padding-left:20px;\"><span style=\"color:#0000ff;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">懒人,交给你了</span></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">轩辕斗魂(68489744)</div>19:13:34</div><div style=\"padding-left:20px;\"><span style=\"color:#000000;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">太自不量力了。</span></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">(31646)</div>19:13:43</div><div style=\"padding-left:20px;\"><strong><span style=\"color:#008000;font-family:&#39;tahoma&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:16px\">我灌，笑打</span></strong></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">(4918848)</div>19:13:49</div><div style=\"padding-left:20px;\"><img src=\"undefined\" /><span style=\"color:#0000ff;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">好</span></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">轩辕斗魂(68489744)</div>19:13:59</div><div style=\"padding-left:20px;\"><span style=\"color:#000000;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">我有造化会元功</span></div></td></tr><tr><td><div style=\"color:#006efe;padding-left:10px;\"><div style=\"float:left;margin-right:6px;\">轩辕斗魂(68489744)</div>19:14:31</div><div style=\"padding-left:20px;\"><span style=\"color:#000000;font-family:&#39;微软雅黑&#39;,&#39;ms sans serif&#39;,sans-serif;font-size:13px\">怎么醉得了</span></div></td></tr></tbody></table><p><br /></p>');");

require("../../inc/footer.php");
?>