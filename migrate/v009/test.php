<?php
namespace app\migrate\v009;
class Test extends \H2O\db\Builder
{
	/**
	 * Initialization Migrate Applcation
	 */
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * Migrate Applcation update
	 */
	public function actUp()
	{
		$this->createTable(['sys_test','测试表'],[
			'usr_id' => ['pk','用户ID'], //第一个字段类型，第二参数为备注
			'usr_name' => ['string','用户名',30,1,'无'], //如果为字符类型，第三参数是长度，第四个参数是否必填，其他类型都是第三个参数为是否必填
			'usr_age' => ['tint','年龄',1,20], //第一个参数是类型，第二个参数是备注，第三个参数是否必填，第四个参数为默认值
			'usr_intro' => ['text','介绍',0],
			'usr_birthday' => ['date','生日',1]
		]);
	}
	/**
	 * Migrate Applcation restore
	 */
	public function actRestore()
	{
		$this->dropTable('sys_test');
	}
}