<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
use app\admin\model\Tzyw as TzywModel;
class Tzyw extends Controller
{
     public function index()
    {
    	
    $tzyw=new TzywModel();
        if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $link->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        $tzyws=$tzyw->order('id desc')->paginate(10);
        $this->assign('tzyws',$tzyws);
        return view();

    }
   public function nn(){
  	
  		$arid=input('arid');
  		$tzyws=db('tzyw')->find($arid);
  		$this->assign('tzyws',$tzyws);
   		return $this->fetch('nn');
   }




}
