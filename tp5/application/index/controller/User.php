<?php
/**
 * Created by PhpStorm.
 * User: Ye
 * Date: 2018/8/20
 * Time: 20:42
 */
namespace app\index\controller;
use app\index\model\User as UserModel;
class User{
    //新增一条数据
    public function add(){
//        $user=new UserModel();
//        $user->name='叶远锋';
//        $user->sex='男';
//        $user->age=22;
//        if($user->save()){
//            return '新增成功';
//        }
//        else return '新增失败';


//        $user['name'] = '晓东';
//        $user['sex']  = '女';
//        $user['age']  =20;
//        if($result=UserModel::create($user)){
//            return '新增成功';
//        }
//        else {
//            return '新增失败';
//        }

   }
    //批量插入数据
    public function addList(){
        $user=new UserModel();
        $list=[
            ['name'=>'刘晓娜','sex'=>'女','age'=>30],
            ['name'=>'刘能','sex'=>'男','age'=>33],
        ];
        if($user->saveAll($list)){
            return '插入成功';
        }
        else{
            return '插入失败';
        }

    }
}