<?php
/**
 * 网站基本配置信息
*/
$config = include(__DIR__.DS.'common.php'); //公共配置信息
$config['basePath'] = dirname(__DIR__).DS.'unit'; //程序主目录
$config['defaultLayout'] = 	'layout.index'; //默认布局
$config['request']	= include(__DIR__.'/request.php'); //路由规则
return $config;