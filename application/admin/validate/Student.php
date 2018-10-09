<?php
namespace app\admin\validate;
use think\Validate;


class Student extends Validate
{
    
    protected $rule =[

        'stuname'=>'require|max:25',
        'stunumber'=>'require|max:25',
        'username'=>'require|max:25',
        'class'=> 'require',
        'stunumber'=> 'require',
        'password'=>'require',

    ];
    
    protected $message =[
        'stuname.require'=>'学生姓名必须填写',
        'stuname.max'=>'学生姓名长度不大于25位',
        'stunumber.require'=>'学号必须填写',
        'username.require'=>'学生账号必须填写',
        'username.max'=>'学生账号长度不大于25位',
        'class.require'=>'行政班级不能为空',
        'password.require'=>'学生密码必须填写',

    ];


    protected $scene= [
            'add' => ['username'=>'require|unique:student','password'],
            'edit' => ['username'=>'require|unique:student'],
    ];

}
