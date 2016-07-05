<?php
/**
 * Excel测试
 */
namespace app\unit\controllers;
use H2O\web\Controller;

class Excel extends Controller
{
	public function __construct()
	{
		$this->clearLayout();
	}
	/**
	 * 测试
	 * @return string
	 */
	public function actIndex()
	{
		$obj = new \H2O\office\Phpexcel();
		$obj->Import(APP_PATH.DS.'data'.DS.'test.xlsx',0);
		$error = $obj->VerHeader([
			'A' =>  '项目',
			'B' =>  '厂商客户ID',
			'C' =>  '时间',
			'D' =>  '市场价',
			'E' =>  '实收',
			'F' =>  '类型',
			'G' =>  '所属公司'
		]);
		if(!empty($error)){
			//格式错误信息提示
			print_r($error);
			exit();
		}
		$data = $obj->GetSimpleData([
			'A' =>  ['project'],
			'B' =>  ['vendid'],
			'C' =>  ['date','time','Y-m-d'],
			'D' =>  ['price'],
			'E' =>  ['shishou'],
			'F' =>  ['ctype'],
			'G' =>  ['company'],
		]);
		print_r($data);
		//处理数据
	}
	/**
	 * 文件队列信息
	 * @return string
	 */
	public function actQueue()
	{
		$obj = new \H2O\office\Phpexcel();
		$obj->Import(APP_PATH.DS.'data'.DS.'test.xlsx',0);
		$error = $obj->VerHeader([
			'A' =>  '项目',
			'B' =>  '厂商客户ID',
			'C' =>  '时间',
			'D' =>  '市场价',
			'E' =>  '实收',
			'F' =>  '类型',
			'G' =>  '所属公司'
		]);
		if(!empty($error)){
			//格式错误信息提示
			print_r($error);
			exit();
		}
		$queue = $obj->QueueData([
			'A' =>  ['project'],
			'B' =>  ['vendid'],
			'C' =>  ['date','time','Y-m-d'],
			'D' =>  ['price'],
			'E' =>  ['shishou'],
			'F' =>  ['ctype'],
			'G' =>  ['company'],
		],5);
		//循环读取切片信息
		foreach($queue as $q){
			$simpledata = $obj->GetSwpData($q);
			print_r($simpledata);
		}
	}
}