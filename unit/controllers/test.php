<?php
namespace app\unit\controllers;
use H2O\web\Controller;

class Test extends Controller
{
	public function actHello()
	{
		echo 'Welcome H2O!';
	}
}