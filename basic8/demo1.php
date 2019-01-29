<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/22
 * Time: 18:29
 */

//$str = '        PHP       ';
//$str2 = "我是一个老师，\n我是一个学生";
//echo trim($str);
//echo $str2;
//explode 字符串分割
$email_array = explode('@','399599243@qq.com');
//print_r($email_array);
//$arr = array('yuanse','luobo','haiou');
//implode 字符串连接
//$str = implode('&',$arr);

//字符串先拆分再连接

$str = implode('#',$email_array);
echo $str;

