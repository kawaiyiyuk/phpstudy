<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/17
 * Time: 15:39
 */
//三．文件处理

$fp = fopen("file.txt","a");
//查看一个文件的大小： 字符串
//echo filesize('file.txt');

//删除一个文件：unlink()
//unlink('123.txt');

echo fgetc($fp);
echo fgetc($fp);
echo fgetc($fp);

//rewind($fp);
//echo fgetc($fp);
//echo ftell($fp);
//fseek($fp);
//echo fgetc($fp);

//文件锁定
//flock($fp,LOCK_EX); //锁定
//fwrite($fp,'1234');
//flock($fp,LOCK_UN); //释放
//fclose($fp);

//目录句柄操作
//opendir()：打开路径指定的目录流。
//$dir = opendir('E:\php\www\demo\basic6');
//while ($abc = readdir($dir)) {
//    echo $abc.'<br/>';
//}
//closedir($dir);

//scandir()：将目录读入数组。
print_r(scandir('E:\php\www\demo\basic6'));

//rmdir()：删除指定的目录
//rmdir('E:\php\www\demo\me');

//rename()：重命名文件。
rename('file2.txt','file02.txt');