<?php
/**
 * 数据模型测试 
 */
namespace app\unit\models;
use H2O\base\Model;
class form extends Model
{
	public $name = '姓名';
	public $title = '标题';
	public $content = '内容';
	public function test()
	{
		$db = new \H2O\db\Command();
		//$db->transaction(function($db){
			$randid = mt_rand(100,999);
			$db->insert('user',['us_name'=>'测试'.$randid,'us_password'=>'123456','us_email1'=>'1@1'.$randid.'.com'])->exec();
			$query = $db->setSql('SELECT * FROM user WHERE us_name=:us_name')->bindValues(['us_name'=>'root'])->fetch();
			print_r($query);
		//});
	}
	/**
	 * 读取用户信息
	 */
	public function read()
	{
		$db = new \H2O\db\Command();
		$query = $db->setSql('SELECT * FROM user')->fetchAll();
		//print_r($query);
	}
}