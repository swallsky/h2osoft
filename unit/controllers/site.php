<?php
namespace app\unit\controllers;
use H2O\web\Controller;
use app\unit\models\form;
class Site extends Controller
{
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		$lm = $this->loadModule('test.hello');
		$m = new form();
		$m->load(['form'=>['name'=>'姓名111','title'=>'标题']]);
		//$m['name'] = '徐锦章';
		//echo $m['name'];
		foreach($m->getAttributes() as $k=>$v){
			echo $k.'='.$v.'<br>';
		}
		return $this->render('index',['data'=>'sky','lm'=>$lm]);
	}
}