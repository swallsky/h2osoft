<?php
/**
 * 系统控制配置信息
 */
$config = include(__DIR__.DS.'common.php'); //公共配置信息
$config['basePath'] = dirname(__DIR__).DS.'commands'; //程序主目录
return $config;