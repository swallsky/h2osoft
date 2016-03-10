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
// 		$this->clearLayout();
		$lm = $this->loadModule('test.hello');
		$m = new form();
		$request = $this->request();
		if($request->getIsGet()){
// 			$get = $request->get();
// 			var_dump($get);
// 			$m->load(['form'=>['name'=>'姓名111','title'=>'<script >alert ("111")< /script >标题']]);
			//$m['name'] = '徐锦章';
			//echo $m['name'];
// 			foreach($m->getAttributes() as $k=>$v){
// 				echo $k.'='.$v.'<br>';
// 			}
			$m->test();
			$m->read();
		}
		return $this->render('index',['data'=>'sky','lm'=>$lm]);
	}
}