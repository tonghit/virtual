<?php
namespace app\admin\controller;
use think\Db;
use think\Loader;
use app\admin\model\Admin as AdminModel;
use app\admin\controller\Base;

class Admin extends Base
{
    

    public function lst()
    {   
        $list =AdminModel::paginate(4);
        $this->assign('list',$list);
        return $this->fetch();
    }


    public function add()
    {

        if(request()->isPost()){
            //dump(input('post.'));
            // $validate=new \think\Validate([
            //     'username'=>'require|max:25',
            //     'password'=>'require|max:33'
            // ]); 
            
            $data =[
                'username'=>input('username'),
                // 'password'=>md5(input('password')),
                'password'=>input('password'),      
            ];
            
            $validate = Loader::validate('Admin');
            if(!$validate->check($data)){
                $this->error(($validate->getError()));
                die;
            }


            if(Db::name('admin')->insert($data)){

                return $this->success('添加管理员成功!');
            }else{
                return $this->error('添加管理员失败!');
            }
            return;
        }
        return $this->fetch();

    }

    public function edit(){
        $id=input('id');
        $admins =db('admin')->find($id);
        if (request()->isPost()) {
            $data =[
                'id'=>input('id'),
                'username'=>input('username'),
            ];

            if(input('password')){
                   $data['password']=md5(input('password'));
                }else{
                     $data['password']=$admins['password'];
                }
            $validate = loader::validate('Admin');
            if (!$validate->scene('edit')->check($data)) {
              $this->error($validate->getError()); die;
            }
            $save=db('admin')->update($data);
            if($save !== false) {
            $this->success("修改管理员成功！",'lst');
            } else {
             $this->success("修改管理员失败！");
            }
            return;
        } 

        $this->assign('admins',$admins);
         return $this->fetch();
    }



    

    public function del(){

        $id=input('id');
        if($id!=2){
            if (db('admin')->delete(input('id'))) {
               $this->success('删除管理员成功！','lst');   
            } else {
              $this->error('删除管理员失败！');   
            }
        }else{
            $this->error('初始化管理员不能删除！');
        }

        

    }
    public function logout(){
        session(null);
        $this->success('退出成功','Login/index');
    }

}
