<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/16
 * Time: 15:43
 */
//数组排序
//添加数组元素

//array_unshift() 将传入的单元插入到数组开头  返回值是当前数组的长度
//array_push() 将传入的单元插入到数组结尾  返回值是当前数组的长度
//array_shift() 删除数字第一个元素  返回值删除的元素
//array_pop() 删除数字最后个元素  返回值删除的元素
//$userName = array('海鸥');
//print_r($userName);
//array_unshift($userName,'原色');
//array_unshift($userName,'萝卜哥');
//
//print_r($userName);


//随机选取数组元素
//$fruit = array('banner','orange','apple');
//$a = array_rand($fruit,2);
//array_rand 如果随机数大于1，返回的是一个数组 所以echo输出的话会报错
//print_r($a );

//变更数组指针

//$userAges = array('原色','嗨哦','萝卜哥');
//next 指向下一个
//prev 指向前一个
//current 指向当前
//reset 指向第一个
//echo next($userAges);
//echo current($userAges);
//echo next($userAges);
//echo current($userAges);
//echo  reset($userAges);
//echo count($userAges);
//echo sizeof($userAges); //和count()作用相同
//
//$nums = array(1,2,3,4,5,6,77,88,6,5,4,333,22,1,1,1);

//array_count_values 检查数组中值出现的次数
//print_r(array_count_values($nums));
//通过标量函数，将字符串键（key）设置成变量，然后将赋值给了这个变量
$fruits = array('a' => 'apple', 'b' => 'banner', 'c' => 'orange');

extract($fruits);

echo $a;