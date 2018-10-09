<?php
namespace app\admin\controller;
use think\Db;
use think\Loader;
use app\admin\model\Cates as CatesModel;
use app\admin\controller\Base;
class Cates extends Base
{

    public function lst()
    {   
       $cates =new CatesModel();
       $cateres =$cates->catestree();
       $this->assign('cateres' ,$cateres);
        return $this->fetch();
    }


    public function add()
    {
       $cates=new CatesModel();
       
        // dump($cates);die;
        if(request()->isPost()){
        
            $data =[
                'catesname'=>input('catesname'),
                // 'password'=>md5(input('password')),
                'pid'=>input('pid'), 
                'type'=>input('type'), 
            ];
            
            $validate = Loader::validate('Cates');
            if(!$validate->check($data)){
                $this->error(($validate->getError()));
                die;
            }


            if(Db::name('cates')->insert($data)){
                return $this->success('添加栏目成功!','lst');
            }else{
                return $this->error('添加栏目失败!');
            }
            return;
        }
        $cateres =$cates->catestree();
        $this->assign('cateres' ,$cateres);
        return $this->fetch();

    }

    public function edit(){
        $id=input('id');
        $cates =db('cates')->find($id);
        if (request()->isPost()) {
            $data =[
                'id'=>input('id'),
                'catesname'=>input('catesname'),    
                'type'=>input('type'),
                'pid'=>input('pid'),    
            ];

           
            $validate = loader::validate('Cates');
            if (!$validate->scene('edit')->check($data)) {
              $this->error($validate->getError()); die;
            }
            $save=db('cates')->update($data);
            if($save !== false) {
            $this->success("修改栏目成功！",'lst');
            } else {
             $this->success("修改栏目失败！");
            }
            return;
        } 

        $this->assign('cates',$cates);
         return $this->fetch();
    }



    

    public function del(){

        $id=input('id');
        if($id!=0){
            if (db('cates')->delete(input('id'))) {
               $this->success('删除栏目成功！','lst');   
            } else {
              $this->error('删除栏目失败！');   
            }
        }else{
            $this->error('顶级栏目不能删除！');
        }

        

    }


}
