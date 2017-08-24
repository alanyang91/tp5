<?php
namespace app\admin\controller;

class Home extends Index
{
    
    public function index()
    {
        return $this->fetch('index');
    }
}
