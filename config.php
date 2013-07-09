<?php
// 定义当前目录
define("APP_PATH",dirname(__FILE__));
// 定义框架目录
define("SP_PATH",APP_PATH."/SpeedPHP");
// 默认时区设置
@date_default_timezone_set('PRC');
// 载入用户自定义的函数文件
require(APP_PATH.'/model/functions.php');

// 通用的全局配置
$spConfig = array(
	'mode'=>'debug',
	"db" => array(
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
        'port' => '3306',
		'database' => 'wx',
		'prefix' => 'wx_'
	),
	'view' => array(
		'enabled' => TRUE, // 开启Smarty支持
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板页面所在的目录
			'compile_dir' => APP_PATH.'/tmp', // 临时文件编译目录
			'cache_dir' => APP_PATH.'/tmp', // 临时文件缓存目录
			'left_delimiter' => '<{',  // Smarty左限定符，默认是{
			'right_delimiter' => '}>', // Smarty右限定符，默认是}
		),
		'auto_display' => TRUE, // 是否使用自动输出模板功能
		'auto_display_sep' => '_', // 自动输出模板的拼装模式，/为按目录方式拼装，_为按下划线方式，以此类推
		'auto_display_suffix' => '.html', // 自动输出模板的后缀名
	),
    'ext' => array(
        'spVerifyCode' => array( //验证码扩展
            'width' => 60, //验证码宽度
            'height' => 20, //验证码高度
            'length' => 4, //验证码字符长度
            'bgcolor' => '#FFFFFF', //背景色
            'noisenum' => 50, //图像噪点数量
            'fontsize' => 22, //字体大小
            'fontfile' => 'font.ttf', //字体文件
            'format' => 'gif', //验证码输出图片格式
        )
    )
    
);

