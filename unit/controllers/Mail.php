<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Mail extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		$m = new \H2O\mail\Mailer();
		$m->send(['xjz1688@163.com'=>'ybluesky'],'邮箱测试','邮箱测试');
	}
}