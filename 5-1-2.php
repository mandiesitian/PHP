<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 14:46
 */
$number=18;
$string='123';
$array=array('number','string','array');

$newArray=compact('number','string','array');

print_r($newArray);
echo $newArray['array'][0];

$index=array(1,2,4);
echo '<br/>';
$newArray1=array_combine($index,$array);

foreach ($newArray1 as $index){
    echo $index.'<br/>';
}
echo '<pre>';
print_r($newArray1);  //索引和值的对应关系




?>