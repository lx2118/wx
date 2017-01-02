<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 22:25
 */
namespace Addons\Wechat\Model;

use Common\Model\BaseModel;

class WechatModel extends BaseModel{
    protected $pk = 'id';
    protected $tableName = 'base_system';

    public function store($data){
        return parent::store($data);
    }
}