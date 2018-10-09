<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{

    public function _initialize(){
       
        if(input('artid')){
            $articles=db('article')->field('cateid')->find(input('artid'));
            $cateid=$articles['cateid'];
            $this->getPos($cateid);
        }
       
        $cateM=new \app\index\model\Cates();
        
    }



    public function getNavCates(){
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
    }

   


}
