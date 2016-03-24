<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Sms extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		AliSmsSend(['default','test'],'18610638306',['code'=>'9999']);
	}
}