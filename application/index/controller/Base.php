<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
    	$this->right();
    	
    }


    public function right(){
    	$counts=db('tzyw')->order('count desc')->limit(8)->select();
    	
    	$this->assign(array(
    			'counts'=>$counts,
    			
    		));
    }





}
