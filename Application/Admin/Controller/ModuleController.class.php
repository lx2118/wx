<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 18:06
 */

namespace Admin\Controller;


use Common\Controller\AdminController;
use Common\Model\ModuleModel;

class ModuleController extends AdminController
{
    public function lists()
    {
        $data = [];
        foreach(glob('Addons\*') as $d){
            if(is_dir($d) && is_file($d.'/config.php')){
                $config = include $d.'/config.php';
                $data[] = $config;
            }
        }
        $has = (new ModuleModel())->getField('name',true);
        $this->assign('has',$has);
        $this->assign('modules',$data);
        $this->display();
    }

    public function install(){
        $name = I('get.name');
        $id = (new ModuleModel())->where("name = '{$name}'")->getField('id');
        if($id){
            $this->error('该模块已安装');
        }
        if(is_file('Addons/'.$name.'/config.php')){
            $config = include 'Addons/'.$name.'/config.php';
            $this->store(new ModuleModel(),$config);
        }
    }

    public function uninstall(){
        $name = I('get.name');
        if((new ModuleModel())->where("name = '{$name}'")->delete()){
            $this->success('卸载成功',U('lists'));
        }else{
            $this->error('卸载失败',U('lists'));
        }
    }

    public function set()
    {
        if(IS_POST){
            $action = [];
            foreach(preg_split('/(\r\n)/',$_POST['actions']) as $a){
                $res = array_filter(explode('|',$a));
                if(count($res) == 2){
                    $actions[] = $res;
                }
            }
            $data = I('post.');
            $data['actions'] = json_encode($actions,JSON_UNESCAPED_UNICODE);
            if(empty($data['title']) || empty($data['name']) || empty($data['author'])){
                $this->error('模块参数不能为空');
                exit;
            }
            $name = ucfirst($data['name']);
            $dir = 'Addons/'.$name;
            if(is_dir($dir)){
                $this->error('模块已存在');
                exit;
            }
            mkdir($dir ,0755, true);
            file_put_contents($dir.'/config.php',"<?php return \r\n".var_export($data,true)."?>");
            foreach(glob('Addons\Tpl\*') as $f){
                $content = file_get_contents($f);
                $content = str_replace('NAME',$name,$content);
                file_put_contents($dir.'/'.basename($f),$content);
            }
            mkdir($dir.'/Template',0755,true);
            $this->success('创建成功',U('lists'));
        }else{
            $this->display('design');
        }
    }
}