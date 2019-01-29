<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/22
 * Time: 18:29
 */

$str2 = "我是一个老师，\n我是一个学生";

//substr() 截取字符串 没法截取中文
echo  mb_substr($str2,0,6,'utf-8');

//echo $str2;
//str_split()返回一个数组，其中各数组元素分别是字符串参数中的一个字符
//串
print_r(str_split('This is a Teacher!'));