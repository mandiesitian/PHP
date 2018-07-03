<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 17:03
 */
$path='D:/phpStudy/WWW/phpStudyTest/data.txt';

$file_name=basename($path);
$dir_name=dirname($path);

echo '完整路径：'.$path;
echo '<br/>';
echo '<br/>';


echo '目录名为：'.$dir_name;
echo '<br/>';
echo '<br/>';


echo '文件名为：'.$file_name;
echo '<br/>';
echo '<br/>';

?>