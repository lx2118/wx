<?php

/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:55
 */
namespace Common\Model;
use Think\Model;
class BaseModel extends Model
{
    public function store($data){
        if($this->create($data)){
            $action = isset($data[$this->pk]) ? 'save' : 'add';
            $res = $this->$action($data);
            return ['status'=>'success','data'=>$res,'message'=>'操作成功'];
        }
        return ['status'=>'error','message'=>$this->getError()?:'未知错误'];
    }
}