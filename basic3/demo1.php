<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:36
 */
//双引号和单引号的区别
//双引号可以解析变量，而单引号只能将变量名字输出
$name = lq;
echo 'he is name $name';  //he is name $name
echo '<br/>';
echo "他的名字是". $name."\n他快到中年了"; //这里的\n是在源代码中进行了换行
$total = 80;
echo '<br>';
echo $total>100?'小于100':'大于100';