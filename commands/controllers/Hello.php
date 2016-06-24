<?php
namespace app\commands\controllers;
use H2O\console\Controller,H2O\helpers\Stdout;
class Hello extends Controller
{
	/**
	 * 命令行使用方法
	 */
	public function actHelp()
	{
		Stdout::title('Welcome to First example!');
		return Stdout::get();
	}
	/**
	 * 定时任务
	 */
	public function GateIndex()
	{
// 	    if(date('i')%2==0 && date('s')==0){//每两分钟执行一次
// 	        return true;
// 	    }else{
// 	        return false;
// 	    }
        return true;
	}
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		return 'Hello world';
	}
}