<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 16:05
 */
$dir='D:\PHPproject\learning';

$file_list=scandir($dir);

echo '<pre>';

print_r($file_list);
?>