<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
// use app\index\model\Article;
class Article extends Common
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




        



        


        $cateid=input('cateid');
        $articles=db('article')->select();
        
       
       
      
       
        $articles= db('article')->where(array('catesid'=>$cateid))->select();
        // $arry=array();
       //  foreach ($articles as $k3 => $v3) {
       //    // $articles[$k3]['id']=$articles[$k3]['catesid'];
       //     dump($articles[$k3]['catesid']);die;
           
       // }
         // $arry=$articles->select;
         // dump($articles);die;
        


    	$this->assign('articles',$articles);
        return $this->fetch('index');
    }
   
}
