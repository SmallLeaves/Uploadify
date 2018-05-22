<?php
namespace app\index\controller;
 class Upload 
{
    public function upload()
    {
        $file = Request::instance()->file('file');
        //给定一个目录
        $info = $file->move('upload');
        var_dump($info) ;
        echo '111';
        if($info && $info->getPathname()){
            return show(1,'图片上传成功','/h5uploadify/'.$info->getPathname());
        }
        return show(0,'图片上传失败');
    }
}
