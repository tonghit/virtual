<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Zygx extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function xngx()
    {
    	
        return $this->fetch('xngx');
    }
     public function xjgx()
    {
    	
        return $this->fetch('xjgx');
    }
     public function gxjh()
    {
        
        return $this->fetch('gxjh');
    }



}
