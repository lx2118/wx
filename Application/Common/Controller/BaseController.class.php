<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:51
 */

namespace Common\Controller;


use Common\Model\ModuleModel;
use Think\Controller;

class BaseController extends Controller
{
    public function store($model, $data, \Closure $callback = null){
        $res = $model->store($data);
        if($res['status'] == 'success' && $callback instanceof \Closure){
            $callback($res);
        }else{
            $this->message($res);
        }
    }

    public function message($res){
        if($res['status'] == 'success'){
            $this->success($res['message']);
        }else{
            $this->error($res['message']);
        }
    }

    public function getModules(){
        $modules = (new ModuleModel())->select();
        foreach($modules as $k => $mo){
            $modules[$k]['actions'] = json_decode($mo['actions'],true);
        }
        $this->assign('_modules',$modules);
    }
}