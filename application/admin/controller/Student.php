<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
use app\admin\model\Student as StudentModel;

class Student extends Controller
{

    public function lst()
    {   
        $list =StudentModel::paginate(4);
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
                'stuname'=>input('stuname'),
                'stunumber'=>input('stunumber'),
                // 'password'=>md5(input('password')),
                'stusex'=>input('stusex'),
                'username'=>input('username'), 
                'class'=>input('class'), 
                'password'=>md5(input('password')),       
            ];
            
            $validate = Loader::validate('Student');
            if(!$validate->check($data)){
                $this->error(($validate->getError()));
                die;
            }


            if(Db::name('student')->insert($data)){

                return $this->success('添加学生成功!');
            }else{
                return $this->error('添加学生失败!');
            }
            return;
        }
        return $this->fetch();

    }

    public function edit(){
        $id=input('id');
        $students =db('student')->find($id);
        if (request()->isPost()) {
            $data =[
                'id'=>input('id'),
                'stuname'=>input('stuname'),
                'stunumber'=>input('stunumber'),
                // 'password'=>md5(input('password')),
                'stusex'=>input('stusex'),
                'class'=>input('class'), 
                'username'=>input('username'), 
                'password'=>input('password'),  
            ];

            if(input('password')){
                   $data['password']=md5(input('password'));
                }else{
                     $data['password']=$students['password'];
                }
            $validate = loader::validate('Student');
            if (!$validate->scene('edit')->check($data)) {
              $this->error($validate->getError()); die;
            }
            $save=db('student')->update($data);
            if($save !== false) {
            $this->success("修改学生成功！",'lst');
            } else {
             $this->success("修改学生失败！");
            }
            return;
        } 

        $this->assign('students',$students);
         return $this->fetch();
    }



    

    public function del(){

        $id=input('id');
        if($id!=2){
            if (db('student')->delete(input('id'))) {
               $this->success('删除学生成功！','lst');   
            } else {
              $this->error('删除学生失败！');   
            }
        }

        

    }


}
