<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 18:35
 */

namespace Addons\Wechat;

use Addons\AddonsController;
use Addons\Wechat\Model\WechatModel;

class Site extends AddonsController{
    public function system(){
        if(IS_POST){
            $this->store(new WechatModel(),I('post.'));
        }else{
            $this->make();
        }
    }

    public function keyword(){
        $this->make();
    }
}