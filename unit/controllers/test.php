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
}