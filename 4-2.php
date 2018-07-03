<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 13:48
 */

///php5.6  改变
function draw($total,$line=1,$row=1,&$result='<table border="2"><tr>'){
    if($line>$total){
        return;
    }
    else{
        $result=$result."<td>$line</td>";
        $line++;
        $row++;
        draw($total,$line,$row,$result);

    }

    echo $result=$result."</tr></table>";
}
draw(10);
?>