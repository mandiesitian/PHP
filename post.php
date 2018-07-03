<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 10:33
 */
if(!isset($_GET['entry'])){
    echo '参数请求错误';
    exit();
}
else{
    $path=substr($_GET['entry'],0,6);
    $entry=substr($_GET['entry'],7,9);
}

$file_name=$_SERVER['DOCUMENT_ROOT'].'/content/'.$path.'/'.$entry.'.txt';


if(file_exists($file_name)){
    $fp=fopen($file_name,'r');
    if($fp){
        flock($fp,LOCK_SH);
        $result=fread($fp,1024);

    }
    flock($fp,LOCK_UN);
    fclose($fp);
}
else
{
    echo '不存在此文件';
}
//echo $result;
$content_array=explode('|',$result);
//echo $content_array;
//print_r($content_array);
//内容显示
echo '<h1>我的BLOG</h1>';
echo '<b>日志标题：</b>'.$content_array[0];
echo '<br/><b>发布时间：</b>'.date('Y-m-d H:i:s',$content_array[1]);
echo '<hr>';  //被水平线分割
echo $content_array[2];


?>