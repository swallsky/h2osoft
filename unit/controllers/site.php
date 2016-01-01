<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Site extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		$lm = $this->loadModule('test.hello');
		return $this->render('index',['data'=>'sky','lm'=>$lm]);
	}
}