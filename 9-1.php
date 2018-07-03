<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 9:26
 */
$url='http://www.somesite.com:8000/php/code?id=100&cid=900';
$decode_url=urlencode($url);
$code_url=urldecode($decode_url);

$ret_arr=parse_url($url);
echo '<pre>';
print_r($ret_arr);
echo '编码前：'.$url;
echo '<br/>';


echo '编码后：'.$decode_url;
echo '<br/>';

echo '解码后：'.$code_url;

?>