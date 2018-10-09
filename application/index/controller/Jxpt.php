<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Jxpt extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function ptjs()
    {
    	
        return $this->fetch('ptjs');
    }
     public function jxgn()
    {
    	
        return $this->fetch('jxgn');
    }




}
