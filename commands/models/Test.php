<?php
/**
 * 数据模型创建测试
 */
namespace app\commands\models;
use H2O\db\Builder,H2O\db\Command;
class Test extends Builder
{
	/**
	 * 创建表
	 */
	public function crtTable()
	{
		$this->createTable(['sys_user','用户表',1], [
		 	'usr_id' => ['pk','用户ID'], //第一个字段类型，第二参数为备注
		 	'usr_name' => ['string','用户名',30,1], //如果为字符类型，第三参数是长度，第四个参数是否必填，其他类型都是第三个参数为是否必填
		 	'usr_age' => ['int','年龄',1], //第三个参数如果为1，则是必须填写
		 	'usr_intro' => ['text','介绍',0],
		 	'usr_birthday' => ['date','生日',1]
	 	]);
		$this->exec();
	}
}