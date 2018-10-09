<?php
namespace app\index\model;
use think\Model;
use app\index\model\Cates;
class Article  extends Model
{
    // public function getAllAtricles($cateid){
    //     $cate=new Cates();
    //     $allCateID= $cate ->getchilrenid($cateid);
    //     // dump($allCateID);die;
    //     $artRes=db('article')->where("catesid in('$allCateID')")->paginate(10);
    //     return $artRes;
    //     // dump($artRes);die;
    // }


}
