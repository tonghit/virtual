<?php 
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin;
use think\Db;
use think\Loader;
use app\admin\controller\Teacher;
use app\admin\controller\Student;
class Login extends Controller
{   
   public function index(){
       
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $num=$admin->login($data);
             $result = $this->validate($data,'admin');
            if($num==3) {
               
                 $this->redirect('thinkphp5/public/admin/admin/lst', 5, '页面跳转中...')  ;
            }else if($num==4){
                $this->fetch();
            }
            else{
                $this->fetch();
            }
        }
        return $this->fetch();
    }

    public function register(){
        
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

                return $this->success('添加学生成功!','index/index');
            }else{
                return $this->error('添加学生失败!');
            }
            return;
        }
        return $this->fetch('register');
    }

}
