<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 16:25
 */
$file='data.txt';
$content="内容标题\r\n内容第一行\r\n内容第二行";

if(!$fp=fopen($file,'a')){
    echo '打开文件失败';
    exit;

}

if(fwrite($fp,$content)==false){
    echo '文件写入失败';
    exit;
}

echo '文件写入成功';
fclose($fp);

?>