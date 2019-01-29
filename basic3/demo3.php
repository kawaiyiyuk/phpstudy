<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:36
 */


//控制流程语句----循环

//while循环
//$a = 10;
//while ($a >0) {
//    echo $a;
//    $a --;
//    echo '<br/>';
//}
//for 循环

//$b = 10;
//for ( ;$b>0 ; $b--) {
//    echo $b;
//    echo '<br/>';
//}
//
//echo '循环结束了';

//退出程序
//break  推出当前循环 ，如果后面还有语句的话，那么是会继续执行的
//exit 退出整个循环，后面的所有语句都不执行了
for ($i = 0; $i<=10 ; $i++) {
    echo $i.'<br/>';
    if($i == 6) {
        break;
    }
}