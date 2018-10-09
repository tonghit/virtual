<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Cates as CatesModel;
use app\admin\controller\Base;
class Article extends Base
{
    public function lst(){

        $artres=db('article')->field('a.*,b.catesname')->alias('a')->join('tp_cates b' ,'a.catesid=b.id')->paginate();
        $this->assign('artres',$artres);
        return $this->fetch();
    }

    public function add(){

        $cates=new CatesModel();
        $article=new ArticleModel();
        if(request()->isPost()){
           
            
            $data =[

                'title'=>input('title'),
                'author'=>input('author'),
                'keywords'=>input('keywords'),
                'desc'=>input('desc'),
                'catesid'=>input('catesid'),
                'content'=>input('content'),
                'datetime'=>input('datetime'),
                      
            ];

            

            
            $validate = Loader::validate('Article');
            if(!$validate->check($data)){
                $this->error(($validate->getError()));
                die;
            }


            if(Db::name('article')->insert($data)){

                return $this->success('添加文章成功!');
            }else{
                return $this->error('添加文章失败!');
            }
            return;
        }
        $articles =$cates->catestree();
        $this->assign('articles',$articles);
        return $this->fetch();
    }

    public function edit(){

        if (request()->isPost()) {
            $data =[
             'id'=>input('id'),
             'title'=>input('title'),
             'author'=>input('author'),
             'keywords'=>input('keywords'),
             'desc'=>input('desc'),
             'pic'=>input('pic'),
             'catesid'=>input('catesid'),
             'content'=>input('content'),
             'datetime'=>input('datetime'),
               
            ];

            // dump($data);die;
          
            $validate = loader::validate('Article');
            if (!$validate->scene('edit')->check($data)) {
              $this->error($validate->getError()); die;
            }
            $save=db('article')->update($data);
            if($save !== false) {
            $this->success("修改文章成功！",'lst');
            } else {
             $this->success("修改文章失败！");
            }
            return;
        } 

        $cates=new CatesModel();
        $articles =$cates->catestree();
        $arts =db('article')->find(input('id'));
        $this->assign(array(
            'articles'=>$articles,
            'arts'=>$arts,
            ));
        return $this->fetch();
    }
    



    public function del(){

        $id=input('id');
        
            if (db('article')->delete(input('id'))) {
               $this->success('删除文章成功！','lst');   
            } else {
              $this->error('删除文章失败！');   
            }
        
    }


}

      
