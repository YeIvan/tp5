<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
         // return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
    public function db(){
//  Db::name('user')->insert(['name'=>'王爽','sex'=>'女','age'=>19]);
//        Db::name('user')->where('id',2)->delete();
      //  Db::name('user')->where('id',1)->update(['name'=>'赵六']);
//       $result=Db::name('user')->where('age','<',20)->select();
//        dump($result);
//        $result=Db::name('user')->where('name','like','王%')->select();
//        dump($result);
        //链式操作
//        $result=Db::name('user')
//            ->where('sex','男')
//            ->order('id')
//            ->limit(1)
//            ->select();
//        dump($result);
//        $result=Db::name('user')->where('id','between',[3,5])->select();
//        dump($result);
        //添加多条数据
//        $date=[
//            ['name'=>'赵宇','sex'=>'女','age'=>30],
//            ['name'=>'关晓彤','sex'=>'女','age'=>18],
//            ['name'=>'刘壮实','sex'=>'男','age'=>26]
//        ];
//        $result=Db::name('user')->insertAll($date);
        //更改字段值
//        $result=Db::name('user')->where('id',1)
//            ->setField('name','刘德华');
//        //影响的行数
//        dump($result);
        //自增或自减一个字段值  setDec 自减
//        $result=Db::name('user')->where('id',1)
//            ->setInc('age',2);

    }
}
