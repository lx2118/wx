<?php

/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 22:39
 */
namespace Wechat\Controller;
use Think\Controller;
use wechat\Wx;

class ApiController extends Controller
{
    public function _initialize(){
        (new Wx())->valid();
    }

    public function handler(){
        $instance = (new Wx())->instance('message');
        if($instance->isTextMsg()){
            $instance->text();
        }elseif($instance->isImageMsg()){

        }elseif($instance->isVoiceMsg()){

        }elseif($instance->isVideoMsg()){

        }elseif($instance->isShortVideoMsg()){

        }elseif($instance->isLocationMsg()){

        }elseif($instance->isSubscribe()){

        }elseif($instance->isUnSubscribe()){

        }elseif($instance->isClick()){

        }elseif($instance->qrScene()){

        }elseif($instance->location()){

        }
    }

}