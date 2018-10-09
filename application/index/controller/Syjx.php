<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Syjx extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function kctx()
    {
    	
        return $this->fetch('kctx');
    }
     public function jxxg()
    {
    	
        return $this->fetch('jxxg');
    }




}
