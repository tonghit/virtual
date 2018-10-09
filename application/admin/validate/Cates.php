<?php
namespace app\admin\validate;
use think\Validate;


class Cates extends Validate
{
    
    protected $rule =[
        'catesname'=>'require',
        'type'=>'require',
        'pid'=>'require',

    ];
    
    protected $message =[
        'catesname.require'=>'栏目名称必须填写',
        'type.require'=>'栏目分类必须填写',
        'pid.require'=>'上级栏目必须填写',

    ];


    protected $scene= [
            'add' => ['catesname'=>'require|unique:cates','pid'],
            'edit' => ['catesname'=>'require|unique:cates','type'=>'require','pid'=>'require'],
    ];

}
