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
// 		parent::__construct();
	}
	/**
	 * 测试
	 * @return string
	 */
	public function actHello()
	{
		return $this->render('hello');
	}
}