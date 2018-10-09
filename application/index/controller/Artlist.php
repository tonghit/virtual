<?php
namespace app\index\controller;
use think\Request;
use app\index\model\Article;
class Artlist extends Common
{
    // public function index()
    // {
    //     $cateres=db('cates')->where(array('pid'=>0))->select();
    //     foreach ($cateres as $k => $v) {
    //         $children=db('cates')->where(array('pid'=>$v['id']))->select();
    //         if($children){
    //             $cateres[$k]['children']=$children;
    //         }else{
    //             $cateres[$k]['children']=0;
    //         }
    //     }

    //     $this->assign('cateres',$cateres);
    //     // $cateM=new \app\index\model\Cates();
    //     // $this->assign('cateM',$cateM);
    // 	$article = new Article(); 
    //     $artRes=$article->getAllAtricles(input('catesid'));
    //     $this->assign('artRes',$artRes);
    //     return view();
    // }

}
