<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 19:14
 */

namespace Common\Model;


class ModuleModel extends BaseModel
{
    protected $pk = 'id';
    protected $tableName = 'Module';

    public function store($data){
        return parent::store($data);
    }
}