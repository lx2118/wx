<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 19:48
 */

namespace Common\Behaviors;

use Common\Model\ConfigModel;
use wechat\Wx;

class AppBeginBehavior extends \Think\Behavior
{
    public function run(&$param){
        $this->loadConfig();
        $this->loadWechat();
    }

    public function loadConfig(){
        $config = (new ConfigModel())->find(1);
        $config['system'] = json_decode($config['system'],true);
        $config['wechat'] = json_decode($config['wechat'],true);
        v('config.system',$config['system']);
        v('config.wechat',$config['wechat']);
        define('MODULE',ucfirst(I('get.mo',null)));
    }

    public function loadWechat(){
        $config = [
            'token' => 'weixin',
            'appId' => 'wx917fc314c6f429ff',
            'appSecret' => 'e7d5c0c720bb9cbd7248bf602b3f17b3'
        ];
        new Wx($config);
    }
}