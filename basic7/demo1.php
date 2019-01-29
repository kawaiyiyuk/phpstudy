<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/18
 * Time: 13:25
 */
//自定义函数
//echo md5('12234565');

//function functionpi ($radius) {
//    $area = $radius * $radius * pi();
//    echo $area;
//}
//
//functionpi(20);
//php有个按引用传递参数和按值传递

//$prices = 50;
//$tax = 0.5;
//function functionprice ($prices,$tax) {
//    $prices = $prices + $prices* $tax;
//    $tax = $tax * $tax;
//
//    echo $prices;
//    echo '<br/>';
//    echo $tax;
//    echo '<br/>';
//}
//functionprice($prices,$tax);
include 'libary/tool.library.php';

//echo functionadd(3,6);


//全局变量定义 global
//$a = 5;
//function fna () {
//    global $a;
//    $a = 20;
//}
//fna();
//echo $a;

//超级全局变量$GLOBAL

//$GLOBALS['a'] = 5;
//function fna () {
//    $GLOBALS['a'] = 20;
//}
//fna();
//echo $GLOBALS['a'];

//文件包含
//include 引用文件，如果引用报错提示错误继续向下执行
//include 'demo111.php';

//include_once 只引用一次，如果已存在那么将不再引用
//include_once 'demo1.php';

//require  引用方式不同，require类似于函数调用;
require('demo1.php');

echo '<strong>我还可以继续执行</strong>';