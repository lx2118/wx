<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 21:28
 */

namespace Admin\Controller;


use Common\Controller\AdminController;

class EntryController extends AdminController
{
    public function handler(){
        switch($_GET['type']){
            case 'site' :
                $class = 'Addons\\'.ucfirst($_GET['mo']).'\Site';
                break;
            case 'web' :
                $class = 'Addons\\'.ucfirst($_GET['mo']).'\Web';
                break;
        }
        return call_user_func_array([new $class,$_GET['ac']],[]);
    }
}