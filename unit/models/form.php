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
}