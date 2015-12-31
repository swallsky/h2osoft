<?php
namespace app\unit\controllers;
use H2O\web\Controller;
class Site extends Controller
{
	public function actIndex()
	{
		$this->render('index.php');
	}
}