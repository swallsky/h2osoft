<?php
namespace app\commands\controllers;
use H2O\console\Controller,H2O\helpers\Stdout;
class Test extends Controller
{
	/**
	 * 命令行使用方法
	 */
	public function actHelp()
	{
		Stdout::title('Test system application example!');
		Stdout::table([
			['Method','Summary'],
			['Test.index','Create `sys_user` table'],
			['Test.renTable','The name of table `sys_user` to `sys_user1`'],
			['Test.delTable','Delete table `sys_user`'],
			['Test.clearTable','清空表`sys_user`数据'],
			['Test.addColumn','给表`sys_user`添加字段'],
			['Test.dropColumn','删除表`sys_user`的字段']
		]);
		return Stdout::get();
	}
	/**
	 * 默认首页
	 * @return string
	 */
	public function actIndex()
	{
		$m = new \app\commands\models\Test();
		return $m->crtTable();
	}
	/**
	 * 修改表名测试
	 */
	public function actRenTable()
	{
		$m = new \app\commands\models\Test();
		$m->renameTable('sys_user','sys_user1');
		return $m->get();
	}
	/**
	 * 删除表名测试
	 */
	public function actDelTable()
	{
		$m = new \app\commands\models\Test();
		$m->dropTable('sys_user');
		return $m->get();
	}
	/**
	 * 修改表名测试
	 */
	public function actClearTable()
	{
		$m = new \app\commands\models\Test();
		$m->truncateTable('sys_user');
		return $m->get();
	}
	/**
	 * 增加字段
	 */
	public function actAddColumn()
	{
		$m = new \app\commands\models\Test();
		$m->addColumn('sys_user','usr_isdel',['bool','是否删除',1,0]);
		return $m->get();
	}
	/**
	 * 删除字段
	 */
	public function actDropColumn()
	{
		$m = new \app\commands\models\Test();
		$m->dropColumn('sys_user','usr_isdel');
		return $m->get();
	}
	/**
	 * 更改字段信息
	 */
	public function actRenColumn()
	{
		$m = new \app\commands\models\Test();
		$m->alterColumn('sys_user','usr_isdel','usr_isdel1',['bool','是否删除',1,1]);
		return $m->get();
	}
	/**
	 * 更改字段信息
	 */
	public function actCreateIndex()
	{
		$m = new \app\commands\models\Test();
		$m->createIndex('isdel','sys_user','usr_isdel,usr_age');
		return $m->get();
	}
	/**
	 * 更改字段信息
	 */
	public function actDropIndex()
	{
		$m = new \app\commands\models\Test();
		$m->dropIndex('isdel','sys_user');
		return $m->get();
	}
}