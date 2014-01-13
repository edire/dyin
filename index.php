<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	'view' => array(
		'enabled' => TRUE, // 开启视图
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板目录
			'compile_dir' => APP_PATH.'/tmp', // 编译目录
			'cache_dir' => APP_PATH.'/tmp', // 缓存目录
			'left_delimiter' => '<{',  // smarty左限定符
			'right_delimiter' => '}>', // smarty右限定符
		),
	), 
	"db" => array( 					// 数据库设置
                'host' => '10.4.3.92',  // 数据库地址，一般都可以是localhost
                'login' => 'uoyIzpMH4lqZl', // 数据库用户名
                'password' => 'pZyeLCkG5bZPN', // 数据库密码
                'database' => 'd2e482acc124f43309786873e6125b9a9', // 数据库的库名称
        ),
 

);
require(SP_PATH."/SpeedPHP.php");
spRun();
