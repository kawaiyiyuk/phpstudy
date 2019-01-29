<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/17
 * Time: 15:39
 */
//三．文件处理
//读出文件
$fp = fopen("file.txt","r");
//fgetc 读出一个字符，并将指针移到下一个字符
//echo fgetc($fp);

//fgets()：读出一行字符，可以指定一行显示的长度。
//echo fgets($fp);

//fgetss()：从文件指针中读取一行并过滤掉 HTML 标记 已删除

//读取定量的字符
//echo fread($fp,10);

//fpassthru()： 输出文件指针处的所有剩余数据。
//fpassthru可以直接输出，返回值是剩余的长度
//echo fgetc($fp);
//echo fgetc($fp);
//echo fgetc($fp);
//echo '</br>';
//echo fpassthru($fp);

//file()：将整个文件读入数组中，以行分组
//print_r(file('file.txt'));

//读入一个文件并写入到输出缓冲
//readfile('file.txt');

//将整个文件读入一个字符串
//echo file_get_contents('file.txt');

//判断读完文件函数：feof() ，返回 true ,!feof() 返回 false;
//while (!feof($fp)) {
//    echo fgetc($fp);
//}
//
//fclose($fp);

//file_exists检测文件是否存在


//在读取一个文件的时候，是先要检测该文件是否存在的，如果存在进行操作
//如果不存在那么提示错误
//if(file_exists('file3.txt')) {
//    echo '文件存在';
//}else {
//    echo '文件不存在';
//}