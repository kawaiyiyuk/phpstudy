<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:36
 */
//$a = 5;
//$b = $a +7 ;
//echo $b;
$a = '123';

//is_numeric 判断一个参数是否是数字
//if(is_numeric($a)){
//    echo '我是一个数字';
//}else  {
//    echo '我才不是数字';
//}
//is_int() 判断参数是否为整数

//类似的方法还有很多，可以去官方文档查询
//if(is_int($a)){
//    echo '我是一个整数';
//}else {
//    echo '我才不是整数';
//}

//随机数
//rand(); 不加参数 范围到ROUND_MAX  32767
//mt_rand() 比rand()的速度更快
// getrandmax(); 获取到最大值   32767
// mt_getrandmax()  获取到最大值   2147483647


//格式化输出
//number_format ()
//第二个参数小数点保留位数
//第三个是控制小数分割符
//第四个是控制整数分割符

//但是这个函数只支持1，2，4个参数，三个参数会报错
$i = 12345678.88899;
$b = number_format($i,2,'*','#');

echo $b;

