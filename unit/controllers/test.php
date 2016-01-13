<?php
namespace app\unit\controllers;
use H2O\web\Controller;
use H2O\web\Request;

class Test extends Controller
{
	/**
	 * 初始化
	 */
	public function __construct()
	{
		$this->clearLayout();
	}
	/**
	 * 测试
	 * @return string
	 */
	public function actHello()
	{
		return '测试模块';
	}
}