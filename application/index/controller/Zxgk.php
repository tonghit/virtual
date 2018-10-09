<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Zxgk extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function fzjc()
    {
    	
        return $this->fetch('fzlc');
    }
     public function jsmb()
    {
    	
        return $this->fetch('jsmb');
    }




}
