<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/17
 * Time: 15:13
 */

//二．磁盘、目录和文件计算

//确定文件的大小：filesize()函数返回指定文件字节大小。
//返回的是字节大小
$file = 'E:\php\www\demo\basic6\demo2.php';
//echo round(filesize($file)/1024,2),'KB'.'<br/>';

//计算磁盘的可用空间：diskfreespace()函数返回指定的目录所在磁盘分区的可用空间

$drive = 'C:';
//echo round(disk_free_space($drive)/1024/1024/1024,2).'GB'.'<br/>';
//计算磁盘的总容量：disk_total_space()函数返回指定的目录所在磁盘分区的总容量
//echo round (disk_total_space($drive)/1024/1024/1024,2).'GB'.'<br/>';

//设置时区否则会报错
date_default_timezone_set('PRC');
//确定文件的最后访问时间：fileatime()函数返回文件的最后访问时间，采用的 Unix 时间戳格式
//echo date('Y-m-d,h:i:s',fileatime($file));


//确定文件的最后改变时间：filectime()函数返回文件的最后改变时间，采用 Unix 时间戳格式
echo date('Y-m-d,h:i:s',filectime($file)).'<br/>';

//确定文件的最后修改时间：filemtime()函数返回文件的最后修改时间，采用Unix 时间戳格式
echo date('Y-m-d,h:i:s',filemtime($file)).'<br/>';


