<?php
//用getimagesize来判断上传图片的类型比$_FILES函数的type更可靠
//同一个文件，使用不同的浏览器php返回的type类型是不一样的，由浏览器提供type类型的话，
//就有可能被黑客利用向服务器提交一个伪装撑图片后缀的可执行文件。
    $file=$_FILES['file'];
    if(!empty($file))
    {
        var_dump($file);
        var_dump(getimagesize($file["tmp_name"]));
    }