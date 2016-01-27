<?php
namespace app\unit\controllers;
use H2O\web\Controller;
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
		$g = $this->get();
		if(!empty($g))
			print_r($g);
		return $this->render('hello');
	}
}