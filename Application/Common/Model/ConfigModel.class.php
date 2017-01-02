<?php

/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:55
 */
namespace Common\Model;
class ConfigModel extends BaseModel
{
    protected $pk = 'id';
    protected $tableName = 'config';
    protected $_validate = [
      ['system','require','网站配置项不能为空'],
      ['wechat','require','微信配置项不能为空']
    ];

    public function store($data)
    {
        $data['id'] = 1;
        return parent::store($data);
    }
}