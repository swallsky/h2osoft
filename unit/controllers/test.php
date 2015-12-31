<?php
namespace app\unit\controllers;
use H2O\web\Controller;
use H2O\web\Request;

class Test extends Controller
{
	public function actHello()
	{
		$get = Request::get();
		print_r($get);
		echo 'Welcome H2O!';
	}
}