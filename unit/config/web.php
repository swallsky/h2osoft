<?php
/**
 * 网站基本配置信息
 */

return [
    'basePath'				=>  	dirname(__DIR__), //程序主目录
    'defaultLayout' 	=>  	'layout.index', //默认布局
    'request'   				=>  	include(__DIR__.'/request.php'), //路由规则
    'db'							=>	include(__DIR__.'/db.php') //数据库配置信息
];