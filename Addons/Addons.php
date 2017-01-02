<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 23:15
 */

namespace Addons;

use wechat\Wx;

class Addons
{
    protected $wx;

    public function __construct()
    {
        $this->wx = new Wx();
    }
}