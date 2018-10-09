<?php
namespace app\index\controller;
use app\admin\model\Tzyw as TzywModel;
use think\Controller;
class Index extends Common
{
    public function index()
    {
         $cateM=new \app\index\model\Cates();
        // $recIndex=$cateM->getRecIndex();
    	 $tzyw=new TzywModel();
        if(request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v) {
                $link->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！',url('lst'));
            return;
        }
        $tzyws=$tzyw->order('id desc')->paginate(8);
        $this->assign('tzyws',$tzyws);
        return view();

    }
    public function question()
    {
    	
        return $this->fetch('question');
    }
    public function zxjj()
    {
        
        return $this->fetch('zxjj');
    }


}
