<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/1 0001
 * Time: 19:48
 */

$path=$_SERVER['DOCUMENT_ROOT'].'/upload/';  //****
$file_path =$path.$_FILES['myfile']['name'];

echo $file_path;
if(move_uploaded_file($_FILES['myfile']['tmp_name'],$file_path))
{
    echo '文件上传成功';
}
else
{
    echo '文件上传失败'.$_FILES['myfile']['error'];
}


?>