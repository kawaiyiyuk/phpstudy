<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/17
 * Time: 14:46
 */
//目录操作

//解析目录路径：basename()函数返回路径的文件名部分。 --返回文件名
$path = 'E:\php\www\demo\basic6\demo1.php';
//echo 'path:'.basename($path).'<br/>';


//获取路径的目录：dirname()函数返回路径目录部分。--返回路径名
//echo 'path:'.dirname($path).'<br/>';

//关于路径的信息：pathinfo()函数创建一个关联数组，其中包括：目录名、基本名和扩展名
//$array_path = pathinfo($path);
//foreach ($array_path as $item) {
//    echo $item.'<br/>';
//}
//print_r($array_path);


//确定绝对路径：realpath()函数将 path 中的所有符号链接和相对路径引用转换为相应的硬链接和绝对路径。
//将相对路径转变成绝对路径
$newPath = './demo1.php';
echo  realpath($newPath);

