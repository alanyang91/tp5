<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Menu;
class Base extends Controller
{
    //自定义初始化
    public function _initialize()
   {
       //需要调用`Model`的`initialize`方法
       //TODO:自定义的初始化
       $request = request();
       $this->request = request();
       $name = $request ->controller();
       $this->params = $this->request->param();
       //实例化当前类
       $this->model = new  Menu();
   }


/**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('index');
    }
    
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
//        $params = $this->request->param();
//        if(!empty($params)){
//            $model = $this->model;
//            $model -> save($params);
//        }
        return $this->fetch();
    }
    
    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $params = $request->param();
        if(!empty($params)){
            $model = $this->model;
            $model -> save($params);
            $menus = Db::table('menu')->select();
            return $this->fetch('index',['menus'=>$menus]);
        }
        return $this->fetch('save');
    }
    
    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }
    
    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

}
