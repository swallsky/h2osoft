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
// 			$randid = mt_rand(100,999);
// 			$db->insert('user',['us_name'=>'测试'.$randid,'us_password'=>'123456','us_email'=>'1@1'.$randid.'.com'])->exec();
// 			$query = $db->setSql('SELECT * FROM user WHERE us_name=:us_name')->bindValues(['us_name'=>'root'])->fetch();
// 			print_r($query);
		//});
		$fds = $db->getColumnName('user');
	}
	public function ups()
	{
	    $db = new \H2O\db\Command();
	    $n = $db->update('sys_test',['usr_name'=>'test info'],'usr_id IN(?)')->bindValues([5])->execute();//
	    var_dump($n);
	    $n = $db->update('sys_test',['usr_name'=>'test info222'],'usr_id IN(?)')->bindValues([1])->rowCount();
	    var_dump($n);
	}
	/**
	 * 读取用户信息
	 */
	public function read()
	{
		$db = new \H2O\db\Command();
		//$query = $db->setSql('SELECT * FROM user ORDER BY us_id DESC')->batch(10); 批处理方式
		$query = $db->setSql('SELECT * FROM user WHERE us_name IN(:t,:t) ORDER BY us_id DESC')->bindValues([':t'=>'测试'])->fetchAll();
		foreach ($query as $k=>$v){
			echo $v['us_id'].'<br>';
		}
	}
}