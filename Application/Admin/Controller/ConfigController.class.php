<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:24
 */

namespace Admin\Controller;


use Common\Controller\AdminController;
use Common\Model\ConfigModel;

class ConfigController extends AdminController
{
    public function set(){
        if(IS_POST){
            $this->store(new ConfigModel(),I('post.'));
        }else{
            $field = (new ConfigModel())->find(1);
            $this->assign('field',$field);
            $this->display();
        }

    }
}

