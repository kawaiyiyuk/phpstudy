<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/22
 * Time: 18:29
 */

//字符串比较
//字符串的排序：strcmp()、strcasecmp()和 strnatcmp()
//如果这两个字符串相等，该函数返回 0，如果
//按字典顺序 str1 和 str2 后面（大于 str2）就返回一个正数，如果 str1 小于 str2 就返回一个负
//数。这个函数是区分大小写的
//echo strcmp('a','a'); //0
//echo strcmp('a','b'); //-1
//echo strcmp('b','a'); //1


//echo strcmp(21,20); //-1 也可以进行数字比较

//strnatcmp 按自然排序 也就是说21>20返回的是1 而不是-1
echo strnatcmp(21,20);
//函数 strcasecmp()除了不区分大小写之外，其他和 strcmp()一样

//strspn()函数返回一个字符串中包含有另一个字符串中字符的第一部分的长度。也
//就是求两个字符串之间相同的部分

//echo strspn('5995555','399599243@qq.com'); //4
