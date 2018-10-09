<?php
namespace app\admin\validate;
use think\Validate;


class Article extends Validate
{
    
    protected $rule =[
        'title'=>'require|max:25',
        'keywords'=>'require',
        'desc'=>'require',
        'catesid'=>'require',
        'content'=>'require',
        

    ];
    
    protected $message =[
        'title.require'=>'文章名称必须填写',
        'keywords.require'=>'文章关键词不能为空',
        'desc.require'=>'文章描述不能为空',
        'catesid.require'=>'请选择文章所属栏目',
        'content.require'=>'文章内容不能为空',
        


    ];


    protected $scene= [
            'add' => ['title'=>'require|unique:article'],
            'edit' => ['title'=>'require|unique:article'],
    ];

}
