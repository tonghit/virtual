<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Szdw extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function zxzr()
    {
    	
        return $this->fetch('zxzr');
    }
     public function zxry()
    {
    	
        return $this->fetch('zxry');
    }
    public function dwjg()
    {
        
        return $this->fetch('dwjg');
    }
    public function jssphcg()
    {
        
        return $this->fetch('jssphcg');
    }




}
