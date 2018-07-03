<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 13:33
 */

function onvar(){
    echo '无参数函数<br/>';
    return;
}
onvar();

function returnValue(){
    return true;
}
 if(returnValue())
 {
     function inFunction(){
         echo '根据条件定义的函数<br/>';
     }
 }

 inFunction();


function base(){
    function offset(){
        echo  '在函数内部的函数<br/>';
    }

    class subClass{
        function subShow(){
            echo '在类中的函数<br/>';
        }
    }

}
//先调用外部函数
base();
//再调用内部函数
offset();
//函数运行后  初始化类：
$newclass=new subClass();
$newclass->subShow();  //类的调用方式
//注意顺序
?>