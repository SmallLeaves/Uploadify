<?php
namespace app\api\controller;

use think\Controller;
use think\Request;
use think\File;
class Image extends Controller
{
    public function upload(){
        $file = Request::instance()->file('file');
        //给定一个目录
        $info = $file->move('upload');
        if($info && $info->getPathname()){
            return show(1,'图片上传成功','/salon/'.$info->getPathname());
        }
        return show(0,'图片上传失败');

    }
}