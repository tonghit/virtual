<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
use think\Request;
use app\index\model\Article;
class Syal extends Common
{
    public function index()
    {

    	 $cateres=db('cates')->where(array('pid'=>0))->select();
        foreach ($cateres as $k => $v) {
            $children=db('cates')->where(array('pid'=>$v['id']))->select();
            if($children){
                $cateres[$k]['children']=$children;
            }else{
                $cateres[$k]['children']=0;
            }
       }
       
        $this->assign('cateres',$cateres);
        
        return $this->fetch();
    
    }
    public function getItemByPid($pid){
      $childrenpid=$cateres=db('cates')->where(array('pid'=>$pid))->select();
      return $childrenpid;
    } 
}


