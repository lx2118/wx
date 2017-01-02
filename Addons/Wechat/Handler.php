<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 23:15
 */

namespace Addons\Wechat;

use Addons\Addons;

class Handler extends Addons
{
    public function base(){
        $this->wx->instance('');
    }
}