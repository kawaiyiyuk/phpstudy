<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:36
 */
//数组相关1




//创建数组
//通过array关键词创建
//$userNames = array('数组1','数组2','数组3');
//echo $userNames[2];
//print_r($userNames);
//通过range()函数创建，但是通过range()函数创建的数组，只能是
//包含区间范围内的一个数组

//$numbers = range(1,10);
//$letters = range('a','z');
//echo print_r($letters);

//使用循环来访问数组
//count()函数 数组的长度
//$numbers = range(1,10);
//$letters = range('a','z');
//$numbersleng = count($numbers);
//$lettersleng = count($letters);
//for($i = 0;$i<$lettersleng;$i++){
//    echo $letters[$i].'<br/>';
//}
$numbers = range(1,10);
$letters = range('a','z');
foreach ($letters as $key => $item) {
    echo $key.'----'.$item.'<br/>';
}