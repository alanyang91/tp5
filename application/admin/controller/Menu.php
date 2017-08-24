<?php
namespace app\admin\controller;

use think\Db;
class Menu extends Base
{

    public function index()
    {
        $menus = Db::table('menu')->select();
        return $this->fetch('index',['menus'=>$menus]);
    }
}