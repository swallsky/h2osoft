<?php
namespace app\unit\controllers;
use H2O\web\Controller;
use H2O\web\Request;

class Test extends Controller
{
	public function actHello()
	{
		return '包含模块';
	}
}