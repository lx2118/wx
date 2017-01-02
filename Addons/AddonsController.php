<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 21:39
 */

namespace Addons;

use Common\Controller\BaseController;

class AddonsController extends BaseController
{
    protected $template;

    public function _initialize(){
        $this->template = 'Addons/'.MODULE.'/Template';
    }

    public function make($name = ''){
        $name = $name ? : I('get.ac');
        $tpl = $this->template.'/'.$name.'.html';
        $this->display($tpl);
    }
}