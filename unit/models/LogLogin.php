<?php
/**
 * 分表测试
 */
namespace app\unit\models;
use H2O\db\TableStrategy;
class LogLogin extends \H2O\db\TableStrategy
{
	public function __construct()
	{
	    parent::__construct('db');
	}
	/**
	 * 动态后缀
	 * {@inheritDoc}
	 * @see \H2O\db\TableStrategy::TableExt()
	 */
	public function TableExt()
	{
	    return date('ymdhis');
	}
	/**
	 * 字段信息
	 * {@inheritDoc}
	 * @see \H2O\db\TableStrategy::Structure()
	 */
    public function Structure()
    {
        return [
            'lgd_id' 	=> ['pk','日志ID'],
            'lgd_time' 	=> ['datetime','时间'],
            'lgd_url' 	=> ['text','访问url'],
            'lgd_requesttype' 	=> ['string','请求类型',30,0],
            'lgd_data' 	=> ['text','请求数据'],
            'lgd_ip' => ['string','访问者ip'],
            'lgd_isdel' => ['bool','是否有效',1,0]
        ];
    }
    public function add()
    {
        $this->insert([
            [
                'lgd_time' 	  => date('Y-m-d H:i:s'),
                'lgd_url' 	      => 'http://www.123.com',
                'lgd_requesttype' 	=> 'GET',
                'lgd_data' 	=> '{type:"get"}'
            ],
            [
                'lgd_time' 	  => date('Y-m-d H:i:s'),
                'lgd_url' 	      => 'http://www.123.com',
                'lgd_requesttype' 	=> 'GET',
                'lgd_data' 	=> '{type:"get"}'
            ]
        ],['lgd_time','lgd_url','lgd_requesttype','lgd_data'])->exec();
    }
}