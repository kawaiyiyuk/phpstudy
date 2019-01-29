<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/16
 * Time: 15:43
 */
//数组排序
$fruit = array('banner','orange','apple');
$numbers = array(1,4,15,22,45,865,43,67,23,10,444,333,777,666);
//sort 数组排序，会按照排序方式重新组合数组
//asort 数组排序，保留原来数组的key值，但是排序会变化
//ksort 对数组按照键名进行排序
//sort($fruit);
//sort($numbers);
////print_r($fruit);
//print_r($numbers);

//数组打乱 shuffle

//shuffle($numbers);
//for ($i = 0; $i<3; $i ++) {
//    echo $numbers[$i].'<br/>';
//}
//反向排序

//注意这里，一般array开头的数组方法，是会返回一个新数组 所以要把值赋给一个新数组

$newNum = array_reverse($numbers);

for ($i = 0; $i<3; $i ++) {
    echo $newNum[$i].'<br/>';
}

