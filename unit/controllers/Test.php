<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Test extends Controller
{
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
		return $this->render('hello');
	}
	/**
	 * 引导程序
	 */
	public function actBoot()
	{
// 		echo 'BOOT';
	}
	public function actGet()
	{
		echo 'Get';
	}
	public function actAdd()
	{
	    $o = new \app\unit\models\LogLogin();
	    $o->add();
	}
}