<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:36
 */
//数组相关1

//$userNames = array('baidu' => '李彦宏','taobao' => '马云', '360' => '周鸿祎');
//
//echo $userNames['taobao'];


//$userAges = array('原色' => '30');
//$userAges['海鸥'] = 23;
//$userAges['萝卜哥'] = 33;
//$userAges['原色'] = 27;
//$userAges['海鸥'] = 23;
//$userAges['萝卜哥'] = 33;
//print_r($userAges);

//foreach ($userAges as $key => $item) {
//    echo $item.'----'.$key.'<br/>';
//}

//foreach ($userAges as $key => $value) {
//    print_r($key);
//    print_r($value);
//    echo '<br/>';
//}

//$arr = array('aaa','bbb','ccc','ddd');
////list 只能识别下标（key）位数字的数组，自定义的字符串key是无法使用list识别的
//list($var1,$var2) = $arr;
//
//echo ($var1);

//$userAges['海鸥'] = 23;
//$userAges['萝卜哥'] = 33;
//$userAges['原色'] = 27;
//
//list($name,$age) = each($userAges);
//
//echo $name;
//echo $age;


//数组去重
//$arr = [1,2,3,3,4,4,5,6,6,6,3,3,2,1];
//$a = array_unique($arr);
//print_r($a);

//数组键值对互换
$userAge = array('海鸥' => 23,'萝卜哥' => 33, '原色' => 27);
print_r($userAge);
echo '</br>';
$newUser = array_flip($userAge);
print_r($newUser);
