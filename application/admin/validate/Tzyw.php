<?php
namespace app\admin\validate;
use think\Validate;


class Tzyw extends Validate
{
    
    protected $rule =[
        'title'=>'require|max:100',
        'datetime'=>'require',
        'content'=>'require',
        

    ];
    
    protected $message =[
        'title.require'=>'文章名称必须填写',
        'datetime'=>'时间格式为xxxx-xx-xx xx:xx:xx',
        'content.require'=>'文章内容不能为空',
        


    ];


    protected $scene= [
            'add' => ['title'=>'require|unique:tzyw'],
            'edit' => ['title'=>'require|unique:tzyw'],
    ];

}
