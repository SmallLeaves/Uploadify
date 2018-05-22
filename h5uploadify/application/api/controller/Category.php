<?php
/**
 * author: Administrator.
 * createTime: 2018/1/27 18:24
 * description:
 */

namespace app\api\controller;


use think\Controller;

class Category extends Controller{
    private $obj;
    public function _initialize(){
        $this->obj=model('Category');
    }
    public function getCategorysByParentId(){
        $id = input('post.id',0,'intval');//默认值是0

        if(!$id){
            $this->error('ID不合法');
        }
        //通过id获取二级分类信息
        $categorys = $this->obj->getNormalCategoryByParentId($id);
        if(!$categorys){
            return show(0,'木有子目录啦！o(╥﹏╥)o');
        }
        return show(1,'success',$categorys);
    }
}