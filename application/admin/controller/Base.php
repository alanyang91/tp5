<?php
namespace app\admin\controller;

use think\Controller;
class Base extends Controller
{

//    protected $beforeActionList = [
//        'first',
//    ];
//
//    protected function first()
//    {
//        echo 'first<br/>';
//    }
    public function index(){
        return $this->fetch('index');
    }

}