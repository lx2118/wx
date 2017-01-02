<?php

/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:27
 */

namespace Common\Controller;

class AdminController extends BaseController
{
    public function _initialize(){
        $this->getModules();
    }
}