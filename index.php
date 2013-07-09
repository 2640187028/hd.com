<?php
// 前台模块程序入口文件

// 载入配置与定义文件
require("config.php");
// 当前模块附加的配置
$spConfig['controller_path'] = APP_PATH.'/modules/'.basename(__FILE__,".php");
$spConfig['view']['config']['template_dir'] = APP_PATH.'/tpl/'.basename(__FILE__,".php");
$spConfig['default_controller'] = 'basic';
// 载入SpeedPHP框架
require(SP_PATH."/SpeedPHP.php");
import(APP_PATH.'/modules/commonController.php');
import(APP_PATH.'/modules/indexController.php');
header("Content-type:text/html;charset=utf-8");
spRun(); // SpeedPHP 3新特性