<?php
/**
 * 系统公共配置信息
 */
return [
	'version'					=>	'0.0.9', //系统版本号
    'runenv'					=>	'dev', //prod:生产环境，dev:开发环境，test:测试环境 默认情况下为prod
    'debug'					=>	true, //查看程序执行情况 例如运行时间、消耗内存等
    'db'							=>	include(__DIR__.DS.'db.php') //数据库配置信息
];