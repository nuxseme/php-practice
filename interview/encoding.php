<?php
/**
 * @link www.github.com/nuxseme/php-practice
 * @copyright Copyright (c) 2017 nuxseme
 * @license MIT
 */

/**
 * 获取包含中英文的字符串长度
 */
$str = '测试abc123';
echo strlen($str),PHP_EOL;
echo mb_strlen($str,'utf-8');

//for($i = 0;$i<strlen($str);$i++) {
//    echo $i,'=>',$str[$i],PHP_EOL;
//}
//for($i = 0;$i<mb_strlen($str);$i++) {
//    echo $i,'=>',$str[$i],PHP_EOL;
//}

echo mb_substr($str, 7, 1);
//echo substr($str, 3);
