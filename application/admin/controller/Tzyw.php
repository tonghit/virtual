<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
use app\admin\controller\Base;
use app\admin\model\Tzyw as TzywModel;
class Tzyw extends Base
{
     public function lst()
    {   
        $tzyws =TzywModel::paginate(8);
        $this->assign('tzyws',$tzyws);
        return $this->fetch();
    }


    public function add()
    {

        if(request()->isPost()){
            
            
            $data =[
                'title'=>input('title'),
                'datetime'=>input('datetime'),
                'content'=>input('content'),
                
            ];
            
            $validate = Loader::validate('Tzyw');
            if(!$validate->check($data)){
                $this->error(($validate->getError()));
                die;
            }


            if(Db::name('tzyw')->insert($data)){

                return $this->success('添加通知要闻成功!');
            }else{
                return $this->error('添加通知要闻失败!');
            }
            return;
        }
        return $this->fetch();

    }

    public function edit(){
        $id=input('id');
        $tzyws =db('tzyw')->find($id);
        if (request()->isPost()) {
            $data =[
                'id'=>input('id'),
                'title'=>input('title'),
                'datetime'=>input('datetime'),
                'content'=>input('content'),
            ];

           
            $validate = loader::validate('Tzyw');
            if (!$validate->scene('edit')->check($data)) {
              $this->error($validate->getError()); die;
            }
            $save=db('tzyw')->update($data);
            if($save !== false) {
            $this->success("修改通知要闻成功！",'lst');
            } else {
             $this->success("修改通知要闻失败！");
            }
            return;
        } 

        $this->assign('tzyws',$tzyws);
         return $this->fetch();
    }



    

    public function del(){

        $id=input('id');
        if($id!=2){
            if (db('tzyw')->delete(input('id'))) {
               $this->success('删除通知要闻成功！','lst');   
            } else {
              $this->error('删除通知要闻失败！');   
            }
        }

        

    }


}

      
