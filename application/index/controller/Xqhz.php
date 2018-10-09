<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Xqhz extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function hzcg()
    {
    	
        return $this->fetch('hzcg');
    }
   



}
