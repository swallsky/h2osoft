<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Layout extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		return $this->render('index');
	}
}