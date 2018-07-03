<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 15:01
 */
$ms_office=array(1,2,3,4,5,6,7);

$item_num=count($ms_office);

echo $item_num;
echo '<pre>';

print_r($ms_office);

print_r(array_chunk($ms_office,2));  //使用从0开始的索引
print_r(array_chunk($ms_office,2,true)); //使用原数组索引

echo '<br/>';
echo '<br/>';
echo '<br/>';

$a=array('Earth','Venus');
$b=array(
    4=>'Mars',
    6=>'Jupiter'
);

$c=array_merge($a,$b);

print_r($c);
$index_l=array(1,4,2,7,5,6,9,0);
sort($index_l); //返回 值为1
print_r($index_l);
?>