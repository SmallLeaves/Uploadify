<?php
/**
 * author: Administrator.
 * createTime: 2018/1/27 16:48
 * description:
 */

namespace app\api\controller;


use think\Controller;

class City extends Controller{
    private $obj;
    public function _initialize(){
        $this->obj=model('City');
    }
    public function getCitiesByParentId(){
        var_dump($_POST);
       /*$id = input('post.id');
        if(!$id){
            $this->error('ID不合法');
        }
        //通过id获取二级城市信息
        $cities = $this->obj->getNormalFirstCity($id);
        if(!$cities){
            return show(0,'木有城市啦！o(╥﹏╥)o');
        }
        return show(1,'success',$cities);*/
    }
}