<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Dxsy extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function xnwz()
    {
    	
        return $this->fetch('xnwz');
    }
     public function qxsy()
    {
    	
        return $this->fetch('qxsy');
    }
    public function hfyd()
    {
        
        return $this->fetch('hfyd');
    }
    public function jxzz()
    {
        
        return $this->fetch('jxzz');
    }




}
